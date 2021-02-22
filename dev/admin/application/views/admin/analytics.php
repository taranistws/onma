<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?= $app_title;?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/png" href="<?= base_url()?>public/image_gallary/favicon.png" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url()?>public/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url()?>public/assets/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>
<body class="hold-transition sidebar-mini" onload="display_ct();">
<div class="wrapper">
  <!-- Navbar -->
 <?php $this->load->view('admin/inc/header');?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php $this->load->view('admin/inc/sidebar');?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Analytics</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
		 <div class="row">

      <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-user"></i></span>

              <div class="info-box-content">
                <a href="<?php echo base_url(); ?>admin/order/today_order"><span class="info-box-text">Today Orders</span></a>
                <span class="info-box-number">
            
                 <?php echo ($today_orders); ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>

   <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-user"></i></span>

              <div class="info-box-content">
                <a href="<?php echo base_url(); ?>admin/order/onemonth_orders"><span class="info-box-text">Last 30 day's Orders</span></a>
                <span class="info-box-number">
            
                 <?php echo ($onrmonth_orders); ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>




   <div class="col-12 col-sm-6 col-md-4">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-user"></i></span>

              <div class="info-box-content">
                <a href="<?php echo base_url(); ?>admin/order/quarter_order"><span class="info-box-text">Last 45 day's Orders</span></a>
                <span class="info-box-number" style="display: block; font-weight: 700;color:#000;">
            
                <?php echo ($quter_orders); ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>

 <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-user"></i></span>

              <div class="info-box-content">
                <a href="<?php echo base_url(); ?>admin/user/today_new_user"><span class="info-box-text">Today added news user</span></a>
                <span class="info-box-number" style="display: block; font-weight: 700;color:#000;">
             
                <?php 

echo ($today_user);
               // echo ($today_user); ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->


            
          </div>


           <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-shopping-cart"></i></span>

              <div class="info-box-content">
                <a href="<?php echo base_url(); ?>admin/cancelorder"><span class="info-box-text">Cancel orders</span></a>
                <span class="info-box-number" style="display: block; font-weight: 700;color:#000;">
             
                <?php 

echo ($cancel_orders);
               // echo ($today_user); ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->


            
          </div>

             <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-shopping-cart"></i></span>

              <div class="info-box-content">
                <a href="<?php echo base_url(); ?>admin/pendingorder"><span class="info-box-text">Pending Order</span></a>
                <span class="info-box-number" style="display: block; font-weight: 700;color:#000;">
             
                <?php 

