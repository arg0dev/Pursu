
<meta http-equiv="refresh" content="2;URL=/index.html">

<?
require("class.phpmailer.php");

$mail = new PHPMailer();

$mail->IsSMTP();
$mail->Host     = "srvc184.turhost.com";
$mail->SMTPAuth = true;
$mail->Username = "arg0@eryilmazlar.net";
$mail->Password = "";
$mail->CharSet = 'UTF-8';
$mail->Port = 465;
$mail->From     = "arg0@eryilmazlar.net";
$mail->Fromname = "giden ismi";
$mail->AddAddress("arg0@eryilmazlar.net","Websitenizden gelen Siparişiniz.");
$mail->Subject  =  $_POST['email'];
$mail->Body     =  implode("  ",$_POST);
if(!$mail->Send())
{
   echo "Mesaj Gönderilemedi <p>";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}

echo '<script type="text/javascript">alert("E Postanız  Başarı ile  Gönderilmiştir.");</script>';

?>
