<?php 
require_once 'header.php'; 
require_once 'sidebar.php';
?>


  <div class="content-wrapper" style="font-family: 'Cairo', sans-serif; letter-spacing: 1px;">
    <section class="content">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Onaylanmış Yorumlar</h3><br>
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
                      <th>Ad soyad</th>
                      <th>Detay</th>    
                      <th>Zaman</th>
                      <th>Sil</th>                 
                  </tr>
              </thead>
              <tbody>

                <?php
        
$yorumlarsor=$baglanti->prepare("SELECT * FROM yorumlar where yorum_onay=:yorum_onay ORDER BY yorum_zaman DESC");
$yorumlarsor->execute(array(
'yorum_onay'=>1
));
while ($yorumlarcek=$yorumlarsor->fetch(PDO::FETCH_ASSOC)) 
                 { ?>

                  <tr>
                      <td><?php echo $yorumlarcek['yorum_adsoyad'] ?></td>
                      <td><?php echo $yorumlarcek['yorum_detay'] ?></td>
                      <td><?php echo $yorumlarcek['yorum_zaman'] ?></td>
                                  
                      <td class="project-actions text-right">
  <a class="btn btn-danger btn-sm" value="<?php echo $_SERVER['HTTP_REFERER']?>" href="islem.php?yorumsil&id=<?php echo $yorumlarcek['yorum_id'] ?>">
                      <i class="fas fa-trash"></i>
                      Sil
                  </a>
                      </td>
                  </tr>

                <?php } ?>
                
              </tbody>
          </table>
        </div>
      </div>
    </section>
  </div>
<?php require_once 'footer.php'; ?>