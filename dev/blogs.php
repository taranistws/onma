<?php 
include_once('common.php');
include_once 'Pagination.class.php';
$baseURL=SITE_PATH."blogs.php";

$limit = 12;

// Paging limit & offset
$offset = !empty($_GET['page'])?(($_GET['page']-1)*$limit):0;

// Count of all records
$query   = $conn->query("SELECT COUNT(*) as rowNum FROM blogs where  status='1'");
$result  = $query->fetch_assoc();
$rowCount= $result['rowNum'];

// Initialize pagination class
$pagConfig = array(
    'baseURL' => $baseURL,
    'totalRows'=>$rowCount,
    'perPage'=>$limit
);
$pagination =  new Pagination($pagConfig);

?>

<!DOCTYPE html>
<html lang="de">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>Demo PHP Site | blogs</title>

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
        <section class="page-title centred" style="background-image: url(<?php echo  SITE_PATH ?>assets/images/services.jpg);">
            <div class="auto-container">
                <div class="content-box">
                    <div class="title">
                        <h1>Blogs</h1>
                    </div>
                    <ul class="bread-crumb clearfix">
                        <li><a href="<?= SITE_PATH; ?>">Home</a></li>
                        <li>Blogs</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Page Title -->

        <!-- service-section -->
        <section class="service-section sec-pad bg-color-1">
            <div class="auto-container">
                <div class="row clearfix">
<?php 
$sql = "SELECT * FROM blogs where status='1'  ORDER BY id DESC LIMIT $offset,$limit";
$query = mysqli_query($conn, $sql); 
if($query->num_rows > 0){ 
    while($row = $query->fetch_assoc()){ 

        $getCategorys1=$ad->getCategorys();

    ?>

                    <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box" style="margin-bottom: 35px;">
                                    <a href="<?php echo SITE_PATH.'post/'.$row['slug']; ?>"> 

                                <figure class="image-box">
       <img src="<?= $row['image']; ?>" alt="<?= utf8_encode($row['title']); ?>" style="height: 330px;">
                                    <?php   
$category=explode(',',$row['category']); 
$i=1;
foreach ($category as $key => $value) {
    if($i==1) {
?>
 <span class="category"><?=  $ad->getCategoryname($value); ?></span>
<?php 
}
$i++; 
}    ?>        </figure> </a>
                                <div class="lower-content">
                                    <h3><a href="<?php echo SITE_PATH.'post/'.$row['slug']; ?>"><?= utf8_encode($row['title']); ?></a></h3>
                                    <p><?php $datap1= utf8_encode($row['description']);  
                                    $newDate = date("d-m-Y", strtotime($row['created_at']));
                                ?>
                                <p> <span class="post-date"><?= $newDate; ?></span></p>
                                 

                                    <?php echo substr(strip_tags($datap1),0,110) . "..."; ?></p>
                                    <div class="link"><a href="<?php echo SITE_PATH.'post/'.$row['slug']; ?>">Read More</a></div>
                                    <div class="light-icon"><i class="flaticon-consulting"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                   <?php } ?>

                     <div class="col-lg-12 col-md-12 col-sm-12 ">
                   <?php echo $pagination->createLinks(); }  ?>

               </div>
                 
                   
                </div>
            </div>
        </section>
        <!-- service-section end -->


<?php include_once('includes/footer.php'); ?>

</body>

</html>
