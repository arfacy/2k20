<?php 

include 'baglan.php';

echo "Burda olamaman gerekiyor. Yölendiriyorum...";
header("Refresh: 2; index.php?mod=yazi");

/*Ödev Ekleme*/

if (isset($_POST["yazi_ekle"])) {

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

	$yazi_uyeid			=	 	$_POST["yazi_uyeid"];
	$yazi_yazanad 		=	 	$_POST["yazi_yazanad"];
	$yazi_yazansoyad 	=	 	$_POST["yazi_yazansoyad"];
	$yazi_text 			=	 	$_POST["yazi_text"];
	$yazi_vurgu  		=	 	$_POST["yazi_vurgu"];
	$yazi_vurgurenk 	=	 	$_POST["yazi_vurgurenk"];

	if ($yazi_vurgu == 1 && $yazi_vurgurenk == " ") {

		$lokasyon1 = 'ekle.php?hata=002&?mod=' . $_GET['mod']; 
		header("Location:$lokasyon1");
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

		$ekle = $db->prepare("insert into yazi set yazi_uyeid=?, yazi_yazanad=?, yazi_yazansoyad=?, yazi_text=?, yazi_vurgu=?,  yazi_vurgurenk=?");
		$ekle->execute (array($yazi_uyeid, $yazi_yazanad, $yazi_yazansoyad, $yazi_text, $yazi_vurgu, $yazi_vurgurenk));

		$lokasyon2 = 'index.php?mod=' . $_GET['mod']; 
		header("Location:$lokasyon2");

	}
	

}

?>