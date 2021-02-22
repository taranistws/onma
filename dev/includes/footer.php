        <!-- main-footer -->
        <footer class="main-footer">
            <div class="footer-top" style="background-image: url(<?php echo  SITE_PATH ?>assets/images/footer-1.jpg);">
                <div class="auto-container">
                    <div class="footer-info clearfix">
                        <div class="single-item">
                            <div class="inner">
                                <div class="icon-box"><i class="flaticon-mail"></i></div>
                                <h6>Email</h6>
                                <p><a href="mailto:<?= $getGeneralSettings['mail_id']; ?>"><?= $getGeneralSettings['mail_id']; ?></a></p>
                            </div>
                        </div>
                        <div class="single-item">
                            <div class="inner">
                                <div class="icon-box"><i class="flaticon-phone"></i></div>
                                <h6>Call</h6>
                                <p><a href="tel:<?= $getGeneralSettings['contact_no']; ?>"><?= $getGeneralSettings['contact_no']; ?></a></p>
                            </div>
                        </div>
                        <div class="single-item">
                            <div class="inner">
                                <div class="icon-box"><i class="flaticon-address"></i></div>
                                <h6>Address</h6>
                                <p><?= utf8_encode($getGeneralSettings['address']); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="widget-section">
                        <div class="row clearfix">
                            <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                                <div class="footer-widget logo-widget">
                                    <figure class="footer-logo"><a href="<?= SITE_PATH; ?>"><img src="<?= $getGeneralSettings['logo']; ?>" alt=""></a></figure>
                                    <p><?= utf8_encode($getGeneralSettings['footer_logo_below_text']); ?></p>
                                    <ul class="social-links clearfix">
                                        <li><h6>Connect:</h6></li>
                                     <li><a href="<?= $getGeneralSettings['facebook_link']; ?>" target="_blank"><i class="fab fa-facebook-square"></i></a></li>
                            <li><a href="<?= $getGeneralSettings['twitter_link']; ?>" target="_blank"><i class="fab fa-twitter"></i></a></li>
                           
                            <li><a href="<?= $getGeneralSettings['linked_in_link']; ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>

                          
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-12 footer-column">
                                <div class="footer-widget links-widget">
                                    <div class="widget-title">
                                        <h4>Quick Links</h4>
                                    </div>
                                    <div class="widget-content">
                                        <ul class="links-list clearfix">
                                         <?= utf8_encode($getGeneralSettings['footer_menu1']); ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                                <div class="footer-widget post-widget">
                                    <div class="widget-title">
                                        <h4>Blogs</h4>
                                    </div>
                                    <div class="post-inner">
 <?php 
