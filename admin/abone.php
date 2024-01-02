<?php require_once 'header.php'; 
require_once 'sidebar.php';
?>


  <div class="content-wrapper" style="font-family: 'Cairo', sans-serif; letter-spacing: 1px;">
    <section class="content">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Aboneler</h3><br>

          <!--Başarı Durumu Yazdırma-->
              <?php
              if (@$_GET['durum']=="YES") { ?>
                <p style="color:green ; ">İşlem başarılı</p>
              <?php } elseif (@$_GET['durum']=="NO") { ?>
                <p style="color:red ; ">İşlem başarısız</p>
              <?php }  ?>
              <!-- . -->

          <div class="card-tools">
             <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body p-0">

          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th>İd</th>
                      <th>Email</th>
                  </tr>
              </thead>
              <tbody>

                <?php
$abonesor=$baglanti->prepare("SELECT * FROM abone order by abone_id ASC");
$abonesor->execute(array());
while ($abonecek=$abonesor->fetch(PDO::FETCH_ASSOC)) {
                 ?>
                  <tr>
                      <td><?php echo $abonecek['abone_id'] ?></td>
                      <td><?php echo $abonecek['abone_email'] ?></td>
                  </tr>
                <?php } ?>
              </tbody>
          </table>
        </div>
      </div>
    </section>
  </div>
<?php require_once 'footer.php'; ?>