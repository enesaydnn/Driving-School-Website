-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 02 Oca 2024, 14:44:57
-- Sunucu sürümü: 10.4.32-MariaDB
-- PHP Sürümü: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `company`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `abone`
--

CREATE TABLE `abone` (
  `abone_id` int(11) NOT NULL,
  `abone_email` varchar(240) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `abone`
--

INSERT INTO `abone` (`abone_id`, `abone_email`) VALUES
(9, 'infoenesaydn@gmail.com');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `anasayfa`
--

CREATE TABLE `anasayfa` (
  `anasayfa_id` int(11) NOT NULL,
  `anasayfa_baslik` varchar(240) NOT NULL,
  `anasayfa_aciklama` text NOT NULL,
  `anasayfa_resim` varchar(280) NOT NULL,
  `anasayfa_sira` int(11) NOT NULL,
  `kullanici_id` int(11) NOT NULL,
  `anasayfa_zaman` timestamp NOT NULL DEFAULT current_timestamp(),
  `anasayfa_anahtarkelime` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `anasayfa`
--

INSERT INTO `anasayfa` (`anasayfa_id`, `anasayfa_baslik`, `anasayfa_aciklama`, `anasayfa_resim`, `anasayfa_sira`, `kullanici_id`, `anasayfa_zaman`, `anasayfa_anahtarkelime`) VALUES
(5, 'Aracınızı Kışa Hazırlamanın İlk Adımı: Doğru Kış Lastiği Nasıl Seçilir ?', '<p>Kış mevsimi gelip &ccedil;attığında s&uuml;r&uuml;ş konforu ve trafikte can g&uuml;venliğini sağlamak adına kış lastiği b&uuml;y&uuml;k &ouml;nem taşır. Ayrıca kış lastiği takmamanın &ouml;zellikle şehirler arası yolculuklarda ve zorlu mevsim şartlarında şehir i&ccedil;inde kullanmadığınızda ara&ccedil; t&uuml;r&uuml;ne g&ouml;re cezai yaptırımı vardır. Ancak bu yaptırımın da &ouml;tesinde kendinizin ve diğer s&uuml;r&uuml;c&uuml;lerin s&uuml;r&uuml;ş g&uuml;venliğini sağlayan kış lastiği i&ccedil;in bazı &ouml;nemli detaylar bulunur. Bu i&ccedil;eriğimizde sizinle doğru kış lastiğini se&ccedil;menin y&ouml;ntemlerini paylaşacağız.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>Kış Lastiği &Ouml;zellikleri Nelerdir?</h2>\r\n\r\n<p>&Ouml;nerilen kış lastikleri, belli başlı bazı &ouml;zelliklere sahip olmalıdır. Bu nedenle &ouml;ncelikle kış lastiğinin genel &ouml;zelliklerini inceleyelim:&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Sırt Kau&ccedil;uğu: Kış lastiklerinin sırtında bazı kau&ccedil;uk bileşenler yer alır. Bunlar aşırı soğuk havalarda lastiğin sırtının sertleşerek yol &ccedil;ekişinin azalmasına karşı bir &ouml;nlemdir.</p>\r\n	</li>\r\n	<li>\r\n	<p>Diş Derinliği: Kış lastikleri daha derin dişlere sahiptir. Bu sayede kar lastikte birikmez ve karlı bir yolda &ccedil;ekiş performansı da aksamaz.</p>\r\n	</li>\r\n	<li>\r\n	<p>Sırt Desenleri: Kış lastiklerinde sırt desenleri; sulu kar, kar ve suyun dışarı atılabilmesi i&ccedil;in ideal şekilde tasarlanır.</p>\r\n	</li>\r\n	<li>\r\n	<p>Keskin U&ccedil;lar: Lastiğin buzdaki &ccedil;ekişini sağlamak i&ccedil;in &uuml;zerinde keskin u&ccedil; ve girinti yoğunluğu vardır. Kış lastikleri, &uuml;zerlerindeki &ccedil;ok sayıdaki k&uuml;&ccedil;&uuml;k yarık sayesinde buzlu zeminde bile ideal performans sunar.</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>Şimdi, kış lastiklerinin diğer &ouml;zelliklerine g&ouml;z atalım.</p>\r\n\r\n<p><strong>Lastik Boyutu ve Tipi Nasıl Olmalı?</strong></p>\r\n\r\n<p>Kış mevsiminde ve zorlu hava koşullarında lastiğin doğru ebat ve tipe sahip olması gerekir. İdeal bir kış lastiğinin lastik boyutu a&ccedil;ısından standartları karşılaması, s&uuml;r&uuml;ş g&uuml;venliği i&ccedil;in olduk&ccedil;a &ouml;nemli.&nbsp;&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>Lastik Boyutları ve &Ouml;zellikleri</h3>\r\n\r\n<p>Yolların durumuna g&ouml;re &ouml;nerilen kış lastikleri de değişiklik g&ouml;sterir. Aracınıza uygun lastik se&ccedil;imleri yaparak kış d&ouml;neminde g&uuml;venliğinizi &uuml;st seviyede tutabilirsiniz. &Ouml;rneğin yapılan bir araştırmaya g&ouml;re Volkswagen Golf 7 ile ger&ccedil;ekleştirilen test s&uuml;r&uuml;şlerinde beş ayrı lastik tipi değerlendirmeye tabi tutulmuş ve şu sonu&ccedil;lar alınmış:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Kış lastiklerinin kuru zeminde s&uuml;r&uuml;ş i&ccedil;in tasarlandığı d&uuml;ş&uuml;n&uuml;l&uuml;rse bu kriterler i&ccedil;in en rahat s&uuml;r&uuml;ş&uuml;n 225/40 R18 ebadındaki lastiklerden elde edilebiliyor.&nbsp;</li>\r\n	<li>Eğer karlı yolda ara&ccedil; s&uuml;r&uuml;yorsanız daha ince lastikler kullanılması gerekir. 195/65 R15 ebadındaki lastikler, daha geniş lastiklere (&ouml;rneğin 225/40 R18) kıyasla kar &uuml;zerinde daha iyi bir &ccedil;ekiş sağlıyor.</li>\r\n	<li>Islak zeminde s&uuml;r&uuml;len ara&ccedil;lar i&ccedil;in ise daha k&uuml;&ccedil;&uuml;k lastiklerin başarılı sonu&ccedil; verdiği ifade ediliyor. 225/45 R17 ya da 225/40 R18 gibi boyutlara sahip lastiklerin nemli yollarda kontrol edilme kabiliyetlerinin daha g&uuml;&ccedil;l&uuml; olduğu g&ouml;r&uuml;l&uuml;yor.</li>\r\n	<li>Buz &uuml;zerinde ise b&uuml;t&uuml;n lastiklerden hemen hemen aynı sonu&ccedil;lar alınıyor, ancak yanal denge bakımından diğer boyutlara kıyasla daha başarılı performans sunan 225/45 R17 ve 225/45 R18 ebatındaki lastikler buzlu yollar i&ccedil;in tavsiye ediliyor.</li>\r\n</ul>\r\n\r\n<p>Dolayısıyla zorlu hava şartlarında g&uuml;venli s&uuml;r&uuml;ş tedbirlerini elden bırakmamak i&ccedil;in siz de aracınız i&ccedil;in en uygun kış lastiğini tercih etmelisiniz.</p>\r\n\r\n<p><strong>Kış Lastiği Profili Deseni</strong></p>\r\n\r\n<p>Lastik desenleri, estetik bir g&ouml;r&uuml;nt&uuml;n&uuml;n &ouml;tesinde farklı şartlarda s&uuml;r&uuml;ş i&ccedil;in tasarlanan lastiklere g&uuml;&ccedil; kazandıran teknik bir detay. Kış lastikleri i&ccedil;in de dikkat edilen &ouml;nemli bir profil deseni bulunur.</p>\r\n\r\n<p><strong>Y&ouml;nl&uuml; lastik:</strong> V desenine sahip olan y&ouml;nl&uuml; lastik, y&uuml;ksek hıza sahip s&uuml;r&uuml;şler sırasında &ouml;nemli miktarda suyun tahliye edilmesine elverişli bir yapıdadır. Kar &uuml;zerinde de y&uuml;ksek hareket kabiliyetine sahip olan bu lastik tipini yeni nesil kış lastiklerinde sık sık g&ouml;rebilirsiniz.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Y&ouml;nl&uuml; lastiğin yanı sıra suda kızaklama riskini d&uuml;ş&uuml;ren ve ıslak zeminlerde optimum g&uuml;venlik sunan asimetrik lastik de kış lastiklerinde &ccedil;ok sık g&ouml;zlenebilen bir diğer lastik desenidir.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>Kar ve Buzda &Ccedil;ekiş</h3>\r\n\r\n<p>Lastik tipi ve boyutunun yanı sıra &uuml;zerindeki keskin u&ccedil;lar sayesinde kış lastiklerinin karlı ve buzlu yolda &ccedil;ekiş performansı, yaz lastiklerinin kuru yoldaki performansına neredeyse denktir. Bu sayede kış aylarında en zorlu trafiklerde ve virajlarda bile ara&ccedil; kullanmanın zorluklarına karşı &ouml;nleminizi almış olursunuz.</p>\r\n\r\n<p>Kar lastiğinin &ouml;zelliklerini ele aldığımıza g&ouml;re şimdi de kış lastiği se&ccedil;erken dikkat edilmesi gereken diğer noktalara ge&ccedil;elim.</p>\r\n\r\n<h2>Lastik Se&ccedil;imi ve Dayanıklılık Nasıl Olmalı?</h2>\r\n\r\n<p>Kış lastik &ouml;nerileri i&ccedil;in dikkat edilen husus, kış lastiklerinin yoğun kardan ziyade buzlu ve ıslak zeminde kullanılacak olmasıdır. En iyi kış lastiklerinin karda fren ve &ccedil;ekiş y&ouml;n&uuml;nden yeterli olması, kuru ve ıslak zemindeki performansının da yaz lastiklerinin performansına en yakın sonucu vermesi beklenir.</p>\r\n\r\n<p><strong>&nbsp;</strong></p>\r\n\r\n<p><strong>Lastik Markaları ve Test Sonu&ccedil;ları</strong></p>\r\n\r\n<p>Lastik markaları, her yıl farklı model ara&ccedil;larda ve farklı koşullarda kış lastikleri i&ccedil;in testler yapar. Siz de yeni kış lastiği alacağınız zaman bu testleri inceleyerek başarılı sonu&ccedil;lar vermiş kış lastiklerine &ouml;ncelik tanıyabilirsiniz.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>S&uuml;r&uuml;ş Konforu ve G&uuml;r&uuml;lt&uuml; Seviyesi</h3>\r\n\r\n<p>S&uuml;r&uuml;ş konforunun &ouml;nemli bir kriteri de lastiğinizin ara&ccedil; i&ccedil;inde hissedilen yoldaki d&uuml;zensizlikleri emebilme g&uuml;c&uuml;d&uuml;r. Yol kaplamalarındaki d&uuml;zensizlikleri ara&ccedil; i&ccedil;ine ne kadar az yansıtırsa bir lastik o kadar konforlu bir s&uuml;r&uuml;ş olanağı tanır.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Ancak bilinen bir ger&ccedil;ek var ki kış lastikleri, yapıları gereği g&uuml;venli bir s&uuml;r&uuml;ş sunmak adına daha derin ve daha yoğun dişlere sahip oldukları i&ccedil;in yaz lastiklerine g&ouml;re daha seslidir.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>Uzun &Ouml;m&uuml;rl&uuml; Kış Lastikleri</h3>\r\n\r\n<p>Kış lastik &ouml;nerileri arasında en uzun &ouml;m&uuml;rl&uuml; modelleri tercih etmek isteyebilirsiniz. Bu noktada markaların s&uuml;r&uuml;c&uuml;lere sunduğu taahh&uuml;tler ve bağımsız denet&ccedil;iler ışığında geliştirdikleri testlerin sonu&ccedil;ları &ouml;nem taşır. Bazı lastik firmaları, lastiğiniz son yasal diş derinliği sınırına ulaşana dek g&uuml;venlik sunmayı taahh&uuml;t eder. Dolayısıyla uzun &ouml;m&uuml;rl&uuml; bir kış lastiği i&ccedil;in markaların beyanlarını inceleyip teknik a&ccedil;ıdan da ideal kış lastiği kriterlerini karşılayıp karşılamadığını kontrol etmek yeterli gelecektir.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', '154620093542841886808d3aed211-6ea8-4479-a059-2a9c1e919a24.jpg', 1, 0, '2024-01-01 18:42:24', 'Kış,Soğuk,Kar'),
(6, 'Kaza Tespit Tutanağı Nedir? Nasıl Sorgulanır?', '<p>Kaza tespit tutanağı, trafikte en az iki aracın karıştığı ve sadece maddi hasarla sonu&ccedil;lanan kazalardan sonra d&uuml;zenlenen tutanaktır. Taraflar, kaza tespit tutanağını maddi hasarlarını gidermek amacıyla tarafların sigorta şirketleri veya polise gerek kalmadan kendi aralarında d&uuml;zenleyebilirler. Ancak kaza tespit tutanağını doğru şekilde doldurmak gerekir.</p>\r\n\r\n<p>O h&acirc;lde, &ldquo;Kaza tespit tutanağı nasıl doldurulur?&rdquo; ve &ldquo;Hangi durumlarda kaza tespit tutanağı tutulur?&rdquo; gibi soruların cevaplarını birlikte inceleyelim.</p>\r\n\r\n<p>Kaza Tespit Tutanağı Nasıl Doldurulur?</p>\r\n\r\n<p>Kaza tespit tutanağında kazaya karışan kişilerin eksiksiz ve doğru bir şekilde kaza tespit tutanağını doldurması olduk&ccedil;a &ouml;nemli. Tutanakta mutlaka yer alması gereken bilgiler ise şunlar:&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Ad - soyad</li>\r\n	<li>TC kimlik numarası</li>\r\n	<li>Ara&ccedil; plaka bilgileri</li>\r\n	<li>Trafik sigortası poli&ccedil;e numaraları</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Bu bilgiler dışında kaza tespit tutanağı doldururken dikkat edilmesi gereken unsurlar bulunur. Bunları ise şu şekilde sıralayabiliriz:&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Tutanağa kazanın yeri, saati ve tarihi doğru yazılmalıdır.</li>\r\n	<li>Tutanaktaki ilgili b&ouml;l&uuml;mde kazanın nasıl ve hangi a&ccedil;ılardan ger&ccedil;ekleştiğini netleştirecek taslaklar &ccedil;izilmelidir. Taslaklarda; ara&ccedil;ların gittiği y&ouml;n, yol &ccedil;izgileri ve sokak isimleri yer almalıdır. Kazaya karışan ara&ccedil;lar A ve B şeklinde isimlendirilerek taslak daha da netleştirilmelidir.</li>\r\n	<li>Kaza tespit tutanağında, kazaya karışan s&uuml;r&uuml;c&uuml;lerin kısa ifadeleri yer almalıdır.</li>\r\n	<li>Kaza tespit tutanağının 12 numaralı alanı, kazaya karışan b&uuml;t&uuml;n s&uuml;r&uuml;c&uuml;ler tarafından imzalanmalıdır. Eğer bu alan imzalanmazsa tutanak ge&ccedil;ersiz sayılacaktır.</li>\r\n	<li>Kazada şahit varsa tanıklığına başvurulması gerekmesi h&acirc;linde bu kişinin isim, soyisim ve iletişim bilgileri de tutanağa eklenebilir.</li>\r\n</ul>\r\n\r\n<p>Eğer kazaya karışan taraflar kendi aralarında anlaşmazlık yaşar ve iki taraf da tutanağı imzalamazsa 155 veya 156 numaralı telefonların aranması, kazanın ger&ccedil;ekleştiği b&ouml;lgeyle ilgilenen jandarma veya trafik polislerinin olay yerine &ccedil;ağrılması gerekir.</p>\r\n\r\n<p>Kazaya ikiden fazla aracın karışması durumunda ise birka&ccedil; tane kaza tespit tutanağı formu kullanılmalı, d&uuml;zenlenen her formda da trafik kazasının oluş şeklini g&ouml;steren şema mutlaka yer almalıdır. Birden fazla kaza tespit tutanağı formu tutulması halinde b&uuml;t&uuml;n s&uuml;r&uuml;c&uuml;lerin her formda imzası bulunmalıdır.</p>\r\n\r\n<p>Kaza Tespit Tutanağı Hangi Durumlarda Ge&ccedil;erli Olmaz ?</p>\r\n\r\n<p>Bazı şartlarda kaza tespit tutanağı ge&ccedil;erli olmaz. Bu durumları ise şu şekilde sıralayabiliriz:&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Kazada &ouml;l&uuml;m veya yaralanma varsa</li>\r\n	<li>Ara&ccedil;lardan en az birinde trafik sigortası yoksa</li>\r\n	<li>S&uuml;r&uuml;c&uuml;lerden en az birinde ehliyet veya ruhsat yoksa</li>\r\n	<li>S&uuml;r&uuml;c&uuml; 18 yaşın altındaysa</li>\r\n	<li>Kazaya karışan ara&ccedil;lardan biri kamuya aitse</li>\r\n	<li>S&uuml;r&uuml;c&uuml;lerin alkol veya uyuşturucu madde kullanmış olmasına dair ş&uuml;phe varsa</li>\r\n</ul>\r\n\r\n<h2>Kaza Tespit Tutanağı ile Birlikte İstenen Belgeler</h2>\r\n\r\n<p>Trafik kazasına karışan taraflarca kaza tespit tutanağı doldurulduktan sonra sigorta şirketine teslim edilir. Ancak kaza tespit tutanağı dışında sigorta şirketi tarafından istenen belgeler de bulunur. Kaza tespit tutanağına ek olarak teslim etmeniz gereken belgeler ise şunlardır:</p>\r\n\r\n<ul>\r\n	<li>Poli&ccedil;enin fotokopisi</li>\r\n	<li>Maddi hasarlı kaza tespit tutanağı</li>\r\n	<li>S&uuml;r&uuml;c&uuml;lerin ehliyet ve ruhsat fotokopileri</li>\r\n	<li>Varsa kaza yerinde &ccedil;ekilmiş fotoğraflar</li>\r\n</ul>\r\n\r\n<p>Kaza sonrasında kazaya karışan taraflarca doldurulan tutanaklar sigorta şirketlerinin hasar departmanına iletilir. Sigorta şirketleri de en ge&ccedil; 1 iş g&uuml;n&uuml; sonunda tutanağı ve varsa kaza fotoğraflarını SBM yani Sigorta Bilgi ve G&ouml;zetim Merkezi&rsquo;ne y&ouml;nlendirir.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Sigorta Bilgi ve G&ouml;zetim Merkezi sistemine giren tutanaklar, 3 iş g&uuml;n&uuml; i&ccedil;inde her bir sigorta şirketinin kendi kusur oranı değerlendirmesiyle incelenir. Şirketler tarafından aynı kusur oranları verilirse dosya sonu&ccedil;lanır ve maddi hasarlar giderilir.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Ancak 3 iş g&uuml;n&uuml;nde sigorta şirketleri kendi i&ccedil;lerinde anlaşmaya varamazsa dosya, Kaza Kusur Değerlendirme Komisyonu&rsquo;na aktarılır. Bu komisyon ise 3 iş g&uuml;n&uuml;nde dosyayı sonu&ccedil;landırır.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Dosya sonu&ccedil;landıktan sonra dosyanın sonu&ccedil;lanmasına dair tutanak sigortalıların e-posta ve SMS bilgileri bulunuyorsa iki iletişim kanalından da iletilir. Kısacası kaza tespit tutanağı, trafikte sadece maddi hasarla sonu&ccedil;lanan kazalardan sonra tarafların herhangi bir vakit kaybı yaşamadan g&uuml;ndelik hayatlarına devam etmesini sağlar.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Kaza Tespit Tutanağı Sorgulama Nasıl Yapılır?</p>\r\n\r\n<p>Kaza tespit tutanağı sorgulamasını internet &uuml;zerinden kolaylıkla yapmak m&uuml;mk&uuml;n. Online olarak kaza tespit tutanağı sorgulamak i&ccedil;in Sigorta Bilgi ve G&ouml;zetim Merkezi &uuml;zerinden e-devlet bilgileriniz ile giriş yapabilirsiniz. Giriş yaptıktan sonra plaka bilgisi ile sigortalı kişinin TC kimlik numarasını girerek kaza tespit tutanağı sorgulama işlemini yapabilirsiniz.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Ayrıca aracın kaza ve hasar ge&ccedil;mişini &ouml;ğrenmek isterseniz Sigorta Bilgi ve G&ouml;zetim Merkezi&rsquo;nin SMS servisinden yararlanabilirsiniz. Hasar ve kaza ge&ccedil;mişi bilgilerine ulaşmak i&ccedil;in aracın plakasını arada boşluk bırakmadan yazarak 5664&rsquo;e g&ouml;ndermeniz yeterli.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '7572557530891222499007389f78-878f-460e-b404-d25c1d87a12d.jpg', 2, 0, '2024-01-01 18:45:17', 'Kaza,Tutanak'),
(7, 'Araç Yakıt Tüketimini Azaltmanın 5 Yolu', '<p>&Ouml;zel ara&ccedil;lar, ulaşım i&ccedil;in en konforlu se&ccedil;eneklerden biri. Bu konforlu yolculuğun maliyetini d&uuml;ş&uuml;rmek i&ccedil;in de yakıt tasarrufu yapmak şart.&nbsp;</p>\r\n\r\n<p>&ldquo;Aracı kullanırken daha az yakıt t&uuml;ketimi yapmak m&uuml;mk&uuml;n m&uuml;?&rdquo; sorusu ise yakıt tasarrufu i&ccedil;in en merak edilen konulardan biri. Cevap verelim: Evet, m&uuml;mk&uuml;n. Dikkat edeceğiniz birka&ccedil; unsurla ara&ccedil; yakıt t&uuml;ketimini minimum seviyeye d&uuml;ş&uuml;rebilirsiniz. &ldquo;Peki, nelere dikkat edilmeli?&rdquo; diye merak ediyorsanız gelin, aracın daha fazla yakıt t&uuml;ketme nedenlerini ve yakıt tasarrufu yollarını birlikte inceleyelim.&nbsp;</p>\r\n\r\n<h2>Ara&ccedil; Hangi Durumlarda Daha &Ccedil;ok Yakıt T&uuml;ketir?&nbsp;</h2>\r\n\r\n<p>Arabayı kullanabilmek kadar aracın &ccedil;alışma prensibine de hakim olmak olduk&ccedil;a &ouml;nemli. &Ccedil;&uuml;nk&uuml; bir aracın &ccedil;alışma prensibi, g&uuml;venlikten yakıt t&uuml;ketimine kadar pek &ccedil;ok konuyu anlamanın temeli. Eğer &ldquo;Araba neden &ccedil;ok yakar?&rdquo; diye d&uuml;ş&uuml;n&uuml;yorsanız bunun nedeni, bir ara&ccedil;ta yakıt t&uuml;ketimini artıran durumları bilmemenizden kaynaklı olabilir. Bu durumları hep beraber inceleyelim:&nbsp;</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Aracın motoru zamanla yıpranabilir ve bu yıpranma nedeniyle motor daha fazla ısınır. Bu da doğrudan motorun yakıt verimliliğini etkilediği i&ccedil;in alınan yakıtın daha hızlı yanmasına sebep olur.&nbsp;&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p>&Ouml;zellikle sıcak havalarda ara&ccedil; klimaları, yolculuğun konforunu sağlamak i&ccedil;in olmazsa olmaz. Ama klimanın kullanımı, aracın daha fazla yakıt t&uuml;ketimine sebep olabilir. &Ccedil;&uuml;nk&uuml; motor ısınmadan klima a&ccedil;ılırsa soğuk motora ekstra y&uuml;k biner ve motor ısınana kadar r&ouml;lanti reg&uuml;lat&ouml;r&uuml; daha fazla yakıt t&uuml;ketmeye başlar.</p>\r\n	</li>\r\n	<li>\r\n	<p>Motor yağının kalitesi, motorun &ccedil;alışmasını ve buna bağlı olarak yakıt t&uuml;ketimini etkiler. Bu nedenle d&uuml;ş&uuml;k kaliteli bir motor yağı kullanmak, daha fazla yakıt t&uuml;ketiminin sebepleri arasında yer alır.&nbsp;&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p>T&uuml;ketilen yakıt miktarını etkileyen bir diğer unsur ise ara&ccedil;la yapılan hız. Aşırı hız yapmak, motora daha fazla y&uuml;k bindirdiği i&ccedil;in ara&ccedil; yakıt t&uuml;ketimini artırır.</p>\r\n	</li>\r\n</ul>\r\n\r\n<h2>Ara&ccedil; Yakıt T&uuml;ketimini Azaltmak İ&ccedil;in Dikkat Edilmesi Gerekenler&nbsp;</h2>\r\n\r\n<p>Ara&ccedil; yakıt t&uuml;ketimine etki eden durumlara bakıldığında daha &ccedil;ok yakıt harcanmasının sebebinin genellikle ara&ccedil; kullanımından kaynaklı olduğu g&ouml;r&uuml;l&uuml;yor. Yani s&uuml;r&uuml;ş esnasında ve ara&ccedil; bakımında dikkat edeceğiniz birka&ccedil; unsurla ara&ccedil; yakıt t&uuml;ketimini azaltmanız m&uuml;mk&uuml;n. O halde ara&ccedil; yakıt t&uuml;ketimi i&ccedil;in dikkat etmeniz gerekenleri inceleyelim.&nbsp;</p>\r\n\r\n<h3>Ara&ccedil; Bakımını İhmal Etmeyin&nbsp;</h3>\r\n\r\n<p>Yakıt tasarrufu i&ccedil;in ilk olarak dikkat etmeniz gereken konu tabii ki ara&ccedil; bakımı. D&uuml;zenli yaptırılan bakım ile ara&ccedil;ta oluşabilecek arızalara ve buna bağlı olarak yakıt harcamasına karşı &ouml;nlem alabilirsiniz.&nbsp;</p>\r\n\r\n<p>Motorun yıpranması, aracın &ccedil;alışmasını etkileyeceği gibi yakıt t&uuml;ketimini de artırır. Ancak bunun dışında kirlenmiş bujiler, tıkalı bir yağ filtresi ve hava filtresi de motorun &ccedil;alışmasını etkiler. Motorda hava akışının azalması, motor d&uuml;zg&uuml;n &ccedil;alışsa bile alınan yakıtın daha &ccedil;abuk yanmasına sebep olur.</p>\r\n\r\n<p>Ara&ccedil; bakımı esnasında dikkat etmeniz gereken bir diğer konu da motor yağı. Ara&ccedil; i&ccedil;in uygun kalitede yağ kullanılmadığında aracın pompalama yapması zorlaşır ve yakıt t&uuml;ketimi artar. Bu y&uuml;zden ara&ccedil; i&ccedil;in her zaman tavsiye edilen kalitede motor yağı kullanmak olduk&ccedil;a &ouml;nemli.&nbsp;</p>\r\n\r\n<h3>Aşırı Hız ve Ani Fren Yapmamaya &Ouml;zen G&ouml;sterin&nbsp;</h3>\r\n\r\n<p>Aşırı hız yapmak, motora ekstra y&uuml;k yaptığı i&ccedil;in daha fazla yakıt harcanmasına sebep olur. Bu duruma, bir anda hızlanmak ve frene basmak da dahil. Kısacası aracı kullanırken ani ve aşırı yapılan her t&uuml;rl&uuml; hareket, daha fazla yakıt t&uuml;ketiminin nedenidir. Hızı yavaş yavaş artırarak ve ani frenleme yerine daha yumuşak duruşlar yaparak yakıt t&uuml;ketimini dengede tutabilirsiniz.&nbsp;</p>\r\n\r\n<p>&Uuml;stelik aşırı hız yapmamak sadece yakıt t&uuml;ketimi i&ccedil;in değil, trafikte g&uuml;venli s&uuml;r&uuml;ş i&ccedil;in de olduk&ccedil;a &ouml;nemli bir konu. Bu nedenle yolculuğunuz sırasında &nbsp;dikkat ederek ara&ccedil; hızını belirlenen limitlerin &uuml;zerine &ccedil;ıkarmamanızda fayda var.&nbsp;</p>\r\n\r\n<h3>Aracı Uzun S&uuml;re R&ouml;lantide &Ccedil;alıştırmayın&nbsp;</h3>\r\n\r\n<p>Ara&ccedil; r&ouml;lantide &ccedil;alışırken motor aktif olarak &ccedil;alışmaya devam eder. Bu da ara&ccedil; hareket halinde olmasa bile yakıt t&uuml;ketmesine sebep olur.&nbsp;</p>\r\n\r\n<p>Aracın r&ouml;lantide kalma s&uuml;resi arttık&ccedil;a daha fazla yakıt t&uuml;ketilir. Bu nedenle aracı bir dakikadan fazla r&ouml;lantide bekletmemeniz gerekir. Kısa s&uuml;reli bir mola verecekseniz bile ara&ccedil; motorunu kapatarak fazla yakıt t&uuml;ketiminin &ouml;n&uuml;ne ge&ccedil;ebilirsiniz.&nbsp;</p>\r\n\r\n<h3>Klima Kullanımına Dikkat Edin&nbsp;</h3>\r\n\r\n<p>Klima kullanımı, motora y&uuml;k binmesinden kaynaklı yakıt t&uuml;ketimini etkiler. Araba hareket halinde değilken yani motor soğukken klima &ccedil;alıştırmak daha fazla yakıt t&uuml;ketimine neden olan bir durum. Daha az yakıt t&uuml;ketmek i&ccedil;in arabayı &ccedil;alıştırdığınız an klimayı a&ccedil;mak yerine &ouml;nce camları a&ccedil;ıp motor biraz ısındıktan sonra klimayı kullanabilirsiniz.&nbsp;</p>\r\n\r\n<h3>Lastik Hava Basıncını Kontrol Edin</h3>\r\n\r\n<p>Lastik hava basıncı, g&uuml;venli s&uuml;r&uuml;ş ve yakıt tasarrufu i&ccedil;in dikkat edilmesi gereken bir diğer konu. &Ccedil;&uuml;nk&uuml; azalan lastik hava basıncı ile lastiklerin yuvarlanma direnci artar. Ortaya &ccedil;ıkan enerji kaybını dengelemek i&ccedil;in motor daha fazla g&uuml;&ccedil; harcar. Bu da daha fazla yakıt t&uuml;ketimine sebep olur. Ayrıca d&uuml;ş&uuml;k hava basıncı, lastiklerin daha hızlı aşınmasına neden olacağı i&ccedil;in s&uuml;r&uuml;ş anında daha ciddi sorunlara yol a&ccedil;abilir.&nbsp;<br />\r\nT&uuml;m bu dikkat edilmesi gerekenleri uygulayarak yakıt t&uuml;ketimini minimum seviyeye d&uuml;ş&uuml;r&uuml;p maksimum yol katetmek m&uuml;mk&uuml;n. &Uuml;stelik yolculuk i&ccedil;in tercih ettiğiniz ara&ccedil;, az yakan modeller arasında ise daha &ccedil;ok tasarruf sağlayacağınız kesin.</p>\r\n', '91946268512299081223d79f95d9-4168-4b07-8b59-935b1edbd0cf.jpg', 3, 0, '2024-01-01 18:48:15', 'Yakıt,Yol');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `arac`
--

CREATE TABLE `arac` (
  `arac_id` int(11) NOT NULL,
  `arac_resim` varchar(240) NOT NULL,
  `arac_sira` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `arac`
--

INSERT INTO `arac` (`arac_id`, `arac_resim`, `arac_sira`) VALUES
(9, '842736147851928544305i20-bc3-highlights-designed-to-stand-out-m.jpg', 1),
(13, '637783728929732119886renault-clio-evolution-1-0-tce-x-tronic-90-bg-22076239880901308.jpg', 2);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayarlar`
--

CREATE TABLE `ayarlar` (
  `ayar_id` int(1) NOT NULL,
  `ayar_baslik` varchar(250) NOT NULL,
  `ayar_aciklama` text NOT NULL,
  `ayar_anahtar` varchar(400) NOT NULL,
  `ayar_logo` varchar(120) NOT NULL,
  `ayar_adres` varchar(200) NOT NULL,
  `ayar_telefon` varchar(25) NOT NULL,
  `ayar_email` varchar(80) NOT NULL,
  `ayar_facebook` varchar(150) NOT NULL,
  `ayar_instagram` varchar(150) NOT NULL,
  `ayar_youtube` varchar(150) NOT NULL,
  `ayar_twitter` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ayarlar`
--

INSERT INTO `ayarlar` (`ayar_id`, `ayar_baslik`, `ayar_aciklama`, `ayar_anahtar`, `ayar_logo`, `ayar_adres`, `ayar_telefon`, `ayar_email`, `ayar_facebook`, `ayar_instagram`, `ayar_youtube`, `ayar_twitter`) VALUES
(1, 'Özel Yeni Batman Sürücü Kursu', 'Siz de güvenli ve deneyimli bir sürücü olmak mı istiyorsunuz? Özel Yeni Batman Sürücü Kursu olarak, sürüş becerilerinizi geliştirmek ve trafik kuralları konusunda eksiksiz bir eğitim almanız için buradayız.Hizmetlerimiz:Uzman Eğitmenler: Deneyimli ve uzman eğitmenlerimiz, sürüş becerilerinizi en üst seviyeye çıkarmak için size bireysel dersler sağlarlar. Güvenli sürüşün temellerini oluştururken, trafik kuralları, yol işaretleri ve araç bakımı gibi konularda detaylı eğitim sunarlar.Esnek Programlar: Yoğun bir yaşam tarzınız mı var? Endişelenmeyin! Esnek zamanlama seçenekleriyle, sizin için en uygun eğitim programını oluşturabiliriz. Hafta içi veya hafta sonu dersleriyle size en uygun olanı seçebilirsiniz.Güvenli Sürüş Odaklı Eğitim: Önceliğimiz sizin güvenli sürüş becerilerinizi kazanmanızdır. Hem teorik hem de pratik eğitimlerle, güvenli ve sorumlu bir sürücü olmanızı sağlamak için çalışıyoruz.Modern Araçlar: Son model eğitim araçlarımızla pratik yaparak gerçek trafik deneyimi kazanabilirsiniz. Her araç, güve', 'araç,ehliyet,batman,sürücükursu', '', 'Fatih, Pir Sultan Blv. No:29, 72070 Batman Merkez/Batman', '+90 (544) 564 86 58', 'examle@gmail.com', 'https://www.facebook.com/?locale=tr_TR', 'https://www.instagram.com/', 'https://www.youtube.com/', 'https://twitter.com/');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(11) NOT NULL,
  `blog_baslik` varchar(240) NOT NULL,
  `blog_aciklama` text NOT NULL,
  `blog_resim` varchar(280) NOT NULL,
  `blog_sira` int(11) NOT NULL,
  `kullanici_id` int(11) NOT NULL,
  `blog_zaman` timestamp NOT NULL DEFAULT current_timestamp(),
  `blog_anahtarkelime` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `blog`
--

INSERT INTO `blog` (`blog_id`, `blog_baslik`, `blog_aciklama`, `blog_resim`, `blog_sira`, `kullanici_id`, `blog_zaman`, `blog_anahtarkelime`) VALUES
(8, 'Tehlikeli eğim iniş ve tehlikeli eğim çıkış ', '<p>Trafik işareti tehlikeli olduğu d&uuml;ş&uuml;n&uuml;len eğimli yollara konulur. Bu işaretler &ouml;zellikle b&uuml;y&uuml;k ara&ccedil;ların&nbsp;iniş esnasında vites d&uuml;ş&uuml;rmesi, tırmanma esnasında ise aracın uygun viteste kullanılması gerektiğini bildirir.&nbsp;Genelde iniş ve &ccedil;ıkış işaretlerinin hemen altında eğimli yolun uzunluğunun ne kadar olduğu bilgisi yer alır.</p>\r\n', '7301250312968544753015-tehlikeli-egim-inis.jpg', 1, 0, '2024-01-01 18:12:58', 'Tehlikeliegim,Tehlikelicıkıs'),
(9, 'Kasisli Yol', '<p>Hendek, kasis, &ccedil;ukur ve benzeri &uuml;st yapı bozukluklarını&nbsp;uyarmak i&ccedil;in kullanılır. Kaplama ile k&ouml;pr&uuml;ler arasındaki trafik g&uuml;venliğini tehlikeye d&uuml;ş&uuml;rebilecek&nbsp;kot farkları&nbsp;da bu işaret levhası ile bildirilebilir. Bu&nbsp;uyarıyı g&ouml;ren s&uuml;r&uuml;c&uuml;n&uuml;n hızını d&uuml;ş&uuml;rmesi gerekir.&nbsp;</p>\r\n', '86061477924519781989210-kasisli-yol.jpg', 2, 0, '2024-01-01 18:14:11', 'Kasis'),
(10, 'Kaygan Yol', '<p>Bu levha yolun&nbsp;kaygan&nbsp;olduğu bilgisini verir. S&uuml;r&uuml;c&uuml;lerin yolun durumuna g&ouml;re hızlarını ayarlamalarını, ani frenden, ani manevradan ve ani hızlanmalardan ka&ccedil;ınmaları gerekidir.</p>\r\n', '40369237894532891743811-kaygan-yol.jpg', 3, 0, '2024-01-01 18:14:49', 'kayganzemin, kayganyol'),
(11, 'Ehli Hayvan Geçebilir', '<p>Yol &uuml;zerinde&nbsp;evcil hayvan&nbsp;olabilir veya yol &uuml;zerinden evcil hayvan ge&ccedil;ebilir. Bu işaret levhasının bulunduğu yer evcil hayvanların ge&ccedil;iş noktasıdır. Yolda aynı zamanda hayvan pisliği, kir ve &ccedil;amur da olabilir. Bu nedenle yol kaygan veya y&uuml;kseltili olabilir. Hızınızı azaltınız ve dikkatli ge&ccedil;iniz.</p>\r\n', '73818217363953981082516-ehli-hayvanlar-gecebilir.jpg', 4, 0, '2024-01-01 18:15:42', 'ehlihayvan,hayvan'),
(12, 'Vahşi Hayvan Geçebilir', '<p>Yol &uuml;zerinde&nbsp;vahşi hayvan&nbsp;olabilir veya yol &uuml;zerinden vahşi hayvan ge&ccedil;ebilir. Bu işaret levhasının bulunduğu yer&nbsp;vahşi hayvanların ge&ccedil;iş noktasıdır. Yolda aynı zamanda hayvan&nbsp;pisliği, kir ve &ccedil;amur olabilir.</p>\r\n', '19888756080556814712317-vahsi-hayvanlar-gecebilir.jpg', 5, 0, '2024-01-01 18:19:19', 'vahsihayvan, hayvan'),
(13, 'Yandan Rüzgar ', '<p>Yanlardan kuvvetli r&uuml;zgarlar&nbsp;esen y&uuml;ksek k&ouml;pr&uuml;ler ve dolgular&nbsp;gibi kesimlerini belirtmek i&ccedil;in kullanılabilir. Bu işaret, s&uuml;r&uuml;c&uuml;lerin hızlarını d&uuml;ş&uuml;rmeleri ve &ouml;ndeki ara&ccedil;ları ge&ccedil;mekten ka&ccedil;ınmaları gerektiğini bildirir. R&uuml;zgarın şiddeti ara&ccedil;ların yoldan &ccedil;ıkmasına neden olabilir. Bu işareti ciddiye alınız &ccedil;&uuml;nk&uuml; y&uuml;ksek hızlarda ara&ccedil; kontrol&uuml; zorlaşır.</p>\r\n', '15461086990750564260020-yandan-ruzgar.jpg', 6, 0, '2024-01-01 18:25:34', 'rüzgar,kuvvetlirüzgar');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ekip`
--

CREATE TABLE `ekip` (
  `ekip_id` int(11) NOT NULL,
  `ekip_isim` varchar(240) NOT NULL,
  `ekip_resim` varchar(250) NOT NULL,
  `ekip_konum` varchar(200) NOT NULL,
  `ekip_aciklama` text NOT NULL,
  `ekip_facebook` varchar(240) NOT NULL,
  `ekip_instagram` varchar(240) NOT NULL,
  `ekip_youtube` varchar(240) NOT NULL,
  `ekip_sira` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ekip`
--

INSERT INTO `ekip` (`ekip_id`, `ekip_isim`, `ekip_resim`, `ekip_konum`, `ekip_aciklama`, `ekip_facebook`, `ekip_instagram`, `ekip_youtube`, `ekip_sira`) VALUES
(6, 'Enes Aydın', '52525133137802441674trainer-1.jpg', 'Sürüş Eğitmeni', '<p>Enes, trafik kurallarına olan hakimiyeti ve sakin kişiliğiyle dikkat &ccedil;eken bir s&uuml;r&uuml;ş eğitmenidir. 10 yıldan fazla deneyime sahip olan Ahmet, &ouml;ğrencilerine sadece direksiyon tutmayı &ouml;ğretmekle kalmaz, aynı zamanda trafikteki farkındalıklarını artırmalarına yardımcı olur. &Ouml;ğrencileriyle g&uuml;&ccedil;l&uuml; bir bağ kurarak onlara &ouml;zg&uuml;ven kazandırır ve trafikteki her durumu &ouml;ğretici bir deneyime d&ouml;n&uuml;şt&uuml;r&uuml;r.</p>\r\n', 'https://www.facebook.com/?locale=tr_TR', 'https://www.facebook.com/?locale=tr_TR', 'https://www.facebook.com/?locale=tr_TR', 1),
(11, 'Eyüp Şen', '917195364987042259697trainer-3.jpg', 'Teknik Destek Uzmanı ', '<p>S&uuml;r&uuml;c&uuml; kursu deneyiminizin sorunsuz ve etkili olması i&ccedil;in teknik destek ekibimizde Ey&uuml;p sizlere yardımcı olmaktan mutluluk duyar. Bilgisayar tabanlı eğitim sistemimizin sorunsuz &ccedil;alışmasını sağlamak ve &ouml;ğrencilere teknik konularda yardım etmek i&ccedil;in s&uuml;rekli olarak &ccedil;alışan Ey&uuml;p, herhangi bir sorun karşısında hızlı ve etkili &ccedil;&ouml;z&uuml;mler sunmaktadır.</p>\r\n', 'https://www.facebook.com/?locale=tr_TR', 'https://www.instagram.com/', 'https://www.youtube.com/', 2),
(14, 'Ayşe Kaya', '642853495611604537031trainer-2.jpg', 'Müşteri İlişkileri Temsilcisi', '<p>M&uuml;şteri memnuniyeti bizim i&ccedil;in &ouml;nceliktir. Ayşe, s&uuml;r&uuml;c&uuml; kursu s&uuml;reciniz boyunca karşılaştığınız her t&uuml;rl&uuml; soru, sorun veya talebe duyarlı ve hızlı bir şekilde yanıt vermek &uuml;zere buradadır. Ayşe, g&uuml;ler y&uuml;zl&uuml; ve samimi yaklaşımıyla m&uuml;şteri ilişkilerini kuvvetlendirmek ve sizlere en iyi hizmeti sunmak i&ccedil;in elinden gelenin en iyisini yapmaktadır.</p>\r\n', 'https://www.facebook.com/?locale=tr_TR', 'https://www.instagram.com/', 'https://www.youtube.com/', 3);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hakkimizda`
--

CREATE TABLE `hakkimizda` (
  `hakkimizda_id` int(11) NOT NULL,
  `hakkimizda_baslik` varchar(240) NOT NULL,
  `hakkimizda_aciklama` text NOT NULL,
  `hakkimizda_resim` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `hakkimizda`
--

INSERT INTO `hakkimizda` (`hakkimizda_id`, `hakkimizda_baslik`, `hakkimizda_aciklama`, `hakkimizda_resim`) VALUES
(1, 'Özel Yeni Batman Sürücü Kursu', '<p>Siz de g&uuml;venli ve deneyimli bir s&uuml;r&uuml;c&uuml; olmak mı istiyorsunuz? &Ouml;zel Yeni Batman S&uuml;r&uuml;c&uuml; Kursu olarak, s&uuml;r&uuml;ş becerilerinizi geliştirmek ve trafik kuralları konusunda eksiksiz bir eğitim almanız i&ccedil;in buradayız.</p>\r\n\r\n<p>Hizmetlerimiz:</p>\r\n\r\n<p>Uzman Eğitmenler: Deneyimli ve uzman eğitmenlerimiz, s&uuml;r&uuml;ş becerilerinizi en &uuml;st seviyeye &ccedil;ıkarmak i&ccedil;in size bireysel dersler sağlarlar. G&uuml;venli s&uuml;r&uuml;ş&uuml;n temellerini oluştururken, trafik kuralları, yol işaretleri ve ara&ccedil; bakımı gibi konularda detaylı eğitim sunarlar.</p>\r\n\r\n<p>Esnek Programlar: Yoğun bir yaşam tarzınız mı var? Endişelenmeyin! Esnek zamanlama se&ccedil;enekleriyle, sizin i&ccedil;in en uygun eğitim programını oluşturabiliriz. Hafta i&ccedil;i veya hafta sonu dersleriyle size en uygun olanı se&ccedil;ebilirsiniz.</p>\r\n\r\n<p>G&uuml;venli S&uuml;r&uuml;ş Odaklı Eğitim: &Ouml;nceliğimiz sizin g&uuml;venli s&uuml;r&uuml;ş becerilerinizi kazanmanızdır. Hem teorik hem de pratik eğitimlerle, g&uuml;venli ve sorumlu bir s&uuml;r&uuml;c&uuml; olmanızı sağlamak i&ccedil;in &ccedil;alışıyoruz.</p>\r\n\r\n<p>Modern Ara&ccedil;lar: Son model eğitim ara&ccedil;larımızla pratik yaparak ger&ccedil;ek trafik deneyimi kazanabilirsiniz. Her ara&ccedil;, g&uuml;venliği ve konforu &ouml;n planda tutacak şekilde &ouml;zenle bakımlıdır.</p>\r\n\r\n<p>Neden &Ouml;zel Yeni Batman S&uuml;r&uuml;c&uuml; Kursu ?</p>\r\n\r\n<p>&Ouml;zel Yeni Batman S&uuml;r&uuml;c&uuml; Kursu olarak amacımız, sadece s&uuml;r&uuml;ş yeteneklerinizi değil, aynı zamanda trafikte kendinizi ve diğer s&uuml;r&uuml;c&uuml;leri de koruyabileceğiniz bir s&uuml;r&uuml;c&uuml; olmanızı sağlamaktır. Eğitmenlerimiz, her adımda size destek olacak ve sizi trafikte başarılı bir s&uuml;r&uuml;c&uuml; yapmak i&ccedil;in &ccedil;alışacak.</p>\r\n\r\n<p>S&uuml;r&uuml;c&uuml; kursumuz, size s&uuml;r&uuml;c&uuml;l&uuml;kte g&uuml;ven ve rahatlık kazandırmak i&ccedil;in buradadır. Bizimle iletişime ge&ccedil;in ve s&uuml;r&uuml;c&uuml;l&uuml;k hayalinizi ger&ccedil;ekleştirmenize yardımcı olalım!</p>\r\n', '25579575825269081255338228177343033962410featured-03.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

CREATE TABLE `kullanici` (
  `kullanici_id` int(11) NOT NULL,
  `kullanici_adsoyad` varchar(240) NOT NULL,
  `kullanici_sifre` varchar(250) NOT NULL,
  `kullanici_email` text NOT NULL,
  `kullanici_zaman` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`kullanici_id`, `kullanici_adsoyad`, `kullanici_sifre`, `kullanici_email`, `kullanici_zaman`) VALUES
(1, 'Enes Aydın', 'e10adc3949ba59abbe56e057f20f883e', 'infoenesaydn@gmail.com', '2024-01-02 12:44:06');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(11) NOT NULL,
  `slider_baslik` varchar(240) NOT NULL,
  `slider_aciklama` text NOT NULL,
  `slider_buton` varchar(50) NOT NULL,
  `slider_link` varchar(200) NOT NULL,
  `slider_resim` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_baslik`, `slider_aciklama`, `slider_buton`, `slider_link`, `slider_resim`) VALUES
(1, 'Sürüş Becerilerinizi Geliştirin, Güvenle Ehliyet Alın ', '<p>Uzman eğitmenlerle g&uuml;venli s&uuml;r&uuml;ş&uuml; keşfedin, ehliyetinizi garantileyin!&nbsp;</p>\r\n', 'Detayları Görüntüle ', 'hakkimizda.php ', '7941630252387215938210784833856958985792ivan-aleksic-PDRFeeDniCk-unsplash.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yorumlar`
--

CREATE TABLE `yorumlar` (
  `yorum_id` int(11) NOT NULL,
  `yorum_adsoyad` varchar(100) NOT NULL,
  `yorum_detay` text NOT NULL,
  `yorum_zaman` timestamp NOT NULL DEFAULT current_timestamp(),
  `yorum_onay` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `yorumlar`
--

INSERT INTO `yorumlar` (`yorum_id`, `yorum_adsoyad`, `yorum_detay`, `yorum_zaman`, `yorum_onay`) VALUES
(71, 'Enes Aydın', 'Sürücü kursu deneyimim harikaydı! Eğitmenler çok sabırlı ve bilgiliydi. Hem teorik hem de pratik derslerde detaylı bir eğitim aldım. Sürüş testleri beni gerçek hayata hazırladı ve şimdi kendime güvenle trafiğe çıkabiliyorum. Kursun atmosferi de çok samimi ve öğrenci odaklıydı.', '2024-01-01 12:47:32', 1),
(72, 'Doğukan Boynueğrioğlu', 'Bu sürücü kursu, fiyat-performans açısından gerçekten harika bir seçenek. Eğitmenlerin tecrübesi ve ders materyalleri kaliteliydi. Ayrıca, uygun fiyatlı olması da benim için önemli bir avantajdı. Herkese tavsiye ederim.', '2024-01-01 12:47:50', 1),
(73, 'Eyüp Şen', 'Sürücü kursu, sürüşe başlamadan önce gerekli olan her şeyi içeriyordu. İlk yardım eğitiminden araç bakımına kadar geniş bir yelpazede bilgi edindim. Ayrıca, sürüş simülasyonları ve gerçek trafikteki uygulamalar sayesinde kendimi güvenli hissediyorum.', '2024-01-01 12:48:08', 1),
(74, 'Mehmet Demir İnce', 'Eğitmenler gerçekten ilgili ve profesyoneldi. Her sorumu sabırla cevapladılar ve hatalarımı düzeltmek için ellerinden geleni yaptılar. Bu, sürücü eğitimini alırken öğrenci olarak kendimi desteklenmiş hissetmemi sağladı.', '2024-01-01 12:48:30', 1),
(76, 'Can Değer ', 'Sürücü kursu, çalışan biri olarak benim için çok uygundu. Esnek ders programları sayesinde iş hayatımla uyumlu bir şekilde eğitim alabildim. Ayrıca, online derslerin bulunması da zaman yönetimi açısından büyük bir avantajdı.', '2024-01-01 12:49:35', 1);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `abone`
--
ALTER TABLE `abone`
  ADD PRIMARY KEY (`abone_id`);

--
-- Tablo için indeksler `anasayfa`
--
ALTER TABLE `anasayfa`
  ADD PRIMARY KEY (`anasayfa_id`);

--
-- Tablo için indeksler `arac`
--
ALTER TABLE `arac`
  ADD PRIMARY KEY (`arac_id`);

--
-- Tablo için indeksler `ayarlar`
--
ALTER TABLE `ayarlar`
  ADD PRIMARY KEY (`ayar_id`);

--
-- Tablo için indeksler `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Tablo için indeksler `ekip`
--
ALTER TABLE `ekip`
  ADD PRIMARY KEY (`ekip_id`);

--
-- Tablo için indeksler `hakkimizda`
--
ALTER TABLE `hakkimizda`
  ADD PRIMARY KEY (`hakkimizda_id`);

--
-- Tablo için indeksler `kullanici`
--
ALTER TABLE `kullanici`
  ADD PRIMARY KEY (`kullanici_id`);

--
-- Tablo için indeksler `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Tablo için indeksler `yorumlar`
--
ALTER TABLE `yorumlar`
  ADD PRIMARY KEY (`yorum_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `abone`
--
ALTER TABLE `abone`
  MODIFY `abone_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Tablo için AUTO_INCREMENT değeri `anasayfa`
--
ALTER TABLE `anasayfa`
  MODIFY `anasayfa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `arac`
--
ALTER TABLE `arac`
  MODIFY `arac_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Tablo için AUTO_INCREMENT değeri `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Tablo için AUTO_INCREMENT değeri `ekip`
--
ALTER TABLE `ekip`
  MODIFY `ekip_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Tablo için AUTO_INCREMENT değeri `kullanici`
--
ALTER TABLE `kullanici`
  MODIFY `kullanici_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `yorumlar`
--
ALTER TABLE `yorumlar`
  MODIFY `yorum_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
