<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');


if ( ! function_exists('notify_message')) {
	function notify_message($class,$message){
		$ci = & get_instance();
	 switch ($class) {
		case "success":
			 	$alertMsg = "<script type='text/javascript'>
				            $(function() { const Toast = Swal.mixin({ toast: true, position: 'top-end', showConfirmButton: false, timer: 3000 });
				            toastr.success('hello Ajit kumar');
				             });
				          </script>";
						  break;
	    case "info":
				$alertMsg = "<script type='text/javascript'>
				            $(function() { const Toast = Swal.mixin({ toast: true, position: 'top-end', showConfirmButton: false, timer: 3000 });
				            toastr.info('hello Ajit kumar');
				             });
				          </script>";
						  break;
		
		case "error":
				$alertMsg = "<script type='text/javascript'>
				            $(function() { const Toast = Swal.mixin({ toast: true, position: 'top-end', showConfirmButton: false, timer: 3000 });
				            toastr.error('hello Ajit kumar');
				             });
				          </script>";
						  break;
		case "warning":
					$alertMsg = "<script type='text/javascript'>
				            $(function() { const Toast = Swal.mixin({ toast: true, position: 'top-end', showConfirmButton: false, timer: 3000 });
				            toastr.warning('hello Ajit kumar');
				             });
				          </script>";
						  break;
		}

		 $ci->session->set_flashdata('message', $alertMsg);
		
      
     
	}
}


?>