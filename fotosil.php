<?php 

include 'baglan.php';

session_start();

if (!isset($_SESSION['uye_ono'])){
	header("location:login.php?giris=yap");
}




$onaylimi = $db->query("SELECT * FROM uye WHERE uye_ono = '{$_SESSION['uye_ono']}'",PDO::FETCH_ASSOC);

foreach($onaylimi->fetchAll(PDO::FETCH_ASSOC) as $onay){
	if ($onay['uye_onay'] == 0) {
		header("location:index.php");
	}
}



$foto_id = $_GET['foto_id'];

$onaylimi = $db->query("SELECT * FROM foto WHERE foto_uyeid = '{$_SESSION['uye_ono']}' AND foto_id = '{$foto_id}' ",PDO::FETCH_ASSOC);

foreach($onaylimi->fetchAll(PDO::FETCH_ASSOC) as $onay){
	if ($onay) {
		
		$fotosil = $db->prepare("DELETE FROM foto WHERE foto_id='{$foto_id}'");

		if ($fotosil->execute()) {

			$foto_yol = $onay['foto_yol'];
			unlink($foto_yol);
			$lokasyon1 = 'index.php?mod=' . $_GET['mod'] . '&mod2=duzenle&sil=yes';
			header("Location: $lokasyon1");
		}else{
			$lokasyon2 = 'index.php?mod=' . $_GET['mod'] . '&mod2=duzenle&sil=no';
			header("Location: $lokasyon2");
		}

	}
}





?>