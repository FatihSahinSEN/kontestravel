<?php
defined('_GUVENLIK') or die("Redistrect Access");
?>
<ul class="menu" id="menu">
      <?php
    $mes="";
    foreach($lang["menu"] as $key => $value){
        if(is_array($value["link"])){
            $mes .= '<li class="submenu"><a href="'.$SelectLang["code"].'/'.$value["subMenu"].'">'.$value["title"].'</a>';
            $mes .= '<ul class="altmenu">';
            foreach($value["link"] as $newKey => $newValue){
                if(is_array($newValue["link"])){
                    $mes .= '<li class="submenu"><a href="'.$SelectLang["code"].'/'.$value["subMenu"].'">'.$newValue["title"].'</a>';
                    $mes .= '<ul class="altmenu">';
                    foreach($newValue["link"] as $newKey2 => $newValue2){
                        if($pages==$newValue2["link"]) {$active=' class="subactive"';}else{ $active="";}
                        $mes .= '<li'.$active.'><a href="'.$SelectLang["code"].'/'.$newValue2["link"].'">'.$newValue2["title"].'</a></li>';
                    }
                    $mes .= '</li></ul>';
                }else{
                    if($pages==$newValue["link"]) {$active=' class="subactive"';}else{ $active="";}
                    $mes .= '<li'.$active.'><a href="'.$SelectLang["code"].'/'.$newValue["link"].'">'.$newValue["title"].'</a></li>';
                }
            }
            $mes .= '</li></ul>';
        }else{
            if($pages==$value["link"]) {$active=' class="active"';}else{ $active="";}
            $mes .= '<li'.$active.'><a href="'.$SelectLang["code"].'/'.$value["link"].'">'.$value["title"].'</a></li>';
        }
    }
    echo $mes;
    ?>
    <li class="langImage"><a href="<?php echo $lang["SITE_URL"];?>en/"><img alt="language" width="45" src="<?php echo $lang["SITE_URL"];?>assets/images/temp/en-au.svg"></a><a href="<?php echo $lang["SITE_URL"];?>es/"><img alt="language" width="45" src="<?php echo $lang["SITE_URL"];?>assets/images/temp/es-sp.svg"></a></li>
    <?php
    /* AÇILIR MENU
    echo '<li class="submenu languages"><a href="#" onClick="javascript:void(0);return false;"><img alt="language" class="menulangimg" src="'.$_SESSION["lang"]["icon"].'"><span class="language-text">'.strtoupper($_SESSION["lang"]["lang"]).'</span></a>';
    ?><ul class="altmenu languagesli"><?php
        foreach($dil as $langs){
            if($langs["code"]!=$_SESSION["lang"]["code"]){
                echo '<li class="languagesli"><a href="'.$langs["code"].'/'.$pages.'"><img alt="language" class="menulangimg2" src="'.$langs["icon"].'"><span class="language-text">'.strtoupper($langs["lang"]).'</span></a></li>';
            }
        }
    */

        ?>
</ul>

<ul class="social">
    <li><a href="#"><img src="assets/images/temp/facebook.svg" /></a></li>
    <li><a href="#"><img src="assets/images/temp/instagram.svg" /></a></li>
    <li><a href="#"><img src="assets/images/temp/twitter.svg" /></a></li>
    <li><a href="#"><img src="assets/images/temp/youtube.svg" /></a></li>
</ul>
<img src="assets/images/temp/follow.png" class="follow-us"/>
</nav>
</header>
