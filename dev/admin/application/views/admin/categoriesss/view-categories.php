<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?= $app_title.' | '.$title; ?></title>
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
            <h1>Profile View</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
             <li class=""><a  class="breadcrumb-item btn btn-primary"href="<?= base_url()?>user"><i class="fas fa-fast-backward"></i> Back</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
              <div class="text-center">
               <?php
                if ($user['profile_image']!='') { ?>
                 <img class="profile-user-img img-fluid img-circle" src="<?= base_url()?>public/image_gallary/user/<?= $user['profile_image']?>" alt="User profile picture">
                <?php  } else { ?>
                    <img class="profile-user-img img-fluid img-circle" src="<?= base_url()?>public/assets/dist/img/avatar5.png" alt="User profile picture">
                <?php }  ?>
                       
                </div>

                <h3 class="profile-username text-center"><?= !empty($first_name)?ucfirst($user['first_name']).' '.$user['last_name']:'User Name';?></h3>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Referral id</b> <a class="float-right"><?= !empty($user['referral_id'])?$user['referral_id']:'XXXXXXXXXX'?></a>
                  </li>
				  <li class="list-group-item">
                    <b>Mobile Number</b> <a class="float-right"><?= !empty($user['mobile_number'])?$user['mobile_code'].$user['mobile_number']:'XXXXXXXXXX'?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Email</b> <a class="float-right"><?= !empty($user['email'])?$user['email']:'XXXXXXXXXX'?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Address</b> <a class="float-right"><?php
                      $address = !empty($user['address'])?$user['address']:'------';
                      $state = !empty($user['state']!='0')?$user['state']:'------';
                      $city =  !empty($user['city']!='0')?$user['city']:'------';
                      echo $address.' '.$city.' '.$state;

                    ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Status</b> <a class="float-right"><?php
                      if ($user['status']==0) {
                       echo '<span class="badge badge-danger">Block</span>';
                      }else{
                        echo '<span class="badge badge-success">active</span>';
                      }
                    ?></a>
                  </li>
                </ul>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-body">
                <div class="tab-content">
                  <!-- /.tab-pane -->
                  <!-- /.tab-pane -->

                  <div class="tab-pane active" id="settings">
					  <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Last Update</label>
                        <div class="col-sm-10">
                          <?= !empty($user['last_update']!='0000-00-00 00:00:00')?formate_date($user['last_update']):'------'; ?>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Last Login</label>
                        <div class="col-sm-10">
                           <?= !empty($user['last_login']!='0000-00-00 00:00:00')?formate_date($user['last_login']):'------'; ?>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">IP Address</label>
                        <div class="col-sm-10">
                          <?= !empty($user['ip_address'])?$user['ip_address']:'------'; ?>
                        </div>
                      </div>
                  </div>
				  </div>
				  
				 <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
           
			<?php
			 $i=1;
			 foreach($vehicle as $row){ ?>
			   
			
            <div class="card">
              <div class="card-body">
                <div class="tab-content">
                  <!-- /.tab-pane -->
                  <!-- /.tab-pane -->
					<h5><?= 'Vehicle : '.$i++;?></h5>
                  <div class="tab-pane active" id="settings">
				    <div class="row">
					 <div class="col-md-9">
					  <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-2">
                          <?= $row['name']; ?>
                        </div>
						 <label for="inputName" class="col-sm-2 col-form-label">Type</label>
                        <div class="col-sm-2">
                          <?= $row['type']; ?>
                        </div>
						 <label for="inputName" class="col-sm-2 col-form-label">Brand</label>
                        <div class="col-sm-2">
                          <?= $row['brand']; ?>
                        </div>
						 <label for="inputEmail" class="col-sm-2 col-form-label">Model</label>
                        <div class="col-sm-2">
                           <?= $row['model'] ?>
                        </div>
						<label for="inputName2" class="col-sm-2 col-form-label">Fuel Type</label>
                        <div class="col-sm-2">
                          <?= $row['fuel_type']; ?>
                        </div>
						<label for="inputName2" class="col-sm-2 col-form-label">City</label>
                        <div class="col-sm-2">
                          <?= $row['city']; ?>
                        </div>
						<label for="inputName2" class="col-sm-2 col-form-label">No. Plate</label>
                        <div class="col-sm-2">
                          <?= $row['vehicle_no_plate']; ?>
                        </div>
						
                      </div>
                      </div>
					  <div class="col-md-3">
						 <!-- /.card-header -->
						 <?php
						    $images = explode(',',$row['vehicle_images']);
							
						 ?>
						      <div id="carouselExampleIndicators<?= $row['vehicle_id']?>" class="carousel slide" data-ride="carousel">
								  <ol class="carousel-indicators">
								  <?php
								   foreach($images as $key=>$value){ 
								   ?>
									   <li data-target="#carouselExampleIndicators<?= $row['vehicle_id']?>" data-slide-to="<?= $key?>" class="<?= ($key=='0')?'active':'';?>"></li>
								  <?php  } ?>
								  </ol>
								  <div class="carousel-inner">
								  <?php
								    foreach($images as $key=>$value){ 
									   if($key=='0'){ ?>
										  <div class="carousel-item carousel-item-next carousel-item-left">
											  <img class="d-block w-100" height="100" width="100" src="<?= base_url()?>public/image_gallary/vehicle/<?= $value;?>" >
											</div>
									   <?php }elseif((count($images)-1)==$key){ ?>
										   <div class="carousel-item active carousel-item-left">
											  <img class="d-block w-100" height="100" width="100" src="<?= base_url()?>public/image_gallary/vehicle/<?= $value;?>">
											</div>
										   
									   <?php }else{ ?>
										   <div class="carousel-item">
											  <img class="d-block w-100" height="100" width="100" src="<?= base_url()?>public/image_gallary/vehicle/<?= $value;?>">
											</div>
									   <?php }
									 ?>
								    
								  	 <?php }  ?>
								  </div>
								   
								  <a class="carousel-control-prev" href="#carouselExampleIndicators<?= $row['vehicle_id']?>" role="button" data-slide="prev">
									<span class="carousel-control-prev-icon" aria-hidden="true"></span>
									<span class="sr-only">Previous</span>
								  </a>
								  <a class="carousel-control-next" href="#carouselExampleIndicators<?= $row['vehicle_id']?>" role="button" data-slide="next">
									<span class="carousel-control-next-icon" aria-hidden="true"></span>
									<span class="sr-only">Next</span>
								  </a>
									
								</div>
						 </div>
					  </div>
					  
                  </div>
				  </div>
				  
				 <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            
				   
			 <?php } ?>
			 </div>
			
            <!-- /.nav-tabs-custom -->
          
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
<!-- AdminLTE App -->
<script src="<?= base_url()?>public/assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url()?>public/assets/dist/js/demo.js"></script>
</body>
</html>
