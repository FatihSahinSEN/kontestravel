<?php
defined('_GUVENLIK') or die("Redistrect Access");
$lang["menu"]=
    array(
        1 => array(
            "title" => "Home",
            "link"  => "../"
        ),
        2 => array(
            "title" => "Tours",
            "subMenu" => "tours",
            "link" => array(
                0 => array(
                    "title" => "Popular Tours",
                    "link" => "popular-tours"
                ),
                1 => array(
                    "title" => "Tours With Gallipoli",
                    "link" => "tours-with-gallipoli"
                ),
                2 => array(
                    "title" => "Tours Ex Istanbul",
                    "link" => "tours-ex-istanbul"
                ),
            ),
        ),
        3 => array(
            "title" => "Destinations",
            "link"  => "destinations"
        ),
        4 => array(
            "title" => "Turkey Map",
            "link" => "turkey-map"
        ),
        5 => array(
            "title" => "Gallery",
            "link"  => "gallery"
        ),
        6 => array(
            "title" => "About us",
            "link" => "about-us",
        ),
        7 => array(
            "title" => "Contact",
            "link" => "contact",
        )
    );