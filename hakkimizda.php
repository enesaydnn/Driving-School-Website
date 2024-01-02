<?php
require_once 'header.php';
?>  

  <main id="main">
    <div class="breadcrumbs" data-aos="fade-in" style="font-family: 'Work Sans', sans-serif;">
      <div class="container">
        <p style="text-align:justify;">Sürücü Kursu, sizin güvenli sürücü olma yolculuğunuzda güvenilir bir rehber olmak için burada. Misyonumuz, sadece araba kullanmayı öğretmek değil, aynı zamanda her bir öğrencimizin güvenliği, özgüveni ve başarısı için gerekli olan bilgi, deneyim ve desteği sağlamaktır. Uzman eğitmenlerimiz, modern öğretim teknikleri ve interaktif derslerimizle sürücülük becerilerinizi geliştirirken, trafik kurallarına uygun, çevreye duyarlı ve sorumlu bir sürücü olmanız için gerekenleri size sunar. Biz, öğrencilerimizin her adımda desteklenmesini sağlayarak, onların sürücülük yolculuğunda kendilerine güvenle ilerlemelerini amaçlıyoruz.</p>
      </div>
    </div>


    <section id="about" class="about" style="font-family: 'Work Sans', sans-serif; text-align: justify;">
      <div class="container" data-aos="fade-up">

          <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="admin/resimler/hakkimizda/<?php echo $hakkimizdacek['hakkimizda_resim'];?>" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3><?php echo $hakkimizdacek['hakkimizda_baslik'] ?></h3>  
            <p>
              <?php echo $hakkimizdacek['hakkimizda_aciklama'];?>
            </p>
          </div>
        </div>

      </div>
    </section>
  </main>

<?php
require_once 'footer.php';
?>