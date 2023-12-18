<?php
defined('_GUVENLIK') or die("Redistrect Access");
include("includes/languages/lang.destination.en.php");
foreach ($lang["destinations"] as $key => $value){
    if($value["link"]==$LinkDevam){
        $data=$lang["destinations"][$key];
        $mevcut=$key;
        if(isset($lang["destinations"][$key+1])) $sonraki=$lang["destinations"][$key+1];
        if(isset($lang["destinations"][$key-1])) $onceki=$lang["destinations"][$key-1];
        $status=true;
        break;
    }else{
        $status=false;
    }
}
if(!$status){
    header("HTTP/1.0 404 Not Found");
    include("includes/pages/404.php");
}else {
    ?>
    <section class="destinations">
        <div class="page-header">
            <h1><?php echo $data["title"]; ?></h1>
        </div>
        <div class="destination-slide">
            <article class="desc-media">
                <?php
                echo '<div class="swiper Destinos"><div class="swiper-wrapper">';
                foreach ($data["slider"] as $resim) {
                    echo '<div class="swiper-slide"> <slide>
                        <div class="fthCarousel">
                            <img data-src="' . $resim . '" alt="' . $value["title"] . '" class="lazy"/>
                        </div>
                    </slide></div>';
                }
                echo ' 
                </div>
                <div class="d-next swiper-button-next"></div>
                <div class="d-prev swiper-button-prev"></div>
                </div>
                ';


                ?>
            </article>
            <article class="description">
                <p>
                    <img data-src="assets/images/destinations/map/<?php echo $data["link"]; ?>.png" class="lazy" />
                    <?php echo str_replace("\n", "<br />", $data["description"]); ?>
                </p>
            <hr /><br /><br />
                <div class="onceki" style="float: left;">
                    <?php
                    if(isset($onceki)) {
                        echo '
                            <a href="' . $SelectLang["code"] . '/destination/' . $onceki["link"] . '"> 
                            <img src="' . $onceki["slider"][0] . '" />
                            <div class="PrevItem">
                                <span class="prev">Priveous</span>
                                <span class="oncekiTitle">' . $onceki["title"] . '</span>                            
                            </div>
                            </a>
                            ';
                    }
                    ?>
                </div>

                <div class="sonraki" style="float: right">
                    <?php
                    if(isset($sonraki)) {
                        echo '
                            <a href="' . $SelectLang["code"] . '/destination/' . $sonraki["link"] . '"> 
                            <div class="PrevItem">
                                <span class="prev">Next</span>
                                <span class="oncekiTitle">' . $sonraki["title"] . '</span>                            
                            </div>
                            <img src="' . $sonraki["slider"][0] . '" />
                            
                            </a>
                            ';
                    }
                    ?>
                </div>
            </article>
        </div>
    </section>
    <?php
}
    ?>