<?php 
require_once 'header.php';

$blogsor=$baglanti->prepare("SELECT * FROM blog WHERE blog_id=:blog_id");
$blogsor->execute(array(
'blog_id'=>$_GET['id']
));
$blogcek=$blogsor->fetch(PDO::FETCH_ASSOC);

?>

<br><br>

    <section id="course-details" class="course-details" style="font-family: 'Work Sans', sans-serif; text-align: justify;">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-8">
            <img src="admin/resimler/blog/<?php echo $blogcek['blog_resim'];?>" class="img-fluid" alt="">
            <h3 style="font-family: 'Jura', sans-serif;"><?php echo $blogcek['blog_baslik'] ?></h3>
            <p>
             <?php echo $blogcek['blog_aciklama']?>
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