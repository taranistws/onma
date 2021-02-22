<?php 
include_once('common.php');

?>
<!DOCTYPE html>
<html lang="de">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">


<title><?= utf8_encode($getGeneralSettings['meta_title']); ?> | Kontakt </title>
<meta name="description" content="<?= utf8_encode($getGeneralSettings['meta_description']); ?>"/>
<!-- Fav Icon -->
<link rel="icon" href="<?php echo  SITE_PATH ?>assets/images/favicon.ico" type="image/x-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">

<!-- Stylesheets -->
<link href="<?php echo  SITE_PATH ?>assets/css/font-awesome-all.css" rel="stylesheet">
<link href="<?php echo  SITE_PATH ?>assets/css/flaticon.css" rel="stylesheet">
<link href="<?php echo  SITE_PATH ?>assets/css/owl.css" rel="stylesheet">
<link href="<?php echo  SITE_PATH ?>assets/css/bootstrap.css" rel="stylesheet">
<link href="<?php echo  SITE_PATH ?>assets/css/jquery.fancybox.min.css" rel="stylesheet">
<link href="<?php echo  SITE_PATH ?>assets/css/animate.css" rel="stylesheet">
<link href="<?php echo  SITE_PATH ?>assets/css/color.css" rel="stylesheet">
<link href="<?php echo  SITE_PATH ?>assets/css/style.css" rel="stylesheet">
<link href="<?php echo  SITE_PATH ?>assets/css/responsive.css" rel="stylesheet">

</head>


<!-- page wrapper -->
<body>

    <div class="boxed_wrapper">

<?php include_once('includes/header.php');     ?>

   


        <!-- Page Title -->
        <section class="page-title centred" style="background-image: url(assets/images/contact-us.jpg);">
            <div class="auto-container">
                <div class="content-box">
                    <div class="title">
                        <h1>Kontakt</h1>
                    </div>
                    <ul class="bread-crumb clearfix">
                        <li><a href="<?= SITE_PATH; ?>">Home</a></li>
                        <li>Kontakt</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Page Title -->

        <!-- contact-info-section -->
        <section class="contact-info-section">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 info-column">
                        <div class="single-info-box">
                            <div class="inner-box">
                                <div class="icon-box"><i class="flaticon-email"></i></div>
                                <p><a href="mailto:<?= $getGeneralSettings['mail_id']; ?>"><?= $getGeneralSettings['mail_id']; ?></a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 info-column">
                        <div class="single-info-box">
                            <div class="inner-box">
                                <div class="icon-box"><i class="flaticon-telephone"></i></div>
                                <p><a href="tel:<?= $getGeneralSettings['contact_no']; ?>"><?= $getGeneralSettings['contact_no']; ?></a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 info-column">
                        <div class="single-info-box">
                            <div class="inner-box">
                                <div class="icon-box"><i class="flaticon-pin"></i></div>
                                <p><?= utf8_encode($getGeneralSettings['address']); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-info-section end -->

<?php 
$getWidgetsData25=$ad->getWidgetsData(25); 
?>
        <!-- contact-section -->
        <section class="contact-section sec-pad">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-12 col-sm-12 title-column">
                        <div class="title-inner">
                            <div class="sec-title"> 
                                <h2 style="font-size:20px;"><?= utf8_encode($getWidgetsData25['title']); ?></h2>
                            </div>
                            <div class="text"> 
                                <p><?= utf8_encode($getWidgetsData25['description']); ?></p>
                            </div>
                            <ul class="social-links clearfix"> 
                                <li><h6>Connect:</h6></li>
                                <li><a href="<?= $getGeneralSettings['twitter_link']; ?>" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="<?= $getGeneralSettings['facebook_link']; ?>" target="_blank"><i class="fab fa-facebook-square"></i></a></li> 
                                <li><a href="<?= $getGeneralSettings['linked_in_link']; ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12 col-sm-12 form-column">
                        <p id="error_msg04" style="font-weight: bold;"></p>
                      
                        <div class="form-inner">
                            <form method="post" action="" id="contact-form" class="default-form"> 
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                             <input type="text" name="username" id="contactusername" placeholder="Vollständiger Name"  >
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="email" name="email" id="contactemail" placeholder="E-Mail-Addresse" >
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                        <input type="text" name="phone" id="contactphone" placeholder="Telefonnummer">
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                        <input type="text" name="subject" id="contactsubject"  placeholder="Gegenstand">
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <textarea name="message" id="contactmessage" placeholder="Botschaft"></textarea>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">

                                          <div id="loading-image" style="display: none;" ><img src="<? SITE_PATH; ?>assets/images/loader.gif" style="height:50px;" /></div>

                                        <button class="theme-btn-one" type="button" id="contactsubmit" name="submit-form">einreichen</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-section end -->

<?php 
$getWidgetsData26=$ad->getWidgetsData(26); 
?>
        <!-- google-map-section -->
        <section class="google-map-section">
            <div class="map-inner">
               <?= $getWidgetsData26['description']; ?>
            </div>
        </section>
        <!-- google-map-section end -->

<?php include_once('includes/footer.php'); ?>

<style type="text/css">
    #error_msg04{
        color:red;
    }
</style>
</body>

</html>
