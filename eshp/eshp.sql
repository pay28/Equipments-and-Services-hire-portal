-- phpMyAdmin SQL Dump
-- version 2.11.2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 09, 2020 at 08:51 PM
-- Server version: 5.0.45
-- PHP Version: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `eshp`
--

-- --------------------------------------------------------

--
-- Table structure for table `client_register`
--

CREATE TABLE `client_register` (
  `id` int(11) NOT NULL auto_increment,
  `fname` varchar(500) NOT NULL,
  `lname` varchar(500) NOT NULL,
  `gender` varchar(500) NOT NULL,
  `username` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `contact` varchar(500) NOT NULL,
  `address` varchar(500) NOT NULL,
  `postcode` varchar(500) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `client_register`
--

INSERT INTO `client_register` (`id`, `fname`, `lname`, `gender`, `username`, `password`, `email`, `contact`, `address`, `postcode`) VALUES
(2, 'payal', 'kaur', 'female', 'payal12', '456', 'paya12l@gmail.com', '12323223', 'abcde', '12232');

-- --------------------------------------------------------

--
-- Table structure for table `myadmin`
--

CREATE TABLE `myadmin` (
  `id` int(11) NOT NULL auto_increment,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `myadmin`
--

INSERT INTO `myadmin` (`id`, `username`, `password`) VALUES
(1, 'admin', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `order_package`
--

CREATE TABLE `order_package` (
  `id` int(20) NOT NULL auto_increment,
  `cid` int(50) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `cdate` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `postcode` varchar(100) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `pprice` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `total` varchar(100) NOT NULL,
  `descr` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `order_package`
--

INSERT INTO `order_package` (`id`, `cid`, `cname`, `cdate`, `address`, `contact`, `postcode`, `pname`, `pprice`, `quantity`, `total`, `descr`) VALUES
(1, 2, 'payal12', '2020-06-09', 'abcde', '9875625223', '12232', 'Gold Package', '$500', '1', '500.00', ''),
(2, 2, 'payal12', '2020-06-10', 'abcde', '12323223', '12232', 'Gold Package', '$500', '1', '500.00', ''),
(3, 2, 'payal12', '2020-06-11', 'abcde', '12323223', '12232', 'Gold Package', '$500', '1', '500.00', 'more require');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `id` int(255) NOT NULL auto_increment,
  `package_name` varchar(255) NOT NULL,
  `package_desc` text NOT NULL,
  `amount` varchar(255) NOT NULL,
  `available` varchar(255) NOT NULL,
  `highlight` text NOT NULL,
  `path` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `package_name`, `package_desc`, `amount`, `available`, `highlight`, `path`) VALUES
(5, 'Silver', 'Starter Package', '350', '3', '15" Loudspeakers - 2, 18" Subwoofer - 1,  Basic DJ Lights,  Smoke Machine', 'upload/starter.jpg'),
(6, 'Gold', 'Advanced Package', '500', '4', 'Includes Starter pack, Advanced DJ Lights, DJ Facade,Extra Smoke Machine', 'upload/advanced.jpg'),
(7, 'Platinum', 'Pro Pack', '800', '5', 'Includes Advanced Pack ,Additional 18" Subwoofer, Pro DJ Lights, Ice/Fog Machine, Dholi', 'upload/home1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `payment_detail`
--

CREATE TABLE `payment_detail` (
  `id` int(11) NOT NULL auto_increment,
  `cid` int(100) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `paymentid` varchar(100) NOT NULL,
  `token` varchar(100) NOT NULL,
  `payerid` varchar(100) NOT NULL,
  `pdate` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `payment_detail`
--

INSERT INTO `payment_detail` (`id`, `cid`, `cname`, `paymentid`, `token`, `payerid`, `pdate`, `amount`) VALUES
(1, 2, 'payal12', 'PAYID-L3PE6SA56V09477101188111', 'EC-4E3715307B0935930', '5ST8EJVQRU7RC', '2020-06-08', '500.00'),
(2, 2, 'payal12', 'PAYID-L3PYEYI371320976R955173N', 'EC-3R895795GY359204B', '5ST8EJVQRU7RC', '2020-06-09', '500.00');
