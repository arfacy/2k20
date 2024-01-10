
<?php 
session_start();


if (isset($_SESSION["uye_ono"])) {
	header("Location:index.php?mod=yazi");
}
 ?>


<html lang="en">
<head> 
	

	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://kit.fontawesome.com/6bcf6473ea.js"></script>
	<script type="text/javascript" src="type.js"></script>

	<title>2k20 Mezunları</title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:100&display=swap" rel="stylesheet">

	<style type="text/css">



		.div-uyari{
			background-color: #ecf0f1;
			color: #2c3e50;
		}

	</style>

</head>
<body style="overflow-x: hidden;">

	<?php 

	if (isset($_GET['hata'])) {

		$hata = $_GET['hata'];

		
		?>
		<div id="fadediv" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100vh; background-color: black; z-index: 2; opacity: 0.6">

		</div>

		<div onclick="modalgiriskapat()" class="modal show" tabindex="-1" role="dialog" id="modal" style="display: block;">
			<div class="modal-dialog" role="document">
				<div class="modal-content div-uyari">
					<div class="modal-header">
						<h5 class="modal-title" style="">Uyarı</h5>
					</div>
					<div class="modal-body">
						<p style="">
							
							<?php 

							if ($hata == "004") {
								echo "Yazmış olduğunuz okul numarası sitemize kayıtlı değildir. Lütfen tekrar deneyiniz.";
							}elseif ($hata == "005") {
								echo "Girmiş olduğunuz şifre yanlış. Lütfen tekrar deneyiniz.";
							}elseif ($hata == "006") {
								echo "Girmiş olduğunuz e-posta ile sitemize kayıtlı başka bir üye mevcut. Lütfen farklı bir e-posta ile tekrar deneyiniz.";
							}elseif ($hata == "007") {
								echo "Girmiş olduğunuz okul numarası ile sitemize kayıtlı başka bir üye mevcut.";
							}elseif ($hata == "404") {
								echo "Beklenmedik hata. Lütfen daha sonra tekrar deneyiniz.";
							}

							?>

						</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="ntd-button ntd-button-dflt" onclick="modalgiriskapat()" data-dismiss="modal">Kapat</button>
					</div>
				</div>
			</div>
		</div>
		<?php

	}



	if (isset($_GET['giris'])) {

		$giris = $_GET['giris'];

		if ($giris == "yap") {?>
			
			<div id="fadediv" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100vh; background-color: black; z-index: 2; opacity: 0.6">

			</div>

			<div onclick="modalgiriskapat()" class="modal show" tabindex="-1" role="dialog" id="modal" style="display: block;">
				<div class="modal-dialog" role="document">
					<div class="modal-content div-uyari">
						<div class="modal-header">
							<h5 class="modal-title" style="">Uyarı</h5>
						</div>
						<div class="modal-body">
							<p style="">Sitemizi kullanmak için giriş yapmanız gerekmektedir.</p>
						</div>
						<div class="modal-footer">
							<button type="button" class="ntd-button ntd-button-dflt" onclick="modalgiriskapat()" data-dismiss="modal">Kapat</button>
						</div>
					</div>
				</div>
			</div>
			<?php

		}

	}


	if (isset($_GET['kayit'])) {

		$kayit = $_GET['kayit'];

		
		?>
		<div id="fadediv" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100vh; background-color: black; z-index: 2; opacity: 0.6">

		</div>

		<div onclick="modalgiriskapat()" class="modal show" tabindex="-1" role="dialog" id="modal" style="display: block;">
			<div class="modal-dialog" role="document">
				<div class="modal-content div-uyari">
					<div class="modal-header">
						<h5 class="modal-title" style="">Uyarı</h5>
					</div>
					<div class="modal-body">
						<p style="">
							
							<?php
							if ($kayit == "yes") {
								echo "Sitemize kaydınız başarıyla yapılmıştır. Güzel günlerde kullanınnn";
							}elseif($kayit == "no"){
								echo "Sitemize kayıt işleminiz yapılırken beklenmedik bir hata oldu. Lütfen daha sonra tekrar deneyiniz. Hatanın tekrarlaması durumunda yusufabacik@gmail.com mail hesabına şikayette bulununuz. ";
							}else{
								echo "Beklenmedik parametre! Lütfen bir yetkiliyle iletişime geçin!";
							}
							?>

						</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="ntd-button ntd-button-dflt" onclick="modalgiriskapat()" data-dismiss="modal">Kapat</button>
					</div>
				</div>
			</div>
		</div>
		<?php

	}


	?>

	<div id="bg" style="position: absolute;top: 0px;left: 0px;z-index: -99;width: 100%;height: 100vh;"></div>
	


	<div id="div-giris" class="ntd-card ntd-card-trns c-white" style="font-family: 'Poppins', sans-serif;background-color: rgba(0, 0, 0, 0.8)!important;">
		<form action="islem.php" method="post" autocomplete="off">
			<div class="" >
				<h3 class="card-title">Giriş Yap</h3>
				<hr>
			</div>
			<div class="ntd-form-item">
				<input type="text" class="ntd-input" id="kullaniciadi" name="uye_ono" required="required" placeholder="Okul Numaranız" >
			</div>
			<div class="ntd-form-item">
				<input type="password" class="ntd-input" id="sifre" name="uye_sifre" required="required" placeholder="Şifreniz">
			</div>
			<button type="submit" class="ntd-button ntd-button-trns" name="uyegiris" style="font-family: 'Poppins', sans-serif; font-weight: 800;">Gönder</button>
			<div class="ntd-form-item-2">
				<span onclick="kayit()" style="cursor: pointer;">Yoksa sen üye değil misin?</span>
			</div>
		</form>
		<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Kare (Esnek) -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-9799598539510569"
     data-ad-slot="2037735127"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
	</div>


	<div id="div-kayit" class="ntd-card ntd-card-black c-white" style="position: absolute; display: none; z-index: 3; top: 5%; margin-bottom: 20px; padding-bottom: 5px; font-family: 'Poppins', sans-serif;">
		<form action="islem.php" method="post" autocomplete="off">
			<div class="" >
				<h3 class="card-title">Kayıt Ol</h3>
				<hr>
			</div>
			<div class="ntd-form-item">
				<input type="text" class="ntd-input" name="uye_ad" required="required" placeholder="Adınız">
			</div> 
			<div class="ntd-form-item">
				<input type="text" class="ntd-input" name="uye_soyad" required="required" placeholder="Soyadınız">
			</div>  
			<div class="ntd-form-item">
				<input type="text" class="ntd-input" name="uye_ono" required="required" placeholder="Okul Numaranız">
			</div>    
			<div class="ntd-form-item">
				<input type="email" class="ntd-input" name="uye_email" required="required" placeholder="Mailiniz">
			</div>  
			<div class="ntd-form-item">
				<input type="password" class="ntd-input" name="uye_sifre" required="required" placeholder="Şifreniz">
			</div>
			<div class="ntd-form-item-2">
				<span>Üyelik Sözleşmemizi kab şaka şaka yok öyle bi şey</span>
			</div>
			<button type="submit" class="ntd-button ntd-button-trns" name="uyekayit" style="font-family: 'Poppins', sans-serif; font-weight: 800;">Gönder</button>	
			<div class="ntd-form-item-2" style="margin-bottom: 5px!important;">
				<span onclick="giris()" style="cursor: pointer;">Zaten üyemiz misin?</span>
			</div>	
		</form>
	</div>







	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>