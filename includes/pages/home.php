<?php
defined('_GUVENLIK') or die("Redistrect Access");
?>
<div class="container">
<section class="home">
 <div class="homeImage"><img src="https://turkeytravel.com/assets/images/homeimg.jpg" alt="Turkey Travel"></div>
<article>
    <?php
    if($SelectLang['code']=='en') { ?>
    <div class="baslik">
        <h1><?php echo $lang["baslik"];?></h1>
        <?php echo $lang["girismetin"];?>
    </div>
    <?php } ?>
</article>
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
                <?php
                $cityList=substr_count($value["city"], ',');
                if($cityList>3){
                    $citys = explode(',', $value["city"]);
                    echo $citys[0]." ,";
                    echo $citys[1]." ,";
                    echo $citys[2]." ,";
                    echo $citys[3]." ,";
                    echo 'more '. (substr_count($value["city"], ',') - 3).' city';
                }else{
                    echo $value["city"];
                }
                ?>
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
<div class="price-table-desktop">
    <?php echo  $lang["PRICE_TABLE"];?>
</div>
<article class="price-list" style="position: relative">

        <table >
            <thead>
            <tr>
                <th class="title"><?php echo $lang['TOUR_NAME']; ?></th>
                <th class="duration"><?php echo $lang['TOUR_CITY']; ?></th>
                <th class="location"><?php echo $lang['TOUR_DURATION']; ?></th>
                <th class="price"><?php echo $lang['TOUR_PRICES']; ?></th>
            </tr>
            </thead>
            <tbody>
    <?php
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
        <tr>
            <td class="name"><a href="<?php echo $SelectLang["code"].'/'.$value["link"];?>" title="<?php echo $value["title"];?>"><?php echo $value["title"];?></a></td>
            <td><?php echo $value["city"];?></td>
            <td><?php echo $value["days"];?></td>
            <td>€ <?php echo $value["price"];?></td>
        </tr>
    <?php
    }
    ?>
            </tbody>
        </table>
</article>

<article class="turkey-map">
    <h2><?php echo $lang["home_destinations"];?></h2>
    <img src="<?php echo $lang["SITE_URL"];?>assets/images/destinations/map/harita.<?php echo $SelectLang["code"]; ?>.svg" class="lazy loading" data-ll-status="loading">
