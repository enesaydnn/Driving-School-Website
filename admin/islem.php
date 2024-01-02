<?php
session_start();
require_once 'baglanti.php';
?>

<?php

if (isset($_POST['kullanicikaydet'])) {

$kaydet=$baglanti->prepare("INSERT into kullanici SET 

kullanici_email=:kullanici_email,
kullanici_sifre=:kullanici_sifre,
kullanici_adsoyad=:kullanici_adsoyad

	");
$insert=$kaydet->execute(array(

'kullanici_email'=>htmlspecialchars($_POST['mail']),
'kullanici_sifre'=>htmlspecialchars($_POST['sifre']),
'kullanici_adsoyad'=>htmlspecialchars($_POST['adsoyad'])

));

if ($insert)
{
Header("Location:kullanici.php?durum=YES");
}
else{
Header("Location:kullanici.php?durum=NO");
}
}



if (isset($_POST['kullaniciduzenle'])) {

$kaydet=$baglanti->prepare("UPDATE kullanici SET 

kullanici_email=:kullanici_email,
kullanici_sifre=:kullanici_sifre,
kullanici_adsoyad=:kullanici_adsoyad

WHERE kullanici_id={$_POST['id']}
	");
$update=$kaydet->execute(array(


'kullanici_email'=>htmlspecialchars($_POST['mail']),
'kullanici_sifre'=>htmlspecialchars($_POST['sifre']),
'kullanici_adsoyad'=>htmlspecialchars($_POST['adsoyad'])
));


if ($update) {
Header("Location:kullanici.php?durum=YES");
}
else{
Header("Location:kullanici.php?durum=NO");
}
}


if (isset($_POST['kullanicisil'])) {

$sil=$baglanti->prepare("DELETE FROM kullanici where kullanici_id=:kullanici_id");
$sil->execute(array(

'kullanici_id'=>$_POST['id']
));


if ($sil) {
Header("Location:kullanici.php?durum=YES");
}
else{
Header("Location:kullanici.php?durum=NO");
}
}



//XSS açıkları için htmlspecialchars kullanmalısın. Script dosyalarının çalışmasını engelliyor.
if(isset($_POST['ayarkaydet'])){

$kaydet=$baglanti->prepare("UPDATE ayarlar SET
ayar_baslik=:ayar_baslik,
ayar_aciklama=:ayar_aciklama,
ayar_anahtar=:ayar_anahtar,
ayar_adres=:ayar_adres,
ayar_telefon=:ayar_telefon,
ayar_email=:ayar_email
");

$update=$kaydet->execute(array(
'ayar_baslik' =>htmlspecialchars($_POST['baslik']),
'ayar_aciklama'=>htmlspecialchars($_POST['aciklama']),
'ayar_anahtar'=>htmlspecialchars($_POST['anahtar']),
'ayar_adres'=>htmlspecialchars($_POST['adres']),
'ayar_telefon'=>htmlspecialchars($_POST['telefon']),
'ayar_email'=>htmlspecialchars($_POST['email'])
));

if($update){
header("Location:ayarlar.php?sayfa=ayarlar&durum=YES");
}
else{
header("Location:ayarlar.php?sayfa=ayarlar&durum=NO");
}
}



if(isset($_POST['sosyalmedyakaydet'])){

$kaydet=$baglanti->prepare("UPDATE ayarlar SET
ayar_facebook=:ayar_facebook,
ayar_instagram=:ayar_instagram,
ayar_youtube=:ayar_youtube,
ayar_twitter=:ayar_twitter
");

$update=$kaydet->execute(array(
'ayar_facebook' =>htmlspecialchars($_POST['facebook']),
'ayar_instagram'=>htmlspecialchars($_POST['instagram']),
'ayar_youtube'=>htmlspecialchars($_POST['youtube']),
'ayar_twitter'=>htmlspecialchars($_POST['twitter'])
));

if($update){
header("Location:ayarlar.php?sayfa=sosyalmedya&durum=YES");
}
else{
header("Location:ayarlar.php?sayfa=sosyalmedya&durum=NO");
}
}




if (isset($_POST['hakkimizdakaydet'])) {

if ($_FILES['resim'] ["size"]>0) {

$uploads_dir='resimler/hakkimizda';
@$tmp_name=$_FILES['resim'] ["tmp_name"];
@$name=$_FILES['resim'] ["name"];

$sayi1=rand(1,10000000);
$sayi2=rand(1,10000000);
$sayi3=rand(1,10000000);
$sayilar=$sayi1.$sayi2.$sayi3;
$resimadi=$sayilar.$name;
@move_uploaded_file($tmp_name, "$uploads_dir/$resimadi");



$kaydet=$baglanti->prepare("UPDATE hakkimizda SET 
hakkimizda_baslik=:hakkimizda_baslik,
hakkimizda_aciklama=:hakkimizda_aciklama,
hakkimizda_resim=:hakkimizda_resim
");

$update=$kaydet->execute(array(
'hakkimizda_baslik'=>htmlspecialchars($_POST['baslik']),
'hakkimizda_aciklama'=>$_POST['aciklama'],
'hakkimizda_resim'=>$resimadi
));


if ($update) 
{
	$eskiresim=$_POST['eskiresim'];
	unlink("resimler/hakkimizda/$eskiresim");
	Header("Location:hakkimizda.php?durum=YES");
}	else{
	Header("Location:hakkimizda.php?durum=NO");
}
}

else{

$kaydet=$baglanti->prepare("UPDATE hakkimizda SET 
hakkimizda_baslik=:hakkimizda_baslik,
hakkimizda_aciklama=:hakkimizda_aciklama
");

$update=$kaydet->execute(array(
'hakkimizda_baslik'=>htmlspecialchars($_POST['baslik']),
'hakkimizda_aciklama'=>$_POST['aciklama']
));

if ($update) {
Header("Location:hakkimizda.php?durum=YES");
}
else{
Header("Location:hakkimizda.php?durum=NO");
}

}
}



if (isset($_POST['sliderkaydet'])) {

if ($_FILES['resim'] ["size"]>0) {

$uploads_dir='resimler/slider';
@$tmp_name=$_FILES['resim'] ["tmp_name"];
@$name=$_FILES['resim'] ["name"];

$sayi1=rand(1,10000000);
$sayi2=rand(1,10000000);
$sayi3=rand(1,10000000);
$sayilar=$sayi1.$sayi2.$sayi3;
$resimadi=$sayilar.$name;
@move_uploaded_file($tmp_name, "$uploads_dir/$resimadi");




$kaydet=$baglanti->prepare("UPDATE slider SET 

slider_baslik=:slider_baslik,
slider_aciklama=:slider_aciklama,
slider_buton=:slider_buton,
slider_link=:slider_link,
slider_resim=:slider_resim

	");
$update=$kaydet->execute(array(

'slider_baslik'=>$_POST['baslik'],
'slider_aciklama'=>$_POST['aciklama'],
'slider_buton'=>$_POST['buton'],
'slider_link'=>$_POST['link'],
'slider_resim'=>$resimadi
));


if ($update) {
	$eskiresim=$_POST['eskiresim'];
	unlink("resimler/slider/$eskiresim");
Header("Location:slider.php?durum=YES");
}
else{
Header("Location:slider.php?durum=NO");
}
}

else{

$kaydet=$baglanti->prepare("UPDATE slider SET 

slider_baslik=:slider_baslik,
slider_aciklama=:slider_aciklama,
slider_buton=:slider_buton,
slider_link=:slider_link

	");
$update=$kaydet->execute(array(

'slider_baslik'=>$_POST['baslik'],
'slider_aciklama'=>$_POST['aciklama'],
'slider_buton'=>$_POST['buton'],
'slider_link'=>$_POST['link']
));
if ($update) 
{
Header("Location:slider.php?durum=YES");
}
else{
Header("Location:slider.php?durum=NO");
}

}


}



if (isset($_POST['ekipkaydet'])) {
	$uploads_dir='resimler/ekip';
@$tmp_name=$_FILES['resim'] ["tmp_name"];
@$name=$_FILES['resim'] ["name"];

$sayi1=rand(1,10000000);
$sayi2=rand(1,10000000);
$sayi3=rand(1,10000000);
$sayilar=$sayi1.$sayi2.$sayi3;
$resimadi=$sayilar.$name;
@move_uploaded_file($tmp_name, "$uploads_dir/$resimadi");


$kaydet=$baglanti->prepare("INSERT into ekip SET 

ekip_isim=:ekip_isim,
ekip_konum=:ekip_konum,
ekip_sira=:ekip_sira,
ekip_aciklama=:ekip_aciklama,
ekip_facebook=:ekip_facebook,
ekip_instagram=:ekip_instagram,
ekip_youtube=:ekip_youtube,
ekip_resim=:ekip_resim
	");
$insert=$kaydet->execute(array(

'ekip_isim'=>htmlspecialchars($_POST['isim']),
'ekip_konum'=>htmlspecialchars($_POST['konum']),
'ekip_sira'=>htmlspecialchars($_POST['sira']),
'ekip_aciklama'=>$_POST['aciklama'],
'ekip_facebook'=>htmlspecialchars($_POST['facebook']),
'ekip_instagram'=>htmlspecialchars($_POST['instagram']),
'ekip_youtube'=>htmlspecialchars($_POST['youtube']),
'ekip_resim'=>$resimadi
));


if ($insert){
Header("Location:ekip.php?sayfa=ekip&durum=YES");
}
else
{
Header("Location:ekip.php?sayfa=ekip&durum=NO");
}
}




if (isset($_POST['ekipduzenle'])) {
if ($_FILES['resim'] ["size"]>0) {

$uploads_dir='resimler/ekip';
@$tmp_name=$_FILES['resim'] ["tmp_name"];
@$name=$_FILES['resim'] ["name"];

$sayi1=rand(1,10000000);
$sayi2=rand(1,10000000);
$sayi3=rand(1,10000000);
$sayilar=$sayi1.$sayi2.$sayi3;
$resimadi=$sayilar.$name;
@move_uploaded_file($tmp_name, "$uploads_dir/$resimadi");

$kaydet=$baglanti->prepare("UPDATE ekip SET 

ekip_isim=:ekip_isim,
ekip_konum=:ekip_konum,
ekip_sira=:ekip_sira,
ekip_aciklama=:ekip_aciklama,
ekip_facebook=:ekip_facebook,
ekip_instagram=:ekip_instagram,
ekip_youtube=:ekip_youtube,
ekip_resim=:ekip_resim
WHERE ekip_id={$_POST['id']}

	");
$update=$kaydet->execute(array(
'ekip_isim'=>htmlspecialchars($_POST['isim']),
'ekip_konum'=>htmlspecialchars($_POST['konum']),
'ekip_sira'=>htmlspecialchars($_POST['sira']),
'ekip_aciklama'=>$_POST['aciklama'],
'ekip_facebook'=>htmlspecialchars($_POST['facebook']),
'ekip_instagram'=>htmlspecialchars($_POST['instagram']),
'ekip_youtube'=>htmlspecialchars($_POST['youtube']),
'ekip_resim'=>$resimadi
));


if ($update) {
	$eskiresim=$_POST['eskiresim'];
	unlink("resimler/ekip/$eskiresim");
	Header("Location:ekip.php?durum=YES");
}
else{
	Header("Location:ekip.php?durum=NO");
}
}

else{

$kaydet=$baglanti->prepare("UPDATE ekip SET 
ekip_isim=:ekip_isim,
ekip_konum=:ekip_konum,
ekip_sira=:ekip_sira,
ekip_aciklama=:ekip_aciklama,
ekip_facebook=:ekip_facebook,
ekip_instagram=:ekip_instagram,
ekip_youtube=:ekip_youtube
WHERE ekip_id={$_POST['id']}
");

$update=$kaydet->execute(array(
'ekip_isim'=>htmlspecialchars($_POST['isim']),
'ekip_konum'=>htmlspecialchars($_POST['konum']),
'ekip_sira'=>htmlspecialchars($_POST['sira']),
'ekip_aciklama'=>$_POST['aciklama'],
'ekip_facebook'=>htmlspecialchars($_POST['facebook']),
'ekip_instagram'=>htmlspecialchars($_POST['instagram']),
'ekip_youtube'=>htmlspecialchars($_POST['youtube'])
));

if ($update){
Header("Location:ekip.php?durum=YES");
}
else{
Header("Location:ekip.php?durum=NO");
}

}
}



if (isset($_POST['ekipsil'])) {
$eskiresim=$_POST['eskiresim'];
	unlink("resimler/ekip/$eskiresim");
$sil=$baglanti->prepare("DELETE  FROM ekip where ekip_id=:ekip_id");
$sil->execute(array(

'ekip_id'=>$_POST['id']
));


if ($sil) {
	Header("Location:ekip.php?durum=YES");
}
else{
	Header("Location:ekip.php?durum=NO");

}
}




if (isset($_POST['arackaydet'])) {
	$uploads_dir='resimler/araclar';
@$tmp_name=$_FILES['resim'] ["tmp_name"];
@$name=$_FILES['resim'] ["name"];

$sayi1=rand(1,10000000);
$sayi2=rand(1,10000000);
$sayi3=rand(1,10000000);
$sayilar=$sayi1.$sayi2.$sayi3;
$resimadi=$sayilar.$name;
@move_uploaded_file($tmp_name, "$uploads_dir/$resimadi");


$kaydet=$baglanti->prepare("INSERT into arac SET 

arac_sira=:arac_sira,
arac_resim=:arac_resim

");


$insert=$kaydet->execute(array(
'arac_sira'=>htmlspecialchars($_POST['sira']),
'arac_resim'=>$resimadi
));


if ($insert){
Header("Location:arac.php?durum=YES");
}
else{
Header("Location:arac.php?durum=NO");
}
}



if (isset($_POST['aracduzenle'])) {

if ($_FILES['resim'] ["size"]>0) {

$uploads_dir='resimler/araclar';
@$tmp_name=$_FILES['resim'] ["tmp_name"];
@$name=$_FILES['resim'] ["name"];

$sayi1=rand(1,10000000);
$sayi2=rand(1,10000000);
$sayi3=rand(1,10000000);
$sayilar=$sayi1.$sayi2.$sayi3;
$resimadi=$sayilar.$name;
@move_uploaded_file($tmp_name, "$uploads_dir/$resimadi");




$kaydet=$baglanti->prepare("UPDATE arac SET 

arac_sira=:arac_sira,
arac_resim=:arac_resim
WHERE arac_id={$_POST['id']}
	");

$update=$kaydet->execute(array(
'arac_sira'=>htmlspecialchars($_POST['sira']),
'arac_resim'=>$resimadi
));


if ($update) {
	$eskiresim=$_POST['eskiresim'];
	unlink("resimler/araclar/$eskiresim");
Header("Location:arac.php?durum=YES");
}else{
	Header("Location:arac.php?durum=NO");
}
}

else{

$kaydet=$baglanti->prepare("UPDATE arac SET 
arac_sira=:arac_sira

WHERE arac_id={$_POST['id']}

");

$update=$kaydet->execute(array(
'arac_sira'=>htmlspecialchars($_POST['sira'])

));

if ($update)
{
Header("Location:arac.php?durum=YES");
}
else{
Header("Location:arac.php?durum=NO");
}
}
}



if (isset($_POST['aracsil'])) {
$eskiresim=$_POST['eskiresim'];
	unlink("resimler/araclar/$eskiresim");

$sil=$baglanti->prepare("DELETE FROM arac where arac_id=:arac_id");
$sil->execute(array(

'arac_id'=>$_POST['id']
));


if ($sil) {
	Header("Location:arac.php?durum=YES");
}
else{
	Header("Location:arac.php?durum=NO");

}
}



if (isset($_POST['blogkaydet'])) {
	$uploads_dir='resimler/blog';
@$tmp_name=$_FILES['resim'] ["tmp_name"];
@$name=$_FILES['resim'] ["name"];

$sayi1=rand(1,10000000);
$sayi2=rand(1,10000000);
$sayi3=rand(1,10000000);
$sayilar=$sayi1.$sayi2.$sayi3;
$resimadi=$sayilar.$name;
@move_uploaded_file($tmp_name, "$uploads_dir/$resimadi");


$kaydet=$baglanti->prepare("INSERT into blog SET 

blog_baslik=:blog_baslik,
blog_anahtarkelime=:blog_anahtarkelime,
blog_sira=:blog_sira,
blog_aciklama=:blog_aciklama,

blog_resim=:blog_resim
	");
$insert=$kaydet->execute(array(

'blog_baslik'=>htmlspecialchars($_POST['baslik']),
'blog_anahtarkelime'=>htmlspecialchars($_POST['anahtarkelime']),
'blog_sira'=>htmlspecialchars($_POST['sira']),
'blog_aciklama'=>$_POST['aciklama'],

'blog_resim'=>$resimadi
));




if ($insert)
{
Header("Location:blog.php?durum=YES");
}
else{
Header("Location:blog.php?durum=NO");
}
}





if (isset($_POST['blogduzenle'])) {

if ($_FILES['resim'] ["size"]>0) {

$uploads_dir='resimler/blog';
@$tmp_name=$_FILES['resim'] ["tmp_name"];
@$name=$_FILES['resim'] ["name"];

$sayi1=rand(1,10000000);
$sayi2=rand(1,10000000);
$sayi3=rand(1,10000000);
$sayilar=$sayi1.$sayi2.$sayi3;
$resimadi=$sayilar.$name;
@move_uploaded_file($tmp_name, "$uploads_dir/$resimadi");





$kaydet=$baglanti->prepare("UPDATE blog SET 


blog_baslik=:blog_baslik,
blog_anahtarkelime=:blog_anahtarkelime,
blog_sira=:blog_sira,
blog_aciklama=:blog_aciklama,

blog_resim=:blog_resim
WHERE blog_id={$_POST['id']}
	");
$update=$kaydet->execute(array(


'blog_baslik'=>htmlspecialchars($_POST['baslik']),
'blog_anahtarkelime'=>htmlspecialchars($_POST['anahtarkelime']),
'blog_sira'=>htmlspecialchars($_POST['sira']),
'blog_aciklama'=>$_POST['aciklama'],
'blog_resim'=>$resimadi
));


if ($update) {
	$eskiresim=$_POST['eskiresim'];
	unlink("resimler/blog/$eskiresim");
Header("Location:blog.php?durum=YES");
}
else{
Header("Location:blog.php?durum=NO");
}
}

else{


$kaydet=$baglanti->prepare("UPDATE blog SET 

blog_baslik=:blog_baslik,
blog_anahtarkelime=:blog_anahtarkelime,
blog_sira=:blog_sira,
blog_aciklama=:blog_aciklama

WHERE blog_id={$_POST['id']}

	");
$update=$kaydet->execute(array(
'blog_baslik'=>htmlspecialchars($_POST['baslik']),
'blog_anahtarkelime'=>htmlspecialchars($_POST['anahtarkelime']),
'blog_sira'=>htmlspecialchars($_POST['sira']),
'blog_aciklama'=>$_POST['aciklama']
));
if ($update) {
Header("Location:blog.php?durum=YES");
}
else{
Header("Location:blog.php?durum=NO");
}
}
}


if (isset($_POST['blogsil'])) {
$eskiresim=$_POST['eskiresim'];
	unlink("resimler/blog/$eskiresim");

$sil=$baglanti->prepare("DELETE FROM blog where blog_id=:blog_id");
$sil->execute(array(

'blog_id'=>$_POST['id']
));


if ($sil) {
Header("Location:blog.php?durum=YES");
}
else{
Header("Location:blog.php?durum=NO");

}
}



if (isset($_POST['blogyorumkaydet'])) {
$link=$_SERVER['HTTP_REFERER'];

$kaydet=$baglanti->prepare("INSERT into yorumlar SET 

yorum_adsoyad=:yorum_adsoyad,
yorum_detay=:yorum_detay
");

$insert=$kaydet->execute(array(

'yorum_adsoyad'=>htmlspecialchars($_POST['adsoyad']),
'yorum_detay'=>htmlspecialchars($_POST['detay'])

));


if ($insert)
{
Header("Location:$link?durum=YES");
}
else{
Header("Location:$link?durum=NO");
}
}



if (isset($_GET['yorumonayla'])) {

$duzenle=$baglanti->prepare("UPDATE yorumlar SET 
yorum_onay=:yorum_onay

WHERE yorum_id={$_GET['id']}

	");
$update=$duzenle->execute(array(


'yorum_onay'=>1


));
if($update){
Header("Location:yorumlar.php?durum=YES");
}else{
Header("Location:yorumlar.php?durum=NO");
}
}


if (isset($_GET['yorumsil'])) {
$link=$_SERVER['HTTP_REFERER'];
$sil=$baglanti->prepare("DELETE  FROM yorumlar where yorum_id=:yorum_id");
$sil->execute(array(

'yorum_id'=>$_GET['id']
));

if ($sil) {
Header("Location:$link?durum=YES");
}else{
Header("Location:$link?durum=NO");
}
}



if (isset($_POST['anasayfakaydet'])) {
	$uploads_dir='resimler/anasayfa';
@$tmp_name=$_FILES['resim'] ["tmp_name"];
@$name=$_FILES['resim'] ["name"];

$sayi1=rand(1,10000000);
$sayi2=rand(1,10000000);
$sayi3=rand(1,10000000);
$sayilar=$sayi1.$sayi2.$sayi3;
$resimadi=$sayilar.$name;
@move_uploaded_file($tmp_name, "$uploads_dir/$resimadi");


$kaydet=$baglanti->prepare("INSERT into anasayfa SET 

anasayfa_baslik=:anasayfa_baslik,
anasayfa_anahtarkelime=:anasayfa_anahtarkelime,
anasayfa_sira=:anasayfa_sira,
anasayfa_aciklama=:anasayfa_aciklama,

anasayfa_resim=:anasayfa_resim
	");
$insert=$kaydet->execute(array(

'anasayfa_baslik'=>htmlspecialchars($_POST['baslik']),
'anasayfa_anahtarkelime'=>htmlspecialchars($_POST['anahtarkelime']),
'anasayfa_sira'=>htmlspecialchars($_POST['sira']),
'anasayfa_aciklama'=>$_POST['aciklama'],

'anasayfa_resim'=>$resimadi
));




if ($insert)
{
Header("Location:anasayfa.php?durum=YES");
}
else{
Header("Location:anasayfa.php?durum=NO");
}
}



if (isset($_POST['anasayfaduzenle'])) {

if ($_FILES['resim'] ["size"]>0) {

$uploads_dir='resimler/anasayfa';
@$tmp_name=$_FILES['resim'] ["tmp_name"];
@$name=$_FILES['resim'] ["name"];

$sayi1=rand(1,10000000);
$sayi2=rand(1,10000000);
$sayi3=rand(1,10000000);
$sayilar=$sayi1.$sayi2.$sayi3;
$resimadi=$sayilar.$name;
@move_uploaded_file($tmp_name, "$uploads_dir/$resimadi");



$kaydet=$baglanti->prepare("UPDATE anasayfa SET 


anasayfa_baslik=:anasayfa_baslik,
anasayfa_anahtarkelime=:anasayfa_anahtarkelime,
anasayfa_sira=:anasayfa_sira,
anasayfa_aciklama=:anasayfa_aciklama,

anasayfa_resim=:anasayfa_resim
WHERE anasayfa_id={$_POST['id']}
	");
$update=$kaydet->execute(array(


'anasayfa_baslik'=>htmlspecialchars($_POST['baslik']),
'anasayfa_anahtarkelime'=>htmlspecialchars($_POST['anahtarkelime']),
'anasayfa_sira'=>htmlspecialchars($_POST['sira']),
'anasayfa_aciklama'=>$_POST['aciklama'],
'anasayfa_resim'=>$resimadi
));


if ($update) {
	$eskiresim=$_POST['eskiresim'];
	unlink("resimler/anasayfa/$eskiresim");
Header("Location:anasayfa.php?durum=YES");
}
else{
Header("Location:anasayfa.php?durum=NO");
}
}

else{


$kaydet=$baglanti->prepare("UPDATE anasayfa SET 

anasayfa_baslik=:anasayfa_baslik,
anasayfa_anahtarkelime=:anasayfa_anahtarkelime,
anasayfa_sira=:anasayfa_sira,
anasayfa_aciklama=:anasayfa_aciklama

WHERE anasayfa_id={$_POST['id']}
	");
$update=$kaydet->execute(array(
'anasayfa_baslik'=>htmlspecialchars($_POST['baslik']),
'anasayfa_anahtarkelime'=>htmlspecialchars($_POST['anahtarkelime']),
'anasayfa_sira'=>htmlspecialchars($_POST['sira']),
'anasayfa_aciklama'=>$_POST['aciklama']
));
if ($update) {
Header("Location:anasayfa.php?durum=YES");
}
else{
Header("Location:anasayfa.php?durum=NO");
}
}
}


if (isset($_POST['anasayfasil'])) {
$eskiresim=$_POST['eskiresim'];
	unlink("resimler/anasayfa/$eskiresim");

$sil=$baglanti->prepare("DELETE FROM anasayfa where anasayfa_id=:anasayfa_id");
$sil->execute(array(

'anasayfa_id'=>$_POST['id']
));

if ($sil) {
Header("Location:anasayfa.php?durum=YES");
}
else{
Header("Location:anasayfa.php?durum=NO");
}
}


if (isset($_POST['abone'])) {
	
$kaydet=$baglanti->prepare("INSERT into abone SET 
abone_email=:abone_email
	");
$insert=$kaydet->execute(array(
'abone_email'=>htmlspecialchars($_POST['email'])
));


if ($insert) {
Header("Location:../iletisim.php?durum=YES");
}else{
Header("Location:../iletisim.php?durum=NO");
}
}

if (isset($_POST['girisyap'])) {

$email=htmlspecialchars($_POST['email']);
$sifre=htmlspecialchars($_POST['sifre']);
$md5=md5($sifre);

$kullanicisor=$baglanti->prepare("SELECT * FROM kullanici  where kullanici_email=:kullanici_email and kullanici_sifre=:kullanici_sifre");
$kullanicisor->execute(array(
'kullanici_email'=>$email,
'kullanici_sifre'=>$md5

));
$var=$kullanicisor->rowCount();

if ($var=="0") {
Header("Location:giris.php?durum=hata");
}else{
$_SESSION['giris']=$email;
Header("Location:index.php?durum=okey");
}
}


?>