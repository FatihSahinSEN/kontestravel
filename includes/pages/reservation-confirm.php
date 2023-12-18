<?php
defined('_GUVENLIK') or die("Redistrect Access");
if(isset($_POST["submit"])){
    $mesaj="";
    $name=htmlspecialchars(strip_tags(trim($_POST["name"])));
    $tourname=htmlspecialchars(strip_tags(trim($_POST["tour-name"])));
    $email=htmlspecialchars(strip_tags(trim($_POST["email"])));
    $posta=htmlspecialchars(strip_tags(trim($_POST["posta"])));
    $phone=htmlspecialchars(strip_tags(trim($_POST["phone"])));
    $country=htmlspecialchars(strip_tags(trim($_POST["country"])));
    $date=htmlspecialchars(strip_tags(trim($_POST["date"])));
    $adults=htmlspecialchars(strip_tags(trim($_POST["adults"])));
    $message=htmlspecialchars(strip_tags(trim($_POST["message"])));
    $submit=htmlspecialchars(strip_tags(trim($_POST["submit"])));
    $LinkDevam=htmlspecialchars(strip_tags(trim($_POST["web-uri"])));
    $sonuc="";
    if($email!="Your email address" OR $submit!=$lang["booking_message"]){
        $sonuc="BOT ALDGILANDI..";
    }else{
        if(empty($name) || empty($tourname) || empty($posta) || empty($country) || empty($date) || empty($adults) || empty($message)) {
            $sonuc="BOŞ ALAN BIRAKMAYINIZ..";
        }else{
            $mesaj = '  <h1>'.$tourname.'</h1>
                        <hr />
                        <h3> ' . $name . '</h3><br />
                        <b>'.$lang["your_phone"].':</b> <span>' . $phone . '</span><br />
                        <b>'.$lang["your_email"].':</b> <span>' . $posta . '</span><br />
                        <b>'.$lang["country"].':</b> <span>' . $country . '</span><br />
                        <b>'.$lang["date"].':</b> <span>' . $date . '</span><br />
                        <b>'.$lang["number_of_adults"].':</b> <span>' . $adults . '</span><br />
                        <b>'.$lang["your_message"].':</b> <span>' . $message . '</span><br />
                        <hr />
                        <p>This message was sent via the <a href="'.$_SERVER['HTTP_REFERER'].'">TurkeyTravel</a> Reservation form.</p>
                        ';
                    $sonuc=$lang["booking_confirm"];

            }
        }
        echo '<div class="reservation-form-submit">
                <div class="form-sonuc">'.$sonuc.'</div>
                '.$mesaj.'
              </div>
              ';
    ?>
    <div class="form-gallery">
        <?php
        $images_folder=realpath(".")."/assets/images/tours/$LinkDevam";
        $klasor = opendir($images_folder); //klasörü aç
        while($dosya = readdir($klasor)){ //klasördeki dosyalar taranıyor
            if (!is_dir($dosya)){ //dosya değişkenindeki değer klasör değilse
                if($dosya!=$LinkDevam.".jpg"){
                    echo '<a href="assets/images/tours/'.$LinkDevam.'/'.$dosya.'" id="'.$dosya.'" class="glightbox">
                                            <img src="assets/images/tours/'.$LinkDevam.'/'.$dosya.'" class="lazy" />
                                          </a>';
                }
            }
        }
        ?>
    </div>
<?php
    }else{
        $sonuc="Veri Akışında sorun oluştu...";
    }
?>