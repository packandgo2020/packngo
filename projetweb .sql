-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 04, 2021 at 09:08 PM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projetweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `circuit`
--

DROP TABLE IF EXISTS `circuit`;
CREATE TABLE IF NOT EXISTS `circuit` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Destination` text NOT NULL,
  `depart` text NOT NULL,
  `arrivee` text NOT NULL,
  `information` text NOT NULL,
  `login` text NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `destination`
--

DROP TABLE IF EXISTS `destination`;
CREATE TABLE IF NOT EXISTS `destination` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `villeFrom` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `villeTo` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `destination`
--

INSERT INTO `destination` (`id`, `villeFrom`, `villeTo`) VALUES
(13, 'Tunis', 'Hammamet'),
(14, 'Sousse', 'Sfax');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

DROP TABLE IF EXISTS `hotel`;
CREATE TABLE IF NOT EXISTS `hotel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomhotel` varchar(255) NOT NULL,
  `etoile` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `id_destination` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`id`, `nomhotel`, `etoile`, `description`, `id_destination`) VALUES
(4, 'Hotel1', '5', 'aaaa', 13),
(5, 'Hotel2', '4', 'azaz', 14);

-- --------------------------------------------------------

--
-- Table structure for table `logement`
--

DROP TABLE IF EXISTS `logement`;
CREATE TABLE IF NOT EXISTS `logement` (
  `destination` varchar(50) NOT NULL,
  `nomhotel` varchar(50) NOT NULL,
  `jourarrivee` varchar(50) NOT NULL,
  `jourdepart` varchar(50) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numeroR` int(11) NOT NULL,
  `dateD` varchar(255) NOT NULL,
  `dateR` varchar(255) NOT NULL,
  `adult` int(11) DEFAULT NULL,
  `child` int(11) DEFAULT NULL,
  `id_vol` int(11) DEFAULT NULL,
  `id_hotel` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `numeroR`, `dateD`, `dateR`, `adult`, `child`, `id_vol`, `id_hotel`, `id_user`) VALUES
(6, 958780, '01/25/2021', '01/27/2021', 2, 2, 6, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telephone` int(11) NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `sexe` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `prenom`, `email`, `telephone`, `login`, `password`, `sexe`) VALUES
(1, 'Mohamed', 'Oueslati', 'mohamed.oueslati@esprit.tn', 784521, 'mohamed', '123', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `vols`
--

DROP TABLE IF EXISTS `vols`;
CREATE TABLE IF NOT EXISTS `vols` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_compagnie` varchar(255) NOT NULL,
  `nom_aeroport` varchar(255) NOT NULL,
  `dateD` date NOT NULL,
  `dateR` date NOT NULL,
  `etatVol` varchar(255) NOT NULL,
  `id_destination` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vols`
--

INSERT INTO `vols` (`id`, `nom_compagnie`, `nom_aeroport`, `dateD`, `dateR`, `etatVol`, `id_destination`) VALUES
(6, 'AF', 'azea', '2021-01-05', '2021-01-13', 'En Cours', 13);

-- --------------------------------------------------------

--
-- Table structure for table `voyage`
--

DROP TABLE IF EXISTS `voyage`;
CREATE TABLE IF NOT EXISTS `voyage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `destination` int(11) NOT NULL,
  `datedepart` date NOT NULL,
  `dateretour` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_USER` (`user_id`),
  KEY `FK_Destination` (`destination`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `voyage`
--
ALTER TABLE `voyage`
  ADD CONSTRAINT `FK_Destination` FOREIGN KEY (`destination`) REFERENCES `destination` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_USER` FOREIGN KEY (`user_id`) REFERENCES `utilisateur` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
