-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: db:3306
-- Generation Time: Jan 18, 2024 at 12:41 AM
-- Server version: 5.7.43
-- PHP Version: 8.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `site10`
--

-- --------------------------------------------------------

--
-- Table structure for table `livres`
--

CREATE TABLE `livres` (
  `id` int(11) NOT NULL,
  `code_barre` varchar(10) NOT NULL,
  `titre` varchar(250) NOT NULL,
  `editeur` varchar(250) NOT NULL,
  `format` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `livres`
--

INSERT INTO `livres` (`id`, `code_barre`, `titre`, `editeur`, `format`) VALUES
(1, '4397290023', 'extraordinaires aventures de Tom Scatterhorn (Les)', 'Pocket Jeunesse', '23 x 14 cm'),
(2, '3539550023', 'L\'histoire du monde', 'Larousse', '29 cm'),
(3, '4396780023', 'L\'eau des anges', 'Galapagos', '21 cm'),
(4, '4396820023', 'Quand on parle du loup', 'Castelmore', '22 cm'),
(5, '4396730023', 'étang aux libellules (L\')', 'Albin Michel-Jeunesse', '22 x 15 cm'),
(6, '4396770023', 'Avant les ténèbres', 'Galapagos', '21 cm'),
(7, '3535890023', 'Contes et récits vietnamiens', 'Delcourt jeunesse', '30 cm'),
(8, '4398930023', 'La boussole du Club des cinq', 'Hachette jeunesse', '18 cm'),
(9, '4397460023', 'Momo', 'Bayard jeunesse', '19 cm'),
(10, '3535880023', 'Contes et récits vietnamiens', 'Delcourt jeunesse', '30 cm'),
(11, '4399850023', 'Je m\'appelle pas Ben Laden !', 'Rue du monde', '27 cm'),
(12, '4396920023', 'Ogres, brigands et compagnie', 'l\'Ecole des loisirs', '29 cm'),
(13, '4396990023', 'Le cochon enchanté', 'Grasset', '29 cm'),
(14, '20001884', 'Gazette des communes,des départements,des régions (La)', '', ''),
(15, '3534280023', 'Gauchos de Patagonie', 'La Martinière', '32 cm'),
(16, '4399020023', 'A minuit', 'la Joie de lire', '14 x 30 cm'),
(17, '4398860023', 'Les cinq mènent l\'enquête', 'Hachette jeunesse', '18 cm'),
(18, '4399510023', 'Jeanne', 'le Livre de poche jeunesse', '18 cm'),
(19, '3535850023', 'Radio Nouba', 'Delcourt jeunesse', '30 cm'),
(20, '4399500023', 'Emile et les détectives', 'Le livre de poche jeunesse', '18 x 13 cm'),
(21, '3470420023', 'On voyage', 'Desclée de Brouwer', '21 cm'),
(22, '4399400023', 'Nous les filles !', 'Parragon', '20 x 17 cm'),
(23, '3535830023', 'Radio Nouba', 'Delcourt jeunesse', '30 cm'),
(24, '4399390023', 'Nous les garçons !', 'Parragon', '20 x 17 cm'),
(25, '3470410023', 'On prend des médicaments', 'Desclée de Brouwer', '21 cm'),
(26, '3470400023', 'Profession, pirate !', 'Desclée de Brouwer', '17 cm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `livres`
--
ALTER TABLE `livres`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `livres`
--
ALTER TABLE `livres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
