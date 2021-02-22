<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');


function changeslug($slug){

    $replace = [
    '&lt;' => '', '&gt;' => '', '&#039;' => '', '&amp;' => '',
    '&quot;' => '', 'À' => 'A', 'Á' => 'A', 'Â' => 'A', 'Ã' => 'A', 'Ä' => 'Ae',
    '&Auml;' => 'A', 'Å' => 'A', 'Ā' => 'A', 'Ą' => 'A', 'Ă' => 'A', 'Æ' => 'Ae',
    'Ç' => 'C', 'Ć' => 'C', 'Č' => 'C', 'Ĉ' => 'C', 'Ċ' => 'C', 'Ď' => 'D', 'Đ' => 'D',
    'Ð' => 'D', 'È' => 'E', 'É' => 'E', 'Ê' => 'E', 'Ë' => 'E', 'Ē' => 'E',
    'Ę' => 'E', 'Ě' => 'E', 'Ĕ' => 'E', 'Ė' => 'E', 'Ĝ' => 'G', 'Ğ' => 'G',
    'Ġ' => 'G', 'Ģ' => 'G', 'Ĥ' => 'H', 'Ħ' => 'H', 'Ì' => 'I', 'Í' => 'I',
    'Î' => 'I', 'Ï' => 'I', 'Ī' => 'I', 'Ĩ' => 'I', 'Ĭ' => 'I', 'Į' => 'I',
    'İ' => 'I', 'Ĳ' => 'IJ', 'Ĵ' => 'J', 'Ķ' => 'K', 'Ł' => 'K', 'Ľ' => 'K',
    'Ĺ' => 'K', 'Ļ' => 'K', 'Ŀ' => 'K', 'Ñ' => 'N', 'Ń' => 'N', 'Ň' => 'N',
    'Ņ' => 'N', 'Ŋ' => 'N', 'Ò' => 'O', 'Ó' => 'O', 'Ô' => 'O', 'Õ' => 'O',
    'Ö' => 'Oe', '&Ouml;' => 'Oe', 'Ø' => 'O', 'Ō' => 'O', 'Ő' => 'O', 'Ŏ' => 'O',
    'Œ' => 'OE', 'Ŕ' => 'R', 'Ř' => 'R', 'Ŗ' => 'R', 'Ś' => 'S', 'Š' => 'S',
    'Ş' => 'S', 'Ŝ' => 'S', 'Ș' => 'S', 'Ť' => 'T', 'Ţ' => 'T', 'Ŧ' => 'T',
    'Ț' => 'T', 'Ù' => 'U', 'Ú' => 'U', 'Û' => 'U', 'Ü' => 'Ue', 'Ū' => 'U',
    '&Uuml;' => 'Ue', 'Ů' => 'U', 'Ű' => 'U', 'Ŭ' => 'U', 'Ũ' => 'U', 'Ų' => 'U',
    'Ŵ' => 'W', 'Ý' => 'Y', 'Ŷ' => 'Y', 'Ÿ' => 'Y', 'Ź' => 'Z', 'Ž' => 'Z',
    'Ż' => 'Z', 'Þ' => 'T', 'à' => 'a', 'á' => 'a', 'â' => 'a', 'ã' => 'a',
    'ä' => 'ae', '&auml;' => 'ae', 'å' => 'a', 'ā' => 'a', 'ą' => 'a', 'ă' => 'a',
    'æ' => 'ae', 'ç' => 'c', 'ć' => 'c', 'č' => 'c', 'ĉ' => 'c', 'ċ' => 'c',
    'ď' => 'd', 'đ' => 'd', 'ð' => 'd', 'è' => 'e', 'é' => 'e', 'ê' => 'e',
    'ë' => 'e', 'ē' => 'e', 'ę' => 'e', 'ě' => 'e', 'ĕ' => 'e', 'ė' => 'e',
    'ƒ' => 'f', 'ĝ' => 'g', 'ğ' => 'g', 'ġ' => 'g', 'ģ' => 'g', 'ĥ' => 'h',
    'ħ' => 'h', 'ì' => 'i', 'í' => 'i', 'î' => 'i', 'ï' => 'i', 'ī' => 'i',
    'ĩ' => 'i', 'ĭ' => 'i', 'į' => 'i', 'ı' => 'i', 'ĳ' => 'ij', 'ĵ' => 'j',
    'ķ' => 'k', 'ĸ' => 'k', 'ł' => 'l', 'ľ' => 'l', 'ĺ' => 'l', 'ļ' => 'l',
    'ŀ' => 'l', 'ñ' => 'n', 'ń' => 'n', 'ň' => 'n', 'ņ' => 'n', 'ŉ' => 'n',
    'ŋ' => 'n', 'ò' => 'o', 'ó' => 'o', 'ô' => 'o', 'õ' => 'o', 'ö' => 'oe',
    '&ouml;' => 'oe', 'ø' => 'o', 'ō' => 'o', 'ő' => 'o', 'ŏ' => 'o', 'œ' => 'oe',
    'ŕ' => 'r', 'ř' => 'r', 'ŗ' => 'r', 'š' => 's', 'ù' => 'u', 'ú' => 'u',
    'û' => 'u', 'ü' => 'ue', 'ū' => 'u', '&uuml;' => 'ue', 'ů' => 'u', 'ű' => 'u',
    'ŭ' => 'u', 'ũ' => 'u', 'ų' => 'u', 'ŵ' => 'w', 'ý' => 'y', 'ÿ' => 'y',
    'ŷ' => 'y', 'ž' => 'z', 'ż' => 'z', 'ź' => 'z', 'þ' => 't', 'ß' => 'ss',
    'ſ' => 'ss', 'ый' => 'iy', 'А' => 'A', 'Б' => 'B', 'В' => 'V', 'Г' => 'G',
    'Д' => 'D', 'Е' => 'E', 'Ё' => 'YO', 'Ж' => 'ZH', 'З' => 'Z', 'И' => 'I',
    'Й' => 'Y', 'К' => 'K', 'Л' => 'L', 'М' => 'M', 'Н' => 'N', 'О' => 'O',
    'П' => 'P', 'Р' => 'R', 'С' => 'S', 'Т' => 'T', 'У' => 'U', 'Ф' => 'F',
    'Х' => 'H', 'Ц' => 'C', 'Ч' => 'CH', 'Ш' => 'SH', 'Щ' => 'SCH', 'Ъ' => '',
    'Ы' => 'Y', 'Ь' => '', 'Э' => 'E', 'Ю' => 'YU', 'Я' => 'YA', 'а' => 'a',
    'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 'е' => 'e', 'ё' => 'yo',
    'ж' => 'zh', 'з' => 'z', 'и' => 'i', 'й' => 'y', 'к' => 'k', 'л' => 'l',
    'м' => 'm', 'н' => 'n', 'о' => 'o', 'п' => 'p', 'р' => 'r', 'с' => 's',
    'т' => 't', 'у' => 'u', 'ф' => 'f', 'х' => 'h', 'ц' => 'c', 'ч' => 'ch',
    'ш' => 'sh', 'щ' => 'sch', 'ъ' => '', 'ы' => 'y', 'ь' => '', 'э' => 'e',
    'ю' => 'yu', 'я' => 'ya'
];

return str_replace(array_keys($replace), $replace, $slug);  

}

 
        
        


          function variantImgImageUpload() {
            
        $CI =& get_instance();
            
        $fileCount = count($_FILES['header_logo']['name']);
        $uploadData = [];
        for($i = 0; $i < $fileCount; $i++){
            $_FILES['file']['name']     = $_FILES['header_logo']['name'][$i];
            $_FILES['file']['type']     = $_FILES['header_logo']['type'][$i];
            $_FILES['file']['tmp_name'] = $_FILES['header_logo']['tmp_name'][$i];
            $_FILES['file']['error']     = $_FILES['header_logo']['error'][$i];
            $_FILES['file']['size']     = $_FILES['header_logo']['size'][$i];
            
            $file_ext = pathinfo($_FILES['header_logo']['name'][$i], PATHINFO_EXTENSION);
            $fileName = time().'_'.generateRandomString(20).'.'.$file_ext;
            // File upload configuration
            $uploadPath = '././././api/assets/images/product/';
            $config['upload_path'] = $uploadPath;
            $config['allowed_types'] = '*';
            $config['file_name'] = $fileName;
            // Load and initialize upload library
            $CI->load->library('upload', $config);
            $CI->upload->initialize($config);
            // Upload file to server
            
                if($CI->upload->do_upload('file')){
                    // Uploaded file data
                    $fileData = $CI->upload->data();

$file_url = $CI->s3_upload->upload_file('./././api/assets/images/product/'.$fileName);  
 $uploadData[] = $file_url;

                   // $uploadData[] = $fileName;
                    // $uploadData[$i]['uploaded_on'] = date("Y-m-d H:i:s");
                } else{
                    $error = array('error' => $CI->upload->display_errors());
                    print_r($error); die;
                }
            }
          return $uploadData;
        }


        
          function productImageUpload() {
            
        $CI =& get_instance();
            
        $fileCount = count($_FILES['files']['name']);
        $uploadData = [];
        for($i = 0; $i < $fileCount; $i++){
            $_FILES['file']['name']     = $_FILES['files']['name'][$i];
            $_FILES['file']['type']     = $_FILES['files']['type'][$i];
            $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
            $_FILES['file']['error']     = $_FILES['files']['error'][$i];
            $_FILES['file']['size']     = $_FILES['files']['size'][$i];
            
            $file_ext = pathinfo($_FILES['files']['name'][$i], PATHINFO_EXTENSION);
            $fileName = time().'_'.generateRandomString(20).'.'.$file_ext;
            // File upload configuration
            //$uploadPath = '././assets/images/product/';
            $uploadPath = './././api/assets/images/product/';
            $config['upload_path'] = $uploadPath;
            $config['allowed_types'] = '*';
            $config['file_name'] = $fileName;
            // Load and initialize upload library
            $CI->load->library('upload', $config);
            $CI->upload->initialize($config);
            // Upload file to server
            
                if($CI->upload->do_upload('file')){
                    // Uploaded file data
                    $fileData = $CI->upload->data();
                    

               $file_url = $CI->s3_upload->upload_file('./././api/assets/images/product/'.$fileName);  

               $uploadData[] = $file_url;

                    // $uploadData[$i]['uploaded_on'] = date("Y-m-d H:i:s");
                } else{
                    $error = array('error' => $CI->upload->display_errors());
                    print_r($error); die;
                }
            }
          return $uploadData;
        }


 function sendNotificationUser($device_id, $title, $message)
    {
        $url_fcm = "https://fcm.googleapis.com/fcm/send";
        $server_key = "AAAAHIJ4VeA:APA91bHsRsio5gCnVOz-rkJFAhHdqCAJE8bx8aVdPaKxncwir2Cc5H6j7uCBxV6vYIbdDAKew1jhsm56EtXYhxZkWQpU0AYv4JfpdEEpgJ0Mqabc_H2lYMTtIJecaGRobbQdPOgqtbyr";
        $header = array('Authorization: key='.$server_key, 'Content-Type: application/json');
        /*$field = array('to'=>$device_id,
            'priority'=>'high',
            'data'=>array('title'=>$title, 'message'=>$message)
        );*/
        $msg = array
        (
            'message'   => $message,
            'title'     => $title
        );
        $fields = array
        (
            'registration_ids'  => $device_id,
            'priority'=>'high',
            'data'          => $msg
        );
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url_fcm);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
        $result_curl = curl_exec($ch);
        
        print_r( $result_curl);
        if ($result_curl === FALSE) 
        {
            die('Curl failed: ' . curl_error($ch));
        }
        curl_close($ch);
    }


