

        <header class="main-header style-one">
            <!-- header-top -->
            <div class="header-top">
                <div class="top-inner clearfix">
                    <ul class="info-list pull-left clearfix">
                        <li><i class="flaticon-email"></i><a href="mailto:<?= $getGeneralSettings['mail_id']; ?>"><?=  $getGeneralSettings['mail_id']; ?></a></li>
                        <li><i class="flaticon-telephone"></i><a href="tel:<?= $getGeneralSettings['contact_no']; ?>"><?= $getGeneralSettings['contact_no']; ?></a></li>
                        <li><i class="flaticon-pin"></i><?= utf8_encode($getGeneralSettings['address']); ?></li>
                    </ul>
                    <div class="right-column pull-right clearfix">
                        <ul class="social-links clearfix">
                            <li><a href="<?= $getGeneralSettings['facebook_link']; ?>" target="_blank"><i class="fab fa-facebook-square"></i></a></li>
                            <li><a href="<?= $getGeneralSettings['twitter_link']; ?>" target="_blank"><i class="fab fa-twitter"></i></a></li> 
                            <li><a href="<?= $getGeneralSettings['linked_in_link']; ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>

                              

                        </ul>



<?php 
$actual_link1 = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

$actual_link1=explode("?",$actual_link1);
$actual_link=$actual_link1[0];
?>

