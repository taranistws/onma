<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
        date_default_timezone_set("Asia/Kolkata");
		$this->load->model('app_model');
        $this->app_title="php";

	}

  public function index(){
     $data['app_title']=$this->app_title;
     $data['title'] = 'Login';
     $this->form_validation->set_rules('email','Email','trim|required');
     $this->form_validation->set_rules('password','Password','trim|required');
     $this->form_validation->set_error_delimiters('<div style="color:red;">', '</div>');
    
    if ($this->form_validation->run()) {
        $email = $this->input->post('email');
        $password = $this->input->post('password');	

        $check = $this->app_model->countByNumRow('tbl_admin',array('email'=>$email,'password'=>md5($password)));
        if ($check >0 ) {
        	$data = $this->app_model->get_special_details('tbl_admin',array('email'=>$email,'password'=>md5($password)));
        	$session_arr=array('admin_id'=>$data['id'],'email'=>$data['email']);
        	$this->session->set_userdata('session_arr',$session_arr);
        	redirect('dashboard');
          
        }
        else{
        	$this->session->set_flashdata('class', 'danger');
        	$this->session->set_flashdata('message', 'Invalid login credentials.');

        }
	}
    
 $this->load->view('admin/login',$data);
   
  }

   public function logout(){
   	    
		$this->session->sess_destroy(); 
	    redirect('login'); 
	    
   }

}



?>