-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Anamakine: localhost
-- Üretim Zamanı: 10 Eyl 2019, 22:01:33
-- Sunucu sürümü: 5.6.13
-- PHP Sürümü: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `nedimmed_blog`
--
CREATE DATABASE IF NOT EXISTS `nedimmed_blog` DEFAULT CHARACTER SET utf8 COLLATE utf8_turkish_ci;
USE `nedimmed_blog`;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_adi` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `admin_sifre` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`id`, `admin_adi`, `admin_sifre`) VALUES
(1, 'admin', '1234');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `album`
--

CREATE TABLE IF NOT EXISTS `album` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adi` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=7 ;

--
-- Tablo döküm verisi `album`
--

INSERT INTO `album` (`id`, `adi`) VALUES
(1, 'Türk Sanat Müziği Gecesi'),
(2, 'Sazlardan Sesler'),
(3, 'Etkinliklerimiz'),
(4, 'Sanat '),
(5, 'deneme'),
(6, 'son');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `anasayfa_ayarlari`
--

CREATE TABLE IF NOT EXISTS `anasayfa_ayarlari` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `title_aciklama` varchar(1000) COLLATE utf8_turkish_ci DEFAULT NULL,
  `resim` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `anasayfa_ayarlari`
--

INSERT INTO `anasayfa_ayarlari` (`id`, `title`, `title_aciklama`, `resim`) VALUES
(0, 'Neşet Baba', NULL, 'bg31.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayarlar`
--

CREATE TABLE IF NOT EXISTS `ayarlar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `meta` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `telefon` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `fax` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `adres` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `maps` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `face` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `google` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `instagram` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `youtube` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `ayarlar`
--

INSERT INTO `ayarlar` (`id`, `title`, `meta`, `description`, `logo`, `telefon`, `fax`, `email`, `adres`, `maps`, `face`, `twitter`, `google`, `instagram`, `youtube`) VALUES
(1, 'Blog Sistesi', '', 'description ', '', '02165558888', '', 'demo@outlook.com', 'Yinelenen bir sayfa içeriğinin okuyucunun dikkatini dağıttığı bilinen bir gerçektir. Lorem Ipsum kullanmanın amacı, sürekli ''buraya metin gelecek, buraya metin gelecek'' yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır.', 'https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d12044.669716508719!2d29.12743295!3d40.99970845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1str!2str!4v1567620645408!5m2!1str!2str', 'https://www.facebook.com/', 'https://twitter.com/login?lang=tr', 'google', 'https://www.instagram.com/', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `blog_yazi` varchar(6000) COLLATE utf8_turkish_ci DEFAULT NULL,
  `blog_resim` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `blog_baslik` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=9 ;

--
-- Tablo döküm verisi `blog`
--

INSERT INTO `blog` (`id`, `blog_yazi`, `blog_resim`, `blog_baslik`) VALUES
(1, 'Tüm saz türleri ile ilgili gerek genel bilgileri gerekse de daha henüz internet ortamında ilk defa dile getirilen bilgileri bulabileceğiniz yazımızda, ayrıca saz fiyatları, saz türleri, saz dersi, saz kursu gibi konularda detaylı bilgilere de ulaşabilirsiniz.\r\n\r\nYazımız tümüyle sizlere saz çalma ve söz öğrenmek konularında bilgiler verirken, diğer bir yandan da en iyi İstanbul saz kursları, en iyi Ankara saz kursları hangileridir gibi yazılarımızla sizleri en iyi eğitimi alabileceğiniz kurslara yönlendirmeye çalışacağız.', 'veysel.jpg', 'saz çalmak'),
(2, 'Tüm saz türleri ile ilgili gerek genel bilgileri gerekse de daha henüz internet ortamında ilk defa dile getirilen bilgileri bulabileceğiniz yazımızda, ayrıca saz fiyatları, saz türleri, saz dersi, saz kursu gibi konularda detaylı bilgilere de ulaşabilirsiniz.\r\n\r\nYazımız tümüyle sizlere saz çalma ve söz öğrenmek konularında bilgiler verirken, diğer bir yandan da en iyi İstanbul saz kursları, en iyi Ankara saz kursları hangileridir gibi yazılarımızla sizleri en iyi eğitimi alabileceğiniz kurslara yönlendirmeye çalışacağız.', 'v1jpg.jpg', 'deneme'),
(3, 'Tüm saz türleri ile ilgili gerek genel bilgileri gerekse de daha henüz internet ortamında ilk defa dile getirilen bilgileri bulabileceğiniz yazımızda, ayrıca saz fiyatları, saz türleri, saz dersi, saz kursu gibi konularda detaylı bilgilere de ulaşabilirsiniz.\r\n\r\nYazımız tümüyle sizlere saz çalma ve söz öğrenmek konularında bilgiler verirken, diğer bir yandan da en iyi İstanbul saz kursları, en iyi Ankara saz kursları hangileridir gibi yazılarımızla sizleri en iyi eğitimi alabileceğiniz kurslara yönlendirmeye çalışacağız.', 'n.jpg', 'deneme'),
(4, 'Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500''lerden beri endüstri standardı sahte metinler olarak kullanılmıştır. Beşyüz yıl boyunca varlığını sürdürmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sıçramıştır. 1960''larda Lorem Ipsum pasajları da içeren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum sürümleri içeren masaüstü yayıncılık yazılımları ile popüler olmuştur.\r\n\r\nNeden Kullanırız?\r\nYinelenen bir sayfa içeriğinin okuyucunun dikkatini dağıttığı bilinen bir gerçektir. Lorem Ipsum kullanmanın amacı, sürekli ''buraya metin gelecek, buraya metin gelecek'' yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Şu anda birçok masaüstü yayıncılık paketi ve web sayfa düzenleyicisi, varsayılan mıgır metinler olarak Lorem Ipsum kullanmaktadır. Ayrıca arama motorlarında ''lorem ipsum'' anahtar sözcükleri ile arama yapıldığında henüz tasarım aşamasında olan çok sayıda site listelenir. Yıllar içinde, bazen kazara, bazen bilinçli olarak (örneğin mizah katılarak), çeşitli sürümleri geliştirilmiştir.', '4.jpg', 'Sanata Saygı'),
(5, '<p>sdjsdhjhsjhdjsh</p>\r\n', 'n.jpg', 'Başlık 1'),
(7, '<p>sanat sanattır.</p>\r\n', 'bg21.jpg', 'sanat gecesi');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hakkimda`
--

CREATE TABLE IF NOT EXISTS `hakkimda` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hakkimda_adi` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `hakkimda_aciklama` varchar(6000) COLLATE utf8_turkish_ci DEFAULT NULL,
  `hakkimda_resim` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `hakkimda`
--

INSERT INTO `hakkimda` (`id`, `hakkimda_adi`, `hakkimda_aciklama`, `hakkimda_resim`) VALUES
(1, 'Ben Kimim?', '<p>1500&#39;lerden beri kullanılan standart Lorem Ipsum pasajı &quot;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&quot; M.&Ouml;. 45 tarihinde &Ccedil;i&ccedil;ero tarafından yazılan &quot;de Finibus Bonorum et Malorum&quot;un 1.10.32 sayılı b&ouml;l&uuml;m&uuml; &quot;Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?&quot; 1914 tarihli H. Rackham &Ccedil;evirisi &quot;But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyon ererreeeee denememememmem</p>\r\n', 'n1.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_adi` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `menu_durum` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=7 ;

--
-- Tablo döküm verisi `menu`
--

INSERT INTO `menu` (`id`, `menu_adi`, `menu_durum`) VALUES
(1, 'Anasayfa', 'Aktif'),
(2, 'Hakkımda', 'Aktif'),
(3, 'Blog', 'Aktif'),
(4, 'Resimler', 'Aktif'),
(5, 'Videolar', 'Aktif'),
(6, 'İletişim', 'Aktif');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mesajlar`
--

CREATE TABLE IF NOT EXISTS `mesajlar` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `adsoy` varchar(55) DEFAULT NULL,
  `soyad` varchar(255) DEFAULT NULL,
  `email` varchar(55) DEFAULT NULL,
  `mesaj` varchar(255) DEFAULT NULL,
  `tarih` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `durum` varchar(15) DEFAULT 'Yeni',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT AUTO_INCREMENT=26 ;

--
-- Tablo döküm verisi `mesajlar`
--

INSERT INTO `mesajlar` (`Id`, `adsoy`, `soyad`, `email`, `mesaj`, `tarih`, `durum`) VALUES
(19, 'Angry', NULL, 'angry@angry.com', 'hbszhb jsdjz jnzsc', '2018-01-11 00:47:57', 'Yeni'),
(20, 'Lucky', NULL, 'lucky@lucky.com', 'sczx sdfsf', '2018-01-11 00:49:35', 'Yeni'),
(21, 'xvdxv', NULL, 'a@b.com', '', '2018-01-11 19:43:52', 'Okundu'),
(25, 'sa', 'as', 'asd', 'dsacs', '2019-09-10 21:48:40', 'Yeni');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `resim`
--

CREATE TABLE IF NOT EXISTS `resim` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `resim_adi` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `album_id` int(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=13 ;

--
-- Tablo döküm verisi `resim`
--

INSERT INTO `resim` (`id`, `resim_adi`, `album_id`) VALUES
(1, '2.jpg', 1),
(2, '3.jpg', 1),
(3, '4.jpg', 1),
(4, '5.jpg', 2),
(5, '6.jpeg', 2),
(6, '7.jpg', 2),
(7, 'a.png', 3),
(11, 'bg311.jpg', 3);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `video`
--

CREATE TABLE IF NOT EXISTS `video` (
  `video_id` int(11) NOT NULL AUTO_INCREMENT,
  `video_adi` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `video_link` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`video_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=6 ;

--
-- Tablo döküm verisi `video`
--

INSERT INTO `video` (`video_id`, `video_adi`, `video_link`) VALUES
(1, 'Neşet Ertaş', 'https://www.youtube.com/embed/k-AIG4Ts28s'),
(2, 'Kıvırcık Ali', 'https://www.youtube.com/embed/aCLVEm6l2Mg'),
(3, 'Saz Dinletisi', 'https://youtube.com/embed/Rn8vcGrOQ70'),
(4, 'deneme', 'https://youtube.com/embed/Rn8vcGrOQ70');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
