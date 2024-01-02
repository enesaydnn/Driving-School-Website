<?php
require_once 'header.php';
?>


<?php
$blogsor=$baglanti->prepare("SELECT * FROM blog order by blog_sira ASC");
$blogsor->execute(array());
?>


  <main id="main" data-aos="fade-in" style="font-family: 'Work Sans', sans-serif;">
    <div class="breadcrumbs">
      <div class="container">
        <p style="text-align:justify;">Sürücü olma yolunda atılacak her adım önemlidir ve bilgi edinmek, güvenli sürüş pratiğinin temelini oluşturur. Burada, sürücü adaylarına ve deneyimli sürücülere yönelik geniş kapsamlı bir bilgi bankasına sahibiz. Sürücü Kursu Bilgi Bankamız, trafik kuralları, sürüş teknikleri, araç bakımı ve daha birçok konuda değerli içeriklerle dolu. Sürücülük hakkında merak ettiğiniz her şeyi burada bulabilir ve sürücü olma sürecinizde size rehberlik edecek bilgilerle donanabilirsiniz.</p>
      </div>
    </div>

    <section id="courses" class="courses" style="font-family: 'Work Sans', sans-serif;">
      <div class="container" data-aos="fade-up">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">

<?php while ($blogcek=$blogsor->fetch(PDO::FETCH_ASSOC)) { ?>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img src="admin/resimler/blog/<?php echo $blogcek['blog_resim'];?>" class="img-fluid" alt="...">
              <div class="course-content">
                <h3 style="font-family: 'Jura', sans-serif;"><a href="blog-detay.php?sayfa=blog&id=<?php echo $blogcek['blog_id'] ?>"><?php echo $blogcek['blog_baslik'];?></a></h3>
                <p>
                  <?php
                  $aciklama = $blogcek['blog_aciklama'];
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
<?php
require_once 'footer.php';
?>