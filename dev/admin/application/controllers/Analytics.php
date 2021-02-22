<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Analytics extends CI_Controller
{
	
	function __construct()
	{

		parent::__construct();
		$this->app_title="findbanquet";
		date_default_timezone_set("Asia/Calcutta");
		$this->load->model('app_model');
		$this->load->model('admin/dashboard_model');
		if (empty($this->session->userdata('session_arr'))) {
			redirect('admin/login');
		}

	}
	public function index(){
		 $data['app_title']=$this->app_title;
		 $data['title']='analytics';
	     $data['menu']='analytics';
	     $data['child_menu']='';
		 $data['data']=$this->dashboard_model->getAllUsers();
		 $data['orders']=$this->dashboard_model->letestOrders();
		 $data['users']=$this->dashboard_model->latestUsers();
		 $data['today_orders']=$this->dashboard_model->today_orders();
		  $data['onrmonth_orders']=$this->dashboard_model->onrmonth_orders();
		   $data['quter_orders']=$this->dashboard_model->quter_orders();
		    $data['today_user']=$this->dashboard_model->today_user();
		 $data['pending']=$this->db->where(['status'=>'0','delete_status'=>'0'])->get('tbl_order')->num_rows();
		 $data['accept']=$this->db->where(['status'=>'1','delete_status'=>'0'])->get('tbl_order')->num_rows();
		  $data['complete']=$this->db->where(['status'=>'2','delete_status'=>'0'])->get('tbl_order')->num_rows();
		 $data['cancel']=$this->db->where(['status'=>'2','delete_status'=>'0'])->get('tbl_order')->num_rows();
		 $this->load->view('admin/analytics',$data);
   }

   public function chart(){
   		 $data['app_title']=$this->app_title;
		 $data['title']='Dashboard';
	     $data['menu']='dashboard';
	     $this->load->view('admin/chart',$data);
   }

  


}

?>