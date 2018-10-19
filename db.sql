-- phpMyAdmin SQL Dump
-- version 4.2.5
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Oct 19, 2018 at 06:44 PM
-- Server version: 5.5.38
-- PHP Version: 5.5.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `farex`
--

-- --------------------------------------------------------

--
-- Table structure for table `allusers`
--

CREATE TABLE `allusers` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `type` int(1) NOT NULL,
  `office_id` int(11) NOT NULL,
  `position` int(2) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `allusers`
--

INSERT INTO `allusers` (`id`, `name`, `email`, `username`, `password`, `type`, `office_id`, `position`) VALUES
(1, 'Super Admin', 'kobomarun@gmail.com', 'admin', '93279e3308bdbbeed946fc965017f67a', 1, 1, 0),
(2, 'Alao Mukaila', 'uchechiegbuta@gmail.com', 'alao', '121212', 0, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `type` varchar(100) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `address`, `city`, `state`, `email`, `phone`, `pwd`, `type`, `status`) VALUES
(1, 'Softvision Professionals', '46 Kayode street', 'Ogba', 'Lagos', 'kobomarun@gmail.com', '08023584566', '93279e3308bdbbeed946fc965017f67a', 'customer', 1),
(2, 'Womens Rights and Health Project', '196 Egbe-Ikotun Road', 'Ejigbo,', 'Ekiti', 'women@gmail.com', '18023584566', '78bf4f00f81a36b57950e239f1df91c1', 'customer', 1);

-- --------------------------------------------------------

--
-- Table structure for table `office`
--

CREATE TABLE `office` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(30) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `office`
--

INSERT INTO `office` (`id`, `name`, `address`, `phone`) VALUES
(1, 'Head Office', 'Ogba Shopping Arcade, Ogba, Lagos', '08070915578'),
(2, 'Head Office 1', 'Ogba Shopping Arcade, Ogba, Lagos', '08070915578'),
(3, 'Branch Office 3', 'Shomolu, Lagos', '08070915578');

-- --------------------------------------------------------

--
-- Table structure for table `payment_methods`
--

CREATE TABLE `payment_methods` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `payment_methods`
--

INSERT INTO `payment_methods` (`id`, `name`) VALUES
(1, 'Cash on delivery'),
(2, 'POS'),
(3, 'TTF'),
(4, 'TTM'),
(5, 'PrePaid');

-- --------------------------------------------------------

--
-- Table structure for table `payment_status`
--

CREATE TABLE `payment_status` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `payment_status`
--

INSERT INTO `payment_status` (`id`, `name`) VALUES
(1, 'Returned'),
(2, 'Delivered'),
(3, 'Pending'),
(4, 'in-Transit');

-- --------------------------------------------------------

--
-- Table structure for table `pricing`
--

