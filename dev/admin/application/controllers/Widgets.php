<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Widgets extends CI_Controller
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
	     $data['title']='widgets view';
	     $data['menu']='widgets';
	     $data['child_menu']='';
	     $data['widgets']=$this->app_model->getAllList('widgets',null,'id','DESC');
	     $this->load->view('admin/widgets/manage-widgets',$data);
   
	}

	public function add(){


		$data['title']='widgets';
		$data['menu']='widgets';
		$data['child_menu']='';
		$this->form_validation->set_rules('title','title','trim|required');
		$this->form_validation->set_error_delimiters('<div style="color:red;">', '</div>');
  
	
     	
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		
		//print_r($config); die;
		$this->load->library('upload', $config);

		if ($this->form_validation->run() ) {
//print_r($_FILES); die;
             if(!empty($_FILES['files']['name'][0])){

             	 $files = fileUpload("widgets");
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
    		$q = $this->app_model->insert('widgets',$data);
    		
    			if ($q==true) {
        		$this->session->set_flashdata('class', 'success');
        	    $this->session->set_flashdata('message', 'widgets Add Successfully.');
        	    redirect('widgets/add');
        		
        	} else {
        		$this->session->set_flashdata('class', 'danger');
        		$this->session->set_flashdata('message', 'widgets Add Failed.');
        		redirect('widgets/add');
        	}
    		
            
        } 
		$this->load->view('admin/widgets/add-widgets',$data);
	}

    public function edit(){
    	$id = $this->uri->segment(3);
    	$data['app_title']=$this->app_title;
    	$data['title']='widgets Edit';
		$data['menu']='widgets';
		$data['id'] = $id;
		$data['child_menu']='';
		$data['widgets']= $this->app_model->get_special_details('widgets',array('id'=>$id));
    	$this->load->view('admin/widgets/edit-widgets',$data);

    }

    public function update($id=null){

    	$id = $this->uri->segment(3);
    	$this->form_validation->set_rules('title','title','trim|required');

	//	$config['upload_path']   = FCPATH.'/api/assets/images/hall/'; 
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$this->load->library('upload', $config);
		 if(!empty($_FILES['files']['name'][0])){ 
             	 $files = fileUpload("widgets"); 
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

    		
    		$q = $this->app_model->update('widgets',$data,array('id'=>$id));
	    	if ($q==true) {
	    		$this->session->set_flashdata('class', 'success');
	    	    $this->session->set_flashdata('message', 'widgets Update Successfully.');
	    	    redirect('widgets/edit/'.$id);
	    		
	    	} else {
	    		$this->session->set_flashdata('class', 'danger');
	    		$this->session->set_flashdata('message', 'widgets Update Failed.');
	    		redirect('widgets/edit/'.$id);
	        }
	
		
		
	     
	     if($this->form_validation->run()){
	         $data=array(
	    			'title' => $this->input->post('title')
				);
          	$q = $this->app_model->update('widgets',$data,array('id'=>$id));
          	if ($q==true) {
          		$this->session->set_flashdata('class', 'success');
	    	    $this->session->set_flashdata('message', 'widgets Update Successfully.');
	    	    redirect('widgets/edit/'.$id);
	    		
	    	} else {
	    		$this->session->set_flashdata('class', 'error');
	    		$this->session->set_flashdata('message', 'widgets Update Failed.');
	    		redirect('widgets/edit/'.$id);
	        }
    	}
     

	}





	 public function status($status,$id){

   		if ($status==1) {
   			$q = $this->app_model->update('widgets',array('status'=>$status),array('id'=>$id));
   			$message='Active widgets Successfully.';
   			$class='success';
   		} else {
   			$q = $this->app_model->update('widgets',array('status'=>$status),array('id'=>$id));
   			$message='Block widgets Successfully.';
   			$class='error';
   		}
   		if ($q==true) {
			    $this->session->set_flashdata('class', $class);
			    $this->session->set_flashdata('message', $message);
			    redirect('widgets');
				
			} else {
				$this->session->set_flashdata('class', 'error');
				$this->session->set_flashdata('message', 'widgets Status Change Failed.');
				redirect('widgets');
		    }
     }



     public function delete($id){
     	$q = $this->app_model->delete('widgets',array('id'=>$id));
	  	if ($q==true) {
		$this->session->set_flashdata('class', 'success');
		    $this->session->set_flashdata('message', 'widgets Delete Successfully.');
		    redirect('widgets');
			
		} else {
			$this->session->set_flashdata('class', 'error');
			$this->session->set_flashdata('message', 'widgets Delete Failed.');
			redirect('widgets');
	    }
   }





}


?>