<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Testimonials extends CI_Controller
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
	     $data['title']='testimonials view';
	     $data['menu']='testimonials';
	     $data['child_menu']='';
	     $data['testimonials']=$this->app_model->getAllList('testimonials',null,'id','DESC');
	     $this->load->view('admin/testimonials/manage-testimonials',$data);
   
	}

	public function add(){


		$data['title']='testimonials';
		$data['menu']='testimonials';
		$data['child_menu']='';
		$this->form_validation->set_rules('title','title','trim|required');
		$this->form_validation->set_error_delimiters('<div style="color:red;">', '</div>');
  
	
     	
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		
		//print_r($config); die;
		$this->load->library('upload', $config);

		if ($this->form_validation->run() ) {
//print_r($_FILES); die;
             if(!empty($_FILES['files']['name'][0])){

             	 $files = fileUpload("testimonials");
              $image = $files[0];

            $data=array(
    			'title' => $this->input->post('title'),
    			'description' => $this->input->post('description'),
    			'link' => $this->input->post('link'), 
    			'image' => $image
    		); 
    		
    		$q = $this->app_model->insert('testimonials',$data);
    		
    			if ($q==true) {
        		$this->session->set_flashdata('class', 'success');
        	    $this->session->set_flashdata('message', 'testimonials Add Successfully.');
        	    redirect('testimonials/add');
        		
        	} else {
        		$this->session->set_flashdata('class', 'danger');
        		$this->session->set_flashdata('message', 'testimonials Add Failed.');
        		redirect('testimonials/add');
        	}
    		
            }  
        } 
		$this->load->view('admin/testimonials/add-testimonials',$data);
	}

    public function edit(){
    	$id = $this->uri->segment(3);
    	$data['app_title']=$this->app_title;
    	$data['title']='testimonials Edit';
		$data['menu']='testimonials';
		$data['id'] = $id;
		$data['child_menu']='';
		$data['testimonials']= $this->app_model->get_special_details('testimonials',array('id'=>$id));
    	$this->load->view('admin/testimonials/edit-testimonials',$data);

    }

    public function update($id=null){

    	$id = $this->uri->segment(3);
    	$this->form_validation->set_rules('title','title','trim|required');

	//	$config['upload_path']   = FCPATH.'/api/assets/images/hall/'; 
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$this->load->library('upload', $config);
		 if(!empty($_FILES['files']['name'][0])){ 
             	 $files = fileUpload("testimonials"); 
             	  $image = $files[0];
              $data=array(
    			'title' => $this->input->post('title'),
    			'description' => $this->input->post('description'),
    			'link' => $this->input->post('link'), 
    			'image' => $image 
    			
    		);

          } else {

              $data=array(
    			'title' => $this->input->post('title'),
    			'description' => $this->input->post('description'),
    			'link' => $this->input->post('link'));
          }

    		
    		$q = $this->app_model->update('testimonials',$data,array('id'=>$id));
	    	if ($q==true) {
	    		$this->session->set_flashdata('class', 'success');
	    	    $this->session->set_flashdata('message', 'testimonials Update Successfully.');
	    	    redirect('testimonials/edit/'.$id);
	    		
	    	} else {
	    		$this->session->set_flashdata('class', 'danger');
	    		$this->session->set_flashdata('message', 'testimonials Update Failed.');
	    		redirect('testimonials/edit/'.$id);
	        }
	
		
		
	     
	     if($this->form_validation->run()){
	         $data=array(
	    			'title' => $this->input->post('title')
				);
          	$q = $this->app_model->update('testimonials',$data,array('id'=>$id));
          	if ($q==true) {
          		$this->session->set_flashdata('class', 'success');
	    	    $this->session->set_flashdata('message', 'testimonials Update Successfully.');
	    	    redirect('testimonials/edit/'.$id);
	    		
	    	} else {
	    		$this->session->set_flashdata('class', 'error');
	    		$this->session->set_flashdata('message', 'testimonials Update Failed.');
	    		redirect('testimonials/edit/'.$id);
	        }
    	}
     

	}





	 public function status($status,$id){

   		if ($status==1) {
   			$q = $this->app_model->update('testimonials',array('status'=>$status),array('id'=>$id));
   			$message='Active testimonials Successfully.';
   			$class='success';
   		} else {
   			$q = $this->app_model->update('testimonials',array('status'=>$status),array('id'=>$id));
   			$message='Block testimonials Successfully.';
   			$class='error';
   		}
   		if ($q==true) {
			    $this->session->set_flashdata('class', $class);
			    $this->session->set_flashdata('message', $message);
			    redirect('testimonials');
				
			} else {
				$this->session->set_flashdata('class', 'error');
				$this->session->set_flashdata('message', 'testimonials Status Change Failed.');
				redirect('testimonials');
		    }
     }



     public function delete($id){
     	$q = $this->app_model->delete('testimonials',array('id'=>$id));
	  	if ($q==true) {
		$this->session->set_flashdata('class', 'success');
		    $this->session->set_flashdata('message', 'testimonials Delete Successfully.');
		    redirect('testimonials');
			
		} else {
			$this->session->set_flashdata('class', 'error');
			$this->session->set_flashdata('message', 'testimonials Delete Failed.');
			redirect('testimonials');
	    }
   }





}


?>