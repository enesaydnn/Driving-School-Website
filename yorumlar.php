<?php
require_once 'header.php';
?>


  <main id="main" data-aos="fade-in" style="font-family: 'Work Sans', sans-serif ;">
    <div class="breadcrumbs">
      <div class="container">
 
        <p style="text-align:justify;">Sitemizde sizinle daha yakın bir etkileşim kurmak ve fikirlerinizi duymak için bu yorum bölümünü oluşturduk. Sizlerin deneyimleri, düşünceleri ve geri bildirimleri, bizim için çok değerli. İster bir yazıya, bir ürüne, ya da genel olarak sitemizin içeriğine dair olsun, her türlü düşüncenizi bizimle paylaşmaktan çekinmeyin. Yorumlarınız, sadece bizim için değil, aynı zamanda diğer ziyaretçilerimiz için de rehber niteliği taşıyacak. Sizin deneyimleriniz, onların karar verme süreçlerine ışık tutabilir ve birbirimize destek olabiliriz. Lütfen olumlu ya da olumsuz her türlü görüşünüzü açıkça ifade edin, çünkü bu bize gelişimimizde yardımcı olacak. Sayfamızın daha iyi ve etkileşimli bir yer olmasına katkı sağlamak için buradayız. Unutmayın, bu alan sizin. Sizlerle olan etkileşimimiz, sayfamızın kalitesini artırmamıza ve sizlere daha iyi hizmet sunmamıza olanak tanıyacak. Şimdiden paylaşımlarınız için teşekkür ederiz! </p>
      </div>
    </div>


    <section id="courses" class="courses" style="font-family: 'Work Sans', sans-serif ;">
      <div class="container" data-aos="fade-up">
        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="admin/islem.php" method="post">
              <div class="form-row">

                <div class="col-md-12 form-group">
                  <input type="text" name="adsoyad" class="form-control" id="name" placeholder="Adınız Ve Soyadınız"/>
                  <div class="validate"></div>
                </div>
                </div>

              <div class="form-group">
                <textarea class="form-control" name="detay" rows="5" placeholder="Bizimle Paylaşmak İstediğiniz Öneri,Şikayet Veya Bizi Destekleyen Bir Gönderi Oluşturunuz."></textarea>
                <div class="validate"></div>
              </div>
             
            <input type="hidden" name="sayfalink" value="<?php echo $_SERVER['HTTP_REFERER']?>">
            <div class="text-canter"><button class="btn btn-outline-success" name="blogyorumkaydet" type="submit">Ekle</button></div>
            <br><br>

                <?php
$yorumlarsor=$baglanti->prepare("SELECT * FROM yorumlar where yorum_onay=:yorum_onay ORDER BY yorum_zaman DESC");
$yorumlarsor->execute(array(
'yorum_onay'=>1
));

while ($yorumlarcek=$yorumlarsor->fetch(PDO::FETCH_ASSOC)) {
  $tarih = date("d-m-y", strtotime($yorumlarcek['yorum_zaman']));
                 ?>
                 <br>
  

<div class="card" style="font-family: 'Cairo', sans-serif; letter-spacing: 1px; font-size: 15px; text-align: justify;">
  <h5 class="card-header"><?php echo $yorumlarcek['yorum_adsoyad']; ?></h5>
  <div class="card-body" style="font-family: 'Cairo', sans-serif; letter-spacing: 1px; font-size: 15px; text-align: justify;">
     <h5 class="card-title"><?php echo $tarih; ?></h5>
    <p class="card-text"><?php echo $yorumlarcek['yorum_detay']; ?></p>
  </div>
</div>

      <?php } ?>

            </form>
                  </div>
                </div>
              </div>
            </div>
          </div> 
        </div>
      </div>
    </section>
  </main>

 
 <?php
require_once 'footer.php';
  ?>