</article>
    <?php if($SelectLang['code']=='en'): //English ?>
    <article class="destination">
        <div class="swiper DestinationSlider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <slide>
                        <!--                        <a href="https://gocappadociaturkiye.com/es/homepage" target="_blank">-->
                        <a href="<?php echo $SelectLang["code"];?>/destination/cappadocia" target="_blank">
                            <div class="fthCarousel">
                                <div class="golge"></div>
                                <img src="<?php echo $lang["SITE_URL"];?>assets/images/destinations/8.jpg" alt="Cappadocia" loading="lazy" class="swiper-lazy" />
                                <span class="destination-content"> Cappadocia </span>
                            </div>
                        </a>
                    </slide>
                </div>
                <div class="swiper-slide">
                    <slide>
                        <!--                        <a href="https://gopamukkaleturkiye.com/es/homepage" target="_blank">-->
                        <a href="<?php echo $SelectLang["code"];?>/destination/gallipoli" target="_blank">
                            <div class="fthCarousel">
                                <div class="golge"></div>
                                <img src="<?php echo $lang["SITE_URL"];?>assets/images/destinations/2.jpg" alt="Gallipoli" loading="lazy" class="swiper-lazy" />
                                <span class="destination-content"> Gallipoli </span>
                            </div>
                        </a>
                    </slide>
                </div>
                <div class="swiper-slide">
                    <slide>
                        <!--                        <a href="https://goistanbulturkiye.com/" target="_blank">-->
                        <a href="<?php echo $SelectLang["code"];?>/destination/pamukkale" target="_blank">
                            <div class="fthCarousel">
                                <div class="golge"></div>
                                <img src="<?php echo $lang["SITE_URL"];?>assets/images/destinations/3.jpg" alt="Pamukkale" loading="lazy" class="swiper-lazy" />
                                <span class="destination-content"> Pamukkale </span>
                            </div>
                        </a>
                    </slide>
                </div>
                <div class="swiper-slide">
                    <slide>
                        <!--                        <a href="https://goizmirturkiye.com/es/homepage" target="_blank">-->
                        <a href="<?php echo $SelectLang["code"];?>/destination/pergamon" target="_blank">
                            <div class="fthCarousel">
                                <div class="golge"></div>
                                <img src="<?php echo $lang["SITE_URL"];?>assets/images/destinations/4.jpg" alt="Pergamon " loading="lazy" class="swiper-lazy" />
                                <span class="destination-content"> Pergamon </span>
                            </div>
                        </a>
                    </slide>
                </div>
                <div class="swiper-slide">
                    <slide>
                        <!--                        <a href="https://goizmirturkiye.com/es/homepage" target="_blank">-->
                        <a href="<?php echo $SelectLang["code"];?>/destination/troy" target="_blank">
                            <div class="fthCarousel">
                                <div class="golge"></div>
                                <img src="<?php echo $lang["SITE_URL"];?>assets/images/destinations/5.jpg" alt="Troy " loading="lazy" class="swiper-lazy" />
                                <span class="destination-content"> Troy </span>
                            </div>
                        </a>
                    </slide>
                </div>
                <div class="swiper-slide">
                    <slide>
                        <!--                        <a href="https://goizmirturkiye.com/es/homepage" target="_blank">-->
                        <a href="<?php echo $SelectLang["code"];?>/destination/istanbul" target="_blank">
                            <div class="fthCarousel">
                                <div class="golge"></div>
                                <img src="<?php echo $lang["SITE_URL"];?>assets/images/destinations/6.jpg" alt="Istanbul " loading="lazy" class="swiper-lazy" />
                                <span class="destination-content"> Istanbul  </span>
                            </div>
                        </a>
                    </slide>
                </div>
                <div class="swiper-slide">
                    <slide>
                        <!--                        <a href="https://goizmirturkiye.com/es/homepage" target="_blank">-->
                        <a href="<?php echo $SelectLang["code"];?>/destination/antalya" target="_blank">
                            <div class="fthCarousel">
                                <div class="golge"></div>
                                <img src="<?php echo $lang["SITE_URL"];?>assets/images/destinations/7.jpg" alt="Antalya" loading="lazy" class="swiper-lazy" />
                                <span class="destination-content"> Antalya </span>
                            </div>
                        </a>
                    </slide>
                </div>
                <div class="swiper-slide">
                    <slide>
                        <!--                        <a href="https://goizmirturkiye.com/es/homepage" target="_blank">-->
                        <a href="<?php echo $SelectLang["code"];?>/destination/ephesus" target="_blank">
                            <div class="fthCarousel">
                                <div class="golge"></div>
                                <img src="<?php echo $lang["SITE_URL"];?>assets/images/destinations/1.jpg" alt="Ephesus" loading="lazy" class="swiper-lazy" />
                                <span class="destination-content"> Ephesus </span>
                            </div>
                        </a>
                    </slide>
                </div>
            </div>
            <div class="d-next swiper-button-next"></div>
            <div class="d-prev swiper-button-prev"></div>
        </div>
        <div class="view-all"><a href="<?php echo $SelectLang["code"];?>/destinations"> <?php echo $lang["view_all_destinations"];?></a></div>
    </article>
    <?php
        else: //Spanish
    ?>
    <article class="destination">
        <div class="swiper DestinationSlider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <slide>
                        <a href="https://gocappadociaturkiye.com/es/homepage" target="_blank">
                            <div class="fthCarousel">
                                <div class="golge"></div>
                                <img src="<?php echo $lang["SITE_URL"];?>assets/images/destinos/1.jpg" alt="Cappadocia" loading="lazy" class="swiper-lazy" />
                                <span class="destination-content"> Cappadocia </span>
                            </div>
                        </a>
                    </slide>
                </div>
                <div class="swiper-slide">
                    <slide>
                        <a href="https://gopamukkaleturkiye.com/es/homepage" target="_blank">
                            <div class="fthCarousel">
                                <div class="golge"></div>
                                <img src="<?php echo $lang["SITE_URL"];?>assets/images/destinos/2.jpg" alt="Pamukkale" loading="lazy" class="swiper-lazy" />
                                <span class="destination-content"> Pamukkale </span>
                            </div>
                        </a>
                    </slide>
                </div>
                <div class="swiper-slide">
                    <slide>
                       <a href="https://goistanbulturkiye.com/" target="_blank">
                            <div class="fthCarousel">
                                <div class="golge"></div>
                                <img src="<?php echo $lang["SITE_URL"];?>assets/images/destinos/3.jpg" alt="Estambul" loading="lazy" class="swiper-lazy" />
                                <span class="destination-content"> Estambul </span>
                            </div>
                        </a>
                    </slide>
                </div>
                <div class="swiper-slide">
                    <slide>
                        <a href="https://goizmirturkiye.com/es/homepage" target="_blank">
                            <div class="fthCarousel">
                                <div class="golge"></div>
                                <img src="<?php echo $lang["SITE_URL"];?>assets/images/destinos/4.jpg" alt="Esmirno - Efeso " loading="lazy" class="swiper-lazy" />
                                <span class="destination-content"> Esmirno - Efeso </span>
                            </div>
                        </a>
                    </slide>
                </div>
            </div>
            <div class="d-next swiper-button-next"></div>
            <div class="d-prev swiper-button-prev"></div>
        </div>
        <div class="view-all"><a href="<?php echo $SelectLang["code"];?>/destinations"> <?php echo $lang["view_all_destinations"];?></a></div>
    </article>
            <?php
            endif;

            ?>

    <article class="gallery swiper">
        <h2> <?php echo $lang["gallery"];?></h2>
            <div class="swiper-wrapper">
                <div class="swiper-slide">

                    <slide>
                        <div class="fthCarousel">
                            <img src="<?php echo $lang["SITE_URL"];?>assets/images/gallery/1.jpg" alt="Galeria" loading="lazy" class="swiper-lazy" />
                        </div>
                    </slide>
                </div>
                <div class="swiper-slide">
                    <slide>
                        <div class="fthCarousel">
                            <img src="<?php echo $lang["SITE_URL"];?>assets/images/gallery/2.jpg" alt="Galeria" loading="lazy" class="swiper-lazy" />
                        </div>
                    </slide>
                </div>
                <div class="swiper-slide">
                    <slide>
                        <div class="fthCarousel">
                            <img src="<?php echo $lang["SITE_URL"];?>assets/images/gallery/3.jpg" alt="Galeria" loading="lazy" class="swiper-lazy" />
                        </div>
                    </slide>
                </div>
                <div class="swiper-slide">
                    <slide>
                        <div class="fthCarousel">
                            <img src="<?php echo $lang["SITE_URL"];?>assets/images/gallery/4.jpg" alt="Galeria" loading="lazy" class="swiper-lazy" />
                        </div>
                    </slide>
                </div>
                <div class="swiper-slide">
                    <slide>
                        <div class="fthCarousel">
                            <img src="<?php echo $lang["SITE_URL"];?>assets/images/gallery/5.jpg" alt="Galeria" loading="lazy" class="swiper-lazy" />
                        </div>
                    </slide>
                </div>
                <div class="swiper-slide">
                    <slide>
                        <div class="fthCarousel">
                            <img src="<?php echo $lang["SITE_URL"];?>assets/images/gallery/6.jpg" alt="Galeria" loading="lazy" class="swiper-lazy" />
                        </div>
                    </slide>
                </div>
                <div class="swiper-slide">
                    <slide>
                        <div class="fthCarousel">
                            <img src="<?php echo $lang["SITE_URL"];?>assets/images/gallery/7.jpg" alt="Galeria" loading="lazy" class="swiper-lazy" />
                        </div>
                    </slide>
                </div>
                <div class="swiper-slide">
                    <slide>
                        <div class="fthCarousel">
                            <img src="<?php echo $lang["SITE_URL"];?>assets/images/gallery/8.jpg" alt="Galeria" loading="lazy" class="swiper-lazy" />
                        </div>
                    </slide>
                </div>
            </div>
            <div class="g-next swiper-button-next"></div>
            <div class="g-prev swiper-button-prev"></div>

    </article>

