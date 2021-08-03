-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 03, 2021 at 09:39 AM
-- Server version: 10.3.30-MariaDB-cll-lve
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u1494123_tinggal_jualan`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_asli` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga_promo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon_detail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `title`, `harga_asli`, `harga_promo`, `description`, `image`, `icon_detail`, `created_at`, `updated_at`) VALUES
(1, 'Paket Startup Bronze', 'Paket ini ditujukan bagi Anda yang baru memulai usaha. Anda akan mendapatkan logo, kartu nama, kop surat, dan lainnya.', '3000000', '2499000', '<p><span style=\"font-family: \" times=\"\" new=\"\" roman\";\"=\"\">Paket ini ditujukan bagi Anda yang baru memulai usaha. Anda akan mendapatkan logo, kartu nama, kop surat, dan lainnya.</span></p><h5><span style=\"font-family: \" times=\"\" new=\"\" roman\";\"=\"\">Yang akan Anda dapatkan:</span></h5><ol><li style=\"text-align: left;\"><span style=\"font-size: 1rem;\">Desain Media Promosi Feed Instagram (Brosur digital ) 7 Buah *</span></li><li style=\"text-align: left;\"><span style=\"font-family: \" times=\"\" new=\"\" roman\";\"=\"\">Desain Brosur Cetak (1 buah) *</span></li><li style=\"text-align: left;\">Photography Produk 2 kali Shoot per Produk&nbsp;</li></ol><p style=\"text-align: left;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span style=\"font-size: 1rem;\">Note : *Catatan Materi isi konten sesui Breif</span></p><p></p><h5>Free :</h5><ol><li>Bonus Desain Brosur Feed Instagram 2 buah</li><li>Desain Stiker Pengiriman Online Shop&nbsp;</li></ol>', 'iconbronze.png', '1.png', '2021-04-05 19:15:37', '2021-04-15 20:35:10'),
(2, 'Paket Startup Silver', 'Paket ini ditujukan bagi Anda yang baru memulai usaha. Anda akan mendapatkan logo, kartu nama, kop surat, dan lainnya.', '4500000', '3999000', '<p class=\"MsoNormal\" style=\"margin-bottom:0.0000pt;\"><span style=\"font-family: \" times=\"\" new=\"\" roman\";=\"\" font-size:=\"\" 12pt;\"=\"\">Paket ini ditujukan bagi Anda yang baru memulai usaha. Anda akan mendapatkan logo, kartu nama, kop surat, dan lainnya.</span></p><p class=\"MsoNormal\" style=\"margin-bottom:0.0000pt;\"><br></p><h5 style=\"margin-bottom:0.0000pt;\"><span style=\"\" times=\"\" new=\"\" roman\";=\"\" font-size:=\"\" 12pt;\"=\"\">Yang akan Anda dapatkan :</span></h5><ol><li style=\"margin-bottom: 0pt;\"><span style=\"font-family: \" times=\"\" new=\"\" roman\";=\"\" font-size:=\"\" 12pt;\"=\"\">Desain Media Promosi Feed Instagram ( Brosur Digital ) 14 Buah *</span></li><li style=\"margin-bottom: 0pt;\"><span style=\"font-family: \" times=\"\" new=\"\" roman\";=\"\" font-size:=\"\" 12pt;\"=\"\">Desain Brosur Cetak ( 1 Buah ) *</span></li><li style=\"margin-bottom: 0pt;\">Photography Produk 4 kali Shoot per Produk</li></ol><p style=\"margin-bottom: 0pt;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Note :&nbsp; *Catatan maateri isi konten sesuai Breif Customer</p><p style=\"margin-bottom: 0pt;\"><br></p><h5 style=\"margin-bottom: 0pt;\">Free :</h5><ol><li style=\"margin-bottom: 0pt;\">&nbsp;Bonus Desain Brosur Feed Instagram 3 Buah *</li><li style=\"margin-bottom: 0pt;\">Desain Stiker Pengiriman Online Shop</li><li style=\"margin-bottom: 0pt;\">Desain Kartu Nama / Kartu Ucapan</li></ol><p class=\"MsoNormal\" style=\"margin-bottom:0.0000pt;\"><b><span style=\"mso-spacerun:\'yes\';font-family:Calibri;mso-bidi-font-family:\'Times New Roman\';\r\nmso-ansi-font-weight:bold;font-size:12.0000pt;\"><br></span></b><b><span style=\"mso-spacerun:\'yes\';font-family:Calibri;mso-bidi-font-family:\'Times New Roman\';\r\nmso-ansi-font-weight:bold;font-size:12.0000pt;\"><o:p></o:p></span></b></p><p class=\"MsoNormal\" style=\"margin-bottom:0.0000pt;\"><span style=\"mso-spacerun:\'yes\';font-family:Calibri;mso-bidi-font-family:\'Times New Roman\';\r\nfont-size:12.0000pt;\"><br></span><span style=\"mso-spacerun:\'yes\';font-family:Calibri;mso-bidi-font-family:\'Times New Roman\';\r\nfont-size:12.0000pt;\"><o:p></o:p></span></p>', 'iconsilver.png', '2.png', '2021-04-05 19:15:53', '2021-04-15 20:35:57'),
(3, 'Paket Startup Gold', 'Paket ini ditujukan bagi Anda yang baru memulai usaha. Anda akan mendapatkan logo, kartu nama, kop surat, dan lainnya.', '5500000', '4999000', '<p><span style=\"font-family: \" times=\"\" new=\"\" roman\";\"=\"\">Paket ini ditujukan bagi Anda yang baru memulai usaha. Anda akan mendapatkan logo, kartu nama, kop surat, dan lainnya.</span></p><span style=\"font-family: \" times=\"\" new=\"\" roman\";\"=\"\">\r\n\r\n</span><h5><span style=\"font-family: \" times=\"\" new=\"\" roman\";\"=\"\">Yang akan Anda dapatkan :</span></h5><span style=\"font-family: \" times=\"\" new=\"\" roman\";\"=\"\">\r\n</span><ol><li><span style=\"font-family: \" times=\"\" new=\"\" roman\";\"=\"\">Desain Media Promosi Feed Instagram (Brosur Digital ) 21 Buah</span></li><li><span style=\"font-family: \" times=\"\" new=\"\" roman\";\"=\"\">Desain Brosur Cetak ( 2 Buah )</span></li><li>Photography Produk 6 kali Shoot per Produk</li><li>Videography Promo Durasi 1 Menit</li></ol><p>            Note : * Catatan Materi Isi Konten Sesuai Breif Customer</p><h5>Free :</h5><ol><li>Bonus Desain Brosur Feed Instagram 3 Buah*</li><li><span style=\"font-family: \" times=\"\" new=\"\" roman\";\"=\"\">Desain Stiker Pengiriman Online Shop</span></li><li><span style=\"font-family: \" times=\"\" new=\"\" roman\";\"=\"\">Desain Kartu Nama / Kartu Ucapan</span></li></ol>', 'icongold.png', '3.png', '2021-04-15 01:41:46', '2021-04-15 20:36:29'),
(4, 'Paket Starup Platinum', 'Paket ini ditujukan bagi Anda yang baru memulai usaha. Anda akan mendapatkan logo, kartu nama, kop surat, dan lainnya.', '6500000', '5999000', '<p>Paket ini ditujukan bagi Anda yang baru memulai usaha. Anda akan mendapatkan logo, kartu nama, kop surat, dan lainnya.</p>\r\n\r\n<h5>Yang akan Anda dapatkan :</h5>\r\n<ol><li>Desain Media Promosi Feed Instagram ( Brosur Digital ) 29 Buah&nbsp;</li><li> Desain Brosur Cetak ( 1 Buah )</li><li>Photography Produk 9 kali Shoot per Produk</li><li>Videography Promo Durasi 1 menit</li><li>Videoshoot Saat Produksi dan Packing per Produk ( Tanpa Editing )</li></ol><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Note : *Catatan Materi isi Konten sesuai Breif Customer</p><h5>Free :</h5><ol><li>Bonus Desain Brosur Feed Instagram 3 Buah*</li><li><span times=\"\" new=\"\" roman\";\"=\"\">Desain Stiker Pengiriman Online Shop</span></li><li><span times=\"\" new=\"\" roman\";\"=\"\">Desain Kartu Nama / Kartu Ucapan</span></li></ol>', 'iconplatinum.png', '4.png', '2021-04-15 01:41:57', '2021-04-15 20:37:04'),
(5, 'Paket Website Company Profile', 'Paket ini ditujukan bagi Anda yang baru memulai usaha dan ingin memperkenalkan produk anda secara global dan profesional', '6500000', '6500000', '<h5><span style=\"font-family: \" times=\"\" new=\"\" roman\";\"=\"\">Fitur yang akan Anda dapatkan :</span></h5><span style=\"font-family: \" times=\"\" new=\"\" roman\";\"=\"\">\r\n\r\n</span><ol><li><span style=\"font-family: \" times=\"\" new=\"\" roman\";\"=\"\">Berlaku 1 Tahun</span></li><li><span style=\"font-family: \" times=\"\" new=\"\" roman\";\"=\"\">Search Engine Registered</span></li><li><span style=\"font-family: \" times=\"\" new=\"\" roman\";\"=\"\">Domain .com</span></li><li><span style=\"font-family: \" times=\"\" new=\"\" roman\";\"=\"\">Halaman</span></li><li><span style=\"font-family: \" times=\"\" new=\"\" roman\";\"=\"\">Disk Space 300 MB</span></li><li><span style=\"font-family: \" times=\"\" new=\"\" roman\";\"=\"\"> Bandwith 5GB</span></li><li><span style=\"font-family: \" times=\"\" new=\"\" roman\";\"=\"\"> Akun Webmail</span></li><li><span style=\"font-family: \" times=\"\" new=\"\" roman\";\"=\"\">Blog</span></li><li><span style=\"font-family: \" times=\"\" new=\"\" roman\";\"=\"\">Chat ke Whatsapp</span></li><li><span style=\"font-family: \" times=\"\" new=\"\" roman\";\"=\"\">Google Maps</span></li><li><span style=\"font-family: \" times=\"\" new=\"\" roman\";\"=\"\">Form Kontak</span></li></ol><span style=\"font-family: \" times=\"\" new=\"\" roman\";\"=\"\">\r\n\r\n</span><h5><span style=\"font-family: \" times=\"\" new=\"\" roman\";\"=\"\">PERHATIAN !</span></h5><span style=\"font-family: \" times=\"\" new=\"\" roman\";\"=\"\">\r\n</span><ul><li><span style=\"font-family: \" times=\"\" new=\"\" roman\";\"=\"\">Untuk perpanjangan domain website, Anda tidak perlu khawatir, karena website Anda selalu kami pantau, dan setiap tahunnya anda akan menerima notifikasi untuk melakukan pembayaran biaya perpanjangan domain web.</span></li></ul>', 'iconcompanyprof.png', '5.png', '2021-04-15 01:42:01', '2021-04-14 18:05:20'),
(6, 'Paket Website Toko Online', 'Paket ini ditujukan bagi Anda yang baru memulai usaha dan ingin memperkenalkan produk anda secara global dan profesional', '11500000', '11500000', '<h5><span style=\"\" times=\"\" new=\"\" roman\";\"=\"\" arial=\"\" black\";\"=\"\">Fitur yang akan Anda dapatkan :</span></h5>\r\n\r\n<ol><li>Berlaku 1 Tahun</li><li>Search Engine Registered</li><li>Domain .com</li><li>5 Halaman</li><li>Disk Space 300 MB</li><li>Bandwith 5GB</li><li>Akun Webmail</li><li>Blog</li><li>Chat ke Whatsapp</li><li>Google Maps</li><li>Form Kontak</li><li>Katalog Produk</li><li>Membership, cart, dan checkout</li><li>Cek resi</li></ol>\r\n\r\n<h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style=\"font-family: \" times=\"\" new=\"\" roman\";\"=\"\">PERHATIAN !</span></h5>\r\n<ul><li>Untuk perpanjangan domain website, Anda tidak perlu khawatir, karena website Anda selalu kami pantau, dan setiap tahunnya anda akan menerima notifikasi untuk melakukan pembayaran biaya perpanjangan domain web.</li></ul>', 'icontokoonline.png', '6.png', '2021-04-15 01:42:05', '2021-04-14 18:06:37'),
(7, 'Logo & Brand Identity Pack', 'Jangan sampai ketahuan tanpa ID Anda ! Langsung mulai bisnis anda dan dapatkan', '6000000', '6000000', '<ol><li>Exclusive Logo & kartu nama</li><li>Kop Surat & amplop</li><li>Brand guide document</li><li>Opsi konsep kreatif dari desainer</li><li>Hak cipta penuh dan file siap produksi</li></ol>', 'iconlogobe.png', '7.png', '2021-04-15 01:40:42', '2021-04-15 20:39:14'),
(8, 'Logo & brand guide', 'Perluas desain logo anda menjadao merk nyata dengan font, warna, dan gaya yang cocok terdapat dalam panduan merk', '3500000', '3500000', '<ol><li>Exclusive Logo design</li><li>Brand guide document </li><li>Opsi konsep kreatif dari desainer</li><li>Hak cipta penuh dan file siap produksi</li></ol>', 'iconlogobg.png', '8.png', '2021-04-15 01:43:07', '2021-04-15 20:39:32'),
(9, 'Photography Produk', 'include', '1400000', '1400000', '<ol><li>8 kali Shoot Foto per Produk</li><li>File Master Foto ( CD )</li><li>Free 3 kali Shoot Paket Produk&nbsp;&nbsp;&nbsp;&nbsp;</li></ol><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; *Note : Materi isi konten sesuai breif cusstomer&nbsp;<br></p>', 'iconpp.png', '9.png', NULL, '2021-04-15 20:46:46'),
(10, 'Videoshoot Produk', 'include :', '2499000', NULL, '<ol><li>Video Produksi per Produk dan Paket</li><li>Video Proses Produksi per Produk</li><li>Video Produksi Packing per Produk</li><li>File Master Video</li></ol><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Note : * Materi isi konten sesuai breif customer&nbsp;</p>', 'iconvidio.png', '10.png', NULL, '2021-04-15 20:49:07'),
(11, 'Media Promosi Digital', 'include', '1550000', NULL, '<ol><li>Desain Media Promosi Feed Instagram</li><li>( Brosur Digital ) 9 buah</li><li>File Master Desain</li><li>Free : 1 kali Shoot Paket Produk</li><li>Free : 1 kali Shoot Per Produk</li></ol><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; *Note : Materi isi konten sesuai breif customer<br></p>', 'iconmediapromosi.png', '11.png', NULL, '2021-04-15 20:51:33');

