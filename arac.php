<?php require_once 'header.php'; ?>


<main id="main" data-aos="fade-in">
    <div class="breadcrumbs">
      <div class="container" style="font-family: 'Work Sans', sans-serif;">
        <p style="text-align:justify;">Ehliyet Kursu olarak, sürüş deneyiminizi en üst seviyeye çıkarmak için özenle seçtiğimiz araçlarımızla karşınızdayız. Her adımda güvenliğin ve konforun ön planda olduğu sürüş eğitimlerimizde kullanılan araçlarımız, size en iyi öğrenme deneyimini sunmak için tasarlandı. Sektördeki en son teknolojiye sahip olan araçlarımız, sürüş becerilerinizi geliştirmeniz için mükemmel bir ortam sunuyor. Modern iç donanımı, güvenlik sistemleri ve ergonomik yapısıyla, her bir araç eğitim sürecinizi destekleyecek nitelikte. Öğrencilerimizin rahat etmesi ve öğrenme sürecini keyifli hale getirmek adına araçlarımızın her bir detayına özen gösterdik. Sürücü adaylarımızın, her türlü trafik koşulunda kendilerini güvende hissetmelerini sağlamak için düzenli bakımı yapılmış ve güvenlik standartlarına uygun araçlarımızla eğitimlerimizi sürdürüyoruz. Sizleri en son teknolojiyle donatılmış, konforlu ve güvenli araçlarımızla buluşturmak için sabırsızlanıyoruz. Her bir sürüş, yeni bir deneyim ve öğrenme fırsatıdır. Siz de bizimle, güvenli sürücülerin yetiştiği bu deneyimli ekibin bir parçası olun.</p>
      </div>
    </div>

    <section id="courses" class="courses">
      <div class="container" data-aos="fade-up">
        <div class="row" data-aos="zoom-in" data-aos-delay="100">
<?php
$aracsor=$baglanti->prepare("SELECT * FROM arac order by arac_sira ASC ");
$aracsor->execute(array());
while ($araccek=$aracsor->fetch(PDO::FETCH_ASSOC)) {
?>

          <div class="col-lg-4 col-md-4 d-flex align-items-stretch">
            <div class="course-item">
              <img src="admin/resimler/araclar/<?php echo $araccek['arac_resim'] ?>" class="img-fluid" alt="">    
            </div>
          </div>

	<?php } ?>
        
        </div>
      </div>
    </section>
  </main>
  <?php require_once 'footer.php'; ?>