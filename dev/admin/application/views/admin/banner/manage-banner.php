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
            <h1>Banner List</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
          <li class=""><a  class="breadcrumb-item btn btn-primary"href="<?= base_url()?>banner/add"><i class="fas fa-plus"></i> Add New</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <!-- /.card -->

          <div class="card">
            <div class="card-header">
    
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>SR. NO.</th>
              
				  <th>Name</th>
          <th>Description</th>
          <th>Link</th>
                  <th>Image</th>
                  <th>Date</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                 <?php
                 $i=1;
                 $j=1;
                  foreach ($banner as $row) {?>
                <tr>
                  <td><?= $j ?><?php  $i++; $j++; ?></td>
                  <td> <?= $row['title'];?></td>
                         <td> <?= $row['description'];?></td>
                                <td> <?= $row['link'];?></td>

                  <td> 
                 <img src="<?= $row['image'];?>"  style="width:100px; height:100px;"/></td>
                  <td><?= !empty($row['created_at']!='0000-00-00 00:00:00')?formate_date($row['created_at']):'------';?></td>
                  <td> <?php
                      if ($row['status']==0) {
                       echo '<span class="badge badge-danger">Block</span>';
                      }else{
                        echo '<span class="badge badge-success">active</span>';
                      }
                   ?> </td>
                  <td style="white-space: nowrap;">
                  <a href="<?= base_url()?>banner/edit/<?= $row['id']?>" class="btn bg-gradient-primary btn-xs"><i class="fas fa-pencil-alt"></i></a>
                   <?php
                      if ($row['status']==0) { ?>
                       <button type="button" class="btn bg-gradient-primary btn-xs" title="click active" onclick="status('1','<?= $row['id']?>')">
                        <i class="fa fa-ban"></i>
                      </button>
                      <?php } else { ?>
                        <button type="button" class="btn bg-gradient-primary btn-xs" title="click deactive" onclick="status('0','<?= $row['id']?>')">
                          <i class="fa fa-check"></i>
                        </button>
                      <?php } ?>
                      <button type="button" class="btn bg-gradient-primary btn-xs delete_data" data-delete="<?= $row['id']?>" data-toggle="modal" data-target="#modal-default"><i class="far fa-trash-alt"></i></button>
                      <br>
                   </td>
                </tr>
                 <?php }  ?>
                </tbody>
               
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
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
        <p class="text-center">Are You Want To Sure Delete  ?</p>
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

function deletes(){
   var deleteId= $('.delete_class').val();
   window.location.href='<?= base_url()?>banner/delete/'+deleteId;
}

function status(status,id){
   window.location.href='<?= base_url()?>banner/status/'+status+'/'+id;
}

$(document).on('click','.delete_data',function(){
  var id= $(this).attr('data-delete');
  $('.delete_class').val(id);
});


</script>
</body>
</html>
