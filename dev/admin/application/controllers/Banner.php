<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Banner extends CI_Controller
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
	     $data['title']='banner view';
	     $data['menu']='banner';
	     $data['child_menu']='';
	     $data['banner']=$this->app_model->getAllList('banner',null,'id','DESC');
	     $this->load->view('admin/banner/manage-banner',$data);
   
	}

	public function add(){


		$data['title']='banner';
		$data['menu']='banner';
		$data['child_menu']='';
		$this->form_validation->set_rules('title','title','trim|required');
		$this->form_validation->set_error_delimiters('<div style="color:red;">', '</div>');
  
	
     	
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		
		//print_r($config); die;
		$this->load->library('upload', $config);

		if ($this->form_validation->run() ) {
//print_r($_FILES); die;
             if(!empty($_FILES['files']['name'][0])){

             	 $files = fileUpload("banner");
              $image = $files[0];

            $data=array(
    			'title' => $this->input->post('title'),
    			'description' => $this->input->post('description'),
    			'link' => $this->input->post('link'), 
    			'image' => $image
    		); 
    		
    		$q = $this->app_model->insert('banner',$data);
    		
    			if ($q==true) {
        		$this->session->set_flashdata('class', 'success');
        	    $this->session->set_flashdata('message', 'banner Add Successfully.');
        	    redirect('banner/add');
        		
        	} else {
        		$this->session->set_flashdata('class', 'danger');
        		$this->session->set_flashdata('message', 'banner Add Failed.');
        		redirect('banner/add');
        	}
    		
            }  
        } 
		$this->load->view('admin/banner/add-banner',$data);
	}

    public function edit(){
    	$id = $this->uri->segment(3);
    	$data['app_title']=$this->app_title;
    	$data['title']='banner Edit';
		$data['menu']='banner';
		$data['id'] = $id;
		$data['child_menu']='';
		$data['banner']= $this->app_model->get_special_details('banner',array('id'=>$id));
    	$this->load->view('admin/banner/edit-banner',$data);

    }

    public function update($id=null){

    	$id = $this->uri->segment(3);
    	$this->form_validation->set_rules('title','title','trim|required');

	//	$config['upload_path']   = FCPATH.'/api/assets/images/hall/'; 
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$this->load->library('upload', $config);
		 if(!empty($_FILES['files']['name'][0])){ 
             	 $files = fileUpload("banner"); 
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

    		
    		$q = $this->app_model->update('banner',$data,array('id'=>$id));
	    	if ($q==true) {
	    		$this->session->set_flashdata('class', 'success');
	    	    $this->session->set_flashdata('message', 'banner Update Successfully.');
	    	    redirect('banner/edit/'.$id);
	    		
	    	} else {
	    		$this->session->set_flashdata('class', 'danger');
	    		$this->session->set_flashdata('message', 'banner Update Failed.');
	    		redirect('banner/edit/'.$id);
	        }
	
		
		
	     
	     if($this->form_validation->run()){
	         $data=array(
	    			'title' => $this->input->post('title')
				);
          	$q = $this->app_model->update('banner',$data,array('id'=>$id));
          	if ($q==true) {
          		$this->session->set_flashdata('class', 'success');
	    	    $this->session->set_flashdata('message', 'banner Update Successfully.');
	    	    redirect('banner/edit/'.$id);
	    		
	    	} else {
	    		$this->session->set_flashdata('class', 'error');
	    		$this->session->set_flashdata('message', 'banner Update Failed.');
	    		redirect('banner/edit/'.$id);
	        }
    	}
     

	}





	 public function status($status,$id){

   		if ($status==1) {
   			$q = $this->app_model->update('banner',array('status'=>$status),array('id'=>$id));
   			$message='Active banner Successfully.';
   			$class='success';
   		} else {
   			$q = $this->app_model->update('banner',array('status'=>$status),array('id'=>$id));
   			$message='Block banner Successfully.';
   			$class='error';
   		}
   		if ($q==true) {
			    $this->session->set_flashdata('class', $class);
			    $this->session->set_flashdata('message', $message);
			    redirect('banner');
				
			} else {
				$this->session->set_flashdata('class', 'error');
				$this->session->set_flashdata('message', 'banner Status Change Failed.');
				redirect('banner');
		    }
     }



     public function delete($id){
     	$q = $this->app_model->delete('banner',array('id'=>$id));
	  	if ($q==true) {
		$this->session->set_flashdata('class', 'success');
		    $this->session->set_flashdata('message', 'banner Delete Successfully.');
		    redirect('banner');
			
		} else {
			$this->session->set_flashdata('class', 'error');
			$this->session->set_flashdata('message', 'banner Delete Failed.');
			redirect('banner');
	    }
   }





}


?>