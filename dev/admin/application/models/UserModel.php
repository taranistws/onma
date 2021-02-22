<?php
class UserModel extends CI_Model {

function __construct() {
    // Call the Model constructor
    parent:: __construct();
    $this->table = "users";
}

public function insert($data) {
    // save user data....
    unset($data->cpassword);
    $data->password = md5($data->password);
    $this->db->insert($this->table, $data);
    return $this->db->insert_id();
}

public function insert_save($data) {
    // save user data....
   
    $this->db->insert($this->table, $data);
    return $this->db->insert_id();
}



// user login 
public function login($data){
    $loginType = $data->loginType;
    $conditions = [];
    if($loginType == 'native'){
        $password = md5($data->password);
        $conditions = ['emailId'=>$data->emailId, 'password'=> $password];   
        $q = $this->db->where($conditions)->get($this->table);
    } else {        
        $conditions = ['oauth_provider'=> $data->oauth_provider, 'oauth_uid'=> $data->oauth_uid];
        $q = $this->db->where($conditions)->get($this->table);
        if(!$q->num_rows()){
            $this->db->insert($this->table, $data);
            $q = $this->db->where($conditions)->get($this->table);
        }
    }
	//echo $this->db->last_query();
    if(!$q->num_rows()){
        http_response_code(401);
        throw new Exception("Invalid Creadentials!", 1);
    }
	
    $user_details = $q->row_array();
    $jwtPayload = array( 'user_id'=> $user_details['id'], 'emailId'=> $user_details['emailId'], 'mobileNumber'=> $user_details['mobileNumber'], 'userType'=> $user_details['userType']);
    $token = $token = AUTHORIZATION::generateToken($jwtPayload);
    return [
        'user_id' => $user_details['id'],
        'userName' => $user_details['userName'],
        'firstName' => $user_details['firstName'],
        'lastName' => $user_details['lastName'],
        'emailId' => $user_details['emailId'],
        'mobileNumber'=>$user_details['mobileNumber'],
        'userType'=> $user_details['userType'],
        'token' => $token
    ];
}


// check old password
public function checkPassword($user_id, $oldPassword) {
    $q = $this->db->where(['id'=> $user_id, 'password'=> $oldPassword])->get($this->table);
    if($q->num_rows()){
        return true;
    } else{
        http_response_code(409);
        throw new Exception("Your old password Does not matched", 1);
        
    }
}


// get profile details
public function profile($user_id){
    $q = $this->db->select(['emailId', 'firstName','gender','lastName','mobileNumber','photoUrl','day', 'month', 'year'])->where('id', $user_id)->get($this->table);
    if($q->num_rows()){
        return $q->row();
    } else{
        return [];
    }
}


public function update($user_id, $data) {
    return $this->db->where('id', $user_id)->update($this->table, $data);
}

public function add_new_User_otp($data) {
    return $this->db->insert('users_otp', $data);
}


public function update_rows($table,$data,$where){
    	return $this->db->where($where)->update($table,$data);
    }
    
public function insert_id($table,$data){
    	$this->db->insert($table,$data);
    	return $this->db->insert_id();
    }
    
    
public function countByNumRow($table,$where){
       $this->db->select('*');
       $this->db->from($table);
       $this->db->where($where);
       $query = $this->db->get();
       return $query->num_rows();
    }
    
    
    public function get_special_details($table,$where){
       $this->db->select('*');
       $this->db->from($table);
       $this->db->where($where);
       $query = $this->db->get();
       return $query->row_array();
	}


// update user token
public function updateToken($data) {
    return $this->db->where('id', $data->user_id)->update($this->table, ['fcmToken'=>$data->fcmToken]);
}


// check mobile number
public function hasMobileUnique($mobileNumber){
    $q = $this->db->where('mobileNumber', $mobileNumber)->get($this->table);
    if($q->num_rows() > 0){
        http_response_code(200);
        throw new Exception("The mobile number already in used.", 200);
    }
    return true;
}

// check email id exists
public function hasEmailIdUnique($emailId){
    $q = $this->db->where('emailId', $emailId)->get($this->table);
    if($q->num_rows() > 0){
        http_response_code(409);
        throw new Exception("The Email ID already in used.", 409);
    }
    return true;
}

// check user exists or not
public function userExists($user_id) {
    $q = $this->db->where('id', $user_id)->get('users');
    if($q->num_rows() > 0){
       return $q->row_array();
    } 
    http_response_code(409);
    throw new Exception("User does not exixts!", 409);
}

// check user by email
public function emailExists($email_id) {
    $q = $this->db->where('emailId', $email_id)->get($this->table);
    if( $q->num_rows() > 0 ) {
        return $q->row_array();
    }
    http_response_code(409);
    throw new Exception("User does not exists!", 1);
    
}

// check user by email
public function mobileExists($mobileNumber) {
    $q = $this->db->where('mobileNumber	', $mobileNumber)->get($this->table);
    if( $q->num_rows() > 0 ) {
        return true;
    } else {
     return false;   
    }
   
    
}




public function getUserDetails($email){
    $q = $this->db->where('email', $email)->get($this->table);
    if($q->num_rows()){
        return $q->row_array();
    } else{
        return [];
    }
}



// check user email verified
public function checkEmailVerified($email) {
    $q = $this->db->where(['emailId'=> $email, 'email_verified'=> 1])->get('users');
    if($q->num_rows() > 0){
        return true;
    } else{
        return false;
    }
}

// verify email
public function verifyEmail($email) {
    $q = $this->db->where('emailId', $email)->update('users', ['email_verified'=>1]);
    return true;
}


public function deleteExpireOtp(){
    return $this->db->query("DELETE FROM otp WHERE `updated_at` < DATE_SUB(NOW(), INTERVAL 5 MINUTE)");
}

public function updateNewPassword($user, $data) {
    $password = md5($data->password);
    $id = $user->id;
    return $this->db->where('id', $id)->update($this->table, ['password'=> $password]);

}


public function get_totaluser(){
     $sql="select count(*) from users where status='1' and userType='user' and device_id!=''";

     $query = $this->db->query($sql);

        $total_row= $query->result_array();

       return  $total_row;


}

public function sendnotificationuser($i){
$limit=10;
$start_from = ($i-1) * $limit;  

 $sql="select device_id from users where status='1' and userType='user' and device_id!='' order by id desc limit ".$start_from." ,".$limit."";
$query = $this->db->query($sql);
return $total_row= $query->result_array();

}



}