<?php 
require_once 'header.php';

$anasayfasor=$baglanti->prepare("SELECT * FROM anasayfa WHERE anasayfa_id=:anasayfa_id");
$anasayfasor->execute(array(
'anasayfa_id'=>$_GET['id']
));
$anasayfacek=$anasayfasor->fetch(PDO::FETCH_ASSOC);

?>

<br><br>

    <section id="course-details" class="course-details" style="font-family: 'Work Sans', sans-serif; text-align: justify;">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-8">
            <img src="admin/resimler/anasayfa/<?php echo $anasayfacek['anasayfa_resim'];?>" class="img-fluid" alt="">
            <h3 style="font-family: 'Jura', sans-serif;"><?php echo $anasayfacek['anasayfa_baslik'];?></h3>
            <p>
             <?php echo $anasayfacek['anasayfa_aciklama'];?>
            </p>
          </div>
           <div class="col-lg-4" style="font-family: 'Jura', sans-serif;">
          </div>
        </div>
      </div>
    </section>
  </main>
  
<?php 
require_once 'footer.php';
?>