<?php 

include "baglan.php";

if (isset($_POST['foto_ekle'])) {
	
	$foto_uyeid = $_POST['foto_uyeid'];
	$foto_text = $_POST['foto_text'];


	$uploads_dir = 'foto';
	@$tmp_name = $_FILES["foto"]["tmp_name"];
	@$name = $_FILES["foto"]["name"];

	$uzantilar = [
		'image/jpeg',
		'image/png'
	];

	$dosyauzantisi = $_FILES["foto"]["type"];

	$boyut = (1024 * 1024);


	if (in_array($dosyauzantisi, $uzantilar)) {
		
		if ($boyut >= $_FILES["dosya"]["size"]) {
			
			$benzersizsayi4 = rand(2000,33000);
			echo $name;
			echo $foto_yol = $uploads_dir . "/" . $benzersizsayi4 . "YA" . $name;

			@move_uploaded_file($tmp_name, "$uploads_dir/".$benzersizsayi4. "YA" .$name);


			$kaydet = $db->prepare("INSERT into foto set foto_uyeid=?, foto_yol=?, foto_text=?");

			$kaydet->execute (array($foto_uyeid, $foto_yol, $foto_text));

			if ($kaydet) {

				$lokasyon1 = 'index.php?foto=yes&mod=' . $_GET['mod'] ;
				header("Location:$lokasyon1");
			}else{
				$lokasyon2 = 'index.php?foto=no&mod=' . $_GET['mod'] ;
				header("Location:$lokasyon2");
			}

		}else{

			$lokasyon3 = 'ekle.php?hata=boyut&mod=' . $_GET['mod'];
			header("Location:$lokasyon3");

		}

	}else{

		$lokasyon4 = 'ekle.php?hata=uzanti&mod=' . $_GET['mod'];
		header("Location:$lokasyon4");

	}

}
?>

