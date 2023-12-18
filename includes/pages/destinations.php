<?php
defined('_GUVENLIK') or die("Redistrect Access");
if($SelectLang['code']=='en') { include("includes/languages/lang.destination.en.php"); }
if($SelectLang['code']=='es') { include("includes/languages/lang.destination.es.php"); }

?>
<section class="destinations">
	<div class="page-header">
		<h1><?php echo $lang["destina"];?></h1>
	</div>
    <div class="container" style="align-items:center;">
    <?php
    $sayi=0;
    foreach ($lang["destinations"] as $key => $value){
        $desc=$value["description"];
        $descCorp=explode(".",$desc,3);
        if(strlen($descCorp[0])<100){
            $description=$descCorp[0]. " ". $descCorp[1];
        }else{
            $description=$descCorp[0];
        }
        if(preg_match('|https://(.?)|', $value["link"])){
            $link = $value["link"];
        }else{
            $link = $lang['SITE_URL'].$SelectLang['code'].'/destination/'.$value["link"];
        }
        $description=str_replace("\n","",$description);
        echo '<article class="destination-single">';
        if( $detect->isMobile() && !$detect->isTablet() ){
            echo '<div class="swiper Destinos"><div class="swiper-wrapper">';
            foreach ($value["slider"] as $resim) {
                echo '<div class="swiper-slide">                    
                    <slide>
                        <a href="'.$link.'">
                            <div class="fthCarousel">
                                <img src="' . $resim . '" alt="' . $value["title"] . '" loading="lazy" class="swiper-lazy" />
                                <span class="destination-content"> ' . $value["title"] . ' </span>
                            </div>
                        </a>
                    </slide>
                </div>';
            }
            echo ' 
                </div>
                <div class="d-next swiper-button-next"></div>
                <div class="d-prev swiper-button-prev"></div>
                </div>
                ';

            echo'<div class="content">
                <a href="'.$link.'">
                <h2>'.$value["title"].'</h2>
                <span class="description">'.$description.'..</span>
                <span class="readmore"> Read more..</span>
                </a>
                </div>';
        }else {
            if ($sayi % 2 == 0) {
                echo '<div class="swiper Destinos"><div class="swiper-wrapper">';
                foreach ($value["slider"] as $resim) {
                    echo '<div class="swiper-slide">                    
                    <slide>
                        <a href="'.$link.'">
                            <div class="fthCarousel">
                                <img src="' . $resim . '" alt="' . $value["title"] . '" loading="lazy" class="swiper-lazy" />
                                <span class="destination-content"> ' . $value["title"] . ' </span>
                            </div>
                        </a>
                    </slide>
                </div>';
                }
                echo ' 
                </div>
                <div class="d-next swiper-button-next"></div>
                <div class="d-prev swiper-button-prev"></div>
                </div>
                ';

                echo '<div class="content">
                <a href="'.$link.'">
                <h2>' . $value["title"] . '</h2>
                <span class="description">' . $description . '..</span>
                </a>
                </div>';

            } else {
                echo '<div class="content">
                <a href="'.$link.'" title="Turkey Travel Tour Ex ' . $value["title"] . '" >
                <h2>' . $value["title"] . '</h2>
                <span class="description">' . $description . '..</span>
                </a>
                </div>';
                echo '<div class="swiper Destinos"><div class="swiper-wrapper">';
                foreach ($value["slider"] as $resim) {
                echo '<div class="swiper-slide">                    
                    <slide>
                        <a href="'.$link.'">
                            <div class="fthCarousel">
                                <img src="' . $resim . '" alt="' . $value["title"] . '" loading="lazy" class="swiper-lazy" />
                                <span class="destination-content"> ' . $value["title"] . ' </span>
                            </div>
                        </a>
                    </slide>
                </div>';
                }
                echo '</div><div class="d-next swiper-button-next"></div>
            <div class="d-prev swiper-button-prev"></div></div>';
            }
        }
        echo '</article>';
        $sayi++;
    }
    ?>
    </div>
</section>
