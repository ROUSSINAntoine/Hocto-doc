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
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

INSERT INTO `account` (`id`, `email`, `psw`) VALUES
(15, 'qq@gmail.com', '4562'),
(16, 'titi@gmail.com', '4562');

DROP TABLE IF EXISTS `hollyday`;
CREATE TABLE IF NOT EXISTS `hollyday` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `start_hollyday` date NOT NULL,
  `end_hollyday` date NOT NULL,
  `practitioner` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `practitioner` (`practitioner`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

INSERT INTO `patient` (`id`, `firstname`, `lastname`, `phone_number`, `adrs`, `city`, `postcode`, `ssn`, `account`) VALUES
(24, 'ROUSSIN', 'Antoine', '0619580110', 'qdssd', 'qqsd', '01234', '111111111111111', 15),
(25, 'Antoine', 'ROUSSIN', '0619580110', 'qsdqsd', 'qsdqsd', '01234', '111111111111111', 16),
(26, 'Thibault', 'Qsd', '0123456789', 'qsdqsd', 'qsqsd', '01123', '111111111111111', 16);

DROP TABLE IF EXISTS `planning2`;
CREATE TABLE IF NOT EXISTS `planning2` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `open_time` time NOT NULL,
  `break_time` time NOT NULL,
  `resume_time` time NOT NULL,
  `close_time` time NOT NULL,
  `day_time` varchar(10) NOT NULL,
  `disabled` tinyint(4) NOT NULL DEFAULT '0',
  `practitioner` int(11) NOT NULL,
  `length_time` int(2) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `practitioner` (`practitioner`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

INSERT INTO `planning2` (`id`, `open_time`, `break_time`, `resume_time`, `close_time`, `day_time`, `disabled`, `practitioner`, `length_time`) VALUES
(1, '05:56:00', '05:45:00', '04:59:00', '03:32:00', 'lundi', 0, 1, 33),
(2, '00:00:00', '10:00:00', '12:00:00', '16:35:00', 'mardi', 0, 1, 25),
(3, '01:54:00', '06:54:00', '04:21:00', '03:21:00', 'mercredi', 0, 1, 57),
(4, '05:00:00', '07:00:00', '10:00:00', '12:00:00', 'jeudi', 0, 1, 0),
(5, '05:00:00', '07:00:00', '10:00:00', '12:00:00', 'vendredi', 0, 1, 0),
(6, '05:00:00', '07:00:00', '10:00:00', '12:00:00', 'samedi', 0, 1, 0),
(11, '05:04:00', '03:02:00', '01:00:00', '10:54:00', 'dimanche', 0, 1, 56);

DROP TABLE IF EXISTS `practitioner`;
CREATE TABLE IF NOT EXISTS `practitioner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(30) DEFAULT NULL,
  `lastname` varchar(30) DEFAULT NULL,
  `psw` varchar(30) DEFAULT NULL,
  `adrs` varchar(60) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `postcode` varchar(6) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone_number` varchar(10) DEFAULT NULL,
  `available` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO `practitioner` (`id`, `firstname`, `lastname`, `psw`, `adrs`, `city`, `postcode`, `email`, `phone_number`, `available`) VALUES
(1, 'Jean', 'Luc', '1', '24 rue leon hourlier', 'rueil-malmaison', '92500', 'docluc@orange.fr', '607080910', 1);

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO `rdv` (`id`, `dtrdv`, `hrrdv`, `observations`, `practitioner`, `patient`) VALUES
(1, '2019-06-18', '19:00:00', '', 1, 25),
(2, '2019-06-11', '00:00:03', '', 1, 26);


ALTER TABLE `hollyday`
  ADD CONSTRAINT `hollyday_ibfk_1` FOREIGN KEY (`practitioner`) REFERENCES `practitioner` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `patient`
  ADD CONSTRAINT `patient_ibfk_1` FOREIGN KEY (`account`) REFERENCES `account` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `planning2`
  ADD CONSTRAINT `planning2_ibfk_1` FOREIGN KEY (`practitioner`) REFERENCES `practitioner` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `rdv`
  ADD CONSTRAINT `rdv_ibfk_1` FOREIGN KEY (`practitioner`) REFERENCES `practitioner` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rdv_ibfk_2` FOREIGN KEY (`patient`) REFERENCES `patient` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