echo ($pending);
               // echo ($today_user); ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->


            
          </div>




          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-user"></i></span>

              <div class="info-box-content">
                <a href="<?= base_url()?>admin/user"><span class="info-box-text">Total Customers</span></a>
                <span class="info-box-number" style="display: block; font-weight: 700;color:#000;">
                  <?= $data['customer'] ?>
               
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-user"></i></span>

              <div class="info-box-content">
               <a href="<?= base_url()?>admin/partner"><span class="info-box-text">Total Partners</span></a> 
                <span class="info-box-number" style="display: block; font-weight: 700;color:#000;" ><?= $data['partner'] ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>
		        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

              <div class="info-box-content">
               <a href="<?= base_url()?>admin/order"><span class="info-box-text">Total Orders</span></a> 
                <span class="info-box-number"><?= $data['order'] ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
               <a href="<?= base_url()?>admin/user"> <span class="info-box-text">New Members</span></a>
                <span class="info-box-number"><?= $data['newusers'] ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
       
        <div class="row">
          <div class="col-md-6">
            <!-- AREA CHART -->
             <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Orders Status</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                <div id="piechart_3d" style="min-height: 300px; height: 300px; max-height: 250px; max-width: 100%;"></div>  </div>
                
              </div>
              
            </div>
            <!-- /.card -->

            <!-- DONUT CHART -->
            <div class="col-md-6">
           <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">All Users Graph</h3>
				        <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
               <!--  <canvas id="donutChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                --> <div id="donutchart" style="min-height: 300px; height: 300px; max-height: 250px; max-width: 100%;"></div>
              </div>
              
            </div>
          </div>
          </div> 
          <!-- /.col (LEFT) -->
          <!-- <div class="col-md-6">
            
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Join Partners</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                <div class="chart">
                  <canvas id="lineChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
              </div>
              
            </div> -->
            <!-- /.card -->

            <!-- BAR CHART -->
           <!--  <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Orders Chart</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                <div class="chart">
                  <canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
              </div>
              
            </div> -->
            <!-- /.card -->

            <!-- STACKED BAR CHART -->
            
            <!-- /.card -->

          
          <!-- /.col (RIGHT) -->
      
		<div class="row">
          <!-- Left col -->
          <div class="col-md-12">
            <!-- MAP & BOX PANE -->
            <!-- /.card -->
            <div class="row">
              
              <div class="col-md-6">
                <!-- USERS LIST -->
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Latest Customer</h3>

                    <div class="card-tools">
                      <span class="badge badge-danger">8 New Members</span>
                      <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                      </button>
                      <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                      </button>
                    </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body p-0">
                  <ul class="users-list clearfix">
					<?php
  					   foreach($users['customer'] as $row){
  					   ?>
  					  <li>
  					   <?php
  					     if($row['profile_image']!=''){ ?>
  							<img class="show_image" src="<?= base_url()?>public/image_gallary/user/<?= $row['profile_image']?>" width="100" height="70">
                           <?php }else{ ?>
  							<img class="show_image" src="<?= base_url()?>public/assets/dist/img/avatar5.png" width="100" height="100">
                           <?php } ?>
  					    <!-- <a class="users-list-name" href="javascript:void()">Ajit kumar</a> -->
                          <span class="users-list-date"><?= !empty($row['add_on']!='0000-00-00 00:00:00')?formate_date($row['add_on']):'------';?></span>
                        </li>
  					 <?php } ?>
      					 </ul>
                    <!-- /.users-list -->
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer text-center">
                    <a href="<?= base_url()?>admin/user">View All Users</a>
                  </div>
                  <!-- /.card-footer -->
                </div>
                <!--/.card -->
              </div>
              <!-- /.col -->
            
            <!-- /.row -->
    <div class="col-md-6">
            <!-- TABLE: LATEST ORDERS -->
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Latest Orders</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0">
                    <thead>
                    <tr>
                      <th>Order ID</th>
                      <th>Customer Name</th>
                      <th>Status</th>
                      <th>Payment</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
    					<?php 
    					foreach($orders as $row){
    					?>
                          <td><a href="<?= base_url()?>admin/order/view/<?= $row['id']?>"><?= $row['order_id']?></a></td>
                          <td><?= ucfirst($row['name']);?></td>
                          <td>
    					  <?php
                          if ($row['status']==0) {
                           echo '<span class="badge badge-warning">Pending</span>';
                          }
    					  if ($row['status']==1) {
                           echo '<span class="badge badge-secondary">Accepted</span>';
                          }
    					  if ($row['status']==2) {
                           echo '<span class="badge btn btn-default badge-default">Vehicle Drop</span>';
                          }
    					  if ($row['status']==3) {
                           echo '<span class="badge badge-info">Processing</span>';
                          }
    					  if ($row['status']==4) {
                           echo '<span class="badge badge-primary">Vehicle Ready</span>';
                          }
    					  if ($row['status']==5) {
                           echo '<span class="badge badge-success">Delivered</span>';
                          }
    					  if ($row['status']==6) {
                           echo '<span class="badge badge-danger">Cancelled</span>';
                          }
    					  
                       ?>
            			 </td>
                      <td>
                      <?php
  						if($row['payment_status']==1) {
  						   echo '<span class="badge badge-success">Paid</span>';
  						  }else{
  							 echo '<span class="badge badge-danger">Pending</span>'; 
  						  }
      				  ?>
                      </td>
                    </tr>
					 <?php } ?>
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <a href="<?= base_url()?>admin/order" class="btn btn-sm btn-secondary float-right">View All Orders</a>
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div> </div> </div>
          <!-- /.col -->

          <div class="col-md-12">
            <!-- Info Boxes Style 2 -->
           <!-- <div class="info-box mb-3 bg-warning">
              <span class="info-box-icon"><i class="fas fa-tag"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Inventory</span>
                <span class="info-box-number">5,200</span>
              </div>
              
            </div>-->
            <!-- /.info-box -->
           <!-- <div class="info-box mb-3 bg-success">
              <span class="info-box-icon"><i class="far fa-heart"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Mentions</span>
                <span class="info-box-number">92,050</span>
              </div>
             
            </div>-->
            <!-- /.info-box -->
          <!--  <div class="info-box mb-3 bg-danger">
              <span class="info-box-icon"><i class="fas fa-cloud-download-alt"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Downloads</span>
                <span class="info-box-number">114,381</span>
              </div>
              
            </div>-->
            <!-- /.info-box -->
            <!--<div class="info-box mb-3 bg-info">
              <span class="info-box-icon"><i class="far fa-comment"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Direct Messages</span>
                <span class="info-box-number">163,921</span>
              </div>
              
            </div>-->
            <!-- /.info-box -->
			<!-- /.card -->
			<!-- PRODUCT LIST -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Recently Added Partners</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <ul class="products-list product-list-in-card pl-2 pr-2">
				 <?php
				  foreach($users['partner'] as $row){
				 ?>
				 <li class="item">
                    <div class="product-img">
						<?php
						if ($row['center_images']!='') { ?>
						  <img class="show_image" src="<?= base_url()?>public/image_gallary/partner/<?= $row['center_images']?>" width="100" height="100">
					   <?php } else { ?>
						 <img class="show_image" src="<?= base_url()?>public/image_gallary/partner/ServiceKarLogo.jpg" width="100" height="100">
					   <?php }  ?>
				      </div>
                    <div class="product-info">
                      <a href="javascript:void(0)" class="product-title"><?= ucfirst($row['service_center_name'])?>
                        <?php
						  if ($row['status']==0) {
						   echo '<span class="badge badge-danger float-right">Deactive</span>';
						  }else{
							echo '<span class="badge badge-success float-right">Active</span>';
						  }
					   ?>
					  </a>
                      <span class="product-description">
                        <?= $row['address'];?>
                      </span>
                    </div>
                  </li>
				  <?php } ?>
                </ul>
              </div>
              <!-- /.card-body -->
              <div class="card-footer text-center">
                <a href="<?= base_url()?>admin/partner" class="uppercase">View All Garages</a>
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
		
		
		
		
		
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php $this->load->view('admin/inc/footer');?>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<!-- Bootstrap 4 -->
<script src="<?= base_url()?>public/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?= base_url()?>public/assets/plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url()?>public/assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url()?>public/assets/dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */

    //--------------
    //- AREA CHART -
    //--------------

    // Get context with jQuery - using jQuery's .get() method.
    var areaChartCanvas = $('#areaChart').get(0).getContext('2d')

    var areaChartData = {
      labels  : ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
      datasets: [
        {
          label               : 'Delivered Orders',
          backgroundColor     : 'rgba(60,141,188,0.9)',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [28, 48, 40, 19, 86, 27, 90]
        },
        {
          label               : 'Cancel Orders',
          backgroundColor     : 'rgba(210, 214, 222, 1)',
          borderColor         : 'rgba(210, 214, 222, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [65, 59, 80, 81, 56, 55, 40]
        },
      ]
    }

    var areaChartOptions = {
      maintainAspectRatio : false,
      responsive : true,
      legend: {
        display: false
      },
      scales: {
        xAxes: [{
          gridLines : {
            display : false,
          }
        }],
        yAxes: [{
          gridLines : {
            display : false,
          }
        }]
      }
    }

    // This will get the first returned node in the jQuery collection.
    var areaChart       = new Chart(areaChartCanvas, { 
      type: 'line',
      data: areaChartData, 
      options: areaChartOptions
    })

    //-------------
    //- LINE CHART -
    //--------------
    var lineChartCanvas = $('#lineChart').get(0).getContext('2d')
    var lineChartOptions = jQuery.extend(true, {}, areaChartOptions)
    var lineChartData = jQuery.extend(true, {}, areaChartData)
    lineChartData.datasets[0].fill = false;
    lineChartData.datasets[1].fill = false;
    lineChartOptions.datasetFill = false

    var lineChart = new Chart(lineChartCanvas, { 
      type: 'line',
      data: lineChartData, 
      options: lineChartOptions
    })

    //-------------
    //- DONUT CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
    var donutData        = {
      labels: [
          'Pending', 
          'Accept',
          'Dropped', 
          'Processing', 
          'Vehicle Ready', 
          'Delivered', 
		  'Cancel', 
      ],
      datasets: [
        {
          data: [700,500,400,600,300,100,100],
          backgroundColor : ['#ffc107', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de','#00a65a'],
        }
      ]
    }
    var donutOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    var donutChart = new Chart(donutChartCanvas, {
      type: 'doughnut',
      data: donutData,
      options: donutOptions      
    })

    //-------------
    //- PIE CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    

    //-------------
    //- BAR CHART -
    //-------------
    var barChartCanvas = $('#barChart').get(0).getContext('2d')
    var barChartData = jQuery.extend(true, {}, areaChartData)
    var temp0 = areaChartData.datasets[0]
    var temp1 = areaChartData.datasets[1]
    barChartData.datasets[0] = temp1
    barChartData.datasets[1] = temp0

    var barChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false
    }

    var barChart = new Chart(barChartCanvas, {
      type: 'bar', 
      data: barChartData,
      options: barChartOptions
    })

    //---------------------
    //- STACKED BAR CHART -
    //---------------------
    
  })
</script>
<script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        //0=pending,1=accept,2=dropped,3=processing,4,vehicle_ready,5,delivered,6=cancel

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Pending',     <?= $pending ?>],
          ['Accept',      <?= $accept ?>],
          ['Dropped',  <?= $dropped ?>],
          ['Processing', <?= $processing ?>],
          ['Vehicle ready',    <?= $vehicle_ready ?>],
          ['Delivered',    <?= $delivered ?>],
          ['Cancel',    <?= $cancel_orders ?>]
        ]);

        var options = {
          title: 'Orders Status',
          colors: ['#ffc107', '#6c757d', '#f8f9fa', '#17a2b8', '#007bff', '#28a745','#dc3545','#f6c7b6'],
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Customers',     <?= $data['customer'] ?>],
          ['Partners',      <?= $data['partner'] ?>]
          
        ]);

        var options = {
          title: 'Total Users',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>



</body>
</html>
