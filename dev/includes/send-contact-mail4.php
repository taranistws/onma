<?php
ob_start();

	
if(isset($_POST['femail']) )
{

 $fusername=trim($_POST['fusername']);
$fphone=trim($_POST['fphone']);
$femail=trim($_POST['femail']);
$fmessage=trim($_POST['fmessage']);


$to="info@onmascout2.de";

//$to="tarani@stws.io";



	$subject="onmascout  Contact Query - onmascout";
$from="support@onmascout.de";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: '.$from . "\r\n";
/*if($send_me_cpoyad==1)
{
$headers .= 'Cc: '.$from . "\r\n";
}*/
	$matter='
	<html>
	<head>
	<title>onmascout Contact Query - onmascout</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	</head>
	<body>
	<table>
	
	<tr>
	<td colspan="2"> Dear Admin,<br> Someone wants to be  contact with you.</td>
	
	</tr>

	
	<tr>
	<td>Name:</td>
	<td>'.$fusername.'</td>
	</tr>
	<tr>
	<td>Phone.:</td>
	<td>'.$fphone.'</td>
	</tr>
	<tr>
	<td>Email:</td>
	<td>'.$femail.'</td>
	</tr>
     
 

	<tr>
	<td>Message:</td>
	<td>'.$fmessage.'</td>
	</tr>

	

	
	</table>
	</body>
	</html>
	';
	$yes=mail($to,$subject,$matter,$headers);
	if($yes)
	{
    echo ("Vielen Dank für Ihre Kontaktaufnahme - wir werden uns bald bei Ihnen melden!");
	}

	else
	{
		echo ("Ihre E-Mail wird nicht gesendet. Bitte versuche es erneut");
	}
 }
 
 // Join us query

?>

