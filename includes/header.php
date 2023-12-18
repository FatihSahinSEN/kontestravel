<?php
defined('_GUVENLIK') or die("Redistrect Access");
?>
<!doctype html>
<html lang="es">
<head>
    <title><?php echo $title;?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="description" content="<?php echo $description;?>">
    <meta name="keywords" content="<?php echo $keywords;?>">
    <meta name="robots" content="index, follow">
    <meta name="google" content="notranslate" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf8">
    <meta name="language" content="Spanish">
    <meta name="revisit-after" content="7 days">
    <meta name="author" content="Mexico Turqia Tours">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@turkeytravelcom">
    <meta name="twitter:creator" content="turkeytravelcom">
    <meta name="twitter:title" content="<?php echo $title;?>">
    <meta name="twitter:description" content="<?php echo $description;?>">
    <meta name="twitter:image:src" content="<?php echo $lang["SITE_URL"];?>assets/bg.jpg">
    <meta property="og:url" content="<?php echo $lang["SITE_URL"];?>">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php echo $title;?>">
    <meta property="og:description" content="<?php echo $description;?>">
    <meta property="og:image" content="<?php echo $lang["SITE_URL"];?>assets/bg.jpg"/>
    <meta property="og:site_name" content="<?php echo $title;?>">
    <base href="<?php echo $lang["SITE_URL"];?>" />
    <link rel="icon" href="assets/images/temp/favicon.png" sizes="32x32" />
    <link rel="stylesheet" href="assets/stylesheet/style.css?v=<?php echo time();?>" media="all">
    <link rel="stylesheet" href="assets/stylesheet/DatePickerX.css" type='text/css' media='all' />
    <link rel="stylesheet" href="assets/stylesheet/glightbox.css" />
</head>
<body>
<div id="app">
    <header class="header" id="header">
        <div class="MobileMenu" onclick="javascript:mobileMenu()">
            <img src="assets/images/temp/menu.svg" id="menuImg" />
        </div>
        <a href="<?php echo $lang["SITE_URL"].$SelectLang['code'];?>/">
            <div class="logo" id="logo">
                <img src="assets/images/logo.svg"  alt="Mexico Turqia Tours" class="brand">
            </div>
        </a>
    <div class="mobilDil">
        <?php
        if($SelectLang["code"]=="es"){
            echo '<a href="en/"><img alt="language" width="45" src="'.$lang["SITE_URL"].'assets/images/temp/en-au.svg"></a>';
        }else{
            echo '<a href="es/"><img alt="language" width="45" src="'.$lang["SITE_URL"].'assets/images/temp/es-sp.svg"></a>';
        }?>
    </div>


        <?php
        include "includes/Mobile_Detect.php";
        $detect = new Mobile_Detect;
        if( $detect->isMobile() && !$detect->isTablet() ){
        ?>
<!--        TODO: <nav style="opacity: 1; left: 50px">-->
        <nav style="" id="ShowMenu">
            <?php
            }else{
                echo '<nav>';
            }
            ?>