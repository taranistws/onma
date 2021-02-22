<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Patner extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->app_title="find banquet";
		$this->load->model('app_model');
		if (empty($this->session->userdata('session_arr'))) {
			redirect('login');
		}
		date_default_timezone_set("Asia/Kolkata");
		$this->load->helper('notify');

	}

	public function index(){
		 $data['app_title']=$this->app_title;
	     $data['title']='Patner view';
	     $data['menu']='patner';
	     $data['child_menu']='';
	     $data['patner']=$this->app_model->getAllList('patner',null,'id','DESC');
	     $this->load->view('admin/patner/manage-patner',$data);
   
	}

	public function add(){


		$data['title']='patner';
		$data['menu']='patner';
		$data['child_menu']='';
		$this->form_validation->set_rules('link','link','trim|required');
		$this->form_validation->set_error_delimiters('<div style="color:red;">', '</div>');
  
	
     	
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		
		//print_r($config); die;
		$this->load->library('upload', $config);

		if ($this->form_validation->run() ) {
//print_r($_FILES); die;
             if(!empty($_FILES['files']['name'][0])){

             	 $files = fileUpload("patner");
              $image = $files[0];

            $data=array( 
    			'link' => $this->input->post('link'), 
    			'image' => $image
    		); 
    		
    		$q = $this->app_model->insert('patner',$data);
    		
    			if ($q==true) {
        		$this->session->set_flashdata('class', 'success');
        	    $this->session->set_flashdata('message', 'patner Add Successfully.');
        	    redirect('patner/add');
        		
        	} else {
        		$this->session->set_flashdata('class', 'danger');
        		$this->session->set_flashdata('message', 'patner Add Failed.');
        		redirect('patner/add');
        	}
    		
            }  
        } 
		$this->load->view('admin/patner/add-patner',$data);
	}

    public function edit(){
    	$id = $this->uri->segment(3);
    	$data['app_title']=$this->app_title;
    	$data['title']='patner Edit';
		$data['menu']='patner';
		$data['id'] = $id;
		$data['child_menu']='';
		$data['patner']= $this->app_model->get_special_details('patner',array('id'=>$id));
    	$this->load->view('admin/patner/edit-patner',$data);

    }

    public function update($id=null){

    	$id = $this->uri->segment(3);
    	$this->form_validation->set_rules('link','link','trim|required');

	//	$config['upload_path']   = FCPATH.'/api/assets/images/hall/'; 
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$this->load->library('upload', $config);
		 if(!empty($_FILES['files']['name'][0])){ 
             	 $files = fileUpload("patner"); 
             	  $image = $files[0];
              $data=array(
    		
    			'link' => $this->input->post('link'), 
    			'image' => $image 
    			
    		);

          } else {

              $data=array(
    		
    			'link' => $this->input->post('link'));
          }

    		
    		$q = $this->app_model->update('patner',$data,array('id'=>$id));
	    	if ($q==true) {
	    		$this->session->set_flashdata('class', 'success');
	    	    $this->session->set_flashdata('message', 'patner Update Successfully.');
	    	    redirect('patner/edit/'.$id);
	    		
	    	} else {
	    		$this->session->set_flashdata('class', 'danger');
	    		$this->session->set_flashdata('message', 'patner Update Failed.');
	    		redirect('patner/edit/'.$id);
	        }
	
		
		
	     
	     if($this->form_validation->run()){
	         $data=array(
	    			'title' => $this->input->post('title')
				);
          	$q = $this->app_model->update('patner',$data,array('id'=>$id));
          	if ($q==true) {
          		$this->session->set_flashdata('class', 'success');
	    	    $this->session->set_flashdata('message', 'patner Update Successfully.');
	    	    redirect('patner/edit/'.$id);
	    		
	    	} else {
	    		$this->session->set_flashdata('class', 'error');
	    		$this->session->set_flashdata('message', 'patner Update Failed.');
	    		redirect('patner/edit/'.$id);
	        }
    	}
     

	}





	 public function status($status,$id){

   		if ($status==1) {
   			$q = $this->app_model->update('patner',array('status'=>$status),array('id'=>$id));
   			$message='Active patner Successfully.';
   			$class='success';
   		} else {
   			$q = $this->app_model->update('patner',array('status'=>$status),array('id'=>$id));
   			$message='Block patner Successfully.';
   			$class='error';
   		}
   		if ($q==true) {
			    $this->session->set_flashdata('class', $class);
			    $this->session->set_flashdata('message', $message);
			    redirect('patner');
				
			} else {
				$this->session->set_flashdata('class', 'error');
				$this->session->set_flashdata('message', 'patner Status Change Failed.');
				redirect('patner');
		    }
     }



     public function delete($id){
     	$q = $this->app_model->delete('patner',array('id'=>$id));
	  	if ($q==true) {
		$this->session->set_flashdata('class', 'success');
		    $this->session->set_flashdata('message', 'patner Delete Successfully.');
		    redirect('patner');
			
		} else {
			$this->session->set_flashdata('class', 'error');
			$this->session->set_flashdata('message', 'patner Delete Failed.');
			redirect('patner');
	    }
   }





}


?>