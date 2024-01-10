<!doctype html>
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

  <style type="text/css">

  </style>

  <title>Yıllık Yazılarım
  </title>
</head><?php
        include 'baglan.php';
        error_reporting(0);
        $id;

        if (!isset($_SESSION['uye_ono'])) {
          if (!isset($_GET['id'])) {
            header("Location:login.php?giris=yap");
          }
        } else {

          $id = $_SESSION['uye_ono'];
        }


        if (isset($_GET['id'])) {
          $linkid = $_GET['id'];
        } elseif (!isset($_GET['id'])) {
          $linkid = $_SESSION['uye_ono'];
        }


        ?>

<!doctype html>
<html lang="en">

<head>


  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" href="stylel.css">
  <script type="text/javascript" src="typek.js"></script>

  <script src="//code.jquery.com/jquery-2.x.x.min.js"></script>
  <script src="https://kit.fontawesome.com/6bcf6473ea.js"></script>
  <script src="https://npmcdn.com/minigrid@3.0.1/dist/minigrid.min.js"></script>
  <script type="text/javascript">
    function cik() {
      window.location = "cikis.php"
    }

    function ekle() {
      window.location = "ekle.php?mod=<?php echo $_GET['mod']; ?>"
    }

    function giris() {
      window.location = "login.php"
    }

    function duzenle() {
      window.location = "index.php?mod=<?php echo $_GET['mod']; ?>&mod2=duzenle"
    }

    function duzenleiptal() {
      window.location = "index.php?mod=<?php echo $_GET['mod']; ?>"
    }

    function yazi() {
      window.location = "index.php?mod=yazi<?php if (isset($_GET['id'])) {
                                              echo '&id=' . $_GET['id'];
                                            }
                                            if (isset($_GET['mod2'])) {
                                              echo '&mod2=' . $_GET['mod2'];
                                            } ?>";
    }

    function foto() {
      window.location = "index.php?mod=foto<?php if (isset($_GET['id'])) {
                                              echo '&id=' . $_GET['id'];
                                            }
                                            if (isset($_GET['mod2'])) {
                                              echo '&mod2=' . $_GET['mod2'];
                                            } ?>";
    }



    (function() {
      var grid;

      function init() {
        grid = new Minigrid({
          container: '.yazis',
          item: '.yazi',
          gutter: 6
        });
        grid.mount();
      }

      // mount
      function update() {
        grid.mount();
      }

      document.addEventListener('DOMContentLoaded', init);
      window.addEventListener('resize', update);
    })();




    (function() {
      var grid;

      function init() {
        grid = new Minigrid({
          container: '.fotos',
          item: '.fotolar',
          gutter: 6
        });
        grid.mount();
      }

      // mount
      function update() {
        grid.mount();
      }

      document.addEventListener('DOMContentLoaded', init);
      window.addEventListener('resize', update);
    })();
  </script>

  <style type="text/css">
    .active {
      background-color: #ecf0f1 !important;
      border-color: #ecf0f1 !important;
      color: #2c3e50 !important;
    }

    .deactive {
      background-color: #2c3e50 !important;
      border-color: #00000000 !important;
      color: #ecf0f1 !important;
    }

    .spn-yazi {
      color: #2c3e50;
      background-color: #ecf0f1;
      border: 1px solid #ecf0f1;
      border-radius: 24px;
      padding-left: 5px;
      padding-right: 5px;
      padding-top: 5px;
      padding-bottom: 5px;
    }

    .spn-foto {
      color: #ecf0f1;
      border: 1px solid #00000000;
      border-radius: 24px;
      padding-left: 5px;
      padding-right: 5px;
      padding-top: 5px;
      padding-bottom: 5px;
    }


    .button-duzenle {
      background-color: #ffffff00;
      height: 50px;
      width: 100%;
      border-radius: 25px;
      border-right: 0px !important;
      border-bottom-right-radius: 0px;
      border-top-right-radius: 0px;
      font-size: 20px;
      line-height: 20px;
      padding-top: 10px;
      padding-bottom: 10px;
      color: #2c3e50;
      border: 1px solid #2c3e50;
    }

    .button-duzenle:hover {
      background-color: #2196F3 !important;
      color: #ecf0f1;
    }

    .button-sil {
      background-color: #ffffff00;
      height: 50px;
      width: 100%;
      border-radius: 25px;
      border-left: 0px !important;
      border-bottom-left-radius: 0px;
      border-top-left-radius: 0px;
      font-size: 20px;
      line-height: 20px;
      padding-top: 10px;
      padding-bottom: 10px;
      color: #2c3e50;
      border: 1px solid #2c3e50;
    }

    .button-sil:hover {
      background-color: #D50000 !important;
      color: #ecf0f1;
    }

    .button-fotosil {
      background-color: #ffffff00;
      height: 50px;
      width: 100%;
      border-radius: 25px;
      font-size: 20px;
      line-height: 20px;
      padding-top: 10px;
      padding-bottom: 10px;
      color: #2c3e50;
      border: 1px solid #2c3e50;
    }

    .button-fotosil:hover {
      background-color: #D50000 !important;
      color: #ecf0f1;
    }




    * {
      box-sizing: border-box;
    }

    .card {
      width: 31%;
      margin: 1%;
      padding: 10px;
      color: #2c3e50;
      -webkit-box-shadow: 0px 0px 20px 5px rgba(0, 0, 0, 0.3);
      -moz-box-shadow: 0px 0px 20px 5px rgba(0, 0, 0, 0.3);
      box-shadow: 0px 0px 20px 5px rgba(0, 0, 0, 0.3);
    }

    .div-isim {
      padding: 100px;
    }

    @media (max-width: 768px) {
      .card {
        width: 48%;

      }
    }

    @media (max-width: 576px) {
      .card {
        width: 95%;
      }

      .cards {
        max-width: 540px !important;
      }

      .div-isim {
        padding-top: 100px;
        padding-bottom: 100px;
        padding-left: 50px;
        padding-right: 50px;
      }

    }

    @media (max-width: 375px) {

      .div-isim {
        padding-top: 100px;
        padding-bottom: 100px;
        padding-left: 40px;
        padding-right: 40px;
      }

    }

    @media (max-width: 360px) {

      .div-isim {
        padding-top: 100px;
        padding-bottom: 100px;
        padding-left: 30px;
        padding-right: 30px;
      }

    }

    @media (max-width: 345px) {

      .div-isim {
        padding-top: 100px;
        padding-bottom: 100px;
        padding-left: 20px;
        padding-right: 20px;
      }

    }

    @media (max-width: 325px) {

      .div-isim {
        padding-top: 100px;
        padding-bottom: 100px;
        padding-left: 10px;
        padding-right: 10px;
      }

    }



    .cards {
      width: 100%;
      max-width: 1040px;
      margin: 0 auto;
      text-align: center;
    }
  </style>

  <title>Mezuniyet Yazılarım</title>
