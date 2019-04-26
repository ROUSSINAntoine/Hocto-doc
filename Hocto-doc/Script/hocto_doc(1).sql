SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

CREATE DATABASE IF NOT EXISTS hocto'doc DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE hocto'doc;

DROP TABLE IF EXISTS account;
CREATE TABLE IF NOT EXISTS account (
  id int(11) NOT NULL AUTO_INCREMENT,
  email varchar(40) NOT NULL,
  psw varchar(20) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS patient;
CREATE TABLE IF NOT EXISTS patient (
  id int(11) NOT NULL AUTO_INCREMENT,
  firstname varchar(35) NOT NULL,
  name varchar(50) NOT NULL,
  phone_number int(10) NOT NULL,
  address varchar(60) NOT NULL,
  city varchar(40) NOT NULL,
  postcode varchar(6) NOT NULL,
  ssn varchar(16) NOT NULL,
  account int(11) NOT NULL,
  UNIQUE KEY id (id),
  KEY patient (account)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS planning;
CREATE TABLE IF NOT EXISTS planning (
  id int(11) NOT NULL AUTO_INCREMENT,
  open time NOT NULL,
  break_time time NOT NULL,
  resume time NOT NULL,
  close time NOT NULL,
  length int(2) NOT NULL,
  days varchar(60) NOT NULL,
  practitioner int(11) NOT NULL,
  PRIMARY KEY (id),
  KEY Praticien (practitioner)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS practitioner;
CREATE TABLE IF NOT EXISTS practitioner (
  id int(11) NOT NULL AUTO_INCREMENT,
  fistname varchar(30) NOT NULL,
  name varchar(30) NOT NULL,
  address varchar(60) NOT NULL,
  city varchar(30) NOT NULL,
  postcode varchar(6) NOT NULL,
  e-mail varchar(50) NOT NULL,
  phone_number int(10) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS rdv;
CREATE TABLE IF NOT EXISTS rdv (
  id int(11) NOT NULL AUTO_INCREMENT,
  dtrdv date NOT NULL,
  hrrdv time NOT NULL,
  observations text NOT NULL,
  practitioner int(11) NOT NULL,
  patient int(11) NOT NULL,
  PRIMARY KEY (id),
  KEY Patient (patient),
  KEY Praticien (practitioner)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


ALTER TABLE patient
  ADD CONSTRAINT patient_ibfk_1 FOREIGN KEY (account) REFERENCES account (id);

ALTER TABLE planning
  ADD CONSTRAINT planning_ibfk_1 FOREIGN KEY (practitioner) REFERENCES practitioner (id);

ALTER TABLE rdv
  ADD CONSTRAINT rdv_ibfk_1 FOREIGN KEY (practitioner) REFERENCES practitioner (id),
  ADD CONSTRAINT rdv_ibfk_2 FOREIGN KEY (patient) REFERENCES patient (id);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
