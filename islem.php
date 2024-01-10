<?php 

include 'baglan.php';

echo "Burda olamaman gerekiyor. Yönlendiriyorum...";
header("Refresh: 2; index.php?mod=yazi");

/*Üye Kaydı*/


if (isset($_POST["uyekayit"])) {
	$uye_ad = $_POST["uye_ad"];
	$uye_soyad = $_POST["uye_soyad"];
	$uye_ono = $_POST["uye_ono"];
	$uye_email = $_POST["uye_email"];
	$uye_sifre = md5($_POST["uye_sifre"]);


	$sr1 = $db->query("SELECT * FROM uye WHERE uye_email = '{$uye_email}'",PDO::FETCH_ASSOC);

	$var1 = $sr1->fetchAll(PDO::FETCH_ASSOC);


	if ($var1) {

		header("Location:login.php?hata=006");

	}elseif (!$var1) {
		
		$sr2 = $db->query("SELECT * FROM uye WHERE uye_ono = '{$uye_ono}'",PDO::FETCH_ASSOC);

		$var2 = $sr2->fetchAll(PDO::FETCH_ASSOC);

		if ($var2) {

			header("Location:login.php?hata=007");

		}elseif (!$var2) {

			$kaydet = $db->prepare("insert into uye set uye_ad=?, uye_soyad=?, uye_ono=?, uye_email=?, uye_sifre=?");

			$kaydet->execute (array($uye_ad, $uye_soyad, $uye_ono, $uye_email, $uye_sifre));

			header("Location:login.php");

		}else{

			header("Location:login.php?kayit=no");

		}

	}else{
		header("Location:login.php?hata=404");
	}


}

/*



*/




/*Üye Giriş Sorgusu*/


if (isset($_POST['uyegiris'])) {
	$uye_ono = $_POST["uye_ono"];
	$uye_sifre = md5($_POST["uye_sifre"]);



	$onovarmi = $db->query("SELECT * FROM uye WHERE uye_ono = '{$uye_ono}'",PDO::FETCH_ASSOC);

	$varmi = $onovarmi->fetchAll(PDO::FETCH_ASSOC);

	if (!$varmi) {

		header("Location:login.php?hata=004");

	}elseif ($varmi) {

		$uyesor = $db->query("SELECT * FROM uye WHERE uye_ono = '{$uye_ono}'",PDO::FETCH_ASSOC);

		foreach ($uyesor->fetchAll(PDO::FETCH_ASSOC) as $sor) {
			if ($uye_sifre == $sor["uye_sifre"]) {

				$_SESSION["uye_ono"] = $sor["uye_ono"];
				header("Location:index.php?mod=yazi");

			}else{

				header("Location:login.php?hata=005");

			}
		}
	}else{
		header("Location:login.php?hata=404");
	}







}










?>