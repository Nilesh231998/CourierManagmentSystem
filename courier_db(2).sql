-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2019 at 06:41 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `courier_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email_id` varchar(25) NOT NULL,
  `contact_no` varchar(20) NOT NULL,
  `image_name` varchar(25) NOT NULL,
  `address` varchar(25) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `first_name`, `last_name`, `email_id`, `contact_no`, `image_name`, `address`, `username`, `password`) VALUES
(8, 'Ab', 'hgjkhjh', 'fh@gmail.com', '765789', 'image8.jpg', 'nbbkjn', 'Ab', '123'),
(11, 'nilesh', 'suthar', 'nsuthar@gmail.com', '134516156', 'image11.jpg', 'surat', 'samu', '123'),
(12, 'samundarsingh', 'rajpurohit', 'samundar@gamil.com', '7043644777', 'image12.jpg', 'surat', 'samu123', 'Aasg123@s');

-- --------------------------------------------------------

--
-- Table structure for table `areamast`
--

CREATE TABLE `areamast` (
  `area_id` int(11) NOT NULL,
  `area_name` varchar(25) NOT NULL,
  `city_id` varchar(11) NOT NULL,
  `pincode` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `areamast`
--

INSERT INTO `areamast` (`area_id`, `area_name`, `city_id`, `pincode`) VALUES
(6, 'aai mata chock', '1', '129909'),
(7, 'punagam', '2', '151179'),
(8, 'malanpur', '4', '102030');

-- --------------------------------------------------------

--
-- Table structure for table `citymast`
--

CREATE TABLE `citymast` (
  `city_id` int(11) NOT NULL,
  `city_name` varchar(20) NOT NULL,
  `states_id` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `citymast`
--

INSERT INTO `citymast` (`city_id`, `city_name`, `states_id`) VALUES
(1, 'Surat', '1'),
(3, 'rajkot', '1'),
(4, 'jaipur', '8'),
(5, 'pali', '8'),
(6, 'sirohi', '8'),
(7, 'patna', '15');

-- --------------------------------------------------------

--
-- Table structure for table `clientmast`
--

CREATE TABLE `clientmast` (
  `client_id` int(11) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email_id` varchar(25) NOT NULL,
  `contact_no` varchar(15) NOT NULL,
  `city_id` varchar(11) NOT NULL,
  `address` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clientmast`
--

INSERT INTO `clientmast` (`client_id`, `first_name`, `last_name`, `email_id`, `contact_no`, `city_id`, `address`, `username`, `password`) VALUES
(1, 'samundarsingh', 'rajpurohita', 'samundar@gamil.com', '17617781718', '2', 'rajpurohit', 'samu', '123'),
(2, 'rajal', 'pundit', 'sa@gmail.com', '11', '2', 'surat', 'ghh1112', 'Sa12@kasjkdasd'),
(3, 'nilesh', 'gjhgk', 'samundar@gmail.com', '7868970', '1', 'surat', 'SA123', 'Avbn123@ss'),
(4, 'jabbar singh', 'rajpurohit', 'samundar@gamil.com', '9825703900', '1', 'surat', 'J123', 'Aabc123@S'),
(32, 'naru', 'singh', 'samundar@gamil.com', '457889', '7', 'patana', 'gfgjh456', 'Afggh124@'),
(48, 'samu', 'rajput', 'sa@gmail.com', '', '', '', 'samu', '123'),
(49, 'kul', 'rajpurohit', 'kul@gmail.com', '', '', '', 'kul123', 'A123@jhkj');

-- --------------------------------------------------------

--
-- Table structure for table `cmsmast`
--

CREATE TABLE `cmsmast` (
  `page_id` int(11) NOT NULL,
  `page_name` varchar(20) NOT NULL,
  `page_title` varchar(30) NOT NULL,
  `page_content` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cmsmast`
--

INSERT INTO `cmsmast` (`page_id`, `page_name`, `page_title`, `page_content`) VALUES
(2, 'sales', 'sale return', 'return of good in surat');

-- --------------------------------------------------------

--
-- Table structure for table `contactmast`
--

CREATE TABLE `contactmast` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email_id` varchar(25) NOT NULL,
  `contact_no` varchar(15) NOT NULL,
  `description` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactmast`
--

INSERT INTO `contactmast` (`id`, `name`, `email_id`, `contact_no`, `description`) VALUES
(1, 'samundat dsaadad', 'samu@gmail.com', '57782222', 'jhgkhlh'),
(2, 'samundar', 'samundar@gamil.com', '478588709', 'please contcat on m'),
(3, 'nilesh', 'nil@gmail.com', '1234556', 'nice');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `sortname` varchar(3) NOT NULL,
  `name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `sortname`, `name`) VALUES
(1, 'Ind', 'india'),
(2, 'afg', 'afganisthan'),
(3, 'pak', 'pakisthan'),
(4, 'nz', 'newzealend'),
(5, 'sa', 'south africa'),
(6, 'mal', 'maleshiya'),
(7, 'ban', 'bangadesh'),
(8, 'jap', 'japan'),
(10, 'usa', 'united state of amrice');

-- --------------------------------------------------------

--
-- Table structure for table `couriermast`
--

CREATE TABLE `couriermast` (
  `courier_id` int(11) NOT NULL,
  `consignment_no` varchar(11) NOT NULL,
  `client_id` varchar(11) NOT NULL,
  `courier_type_id` varchar(11) NOT NULL,
  `price` varchar(11) NOT NULL,
  `weight` varchar(11) NOT NULL,
  `suboffice_id` varchar(11) NOT NULL,
  `source_city_id` varchar(11) NOT NULL,
  `destination_city_id` varchar(11) NOT NULL,
  `area_id` varchar(11) NOT NULL,
  `receiver_name` varchar(25) NOT NULL,
  `receiver_phno` varchar(11) NOT NULL,
  `receiver_address` varchar(30) NOT NULL,
  `courier_date` varchar(10) NOT NULL,
  `delivery_date` varchar(10) NOT NULL,
  `status_id` varchar(11) NOT NULL,
  `emp_id` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `couriermast`
--

INSERT INTO `couriermast` (`courier_id`, `consignment_no`, `client_id`, `courier_type_id`, `price`, `weight`, `suboffice_id`, `source_city_id`, `destination_city_id`, `area_id`, `receiver_name`, `receiver_phno`, `receiver_address`, `courier_date`, `delivery_date`, `status_id`, `emp_id`) VALUES
(17, '15523689', '1', '3', '359', '22', '9', '3', '1', '6', 'samu', '356676776', 'surat', '11/03/2019', '21/11/2011', '1', 'samundarsss'),
(18, '15523690', '3', '2', '12000', '120', '9', '4', '1', '6', 'nilesh', '123', 'surat', '11/03/2019', '12/11/2011', '1', 'samundarsss'),
(19, '15523691', '1', '2', '12000', '111', '9', '1', '4', '8', 'samu', '123', 'jaipur', '11/03/2019', '11/11/2011', '1', 'samundarsss'),
(20, '15523692', '1', '2', '12000', '111', '10', '4', '1', '6', 'samu', '123', 'surat', '11/03/2019', '11/11/2011', '1', 'samundarsss'),
(21, '15523693', '1', '2', '12000', '23', '9', '1', '4', '8', 'samu', '23567', 'suart', '11/03/2019', '11/11/2011', '1', '4'),
(22, '15523694', '1', '3', '359', '123', '9', '3', '1', '6', 'samu', '56478', 'surat', '11/03/2019', '11/11/2011', '1', '4');

-- --------------------------------------------------------

--
-- Table structure for table `couriertype`
--

CREATE TABLE `couriertype` (
  `courier_type_id` int(11) NOT NULL,
  `courier_type_name` varchar(20) NOT NULL,
  `discription` varchar(100) NOT NULL,
  `country_price` varchar(50) NOT NULL,
  `out_country_price` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `couriertype`
--

INSERT INTO `couriertype` (`courier_type_id`, `courier_type_name`, `discription`, `country_price`, `out_country_price`) VALUES
(2, 'paper', 'very fast', '1200', '3300'),
(3, 'palastic', 'fast', '12000', '22000');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `image_name` varchar(20) NOT NULL,
  `email_id` varchar(30) NOT NULL,
  `contact_no` varchar(15) NOT NULL,
  `address` varchar(35) NOT NULL,
  `employee_type` varchar(20) NOT NULL,
  `suboffice_id` varchar(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `first_name`, `last_name`, `image_name`, `email_id`, `contact_no`, `address`, `employee_type`, `suboffice_id`, `username`, `password`) VALUES
(4, 'samundarsss', 'rajpurohit', 'image7.jpg', 'samundar@gamil.com', '7043644777', 'surat', 'manager', '9', 'samu', '123'),
(5, 'kuldeep', 'rajpurohit', 'image7.jpg', 'kul@gmil.com', '972973929127', 'surat', 'courierboy', '10', 'kul', '123'),
(6, 'narendra', 'rajput', 'image7.jpg', 'nari@gmail.com', '245', 'surat', 'supervisor', '11', 'nare', '123'),
(7, 'nilesh', 'sutra', 'image7.jpg', 'samundar@gamil.com', '127817', 'surat', 'manager', '12', 'sa', '123'),
(8, 'nilesh', 'suthar', 'image8.jpg', 'samundar@gamil.com', '65698', 'surat', 'operator', '13', 'A123', '123');

-- --------------------------------------------------------

--
-- Table structure for table `feedbackmast`
--

CREATE TABLE `feedbackmast` (
  `fid` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email_id` varchar(20) NOT NULL,
  `contact_no` varchar(20) NOT NULL,
  `description` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedbackmast`
--

INSERT INTO `feedbackmast` (`fid`, `name`, `email_id`, `contact_no`, `description`) VALUES
(1, 'samundar singh', 'samundar@gamil.com', '7043644777', 'nice'),
(2, 'kuldeep', 'kiul@g.com', '687', 'nice');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `Log_ID` int(10) NOT NULL,
  `Emp_ID` varchar(10) NOT NULL,
  `Remote_IP` varchar(50) NOT NULL,
  `User_Type` varchar(50) NOT NULL,
  `Login_Time` varchar(20) NOT NULL,
  `Logout_Time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `main_branch`
--

CREATE TABLE `main_branch` (
  `office_id` int(11) NOT NULL,
  `office_name` varchar(20) NOT NULL,
  `contact_no` varchar(15) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city_id` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `main_branch`
--

INSERT INTO `main_branch` (`office_id`, `office_name`, `contact_no`, `address`, `city_id`) VALUES
(6, 'sai ram', '123456789', 'aai mata chocj ,surat', '1'),
(7, 'jay sankar', '987654321', 'vaman har rasta,rajkot', '3'),
(8, 'jay ma javala', '345624686', 'fhul bazar,pink city road,jaipur', '4'),
(9, 'jay ma bavani', '5638095437', 'gali no 04, near post office,lapod,pali', '5'),
(10, 'jay charbuja', '9835674128', 'shop no 09,first floor,gandhi road,sirohi', '6'),
(11, 'abc', '1234567', 'patana', '7');

-- --------------------------------------------------------

--
-- Table structure for table `pricemast`
--

CREATE TABLE `pricemast` (
  `price_id` int(11) NOT NULL,
  `courier_type_id` varchar(11) NOT NULL,
  `source_city_id` varchar(11) NOT NULL,
  `destination_city_id` varchar(11) NOT NULL,
  `price` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pricemast`
--

INSERT INTO `pricemast` (`price_id`, `courier_type_id`, `source_city_id`, `destination_city_id`, `price`) VALUES
(1, '2', '2', '3', '12000'),
(2, '3', '2', '1', '359');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `country_id` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `name`, `country_id`) VALUES
(1, 'GujarAt', '1'),
(8, 'rajsthan', '1'),
(9, 'andrapradesh', '1'),
(10, 'anuracal pradesh', '1'),
(11, 'assam', '1'),
(12, 'bihar', '1'),
(13, 'chatisgarh', '1'),
(14, 'goa', '1'),
(15, 'bihar', '1');

-- --------------------------------------------------------

--
-- Table structure for table `statusmast`
--

CREATE TABLE `statusmast` (
  `status_id` int(11) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `statusmast`
--

INSERT INTO `statusmast` (`status_id`, `status`) VALUES
(1, 'Receive courier'),
(2, 'shippment'),
(3, 'on the way'),
(4, 'arrived'),
(5, 'dispetch'),
(9, 'delivered');

-- --------------------------------------------------------

--
-- Table structure for table `sub_branch`
--

CREATE TABLE `sub_branch` (
  `suboffice_id` int(11) NOT NULL,
  `suboffice_name` varchar(20) NOT NULL,
  `contact_no` varchar(15) NOT NULL,
  `address` varchar(35) NOT NULL,
  `office_id` varchar(11) NOT NULL,
  `city_id` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_branch`
--

INSERT INTO `sub_branch` (`suboffice_id`, `suboffice_name`, `contact_no`, `address`, `office_id`, `city_id`) VALUES
(9, 'ram cargo', '8765456798', '109,shiv nagar,punagam road,near re', '6', '1'),
(10, 'jay courier servies', '9876545678', 'ram nagar,gali no 04,rajkot', '7', '3'),
(11, 'xpert cargo', '8765987345', '110-114,aai mata chok,opposite of c', '8', '4'),
(12, 'asha cargo service', '9865340758', 'maharana nager,pali', '9', '5'),
(13, 'nilkanth delivery se', '9845637890', 'ram nagar,sirohi', '10', '6'),
(14, 'vip cargo', '123456789', 'patana', '11', '7');

-- --------------------------------------------------------

--
-- Table structure for table `trackmast`
--

CREATE TABLE `trackmast` (
  `track_id` int(11) NOT NULL,
  `consignment_no` varchar(11) NOT NULL,
  `status_id` varchar(11) NOT NULL,
  `emp_id` varchar(11) NOT NULL,
  `transport_id` varchar(11) NOT NULL,
  `suboffice_id` varchar(11) NOT NULL,
  `area_id` varchar(11) NOT NULL,
  `datetime` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trackmast`
--

INSERT INTO `trackmast` (`track_id`, `consignment_no`, `status_id`, `emp_id`, `transport_id`, `suboffice_id`, `area_id`, `datetime`) VALUES
(1, '15523687', '1', 'samundarsss', '2', 'ram cargo', 'aai mata ch', '11-03-2019 12:24:10 ');

-- --------------------------------------------------------

--
-- Table structure for table `transportation`
--

CREATE TABLE `transportation` (
  `transport_id` int(11) NOT NULL,
  `transport_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transportation`
--

INSERT INTO `transportation` (`transport_id`, `transport_name`) VALUES
(2, 'By Air'),
(3, 'By Railway'),
(5, 'By Road');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `areamast`
--
ALTER TABLE `areamast`
  ADD PRIMARY KEY (`area_id`);

--
-- Indexes for table `citymast`
--
ALTER TABLE `citymast`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `clientmast`
--
ALTER TABLE `clientmast`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `cmsmast`
--
ALTER TABLE `cmsmast`
  ADD PRIMARY KEY (`page_id`);

--
-- Indexes for table `contactmast`
--
ALTER TABLE `contactmast`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `couriermast`
--
ALTER TABLE `couriermast`
  ADD PRIMARY KEY (`courier_id`);

--
-- Indexes for table `couriertype`
--
ALTER TABLE `couriertype`
  ADD PRIMARY KEY (`courier_type_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `feedbackmast`
--
ALTER TABLE `feedbackmast`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`Log_ID`);

--
-- Indexes for table `main_branch`
--
ALTER TABLE `main_branch`
  ADD PRIMARY KEY (`office_id`);

--
-- Indexes for table `pricemast`
--
ALTER TABLE `pricemast`
  ADD PRIMARY KEY (`price_id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statusmast`
--
ALTER TABLE `statusmast`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `sub_branch`
--
ALTER TABLE `sub_branch`
  ADD PRIMARY KEY (`suboffice_id`);

--
-- Indexes for table `trackmast`
--
ALTER TABLE `trackmast`
  ADD PRIMARY KEY (`track_id`);

--
-- Indexes for table `transportation`
--
ALTER TABLE `transportation`
  ADD PRIMARY KEY (`transport_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `areamast`
--
ALTER TABLE `areamast`
  MODIFY `area_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `citymast`
--
ALTER TABLE `citymast`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `clientmast`
--
ALTER TABLE `clientmast`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `cmsmast`
--
ALTER TABLE `cmsmast`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `contactmast`
--
ALTER TABLE `contactmast`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `couriermast`
--
ALTER TABLE `couriermast`
  MODIFY `courier_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `couriertype`
--
ALTER TABLE `couriertype`
  MODIFY `courier_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `feedbackmast`
--
ALTER TABLE `feedbackmast`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `Log_ID` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `main_branch`
--
ALTER TABLE `main_branch`
  MODIFY `office_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `pricemast`
--
ALTER TABLE `pricemast`
  MODIFY `price_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `statusmast`
--
ALTER TABLE `statusmast`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `sub_branch`
--
ALTER TABLE `sub_branch`
  MODIFY `suboffice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `trackmast`
--
ALTER TABLE `trackmast`
  MODIFY `track_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `transportation`
--
ALTER TABLE `transportation`
  MODIFY `transport_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
