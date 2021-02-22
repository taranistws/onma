<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->app_title="Users ";
		$this->load->model('UserModel');
		$this->load->model('app_model');
		if (empty($this->session->userdata('session_arr'))) {
			redirect('admin/login');
		}
		date_default_timezone_set("Asia/Kolkata");
		$this->load->helper('notify');

	}
public function index(){
		 $data['app_title']=$this->app_title;
	     $data['title']='User view';
	     $data['menu']='user';
	     $data['child_menu']='';
	     $data['user']=$this->app_model->getAllList('users',array('userType'=>'user'),'id','DESC');
	     $this->load->view('admin/user/manage-user',$data);
   
	}







public function sendnotificationsubmit(){

	$data['user']=$this->UserModel->get_totaluser();

	    if($data['user'][0]['count(*)']>0) {

	    	$total_records=$data['user'][0]['count(*)'];
            $limit=10;
           $total_pages = ceil($total_records / $limit);

           for ($i=1; $i<=$total_pages; $i++) { 
            $notificationsend=$this->UserModel->sendnotificationuser($i);
         foreach ($notificationsend as $notificationsend) {
         	$title=$this->input->post('title');
         $notificationdata  = $this->input->post('message'); 
   
        $data= pushnotificationsorder($notificationsend['device_id'],$title,$notificationdata); 
         } 
  

         }

	    } else {
	    	
	    }

redirect('admin/user/sendnotification');

}

