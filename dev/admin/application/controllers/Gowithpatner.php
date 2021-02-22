<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Gowithpatner extends CI_Controller
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
	     $data['title']='gowithpatner view';
	     $data['menu']='gowithpatner';
	     $data['child_menu']='';
	     $data['gowithpatner']=$this->app_model->getAllList('gowithpatner',null,'id','DESC');
	     $this->load->view('admin/gowithpatner/manage-gowithpatner',$data);
   
	}

	public function add(){


		$data['title']='gowithpatner';
		$data['menu']='gowithpatner';
		$data['child_menu']='';
		$this->form_validation->set_rules('link','link','trim|required');
		$this->form_validation->set_error_delimiters('<div style="color:red;">', '</div>');
  
	
     	
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		
		//print_r($config); die;
		$this->load->library('upload', $config);

		if ($this->form_validation->run() ) {
//print_r($_FILES); die;
             if(!empty($_FILES['files']['name'][0])){

             	 $files = fileUpload("gowithpatner");
              $image = $files[0];

            $data=array( 
            	'title' => $this->input->post('title'), 
    			'link' => $this->input->post('link'), 
    			'image' => $image
    		); 
    		
    		$q = $this->app_model->insert('gowithpatner',$data);
    		
    			if ($q==true) {
        		$this->session->set_flashdata('class', 'success');
        	    $this->session->set_flashdata('message', 'gowithpatner Add Successfully.');
        	    redirect('gowithpatner/add');
        		
        	} else {
        		$this->session->set_flashdata('class', 'danger');
        		$this->session->set_flashdata('message', 'gowithpatner Add Failed.');
        		redirect('gowithpatner/add');
        	}
    		
            }  
        } 
		$this->load->view('admin/gowithpatner/add-gowithpatner',$data);
	}

    public function edit(){
    	$id = $this->uri->segment(3);
    	$data['app_title']=$this->app_title;
    	$data['title']='gowithpatner Edit';
		$data['menu']='gowithpatner';
		$data['id'] = $id;
		$data['child_menu']='';
		$data['gowithpatner']= $this->app_model->get_special_details('gowithpatner',array('id'=>$id));
    	$this->load->view('admin/gowithpatner/edit-gowithpatner',$data);

    }

    public function update($id=null){

    	$id = $this->uri->segment(3);
    	$this->form_validation->set_rules('link','link','trim|required');

	//	$config['upload_path']   = FCPATH.'/api/assets/images/hall/'; 
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$this->load->library('upload', $config);
		 if(!empty($_FILES['files']['name'][0])){ 
             	 $files = fileUpload("gowithpatner"); 
             	  $image = $files[0];
              $data=array(
    		'title' => $this->input->post('title'), 
    			'link' => $this->input->post('link'), 
    			'image' => $image 
    			
    		);

          } else {

              $data=array(
    		'title' => $this->input->post('title'), 
    			'link' => $this->input->post('link'));
          }

    		
    		$q = $this->app_model->update('gowithpatner',$data,array('id'=>$id));
	    	if ($q==true) {
	    		$this->session->set_flashdata('class', 'success');
	    	    $this->session->set_flashdata('message', 'gowithpatner Update Successfully.');
	    	    redirect('gowithpatner/edit/'.$id);
	    		
	    	} else {
	    		$this->session->set_flashdata('class', 'danger');
	    		$this->session->set_flashdata('message', 'gowithpatner Update Failed.');
	    		redirect('gowithpatner/edit/'.$id);
	        }
	
		
		
	     
	     if($this->form_validation->run()){
	         $data=array(
	    			'title' => $this->input->post('title')
				);
          	$q = $this->app_model->update('gowithpatner',$data,array('id'=>$id));
          	if ($q==true) {
          		$this->session->set_flashdata('class', 'success');
	    	    $this->session->set_flashdata('message', 'gowithpatner Update Successfully.');
	    	    redirect('gowithpatner/edit/'.$id);
	    		
	    	} else {
	    		$this->session->set_flashdata('class', 'error');
	    		$this->session->set_flashdata('message', 'gowithpatner Update Failed.');
	    		redirect('gowithpatner/edit/'.$id);
	        }
    	}
     

	}





	 public function status($status,$id){

   		if ($status==1) {
   			$q = $this->app_model->update('gowithpatner',array('status'=>$status),array('id'=>$id));
   			$message='Active gowithpatner Successfully.';
   			$class='success';
   		} else {
   			$q = $this->app_model->update('gowithpatner',array('status'=>$status),array('id'=>$id));
   			$message='Block gowithpatner Successfully.';
   			$class='error';
   		}
   		if ($q==true) {
			    $this->session->set_flashdata('class', $class);
			    $this->session->set_flashdata('message', $message);
			    redirect('gowithpatner');
				
			} else {
				$this->session->set_flashdata('class', 'error');
				$this->session->set_flashdata('message', 'gowithpatner Status Change Failed.');
				redirect('gowithpatner');
		    }
     }



     public function delete($id){
     	$q = $this->app_model->delete('gowithpatner',array('id'=>$id));
	  	if ($q==true) {
		$this->session->set_flashdata('class', 'success');
		    $this->session->set_flashdata('message', 'gowithpatner Delete Successfully.');
		    redirect('gowithpatner');
			
		} else {
			$this->session->set_flashdata('class', 'error');
			$this->session->set_flashdata('message', 'gowithpatner Delete Failed.');
			redirect('gowithpatner');
	    }
   }





}


?>