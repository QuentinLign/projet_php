<?php
//require './PHPMailer/src/Exception.php';
//require './PHPMailer/src/PHPMailer.php';
//require './PHPMailer/src/SMTP.php';
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


$mail = new PHPMailer(); // create a new object
$mail->CharSet = 'UTF-8';
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
$mail->Host = "smtp.gmail.com";
$mail->Port = 465; // or 587
$mail->IsHTML(true);
$mail->Username = "quentin.lignani.schuman@gmail.com";
$mail->Password = "Admwb2000";
$mail->SetFrom("nakhila@orange.fr");
$mail->Subject = "[Robert Schuman] : Site des anciens élèves";
$mail->Body = "<center><b>Réservation au Snack</b></center><br><center><p>Bonjour ! Voici le site des anciens élèves ?</p><br><p>Commandez dès maintenant votre panini ou votre salade sur le site internet officiel du Snack</p><br><p>Une fois la commande validée, rendez-vous au Snack à partir de 12h pour récupérer votre commande</p> </center><html><center><input type='button' value='Je commande !'></center></html>";
$mail->AddAddress("q.lignani@lprs.fr");

 if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
 } else {
    echo "Message has been sent";
 }
 ?>
