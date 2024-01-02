<?php
require_once 'header.php';
// Header'ı dahil ettik.

require_once 'sidebar.php';
// SideBar'ı dahil ettik.


$ayarsor=$baglanti->prepare("SELECT * FROM ayarlar WHERE ayar_id=?");
$ayarsor->execute(array(1));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);

?>

<?php if (@$_GET['sayfa']=="ayarlar") { ?>
  <div class="content-wrapper" style="font-family: 'Cairo', sans-serif; letter-spacing: 1px;">
      <section class="content" >
        <div class="content-fluid">
            <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">

              <!--Başarı Durumu Yazdırma-->
              <?php
              if (@$_GET['durum']=="YES") { ?>
                <p style="color:green ; ">İşlem başarılı</p>
              <?php } elseif (@$_GET['durum']=="NO") { ?>
                <p style="color:red ; ">İşlem başarısız</p>
              <?php }  ?>
              <!-- . -->

              <div class="card-header">
                <h3 class="card-title">Ayarlar</h3>
              </div>
              <!-- Form Başlangıcı -->
              <form action="islem.php" method="POST">
                  <!--1-->
                  <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Site Başlığı</label>
                    <input name="baslik" value= "<?php echo $ayarcek['ayar_baslik'];?>" type="text" class="form-control" placeholder="Lütfen Başlık Giriniz.">
                  </div>
                  </div>

                  <!--2-->
                  <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Site Açıklama</label>
                    <input name="aciklama" value= "<?php echo $ayarcek['ayar_aciklama'];?>"type="text" class="form-control" placeholder="Lütfen Açıklama Giriniz.">
                  </div>
                  </div>

                  <!--2-->
                  <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Site Anahtar Kelime</label>
                    <input name="anahtar" value= "<?php echo $ayarcek['ayar_anahtar'];?>" type="text" class="form-control" placeholder="Lütfen Anahtar Kelime Giriniz.">
                  </div>
                  </div>

                  <!--3-->
                  <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Site Adres</label>
                    <input name="adres" value= "<?php echo $ayarcek['ayar_adres'];?>" type="text" class="form-control" placeholder="Lütfen Adresinizi Giriniz.">
                  </div>
                  </div>

                  <!--4-->
                  <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Site Telefon Numarası</label>
                    <input name="telefon" value= "<?php echo $ayarcek['ayar_telefon'];?>" type="text" class="form-control" placeholder="Lütfen Telefon Numarası Giriniz.">
                  </div>
                  </div>

                  <!--5-->
                  <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Site E-Mail Adres</label>
                    <input name="email" value= "<?php echo $ayarcek['ayar_email'];?>" type="text" class="form-control" placeholder="Lütfen E-Mail Adresinizi Giriniz.">
                  </div>
                  </div>


                <div class="card-footer">
                  <button name="ayarkaydet" type="submit" class="btn btn-primary">Kaydet</button>
                </div>
                </form>
                </div>
                </div>
           </div>
      </div>
    </section>
  </div>
<?php } elseif($_GET['sayfa']=="sosyalmedya") { ?>

<div class="content-wrapper" style="font-family: 'Cairo', sans-serif; letter-spacing: 1px;">
      <section class="content" >
        <div class="content-fluid">
            <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">

              <!--Başarı Durumu Yazdırma-->
              <?php
              if (@$_GET['durum']=="YES") { ?>
                <p style="color:green ; ">İşlem başarılı</p>
              <?php } elseif (@$_GET['durum']=="NO") { ?>
                <p style="color:red ; ">İşlem başarısız</p>
              <?php }  ?>
              <!-- . -->

              <div class="card-header">
                <h3 class="card-title">Sosyal Medya Ayarları</h3>
              </div>
            <!-- Form Başlangıcı -->
              <form action="islem.php" method="POST">
                  <!--1-->
                  <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Facebook Link</label>
                    <input name="facebook" value= "<?php echo $ayarcek['ayar_facebook'];?>" type="text" class="form-control" placeholder="Lütfen Başlık Giriniz.">
                  </div>
                  </div>

                  <!--2-->
                  <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">İnstagram Link</label>
                    <input name="instagram" value= "<?php echo $ayarcek['ayar_instagram'];?>"type="text" class="form-control" placeholder="Lütfen Açıklama Giriniz.">
                  </div>
                  </div>

                  <!--3-->
                  <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Youtube Link</label>
                    <input name="youtube" value= "<?php echo $ayarcek['ayar_youtube'];?>" type="text" class="form-control" placeholder="Lütfen Anahtar Kelime Giriniz.">
                  </div>
                  </div>

                     <!--3-->
                  <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Twitter Link</label>
                    <input name="twitter" value= "<?php echo $ayarcek['ayar_twitter'];?>" type="text" class="form-control" placeholder="Lütfen Anahtar Kelime Giriniz.">
                  </div>
                  </div>

                <div class="card-footer">
                  <button name="sosyalmedyakaydet" type="submit" class="btn btn-primary">Kaydet</button>
                </div>
                </form>
                </div>
                </div>
           </div>
      </div>
    </section>
  </div>
<?php } ?>
<?php
require_once 'footer.php';
// footer'ı dahil ettik.
?>