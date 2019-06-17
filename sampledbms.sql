-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2018 at 11:39 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sampledbms`
--

-- --------------------------------------------------------

--
-- Table structure for table `accesories`
--

CREATE TABLE `accesories` (
  `partid` int(11) NOT NULL,
  `name` tinytext NOT NULL,
  `brand` tinytext NOT NULL,
  `price` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accesories`
--

INSERT INTO `accesories` (`partid`, `name`, `brand`, `price`) VALUES
(5001, 'K881 Mechanical Keyboard', 'Redragon', '3500'),
(5002, 'Wireless Keyboard', 'Dell', '1200'),
(5003, 'Chroma RGB Mechanical Keyboard', 'Razer', '12000'),
(5004, 'Wireless 2.4GHz Mouse', 'Dell', '700'),
(5005, 'G402 Gaming Mouse', 'Logitech', '2400'),
(5006, 'Gladius Optical Gaming Mouse', 'Asus', '8000'),
(5007, 'Large Mousepad', 'Generic', '200'),
(5008, 'Gigantus XXXL Gaming Mousepad', 'Razer', '3000'),
(5009, 'Headphone with Mic', 'Logitech', '1000'),
(5010, 'Cloud Alpha Pro Gaming Headphone', 'HyperX', '7500');

-- --------------------------------------------------------

--
-- Table structure for table `allparts`
--

