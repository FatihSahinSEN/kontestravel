<?php
defined('_GUVENLIK') or die("Redistrect Access");
$file=__DIR__.DIRECTORY_SEPARATOR."tours".DIRECTORY_SEPARATOR.$LinkDevam.".php";
$map="assets/images/tours/$LinkDevam/$LinkDevam.jpg";
$images_folder=realpath(".")."/assets/images/tours/$LinkDevam";
if(!is_file($file)){
    header("HTTP/1.0 404 Not Found");
    include("includes/pages/404.php");
}else {
    include $file;
    if($data["lang"]!=$SelectLang["code"]){
        header("HTTP/1.0 404 Not Found");
        include("includes/pages/404.php");
        die();
    }
    if(is_dir($images_folder)){
        //VIEW
        ?>
        <section class="tour_details" id="tour_details">
            <article class="tour-header">
                <h1><?php echo $data["title"];?></h1>
                <p><?php echo $data["description"];?></p>
                <br />
                <br />
            </article>
            <div class="tour-cotainer">
            <article class="tour-plan">
                <div class="plan">
                    <h2><?php echo $lang["tour_plan"];?></h2>
                    <ul class="day-plan">
                        <?php foreach ($data["tour_plan"] as $plan){
                                echo '<li class="day">'.$plan["day"].'</li>';
                                echo '<li class="plan-title">'.$plan["title"].'</li>';
                                echo '<li class="plan-desc">'.$plan["description"].'</li>';
                            }
                        ?>
                    </ul>
                </div>
                <h2><?php echo $lang["tour_information"];?></h2>
                <table class="table-infos">
                    <?php
                    foreach ($data["tour_info"] as $key => $value){
                        echo '<tr>
                            <td class="title">'.$lang[$key].'</td>
                            <td class="desc">';
                        if($SelectLang["code"]=="en"){
                            echo str_replace("*","<b style='color:#dd3333'>&#9734;  </b>",str_replace("(PLEASE NOTE:",'<a href="en/payment-cancel-policy" style="font-weight: 700;">Payment Terms & Cancellation Policies</a><br /><br />(PLEASE NOTE:',str_replace("\n","<br />",$value)));
                        }else{
                            echo str_replace("*","<b style='color:#dd3333'>&#9734;  </b>",str_replace("(PLEASE NOTE: SHOULD OUR GUESTS PREFER TO BOOK THEIR OWN ACCOMODATION SEPARATELY THEN THE PRICE WILL REDUCE ACCORDINGLY.)",'<a href="es/condiciones-de-pago-tarifa-de-cancelacion" style="font-weight: 700;">CONDICIONES DE PAGO & TARIFA DE CANCELACION</a>',str_replace("\n","<br />",$value)));
                        }
                        echo '</td>
                        </tr>';

                    }
                    ?>
                </table>
            </article>
            <article class="tour-gallery">
                <div class="book-now" onclick="javascript:BookNow()"><?php echo $lang["booking"];?></div>

                    <h2><?php echo $lang["tour_gallery"];?></h2>
                <div>
                <a href="<?php echo $map;?>" class="glightbox" onClick="return false">
                    <img src="<?php echo $map;?>" alt="<?php echo $data["title"];?>" class="lazy" style="width: 100%;height: 100%;"/>
                </a>
                </div>
                        <div class="tt-gallery">
                        <?php
                        $klasor = opendir($images_folder); //klasörü aç
                        while($dosya = readdir($klasor)){ //klasördeki dosyalar taranıyor
                            if (!is_dir($dosya)){ //dosya değişkenindeki değer klasör değilse
                                if($dosya!=$LinkDevam.".jpg"){
                                    if($dosya!="tapa.jpg"){
                                        echo '<a href="assets/images/tours/'.$LinkDevam.'/'.$dosya.'" id="'.$dosya.'" class="glightbox" onClick="document.getElementById(\'1\').scrollIntoView(true);">
                                                <img src="assets/images/tours/'.$LinkDevam.'/'.$dosya.'" alt="'.$data["title"].'" class="lazy" />
                                              </a>';
                                    }
                                }
                            }
                        }
                        ?>
                        </div>
                </div>
            </article>
            </div>
        </section>
        <section class="booking-form" id="booking-form">
            <article class="reservation">
                <div id="response" style="text-align:center;font-size:1em;padding:1em;margin-top:1rem;border-radius:0.4rem;display:none;"></div>
                <div class="reservation-form">
                    <form method="post" action="" id="ReservationForm" name="ReservationForm" onsubmit="Reservation(event)">
                        <h5 style="font-size: 2em;font-weight: 700;text-align: center;margin-top: 100px;"><?php echo $data["title"];?></h5>
                        <hr />
                        <label><?php echo $lang["your_name"];?> <span>*</span></label>
                        <input class="form-input" type="text" name="name" placeholder="<?php echo $lang["your_name_entry"];?>" required value="Fatih ŞEN">
                        <input class="form-input" type="hidden" name="tour-name" value="<?php echo $data["title"];?>">
                        <input class="form-input" type="hidden" name="web-uri" value="<?php echo $LinkDevam;?>">
                        <input class="form-input" type="hidden" name="lang" value="<?php echo $SelectLang['code'];?>">
                        <label><?php echo $lang["your_phone"];?> <span>*</span></label>
                        <input class="form-input" type="text" name="phone" placeholder="<?php echo $lang["your_phone_entry"];?>" required value="5358564253">
                        <label><?php echo $lang["your_email"];?> <span>*</span></label>
                        <input class="form-input" type="text" name="email" value="Your email address" style="display: none;" placeholder="<?php echo $lang["your_email_entry"];?>" required>
                        <input class="form-input" type="text" name="posta" placeholder="<?php echo $lang["your_email_entry"];?>" required value="fatihsahinsen@outlook.com">
                        <label><?php echo $lang["country"];?> <span>*</span></label>
                        <select id="country" class="form-input" style="width: 95%;" name="country" required>
                            <option  value=""> Entry Country</option>
                            <option value="Afganistan">Afghanistan</option>
                            <option value="Albania">Albania</option>
                            <option value="Algeria">Algeria</option>
                            <option value="American Samoa">American Samoa</option>
                            <option value="Andorra">Andorra</option>
                            <option value="Angola">Angola</option>
                            <option value="Anguilla">Anguilla</option>
                            <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                            <option value="Argentina">Argentina</option>
                            <option value="Armenia">Armenia</option>
                            <option value="Aruba">Aruba</option>
                            <option value="Australia">Australia</option>
                            <option value="Austria">Austria</option>
                            <option value="Azerbaijan">Azerbaijan</option>
                            <option value="Bahamas">Bahamas</option>
                            <option value="Bahrain">Bahrain</option>
                            <option value="Bangladesh">Bangladesh</option>
                            <option value="Barbados">Barbados</option>
                            <option value="Belarus">Belarus</option>
                            <option value="Belgium">Belgium</option>
                            <option value="Belize">Belize</option>
                            <option value="Benin">Benin</option>
                            <option value="Bermuda">Bermuda</option>
                            <option value="Bhutan">Bhutan</option>
                            <option value="Bolivia">Bolivia</option>
                            <option value="Bonaire">Bonaire</option>
                            <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                            <option value="Botswana">Botswana</option>
                            <option value="Brazil">Brazil</option>
                            <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                            <option value="Brunei">Brunei</option>
                            <option value="Bulgaria">Bulgaria</option>
                            <option value="Burkina Faso">Burkina Faso</option>
                            <option value="Burundi">Burundi</option>
                            <option value="Cambodia">Cambodia</option>
                            <option value="Cameroon">Cameroon</option>
                            <option value="Canada">Canada</option>
                            <option value="Canary Islands">Canary Islands</option>
                            <option value="Cape Verde">Cape Verde</option>
                            <option value="Cayman Islands">Cayman Islands</option>
                            <option value="Central African Republic">Central African Republic</option>
                            <option value="Chad">Chad</option>
                            <option value="Channel Islands">Channel Islands</option>
                            <option value="Chile">Chile</option>
                            <option value="China">China</option>
                            <option value="Christmas Island">Christmas Island</option>
                            <option value="Cocos Island">Cocos Island</option>
                            <option value="Colombia">Colombia</option>
                            <option value="Comoros">Comoros</option>
                            <option value="Congo">Congo</option>
                            <option value="Cook Islands">Cook Islands</option>
                            <option value="Costa Rica">Costa Rica</option>
                            <option value="Cote DIvoire">Cote DIvoire</option>
                            <option value="Croatia">Croatia</option>
                            <option value="Cuba">Cuba</option>
                            <option value="Curaco">Curacao</option>
                            <option value="Cyprus">Cyprus</option>
                            <option value="Czech Republic">Czech Republic</option>
                            <option value="Denmark">Denmark</option>
                            <option value="Djibouti">Djibouti</option>
                            <option value="Dominica">Dominica</option>
                            <option value="Dominican Republic">Dominican Republic</option>
                            <option value="East Timor">East Timor</option>
                            <option value="Ecuador">Ecuador</option>
                            <option value="Egypt">Egypt</option>
                            <option value="El Salvador">El Salvador</option>
                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                            <option value="Eritrea">Eritrea</option>
                            <option value="Estonia">Estonia</option>
                            <option value="Ethiopia">Ethiopia</option>
                            <option value="Falkland Islands">Falkland Islands</option>
                            <option value="Faroe Islands">Faroe Islands</option>
                            <option value="Fiji">Fiji</option>
                            <option value="Finland">Finland</option>
                            <option value="France">France</option>
                            <option value="French Guiana">French Guiana</option>
                            <option value="French Polynesia">French Polynesia</option>
                            <option value="French Southern Ter">French Southern Ter</option>
                            <option value="Gabon">Gabon</option>
                            <option value="Gambia">Gambia</option>
                            <option value="Georgia">Georgia</option>
                            <option value="Germany">Germany</option>
                            <option value="Ghana">Ghana</option>
                            <option value="Gibraltar">Gibraltar</option>
                            <option value="Great Britain">Great Britain</option>
                            <option value="Greece">Greece</option>
                            <option value="Greenland">Greenland</option>
                            <option value="Grenada">Grenada</option>
                            <option value="Guadeloupe">Guadeloupe</option>
                            <option value="Guam">Guam</option>
                            <option value="Guatemala">Guatemala</option>
                            <option value="Guinea">Guinea</option>
                            <option value="Guyana">Guyana</option>
                            <option value="Haiti">Haiti</option>
                            <option value="Hawaii">Hawaii</option>
                            <option value="Honduras">Honduras</option>
                            <option value="Hong Kong">Hong Kong</option>
                            <option value="Hungary">Hungary</option>
                            <option value="Iceland">Iceland</option>
                            <option value="Indonesia">Indonesia</option>
                            <option value="India">India</option>
                            <option value="Iran">Iran</option>
                            <option value="Iraq">Iraq</option>
                            <option value="Ireland">Ireland</option>
                            <option value="Isle of Man">Isle of Man</option>
                            <option value="Israel">Israel</option>
                            <option value="Italy">Italy</option>
                            <option value="Jamaica">Jamaica</option>
                            <option value="Japan">Japan</option>
                            <option value="Jordan">Jordan</option>
                            <option value="Kazakhstan">Kazakhstan</option>
                            <option value="Kenya">Kenya</option>
                            <option value="Kiribati">Kiribati</option>
                            <option value="Korea North">Korea North</option>
                            <option value="Korea Sout">Korea South</option>
                            <option value="Kuwait">Kuwait</option>
                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                            <option value="Laos">Laos</option>
                            <option value="Latvia">Latvia</option>
                            <option value="Lebanon">Lebanon</option>
                            <option value="Lesotho">Lesotho</option>
                            <option value="Liberia">Liberia</option>
                            <option value="Libya">Libya</option>
                            <option value="Liechtenstein">Liechtenstein</option>
                            <option value="Lithuania">Lithuania</option>
                            <option value="Luxembourg">Luxembourg</option>
                            <option value="Macau">Macau</option>
                            <option value="Macedonia">Macedonia</option>
                            <option value="Madagascar">Madagascar</option>
                            <option value="Malaysia">Malaysia</option>
                            <option value="Malawi">Malawi</option>
                            <option value="Maldives">Maldives</option>
                            <option value="Mali">Mali</option>
                            <option value="Malta">Malta</option>
                            <option value="Marshall Islands">Marshall Islands</option>
                            <option value="Martinique">Martinique</option>
                            <option value="Mauritania">Mauritania</option>
                            <option value="Mauritius">Mauritius</option>
                            <option value="Mayotte">Mayotte</option>
                            <option value="Mexico" selected>Mexico</option>
                            <option value="Midway Islands">Midway Islands</option>
                            <option value="Moldova">Moldova</option>
                            <option value="Monaco">Monaco</option>
                            <option value="Mongolia">Mongolia</option>
                            <option value="Montserrat">Montserrat</option>
                            <option value="Morocco">Morocco</option>
                            <option value="Mozambique">Mozambique</option>
                            <option value="Myanmar">Myanmar</option>
                            <option value="Nambia">Nambia</option>
                            <option value="Nauru">Nauru</option>
                            <option value="Nepal">Nepal</option>
                            <option value="Netherland Antilles">Netherland Antilles</option>
                            <option value="Netherlands">Netherlands (Holland, Europe)</option>
                            <option value="Nevis">Nevis</option>
                            <option value="New Caledonia">New Caledonia</option>
                            <option value="New Zealand">New Zealand</option>
                            <option value="Nicaragua">Nicaragua</option>
                            <option value="Niger">Niger</option>
                            <option value="Nigeria">Nigeria</option>
                            <option value="Niue">Niue</option>
                            <option value="Norfolk Island">Norfolk Island</option>
                            <option value="Norway">Norway</option>
                            <option value="Oman">Oman</option>
                            <option value="Pakistan">Pakistan</option>
                            <option value="Palau Island">Palau Island</option>
                            <option value="Palestine">Palestine</option>
                            <option value="Panama">Panama</option>
                            <option value="Papua New Guinea">Papua New Guinea</option>
                            <option value="Paraguay">Paraguay</option>
                            <option value="Peru">Peru</option>
                            <option value="Phillipines">Philippines</option>
                            <option value="Pitcairn Island">Pitcairn Island</option>
                            <option value="Poland">Poland</option>
                            <option value="Portugal">Portugal</option>
                            <option value="Puerto Rico">Puerto Rico</option>
                            <option value="Qatar">Qatar</option>
                            <option value="Republic of Montenegro">Republic of Montenegro</option>
                            <option value="Republic of Serbia">Republic of Serbia</option>
                            <option value="Reunion">Reunion</option>
                            <option value="Romania">Romania</option>
                            <option value="Russia">Russia</option>
                            <option value="Rwanda">Rwanda</option>
                            <option value="St Barthelemy">St Barthelemy</option>
                            <option value="St Eustatius">St Eustatius</option>
                            <option value="St Helena">St Helena</option>
                            <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                            <option value="St Lucia">St Lucia</option>
                            <option value="St Maarten">St Maarten</option>
                            <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                            <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                            <option value="Saipan">Saipan</option>
                            <option value="Samoa">Samoa</option>
                            <option value="Samoa American">Samoa American</option>
                            <option value="San Marino">San Marino</option>
                            <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                            <option value="Saudi Arabia">Saudi Arabia</option>
                            <option value="Senegal">Senegal</option>
                            <option value="Seychelles">Seychelles</option>
                            <option value="Sierra Leone">Sierra Leone</option>
                            <option value="Singapore">Singapore</option>
                            <option value="Slovakia">Slovakia</option>
                            <option value="Slovenia">Slovenia</option>
                            <option value="Solomon Islands">Solomon Islands</option>
                            <option value="Somalia">Somalia</option>
                            <option value="South Africa">South Africa</option>
                            <option value="Spain">Spain</option>
                            <option value="Sri Lanka">Sri Lanka</option>
                            <option value="Sudan">Sudan</option>
                            <option value="Suriname">Suriname</option>
                            <option value="Swaziland">Swaziland</option>
                            <option value="Sweden">Sweden</option>
                            <option value="Switzerland">Switzerland</option>
                            <option value="Syria">Syria</option>
                            <option value="Tahiti">Tahiti</option>
                            <option value="Taiwan">Taiwan</option>
                            <option value="Tajikistan">Tajikistan</option>
                            <option value="Tanzania">Tanzania</option>
                            <option value="Thailand">Thailand</option>
                            <option value="Togo">Togo</option>
                            <option value="Tokelau">Tokelau</option>
                            <option value="Tonga">Tonga</option>
                            <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                            <option value="Tunisia">Tunisia</option>
                            <option value="Turkey">Turkey</option>
                            <option value="Turkmenistan">Turkmenistan</option>
                            <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                            <option value="Tuvalu">Tuvalu</option>
                            <option value="Uganda">Uganda</option>
                            <option value="United Kingdom">United Kingdom</option>
                            <option value="Ukraine">Ukraine</option>
                            <option value="United Arab Erimates">United Arab Emirates</option>
                            <option value="United States of America">United States of America</option>
                            <option value="Uraguay">Uruguay</option>
                            <option value="Uzbekistan">Uzbekistan</option>
                            <option value="Vanuatu">Vanuatu</option>
                            <option value="Vatican City State">Vatican City State</option>
                            <option value="Venezuela">Venezuela</option>
                            <option value="Vietnam">Vietnam</option>
                            <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                            <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                            <option value="Wake Island">Wake Island</option>
                            <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                            <option value="Yemen">Yemen</option>
                            <option value="Zaire">Zaire</option>
                            <option value="Zambia">Zambia</option>
                            <option value="Zimbabwe">Zimbabwe</option>
                        </select>
                        <label style="width: 53%;position: relative" class="date-label"><?php echo $lang["date"];?> <span>*</span></label>
                        <label style="width:40%;" class="adult-label"><?php echo $lang["number_of_adults"];?> <span>*</span></label>
                        <?php if( $detect->isMobile() && !$detect->isTablet() ){
                            echo '<input type="date" min="'.date("Y-m-d", strtotime('tomorrow')).'" class="form-input date-input" name="date" style="width: 45%;" required />';
                        }else{
                            echo '<div style="width: 50%;float: left"><input type="text" class="form-input date-input" name="date" id="date" placeHolder="Day / Month / Year" required /></div>';
                        } ?>


                        <select id="adults" class="form-input adult-input" name="adults" style="width:41%;margin-left:20px;" name="adults" required>
                            <option value=""> Entry Adults</option>
                            <?php
                            for($i=1;$i<30;$i++){
                            echo '<option value="'.$i.'">'.$i.'</option>';
                            }
                            ?>

                        </select>
                        <label><?php echo $lang["your_message"];?> <span>*</span></label>
                        <textarea class="form-textarea" name="message" cols="15">Mesaj</textarea>

                        <input type="button" class="form-submit" value=" <?php echo $lang["cancel"];?>" style="background-color: #dddddd;color:#dd3333;cursor: pointer" onClick="BookNowCancel()" />
                        <input type="submit" class="form-submit" name="submit" value=" <?php echo $lang["booking_message"];?>" style="float: right"/>
                    </form>
                </div>
            </article>
        </section>
        <?php include "includes/loading.php"; ?>
        <?php include "includes/message.php"; ?>
<?php
    }else{
        echo "Media Dosyaları bulunamadı..";
    }
}
?>