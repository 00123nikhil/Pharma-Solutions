-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2020 at 05:06 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pharma`
--

-- --------------------------------------------------------

--
-- Table structure for table `medata`
--

CREATE TABLE `medata` (
  `medid` int(10) NOT NULL,
  `qty` int(5) NOT NULL,
  `free` int(3) NOT NULL,
  `medname` varchar(40) NOT NULL,
  `pkg` int(10) NOT NULL,
  `mfg` varchar(10) NOT NULL,
  `batch` varchar(20) NOT NULL,
  `expdate` date NOT NULL,
  `hsn` int(5) NOT NULL,
  `mrp` decimal(10,2) NOT NULL,
  `rate` decimal(10,2) NOT NULL,
  `dis` decimal(10,2) NOT NULL,
  `SGST` decimal(10,2) NOT NULL,
  `CGST` decimal(10,2) NOT NULL,
  `amount` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medata`
--

INSERT INTO `medata` (`medid`, `qty`, `free`, `medname`, `pkg`, `mfg`, `batch`, `expdate`, `hsn`, `mrp`, `rate`, `dis`, `SGST`, `CGST`, `amount`) VALUES
(1, 40, 0, 'HCG CARD 1PIECE', 1, 'ALK', 'PMHG19060', '2022-05-01', 3004, '60.00', '14.00', '0.00', '6.00', '6.00', '560.00'),
(2, 1, 0, 'BORIC ACID I.P. 400GM', 1, 'AMA', '10', '2022-07-01', 2810, '150.00', '66.00', '0.00', '9.00', '9.00', '66.00'),
(3, 3, 0, 'BORIC ACID 200GM', 1, 'BHA', '04', '2021-01-01', 2810, '90.00', '37.00', '0.00', '9.00', '9.00', '111.00'),
(4, 1, 0, 'EXAMINATION GLOVES M 100\'S', 100, 'NUL', 'T0775H', '2021-09-01', 3004, '600.00', '185.00', '0.00', '12.00', '12.00', '185.00'),
(5, 5, 0, 'ACEMIZ-MR TAB 10\'TAB', 10, 'LUP', 'AT012329', '2021-02-01', 3004, '82.50', '18.00', '0.00', '6.00', '6.00', '90.00'),
(6, 1, 0, 'OMNIGEL 75GM', 1, 'CIP', 'K9151', '2020-12-01', 3004, '205.00', '92.00', '0.00', '6.00', '6.00', '92.00'),
(7, 5, 1, 'ALONIM-P GOLDEN 1*15', 15, 'ALL', '93028', '2022-02-01', 3004, '70.00', '13.00', '0.00', '6.00', '6.00', '65.00'),
(8, 3, 0, 'AMOXYCLAV 375 TAB 1*10', 10, 'ABB', '1009682', '2021-07-01', 3004, '268.18', '62.00', '0.00', '6.00', '6.00', '186.00'),
(9, 20, 0, 'COFSILS 10\'S POUCH STRIP', 10, 'SUR', 'M690219', '2022-08-01', 3004, '25.00', '17.00', '0.00', '6.00', '6.00', '340.00'),
(10, 10, 0, 'NICIP -100 TAB', 10, 'CIP', 'B590014', '2021-12-01', 3004, '39.50', '4.50', '0.00', '6.00', '6.00', '45.00'),
(11, 1, 0, 'CEFABLAST 500MG TAB', 10, 'MAN', '9063A006', '2021-07-01', 3004, '465.80', '155.00', '0.00', '6.00', '6.00', '155.00'),
(12, 10, 2, 'BAJRANG LEP 10GM', 1, 'BHA', '01', '2022-07-01', 3004, '20.00', '16.25', '0.00', '6.00', '6.00', '162.50'),
(13, 30, 0, 'ORS 21GM', 1, 'CIP', 'AC9272', '2022-07-01', 3004, '19.08', '5.10', '0.00', '2.50', '2.50', '135.00'),
(14, 5, 0, 'OMEE CAP 15\'S', 15, 'ALK', '19280827', '2021-04-01', 3004, '52.31', '16.65', '0.00', '6.00', '6.00', '25.00'),
(15, 1, 0, 'BANDAGE 15CM*3M', 1, 'GS', '12', '2022-02-01', 3004, '240.00', '78.00', '0.00', '6.00', '6.00', '78.00'),
(16, 10, 2, 'DIKAMALI POWDER 5GM', 1, 'BOM', 'TM/62', '2022-02-01', 4090, '10.00', '8.75', '0.00', '2.50', '2.50', '87.50'),
(17, 2, 0, 'UVEE CREAM 25GM', 1, 'GEN', '45', '2022-06-01', 4014, '55.00', '24.00', '0.00', '9.00', '9.00', '48.00'),
(18, 3, 0, 'VENTORANZ DX 60ML', 1, 'ALK', '1928112', '2021-07-01', 3004, '41.00', '18.80', '0.00', '6.00', '6.00', '56.40'),
(19, 2, 0, 'JIVAN MIXTURE 60ML', 1, 'JAV', 'JJM327', '2022-06-01', 3004, '80.00', '59.00', '0.00', '6.00', '6.00', '118.00'),
(20, 5, 0, 'ZENORA 200 YELLOW TAB 1*10', 10, 'MED', 'AT-06119', '2022-03-01', 3004, '56.80', '10.00', '0.00', '6.00', '6.00', '50.00'),
(21, 14, 0, 'SCALP 22 HMD 50\'S', 50, 'HM', '941342', '2022-09-01', 3004, '14.00', '5.50', '0.00', '6.00', '6.00', '77.00'),
(22, 2, 0, 'ALMOX-500 CAP 10CAP', 10, 'ALK', '19281094', '2021-07-01', 3004, '67.87', '26.25', '0.00', '6.00', '6.00', '52.50'),
(23, 5, 0, 'FACER-MR TAB', 10, 'EMC', 'EPD2AD8001', '2021-01-01', 3004, '74.80', '13.25', '0.00', '6.00', '6.00', '66.25'),
(24, 2, 0, 'NIDU 100 TAB', 15, 'BOM', 'NS009', '2020-04-01', 3004, '67.50', '3.50', '0.00', '6.00', '6.00', '7.00'),
(25, 5, 0, 'ALDIGESIC-SP TAB', 10, 'ALK', 'AST9087', '2021-06-01', 3004, '112.00', '19.25', '0.00', '6.00', '6.00', '96.25'),
(26, 3, 0, 'QMAX OZ 10TAB ', 10, 'ALK', 'QMOT19022S', '2021-05-01', 3004, '121.00', '20.00', '0.00', '6.00', '6.00', '60.00'),
(27, 5, 0, 'NOREX 400 TAB ', 10, 'CEN', '1902', '2021-05-01', 3004, '50.00', '16.25', '0.00', '6.00', '6.00', '81.25'),
(28, 4, 0, 'CIPZEN-D TAB ', 10, 'CIP', 'B680650', '2020-08-01', 3004, '108.00', '17.00', '0.00', '6.00', '6.00', '68.00'),
(29, 1, 0, 'TRANOST MF TAB', 10, 'AUS', 'B479001', '2021-05-01', 9018, '215.00', '88.00', '0.00', '6.00', '6.00', '88.00'),
(30, 5, 0, 'N-FLOX TZ TAB', 10, 'GOP', 'INTT105', '2021-08-01', 3004, '90.75', '22.25', '0.00', '6.00', '6.00', '111.25'),
(31, 2, 0, 'PANTAFOL DSR CAP', 10, 'LEE', '4009009', '2021-06-01', 3004, '86.90', '24.00', '0.00', '6.00', '6.00', '48.00'),
(32, 1, 0, 'ETOFORD -90 TAB', 10, 'LEE', '4369002', '2021-02-01', 9018, '95.00', '28.00', '0.00', '6.00', '6.00', '28.00'),
(33, 5, 0, 'DICOLOIV-AQ 1ML', 1, 'IND', 'BDLA115', '2020-06-01', 9018, '15.29', '3.50', '0.00', '6.00', '6.00', '17.50'),
(34, 5, 0, 'BIOPRON TAB', 10, 'LEE', '425002', '2021-05-01', 3004, '16.00', '2.40', '0.00', '6.00', '6.00', '12.00'),
(35, 3, 0, 'AZICIP 500 TAB', 3, 'CIP', '0790313', '2022-08-01', 3004, '70.02', '29.90', '0.00', '6.00', '6.00', '89.70'),
(36, 1, 0, 'TERABET CREAM 20GM', 1, 'LEE', 'DLQM9004', '2021-02-01', 0, '58.00', '13.00', '0.00', '6.00', '6.00', '13.00'),
(37, 10, 0, 'BACTIGAUZE STERILE 10*10CM 1PIECE', 10, 'SUR', 'BG19006', '2022-05-01', 3004, '85.00', '10.00', '0.00', '6.00', '6.00', '100.00'),
(38, 3, 0, 'PET SAFA GRANULES 60GM', 1, 'GEN', 'PSF19136', '2022-08-01', 3004, '48.00', '36.43', '0.00', '6.00', '6.00', '109.29'),
(39, 2, 0, 'TOREX EXP 100ML', 1, 'TOR', 'B6019004', '2020-12-01', 3004, '99.00', '63.00', '0.00', '6.00', '6.00', '126.00'),
(40, 2, 0, 'CYLIP P SY 200ML', 1, 'TOR', 'B7819004', '2021-04-01', 3004, '90.00', '40.00', '0.00', '6.00', '6.00', '80.00'),
(41, 5, 0, 'MEDSETRON INJ 2ML', 1, 'MED', 'LIO645', '2020-11-01', 3004, '12.00', '3.20', '0.00', '6.00', '6.00', '16.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `medata`
--
ALTER TABLE `medata`
  ADD PRIMARY KEY (`medid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `medata`
--
ALTER TABLE `medata`
  MODIFY `medid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;


--
-- Metadata
--
USE `phpmyadmin`;

--
-- Metadata for table medata
--
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