</head>

<body style="background-color: #2c3e50;">



  <?php
  if (isset($_SESSION['uye_ono'])) {

    $onaylimi = $db->query("SELECT * FROM uye WHERE uye_ono = '{$_SESSION['uye_ono']}'", PDO::FETCH_ASSOC);

    foreach ($onaylimi->fetchAll(PDO::FETCH_ASSOC) as $onay) {


      if ($onay['uye_onay'] == 0) {




  ?>
        <div id="fadediv" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100vh; background-color: black; z-index: 2; opacity: 0.6">

        </div>

        <div onclick="modalgiriskapat()" class="modal show" tabindex="-1" role="dialog" id="modal" style="display: block;">
          <div class="modal-dialog" role="document">
            <div class="modal-content div-uyari">
              <div class="modal-header">
                <h5 class="modal-title">Uyarı</h5>
              </div>
              <div class="modal-body">
                <p>

                  Hesabınız henüz onaylanmadığı için sistemi kullanamazsınız. Eğer sistemi kullanmayı düşünüyorsanız lütfen yetkiliyle iletişime geçin.

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
    }
  }


  ?>


  <div class="container" style="max-width: 1040px;">
    <div id="" class="ntd-card-cnt" style="background-color: #ecf0f1; color: #2c3e50;">
      <div class="row">
        <?php

        if (isset($_GET['mod2']) && $_GET['mod2'] == 'duzenle') { ?>
          <div class="col-12 text-muted">
            <center>
              <h1>Düzenleme Modu</h1>
            </center>
          </div>
        <?php
        }

        if ($linkid !== $id) { ?>
          <div class="col-md-10 col-sm-10 col-7"></div>
          <div class="col-md-2 col-sm-2 col-2">
            <h6 style="margin-top: 5px; ">
              <span class="buton-spn spn-ekle" onclick="giris()">Giriş</span>
            </h6>
          </div>
        <?php
        }
        ?>
      </div>
      <div class="row">

        <div class="col-md-12 col-sm-12 col-12 div-isim" style="">
          <h1>
            <b>
              <center>
                <?php

                $isimne = $db->query("SELECT * FROM uye WHERE uye_ono = '{$linkid}'", PDO::FETCH_ASSOC);

                foreach ($isimne->fetchAll(PDO::FETCH_ASSOC) as $isim) {
                  echo  $isim['uye_ad'] . " " . $isim['uye_soyad'];
                }
                ?>
              </center>
            </b>
          </h1>
        </div>
        <div class="col-md-6"></div>

        <?php
        if ($id == $linkid) {
          $onaylimi = $db->query("SELECT * FROM uye WHERE uye_ono = '{$_SESSION['uye_ono']}'", PDO::FETCH_ASSOC);

          foreach ($onaylimi->fetchAll(PDO::FETCH_ASSOC) as $onay) {

            if ($onay['uye_onay'] == 0) { ?>

              <div class="col-md-2 col-sm-4 col-4" style="text-align: center; cursor: no-drop!important; opacity: 0.5;">
                <h6 style="margin-top: 5px;">
                  <span class="buton-spn spn-ekle" style=" cursor: no-drop!important;">+Ekle</span>
                </h6>
              </div>
              <div class="col-md-2 col-sm-4 col-4" style="text-align: center; cursor: no-drop!important; opacity: 0.5;">
                <h6 style="margin-top: 5px;">
                  <span class="buton-spn spn-duzenle" style=" cursor: no-drop!important;">Düzenle</span>
                </h6>
              </div>

            <?php
            } elseif ($onay['uye_onay'] == 1) { ?>

              <div class="col-md-2 col-sm-4 col-4" style="text-align: center;">
                <h6 style="margin-top: 5px;">
                  <span class="buton-spn spn-ekle" onclick="ekle()">+Ekle</span>
                </h6>
              </div>

              <?php

              if (isset($_GET['mod2']) && $_GET['mod2'] == 'duzenle') { ?>
                <div class="col-md-2 col-sm-4 col-4" style="text-align: center;">
                  <h6 style="margin-top: 5px;">
                    <span class="buton-spn spn-duzenle" onclick="duzenleiptal()">Kapat</span>
                  </h6>
                </div>
              <?php
              } else { ?>
                <div class="col-md-2 col-sm-4 col-4" style="text-align: center;">
                  <h6 style="margin-top: 5px;">
                    <span class="buton-spn spn-duzenle" onclick="duzenle()">Düzenle</span>
                  </h6>
                </div>
              <?php
              }

              ?>

          <?php
            }
          }

          ?>


          <div class="col-md-2 col-sm-4 col-4" style="text-align: center;">
            <h6 style="margin-top: 5px;">
              <span class="buton-spn spn-cik" onclick="cik()">Çıkış</span>
            </h6>
          </div>



        <?php
        } else {
        }
        ?>


      </div>
    </div>

    <div id="" class="ntd-card-cnt2" style=" ">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-12" style="text-align: center; position: relative;">
          <div class="" style=" position: absolute; left: 50%; margin-left: -95.835px;">
            <h6 class="buton-spnswitch" style="float: left; margin-top: 5px; padding-left: 3px; padding-right: 3px; padding-top: 10px; padding-bottom: 10px;">
              <span id="yazi" class="spn-yazi <?php if ($_GET['mod'] == 'yazi') {
                                                echo 'active';
                                              } else {
                                                echo 'deactive';
                                              } ?> " onclick="yazi()">&nbsp;&nbsp;&nbsp;Yazılar&nbsp;&nbsp;&nbsp;</span>
              <span id="foto" class="spn-foto <?php if ($_GET['mod'] == 'foto') {
                                                echo 'active';
                                              } else {
                                                echo 'deactive';
                                              } ?> " onclick="foto()">Fotoğraflar</span>
            </h6>
          </div>
        </div>
      </div>
    </div>
  </div>



  <?php

  if ($_GET['mod'] == 'yazi') { ?>
    <div id="div-yazi">
      <div class="cards yazis" style=" z-index: 9; margin-top: 50px;">

        <?php

        $isimne = $db->query("SELECT * FROM uye WHERE uye_ono = '{$linkid}'", PDO::FETCH_ASSOC);

        foreach ($isimne->fetchAll(PDO::FETCH_ASSOC) as $isim) {
          $yazi_uyeid = $isim['uye_id'];
        }



        $yazicek = $db->query("SELECT * FROM yazi WHERE yazi_uyeid = '{$linkid}'", PDO::FETCH_ASSOC);

        foreach ($yazicek->fetchAll(PDO::FETCH_ASSOC) as $yazi) { ?>


          <div style="" class="card yazi <?php
                                          if ($yazi['yazi_vurgu'] == 1) {
                                            echo "ntd-card-" . $yazi['yazi_vurgurenk'];
                                          } else {
                                            echo "ntd-card-dflt";
                                          } ?>">
            <div class="ntd-card-head">
              <h4>
                <?php echo $yazi['yazi_yazanad'] . " " . $yazi['yazi_yazansoyad']; ?>
              </h4>
            </div>
            <hr>
            <div class="ntd-card-body">
              <h4>
                <?php echo $yazi['yazi_text']; ?>
              </h4>
            </div>

            <?php

            if (isset($_GET['mod2']) && $_GET['mod2'] == 'duzenle') { ?>

              <hr>
              <div class="row" style="">
                <div class="col-md-6 col-sm-6 col-6" style="padding-right: 0px;">
                  <h4>
                    <center>
                      <button onclick="window.location = 'duzenle.php?mod=<?php echo $_GET['mod']; ?>&yazi_id=<?php echo $yazi['yazi_id']; ?>';" class="button-duzenle">
                        <b>
                          Düzenle
                        </b>
                      </button>
                    </center>
                  </h4>
                </div>
                <div class="col-md-6 col-sm-6 col-6" style="padding-left: 0px;">
                  <h4>
                    <center>
                      <button onclick="window.location = 'yazisil.php?mod=<?php echo $_GET['mod']; ?>&yazi_id=<?php echo $yazi['yazi_id']; ?>';" class="button-sil">
                        <b>
                          Sil
                        </b>
                      </button>
                    </center>
                  </h4>
                </div>
              </div>

            <?php
            }

            ?>

          </div>
        <?php
        }
        ?>
      </div>
      <br>
    </div>
  <?php
  } elseif ($_GET['mod'] == 'foto') { ?>
    <div id="div-foto">
      <div class="cards yazis" style=" z-index: 9; margin-top: 50px;">

        <?php


        $fotocek = $db->query("SELECT * FROM foto WHERE foto_uyeid = '{$linkid}'", PDO::FETCH_ASSOC);

        foreach ($fotocek->fetchAll(PDO::FETCH_ASSOC) as $foto) { ?>


          <div style="" class="card yazi ntd-card-dflt">
            <div class="ntd-card-body">
              <img style="max-width: 100%;" src="<?php echo $foto["foto_yol"]; ?>">
            </div>

            <?php

            if (isset($_GET['mod2']) && $_GET['mod2'] == 'duzenle') { ?>

              <hr>
              <div class="row" style="">
                <div class="col-md-12 col-sm-12 col-12" style="">
                  <h4>
                    <center>
                      <button onclick="window.location = 'fotosil.php?mod=<?php echo $_GET['mod']; ?>&foto_id=<?php echo $foto['foto_id']; ?>';" class="button-fotosil">
                        <b>
                          Sil
                        </b>
                      </button>
                    </center>
                  </h4>
                </div>
              </div>

            <?php
            }

            ?>

          </div>
        <?php
        }
        ?>
      </div>
      <br>
    </div>
  <?php
  }

  ?>















  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>