-- --------------------------------------------------------

--
-- Table structure for table `category_posts`
--

CREATE TABLE `category_posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_posts`
--

INSERT INTO `category_posts` (`id`, `name`, `jumlah`, `created_at`, `updated_at`) VALUES
(4, 'Digital Marketing', '2', '2021-05-03 17:44:55', '2021-05-03 17:48:47');

-- --------------------------------------------------------

--
-- Table structure for table `coment_blogs`
--

CREATE TABLE `coment_blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_id` int(11) NOT NULL,
  `name` varchar(90) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coment_blogs`
--

INSERT INTO `coment_blogs` (`id`, `blog_id`, `name`, `subject`, `email`, `message`, `created_at`, `updated_at`) VALUES
(16, 16, 'anzhar', 'X', 'anzharrr@yahoo.co.id', 'apaa nih ?', '2021-04-14 21:33:29', '2021-04-14 21:33:29'),
(17, 16, 'anzhar', 'D', 'anzharrr@yahoo.co.id', 'adad yang baru nih', '2021-04-14 21:34:18', '2021-04-14 21:34:18');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(16, 'anzhar', 'anzharrr@yahoo.co.id', 'X', 'dddd', '2021-04-07 00:36:07', '2021-04-07 00:36:07'),
(17, 'anzhar', 'anzharrr@yahoo.co.id', 'X', 'sss', '2021-04-07 00:45:53', '2021-04-07 00:45:53'),
(18, 'sasa', 'anzhar25@gmail.com', 'sasas', 'sasas', '2021-04-07 01:33:40', '2021-04-07 01:33:40'),
(19, 'anzhar', 'anzhar25@gmail.com', 'D', 'assas', '2021-04-07 01:35:07', '2021-04-07 01:35:07'),
(20, 'assa', 'adi@gmail.com', 'aaaa', 'cxcxc', '2021-04-07 01:55:44', '2021-04-07 01:55:44'),
(21, 'sas11', 'anzharrr@yahoo.co.id', 'ssss', 'dwssd', '2021-04-07 01:57:05', '2021-04-07 01:57:05'),
(22, 'anzhar', 'adi@gmail.com', 'dad', 'dsdsdsdd', '2021-04-07 01:57:44', '2021-04-07 01:57:44'),
(23, 'anzhar', 'adi@gmail.com', 'aaaa', 'sasa', '2021-04-07 02:17:22', '2021-04-07 02:17:22'),
(24, 'sas11', 'adi@gmail.com', 'aaaa', 'sasa', '2021-04-07 02:17:36', '2021-04-07 02:17:36'),
(25, 'assa', 'anzharrr@yahoo.co.id', 'sasas', 'assasas', '2021-04-07 02:18:04', '2021-04-07 02:18:04'),
(26, 'sas11', 'anzharrr@yahoo.co.id', 'xz', 'xzxx', '2021-04-07 02:18:23', '2021-04-07 02:18:23'),
(27, 'sas11', 'adi@gmail.com', 'sss', 'g', '2021-04-07 18:56:38', '2021-04-07 18:56:38'),
(28, 'anzhar', 'anzharrr@yahoo.co.id', 'aaaa', 's', '2021-05-03 17:33:14', '2021-05-03 17:33:14'),
(29, 'Lora Gilles', 'gilles.lora@gmail.com', 'One click Viper Leverage Traffic In 60 seconds?', 'Want to instantly tap into\r\nViper to leverage...\r\n\r\n... The World\'s First \"200-In-1\" Free Buyer Traffic App:)\r\n\r\nThis latest from Billy Darr\r\nshows you exactly how\r\n\r\n >> https://automatedtiktoktraffic.blogspot.com/\r\n\r\nOnce you see the potential \r\nwith this, you\'ll want to\r\nscale this even more\r\n\r\nGrab this for 17 bux\r\n\r\n… but act fast because\r\nprice increases with\r\neach sale\r\n\r\n>>> https://automatedtiktoktraffic.blogspot.com/\r\n\r\n\r\n\r\nAutomated TikTok Traffic\r\n\r\nP.S. For the first 35 people \r\nwho grab this today you\'ll get \r\n>>> https://automatedtiktoktraffic.blogspot.com/\r\n\r\n\r\n.\r\n..\r\n..\r\n..\r\n.\r\n..\r\n..\r\n..\r\n.\r\n.\r\n.\r\n..\r\n...\r\n...\r\n..\r\n.\r\n.\r\nUnsuscribe Here =>> https://forms.gle/xUyfSkc355Fmmkf3A', '2021-06-17 02:52:08', '2021-06-17 02:52:08'),
(30, 'Verna Eather', 'eather.verna@gmail.com', 'Host Unlimited Websites and Domains - Only $17', 'Hey ,\r\n\r\nIf you’re still paying for website hosting every month, pay close attention…\r\n\r\nBecause with the brand new HostZPresso cloud hosting platform you can now get\r\n\r\nUnlimited Website Hosting For Life - All For a Wildly Low One-Time Price.\r\n===>> https://hostzpresso.blogspot.com/\r\n\r\nBut it’s not just about big savings…\r\n\r\nThey’re raised the bar on quality with a suite of tools that instantly boosts your website performance with:\r\n\r\nUltra High-Speed Servers\r\n100% Uptime Guaranteed\r\nLightning Fast Load Speeds and Unlimited Bandwidth\r\nEnd-to-End SSL Encryption and Advanced Hacker Protection\r\n\r\nWhich means your websites will run cheaper and perform better…\r\n\r\nWithout any restrictions or limitations.\r\n\r\nIt’s like getting a Porsche for the price of a Honda.\r\n\r\nAnd don’t worry if the thought of website management makes your palms sweat with anxiety…\r\n\r\nHostZPresso’s “tech simple” Control Panel makes it easy for ANYONE to create and manage websites…\r\n\r\nEven if you‘ve never operated a website in your life.\r\n\r\nSo it’s time to say “enough” to the bloated web hosting fees that drain your profit every month!\r\n\r\nGo here now to read all the details on HostZPresso and lock in your Unlimited Hosting deal.\r\n===>> https://hostzpresso.blogspot.com/\r\n\r\nBrahma,\r\n\r\nP.S. The “Unlimited Hosting for $17” deal is only available through INSERT LAUNCH END DATE.  After that, the price goes up (pretty significantly).  Go here now to lock in your discount while you still can.\r\n\r\nP.P.S. You’ll also get these 3 Bonuses (worth $550+) when you join during the Early Bird Discount period.  Bonus #2 can be a complete game-changer in ANY online business.  Check them all out here.\r\n===>> https://hostzpresso.blogspot.com/\r\n\r\n\r\n.\r\n..\r\n..\r\n..\r\n.\r\n..\r\n..\r\n..\r\n.\r\n.\r\n.\r\n..\r\n...\r\n...\r\n..\r\n.\r\n.\r\nUnsuscribe Here =>> https://forms.gle/xUyfSkc355Fmmkf3A', '2021-07-18 21:40:19', '2021-07-18 21:40:19');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_04_05_185644_create_categories_table', 2),
(5, '2021_04_06_025321_create_orders_table', 3),
(6, '2021_04_06_030141_create_table_orders', 4),
(7, '2021_04_06_030303_create_orders_table', 5),
(8, '2021_04_07_062438_create_contacts_table', 6),
(9, '2021_04_08_035811_create_category_blogs_table', 7),
(10, '2021_04_08_035838_create_posts_table', 7),
(11, '2021_04_08_035851_create_galleries_table', 7),
(12, '2021_04_08_035910_create_category_posts_table', 7),
(13, '2021_04_08_045744_create_category_blogs_table', 8),
(14, '2021_04_08_053238_create_tag_blogs_table', 9),
(15, '2021_04_08_053552_create_blogs_table', 10),
(16, '2021_04_12_065725_create_blog_tags_table', 11),
(17, '2021_04_13_013348_create_subscribes_table', 12),
(18, '2021_04_14_023312_create_posts_table', 13),
(19, '2021_04_14_023722_create_category_posts_table', 14),
(20, '2021_04_14_023929_create_tags_table', 15),
(21, '2021_04_14_024345_create_post_tag', 16),
(22, '2021_04_14_074245_create_coment_blogs_table', 17);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_lengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paket` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `breafing` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `nama_lengkap`, `email`, `no_telp`, `paket`, `breafing`, `created_at`, `updated_at`) VALUES
(1, 'anzhar', 'asa222@gmail.com', 'sasassas', 'Digital Marketing', 'sasasas', '2021-04-05 20:15:49', '2021-04-05 20:15:49'),
(2, 'anzhar', 'anzharrr@yahoo.co.id', 'sasassas', '2', 'asass', '2021-04-05 20:16:11', '2021-04-05 20:16:11'),
(3, 'sd', 'adi@gmail.com', 'sasassas', '3', 'dadadd', '2021-04-05 20:17:48', '2021-04-05 20:17:48'),
(4, 'anzhar', 'adi@gmail.com', 'sasassas', 'Digital Marketing', 'asaasasasasas', '2021-04-06 01:29:45', '2021-04-06 01:29:45'),
(5, 'anzhar', 'adi@gmail.com', 'sasassas', 'Digital Marketing', 'hjhj', '2021-04-06 01:34:23', '2021-04-06 01:34:23'),
(6, 'anzhar', 'anzharrr@yahoo.co.id', 'assasasasas', 'Digital Marketing', 'xzzzzzzzzzzzz', '2021-04-06 01:51:59', '2021-04-06 01:51:59'),
(7, 'anzhar', 'anzharrr@yahoo.co.id', 'sasassas', 'Digital Marketing', 'dadadadad', '2021-04-06 18:49:55', '2021-04-06 18:49:55'),
(8, 'anzhar', 'anzharrr@yahoo.co.id', '089898989', 'Paket Startup Bronze', 'bagaimana bila ?', '2021-04-14 18:24:35', '2021-04-14 18:24:35');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('anzharrr@yahoo.co.id', '$2y$10$g6uF5MUpM8McPkSWlBYdMurrb3gY5yz9mIpTum4fZtW4WBcID213a', '2021-04-07 18:51:22');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `coment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `slug`, `content`, `category_id`, `image`, `deleted_at`, `coment`, `created_at`, `updated_at`) VALUES
(24, 'ini adalah judul', 'ini-adalah-judul', 'digital marketing', 4, '052021040037670_288531-programming-code-coding-PHP.jpg', NULL, '0', '2021-05-03 17:45:37', '2021-05-03 17:45:37'),
(25, 'ini adalah judul 2', 'ini-adalah-judul-2', '<h2>ggg</h2>', 4, '052021040047100_copmuters-programming-computers.jpg', NULL, '0', '2021-05-03 17:48:47', '2021-05-03 17:48:47');

-- --------------------------------------------------------

--
-- Table structure for table `post_tag`
--

CREATE TABLE `post_tag` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `tag_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_tag`
--

INSERT INTO `post_tag` (`id`, `post_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(32, 24, 3, NULL, NULL),
(33, 24, 4, NULL, NULL),
(34, 25, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subscribes`
--

CREATE TABLE `subscribes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribes`
--

INSERT INTO `subscribes` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'anzharrr@yahoo.co.id', '2021-04-12 18:43:25', '2021-04-12 18:43:25'),
(2, 'adi@gmail.com', '2021-04-12 18:45:23', '2021-04-12 18:45:23'),
(3, 'anzharrr@yahoo.co.id', '2021-04-12 18:49:07', '2021-04-12 18:49:07'),
(4, 'anzharrr@yahoo.co.id', '2021-04-13 18:25:17', '2021-04-13 18:25:17'),
(5, 'backend@laravel.com', '2021-04-13 18:58:52', '2021-04-13 18:58:52'),
(6, 'anzharrr@yahoo.co.id', '2021-04-16 00:18:43', '2021-04-16 00:18:43');

-- --------------------------------------------------------

--
-- Table structure for table `table_orders`
--

CREATE TABLE `table_orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_lengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `breafing` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tag` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `tag`, `created_at`, `updated_at`) VALUES
(3, 'digital', '2021-05-03 17:45:02', '2021-05-03 17:45:02'),
(4, 'Marketing', '2021-05-03 17:45:09', '2021-05-03 17:45:09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `google_id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, 'anzhar', 'anzharrr@yahoo.co.id', '2021-04-09 03:21:10', '$2y$10$ISLdCY5TU4SXjO9qvtsU1.BBo8zPuo.SVQeJZPN4vw9of8pkhCfOW', 'K8MZ0skJlse6Wj4ac5xunV5rBGk2CJsUpL0credobls1j21tALHQ4eHsqAcT', '2021-04-05 20:30:11', '2021-04-05 20:30:11'),
(2, 'user', NULL, 'isna', 'isna@gmail.com', '2021-04-09 03:21:37', '$2y$10$WoJVR86VKkYYigO09MYGyeooL/jHUxwsjlCP5O9/ASxVM9ab6tFXu', 'vgRUrVZHbD6cprFAavE1SCXPNVvBnjy9NTVJSC2RQPcqhOi9b0qoLX7Xpr2L', '2021-04-06 00:43:27', '2021-04-06 00:43:27'),
(3, 'user', NULL, 'IsnaediNugraha', 'isnaedi@gmail.com', '2021-04-09 03:21:47', '$2y$10$UAcj7PulFrcHUydYaX7IkO4wq1a7i4MdJBrrFw9FW.2f32BqB.0la', NULL, '2021-04-06 02:21:14', '2021-04-06 02:21:14'),
(6, NULL, NULL, 'Rusmanhadi', 'ilawdjawidjiawj@gmail.com', '2021-04-09 03:21:59', '$2y$10$O3fwOzcepCh3HG1CaRHCiea6ls9hMPryRz4Vh7t4StvufYLidndqS', NULL, '2021-04-08 02:36:07', '2021-04-08 02:36:07'),
(47, NULL, NULL, 'MICHAEL LEE', 'setiawan.hendra.733@facebook.com', NULL, '$2y$10$DEf3vs4/r8k/GAfjMN3Wd.LvlYpIfPFqcIFvFyRGXM8tLfTOyGkoK', NULL, '2021-04-13 18:55:33', '2021-04-13 18:55:33'),
(48, 'admin', NULL, 'Isnaedi Nugraha', 'alfatihnugraha28@gmail.com', NULL, '$2y$10$8aE.V4ulcTKYvYSQbr9bYuFZcdEW/ZTorwgumrjnJx/6SCaK0XAYq', NULL, '2021-04-14 21:05:25', '2021-04-14 21:05:25'),
(60, NULL, '109476800362401129012', 'Abdul Mujib', 'abdulmujib2196@gmail.com', NULL, '$2y$10$c2st.pZasTuGmTp0rwYftOUhJ7P7MzUs2TxCKoABLeYdXzi6ujLLu', NULL, '2021-05-03 22:11:24', '2021-05-03 22:11:24'),
(61, NULL, '108934988287112302860', 'Iis Nuraisyah', 'iisnuraisyah13@gmail.com', NULL, '$2y$10$09dV1xdji3fQKR2WCfYWKOEkhjjnmQwrvu/75NqdYEOfaXNnGuIsW', NULL, '2021-05-03 22:13:56', '2021-05-03 22:13:56'),
(68, NULL, NULL, 'anzhar', 'adi@gmail.com', NULL, '$2y$10$P4ZR4OWDlKOUdCFER9dJ5uBrKttvpuwqkM4MmPJWqJT5vSV7GLTze', NULL, '2021-05-04 01:12:43', '2021-05-04 01:12:43'),
(73, NULL, NULL, 'anzhar', 'admin@gmail.com', NULL, '$2y$10$T2P7vAwJ8dvsszgxKFBXwu9q/xDXYz5Ipf5Myc7lPKxqX2X1I549G', NULL, '2021-05-04 19:37:23', '2021-05-04 19:37:23'),
(81, NULL, NULL, 'Eskala Bistro', 'roz159753@gmail.com', NULL, '$2y$10$SsiP1P71TzST1Xi2pEoQ0uW7CbEleS5zFRBGHmdKdSYeUd9agziMa', NULL, '2021-05-04 20:19:10', '2021-05-04 20:19:10'),
(82, NULL, NULL, 'Eskala Bistro', 'dewaindra6970@gmail.com', NULL, '$2y$10$5aggsHSG5pyY9RCbsZdiM.kvIGbkqASM1NxPXt/Q6Byev8Q4A9Acm', NULL, '2021-05-04 20:29:59', '2021-05-04 20:29:59'),
(83, NULL, NULL, 'EskalaBistrox', 'dewaindra69705@gmail.com', NULL, '$2y$10$vM0XoMBpPHPHWHd5NMa4bu0x2istxxGF57hmQuf3Rz.2RWiQXa4Au', NULL, '2021-05-04 20:31:12', '2021-05-04 20:31:12'),
(91, NULL, NULL, 'Niagahoster Uji', 'emailtestsaya@gmail.com', NULL, '$2y$10$h2IsDOVPzIHRFYo3dE6Drul8LX2FEtI1grr4MMYj320urJTknOTO.', NULL, '2021-05-04 21:30:40', '2021-05-04 21:30:40'),
(92, NULL, NULL, 'Isnaedi Nugrahaa', 'Salwa@gmail.com', NULL, '$2y$10$nOXd6w93.DFGn8M.e55RTOSoD4pSs8QPYv6IfRuB5TMVjV6J.85o2', NULL, '2021-05-04 22:03:18', '2021-05-04 22:03:18'),
(94, NULL, NULL, 'erlia', 'rereliana@gmail.com', NULL, '$2y$10$k2pMO0EHttmpi3MDal6q.u30zW4A5y0oI/qJGoMtlDzyz7kqECSxG', NULL, '2021-05-04 22:16:38', '2021-05-04 22:16:38'),
(99, NULL, '114160679802935937126', 'anzhar nugraha', 'nugrahaanzhar98@gmail.com', NULL, '$2y$10$4BFktu4YWNjf5KxB0kqk7eCG8DxOJf6WiId8uTGohH7SpSDc7LTS2', NULL, '2021-05-05 00:42:54', '2021-05-05 00:42:54'),
(109, NULL, NULL, 'Isnaedi N', 'pesonamahameru.creative@gmail.com', '2021-05-06 18:54:40', '$2y$10$1FrZgTXWcO9Ijw41yHfiOu651CoSXi3Ub8Rq/aZx/KMlH6OslAck6', NULL, '2021-05-06 18:54:10', '2021-05-06 18:54:40'),
(110, NULL, NULL, 'anzhar', 'anzharnugraha50@gmail.com', '2021-05-06 19:50:43', '$2y$10$WU/lDbMoWv6aiDRh.VVYSORM9.uRAUGBKdQYmgxDXuB04IASM.CqG', NULL, '2021-05-06 19:50:12', '2021-05-06 19:50:43'),
(112, NULL, NULL, 'Jodi', 'jodi@gmail.com', NULL, '$2y$10$hEXCqNKsGreomn0llgQlPOy0cWCQZOT73wtkjZCi0a.ELZzyI85Ga', NULL, '2021-05-06 19:58:16', '2021-05-06 19:58:16'),
(116, NULL, '109107101732674054021', 'Anzhar Nugraha', 'anzharnugraha26@gmail.com', NULL, '$2y$10$x/BlfKeUEJ6a85JKVhin2ewzOMYFzf3ARD1WRRApU8NZlxFHQGxLy', NULL, '2021-05-23 05:00:19', '2021-05-23 05:00:19'),
(117, NULL, NULL, 'iman', 'nuriman9078@gmail.com', '2021-05-26 06:46:04', '$2y$10$rT71Cj7g0ZB7POEf.q0U0eLRRUfiYtSZUJApTNqlYxzyv0U2vk8AS', NULL, '2021-05-26 06:44:56', '2021-05-26 06:46:04'),
(118, NULL, '117974025324327683747', 'Nur Iman', 'nuriman8171@gmail.com', NULL, '$2y$10$4TmESNjLnqV2IF5L/9Jpv.LUK3mwdulIpBdcNyVtzxXfXEdR3iclK', NULL, '2021-05-26 06:51:30', '2021-05-26 06:51:30'),
(119, NULL, NULL, 'youthderma', 'youthderma@gmail.com', '2021-05-26 18:51:32', '$2y$10$YJ78P9Vu4cVx5yP4EkRv5ub.IeCd1Z5YAnccgXy9ujxcV3BLZHB1O', NULL, '2021-05-26 18:50:54', '2021-05-26 18:51:32'),
(121, NULL, '109533704478222046541', 'anzhar ayi', 'anzhar.ayi@gmail.com', '2021-06-22 19:41:55', '$2y$10$Mrctu0JTiaQBKXXnftT2E.VN4Jp1lmkXUdXAEIIQ7ZG3DldpWhGua', NULL, '2021-06-22 19:41:55', '2021-06-22 19:41:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_posts`
--
ALTER TABLE `category_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coment_blogs`
--
ALTER TABLE `coment_blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_tag`
--
ALTER TABLE `post_tag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribes`
--
ALTER TABLE `subscribes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_orders`
--
ALTER TABLE `table_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `category_posts`
--
ALTER TABLE `category_posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `coment_blogs`
--
ALTER TABLE `coment_blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `post_tag`
--
ALTER TABLE `post_tag`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `subscribes`
--
ALTER TABLE `subscribes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `table_orders`
--
ALTER TABLE `table_orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