public function sendnotification(){
		 $data['app_title']=$this->app_title;
	     $data['title']='User view';
	     $data['menu']='user';
	     $data['child_menu']='';

	    /* $data['user']=$this->UserModel->get_totaluser();

	    if($data['user'][0]['count(*)']>0) {

	    	$total_records=$data['user'][0]['count(*)'];
            $limit=10;
           $total_pages = ceil($total_records / $limit);

           for ($i=1; $i<=$total_pages; $i++) { 
            $notificationsend=$this->UserModel->sendnotificationuser($i);
         foreach ($notificationsend as $notificationsend) {
         	$title="test";
         	$notificationdata="test"; 
      //  $notificationsend11[]=$notificationsend['device_id']; 
        $data= pushnotificationsorder($notificationsend['device_id'],$title,$notificationdata); 
         } 
         }
	    } else {
	    	echo "no data found";
	    }*/


	     $this->load->view('admin/usernotification',$data);
   
	}



	public function add(){
		$data['title']='User';
		$data['menu']='user';
		$data['child_menu']='';
		$this->form_validation->set_rules('name','name','trim|required');
		$this->form_validation->set_rules('email','email','trim|required|valid_email|is_unique[registered_users.email]');
		
		$this->form_validation->set_error_delimiters('<div style="color:red;">', '</div>');

		$config['upload_path']   = './public/image_gallary/user/'; 
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		/*$config['max_size'] = 2000;
		$config['max_width'] = 1500;
		$config['max_height'] = 1500;*/
		$this->load->library('upload', $config);

        if($this->form_validation->run() && $this->upload->do_upload('file')){
        	$insertData=array(
    			'user_name' => $this->input->post('name'),
    			'email' => $this->input->post('email'),
    			'mobile' => $this->input->post('mobile'),
    			'profile_image' => $this->upload->data()['file_name'],
    			'status'=>'0'
    		);

        	$q = $this->app_model->insert('registered_users',$insertData);
        	if ($q==true) {
        		$this->session->set_flashdata('class', 'success');
        	    $this->session->set_flashdata('message', 'User Add Successfully.');
        	    redirect('admin/user/add');
        		
        	} else {
        		$this->session->set_flashdata('class', 'danger');
        		$this->session->set_flashdata('message', 'User Add Failed.');
        		redirect('admin/user/add');
        	}
        
        }

		$this->load->view('admin/user/add-user',$data);
	}

	 public function view(){
    	$id = $this->uri->segment(4);
    	$data['app_title']=$this->app_title;
    	$data['title']='User Edit';
		$data['menu']='user';
		$data['child_menu']='';
		$data['id'] = $id;
		$data['user']= $this->app_model->get_special_details('users',array('id'=>$id));
	
    	$this->load->view('admin/user/view-user',$data);
    }
    

    public function edit(){
    	$id = $this->uri->segment(4);
    	$data['app_title']=$this->app_title;
    	$data['title']='User Edit';
		$data['menu']='user';
		$data['id'] = $id;
		$data['child_menu']='';
		$data['user']= $this->app_model->get_special_details('users',array('id'=>$id));
    	$this->load->view('admin/user/edit-user',$data);
    }

    public function update($id=null){

    	$id = $this->uri->segment(4);
    	$this->form_validation->set_rules('mobile_number','mobile number','trim|required');
		$this->form_validation->set_error_delimiters('<div style="color:red;">', '</div>');

		$config['upload_path']   = './public/image_gallary/user/'; 
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$this->load->library('upload', $config);

		
		if ($this->upload->do_upload('file') ) {
    		$data=array(
    			'name' => $this->input->post('name'),
    			'mobile_number' => $this->input->post('mobile_number'),
    			'state' => $this->input->post('state'),
    			'city' => $this->input->post('city'),
    			'email' => $this->input->post('email'),
    			'address' => $this->input->post('address'),
    			'profile_image' => $this->upload->data()['file_name']
    			
    		);
    		$q = $this->app_model->update('users',$data,array('id'=>$id));
	    	if ($q==true) {
	    		$this->session->set_flashdata('class', 'success');
	    	    $this->session->set_flashdata('message', 'User Update Successfully.');
	    	    redirect('admin/user/edit/'.$id);
	    		
	    	} else {
	    		$this->session->set_flashdata('class', 'danger');
	    		$this->session->set_flashdata('message', 'User Update Failed.');
	    		redirect('admin/user/edit/'.$id);
	        }
		}
	     
	     if($this->form_validation->run()){
	         $data=array(
	    			'name' => $this->input->post('name'),
					'mobile_number' => $this->input->post('mobile_number'),
					'state' => $this->input->post('state'),
					'city' => $this->input->post('city'),
					'email' => $this->input->post('email'),
					'address' => $this->input->post('address')
				);
          	$q = $this->app_model->update('users',$data,array('id'=>$id));
          	if ($q==true) {
          		$this->session->set_flashdata('class', 'success');
	    	    $this->session->set_flashdata('message', 'User Update Successfully.');
	    	    redirect('admin/user/edit/'.$id);
	    		
	    	} else {
	    		$this->session->set_flashdata('class', 'error');
	    		$this->session->set_flashdata('message', 'User Update Failed.');
	    		redirect('admin/user/edit/'.$id);
	        }
    	}
     

	}

 


   public function status($status,$id){

   		if ($status==1) {
   			$q = $this->app_model->update('users',array('status'=>$status),array('id'=>$id));
   			$message='Active User Successfully.';
   			$class='success';
   		} else {
   			$q = $this->app_model->update('users',array('status'=>$status),array('id'=>$id));
   			$message='Block User Successfully.';
   			$class='error';
   		}
   		if ($q==true) {
			    $this->session->set_flashdata('class', $class);
			    $this->session->set_flashdata('message', $message);
			    redirect('admin/user');
				
			} else {
				$this->session->set_flashdata('class', 'error');
				$this->session->set_flashdata('message', 'User Status Change Failed.');
				redirect('admin/user');
		    }
     }

   public function today_status($status,$id){

   		if ($status==1) {
   			$q = $this->app_model->update('users',array('status'=>$status),array('id'=>$id));
   			$message='Active User Successfully.';
   			$class='success';
   		} else {
   			$q = $this->app_model->update('u',array('status'=>$status),array('id'=>$id));
   			$message='Block User Successfully.';
   			$class='error';
   		}
   		if ($q==true) {
			    $this->session->set_flashdata('class', $class);
			    $this->session->set_flashdata('message', $message);
			    redirect('admin/user/today_new_user');
				
			} else {
				$this->session->set_flashdata('class', 'error');
				$this->session->set_flashdata('message', 'User Status Change Failed.');
				redirect('admin/user/today_new_user');
		    }
     }

  public function today_delete($id){
   	$q = $this->app_model->delete('users',array('id'=>$id));
	  	if ($q==true) {
		$this->session->set_flashdata('class', 'success');
		    $this->session->set_flashdata('message', 'User Delete Successfully.');
		    redirect('admin/user/today_new_user');
			
		} else {
			$this->session->set_flashdata('class', 'error');
			$this->session->set_flashdata('message', 'User Delete Failed.');
			redirect('admin/user/today_new_user');
	    }
   }



     public function delete($id){
   	$q = $this->app_model->delete('users',array('id'=>$id));
	  	if ($q==true) {
		$this->session->set_flashdata('class', 'success');
		    $this->session->set_flashdata('message', 'User Delete Successfully.');
		    redirect('admin/user');
			
		} else {
			$this->session->set_flashdata('class', 'error');
			$this->session->set_flashdata('message', 'User Delete Failed.');
			redirect('admin/user');
	    }
   }



 public function today_view(){
    	$id = $this->uri->segment(4);
    	$data['app_title']=$this->app_title;
    	$data['title']='User Edit';
		$data['menu']='user';
		$data['child_menu']='';
		$data['id'] = $id;
		$data['user']= $this->app_model->get_special_details('users',array('id'=>$id));
		$data['vehicle']= $this->app_model->getResultById('users_vehicle',array('user_id'=>$id));
    	$this->load->view('admin/user/view-today-user',$data);
    }



    public function today_edit(){
    	$id = $this->uri->segment(4);
    	$data['app_title']=$this->app_title;
    	$data['title']='User Edit';
		$data['menu']='user';
		$data['id'] = $id;
		$data['child_menu']='';
		$data['user']= $this->app_model->get_special_details('users',array('id'=>$id));
    	$this->load->view('admin/user/edit-today-user',$data);
    }


    


     public function today_update($id=null){

    	$id = $this->uri->segment(4);
    	$this->form_validation->set_rules('mobile_number','mobile number','trim|required');
		$this->form_validation->set_error_delimiters('<div style="color:red;">', '</div>');

		$config['upload_path']   = './public/image_gallary/user/'; 
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$this->load->library('upload', $config);

		
		if ($this->upload->do_upload('file') ) {
    		$data=array(
    			'name' => $this->input->post('name'),
    			'mobile_number' => $this->input->post('mobile_number'),
    			'state' => $this->input->post('state'),
    			'city' => $this->input->post('city'),
    			'email' => $this->input->post('email'),
    			'address' => $this->input->post('address'),
    			'profile_image' => $this->upload->data()['file_name']
    			
    		);
    		$q = $this->app_model->update('users',$data,array('id'=>$id));
	    	if ($q==true) {
	    		$this->session->set_flashdata('class', 'success');
	    	    $this->session->set_flashdata('message', 'User Update Successfully.');
	    	    redirect('admin/user/today_edit/'.$id);
	    		
	    	} else {
	    		$this->session->set_flashdata('class', 'danger');
	    		$this->session->set_flashdata('message', 'User Update Failed.');
	    		redirect('admin/user/today_edit/'.$id);
	        }
		}
	     
	     if($this->form_validation->run()){
	         $data=array(
	    			'name' => $this->input->post('name'),
					'mobile_number' => $this->input->post('mobile_number'),
					'state' => $this->input->post('state'),
					'city' => $this->input->post('city'),
					'email' => $this->input->post('email'),
					'address' => $this->input->post('address')
				);
          	$q = $this->app_model->update('users',$data,array('id'=>$id));
          	if ($q==true) {
          		$this->session->set_flashdata('class', 'success');
	    	    $this->session->set_flashdata('message', 'User Update Successfully.');
	    	    redirect('admin/user/today_edit/'.$id);
	    		
	    	} else {
	    		$this->session->set_flashdata('class', 'error');
	    		$this->session->set_flashdata('message', 'User Update Failed.');
	    		redirect('admin/user/today_edit/'.$id);
	        }
    	}
     

	}



	



}


?>