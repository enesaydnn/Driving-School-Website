<?php
require_once 'header.php';
?>

  <main id="main">
    <div class="breadcrumbs" data-aos="fade-in" style="font-family: 'Work Sans', sans-serif;"><!-- Üst Yazı -->
      <div class="container">
        <p style="text-align:justify;">Size daha yakın olabilmek için buradayız. Her türlü soru, geri bildirim veya işbirliği talepleriniz için bize aşağıdaki iletişim bilgilerimizden ulaşabilirsiniz. Sizden haber almak ve ihtiyaçlarınıza yanıt vermek bizim için önemli. Bize e-posta yoluyla ulaşabilir veya sosyal medya hesaplarımızdan bizi takip edebilirsiniz. Ayrıca, işbirliği olanakları veya proje önerileriniz varsa, bizimle iletişime geçmekten çekinmeyin. Sizinle çalışmayı dört gözle bekliyoruz!</p>
      </div>
    </div>

    <section id="contact" class="contact"><!-- Harita -->
      <div data-aos="fade-up">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3148.724749529839!2d41.14342457569855!3d37.89011927195643!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x400b47278faf9191%3A0x1fe7e10c398fc538!2sFatih%2C%20Pir%20Sultan%20Blv.%20No%3A29%2C%2072070%20Batman%20Merkez%2FBatman!5e0!3m2!1str!2str!4v1703965481096!5m2!1str!2str" width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>

      <div class="container" data-aos="fade-up" style="font-family: 'Work Sans', sans-serif ;"><!-- İletişim Bilgileri -->
        <div class="row mt-5">
          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="fa-solid fa-location-crosshairs"></i>
                <h4>Adres:</h4>
                <p><?php echo $ayarcek['ayar_adres'];?></p>
              </div>

              <div class="email">
                <i class="fa-solid fa-envelope-open"></i>
                <h4>Email:</h4>
                <p><?php echo $ayarcek['ayar_email'];?></p>
              </div>

              <div class="phone">
                <i class="fa-solid fa-tty"></i>
                <h4>Telefon:</h4>
                <p><?php echo $ayarcek['ayar_telefon'];?></p>
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