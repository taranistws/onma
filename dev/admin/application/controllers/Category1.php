<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Category extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->app_title="Category";
		$this->load->model('app_model');
		if (empty($this->session->userdata('session_arr'))) {
			redirect('login');
		}
		date_default_timezone_set("Asia/Kolkata");
		$this->load->helper('notify');

	}

	public function index(){
		 $data['app_title']=$this->app_title;
	     $data['title']='Category view';
	     $data['menu']='category';
	     $data['child_menu']='';
	     $data['categories']=$this->app_model->getAllList('categories',null,'id','DESC');
	     $this->load->view('admin/categories/manage-categories',$data);
   
	}

	public function add(){

		$data['title']='category';
		$data['menu']='category';
		$data['child_menu']='';
		$this->form_validation->set_rules('name','name number','trim|required');
		$this->form_validation->set_error_delimiters('<div style="color:red;">', '</div>');
  
		
	    $config['upload_path']   = FCPATH.'/api/assets/images/hall/'; 
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$this->load->library('upload', $config);

		if ($this->form_validation->run() ) {

        if($this->upload->do_upload('file')) {
        $data=array(
    			'name' => $this->input->post('name'),
    			'image' => $this->upload->data()['file_name'],
    			'description' => $this->input->post('description'),
    			'meta_title' => $this->input->post('meta_title'),
    			'meta_tags' => $this->input->post('meta_tags'),
    			'meta_description' => $this->input->post('meta_description'),
    			
    		); 
          } else {
        	$data=array(
    			'name' => $this->input->post('name'),
    			'description' => $this->input->post('description'),
    			'meta_title' => $this->input->post('meta_title'),
    			'meta_tags' => $this->input->post('meta_tags'),
    			'meta_description' => $this->input->post('meta_description'),
    		); 
            }

        	$q = $this->app_model->insert('categories',$data);
        	if ($q==true) {
        		$this->session->set_flashdata('class', 'success');
        	    $this->session->set_flashdata('message', 'Category Add Successfully.');
        	    redirect('category/add');
        		
        	} else {
        		$this->session->set_flashdata('class', 'danger');
        		$this->session->set_flashdata('message', 'Category Add Failed.');
        		redirect('category/add');
        	}
        
        }

		$this->load->view('admin/categories/add-category',$data);
	}

	

    public function edit(){
    	$id = $this->uri->segment(4);
    	$data['app_title']=$this->app_title;
    	$data['title']='category Edit';
		$data['menu']='category';
		$data['id'] = $id;
		$data['child_menu']='';
		$data['category']= $this->app_model->get_special_details('categories',array('id'=>$id));
    	$this->load->view('admin/categories/edit-category',$data);

    }

    public function update($id=null){

    	$id = $this->uri->segment(4);
    	$this->form_validation->set_rules('name','name number','trim|required');

		$config['upload_path']   = FCPATH.'/api/assets/images/hall/'; 
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$this->load->library('upload', $config);
		if ($this->upload->do_upload('file') ) {

    		$data=array(
    			'name' => $this->input->post('name'),
    			'image' => $this->upload->data()['file_name'],
    			'description' => $this->input->post('description'),
    			'meta_title' => $this->input->post('meta_title'),
    			'meta_tags' => $this->input->post('meta_tags'),
    			'meta_description' => $this->input->post('meta_description'),
    			
    		);
    		$q = $this->app_model->update('categories',$data,array('id'=>$id));
	    	if ($q==true) {
	    		$this->session->set_flashdata('class', 'success');
	    	    $this->session->set_flashdata('message', 'Category Update Successfully.');
	    	    redirect('category/edit/'.$id);
	    		
	    	} else {
	    		$this->session->set_flashdata('class', 'danger');
	    		$this->session->set_flashdata('message', 'Category Update Failed.');
	    		redirect('category/edit/'.$id);
	        }
		}
	     
	     if($this->form_validation->run()){
	         $data=array(
	    			'name' => $this->input->post('name'),
	    			'description' => $this->input->post('description'),
        			'meta_title' => $this->input->post('meta_title'),
        			'meta_tags' => $this->input->post('meta_tags'),
        			'meta_description' => $this->input->post('meta_description'),
				);
          	$q = $this->app_model->update('categories',$data,array('id'=>$id));
          	if ($q==true) {
          		$this->session->set_flashdata('class', 'success');
	    	    $this->session->set_flashdata('message', 'Category Update Successfully.');
	    	    redirect('category/edit/'.$id);
	    		
	    	} else {
	    		$this->session->set_flashdata('class', 'error');
	    		$this->session->set_flashdata('message', 'Category Update Failed.');
	    		redirect('category/edit/'.$id);
	        }
    	}
	}


	 public function status($status,$id){

   		if ($status==1) {
   			$q = $this->app_model->update('categories',array('status'=>$status),array('id'=>$id));
   			$message='Active categories Successfully.';
   			$class='success';
   		} else {
   			$q = $this->app_model->update('categories',array('status'=>$status),array('id'=>$id));
   			$message='Block categories Successfully.';
   			$class='error';
   		}
   		if ($q==true) {
			    $this->session->set_flashdata('class', $class);
			    $this->session->set_flashdata('message', $message);
			    redirect('category');
				
			} else {
				$this->session->set_flashdata('class', 'error');
				$this->session->set_flashdata('message', 'categories Status Change Failed.');
				redirect('category');
		    }
     }



     public function delete($id){
   	$q = $this->app_model->delete('categories',array('id'=>$id));
	  	if ($q==true) {
		$this->session->set_flashdata('class', 'success');
		    $this->session->set_flashdata('message', 'categories Delete Successfully.');
		    redirect('category');
			
		} else {
			$this->session->set_flashdata('class', 'error');
			$this->session->set_flashdata('message', 'categories Delete Failed.');
			redirect('category');
	    }
   }


public function home_view($home_view,$id){

   		if ($home_view==1) {
   			$q = $this->app_model->update('categories',array('home_view'=>$home_view),array('id'=>$id));
   			$message='top home banquet.';
   			$class='success';
   		} else	if ($home_view==2) {
   			$q = $this->app_model->update('categories',array('home_view'=>$home_view),array('id'=>$id));
   			$message='top for you home.';
   			$class='success';
   		} else	if ($home_view==3) {
   			$q = $this->app_model->update('categories',array('home_view'=>$home_view),array('id'=>$id));
   			$message='top home fetures banquet.';
   			$class='success';
   		} else {
   			$q = $this->app_model->update('categories',array('home_view'=>$home_view),array('id'=>$id));
   			$message='Remove from home listing.';
   			$class='error';
   		}
   		if ($q==true) {
			    $this->session->set_flashdata('class', $class);
			    $this->session->set_flashdata('message', $message);
			    redirect('category');
				
			} else {
				$this->session->set_flashdata('class', 'error');
				$this->session->set_flashdata('message', 'service Status Change Failed.');
				redirect('category');
		    }
     }



}


?>