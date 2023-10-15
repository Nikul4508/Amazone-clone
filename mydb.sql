-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 15, 2023 at 04:27 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

DROP TABLE IF EXISTS `ads`;
CREATE TABLE IF NOT EXISTS `ads` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fname` varchar(45) NOT NULL,
  `lname` varchar(45) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(45) NOT NULL,
  `state` varchar(45) NOT NULL,
  `zip` int NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`id`, `fname`, `lname`, `address`, `city`, `state`, `zip`) VALUES
(1, 'nbk', 'kl', 'kjkbkb', 'mhb', 'GUJRAT', 363030),
(2, 'nikul', 'gohil', 'limbdi road wadhwan city', 'surendranagar', 'GUJRAT', 363030);

-- --------------------------------------------------------

--
-- Table structure for table `hp`
--

DROP TABLE IF EXISTS `hp`;
CREATE TABLE IF NOT EXISTS `hp` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `price` varchar(100) NOT NULL,
  `image` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `hp`
--

INSERT INTO `hp` (`id`, `name`, `price`, `image`) VALUES
(1, 'Samsung 301L 3 Star Convertible 5In1 Digital ', '35000', 'fd2.jpg'),
(2, 'Whirlpool 184 L 2 Star Direct-Cool Single Doo', '20000', 'fd3.jpg'),
(3, ' Lloyd 1.5 Ton 3 Star Inverter Split AC with ', '60000', 'ac1.jpg'),
(4, ' Lloyd 1.5 Ton 3 Star Inverter Split AC with ', '50000', 'ac2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `iphone`
--

DROP TABLE IF EXISTS `iphone`;
CREATE TABLE IF NOT EXISTS `iphone` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `price` varchar(100) NOT NULL,
  `image` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `idiphone_UNIQUE` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `iphone`
--

INSERT INTO `iphone` (`id`, `name`, `price`, `image`) VALUES
(1, 'iphone11 with 12mp camera ,24-hr battery backup', '23000', 'i11.jpg'),
(2, 'iphone12 with 12mp camera ,24-hr battery backup', '33000', 'i12.jpg'),
(3, 'iphone13 with 12mp camera ,24-hr battery backup', '44000', 'i14.jpg'),
(4, 'iphone14  with 12mp camera ,24-hr battery backup', '55000', 'i14p.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `macbook`
--

DROP TABLE IF EXISTS `macbook`;
CREATE TABLE IF NOT EXISTS `macbook` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `price` varchar(45) NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `idmacbook_UNIQUE` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `macbook`
--

INSERT INTO `macbook` (`id`, `name`, `price`, `image`) VALUES
(1, 'HP Pavilion Aero AMD Ryzen 7 7735U 13.3 inch(33.8cm) WUXGA IPS Micro-Edge Laptop', '49000', 'l1.jpg'),
(2, 'HP Laptop 15,13th Gen Intel Core i5-1335U, 15.6-inch (39.6 cm), FHD,16GB DDR4', '52000', 'l2.jpg'),
(3, 'Apple 2022 MacBook Air Laptop with M2 chip: 34.46 cm (13.6-inch) Liquid Retina Display', '150000', 'l3.JPG'),
(4, 'HP Laptop 15, 13th Gen Intel Core i5-1335U, 15.6-inch (39.6 cm), FHD, 16GB DDR4', '70000', 'l4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `idnews_UNIQUE` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `email`) VALUES
(1, 'gohilnikul4508@gmail.com'),
(2, 'gohilnikul4508@gmail.com'),
(3, 'gohilnikul4508@gmail.com'),
(4, 'gohilnikul4508@gmail.com'),
(5, 'hiii@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `image` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`) VALUES
(1, ' Redmi Watch EX is a stylish smartwatch with customizable watch faces, fitness tracking features', '1000', 'w1.jpg'),
(2, ' Apple Watch Series 6 is a feature-rich smartwatch that offers customizable watch faces features', '2000', 'w2.jpg'),
(3, ' Mi watch Marv Neo 1.85” (4.6 cm) Display, Bluetooth Calling Smart Watch, Smart AI Voice Assistt', '3000', 'w3.jpg'),
(4, ' Samusung watch Neo 1.85” (4.6 cm) Display, Bluetooth Calling Smart Watch, Smart AI Voice Astn', '4000', 'w4.jpg'),
(5, ' Vivo watch Neo 1.85” (4.6 cm) Display, Bluetooth Calling Smart Watch, Smart AI Voice Assistant', '5000', 'w5.jpg'),
(6, 'Realme watch ex is a stylish smartwatch with customizable watch facsesfitness tracking features', '3500', 'w6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `samsung`
--

DROP TABLE IF EXISTS `samsung`;
CREATE TABLE IF NOT EXISTS `samsung` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `price` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `samsung`
--

INSERT INTO `samsung` (`id`, `name`, `price`, `image`) VALUES
(1, 'Samsung Galaxy M34 5G (Prism Silver, 8GB, 128GB Storage) | 120Hz sAMOLED Display ', '20999', 's1.jpg'),
(2, 'Samsung Galaxy A34 5G (Awesome Violet, 8GB, 128GB Storage) | 48 MP No Shake Cam (OIS) ', '21999', 's2.jpg'),
(3, 'Samsung Galaxy S23 5G (Green, 8GB, 256GB Storage)|with 24  hr battery backup with 108 mp camera', '22999', 's3.jpg'),
(4, 'Samsung Galaxy S20 FE 5G (Cloud Mint, 8GB RAM, 128GB Storage) battery backup with 108 mp camera', '23999', 's4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

DROP TABLE IF EXISTS `user_form`;
CREATE TABLE IF NOT EXISTS `user_form` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`id`, `name`, `email`, `password`) VALUES
(22, 'nikul', 'nikulgohil4508@gmail.com', '123'),
(23, 'nikul', 'a@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `vivo`
--

DROP TABLE IF EXISTS `vivo`;
CREATE TABLE IF NOT EXISTS `vivo` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `price` varchar(45) NOT NULL,
  `image` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `vivo`
--

INSERT INTO `vivo` (`id`, `name`, `price`, `image`) VALUES
(1, 'Vivo Y100 5G (Pacific Blue, 8GB RAM, 128GB St', '15999', 'mob1.jpg'),
(2, 'Vivo Y56 5G (Orange Shimmer, 8GB RAM, 128GB S', '16999', 'mob2.jpg'),
(3, 'Vivo Y27 (Garden Green, 6GB RAM, 128GB Storag', '17999', 'mob3.jpg'),
(4, 'Redmi Note 12 5G Matte Black 4GB RAM 128GB RO', '18999', 'mob4.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
