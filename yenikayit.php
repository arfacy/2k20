<?php 

echo "Burda olamaman gerekiyor.";


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

$uye_ad = $_GET["ad"];
$uye_soyad = $_GET["soyad"];
$uye_kadi = $_GET["kadi"];
$uye_email = $_GET["email"];

$mail = new PHPMailer(true);
try {

	$mail->setLanguage('tr');
	//$mail->SMTPDebug = 2;
	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->Username = 'destekots@gmail.com';
	$mail->Password = '192837ots';
	$mail->SMTPSecure = 'tls';
	$mail->Port = 587;
	$mail->CharSet = 'UTF-8';

    // maili gönderen kişi
	$mail->setFrom('destekots@gmail.com', 'OTS|Arif.net');
	$mail->addAddress('arifacay06@gmail.com');
	$mail->addReplyTo('destekots@gmail.com');

	$content= "
	Aşağıda Bilgileri Verilen Kişi Sisteme Üye Oldu.<br/><br/>
	Ad:  $uye_ad <br/>
	Soyad:  $uye_soyad <br/>
	Kullanıcı Adı:  $uye_kadi <br/>
	E-Mail:  $uye_email<br/>
	";

	$mail->isHTML(true);
	$mail->Subject = 'Yeni Kullanıcı Kaydı - OTS|Nepcen.net';
	$mail->Body = $content;

	$mail->send();
	header("Location:giris.php?kayit=yes");
	//echo "Mail gönderme işlemi başarıyla gerçekleşti.";

} catch (Exception $e){
	header("Location:giris.php?hata=404");
	//echo $e->errorMessage();
}

?>