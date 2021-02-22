$(document).ready(function(e) {

$('#submit_digital4').click(function(e) {
	e.preventDefault();

$("#error_msg4").css('color','red');

$fusername = $('#fusername').val();
$fphone=$('#fphone').val();
$name = $('#name4').val();
$femail=$('#femail').val();
$fmessage=$('#fmessage').val();
 // alert($recaptcha);

var emailRegex = new RegExp(/^([\w\.\-]+)@([\w\-]+)((\.(\w){2,3})+)$/i);

var valid = emailRegex.test($femail);



 if($femail == ""  &&  $fusername=="")

{
$('#error_msg4').html("Bitte geben Sie Pflichtfelder ein");
$('#name4').focus();
}
else  if($fusername == "")
{
$('#error_msg4').html("Bitte geben Sie Ihren Namen ein");
$('#name4').focus();
}
else if($fphone == "" || isNaN($fphone))
{
$('#error_msg4').html("Bitte geben Sie die Handynummer ein");
$('#mobile_no4').focus();
}
	
else  if($femail == "")
{
$('#error_msg4').html("Bitte geben Sie die E-Mail-ID ein");
$('#email4').focus();
}
else  if(!valid)
{
$('#error_msg4').html("Bitte geben Sie die gültige E-Mail-ID ein");
$('#email4').focus();
}


else if($fmessage == "")
{	
$('#error_msg4').html("Bitte geben Sie eine Nachricht ein");
$('#message4').focus();
}


else
{
$('#error_msg4').html(null);
$.ajax({
type: "POST",
cache: false,
url: sitepath+"includes/send-contact-mail4.php",
data: 'fusername='+ $fusername +'&fphone='+$fphone+'&femail='+$femail+'&fmessage='+$fmessage,
success: function(data) {
$("#error_msg4").css('color','green');
$("#error_msg4").html(data);
$("#fusername").val(null);
$("#fphone").val(null);
$("#femail").val(null);
$("#fmessage").val(null);
}
});
}

});	



$('#contactsubmit').click(function(e) {
	e.preventDefault();

$("#error_msg4").css('color','red');

$fusername = $('#contactusername').val();
$fphone=$('#contactphone').val();
$contactsubject = $('#contactsubject').val();
$femail=$('#contactemail').val();
$fmessage=$('#contactmessage').val();
 // alert($recaptcha);

var emailRegex = new RegExp(/^([\w\.\-]+)@([\w\-]+)((\.(\w){2,3})+)$/i);

var valid = emailRegex.test($femail);



 if($femail == ""  &&  $fusername=="")

{
$('#error_msg04').html("Bitte geben Sie Pflichtfelder ein");
$('#contactusername').focus();
}
else  if($fusername == "")
{
$('#error_msg04').html("Bitte geben Sie Ihren Namen ein");
$('#contactusername').focus();
}

else  if($femail == "")
{
$('#error_msg04').html("Bitte geben Sie die E-Mail-ID ein");
$('#contactemail').focus();
}
else  if(!valid)
{
$('#error_msg04').html("Bitte geben Sie die gültige E-Mail-ID ein");
$('#contactemail').focus();
}

else if($fphone == "" || isNaN($fphone))
{
$('#error_msg04').html("Bitte geben Sie die Handynummer ein");
$('#contactphone').focus();
}
	

else  if($contactsubject == "")
{
$('#error_msg04').html("Bitte geben Sie den Betreff ein");
$('#contactsubject').focus();
}


else if($fmessage == "")
{	
$('#error_msg04').html("Bitte geben Sie eine Nachricht ein");
$('#contactmessage').focus();
}


else
{
$('#error_msg04').html(null);
$.ajax({
type: "POST",
cache: false,
url: sitepath+"includes/send-contact-mail1.php",
data: 'fusername='+ $fusername +'&fphone='+$fphone+'&femail='+$femail+'&fmessage='+$fmessage+'&contactsubject='+$contactsubject,
   beforeSend: function() {
              $("#loading-image").show();
           },
success: function(data) {
$("#loading-image").hide();
$("#error_msg04").css('color','green');
$("#error_msg04").html(data);
$("#contactusername").val(null);
$("#contactemail").val(null);
$("#contactphone").val(null);
$("#contactsubject").val(null);
$("#contactmessage").val(null);

}
});
}

});	

	
});	
