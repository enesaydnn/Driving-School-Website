<?php 
require_once 'header.php';
require_once 'sidebar.php';

$aracsor=$baglanti->prepare("SELECT * FROM arac");
$aracsor->execute(array());

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
                <h3 class="card-title">Araç Galerisi</h3>
                <a href="ekle.php?sayfa=arac">
<button style="float:right" type="submit" class="btn btn-info">Yeni Araç Ekle</button></a>
              </div>
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>Araç Resim</th>
                      <th>Araç Sıra</th>
                      <th>Düzenle</th>
                      <th>Sil</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php 
while ($araccek=$aracsor->fetch(PDO::FETCH_ASSOC)) { ?>
                    <tr>
                      <td><img style="width:150px" src="resimler/araclar/<?php echo $araccek['arac_resim'] ?>"></td>
                      <td><?php echo $araccek['arac_sira'] ?></td>
                      <td><a href="duzenle.php?sayfa=arac&id=<?php echo $araccek['arac_id'] ?>"><button type="submit" class="btn btn-success">Düzenle</button></td>
                      <td>
                      <form action="islem.php" method="post">
                          <button name="aracsil" type="submit" class="btn btn-danger">Sil</button>
                          <input name="id" value="<?php echo $araccek['arac_id'] ?>" type="hidden">
                          <input name="eskiresim" value="<?php echo $araccek['arac_resim'] ?>" type="hidden">
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