-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2017 at 01:52 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ols`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `alloted_comp`
--

CREATE TABLE IF NOT EXISTS `alloted_comp` (
  `id` int(11) NOT NULL,
  `emp_name` varchar(20) NOT NULL,
  `emp_phone` varchar(20) NOT NULL,
  `emp_compeny` varchar(20) NOT NULL,
  `emp_compeny_num` varchar(20) NOT NULL,
  `comp_type` varchar(20) NOT NULL,
  `comp_name` varchar(20) NOT NULL,
  `num_comp` int(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `return_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `arduino`
--

CREATE TABLE IF NOT EXISTS `arduino` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  `qunatity` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `components`
--

CREATE TABLE IF NOT EXISTS `components` (
  `comp_id` int(11) NOT NULL,
  `comp_type` varchar(20) NOT NULL,
  `comp_name` varchar(20) NOT NULL,
  `num_comp` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comp_adapaters`
--

CREATE TABLE IF NOT EXISTS `comp_adapaters` (
  `adap_id` int(11) NOT NULL,
  `comp_type` varchar(20) NOT NULL,
  `comp_name` varchar(255) NOT NULL,
  `num_comp` int(10) unsigned NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comp_adapaters`
--

INSERT INTO `comp_adapaters` (`adap_id`, `comp_type`, `comp_name`, `num_comp`, `date`) VALUES
(1, 'Adapter', 'Adapter(9V-2Amp) high quality', 5, '2016-12-24 08:58:31'),
(2, 'Adapter', 'Adapter(9V-4Amp) high quality', 5, '2016-12-24 08:59:23'),
(3, 'Adapter', 'Adapter(12V-4Amp) high quality', 5, '2016-12-24 08:59:58'),
(4, 'Adapter', 'Adapter(12V-2Amp) high quality', 5, '2016-12-24 09:00:05'),
(5, 'Adapter', 'Adapter(5V-4Amp) high quality', 5, '2016-12-24 09:00:19'),
(6, 'Adapter', 'Adapter(5V-2Amp) high quality', 5, '2016-12-24 09:00:31');

-- --------------------------------------------------------

--
-- Table structure for table `comp_board`
--

CREATE TABLE IF NOT EXISTS `comp_board` (
  `board_id` int(11) NOT NULL,
  `comp_type` varchar(20) NOT NULL,
  `comp_name` varchar(255) NOT NULL,
  `num_comp` int(10) unsigned NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comp_board`
--

INSERT INTO `comp_board` (`board_id`, `comp_type`, `comp_name`, `num_comp`, `date`) VALUES
(1, 'Board', 'Bread boards', 10, '2016-12-24 06:43:00'),
(2, 'Board', 'General Boards (spec : different sizes(packets) )', 10, '2016-12-24 06:44:05');

-- --------------------------------------------------------

--
-- Table structure for table `comp_bugstrip`
--

CREATE TABLE IF NOT EXISTS `comp_bugstrip` (
  `bstrip_id` int(11) NOT NULL,
  `comp_type` varchar(20) NOT NULL,
  `comp_name` varchar(255) NOT NULL,
  `num_comp` int(10) unsigned NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comp_bugstrip`
--

INSERT INTO `comp_bugstrip` (`bstrip_id`, `comp_type`, `comp_name`, `num_comp`, `date`) VALUES
(1, 'Bug Strips', 'Burg Strips(Male)(packet)', 2, '2016-12-24 07:19:06'),
(2, 'Bug Strips', 'Burg Strips(Female)(packet)', 2, '2016-12-24 07:19:27');

-- --------------------------------------------------------

--
-- Table structure for table `comp_cables`
--

CREATE TABLE IF NOT EXISTS `comp_cables` (
  `cab_id` int(11) NOT NULL,
  `comp_type` varchar(20) NOT NULL,
  `comp_name` varchar(255) NOT NULL,
  `num_comp` int(20) unsigned NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comp_cables`
--

INSERT INTO `comp_cables` (`cab_id`, `comp_type`, `comp_name`, `num_comp`, `date`) VALUES
(1, 'Cables', 'HDMI to VGA', 10, '2016-12-24 09:09:37'),
(2, 'Cables', 'Micro Usb', 20, '2016-12-24 09:10:23'),
(3, 'Cables', 'Mini Usb', 20, '2016-12-24 09:11:07'),
(4, 'Cables', 'HDMI to HDMI', 10, '2016-12-24 09:11:42');

-- --------------------------------------------------------

--
-- Table structure for table `comp_connectors`
--

CREATE TABLE IF NOT EXISTS `comp_connectors` (
  `connect_id` int(11) NOT NULL,
  `comp_type` varchar(20) NOT NULL,
  `comp_name` varchar(255) NOT NULL,
  `num_comp` int(10) unsigned NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comp_connectors`
--

INSERT INTO `comp_connectors` (`connect_id`, `comp_type`, `comp_name`, `num_comp`, `date`) VALUES
(1, 'Connectors', '1pin Female to Female connector', 100, '2016-12-24 06:39:23'),
(2, 'Connectors', '2 pin 2 side connectors', 100, '2016-12-24 06:47:38'),
(3, 'Connectors', '2 pin 1 side connectors', 100, '2016-12-24 07:02:42'),
(4, 'Connectors', '4 pin 2 side connectors', 100, '2016-12-24 07:03:28'),
(5, 'Connectors', '4 pin 1 side connectors', 100, '2016-12-24 07:03:58'),
(6, 'Connectors', '1 pin Male to Male connectors', 100, '2016-12-24 07:04:25'),
(7, 'Connectors', '1 pin Female to Male connectors', 100, '2016-12-24 07:04:52'),
(8, 'Connectors', '1 pin Male to Female connectors', 100, '2016-12-24 07:06:24');

-- --------------------------------------------------------

--
-- Table structure for table `comp_controller`
--

CREATE TABLE IF NOT EXISTS `comp_controller` (
  `cont_id` int(11) NOT NULL,
  `comp_type` varchar(20) NOT NULL,
  `comp_name` varchar(255) NOT NULL,
  `num_comp` int(20) unsigned NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comp_controller`
--

INSERT INTO `comp_controller` (`cont_id`, `comp_type`, `comp_name`, `num_comp`, `date`) VALUES
(1, 'Controller', 'Arduino uno', 24, '2017-01-03 06:13:07'),
(2, 'Controller', 'BeagleBone Black(advanced kit)', 2, '2016-12-24 09:20:03'),
(3, 'Controller', 'orl', 20, '2017-01-03 06:11:39');

-- --------------------------------------------------------

--
-- Table structure for table `comp_convertr`
--

CREATE TABLE IF NOT EXISTS `comp_convertr` (
  `conv_id` int(11) NOT NULL,
  `comp_type` varchar(20) NOT NULL,
  `comp_name` varchar(255) NOT NULL,
  `num_comp` int(10) unsigned NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comp_convertr`
--

INSERT INTO `comp_convertr` (`conv_id`, `comp_type`, `comp_name`, `num_comp`, `date`) VALUES
(2, 'Converter', 'BUCK (spec : LM2596 with display)', 5, '2016-12-24 08:28:19'),
(3, 'Converter', 'BUCK (spec : LM2596 without display)', 10, '2016-12-24 08:28:58');

-- --------------------------------------------------------

--
-- Table structure for table `comp_diodes`
--

CREATE TABLE IF NOT EXISTS `comp_diodes` (
  `diod_id` int(11) NOT NULL,
  `comp_type` varchar(20) NOT NULL,
  `comp_name` varchar(255) NOT NULL,
  `num_comp` int(10) unsigned NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comp_diodes`
--

INSERT INTO `comp_diodes` (`diod_id`, `comp_type`, `comp_name`, `num_comp`, `date`) VALUES
(1, 'Diod', 'Diodes (spec : 1N4007)', 100, '2016-12-24 07:32:18'),
(2, 'Diod', 'Diodes (spec : 1N4148)', 100, '2016-12-24 07:33:46');

-- --------------------------------------------------------

--
-- Table structure for table `comp_glue`
--

CREATE TABLE IF NOT EXISTS `comp_glue` (
  `glue_id` int(11) NOT NULL,
  `comp_type` varchar(20) NOT NULL,
  `comp_name` varchar(255) NOT NULL,
  `num_comp` int(10) unsigned NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comp_glue`
--

INSERT INTO `comp_glue` (`glue_id`, `comp_type`, `comp_name`, `num_comp`, `date`) VALUES
(1, 'Glue', 'Glue Guns', 2, '2016-12-24 07:24:43'),
(2, 'Glue', 'Glue sticks(packets)', 3, '2016-12-24 07:26:47');

-- --------------------------------------------------------

--
-- Table structure for table `comp_leds`
--

CREATE TABLE IF NOT EXISTS `comp_leds` (
  `led_id` int(11) NOT NULL,
  `comp_type` varchar(10) NOT NULL,
  `comp_name` varchar(20) NOT NULL,
  `num_comp` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comp_leds`
--

INSERT INTO `comp_leds` (`led_id`, `comp_type`, `comp_name`, `num_comp`, `date`) VALUES
(1, 'LED', 'LED Red', 100, '2016-12-24 07:35:03'),
(2, 'LED', 'LED Green', 100, '2016-12-24 08:19:10'),
(3, 'LED', 'LED Blue', 100, '2016-12-24 08:21:18'),
(4, 'LED', 'Bicolured LEDS', 100, '2016-12-24 08:21:47');

-- --------------------------------------------------------

--
-- Table structure for table `comp_meters`
--

CREATE TABLE IF NOT EXISTS `comp_meters` (
  `met_id` int(11) NOT NULL,
  `comp_type` varchar(20) NOT NULL,
  `comp_name` varchar(255) NOT NULL,
  `num_comp` int(10) unsigned NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comp_meters`
--

INSERT INTO `comp_meters` (`met_id`, `comp_type`, `comp_name`, `num_comp`, `date`) VALUES
(1, 'Meter', 'Multimeters (spec : MAS-830L)', 3, '2016-12-24 06:38:06'),
(2, 'Meter', 'TBS2102(CRO)', 1, '2016-12-24 09:36:18'),
(3, 'Meter', 'FLUKE-362  CLAMP METER ', 1, '2016-12-24 09:36:36'),
(4, 'Meter', 'FLUKE-115/EM', 1, '2016-12-24 09:36:53');

-- --------------------------------------------------------

--
-- Table structure for table `comp_modules`
--

CREATE TABLE IF NOT EXISTS `comp_modules` (
  `mod_id` int(11) NOT NULL,
  `comp_type` varchar(11) NOT NULL,
  `comp_name` varchar(255) NOT NULL,
  `num_comp` int(10) unsigned NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comp_modules`
--

INSERT INTO `comp_modules` (`mod_id`, `comp_type`, `comp_name`, `num_comp`, `date`) VALUES
(1, 'Module', 'GSM/GPRS (spec : SIM900)', 3, '2016-12-24 09:04:05'),
(2, 'Module', 'GPS With Antenna,GNNS (spec : ublox neo 6m )', 3, '2016-12-24 09:04:51'),
(3, 'Module', 'Xbee S2 with USB Modem', 5, '2016-12-24 09:05:28'),
(4, 'Module', 'ESP8266 wifi chip + development board', 5, '2016-12-24 09:27:44'),
(5, 'Module', 'lora module (semtec) (spec : sx1272)', 5, '2016-12-24 09:28:38'),
(6, 'Module', 'USB Camers (spec : LOGITECH)', 5, '2016-12-24 09:34:24'),
(7, 'Module', 'BeagleBone Black cc2650 (spec : Launch pad)', 4, '2016-12-24 09:53:09'),
(8, 'Module', 'BeagleBone Black cc2650 (spec : Coin based)', 4, '2016-12-24 09:53:29'),
(9, 'Module', 'BeagleBone Black cc1350', 4, '2016-12-24 09:54:06'),
(10, 'Module', 'BeagleBone Black 3200', 3, '2016-12-24 09:54:25');

-- --------------------------------------------------------

--
-- Table structure for table `comp_motors`
--

CREATE TABLE IF NOT EXISTS `comp_motors` (
  `mot_id` int(11) NOT NULL,
  `comp_type` varchar(20) NOT NULL,
  `comp_name` varchar(255) NOT NULL,
  `num_comp` int(10) unsigned NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comp_motors`
--

INSERT INTO `comp_motors` (`mot_id`, `comp_type`, `comp_name`, `num_comp`, `date`) VALUES
(1, 'Moters', 'Solenoid Valve (spec : 12 Volts)', 10, '2016-12-24 08:52:10'),
(2, 'Moters', 'Micro Servo - SG 90', 10, '2016-12-24 08:54:04'),
(3, 'Moters', '100 RPM Motor With Driver L293D (spec : 12V)', 10, '2016-12-24 08:55:30'),
(4, 'Moters', 'Mini Stepper Motor (spec : ULN2003)', 10, '2016-12-24 09:51:43');

-- --------------------------------------------------------

--
-- Table structure for table `comp_potiomets`
--

CREATE TABLE IF NOT EXISTS `comp_potiomets` (
  `poti_id` int(11) NOT NULL,
  `comp_type` varchar(20) NOT NULL,
  `comp_name` varchar(20) NOT NULL,
  `num_comp` int(10) unsigned NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comp_processor`
--

CREATE TABLE IF NOT EXISTS `comp_processor` (
  `proc_id` int(11) NOT NULL,
  `comp_type` varchar(20) NOT NULL,
  `comp_name` varchar(255) NOT NULL,
  `num_comp` int(10) unsigned NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comp_processor`
--

INSERT INTO `comp_processor` (`proc_id`, `comp_type`, `comp_name`, `num_comp`, `date`) VALUES
(1, 'Processor', 'Raspberry Pi 3', 3, '2016-12-27 09:13:46'),
(2, 'Processor', 'Intel Edison ', 123, '2016-12-24 12:44:03'),
(3, 'Processor', 'Intel Curie(Genuino 101)', 2, '2016-12-24 09:14:50');

-- --------------------------------------------------------

--
-- Table structure for table `comp_rectifiers`
--

CREATE TABLE IF NOT EXISTS `comp_rectifiers` (
  `rec_id` int(11) NOT NULL,
  `comp_name` varchar(20) NOT NULL,
  `comp_spec` varchar(20) NOT NULL,
  `num_comp` int(10) unsigned NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comp_relay`
--

CREATE TABLE IF NOT EXISTS `comp_relay` (
  `rea_id` int(11) NOT NULL,
  `comp_type` varchar(20) NOT NULL,
  `comp_name` varchar(255) NOT NULL,
  `num_comp` int(20) unsigned NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comp_relay`
--

INSERT INTO `comp_relay` (`rea_id`, `comp_type`, `comp_name`, `num_comp`, `date`) VALUES
(1, 'Relay', 'Relay(With Board) (spec : 5V/6V)', 10, '2016-12-24 08:47:57');

-- --------------------------------------------------------

--
-- Table structure for table `comp_resistors`
--

CREATE TABLE IF NOT EXISTS `comp_resistors` (
  `res_id` int(11) NOT NULL,
  `comp_type` varchar(20) NOT NULL,
  `comp_name` varchar(255) NOT NULL,
  `num_comp` int(10) unsigned NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comp_resistors`
--

INSERT INTO `comp_resistors` (`res_id`, `comp_type`, `comp_name`, `num_comp`, `date`) VALUES
(1, 'Resistors', 'Resistors (spec : 18)', 200, '2016-12-24 05:47:19'),
(2, 'Resistors', 'Resistors (spec : 47)', 200, '2016-12-24 05:50:55'),
(3, 'Resistors', 'Resistors (spec : 100)', 200, '2016-12-24 06:07:50'),
(4, 'Resistors', 'Resistors (spec : 220)', 200, '2016-12-24 06:12:36'),
(5, 'Resistors', 'Resistors (spec : 330)', 200, '2016-12-24 06:13:01'),
(6, 'Resistors', 'Resistors (spec : 470)', 200, '2016-12-24 06:14:34'),
(7, 'Resistors', 'Resistors (spec : 510)', 200, '2016-12-24 06:14:53'),
(8, 'Resistors', 'Resistors (spec : 1k)', 200, '2016-12-24 06:15:35'),
(9, 'Resistors', 'Resistors (spec : 2.2k)', 200, '2016-12-24 06:16:32'),
(10, 'Resistors', 'Resistors (spec : 5k)', 200, '2016-12-24 06:18:24'),
(11, 'Resistors', 'Resistors (spec : 10k)', 200, '2016-12-24 06:18:49'),
(12, 'Resistors', 'Resistors (spec : 15k)', 200, '2016-12-24 06:19:05'),
(13, 'Resistors', 'Resistors (spec : 47k)', 200, '2016-12-24 06:19:22'),
(14, 'Resistors', 'Resistors (spec : 100k)', 200, '2016-12-24 06:19:35'),
(15, 'Resistors', 'Resistors (spec : 1M)', 200, '2016-12-24 06:20:51'),
(16, 'Resistors', 'POT (spec : 10k )', 100, '2016-12-24 08:26:09'),
(17, 'Resistors', 'POT (spec : 1k)', 100, '2016-12-24 08:26:23');

-- --------------------------------------------------------

--
-- Table structure for table `comp_sensors`
--

CREATE TABLE IF NOT EXISTS `comp_sensors` (
  `sens_id` int(11) NOT NULL,
  `comp_type` varchar(20) NOT NULL,
  `comp_name` varchar(255) NOT NULL,
  `num_comp` int(10) unsigned NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comp_sensors`
--

INSERT INTO `comp_sensors` (`sens_id`, `comp_type`, `comp_name`, `num_comp`, `date`) VALUES
(1, 'Sensors', 'DHT11 (spec : Module BreakOut Board)', 5, '2016-12-24 08:32:23'),
(2, 'Sensors', 'Air Quality  Sensor(MQ-135) (spec : Module BreakOut Board)', 5, '2016-12-24 08:33:06'),
(3, 'Sensors', 'Alchol Sensor(MQ-3) (spec : Module BreakOut Board)', 5, '2016-12-24 08:34:37'),
(4, 'Sensors', 'Temperature Sensor (spec : LM-35)', 5, '2016-12-24 08:35:08'),
(5, 'Sensors', 'Temperature Probe (spec : DS18B20)', 5, '2016-12-24 08:36:00'),
(6, 'Sensors', 'Ultrasonic Sensor (spec : SR04)', 5, '2016-12-24 08:38:23'),
(7, 'Sensors', 'PIR Sensor', 5, '2016-12-24 08:38:39'),
(8, 'Sensors', 'Tilt Sensor (spec : ADXL335 )', 5, '2016-12-24 08:39:30'),
(9, 'Sensors', 'Gyro (spec : MPU 6050)', 5, '2016-12-24 08:40:58'),
(10, 'Sensors', 'Heart rate Sensor', 5, '2016-12-24 08:41:38');

-- --------------------------------------------------------

--
-- Table structure for table `comp_soldering`
--

CREATE TABLE IF NOT EXISTS `comp_soldering` (
  `sold_id` int(11) NOT NULL,
  `comp_type` varchar(20) NOT NULL,
  `comp_name` varchar(255) NOT NULL,
  `num_comp` int(10) unsigned NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comp_soldering`
--

INSERT INTO `comp_soldering` (`sold_id`, `comp_type`, `comp_name`, `num_comp`, `date`) VALUES
(1, 'Soldering', 'Soldron Soldering Station ( Model No: 936 )', 2, '2016-12-24 06:34:47'),
(2, 'Soldering', 'Goot Soldering Rod ( spec : ks-60R)', 3, '2016-12-24 06:36:09'),
(3, 'Soldering', 'Copper Led ( spec : Industrial purpose )', 3, '2016-12-24 06:40:52'),
(4, 'Soldering', 'Flux (spec : Industrial purpose)', 5, '2016-12-24 06:41:25'),
(5, 'Soldering', 'Stands', 3, '2016-12-24 06:44:36'),
(6, 'Soldering', 'Bits', 10, '2016-12-24 06:44:54');

-- --------------------------------------------------------

--
-- Table structure for table `comp_storage`
--

CREATE TABLE IF NOT EXISTS `comp_storage` (
  `stor_id` int(11) NOT NULL,
  `comp_type` varchar(20) NOT NULL,
  `comp_name` varchar(255) NOT NULL,
  `num_comp` int(10) unsigned NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comp_storage`
--

INSERT INTO `comp_storage` (`stor_id`, `comp_type`, `comp_name`, `num_comp`, `date`) VALUES
(1, 'Storage', 'Memory Card (spec : 16GB, CLASS 10)', 5, '2016-12-24 09:32:30'),
(2, 'Storage', 'SD Card Reader (spec : USB)', 5, '2016-12-24 09:33:30');

-- --------------------------------------------------------

--
-- Table structure for table `comp_transistors`
--

CREATE TABLE IF NOT EXISTS `comp_transistors` (
  `trans_id` int(11) NOT NULL,
  `comp_type` varchar(20) NOT NULL,
  `comp_name` varchar(255) NOT NULL,
  `num_comp` int(10) unsigned NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comp_transistors`
--

INSERT INTO `comp_transistors` (`trans_id`, `comp_type`, `comp_name`, `num_comp`, `date`) VALUES
(1, 'Transistor', 'Transistors (spec : BC547)', 100, '2016-12-24 08:23:58');

-- --------------------------------------------------------

--
-- Table structure for table `comp_wires`
--

CREATE TABLE IF NOT EXISTS `comp_wires` (
  `wire_id` int(11) NOT NULL,
  `comp_type` varchar(20) NOT NULL,
  `comp_name` varchar(255) NOT NULL,
  `num_comp` int(10) unsigned NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comp_wires`
--

INSERT INTO `comp_wires` (`wire_id`, `comp_type`, `comp_name`, `num_comp`, `date`) VALUES
(1, 'Wire', 'Jumper Wire single stand(packets)', 3, '2016-12-24 07:09:24'),
(2, 'Wire', 'Ribbon Wire(bundle)', 1, '2016-12-24 07:09:55');

-- --------------------------------------------------------

--
-- Table structure for table `prev_alloted_comp`
--

CREATE TABLE IF NOT EXISTS `prev_alloted_comp` (
  `prev_allot_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `emp_name` varchar(20) NOT NULL,
  `emp_phone` varchar(20) NOT NULL,
  `emp_compeny` varchar(20) NOT NULL,
  `emp_compeny_num` varchar(20) NOT NULL,
  `comp_type` varchar(20) NOT NULL,
  `comp_name` varchar(20) NOT NULL,
  `num_comp` int(20) unsigned NOT NULL,
  `alloted_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `return_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prev_alloted_comp`
--

INSERT INTO `prev_alloted_comp` (`prev_allot_id`, `id`, `emp_name`, `emp_phone`, `emp_compeny`, `emp_compeny_num`, `comp_type`, `comp_name`, `num_comp`, `alloted_date`, `return_date`) VALUES
(1, 1, 'kiran', '8008340884', 'orl', '9999999999', 'Controller', 'Arduino uno', 10, '2017-01-03 06:12:28', '2017-01-03 06:13:07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `joined` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `phone`, `email`, `password`, `joined`) VALUES
(1, 'kiran', 'kiran', '1234567890', 'kiran@gmal.com', 'kiran', '2017-02-07 05:57:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alloted_comp`
--
ALTER TABLE `alloted_comp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `arduino`
--
ALTER TABLE `arduino`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `components`
--
ALTER TABLE `components`
  ADD PRIMARY KEY (`comp_id`);

--
-- Indexes for table `comp_adapaters`
--
ALTER TABLE `comp_adapaters`
  ADD PRIMARY KEY (`adap_id`), ADD UNIQUE KEY `comp_name` (`comp_name`);

--
-- Indexes for table `comp_board`
--
ALTER TABLE `comp_board`
  ADD PRIMARY KEY (`board_id`), ADD UNIQUE KEY `comp_name` (`comp_name`);

--
-- Indexes for table `comp_bugstrip`
--
ALTER TABLE `comp_bugstrip`
  ADD PRIMARY KEY (`bstrip_id`), ADD UNIQUE KEY `comp_name` (`comp_name`);

--
-- Indexes for table `comp_cables`
--
ALTER TABLE `comp_cables`
  ADD PRIMARY KEY (`cab_id`), ADD UNIQUE KEY `comp_name` (`comp_name`);

--
-- Indexes for table `comp_connectors`
--
ALTER TABLE `comp_connectors`
  ADD PRIMARY KEY (`connect_id`), ADD UNIQUE KEY `comp_name` (`comp_name`);

--
-- Indexes for table `comp_controller`
--
ALTER TABLE `comp_controller`
  ADD PRIMARY KEY (`cont_id`), ADD UNIQUE KEY `comp_name` (`comp_name`), ADD UNIQUE KEY `comp_name_2` (`comp_name`);

--
-- Indexes for table `comp_convertr`
--
ALTER TABLE `comp_convertr`
  ADD PRIMARY KEY (`conv_id`), ADD UNIQUE KEY `comp_name` (`comp_name`);

--
-- Indexes for table `comp_diodes`
--
ALTER TABLE `comp_diodes`
  ADD PRIMARY KEY (`diod_id`), ADD UNIQUE KEY `comp_name` (`comp_name`);

--
-- Indexes for table `comp_glue`
--
ALTER TABLE `comp_glue`
  ADD PRIMARY KEY (`glue_id`), ADD UNIQUE KEY `comp_name` (`comp_name`);

--
-- Indexes for table `comp_leds`
--
ALTER TABLE `comp_leds`
  ADD PRIMARY KEY (`led_id`), ADD UNIQUE KEY `comp_name` (`comp_name`);

--
-- Indexes for table `comp_meters`
--
ALTER TABLE `comp_meters`
  ADD PRIMARY KEY (`met_id`), ADD UNIQUE KEY `comp_name` (`comp_name`);

--
-- Indexes for table `comp_modules`
--
ALTER TABLE `comp_modules`
  ADD PRIMARY KEY (`mod_id`), ADD UNIQUE KEY `comp_name` (`comp_name`);

--
-- Indexes for table `comp_motors`
--
ALTER TABLE `comp_motors`
  ADD PRIMARY KEY (`mot_id`), ADD UNIQUE KEY `comp_name` (`comp_name`);

--
-- Indexes for table `comp_potiomets`
--
ALTER TABLE `comp_potiomets`
  ADD PRIMARY KEY (`poti_id`), ADD UNIQUE KEY `comp_name` (`comp_name`);

--
-- Indexes for table `comp_processor`
--
ALTER TABLE `comp_processor`
  ADD PRIMARY KEY (`proc_id`), ADD UNIQUE KEY `comp_name` (`comp_name`);

--
-- Indexes for table `comp_rectifiers`
--
ALTER TABLE `comp_rectifiers`
  ADD PRIMARY KEY (`rec_id`), ADD UNIQUE KEY `comp_name` (`comp_name`);

--
-- Indexes for table `comp_relay`
--
ALTER TABLE `comp_relay`
  ADD PRIMARY KEY (`rea_id`);

--
-- Indexes for table `comp_resistors`
--
ALTER TABLE `comp_resistors`
  ADD PRIMARY KEY (`res_id`);

--
-- Indexes for table `comp_sensors`
--
ALTER TABLE `comp_sensors`
  ADD PRIMARY KEY (`sens_id`);

--
-- Indexes for table `comp_soldering`
--
ALTER TABLE `comp_soldering`
  ADD PRIMARY KEY (`sold_id`);

--
-- Indexes for table `comp_storage`
--
ALTER TABLE `comp_storage`
  ADD PRIMARY KEY (`stor_id`);

--
-- Indexes for table `comp_transistors`
--
ALTER TABLE `comp_transistors`
  ADD PRIMARY KEY (`trans_id`);

--
-- Indexes for table `comp_wires`
--
ALTER TABLE `comp_wires`
  ADD PRIMARY KEY (`wire_id`);

--
-- Indexes for table `prev_alloted_comp`
--
ALTER TABLE `prev_alloted_comp`
  ADD PRIMARY KEY (`prev_allot_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `alloted_comp`
--
ALTER TABLE `alloted_comp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `arduino`
--
ALTER TABLE `arduino`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `components`
--
ALTER TABLE `components`
  MODIFY `comp_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `comp_adapaters`
--
ALTER TABLE `comp_adapaters`
  MODIFY `adap_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `comp_board`
--
ALTER TABLE `comp_board`
  MODIFY `board_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `comp_bugstrip`
--
ALTER TABLE `comp_bugstrip`
  MODIFY `bstrip_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `comp_cables`
--
ALTER TABLE `comp_cables`
  MODIFY `cab_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `comp_connectors`
--
ALTER TABLE `comp_connectors`
  MODIFY `connect_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `comp_controller`
--
ALTER TABLE `comp_controller`
  MODIFY `cont_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `comp_convertr`
--
ALTER TABLE `comp_convertr`
  MODIFY `conv_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `comp_diodes`
--
ALTER TABLE `comp_diodes`
  MODIFY `diod_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `comp_glue`
--
ALTER TABLE `comp_glue`
  MODIFY `glue_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `comp_leds`
--
ALTER TABLE `comp_leds`
  MODIFY `led_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `comp_meters`
--
ALTER TABLE `comp_meters`
  MODIFY `met_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `comp_modules`
--
ALTER TABLE `comp_modules`
  MODIFY `mod_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `comp_motors`
--
ALTER TABLE `comp_motors`
  MODIFY `mot_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `comp_potiomets`
--
ALTER TABLE `comp_potiomets`
  MODIFY `poti_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `comp_processor`
--
ALTER TABLE `comp_processor`
  MODIFY `proc_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `comp_rectifiers`
--
ALTER TABLE `comp_rectifiers`
  MODIFY `rec_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `comp_relay`
--
ALTER TABLE `comp_relay`
  MODIFY `rea_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `comp_resistors`
--
ALTER TABLE `comp_resistors`
  MODIFY `res_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `comp_sensors`
--
ALTER TABLE `comp_sensors`
  MODIFY `sens_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `comp_soldering`
--
ALTER TABLE `comp_soldering`
  MODIFY `sold_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `comp_storage`
--
ALTER TABLE `comp_storage`
  MODIFY `stor_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `comp_transistors`
--
ALTER TABLE `comp_transistors`
  MODIFY `trans_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `comp_wires`
--
ALTER TABLE `comp_wires`
  MODIFY `wire_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `prev_alloted_comp`
--
ALTER TABLE `prev_alloted_comp`
  MODIFY `prev_allot_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
