<?php 
require_once 'header.php';
require_once 'sidebar.php';

$kullanicisor=$baglanti->prepare("SELECT * FROM kullanici");
$kullanicisor->execute(array());

?>

  <div class="content-wrapper" style="font-family: 'Cairo', sans-serif; letter-spacing: 1px;">
    <section class="content">
      <div class="container-fluid">
     
        <div class="row">
              <!--Başarı Durumu Yazdırma-->
              <?php
              if (@$_GET['durum']=="YES") { ?>
                <p style="color:green ; ">İşlem başarılı</p>
              <?php } elseif (@$_GET['durum']=="NO") { ?>
                <p style="color:red ; ">İşlem başarısız</p>
              <?php }  ?>
              <!-- . -->

          <div class="col-12">
            <div class="card">          
              <div class="card-header">
<p><b>Merhaba, Sayın kullanıcı güvenliğiniz için herşeyi düşündük şifreniz md5 yapısı ile korunuyor. Sisteme kullanıcı eklerken lütfen şifrenizi md5 olarak çevirin aksi halde sizi kabul etmeyecektir. Bunu istediğiniz ilgili web sayfalarından bulabilirsiniz ayrıca bırakacağım link ilede bunu sağlayabilirsiniz.&nbsp;</b><a href="https://wmaraci.com/md5-sha1-sifre-olusturucu"><b>MD5 çeviri için tıklayınız</b></a>&nbsp;<b>Silme işlemi yaparken en az 1 tane kullanıcı bırakınız aksi halde giriş sağlayamazsınız.</b></p>
                <h3 class="card-title">Kullanıcı Ekle Ve Sil Sayfası</h3>
                <a href="ekle.php?sayfa=kullanici">
<button style="float:right" type="submit" class="btn btn-info">Yeni Kullanıcı Ekle</button></a>
              </div>
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>Kullanıcı İsim Ve Soyisim</th>
                      <th>Kullanıcı Mail</th>
                      <th>Kullanıcı Şifre</th>
                      <th>Düzenle</th>
                      <th>Sil</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php 

while ($kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC)) { ?>
                    <tr>
                      <td><?php echo $kullanicicek['kullanici_adsoyad'] ?></td>
                      <td><?php echo $kullanicicek['kullanici_email'] ?></td>
                      <td><?php echo $kullanicicek['kullanici_sifre'] ?></td>

                      <td><a href="duzenle.php?sayfa=kullanici&id=<?php echo $kullanicicek['kullanici_id'] ?>"><button type="submit" class="btn btn-success">Düzenle</button></td>
                      <td>

                      <form action="islem.php" method="post">
                          <button name="kullanicisil" type="submit" class="btn btn-danger">Sil</button>
                          <input name="id" value="<?php echo $kullanicicek['kullanici_id'] ?>" type="hidden">
                      </form>
                    </td>
                    </tr>
                   <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
<?php require_once 'footer.php'; ?>