$getPostDatafooter11=$ad->getPostDatafooter();
while ( $getPostDatafooter1155 = mysqli_fetch_array($getPostDatafooter11,MYSQLI_ASSOC)) { 

$newDate = date("d-m-Y", strtotime($getPostDatafooter1155['created_at']));

    ?>
 
                                        
                                        <div class="post">
  <figure class="post-thumb"><a href="<?php echo SITE_PATH.'post/'.$getPostDatafooter1155['slug']; ?>"><img src="<?= ($getPostDatafooter1155['image']); ?>" alt="<?= utf8_encode($getPostDatafooter1155['name']); ?>" /></a>
</figure>
    <h6>
  <a href="<?php echo SITE_PATH.'post/'.$getPostDatafooter1155['slug']; ?>"><?= utf8_encode($getPostDatafooter1155['name']); ?></a></h6>
    <span class="post-date"><?= $newDate; ?></span>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                                <div class="footer-widget links-widget">
                                    <div class="widget-title">
                                        <h4>Kontakt</h4>
                                    </div>
                                    <div class="widget-content">
                                        <div class="form-inner">
                                            <form method="post" action="#" id="contact-form" class="default-form" novalidate="novalidate"> 
                                                <p id="error_msg4" ></p>

                                                <div class="row clearfix">
                                                    <div class="col-lg-6 col-md-126 col-sm-12 form-group">
       <input type="text" name="username"  id="fusername" placeholder="Vollständiger Name"    >
                                                    </div>
                                                     <div class="col-lg-6 col-md-12 col-sm-12 form-group">
           <input type="text" name="phone" id="fphone"  placeholder="Telefonnummer"  >
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
  <input type="email" name="email" id="femail" placeholder="E-Mail-Addresse
"  >
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                                        <textarea name="message" id="fmessage" placeholder="Botschaft"></textarea>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                                        <button class="theme-btn-one" type="button" id="submit_digital4" name="submit-form">einreichen</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="auto-container">
                    <div class="inner-box clearfix">
                        <div class="copyright pull-left">
                            <p>    <?= utf8_encode($getGeneralSettings['copy_right_text']); ?></p>
                        </div>
                        <ul class="footer-nav pull-right">
                            <?= utf8_encode($getGeneralSettings['footer_menu2']); ?>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!-- main-footer end -->



        <!--Scroll to top-->
        <button class="scroll-top scroll-to-target" data-target="html">
            <span class="fa fa-arrow-up"></span>
        </button>
    </div>
<script type="text/javascript">
    
    var sitepath= "<?= SITE_PATH; ?>";
</script>

    <!-- jequery plugins -->
    <script src="<?php echo  SITE_PATH ?>assets/js/jquery.js"></script>
    <script src="<?php echo  SITE_PATH ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo  SITE_PATH ?>assets/js/owl.js"></script>
    <script src="<?php echo  SITE_PATH ?>assets/js/wow.js"></script>
    <script src="<?php echo  SITE_PATH ?>assets/js/validation.js"></script>
    <script src="<?php echo  SITE_PATH ?>assets/js/jquery.fancybox.js"></script>
    <script src="<?php echo  SITE_PATH ?>assets/js/appear.js"></script>
    <script src="<?php echo  SITE_PATH ?>assets/js/scrollbar.js"></script>
    <script src="<?php echo  SITE_PATH ?>assets/js/script.js"></script>
 <script src="<?php echo  SITE_PATH ?>assets/js/custom_validat.js"></script>
 


 <div id="google_translate_element"></div>
<script type="text/javascript">
  function googleTranslateElementInit() {
    new google.translate.TranslateElement({pageLanguage: 'de', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, autoDisplay: false}, 'google_translate_element');
  }
</script>
<script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit" type="text/javascript"></script>

<!-- Flag click handler -->
<script type="text/javascript">
    $('.translation-links a').click(function() {
      var lang = $(this).data('lang');
     

      var $frame = $('.goog-te-menu-frame:first');
      if (!$frame.size()) {
        alert("Error: Could not find Google translate frame.");
        return false;
      }
  

      $frame.contents().find('.goog-te-menu2-item span.text:contains('+lang+')').get(0).click();
      //return false;
 

 var lang2 = $(this).data('lang2');

 var currentLocation = window.location.protocol + '//' + window.location.hostname + window.location.pathname+'?lang='+lang2;


//window.location.reload();
 //setTimeout(reload(currentLocation), 1111000);
     
      setTimeout(function(){ reload(currentLocation); }, 5000);



    });

    function reload(currentLocation){
         
window.location.href=currentLocation;
    }
</script>


<!--

 <div id="google_translate_element" style="display: none;"></div>
<script type="text/javascript">
  function googleTranslateElementInit() {
    new google.translate.TranslateElement({pageLanguage: 'de', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, autoDisplay: false}, 'google_translate_element');
  }
</script>
<script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit" type="text/javascript"></script>


<script type="text/javascript">
    $('.translation-links a').click(function() {
      var lang = $(this).data('lang');
      var lang2 = $(this).data('lang2');

      var $frame = $('.goog-te-menu-frame:first');
      if (!$frame.size()) {
        alert("Error: Could not find Google translate frame.");
        return false;
      }
      $frame.contents().find('.goog-te-menu2-item span.text:contains('+lang+')').get(0).click();

var currentLocation = window.location.protocol + '//' + window.location.hostname + window.location.pathname+'?lang='+lang2;
window.location.href=currentLocation;

      return false;
    });
</script> -->

<style>
    .goog-te-banner-frame {
    display: none !important;
}

    .goog-te-gadget img {
    vertical-align: middle;
    border: none;
    display: none;
    width: 100%;
}

</style>