CREATE TABLE `allparts` (
  `partid` int(11) NOT NULL DEFAULT '0',
  `name` tinytext,
  `brand` tinytext,
  `price` tinytext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allparts`
--

INSERT INTO `allparts` (`partid`, `name`, `brand`, `price`) VALUES
(1001, '7600K', 'Intel', '21000'),
(1002, '7700K', 'Intel', '24000'),
(1003, '8600K', 'Intel', '27000'),
(1004, '8700K', 'Intel', '30000'),
(1005, '1700X', 'AMD', '16000'),
(1006, '1800X', 'AMD', '20000'),
(1007, '2700X', 'AMD', '19000'),
(1008, '2800X', 'AMD', '26000'),
(1009, '1920X', 'AMD', '45000'),
(1010, '1950X', 'AMD', '65000'),
(2001, 'ROG Strix Z370-E', 'Asus', '16000'),
(2002, 'Prime Z370-A', 'Asus', '8000'),
(2003, 'Z370-A Pro', 'MSI', '12000'),
(2004, 'B350 PC Mate', 'MSI', '6000'),
(2005, 'B450 Tomahawk', 'MSI', '8000'),
(2006, 'Prime X470-Pro', 'Asus', '13500'),
(2007, 'ROG Strix X470-I GAMING', 'Asus', '15500'),
(2008, 'ROG Zenith Extreme', 'Asus', '40000'),
(2009, 'X399M Taichi', 'ASRock', '23500'),
(2010, 'X399 Designare EX', 'Gigabyte', '28400'),
(3001, 'Vengeance LPX', 'Corsair', '9000'),
(3002, 'Vengeance LPX', 'Corsair', '4000'),
(3003, 'Trident Z RGB', 'G.Skill', '14000'),
(3004, 'Ripjaws V Series', 'G.Skill', '9500'),
(3005, 'Ripjaws V Series', 'G.Skill', '5000'),
(3006, 'Aegis', 'G.Skill', '4700'),
(3007, 'Aegis', 'G.Skill', '9600'),
(3008, 'Vengeance RGB Pro', 'Corsair', '11500'),
(3009, 'Vengeance RGB Pro', 'Corsair', '12000'),
(3010, 'HyperX Fury Black', 'Kingston', '5300'),
(4001, 'GTX 1050 Aero ITX', 'MSI', '8500'),
(4002, 'GTX 1050Ti Gaming X', 'MSI', '11500'),
(4003, 'GTX 1060 Gaming', 'MSI', '15000'),
(4004, 'GTX 1060 Windforce OC', 'Gigabyte', '20000'),
(4005, 'GTX 1070 SC Gaming', 'EVGA', '26000'),
(4006, 'GTX 1070Ti ROG Strix', 'Asus', '32000'),
(4007, 'GTX 1080Ti FTW3 Gaming', 'EVGA', '50000'),
(4008, 'RX 580 Dual', 'Asus', '15000'),
(4009, 'RX Vega 56', 'Asus', '38000'),
(4010, 'RX Vega 64 AREZ Strix', 'Asus', '40000'),
(5001, 'K881 Mechanical Keyboard', 'Redragon', '3500'),
(5002, 'Wireless Keyboard', 'Dell', '1200'),
(5003, 'Chroma RGB Mechanical Keyboard', 'Razer', '12000'),
(5004, 'Wireless 2.4GHz Mouse', 'Dell', '700'),
(5005, 'G402 Gaming Mouse', 'Logitech', '2400'),
(5006, 'Gladius Optical Gaming Mouse', 'Asus', '8000'),
(5007, 'Large Mousepad', 'Generic', '200'),
(5008, 'Gigantus XXXL Gaming Mousepad', 'Razer', '3000'),
(5009, 'Headphone with Mic', 'Logitech', '1000'),
(5010, 'Cloud Alpha Pro Gaming Headphone', 'HyperX', '7500'),
(6001, 'GN246HL', 'Acer', '14000'),
(6002, 'VG248QE', 'Asus', '19500'),
(6003, 'VP228H', 'Asus', '6500'),
(6004, 'S2716DG', 'Dell', '35000'),
(6005, 'PG279Q ROG Swift', 'Asus', '48000'),
(6006, 'Optix G27C2', 'MSI', '19500'),
(6007, 'G2260VWQ6', 'AOC', '8000'),
(6008, '22cwa', 'HP', '7400'),
(6009, 'Predator X34', 'Acer', '64000'),
(6010, '27UD58-B', 'LG', '27000'),
(7001, 'WD10EZEX', 'WD', '3000'),
(7002, 'Barracuda ST2000DM006', 'Seagate', '4500'),
(7003, 'Barracuda ST4000DM004', 'Seagate', '7000'),
(7004, 'IronWolf ST10000VN0004', 'Seagate', '22000'),
(7005, 'HDKPC05', 'Toshiba', '1500'),
(7006, '860 Evo', 'Samsung', '5400'),
(7007, '860 Evo', 'Samsung', '10000'),
(7008, 'SSDPECME040T401', 'Intel', '400000'),
(7009, '970 Evo', 'Samsung', '6000'),
(7010, '970 Pro', 'Samsung', '15000'),
(8001, 'H500 Black', 'NZXT', '4500'),
(8002, 'TESSERACT SW', 'Deepcool', '2800'),
(8003, '200R', 'Corsair', '2500'),
(8004, 'Crystal 570X RGB', 'Corsair', '14200'),
(8005, 'FBM-01', 'Rosewill', '1500'),
(8006, 'D340 White', 'Corsair', '5150'),
(8007, 'Obsidian Series 1000D', 'Corsair', '37500'),
(8008, '500i White', 'Corsair', '6500'),
(8009, 'SPEC-05', 'Corsir', '3350'),
(8010, 'Design Node 202', 'Fractal', '3150'),
(9001, 'SuperNOVA', 'EVGA', '4900'),
(9002, 'SuperNOVA', 'EVGA', '7000'),
(9003, 'SuperNOVA', 'EVGA', '4500'),
(9004, 'SuperNOVA', 'EVGA', '7500'),
(9005, 'CX550M', 'Corsair', '4200'),
(9006, 'CX450M', 'Corsair', '3700'),
(9007, 'SS-620GM2', 'Seasonic', '2800'),
(9008, '100-BT-0450-K1', 'EVGA', '2200'),
(9009, 'CX500', 'Corsair', '3450'),
(9010, 'SuperNOVA', 'EVGA', '9000');

-- --------------------------------------------------------

--
-- Table structure for table `cabinet`
--

CREATE TABLE `cabinet` (
  `partid` int(11) NOT NULL,
  `name` tinytext NOT NULL,
  `brand` tinytext NOT NULL,
  `price` tinytext NOT NULL,
  `slots` tinytext NOT NULL,
  `type` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cabinet`
--

INSERT INTO `cabinet` (`partid`, `name`, `brand`, `price`, `slots`, `type`) VALUES
(8001, 'H500 Black', 'NZXT', '4500', '7', 'Mid Tower'),
(8002, 'TESSERACT SW', 'Deepcool', '2800', '7', 'Mid Tower'),
(8003, '200R', 'Corsair', '2500', '7', 'Mid Tower'),
(8004, 'Crystal 570X RGB', 'Corsair', '14200', '7', 'Mid Tower'),
(8005, 'FBM-01', 'Rosewill', '1500', '7', 'MicroATX Tower'),
(8006, 'D340 White', 'Corsair', '5150', '7', 'Mid Tower'),
(8007, 'Obsidian Series 1000D', 'Corsair', '37500', '7', 'Full Tower'),
(8008, '500i White', 'Corsair', '6500', '7', 'Full Tower'),
(8009, 'SPEC-05', 'Corsir', '3350', '7', 'Mid Tower'),
(8010, 'Design Node 202', 'Fractal', '3150', '7', 'HTPC');

-- --------------------------------------------------------

--
-- Table structure for table `cpu`
--

CREATE TABLE `cpu` (
  `partid` int(11) NOT NULL,
  `name` tinytext,
  `brand` tinytext,
  `price` tinytext,
  `cores` int(11) DEFAULT NULL,
  `frequency` tinytext,
  `socket` tinytext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cpu`
--

INSERT INTO `cpu` (`partid`, `name`, `brand`, `price`, `cores`, `frequency`, `socket`) VALUES
(1001, '7600K', 'Intel', '21000', 4, '3.6GHz', 'LGA1151'),
(1002, '7700K', 'Intel', '24000', 4, '3.9GHz', 'LGA1151'),
(1003, '8600K', 'Intel', '27000', 6, '3.8GHz', 'LGA1151'),
(1004, '8700K', 'Intel', '30000', 6, '4.2GHz', 'LGA1151'),
(1005, '1700X', 'AMD', '16000', 8, '3.2GHz', 'AM4'),
(1006, '1800X', 'AMD', '20000', 8, '3.6GHz', 'AM4'),
(1007, '2700X', 'AMD', '19000', 8, '3.4GHz', 'AM4'),
(1008, '2800X', 'AMD', '26000', 8, '3.8GHz', 'AM4'),
(1009, '1920X', 'AMD', '45000', 12, '3.4GHz', 'TR4'),
(1010, '1950X', 'AMD', '65000', 16, '3.6GHz', 'TR4');

-- --------------------------------------------------------

--
-- Table structure for table `graphics`
--

CREATE TABLE `graphics` (
  `partid` int(11) NOT NULL,
  `name` tinytext NOT NULL,
  `brand` tinytext NOT NULL,
  `price` tinytext NOT NULL,
  `frequency` tinytext NOT NULL,
  `capacity` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `graphics`
--

INSERT INTO `graphics` (`partid`, `name`, `brand`, `price`, `frequency`, `capacity`) VALUES
(4001, 'GTX 1050 Aero ITX', 'MSI', '8500', '1.4GHz', '2GB'),
(4002, 'GTX 1050Ti Gaming X', 'MSI', '11500', '1.29GHz', '4GB'),
(4003, 'GTX 1060 Gaming', 'MSI', '15000', '1.55GHz', '6GB'),
(4004, 'GTX 1060 Windforce OC', 'Gigabyte', '20000', '1.5GHz', '3GB'),
(4005, 'GTX 1070 SC Gaming', 'EVGA', '26000', '1.6GHz', '8GB'),
(4006, 'GTX 1070Ti ROG Strix', 'Asus', '32000', '1.6GHz', '8GB'),
(4007, 'GTX 1080Ti FTW3 Gaming', 'EVGA', '50000', '1.6GHz', '11GB'),
(4008, 'RX 580 Dual', 'Asus', '15000', '1.25GHz', '8GB'),
(4009, 'RX Vega 56', 'Asus', '38000', '1.3GHz', '8GB'),
(4010, 'RX Vega 64 AREZ Strix', 'Asus', '40000', '1.4GHz', '8GB');

-- --------------------------------------------------------

--
-- Table structure for table `monitor`
--

CREATE TABLE `monitor` (
  `partid` int(11) NOT NULL,
  `name` tinytext NOT NULL,
  `brand` tinytext NOT NULL,
  `price` tinytext NOT NULL,
  `size` tinytext NOT NULL,
  `resolution` tinytext NOT NULL,
  `panel` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `monitor`
--

INSERT INTO `monitor` (`partid`, `name`, `brand`, `price`, `size`, `resolution`, `panel`) VALUES
(6001, 'GN246HL', 'Acer', '14000', '24\"', '1920 x 1080', 'TN'),
(6002, 'VG248QE', 'Asus', '19500', '24\"', '1920 x 1080', 'VA'),
(6003, 'VP228H', 'Asus', '6500', '21.5\"', '1920 x 1080', 'VA'),
(6004, 'S2716DG', 'Dell', '35000', '27\"', '2560 x 1440', 'TN'),
(6005, 'PG279Q ROG Swift', 'Asus', '48000', '2560 x 1440', '27\"', 'IPS'),
(6006, 'Optix G27C2', 'MSI', '19500', '27\"', '1920 x 1080', 'TN'),
(6007, 'G2260VWQ6', 'AOC', '8000', '21.5\"', '1920 x 1080', 'VA'),
(6008, '22cwa', 'HP', '7400', '21.5\"', '1920 x 1080', 'IPS'),
(6009, 'Predator X34', 'Acer', '64000', '34\"', '3440 x 1440', 'IPS'),
(6010, '27UD58-B', 'LG', '27000', '27\"', '3840 x 2160', 'IPS');

-- --------------------------------------------------------

--
-- Table structure for table `motherboard`
--

CREATE TABLE `motherboard` (
  `partid` int(11) NOT NULL,
  `name` tinytext,
  `brand` tinytext,
  `price` tinytext,
  `socket` tinytext,
  `type` tinytext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `motherboard`
--

INSERT INTO `motherboard` (`partid`, `name`, `brand`, `price`, `socket`, `type`) VALUES
(2001, 'ROG Strix Z370-E', 'Asus', '16000', 'LGA1151', 'ATX'),
(2002, 'Prime Z370-A', 'Asus', '8000', 'LGA1151', 'ATX'),
(2003, 'Z370-A Pro', 'MSI', '12000', 'LGA1151', 'Micro ATX'),
(2004, 'B350 PC Mate', 'MSI', '6000', 'AM4', 'ATX'),
(2005, 'B450 Tomahawk', 'MSI', '8000', 'AM4', 'ATX'),
(2006, 'Prime X470-Pro', 'Asus', '13500', 'LGA1151', 'ATX'),
(2007, 'ROG Strix X470-I GAMING', 'Asus', '15500', 'AM4', 'Mini ITX'),
(2008, 'ROG Zenith Extreme', 'Asus', '40000', 'TR4', 'EATX'),
(2009, 'X399M Taichi', 'ASRock', '23500', 'TR4', 'Micro ATX'),
(2010, 'X399 Designare EX', 'Gigabyte', '28400', 'TR4', 'ATX');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `orders` longtext NOT NULL,
  `username` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `orders`, `username`) VALUES
(1, '1001+1002+', 'rakshith'),
(2, '1001+1010+2001+2002+2003+3002+3003+3004+3010+', 'rakshith'),
(3, '3008+3009+', 'rakshith'),
(4, '2005+2007+', 'rakshith'),
(5, '1001+3001+', 'rakshith'),
(6, '3001+', 'rakshith'),
(7, '1008+2010+', 'rakshith'),
(8, '1004+1005+', 'rakshith'),
(9, '1001+1002+', 'rakshith'),
(10, '9002+9006+', 'rakshith'),
(11, '1001+1006+', 'rakshith'),
(12, '1007+1008+', 'rakshith'),
(13, '1001+1007+2002+3003+4002+4006+5007+5008+6004+7004+7010+8005+9008+', 'rakshith'),
(14, '9008+', '<br /><b>Notice</b>:  Undefined index: username in <b>C:\\xampp\\htdocs\\final\\parts.php</b> on line <b>10</b><br />'),
(15, '1003+1007+', 'rakshith'),
(16, '1001+', 'admin'),
(17, '9008+9009+', 'admin'),
(18, '1011+4011+5011+', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `ram`
--

CREATE TABLE `ram` (
  `partid` int(11) NOT NULL,
  `name` tinytext,
  `brand` tinytext,
  `price` tinytext,
  `capacity` tinytext,
  `speed` tinytext,
  `type` tinytext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ram`
--

INSERT INTO `ram` (`partid`, `name`, `brand`, `price`, `capacity`, `speed`, `type`) VALUES
(3001, 'Vengeance LPX', 'Corsair', '9000', '16GB', '3000MHz', 'DDR4'),
(3002, 'Vengeance LPX', 'Corsair', '4000', '8GB', '2400MHz', 'DDR4'),
(3003, 'Trident Z RGB', 'G.Skill', '14000', '16GB', '3200MHz', 'DDR4'),
(3004, 'Ripjaws V Series', 'G.Skill', '9500', '16GB', '3200MHz', 'DDR4'),
(3005, 'Ripjaws V Series', 'G.Skill', '5000', '8GB', '2400MHz', 'DDR4'),
(3006, 'Aegis', 'G.Skill', '4700', '8GB', '3000MHz', 'DDR4'),
(3007, 'Aegis', 'G.Skill', '9600', '16GB', '3000MHz', 'DDR4'),
(3008, 'Vengeance RGB Pro', 'Corsair', '11500', '16GB', '3000MHz', 'DDR4'),
(3009, 'Vengeance RGB Pro', 'Corsair', '12000', '16GB', '3200MHz', 'DDR4'),
(3010, 'HyperX Fury Black', 'Kingston', '5300', '8GB', '2133MHz', 'DDR4');

-- --------------------------------------------------------

--
-- Table structure for table `response`
--

CREATE TABLE `response` (
  `id` int(11) NOT NULL,
  `name` tinytext NOT NULL,
  `email` tinytext NOT NULL,
  `response` longtext NOT NULL,
  `phone` tinytext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `response`
--

INSERT INTO `response` (`id`, `name`, `email`, `response`, `phone`) VALUES
(2, 'asd', 'rgm6777@gmail.com', 'asd', ''),
(3, 'Rakshith', 'rgm6777@gmail.com', 'a', ''),
(4, 'Rakshith', '', 'asd', ''),
(5, 'sad', '', 'asd', ''),
(6, 'asd', 'rgm6777@gmail.com', 'asd', ''),
(7, 'asd', '', 'asd', '213'),
(8, 'asd', 'rgm6777@gmail.com', 'asd', '');

-- --------------------------------------------------------

--
-- Table structure for table `smps`
--

CREATE TABLE `smps` (
  `partid` int(11) NOT NULL,
  `name` tinytext NOT NULL,
  `brand` tinytext NOT NULL,
  `price` tinytext NOT NULL,
  `wattage` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `smps`
--

INSERT INTO `smps` (`partid`, `name`, `brand`, `price`, `wattage`) VALUES
(9001, 'SuperNOVA', 'EVGA', '4900', '650W'),
(9002, 'SuperNOVA', 'EVGA', '7000', '750W'),
(9003, 'SuperNOVA', 'EVGA', '4500', '550W'),
(9004, 'SuperNOVA', 'EVGA', '7500', '850W'),
(9005, 'CX550M', 'Corsair', '4200', '550W'),
(9006, 'CX450M', 'Corsair', '3700', '450W'),
(9007, 'SS-620GM2', 'Seasonic', '2800', '620W'),
(9008, '100-BT-0450-K1', 'EVGA', '2200', '450W'),
(9009, 'CX500', 'Corsair', '3450', '500W'),
(9010, 'SuperNOVA', 'EVGA', '9000', '1000W');

-- --------------------------------------------------------

--
-- Table structure for table `storage`
--

CREATE TABLE `storage` (
  `partid` int(11) NOT NULL,
  `name` tinytext NOT NULL,
  `brand` tinytext NOT NULL,
  `price` tinytext NOT NULL,
  `capacity` tinytext NOT NULL,
  `speed` tinytext NOT NULL,
  `type` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `storage`
--

INSERT INTO `storage` (`partid`, `name`, `brand`, `price`, `capacity`, `speed`, `type`) VALUES
(7001, 'WD10EZEX', 'WD', '3000', '1TB', '7200RPM', 'HDD'),
(7002, 'Barracuda ST2000DM006', 'Seagate', '4500', '2TB', '7200RPM', 'HDD'),
(7003, 'Barracuda ST4000DM004', 'Seagate', '7000', '4TB', '5400RPM', 'HDD'),
(7004, 'IronWolf ST10000VN0004', 'Seagate', '22000', '10TB', '7200RPM', 'HDD'),
(7005, 'HDKPC05', 'Toshiba', '1500', '500GB', '7200RPM', 'HDD'),
(7006, '860 Evo', 'Samsung', '5400', '500GB', '600MBps', 'SSD'),
(7007, '860 Evo', 'Samsung', '10000', '1TB', '600MBps', 'SSD'),
(7008, 'SSDPECME040T401', 'Intel', '400000', '4TB', '3.5GBps', 'PCI-e SSD'),
(7009, '970 Evo', 'Samsung', '6000', '250GB', '3.2GBps', 'M.2 SSD'),
(7010, '970 Pro', 'Samsung', '15000', '512GB', '3.5GBps', 'M.2 SSD');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` tinytext NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` tinytext NOT NULL,
  `password` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `username`, `email`, `password`) VALUES
('Administrator', 'admin', 'rgm6777@gmail.com', '$2y$10$9B9U05WCEX34jcxQ9HcWfukHHxLHV.2q087CnRZO4PKEopTSdfTqq'),
('Rakshith', 'rakshith', 'rgm6777@gmail.com', '$2y$10$1ngIfXXj6YvkCAeimZTjxeUclUfby3nj69acJYEh9b6bpXwuOw9o2'),
('Rakshith', 'sample', 'rgm6777@gmail.com', '$2y$10$OH.Y2ptZvpiV/HesMruwkOuG1u49atvlsUNMiLUWCMhkJgG5yBJcu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accesories`
--
ALTER TABLE `accesories`
  ADD PRIMARY KEY (`partid`);

--
-- Indexes for table `cabinet`
--
ALTER TABLE `cabinet`
  ADD PRIMARY KEY (`partid`);

--
-- Indexes for table `cpu`
--
ALTER TABLE `cpu`
  ADD PRIMARY KEY (`partid`);

--
-- Indexes for table `graphics`
--
ALTER TABLE `graphics`
  ADD PRIMARY KEY (`partid`);

--
-- Indexes for table `monitor`
--
ALTER TABLE `monitor`
  ADD PRIMARY KEY (`partid`);

--
-- Indexes for table `motherboard`
--
ALTER TABLE `motherboard`
  ADD PRIMARY KEY (`partid`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ram`
--
ALTER TABLE `ram`
  ADD PRIMARY KEY (`partid`);

--
-- Indexes for table `response`
--
ALTER TABLE `response`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `smps`
--
ALTER TABLE `smps`
  ADD PRIMARY KEY (`partid`);

--
-- Indexes for table `storage`
--
ALTER TABLE `storage`
  ADD PRIMARY KEY (`partid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `response`
--
ALTER TABLE `response`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
