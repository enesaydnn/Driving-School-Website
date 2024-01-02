  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        
        <!-- İletişim Bilgileri -->
        <div class="row">
          <div class="col-lg-3 col-md-6 footer-contact" style="font-family: 'Work Sans', sans-serif; text-align: justify;">
            <h3>Özel Yeni Batman Sürücü Kursu</h3>
            <p>
              <strong>Adres : </strong><?php echo $ayarcek['ayar_adres'];?><br>
              <strong>Telefon : </strong><?php echo $ayarcek['ayar_telefon'];?><br>
              <strong>Email : </strong><?php echo $ayarcek['ayar_email'];?><br>
            </p>
          </div>

                <!--Alt Menü -->
          <div class="col-lg-2 col-md-6 footer-links" style="font-family: 'Work Sans', sans-serif;">
            <h4 style="font-family: 'Jura', sans-serif;">Sayfalar</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php">Anasayfa</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="hakkimizda.php">Hakkımızda</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="ekip.php">Ekibimiz</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="arac.php">Araçlarımız</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="blog.php">Bilgi Bankası</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="iletisim.php">İletişim</a></li>
            </ul>
          </div>

            <!-- Hizmetler Alanı -->
          <div class="col-lg-3 col-md-6 footer-links" style="font-family: 'Work Sans', sans-serif;">
            <h4 style="font-family: 'Jura', sans-serif;">Hizmetlerimiz</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i>Temel Sürücü Eğitimi</li>
              <li><i class="bx bx-chevron-right"></i>Pratik Sürüş Dersleri</li>
              <li><i class="bx bx-chevron-right"></i>Trafik Kuralları ve İlk Yardım Eğitimi</li>
              <li><i class="bx bx-chevron-right"></i>Sınav Hazırlık Desteği</li>
            </ul>
          </div>


            <!-- E Bülten Alanı -->
          <div class="col-lg-4 col-md-6 footer-newsletter" style="font-family: 'Work Sans', sans-serif;">
            <h4 style="font-family: 'Jura', sans-serif;">E-Bülten</h4>
            <p>Nerede olursanız olun, bir tuşla bizi yakından takip edin.</p>
            <form action="admin/islem.php" method="post">
              <input type="email" name="email" placeholder="E-Mail girerek bize katılın.">
              <input name="abone"type="submit" value="Abone Ol">
            </form>
          </div>
        </div>
      </div>
    </div>
 
            <!-- Sosyal Medya Alanı -->
    <div class="container d-md-flex py-4">
      <div class="mr-md-auto text-center text-md-left">
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="<?php echo $ayarcek['ayar_twitter']?>"class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="<?php echo $ayarcek['ayar_facebook']?>" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="<?php echo $ayarcek['ayar_instagram']?>" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="<?php echo $ayarcek['ayar_youtube']?>" class="youtube"><i class="bx bxl-youtube"></i></a>
      </div>
    </div>
  </footer>


  <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>
  <div id="preloader"></div>
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/js/main.js"></script>

</body>
</html>