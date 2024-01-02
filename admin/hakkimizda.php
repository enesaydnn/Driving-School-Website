<?php
require_once 'header.php';
// Header'ı dahil ettik.

require_once 'sidebar.php';
// SideBar'ı dahil ettik.

$hakkimizdasor=$baglanti->prepare("SELECT * FROM hakkimizda WHERE hakkimizda_id=?");
$hakkimizdasor->execute(array(1));
$hakkimizdacek=$hakkimizdasor->fetch(PDO::FETCH_ASSOC);

?>


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
                <h3 class="card-title">Hakkımızda</h3>
              </div>
            <!-- Form Başlangıcı -->
              <form action="islem.php" method="POST" enctype="multipart/form-data">
                  
                  <!--0-->
                  <div class="card-body">                    
                  <div class="form-group">
                    <img style="width:300px;" src="resimler/hakkimizda/<?php echo $hakkimizdacek['hakkimizda_resim']; ?>">
                  </div>
                  </div>
<input type="hidden" name="eskiresim" value="<?php echo $hakkimizdacek['hakkimizda_resim'] ?>">
                  <!--1-->
                  <div class="card-body">                    
                  <div class="form-group">
                    <label for="exampleInputEmail1">Hakkımızda Resim</label>
                    <input name="resim" type="file" class="form-control">
                  </div>
                  </div>
                  <!--2-->

                  <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Hakkımızda Başlık</label>
                    <input name="baslik" value= "<?php echo $hakkimizdacek['hakkimizda_baslik'];?>"type="text" class="form-control" placeholder="Lütfen Başlık Giriniz.">
                  </div>
                  </div>


                  <!--3-->
                  <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Hakkımızda Açıklama</label>
                    <textarea name="aciklama" id="editor1" class="ckeditor"><?php echo $hakkimizdacek['hakkimizda_aciklama'];?></textarea>
                  </div>
                  </div>


                <div class="card-footer">
                  <button name="hakkimizdakaydet" type="submit" class="btn btn-primary">Kaydet</button>
                </div>
                </form>
                </div>
                </div>
           </div>
      </div>
    </section>
</div>

<?php
require_once 'footer.php';
// footer'ı dahil ettik.
?>