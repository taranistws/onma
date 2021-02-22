<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @ajit kumar
 */
class Token 
{
	
	function __construct()
	{
		$this->CI = & get_instance();
		
	}

    public function create_token($mobile){
    	$token = md5($mobile.date('His'));
    	$this->CI->app_model->update('tbl_user',array('access_token'=>$token),array('mobile_number'=>$mobile));
    	return $token;
    }

    public function check_token(){
		 $token = $this->CI->input->get_request_header('token');
		 $user_id = $this->CI->input->get_request_header('userid');
		 $result = $this->CI->app_model->get_special_details('tbl_user',array('id'=>$user_id));
    	 
		 if ($result['access_token']!=Null) {
			if ($result['access_token']==$token) {
			    
               return $result;
            } else {
               return false;
            }
        }
    	
    }

     public function create_token_partner($email){
       // $token = md5($email.date('His'));
        $token = md5($email);
        $this->CI->app_model->update('tbl_partner',array('access_token'=>$token),array('first_contact_email'=>$email));
        return $token;
    }

    public function check_token_partner(){
         $token = $this->CI->input->get_request_header('token');
         $user_id = $this->CI->input->get_request_header('userid');
         $result = $this->CI->app_model->get_special_details('tbl_partner',array('id'=>$user_id));
         
         if ($result['access_token']!=Null) {
            if ($result['access_token']==$token) {
               return $result;
            } else {
               return false;
            }
        }
        
    }


  


}


?>