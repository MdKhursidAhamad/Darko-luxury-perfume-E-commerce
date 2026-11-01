-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2024 at 02:35 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `darko-perfume-bd`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_msg`
--

CREATE TABLE `customer_msg` (
  `id` int(11) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `cemail` varchar(100) NOT NULL,
  `cno` int(50) NOT NULL,
  `cmsg` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer_msg`
--

INSERT INTO `customer_msg` (`id`, `cname`, `cemail`, `cno`, `cmsg`) VALUES
(0, 'akbar', 'akbar@gmail.com', 2147483647, 'This is my store '),
(0, 'hasanali', 'hasan@gmail.com', 2147483647, 'This store is super '),
(0, 'khadimhusain', 'nagalparakhadimhusain@gmail.com', 2147483647, 'keklel '),
(0, 'khadimhusain', 'nagalparakhadimhusain@gmail.com', 2147483647, 'llll '),
(0, '', '', 0, ''),
(0, 'khadimhusain', 'nagalparakhadimhusain@gmail.com', 2147483647, 'kwqjjdwjldwj ');

-- --------------------------------------------------------

--
-- Table structure for table `order_data`
--

CREATE TABLE `order_data` (
  `order_id` int(50) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` varchar(200) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(50) NOT NULL,
  `postcode` varchar(100) NOT NULL,
  `number` varchar(100) NOT NULL,
  `payment_method` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_data`
--

INSERT INTO `order_data` (`order_id`, `product_name`, `product_price`, `customer_name`, `address`, `city`, `state`, `postcode`, `number`, `payment_method`) VALUES
(9, '    Darko Dior Perfume Women`s ', '   759 ', 'khadimhusain', '  fwq', '  dd', ' fwf', '  fwqfwq', ' 09090909283', '  cod'),
(10, '    Dior Perfume ', '   500 ', 'khadimhusain', '  kesimpa to vadanagr', '  vadanagar', ' gujrat', '  384355', ' 09090909283', '  cod');

-- --------------------------------------------------------

--
-- Table structure for table `product data`
--

CREATE TABLE `product data` (
  `ID` int(11) NOT NULL,
  `PNAME` varchar(100) NOT NULL,
  `PIMAGE` varchar(200) NOT NULL,
  `PMRP` varchar(100) NOT NULL,
  `PPRICE` varchar(100) NOT NULL,
  `PCATEGORY` varchar(200) NOT NULL,
  `PSDES` varchar(100) NOT NULL,
  `P DES` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product data`
--

INSERT INTO `product data` (`ID`, `PNAME`, `PIMAGE`, `PMRP`, `PPRICE`, `PCATEGORY`, `PSDES`, `P DES`) VALUES
(87, ' Carala Gio ', ' upload-img/Darko_perfume-1.webp ', '899 ', '749 ', 'home', 'Carala  Gio Edt Spray For Men, 100Ml', ' Apply the perfume from an 8 - inch distance ,stepping toward the mist in the air each time you spray. Repeat the process until you cover all points like your COLLAR BONE , CHEST , WRIST , ELBOW. For '),
(88, ' Delish ', ' upload-img/Darko_perfume-8.webp ', '799 ', '749 ', 'home', 'Woody Long Lasting Fragrance Scent, 100ML', ' Apply the perfume from an 8 - inch distance ,stepping toward the mist in the air each time you spray. Repeat the process until you cover all points like your COLLAR BONE , CHEST , WRIST , ELBOW. For '),
(89, ' Dior Perfume ', ' upload-img/Darko_perfume-15.webp ', '599 ', '500 ', 'home', 'Darko Luxury Woman Dior Perfume, 100ML', ' Apply the perfume from an 8 - inch distance ,stepping toward the mist in the air each time you spray. Repeat the process until you cover all points like your COLLAR BONE , CHEST , WRIST , ELBOW. For '),
(90, ' Dolce Perfume ', ' upload-img/Darko_perfume-16.webp ', '600 ', '549 ', 'home', 'Darko Luxury Dolce Perfume, 100ML', ' Apply the perfume from an 8 - inch distance ,stepping toward the mist in the air each time you spray. Repeat the process until you cover all points like your COLLAR BONE , CHEST , WRIST , ELBOW. For '),
(91, ' Eternity ', ' upload-img/Darko_perfume-9.webp ', '899 ', '799 ', 'home', 'Darko Luxury Eternity Perfume, 100ML', ' Apply the perfume from an 8 - inch distance ,stepping toward the mist in the air each time you spray. Repeat the process until you cover all points like your COLLAR BONE , CHEST , WRIST , ELBOW. For '),
(92, ' Hugo Boss Hugo ', ' upload-img/Darko_perfume-17.webp ', '899 ', '759 ', 'home', 'Woody Long Lasting EDP Fragrance Scent, 100ML', ' Apply the perfume from an 8 - inch distance ,stepping toward the mist in the air each time you spray. Repeat the process until you cover all points like your COLLAR BONE , CHEST , WRIST , ELBOW. For '),
(93, ' Carala Gio ', ' upload-img/Darko_perfume-1.webp ', '899 ', '749 ', 'perfumes', 'Darko Luxury Carala Gio Perfume, 100ML', ' Apply the perfume from an 8 - inch distance ,stepping toward the mist in the air each time you spray. Repeat the process until you cover all points like your COLLAR BONE , CHEST , WRIST , ELBOW. For '),
(94, ' Delish ', ' upload-img/Darko_perfume-8.webp ', '799 ', '749 ', 'perfumes', 'Darko Luxury Delish Men Perfume, 100ML', ' Apply the perfume from an 8 - inch distance ,stepping toward the mist in the air each time you spray. Repeat the process until you cover all points like your COLLAR BONE , CHEST , WRIST , ELBOW. For '),
(95, ' Dior Perfume ', ' upload-img/Darko_perfume-15.webp ', '599 ', '500 ', 'perfumes', 'Darko Luxury Dior Women Perfume, 100ML', ' Apply the perfume from an 8 - inch distance ,stepping toward the mist in the air each time you spray. Repeat the process until you cover all points like your COLLAR BONE , CHEST , WRIST , ELBOW. For '),
(96, ' Dolce Perfume ', ' upload-img/Darko_perfume-16.webp ', '600 ', '549 ', 'perfumes', 'Darko Luxury Dolce Women Perfume, 100ML', ' Apply the perfume from an 8 - inch distance ,stepping toward the mist in the air each time you spray. Repeat the process until you cover all points like your COLLAR BONE , CHEST , WRIST , ELBOW. For '),
(97, ' Eternity ', ' upload-img/Darko_perfume-9.webp ', '899 ', '799 ', 'perfumes', 'Darko Luxury Eternity Women Perfume, 100ML\r\n', ' Apply the perfume from an 8 - inch distance ,stepping toward the mist in the air each time you spray. Repeat the process until you cover all points like your COLLAR BONE , CHEST , WRIST , ELBOW. For '),
(98, ' Hugo Boss Hugo ', ' upload-img/Darko_perfume-17.webp ', '899 ', '759 ', 'perfumes', 'Darko Luxury Hugo Boss Hugo Perfume Men, 100ML', ' Apply the perfume from an 8 - inch distance ,stepping toward the mist in the air each time you spray. Repeat the process until you cover all points like your COLLAR BONE , CHEST , WRIST , ELBOW. For '),
(99, ' Jackseon ', ' upload-img/Darko_perfume-11.webp ', '550 ', '501 ', 'home', 'Darko Luxury Jackseon Men Perfume, 100ML', ' Apply the perfume from an 8 - inch distance ,stepping toward the mist in the air each time you spray. Repeat the process until you cover all points like your COLLAR BONE , CHEST , WRIST , ELBOW. For '),
(100, ' Jackseon ', ' upload-img/Darko_perfume-11.webp ', '599 ', '501 ', 'perfumes', 'Darko Luxury Jackseon Men Perfume, 100ML', ' Apply the perfume from an 8 - inch distance ,stepping toward the mist in the air each time you spray. Repeat the process until you cover all points like your COLLAR BONE , CHEST , WRIST , ELBOW. For '),
(101, ' Jacobs Fragrances ', ' upload-img/Darko_perfume-12.webp ', '999 ', '949 ', 'home', 'Darko Luxury Jacobs Women Perfume, 100ML', ' Apply the perfume from an 8 - inch distance ,stepping toward the mist in the air each time you spray. Repeat the process until you cover all points like your COLLAR BONE , CHEST , WRIST , ELBOW. For '),
(102, ' Jacobs Fragrances ', ' upload-img/Darko_perfume-12.webp ', '999 ', '949 ', 'perfumes', 'Darko Luxury Jacobs Women Perfume, 100ML', ' Apply the perfume from an 8 - inch distance ,stepping toward the mist in the air each time you spray. Repeat the process until you cover all points like your COLLAR BONE , CHEST , WRIST , ELBOW. For '),
(103, ' Kenneth Reaction ', ' upload-img/Darko_perfume-13.webp ', '650 ', '500 ', 'home', 'Darko Luxury Kenneth Men Perfume, 100ML', ' Apply the perfume from an 8 - inch distance ,stepping toward the mist in the air each time you spray. Repeat the process until you cover all points like your COLLAR BONE , CHEST , WRIST , ELBOW. For '),
(104, ' Kenneth Reaction ', ' upload-img/Darko_perfume-13.webp ', '650 ', '500 ', 'perfumes', 'Darko Luxury Kenneth Men Perfume, 100ML', ' Apply the perfume from an 8 - inch distance ,stepping toward the mist in the air each time you spray. Repeat the process until you cover all points like your COLLAR BONE , CHEST , WRIST , ELBOW. For '),
(105, ' Malone London ', ' upload-img/Darko_perfume-14.webp ', '650 ', '500 ', 'home', 'Darko Luxury Malone London Men Perfume, 100ML', ' Apply the perfume from an 8 - inch distance ,stepping toward the mist in the air each time you spray. Repeat the process until you cover all points like your COLLAR BONE , CHEST , WRIST , ELBOW. For '),
(106, ' Malone London ', ' upload-img/Darko_perfume-14.webp ', '650 ', '500 ', 'perfumes', 'Darko Luxury Malone London Men Perfume, 100ML', ' Apply the perfume from an 8 - inch distance ,stepping toward the mist in the air each time you spray. Repeat the process until you cover all points like your COLLAR BONE , CHEST , WRIST , ELBOW. For '),
(107, ' Nautica Perfume ', ' upload-img/Darko_perfume-5.webp ', '849 ', '800 ', 'home', 'Darko Luxury Nautica Men Perfume, 100ML', ' Apply the perfume from an 8 - inch distance ,stepping toward the mist in the air each time you spray. Repeat the process until you cover all points like your COLLAR BONE , CHEST , WRIST , ELBOW. For '),
(108, ' Nautica Perfume ', ' upload-img/Darko_perfume-5.webp ', '849 ', '800 ', 'perfumes', 'Darko Luxury Nautica Men Perfume, 100ML', ' Apply the perfume from an 8 - inch distance ,stepping toward the mist in the air each time you spray. Repeat the process until you cover all points like your COLLAR BONE , CHEST , WRIST , ELBOW. For '),
(109, ' Pareal Glo ', ' upload-img/Darko_perfume-6.webp ', '849 ', '799 ', 'home', 'Darko Luxury Pareal Glo Women Perfume, 100ML', ' Apply the perfume from an 8 - inch distance ,stepping toward the mist in the air each time you spray. Repeat the process until you cover all points like your COLLAR BONE , CHEST , WRIST , ELBOW. For '),
(110, ' Pareal Glo ', ' upload-img/Darko_perfume-6.webp ', '849 ', '799 ', 'perfumes', 'Darko Luxury Pareal Glo Women Perfume, 100ML', ' Apply the perfume from an 8 - inch distance ,stepping toward the mist in the air each time you spray. Repeat the process until you cover all points like your COLLAR BONE , CHEST , WRIST , ELBOW. For '),
(111, ' Perfumaria ', ' upload-img/Darko_perfume-7.webp ', '849 ', '799 ', 'home', 'Darko Luxury Perfumaria Women Perfume, 100ML', ' Apply the perfume from an 8 - inch distance ,stepping toward the mist in the air each time you spray. Repeat the process until you cover all points like your COLLAR BONE , CHEST , WRIST , ELBOW. For '),
(112, ' Perfumaria ', ' upload-img/Darko_perfume-7.webp ', '849 ', '799 ', 'perfumes', 'Darko Luxury Perfumaria Women Perfume, 100ML', ' Apply the perfume from an 8 - inch distance ,stepping toward the mist in the air each time you spray. Repeat the process until you cover all points like your COLLAR BONE , CHEST , WRIST , ELBOW. For '),
(113, ' Silvia Dio ', ' upload-img/Darko_perfume-10.webp ', '999 ', '899 ', 'home', 'Darko Luxury Silvia Dio Men Perfume, 100ML', ' Apply the perfume from an 8 - inch distance ,stepping toward the mist in the air each time you spray. Repeat the process until you cover all points like your COLLAR BONE , CHEST , WRIST , ELBOW. For '),
(114, ' Silvia Dio ', ' upload-img/Darko_perfume-10.webp ', '999 ', '899 ', 'perfumes', 'Darko Luxury Silvia Dio Men Perfume, 100ML', ' Apply the perfume from an 8 - inch distance ,stepping toward the mist in the air each time you spray. Repeat the process until you cover all points like your COLLAR BONE , CHEST , WRIST , ELBOW. For '),
(115, ' Burberry Brit ', ' upload-img/Darko_perfume-2.webp ', '1199 ', '999 ', 'home', 'Darko Luxury Burberry Brit Men Perfume, 100ML', ' Apply the perfume from an 8 - inch distance ,stepping toward the mist in the air each time you spray. Repeat the process until you cover all points like your COLLAR BONE , CHEST , WRIST , ELBOW. For '),
(116, ' Burberry Brit ', ' upload-img/Darko_perfume-2.webp ', '1199 ', '999 ', 'perfumes', 'Darko Luxury Burberry Brit Men Perfume, 100ML', ' Apply the perfume from an 8 - inch distance ,stepping toward the mist in the air each time you spray. Repeat the process until you cover all points like your COLLAR BONE , CHEST , WRIST , ELBOW. For ');

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE `userlogin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Number` varchar(200) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`id`, `username`, `Email`, `Number`, `Password`) VALUES
(42, 'khadim', 'nagalparakhadimhusain786@gmail.com', '929020020', '1234'),
(43, 'khadimhusain', 'nagalparakhadim440@gmail.com', '09090909283', '7890'),
(44, 'sokat', 'sokat440@gmail.com', '09090909283', '123'),
(45, 'abid', 'abid123@gmail.com', '1234567898', '786'),
(46, 'imdad', 'imdad123@gmail.com', '7201072082', 'xyz');

-- --------------------------------------------------------

--
-- Table structure for table `vandor`
--

CREATE TABLE `vandor` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `upassword` varchar(100) NOT NULL,
  `mobile_no` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vandor`
--

INSERT INTO `vandor` (`id`, `username`, `upassword`, `mobile_no`) VALUES
(3, 'khadim', 'khadim03', '7528593435');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order_data`
--
ALTER TABLE `order_data`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `product data`
--
ALTER TABLE `product data`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `userlogin`
--
ALTER TABLE `userlogin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `vandor`
--
ALTER TABLE `vandor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order_data`
--
ALTER TABLE `order_data`
  MODIFY `order_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `product data`
--
ALTER TABLE `product data`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `userlogin`
--
ALTER TABLE `userlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `vandor`
--
ALTER TABLE `vandor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