function pushnotificationsorder($device_id,$title,$message){

    $id     = $device_id;
    $url    = 'https://fcm.googleapis.com/fcm/send';
    $fields = array(
      'to' => $id,
      'notification' => array(
        "body" => $message,
        "title" => $title,
        "category" => "findbanquet",
        "icon" => "icon",
        "sound" => "default"
      ),
      
      'data' => array(
        "body" => $message,
        "vibrate" => "true"
      )
    );
    
    $fields  = json_encode($fields);
    $headers = array(
      'Authorization: key=' . "AAAAHIJ4VeA:APA91bHsRsio5gCnVOz-rkJFAhHdqCAJE8bx8aVdPaKxncwir2Cc5H6j7uCBxV6vYIbdDAKew1jhsm56EtXYhxZkWQpU0AYv4JfpdEEpgJ0Mqabc_H2lYMTtIJecaGRobbQdPOgqtbyr",
      'Content-Type: application/json'
    );
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
    $result = curl_exec($ch);


}



   function response2($msg, $status, $data, $err=null) {



            $res = [

                'message'=> $msg,

                'status'=> $status,

                'data'=> $data

            ];

            if($err != null){

                $res['errors'] = $err;

            }



            echo json_encode($res);

        }


if (! function_exists('generate_otp')){
    function generate_otp(){
        $characters = '0123456789';
        $charactersLength = strlen($characters);
        $randomString = '';
            for ($i = 0; $i < 4; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
        if(strlen($randomString)==4){
            return $randomString;
        }else{
            return generate_otp();
        }

    }
}

if (! function_exists('generateRandomString')){
    function generateRandomString($length=8){
        $randomletter = substr(str_shuffle("abcdefghijklmnopqrstuvwxyz1234567890"), 0, $length);
        return strtoupper($randomletter);
  }
}


if(! function_exists('formate_date')){
    function formate_date($date){
        return  date("d, M Y g:s a", strtotime($date));
    }
}

if(! function_exists('authorization')){
    function authorization($requestmethod){
        if (strtolower($requestmethod)=='post') {
            return true;
        } else {
            return false;
        }
    }
}


 if (! function_exists('isvalidMethodType')) {
    function isvalidMethodType($requestMethod, $neededMethod) {
            if($requestMethod == $neededMethod){
                return true;
            }else{
                return false;
            }
        }
} 

if (! function_exists('postdata')){
    function postdata($data){
            if(!empty($data)){
                foreach($data as $key=>$value) {
                    if($value != "" || $value != null){
                        $_POST[$key] = $value;
                    }
                }
            }
        }
}






if(! function_exists('fileUpload')){
        function fileUpload($path) {
            $fileCount = count($_FILES['files']['name']);
            $CI =& get_instance();
            $uploadData = [];
            for($i = 0; $i < $fileCount; $i++){
                $_FILES['file']['name']     = $_FILES['files']['name'][$i];
                $_FILES['file']['type']     = $_FILES['files']['type'][$i];
                $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
                $_FILES['file']['error']     = $_FILES['files']['error'][$i];
                $_FILES['file']['size']     = $_FILES['files']['size'][$i];
                
                $file_ext = pathinfo($_FILES['files']['name'][$i], PATHINFO_EXTENSION);
                $fileName = time().'_'.generateRandomString(5).'.'.$file_ext;
                // File upload configuration
                $uploadPath = './public/image_gallary/'.$path.'/';
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = '*';
                $config['file_name'] = $fileName;
                // Load and initialize upload library
                $CI->load->library('upload', $config);
                $CI->upload->initialize($config);
               
                if($CI->upload->do_upload('file')){
                    // Uploaded file data
                    $fileData = $CI->upload->data();
                    $uploadData[] = base_url().'public/image_gallary/'.$path.'/'.$fileName;
                } else{
                    return [];
                    $error = array('error' => $CI->upload->display_errors());
                    print_r($error); die;
                }
            }
            
            return $uploadData;
            // print_r($uploadData); die;
        }
        
        
        function getErrors($errors){
            $CI =& get_instance();
            return $CI->form_validation->error_array();
        }
    

}






if (!function_exists('response')){
      function response($msg, $status, $data, $httpcode) {
            $header = json_encode(response_code($httpcode),true);
            header("code:".$header);
            $res = [
                'message'=> $msg,
                'status'=> $status,
                'data'=> $data
            ];
            
            echo json_encode($res);
        }
}

if (!function_exists('response_code')) {
        function response_code($code = NULL) {
                $error=array(
                        100=> array('code'=>100,'message'=>'Continue'),
                        200 =>array('code'=>200,'message'=>'OK'),
                        201=> array('code'=>201,'message'=>'Created'),
                        202 =>array('code'=>202,'message'=>'Accepted'),
                        203=> array('code'=>203,'message'=>'Non-Authoritative Information'),
                        204 =>array('code'=>204,'message'=>'No Content'),
                        205=> array('code'=>205,'message'=>'Reset Content'),
                        206 =>array('code'=>206,'message'=>'Partial Content'),
                        300=> array('code'=>300,'message'=>'Multiple Choices'),
                        301 =>array('code'=>301,'message'=>'Moved Permanently'),
                        302=> array('code'=>302,'message'=>'Moved Temporarily'),
                        303 =>array('code'=>303,'message'=>'See Other'),
                        304=> array('code'=>304,'message'=>'Not Modified'),
                        305 =>array('code'=>305,'message'=>'Use Proxy'),
                        400=> array('code'=>400,'message'=>'Bad Request'),
                        401 =>array('code'=>401,'message'=>'Unauthorized'),
                        402=> array('code'=>404,'message'=>'Payment Required'),
                        403 =>array('code'=>403,'message'=>'Forbidden'),
                        404 => array('code'=>404,'message'=>'Not Found'),
                        405 => array('code'=>405,'message'=>'Method Not Allowed'),
                        406 => array('code'=>406,'message'=>'Not Acceptable'),
                        407 => array('code'=>407,'message'=>'Proxy Authentication Required'),
                        408 =>array('code'=>408,'message'=>'Request Time-out'),
                        409 => array('code'=>409,'message'=>'Conflict'),
                        410 => array('code'=>410,'message'=>'Gone'),
                        411 =>array('code'=>411,'message'=>'Length Required'),
                        412 =>array('code'=>412,'message'=>'Precondition Failed'),
                        413 =>array('code'=>413,'message'=>'Request Entity Too Large'),
                        414=> array('code'=>414,'message'=>'Request-URI Too Large'),
                        415 =>array('code'=>415,'message'=>'Unsupported Media Type'),
                        500=>array('code'=>500,'message'=>'Internal Server Error'),
                        501=> array('code'=>501,'message'=>'Not Implemented'),
                        502=> array('code'=>502,'message'=>'Bad Gateway'),
                        503=>array('code'=>503,'message'=>'Service Unavailable'),
                        504=>array('code'=>504,'message'=>'Gateway Time-out'),
                        505=>array('code'=>505,'message'=>'HTTP Version not supported')
                    );
                    
                    if(array_key_exists($code,$error)){
                        return $error[$code];
                    }else{
                        return $error[$code] = 'Unknown http status code';
                    }
        
        }
    }
    
    
    function send_massage($mobile, $otp) {
            $curl = curl_init();
            curl_setopt_array($curl, array(
            CURLOPT_URL => "http://control.msg91.com/api/sendotp.php?authkey=292857AMObjkpPymGV5d71f88e&otp=$otp&sender=MEDIAL&mobile=$mobile",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_SSL_VERIFYPEER => 0,
            ));
            $response = curl_exec($curl);
            $err = curl_error($curl);
            curl_close($curl);
            if ($err) {
            return false;
            } else {
                return true;
            }
        }
        
        function send_push($device_id,$message, $title) {
            $url = 'https://fcm.googleapis.com/fcm/send';
            $api_key = 'AAAAjna0f50:APA91bFUiJ8-Bnm_6ceivXz1dZkNado05BtjPIobr0Y1FeUUnaqTKIxje1fvrgrJZAA86BRFe3uiUT8nI_pUc0hauKOWaVpm7qtzdfKcpiZystxW8y9ep5e4igeczzNR0Mh8XjBPqPIP';
                        
            $fields = array (
                'registration_ids' => array (
                        $device_id
                ),
                'data' => array (
                        "body" => $message,
                        "title"=> $title
                )
            );
            //header includes Content type and api key
            $headers = array(
                'Content-Type:application/json',
                'Authorization:key='.$api_key
            );
                        
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
            $result = curl_exec($ch);
            if ($result === FALSE) {
                die('FCM Send Error: ' . curl_error($ch));
            }
            curl_close($ch);
            return $result;
        }

        function saveNotification($sender_id,$receiver_id, $device_token, $title, $message ) {
            $CI =& get_instance();
            $data = [
                'sender_id'=> $sender_id,
                'reciever_id'=> $receiver_id,
                'title'=> $title,
                'message'=> $message
            ];
            $CI->db->insert('notifications', $data);
            send_push($device_token, $message, $title);
        }

    function getForgotTemplate($user_name, $password) {
        return '<html> 
            <head>
                <title>Forgot Password</title>
            </head>
          <section style="background: #fafafa; margin: 0 auto; padding: 30px 10%;">
          <div class="image-holder" style="margin: 10px auto; margin-bottom: 30px; text-align: center; width: 167px;"><img src="http://demosite7.com/servicekar/public/image_gallary/ServiceKarLogo.jpg" height="200" width="200"/>
          <h3>ServiceKar</h3>
          </div>
          <h4>Hi '.$user_name.'</h4>
          <p>You recently requested to reset your admin password <strong>'.$password.'</strong>. </p>
          <p>Thanks. <br/><b>ServiceKar Team.</b></p>
          </section>
          </html>';
        }

    function supportTemplate($name) {
        return '<html> 
            <head>
                <title>ServiceKar</title>
            </head>
          <section style="background: #fafafa; margin: 0 auto; padding: 30px 10%;">
          <div class="image-holder" style="margin: 10px auto; margin-bottom: 30px; text-align: center; width: 167px;"><img src="http://demosite7.com/servicekar/public/image_gallary/ServiceKarLogo.jpg" height="200" width="200"/>
          <h3>ServiceKar</h3>
          </div>
          <h4>Hi '.$name.'</h4>
          <p>Thank you for requesting us. we will contact soon........</p>
          <p>Thanks. <br/><b>ServiceKar Team.</b></p>
          </section>
          </html>';
        }



    function sendEmail($to, $subject, $body){
            $config['charset'] = 'iso-8859-1';
            $config['wordwrap'] = TRUE;
            $config['mailtype'] = 'html';
            $CI =& get_instance();
            $CI->email->initialize($config);
            $CI->email->from('info@demo17.com', 'findbanquet');
            $CI->email->to($to);
            $CI->email->subject($subject);
            $CI->email->message($body);
            if($CI->email->send()){
              return true;
            }
            throw new Exception("Something went wrong.", 1);
        }


    function send_push_partner($device_id,$message, $title) {
            $url = 'https://fcm.googleapis.com/fcm/send';
            $api_key = 'AAAAHNoHgAM:APA91bHz4jWeMMWbBO1Zeob6_9oTTtXImWt6ItUFF2WpWchzIHRbb1S-htROgHWMaYThw6a8_xZFdPVzMvO7vqrOjyp4kOBT8DrpwZabL984v5ozMYc_I0mJffCR1Y5AyBgwwXUy2vWb';
                        
            $fields = array (
                'registration_ids' => array (
                        $device_id
                ),
                'data' => array (
                        "body" => $message,
                        "title"=> $title
                )
            );
            //header includes Content type and api key
            $headers = array(
                'Content-Type:application/json',
                'Authorization:key='.$api_key
            );
                        
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
            $result = curl_exec($ch);
            if ($result === FALSE) {
                die('FCM Send Error: ' . curl_error($ch));
            }
            curl_close($ch);
            return $result;
        }

        // customer push notification set
        function send_push_customer($device_id,$message, $title) {
            $url = 'https://fcm.googleapis.com/fcm/send';
            $api_key = 'AAAAjna0f50:APA91bFUiJ8-Bnm_6ceivXz1dZkNado05BtjPIobr0Y1FeUUnaqTKIxje1fvrgrJZAA86BRFe3uiUT8nI_pUc0hauKOWaVpm7qtzdfKcpiZystxW8y9ep5e4igeczzNR0Mh8XjBPqPIP';
                        
            $fields = array (
                'registration_ids' => array (
                        $device_id
                ),
                'data' => array (
                        "body" => $message,
                        "title"=> $title
                )
            );
            //header includes Content type and api key
            $headers = array(
                'Content-Type:application/json',
                'Authorization:key='.$api_key
            );
                        
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
            $result = curl_exec($ch);
            if ($result === FALSE) {
                die('FCM Send Error: ' . curl_error($ch));
            }
            curl_close($ch);
            return $result;
        }



  function customer_wallet($customer_id){
     $ci =& get_instance();
     $trans = $ci->db->where(['customer_id'=>$customer_id])->order_by('id','DESC')->get('custom_transaction')->result_array();
     $final_amoun=0;
     foreach($trans as  $trans) {
      $final_amoun=$final_amoun+$trans['final_amount'];  
     }
     
    return  $trans['final_amount']=$final_amoun;

  }


function permission(){
    $CI =& get_instance();
    $session_arr = $CI->session->userdata('session_arr');
    $per = $CI->db->select('permission')->where('id',$session_arr['admin_id'])->get('tbl_admin')->row_array();
    return $ArrPer = json_decode($per['permission']);
    
}



function vendor_permission(){
    $CI =& get_instance();
    $session_vendor = $CI->session->userdata('session_vendor');
    $per = $CI->db->select('*')->where('user_user_id',$session_vendor['user_id'])->order_by('id', 'desc')->limit('1')->get('payment_history')->result_array();

    if($per){
    return $per[0]; ///= json_decode($per);
    } else {
    false;
}
}

        // validate token

        function authenticateUser(){

            $CI =& get_instance();

            $token = $CI->input->get_request_header('token');

            $user = AUTHORIZATION::validateToken($token);

            if(!$user)

                throw new Exception("authentication failed", 1);

            return $user;

        }
        
        
        
          function getServiceImage($serviceId){
     $ci =& get_instance();
     $trans = $ci->db->where(['serviceId'=>$serviceId])->order_by('id','DESC')->get('service_images')->row_array();
    
  return $trans['image'];
  }
       


      
          function getHallImage($hallId){
     $ci =& get_instance();
     $trans = $ci->db->where(['hallId'=>$hallId])->order_by('id','DESC')->get('hall_images')->row_array();
    
  return $trans['image'];
  }
  
        function getProductImage($productId){
     $ci =& get_instance();
     $trans = $ci->db->where(['productId'=>$productId])->order_by('id','DESC')->limit(1)->get('product_images')->row_array();
    
  return $trans['image'];
  }
  
     
     

         


    function rest_get_api($url,$token="") {
           $curl = curl_init();
    curl_setopt_array($curl, array(
  CURLOPT_URL => $url,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
      
    "token: $token",
    "Content-Type: text/plain",
  ),
));
          $response = curl_exec($curl);
            
            if ($response === FALSE) {
                die('Error: ' . curl_error($curl));
            }
            curl_close($curl);
            $result = json_decode($response,true);
            return  $result;
   }

 function rest_post_api($url,$data,$token="") {
     
  $curl = curl_init();

  curl_setopt_array($curl, array(
  CURLOPT_URL => $url,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS =>json_encode($data),
  CURLOPT_HTTPHEADER => array(
   "token: $token",
    "Content-Type: text/plain",
  ),
   ));

       $response = curl_exec($curl);
            
            if ($response === FALSE) {
                die('Error: ' . curl_error($curl));
            }
            curl_close($curl);
            $result = json_decode($response,true);
            return  $result;
   }
   
   
   function get_tiny_url($url)  {  
    $ch = curl_init();  
    $timeout = 5;  
    curl_setopt($ch,CURLOPT_URL,'http://tinyurl.com/api-create.php?url='.$url);  
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);  
    curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,$timeout);  
    $data = curl_exec($ch);  
    curl_close($ch);  
    return $data;  
}


