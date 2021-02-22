<?php 
include_once('common.php');
 $getpostinfo=$ad->getPostInfo($_GET['slug']);
?>
<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<title><?= $getpostinfo['meta_title']; ?></title>

<meta name="description" content="<?= $getpostinfo['meta_description']; ?>" />

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

<?php if(empty( $getpostinfo['id']))  {
    ?>
<script type="text/javascript">
    window.location.href=<?php echo  SITE_PATH ?>;

</script>
    <?php
} ?>

</head>


<!-- page wrapper -->
<body>

    <div class="boxed_wrapper">


        <!-- preloader -->
        <div class="preloader"></div>
        <!-- preloader -->
  <?php include_once('includes/header.php');    ?>

     


        <!-- Page Title -->
        <?php if(!empty($getpostinfo['image'])) {
            ?>
            <section class="page-title centred" style="background-image: url(<?= $getpostinfo['image']; ?>);">
            <?php 
        }  else { ?>
             <section class="page-title centred" style="background-image: url(assets/images/services.jpg);">
        <?php } ?>
            <div class="auto-container">
                <div class="content-box">
                    <div class="title">
                        <h1><?= utf8_encode($getpostinfo['name']); ?></h1>
                    </div>
                    <ul class="bread-crumb clearfix">
                        <li><a href="<?= SITE_PATH; ?>">Home</a></li>
                        <li><?= utf8_encode($getpostinfo['name']); ?></li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Page Title -->


<?php 
 $category=$ad->getpostdatabycategory($getpostinfo['category']); 
?>
        <!-- service-section -->
        <section class="service-details">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                        <div class="service-sidebar">
                            <div class="category-widget">
                                <ul class="category-list clearfix">
                                    <?php 
                                     while($categoryrow=mysqli_fetch_array($category,MYSQLI_ASSOC)) {
                                     ?>
                                    <li><a href="<?php echo SITE_PATH.'post/'.$categoryrow['slug']; ?>" class="current"><i class="fas fa-angle-right"></i><?= utf8_encode($categoryrow['name']); ?></a></li>
                                  <?php } ?>
                            </div>
                          
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                        <div class="service-details-content">
                            <figure class="image-box"> 
                                <img src="<?= $getpostinfo['image']; ?>" alt="<?= utf8_encode($getpostinfo['name']); ?>">
                             <?php   
$category=explode(',',$getpostinfo['category']); 
$i=1;
foreach ($category as $key => $value) {
    if($i==1) {
?>
 <span class="category"><?=  $ad->getCategoryname($value); ?></span>
<?php 
}
$i++; 
}    ?>

                            </figure>
                            <div class="text">
                                <h2><?= utf8_encode($getpostinfo['name']); ?></h2>
                            <?= utf8_encode($getpostinfo['description']); ?>

                            </div> 
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- service-section end -->

<?php include_once('includes/footer.php'); ?>

</body>

</html>
