<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Cms extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->app_title="CMS";
		$this->load->model('app_model');
		if (empty($this->session->userdata('session_arr'))) {
			redirect('login');
		}
    	$this->load->library('Slug');
		date_default_timezone_set("Asia/Kolkata");
		$this->load->helper('notify');

	}

	public function index(){
		 $data['app_title']=$this->app_title;
	     $data['title']='CMS Page view';
	     $data['menu']='cms';
	     $data['child_menu']='';
	     $data['cms_pages']=$this->app_model->getAllList('cms_pages',array('type'=>'page'),'id','DESC');
	     $this->load->view('admin/cms/manage-cms',$data);
   
	}

	public function add(){
	    
		$data['title']='cms';
		$data['menu']='cms';
		$data['child_menu']='';
		$this->form_validation->set_rules('name','name number','trim|required');
		$this->form_validation->set_error_delimiters('<div style="color:red;">', '</div>');
		
			if ($this->form_validation->run() ) {
        $slug_name =  $this->slug->create_unique_slug($this->input->post('name'), 'cms_pages');
        
 $slug_name=changeslug($slug_name);
	
 if(!empty($_FILES['files']['name'][0])){
               $files = fileUpload("pages");
              $image = $files[0];
           }else{
               $image = "";
           }


	


         $data=array(
    			'name' => $this->input->post('name'),
    			'description' => $this->input->post('description'),
    			'meta_title' => $this->input->post('meta_title'),
    			'meta_tags' => $this->input->post('meta_tags'),
    			'slug'=>   $slug_name,
    			'image' => $image,
    			'meta_description' => $this->input->post('meta_description')
    			
    		); 

        	$q = $this->app_model->insert('cms_pages',$data);
        	if ($q==true) {
        		$this->session->set_flashdata('class', 'success');
        	    $this->session->set_flashdata('message', 'CMS Page Add Successfully.');
        	    redirect('cms/add');
        		
        	} else {
        		$this->session->set_flashdata('class', 'danger');
        		$this->session->set_flashdata('message', 'CMS Page Add Failed.');
        		redirect('add');
        }
        
			}

		$this->load->view('admin/cms/add-cms',$data);
	}

	

    public function edit(){
    	$id = $this->uri->segment(3);
    	$data['app_title']=$this->app_title;
    	$data['title']='cms Edit';
		$data['menu']='cms';
		$data['id'] = $id;
		$data['child_menu']='';
		$data['cms']= $this->app_model->get_special_details('cms_pages',array('id'=>$id));
    	$this->load->view('admin/cms/edit-cms',$data);

    }

    public function update($id=null){

    	$id = $this->uri->segment(3);
    	$this->form_validation->set_rules('name','name number','trim|required');

	if ($this->form_validation->run() ) {


 if(!empty($_FILES['files']['name'][0])){
               $files = fileUpload("pages");
              $image = $files[0];

               $data=array(
    			'name' => $this->input->post('name'),
    			'description' => $this->input->post('description'),
    			'meta_title' => $this->input->post('meta_title'),
    			'meta_tags' => $this->input->post('meta_tags'),
    			'image' => $image,
    			'meta_description' => $this->input->post('meta_description')
    			
    		); 

           }else{

               $data=array(
    			'name' => $this->input->post('name'),
    			'description' => $this->input->post('description'),
    			'meta_title' => $this->input->post('meta_title'),
    			'meta_tags' => $this->input->post('meta_tags'),
    			'meta_description' => $this->input->post('meta_description')
    			
    		); 
           }


    		
    		$q = $this->app_model->update('cms_pages',$data,array('id'=>$id));
	    	if ($q==true) {
	    		$this->session->set_flashdata('class', 'success');
	    	    $this->session->set_flashdata('message', 'cms Update Successfully.');
	    	    redirect('cms/edit/'.$id);
	    		
	    	} else {
	    		$this->session->set_flashdata('class', 'danger');
	    		$this->session->set_flashdata('message', 'cms Update Failed.');
	    		redirect('cms/edit/'.$id);
	        
		}
	} else {
	    
	   redirect('cms/edit/'.$id); 
	}
	     
	}

	 public function status($status,$id){

   		if ($status==1) {
   			$q = $this->app_model->update('cms_pages',array('status'=>$status),array('id'=>$id));
   			$message='Active cms Successfully.';
   			$class='success';
   		} else {
   			$q = $this->app_model->update('cms_pages',array('status'=>$status),array('id'=>$id));
   			$message='Block cms Successfully.';
   			$class='error';
   		}
   		if ($q==true) {
			    $this->session->set_flashdata('class', $class);
			    $this->session->set_flashdata('message', $message);
			    redirect('cms');
				
			} else {
				$this->session->set_flashdata('class', 'error');
				$this->session->set_flashdata('message', 'cms Status Change Failed.');
				redirect('cms');
		    }
     }



     public function delete($id){
   	$q = $this->app_model->delete('cms_pages',array('id'=>$id));
	  	if ($q==true) {
		$this->session->set_flashdata('class', 'success');
		    $this->session->set_flashdata('message', 'pages Delete Successfully.');
		    redirect('cms');
			
		} else {
			$this->session->set_flashdata('class', 'error');
			$this->session->set_flashdata('message', 'pages Delete Failed.');
			redirect('cms');
	    }
   }





}


?>