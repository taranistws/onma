<?php 
include_once('common.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta HTTP-EQUIV="content-type" CONTENT="text/html; charset=utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title><?= utf8_encode($getGeneralSettings['meta_title']); ?> </title>
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


        <!-- preloader -->
        <div class="preloader"></div>
        <!-- preloader -->


        <!-- main header -->
<?php include_once('includes/header.php'); ?>


        <!-- banner-section -->
        <section class="banner-section ">
            <div class="banner-carousel owl-theme owl-carousel owl-dots-none">

<?php $getSliders=$ad->getSliders();  
while ( $getSlidersrow = mysqli_fetch_array($getSliders,MYSQLI_ASSOC)) { ?>
 

                <div class="slide-item">
                    <div class="image-layer" style="background-image:url(<?= $getSlidersrow['image']; ?>)"></div>
                    <div class="auto-container">
                        <div class="content-box">
                            <h1><?= utf8_encode($getSlidersrow['title']); ?></h1>
                            <p><?= utf8_encode($getSlidersrow['description']); ?></p>
                            <div class="btn-box">
                                <a href="<?= utf8_encode($getSlidersrow['link']); ?>" class="theme-btn-one">Was können wir für Sie tun?</a>
                            </div>
                        </div> 
                    </div>
                </div>
<?php  } ?>

            </div>
        </section>
        <!-- banner-section end -->


         <!-- clients-section -->
        <section class="clients-section">
            <div class="auto-container">
                <div class="clients-carousel owl-carousel owl-theme owl-nav-none owl-dots-none">
               
<?php $getPatners=$ad->getPatners();  
while ( $getPatners2 = mysqli_fetch_array($getPatners)) { ?>


                    <figure class="clients-logo-box"><a href="<?= $getPatners2['link'];  ?>"><img src="<?= $getPatners2['image'];  ?>" alt="Patner"></a></figure>

                  <?php } ?>
                  
                </div>
            </div>
        </section>
        <!-- clients-section end -->


<?php 
$getWidgetsData1=$ad->getWidgetsData(4); 
$getWidgetsData6=$ad->getWidgetsData(6); 
$getWidgetsData5=$ad->getWidgetsData(5); 

//print_r($getWidgetsData1);


?>

        <!-- about-section -->
        <section class="about-section">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <div class="image_block_1">
                            <div class="image-box">
                                <figure class="image image-1"><img src="<?= $getWidgetsData1['image']; ?>" alt="<?= utf8_encode($getWidgetsData1['title']); ?>"></figure>
                                <figure class="image image-2"><img src="<?= $getWidgetsData6['image']; ?>" alt=""></figure>
                                <!-- <div class="image-content">
                                    <div class="icon-box"><i class="flaticon-recruitment"></i></div>
                                    <h5>Find Perfect Candidate</h5>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content_block_1">
                            <div class="content-box">
                                <div class="sec-title">
                                 
                                    <h2><?= utf8_encode($getWidgetsData1['title']); ?></h2>
                                </div>
                                <div class="text">
                                    <p style="padding-bottom: 15px;"><?= utf8_encode($getWidgetsData1['description']); ?> </p>
                                </div>
                                
                                <div class="lower-box">
                                    <div class="author-box">
                                        <figure class="signature-box"><img src="<?= $getWidgetsData5['image']; ?>" alt="<?= $getWidgetsData5['title']; ?>"></figure>
                                        
                                        <span class="designation"><?= utf8_encode($getWidgetsData5['title']); ?></span>
                                    </div>
                                    <div class="experienct-box">
                                        <div class="inner">
                                         <?= utf8_encode($getWidgetsData5['description']); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-section end -->
       <?php 
$getWidgetsData7=$ad->getWidgetsData(7); 
       ?>
        <section class="about-style-two">
            <div class="bg-layer" style="background-image: url(<?= $getWidgetsData7['image']; ?>);"></div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-xl-6 col-lg-12 col-md-12 content-column">
                        <div class="content_block_6">
                            <div class="content-box">

<?= utf8_encode($getWidgetsData7['description']); ?>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

 <?php 
$getWidgetsData24=$ad->getWidgetsData(24); 
       ?>
        <!-- feature-section -->
        <section class="feature-section bg-color-1 centred">
            <div class="auto-container">
                <div class="sec-title centred">
                
                    <h2><?= utf8_encode($getWidgetsData7['title']); ?></h2>
                </div>
                <div class="row clearfix">

                <?php $getPostData=$ad->getPostData(36);  
while ( $getPostDatarow = mysqli_fetch_array($getPostData,MYSQLI_ASSOC)) { ?>
                    <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                        <div class="feature-block-one">
                            <div class="inner-box">
                              
                                <h2><?= utf8_encode($getPostDatarow['title']); ?></h2>
                                <p><?php $datap= utf8_encode($getPostDatarow['description']);  
                                ?>
                                    <?php echo substr(strip_tags($datap),0,110) . "..."; ?>

                                </p>
                                <figure class="image-box">
                                    <img src="<?= $getPostDatarow['image']; ?>" alt="<?= utf8_encode($getPostDatarow['title']); ?>" style="height: 330px;">
                                    <a href="<?php echo SITE_PATH.'post/'.$getPostDatarow['slug']; ?>" class="theme-btn-one">Weiterlesen</a>
                                </figure>
                            </div>
                        </div>
                    </div>
                   <?php } ?>
                   
                </div>

 <?php 
$getWidgetsData8=$ad->getWidgetsData(8); 
$getWidgetsData9=$ad->getWidgetsData(9); 
$getWidgetsData10=$ad->getWidgetsData(10); 
$getWidgetsData11=$ad->getWidgetsData(11); 
       ?>

                <div class="row clearfix">
                    <div class="col-lg-3 col-md-6 col-sm-12 process-block">
                        <div class="process-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                              <?= utf8_encode($getWidgetsData8['description']); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 process-block">
                        <div class="process-block-one wow fadeInUp animated animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                 <?= utf8_encode($getWidgetsData9['description']); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 process-block">
                        <div class="process-block-one wow fadeInUp animated animated" data-wow-delay="500ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                  <?= utf8_encode($getWidgetsData10['description']); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 process-block">
                        <div class="process-block-one wow fadeInUp animated animated" data-wow-delay="500ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                              <?= utf8_encode($getWidgetsData11['description']); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- feature-section end -->

<?php 
$getWidgetsData13=$ad->getWidgetsData(13); 
$getWidgetsData14=$ad->getWidgetsData(14); 
?>
         <!-- agency-section -->
        <section class="agency-section" style="background-image: url(assets/images/agency-1.jpg);" style="margin-top:5%;">
            <div class="auto-container">
                <div class="row align-items-center clearfix">
                    <div class="col-md-12 col-sm-12">
                     <h2 style="color:#fff;"><strong><?= utf8_encode($getWidgetsData13['title']); ?></strong></h2>
                 </div>

                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">

                          <div class="content_block_3">
                            <div class="content-box">
                                <div class="tabs-box">
                                   
                                    <div class="tabs-content"> 
                                               
                                                <div class="text">
                                                    <?= utf8_encode($getWidgetsData13['description']); ?>
                                                </div> 
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content_block_3">
                            <div class="content-box">
                                <div class="tabs-box">
                                   
                                    <div class="tabs-content">
                                        <div class="tab active-tab" id="tab-1">
                                            <div class="inner-box">
                                               
                                                <div class="text">
                                                    <?= utf8_encode($getWidgetsData14['description']); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- agency-section end -->

        <!-- funfact-section -->
        <section class="funfact-section centred">
            <div class="auto-container">
                <div class="inner-container">
                    <div class="row clearfix">
<?php 
$getWidgetsData12=$ad->getWidgetsData(12); 

echo utf8_encode($getWidgetsData12['description']);
?>
                     
                    </div>
                </div>
            </div>
        </section>
        <!-- funfact-section end -->



<?php 
$getWidgetsData24=$ad->getWidgetsData(24); 
?>
        <!-- service-section -->
        <section class="service-section bg-color-1">
            <div class="auto-container">
                <div class="sec-title centred">
                    
                    <h2>  <?= utf8_encode($getWidgetsData24['description']); ?></h2>
                </div>
                <div class="row clearfix">

                     <?php $getPostData2=$ad->getPostData(35);  


while ( $getPostDatarow2 = mysqli_fetch_array($getPostData2,MYSQLI_ASSOC)) { ?>

                    <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <a href="<?php echo SITE_PATH.'post/'.$getPostDatarow2['slug']; ?>">
                                <figure class="image-box">
                        <img src="<?= $getPostDatarow2['image']; ?>" alt="<?= utf8_encode($getPostDatarow2['title']); ?>" style="height: 330px;" />
                                  
                                </figure>
                            </a>
                                <div class="lower-content">
                                 <p><?php $datap1= utf8_encode($getPostDatarow2['description']);  
                                ?>
                                    <?php echo substr(strip_tags($datap1),0,110) . "..."; ?>

                                </p>
                                    <div class="link"><a href="<?php echo SITE_PATH.'post/'.$getPostDatarow2['slug']; ?>">Weiterlesen</a></div>
                                    <div class="light-icon"><i class="flaticon-consulting"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php } ?>
                 
                  
                </div>
            </div>
        </section>
        <!-- service-section end -->

<?php 
$getWidgetsData15=$ad->getWidgetsData(15); 
$getWidgetsData16=$ad->getWidgetsData(16); 
?>

        <section class="about-style-two" style="padding: 80px 0;">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-xl-6 col-lg-12 col-md-12 content-column">
                        <div class="content_block_6">
                            <div class="content-box">
                                <div class="sec-title">
                                  
                                    <h2> <?= utf8_encode($getWidgetsData15['title']); ?></h2>
                                </div>
                                <div class="progress-inner">
                                    <div class="progress-content">
                                        <div class="text" style="margin-bottom: 15px;">
                                            <p style="padding-bottom: 15px;"> <?= utf8_encode($getWidgetsData15['description']); ?></p>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12 col-md-12 content-column">
                        <section class="feature-style-two">
                            <div class="auto-container">
                                <div class="inner-container mr-0 clearfix">
                                    <div class="single-item">
                                        <div class="inner-box">
                                            <div class="icon-box"><i class="fas fa-check"></i></div>
                                            <h4> <?= utf8_encode($getWidgetsData16['title']); ?></h4>
                                            <p><?= utf8_encode($getWidgetsData16['description']); ?> </p>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>

       
<?php 
$getWidgetsData17=$ad->getWidgetsData(17);  
?>
        <section class="video-section" style="background-image: url(assets/images/video-1.jpg);">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 left-column">
                        <div class="content_block_7">
                            <div class="content-box">
                                <div class="sec-title light"> 
                                    <h2><?= utf8_encode($getWidgetsData17['description']); ?></h2>
                                </div>
                                <div class="video-btn">
                                    <a href="javascript:;" class="lightbox-image1 video-btn" data-caption="">
                                        <i class="fas fa-play"></i>
                                        <span class="border-animation border-1"></span>
                                        <span class="border-animation border-2"></span>
                                        <span class="border-animation border-3"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <?php 
$getWidgetsData18=$ad->getWidgetsData(18);  
$getWidgetsData19=$ad->getWidgetsData(19);  
$getWidgetsData20=$ad->getWidgetsData(20);  
?>

                    <div class="col-lg-6 col-md-12 col-sm-12 right-column">
                        <div class="content_block_8">
                            <div class="content-box">
                                <div class="text">
                                   
                                </div>
                                <div class="inner-box">
                                    <div class="single-item">
                                        <div class="icon-box"><i class="flaticon-recruitment-1"></i></div>
                                        <h4><?= utf8_encode($getWidgetsData18['title']); ?></h4>
                                        <p><?= utf8_encode($getWidgetsData18['description']); ?></p>
                                    </div>
                                    <div class="single-item">
                                        <div class="icon-box"><i class="flaticon-background-check"></i></div>
                                         <h4><?= utf8_encode($getWidgetsData19['title']); ?></h4>
                                        <p><?= utf8_encode($getWidgetsData19['description']); ?></p>
                                    </div>

                                    <div class="single-item">
                                        <div class="icon-box"><i class="flaticon-recruitment-1"></i></div>
                                         <h4><?= utf8_encode($getWidgetsData20['title']); ?></h4>
                                        <p><?= utf8_encode($getWidgetsData20['description']); ?></p>
                                    </div>

                                </div>
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       
<?php 
$getWidgetsData21=$ad->getWidgetsData(21); 

?>
        <!-- working-process -->
        <section class="working-process centred">
            <div class="auto-container">
                <div class="sec-title centred">
                 
                    <p style="font-size: 20px;  line-height: 28px; font-weight: 700; margin-bottom: 6px; color: #000;"><?= utf8_encode($getWidgetsData21['description']); ?></p>
                </div>
                <div class="row clearfix" style="background: #272727;padding: 3%;">
               <?php 
 $gowithgetPatners=$ad->gowithgetPatners();

while ( $gowithgetPatners2 = mysqli_fetch_array($gowithgetPatners)) { 
               ?>

                    <div class="col-lg-2 col-md-6 col-sm-12 team-block">
                        <div class="team-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"> 
                                   <a href="#" style="background: #272727;" > <img src="<?= $gowithgetPatners2['image']; ?>" alt="<?= $gowithgetPatners2['title']; ?>" style="background: #272727;" > </a>
                                    
                                </figure>
                                <div class="lower-content" style="background: #272727;">
                               
                                </div>
                            </div>
                        </div>
                    </div>
                  <?php } ?>
                   
                    
                </div>
            </div>
        </section>
        <!-- working-process end -->


        

<?php 
$getWidgetsData23=$ad->getWidgetsData(23); 

?>

        <!-- testimonial-section -->
        <section class="testimonial-section centred">
            <div class="auto-container">
                <div class="sec-title centred">
                    <p><?= utf8_encode($getWidgetsData23['title']); ?></p>
                    <h2><?= utf8_encode($getWidgetsData23['description']); ?></h2>
                </div>
                <div class="inner-container">
                    <div class="three-item-carousel owl-carousel owl-theme owl-dots-none owl-nav-none">

<?php 

$getTestimonials=$ad->getTestimonials(); 

while ( $getTestimonials2 = mysqli_fetch_array($getTestimonials)) { 
?>
                  <div class="testimonial-block-one">
                            <div class="inner-box">
                                <div class="icon-box">"</div>
                                <p><?= utf8_encode($getTestimonials2['title']); ?></p>
                                <h5><?= utf8_encode($getTestimonials2['description']); ?></h5>
                                <figure class="image-box"><img src="<?= $getTestimonials2['image']; ?>" alt="<?= utf8_encode($getTestimonials2['title']); ?>"></figure>
                            </div>
                        </div>
                        
                      <?php } ?>
                        
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial-section end --> 

<?php 
$getWidgetsData21=$ad->getWidgetsData(21);  

?>
        <!-- cta-style-two -->
        <section class="cta-style-two centred" style="background-image: url(<?= SITE_PATH; ?>assets/images/cta-1.jpg);">
            <div class="auto-container">
                <div class="inner-box">
                    <div class="text">
                        <div class="shape">
                            <div class="shape-1" style="background-image: url(<?= SITE_PATH; ?>assets/images/shape-6.png);"></div>
                            <div class="shape-2" style="background-image: url(<?= SITE_PATH; ?>assets/images/shape-7.png);"></div>
                        </div>
                        <h2><?= utf8_encode($getWidgetsData21['title']); ?></h2>
                        <p><?= utf8_encode($getWidgetsData21['description']); ?></p>
                    </div>
                    <div class="btn-box">
                        <a href="#" class="theme-btn-one">Entdecke mehr</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- cta-style-two end -->


<?php include_once('includes/footer.php'); ?>

</body>

</html>
