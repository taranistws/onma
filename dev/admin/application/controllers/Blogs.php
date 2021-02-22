<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Blogs extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->app_title="blogs";
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
	     $data['title']='blogs Page view';
	     $data['menu']='blogs';
	     $data['child_menu']='';
	     $data['blogs_pages']=$this->app_model->getAllList('blogs',array('type'=>'page'),'id','DESC');
	     $this->load->view('admin/blogs/manage-blogs',$data);
   
	}

	public function add(){
	    
		$data['title']='blogs';
		$data['menu']='blogs';
		$data['child_menu']='';
		$this->form_validation->set_rules('name','name number','trim|required');
		$this->form_validation->set_error_delimiters('<div style="color:red;">', '</div>');

   $categorycount= count($this->input->post('category'));
		
			if (($this->form_validation->run()) and (count($categorycount)>0) ) {
        $slug_name =  $this->slug->create_unique_slug($this->input->post('name'), 'blogs');

        $slug_name=changeslug($slug_name);
 $category=implode(',',$this->input->post('category'));
	
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
    			'category'=>   $category,
    			'image' => $image,
    			'meta_description' => $this->input->post('meta_description')
    			
    		); 

        	$q = $this->app_model->insert('blogs',$data);
        	if ($q==true) {
        		$this->session->set_flashdata('class', 'success');
        	    $this->session->set_flashdata('message', 'blogs Page Add Successfully.');
        	    redirect('blogs/add');
        		
        	} else {
        		$this->session->set_flashdata('class', 'danger');
        		$this->session->set_flashdata('message', 'blogs Page Add Failed.');
        		redirect('add');
        }
        
			} 



 	$items= $this->app_model->get_menu_items(); 
$menu = $this->app_model->generateTreeedit($items); 
    $data['categorydatas1']=$menu;


		$this->load->view('admin/blogs/add-blogs',$data);
	}

	

    public function edit(){
    	$id = $this->uri->segment(3);
    	$data['app_title']=$this->app_title;
    	$data['title']='blogs Edit';
		$data['menu']='blogs';
		$data['id'] = $id;
		$data['child_menu']='';
		

			$data['category']= $this->app_model->getAllListdata('category',array('id'=>'desc'));
	
		$post= $this->app_model->get_special_details('blogs',array('id'=>$id));

$data['blogs']=$post;

	$items= $this->app_model->get_menu_items();
$categorys1=explode(',',$post['category']);
$parentid=0;
$menu = $this->app_model->generateTreeedit($items,$parentid,$categorys1);

$data['categorydatas1']=$menu;

    	$this->load->view('admin/blogs/edit-blogs',$data);

    }

    public function update($id=null){

    	$id = $this->uri->segment(3);
    	$this->form_validation->set_rules('name','name number','trim|required');

        $categorycount= count($this->input->post('category'));

	if (($this->form_validation->run()) and ($categorycount>0)) {

 $category=implode(',',$this->input->post('category'));

 if(!empty($_FILES['files']['name'][0])){
               $files = fileUpload("pages");
              $image = $files[0];

               $data=array(
    			'name' => $this->input->post('name'),
    			'description' => $this->input->post('description'),
    			'meta_title' => $this->input->post('meta_title'),
    			'meta_tags' => $this->input->post('meta_tags'),
    			'image' => $image,
    			'category' => $category,
    			'meta_description' => $this->input->post('meta_description')
    			
    		); 

           }else{

               $data=array(
    			'name' => $this->input->post('name'),
    			'description' => $this->input->post('description'),
    			'meta_title' => $this->input->post('meta_title'),
    			'meta_tags' => $this->input->post('meta_tags'),
    			'category' => $category,
    			'meta_description' => $this->input->post('meta_description')
    			
    		); 
           }


    		
    		$q = $this->app_model->update('blogs',$data,array('id'=>$id));
	    	if ($q==true) {
	    		$this->session->set_flashdata('class', 'success');
	    	    $this->session->set_flashdata('message', 'Blogs Update Successfully.');
	    	    redirect('blogs/edit/'.$id);
	    		
	    	} else {
	    		$this->session->set_flashdata('class', 'danger');
	    		$this->session->set_flashdata('message', 'Blogs Update Failed.');
	    		redirect('blogs/edit/'.$id);
	        
		}
	} else {
	    	$this->session->set_flashdata('class', 'danger');
	    		$this->session->set_flashdata('message', 'Please enter valid data.');
	   redirect('blogs/edit/'.$id); 
	}
	     
	}

	 public function status($status,$id){

   		if ($status==1) {
   			$q = $this->app_model->update('blogs',array('status'=>$status),array('id'=>$id));
   			$message='Active blogs Successfully.';
   			$class='success';
   		} else {
   			$q = $this->app_model->update('blogs',array('status'=>$status),array('id'=>$id));
   			$message='Block blogs Successfully.';
   			$class='error';
   		}
   		if ($q==true) {
			    $this->session->set_flashdata('class', $class);
			    $this->session->set_flashdata('message', $message);
			    redirect('blogs');
				
			} else {
				$this->session->set_flashdata('class', 'error');
				$this->session->set_flashdata('message', 'Blogs Status Change Failed.');
				redirect('blogs');
		    }
     }



     public function delete($id){
   	$q = $this->app_model->delete('blogs',array('id'=>$id));
	  	if ($q==true) {
		$this->session->set_flashdata('class', 'success');
		    $this->session->set_flashdata('message', 'pages Delete Successfully.');
		    redirect('blogs');
			
		} else {
			$this->session->set_flashdata('class', 'error');
			$this->session->set_flashdata('message', 'pages Delete Failed.');
			redirect('blogs');
	    }
   }





}


?>