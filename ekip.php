<?php require_once 'header.php'; ?>  

  <main id="main" data-aos="fade-in" style="font-family: 'Work Sans', sans-serif;">
    <div class="breadcrumbs">
      <div class="container">
        <p style="text-align:justify;">Ekip olarak, öğrencilerimize ilham vermek ve onlara sadece araba kullanmayı öğretmekle kalmayıp aynı zamanda güvenli, saygılı ve empatik sürücüler olmalarını sağlamak için çaba gösteriyoruz. Bu süreçte, her birinizin öğrencilere kattığı değer, bizim için son derece kıymetli. Sizlerin her biri, farklı yetenekleriniz ve özgün eğitim tarzlarınızla öne çıkıyorsunuz ve bu da öğrencilerimizin farklı öğrenme ihtiyaçlarına uyum sağlamamızı mümkün kılıyor. Bizler, eğitmenlerimizin öğrencilere sağladığı destekten ve emeklerinden büyük ölçüde etkileniyoruz. Ekibimiz sayesinde, gelecekteki sürücüleri daha güvenli ve bilinçli bir şekilde yollara çıkacaklarına inanıyoruz.</p>
      </div>
    </div>


    <section id="trainers" class="trainers" style="font-family: 'Work Sans', sans-serif;">
      <div class="container" data-aos="fade-up">
        <div class="row" data-aos="zoom-in" data-aos-delay="100">
        <?php
$ekipsor=$baglanti->prepare("SELECT * FROM ekip ");
$ekipsor->execute(array());
while ($ekipcek=$ekipsor->fetch(PDO::FETCH_ASSOC)) { 
        ?>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" style="font-family: 'Jura', sans-serif;">
            <div class="member">
              <img style="width:317px; height:317px" src="admin/resimler/ekip/<?php echo $ekipcek['ekip_resim'];?>" class="img-fluid" alt="">
              <div class="member-content">
                <h4><?php echo $ekipcek['ekip_isim'];?></h4>
                <span style=" font-style: normal; font-weight: bold;"><?php echo $ekipcek['ekip_konum'];?></span>
                <span style=" font-style: normal; font-weight: bold; text-align: justify;"><?php echo $ekipcek['ekip_aciklama'];?></span>
                  <div class="social">
                  <a href="<?php echo $ekipcek['ekip_facebook']?>"><i class="fa-brands fa-facebook"></i></a>
                  <a href="<?php echo $ekipcek['ekip_instagram']?>"><i class="fa-brands fa-instagram"></i>
                  <a href="<?php echo $ekipcek['ekip_youtube']?>"><i class="fa-brands fa-youtube"></i></a>
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