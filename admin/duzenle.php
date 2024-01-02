<?php
require_once 'header.php';
// Header'ı dahil ettik.

require_once 'sidebar.php';
// SideBar'ı dahil ettik.


?>
<?php 

if($_GET['sayfa']=="ekip"){
$ekipsor=$baglanti->prepare("SELECT * FROM ekip where ekip_id=:ekip_id");
$ekipsor->execute(array(
'ekip_id'=>$_GET['id']
));

$ekipcek=$ekipsor->fetch(PDO::FETCH_ASSOC);

?>
  <div class="content-wrapper" style="font-family: 'Cairo', sans-serif; letter-spacing: 1px;">
 
    <section class="content">
    <div class="container-fluid">
     
       <div class="row">
       <div  class="col-md-12">
       <div class="card card-primary">

              <div class="card-header">
                <h3 class="card-title">Ekip düzenle</h3>
              </div>

              <form action="islem.php" method="post" enctype="multipart/form-data">
              <div class="card-body">

                   <div class="form-group">
                    <label for="exampleInputEmail1">Ekip Resim</label>
                    <img style="width:150px" src="resimler/ekip/<?php echo $ekipcek['ekip_resim'] ?>">
                    </div>

                  <div class="form-group">
                    <input name="resim"  type="file" class="form-control"  >
                  </div>

                   <div class="form-group">
                    <label for="exampleInputEmail1">Ekip isim</label>
                    <input value="<?php echo $ekipcek['ekip_isim'] ?>" name="isim"  type="text" class="form-control"  placeholder="Lütfen ekip üye ismini  giriniz.">
                  </div> 

                   <div class="form-group">
                    <label for="exampleInputEmail1">Ekip konum</label>
                    <input value="<?php echo $ekipcek['ekip_konum'] ?>" name="konum"  type="text" class="form-control"  placeholder="Lütfen ekip konumunu giriniz.">
                  </div> 

                    <div class="form-group">
                    <label for="exampleInputEmail1">Ekip sıra</label>
                    <input value="<?php echo $ekipcek['ekip_sira'] ?>" name="sira"  type="text" class="form-control"  placeholder="Lütfen ekip sırasını giriniz.">
                    </div> 

                  <div class="form-group">
                    <label for="exampleInputEmail1">Ekip Açıklama</label>
                    <textarea name="aciklama" id="editor1" class="ckeditor"><?php echo $ekipcek['ekip_aciklama'] ?></textarea>
                  </div>
                   
                 <div class="form-group">
                    <label for="exampleInputEmail1">Ekip Facebook</label>
                    <input value="<?php echo $ekipcek['ekip_facebook'] ?>" name="facebook"  type="text" class="form-control"  placeholder="Lütfen facebook adresinizi giriniz.">
                  </div> 

                  <div class="form-group">
                    <label for="exampleInputEmail1">Ekip instagram</label>
                    <input value="<?php echo $ekipcek['ekip_instagram'] ?>" name="instagram"  type="text" class="form-control"  placeholder="Lütfen instagram adresinizi  giriniz.">
                  </div> 

                  <div class="form-group">
                    <label for="exampleInputEmail1">Ekip youtube</label>
                    <input value="<?php echo $ekipcek['ekip_youtube'] ?>" name="youtube"  type="text" class="form-control"  placeholder="Lütfen  youtube adresinizi  giriniz.">
                  </div> 
                </div>
              
        <input type="hidden" name="eskiresim" value="<?php echo $ekipcek['ekip_resim'] ?>">
        <input type="hidden" name="id" value="<?php echo $ekipcek['ekip_id'] ?>">
                <div class="card-footer">
                  <button name="ekipduzenle" style="float:right" type="submit" class="btn btn-primary">Kaydet</button>
                </div>
              </form> 
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
<?php } elseif ($_GET['sayfa']=="arac") {


$aracsor=$baglanti->prepare("SELECT * FROM arac where arac_id=:arac_id");
$aracsor->execute(array(
'arac_id'=>$_GET['id']
));
$araccek=$aracsor->fetch(PDO::FETCH_ASSOC);

?>

 <div class="content-wrapper"  style="font-family: 'Cairo', sans-serif; letter-spacing: 1px;">
    <section class="content">
      <div class="container-fluid">
        <div class="row">
      <div  class="col-md-12">
    <div class="card card-primary">

              <div class="card-header">
                <h3 class="card-title">Araç Düzenle</h3>
              </div>

              <form action="islem.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                   <div class="form-group">
                    <img style="width:150px" src="resimler/araclar/<?php echo $araccek['arac_resim'] ?>">
                  </div>
                  <div class="form-group">
                    <input name="resim"  type="file" class="form-control"  >
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Araç Sıra</label>
                    <input value="<?php echo $araccek['arac_sira']?>" name="sira"  type="text" class="form-control"  placeholder="Lütfen araç sırası giriniz.">
                  </div> 
                  
                  </div>
    <input type="hidden" name="eskiresim" value="<?php echo $araccek['arac_resim'] ?>">
    <input type="hidden" name="id" value="<?php echo $araccek['arac_id'] ?>">
                <div class="card-footer">
                  <button name="aracduzenle" style="float:right" type="submit" class="btn btn-primary">Kaydet</button>
                </div>
              </form> 
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
<?php } elseif ($_GET['sayfa']=="blog") { 

$blogsor=$baglanti->prepare("SELECT * FROM blog where blog_id=:blog_id");
$blogsor->execute(array(
'blog_id'=>$_GET['id']
));
$blogcek=$blogsor->fetch(PDO::FETCH_ASSOC);

?>
  <div class="content-wrapper" style="font-family: 'Cairo', sans-serif; letter-spacing: 1px;">
 
    <section class="content">
    <div class="container-fluid">
     
       <div class="row">
       <div  class="col-md-12">
       <div class="card card-primary">

              <div class="card-header">
                <h3 class="card-title">Bilgi düzenle</h3>
              </div>

              <form action="islem.php" method="post" enctype="multipart/form-data">
              <div class="card-body">

                   <div class="form-group">
                    <label for="exampleInputEmail1">Bilgi Resim</label>
                    <img style="width:150px" src="resimler/blog/<?php echo $blogcek['blog_resim'] ?>">
                   </div>

                  <div class="form-group">
                    <input name="resim"  type="file" class="form-control">
                  </div>

                   <div class="form-group">
                    <label for="exampleInputEmail1">Bilgi Başlık</label>
                    <input value="<?php echo $blogcek['blog_baslik']; ?>" name="baslik"  type="text" class="form-control"  placeholder="Lütfen bilgi başlığı giriniz.">
                  </div> 

                   <div class="form-group">
                    <label for="exampleInputEmail1">Bilgi Sıra</label>
                    <input value="<?php echo $blogcek['blog_sira']; ?>" name="sira"  type="text" class="form-control"  placeholder="Lütfen bilgi sırası giriniz.">
                  </div> 

                    <div class="form-group">
                    <label for="exampleInputEmail1">Bilgi Anahtar Kelime</label>
                    <input value="<?php echo $blogcek['blog_anahtarkelime']; ?>" name="anahtarkelime"  type="text" class="form-control"  placeholder="Lütfen anahtar kelime giriniz.">
                    </div> 

                  <div class="form-group">
                    <label for="exampleInputEmail1">Bilgi Açıklama</label>
                    <textarea name="aciklama" id="editor1" class="ckeditor"><?php echo $blogcek['blog_aciklama']; ?></textarea>
                  </div>
                   

              
        <input type="hidden" name="eskiresim" value="<?php echo $blogcek['blog_resim']; ?>">
        <input type="hidden" name="id" value="<?php echo $blogcek['blog_id']; ?>">
                <div class="card-footer">
                  <button name="blogduzenle" style="float:right" type="submit" class="btn btn-primary">Kaydet</button>
                </div>
              </form> 
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
<?php } elseif ($_GET['sayfa']=="anasayfa") { 

$anasayfasor=$baglanti->prepare("SELECT * FROM anasayfa where anasayfa_id=:anasayfa_id");
$anasayfasor->execute(array(
'anasayfa_id'=>$_GET['id']
));
$anasayfacek=$anasayfasor->fetch(PDO::FETCH_ASSOC);
?>


 <div class="content-wrapper" style="font-family: 'Cairo', sans-serif; letter-spacing: 1px;">
 
    <section class="content">
    <div class="container-fluid">
     
       <div class="row">
       <div  class="col-md-12">
       <div class="card card-primary">

              <div class="card-header">
                <h3 class="card-title">Bilgi düzenle</h3>
              </div>

              <form action="islem.php" method="post" enctype="multipart/form-data">
              <div class="card-body">

                   <div class="form-group">
                    <label for="exampleInputEmail1">Bilgi Resim</label>
                    <img style="width:150px" src="resimler/anasayfa/<?php echo $anasayfacek['anasayfa_resim'] ?>">
                   </div>

                  <div class="form-group">
                    <input name="resim"  type="file" class="form-control">
                  </div>

                   <div class="form-group">
                    <label for="exampleInputEmail1">Bilgi Başlık</label>
                    <input value="<?php echo $anasayfacek['anasayfa_baslik']; ?>" name="baslik"  type="text" class="form-control"  placeholder="Lütfen bilgi başlığı giriniz.">
                  </div> 

                   <div class="form-group">
                    <label for="exampleInputEmail1">Bilgi Sıra</label>
                    <input value="<?php echo $anasayfacek['anasayfa_sira']; ?>" name="sira"  type="text" class="form-control"  placeholder="Lütfen bilgi sırası giriniz.">
                  </div> 

                    <div class="form-group">
                    <label for="exampleInputEmail1">Bilgi Anahtar Kelime</label>
                    <input value="<?php echo $anasayfacek['anasayfa_anahtarkelime']; ?>" name="anahtarkelime"  type="text" class="form-control"  placeholder="Lütfen anahtar kelime giriniz.">
                    </div> 

                  <div class="form-group">
                    <label for="exampleInputEmail1">Bilgi Açıklama</label>
                    <textarea name="aciklama" id="editor1" class="ckeditor"><?php echo $anasayfacek['anasayfa_aciklama']; ?></textarea>
                  </div>
                   

              
        <input type="hidden" name="eskiresim" value="<?php echo $anasayfacek['anasayfa_resim']; ?>">
        <input type="hidden" name="id" value="<?php echo $anasayfacek['anasayfa_id']; ?>">
                <div class="card-footer">
                  <button name="anasayfaduzenle" style="float:right" type="submit" class="btn btn-primary">Kaydet</button>
                </div>
              </form> 
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
<?php } elseif ($_GET['sayfa']=="kullanici") {

$kullanicisor=$baglanti->prepare("SELECT * FROM kullanici where kullanici_id=:kullanici_id");
$kullanicisor->execute(array(
'kullanici_id'=>$_GET['id']
));
$kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC);

