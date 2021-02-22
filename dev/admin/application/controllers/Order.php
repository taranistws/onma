<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Order extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->app_title="Find banquet";
		$this->load->model('app_model');
		$this->load->model('admin/order_model');
		$this->load->model('admin/dashboard_model');
		if (empty($this->session->userdata('session_arr'))) {
			redirect('admin/login');
		}
		date_default_timezone_set("Asia/Kolkata");
		$this->load->helper('notify');
		$this->load->library('pdf');

	}
	public function index(){
		 $data['app_title']=$this->app_title;
	     $data['title']='Orders';
	     $data['menu']='order';
	     $data['child_menu']='';
		 
		
		 if(isset($_POST['search'])){
				
				if(!empty($_POST['from_date'])) {
					$f = explode('/',$this->input->post('from_date'));
				$fromDate = $f['2'].'-'.$f['1'].'-'.$f['0'];
		} else {
			$fromDate="";
		}

		if(!empty($_POST['to_date'])) {
			$t = explode('/',$this->input->post('to_date'));
			$toDate = $t['2'].'-'.$t['1'].'-'.$t['0'];
		} else {
			$toDate="";
		}
			 	
			 $status = $this->input->post('status');
			 $userId = $this->input->post('userId');
			 $hallId = $this->input->post('hallId');
			 $data['order']=$this->order_model->orderSearch($fromDate,$toDate,$status,$userId,$hallId);
		 } 
		 else{
			$data['order']=$this->app_model->getAllList('booking_details',array('delete_status'=>'0'),'id','DESC');
	     }
		
		  $data['users']=$this->order_model->allusers();
	     $this->load->view('admin/order/manage-order',$data);
   
	}

	 public function view(){
    	$id = $this->uri->segment(4);
    	$data['app_title']=$this->app_title;
    	$data['title']='Order';
		$data['menu']='order';
		$data['child_menu']='';
		$data['id'] = $id;
		$data['order']= $this->order_model->allOrderDetails($id);
		$this->load->view('admin/order/view-order',$data);
    }
    

   public function delete($id){
   	//$q = $this->app_model->update('booking_details',array('delete_status'=>'1'),array('id'=>$id));
   	$q = $this->app_model->delete('booking_details',array('id'=>$id));
	  	if ($q==true) {
		$this->session->set_flashdata('class', 'success');
		    $this->session->set_flashdata('message', 'Order Delete Successfully.');
		    redirect('admin/order');
			
		} else {
			$this->session->set_flashdata('class', 'error');
			$this->session->set_flashdata('message', 'Order Delete Failed.');
			redirect('admin/order');
	    }
   }


   public function status($status,$id){
	    $updated_at=date('Y-m-d H:i:s');
	    if ($status==0) {
   			$q = $this->app_model->update('booking_details',array('status'=>$status,'updated_at'=>$updated_at),array('id'=>$id));
   			$message='Orders Pending Successfully.';
   			$class='warning';
   	  }
	   
	  if ($status==1) {
   			$q = $this->app_model->update('booking_details',array('status'=>$status,'updated_at'=>$updated_at),array('id'=>$id));
   			$message='Orders Status Accept Successfully.';
   			$class='info';
   	  } if($status==2) {
				$q = $this->app_model->update('booking_details',array('status'=>$status,'updated_at'=>$updated_at),array('id'=>$id));
				$message='Order Completed Successfully.';
				$class='success';
			}
		if($status==3) {
				$q = $this->app_model->update('booking_details',array('status'=>$status,'updated_at'=>$updated_at),array('id'=>$id));
				$message='Order Cancelled Successfully.';
				$class='warning';
   		}
   		if ($q==true) {
			    $this->session->set_flashdata('class', $class);
			    $this->session->set_flashdata('message', $message);
			    redirect('admin/order');
				
			} else {
				$this->session->set_flashdata('class', 'error');
				$this->session->set_flashdata('message', 'Order Status Change Failed.');
				redirect('admin/order');
		    }
     }
	 
	 public function invoice($id=null){
	     $order = $this->order_model->get_invoice($id);
	     if($order['invoice']!=''){ ?>
	         <a href=<?= base_url() ?> .'public/image_gallary/invoice/'.<?= $order['invoice'] ?>' download>"></a>
	         
	    <?php }else{
	         echo '<script>alert("order invoice not upload.")</script>';
	         redirect('admin/order');
	         
	     }
	     
		/* $data['app_title']=$this->app_title;
		$data['title']='Order';
		$data['menu']='order';
		$data['child_menu']='';
		$data['order']= $this->order_model->allOrderDetails($id);
		$fileName = $data['order']['order_id'].time();
		$html = $this->load->view('admin/order/pdf_view',$data,true);
		$this->pdf->pdf_create($html,$fileName); */
		
	 }
	 
	 
	 public function invoice_print($id){
		$data['title']='Order';
		$data['menu']='order';
		$data['child_menu']='';
		$data['order']= $this->order_model->allOrderDetails($id);
		$fileName = $data['order']['order_id'].time();
		$data['app_title'] = $fileName;
		$this->load->view('admin/order/pdf_view_print',$data);
    }



     public function today_order(){
		$data['title']='Order';
		$data['menu']='order';
		$data['child_menu']='';
		$data['app_title']='order';
		$data['order']= $this->dashboard_model->today_orders_data();
		//$fileName = $data['order']['order_id'].time();
		//$data['app_title'] = $fileName; 
		$this->load->view('admin/order/manage-today-order',$data);
    }



 public function onemonth_orders(){
		$data['title']='Order';
		$data['menu']='order';
		$data['child_menu']='';
			$data['app_title']='order';
		$data['order']= $this->dashboard_model->onrmonth_orders_data();
		//$fileName = $data['order']['order_id'].time();
		//$data['app_title'] = $fileName; 
		$this->load->view('admin/order/manage-month-order',$data);
    }

   public function quarter_order(){
		$data['title']='Order';
		$data['menu']='order';
		$data['child_menu']='';
			$data['app_title']='order';
		$data['order']= $this->dashboard_model->quter_orders_data();
		//$fileName = $data['order']['order_id'].time();
		//$data['app_title'] = $fileName; 
		$this->load->view('admin/order/manage-quarter-order',$data);
    }



	
	public function allDownloadPdf(){
		print_r($ids);
	}
	
	
	
    public function status_today_order($status,$id){
	    $updated_at=date('Y-m-d H:i:s');
	    if ($status==0) {
			
   			$q = $this->app_model->update('booking_details',array('status'=>$status,'updated_at'=>$updated_at),array('id'=>$id));
   			$message='Orders Pending Successfully.';
   			$class='warning';
   	  }
	   
	  if ($status==1) {
   			$q = $this->app_model->update('booking_details',array('status'=>$status,'updated_at'=>$updated_at),array('id'=>$id));
   			$message='Orders Status Accept Successfully.';
   			$class='info';
   	  } 
	
		if($status==2) {
				$q = $this->app_model->update('booking_details',array('status'=>$status,'updated_at'=>$updated_at),array('id'=>$id));
				$message='Order Completed Successfully.';
				$class='success';
			}
		if($status==3) {
				$q = $this->app_model->update('booking_details',array('status'=>$status,'updated_at'=>$updated_at),array('id'=>$id));
				$message='Order Cancelled Successfully.';
				$class='warning';
   		}
   		if ($q==true) {
			    $this->session->set_flashdata('class', $class);
			    $this->session->set_flashdata('message', $message);
			    redirect('admin/order/today_order');
				
			} else {
				$this->session->set_flashdata('class', 'error');
				$this->session->set_flashdata('message', 'Order Status Change Failed.');
				redirect('admin/order/today_order');
		    }
     }
	 

  
   public function delete_today_order($id){
   	$q = $this->app_model->delete('booking_details',array('id'=>$id));
	  	if ($q==true) {
		$this->session->set_flashdata('class', 'success');
		    $this->session->set_flashdata('message', 'Order Delete Successfully.');
		    redirect('admin/order/today_order');
			
		} else {
			$this->session->set_flashdata('class', 'error');
			$this->session->set_flashdata('message', 'Order Delete Failed.');
			redirect('admin/order/today_order');
	    }
   }



	 public function today_order_view(){
    	$id = $this->uri->segment(4);
    	$data['app_title']=$this->app_title;
    	$data['title']='Order';
		$data['menu']='order';
		$data['child_menu']='';
		$data['id'] = $id;
		$data['order']= $this->order_model->allOrderDetails($id);
		$this->load->view('admin/order/view-today-order',$data);
    }


	



 public function month_order_view(){
    	$id = $this->uri->segment(4);
    	$data['app_title']=$this->app_title;
    	$data['title']='Order';
		$data['menu']='order';
		$data['child_menu']='';
		$data['id'] = $id;
		$data['order']= $this->order_model->allOrderDetails($id);
		$this->load->view('admin/order/view-month-order',$data);
    }

    public function status_month_order($status,$id){
	    $updated_at=date('Y-m-d H:i:s');
	     if ($status==1) {
   			$q = $this->app_model->update('booking_details',array('status'=>$status,'updated_at'=>$updated_at),array('id'=>$id));
   			$message='Orders Status Accept Successfully.';
   			$class='info';
   	  } 
	
		if($status==2) {
				$q = $this->app_model->update('booking_details',array('status'=>$status,'updated_at'=>$updated_at),array('id'=>$id));
				$message='Order Completed Successfully.';
				$class='success';
			}
		if($status==3) {
				$q = $this->app_model->update('booking_details',array('status'=>$status,'updated_at'=>$updated_at),array('id'=>$id));
				$message='Order Cancelled Successfully.';
				$class='warning';
   		}
   		if ($q==true) {
			    $this->session->set_flashdata('class', $class);
			    $this->session->set_flashdata('message', $message);
			    redirect('admin/order/onemonth_orders');
				
			} else {
				$this->session->set_flashdata('class', 'error');
				$this->session->set_flashdata('message', 'Order Status Change Failed.');
				redirect('admin/order/onemonth_orders');
		    }
     }
	 

  
   public function delete_month_order($id){
  // 	$q = $this->app_model->update('booking_details',array('delete_status'=>'1'),array('id'=>$id));

   	$q = $this->app_model->delete('booking_details',array('id'=>$id));
	  	if ($q==true) {
		$this->session->set_flashdata('class', 'success');
		    $this->session->set_flashdata('message', 'Order Delete Successfully.');
		    redirect('admin/order/onemonth_orders');
			
		} else {
			$this->session->set_flashdata('class', 'error');
			$this->session->set_flashdata('message', 'Order Delete Failed.');
			redirect('admin/order/onemonth_orders');
	    }
   }


