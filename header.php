<?php
require_once 'admin/baglanti.php';

$ayarsor=$baglanti->prepare("SELECT * FROM ayarlar WHERE ayar_id=?");
$ayarsor->execute(array(1));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);

$hakkimizdasor=$baglanti->prepare("SELECT * FROM hakkimizda WHERE hakkimizda_id=?");
$hakkimizdasor->execute(array(1));
$hakkimizdacek=$hakkimizdasor->fetch(PDO::FETCH_ASSOC);

$slidersor=$baglanti->prepare("SELECT * FROM slider WHERE slider_id=?");
$slidersor->execute(array(1));
$slidercek=$slidersor->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php echo $ayarcek['ayar_baslik'];?></title>
  <meta content="<?php echo $ayarcek['ayar_aciklama'];?>" name="descriptison">
  <meta content="<?php echo $ayarcek['ayar_anahtar'];?>" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jura:wght@500&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">

  <script src="https://kit.fontawesome.com/7e42547795.js" crossorigin="anonymous"></script>
  </head>

  <body>
  <header id="header" class="fixed-top" style="font-family: 'Work Sans', sans-serif;">
    <div class="container d-flex align-items-center">
      <h1 class="logo mr-auto"><a href="#"><!-- Buraya logo koyabilirsiniz. --></a></h1>
    
       <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.php">Anasayfa</a></li>
          <li><a href="hakkimizda.php">Hakkımızda</a></li>
          <li><a href="ekip.php">Ekibimiz</a></li>
          <li><a href="arac.php">Araçlarımız</a></li>
          <li><a href="blog.php">Bilgi Bankası</a></li>
          <li><a href="iletisim.php">İletişim</a></li>
        </ul>
      </nav>
       <a href="yorumlar.php" class="get-started-btn" style="font-family: 'Work Sans', sans-serif;">Eleştiri ve Yorum Ekle</a>
    </div>
  </header>
