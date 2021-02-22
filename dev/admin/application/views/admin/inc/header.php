<?php
 $session_arr= $this->session->userdata('session_arr');
 $admin = $this->app_model->get_special_details('tbl_admin',array('id'=>$session_arr['admin_id']));

?>


<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="javascript:void()" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="javascript:void()" class="nav-link">  <b>  Welcome  : <?php
				    echo ucwords($admin['first_name'].' '.$admin['last_name']);
				  ?>   </b> </a>
      </li>
    </ul>

 
	
	<ul class="navbar-nav">
      <li class="nav-item d-none d-sm-inline-block">
        <a href="javascript:void()" class="nav-link" id="ct"></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-user"></i>
          <span class="badge badge-danger navbar-badge"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <!--<img src="<?= base_url()?>public/image_gallary/ServiceKarLogo.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">  -->
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  <?php
				    echo ucwords($admin['first_name'].' '.$admin['last_name']);
				  ?>
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm"><?= $admin['email']?></p>
                <p class="text-sm text-muted"><?= formate_date($admin['last_login']);?></p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="<?= base_url()?>setting" class="dropdown-item">
            <i class="fas fa-user mr-2"></i> &nbsp;&nbsp;View Profile
            <span class="float-right text-muted text-sm"></span>
          </a>
		  <div class="dropdown-divider"></div>
          <a href="<?= base_url()?>setting/password" class="dropdown-item">
            <i class="fas fa-user mr-2"></i> &nbsp;&nbsp;Change Password
          </a>
          <div class="dropdown-divider"></div>
		 <a href="<?= base_url()?>login/logout" class="dropdown-item">
			<i class="fas fa-lock"></i> &nbsp;&nbsp; Logout
			<span class="float-right text-muted text-sm"></span>
		  </a>
          <div class="dropdown-divider"></div>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <!--<li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>-->
     
    </ul>
  </nav>