public function status_quarter_order($status,$id){
	    $updated_at=date('Y-m-d H:i:s');
	     if ($status==1) {
   			$q = $this->app_model->update('booking_details',array('status'=>$status,'updated_at'=>$updated_at),array('id'=>$id));
   			$message='Orders Status Accept Successfully.';
   			$class='info';
   	  } 
	
		if($status==2) {
				$q = $this->app_model->update('booking_details',array('status'=>$status,'updated_at'=>$updated_at),array('id'=>$id));
				$message='Order Completed Successfully.';
				$class='success';
			}
		if($status==3) {
				$q = $this->app_model->update('booking_details',array('status'=>$status,'updated_at'=>$updated_at),array('id'=>$id));
				$message='Order Cancelled Successfully.';
				$class='warning';
   		}
   		if ($q==true) {
			    $this->session->set_flashdata('class', $class);
			    $this->session->set_flashdata('message', $message);
			    redirect('admin/order/quarter_order');
				
			} else {
				$this->session->set_flashdata('class', 'error');
				$this->session->set_flashdata('message', 'Order Status Change Failed.');
				redirect('admin/order/quarter_order');
		    }
     }
	 

  
   public function delete_quarter_order($id){
   	$q = $this->app_model->delete('booking_details',array('id'=>$id));
	  	if ($q==true) {
		$this->session->set_flashdata('class', 'success');
		    $this->session->set_flashdata('message', 'Order Delete Successfully.');
		    redirect('admin/order/quarter_order');
			
		} else {
			$this->session->set_flashdata('class', 'error');
			$this->session->set_flashdata('message', 'Order Delete Failed.');
			redirect('admin/order/quarter_order');
	    }
   }



	 public function quarter_order_view(){
    	$id = $this->uri->segment(4);
    	$data['app_title']=$this->app_title;
    	$data['title']='Order';
		$data['menu']='order';
		$data['child_menu']='';
		$data['id'] = $id;
		$data['order']= $this->order_model->allOrderDetails($id);
		$this->load->view('admin/order/view-quarter-order',$data);
    }




}


?>