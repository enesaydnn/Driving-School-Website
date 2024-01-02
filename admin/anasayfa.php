<?php 
require_once 'header.php';
require_once 'sidebar.php';

$anasayfasor=$baglanti->prepare("SELECT * FROM anasayfa order by anasayfa_sira ASC");
$anasayfasor->execute(array());

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
                <h3 class="card-title">Anasayfa Bilgi Bankası</h3>
                <a href="ekle.php?sayfa=anasayfa">
<button style="float:right" type="submit" class="btn btn-info">Yeni Bilgi Ekle</button></a>
              </div>
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>Bilgi Resim</th>
                      <th>Bilgi Başlık</th>
                      <th>Bilgi Sıra</th>
                      <th>Düzenle</th>
                      <th>Sil</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php 

while ($anasayfacek=$anasayfasor->fetch(PDO::FETCH_ASSOC)) { ?>
                    <tr>
                      <td><img style="width:150px" src="resimler/anasayfa/<?php echo $anasayfacek['anasayfa_resim'] ?>"></td>
                      <td><?php echo $anasayfacek['anasayfa_baslik'] ?></td>
                      <td><?php echo $anasayfacek['anasayfa_sira'] ?></td>
                      <td><a href="duzenle.php?sayfa=anasayfa&id=<?php echo $anasayfacek['anasayfa_id'] ?>"><button type="submit" class="btn btn-success">Düzenle</button></td>
                      <td>
                      <form action="islem.php" method="post">
                          <button name="anasayfasil" type="submit" class="btn btn-danger">Sil</button>
                           <input name="id" value="<?php echo $anasayfacek['anasayfa_id'] ?>" type="hidden">
                           <input name="eskiresim" value="<?php echo $anasayfacek['anasayfa_resim'] ?>" type="hidden">
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