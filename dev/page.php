<?php 
include_once('common.php');
?>

<!DOCTYPE html>
<html lang="de">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title><?= $getPageInfo['meta_title']; ?></title>
<meta name="description" content="<?= $getPageInfo['meta_description']; ?>"/>
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
        <!-- preloader -->
      <!--  <div class="preloader"></div>-->
        <!-- preloader -->


      <?php include_once('includes/header.php'); 

      ?>
        <!-- main-header end --> 
        <!-- Page Title -->
        <?php if(!empty($getPageInfo['image'])) { ?>
        <section class="page-title centred" style="background-image: url(<?= $getPageInfo['image']; ?>);">
        <?php } else {
            ?>
        <section class="page-title centred" style="background-image: url(<?php echo  SITE_PATH ?>assets/images/page-title.jpg);">
            <?php 
        } ?>
            <div class="auto-container">
                <div class="content-box">
                    <div class="title">
                        <h1><?= utf8_encode($getPageInfo['name']); ?></h1>
                    </div>
                    <ul class="bread-crumb clearfix">
                        <li><a href="<?= SITE_PATH; ?>">Home</a></li>
                        <li><?= utf8_encode($getPageInfo['name']); ?></li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Page Title --> 

        <!-- about-section -->
        <section class="about-section">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 content-column"> 
<?php echo  utf8_encode($getPageInfo['description']); ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-section end --> 
<?php include_once('includes/footer.php'); ?>

</body>

</html>