function star_rating($rating)
{
    $rating_round = round($rating * 2) / 2;
    if ($rating_round <= 0.5 && $rating_round > 0) {
        return '<i class="fa fa-star-half-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i>';
    }
    if ($rating_round <= 1 && $rating_round > 0.5) {
        return '<i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i>';
    }
    if ($rating_round <= 1.5 && $rating_round > 1) {
        return '<i class="fa fa-star"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i>';
    }
    if ($rating_round <= 2 && $rating_round > 1.5) {
        return '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i>';
    }
    if ($rating_round <= 2.5 && $rating_round > 2) {
        return '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i>';
    }
    if ($rating_round <= 3 && $rating_round > 2.5) {
        return '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i>';
    }
    if ($rating_round <= 3.5 && $rating_round > 3) {
        return '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star-o"></i>';
    }
    if ($rating_round <= 4 && $rating_round > 3.5) {
        return '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i>';
    }
    if ($rating_round <= 4.5 && $rating_round > 4) {
        return '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i>';
    }
    if ($rating_round <= 5 && $rating_round > 4.5) {
        return '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>';
    }
    
    
    function myurlencode($url)
    {
        return urlencode(str_replace(" ", "-", $url));
    }
    
    function myurldecode($url)
    {
        return urlencode(str_replace("-", " ", $url));
    }
    
    
}
?>