<article class="expirence">
    <h2><?php echo $lang['EXPERIENCE_TITLE'];?></h2>
    <div class="swiper-wrapper">
    <?php
     include "includes/languages/lang.experience.{$SelectLang['code']}.php";
     foreach ($lang["experience"] as $key => $value){
             echo '<div class="swiper-slide">
            <a href="'.$value['link'].'"  target="_blank">
                <h3>'.$value['title'].'</h3>
                <img src="'.$lang["SITE_URL"].$value['image'].'" alt="image" class="swiper-lazy" />
            </a>
        </div>';
     }
     ?>
    </div>
</article>

<?php
if($SelectLang['code']=='en'):
?>
    <article class="rewievs">
        <p><?php $lang["what_our_client_say"];?></p>
        <h2>Awesome Reviews</h2>
            <div class="RewievSlider">
            <div class="swiper-wrapper">
            <?php
            include "includes/reviews.data.php";
            foreach ($reviewHome as $value) {
                ?>
                <div class="swiper-slide">
                    <div class="review">
                            <span class="title"><?php echo $value["title"];?></span>
                            <p class="content"><?php echo $value["content"];?></p>
                            <img data-src="<?php echo $lang["SITE_URL"];?>assets/images/temp/star.jpg" style="width: 100px;" class="lazy"/>
                            <hr/>
                            <span class="name"><?php echo $value["name"];?></span>
                            <p class="from"><?php echo $value["from"];?></p>
                    </div>
                </div>
                <?php
            }
            ?>
            </div>
                <div class="r-pagination swiper-pagination"></div>
            <div class="r-next swiper-button-next"></div>
            <div class="r-prev swiper-button-prev"></div>
            </div>
    </article>
    <?php
    endif;
    ?>
</div>