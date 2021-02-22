<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?= $app_title.' | '.$title; ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url()?>public/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url()?>public/assets/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
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
             <li class=""><a  class="breadcrumb-item btn btn-primary"href="<?= base_url()?>category"><i class="fas fa-fast-backward"></i> Back</a></li>
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
                if ($user['image']!='') { ?>
                 <img class="profile-user-img img-fluid img-circle" src="<?= $user['image']?>" alt="User profile picture">
                <?php  } else { ?>
                    <img class="profile-user-img img-fluid img-circle" src="<?= base_url()?>public/assets/dist/img/avatar5.png" alt="User profile picture">
                <?php }  ?>
                       
                </div>

                <h3 class="profile-username text-center"><?= ucfirst($user['name']);?></h3>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Mobile Number</b> <a class="float-right"><?= !empty($user['phon_no'])?$user['phon_no']:'XXXXXXXXXX'?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Email</b> <a class="float-right"><?= !empty($user['email'])?$user['email']:'XXXXXXXXXX'?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Address</b> <a class="float-right"><?php
                      echo $address = !empty($user['address'])?$user['address']:'------';
                      

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
                    <form class="form-horizontal">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Join date</label>
                        <div class="col-sm-10">
                          <?= !empty($user['join_date']!='0000-00-00 00:00:00')?formate_date($user['join_date']):'------'; ?>
                        </div>
                      </div>
                      
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
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
<script src="<?= base_url()?>public/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url()?>public/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url()?>public/assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url()?>public/assets/dist/js/demo.js"></script>
</body>
</html>
