SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

CREATE DATABASE IF NOT EXISTS `hoctodoc` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `hoctodoc`;

DROP TABLE IF EXISTS `account`;
CREATE TABLE IF NOT EXISTS `account` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(40) NOT NULL,
  `psw` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

INSERT INTO `account` (`id`, `email`, `psw`) VALUES
(7, 'qq@gmail.com', '1');

DROP TABLE IF EXISTS `patient`;
CREATE TABLE IF NOT EXISTS `patient` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(35) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `phone_number` varchar(10) NOT NULL,
  `adrs` varchar(60) NOT NULL,
  `city` varchar(40) NOT NULL,
  `postcode` varchar(6) NOT NULL,
  `ssn` varchar(16) NOT NULL,
  `account` int(11) NOT NULL,
  UNIQUE KEY `id` (`id`),
  KEY `patient` (`account`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `planning`;
CREATE TABLE IF NOT EXISTS `planning` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `open_time` time NOT NULL,
  `break_time` time NOT NULL,
  `resume_time` time NOT NULL,
  `close_time` time NOT NULL,
  `length_time` int(2) NOT NULL,
  `days_time` varchar(60) NOT NULL,
  `start_hollyday` date NOT NULL,
  `end_hollyday` date NOT NULL,
  `practitioner` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Praticien` (`practitioner`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `practitioner`;
CREATE TABLE IF NOT EXISTS `practitioner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `adrs` varchar(60) NOT NULL,
  `city` varchar(30) NOT NULL,
  `postcode` varchar(6) NOT NULL,
  `e_mail` varchar(50) NOT NULL,
  `phone_number` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO `practitioner` (`id`, `firstname`, `lastname`, `password`, `adrs`, `city`, `postcode`, `e_mail`, `phone_number`) VALUES
(1, 'Jean', 'Luc', '', '30 rue des cygognes', 'Chilly-Mazarin', '91380', 'docluc@orange.fr', '607080910');

DROP TABLE IF EXISTS `rdv`;
CREATE TABLE IF NOT EXISTS `rdv` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dtrdv` date NOT NULL,
  `hrrdv` time NOT NULL,
  `observations` text NOT NULL,
  `practitioner` int(11) NOT NULL,
  `patient` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Patient` (`patient`),
  KEY `Praticien` (`practitioner`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


ALTER TABLE `patient`
  ADD CONSTRAINT `patient_ibfk_1` FOREIGN KEY (`account`) REFERENCES `account` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `planning`
  ADD CONSTRAINT `planning_ibfk_1` FOREIGN KEY (`practitioner`) REFERENCES `practitioner` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `rdv`
  ADD CONSTRAINT `rdv_ibfk_1` FOREIGN KEY (`practitioner`) REFERENCES `practitioner` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rdv_ibfk_2` FOREIGN KEY (`patient`) REFERENCES `patient` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
