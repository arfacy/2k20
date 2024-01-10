<?php 
include 'baglan.php';

if (!isset($_SESSION['uye_ono'])){
	header("location:login.php?giris=yap");
}


$onaylimi = $db->query("SELECT * FROM uye WHERE uye_ono = '{$_SESSION['uye_ono']}'",PDO::FETCH_ASSOC);

foreach($onaylimi->fetchAll(PDO::FETCH_ASSOC) as $onay){
	if ($onay['uye_onay'] == 0) {
		header("location:index.php");
	}
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
	<script type="text/javascript" src="type.js"></script>

	<script src="//code.jquery.com/jquery-2.x.x.min.js"></script> 
	<script src="https://kit.fontawesome.com/6bcf6473ea.js"></script>

	<style type="text/css">

		.div-uyari{
			background-color: #ecf0f1;
			color: #2c3e50;
		}

	</style>

	<script type="text/javascript">

		function geriindex() {
			window.location = "index.php?mod=<?php echo $_GET['mod']; ?>"
		} 
	</script>

	<title>Yazı Ekle</title>
</head>
<body style="background-color: #2c3e50;">

	<?php 

	if (isset($_GET["hata"])) {
		if ($_GET["hata"] == "001") {?>

			<div id="fadediv" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100vh; background-color: black; z-index: 2; opacity: 0.6">

			</div>

			<div onclick="modalgiriskapat()" class="modal show" tabindex="-1" role="dialog" id="modal" style="display: block;">
				<div class="modal-dialog" role="document">
					<div class="modal-content div-uyari">
						<div class="modal-header">
							<h5 class="modal-title" style="">Uyarı</h5>
						</div>
						<div class="modal-body">
							<span class="">Lütfen Geçerli Bir Tarih Giriniz!</span><br>
							<small style="">("Yıl" yılının "Ay" ayının "Gün" gününe teslim edersin ödevini!)</small>
						</div>
						<div class="modal-footer">
							<button type="button" class="ntd-button ntd-button-dflt" onclick="modalgiriskapat()" data-dismiss="modal">Kapat</button>
						</div>
					</div>
				</div>
			</div>


			<?php
		}

		if ($_GET["hata"] == "002") {?>

			<div id="fadediv" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100vh; background-color: black; z-index: 2; opacity: 0.6">

			</div>

			<div onclick="modalgiriskapat()" class="modal show" tabindex="-1" role="dialog" id="modal" style="display: block;">
				<div class="modal-dialog" role="document">
					<div class="modal-content div-uyari">
						<div class="modal-header">
							<h5 class="modal-title" style="">Uyarı</h5>
						</div>
						<div class="modal-body">
							<span class="">Lütfen Geçerli Bir Vurgu Rengi Seçiniz!</span><br>
							<small style="">(hem vurgu istiyosun hem de renk vermiyosun balina mıyım ben nerden biliyim hangi rengi istediğini!)</small>
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

	?>








	<!-- Yazı Ekleme Başlangıç-->

	<div id="div-ekle" class="ntd-card-ekle c-white container" style="">
		<form action="yaziekle.php?mod=<?php echo $_GET['mod']; ?>" method="post" autocomplete="off">
			<input type="hidden" name="yazi_uyeid" value="<?php echo $_SESSION['uye_ono']; ?>">
			<div class="row" >
				<div class="col-md-10 col-sm-6 col-6">
					<h3 class="card-title">Yazı Ekle</h3>					
				</div>
				<div class="col-md-2 col-sm-6 col-6 text-right">
					<h4 style="margin-top: 5px;">
						<span class="buton-spn spn-ekle" onclick="geriindex()">Geri</span>
					</h4>
				</div>
			</div>
			<hr>
			<div class="ntd-form-item-ozel">
				<div class="row">

					<div class="col-md-3 col-sm-6 col-6">
						<input type="text" class="ntd-input" name="yazi_yazanad" id="input"  required="required" placeholder="Adı" onkeyup="this.value = this.value.replace(/[<>/]/g, '')">
					</div>

					<div class="col-md-3 col-sm-6 col-6">
						<input type="text" class="ntd-input" name="yazi_yazansoyad" id="input"  required="required" placeholder="Soyadı" onkeyup="this.value = this.value.replace(/[<>/]/g, '')">
					</div>

					<div class="col-md-3 col-sm-6 col-6" style="">
						<label class="containere">
							<input type="checkbox" type="checkbox" name="yazi_vurgu" value="1">
							<span class="ntd-checkbox">Vurgula</span>
						</label>
					</div>

					<div class="col-md-3 col-sm-4 col-6" style="">
						<select class="ntd-select" name="yazi_vurgurenk" required="required">
							<option selected value=" ">Vurgu Rengi</option>
							<option value="red" style="color: red;">Kırmızı</option>
							<option value="yellow" style="color: yellow;">Sarı</option>
							<option value="green" style="color: green;">Yeşil</option>
							<option value="blue" style="color: blue;">Mavi</option>
							<option value="pink" style="color: pink;">Pembe</option>
							<option value="purple" style="color: purple;">Mor</option>
						</select>
					</div> 

				</div>
				<div class="ntd-form-item-2">
					<textarea style="min-height: 200px; border: 0.5px solid rgba(0, 0, 0, 1)!important ;" type="text" class="ntd-input" name="yazi_text" id="input"  required="required" placeholder="Yazı" onkeyup="this.value = this.value.replace(/[<>/]/g, '')"></textarea>
				</div>
			</div>
			<button type="submit" class="ntd-button ntd-button-trns" name="yazi_ekle">Ekle</button>
		</form>
		<br>

	</div>
	<!-- Yazı Ekleme Bitiş-->




	<!-- Foto Ekleme Başlangıç-->

	<div id="div-ekle" class="ntd-card-ekle c-white container" style="">
		<form action="fotoekle.php?mod=<?php echo $_GET['mod']; ?>" method="post" autocomplete="off" enctype="multipart/form-data">
			<input type="hidden" name="foto_uyeid" value="<?php echo $_SESSION['uye_ono']; ?>">
			<div class="row" >
				<div class="col-md-10 col-sm-6 col-6">
					<h3 class="card-title">Fotoğraf Ekle</h3>					
				</div>
				<div class="col-md-2 col-sm-6 col-6 text-right">
					<h4 style="margin-top: 5px;">
						<span class="buton-spn spn-ekle" onclick="geriindex()">Geri</span>
					</h4>
				</div>
			</div>
			<hr>
			<div class="ntd-form-item-ozel">
				<div class="row">

					<div class="col-md-3 col-sm-6 col-12">
						<input type="file" id="file-foto" class="ntd-file" onChange="dosya_adi()" name="foto" id="input" style="display:none;" required="required">
						<label for="file-foto" class="ntd-input"><center>Dosya Seç</center></label>
					</div>
					<div class="col-md-9 col-sm-6 col-12" id="dosya-adi" style="font-size: 20px;padding: 5px 10px;">Dosya Adı :</div>
					<script type="text/javascript">
						function dosya_adi(){
							var ad=document.getElementById ("file-foto").files[0].name;
							document.getElementById ("dosya-adi").innerHTML="Dosya Adı : "+ad;
						}
					</script>

				</div>
				<div class="ntd-form-item-2">
					<input type="text" class="ntd-input" name="foto_text" id="input" placeholder="Açıklama (İsteğe Bağlı)" onkeyup="this.value = this.value.replace(/[<>/]/g, '')">
				</div>
			</div>
			<button type="submit" class="ntd-button ntd-button-trns" name="foto_ekle">Ekle</button>
		</form>
		<br>

	</div>

	<!-- Foto Ekleme Bitiş-->

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>