<?php
defined('_GUVENLIK') or die("Redistrect Access");
$dil[0]=array("code" => "en","lang" => "English","dil"  => "Ingilizce","icon" => "assets/images/temp/en-uk.svg");
$dil[1]=array("code" => "es","lang" => "Spanish","dil"  => "Ispanyolca","icon" => "assets/images/temp/es-sp.svg");
if(!isset($_GET["lang"]) OR empty($_GET["lang"])){
	$smartDil="en";
    $SelectLang=$dil[0];
}else{
    $smartDil=strip_tags(htmlspecialchars($_GET["lang"]));
    if(strstr($smartDil,"/") OR isset($smartDil)){
        $request=explode("/",$smartDil);
        foreach ($dil as $value){
            if($request[0]==$value["code"]){
                $SelectLang=$value;
            }
        }
        if(!isset($SelectLang)){
            include("languages/lang.".$dil[0].".php");
            header("HTTP/1.0 404 Not Found");
            header('Location: '.$lang["SITE_URL"].'');
        }
        unset($request[0]);
        $pages=implode("/",$request);
    }
}

if(!isset($pages) OR empty($pages)){
    $pages="home";
}else{
    $pages=strip_tags(htmlspecialchars($pages));
}
$_SESSION["lang"]=$SelectLang;
include("languages/lang.".$SelectLang['code'].".php");
$drs="includes/languages/lang.meta.".$SelectLang['code'].".php";
$linkLer = json_decode(file_get_contents($drs), true);
if(isset($linkLer[$pages]["title"])){
    $title=$linkLer[$pages]["title"];
    $description=$linkLer[$pages]["description"];
    $keywords=$linkLer[$pages]["keywords"];
}else{
    $title="Turkey Tour Vacaciones Viaje Destinos | Turkey Travel";
    $description="Turquia tiene los mejores tours, viajes y destinos vacacionales, Estambul, Gallipoli, Troya, Pergamon, Efeso, Pamukkale, Antalia, Capadocia.";
    $keywords="turquia tour, viajes y destinos de vacaciones, estambul, gallipoli, troy, pergamo, efeso, pamukkale, antalia, cappadocia, fethiye";
}


?>