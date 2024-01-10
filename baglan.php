<?php



ob_start();
session_start();


try {

  $db = new PDO("mysql:host=localhost;dbname=2k20;charset=utf8",'root','');

    //echo "Veritabanı bağlantısı başarılı";

} catch (PDOException $e) {

  echo $e->getMessage();
}















/*

ESKİ KOD PARÇASI LAZIM OLUR DİYE BURDA TUTUYORUM

?> <?php 

    $odevcek2 = $db->query("SELECT * FROM odev WHERE odev_onem = '{$bir}' AND odev_vurgu = '{$sifir}'",PDO::FETCH_ASSOC);

    foreach($odevcek->fetchAll(PDO::FETCH_ASSOC) as $odev2) {?> 


      <li class="list-group-item" style="  <?php 
      if ($odev2['odev_vurgu'] == 1) {
        echo "background-color: rgba(12, 0, 255, 0.66);";
      }else{echo "";} ?>
      ">
      <div class="row">
        <div class="col-8">
          <span style="font-size: 25px;">
            <?php echo $odev2['odev_ad']; ?>
          </span>
        </div>
        <div class="col">
          <span style="font-size: 20px;">
            <?php echo $odev2['odev_tgun'] . "." . $odev2['odev_tgun'] . "." . $odev2['odev_tyil']; ?>
          </span>
        </div>       
        <div class="col-1">
          <form action="" method="post">            
            <input type="text" name="odev_id" value="<?php echo $odev2['odev_id']; ?>" hidden="">
            <input type="text" name="odev_yapildi" value="1" hidden="">
            <button type="submit" class="btn btn-success" style="margin-left: 25%;"><i style="width: 12px;" class="fas fa-check"></i>
            </button>
          </form>
        </div>
      </div>
    </li>

    ?> <?php 

    $odevcek3 = $db->query("SELECT * FROM odev WHERE odev_onem = '{$sifir}' AND odev_vurgu = '{$bir}'",PDO::FETCH_ASSOC);

    foreach($odevcek->fetchAll(PDO::FETCH_ASSOC) as $odev3) {?> 


      <li class="list-group-item" style="  <?php 
      if ($odev3['odev_vurgu'] == 1) {
        echo "background-color: rgba(12, 0, 255, 0.66);";
      }else{echo "";} ?>
      ">
      <div class="row">
        <div class="col-8">
          <span style="font-size: 25px;">
            <?php echo $odev3['odev_ad']; ?>
          </span>
        </div>
        <div class="col">
          <span style="font-size: 20px;">
            <?php echo $odev3['odev_tgun'] . "." . $odev3['odev_tgun'] . "." . $odev3['odev_tyil']; ?>
          </span>
        </div>       
        <div class="col-1">
          <form action="" method="post">            
            <input type="text" name="odev_id" value="<?php echo $odev3['odev_id']; ?>" hidden="">
            <input type="text" name="odev_yapildi" value="1" hidden="">
            <button type="submit" class="btn btn-success" style="margin-left: 25%;"><i style="width: 12px;" class="fas fa-check"></i>
            </button>
          </form>
        </div>
      </div>
    </li>

    ?> <?php 

    $odevcek4 = $db->query("SELECT * FROM odev WHERE odev_onem = '{$sifir}' AND odev_vurgu = '{$sifir}'",PDO::FETCH_ASSOC);

    foreach($odevcek->fetchAll(PDO::FETCH_ASSOC) as $odev4) {?> 


      <li class="list-group-item" style="  <?php 
      if ($odev4['odev_vurgu'] == 1) {
        echo "background-color: rgba(12, 0, 255, 0.66);";
      }else{echo "";} ?>
      ">
      <div class="row">
        <div class="col-8">
          <span style="font-size: 25px;">
            <?php echo $odev4['odev_ad']; ?>
          </span>
        </div>
        <div class="col">
          <span style="font-size: 20px;">
            <?php echo $odev4['odev_tgun'] . "." . $odev4['odev_tgun'] . "." . $odev4['odev_tyil']; ?>
          </span>
        </div>       
        <div class="col-1">
          <form action="" method="post">            
            <input type="text" name="odev_id" value="<?php echo $odev4['odev_id']; ?>" hidden="">
            <input type="text" name="odev_yapildi" value="1" hidden="">
            <button type="submit" class="btn btn-success" style="margin-left: 25%;"><i style="width: 12px;" class="fas fa-check"></i>
            </button>
          </form>
        </div>
      </div>
    </li>





*/



    ?>