<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer();


$mail->isSMTP();
$mail->SMTPKeepAlive = true;
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls'; //ssl
$mail->CharSet = 'UTF-8';
$mail->Port = 587; //25 , 465 , 587
$mail->Host = "srvc184.turhost.com";

$mail->Username = "arg0@eryilmazlar.net";
$mail->Password = "N0P455W0RD";


$mail->setFrom("noreply@eryilmazlar.net");
$mail->addAddress("musteri@eryilmazlar.net");

$body = file_get_contents('./process.html');

$gelen = ["flow_1","flow_2","flow_3","flow_4"];
$giden = [$_POST['email'],$_POST['phone'],$_POST['subject'],$_POST['address']];

$body = str_replace($gelen,$giden,$body);

$mail->isHTML(true);
$mail->Subject = "Eryılmazlar Müşteri Destek Hattı";
$mail->Body = $body;

if ($mail->send())
    echo '<script>alert("İletinizi teslim aldık. Müşteri destek ekibimiz kısa süre içerisinde talebinizi değerlendirecektir. Teşekkür ederiz.")</script>';
else
    echo '<script>alert("İletiniz gönderilemedi. Lütfen daha sonra tekrar deneyiniz.")</script>';

?>