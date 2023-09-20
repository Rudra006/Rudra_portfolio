<?php
$name=$_POST["name"];
$email=$_POST["email"];
$subject=$_POST["subject"];
$message=$_POST["message"];

require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail= new PHPMailer(true);

$mail->isSMTP();
$mail->SMTPAuth=true;

$mail->Host = "smtp.gmail.com";
$mail->SMTPSecure=PHPMailer::ENCRYPTION_STARTTLS;

$mail->Port=587;

$mail->Username='unr.638@gmail.com';
$mail->Password='smowqhctszlmzmgw';

$mail->setFrom($email,$name);
$mail->addAddress("rudramadhab006@gmail.com","rudra");

$mail->Subject=$subject;
$mail->Body=$message;
$mail->send();
header("Location : index.html");