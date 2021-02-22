 <footer class="main-footer">
  
    <div class="float-right d-none d-sm-inline-block">
     
    </div>
  </footer>
  <!-- SweetAlert2 -->
 <script src="<?= base_url()?>public/assets/plugins/jquery/jquery.min.js"></script>
<script src="<?= base_url()?>public/assets/plugins/sweetalert2/sweetalert2.min.js"></script>
<script src="<?= base_url()?>public/assets/plugins/toastr/toastr.min.js"></script>
<?php
   if (!empty($this->session->flashdata('class'))){ 
       $class = $this->session->flashdata('class');
       $message = $this->session->flashdata('message');
       if($class=='success'){
       		echo "<script type='text/javascript'>
            $(function() { const Toast = Swal.mixin({ toast: true, position: 'top-end', showConfirmButton: false, timer: 3000 });
            toastr.success('".$message."');
             });
          </script>";
       }
       if($class=='info'){
       	echo "<script type='text/javascript'>
            $(function() { const Toast = Swal.mixin({ toast: true, position: 'top-end', showConfirmButton: false, timer: 3000 });
            toastr.info('".$message."');
             });
          </script>";
       }
        if($class=='error'){
       	echo "<script type='text/javascript'>
            $(function() { const Toast = Swal.mixin({ toast: true, position: 'top-end', showConfirmButton: false, timer: 3000 });
            toastr.error('".$message."');
             });
          </script>";
       }
        if($class=='warning'){
       	echo "<script type='text/javascript'>
            $(function() { const Toast = Swal.mixin({ toast: true, position: 'top-end', showConfirmButton: false, timer: 3000 });
            toastr.warning('".$message."');
             });
          </script>";
       }
     
       
      }
    ?>

<link rel="stylesheet" href="<?= base_url()?>public/assets/datepicker/jquery-ui.css">
<script src="<?= base_url()?>public/assets/datepicker/jquery-ui.js"></script>
<script>
  $( function(){
    $("#datepicker,#datepicker1,#datepicker2").datepicker({ 
		dateFormat: 'dd/mm/yy' 
	});
  });
  

  </script>
<script type="text/javascript"> 
		function display_c(){
		var refresh=1000; // Refresh rate in milli seconds
		mytime=setTimeout('display_ct()',refresh)
		}

		function display_ct() {
		var weekday = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
		var monthNames = ["January", "February", "March", "April", "May", "June",
		  "July", "August", "September", "October", "November", "December"
		];
		var x = new Date()
		var dayname = weekday[x.getDay()];
		var month=monthNames[x.getMonth()];
		var day=x.getDate();
		var year=x.getFullYear();
		if (month <10 ){month='0' + month;}
		if (day <10 ){day='0' + day;}
		var x3= dayname+', '+day+' '+month+' '+year;

		// time part //
		var hour=x.getHours();
		var minute=x.getMinutes();
		var second=x.getSeconds();
		if(hour <10 ){hour='0'+hour;}
		if(minute <10 ) {minute='0' + minute; }
		if(second<10){second='0' + second;}
		var x3 = x3 + ' ' +  hour+':'+minute+':'+second
		document.getElementById('ct').innerHTML = x3;
		display_c();
		 }
</script>
 
  
