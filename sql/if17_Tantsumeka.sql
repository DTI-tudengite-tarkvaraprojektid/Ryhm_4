-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 18, 2018 at 03:26 PM
-- Server version: 10.2.8-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `if17_Tantsumeka`
--
CREATE DATABASE IF NOT EXISTS `if17_Tantsumeka` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `if17_Tantsumeka`;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cat_id` varchar(100) NOT NULL,
  `sex` varchar(100) NOT NULL,
  `picture` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `cat_id`, `sex`, `picture`) VALUES
(1, 'Standardtants ', 'm_s', 'Meestele', ''),
(2, 'Ladina', 'm_l', 'Meestele', ''),
(3, 'Harrastustants', 'm_h', 'Meestele', ''),
(4, 'Argentiina tango', 'm_a', 'Meestele', ''),
(5, 'Treeninguks', 'm_t', 'Meestele', ''),
(6, 'Pidulikud', 'm_p', 'Meestele', ''),
(7, 'Standardtants ', 'n_s', 'Naistele', ''),
(8, 'Ladina', 'n_l', 'Naistele', ''),
(9, 'Harrastustants', 'n_h', 'Naistele', ''),
(10, 'Argentiina tango', 'n_a', 'Naistele', ''),
(11, 'Treeninguks', 'n_t', 'Naistele', ''),
(12, 'Pidulikud', 'n_p', 'Naistele', ''),
(13, 'Standardtants', 'l_s', 'Lastele', ''),
(14, 'Ladina', 'l_l', 'Lastele', ''),
(15, 'Harrastustants', 'l_h', 'Lastele', ''),
(16, 'Argentiina tango', 'l_a', 'Lastele', ''),
(17, 'Treeninguks', 'l_t', 'Lastele', ''),
(18, 'Pidulikud', 'l_p', 'Lastele', '');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL,
  `product` varchar(100) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `name` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `tel` varchar(100) NOT NULL,
  `l_leg_1` varchar(100) NOT NULL,
  `l_leg_2` varchar(100) NOT NULL,
  `l_leg_3` varchar(100) NOT NULL,
  `r_leg_1` varchar(100) NOT NULL,
  `r_leg_2` varchar(100) NOT NULL,
  `r_leg_3` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `image` longtext NOT NULL,
  `image_chosen` varchar(100) NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_estonian_ci NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `category` varchar(100) NOT NULL,
  `heel` set('5cm peenkonts','7cm peenkonts','8cm peenkonts','5cm alt laienev konst','7cm alt laienev konst','8cm alt laienev konst') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `image_chosen`, `description`, `price`, `category`, `heel`) VALUES
(1, '1000', '1.png;2.png;', '1.png', 'Vali oma kontsi', '99.00', 'n_t', '5cm peenkonts,7cm peenkonts,8cm peenkonts,5cm alt laienev konst,7cm alt laienev konst,8cm alt laienev konst'),
(2, '1002', '3.png;4.png;', '3.png', 'Vali oma kontsi', '79.00', 'm_t', '5cm peenkonts,8cm peenkonts,5cm alt laienev konst,7cm alt laienev konst,8cm alt laienev konst'),
(3, 'test', '2.png;3.png;', '2.png', 'kingadmin', '90.00', 'm_s', '5cm peenkonts'),
(5, 'test1', '4.png;1.png;', '4.png', 'kingadmin', '100.00', 'n_s;n_h;', '5cm alt laienev konst'),
(7, '1030', '2.png;', '2.png', 'Ilus', '46.78', 'n_l', '7cm alt laienev konst'),
(9, '1000', '1.png;', '1.png', 'Vali oma kontsi', '99.00', 'n_t', '5cm peenkonts,7cm peenkonts,8cm peenkonts,5cm alt laienev konst,7cm alt laienev konst,8cm alt laienev konst'),
(10, '1000', '1.png;', '1.png', 'Vali oma kontsi', '99.00', 'n_t', '5cm peenkonts,7cm peenkonts,8cm peenkonts,5cm alt laienev konst,7cm alt laienev konst,8cm alt laienev konst'),
(11, '1000', '1.png;', '1.png', 'Vali oma kontsi', '99.00', 'n_t', '5cm peenkonts,7cm peenkonts,8cm peenkonts,5cm alt laienev konst,7cm alt laienev konst,8cm alt laienev konst'),
(12, '1030', '3.png;', '3.png', 'Ilus', '46.78', 'n_l', '7cm alt laienev konst'),
(13, '1000', '1.png;', '1.png', 'Vali oma kontsi', '99.00', 'n_t', '5cm peenkonts,7cm peenkonts,8cm peenkonts,5cm alt laienev konst,7cm alt laienev konst,8cm alt laienev konst'),
(48, '768', '5b27a0e307e598.31071658.jpg;5b27a0e3083a18.81455866.jpg;5b27a0e3087e40.30325069.jpg;5b27a0e308b6d0.19609250.jpg;', '5b27a0e307e598.31071658.jpg', 'dhcjhdbv', '89.00', 'm_s', '5cm peenkonts');

-- --------------------------------------------------------

--
-- Table structure for table `sex`
--

CREATE TABLE IF NOT EXISTS `sex` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sex`
--

