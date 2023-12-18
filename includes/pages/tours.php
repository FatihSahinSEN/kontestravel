<?php
defined('_GUVENLIK') or die("Redistrect Access");
?>
<section class="turkey-map">
    <div class="page-header">
        <h1><?php echo $lang["tours"];?></h1>
    </div>
    <article class="tours">
        <?php
        if($SelectLang['code']=='es') { ?>
            <h2><?php echo $lang["TOUR_TITLE"];?></h2>
        <?php } ?>
        <?php
        $turlar="includes/languages/lang.tours.".$SelectLang['code'].".php";
        include ($turlar);

        foreach ($toursHome as $value){
            $category="";
            if($SelectLang["code"]=="es"){
                if(strstr($value["category"],",")){
                    $cate=explode(",",$value["category"]);
                    foreach ($cate as $kk => $kaka){
                        if($kk==0) {
                            $orj=$kaka." ,";
                        }else{
                            $orj=$kaka;
                        }
                        $kaka=strtolower(str_replace(" ","-",trim($kaka)));
                        $category.='<a href="'.$SelectLang["code"].'/'.$kaka.'" title="'.$kaka.'">'.$orj.'</a>';
                    }
                }else{
                    $kaka=strtolower(str_replace(" ","-",trim($value["category"])));
                    $category='<a href="'.$SelectLang["code"].'/'.$kaka.'" title="'.$value["category"].'">'.$value["category"].'</a>';
                }
            }
            ?>
            <div class="tour-box">
                <div class="tour-inner">
                    <div class="tour-price">€ <?php echo $value["price"];?></div>
                    <div class="tour-images">
                        <a href="<?php echo $SelectLang["code"]."/".$value["link"];?>" title="<?php echo $value["title"];?>">
                            <div class="golge"></div>
                            <img src="<?php echo $value["images"];?>" alt="<?php echo $value["title"];?>" loading="lazy" class="swiper-lazy">
                        </a>
                    </div>
                    <div class="tour-content">
                        <h3 class="title"><a href="<?php echo $SelectLang["code"]."/".$value["link"];?>" title="<?php echo $value["title"];?>"><?php echo $value["title"];?></a></h3>
                        <div class="bol" style="margin: 1em 0;width: 100%"></div>
                        <h3>
                            <svg version="1.1" width="25" class="mappin" height="25" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="0 0 293.334 293.334" style="enable-background:new 0 0 293.334 293.334;" xml:space="preserve">
<g>
    <g>
        <path style="fill:#dd3333;" d="M146.667,0C94.903,0,52.946,41.957,52.946,93.721c0,22.322,7.849,42.789,20.891,58.878
			c4.204,5.178,11.237,13.331,14.903,18.906c21.109,32.069,48.19,78.643,56.082,116.864c1.354,6.527,2.986,6.641,4.743,0.212
			c5.629-20.609,20.228-65.639,50.377-112.757c3.595-5.619,10.884-13.483,15.409-18.379c6.554-7.098,12.009-15.224,16.154-24.084
			c5.651-12.086,8.882-25.466,8.882-39.629C240.387,41.962,198.43,0,146.667,0z M146.667,144.358
			c-28.892,0-52.313-23.421-52.313-52.313c0-28.887,23.421-52.307,52.313-52.307s52.313,23.421,52.313,52.307
			C198.98,120.938,175.559,144.358,146.667,144.358z"/>
        <circle style="fill:#dd3333;" cx="146.667" cy="90.196" r="21.756"/>
    </g>
</g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
</svg>

                            </svg>
                            <?php  echo $value["city"]; ?>
                        </h3>

                    </div>
                    <div class="tour-days">
                        <?php echo $value["days"];?>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </article>
</section>