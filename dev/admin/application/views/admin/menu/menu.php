<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?= $title.' | '.$title; ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/png" href="<?= base_url()?>public/image_gallary/favicon.png" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url()?>public/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?= base_url()?>public/assets/plugins/summernote/summernote-bs4.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url()?>public/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url()?>public/assets/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="<?= base_url()?>public/assets/plugins/toastr/toastr.min.css">
  <link rel="stylesheet" href="<?= base_url()?>public/assets/plugins/select2/css/select2.min.css">
  
  <!-- Google Font: Source Sans Pro -->
  
  
  
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  
  <!-- ********************menu*****************-->
   <link rel="stylesheet" href="<?php echo base_url(); ?>public/assets/menu/css/style.css">
<link href="<?php echo base_url() ?>public/assets/menu/css/bootstrap.min.css" rel="stylesheet">
    <script>
        const _BASE_URL = '<?php echo base_url(); ?>';
        let current_group_id = <?php if (!empty($group_id)) {
            echo $group_id;
        } ?>;
    </script>
    <script src="<?php echo base_url(); ?>public/assets/menu/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>public/assets/menu/js/jquery-ui-1.10.3.custom.min.js"></script>
    <script src="<?php echo base_url(); ?>public/assets/menu/js/jquery.mjs.nestedSortable.js"></script>
    <script src="<?php echo base_url(); ?>public/assets/menu/js/menu.js"></script>

    <script src="<?php echo base_url() ?>public/assets/menu/js/bootstrap.min.js"></script>
      <!-- ********************menu*****************-->
    
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
            <h1>Menu add </h1>
          </div>
          <div class="col-sm-6">
            
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    
<div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
          <header>
              <h1 class="top-header-text">Menu Manager</h1> 
          </header>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8">
        <div id="main">
          <ul id="menu-group">
              <?php foreach ($menu_groups as $menu) : ?>
                  <li id="group-<?php echo $menu->id; ?>">
                      <a href="<?php echo site_url('menu/menu'); ?>/<?php echo $menu->id; ?>">
                          <?php echo $menu->title; ?>
                      </a>
                  </li>
              <?php endforeach; ?>
              <li id="add-group"><a href="<?php echo site_url('menugroup/add'); ?>"
                                    title="Add New Menu" class="btn  btn-default">+</a>
              </li>
          </ul>
          

          <form method="post" id="form-menu" action="<?php echo site_url('menu/save_position'); ?>">
              <div class="ns-row" id="ns-header">
                  <div class="actions">Actions</div>
                  <div class="ns-url">URL</div>
                  <div class="ns-title">Title</div>
              </div>
              <?php echo $menu_ul; ?>
              <div id="ns-footer">
                  <button type="submit" class="btn btn-default btn-success" id="btn-save-menu">Save
                      Menu
                  </button>
              </div>
              <br>
          </form>
        </div>
      </div>
      <div class="col-md-4">
        <section class="box">
          <h2>Current Menu</h2>
          <div>
              <span id="edit-group-input"><?php echo $group_title->title; ?></span>
              (ID: <b><?php echo $group_id; ?></b>)
              <div class="edit-group-buttons">
                  <a id="edit-group" href="#" title="Edit Menu"><span class="btn btn-primary"
                                                                      style="color: #ffffff">Edit</span></a>
                  <?php if ($group_id > 1) : ?>
                      <a id="delete-group" href="#"><span class="btn btn-danger"
                                                          style="color:
                                                                   #ffffff">Delete</span></a>
                  <?php endif; ?>
              </div>
          </div>
      </section>
      <section class="box">
          <h2>Add To Menu</h2>
          <div>
              <form id="form-add-menu" method="post" action="<?php echo site_url('menu/add'); ?>">
                  <div class="form-group">
                      <label for="menu-title">Title</label>
                      <input style="width: 100% !important;" type="text" name="title" required
                             id="menu-title"
                             class="form-control">
                  </div>

 <div class="form-group">
                      <label for="menu-url1">Select Type</label>
<select name="pagetype" id="pagetype" class="form-control" required >
      <option value="">Select Type</option> 
      <option value="1">Page</option> 
        <option value="2">Custome Url</option> 
    </select>
 </div>
    


                  <div class="form-group" style="">
                    
                             <div id="label_avatar"> 
</div>

                  </div>
                  <p class="buttons">
                      <input type="hidden" name="group_id" value="<?php echo $group_id; ?>">
                      <button id="add-menu" type="submit" class="btn btn-success ">Add Menu Item
                      </button>
                  </p>
              </form>
          </div>
      </section>
      <div id="loading">
          <img src="<?php echo base_url(); ?>public/assets/menu/images/ajax-loader.gif" alt="Loading">
          Processing...
      </div>
      </div>
    </div>
</div>
</div>




<!-- /.content-wrapper -->
 <?php $this->load->view('admin/inc/footer');?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>

<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Delete Confirmation</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <input type="hidden" name="" class="delete_class" value="">
        <p class="text-center">Are You Want To Sure Delete User ?</p>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" onclick="deletes()" class="btn btn-primary">Delete</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>

<!-- ./wrapper -->

<!-- jQuery -->

<!-- Bootstrap 4 -->
<script src="<?= base_url()?>public/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url()?>public/assets/plugins/select2/js/select2.full.min.js"></script>
<!-- DataTables -->
<script src="<?= base_url()?>public/assets/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?= base_url()?>public/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url()?>public/assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url()?>public/assets/dist/js/demo.js"></script>
<script src="<?= base_url()?>public/assets/plugins/summernote/summernote-bs4.min.js"></script>

<!-- page script -->
<script>
 $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()
	 /*  $('.select2bs4').select2({
      theme: 'bootstrap4'
    })   */
 });



  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });

$(function () {
    // Summernote
    $('.textarea').summernote()

  });

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('.show_image').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$("#thumb_image").change(function(){
    readURL(this);
});

$('#pagetype').on('change', function() {
var pagetype = this.value;

 $.ajax({
                    type: "POST",
                    cache: false,
                    url: "<?php echo base_url(); ?>menu/menutype",
                    data: 'pagetype='+ pagetype,
                        success: function(data) { 
                $("#label_avatar").html(data);
                    }
                });



});


</script>




</body>
</html>