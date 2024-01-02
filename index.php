<?php require_once 'header.php'; ?>

  <section style="background-image:url(admin/resimler/slider/<?php echo $slidercek['slider_resim'] ?>)" id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100" style="font-family: 'Work Sans', sans-serif ;">
      <h1><?php echo $slidercek['slider_baslik'] ?></h1>
      <h2><?php echo $slidercek['slider_aciklama'] ?></h2>
      <a target="_blank" href="<?php echo $slidercek['slider_link'] ?>" class="btn-get-started"><?php echo $slidercek['slider_buton'] ?></a>
    </div>
  </section>



  <main id="main">
    
<section id="courses" class="courses" style="font-family: 'Work Sans', sans-serif;">
      <div class="container" data-aos="fade-up">
      <div class="row" data-aos="zoom-in" data-aos-delay="100">
<?php

$anasayfasor=$baglanti->prepare("SELECT * FROM anasayfa order by anasayfa_sira ASC");
$anasayfasor->execute(array());

while ($anasayfacek=$anasayfasor->fetch(PDO::FETCH_ASSOC)) { ?>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img src="admin/resimler/anasayfa/<?php echo $anasayfacek['anasayfa_resim'];?>" class="img-fluid" alt="...">
              <div class="course-content">
                <h3 style="font-family: 'Jura', sans-serif;"><a href="anasayfa-detay.php?sayfa=anasayfa&id=<?php echo $anasayfacek['anasayfa_id'] ?>"><?php echo $anasayfacek['anasayfa_baslik'];?></a></h3>
                <p>
                  <?php
                  $aciklama = $anasayfacek['anasayfa_aciklama'];
                  $bolacıklama = substr($aciklama,0,150);
                  echo $bolacıklama;
                  echo("...");
                  ?>
                </p>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                  <span><?php echo $ayarcek['ayar_baslik'];?></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
<?php } ?>
        </div>
      </div>
    </section>
  </main>

<?php require_once 'footer.php'; ?>