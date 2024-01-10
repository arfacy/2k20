<?php 

include 'baglan.php';

echo "Burda olamaman gerekiyor. Yölendiriyorum...";
header("Refresh: 2; index.php?mod=yazi");

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



$yazi_id = $_GET['yazi_id'];

$onaylimi = $db->query("SELECT * FROM yazi WHERE yazi_uyeid = '{$_SESSION['uye_ono']}' AND yazi_id = '{$yazi_id}' ",PDO::FETCH_ASSOC);

foreach($onaylimi->fetchAll(PDO::FETCH_ASSOC) as $onay){
	if ($onay) {
		
		$yazisil = $db->prepare("DELETE FROM yazi WHERE yazi_id='{$yazi_id}'");

		if ($yazisil->execute()) {

			$lokasyon1 = 'index.php?mod=' . $_GET['mod'] . '&mod2=duzenle&sil=yes';
			header("Location: $lokasyon1");
		}else{
			$lokasyon2 = 'index.php?mod=' . $_GET['mod'] . '&mod2=duzenle&sil=no';
			header("Location: $lokasyon2");
		}

	}
}





?>