INSERT INTO `sex` (`id`, `name`) VALUES
(1, 'Meestele'),
(2, 'Naistele'),
(3, 'Lastele');

-- --------------------------------------------------------

--
-- Table structure for table `trainers`
--

CREATE TABLE IF NOT EXISTS `trainers` (
  `id` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `info` text CHARACTER SET utf8 COLLATE utf8_estonian_ci NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trainers`
--

INSERT INTO `trainers` (`id`, `name`, `info`, `photo`) VALUES
(1, 'Matis Toome', 'Tantsumeka juht ja tantsuõpetaja Matis Toome on tegelenud võistlustantsuga üle 25 aasta. 1995. aastal sooritas ta Eesti Tantsuõpetajate Liidus esimesed tantsuõpetaja eksamid ja alustas võistlemist Helen Klandorf-Sadamaga elukutselise võistluspaarina.Nende parimad saavutused on tantsuspordis EM 5. koht ja MM 9. koht. Tallinna Ülikoolis on ta lõpetanud baccalaureus artiumi koreograafia-tantsuõpetaja erialal ning kunstide magistriõppe koreograaf-lavastaja erialal. Matis Toome on ainus rahvusvahelise elukutselisi tantsijaid ja tantsuõpetajaid ühendava organisatsiooni (World Dance Council) tantsuõpetajate koolitaja ja eksaminaator Eestis. Eesti Olümpiakomitee poolt on talle väljastatud tähtajatu meistertreeneri kutsetunnistus. Samuti on ta Eesti Tantsuõpetajate Liidu president.', 'treener1.jpg'),
(2, 'Liina-Liis Liiv-Toome', 'Tantsumeka juht ja tantsuõpetaja Matis Toome on tegelenud võistlustantsuga üle 25 aasta. 1995. aastal sooritas ta Eesti Tantsuõpetajate Liidus esimesed tantsuõpetaja eksamid ja alustas võistlemist Helen Klandorf-Sadamaga elukutselise võistluspaarina.Nende parimad saavutused on tantsuspordis EM 5. koht ja MM 9. koht. Tallinna Ülikoolis on ta lõpetanud baccalaureus artiumi koreograafia-tantsuõpetaja erialal ning kunstide magistriõppe koreograaf-lavastaja erialal. Matis Toome on ainus rahvusvahelise elukutselisi tantsijaid ja tantsuõpetajaid ühendava organisatsiooni (World Dance Council) tantsuõpetajate koolitaja ja eksaminaator Eestis. Eesti Olümpiakomitee poolt on talle väljastatud tähtajatu meistertreeneri kutsetunnistus. Samuti on ta Eesti Tantsuõpetajate Liidu president.', 'treener2.jpg'),
(3, 'Käthe Kobin', 'Käthe Kobin on tegelenud tantsuga peaaegu kogu oma elu, alustades 4. aastasena balletitundides ning sealt edasi võistlustantsutreeningutega. Pärast aktiivset võistlustantsijakarjääri sooritas Käthe Eesti Tantsuõpetajate Liidu seltskonna-ja võistlustantsuõpetaja kutseeksami. 16. aastat töötas Käthe Taela Tantsukoolis legendaarse tantsuõpetaja Ants Taela assistenina ning jätkas seejärel Tantsumekas. ', 'treener3.jpg'),
(4, 'Elery Kiviberg', 'Elery Kiviberg alustas treeninguid lapsepõlves kujundrulluisutajana. Armastus võistlustantsu vastu tekkis Eleryl 4. klassi lõpupeol, kus esines võistlustantsupaar ja juba järgmisel nädalal läks ta esimesse tantsutundi. Elery on treeninud mitmetes tantsukoolides nii Eestis kui Soomes, sealhulgas Revalia Tantsukoolis ja Harri Antikaineni stuudios ning olnud pikka aega Matis Toome õpilane. ', 'treener4.jpg'),
(5, 'Anna Kustova', 'Anna Kustova on tegelenud võistlustantsuga alates 7. eluaastast. Kogu tema tantsijakarjäär on olnud täis huvitavaid tutvumisi, praktikat, võstlusi ja esinemisi ning see lõppes ülikooli õppima asumisega. Ülikoolis õppides alustas Anna tantsuõpetajana. Praegu tegeleb Anna enda jaoks Bailatino trennidega ning aitab kaasa ka seltskonnatantsijate õpetamisel. Tantsu õpetamine on Annale huvitav kogemus, mis annab võimaluse oma teadmisi tantsust teistega jagada. ', 'treener5.jpg'),
(6, 'Timo Alavere', 'Timo Alavere on tegelenud võistlustantsuga 9 aastat ning õppinud Matis Toome, Helen Klandorf-Sadama, Heili Klandorfi ja teiste Revalia Tantsukooli õpetajate käe all. Timo sportlaskarjäär lõppes kodupubliku ees Rakveres aastal 2011. Juba tantsusportlasena alustas Timo tantsutreeningute läbiviimist oma kodukohas Rakveres. 2014. aastal sooritas Timo edukalt Eesti Tantsuõpetajate Liidu tantsuõpetaja kutseeksami. Lisaks tantsutreeningutele Tallinnas viib Timo kursusi läbi ka kodukandis Lääne-Virumaal.  ', 'treener6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userid` int(11) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `email`, `username`, `password`) VALUES
(1, 'admin@test.com', 'admin', 'f002fcf77084319f6a56d724f55157ef0b7d3d547e1142dfc1c92da1c79daaa8c53411353fbaca1e15a86adfe347c3b79b1f38244149f6b32302fe496d717e65'),
(33, 'kasutaja@test.com', 'Nimeta Kasutaja', 'cf83e1357eefb8bdf1542850d66d8007d620e4050b5715dc83f4a921d36ce9ce47d0d13c5d85f2b0ff8318d2877eec2f63b931bd47417a81a538327af927da3e'),
(35, 'lubamata@kasutaja.com', 'kasutaja', 'f002fcf77084319f6a56d724f55157ef0b7d3d547e1142dfc1c92da1c79daaa8c53411353fbaca1e15a86adfe347c3b79b1f38244149f6b32302fe496d717e65');

-- --------------------------------------------------------

--
-- Table structure for table `WebContent`
--

CREATE TABLE IF NOT EXISTS `WebContent` (
  `postid` int(11) NOT NULL,
  `location` varchar(500) CHARACTER SET utf8 COLLATE utf8_estonian_ci NOT NULL,
  `heading` varchar(100) CHARACTER SET utf8 COLLATE utf8_estonian_ci NOT NULL,
  `content` varchar(500) CHARACTER SET utf8 COLLATE utf8_estonian_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `WebContent`
--

INSERT INTO `WebContent` (`postid`, `location`, `heading`, `content`) VALUES
(1, 'pealeht tutvustus', 'dvdsvvgggttttttttttttttttttttttt', 'ere'),
(2, 'klassika tutvustus', 'dsbjsdbcnb', 'Tere<br />\r\ndkjbfjks                                                                      ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sex`
--
ALTER TABLE `sex`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainers`
--
ALTER TABLE `trainers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `WebContent`
--
ALTER TABLE `WebContent`
  ADD PRIMARY KEY (`postid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `sex`
--
ALTER TABLE `sex`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `trainers`
--
ALTER TABLE `trainers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `WebContent`
--
ALTER TABLE `WebContent`
  MODIFY `postid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