<!--
<select name="lang" id="languagechange" onchange="document.location.href=this.options[this.selectedIndex].value;" style="z-index: 99999;">
<option value="<?= $actual_link; ?>" <?php if($_GET['lang']=="" or $_GET['lang']=="de" ) { ?>selected="selected" <?php } ?> >Deutsch</option>
<option value="<?= $actual_link; ?>?lang=cs" <?php if($_GET['lang']=="cs" ) { ?>selected="selected" <?php } ?>>Čeština</option>
<option value="<?= $actual_link; ?>?lang=nl" <?php if($_GET['lang']=="nl" ) { ?>selected="selected" <?php } ?>>Nederlands</option>
<option value="<?= $actual_link; ?>?lang=fr" <?php if($_GET['lang']=="fr" ) { ?>selected="selected" <?php } ?> >Français</option>
<option value="<?= $actual_link; ?>?lang=hi" <?php if($_GET['lang']=="hi" ) { ?>selected="selected" <?php } ?>>हिन्दी; हिंदी</option>
<option value="<?= $actual_link; ?>?lang=be" <?php if($_GET['lang']=="be" ) { ?>selected="selected" <?php } ?>>Беларуская</option>
<option value="<?= $actual_link; ?>?lang=en" <?php if($_GET['lang']=="en" ) { ?>selected="selected" <?php } ?>>English</option>
<option value="<?= $actual_link; ?>?lang=da" <?php if($_GET['lang']=="da" ) { ?>selected="selected" <?php } ?>>Dansk</option>
<option value="<?= $actual_link; ?>?lang=it" <?php if($_GET['lang']=="it" ) { ?>selected="selected" <?php } ?>>Italiano</option>
<option value="<?= $actual_link; ?>?lang=pl" <?php if($_GET['lang']=="pl" ) { ?>selected="selected" <?php } ?>>Polski</option>
<option value="<?= $actual_link; ?>?lang=ru" <?php if($_GET['lang']=="ru" ) { ?>selected="selected" <?php } ?>>Русский</option>
<option value="<?= $actual_link; ?>?lang=es" <?php if($_GET['lang']=="es" ) { ?>selected="selected" <?php } ?>>Español</option>
<option value="<?= $actual_link; ?>?lang=af" <?php if($_GET['lang']=="af" ) { ?>selected="selected" <?php } ?>>Afrikaans</option>
<option value="<?= $actual_link; ?>?lang=sq" <?php if($_GET['lang']=="sq" ) { ?>selected="selected" <?php } ?>>Shqip</option>
<option value="<?= $actual_link; ?>?lang=am" <?php if($_GET['lang']=="am" ) { ?>selected="selected" <?php } ?>>አማርኛ</option>
<option value="<?= $actual_link; ?>?lang=ar" <?php if($_GET['lang']=="ar" ) { ?>selected="selected" <?php } ?>>العربية</option>
<option value="<?= $actual_link; ?>?lang=hy" <?php if($_GET['lang']=="hy" ) { ?>selected="selected" <?php } ?>>Հայերեն</option>
<option value="<?= $actual_link; ?>?lang=az" <?php if($_GET['lang']=="az" ) { ?>selected="selected" <?php } ?>>azərbaycan dili</option>
<option value="<?= $actual_link; ?>?lang=eu" <?php if($_GET['lang']=="eu" ) { ?>selected="selected" <?php } ?>>Euskara</option>
<option value="<?= $actual_link; ?>?lang=ba" <?php if($_GET['lang']=="ba" ) { ?>selected="selected" <?php } ?>>башҡорт теле</option>
<option value="<?= $actual_link; ?>?lang=bn" <?php if($_GET['lang']=="bn" ) { ?>selected="selected" <?php } ?>>বাংলা</option>
<option value="<?= $actual_link; ?>?lang=bs" <?php if($_GET['lang']=="bs" ) { ?>selected="selected" <?php } ?> > bosanski jezik</option>
<option value="<?= $actual_link; ?>?lang=bg" <?php if($_GET['lang']=="bg" ) { ?>selected="selected" <?php } ?>>Български</option>
<option value="<?= $actual_link; ?>?lang=my" <?php if($_GET['lang']=="my" ) { ?>selected="selected" <?php } ?>>မြန်မာစာ</option>
<option value="<?= $actual_link; ?>?lang=ca" <?php if($_GET['lang']=="ca" ) { ?>selected="selected" <?php } ?>>Català</option>
<option value="<?= $actual_link; ?>?lang=yue" <?php if($_GET['lang']=="yue" ) { ?>selected="selected" <?php } ?>>粤语</option>
<option value="<?= $actual_link; ?>?lang=ceb" <?php if($_GET['lang']=="ceb" ) { ?>selected="selected" <?php } ?>>Binisaya</option>
<option value="<?= $actual_link; ?>?lang=ny" <?php if($_GET['lang']=="ny" ) { ?>selected="selected" <?php } ?>>Chinyanja</option>
<option value="<?= $actual_link; ?>?lang=zh-tw" <?php if($_GET['lang']=="zh-tw" ) { ?>selected="selected" <?php } ?>>中文(漢字)</option>
<option value="<?= $actual_link; ?>?lang=co" <?php if($_GET['lang']=="co" ) { ?>selected="selected" <?php } ?>>Corsu</option>
<option value="<?= $actual_link; ?>?lang=hr" <?php if($_GET['lang']=="hr" ) { ?>selected="selected" <?php } ?>>Hrvatski</option>
<option value="<?= $actual_link; ?>?lang=eo" <?php if($_GET['lang']=="eo" ) { ?>selected="selected" <?php } ?>> Esperanto</option>
<option value="<?= $actual_link; ?>?lang=et" <?php if($_GET['lang']=="et" ) { ?>selected="selected" <?php } ?>>Eesti keel</option>
<option value="<?= $actual_link; ?>?lang=fj" <?php if($_GET['lang']=="fj" ) { ?>selected="selected" <?php } ?>>vosa Vakaviti</option>
<option value="<?= $actual_link; ?>?lang=fil" <?php if($_GET['lang']=="fil" ) { ?>selected="selected" <?php } ?>>Wikang Filipino</option>
<option value="<?= $actual_link; ?>?lang=fi" <?php if($_GET['lang']=="fi" ) { ?>selected="selected" <?php } ?>>Suomi</option>
<option value="<?= $actual_link; ?>?lang=fy" <?php if($_GET['lang']=="fy" ) { ?>selected="selected" <?php } ?>>Frysk</option>
<option value="<?= $actual_link; ?>?lang=gl" <?php if($_GET['lang']=="gl" ) { ?>selected="selected" <?php } ?>>Galego</option>
<option value="<?= $actual_link; ?>?lang=ka" <?php if($_GET['lang']=="ka" ) { ?>selected="selected" <?php } ?>>ქართული</option>
<option value="<?= $actual_link; ?>?lang=el" <?php if($_GET['lang']=="el" ) { ?>selected="selected" <?php } ?>>Ελληνικά</option>
<option value="<?= $actual_link; ?>?lang=gu" <?php if($_GET['lang']=="gu" ) { ?>selected="selected" <?php } ?>>ગુજરાતી</option>
<option value="<?= $actual_link; ?>?lang=ht" <?php if($_GET['lang']=="ht" ) { ?>selected="selected" <?php } ?>>Kreyòl ayisyen</option>
<option value="<?= $actual_link; ?>?lang=ha" <?php if($_GET['lang']=="ha" ) { ?>selected="selected" <?php } ?>>Harshen Hausa</option>
<option value="<?= $actual_link; ?>?lang=haw" <?php if($_GET['lang']=="haw" ) { ?>selected="selected" <?php } ?>>ʻŌlelo Hawaiʻi</option>
<option value="<?= $actual_link; ?>?lang=hmn" <?php if($_GET['lang']=="hmn" ) { ?>selected="selected" <?php } ?>>Hmoob</option>
<option value="<?= $actual_link; ?>?lang=mw" <?php if($_GET['lang']=="mw" ) { ?>selected="selected" <?php } ?>>Hmoob Daw</option>
<option value="<?= $actual_link; ?>?lang=he" <?php if($_GET['lang']=="he" ) { ?>selected="selected" <?php } ?>>עברית</option>
<option value="<?= $actual_link; ?>?lang=mrj" <?php if($_GET['lang']=="mrj" ) { ?>selected="selected" <?php } ?>>Мары йӹлмӹ</option>
<option value="<?= $actual_link; ?>?lang=hu" <?php if($_GET['lang']=="hu" ) { ?>selected="selected" <?php } ?>>Magyar</option>
<option value="<?= $actual_link; ?>?lang=is" <?php if($_GET['lang']=="is" ) { ?>selected="selected" <?php } ?>>Íslenska</option>
<option value="<?= $actual_link; ?>?lang=ig" <?php if($_GET['lang']=="ig" ) { ?>selected="selected" <?php } ?>>Asụsụ Igbo</option>
<option value="<?= $actual_link; ?>?lang=id" <?php if($_GET['lang']=="id" ) { ?>selected="selected" <?php } ?>>Bahasa Indonesia</option>
<option value="<?= $actual_link; ?>?lang=ga" <?php if($_GET['lang']=="ga" ) { ?>selected="selected" <?php } ?>>Gaeilge</option>
<option value="<?= $actual_link; ?>?lang=ja" <?php if($_GET['lang']=="ja" ) { ?>selected="selected" <?php } ?>>日本語</option>
<option value="<?= $actual_link; ?>?lang=jw" <?php if($_GET['lang']=="jw" ) { ?>selected="selected" <?php } ?>>basa Jawa</option>
<option value="<?= $actual_link; ?>?lang=kn" <?php if($_GET['lang']=="kn" ) { ?>selected="selected" <?php } ?>>ಕನ್ನಡ</option>
<option value="<?= $actual_link; ?>?lang=kk" <?php if($_GET['lang']=="kk" ) { ?>selected="selected" <?php } ?>>Қазақ тілі</option>
<option value="<?= $actual_link; ?>?lang=km" <?php if($_GET['lang']=="km" ) { ?>selected="selected" <?php } ?>>ភាសាខ្មែរ</option>
<option value="<?= $actual_link; ?>?lang=ky" <?php if($_GET['lang']=="ky" ) { ?>selected="selected" <?php } ?> >кыргыз тили</option>
<option value="<?= $actual_link; ?>?lang=ko" <?php if($_GET['lang']=="ko" ) { ?>selected="selected" <?php } ?>>한국어</option>
<option value="<?= $actual_link; ?>?lang=ku" <?php if($_GET['lang']=="ku" ) { ?>selected="selected" <?php } ?>>Kurdî</option>
<option value="<?= $actual_link; ?>?lang=lo" <?php if($_GET['lang']=="lu" ) { ?>selected="selected" <?php } ?>>ພາສາລາວ</option>
<option value="<?= $actual_link; ?>?lang=la" <?php if($_GET['lang']=="la" ) { ?>selected="selected" <?php } ?>>Latīna</option>
<option value="<?= $actual_link; ?>?lang=lv" <?php if($_GET['lang']=="lv" ) { ?>selected="selected" <?php } ?>>Latviešu valoda</option>
<option value="<?= $actual_link; ?>?lang=lt" <?php if($_GET['lang']=="lt" ) { ?>selected="selected" <?php } ?>>Lietuvių kalba</option>
<option value="<?= $actual_link; ?>?lang=lb" <?php if($_GET['lang']=="lb" ) { ?>selected="selected" <?php } ?>>Lëtzebuergesch</option>
<option value="<?= $actual_link; ?>?lang=mk" <?php if($_GET['lang']=="mk" ) { ?>selected="selected" <?php } ?>>македонски јазик</option>
<option value="<?= $actual_link; ?>?lang=mg" <?php if($_GET['lang']=="mg" ) { ?>selected="selected" <?php } ?>>Malagasy fiteny</option>
<option value="<?= $actual_link; ?>?lang=ms" <?php if($_GET['lang']=="ms" ) { ?>selected="selected" <?php } ?>>Bahasa Melayu</option>
<option value="<?= $actual_link; ?>?lang=ml" <?php if($_GET['lang']=="ml" ) { ?>selected="selected" <?php } ?>>മലയാളം</option>
<option value="<?= $actual_link; ?>?lang=mt" <?php if($_GET['lang']=="mt" ) { ?>selected="selected" <?php } ?>>Malti</option>
<option value="<?= $actual_link; ?>?lang=mi">Te Reo Māori</option>
<option value="<?= $actual_link; ?>?lang=mr">मराठी</option>
<option value="<?= $actual_link; ?>?lang=mhr">марий йылме</option>
<option value="<?= $actual_link; ?>?lang=mn">Монгол</option>
<option value="<?= $actual_link; ?>?lang=ne">नेपाली</option>
<option value="<?= $actual_link; ?>?lang=no">Norsk</option>
<option value="<?= $actual_link; ?>?lang=otq">Querétaro Otomi</option>
<option value="<?= $actual_link; ?>?lang=pap">Papiamentu</option>
<option value="<?= $actual_link; ?>?lang=fa">پارسی</option>
<option value="<?= $actual_link; ?>?lang=pt">Português</option>
<option value="<?= $actual_link; ?>?lang=pa">ਪੰਜਾਬੀ</option>
<option value="<?= $actual_link; ?>?lang=ro">Română</option>
<option value="<?= $actual_link; ?>?lang=sm">gagana fa'a Samoa</option>
<option value="<?= $actual_link; ?>?lang=gd">Gàidhlig</option>
<option value="<?= $actual_link; ?>?lang=sr">Cрпски језик</option>
<option value="<?= $actual_link; ?>?lang=st">Sesotho</option>
<option value="<?= $actual_link; ?>?lang=sn">chiShona</option>
<option value="<?= $actual_link; ?>?lang=sd">سنڌي</option>
<option value="<?= $actual_link; ?>?lang=si">සිංහල</option>
<option value="<?= $actual_link; ?>?lang=sk">Slovenčina</option>
<option value="<?= $actual_link; ?>?lang=sl">Slovenščina</option>
<option value="<?= $actual_link; ?>?lang=so">Af-Soomaali</option>
<option value="<?= $actual_link; ?>?lang=su">Basa Sunda</option>
<option value="<?= $actual_link; ?>?lang=sw">Kiswahili</option>
<option value="<?= $actual_link; ?>?lang=sv">Svenska</option>
<option value="<?= $actual_link; ?>?lang=tl">Tagalog</option>
<option value="<?= $actual_link; ?>?lang=ty">Reo Mā`ohi'</option>
<option value="<?= $actual_link; ?>?lang=tg">Тоҷикӣ</option>
<option value="<?= $actual_link; ?>?lang=ta">தமிழ்</option>
<option value="<?= $actual_link; ?>?lang=tt">татарча</option>
<option value="<?= $actual_link; ?>?lang=te">తెలుగు</option>
<option value="<?= $actual_link; ?>?th">ภาษาไทย</option>
<option value="<?= $actual_link; ?>?to">faka Tonga</option>
<option value="<?= $actual_link; ?>?tr">Türkçe</option>
<option value="<?= $actual_link; ?>?udm">удмурт кыл</option>
<option value="<?= $actual_link; ?>?uk">Українська</option>
<option value="<?= $actual_link; ?>?ur">اردو</option>
<option value="<?= $actual_link; ?>?uz">Oʻzbek tili</option>
<option value="<?= $actual_link; ?>?vi">Tiếng Việt</option>
<option value="<?= $actual_link; ?>?cy">Cymraeg</option>
<option value="<?= $actual_link; ?>?xh">isiXhosa</option>
<option value="<?= $actual_link; ?>?yi">ייִדיש</option>
<option value="<?= $actual_link; ?>?yo">èdè Yorùbá</option>
<option value="<?= $actual_link; ?>?yua">Màaya T'àan</option>
<option value="<?= $actual_link; ?>?zu">isiZulu</option>
<option value="<?= $actual_link; ?>?ch">Schweiz</option>
<option value="<?= $actual_link; ?>?at">Österreich</option>-->
</select>

                <div class="language-box">

                            <a href="#" class="text"><?= $datalanguagess; ?></a>

                            <ul class="language-list translation-links">

  <li><a href="#" class="english" data-lang2="en" data-lang="English">English</a></li>
  <li><a href="#" class="spanish" data-lang2="sp" data-lang="Spanish">  Spanish</a></li>
  <li><a href="#" class="german" data-lang2="de" data-lang="German">German</a></li>
  <li><a href="#" class="Hindi" data-lang2="hi" data-lang="Hindi">Hindi</a></li>
                            </ul>
                        </div>
                        

                    </div>
                </div>
            </div>

            <!-- header-lower -->
            <div class="header-lower">
                <div class="outer-box">
                    <div class="logo-box">
                        <figure class="logo"><a href="<?= SITE_PATH; ?>"><img src="<?= $getGeneralSettings['logo']; ?>" alt=""></a></figure>
                    </div>
                    <div class="menu-area">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler">
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                        </div>
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">         
<?php
$query = "SELECT * FROM `menu` ORDER BY position ASC";
$request = mysqli_query($conn, $query);
// This array will store the list items that are retrieved from the database.
$items = array();
while (list($item_id, $parent_id, $item, $link) = mysqli_fetch_array($request, MYSQLI_NUM)) {
  if ($link == '') {
    $items[$parent_id][$item_id] = $item;
  } else {
    if(!empty($_GET['lang'])){
    $item_link = '<a href="' . SITE_PATH.$link .'?lang='.$_GET['lang']. '">' . utf8_encode($item) . '</a>';
  } else {
     $item_link = '<a href="' .SITE_PATH. $link .'">' . utf8_encode($item) . '</a>';
  }
    $items[$parent_id][$item_id] = $item_link;
}
}
echo '<ul class="navigation clearfix">';
printMenu($items[0]);
echo '</ul>';
?>

                            </div>
                        </nav>
                    </div>
                    <div class="menu-right-content clearfix">
                        <div class="btn-box">
                            <a href="<?= SITE_PATH; ?>kontakt.php" class="theme-btn-one">Kontakt</a>
                        </div>
                    </div>
                </div>
            </div>

            <!--sticky Header-->
            <div class="sticky-header">
                <div class="outer-box">
                    <div class="logo-box">
                        <figure class="logo"><a href="<?= SITE_PATH; ?>"><img src="<?= $getGeneralSettings['logo']; ?>" alt=""></a></figure>
                    </div>
                    <div class="menu-area">
                        <nav class="main-menu clearfix">
                            <!--Keep This Empty / Menu will come through Javascript-->
                        </nav>
                    </div>
                    <div class="menu-right-content clearfix">
                        <div class="btn-box">
                            <a href="kontakt.php" class="theme-btn-one">Kontakt</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- main-header end -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>
            
            <nav class="menu-box">
                <div class="nav-logo"><a href="<?= SITE_PATH; ?>"><img src="<?= $getGeneralSettings['logo']; ?>" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
                <div class="contact-info">
                    <h4>Contact Info</h4>
                    <ul>
                        <li><?= $getGeneralSettings['address']; ?></li>
                        <li><a href="tel:<?= $getGeneralSettings['contact_no']; ?>"><?= $getGeneralSettings['contact_no']; ?></a></li>
                        <li><a href="mailto:<?= $getGeneralSettings['mail_id']; ?>"><?= $getGeneralSettings['mail_id']; ?></a></li>
                    </ul>
                </div>
                <div class="social-links">
                    <ul class="clearfix">
                         <li><a href="<?= $getGeneralSettings['facebook_link']; ?>" target="_blank"><i class="fab fa-facebook-square"></i></a></li>
                            <li><a href="<?= $getGeneralSettings['twitter_link']; ?>" target="_blank"><i class="fab fa-twitter"></i></a></li> 
                            <li><a href="<?= $getGeneralSettings['linked_in_link']; ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                </div>
            </nav>
        </div><!-- End Mobile Menu -->