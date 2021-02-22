<?php header('Content-Type: text/html; charset=utf-8'); ?>
<?php 
include_once('includes/db.php');
include_once('includes/functions.php'); 

define("ROOT_FOLDER","/demophp/dev/") ;
define("SITE_PATH", "https://".$_SERVER['HTTP_HOST'].ROOT_FOLDER);

$ad = new ad_class();

$getGeneralSettings=$ad->getGeneralSettings();

function printMenu($parent_element) {
  // This is the array that contains all the list items.
  global $items;
  // We start an unordered list.
  
  // We loop through each sub-array.
  foreach ($parent_element as $item_id => $list_item) {
    // We display the item.
    echo '<li class="dropdown">' . $list_item;
    // Now we have to check for sub-items.
    if (isset($items[$item_id])) {
      // If TRUE, then this function calls itself (recursive function)
      // in order to create the structure of the navigation menu.
    	echo '<ul class="dropdown-menu">';
      printMenu($items[$item_id]);
      echo '</ul>';
    }
    // We complete the list item.
    echo '</li>';
  } // End of foreach().
  // We close the unordered list. 

}

if(!empty($_GET['slug'])){

  $getPageInfo=$ad->getPageInfo($_GET['slug']);

}


$datalanguage=array ("de"=>"Deutsch","cs"=>"Germen","nl"=>"Germen","fr"=>"French","hi"=>"Hindi","be"=>"Belarusian","en"=>"English","da"=>"Danish","it"=>"Italian","pl"=>"Polish","ru"=>"Russian","es"=>"Spanish","af"=>"Afrikaans",
"sq"=>"Albanian","am"=>"Amharic","ar"=>"Arabic","hy"=>"Armenian","az"=>"Azerbaijani","eu"=>"Basque","ba"=>"Katanga","bn"=>"Bengali","bs"=>"Bosnian","bg"=>"Bulgarian","my"=>"Burmese","ca"=>"Catalan","yue"=>"Cantonese","ceb"=>"BISAYA","ny"=>"Chichewa","zh-tw"=>"Chinese","co"=>"Corsican","hr"=>"Hrvatski","eo"=>"Esperanto","et"=>"Estonian","fj"=>"Malagasy","fil"=>"Filipino","fi"=>"Finland","gl"=>"Galician","ka"=>"Georgian","el"=>"Greek","gu"=>"Gujarati","ht"=>"Haitian Creole","ha"=>"Hausa","haw"=>"Hawaiian","hmn"=>"Hmong","he"=>"Abrit","hu"=>"Hungarian","is"=>"Icelandic","ig"=>"Igbo","id"=>"Indonesian","ga"=>"Irish","ja"=>"Japanese","jw"=>"Javanese","kn"=>"Kannada","kk"=>"Kazakh","km"=>"Khmer","ky"=>"Kyrgyz","ko"=>"Korean","ku"=>"Kurdish","la"=>"Latins","lv"=>"Latvian","lt"=>"Lithuanian","lb"=>"Luxembourgish","mk"=>"Macedonian","mg"=>"Malagasy","ms"=>"Malay","ml"=>"Malayalam","mt"=>"Maltese","mi"=>"Maori","mr"=>"Marathi","mhr"=>"marijuana","mn"=>"Mongolia","no"=>"Norwegian","otq"=>"Spanish","pap"=>"Papiamentu","fa"=>"Persian","pt"=>"Portugues","pa"=>"Punjabi","ro"=>"Romanian","sm"=>"Samoan","gd"=>"Gaelic","sr"=>"Serbian","st"=>"Sesotho","sn"=>"Shona","sd"=>"Sindhi","si"=>"Sinhala","sk"=>"Slovenian","sl"=>"Slovenian","so"=>"Somali","su"=>"Sundanese","sw"=>"Kiswahili","sv"=>"Svenska","tl"=>"Tagalog","ty"=>"Maori","tg"=>"Tajik",
"ta"=>"Tamil","tt"=>"Tatar","te"=>"Telugu","th"=>"Thai","to"=>"Maori","tr"=>"Turkish","udm"=>"Kyrgyz","uk"=>"Ukrainian","ur"=>"Urdu","uz"=>"Finnish","vi"=>"Vietnamese","cy"=>"Welsh","xh"=>"isiXhosa","yi"=>"Yiddish","yo"=>"Yoruba","yua"=>"Dutch","zu"=>"Germen","ch"=>"Germen","at"=>"Germen");

$language=$_GET['lang'];
if (array_key_exists($language, $datalanguage)) {
 $datalanguagess= $datalanguage[$language];
}  else {
$datalanguagess="Germen";
}


?>