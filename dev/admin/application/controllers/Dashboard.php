<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends CI_Controller
{
	
	function __construct()
	{

		parent::__construct();
		$this->app_title="php";
		date_default_timezone_set("Asia/Calcutta");
		$this->load->model('app_model');
		$this->load->model('admin/dashboard_model');
		if (empty($this->session->userdata('session_arr'))) {
			redirect('admin/login');
		}

	}
	public function index(){
		 $data['app_title']=$this->app_title;
		 $data['title']='Dashboard';
	     $data['menu']='dashboard';
	     $data['child_menu']='';
	//	$data['data']=$this->dashboard_model->getAllUsers();
	//	 $data['orders']=$this->dashboard_model->letestOrders();
	//	 $data['users']=$this->dashboard_model->latestUsers();
	//	 $data['enquiry']=$this->dashboard_model->enquiry();
		    
	
		 $this->load->view('admin/dashboard',$data);
   }

   public function chart(){
   		 $data['app_title']=$this->app_title;
		 $data['title']='Dashboard';
	     $data['menu']='dashboard';
	     $this->load->view('admin/chart',$data);
   }

  


}

?>