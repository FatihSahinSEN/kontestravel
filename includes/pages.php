<?php
defined('_GUVENLIK') or die("Redistrect Access");
    if(strpos($pages, '/')){
        $gLink=explode("/",$pages);
        $pages=$gLink[0];
        $LinkDevam=$gLink[1];
    }
    $xpage=htmlspecialchars(strip_tags($pages));
	$file="includes/pages/".$xpage.".php";
	if(is_file($file)){
	    include($file);
	}else{
		header("HTTP/1.0 404 Not Found");
        include("includes/pages/404.php");
	}