CREATE TABLE `pricing` (
`id` int(11) NOT NULL,
  `weight` varchar(10) NOT NULL,
  `area` varchar(200) NOT NULL,
  `pricing` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `pricing`
--

INSERT INTO `pricing` (`id`, `weight`, `area`, `pricing`) VALUES
(5, '0.5', 'Mainland/VI/Lekki Phase 1', '800'),
(6, '0.5', 'Area 1', '1000'),
(7, '0.5', 'Area 2', '1500'),
(8, '1.0', 'Mainland/VI/Lekki Phase 1', '800'),
(9, '1.0', 'Area 1', '1000'),
(10, '1.0', 'Area 2', '1500'),
(11, '1.5', 'Mainland/VI/Lekki Phase 1', '800'),
(12, '1.5', 'Area 1', '1000'),
(13, '1.5', 'Area 2', '1500'),
(14, '2.0', 'Mainland/VI/Lekki Phase 1', '800'),
(15, '2.0', 'Area 1', '1000'),
(16, '2.0', 'Area 2', '1500');

-- --------------------------------------------------------

--
-- Table structure for table `shipment`
--

CREATE TABLE `shipment` (
`id` int(11) NOT NULL,
  `s_name` varchar(225) NOT NULL,
  `s_address` varchar(255) NOT NULL,
  `s_city` varchar(255) NOT NULL,
  `s_state` varchar(30) NOT NULL,
  `s_email` varchar(255) NOT NULL,
  `s_phone` varchar(11) NOT NULL,
  `r_name` varchar(255) NOT NULL,
  `r_address` varchar(255) NOT NULL,
  `r_phone` varchar(12) NOT NULL,
  `r_email` varchar(255) NOT NULL,
  `r_city` varchar(255) NOT NULL,
  `r_state` varchar(30) NOT NULL,
  `tracking_no` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `declare` text NOT NULL,
  `status` varchar(20) NOT NULL,
  `price` int(255) NOT NULL,
  `weight` varchar(11) NOT NULL,
  `collection_date` date NOT NULL,
  `delivery_date` varchar(15) NOT NULL,
  `month` int(12) NOT NULL,
  `mode` varchar(20) NOT NULL,
  `shipment_type` varchar(20) NOT NULL,
  `customerid` int(11) NOT NULL,
  `amount` int(20) NOT NULL,
  `size` int(10) NOT NULL,
  `pay_method` varchar(20) NOT NULL,
  `pay_status` varchar(10) NOT NULL,
  `extra_charges` float NOT NULL,
  `prepared_by` int(11) NOT NULL,
  `remitted` int(11) NOT NULL,
  `payment_made` varchar(4) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `shipment`
--

INSERT INTO `shipment` (`id`, `s_name`, `s_address`, `s_city`, `s_state`, `s_email`, `s_phone`, `r_name`, `r_address`, `r_phone`, `r_email`, `r_city`, `r_state`, `tracking_no`, `description`, `declare`, `status`, `price`, `weight`, `collection_date`, `delivery_date`, `month`, `mode`, `shipment_type`, `customerid`, `amount`, `size`, `pay_method`, `pay_status`, `extra_charges`, `prepared_by`, `remitted`, `payment_made`) VALUES
(1, 'Olufemi Oluoje', '46 Kayode street', 'Ogba', 'Category 1', 'kobomarun@gmail.com', '08023584566', 'Akan Ekpo', '14, akanro street, ilasamaja, Lagos, Nigeria.', '08039226286', 'macmonday2002@yahoo.com', 'Lagos.', 'Category 1', '741561125', '', '', 'Collection', 7400, '1.8', '2018-10-11', '0000-00-00 00:0', 9, '', '', 0, 0, 0, '', '', 0, 0, 0, ''),
(2, 'Oluwasegun Daramola', '21 Sesan Moyegun Street Off Adeshina Ijeshatedo', 'Surulere', 'Category 1', 'daramolasegun@gmail.com', '8070915578', 'Busari Rilwan', '14 Akolade Avenue, Madalla., 14 Akolade Avenue, Madalla.', '08148366295', 'korlarday47@yahoo.com', 'Madalla', 'Category 1', 'frx429825713', '', '', 'Transit', 45000, '10', '2018-10-11', '0000-00-00 00:0', 9, 'office', '', 0, 0, 0, '', '', 0, 0, 0, ''),
(3, 'Odunayo Babatope', 'Obafemi Awolowo, Ile-ife', 'Ile-ifw', 'Category 1', 'odunayo927@gmail.com', '07069724692', 'Damilola Ale', 'Obafemi Awolowo University', '08039159459', 'codepoetlady@gmail.com', 'Ile-Ife', 'Category 1', 'frx91117919', 'A pack of Ps4 game. 2 WWW CDs, 1 fifa 2019 gfame, Game of throne', 'none', 'Returned', 2300, '20.0', '2018-10-11', '0000-00-00 00:0', 10, 'office', 'Parcel', 0, 0, 0, '', '', 0, 0, 0, ''),
(4, 'Odunayo Babatope', 'Obafemi Awolowo, Ile-ife', 'Ile-ifw', 'Category 1', 'odunayo927@gmail.com', '07069724692', 'Damilola Ale', 'Obafemi Awolowo University', '08039159459', 'codepoetlady@gmail.com', 'Ile-Ife', 'Category 1', 'frx283543859', 'A pack of Ps4 game. 2 WWW CDs, 1 fifa 2019 gfame, Game of throne', 'none', 'Transit', 2300, '20.0', '2018-10-11', '10/12/2018', 10, 'office', 'Parcel', 0, 0, 0, '', '', 0, 0, 0, ''),
(5, 'Odunayo Babatope', 'Obafemi Awolowo, Ile-ife', 'Ile-ifw', 'Category 1', 'odunayo927@gmail.com', '07069724692', 'Damilola Ale', 'MAgboro', '08039159459', 'codepoetlady@gmail.com', 'Ogun', 'Category 1', 'frx983313708', 'A pack of Ps4 game. 2 WWW CDs, 1 fifa 2019 gfame, Game of throne', 'none', 'Collection Center', 2300, '20.0', '2018-10-11', '10/12/2018', 10, 'office', 'Parcel', 0, 0, 0, '', '', 0, 0, 0, ''),
(18, 'Womens Rights and Health Project', '196 Egbe-Ikotun Road', 'Ejigbo,', 'Ekiti', 'women@gmail.com', '18023584566', 'Oluwasegun Daramola', '21 Sesan Moyegun Street Off Adeshina Ijeshatedo', '08070915578', 'daramolasegun@gmail.com', 'Surulere', 'Lagos', 'frx623588308', 'none', 'none', 'Pending', 1000, '1.5', '2018-10-18', '10/20/2018', 10, 'office', 'Parcel', 2, 0, 0, 'Cash on delivery', 'Not Paid', 0, 1, 0, ''),
(20, 'Womens Rights and Health Project', '196 Egbe-Ikotun Road', 'Ejigbo,', 'Ekiti', 'women@gmail.com', '18023584566', 'Ridwan ABDUSALAM', 'UNILORIN, Male Lagos hostel, University of Ilorin,Ilorin, Nigeria.', '', 'ridwanabdsalam@gmail.com', 'Ilorin', 'Kwara', 'frx424458181', 'none', 'none', 'Pending', 900, '0.5', '2018-10-18', '10/20/2018', 10, 'office', 'Parcel', 2, 5000, 100, 'POS', 'Not Paid', 37.5, 1, 4063, ''),
(21, 'Womens Rights and Health Project', '196 Egbe-Ikotun Road', 'Ejigbo,', 'Ekiti', 'women@gmail.com', '18023584566', 'Damilola Ale', 'Obafemi Awolowo University', '08039159459', 'codepoetlady@gmail.com', 'Ile-Ife', 'Osun', 'frx776802674', 'One big bag', 'none', 'Pending', 800, '0.5', '2018-10-19', '10/20/2018', 10, 'office', 'Parcel', 2, 12000, 0, 'TTF', 'Not Paid', 50, 1, 11150, ''),
(22, 'Softvision Professionals', '46 Kayode street', 'Ogba', 'Lagos', 'kobomarun@gmail.com', '08023584566', 'Ridwan ABDUSALAM', 'UNILORIN', '', 'ridwanabdsalam@gmail.com', 'Ilorin', 'Kwara', 'frx463803263', 'none', 'none', 'in-Transit', 800, '0.5', '2018-10-19', '10/19/2018', 10, 'office', 'Parcel', 1, 0, 0, 'PrePaid', 'Paid', 0, 1, 0, 'Yes'),
(23, 'Softvision Professionals', '46 Kayode street', 'Ogba', 'Lagos', 'kobomarun@gmail.com', '08023584566', 'Akan Ekpo', '14, akanro street, ilasamaja, Lagos, Nigeria.', '08039226286', 'macmonday2002@yahoo.com', 'Lagos.', 'FCT', 'frx292999755', 'none', 'none', 'Pending', 1000, '1.5', '2018-10-19', '10/26/2018', 10, 'office', 'Parcel', 1, 0, 0, 'PrePaid', 'Paid', 0, 1, 0, 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `shipment_types`
--

CREATE TABLE `shipment_types` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `shipment_types`
--

INSERT INTO `shipment_types` (`id`, `name`) VALUES
(1, 'Parcel');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
`id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `name`) VALUES
(1, 'FCT'),
(2, 'ABIA'),
(3, 'ADAMAWA'),
(4, 'Akwa Ibom'),
(5, 'Anambra'),
(6, 'Bauchi'),
(7, 'Bayelsa'),
(8, 'Benue'),
(9, 'Bornu'),
(10, 'Cross River'),
(11, 'Delta'),
(12, 'Ebonyi'),
(13, 'Edo'),
(14, 'Ekiti'),
(15, 'Enugu'),
(16, 'Gombe'),
(17, 'Imo'),
(18, 'Jigawa'),
(19, 'Kaduna'),
(20, 'Kano'),
(21, 'Katsina'),
(22, 'Kebbi'),
(23, 'Kogi'),
(24, 'Kwara'),
(25, 'Lagos'),
(26, 'Nasarawa'),
(27, 'Niger'),
(28, 'Ogun'),
(29, 'Ondo'),
(30, 'Osun'),
(31, 'Oyo'),
(32, 'Plateau'),
(33, 'Rivers'),
(34, 'Sokoto'),
(35, 'Taraba'),
(36, 'Yobe'),
(37, 'Zamfara');

-- --------------------------------------------------------

--
-- Table structure for table `tracking`
--

CREATE TABLE `tracking` (
`id` int(11) NOT NULL,
  `status` varchar(30) NOT NULL,
  `date` datetime NOT NULL,
  `tracking_no` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `tracking`
--

INSERT INTO `tracking` (`id`, `status`, `date`, `tracking_no`) VALUES
(1, 'Collection Center', '0000-00-00 00:00:00', 'frx879493144'),
(2, 'Transit', '0000-00-00 00:00:00', 'frx879493144'),
(3, 'Delivered', '0000-00-00 00:00:00', 'frx879493144'),
(4, 'Returned', '2018-10-12 15:22:28', 'frx879493144'),
(5, 'Returned', '2018-10-15 13:15:51', 'frx91117919'),
(6, 'Pending', '0000-00-00 00:00:00', 'frx764805958'),
(7, 'Pending', '0000-00-00 00:00:00', 'frx424194905'),
(8, 'Returned', '0000-00-00 00:00:00', 'frx322118944'),
(9, 'Returned', '0000-00-00 00:00:00', 'frx755227953'),
(10, 'Pending', '0000-00-00 00:00:00', 'frx984921731'),
(11, 'Pending', '0000-00-00 00:00:00', 'frx464868553'),
(12, 'Pending', '0000-00-00 00:00:00', 'frx16384424'),
(13, 'Pending', '0000-00-00 00:00:00', 'frx894835754'),
(14, 'Pending', '0000-00-00 00:00:00', 'frx382197663'),
(15, 'Pending', '0000-00-00 00:00:00', 'frx437171777'),
(16, 'Pending', '0000-00-00 00:00:00', 'frx129425056'),
(17, 'Pending', '0000-00-00 00:00:00', 'frx748046894'),
(18, 'Delivered', '0000-00-00 00:00:00', 'frx139772481'),
(19, 'Pending', '0000-00-00 00:00:00', 'frx401232068'),
(20, 'Pending', '0000-00-00 00:00:00', 'frx993115844'),
(21, 'Pending', '0000-00-00 00:00:00', 'frx286845997'),
(22, 'Pending', '0000-00-00 00:00:00', 'frx623588308'),
(23, 'Pending', '0000-00-00 00:00:00', 'frx205576017'),
(24, 'Pending', '0000-00-00 00:00:00', 'frx424458181'),
(25, 'Pending', '0000-00-00 00:00:00', 'frx784332933'),
(26, 'Pending', '0000-00-00 00:00:00', 'frx776802674'),
(27, 'in-Transit', '0000-00-00 00:00:00', 'frx463803263'),
(28, 'Pending', '0000-00-00 00:00:00', 'frx292999755');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allusers`
--
ALTER TABLE `allusers`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `office`
--
ALTER TABLE `office`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_methods`
--
ALTER TABLE `payment_methods`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_status`
--
ALTER TABLE `payment_status`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pricing`
--
ALTER TABLE `pricing`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipment`
--
ALTER TABLE `shipment`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipment_types`
--
ALTER TABLE `shipment_types`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tracking`
--
ALTER TABLE `tracking`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `allusers`
--
ALTER TABLE `allusers`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `office`
--
ALTER TABLE `office`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `payment_methods`
--
ALTER TABLE `payment_methods`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `payment_status`
--
ALTER TABLE `payment_status`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pricing`
--
ALTER TABLE `pricing`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `shipment`
--
ALTER TABLE `shipment`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `shipment_types`
--
ALTER TABLE `shipment_types`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `tracking`
--
ALTER TABLE `tracking`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
