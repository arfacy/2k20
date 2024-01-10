<?php 

include 'baglan.php';

echo "Burda olamaman gerekiyor. Yölendiriyorum...";
header("Refresh: 2; index.php?mod=yazi");

session_start();

$yazi_id 	= 	$_GET["yazi_id"];
$uyeid 		=	$_SESSION['uye_ono'];

$uyeidcek = $db->query("SELECT * FROM yazi WHERE yazi_id = '{$yazi_id}'",PDO::FETCH_ASSOC);

foreach($uyeidcek->fetchAll(PDO::FETCH_ASSOC) as $uye){
	if ($_SESSION['uye_ono'] !== $uye['yazi_uyeid']) {
		header("Location:login.php?giris=yap");
	}
}

$onaylimi = $db->query("SELECT * FROM uye WHERE uye_ono = '{$_SESSION['uye_ono']}'",PDO::FETCH_ASSOC);

foreach($onaylimi->fetchAll(PDO::FETCH_ASSOC) as $onay){
	if ($onay['uye_onay'] == 0) {
		header("location:index.php");
	}
}

/*Yaz覺 D羹zenleme*/

if (isset($_POST["yazi_kaydet"])) {

	/*
	echo  $odev_ad;
	echo "<br>";
	echo  $odev_tgun;
	echo "<br>";
	echo  $odev_tay;
	echo "<br>";
	echo  $odev_tyil;
	echo "<br>";
	echo  $odev_onem;
	echo "<br>";
	echo  $odev_vurgu;
	echo "<br>";
	echo  $odev_vurgurenk;
	echo "<br>";
	echo "<hr>";
	echo "<br>";
	*/

	$yazi_id 			= 		$_POST["yazi_id"];
	$yazi_uyeid			=	 	$_POST["yazi_uyeid"];
	$yazi_yazanad 		=	 	$_POST["yazi_yazanad"];
	$yazi_yazansoyad 	=	 	$_POST["yazi_yazansoyad"];
	$yazi_text 			=	 	$_POST["yazi_text"];
	$yazi_vurgu  		=	 	$_POST["yazi_vurgu"];
	$yazi_vurgurenk 	=	 	$_POST["yazi_vurgurenk"];

	if ($yazi_vurgu == 1 && $yazi_vurgurenk == " ") {

		$lokasyon1 = 'duzenle.php?mod=' . $_GET['mod'] . '&yazi_id=&hata=002' ;
		header("Location:");
	}else{

		if (!isset($_POST["yazi_vurgu"])) {
			$yazi_vurgu = "0";
		}else{
			$yazi_vurgu = $_POST["yazi_vurgu"];
		}

		if ($_POST["yazi_vurgu"] == "0") {
			$yazi_vurgurenk = "dflt";
		}else{
			$yazi_vurgurenk = $_POST["yazi_vurgurenk"];
		}

		$kaydet=$db->prepare("UPDATE yazi SET yazi_uyeid=:yazi_uyeid, yazi_yazanad=:yazi_yazanad, yazi_yazansoyad=:yazi_yazansoyad, yazi_text=:yazi_text, yazi_vurgu=:yazi_vurgu, yazi_vurgurenk=:yazi_vurgurenk WHERE yazi_id=:yazi_id");

		$result=$kaydet->execute([
			":yazi_uyeid"         	=> 	$yazi_uyeid,
			":yazi_yazanad"      	=> 	$yazi_yazanad,
			":yazi_yazansoyad"      => 	$yazi_yazansoyad,
			":yazi_text"      		=> 	$yazi_text,
			":yazi_vurgu"      		=>	$yazi_vurgu,
			":yazi_vurgurenk"     	=>	$yazi_vurgurenk,
			":yazi_id"           	=>	$yazi_id
		]);

		$lokasyon2 = 'index.php?mod=' . $_GET['mod'] . '&mod2=duzenle&kayit=yes';
		header("Location:$lokasyon2");

	}
	

}

?>