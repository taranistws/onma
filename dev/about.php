<?php 
include_once('common.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title> <?= utf8_encode($getGeneralSettings['meta_title']); ?> | Über Uns</title>
<meta name="description" content="<?= utf8_encode($getGeneralSettings['meta_description']); ?>"/>
<!-- Fav Icon -->
<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">

<!-- Stylesheets -->
<link href="assets/css/font-awesome-all.css" rel="stylesheet">
<link href="assets/css/flaticon.css" rel="stylesheet">
<link href="assets/css/owl.css" rel="stylesheet">
<link href="assets/css/bootstrap.css" rel="stylesheet">
<link href="assets/css/jquery.fancybox.min.css" rel="stylesheet">
<link href="assets/css/animate.css" rel="stylesheet">
<link href="assets/css/color.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/css/responsive.css" rel="stylesheet">

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
                <div class="slide-item">
                    <div class="image-layer" style="background-image:url(assets/images/banner-1.jpg)"></div>
                    <div class="auto-container">
                        <div class="content-box">
                            <h1>The Right Candidate for your Business</h1>
                            <p>There are many of passages of lorem Ipsum, but the majori have suffered alteration in some form.</p>
                            <div class="btn-box">
                                <a href="index-2.html" class="theme-btn-one">Discover More</a>
                            </div>
                        </div> 
                    </div>
                </div>
                <div class="slide-item">
                    <div class="image-layer" style="background-image:url(assets/images/banner-2.jpg)"></div>
                    <div class="auto-container">
                        <div class="content-box">
                            <h1>The Right Candidate for your Business</h1>
                            <p>There are many of passages of lorem Ipsum, but the majori have suffered alteration in some form.</p>
                            <div class="btn-box">
                                <a href="index-2.html" class="theme-btn-one">Discover More</a>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </section>
        <!-- banner-section end -->


         <!-- clients-section -->
        <section class="clients-section">
            <div class="auto-container">
                <div class="clients-carousel owl-carousel owl-theme owl-nav-none owl-dots-none">
                    <figure class="clients-logo-box"><a href="index-2.html"><img src="assets/images/clients-logo-1.png" alt=""></a></figure>
                    <figure class="clients-logo-box"><a href="index-2.html"><img src="assets/images/clients-logo-2.png" alt=""></a></figure>
                    <figure class="clients-logo-box"><a href="index-2.html"><img src="assets/images/clients-logo-3.png" alt=""></a></figure>
                    <figure class="clients-logo-box"><a href="index-2.html"><img src="assets/images/clients-logo-4.png" alt=""></a></figure>
                    <figure class="clients-logo-box"><a href="index-2.html"><img src="assets/images/clients-logo-5.png" alt=""></a></figure>
                </div>
            </div>
        </section>
        <!-- clients-section end -->


        <!-- about-section -->
        <section class="about-section">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <div class="image_block_1">
                            <div class="image-box">
                                <figure class="image image-1"><img src="assets/images/about-1.jpg" alt=""></figure>
                                <figure class="image image-2"><img src="assets/images/about-2.jpg" alt=""></figure>
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
                                    <p>What is Lorem Ipsum?</p>
                                    <h2>Best Quality Recruitment Staffing Agency</h2>
                                </div>
                                <div class="text">
                                    <p style="padding-bottom: 15px;">Lorem ipsum is simply free text dolor sit amet, consectetur notted adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua lonm andhn.</p>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                                </div>
                                <div class="inner-box clearfix">
                                    <div class="single-item">
                                        <h5><span>01</span>Strategic Partners</h5>
                                        <p>Lorem ipsum dolor sited is amet consectetur notted.</p>
                                    </div>
                                    <div class="single-item">
                                        <h5><span>02</span>Sourcing the Best</h5>
                                        <p>Lorem ipsum dolor sited is amet consectetur notted.</p>
                                    </div>
                                </div>
                                <div class="lower-box">
                                    <div class="author-box">
                                        <figure class="author-thumb"><img src="assets/images/author-1.png" alt=""></figure>
                                        <figure class="signature-box"><img src="assets/images/signature-1.png" alt=""></figure>
                                        <span class="designation">CEO & CO Founder</span>
                                    </div>
                                    <div class="experienct-box">
                                        <div class="inner">
                                            <h2>38</h2>
                                            <p>Years of Experience</p>
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
       
        <section class="about-style-two">
            <div class="bg-layer" style="background-image: url(assets/images/about-11.jpg);"></div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-xl-6 col-lg-12 col-md-12 content-column">
                        <div class="content_block_6">
                            <div class="content-box">
                                <div class="sec-title">
                                    <p>What is Lorem Ipsum?</p>
                                    <h2>Welcome to Our Professional Recruitment Agency</h2>
                                </div>
                                <div class="progress-inner">
                                    <div class="progress-content">
                                        <div class="text">
                                            <p style="padding-bottom: 15px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                                        </div>
                                        <div class="progress-box">
                                            <h5>Stuffing</h5>
                                            <div class="bar">
                                                <div class="bar-inner count-bar counted" data-percent="80%" style="width: 80%;"><div class="count-text">80%</div></div>
                                            </div>
                                        </div>
                                        <div class="progress-box">
                                            <h5>Recruitment</h5>
                                            <div class="bar">
                                                <div class="bar-inner count-bar counted" data-percent="60%" style="width: 60%;"><div class="count-text">60%</div></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="box">
                                        <div class="icon-box"><i class="flaticon-recruitment"></i></div>
                                        <h5>Find Perfect Candidate</h5>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- feature-section -->
        <section class="feature-section bg-color-1 centred">
            <div class="auto-container">
                <div class="sec-title centred">
                    <p>What is Lorem Ipsum?</p>
                    <h2>What is Lorem Ipsum?</h2>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                        <div class="feature-block-one">
                            <div class="inner-box">
                                <div class="icon-box"><i class="flaticon-mission"></i></div>
                                <h2>What is Lorem Ipsum?</h2>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                <figure class="image-box">
                                    <img src="assets/images/feature-1.jpg" alt="">
                                    <a href="index-2.html" class="theme-btn-one">Read more</a>
                                </figure>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                        <div class="feature-block-one">
                            <div class="inner-box">
                                <div class="icon-box"><i class="flaticon-creative-idea"></i></div>
                                <h2>What is Lorem Ipsum?</h2>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                <figure class="image-box">
                                    <img src="assets/images/feature-2.jpg" alt="">
                                    <a href="index-2.html" class="theme-btn-one">Read more</a>
                                </figure>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                        <div class="feature-block-one">
                            <div class="inner-box">
                                <div class="icon-box"><i class="flaticon-solution"></i></div>
                                <h2>What is Lorem Ipsum?</h2>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                <figure class="image-box">
                                    <img src="assets/images/feature-3.jpg" alt="">
                                    <a href="index-2.html" class="theme-btn-one">Read more</a>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-6 col-sm-12 process-block">
                        <div class="process-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="icon-box">
                                    <i class="flaticon-investment"></i>
                                    <span>01</span>
                                    <div class="icon-shape" style="background-image: url(assets/images/shape-4.png);background-size: 100%;"></div>
                                </div>
                                <h3>What is Lorem Ipsum?</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 process-block">
                        <div class="process-block-one wow fadeInUp animated animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="icon-box">
                                    <i class="flaticon-checklist"></i>
                                    <span>02</span>
                                    <div class="icon-shape" style="background-image: url(assets/images/shape-4.png);background-size: 100%;"></div>
                                </div>
                                <h3>What is Lorem Ipsum?</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 process-block">
                        <div class="process-block-one wow fadeInUp animated animated" data-wow-delay="500ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="icon-box">
                                    <i class="flaticon-outsourcing"></i>
                                    <span>03</span>
                                    <div class="icon-shape" style="background-image: url(assets/images/shape-4.png);background-size: 100%;"></div>
                                </div>
                                <h3>What is Lorem Ipsum?</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 process-block">
                        <div class="process-block-one wow fadeInUp animated animated" data-wow-delay="500ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="icon-box">
                                    <i class="flaticon-outsourcing"></i>
                                    <span>04</span>
                                    <div class="icon-shape" style="background-image: url(assets/images/shape-4.png);background-size: 100%;"></div>
                                </div>
                                <h3>What is Lorem Ipsum?</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- feature-section end -->


         <!-- agency-section -->
        <section class="agency-section" style="background-image: url(assets/images/agency-1.jpg);">
            <div class="auto-container">
                <div class="row align-items-center clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content_block_2">
                            <div class="content-box">
                                <div class="sec-title light">
                                    <p>What is Lorem Ipsum?</p>
                                    <h2>Lorem Ipsum is simply dummy text of the printing.</h2>
                                    <p class="large-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                                </div>
                                <div class="btn-box"><a href="about.html" class="theme-btn-one">Contact us</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content_block_3">
                            <div class="content-box">
                                <div class="tabs-box">
                                    <div class="tab-btn-box">
                                        <ul class="tab-btns tab-buttons clearfix">
                                            <li class="tab-btn active-btn" data-tab="#tab-1">What is Lorem Ipsum?</li>
                                        </ul>
                                    </div>
                                    <div class="tabs-content">
                                        <div class="tab active-tab" id="tab-1">
                                            <div class="inner-box">
                                                <figure class="image-box"><img src="assets/images/agency-11.jpg" alt=""></figure>
                                                <div class="text">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                                    <ul class="list clearfix">
                                                        <li>Support on hiring employeers</li>
                                                        <li>Get rxceptional service for growth</li>
                                                        <li>Outsourced consulting business</li>
                                                        <li>Support on hiring employeers</li>
                                                        <li>Get rxceptional service for growth</li>
                                                    </ul>
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
                        <div class="col-lg-3 col-md-6 col-sm-12 counter-block">
                            <div class="counter-block-one">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="flaticon-scrum"></i></div>
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="1500" data-stop="8080">0</span>
                                    </div>
                                    <p>Project Completed</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 counter-block">
                            <div class="counter-block-one">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="flaticon-business-idea"></i></div>
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="1500" data-stop="697">0</span>
                                    </div>
                                    <p>Employer Solutions</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 counter-block">
                            <div class="counter-block-one">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="flaticon-recruit"></i></div>
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="1500" data-stop="440">0</span>
                                    </div>
                                    <p>Job Seekers</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 counter-block">
                            <div class="counter-block-one">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="flaticon-customer-review"></i></div>
                                    <div class="count-outer count-box">
                                        <span class="count-text" data-speed="1500" data-stop="2887">0</span>
                                    </div>
                                    <p>Happy Customers</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- funfact-section end -->




        <!-- service-section -->
        <section class="service-section bg-color-1">
            <div class="auto-container">
                <div class="sec-title centred">
                    <p>What is Lorem Ipsum?</p>
                    <h2>What is Lorem Ipsum?</h2>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <img src="assets/images/service-1.jpg" alt="">
                                    <span class="category">Lorem Ipsum</span>
                                    <i class="flaticon-consulting"></i>
                                </figure>
                                <div class="lower-content">
                                    <h3><a href="staffing-solutions.html">What is Lorem Ipsum?</a></h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                    <div class="link"><a href="hr-consulting.html">Read More</a></div>
                                    <div class="light-icon"><i class="flaticon-consulting"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow fadeInUp animated animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <img src="assets/images/service-2.jpg" alt="">
                                    <span class="category">Lorem Ipsum</span>
                                    <i class="flaticon-controller"></i>
                                </figure>
                                <div class="lower-content">
                                    <h3><a href="staffing-solutions.html">What is Lorem Ipsum?</a></h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                    <div class="link"><a href="technology-resource.html">Read More</a></div>
                                    <div class="light-icon"><i class="flaticon-controller"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow fadeInUp animated animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <img src="assets/images/service-3.jpg" alt="">
                                    <span class="category">Lorem Ipsum</span>
                                    <i class="flaticon-policy"></i>
                                </figure>
                                <div class="lower-content">
                                    <h3><a href="staffing-solutions.html">What is Lorem Ipsum?</a></h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                    <div class="link"><a href="staffing-solutions.html">Read More</a></div>
                                    <div class="light-icon"><i class="flaticon-policy"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- service-section end -->


        <section class="about-style-two" style="padding: 80px 0;">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-xl-6 col-lg-12 col-md-12 content-column">
                        <div class="content_block_6">
                            <div class="content-box">
                                <div class="sec-title">
                                    <p>What is Lorem Ipsum?</p>
                                    <h2>What is Lorem Ipsum?</h2>
                                </div>
                                <div class="progress-inner">
                                    <div class="progress-content">
                                        <div class="text" style="margin-bottom: 15px;">
                                            <p style="padding-bottom: 15px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        </div>
                                    </div>
                                </div>
                                <img src="assets/images/project-16.jpg">
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
                                            <h4>What is Lorem Ipsum?</h4>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                                        </div>
                                    </div>
                                    <div class="single-item">
                                        <div class="inner-box">
                                            <div class="icon-box"><i class="fas fa-check"></i></div>
                                            <h4>What is Lorem Ipsum?</h4>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                        </div>
                                    </div>
                                    <div class="single-item">
                                        <div class="inner-box">
                                            <div class="icon-box"><i class="fas fa-check"></i></div>
                                            <h4>What is Lorem Ipsum?</h4>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                                        </div>
                                    </div>
                                    <div class="single-item">
                                        <div class="inner-box">
                                            <div class="icon-box"><i class="fas fa-check"></i></div>
                                            <h4>What is Lorem Ipsum?</h4>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>

       

        <section class="video-section" style="background-image: url(assets/images/video-1.jpg);">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 left-column">
                        <div class="content_block_7">
                            <div class="content-box">
                                <div class="sec-title light">
                                    <p>What is Lorem Ipsum?</p>
                                    <h2>Lorem Ipsum is simply dummy text of the printing.</h2>
                                </div>
                                <div class="video-btn">
                                    <a href="#" class="lightbox-image video-btn" data-caption="">
                                        <i class="fas fa-play"></i>
                                        <span class="border-animation border-1"></span>
                                        <span class="border-animation border-2"></span>
                                        <span class="border-animation border-3"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 right-column">
                        <div class="content_block_8">
                            <div class="content-box">
                                <div class="text">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                                </div>
                                <div class="inner-box">
                                    <div class="single-item">
                                        <div class="icon-box"><i class="flaticon-recruitment-1"></i></div>
                                        <h4>What is Lorem Ipsum?</h4>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    </div>
                                    <div class="single-item">
                                        <div class="icon-box"><i class="flaticon-background-check"></i></div>
                                        <h4>What is Lorem Ipsum?</h4>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    </div>
                                </div>
                                <div class="btn-box"><a href="index-3.html" class="theme-btn-one">Contact Us</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       


        <!-- working-process -->
        <section class="working-process centred">
            <div class="auto-container">
                <div class="sec-title centred">
                    <p>What is Lorem Ipsum?</p>
                    <h2>What is Lorem Ipsum?</h2>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-6 col-sm-12 team-block">
                        <div class="team-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"> 
                                    <img src="assets/images/team-1.jpg" alt="">
                                    <div class="content-box clearfix">
                                        <span>Connect</span>
                                        <ul class="social-links">
                                            <li><a href="index-3.html"><i class="fab fa-facebook-square"></i></a></li>
                                            <li><a href="index-3.html"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="index-3.html"><i class="fab fa-pinterest-p"></i></a></li>
                                            <li><a href="index-3.html"><i class="fab fa-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </figure>
                                <div class="lower-content">
                                    <h4><a href="index-3.html">Jessica Brown</a></h4>
                                    <span class="designation">Director</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 team-block">
                        <div class="team-block-one wow fadeInUp animated animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"> 
                                    <img src="assets/images/team-2.jpg" alt="">
                                    <div class="content-box clearfix">
                                        <span>Connect</span>
                                        <ul class="social-links">
                                            <li><a href="index-3.html"><i class="fab fa-facebook-square"></i></a></li>
                                            <li><a href="index-3.html"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="index-3.html"><i class="fab fa-pinterest-p"></i></a></li>
                                            <li><a href="index-3.html"><i class="fab fa-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </figure>
                                <div class="lower-content">
                                    <h4><a href="index-3.html">Mike Hardson</a></h4>
                                    <span class="designation">Director</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 team-block">
                        <div class="team-block-one wow fadeInUp animated animated" data-wow-delay="400ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"> 
                                    <img src="assets/images/team-3.jpg" alt="">
                                    <div class="content-box clearfix">
                                        <span>Connect</span>
                                        <ul class="social-links">
                                            <li><a href="index-3.html"><i class="fab fa-facebook-square"></i></a></li>
                                            <li><a href="index-3.html"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="index-3.html"><i class="fab fa-pinterest-p"></i></a></li>
                                            <li><a href="index-3.html"><i class="fab fa-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </figure>
                                <div class="lower-content">
                                    <h4><a href="index-3.html">Christine Eve</a></h4>
                                    <span class="designation">Director</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 team-block">
                        <div class="team-block-one wow fadeInUp animated animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"> 
                                    <img src="assets/images/team-4.jpg" alt="">
                                    <div class="content-box clearfix">
                                        <span>Connect</span>
                                        <ul class="social-links">
                                            <li><a href="index-3.html"><i class="fab fa-facebook-square"></i></a></li>
                                            <li><a href="index-3.html"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="index-3.html"><i class="fab fa-pinterest-p"></i></a></li>
                                            <li><a href="index-3.html"><i class="fab fa-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </figure>
                                <div class="lower-content">
                                    <h4><a href="index-3.html">Kevin Smith</a></h4>
                                    <span class="designation">Director</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- working-process end -->


        




        <!-- testimonial-section -->
        <section class="testimonial-section centred">
            <div class="auto-container">
                <div class="sec-title centred">
                    <p>What is Lorem Ipsum?</p>
                    <h2>What is Lorem Ipsum?</h2>
                </div>
                <div class="inner-container">
                    <div class="three-item-carousel owl-carousel owl-theme owl-dots-none owl-nav-none">
                        <div class="testimonial-block-one">
                            <div class="inner-box">
                                <div class="icon-box">"</div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                                <h5>Mike Hardson</h5>
                                <figure class="image-box"><img src="assets/images/testimonial-1.png" alt=""></figure>
                            </div>
                        </div>
                        <div class="testimonial-block-one">
                            <div class="inner-box">
                                <div class="icon-box">"</div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                                <h5>Christine Eve</h5>
                                <figure class="image-box"><img src="assets/images/testimonial-2.png" alt=""></figure>
                            </div>
                        </div>
                        <div class="testimonial-block-one">
                            <div class="inner-box">
                                <div class="icon-box">"</div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                                <h5>Christine Eve</h5>
                                <figure class="image-box"><img src="assets/images/testimonial-3.png" alt=""></figure>
                            </div>
                        </div>
                        <div class="testimonial-block-one">
                            <div class="inner-box">
                                <div class="icon-box">"</div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                                <h5>Christine Eve</h5>
                                <figure class="image-box"><img src="assets/images/testimonial-2.png" alt=""></figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial-section end -->


       

        <!-- news-section -->
        <section class="news-section pb-0 sec-pad">
            <div class="auto-container">
                <div class="sec-title centred">
                    <p>What is Lorem Ipsum?</p>
                    <h2>What is Lorem Ipsum?</h2>
                </div>
                <div class="inner-container">
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                            <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <figure class="image-box">
                                        <a href="blog-details.html"><img src="assets/images/news-1.jpg" alt=""></a>
                                        <div class="post-date">
                                            <h4>25</h4>
                                            <p>AUG</p>
                                        </div>
                                    </figure>
                                    <div class="lower-content">
                                        <ul class="post-info clearfix">
                                            <li><i class="far fa-folder-open"></i>Admin</li>
                                        </ul>
                                        <h3><a href="blog-details.html">Lorem Ipsum is simply dummy text.</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                            <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <figure class="image-box">
                                        <a href="blog-details.html"><img src="assets/images/news-2.jpg" alt=""></a>
                                        <div class="post-date">
                                            <h4>24</h4>
                                            <p>AUG</p>
                                        </div>
                                    </figure>
                                    <div class="lower-content">
                                        <ul class="post-info clearfix">
                                            <li><i class="far fa-folder-open"></i>Admin</li>
                                        </ul>
                                        <h3><a href="blog-details.html">Lorem Ipsum is simply dummy text.</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                            <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                                <div class="inner-box">
                                    <figure class="image-box">
                                        <a href="blog-details.html"><img src="assets/images/news-3.jpg" alt=""></a>
                                        <div class="post-date">
                                            <h4>23</h4>
                                            <p>AUG</p>
                                        </div>
                                    </figure>
                                    <div class="lower-content">
                                        <ul class="post-info clearfix">
                                            <li><i class="far fa-folder-open"></i>Admin</li>
                                        </ul>
                                        <h3><a href="blog-details.html">Lorem Ipsum is simply dummy text.</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- news-section end -->


        <!-- cta-style-two -->
        <section class="cta-style-two centred" style="background-image: url(assets/images/cta-1.jpg);">
            <div class="auto-container">
                <div class="inner-box">
                    <div class="text">
                        <div class="shape">
                            <div class="shape-1" style="background-image: url(assets/images/shape-6.png);"></div>
                            <div class="shape-2" style="background-image: url(assets/images/shape-7.png);"></div>
                        </div>
                        <h2>Lorem Ipsum is simply dummy text of the printing.</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                    <div class="btn-box">
                        <a href="index-3.html" class="theme-btn-one">Discover More</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- cta-style-two end -->


<?php include_once('includes/footer.php'); ?>

</body>

</html>
