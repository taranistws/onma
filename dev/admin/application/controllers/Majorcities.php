<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Majorcities extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->app_title="Major cities";
		$this->load->model('app_model');
		if (empty($this->session->userdata('session_arr'))) {
			redirect('admin/login');
		}
		date_default_timezone_set("Asia/Kolkata");
		$this->load->helper('notify');

	}

	public function index(){
		 $data['app_title']=$this->app_title;
	     $data['title']='Majorcities view';
	     $data['menu']='Majorcities';
	     $data['child_menu']='';
	     $data['categories']=$this->app_model->getAllList('majorcities',null,'id','DESC');
	     $this->load->view('admin/majorcities/manage-majorcities',$data);
   
	}

	public function add(){
		$data['title']='Majorcities';
		$data['menu']='Majorcities';
		$data['child_menu']='';
			$this->form_validation->set_rules('name','name number','trim|required');
		$this->form_validation->set_error_delimiters('<div style="color:red;">', '</div>');
  
  
		$config['upload_path']   = FCPATH.'/api/assets/images/hall/'; 
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$this->load->library('upload', $config);
	$config['upload_path']   = FCPATH.'/api/assets/images/hall/'; 
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$this->load->library('upload', $config);

		if ($this->form_validation->run() ) {


if($this->upload->do_upload('file')) {
$data=array(
    			'name' => $this->input->post('name'),
    			'image' => $this->upload->data()['file_name']
    			
    		); 
} else {
	$data=array(
    			'name' => $this->input->post('name')
    			
    		); 
}
    		


        	$q = $this->app_model->insert('majorcities',$data);
        	if ($q==true) {
        		$this->session->set_flashdata('class', 'success');
        	    $this->session->set_flashdata('message', 'Majorcities Add Successfully.');
        	    redirect('admin/majorcities/add');
        		
        	} else {
        		$this->session->set_flashdata('class', 'danger');
        		$this->session->set_flashdata('message', 'Majorcities Add Failed.');
        		redirect('admin/majorcities/add');
        	}
        
        }

		$this->load->view('admin/majorcities/add-majorcities',$data);
	}

	

    public function edit(){
    	$id = $this->uri->segment(4);
    	$data['app_title']=$this->app_title;
    	$data['title']='Majorcities Edit';
		$data['menu']='Majorcities';
		$data['id'] = $id;
		$data['child_menu']='';
		$data['Majorcities']= $this->app_model->get_special_details('majorcities',array('id'=>$id));
    	$this->load->view('admin/majorcities/edit-majorcities',$data);

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
    			'image' => $this->upload->data()['file_name']
    			
    		);
    		$q = $this->app_model->update('majorcities',$data,array('id'=>$id));
	    	if ($q==true) {
	    		$this->session->set_flashdata('class', 'success');
	    	    $this->session->set_flashdata('message', 'Majorcities Update Successfully.');
	    	    redirect('admin/majorcities/edit/'.$id);
	    		
	    	} else {
	    		$this->session->set_flashdata('class', 'danger');
	    		$this->session->set_flashdata('message', 'Majorcities Update Failed.');
	    		redirect('admin/majorcities/edit/'.$id);
	        }
		}
	     
	     if($this->form_validation->run()){
	         $data=array(
	    			'name' => $this->input->post('name')
				);
          	$q = $this->app_model->update('majorcities',$data,array('id'=>$id));
          	if ($q==true) {
          		$this->session->set_flashdata('class', 'success');
	    	    $this->session->set_flashdata('message', 'Majorcities Update Successfully.');
	    	    redirect('admin/majorcities/edit/'.$id);
	    		
	    	} else {
	    		$this->session->set_flashdata('class', 'error');
	    		$this->session->set_flashdata('message', 'Majorcities Update Failed.');
	    		redirect('admin/majorcities/edit/'.$id);
	        }
    	}
     

	}





	 public function status($status,$id){

   		if ($status==1) {
   			$q = $this->app_model->update('majorcities',array('status'=>$status),array('id'=>$id));
   			$message='Active majorcities Successfully.';
   			$class='success';
   		} else {
   			$q = $this->app_model->update('majorcities',array('status'=>$status),array('id'=>$id));
   			$message='Block majorcities Successfully.';
   			$class='error';
   		}
   		if ($q==true) {
			    $this->session->set_flashdata('class', $class);
			    $this->session->set_flashdata('message', $message);
			    redirect('admin/majorcities');
				
			} else {
				$this->session->set_flashdata('class', 'error');
				$this->session->set_flashdata('message', 'majorcities Status Change Failed.');
				redirect('admin/majorcities');
		    }
     }



     public function delete($id){
   	$q = $this->app_model->delete('majorcities',array('id'=>$id));
	  	if ($q==true) {
		$this->session->set_flashdata('class', 'success');
		    $this->session->set_flashdata('message', 'majorcities Delete Successfully.');
		    redirect('admin/majorcities');
			
		} else {
			$this->session->set_flashdata('class', 'error');
			$this->session->set_flashdata('message', 'majorcities Delete Failed.');
			redirect('admin/majorcities');
	    }
   }





}


?>