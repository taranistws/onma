<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');  
 
require_once 'dompdf/autoload.inc.php';

use Dompdf\Dompdf;


class Pdf extends Dompdf
{
 public function __construct()
 {
   parent::__construct();
 } 
 
 
 public function pdf_create($html,$filename)
 {
   $dompdf = new Dompdf();
   $dompdf->loadHtml($html);
   $dompdf->set_paper('A4','portrait');
   $dompdf->render();
   $dompdf->stream($filename.'.pdf',array ("Attachment" => true));
 }


 
 public function pdf_Attachment($html,$fileName)
 {
     $dompdf = new Dompdf();
   $dompdf->loadHtml($html);
   $dompdf->set_paper('A4','portrait');
   $dompdf->render();
$pdf_gen =$dompdf->output();
$full_path=$fileName;

file_put_contents('img/'.$full_path, $pdf_gen);

 }




 
 
 
 
 
}

?>