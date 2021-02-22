<?php
///print_r(permission());
$arr = permission();
?>

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url()?>admin/dashboard" class="brand-link">
     <!-- <img src="<?= base_url()?>public/image_gallary/ServiceKarLogo.jpg" alt="Servicekar Logo" class="brand-image img-circle elevation-3" style="opacity: .8">-->
     
      <span class="brand-text font-weight-light">Admin Panel </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
     

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          
          <?php if(in_array('dashboard',$arr)){ ?>
          <li class="nav-item <?php if($menu=='dashboard'){ echo 'menu-open'; }?>">
            <a href="<?= base_url()?>dashboard" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>  Dashboard </p>
            </a>
          </li>
        <?php } ?>
        
        
     
  <li class="nav-item <?php if($menu=='menu'){ echo 'menu-open'; }?>">
            <a href="<?= base_url()?>menu" class="nav-link">
              <i class="nav-icon fas fa-cubes"></i>
              <p>  Menu </p>
            </a>
          </li>
      
    
     <!-- 
  <li class="nav-item <?php if($menu=='projects'){ echo 'menu-open'; }?>">
            <a href="<?= base_url()?>projects" class="nav-link">
              <i class="nav-icon fas fa-cubes"></i>
              <p>  Projects </p>
            </a>
          </li>
        -->
        
         <li class="nav-item <?php if($menu=='category'){ echo 'menu-open'; }?>">
            <a href="<?= base_url()?>category" class="nav-link">
              <i class="nav-icon fas fa-cubes"></i>
              <p>  Categories </p>
            </a>
          </li>
          
        
           <li class="nav-item <?php if($menu=='cms'){ echo 'menu-open'; }?>">
            <a href="<?= base_url()?>cms" class="nav-link">
              <i class="nav-icon fas fa-cubes"></i>
              <p>  Pages </p>
            </a>
          </li>

          <li class="nav-item <?php if($menu=='blogs'){ echo 'menu-open'; }?>">
            <a href="<?= base_url()?>blogs" class="nav-link">
              <i class="nav-icon fas fa-cubes"></i>
              <p>  Blogs </p>
            </a>
          </li>
     
        
        
         <?php if(in_array('gowithpatner',$arr)){ ?>
          <li class="nav-item <?php if($menu=='gowithpatner'){ echo 'menu-open'; }?>">
            <a href="<?= base_url()?>gowithpatner" class="nav-link">
              <i class=" nav-icon fa fa-envelope" aria-hidden="true"></i>
              <p>  Go with patner </p>
            </a>
          </li>
        <?php }    ?>

           <?php if(in_array('banner',$arr)){ ?>
          <li class="nav-item <?php if($menu=='banner'){ echo 'menu-open'; }?>">
            <a href="<?= base_url()?>banner" class="nav-link">
              <i class=" nav-icon fa fa-envelope" aria-hidden="true"></i>
              <p>  Banner </p>
            </a>
          </li>
        <?php }    ?>




         <?php if(in_array('patner',$arr)){ ?>
          <li class="nav-item <?php if($menu=='patner'){ echo 'menu-open'; }?>">
            <a href="<?= base_url()?>patner" class="nav-link">
            
              <i class="nav-fa fa fa-cogs" aria-hidden="true"></i>

              <p>  Patners </p>
            </a>
          </li>
        <?php }    ?>



            <?php if(in_array('widgets',$arr)){ ?>
          <li class="nav-item <?php if($menu=='widgets'){ echo 'menu-open'; }?>">
            <a href="<?= base_url()?>widgets" class="nav-link"> 
              <i class="nav-fa fa fa-paint-brush" aria-hidden="true"></i> 
              <p>  Widgets </p>
            </a>
          </li>
        <?php }    ?>

  <?php if(in_array('widgets',$arr)){ ?>
          <li class="nav-item <?php if($menu=='testimonials'){ echo 'menu-open'; }?>">
            <a href="<?= base_url()?>testimonials" class="nav-link"> 
              <i class="nav-fa fa fa-paint-brush" aria-hidden="true"></i> 
              <p>  Testimonials </p>
            </a>
          </li>
        <?php }    ?>




   <?php if(in_array('gernal',$arr)){ ?>
          <li class="nav-item <?php if($menu=='gernal'){ echo 'menu-open'; }?>">
            <a href="<?= base_url()?>setting/gernal" class="nav-link">
              <i class=" nav-icon fa fa-envelope" aria-hidden="true"></i>
              <p>  Setting Gernal </p>
            </a>
          </li>
        <?php }    ?>
        
      
          <?php 
              if(in_array('logout',$arr)){ ?>
          <li class="nav-item">
            <a href="<?= base_url()?>login/logout" class="nav-link">
              <i class="nav-icon far fa-user"></i>
              <p>
               Logout
              </p>
            </a>
          </li>
        <?php } ?>
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>