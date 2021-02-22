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
  <link rel="stylesheet" href="<?= base_url()?>public/assets/plugins/summernote/summernote-bs4.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url()?>public/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url()?>public/assets/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="<?= base_url()?>public/assets/plugins/toastr/toastr.min.css">
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
            <h1>Admin Setting</h1>
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
     <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-default">
              <div class="card-header">
                <h3 class="card-title">Gernal Setting</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
			  <form role="form" action="<?= base_url()?>setting/gernalupdate/<?= $id ?>" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Mail id</label>
                    <input type="email" name="mail_id" class="form-control" id="" value="<?= $general_settings['mail_id']?>" placeholder="Enter Mail id">
                  </div>
                  <span><?= form_error('mail_id');?></span>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-sm-6">
                         <label for="exampleInputPassword1">Contact No</label>
                         <input type="text" name="contact_no" class="form-control" id="" value="<?= $general_settings['contact_no']?>" placeholder="Contact No">
                      </div>
                       <span><?= form_error('contact_no');?></span>
                       <div class="col-sm-6">
                         <label for="exampleInputPassword1">Address</label>
                        <textarea class="form-control" style="width:100%;" name="address"> <?= $general_settings['address']?></textarea>
                       </div>
                       <span><?= form_error('last_name');?></span>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-sm-6">
                         <label for="exampleInputPassword1">Facebook Link</label>
                         <input type="text" name="facebook_link" class="form-control" id="" value="<?= $general_settings['facebook_link']?>" placeholder="Facebook Link">
                      </div>
                       <span><?= form_error('facebook_link');?></span>
                      <div class="col-sm-6">
                         <label for="exampleInputPassword1">Twitter Link</label>
    <input type="text" name="twitter_link" class="form-control" id="" value="<?= $general_settings['twitter_link']?>" placeholder="Twitter Link">
                      </div>
                       <span><?= form_error('twitter_link');?></span>
                    </div>
                  </div>



  <div class="form-group">
                    <div class="row">
                      <div class="col-sm-6">
                   
                      <div class="col-sm-6">
                         <label for="exampleInputPassword1">Linked in Link</label>
                         <input type="text" name="linked_in_link" class="form-control" id="" value="<?= $general_settings['linked_in_link']?>" placeholder="linked in link">
                      </div>
                       <span><?= form_error('linked_in_link');?></span>
                    </div>
                  </div>




                    <div class="form-group">
                    <div class="row">
                      <div class="col-sm-6">
                         <label for="exampleInputPassword1">Footer menu1 </label>
                       <textarea class="form-control" style="width:100%;" name="footer_menu1">  <?= $general_settings['footer_menu1']?></textarea> 
                      </div>
                       <span><?= form_error('vimeo_link');?></span>
                      <div class="col-sm-6">
                         <label for="exampleInputPassword1">Footer text</label>
                
                  <textarea class="form-control" style="width:100%;" name="footer_logo_below_text">  <?= $general_settings['footer_logo_below_text']?></textarea>
                      </div>
                  </div>


                   <div class="form-group">
                    <div class="row">
                      <div class="col-sm-6">
                         <label for="exampleInputPassword1">Footer menu2 </label>
                       <textarea class="form-control" style="width:100%;" name="footer_menu2">  <?= $general_settings['footer_menu2']?></textarea> 
                      </div>
                       <span><?= form_error('vimeo_link');?></span>
                      <div class="col-sm-6">
                         <label for="exampleInputPassword1">Copy Right</label>
                
                  <textarea class="form-control" style="width:100%;" name="copy_right_text">  <?= $general_settings['copy_right_text']?></textarea>
                      </div>
                  </div>



                   <div class="form-group">
                    <div class="row">
                      <div class="col-sm-6">
                         <label for="exampleInputPassword1">Meta Title </label>
                       <textarea class="form-control" style="width:100%;" name="meta_title">  <?= $general_settings['meta_title']?></textarea> 
                      </div>
                       <span><?= form_error('vimeo_link');?></span>
                      <div class="col-sm-6">
                         <label for="exampleInputPassword1">Meta Dscription</label>
                
                  <textarea class="form-control" style="width:100%;" name="meta_description">  <?= $general_settings['meta_description']?></textarea>
                      </div>
                  </div>




  <div class="form-group">
                    <div class="row">
                   
                      <div class="col-sm-6">
                         <label for="exampleInputPassword1"> Logo</label>
                          <?php if(!empty($general_settings['logo'])) { ?>
                         <img src="<?php echo $general_settings['logo'];  ?>"  style="width:100px;height: 100px;"/>
                       <?php } ?>

                          <input type="file" name="files[]" class="form-control" />
                      </div>
                       <span><?= form_error('files');?></span>
                        <div class="col-sm-6"></div>
                    </div>
                  </div>


 




                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-success pull-right">Save</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

           

          </div>
          <!--/.col (left) -->
          <!-- right column -->
         
          <!--/.col (right) -->
        </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
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

</script>

</body>
</html>
