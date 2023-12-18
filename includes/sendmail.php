<?php
defined('_GUVENLIK') or die("Redistrect Access");
require 'phpmailler/PHPMailerAutoload.php';
function SendMail($user_mail,$user_name="",$subject,$message="",$from="info@turkeytravel.com",$fromName="Turkey Travel"){
    $mail = new PHPMailer;

    //$mail->SMTPDebug = 3;                               // Enable verbose debug output

    $mail->CharSet = 'UTF-8';
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'mail.mexicoturquiatours.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'website@mexicoturquiatours.com';                 // SMTP username
    $mail->Password = 'Web1004!x';                           // SMTP password
    $mail->SMTPSecure = "";                            // Enable TLS encryption, `ssl` also accepted
    $mail->SMTPAutoTLS = false;
    $mail->Port = 587;                                    // TCP port to connect to

    $mail->setFrom($from, $fromName);
    $mail->addAddress($user_mail, $user_name);     // Add a recipient
    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = $subject;
    $mail->Body    = $message;

    if(!$mail->send()) {
        $mesaj=false;
    } else {
        $mesaj=true;
    }
    return $mesaj;
}