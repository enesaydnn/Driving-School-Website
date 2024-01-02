<?php
require_once 'header.php';
// Header'ı dahil ettik.

require_once 'sidebar.php';
// SideBar'ı dahil ettik.


 ?>
 <?php if($_GET['sayfa']=="ekip"){ // Ekip Ekleme Sayfası ?>
              <div class="content-wrapper" style="font-family: 'Cairo', sans-serif; letter-spacing: 1px;">
                <section class="content">
                <div class="container-fluid">
                <div class="row">
                <div class="col-md-12">
              <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Ekle</h3>
              </div>

              <form action="islem.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                
                  <div class="form-group">
                    <label for="exampleInputEmail1">Ekip Resim</label>
                    <input name="resim"  type="file" class="form-control"  >
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Ekip isim</label>
                    <input name="isim"  type="text" class="form-control"  placeholder="Lütfen ekip üye ismini  giriniz.">
                  </div> 
                   <div class="form-group">
                    <label for="exampleInputEmail1">Ekip konum</label>
                    <input name="konum"  type="text" class="form-control"  placeholder="Lütfen ekip üye ismini  giriniz.">
                  </div> 
                    <div class="form-group">
                    <label for="exampleInputEmail1">Ekip sıra</label>
                    <input name="sira"  type="text" class="form-control"  placeholder="Lütfen ekip üye ismini  giriniz.">
                  </div> 
                     <div class="form-group">
                    <label for="exampleInputEmail1">Ekip Açıklama</label>
                    <textarea name="aciklama" id="editor1" class="ckeditor"></textarea>
                  </div>
                   
                       <div class="form-group">
                    <label for="exampleInputEmail1">Ekip Facebook</label>
                    <input name="facebook"  type="text" class="form-control"  placeholder="Lütfen facebook adresini giriniz.">
                  </div> 

                      <div class="form-group">
                    <label for="exampleInputEmail1">Ekip instagram</label>
                    <input name="instagram"  type="text" class="form-control"  placeholder="Lütfen instagram adresini  giriniz.">
                  </div> 
                      <div class="form-group">
                    <label for="exampleInputEmail1">Ekip youtube</label>
                    <input name="youtube"  type="text" class="form-control"  placeholder="Lütfen  youtube adresini   giriniz.">
                  </div> 
                </div>

                <div class="card-footer">
                  <button name="ekipkaydet" type="submit" class="btn btn-primary">Kaydet</button>
                </div>
              </form> 
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
<?php } elseif ($_GET['sayfa']=="arac") { // Araç Ekleme Sayfası ?>
  
    <div class="content-wrapper" style="font-family: 'Cairo', sans-serif; letter-spacing: 1px;">
    <section class="content">
      <div class="container-fluid">
      <div class="row">
      <div  class="col-md-12">
      <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Ekle</h3>
              </div>

                <form action="islem.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                
                  <div class="form-group">
                    <label for="exampleInputEmail1">Araç Resim</label>
                    <input name="resim"  type="file" class="form-control"  >
                  </div>
                 

                  <div class="form-group">
                    <label for="exampleInputEmail1">Araç sıra</label>
                    <input name="sira"  type="text" class="form-control"  placeholder="Lütfen sıra giriniz.">
                  </div> 
                   

                </div>
                <div class="card-footer">
                  <button name="arackaydet" type="submit" class="btn btn-primary">Kaydet</button>
                </div>
              </form> 
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
<?php } elseif ($_GET['sayfa']=="blog"){ ?>


<div class="content-wrapper" style="font-family: 'Cairo', sans-serif; letter-spacing: 1px;">
                <section class="content">
                <div class="container-fluid">
                <div class="row">
                <div class="col-md-12">
              <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Ekle</h3>
              </div>

                <form action="islem.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                
                  <div class="form-group">
                    <label for="exampleInputEmail1">Bilgi Resim</label>
                    <input name="resim"  type="file" class="form-control"  >
                  </div>

                   <div class="form-group">
                    <label for="exampleInputEmail1">Bilgi Başlık</label>
                    <input name="baslik"  type="text" class="form-control"  placeholder="Lütfen bilgi başlığı giriniz.">
                  </div> 

                   <div class="form-group">
                    <label for="exampleInputEmail1">Bilgi Sıra</label>
                    <input name="sira"  type="text" class="form-control"  placeholder="Lütfen bilgi sıra giriniz.">
                  </div> 

                    <div class="form-group">
                    <label for="exampleInputEmail1">Bilgi Anahtar Kelime</label>
                    <input name="anahtarkelime"  type="text" class="form-control"  placeholder="Lütfen bilgi anahtar kelime giriniz.">
                    </div> 

                  <div class="form-group">
                    <label for="exampleInputEmail1">Bilgi Açıklama</label>
                    <textarea name="aciklama" id="editor1" class="ckeditor"></textarea>
                  </div>
                   

                <div class="card-footer">
                  <button name="blogkaydet" type="submit" class="btn btn-primary">Kaydet</button>
                </div>
              </form> 
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

<?php } elseif ($_GET['sayfa']=="anasayfa"){ ?>


<div class="content-wrapper" style="font-family: 'Cairo', sans-serif; letter-spacing: 1px;">
                <section class="content">
                <div class="container-fluid">
                <div class="row">
                <div class="col-md-12">
              <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Ekle</h3>
              </div>

                <form action="islem.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                
                  <div class="form-group">
                    <label for="exampleInputEmail1">Bilgi Resim</label>
                    <input name="resim"  type="file" class="form-control"  >
                  </div>

                   <div class="form-group">
                    <label for="exampleInputEmail1">Bilgi Başlık</label>
                    <input name="baslik"  type="text" class="form-control"  placeholder="Lütfen bilgi başlığı giriniz.">
                  </div> 

                   <div class="form-group">
                    <label for="exampleInputEmail1">Bilgi Sıra</label>
                    <input name="sira"  type="text" class="form-control"  placeholder="Lütfen bilgi sıra giriniz.">
                  </div> 

                    <div class="form-group">
                    <label for="exampleInputEmail1">Bilgi Anahtar Kelime</label>
                    <input name="anahtarkelime"  type="text" class="form-control"  placeholder="Lütfen bilgi anahtar kelime giriniz.">
                    </div> 

                  <div class="form-group">
                    <label for="exampleInputEmail1">Bilgi Açıklama</label>
                    <textarea name="aciklama" id="editor1" class="ckeditor"></textarea>
                  </div>
                   

                <div class="card-footer">
                  <button name="anasayfakaydet" type="submit" class="btn btn-primary">Kaydet</button>
                </div>
              </form> 
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
<?php } elseif ($_GET['sayfa']=="kullanici"){ ?>
<div class="content-wrapper" style="font-family: 'Cairo', sans-serif; letter-spacing: 1px;">
                <section class="content">
                <div class="container-fluid">
                <div class="row">
                <div class="col-md-12">
              <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Ekle</h3>
              </div>

                <form action="islem.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                

                   <div class="form-group">
                    <label for="exampleInputEmail1">Kullanıcı İsim Ve Soyisim</label>
                    <input name="adsoyad"  type="text" class="form-control"  placeholder="Lütfen İsim Ve Soyisim Giriniz.">
                   </div> 

                  <div class="form-group">
                    <label for="exampleInputEmail1">Kullanıcı Mail Giriniz</label>
                    <input name="mail"  type="text" class="form-control"  placeholder="Lütfen Mail Giriniz.">
                   </div> 

                    <div class="form-group">
                    <label for="exampleInputEmail1">Kullanıcı Şifre Giriniz</label>
                    <input name="sifre"  type="text" class="form-control"  placeholder="Lütfen Şifre Giriniz.">
                   </div> 


                <div class="card-footer">
                  <button name="kullanicikaydet" type="submit" class="btn btn-primary">Kaydet</button>
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