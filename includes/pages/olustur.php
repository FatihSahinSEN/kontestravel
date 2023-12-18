<?php
defined('_GUVENLIK') or die("Redistrect Access");
$turlar="includes/languages/lang.tours.en.php";
include ($turlar);
$yaz='<?php
defined("_GUVENLIK") or die("Redistrect Access");
$data=array(
    "title" => "",
    "description" => "",
    "lang" => "en",
    "tour_plan" => array(
        1 => array(
          "day" => "DAY 1",
          "title" => "",
          "description" => "",
        ),

    ),
    "tour_info" => array(
      "tour_destinations" => "",
      "tour_price_list" => "",
      "tour_hotels" => "",
      "tour_price_includes" => "",
        "tour_not_include" => "",
    ),
);';
foreach ($toursHome as $key => $value) {
    $LinkDevam=str_replace("/","",str_replace("tour/","",$value["link"]));
    $file=__DIR__.DIRECTORY_SEPARATOR."tours".DIRECTORY_SEPARATOR.$LinkDevam.".php";
    $images_folder=realpath(".")."/assets/images/tours/$LinkDevam/$LinkDevam.jpg";

    /** KLASÖR OLUŞTUR
    $olustur=mkdir($images_folder);
    /*
    /** DOSYA OLUŞTUR */
    $olustur=touch($images_folder);
    if($olustur){
        $dosya = fopen($file, 'w');
        fwrite($dosya, $yaz);
        fclose($dosya);
    }

}


