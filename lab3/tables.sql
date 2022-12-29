-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: fdb32.awardspace.net
-- Generation Time: Dec 29, 2022 at 02:07 AM
-- Server version: 5.7.20-log
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `4140962_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `lab3_products`
--

CREATE TABLE `lab3_products` (
  `id` int(11) NOT NULL,
  `short_name` varchar(40) NOT NULL,
  `name` varchar(200) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `available_quantity` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lab3_products`
--

INSERT INTO `lab3_products` (`id`, `short_name`, `name`, `price`, `available_quantity`) VALUES
(1, 'Acer 311', 'Acer 311 Spin 11,6\" Écran tactile Chromebook, MT-81813 2 GHz, 4 Go de RAM, 64 Go de stockage', '219.99', 25),
(2, 'Acer CB314-1H-C9XV', 'Acer Chromebook CB314-1H-C9XV Écran 14\" RAM 4 Go eMMC Chrome OS Argenté', '199.99', 12),
(3, 'Samsung Chromebook 4', 'Samsung Chromebook 4 Chrome OS 11,6\" HD Intel Celeron Processeur N4000 4 Go RAM 32 Go eMMC Gigabit Wi-Fi XE310XBA-K01US', '199.00', 45),
(4, 'Lenovo Chromebook Duet 5', 'Lenovo Chromebook Duet 5, 4 GB RAM,  64 GB Storage', '250.00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `lab3_product_features`
--

CREATE TABLE `lab3_product_features` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `feature` varchar(400) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lab3_product_features`
--

INSERT INTO `lab3_product_features` (`id`, `product_id`, `feature`) VALUES
(1, 1, 'Intel Celeron N4020 Processeur Dual-Core (jusqu\'à 2,8 GHz)'),
(2, 1, 'Écran HD rétroéclairé ComfyView de 14 pouces. Type d\'écran : LCD'),
(3, 1, '4 Go de mémoire LPDDR4 intégrée et 64 Go eMMC'),
(4, 2, 'Intel Celeron N4020 Processeur Dual-Core (jusqu\'à 2,8 GHz)'),
(5, 2, 'Écran HD rétroéclairé ComfyView de 14 pouces. Type d\'écran : LCD'),
(6, 2, '4 Go de mémoire LPDDR4 intégrée et 64 Go eMMC'),
(7, 2, 'Intel Wireless-AC 9560 802.11ac Gigabit WiFi avec technologie MU-MIMO 2 x 2 qui peut fournir un débit jusqu\'à 1,73 Gbit/s lors de l\'utilisation de canaux 160 MHz (double bande 2,4 GHz et 5 GHz)'),
(8, 2, '2 ports USB de type C USB 3.1 Gen 1 (jusqu\'à 5 Gbit/s) DisplayPort sur USB Type-C et chargement USB et 2 ports USB 3.2 Gen 1'),
(9, 3, 'Design compact et léger avec 11. Écran 6\"'),
(10, 3, 'Durabilité de qualité militaire'),
(11, 3, 'Connectivité ultra-rapide avec Wi-Fi Gigabit'),
(12, 3, 'Sécurité avancée avec plusieurs couches de protection contre les virus intégrée'),
(13, 3, '12.5 heures d\'autonomie'),
(14, 3, 'Assistant Google activé'),
(15, 3, 'Plus d\'espace pour ce qui compte. Obtenez Google One avec 200 Go de stockage dans le cloud pendant 12 mois lorsque vous achetez un nouveau Samsung Chromebook. Profitez de beaucoup d\'espace pour tous vos fichiers, photos et plus encore. Échanger l\'offre jusqu\'au 31/01/22'),
(16, 4, '13-inch Chrome OS tablet'),
(17, 4, 'Kickstand and detachable keyboard');

-- --------------------------------------------------------

--
-- Table structure for table `lab3_users`
--

CREATE TABLE `lab3_users` (
  `userId` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lab3_users`
--

INSERT INTO `lab3_users` (`userId`, `username`, `password`) VALUES
(0, 'Jean', '1234'),
(1, 'Jacques', '2345'),
(2, 'Paul', '4567');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lab3_products`
--
ALTER TABLE `lab3_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lab3_product_features`
--
ALTER TABLE `lab3_product_features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lab3_users`
--
ALTER TABLE `lab3_users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lab3_products`
--
ALTER TABLE `lab3_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `lab3_product_features`
--
ALTER TABLE `lab3_product_features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `lab3_users`
--
ALTER TABLE `lab3_users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
