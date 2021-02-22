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

	     $data['title']='Category';

	     $data['menu']='category';

	     $data['child_menu']='';

		 $data['category']=$this->app_model->getAllList('category',array('parent_id'=>'0','delete_status'=>'0'),'position','ASC');

	     $this->load->view('admin/category/manage',$data);

   }



    public function add(){

    	$data['app_title']=$this->app_title;

	    $data['title']='category view';

	    $data['menu']='category';

	    $data['child_menu']='';

    	$this->form_validation->set_rules('name','name','trim|required');
	     if($this->form_validation->run()){

	     	$teamData=$this->input->post();



$data = array(
	'title' => $this->input->post('name'),
);

$teamData['slug']=$this->slug1->create_uri($data);



 if(!empty($_FILES['files']['name'][0])){
               $files = fileUpload("pages");
              $teamData['images']= $files[0];
           }else{
              $teamData['images'] = "";
           }

 
	        $teamData['created_at']=date('Y-m-d H:i:s');

	        $teamData['status']='1';

	        $priority = $this->db->select_max('position')->get('category')->row_array();

	     	$teamData['position']=$priority['position']+1;

	     	

          	$q = $this->app_model->insert('category',$teamData);

          	if ($q==true) {

          		$this->session->set_flashdata('class', 'success');

	    	    $this->session->set_flashdata('message', 'Add Successfully.');

	    	    redirect('category/add');

	    		

	    	} else {

	    		$this->session->set_flashdata('class', 'error');

	    		$this->session->set_flashdata('message', 'Add Failed.');

	    		redirect('category/add/');

	        }

    	}

    	$this->load->view('admin/category/add',$data);

     

    }











	 public function view(){

    	$id = $this->uri->segment(4);

    	$data['app_title']=$this->app_title;

    	$data['title']='category Edit';

		$data['menu']='category';

		$data['child_menu']='';


		$data['id'] = $id;

		$data['user']= $this->app_model->get_special_details('category',array('id'=>$id));

		$this->load->view('admin/category/view',$data);

    }

    



    public function edit(){

    	$id = $this->uri->segment(4);

    	$data['app_title']=$this->app_title;

    	$data['title']='Category Edit';

		$data['menu']='category';

		$data['id'] = $id;

		$data['child_menu']='';




		$data['category']= $this->app_model->get_special_details('category',array('id'=>$id));

    	$this->load->view('admin/category/edit',$data);

    }



    public function update($id=null){



    	$id = $this->uri->segment(4);

    	$this->form_validation->set_rules('name','name','trim|required');

		$this->form_validation->set_error_delimiters('<div style="color:red;">', '</div>');



		if($this->form_validation->run()){
	     $teamData=$this->input->post();

               if(!empty($_FILES['files']['name'][0])){
               $files = fileUpload("pages");
              $teamData['images']= $files[0];
           }else{
            }

$data = array(
	'title' => $this->input->post('name'),
);

$teamData['slug'] = $this->slug1->create_uri($data, $id);
$this->db->where('id', $id);



	     	$q = $this->app_model->update('category',$teamData,['id'=>$id]);

          	if ($q==true) {

          		$this->session->set_flashdata('class', 'success');

	    	    $this->session->set_flashdata('message', 'Update Successfully.');

	    	    redirect('category/edit/'.$id);

	    		

	    	} else {

	    		$this->session->set_flashdata('class', 'error');

	    		$this->session->set_flashdata('message', 'Update Failed.');

	    		redirect('category/edit/'.$id);

	        }

    	}



		

		

     



	}



   public function delete($id){

      $q = $this->app_model->delete('category',array('id'=>$id));

	  	if ($q==true) {

		$this->session->set_flashdata('class', 'success');

		    $this->session->set_flashdata('message', 'Delete Successfully.');

		    redirect('category');

			

		} else {

			$this->session->set_flashdata('class', 'error');

			$this->session->set_flashdata('message', 'Delete Failed.');

			redirect('category');

	    }

   }





   public function status($status,$id){



   		if ($status==1) {

   			$q = $this->app_model->update('category',array('status'=>$status),array('id'=>$id));

   			$message='Active Successfully.';

   			$class='success';

   		} else {

   			$q = $this->app_model->update('category',array('status'=>$status),array('id'=>$id));

   			$message='Block Successfully.';

   			$class='error';

   		}

   		if ($q==true) {

			    $this->session->set_flashdata('class', $class);

			    $this->session->set_flashdata('message', $message);

			    redirect('category');

				

			} else {

				$this->session->set_flashdata('class', 'error');

				$this->session->set_flashdata('message', 'Status Change Failed.');

				redirect('category');

		    }

     }





     public function priority(){

     	 $cat_id = $this->input->post('cat_id');

     	 $value = $this->input->post('value');

     	 $this->app_model->update('category',['position'=>$value],['id'=>$cat_id]);

     }

}





?>