?>

 <div class="content-wrapper"  style="font-family: 'Cairo', sans-serif; letter-spacing: 1px;">
    <section class="content">
      <div class="container-fluid">
        <div class="row">
      <div  class="col-md-12">
    <div class="card card-primary">

              <div class="card-header">
                <h3 class="card-title">Kullanıcı Düzenle</h3>
              </div>
              <form action="islem.php" method="post" enctype="multipart/form-data">
                
                   <div class="form-group">
                    <label for="exampleInputEmail1">&nbsp;&nbsp;&nbsp;Kullanıcı İsim Ve Soyisim</label>
                    <input value="<?php echo $kullanicicek['kullanici_adsoyad']?>" name="adsoyad"  type="text" class="form-control"  placeholder="Lütfen İsim Ve Soyisim Giriniz.">
                   </div> 
                  
                   <div class="form-group">
                    <label for="exampleInputEmail1">&nbsp;&nbsp;&nbsp;Kullanıcı Mail</label>
                    <input value="<?php echo $kullanicicek['kullanici_email']?>" name="mail"  type="text" class="form-control"  placeholder="Lütfen Mail Giriniz.">
                   </div> 

                   <div class="form-group">
                    <label for="exampleInputEmail1">&nbsp;&nbsp;&nbsp;Kullanıcı Şifre</label>
                    <input value="<?php echo $kullanicicek['kullanici_sifre']?>" name="sifre"  type="text" class="form-control"  placeholder="Lütfen Şifre Giriniz.">
                   </div> 

                  </div>
    <input type="hidden" name="id" value="<?php echo $kullanicicek['kullanici_id'] ?>">
                <div class="card-footer">
                  <button name="kullaniciduzenle" type="submit" class="btn btn-primary">Kaydet</button>
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