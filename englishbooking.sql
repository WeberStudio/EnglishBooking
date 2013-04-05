-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 05, 2013 at 03:17 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `englishbooking`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminnotifaction`
--

CREATE TABLE IF NOT EXISTS `adminnotifaction` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `collegeid` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '1',
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `adminnotifaction`
--

INSERT INTO `adminnotifaction` (`id`, `collegeid`, `text`, `url`, `status`, `datetime`) VALUES
(8, '', 'A new Student enrolled', 'http://192.168.1.100/jamshaid/CodeIgniter/admin_main/students_info/get_student_info/36', '0', '2013-03-01 18:49:34'),
(7, '', 'A new Student enrolled', 'http://192.168.1.100/jamshaid/CodeIgniter/admin_main/students_info/get_student_info/35', '1', '2013-03-01 01:00:31'),
(6, '', 'A new Student enrolled', 'http://192.168.1.100/jamshaid/CodeIgniter/admin_main/students_info/get_student_info/34', '1', '2013-03-01 00:59:30'),
(5, '', 'A new Student enrolled', 'http://192.168.1.100/jamshaid/CodeIgniter/admin_main/students_info/get_student_info/33', '1', '2013-03-01 00:58:46'),
(9, '', 'A new Student enrolled', 'http://192.168.1.100/jamshaid/CodeIgniter/admin_main/students_info/get_student_info/37', '1', '2013-03-01 01:07:09'),
(10, '', 'A new Student enrolled', 'http://192.168.1.100/jamshaid/CodeIgniter/admin_main/students_info/get_student_info/38', '1', '2013-03-01 01:12:00'),
(11, '', 'A new Student enrolled', 'http://192.168.1.100/jamshaid/CodeIgniter/admin_main/students_info/get_student_info/39', '1', '2013-03-01 01:12:12'),
(12, '', 'A new Student enrolled', 'http://192.168.1.100/jamshaid/CodeIgniter/admin_main/students_info/get_student_info/40', '1', '2013-03-01 01:14:20'),
(13, '', 'A new Student enrolled', 'http://192.168.1.100/jamshaid/CodeIgniter/admin_main/students_info/get_student_info/41', '1', '2013-03-01 01:17:30'),
(14, '', 'A new Student enrolled', 'http://192.168.1.100/jamshaid/CodeIgniter/admin_main/students_info/get_student_info/42', '1', '2013-03-01 01:18:13'),
(15, '', 'A new Student enrolled', '', '1', '2013-03-01 01:20:48'),
(16, '', 'A new Student enrolled', 'http://192.168.1.100/jamshaid/CodeIgniter/admin_main/students_info/get_student_info/44', '1', '2013-03-01 13:11:20'),
(17, '', 'A new Student enrolled', 'http://192.168.1.100/jamshaid/CodeIgniter/admin_main/students_info/get_student_info/45', '1', '2013-03-01 15:05:30'),
(18, '', 'A new Student enrolled', 'http://192.168.1.100/jamshaid/CodeIgniter/admin_main/students_info/get_student_info/46', '1', '2013-03-01 15:06:49'),
(19, '', 'A new Student enrolled', 'http://192.168.1.100/jamshaid/CodeIgniter/admin_main/students_info/get_student_info/47', '1', '2013-03-05 12:06:46');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `status`) VALUES
(1, 'Intensive English', 1),
(2, ' General English', 1),
(3, 'IELTS ', 1),
(4, 'One 2 One English', 1),
(5, 'Business English', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('baeadd3c798ed1e3750bd97945c59e44', '192.168.1.104', 'Mozilla/5.0 (Windows NT 6.1; rv:19.0) Gecko/20100101 Firefox/19.0', 1362477679, ''),
('1dd9e00367ad04cbe643eee800d57413', '192.168.1.103', 'Mozilla/5.0 (Windows NT 6.1; rv:16.0) Gecko/20100101 Firefox/16.0', 1362478594, ''),
('8abdd740a798c59aaba76429e3b35964', '192.168.1.103', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.32 (KHTML, like Gecko) Chrome/27.0.1425.2 Safari/537.32', 1362474796, ''),
('3c20f297634033d0d20c160d4f831291', '192.168.1.103', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.32 (KHTML, like Gecko) Chrome/27.0.1425.2 Safari/537.32', 1362465337, 'a:7:{s:9:"user_data";s:0:"";s:15:"locationaddress";N;s:8:"category";N;s:10:"searchdate";N;s:5:"weeks";N;s:7:"enddate";N;s:11:"amountrange";N;}'),
('d088526f3224bbbf34da164050699997', '192.168.1.103', 'Mozilla/5.0 (Windows NT 6.1; rv:16.0) Gecko/20100101 Firefox/16.0', 1362467159, 'a:33:{s:15:"locationaddress";N;s:8:"category";N;s:10:"searchdate";N;s:5:"weeks";N;s:7:"enddate";N;s:11:"amountrange";N;s:9:"course_id";s:1:"7";s:9:"branch_id";s:2:"16";s:10:"offerprice";s:3:"100";s:11:"family_name";s:7:"husnain";s:9:"four_name";s:5:"Ahmad";s:13:"date_of_birth";s:8:"1971-3-4";s:6:"gender";s:5:"Other";s:11:"nationality";s:8:"Pakistan";s:7:"address";s:6:"lahore";s:9:"telephone";s:11:"03336917963";s:3:"fax";s:11:"03336917963";s:7:"illness";s:17:"have any illness,";s:5:"smoke";s:2:"on";s:10:"other_info";s:17:"have any illness,";s:13:"english_level";s:12:"intermediate";s:11:"other_info2";s:17:"have any illness,";s:9:"ocopation";s:17:"have any illness,";s:12:"college_name";s:17:"have any illness,";s:12:"accomodation";s:5:"hotel";s:17:"accomodation_info";s:0:"";s:5:"email";s:13:"asd33@asd.com";s:8:"password";s:3:"aaa";s:10:"student_id";s:2:"47";s:13:"student_email";s:13:"asd33@asd.com";s:12:"student_name";s:5:"Ahmad";s:14:"session_status";s:2:"47";s:13:"flash:old:msg";s:44:"Your information has been sucssfully updated";}'),
('8139264b89a14185939e0db3f4994a19', '192.168.1.104', 'Mozilla/5.0 (Windows NT 6.1; rv:19.0) Gecko/20100101 Firefox/19.0', 1362470068, '');

-- --------------------------------------------------------

--
-- Table structure for table `customernotifaction`
--

CREATE TABLE IF NOT EXISTS `customernotifaction` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `collegeid` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `customernotifaction`
--

INSERT INTO `customernotifaction` (`id`, `collegeid`, `text`, `url`, `status`, `datetime`) VALUES
(9, '1', 'A New Student File is upload', 'http://192.168.1.100/jamshaid/CodeIgniter//customer_student_messages/get_messages/1/2', '0', '2013-02-27 16:43:13'),
(8, '1', 'A New Student File is upload', 'http://192.168.1.100/jamshaid/CodeIgniter//customer_student_messages/get_messages/1/1', '1', '2013-02-27 16:39:09'),
(6, '1', 'A New Student File is upload', 'http://192.168.1.100/jamshaid/CodeIgniter/user/student_view/view_student/2', '0', '2013-02-26 12:26:01'),
(7, '1', 'A New Student File is upload', 'http://192.168.1.100/jamshaid/CodeIgniter//customer_student_messages/get_messages/2/1', '0', '2013-02-27 16:37:25'),
(10, '1', 'A New Student File is upload', 'http://192.168.1.100/jamshaid/CodeIgniter//customer_student_messages/get_messages/1/2', '0', '2013-02-27 16:42:48'),
(11, '1', 'A New Student File is upload', 'http://192.168.1.100/jamshaid/CodeIgniter//customer_student_messages/get_messages/1/2', '0', '2013-02-27 16:39:45'),
(12, '1', 'A New Student File is upload', 'http://192.168.1.100/jamshaid/CodeIgniter/user/customer_student_messages/get_messages/1/1', '0', '2013-02-28 14:58:09'),
(13, '1', 'A New Student File is upload', 'http://192.168.1.100/jamshaid/CodeIgniter/user/customer_student_messages/get_messages/1/1', '0', '2013-02-27 16:53:47'),
(14, '1', 'A New Student File is upload', 'http://192.168.1.100/jamshaid/CodeIgniter/user/customer_student_messages/get_messages/1/1', '0', '2013-02-28 12:45:36'),
(15, '1', 'A New Student File is upload', 'http://192.168.1.100/jamshaid/CodeIgniter/user/customer_student_messages/get_messages/1/2', '0', '2013-02-27 16:53:57'),
(16, '1', 'A New Student is enrolled', 'http://192.168.1.100/jamshaid/CodeIgniter/user/courses_detail/students/14', '1', '2013-02-28 16:07:59');

-- --------------------------------------------------------

--
-- Table structure for table `eb_adminuser`
--

CREATE TABLE IF NOT EXISTS `eb_adminuser` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_loginname` varchar(255) NOT NULL,
  `user_emailaddress` varchar(55) NOT NULL,
  `user_skypeid` varchar(55) NOT NULL,
  `user_address` varchar(255) NOT NULL,
  `user_contactno1` varchar(55) NOT NULL,
  `user_contactno2` varchar(55) NOT NULL,
  `user_officecontactno` varchar(55) NOT NULL,
  `user_image` varchar(255) NOT NULL,
  `user_rights` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `eb_adminuser`
--

INSERT INTO `eb_adminuser` (`user_id`, `user_name`, `user_password`, `user_loginname`, `user_emailaddress`, `user_skypeid`, `user_address`, `user_contactno1`, `user_contactno2`, `user_officecontactno`, `user_image`, `user_rights`, `status`) VALUES
(1, 'admin1', 'admin', 'admin', 'admin@gmail.com', 'admin', 'Lahore', '03336917963', '03336917963', '03336917963', 'test', 'all', 1),
(2, 'test', 'admin', 'adcoreproductions', 'test@test.com', 'admin', 'lahore', '123456', '03336917963', '03336917963', '', '1,3,4,6', 0);

-- --------------------------------------------------------

--
-- Table structure for table `eb_admin_chat`
--

CREATE TABLE IF NOT EXISTS `eb_admin_chat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `student_name` varchar(55) NOT NULL,
  `admin_name` varchar(55) NOT NULL,
  `message` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `course_status` tinyint(1) NOT NULL DEFAULT '0',
  `student_status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Dumping data for table `eb_admin_chat`
--


-- --------------------------------------------------------

--
-- Table structure for table `eb_branches_diversity`
--

CREATE TABLE IF NOT EXISTS `eb_branches_diversity` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `college_id` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `persentage` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `eb_branches_diversity`
--

INSERT INTO `eb_branches_diversity` (`id`, `college_id`, `branch_id`, `nationality`, `persentage`) VALUES
(20, 5, 16, 'Pakistan', '50'),
(19, 4, 15, 'British', '50'),
(18, 4, 15, 'Pakistan', '50'),
(17, 4, 14, 'British', '50'),
(16, 4, 14, 'Pakistan', '50');

-- --------------------------------------------------------

--
-- Table structure for table `eb_collegedetails`
--

CREATE TABLE IF NOT EXISTS `eb_collegedetails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `post_code` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(55) NOT NULL,
  `fax` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `year_of_establish` varchar(20) NOT NULL,
  `no_branches` varchar(20) NOT NULL,
  `hts` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `eb_collegedetails`
--

INSERT INTO `eb_collegedetails` (`id`, `cid`, `name`, `city`, `post_code`, `address`, `phone`, `fax`, `email`, `year_of_establish`, `no_branches`, `hts`, `description`, `image`, `status`) VALUES
(2, 4, 'UK Open College', 'London', 'CV1 2FL ', '4, Copthall House  The Meridian  Station Square  Coventry  West Midlands ', '06130321 ', '01827 288298', 'info@ukopencollege.co.uk', '2003', '4', 'ht', 'Home study courses are now seen as the ideal way of learning a new subject. Whethxcxc888,;;''''er you are studying for a career, a promotion or purely a general interest, home study courses fit in nicely to even the busiest of routines. \r\n\r\nThe process of studying at home could not be simpler. Once you have found the course you would like to study simply process your details and payment online or by calling our office on 0800 0131030. Once we receive your details we you will receive your course study pack via the post within seven days. If you have enrolled onto one of our e learning courses it can take up to 5 days to receive your access code and password. This will be issued via email. ', '1362069991ukopen_colg.jpg', 0),
(3, 5, 'Birmingham', 'London', '57000', 'Edgbaston Birmingham B15 2TT United Kingdom', '03336917963', '03336917963', 'info@birmingham.com', '2000', '2', 'ht', 'Dr Pam Kearns & Dr Victoria Weston and Dr Mark Cobbold discuss their approaches to tackling Leukaemia from investigating drug use in childhood Leukaemia to redirected viral immunotherapy.', '13621517501356589727c3.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `eb_colleges`
--

CREATE TABLE IF NOT EXISTS `eb_colleges` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rand_id` int(11) NOT NULL,
  `useremail` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `collegename` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `touristimage` varchar(255) NOT NULL,
  `touristfile` varchar(255) NOT NULL,
  `touristshortdes` varchar(255) NOT NULL,
  `Busimage` varchar(255) NOT NULL,
  `Busfile` varchar(255) NOT NULL,
  `Busshortdes` varchar(255) NOT NULL,
  `Storesimage` varchar(255) NOT NULL,
  `Storesfile` varchar(255) NOT NULL,
  `Storesshortdes` varchar(255) NOT NULL,
  `Restaurantsimage` varchar(255) NOT NULL,
  `Restaurantsfile` varchar(255) NOT NULL,
  `Restaurantsshortdes` varchar(255) NOT NULL,
  `Airportimage` varchar(255) NOT NULL,
  `Airportfile` varchar(255) NOT NULL,
  `Airportshortdes` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `eb_colleges`
--

INSERT INTO `eb_colleges` (`id`, `rand_id`, `useremail`, `password`, `collegename`, `status`, `touristimage`, `touristfile`, `touristshortdes`, `Busimage`, `Busfile`, `Busshortdes`, `Storesimage`, `Storesfile`, `Storesshortdes`, `Restaurantsimage`, `Restaurantsfile`, `Restaurantsshortdes`, `Airportimage`, `Airportfile`, `Airportshortdes`) VALUES
(5, 2147483647, 'info@birmingham.com', 'admin', 'Birmingham University', 1, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, 85, 'info@ukopencollege.com', 'admin', 'UK Open College', 1, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `eb_college_branches`
--

CREATE TABLE IF NOT EXISTS `eb_college_branches` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `college_id` varchar(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `post_code` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `fax` varchar(20) NOT NULL,
  `email` varchar(55) NOT NULL,
  `year_of_establish` varchar(20) NOT NULL,
  `traffic_info` text NOT NULL,
  `intertainment_info` text NOT NULL,
  `weather_info` text NOT NULL,
  `accommodation` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `touristimage` varchar(255) NOT NULL,
  `touristfile` varchar(255) NOT NULL,
  `touristshortdes` varchar(255) NOT NULL,
  `Busimage` varchar(255) NOT NULL,
  `Busfile` varchar(255) NOT NULL,
  `Busshortdes` varchar(255) NOT NULL,
  `Storesimage` varchar(255) NOT NULL,
  `Storesfile` varchar(255) NOT NULL,
  `Storesshortdes` varchar(255) NOT NULL,
  `Restaurantsimage` varchar(255) NOT NULL,
  `Restaurantsfile` varchar(255) NOT NULL,
  `Restaurantsshortdes` varchar(255) NOT NULL,
  `Airportimage` varchar(255) NOT NULL,
  `Airportfile` varchar(255) NOT NULL,
  `Airportshortdes` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `eb_college_branches`
--

INSERT INTO `eb_college_branches` (`id`, `college_id`, `name`, `city`, `post_code`, `address`, `phone`, `fax`, `email`, `year_of_establish`, `traffic_info`, `intertainment_info`, `weather_info`, `accommodation`, `description`, `image`, `status`, `touristimage`, `touristfile`, `touristshortdes`, `Busimage`, `Busfile`, `Busshortdes`, `Storesimage`, `Storesfile`, `Storesshortdes`, `Restaurantsimage`, `Restaurantsfile`, `Restaurantsshortdes`, `Airportimage`, `Airportfile`, `Airportshortdes`) VALUES
(16, '5', 'Birmingham main branch', 'London', 'CV1 2FL', 'Edgbaston Birmingham B15 2TT United Kingdom ', '121 414 3344', '121 414 3971', 'info@birmingham.com', '2000', '', '', '', 'host_family,,,', '', '1362079498Untitled-4.jpg', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(14, '4', 'UK Open College London Branch', 'London', 'CV1 2FL', '4, Copthall House  The Meridian  Station Square  Coventry  West Midlands', '06130321', '01827 288298', 'info@ukbranch.com', '2003', '', '', '', 'host_family,private,college,hotels', 'Home study courses are now seen as the ideal way of learning a new subject. Whether you are studying for a career, a promotion or purely a general interest, home study courses fit in nicely to even the busiest of routines. \r\n''''\r\nThe process of studying at home could not be simpler. Once you have found the course you would like to study simply process your details and payment online or by calling our office on 0800 0131030. Once we receive your details we you will receive your course study pack via the post within seven days. If you have enrolled onto one of our e learning courses it can take up to 5 days to receive your access code and password. This will be issued via email. ', '1362070174ukopen_colg.jpg', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(15, '4', 'Birmingham Branch', 'Birmingham', '57000', 'Edgbaston Birmingham B15 2TT United Kingdom', '121 414 3344', '121 414 3971 ', 'info@Birmingham.com', '2000', '', '', '', ',,,', 'Useful phone numbers, email and postal address for key departments within the University. Contact information for departments not listed here can be found on their individual webpages.', '1362072961Astonwebbpanorama-Cropped-510x275.jpg', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `eb_college_doc`
--

CREATE TABLE IF NOT EXISTS `eb_college_doc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cid` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `eb_college_doc`
--

INSERT INTO `eb_college_doc` (`id`, `cid`, `filename`) VALUES
(13, 4, 'CAHTYPU MANUAL.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `eb_college_of_day`
--

CREATE TABLE IF NOT EXISTS `eb_college_of_day` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `colleg_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `selecteddate` varchar(50) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `eb_college_of_day`
--

INSERT INTO `eb_college_of_day` (`id`, `colleg_id`, `date`, `selecteddate`, `status`) VALUES
(8, 4, '2013-02-28 23:48:36', '', 1),
(7, 4, '2013-02-28 23:48:36', '30', 0);

-- --------------------------------------------------------

--
-- Table structure for table `eb_college_personaldetail`
--

CREATE TABLE IF NOT EXISTS `eb_college_personaldetail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(55) NOT NULL,
  `mobile` varchar(55) NOT NULL,
  `fax` varchar(55) NOT NULL,
  `skype` varchar(55) NOT NULL,
  `county` varchar(55) NOT NULL,
  `city` varchar(55) NOT NULL,
  `gender` varchar(55) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `eb_college_personaldetail`
--

INSERT INTO `eb_college_personaldetail` (`id`, `cid`, `name`, `email`, `phone`, `mobile`, `fax`, `skype`, `county`, `city`, `gender`, `status`) VALUES
(2, 4, 'Command', 'husnain.swl@gmail.com', '03336917963', '03336917963', '03336917963', 'husnain_swl', 'Pakistan', 'Lahore', 'Male', 0),
(3, 5, 'Mr Birmingham', 'info@birmingham.com', '06130321', '123123111', '01827 288298', 'husnain_swl', 'United Kingdom ', 'London', 'Male', 0);

-- --------------------------------------------------------

--
-- Table structure for table `eb_cource`
--

CREATE TABLE IF NOT EXISTS `eb_cource` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `college_id` int(11) NOT NULL,
  `college_name` varchar(255) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `courcename` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `offerprice` varchar(55) NOT NULL,
  `agentcommesion` varchar(55) NOT NULL,
  `courcerequirmentdoc` varchar(255) NOT NULL,
  `duration` varchar(55) NOT NULL,
  `startdate` varchar(55) NOT NULL,
  `enddate` varchar(55) NOT NULL,
  `session` varchar(55) NOT NULL,
  `english_offer_price` varchar(55) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `eb_cource`
--

INSERT INTO `eb_cource` (`id`, `college_id`, `college_name`, `branch_id`, `category`, `courcename`, `address`, `offerprice`, `agentcommesion`, `courcerequirmentdoc`, `duration`, `startdate`, `enddate`, `session`, `english_offer_price`, `description`, `image`, `status`) VALUES
(7, 5, 'Birmingham University', 16, '1', 'Academic English Skills intensive', '', '100', '8', '719f572c4d9985be73b23bfd60445b22.image.150x150.jpg', '3', '01/03/2013', '28/03/2013', 'Spring', '', 'Academic English Skills intensive summer course We offer a full-time, intensive 3 week course in September for students who have already met the English language requirements related to their academic course and hold an unconditional offer. ', '13620711842b297afef2824e1906cf30c223e8b49d.image.150x150.jpg', 0),
(6, 4, 'UK Open College', 15, '3', 'Ielts', '', '100', '10', 'CAHTYPU MANUAL.pdf', '3', '06/02/2013', '28/02/2013', 'Spring', '', 'Useful phone numbers, email and postal address for key departments within the University. Contact information for departments not listed here can be found on their individual webpages.', '13620711842b297afef2824e1906cf30c223e8b49d.jpg', 0),
(5, 4, 'UK Open College', 14, '2', 'EXECUTIVE OFFICE SKILLS LEVEL 2 COURSE', '', '100', '10', '2b297afef2824e1906cf30c223e8b49d.image.150x150.jpg', '4', '28/02/2013', '28/03/2013', 'Spring', '', 'This home learning course is designed for anyone looking to gain or improve their office and administration skills.', '13620711842b297afef2824e1906cf30c223e8b49d.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `eb_course_of_day`
--

CREATE TABLE IF NOT EXISTS `eb_course_of_day` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `selecteddate` varchar(50) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `eb_course_of_day`
--

INSERT INTO `eb_course_of_day` (`id`, `course_id`, `date`, `selecteddate`, `status`) VALUES
(8, 5, '2013-02-28 23:47:53', '28', 1);

-- --------------------------------------------------------

--
-- Table structure for table `eb_emailaddress`
--

CREATE TABLE IF NOT EXISTS `eb_emailaddress` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `emailaddress` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `eb_emailaddress`
--

INSERT INTO `eb_emailaddress` (`id`, `title`, `emailaddress`, `status`) VALUES
(1, 'Contact us', 'contact@englishbooking.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `eb_email_templates`
--

CREATE TABLE IF NOT EXISTS `eb_email_templates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email_name` varchar(255) NOT NULL,
  `email_label` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `email_variables` text NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `eb_email_templates`
--

INSERT INTO `eb_email_templates` (`id`, `email_name`, `email_label`, `title`, `email_variables`, `description`, `status`) VALUES
(1, '', 'news letter', 'emial', '', '<html>\r\n	<head>\r\n		<title></title>\r\n	</head>\r\n	<body>\r\n		<p>\r\n			bhhjkhk[[email]]</p>\r\n	</body>\r\n</html>\r\n', 0),
(2, 'offerletter', 'email ', 'enau', 'hgegh', '<html>\r\n	<head>\r\n		<title></title>\r\n	</head>\r\n	<body>\r\n		<p>\r\n			v</p>\r\n	</body>\r\n</html>\r\n', 0),
(3, 'Auto responder for contact us', 'Contact us ', 'Contact ', '[[Email]],[[Name]]', '<html>\r\n	<head>\r\n		<title></title>\r\n	</head>\r\n	<body>\r\n		<p>\r\n			dsd</p>\r\n	</body>\r\n</html>\r\n', 0);

-- --------------------------------------------------------

--
-- Table structure for table `eb_homepage_text`
--

CREATE TABLE IF NOT EXISTS `eb_homepage_text` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `value` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `eb_homepage_text`
--

INSERT INTO `eb_homepage_text` (`id`, `value`) VALUES
(1, '<html>\r\n	<head>\r\n		<title></title>\r\n	</head>\r\n	<body>\r\n		<p>\r\n			Some description about this destination.dssddsds</p>\r\n		<p>\r\n			Some description about this destination.</p>\r\n		<p>\r\n			Some description about this destination.</p>\r\n		<p>\r\n			Some description about this destination.</p>\r\n	</body>\r\n</html>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `eb_newsletter`
--

CREATE TABLE IF NOT EXISTS `eb_newsletter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `eb_newsletter`
--

INSERT INTO `eb_newsletter` (`id`, `email`, `date`, `status`) VALUES
(1, 'husnain.swl@gmail.com', '2013-01-01 12:13:12', 0),
(2, 'husnain_swl@yahoo.com', '2013-01-01 12:13:23', 0);

-- --------------------------------------------------------

--
-- Table structure for table `eb_pages`
--

CREATE TABLE IF NOT EXISTS `eb_pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `meta_keywords` varchar(255) NOT NULL,
  `meta_description` text NOT NULL,
  `description` text NOT NULL,
  `position` varchar(55) NOT NULL,
  `status` int(11) NOT NULL,
  `url` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `eb_pages`
--

INSERT INTO `eb_pages` (`id`, `title`, `meta_keywords`, `meta_description`, `description`, `position`, `status`, `url`) VALUES
(1, 'Contact', 'Contact', 'Contact', 'Contact', 'top', 1, ''),
(2, 'Why us', 'About us', 'dssd', '&lt;html&gt;\r\n	&lt;head&gt;\r\n		&lt;title&gt;&lt;/title&gt;\r\n	&lt;/head&gt;\r\n	&lt;body&gt;\r\n	&lt;/body&gt;\r\n&lt;/html&gt;\r\n', 'top', 1, 'About-us'),
(3, 'test', 'test', 'test', '&lt;html&gt;\r\n	&lt;head&gt;\r\n		&lt;title&gt;&lt;/title&gt;\r\n	&lt;/head&gt;\r\n	&lt;body&gt;\r\n		&lt;p&gt;\r\n			ccxc&lt;/p&gt;\r\n	&lt;/body&gt;\r\n&lt;/html&gt;\r\n', 'bottom', 1, 'test-about-me');

-- --------------------------------------------------------

--
-- Table structure for table `eb_popularcollege`
--

CREATE TABLE IF NOT EXISTS `eb_popularcollege` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cid` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `eb_popularcollege`
--

INSERT INTO `eb_popularcollege` (`id`, `cid`, `date`, `status`) VALUES
(7, 4, '2013-03-01 00:05:50', 1);

-- --------------------------------------------------------

--
-- Table structure for table `eb_popularcourses`
--

CREATE TABLE IF NOT EXISTS `eb_popularcourses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cid` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `eb_popularcourses`
--

INSERT INTO `eb_popularcourses` (`id`, `cid`, `date`, `status`) VALUES
(10, 5, '2013-03-01 15:39:45', 1);

-- --------------------------------------------------------

--
-- Table structure for table `eb_recommenedcourse`
--

CREATE TABLE IF NOT EXISTS `eb_recommenedcourse` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cid` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `eb_recommenedcourse`
--

INSERT INTO `eb_recommenedcourse` (`id`, `cid`, `date`, `status`) VALUES
(12, 5, '2013-03-01 15:35:14', 0);

-- --------------------------------------------------------

--
-- Table structure for table `eb_selected_course`
--

CREATE TABLE IF NOT EXISTS `eb_selected_course` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `process` int(11) NOT NULL DEFAULT '1',
  `student_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `price` varchar(55) NOT NULL,
  `session_id` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `eb_selected_course`
--

INSERT INTO `eb_selected_course` (`id`, `process`, `student_id`, `course_id`, `branch_id`, `date`, `price`, `session_id`, `status`) VALUES
(1, 1, 44, 7, 16, '2013-03-01 13:12:34', '100', '', 0),
(2, 1, 45, 7, 16, '2013-03-01 15:05:44', '100', '', 0),
(3, 1, 46, 7, 16, '2013-03-01 15:07:07', '100', '', 0),
(4, 1, 39, 7, 16, '2013-03-01 15:54:54', '', '', 0),
(5, 1, 47, 7, 16, '2013-03-05 12:06:48', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `eb_showhidecollegecourse`
--

CREATE TABLE IF NOT EXISTS `eb_showhidecollegecourse` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `value` int(11) NOT NULL,
  `text` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `eb_showhidecollegecourse`
--

INSERT INTO `eb_showhidecollegecourse` (`id`, `value`, `text`) VALUES
(1, 1, 'College Of the Month '),
(2, 1, 'Course Of the Month '),
(3, 1, ''),
(4, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `eb_social`
--

CREATE TABLE IF NOT EXISTS `eb_social` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `eb_social`
--

INSERT INTO `eb_social` (`id`, `url`, `title`, `image`, `status`) VALUES
(1, 'http://www.facebook.com', 'facebook', 'fb.jpg', 0),
(2, 'http://www.twitter.com', 'Twitter', 'tw.jpg', 0),
(3, 'http://www.linkedin.com', 'linkedin', 'in.jpg', 0),
(4, 'http://www.youtube.com', 'youtube', 'ut.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `eb_student_documents`
--

CREATE TABLE IF NOT EXISTS `eb_student_documents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `admin_upload` tinyint(1) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=53 ;

--
-- Dumping data for table `eb_student_documents`
--


-- --------------------------------------------------------

--
-- Table structure for table `eb_student_notifaction`
--

CREATE TABLE IF NOT EXISTS `eb_student_notifaction` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `text` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Dumping data for table `eb_student_notifaction`
--

INSERT INTO `eb_student_notifaction` (`id`, `student_id`, `text`, `url`, `status`, `datetime`) VALUES
(9, 2, 'A New Student File is upload', 'http://192.168.1.100/jamshaid/CodeIgniter/user/student_view/view_student/', '1', '2013-02-20 18:34:46'),
(10, 2, 'A New Student File is upload', 'http://192.168.1.100/jamshaid/CodeIgniter/user/student_documents/admin_documents/', '1', '2013-02-20 18:37:14'),
(11, 2, 'Admin send you a message', 'http://192.168.1.100/jamshaid/CodeIgniter/user/student_documents/admin_documents/', '0', '2013-02-26 15:29:54'),
(12, 2, 'Admin send you a message', 'http://192.168.1.100/jamshaid/CodeIgniter/user/customer_student_messages/get_messages/2/9', '1', '2013-02-20 19:15:58'),
(13, 2, 'Admin send you a message', 'http://192.168.1.100/jamshaid/CodeIgniter/user/customer_student_messages/get_messages/2/0', '1', '2013-02-20 19:32:37'),
(14, 2, 'Admin send you a message', 'http://192.168.1.100/jamshaid/CodeIgniter/user/customer_student_messages/get_messages/2/0', '1', '2013-02-20 19:32:54'),
(15, 2, 'Admin send you a message', 'http://192.168.1.100/jamshaid/CodeIgniter/user/customer_student_messages/get_messages/2/0', '1', '2013-02-20 19:33:23'),
(16, 2, 'Admin send you a message', 'http://192.168.1.100/jamshaid/CodeIgniter/user/customer_student_messages/get_messages/2/0', '1', '2013-02-20 19:33:54'),
(17, 2, 'Admin send you a message', 'http://192.168.1.100/jamshaid/CodeIgniter/user/customer_student_messages/get_messages/2/0', '0', '2013-02-28 15:23:34'),
(18, 2, 'Admin send you a message', 'http://192.168.1.100/jamshaid/CodeIgniter/user/customer_student_messages/get_messages/2/0', '1', '2013-02-20 19:34:14'),
(19, 2, 'Admin send you a message', 'http://192.168.1.100/jamshaid/CodeIgniter/user/customer_student_messages/get_messages/2/0', '1', '2013-02-20 19:34:15'),
(20, 2, 'Admin send you a message', 'http://192.168.1.100/jamshaid/CodeIgniter/user/customer_student_messages/get_messages/2/0', '1', '2013-02-20 19:35:32'),
(21, 2, 'Admin send you a message', 'http://192.168.1.100/jamshaid/CodeIgniter/user/customer_student_messages/get_messages/2/0', '1', '2013-02-20 19:35:33'),
(22, 2, 'Admin send you a message', 'http://192.168.1.100/jamshaid/CodeIgniter/user/customer_student_messages/get_messages/2/0', '1', '2013-02-20 19:48:18'),
(23, 2, 'Admin send you a message', 'http://192.168.1.100/jamshaid/CodeIgniter/user/customer_student_messages/get_messages/2/0', '1', '2013-02-20 19:48:20'),
(24, 2, 'Admin send you a message', 'http://192.168.1.100/jamshaid/CodeIgniter/user/customer_student_messages/get_messages/2/0', '1', '2013-02-20 19:48:23'),
(25, 2, 'Admin send you a message', 'http://192.168.1.100/jamshaid/CodeIgniter/user/customer_student_messages/get_messages/2/0', '1', '2013-02-20 19:48:26'),
(26, 2, 'Admin send you a message', 'http://192.168.1.100/jamshaid/CodeIgniter/user/customer_student_messages/get_messages/2/0', '0', '2013-02-28 15:02:16'),
(27, 2, 'Admin send you a message', 'http://192.168.1.100/jamshaid/CodeIgniter/user/customer_student_messages/get_messages/2/0', '0', '2013-02-26 12:43:44'),
(28, 2, 'Admin send you a message', 'http://192.168.1.100/jamshaid/CodeIgniter/user/customer_student_messages/get_messages/2/0', '0', '2013-02-26 12:43:23'),
(29, 2, 'Admin send you a message', 'http://192.168.1.100/jamshaid/CodeIgniter/user/customer_student_messages/get_messages/2/0', '0', '2013-02-26 12:43:18'),
(30, 2, 'Admin send you a message', 'http://192.168.1.100/jamshaid/CodeIgniter/user/customer_student_messages/get_messages/2/0', '0', '2013-02-26 12:43:02'),
(31, 2, 'Admin send you a message', 'http://192.168.1.100/jamshaid/CodeIgniter/user/customer_student_messages/get_messages/2/0', '0', '2013-02-26 12:42:40'),
(32, 2, 'Admin send you a message', 'http://192.168.1.100/jamshaid/CodeIgniter/user/customer_student_messages/get_messages/2/0', '0', '2013-02-26 12:42:26'),
(33, 2, 'Admin send you a message', 'http://192.168.1.100/jamshaid/CodeIgniter/user/customer_student_messages/get_messages/2/0', '0', '2013-02-26 11:25:14'),
(34, 2, 'Admin send you a message', 'http://192.168.1.100/jamshaid/CodeIgniter/user/customer_student_messages/get_messages/2/0', '0', '2013-02-26 11:24:51'),
(40, 2, 'A New Student File is upload', 'http://192.168.1.100/jamshaid/CodeIgniter/user/student_documents/admin_documents/', '0', '2013-02-26 12:42:23'),
(41, 2, 'A New Student File is upload', 'http://192.168.1.100/jamshaid/CodeIgniter/user/student_documents/admin_documents/', '0', '2013-02-26 12:42:19'),
(42, 2, 'Admin send you a message', 'http://192.168.1.100/jamshaid/CodeIgniter/user/customer_student_messages/get_messages/2/1', '1', '2013-02-27 16:36:43'),
(43, 1, 'Admin send you a message', 'http://192.168.1.100/jamshaid/CodeIgniter/user/customer_student_messages/get_messages/1/1', '1', '2013-02-27 16:39:09'),
(44, 1, 'Admin send you a message', 'http://192.168.1.100/jamshaid/CodeIgniter/user/customer_student_messages/get_messages/1/2', '1', '2013-02-27 16:39:15'),
(45, 1, 'Admin send you a message', 'http://192.168.1.100/jamshaid/CodeIgniter/user/customer_student_messages/get_messages/1/2', '1', '2013-02-27 16:39:16'),
(46, 1, 'Admin send you a message', 'http://192.168.1.100/jamshaid/CodeIgniter/user/customer_student_messages/get_messages/1/2', '1', '2013-02-27 16:39:18'),
(47, 1, 'Admin send you a message', 'http://192.168.1.100/jamshaid/CodeIgniter/user/customer_student_messages/get_messages/1/1', '1', '2013-02-27 16:50:58'),
(48, 1, 'Admin send you a message', 'http://192.168.1.100/jamshaid/CodeIgniter/user/customer_student_messages/get_messages/1/1', '1', '2013-02-27 16:53:00'),
(49, 1, 'Admin send you a message', 'http://192.168.1.100/jamshaid/CodeIgniter/user/customer_student_messages/get_messages/1/1', '1', '2013-02-27 16:53:04'),
(50, 1, 'Admin send you a message', 'http://192.168.1.100/jamshaid/CodeIgniter/user/customer_student_messages/get_messages/1/2', '1', '2013-02-27 16:53:06');

-- --------------------------------------------------------

--
-- Table structure for table `eb_student_profile`
--

CREATE TABLE IF NOT EXISTS `eb_student_profile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `family_name` varchar(255) NOT NULL,
  `four_name` varchar(255) NOT NULL,
  `date_of_birth` varchar(55) NOT NULL,
  `gender` varchar(55) NOT NULL,
  `nationality` varchar(55) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(55) NOT NULL,
  `telephone` varchar(55) NOT NULL,
  `fax` varchar(55) NOT NULL,
  `ref_id` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL,
  `illness` varchar(255) NOT NULL,
  `smoke` varchar(255) NOT NULL,
  `other_info` text NOT NULL,
  `english_level` varchar(255) NOT NULL,
  `other_info2` text NOT NULL,
  `ocopation` varchar(255) NOT NULL,
  `college_name` varchar(255) NOT NULL,
  `accomodation` varchar(55) NOT NULL,
  `accomodation_info` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `showcustomer` int(11) NOT NULL,
  `register_from` varchar(55) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `eb_student_profile`
--

INSERT INTO `eb_student_profile` (`id`, `family_name`, `four_name`, `date_of_birth`, `gender`, `nationality`, `address`, `email`, `telephone`, `fax`, `ref_id`, `password`, `illness`, `smoke`, `other_info`, `english_level`, `other_info2`, `ocopation`, `college_name`, `accomodation`, `accomodation_info`, `status`, `showcustomer`, `register_from`) VALUES
(47, 'husnain', 'Ahmad', '1971-3-4', 'Other', 'Pakistan', 'lahore', 'asd33@asd.com', '03336917963', '03336917963', '', 'aaa', 'have any illness,', 'on', 'have any illness,', 'intermediate', 'have any illness,', 'have any illness,', 'have any illness,', 'hotel', '', 0, 0, 'course'),
(45, 'test', 'testing', '1971-2-4', 'male', 'pakistani', 'lahore', 'husnain.swl44@gmail.com', '09328524565', '0824546512345', '', '123', 'fddf', 'on', 'dfdf', 'beginner', 'dfdf', 'dfdf', 'dfdf', 'other', 'dfdfdf', 0, 0, 'course'),
(46, 'test', 'testing', '1970-2-3', 'male', 'pakistani', '123', 'husnain55.swl@gmail.com', '09328524565', '0824546512345', '', '123', 'gfd', 'on', 'dg', 'beginner', 'gfg', 'gg', 'gf', 'other', 'gfgf', 0, 0, 'course'),
(44, 'Malik', 'Haroon', '1986-7-12', 'male', 'Pakistani', '123', 'mr.haroonmalik@gmail.com', '03219666617', '03219666617', '', 'ironman', 'no', 'on', 'no', 'intermediate', 'no', 'business', 'core', 'hotel', '', 0, 0, 'course'),
(42, 'husnain', 'Ahmad', '1971-2-4', 'male', 'Pakistan', 'Sahiwal', 'husnain.swl@gmail.com', '03336917963', '03336917963', '', '123', 'fvbfg', 'on', 'fggf', 'beginner', 'fgfg', 'fgfg', 'fgfg', 'no_accomodation', '', 0, 0, 'course'),
(43, 'husnain', 'Ahmad', '1970-3-3', 'male', 'Pakistan', 'Sahiwal', 'husnain.swl@gmail.com', '03336917963', '03336917963', '', '123', 'dsdsds', 'on', 'dsdsds', 'beginner', 'dssdsd', 'sdsd', 'sdsdsd', 'no_accomodation', '', 0, 0, 'course'),
(40, 'husnian', 'ahmad', '1971-2-2', 'male', 'Pakistan', 'lahore', 'admin@yahoo.com', '03336917963', '03336917963', '', 'admin', 'no', 'on', 'no', 'intermediate', 'no', 'no', 'no', 'other', 'no', 0, 0, 'course'),
(41, 'husnain', 'Ahmad', '1971-2-4', 'male', 'Pakistan', 'Sahiwal', 'husnain.swl@gmail.com', '03336917963', '03336917963', '', '1234', 'fvbfg', 'on', 'fggf', 'beginner', 'fgfg', 'fgfg', 'fgfg', 'no_accomodation', '', 0, 0, 'course'),
(39, 'husnian', 'ahmad', '1972-3-2', 'male', 'Pakistan', 'Lahore', 'admin@gmail.com', '03336917963', '03336917963', '', 'admin', 'no', 'on', 'no', 'advance', 'no', 'no', 'no', 'other', 'no', 0, 0, 'course'),
(38, 'husnian', 'ahmad', '1972-3-2', 'male', 'Pakistan', 'Lahore', 'admin@admin.com', '03336917963', '03336917963', '', 'admin', 'no', 'on', 'no', 'advance', 'no', 'no', 'no', 'other', 'no', 0, 0, 'course'),
(37, 'husnian', 'ahmad', '1972-3-2', 'male', 'Pakistan', 'Lahore', 'admin@admin.com', '03336917963', '03336917963', '', 'admin', 'no', 'on', 'no', 'advance', 'no', 'no', 'no', 'other', 'no', 0, 0, 'course'),
(36, 'husnain', 'Ahmad', '1972-4-4', 'male', 'Pakistan', 'Sahiwal', 'husnain.swl@gmail.com', '03336917963', '03336917963', '', 'admin', 'no', 'on', 'no', 'elementry', 'no', 'no', 'no', 'other', 'no', 0, 0, 'course'),
(35, 'husnain', 'Ahmad', '1972-4-4', 'male', 'Pakistan', 'Sahiwal', 'husnain.swl@gmail.com', '03336917963', '03336917963', '', 'admin', 'no', 'on', 'no', 'elementry', 'no', 'no', 'no', 'other', 'no', 0, 0, 'course'),
(33, 'husnain', 'Ahmad', '1970-1-3', 'male', 'Pakistan', 'Sahiwal', 'admin@gmail.com', '03336917963', '03336917963', '', 'admin', 'no', 'on', 'no', 'proficient', 'no', 'no', 'no', 'other', 'no', 0, 0, 'course'),
(34, 'husnain', 'Ahmad', '1970-1-3', 'male', 'Pakistan', 'Sahiwal', 'admin@gmail.com', '03336917963', '03336917963', '', 'admin', 'no', 'on', 'no', 'proficient', 'no', 'no', 'no', 'other', 'no', 0, 0, 'course');

-- --------------------------------------------------------

--
-- Table structure for table `eb_student_registration`
--

CREATE TABLE IF NOT EXISTS `eb_student_registration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `family_name` varchar(255) NOT NULL,
  `four_name` varchar(255) NOT NULL,
  `date_of_birth` varchar(55) NOT NULL,
  `gender` varchar(55) NOT NULL,
  `nationality` varchar(55) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(55) NOT NULL,
  `telephone` varchar(55) NOT NULL,
  `fax` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL,
  `illness` varchar(55) NOT NULL,
  `smoke` varchar(55) NOT NULL,
  `other_info` text NOT NULL,
  `english_level` varchar(55) NOT NULL,
  `other_info2` text NOT NULL,
  `ocopation` varchar(55) NOT NULL,
  `college_name` varchar(55) NOT NULL,
  `accomodation` varchar(55) NOT NULL,
  `accomodation_info` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `eb_student_registration`
--


-- --------------------------------------------------------

--
-- Table structure for table `eb_subscribe_offer`
--

CREATE TABLE IF NOT EXISTS `eb_subscribe_offer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `date` varchar(20) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `eb_subscribe_offer`
--

INSERT INTO `eb_subscribe_offer` (`id`, `email`, `date`, `status`) VALUES
(1, 'husnain.swl@gmail.com', '', 0),
(2, 'husnain_swl@yahoo.com', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `eb_testimonials`
--

CREATE TABLE IF NOT EXISTS `eb_testimonials` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `value` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `timedate` datetime NOT NULL,
  `cid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `eb_testimonials`
--

INSERT INTO `eb_testimonials` (`id`, `value`, `name`, `timedate`, `cid`) VALUES
(1, '12', '12', '0000-00-00 00:00:00', 1),
(2, 'This is a nice Course', 'Husnain 34', '0000-00-00 00:00:00', 5),
(3, 'This is a nice Course', 'Husnain 34', '0000-00-00 00:00:00', 6);

-- --------------------------------------------------------

--
-- Table structure for table `eb_toolfree`
--

CREATE TABLE IF NOT EXISTS `eb_toolfree` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `val` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `eb_toolfree`
--

INSERT INTO `eb_toolfree` (`id`, `val`) VALUES
(1, '12334');

-- --------------------------------------------------------

--
-- Table structure for table `eb_userright`
--

CREATE TABLE IF NOT EXISTS `eb_userright` (
  `rg_id` int(11) NOT NULL AUTO_INCREMENT,
  `rg_name` varchar(255) NOT NULL,
  PRIMARY KEY (`rg_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `eb_userright`
--

INSERT INTO `eb_userright` (`rg_id`, `rg_name`) VALUES
(1, 'Admin User'),
(2, 'colleges'),
(3, 'Pages'),
(4, 'Eamils'),
(5, 'Social media links'),
(6, 'Subscriptions'),
(7, 'Advertisement'),
(8, 'Tool Free #'),
(9, 'Students'),
(10, 'Categories course'),
(11, 'Reports');

-- --------------------------------------------------------

--
-- Table structure for table `livehelp_autoinvite`
--

CREATE TABLE IF NOT EXISTS `livehelp_autoinvite` (
  `idnum` int(10) NOT NULL AUTO_INCREMENT,
  `isactive` char(1) NOT NULL DEFAULT '',
  `department` int(10) NOT NULL DEFAULT '0',
  `message` text,
  `page` varchar(255) NOT NULL DEFAULT '',
  `visits` int(8) NOT NULL DEFAULT '0',
  `referer` varchar(255) NOT NULL DEFAULT '',
  `typeof` varchar(255) NOT NULL DEFAULT '',
  `seconds` int(11) unsigned NOT NULL DEFAULT '0',
  `user_id` int(10) NOT NULL DEFAULT '0',
  `socialpane` char(1) NOT NULL DEFAULT 'N',
  `excludemobile` char(1) NOT NULL DEFAULT 'N',
  `onlymobile` char(1) NOT NULL DEFAULT 'N',
  PRIMARY KEY (`idnum`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `livehelp_autoinvite`
--

INSERT INTO `livehelp_autoinvite` (`idnum`, `isactive`, `department`, `message`, `page`, `visits`, `referer`, `typeof`, `seconds`, `user_id`, `socialpane`, `excludemobile`, `onlymobile`) VALUES
(1, 'Y', 0, '4', '', 0, '', 'layer', 30, 0, 'N', 'N', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `livehelp_channels`
--

CREATE TABLE IF NOT EXISTS `livehelp_channels` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL DEFAULT '0',
  `statusof` char(1) NOT NULL DEFAULT '',
  `startdate` bigint(8) NOT NULL DEFAULT '0',
  `sessionid` varchar(40) NOT NULL DEFAULT '',
  `website` int(8) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `livehelp_channels`
--


-- --------------------------------------------------------

--
-- Table structure for table `livehelp_config`
--

CREATE TABLE IF NOT EXISTS `livehelp_config` (
  `version` varchar(10) NOT NULL DEFAULT '3.4.0',
  `site_title` varchar(100) NOT NULL DEFAULT '',
  `use_flush` varchar(10) NOT NULL DEFAULT 'YES',
  `membernum` int(8) NOT NULL DEFAULT '0',
  `offset` float(8,2) NOT NULL DEFAULT '0.00',
  `show_typing` char(1) NOT NULL DEFAULT '',
  `webpath` varchar(255) NOT NULL DEFAULT '',
  `s_webpath` varchar(255) NOT NULL DEFAULT '',
  `speaklanguage` varchar(60) NOT NULL DEFAULT 'English',
  `scratch_space` text,
  `admin_refresh` varchar(30) NOT NULL DEFAULT 'auto',
  `maxexe` int(5) DEFAULT '180',
  `refreshrate` int(5) NOT NULL DEFAULT '1',
  `chatmode` varchar(60) NOT NULL DEFAULT 'xmlhttp-flush-refresh',
  `adminsession` char(1) NOT NULL DEFAULT 'Y',
  `ignoreips` text,
  `directoryid` varchar(32) NOT NULL DEFAULT '',
  `tracking` char(1) NOT NULL DEFAULT 'N',
  `colorscheme` varchar(30) NOT NULL DEFAULT 'white',
  `matchip` char(1) NOT NULL DEFAULT 'N',
  `gethostnames` char(1) NOT NULL DEFAULT 'N',
  `maxrecords` int(10) NOT NULL DEFAULT '75000',
  `maxreferers` int(10) NOT NULL DEFAULT '50',
  `maxvisits` int(10) NOT NULL DEFAULT '75',
  `maxmonths` int(10) NOT NULL DEFAULT '12',
  `maxoldhits` int(10) NOT NULL DEFAULT '1',
  `showgames` char(1) NOT NULL DEFAULT 'Y',
  `showsearch` char(1) NOT NULL DEFAULT 'Y',
  `showdirectory` char(1) NOT NULL DEFAULT 'Y',
  `usertracking` char(1) NOT NULL DEFAULT 'N',
  `resetbutton` char(1) NOT NULL DEFAULT 'N',
  `keywordtrack` char(1) NOT NULL DEFAULT 'N',
  `reftracking` char(1) NOT NULL DEFAULT 'N',
  `topkeywords` int(10) NOT NULL DEFAULT '50',
  `everythingelse` text,
  `rememberusers` char(1) NOT NULL DEFAULT 'Y',
  `smtp_host` varchar(255) NOT NULL DEFAULT '',
  `smtp_username` varchar(60) NOT NULL DEFAULT '',
  `smtp_password` varchar(60) NOT NULL DEFAULT '',
  `owner_email` varchar(255) NOT NULL DEFAULT '',
  `topframeheight` int(8) NOT NULL DEFAULT '85',
  `topbackground` varchar(156) NOT NULL DEFAULT 'header_images/customersupports.png',
  `usecookies` char(1) NOT NULL DEFAULT 'Y',
  `smtp_portnum` int(10) NOT NULL DEFAULT '25',
  `showoperator` char(1) NOT NULL DEFAULT 'Y',
  `chatcolors` text,
  `floatxy` varchar(42) NOT NULL DEFAULT '200|160',
  `sessiontimeout` int(8) NOT NULL DEFAULT '60',
  `theme` varchar(42) NOT NULL DEFAULT 'vanilla',
  `operatorstimeout` int(4) NOT NULL DEFAULT '4',
  `operatorssessionout` int(8) NOT NULL DEFAULT '45',
  `maxrequests` int(8) NOT NULL DEFAULT '99999',
  `ignoreagent` text,
  PRIMARY KEY (`version`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `livehelp_config`
--

INSERT INTO `livehelp_config` (`version`, `site_title`, `use_flush`, `membernum`, `offset`, `show_typing`, `webpath`, `s_webpath`, `speaklanguage`, `scratch_space`, `admin_refresh`, `maxexe`, `refreshrate`, `chatmode`, `adminsession`, `ignoreips`, `directoryid`, `tracking`, `colorscheme`, `matchip`, `gethostnames`, `maxrecords`, `maxreferers`, `maxvisits`, `maxmonths`, `maxoldhits`, `showgames`, `showsearch`, `showdirectory`, `usertracking`, `resetbutton`, `keywordtrack`, `reftracking`, `topkeywords`, `everythingelse`, `rememberusers`, `smtp_host`, `smtp_username`, `smtp_password`, `owner_email`, `topframeheight`, `topbackground`, `usecookies`, `smtp_portnum`, `showoperator`, `chatcolors`, `floatxy`, `sessiontimeout`, `theme`, `operatorstimeout`, `operatorssessionout`, `maxrequests`, `ignoreagent`) VALUES
('3.4.0', 'Live Help!', 'YES', 0, 0.00, 'Y', 'http://192.168.1.100/jamshaid/CodeIgniter/livechat/', 'http://192.168.1.100/jamshaid/CodeIgniter/livechat/', 'English', '\r\n Welcome to Crafty Syntax Live Help \r\n\r\n All the administrative functions are located to the left of this text. \r\n \r\nYou can use this section to keep notes for yourself and other admins, etc. \r\n \r\nTo change the text that is located in this box just click on the small edit \r\nbutton on the top right corner of this box. \r\n        ', 'auto', 180, 1, 'xmlhttp-flush-refresh', 'Y', NULL, '', 'N', 'white', 'N', 'N', 75000, 50, 75, 12, 1, 'Y', 'Y', 'Y', 'N', 'N', 'N', 'N', 50, NULL, 'Y', '', '', '', 'jamshaid.weber@gmail.com', 85, 'header_images/customersupports.png', 'Y', 25, 'Y', 'fefdcd,cbcefe,caedbe,cccbba,aecddc,EBBEAA,faacaa,fbddef,cfaaef,aedcbd,bbffff,fedabf;040662,240462,520500,404062,100321,662640,242642,151035,051411,442662,442022,200220;426446,224646,466286,828468,866482,484668,504342,224882,486882,824864,668266,444468', '200|160', 60, 'vanilla', 4, 45, 99999, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `livehelp_departments`
--

CREATE TABLE IF NOT EXISTS `livehelp_departments` (
  `recno` int(5) NOT NULL AUTO_INCREMENT,
  `nameof` varchar(30) NOT NULL DEFAULT '',
  `onlineimage` varchar(255) NOT NULL DEFAULT '',
  `offlineimage` varchar(255) NOT NULL DEFAULT '',
  `layerinvite` varchar(255) NOT NULL DEFAULT '',
  `requirename` char(1) NOT NULL DEFAULT '',
  `messageemail` varchar(60) NOT NULL DEFAULT '',
  `leaveamessage` varchar(10) NOT NULL DEFAULT '',
  `opening` text,
  `offline` text,
  `creditline` char(1) NOT NULL DEFAULT 'L',
  `imagemap` text,
  `whilewait` text,
  `timeout` int(5) NOT NULL DEFAULT '150',
  `leavetxt` text,
  `topframeheight` int(10) NOT NULL DEFAULT '85',
  `topbackground` varchar(255) NOT NULL DEFAULT '',
  `botbackground` varchar(255) NOT NULL DEFAULT '',
  `midbackground` varchar(255) NOT NULL DEFAULT '',
  `topbackcolor` varchar(255) NOT NULL DEFAULT '',
  `midbackcolor` varchar(255) NOT NULL DEFAULT '',
  `botbackcolor` varchar(255) NOT NULL DEFAULT '',
  `colorscheme` varchar(255) NOT NULL DEFAULT '',
  `speaklanguage` varchar(60) NOT NULL DEFAULT '',
  `busymess` text,
  `emailfun` char(1) NOT NULL DEFAULT 'Y',
  `dbfun` char(1) NOT NULL DEFAULT 'Y',
  `everythingelse` text,
  `ordering` int(8) NOT NULL DEFAULT '0',
  `smiles` char(1) NOT NULL DEFAULT 'Y',
  `visible` int(1) NOT NULL DEFAULT '1',
  `theme` varchar(45) NOT NULL DEFAULT 'vanilla',
  `showtimestamp` char(1) NOT NULL DEFAULT 'N',
  `website` int(8) NOT NULL DEFAULT '1',
  PRIMARY KEY (`recno`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `livehelp_departments`
--

INSERT INTO `livehelp_departments` (`recno`, `nameof`, `onlineimage`, `offlineimage`, `layerinvite`, `requirename`, `messageemail`, `leaveamessage`, `opening`, `offline`, `creditline`, `imagemap`, `whilewait`, `timeout`, `leavetxt`, `topframeheight`, `topbackground`, `botbackground`, `midbackground`, `topbackcolor`, `midbackcolor`, `botbackcolor`, `colorscheme`, `speaklanguage`, `busymess`, `emailfun`, `dbfun`, `everythingelse`, `ordering`, `smiles`, `visible`, `theme`, `showtimestamp`, `website`) VALUES
(1, 'default', 'onoff_images/online1.gif', 'onoff_images/offline1.gif', 'dhtmlimage.gif', 'Y', 'jamshaid.weber@gmail.com', 'YES', '<blockquote>Welcome to our Live Help. Please enter your name in the input box below to begin.</blockquote>', '<blockquote>Sorry no operators are currently online to provide Live support at this time.</blockquote>', 'L', '<MAP NAME=myimagemap><AREA HREF=javascript:openLiveHelp() SHAPE=RECT COORDS=0,0,400,197><AREA HREF=javascript:openLiveHelp() SHAPE=RECT COORDS=0,157,213,257><AREA HREF=javascript:closeDHTML() SHAPE=RECT COORDS=237,157,400,257></MAP>', 'Please be patient while an operator is contacted... ', 150, '<h3><SPAN CLASS=wh>LEAVE A MESSAGE:</SPAN></h3>Please type in your comments/questions in the below box <br> and provide an e-mail address so we can get back to you', 75, 'header_images/customersupports.png', 'themes/vanilla/patch.png', 'themes/vanilla/softyellowomi.png', '#FFFFFF', '#FFFFDD', '#FFFFFF', 'white', '', '<blockquote>Sorry all operators are currently helping other clients and are unable to provide Live support at this time.<br>Would you like to continue to wait for an operator or leave a message?<br><table width=450><tr><td><a href=livehelp.php?page=livehelp.php&department=[department]&tab=1 target=_top><font size=+1>Continue to wait</font></a></td><td align=center><b>or</b></td><td><a href=leavemessage.php?department=[department]><font size=+1>Leave A Message</a></td></tr></table><blockquote>', 'Y', 'Y', NULL, 0, 'Y', 1, 'vanilla', 'N', 1);

-- --------------------------------------------------------

--
-- Table structure for table `livehelp_identity_daily`
--

CREATE TABLE IF NOT EXISTS `livehelp_identity_daily` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `isnamed` char(1) NOT NULL DEFAULT 'N',
  `groupidentity` int(11) NOT NULL DEFAULT '0',
  `groupusername` int(11) NOT NULL DEFAULT '0',
  `identity` varchar(100) NOT NULL DEFAULT '',
  `cookieid` varchar(40) NOT NULL DEFAULT '',
  `ipaddress` varchar(30) NOT NULL DEFAULT '',
  `username` varchar(100) NOT NULL DEFAULT '',
  `dateof` bigint(14) NOT NULL DEFAULT '0',
  `uservisits` int(10) NOT NULL DEFAULT '0',
  `seconds` int(10) NOT NULL DEFAULT '0',
  `useragent` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `isnamed` (`isnamed`),
  KEY `groupidentity` (`groupidentity`),
  KEY `groupusername` (`groupusername`),
  KEY `identity` (`identity`),
  KEY `cookieid` (`cookieid`),
  KEY `username` (`username`),
  KEY `dateof` (`dateof`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `livehelp_identity_daily`
--


-- --------------------------------------------------------

--
-- Table structure for table `livehelp_identity_monthly`
--

CREATE TABLE IF NOT EXISTS `livehelp_identity_monthly` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `isnamed` char(1) NOT NULL DEFAULT 'N',
  `groupidentity` int(11) NOT NULL DEFAULT '0',
  `groupusername` int(11) NOT NULL DEFAULT '0',
  `identity` varchar(100) NOT NULL DEFAULT '',
  `cookieid` varchar(40) NOT NULL DEFAULT '',
  `ipaddress` varchar(30) NOT NULL DEFAULT '',
  `username` varchar(100) NOT NULL DEFAULT '',
  `dateof` bigint(14) NOT NULL DEFAULT '0',
  `uservisits` int(10) NOT NULL DEFAULT '0',
  `seconds` int(10) NOT NULL DEFAULT '0',
  `useragent` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `isnamed` (`isnamed`),
  KEY `groupidentity` (`groupidentity`),
  KEY `groupusername` (`groupusername`),
  KEY `identity` (`identity`),
  KEY `cookieid` (`cookieid`),
  KEY `username` (`username`),
  KEY `dateof` (`dateof`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `livehelp_identity_monthly`
--


-- --------------------------------------------------------

--
-- Table structure for table `livehelp_keywords_daily`
--

CREATE TABLE IF NOT EXISTS `livehelp_keywords_daily` (
  `recno` int(11) NOT NULL AUTO_INCREMENT,
  `parentrec` int(11) unsigned NOT NULL DEFAULT '0',
  `referer` varchar(255) NOT NULL DEFAULT '',
  `pageurl` varchar(255) NOT NULL DEFAULT '',
  `keywords` varchar(255) NOT NULL DEFAULT '',
  `dateof` int(8) NOT NULL DEFAULT '0',
  `levelvisits` int(11) unsigned NOT NULL DEFAULT '0',
  `directvisits` int(11) unsigned NOT NULL DEFAULT '0',
  `department` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`recno`),
  KEY `department` (`department`),
  KEY `levelvisits` (`levelvisits`),
  KEY `dateof` (`dateof`),
  KEY `referer` (`referer`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `livehelp_keywords_daily`
--


-- --------------------------------------------------------

--
-- Table structure for table `livehelp_keywords_monthly`
--

CREATE TABLE IF NOT EXISTS `livehelp_keywords_monthly` (
  `recno` int(11) NOT NULL AUTO_INCREMENT,
  `parentrec` int(11) unsigned NOT NULL DEFAULT '0',
  `referer` varchar(255) NOT NULL DEFAULT '',
  `pageurl` varchar(255) NOT NULL DEFAULT '',
  `keywords` varchar(255) NOT NULL DEFAULT '',
  `dateof` int(8) NOT NULL DEFAULT '0',
  `levelvisits` int(11) unsigned NOT NULL DEFAULT '0',
  `directvisits` int(11) unsigned NOT NULL DEFAULT '0',
  `department` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`recno`),
  KEY `department` (`department`),
  KEY `levelvisits` (`levelvisits`),
  KEY `dateof` (`dateof`),
  KEY `referer` (`referer`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `livehelp_keywords_monthly`
--


-- --------------------------------------------------------

--
-- Table structure for table `livehelp_layerinvites`
--

CREATE TABLE IF NOT EXISTS `livehelp_layerinvites` (
  `layerid` int(10) NOT NULL DEFAULT '0',
  `name` varchar(60) NOT NULL DEFAULT '',
  `imagename` varchar(60) NOT NULL DEFAULT '',
  `imagemap` text,
  `department` varchar(60) NOT NULL DEFAULT '',
  `user` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`layerid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `livehelp_layerinvites`
--

INSERT INTO `livehelp_layerinvites` (`layerid`, `name`, `imagename`, `imagemap`, `department`, `user`) VALUES
(1, '', 'layer-Man_invite.gif', '<MAP NAME=myimagemap><AREA HREF=javascript:openLiveHelp() SHAPE=RECT COORDS=0,0,400,197><AREA HREF=javascript:openLiveHelp() SHAPE=RECT COORDS=0,157,213,257><AREA HREF=javascript:closeDHTML() SHAPE=RECT COORDS=237,157,400,257></MAP>', '', 0),
(2, '', 'layer-Phone.gif', '<MAP NAME=myimagemap><AREA HREF=javascript:openLiveHelp() SHAPE=RECT COORDS=0,0,472,150><AREA HREF=javascript:openLiveHelp() SHAPE=RECT COORDS=241,150,484,256><AREA HREF=javascript:closeDHTML() SHAPE=RECT COORDS=0,150,241,250></MAP>', '', 0),
(3, '', 'layer-Help_button.gif', '<MAP NAME=myimagemap><AREA HREF=javascript:openLiveHelp() SHAPE=RECT COORDS=0,0,400,197><AREA HREF=javascript:openLiveHelp() SHAPE=RECT COORDS=0,157,213,257><AREA HREF=javascript:closeDHTML() SHAPE=RECT COORDS=237,157,400,257></MAP>', '', 0),
(4, '', 'layer-Woman_invite.png', '<MAP NAME=myimagemap><AREA HREF=javascript:openLiveHelp() SHAPE=RECT COORDS=126,71,429,172><AREA HREF=javascript:closeDHTML() SHAPE=RECT COORDS=311,5,440,45></MAP>', '', 0),
(5, '', 'layer-Subsilver.gif', '<MAP NAME=myimagemap><AREA HREF=javascript:openLiveHelp() SHAPE=RECT COORDS=0,0,419,216><AREA HREF=javascript:openLiveHelp() SHAPE=RECT COORDS=0,216,319,279><AREA HREF=javascript:closeDHTML() SHAPE=RECT COORDS=326,218,429,280></MAP>', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `livehelp_leavemessage`
--

CREATE TABLE IF NOT EXISTS `livehelp_leavemessage` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL DEFAULT '',
  `subject` varchar(200) NOT NULL DEFAULT '',
  `department` int(11) unsigned NOT NULL DEFAULT '0',
  `dateof` bigint(14) NOT NULL DEFAULT '0',
  `sessiondata` text,
  `deliminated` text,
  PRIMARY KEY (`id`),
  KEY `department` (`department`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `livehelp_leavemessage`
--


-- --------------------------------------------------------

--
-- Table structure for table `livehelp_messages`
--

CREATE TABLE IF NOT EXISTS `livehelp_messages` (
  `id_num` int(10) NOT NULL AUTO_INCREMENT,
  `message` text,
  `channel` int(10) NOT NULL DEFAULT '0',
  `timeof` bigint(14) NOT NULL DEFAULT '0',
  `saidfrom` int(10) NOT NULL DEFAULT '0',
  `saidto` int(10) NOT NULL DEFAULT '0',
  `typeof` varchar(30) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_num`),
  KEY `channel` (`channel`),
  KEY `timeof` (`timeof`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `livehelp_messages`
--


-- --------------------------------------------------------

--
-- Table structure for table `livehelp_modules`
--

CREATE TABLE IF NOT EXISTS `livehelp_modules` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL DEFAULT '',
  `path` varchar(255) NOT NULL DEFAULT '',
  `adminpath` varchar(255) NOT NULL DEFAULT '',
  `query_string` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `livehelp_modules`
--

INSERT INTO `livehelp_modules` (`id`, `name`, `path`, `adminpath`, `query_string`) VALUES
(1, 'Live Help!', 'livehelp.php', '', ''),
(2, 'Contact', 'leavemessage.php', '', ''),
(3, 'Q & A', 'user_qa.php', 'qa.php', '');

-- --------------------------------------------------------

--
-- Table structure for table `livehelp_modules_dep`
--

CREATE TABLE IF NOT EXISTS `livehelp_modules_dep` (
  `rec` int(10) NOT NULL AUTO_INCREMENT,
  `departmentid` int(10) NOT NULL DEFAULT '0',
  `modid` int(10) NOT NULL DEFAULT '0',
  `ordernum` int(8) NOT NULL DEFAULT '0',
  `isactive` char(1) NOT NULL DEFAULT 'N',
  `defaultset` char(1) NOT NULL DEFAULT '',
  PRIMARY KEY (`rec`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `livehelp_modules_dep`
--

INSERT INTO `livehelp_modules_dep` (`rec`, `departmentid`, `modid`, `ordernum`, `isactive`, `defaultset`) VALUES
(1, 1, 1, 1, 'N', ''),
(2, 1, 2, 2, 'N', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `livehelp_operator_channels`
--

CREATE TABLE IF NOT EXISTS `livehelp_operator_channels` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL DEFAULT '0',
  `channel` int(10) NOT NULL DEFAULT '0',
  `userid` int(10) NOT NULL DEFAULT '0',
  `statusof` char(1) NOT NULL DEFAULT '',
  `startdate` bigint(8) NOT NULL DEFAULT '0',
  `bgcolor` varchar(10) NOT NULL DEFAULT '000000',
  `txtcolor` varchar(10) NOT NULL DEFAULT '000000',
  `channelcolor` varchar(10) NOT NULL DEFAULT 'F7FAFF',
  `txtcolor_alt` varchar(10) NOT NULL DEFAULT '000000',
  PRIMARY KEY (`id`),
  KEY `channel` (`channel`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `livehelp_operator_channels`
--


-- --------------------------------------------------------

--
-- Table structure for table `livehelp_operator_departments`
--

CREATE TABLE IF NOT EXISTS `livehelp_operator_departments` (
  `recno` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL DEFAULT '0',
  `department` int(10) NOT NULL DEFAULT '0',
  `extra` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`recno`),
  KEY `user_id` (`user_id`),
  KEY `department` (`department`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `livehelp_operator_departments`
--

INSERT INTO `livehelp_operator_departments` (`recno`, `user_id`, `department`, `extra`) VALUES
(1, 1, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `livehelp_operator_history`
--

CREATE TABLE IF NOT EXISTS `livehelp_operator_history` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `opid` int(11) unsigned NOT NULL DEFAULT '0',
  `action` varchar(60) NOT NULL DEFAULT '',
  `dateof` bigint(14) NOT NULL DEFAULT '0',
  `sessionid` varchar(40) NOT NULL DEFAULT '',
  `transcriptid` int(10) NOT NULL DEFAULT '0',
  `totaltime` int(10) NOT NULL DEFAULT '0',
  `channel` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `opid` (`opid`),
  KEY `dateof` (`dateof`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `livehelp_operator_history`
--

INSERT INTO `livehelp_operator_history` (`id`, `opid`, `action`, `dateof`, `sessionid`, `transcriptid`, `totaltime`, `channel`) VALUES
(1, 1, 'login', 20130102072450, '8b05a9589b2369fa338cfe620ff5f928', 0, 0, 0),
(2, 1, 'Logout', 20130102072452, '8b05a9589b2369fa338cfe620ff5f928', 0, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `livehelp_paths_firsts`
--

CREATE TABLE IF NOT EXISTS `livehelp_paths_firsts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `visit_recno` int(11) unsigned NOT NULL DEFAULT '0',
  `exit_recno` int(11) unsigned NOT NULL DEFAULT '0',
  `dateof` int(8) NOT NULL DEFAULT '0',
  `visits` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `visit_recno` (`visit_recno`,`dateof`,`visits`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `livehelp_paths_firsts`
--


-- --------------------------------------------------------

--
-- Table structure for table `livehelp_paths_monthly`
--

CREATE TABLE IF NOT EXISTS `livehelp_paths_monthly` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `visit_recno` int(11) unsigned NOT NULL DEFAULT '0',
  `exit_recno` int(11) unsigned NOT NULL DEFAULT '0',
  `dateof` int(8) NOT NULL DEFAULT '0',
  `visits` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `visit_recno` (`visit_recno`),
  KEY `dateof` (`dateof`),
  KEY `visits` (`visits`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `livehelp_paths_monthly`
--


-- --------------------------------------------------------

--
-- Table structure for table `livehelp_qa`
--

CREATE TABLE IF NOT EXISTS `livehelp_qa` (
  `recno` int(10) NOT NULL AUTO_INCREMENT,
  `parent` int(10) NOT NULL DEFAULT '0',
  `question` text,
  `typeof` varchar(10) NOT NULL DEFAULT '',
  `status` varchar(20) NOT NULL DEFAULT '',
  `username` varchar(60) NOT NULL DEFAULT '',
  `ordernum` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`recno`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `livehelp_qa`
--


-- --------------------------------------------------------

--
-- Table structure for table `livehelp_questions`
--

CREATE TABLE IF NOT EXISTS `livehelp_questions` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `department` int(10) NOT NULL DEFAULT '0',
  `ordering` int(8) NOT NULL DEFAULT '0',
  `headertext` text,
  `fieldtype` varchar(30) NOT NULL DEFAULT '',
  `options` text,
  `flags` varchar(60) NOT NULL DEFAULT '',
  `module` varchar(60) NOT NULL DEFAULT '',
  `required` char(1) NOT NULL DEFAULT 'N',
  PRIMARY KEY (`id`),
  KEY `department` (`department`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `livehelp_questions`
--

INSERT INTO `livehelp_questions` (`id`, `department`, `ordering`, `headertext`, `fieldtype`, `options`, `flags`, `module`, `required`) VALUES
(1, 1, 0, 'E-mail:', 'email', '', '', 'leavemessage', 'Y'),
(2, 1, 0, 'Question:', 'textarea', '', '', 'leavemessage', 'N'),
(3, 1, 0, 'Name', 'username', '', '', 'livehelp', 'N'),
(5, 1, 1, 'Question', 'textarea', '', '', 'livehelp', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `livehelp_quick`
--

CREATE TABLE IF NOT EXISTS `livehelp_quick` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '',
  `typeof` varchar(30) NOT NULL DEFAULT '',
  `message` text,
  `visiblity` varchar(20) NOT NULL DEFAULT '',
  `department` varchar(60) NOT NULL DEFAULT '0',
  `user` int(10) NOT NULL DEFAULT '0',
  `ishtml` varchar(3) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `livehelp_quick`
--


-- --------------------------------------------------------

--
-- Table structure for table `livehelp_referers_daily`
--

CREATE TABLE IF NOT EXISTS `livehelp_referers_daily` (
  `recno` int(11) NOT NULL AUTO_INCREMENT,
  `pageurl` varchar(255) NOT NULL DEFAULT '0',
  `dateof` int(8) NOT NULL DEFAULT '0',
  `levelvisits` int(11) unsigned NOT NULL DEFAULT '0',
  `directvisits` int(11) unsigned NOT NULL DEFAULT '0',
  `parentrec` int(11) unsigned NOT NULL DEFAULT '0',
  `level` int(10) NOT NULL DEFAULT '0',
  `department` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`recno`),
  KEY `department` (`department`),
  KEY `pageurl` (`pageurl`),
  KEY `parentrec` (`parentrec`),
  KEY `levelvisits` (`levelvisits`),
  KEY `directvisits` (`directvisits`),
  KEY `dateof` (`dateof`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `livehelp_referers_daily`
--


-- --------------------------------------------------------

--
-- Table structure for table `livehelp_referers_monthly`
--

CREATE TABLE IF NOT EXISTS `livehelp_referers_monthly` (
  `recno` int(11) NOT NULL AUTO_INCREMENT,
  `pageurl` varchar(255) NOT NULL DEFAULT '0',
  `dateof` int(8) NOT NULL DEFAULT '0',
  `levelvisits` int(11) unsigned NOT NULL DEFAULT '0',
  `directvisits` int(11) unsigned NOT NULL DEFAULT '0',
  `parentrec` int(11) unsigned NOT NULL DEFAULT '0',
  `level` int(10) NOT NULL DEFAULT '0',
  `department` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`recno`),
  KEY `department` (`department`),
  KEY `pageurl` (`pageurl`),
  KEY `parentrec` (`parentrec`),
  KEY `levelvisits` (`levelvisits`),
  KEY `directvisits` (`directvisits`),
  KEY `dateof` (`dateof`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `livehelp_referers_monthly`
--


-- --------------------------------------------------------

--
-- Table structure for table `livehelp_sessions`
--

CREATE TABLE IF NOT EXISTS `livehelp_sessions` (
  `session_id` varchar(100) NOT NULL DEFAULT '',
  `session_data` text NOT NULL,
  `expires` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`session_id`),
  KEY `expires` (`expires`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `livehelp_sessions`
--


-- --------------------------------------------------------

--
-- Table structure for table `livehelp_smilies`
--

CREATE TABLE IF NOT EXISTS `livehelp_smilies` (
  `smilies_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(50) DEFAULT NULL,
  `smile_url` varchar(100) DEFAULT NULL,
  `emoticon` varchar(75) DEFAULT NULL,
  PRIMARY KEY (`smilies_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `livehelp_smilies`
--

INSERT INTO `livehelp_smilies` (`smilies_id`, `code`, `smile_url`, `emoticon`) VALUES
(1, ':D', 'icon_biggrin.gif', 'Very Happy'),
(2, ':-D', 'icon_biggrin.gif', 'Very Happy'),
(3, ':grin:', 'icon_biggrin.gif', 'Very Happy'),
(4, ':)', 'icon_smile.gif', 'Smile'),
(5, ':-)', 'icon_smile.gif', 'Smile'),
(6, ':smile:', 'icon_smile.gif', 'Smile'),
(7, ':(', 'icon_sad.gif', 'Sad'),
(8, ':-(', 'icon_sad.gif', 'Sad'),
(9, ':sad:', 'icon_sad.gif', 'Sad'),
(10, ':o', 'icon_surprised.gif', 'Surprised'),
(11, ':-o', 'icon_surprised.gif', 'Surprised'),
(12, ':eek:', 'icon_surprised.gif', 'Surprised'),
(13, ':shock:', 'icon_eek.gif', 'Shocked'),
(14, ':?', 'icon_confused.gif', 'Confused'),
(15, ':-?', 'icon_confused.gif', 'Confused'),
(16, ':???:', 'icon_confused.gif', 'Confused'),
(17, '8)', 'icon_cool.gif', 'Cool'),
(18, '8-)', 'icon_cool.gif', 'Cool'),
(19, ':cool:', 'icon_cool.gif', 'Cool'),
(20, ':lol:', 'icon_lol.gif', 'Laughing'),
(21, ':x', 'icon_mad.gif', 'Mad'),
(22, ':-x', 'icon_mad.gif', 'Mad'),
(23, ':mad:', 'icon_mad.gif', 'Mad'),
(24, ':P', 'icon_razz.gif', 'Razz'),
(25, ':-P', 'icon_razz.gif', 'Razz'),
(26, ':razz:', 'icon_razz.gif', 'Razz'),
(27, ':oops:', 'icon_redface.gif', 'Embarassed'),
(28, ':cry:', 'icon_cry.gif', 'Crying or Very sad'),
(29, ':evil:', 'icon_evil.gif', 'Evil or Very Mad'),
(30, ':twisted:', 'icon_twisted.gif', 'Twisted Evil'),
(31, ':roll:', 'icon_rolleyes.gif', 'Rolling Eyes'),
(32, ':wink:', 'icon_wink.gif', 'Wink'),
(33, ';)', 'icon_wink.gif', 'Wink'),
(34, ';-)', 'icon_wink.gif', 'Wink'),
(35, ':!:', 'icon_exclaim.gif', 'Exclamation'),
(36, ':?:', 'icon_question.gif', 'Question'),
(37, ':idea:', 'icon_idea.gif', 'Idea'),
(38, ':arrow:', 'icon_arrow.gif', 'Arrow'),
(39, ':|', 'icon_neutral.gif', 'Neutral'),
(40, ':-|', 'icon_neutral.gif', 'Neutral'),
(41, ':neutral:', 'icon_neutral.gif', 'Neutral'),
(42, ':mrgreen:', 'icon_mrgreen.gif', 'Mr. Green');

-- --------------------------------------------------------

--
-- Table structure for table `livehelp_transcripts`
--

CREATE TABLE IF NOT EXISTS `livehelp_transcripts` (
  `recno` int(10) NOT NULL AUTO_INCREMENT,
  `who` varchar(100) NOT NULL DEFAULT '',
  `endtime` bigint(14) DEFAULT NULL,
  `transcript` text,
  `sessionid` varchar(40) NOT NULL DEFAULT '',
  `sessiondata` text,
  `department` int(10) NOT NULL DEFAULT '0',
  `email` varchar(100) NOT NULL DEFAULT '',
  `starttime` bigint(14) NOT NULL DEFAULT '0',
  `duration` int(11) unsigned NOT NULL DEFAULT '0',
  `operators` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`recno`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `livehelp_transcripts`
--


-- --------------------------------------------------------

--
-- Table structure for table `livehelp_users`
--

CREATE TABLE IF NOT EXISTS `livehelp_users` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `lastaction` bigint(14) DEFAULT '0',
  `username` varchar(30) NOT NULL DEFAULT '',
  `displayname` varchar(42) NOT NULL DEFAULT '',
  `password` varchar(60) NOT NULL DEFAULT '',
  `isonline` char(1) NOT NULL DEFAULT '',
  `isoperator` char(1) NOT NULL DEFAULT 'N',
  `onchannel` int(10) NOT NULL DEFAULT '0',
  `isadmin` char(1) NOT NULL DEFAULT 'N',
  `department` int(5) NOT NULL DEFAULT '0',
  `identity` varchar(255) NOT NULL DEFAULT '',
  `status` varchar(30) NOT NULL DEFAULT '',
  `isnamed` char(1) NOT NULL DEFAULT 'N',
  `showedup` bigint(14) DEFAULT NULL,
  `email` varchar(60) NOT NULL DEFAULT '',
  `camefrom` varchar(255) NOT NULL DEFAULT '',
  `show_arrival` char(1) NOT NULL DEFAULT 'N',
  `user_alert` char(1) NOT NULL DEFAULT '',
  `auto_invite` char(1) NOT NULL DEFAULT 'N',
  `istyping` char(1) NOT NULL DEFAULT '3',
  `visits` int(8) NOT NULL DEFAULT '0',
  `jsrn` int(5) NOT NULL DEFAULT '0',
  `hostname` varchar(255) NOT NULL DEFAULT '',
  `useragent` varchar(255) NOT NULL DEFAULT '',
  `ipaddress` varchar(255) NOT NULL DEFAULT '',
  `sessionid` varchar(40) NOT NULL DEFAULT '',
  `typing_alert` char(1) NOT NULL DEFAULT 'N',
  `authenticated` char(1) NOT NULL DEFAULT '',
  `cookied` char(1) NOT NULL DEFAULT 'N',
  `sessiondata` text,
  `expires` bigint(14) NOT NULL DEFAULT '0',
  `greeting` text,
  `photo` varchar(255) NOT NULL DEFAULT '',
  `chataction` bigint(14) DEFAULT '0',
  `new_session` char(1) NOT NULL DEFAULT 'Y',
  `showtype` int(10) NOT NULL DEFAULT '1',
  `chattype` char(1) NOT NULL DEFAULT 'Y',
  `externalchats` varchar(255) NOT NULL DEFAULT '',
  `layerinvite` int(10) NOT NULL DEFAULT '0',
  `askquestions` char(1) NOT NULL DEFAULT 'Y',
  `showvisitors` char(1) NOT NULL DEFAULT 'N',
  `cookieid` varchar(40) NOT NULL DEFAULT '',
  `cellphone` varchar(255) NOT NULL DEFAULT '',
  `lastcalled` bigint(14) NOT NULL DEFAULT '0',
  `ismobile` char(1) DEFAULT 'N',
  `cell_invite` char(1) DEFAULT 'N',
  `useimage` char(1) NOT NULL DEFAULT 'N',
  `firstdepartment` int(11) NOT NULL DEFAULT '0',
  `alertchat` varchar(45) NOT NULL DEFAULT '',
  `alerttyping` varchar(45) NOT NULL DEFAULT '',
  `alertinsite` varchar(45) NOT NULL DEFAULT '',
  PRIMARY KEY (`user_id`),
  KEY `expires` (`expires`),
  KEY `sessionid` (`sessionid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=182 ;

--
-- Dumping data for table `livehelp_users`
--

INSERT INTO `livehelp_users` (`user_id`, `lastaction`, `username`, `displayname`, `password`, `isonline`, `isoperator`, `onchannel`, `isadmin`, `department`, `identity`, `status`, `isnamed`, `showedup`, `email`, `camefrom`, `show_arrival`, `user_alert`, `auto_invite`, `istyping`, `visits`, `jsrn`, `hostname`, `useragent`, `ipaddress`, `sessionid`, `typing_alert`, `authenticated`, `cookied`, `sessiondata`, `expires`, `greeting`, `photo`, `chataction`, `new_session`, `showtype`, `chattype`, `externalchats`, `layerinvite`, `askquestions`, `showvisitors`, `cookieid`, `cellphone`, `lastcalled`, `ismobile`, `cell_invite`, `useimage`, `firstdepartment`, `alertchat`, `alerttyping`, `alertinsite`) VALUES
(1, 20130102072452, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'N', 'Y', 0, 'Y', 0, '192.168.1-cslhOPERATOR', 'offline', 'Y', NULL, 'jamshaid.weber@gmail.com', '', 'N', 'N', 'Y', '3', 1, 0, 'host_lookup_not_enabled', '', '192.168.1.101', '8b05a9589b2369fa338cfe620ff5f928', 'N', 'N', 'Y', NULL, 20130102074452, 'How may I help You?', '', 0, 'N', 1, 'Y', '', 0, 'Y', 'N', '33a52180fd0431265e53a64455b29a05', '', 0, 'N', 'N', 'N', 0, 'new_chats.wav', 'click_x.wav', 'youve_got_visitors.wav'),
(181, 20130305101639, '192.168.1.103', '', '', '', 'N', -1, 'N', 1, '192.168.1-cslhVISITOR', 'Visiting', 'N', 20130305101639, '', 'http://192.168.1.100/jamshaid/CodeIgniter/', 'N', '0', 'N', '3', 0, 0, 'host_lookup_not_enabled', 'Mozilla/5.0 (Windows NT 6.1; rv:16.0) Gecko/20100101 Firefox/16.0', '192.168.1.103', '98baf2babd66ad07c58a4144a757679a', 'N', '', 'Y', NULL, 20130305103639, NULL, '', 0, 'N', 1, 'Y', '', 0, 'Y', 'N', '6145d4e7fba3eb7a0e185774974e40c0', '', 0, 'N', 'N', 'N', 1, '', '', ''),
(179, 20130305100449, '192.168.1.104', '', '', '', 'N', -1, 'N', 1, '192.168.1-cslhVISITOR', 'Visiting', 'N', 20130305085753, '', 'http://192.168.1.100/jamshaid/CodeIgniter/user/branch_info/branch_information/5', 'N', '0', 'N', '3', 26, 0, 'host_lookup_not_enabled', 'Mozilla/5.0 (Windows NT 6.1; rv:19.0) Gecko/20100101 Firefox/19.0', '192.168.1.104', '11271cb7c6e051871c950d1a0c5d02e3', 'N', '', 'Y', NULL, 20130305102449, NULL, '', 0, 'N', 1, 'Y', '', 0, 'Y', 'N', 'b078a0ccd32d7e6cb2cab8327c63fdc3', '', 0, 'N', 'N', 'N', 1, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `livehelp_visits_daily`
--

CREATE TABLE IF NOT EXISTS `livehelp_visits_daily` (
  `recno` int(11) NOT NULL AUTO_INCREMENT,
  `pageurl` varchar(255) NOT NULL DEFAULT '0',
  `dateof` int(8) NOT NULL DEFAULT '0',
  `levelvisits` int(11) unsigned NOT NULL DEFAULT '0',
  `directvisits` int(11) unsigned NOT NULL DEFAULT '0',
  `parentrec` int(11) unsigned NOT NULL DEFAULT '0',
  `level` int(10) NOT NULL DEFAULT '0',
  `department` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`recno`),
  KEY `department` (`department`),
  KEY `pageurl` (`pageurl`),
  KEY `parentrec` (`parentrec`),
  KEY `levelvisits` (`levelvisits`),
  KEY `directvisits` (`directvisits`),
  KEY `dateof` (`dateof`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `livehelp_visits_daily`
--


-- --------------------------------------------------------

--
-- Table structure for table `livehelp_visits_monthly`
--

CREATE TABLE IF NOT EXISTS `livehelp_visits_monthly` (
  `recno` int(11) NOT NULL AUTO_INCREMENT,
  `pageurl` varchar(255) NOT NULL DEFAULT '0',
  `dateof` int(8) NOT NULL DEFAULT '0',
  `levelvisits` int(11) unsigned NOT NULL DEFAULT '0',
  `directvisits` int(11) unsigned NOT NULL DEFAULT '0',
  `parentrec` int(11) unsigned NOT NULL DEFAULT '0',
  `level` int(10) NOT NULL DEFAULT '0',
  `department` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`recno`),
  KEY `department` (`department`),
  KEY `pageurl` (`pageurl`),
  KEY `parentrec` (`parentrec`),
  KEY `levelvisits` (`levelvisits`),
  KEY `directvisits` (`directvisits`),
  KEY `dateof` (`dateof`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `livehelp_visits_monthly`
--


-- --------------------------------------------------------

--
-- Table structure for table `livehelp_visit_track`
--

CREATE TABLE IF NOT EXISTS `livehelp_visit_track` (
  `recno` int(10) NOT NULL AUTO_INCREMENT,
  `sessionid` varchar(40) NOT NULL DEFAULT '0',
  `location` varchar(255) NOT NULL DEFAULT '',
  `page` bigint(14) NOT NULL DEFAULT '0',
  `title` varchar(100) NOT NULL DEFAULT '',
  `whendone` bigint(14) NOT NULL DEFAULT '0',
  `referrer` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`recno`),
  KEY `sessionid` (`sessionid`),
  KEY `location` (`location`),
  KEY `page` (`page`),
  KEY `whendone` (`whendone`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2139 ;

--
-- Dumping data for table `livehelp_visit_track`
--

INSERT INTO `livehelp_visit_track` (`recno`, `sessionid`, `location`, `page`, `title`, `whendone`, `referrer`) VALUES
(2138, '98baf2babd66ad07c58a4144a757679a', 'http://192.168.1.100/jamshaid/CodeIgniter/', 3670, 'English Booking', 20130305101639, 'http://192.168.1.100/jamshaid/CodeIgniter/'),
(2135, '11271cb7c6e051871c950d1a0c5d02e3', 'http://192.168.1.100/jamshaid/CodeIgniter/', 4567, 'English Booking', 20130305085753, 'http://192.168.1.100/jamshaid/CodeIgniter/user/branch_info/branch_information/5');

-- --------------------------------------------------------

--
-- Table structure for table `livehelp_websites`
--

CREATE TABLE IF NOT EXISTS `livehelp_websites` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `site_name` varchar(45) NOT NULL,
  `site_url` varchar(255) NOT NULL,
  `defaultdepartment` int(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `livehelp_websites`
--


-- --------------------------------------------------------

--
-- Table structure for table `popular_city`
--

CREATE TABLE IF NOT EXISTS `popular_city` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cityname` varchar(255) NOT NULL,
  `city2` varchar(255) NOT NULL,
  `city3` varchar(255) NOT NULL,
  `city4` varchar(255) NOT NULL,
  `city5` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `popular_city`
--

INSERT INTO `popular_city` (`id`, `cityname`, `city2`, `city3`, `city4`, `city5`) VALUES
(1, 'London', 'Edinburgh', 'Birmingham', ' Manchester', 'Newcastle-upon-Tyne');

-- --------------------------------------------------------

--
-- Table structure for table `wp_commentmeta`
--

CREATE TABLE IF NOT EXISTS `wp_commentmeta` (
  `meta_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `comment_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `meta_key` varchar(255) DEFAULT NULL,
  `meta_value` longtext,
  PRIMARY KEY (`meta_id`),
  KEY `comment_id` (`comment_id`),
  KEY `meta_key` (`meta_key`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `wp_commentmeta`
--


-- --------------------------------------------------------

--
-- Table structure for table `wp_comments`
--

CREATE TABLE IF NOT EXISTS `wp_comments` (
  `comment_ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `comment_post_ID` bigint(20) unsigned NOT NULL DEFAULT '0',
  `comment_author` tinytext NOT NULL,
  `comment_author_email` varchar(100) NOT NULL DEFAULT '',
  `comment_author_url` varchar(200) NOT NULL DEFAULT '',
  `comment_author_IP` varchar(100) NOT NULL DEFAULT '',
  `comment_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment_content` text NOT NULL,
  `comment_karma` int(11) NOT NULL DEFAULT '0',
  `comment_approved` varchar(20) NOT NULL DEFAULT '1',
  `comment_agent` varchar(255) NOT NULL DEFAULT '',
  `comment_type` varchar(20) NOT NULL DEFAULT '',
  `comment_parent` bigint(20) unsigned NOT NULL DEFAULT '0',
  `user_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`comment_ID`),
  KEY `comment_post_ID` (`comment_post_ID`),
  KEY `comment_approved_date_gmt` (`comment_approved`,`comment_date_gmt`),
  KEY `comment_date_gmt` (`comment_date_gmt`),
  KEY `comment_parent` (`comment_parent`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `wp_comments`
--

INSERT INTO `wp_comments` (`comment_ID`, `comment_post_ID`, `comment_author`, `comment_author_email`, `comment_author_url`, `comment_author_IP`, `comment_date`, `comment_date_gmt`, `comment_content`, `comment_karma`, `comment_approved`, `comment_agent`, `comment_type`, `comment_parent`, `user_id`) VALUES
(1, 1, 'Mr WordPress', '', 'http://wordpress.org/', '', '2013-02-14 07:34:11', '2013-02-14 07:34:11', 'Hi, this is a comment.\nTo delete a comment, just log in and view the post&#039;s comments. There you will have the option to edit or delete them.', 0, '1', '', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `wp_links`
--

CREATE TABLE IF NOT EXISTS `wp_links` (
  `link_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `link_url` varchar(255) NOT NULL DEFAULT '',
  `link_name` varchar(255) NOT NULL DEFAULT '',
  `link_image` varchar(255) NOT NULL DEFAULT '',
  `link_target` varchar(25) NOT NULL DEFAULT '',
  `link_description` varchar(255) NOT NULL DEFAULT '',
  `link_visible` varchar(20) NOT NULL DEFAULT 'Y',
  `link_owner` bigint(20) unsigned NOT NULL DEFAULT '1',
  `link_rating` int(11) NOT NULL DEFAULT '0',
  `link_updated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `link_rel` varchar(255) NOT NULL DEFAULT '',
  `link_notes` mediumtext NOT NULL,
  `link_rss` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`link_id`),
  KEY `link_visible` (`link_visible`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `wp_links`
--


-- --------------------------------------------------------

--
-- Table structure for table `wp_options`
--

CREATE TABLE IF NOT EXISTS `wp_options` (
  `option_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `option_name` varchar(64) NOT NULL DEFAULT '',
  `option_value` longtext NOT NULL,
  `autoload` varchar(20) NOT NULL DEFAULT 'yes',
  PRIMARY KEY (`option_id`),
  UNIQUE KEY `option_name` (`option_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=233 ;

--
-- Dumping data for table `wp_options`
--

INSERT INTO `wp_options` (`option_id`, `option_name`, `option_value`, `autoload`) VALUES
(1, 'siteurl', 'http://192.168.1.100/jamshaid/CodeIgniter/blog', 'yes'),
(2, 'blogname', 'English Booking', 'yes'),
(3, 'blogdescription', 'English study site', 'yes'),
(4, 'users_can_register', '0', 'yes'),
(5, 'admin_email', 'jamshaid.weber@gmail.com', 'yes'),
(6, 'start_of_week', '1', 'yes'),
(7, 'use_balanceTags', '0', 'yes'),
(8, 'use_smilies', '1', 'yes'),
(9, 'require_name_email', '1', 'yes'),
(10, 'comments_notify', '1', 'yes'),
(11, 'posts_per_rss', '10', 'yes'),
(12, 'rss_use_excerpt', '0', 'yes'),
(13, 'mailserver_url', 'mail.example.com', 'yes'),
(14, 'mailserver_login', 'login@example.com', 'yes'),
(15, 'mailserver_pass', 'password', 'yes'),
(16, 'mailserver_port', '110', 'yes'),
(17, 'default_category', '1', 'yes'),
(18, 'default_comment_status', 'open', 'yes'),
(19, 'default_ping_status', 'open', 'yes'),
(20, 'default_pingback_flag', '0', 'yes'),
(21, 'posts_per_page', '10', 'yes'),
(22, 'date_format', 'F j, Y', 'yes'),
(23, 'time_format', 'g:i a', 'yes'),
(24, 'links_updated_date_format', 'F j, Y g:i a', 'yes'),
(25, 'links_recently_updated_prepend', '<em>', 'yes'),
(26, 'links_recently_updated_append', '</em>', 'yes'),
(27, 'links_recently_updated_time', '120', 'yes'),
(28, 'comment_moderation', '0', 'yes'),
(29, 'moderation_notify', '1', 'yes'),
(30, 'permalink_structure', '', 'yes'),
(31, 'gzipcompression', '0', 'yes'),
(32, 'hack_file', '0', 'yes'),
(33, 'blog_charset', 'UTF-8', 'yes'),
(34, 'moderation_keys', '', 'no'),
(35, 'active_plugins', 'a:0:{}', 'yes'),
(36, 'home', 'http://192.168.1.100/jamshaid/CodeIgniter/blog', 'yes'),
(37, 'category_base', '', 'yes'),
(38, 'ping_sites', 'http://rpc.pingomatic.com/', 'yes'),
(39, 'advanced_edit', '0', 'yes'),
(40, 'comment_max_links', '2', 'yes'),
(41, 'gmt_offset', '0', 'yes'),
(42, 'default_email_category', '1', 'yes'),
(43, 'recently_edited', '', 'no'),
(44, 'template', 'twentytwelve', 'yes'),
(45, 'stylesheet', 'twentytwelve', 'yes'),
(46, 'comment_whitelist', '1', 'yes'),
(47, 'blacklist_keys', '', 'no'),
(48, 'comment_registration', '0', 'yes'),
(49, 'html_type', 'text/html', 'yes'),
(50, 'use_trackback', '0', 'yes'),
(51, 'default_role', 'subscriber', 'yes'),
(52, 'db_version', '22441', 'yes'),
(53, 'uploads_use_yearmonth_folders', '1', 'yes'),
(54, 'upload_path', '', 'yes'),
(55, 'blog_public', '0', 'yes'),
(56, 'default_link_category', '2', 'yes'),
(57, 'show_on_front', 'posts', 'yes'),
(58, 'tag_base', '', 'yes'),
(59, 'show_avatars', '1', 'yes'),
(60, 'avatar_rating', 'G', 'yes'),
(61, 'upload_url_path', '', 'yes'),
(62, 'thumbnail_size_w', '150', 'yes'),
(63, 'thumbnail_size_h', '150', 'yes'),
(64, 'thumbnail_crop', '1', 'yes'),
(65, 'medium_size_w', '300', 'yes'),
(66, 'medium_size_h', '300', 'yes'),
(67, 'avatar_default', 'mystery', 'yes'),
(68, 'large_size_w', '1024', 'yes'),
(69, 'large_size_h', '1024', 'yes'),
(70, 'image_default_link_type', 'file', 'yes'),
(71, 'image_default_size', '', 'yes'),
(72, 'image_default_align', '', 'yes'),
(73, 'close_comments_for_old_posts', '0', 'yes'),
(74, 'close_comments_days_old', '14', 'yes'),
(75, 'thread_comments', '1', 'yes'),
(76, 'thread_comments_depth', '5', 'yes'),
(77, 'page_comments', '0', 'yes'),
(78, 'comments_per_page', '50', 'yes'),
(79, 'default_comments_page', 'newest', 'yes'),
(80, 'comment_order', 'asc', 'yes'),
(81, 'sticky_posts', 'a:0:{}', 'yes'),
(82, 'widget_categories', 'a:2:{i:2;a:4:{s:5:"title";s:0:"";s:5:"count";i:0;s:12:"hierarchical";i:0;s:8:"dropdown";i:0;}s:12:"_multiwidget";i:1;}', 'yes'),
(83, 'widget_text', 'a:0:{}', 'yes'),
(84, 'widget_rss', 'a:0:{}', 'yes'),
(85, 'uninstall_plugins', 'a:0:{}', 'no'),
(86, 'timezone_string', '', 'yes'),
(87, 'page_for_posts', '0', 'yes'),
(88, 'page_on_front', '0', 'yes'),
(89, 'default_post_format', '0', 'yes'),
(90, 'link_manager_enabled', '0', 'yes'),
(91, 'initial_db_version', '22441', 'yes'),
(92, 'wp_user_roles', 'a:5:{s:13:"administrator";a:2:{s:4:"name";s:13:"Administrator";s:12:"capabilities";a:62:{s:13:"switch_themes";b:1;s:11:"edit_themes";b:1;s:16:"activate_plugins";b:1;s:12:"edit_plugins";b:1;s:10:"edit_users";b:1;s:10:"edit_files";b:1;s:14:"manage_options";b:1;s:17:"moderate_comments";b:1;s:17:"manage_categories";b:1;s:12:"manage_links";b:1;s:12:"upload_files";b:1;s:6:"import";b:1;s:15:"unfiltered_html";b:1;s:10:"edit_posts";b:1;s:17:"edit_others_posts";b:1;s:20:"edit_published_posts";b:1;s:13:"publish_posts";b:1;s:10:"edit_pages";b:1;s:4:"read";b:1;s:8:"level_10";b:1;s:7:"level_9";b:1;s:7:"level_8";b:1;s:7:"level_7";b:1;s:7:"level_6";b:1;s:7:"level_5";b:1;s:7:"level_4";b:1;s:7:"level_3";b:1;s:7:"level_2";b:1;s:7:"level_1";b:1;s:7:"level_0";b:1;s:17:"edit_others_pages";b:1;s:20:"edit_published_pages";b:1;s:13:"publish_pages";b:1;s:12:"delete_pages";b:1;s:19:"delete_others_pages";b:1;s:22:"delete_published_pages";b:1;s:12:"delete_posts";b:1;s:19:"delete_others_posts";b:1;s:22:"delete_published_posts";b:1;s:20:"delete_private_posts";b:1;s:18:"edit_private_posts";b:1;s:18:"read_private_posts";b:1;s:20:"delete_private_pages";b:1;s:18:"edit_private_pages";b:1;s:18:"read_private_pages";b:1;s:12:"delete_users";b:1;s:12:"create_users";b:1;s:17:"unfiltered_upload";b:1;s:14:"edit_dashboard";b:1;s:14:"update_plugins";b:1;s:14:"delete_plugins";b:1;s:15:"install_plugins";b:1;s:13:"update_themes";b:1;s:14:"install_themes";b:1;s:11:"update_core";b:1;s:10:"list_users";b:1;s:12:"remove_users";b:1;s:9:"add_users";b:1;s:13:"promote_users";b:1;s:18:"edit_theme_options";b:1;s:13:"delete_themes";b:1;s:6:"export";b:1;}}s:6:"editor";a:2:{s:4:"name";s:6:"Editor";s:12:"capabilities";a:34:{s:17:"moderate_comments";b:1;s:17:"manage_categories";b:1;s:12:"manage_links";b:1;s:12:"upload_files";b:1;s:15:"unfiltered_html";b:1;s:10:"edit_posts";b:1;s:17:"edit_others_posts";b:1;s:20:"edit_published_posts";b:1;s:13:"publish_posts";b:1;s:10:"edit_pages";b:1;s:4:"read";b:1;s:7:"level_7";b:1;s:7:"level_6";b:1;s:7:"level_5";b:1;s:7:"level_4";b:1;s:7:"level_3";b:1;s:7:"level_2";b:1;s:7:"level_1";b:1;s:7:"level_0";b:1;s:17:"edit_others_pages";b:1;s:20:"edit_published_pages";b:1;s:13:"publish_pages";b:1;s:12:"delete_pages";b:1;s:19:"delete_others_pages";b:1;s:22:"delete_published_pages";b:1;s:12:"delete_posts";b:1;s:19:"delete_others_posts";b:1;s:22:"delete_published_posts";b:1;s:20:"delete_private_posts";b:1;s:18:"edit_private_posts";b:1;s:18:"read_private_posts";b:1;s:20:"delete_private_pages";b:1;s:18:"edit_private_pages";b:1;s:18:"read_private_pages";b:1;}}s:6:"author";a:2:{s:4:"name";s:6:"Author";s:12:"capabilities";a:10:{s:12:"upload_files";b:1;s:10:"edit_posts";b:1;s:20:"edit_published_posts";b:1;s:13:"publish_posts";b:1;s:4:"read";b:1;s:7:"level_2";b:1;s:7:"level_1";b:1;s:7:"level_0";b:1;s:12:"delete_posts";b:1;s:22:"delete_published_posts";b:1;}}s:11:"contributor";a:2:{s:4:"name";s:11:"Contributor";s:12:"capabilities";a:5:{s:10:"edit_posts";b:1;s:4:"read";b:1;s:7:"level_1";b:1;s:7:"level_0";b:1;s:12:"delete_posts";b:1;}}s:10:"subscriber";a:2:{s:4:"name";s:10:"Subscriber";s:12:"capabilities";a:2:{s:4:"read";b:1;s:7:"level_0";b:1;}}}', 'yes'),
(93, 'widget_search', 'a:2:{i:2;a:1:{s:5:"title";s:0:"";}s:12:"_multiwidget";i:1;}', 'yes'),
(94, 'widget_recent-posts', 'a:2:{i:2;a:2:{s:5:"title";s:0:"";s:6:"number";i:5;}s:12:"_multiwidget";i:1;}', 'yes'),
(95, 'widget_recent-comments', 'a:2:{i:2;a:2:{s:5:"title";s:0:"";s:6:"number";i:5;}s:12:"_multiwidget";i:1;}', 'yes'),
(96, 'widget_archives', 'a:2:{i:2;a:3:{s:5:"title";s:0:"";s:5:"count";i:0;s:8:"dropdown";i:0;}s:12:"_multiwidget";i:1;}', 'yes'),
(97, 'widget_meta', 'a:2:{i:2;a:1:{s:5:"title";s:0:"";}s:12:"_multiwidget";i:1;}', 'yes'),
(98, 'sidebars_widgets', 'a:5:{s:19:"wp_inactive_widgets";a:0:{}s:9:"sidebar-1";a:6:{i:0;s:8:"search-2";i:1;s:14:"recent-posts-2";i:2;s:17:"recent-comments-2";i:3;s:10:"archives-2";i:4;s:12:"categories-2";i:5;s:6:"meta-2";}s:9:"sidebar-2";a:0:{}s:9:"sidebar-3";a:0:{}s:13:"array_version";i:3;}', 'yes'),
(99, 'cron', 'a:3:{i:1362146896;a:1:{s:19:"wp_scheduled_delete";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:5:"daily";s:4:"args";a:0:{}s:8:"interval";i:86400;}}}i:1362166455;a:3:{s:16:"wp_version_check";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:10:"twicedaily";s:4:"args";a:0:{}s:8:"interval";i:43200;}}s:17:"wp_update_plugins";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:10:"twicedaily";s:4:"args";a:0:{}s:8:"interval";i:43200;}}s:16:"wp_update_themes";a:1:{s:32:"40cd750bba9870f18aada2478b24840a";a:3:{s:8:"schedule";s:10:"twicedaily";s:4:"args";a:0:{}s:8:"interval";i:43200;}}}s:7:"version";i:2;}', 'yes'),
(106, '_site_transient_timeout_browser_013accafa1d7729e25f03df1a3cf16f1', '1361432064', 'yes'),
(101, '_site_transient_update_core', 'O:8:"stdClass":3:{s:7:"updates";a:1:{i:0;O:8:"stdClass":9:{s:8:"response";s:6:"latest";s:8:"download";s:40:"http://wordpress.org/wordpress-3.5.1.zip";s:6:"locale";s:5:"en_US";s:8:"packages";O:8:"stdClass":4:{s:4:"full";s:40:"http://wordpress.org/wordpress-3.5.1.zip";s:10:"no_content";s:51:"http://wordpress.org/wordpress-3.5.1-no-content.zip";s:11:"new_bundled";s:52:"http://wordpress.org/wordpress-3.5.1-new-bundled.zip";s:7:"partial";b:0;}s:7:"current";s:5:"3.5.1";s:11:"php_version";s:5:"5.2.4";s:13:"mysql_version";s:3:"5.0";s:11:"new_bundled";s:3:"3.5";s:15:"partial_version";s:0:"";}}s:12:"last_checked";i:1362126001;s:15:"version_checked";s:5:"3.5.1";}', 'yes'),
(102, '_site_transient_update_plugins', 'O:8:"stdClass":2:{s:12:"last_checked";i:1362126001;s:8:"response";a:0:{}}', 'yes'),
(107, '_site_transient_browser_013accafa1d7729e25f03df1a3cf16f1', 'a:9:{s:8:"platform";s:7:"Windows";s:4:"name";s:7:"Firefox";s:7:"version";s:4:"18.0";s:10:"update_url";s:23:"http://www.firefox.com/";s:7:"img_src";s:50:"http://s.wordpress.org/images/browsers/firefox.png";s:11:"img_src_ssl";s:49:"https://wordpress.org/images/browsers/firefox.png";s:15:"current_version";s:2:"16";s:7:"upgrade";b:0;s:8:"insecure";b:0;}', 'yes'),
(231, '_site_transient_timeout_theme_roots', '1362127802', 'yes'),
(232, '_site_transient_theme_roots', 'a:2:{s:12:"twentyeleven";s:7:"/themes";s:12:"twentytwelve";s:7:"/themes";}', 'yes'),
(105, '_site_transient_update_themes', 'O:8:"stdClass":3:{s:12:"last_checked";i:1362126003;s:7:"checked";a:2:{s:12:"twentyeleven";s:3:"1.5";s:12:"twentytwelve";s:3:"1.1";}s:8:"response";a:0:{}}', 'yes'),
(108, 'dashboard_widget_options', 'a:4:{s:25:"dashboard_recent_comments";a:1:{s:5:"items";i:5;}s:24:"dashboard_incoming_links";a:5:{s:4:"home";s:46:"http://192.168.1.100/jamshaid/CodeIgniter/blog";s:4:"link";s:122:"http://blogsearch.google.com/blogsearch?scoring=d&partner=wordpress&q=link:http://192.168.1.100/jamshaid/CodeIgniter/blog/";s:3:"url";s:155:"http://blogsearch.google.com/blogsearch_feeds?scoring=d&ie=utf-8&num=10&output=rss&partner=wordpress&q=link:http://192.168.1.100/jamshaid/CodeIgniter/blog/";s:5:"items";i:10;s:9:"show_date";b:0;}s:17:"dashboard_primary";a:7:{s:4:"link";s:26:"http://wordpress.org/news/";s:3:"url";s:31:"http://wordpress.org/news/feed/";s:5:"title";s:14:"WordPress Blog";s:5:"items";i:2;s:12:"show_summary";i:1;s:11:"show_author";i:0;s:9:"show_date";i:1;}s:19:"dashboard_secondary";a:7:{s:4:"link";s:28:"http://planet.wordpress.org/";s:3:"url";s:33:"http://planet.wordpress.org/feed/";s:5:"title";s:20:"Other WordPress News";s:5:"items";i:5;s:12:"show_summary";i:0;s:11:"show_author";i:0;s:9:"show_date";i:0;}}', 'yes'),
(109, 'can_compress_scripts', '1', 'yes'),
(219, '_transient_timeout_feed_mod_867bd5c64f85878d03a060509cd2f92c', '1361469388', 'no'),
(220, '_transient_feed_mod_867bd5c64f85878d03a060509cd2f92c', '1361426188', 'no'),
(221, '_transient_timeout_dash_aa95765b5cc111c56d5993d476b1c2f0', '1361469388', 'no'),
(222, '_transient_dash_aa95765b5cc111c56d5993d476b1c2f0', '<div class="rss-widget"><ul><li><a class=''rsswidget'' href=''http://ma.tt/2013/02/new-yahoo-2/'' title=''Marissa Mayer announces the new Yahoo hompage, on a WordPress-powered blog. [&hellip;]''>Matt: New Yahoo</a></li><li><a class=''rsswidget'' href=''http://ma.tt/2013/02/100-gpl/'' title=''Creative Market just announced that all of their WordPress Themes are now 100% GPL, meaning to list in their marketplace and reach their users your theme must provide users with the same freedoms that WordPress itself does. They have some great themes already. This is fantastic news and I’m very proud of their team for taking this bold step, and as promised  [&hellip;]''>Matt: 100% GPL</a></li><li><a class=''rsswidget'' href=''http://wordpress.tv/2013/02/20/leslie-hancock-developing-a-distinctive-online-voice/'' title='' [&hellip;]''>WordPress.tv: Leslie Hancock: Developing a Distinctive Online Voice</a></li><li><a class=''rsswidget'' href=''http://wordpress.tv/2013/02/20/scott-basgaard-help-yourself-by-helping-others/'' title='' [&hellip;]''>WordPress.tv: Scott Basgaard: Help Yourself by Helping Others</a></li><li><a class=''rsswidget'' href=''http://feedproxy.google.com/~r/weblogtoolscollection/UXMP/~3/3tj7MIPbhOc/'' title=''The new default theme for WordPress 3.6, titled Twenty Thirteen, is making progress. This year’s default theme is overseen by Matt Mullenweg, and built by Joen Asmussen, Konstantin Obenland, and Lance Willett. The goal for Twenty Thirteen is to offer “a focus on blogging, and great support for post formats (which are getting attention on the backend in 3.6 a [&hellip;]''>Weblog Tools Collection: Twenty Thirteen Theme in Progress</a></li></ul></div>', 'no'),
(223, 'theme_mods_twentytwelve', 'a:1:{s:16:"background_color";s:6:"ffffff";}', 'yes'),
(199, '_transient_timeout_feed_317dc7655f562d6b338f9b493b97b0c3', '1361469385', 'no'),
(200, '_transient_feed_317dc7655f562d6b338f9b493b97b0c3', 'a:4:{s:5:"child";a:1:{s:0:"";a:1:{s:3:"rss";a:1:{i:0;a:6:{s:4:"data";s:4:"\n  \n";s:7:"attribs";a:1:{s:0:"";a:1:{s:7:"version";s:3:"2.0";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:1:{s:0:"";a:1:{s:7:"channel";a:1:{i:0;a:6:{s:4:"data";s:33:"\n    \n    \n    \n    \n    \n    \n  ";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:3:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:73:"link:http://192.168.1.100/jamshaid/CodeIgniter/blog/ - Google Blog Search";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:110:"http://www.google.com/search?ie=utf-8&q=link:http://192.168.1.100/jamshaid/CodeIgniter/blog/&tbm=blg&tbs=sbd:1";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:104:"Your search - <b>link:http://192.168.1.100/jamshaid/CodeIgniter/blog/</b> - did not match any documents.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:36:"http://a9.com/-/spec/opensearch/1.1/";a:3:{s:12:"totalResults";a:1:{i:0;a:5:{s:4:"data";s:1:"0";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:10:"startIndex";a:1:{i:0;a:5:{s:4:"data";s:1:"1";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:12:"itemsPerPage";a:1:{i:0;a:5:{s:4:"data";s:2:"10";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}}}}}}}}s:4:"type";i:128;s:7:"headers";a:10:{s:12:"content-type";s:28:"text/xml; charset=ISO-8859-1";s:4:"date";s:29:"Thu, 21 Feb 2013 05:56:25 GMT";s:7:"expires";s:2:"-1";s:13:"cache-control";s:18:"private, max-age=0";s:10:"set-cookie";a:2:{i:0;s:143:"PREF=ID=a43bf2d80c3524b5:FF=0:TM=1361426185:LM=1361426185:S=PLaN23xd_AlEPytL; expires=Sat, 21-Feb-2015 05:56:25 GMT; path=/; domain=.google.com";i:1;s:212:"NID=67=tOZnNnxxuM3rU6iiaRgoxraMRbx0k_QjbsyZj5x9soGsLYrW9hk1iJ6IwjQEXCt9qmFIlKF987WO9s5BTvxHIIDV9UcxUEjqqZH9dzj12XgiYlgJx52AmHTHBt1Q4GHa; expires=Fri, 23-Aug-2013 05:56:25 GMT; path=/; domain=.google.com; HttpOnly";}s:3:"p3p";s:122:"CP="This is not a P3P policy! See http://www.google.com/support/accounts/bin/answer.py?hl=en&answer=151657 for more info."";s:6:"server";s:3:"gws";s:16:"x-xss-protection";s:13:"1; mode=block";s:15:"x-frame-options";s:10:"SAMEORIGIN";s:10:"connection";s:5:"close";}s:5:"build";s:14:"20121202164312";}', 'no'),
(201, '_transient_timeout_feed_mod_317dc7655f562d6b338f9b493b97b0c3', '1361469385', 'no'),
(202, '_transient_feed_mod_317dc7655f562d6b338f9b493b97b0c3', '1361426185', 'no'),
(203, '_transient_timeout_dash_20494a3d90a6669585674ed0eb8dcd8f', '1361469385', 'no'),
(204, '_transient_dash_20494a3d90a6669585674ed0eb8dcd8f', '<p>This dashboard widget queries <a href="http://blogsearch.google.com/">Google Blog Search</a> so that when another blog links to your site it will show up here. It has found no incoming links&hellip; yet. It&#8217;s okay &#8212; there is no rush.</p>\n', 'no'),
(195, '_transient_timeout_feed_mod_ac0b00fe65abe10e0c5b588f3ed8c7ca', '1361469384', 'no'),
(196, '_transient_feed_mod_ac0b00fe65abe10e0c5b588f3ed8c7ca', '1361426184', 'no'),
(197, '_transient_timeout_dash_4077549d03da2e451c8b5f002294ff51', '1361469384', 'no'),
(198, '_transient_dash_4077549d03da2e451c8b5f002294ff51', '<div class="rss-widget"><ul><li><a class=''rsswidget'' href=''http://wordpress.org/news/2013/01/wordpress-3-5-1/'' title=''WordPress 3.5.1 is now available. Version 3.5.1 is the first maintenance release of 3.5, fixing 37 bugs. It is also a security release for all previous WordPress versions. For a full list of changes, consult the list of tickets and the changelog, which include: Editor: Prevent certain HTML elements from being unexpectedly removed or modified in rare [&hellip;]''>WordPress 3.5.1 Maintenance and Security Release</a> <span class="rss-date">January 24, 2013</span><div class=''rssSummary''>WordPress 3.5.1 is now available. Version 3.5.1 is the first maintenance release of 3.5, fixing 37 bugs. It is also a security release for all previous WordPress versions. For a full list of changes, consult the list of tickets and the changelog, which include: Editor: Prevent certain HTML elements from being unexpectedly removed or modified in rare [&hellip;]</div></li><li><a class=''rsswidget'' href=''http://wordpress.org/news/2013/01/2012-a-look-back/'' title=''Another year is coming to a close, and it’s time to look back and reflect on what we’ve accomplished in the past twelve months. The WordPress community is stronger than ever, and some of the accomplishments of the past year are definitely worth remembering. Software Releases We had two major releases of the WordPress web [&hellip;]''>2012: A Look Back</a> <span class="rss-date">January 1, 2013</span><div class=''rssSummary''>Another year is coming to a close, and it’s time to look back and reflect on what we’ve accomplished in the past twelve months. The WordPress community is stronger than ever, and some of the accomplishments of the past year are definitely worth remembering. Software Releases We had two major releases of the WordPress web [&hellip;]</div></li></ul></div>', 'no'),
(211, '_transient_timeout_feed_mod_57bc725ad6568758915363af670fd8bc', '1361469385', 'no'),
(212, '_transient_feed_mod_57bc725ad6568758915363af670fd8bc', '1361426185', 'no'),
(217, '_transient_timeout_feed_867bd5c64f85878d03a060509cd2f92c', '1361469388', 'no');
INSERT INTO `wp_options` (`option_id`, `option_name`, `option_value`, `autoload`) VALUES
(218, '_transient_feed_867bd5c64f85878d03a060509cd2f92c', 'a:4:{s:5:"child";a:1:{s:0:"";a:1:{s:3:"rss";a:1:{i:0;a:6:{s:4:"data";s:3:"\n\n\n";s:7:"attribs";a:1:{s:0:"";a:1:{s:7:"version";s:3:"2.0";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:1:{s:0:"";a:1:{s:7:"channel";a:1:{i:0;a:6:{s:4:"data";s:61:"\n	\n	\n	\n	\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:1:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:16:"WordPress Planet";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:28:"http://planet.wordpress.org/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:8:"language";a:1:{i:0;a:5:{s:4:"data";s:2:"en";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:47:"WordPress Planet - http://planet.wordpress.org/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"item";a:50:{i:0;a:6:{s:4:"data";s:13:"\n	\n	\n	\n	\n	\n	\n";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:15:"Matt: New Yahoo";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:21:"http://ma.tt/?p=42140";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:33:"http://ma.tt/2013/02/new-yahoo-2/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:152:"<p><a href="http://ycorpblog.com/2013/02/20/a-new-welcome-to-yahoo/">Marissa Mayer announces the new Yahoo hompage</a>, on a WordPress-powered blog.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 21 Feb 2013 00:41:38 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:4:"Matt";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:1;a:6:{s:4:"data";s:13:"\n	\n	\n	\n	\n	\n	\n";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:14:"Matt: 100% GPL";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:21:"http://ma.tt/?p=42138";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:29:"http://ma.tt/2013/02/100-gpl/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:731:"<p><a href="https://creativemarket.com/blog/2013/02/19/all-wordpress-themes-now-100-gpl">Creative Market just announced that all of their WordPress Themes are now 100% GPL</a>, meaning to list in their marketplace and reach their users your theme must provide users with the same freedoms that WordPress itself does. <a href="https://creativemarket.com/themes">They have some great themes already</a>. This is fantastic news and I&#8217;m very proud of their team for taking this bold step, and as promised <a href="http://wordpress.org/">WordPress.org homepage promotion is forthcoming</a>. I think we&#8217;ll see more of these down the line, especially as WordPress consumers start demanding 100% GPL from anything they buy.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Wed, 20 Feb 2013 22:57:22 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:4:"Matt";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:2;a:6:{s:4:"data";s:13:"\n	\n	\n	\n	\n	\n	\n";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:67:"WordPress.tv: Leslie Hancock: Developing a Distinctive Online Voice";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:28:"http://wordpress.tv/?p=13397";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:84:"http://wordpress.tv/2013/02/20/leslie-hancock-developing-a-distinctive-online-voice/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:649:"<div id="v-O7tIUwak-1" class="video-player">\n</div>\n<br />  <a rel="nofollow" href="http://feeds.wordpress.com/1.0/gocomments/wptv.wordpress.com/13397/"><img alt="" border="0" src="http://feeds.wordpress.com/1.0/comments/wptv.wordpress.com/13397/" /></a> <img alt="" border="0" src="http://stats.wordpress.com/b.gif?host=wordpress.tv&blog=5089392&post=13397&subd=wptv&ref=&feed=1" width="1" height="1" /><div><a href="http://wordpress.tv/2013/02/20/leslie-hancock-developing-a-distinctive-online-voice/"><img alt="Leslie Hancock" src="http://videos.videopress.com/O7tIUwak/leslie-hancock_scruberthumbnail_3.jpg" width="160" height="120" /></a></div>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Wed, 20 Feb 2013 19:00:59 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:12:"WordPress.tv";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:3;a:6:{s:4:"data";s:13:"\n	\n	\n	\n	\n	\n	\n";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:61:"WordPress.tv: Scott Basgaard: Help Yourself by Helping Others";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:28:"http://wordpress.tv/?p=16413";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:78:"http://wordpress.tv/2013/02/20/scott-basgaard-help-yourself-by-helping-others/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:679:"<div id="v-JrFIi2mr-1" class="video-player">\n</div>\n<br />  <a rel="nofollow" href="http://feeds.wordpress.com/1.0/gocomments/wptv.wordpress.com/16413/"><img alt="" border="0" src="http://feeds.wordpress.com/1.0/comments/wptv.wordpress.com/16413/" /></a> <img alt="" border="0" src="http://stats.wordpress.com/b.gif?host=wordpress.tv&blog=5089392&post=16413&subd=wptv&ref=&feed=1" width="1" height="1" /><div><a href="http://wordpress.tv/2013/02/20/scott-basgaard-help-yourself-by-helping-others/"><img alt="Scott Basgaard &#8211; Help Yourself by Helping Others" src="http://videos.videopress.com/JrFIi2mr/video-1b5f774479_std.original.jpg" width="160" height="120" /></a></div>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Wed, 20 Feb 2013 19:00:13 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:12:"WordPress.tv";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:4;a:6:{s:4:"data";s:13:"\n	\n	\n	\n	\n	\n	\n";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:58:"Weblog Tools Collection: Twenty Thirteen Theme in Progress";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:41:"http://weblogtoolscollection.com/?p=12687";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:73:"http://feedproxy.google.com/~r/weblogtoolscollection/UXMP/~3/3tj7MIPbhOc/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:1919:"<p>The new default theme for <a href="http://wordpress.org">WordPress</a> 3.6, titled Twenty Thirteen, is <a href="http://make.wordpress.org/core/2013/02/18/introducing-twenty-thirteen/">making progress</a>. This year&#8217;s default theme is overseen by <a href="http://ma.tt">Matt Mullenweg</a>, and built by <a href="http://noscope.com">Joen Asmussen</a>, <a href="http://en.wp.obenland.it">Konstantin Obenland</a>, and <a href="http://simpledream.net">Lance Willett</a>.</p>\n<p>The goal for Twenty Thirteen is to offer &#8220;a focus on blogging, and great support for post formats (which are getting <a href="http://make.wordpress.org/core/tag/post-formats/">attention</a> on the backend in 3.6 as well).&#8221;</p>\n<p>If you&#8217;d like to see the theme in action, <a href="http://twentythirteendemo.wordpress.com">a demo site</a> is available. One thing you&#8217;ll notice immediately is that the strong emphasis on whitespace, which has become commonplace in the default themes, is long-gone. Twenty Thirteen is making very bold use of its colors, offering a different color for each post format. The theme also lacks a sidebar by default. It&#8217;s designed to focus on blogging after all, so the designers prefer that you leave your widgets to the footer area, but it still does support a sidebar widget area if you really want to put something there.</p>\n<p>This theme won&#8217;t be for everyone, and really no default theme should. Default themes should showcase the strength of each release&#8217;s new features and inspire customization. If you aren&#8217;t a fan of Twenty Thirteen, don&#8217;t worry, there are still <a href="http://wordpress.org/extend/themes/">over 1,600 themes</a> to choose from, including <a href="http://wordpress.org/extend/themes/twentytwelve">Twenty Twelve</a>.</p>\n<img src="http://feeds.feedburner.com/~r/weblogtoolscollection/UXMP/~4/3tj7MIPbhOc" height="1" width="1" />";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Wed, 20 Feb 2013 14:00:02 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:5:"James";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:5;a:6:{s:4:"data";s:13:"\n	\n	\n	\n	\n	\n	\n";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:50:"WordPress.tv: Kaspars Dambis: Widgets and Sidebars";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:28:"http://wordpress.tv/?p=16399";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:67:"http://wordpress.tv/2013/02/20/kaspars-dambis-widgets-and-sidebars/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:657:"<div id="v-fEau4LpZ-1" class="video-player">\n</div>\n<br />  <a rel="nofollow" href="http://feeds.wordpress.com/1.0/gocomments/wptv.wordpress.com/16399/"><img alt="" border="0" src="http://feeds.wordpress.com/1.0/comments/wptv.wordpress.com/16399/" /></a> <img alt="" border="0" src="http://stats.wordpress.com/b.gif?host=wordpress.tv&blog=5089392&post=16399&subd=wptv&ref=&feed=1" width="1" height="1" /><div><a href="http://wordpress.tv/2013/02/20/kaspars-dambis-widgets-and-sidebars/"><img alt="Kaspars Dambis &#8211; Widgets and Sidebars" src="http://videos.videopress.com/fEau4LpZ/video-a52f043d6c_std.original.jpg" width="160" height="120" /></a></div>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Wed, 20 Feb 2013 07:00:46 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:12:"WordPress.tv";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:6;a:6:{s:4:"data";s:13:"\n	\n	\n	\n	\n	\n	\n";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:83:"WordPress.tv: Remkus de Vries: WordPress Means Business, but you’ve got to own it";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:28:"http://wordpress.tv/?p=16411";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:96:"http://wordpress.tv/2013/02/20/remkus-de-vries-wordpress-means-business-but-youve-got-to-own-it/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:684:"<div id="v-IBC4MbYE-1" class="video-player">\n</div>\n<br />  <a rel="nofollow" href="http://feeds.wordpress.com/1.0/gocomments/wptv.wordpress.com/16411/"><img alt="" border="0" src="http://feeds.wordpress.com/1.0/comments/wptv.wordpress.com/16411/" /></a> <img alt="" border="0" src="http://stats.wordpress.com/b.gif?host=wordpress.tv&blog=5089392&post=16411&subd=wptv&ref=&feed=1" width="1" height="1" /><div><a href="http://wordpress.tv/2013/02/20/remkus-de-vries-wordpress-means-business-but-youve-got-to-own-it/"><img alt="Remkus de Vries: WordPress Means Business" src="http://videos.videopress.com/IBC4MbYE/video-9584d452fb_std.original.jpg" width="160" height="120" /></a></div>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Wed, 20 Feb 2013 07:00:00 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:12:"WordPress.tv";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:7;a:6:{s:4:"data";s:13:"\n	\n	\n	\n	\n	\n	\n";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:48:"WordPress.tv: Mario Peshev: Mind your JavaScript";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:28:"http://wordpress.tv/?p=16403";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:65:"http://wordpress.tv/2013/02/19/mario-peshev-mind-your-javascript/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:646:"<div id="v-qQ7nMQth-1" class="video-player">\n</div>\n<br />  <a rel="nofollow" href="http://feeds.wordpress.com/1.0/gocomments/wptv.wordpress.com/16403/"><img alt="" border="0" src="http://feeds.wordpress.com/1.0/comments/wptv.wordpress.com/16403/" /></a> <img alt="" border="0" src="http://stats.wordpress.com/b.gif?host=wordpress.tv&blog=5089392&post=16403&subd=wptv&ref=&feed=1" width="1" height="1" /><div><a href="http://wordpress.tv/2013/02/19/mario-peshev-mind-your-javascript/"><img alt="Mario Peshev: Mind your JavaScript" src="http://videos.videopress.com/qQ7nMQth/video-81df4576a3_std.original.jpg" width="160" height="120" /></a></div>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Tue, 19 Feb 2013 19:00:58 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:12:"WordPress.tv";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:8;a:6:{s:4:"data";s:13:"\n	\n	\n	\n	\n	\n	\n";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:68:"WordPress.tv: Frederick Townes: 15 Secrets… of Top Media Companies";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:28:"http://wordpress.tv/?p=16393";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:82:"http://wordpress.tv/2013/02/19/frederick-townes-15-secrets-of-top-media-companies/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:683:"<div id="v-hGNbRrM8-1" class="video-player">\n</div>\n<br />  <a rel="nofollow" href="http://feeds.wordpress.com/1.0/gocomments/wptv.wordpress.com/16393/"><img alt="" border="0" src="http://feeds.wordpress.com/1.0/comments/wptv.wordpress.com/16393/" /></a> <img alt="" border="0" src="http://stats.wordpress.com/b.gif?host=wordpress.tv&blog=5089392&post=16393&subd=wptv&ref=&feed=1" width="1" height="1" /><div><a href="http://wordpress.tv/2013/02/19/frederick-townes-15-secrets-of-top-media-companies/"><img alt="Frederick Townes: 15 Secrets… of Top Media Companies" src="http://videos.videopress.com/hGNbRrM8/video-157c4fe289_std.original.jpg" width="160" height="120" /></a></div>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Tue, 19 Feb 2013 19:00:50 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:12:"WordPress.tv";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:9;a:6:{s:4:"data";s:13:"\n	\n	\n	\n	\n	\n	\n";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:59:"Weblog Tools Collection: WordPress Plugin Releases for 2/19";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:41:"http://weblogtoolscollection.com/?p=12683";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:73:"http://feedproxy.google.com/~r/weblogtoolscollection/UXMP/~3/osKlLAKObYM/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:1156:"<h3>New plugins</h3>\n<p><a href="http://wordpress.org/extend/plugins/add-featured-image-to-rss-feed/"><strong>Add featured image to RSS feed</strong></a> adds the featured image attached to your posts to the RSS feed.</p>\n<p><a href="http://wordpress.org/extend/plugins/theme-mentor/"><strong>Theme Mentor</strong></a> is a cousin of the <a href="http://wordpress.org/extend/plugins/theme-check/">Theme-Check</a> plugin getting deeper into the code analysis.</p>\n<h3>Updated plugins</h3>\n<p><a href="http://achievementsapp.com"><strong>Achievements for WordPress</strong></a> gamifies your WordPress site with challenges, badges, and points.</p>\n<p><a href="http://wordpress.org/extend/plugins/co-authors-plus/"><strong>Co-Authors Plus</strong></a> allows you to assign multiple bylines to posts, pages, and custom post types via a search-as-you-type input box.</p>\n<p><a href="http://wordpress.org/extend/plugins/document-feedback/"><strong>Document Feedback</strong></a> allows you to get feedback from readers on the documentation you write.</p>\n<img src="http://feeds.feedburner.com/~r/weblogtoolscollection/UXMP/~4/osKlLAKObYM" height="1" width="1" />";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Tue, 19 Feb 2013 14:00:49 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:5:"James";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:10;a:6:{s:4:"data";s:13:"\n	\n	\n	\n	\n	\n	\n";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:70:"WordPress.tv: Marko Heijnen: The awesome things you can do with images";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:28:"http://wordpress.tv/?p=16405";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:87:"http://wordpress.tv/2013/02/19/marko-heijnen-the-awesome-things-you-can-do-with-images/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:690:"<div id="v-HZHlr73W-1" class="video-player">\n</div>\n<br />  <a rel="nofollow" href="http://feeds.wordpress.com/1.0/gocomments/wptv.wordpress.com/16405/"><img alt="" border="0" src="http://feeds.wordpress.com/1.0/comments/wptv.wordpress.com/16405/" /></a> <img alt="" border="0" src="http://stats.wordpress.com/b.gif?host=wordpress.tv&blog=5089392&post=16405&subd=wptv&ref=&feed=1" width="1" height="1" /><div><a href="http://wordpress.tv/2013/02/19/marko-heijnen-the-awesome-things-you-can-do-with-images/"><img alt="Marko Heijnen: The awesome things you can do with images" src="http://videos.videopress.com/HZHlr73W/video-d063c9c7fb_std.original.jpg" width="160" height="120" /></a></div>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Tue, 19 Feb 2013 07:00:44 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:12:"WordPress.tv";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:11;a:6:{s:4:"data";s:13:"\n	\n	\n	\n	\n	\n	\n";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:71:"WordPress.tv: Konstantin Kovshenin: 7 Tips for Better Theme Development";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:28:"http://wordpress.tv/?p=16401";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:88:"http://wordpress.tv/2013/02/19/konstantin-kovshenin-7-tips-for-better-theme-development/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:698:"<div id="v-nb9zT9Pq-1" class="video-player">\n</div>\n<br />  <a rel="nofollow" href="http://feeds.wordpress.com/1.0/gocomments/wptv.wordpress.com/16401/"><img alt="" border="0" src="http://feeds.wordpress.com/1.0/comments/wptv.wordpress.com/16401/" /></a> <img alt="" border="0" src="http://stats.wordpress.com/b.gif?host=wordpress.tv&blog=5089392&post=16401&subd=wptv&ref=&feed=1" width="1" height="1" /><div><a href="http://wordpress.tv/2013/02/19/konstantin-kovshenin-7-tips-for-better-theme-development/"><img alt="Konstantin Kovshenin: 7 Tips for Better Theme Development" src="http://videos.videopress.com/nb9zT9Pq/video-23729c42bf_scruberthumbnail_0.jpg" width="160" height="120" /></a></div>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Tue, 19 Feb 2013 07:00:38 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:12:"WordPress.tv";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:12;a:6:{s:4:"data";s:13:"\n	\n	\n	\n	\n	\n	\n";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:65:"WordPress.tv: Philip Arthur Moore: Contributing to WordPress Core";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:28:"http://wordpress.tv/?p=16322";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:82:"http://wordpress.tv/2013/02/18/philip-arthur-moore-contributing-to-wordpress-core/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:680:"<div id="v-tXgF9wwi-1" class="video-player">\n</div>\n<br />  <a rel="nofollow" href="http://feeds.wordpress.com/1.0/gocomments/wptv.wordpress.com/16322/"><img alt="" border="0" src="http://feeds.wordpress.com/1.0/comments/wptv.wordpress.com/16322/" /></a> <img alt="" border="0" src="http://stats.wordpress.com/b.gif?host=wordpress.tv&blog=5089392&post=16322&subd=wptv&ref=&feed=1" width="1" height="1" /><div><a href="http://wordpress.tv/2013/02/18/philip-arthur-moore-contributing-to-wordpress-core/"><img alt="Philip Arthur Moore: Contributing to WordPress Core" src="http://videos.videopress.com/tXgF9wwi/video-4bdac57058_std.original.jpg" width="160" height="120" /></a></div>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Tue, 19 Feb 2013 01:30:09 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:12:"WordPress.tv";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:13;a:6:{s:4:"data";s:13:"\n	\n	\n	\n	\n	\n	\n";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:67:"WordPress.tv: Divya Manian: Writing Better Plugins for a Better Web";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:27:"http://wordpress.tv/?p=6091";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:84:"http://wordpress.tv/2013/02/18/divya-manian-writing-better-plugins-for-a-better-web/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:683:"<div id="v-h2MlXaxQ-1" class="video-player">\n</div>\n<br />  <a rel="nofollow" href="http://feeds.wordpress.com/1.0/gocomments/wptv.wordpress.com/6091/"><img alt="" border="0" src="http://feeds.wordpress.com/1.0/comments/wptv.wordpress.com/6091/" /></a> <img alt="" border="0" src="http://stats.wordpress.com/b.gif?host=wordpress.tv&blog=5089392&post=6091&subd=wptv&ref=&feed=1" width="1" height="1" /><div><a href="http://wordpress.tv/2013/02/18/divya-manian-writing-better-plugins-for-a-better-web/"><img alt="Divya Manian: Writing Better Plugins" src="http://videos.videopress.com/h2MlXaxQ/divya-manian-writing-better-plugins_std.original.jpg" width="160" height="120" /></a></div>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Mon, 18 Feb 2013 19:00:58 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:12:"WordPress.tv";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:14;a:6:{s:4:"data";s:13:"\n	\n	\n	\n	\n	\n	\n";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:58:"WordPress.tv: Justin Sainton: WordPress + E-commerce = $$$";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:28:"http://wordpress.tv/?p=13158";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:69:"http://wordpress.tv/2013/02/18/justin-sainton-wordpress-e-commerce-2/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:679:"<div id="v-sjzCqERg-1" class="video-player">\n</div>\n<br />  <a rel="nofollow" href="http://feeds.wordpress.com/1.0/gocomments/wptv.wordpress.com/13158/"><img alt="" border="0" src="http://feeds.wordpress.com/1.0/comments/wptv.wordpress.com/13158/" /></a> <img alt="" border="0" src="http://stats.wordpress.com/b.gif?host=wordpress.tv&blog=5089392&post=13158&subd=wptv&ref=&feed=1" width="1" height="1" /><div><a href="http://wordpress.tv/2013/02/18/justin-sainton-wordpress-e-commerce-2/"><img alt="Justin Sainton- WordPress + E-commerce= $$$" src="http://videos.videopress.com/sjzCqERg/justin-sainton-wordpress-e-commerce1_std.original.jpg" width="160" height="120" /></a></div>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Mon, 18 Feb 2013 19:00:04 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:12:"WordPress.tv";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:15;a:6:{s:4:"data";s:13:"\n	\n	\n	\n	\n	\n	\n";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:63:"WordPress.tv: Boone Gorges: Intro to WordPress MultiSites Pt. 1";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:27:"http://wordpress.tv/?p=6204";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:79:"http://wordpress.tv/2013/02/18/boone-gorges-intro-to-wordpress-multisites-pt-1/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:681:"<div id="v-NxS6FOYa-1" class="video-player">\n</div>\n<br />  <a rel="nofollow" href="http://feeds.wordpress.com/1.0/gocomments/wptv.wordpress.com/6204/"><img alt="" border="0" src="http://feeds.wordpress.com/1.0/comments/wptv.wordpress.com/6204/" /></a> <img alt="" border="0" src="http://stats.wordpress.com/b.gif?host=wordpress.tv&blog=5089392&post=6204&subd=wptv&ref=&feed=1" width="1" height="1" /><div><a href="http://wordpress.tv/2013/02/18/boone-gorges-intro-to-wordpress-multisites-pt-1/"><img alt="Boone Gorges: Intro to WordPress MultiSites Pt. 1" src="http://videos.videopress.com/NxS6FOYa/01_h264_1500k_2997p_scruberthumbnail_3.jpg" width="160" height="120" /></a></div>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Mon, 18 Feb 2013 07:00:26 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:12:"WordPress.tv";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:16;a:6:{s:4:"data";s:13:"\n	\n	\n	\n	\n	\n	\n";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:63:"WordPress.tv: Boone Gorges: Intro to WordPress MultiSites Pt. 2";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:27:"http://wordpress.tv/?p=6207";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:79:"http://wordpress.tv/2013/02/18/boone-gorges-intro-to-wordpress-multisites-pt-2/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:675:"<div id="v-tLDlAiEd-1" class="video-player">\n</div>\n<br />  <a rel="nofollow" href="http://feeds.wordpress.com/1.0/gocomments/wptv.wordpress.com/6207/"><img alt="" border="0" src="http://feeds.wordpress.com/1.0/comments/wptv.wordpress.com/6207/" /></a> <img alt="" border="0" src="http://stats.wordpress.com/b.gif?host=wordpress.tv&blog=5089392&post=6207&subd=wptv&ref=&feed=1" width="1" height="1" /><div><a href="http://wordpress.tv/2013/02/18/boone-gorges-intro-to-wordpress-multisites-pt-2/"><img alt="Boone Gorges: Intro to WordPress MultiSites Pt. 2" src="http://videos.videopress.com/tLDlAiEd/02_h264_1500k_2997p_std.original.jpg" width="160" height="120" /></a></div>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Mon, 18 Feb 2013 07:00:19 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:12:"WordPress.tv";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:17;a:6:{s:4:"data";s:13:"\n	\n	\n	\n	\n	\n	\n";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:148:"WordPress.tv: Catherine Farman &amp; Juliana Perry: What The !$#% Was This Plugin For Anyway?! Maintaining A Sustainable WordPress Multisite Install";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:28:"http://wordpress.tv/?p=16082";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:152:"http://wordpress.tv/2013/02/17/catherine-farman-juliana-perry-what-the-was-this-plugin-for-anyway-maintaining-a-sustainable-wordpress-multisite-install/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:795:"<div id="v-6jzfihti-1" class="video-player">\n</div>\n<br />  <a rel="nofollow" href="http://feeds.wordpress.com/1.0/gocomments/wptv.wordpress.com/16082/"><img alt="" border="0" src="http://feeds.wordpress.com/1.0/comments/wptv.wordpress.com/16082/" /></a> <img alt="" border="0" src="http://stats.wordpress.com/b.gif?host=wordpress.tv&blog=5089392&post=16082&subd=wptv&ref=&feed=1" width="1" height="1" /><div><a href="http://wordpress.tv/2013/02/17/catherine-farman-juliana-perry-what-the-was-this-plugin-for-anyway-maintaining-a-sustainable-wordpress-multisite-install/"><img alt="Catherine Farman, Juliana Perry: What The !$#% Was This Plugin For Anyway?" src="http://videos.videopress.com/6jzfihti/juliana_catherine_wc_philly_2012_scruberthumbnail_1.jpg" width="160" height="120" /></a></div>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Sun, 17 Feb 2013 19:00:43 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:12:"WordPress.tv";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:18;a:6:{s:4:"data";s:13:"\n	\n	\n	\n	\n	\n	\n";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:51:"WordPress.tv: Liam Dempsey: Designing For WordPress";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:28:"http://wordpress.tv/?p=16073";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:68:"http://wordpress.tv/2013/02/17/liam-dempsey-designing-for-wordpress/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:663:"<div id="v-HA6FwBnM-1" class="video-player">\n</div>\n<br />  <a rel="nofollow" href="http://feeds.wordpress.com/1.0/gocomments/wptv.wordpress.com/16073/"><img alt="" border="0" src="http://feeds.wordpress.com/1.0/comments/wptv.wordpress.com/16073/" /></a> <img alt="" border="0" src="http://stats.wordpress.com/b.gif?host=wordpress.tv&blog=5089392&post=16073&subd=wptv&ref=&feed=1" width="1" height="1" /><div><a href="http://wordpress.tv/2013/02/17/liam-dempsey-designing-for-wordpress/"><img alt="Liam Dempsey: Designing For WordPress" src="http://videos.videopress.com/HA6FwBnM/liam_dempsey_wc_philly_2012_std.original.jpg" width="160" height="120" /></a></div>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Sun, 17 Feb 2013 19:00:08 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:12:"WordPress.tv";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:19;a:6:{s:4:"data";s:13:"\n	\n	\n	\n	\n	\n	\n";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:58:"Weblog Tools Collection: WordPress Theme Releases for 2/17";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:41:"http://weblogtoolscollection.com/?p=12670";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:73:"http://feedproxy.google.com/~r/weblogtoolscollection/UXMP/~3/lC_cyiCqVRA/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:1766:"<p><a href="http://wordpress.org/extend/themes/annotum-sans"><img class="alignnone size-thumbnail wp-image-12671" alt="screenshot" src="http://i1.wp.com/weblogtoolscollection.com/wp-content/uploads/2013/02/screenshot3.png?resize=150%2C150" /></a></p>\n<p><a href="http://wordpress.org/extend/themes/annotum-sans"><strong>Annotum Sans</strong></a> is a child theme of <a href="http://wordpress.org/extend/themes/annotum-base">Annotum</a> with a modern sans-serif style.</p>\n<p><a href="http://wordpress.org/extend/themes/chunk"><img class="alignnone size-thumbnail wp-image-12672" alt="screenshot-1" src="http://i2.wp.com/weblogtoolscollection.com/wp-content/uploads/2013/02/screenshot-13.png?resize=150%2C150" /></a></p>\n<p><a href="http://wordpress.org/extend/themes/chunk"><strong>Chunk</strong></a> is a straightforward theme with bold typography.</p>\n<p><a href="http://wordpress.org/extend/themes/landscape"><img class="alignnone size-thumbnail wp-image-12673" alt="screenshot-2" src="http://i2.wp.com/weblogtoolscollection.com/wp-content/uploads/2013/02/screenshot-22.png?resize=150%2C150" /></a></p>\n<p><a href="http://wordpress.org/extend/themes/landscape"><strong>Landscape</strong></a> is a simple responsive theme.</p>\n<p><a href="http://emptynestthemes.com/2013/02/16/techy-wordpress-website-theme/"><img class="alignnone size-thumbnail wp-image-12677" alt="DemoBlog" src="http://i2.wp.com/weblogtoolscollection.com/wp-content/uploads/2013/02/DemoBlog2.png?resize=150%2C150" /></a></p>\n<p><a href="http://emptynestthemes.com/2013/02/16/techy-wordpress-website-theme/"><strong>Techy</strong></a> is a simple 2-column, bold, high contrast theme.</p>\n<img src="http://feeds.feedburner.com/~r/weblogtoolscollection/UXMP/~4/lC_cyiCqVRA" height="1" width="1" />";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Sun, 17 Feb 2013 14:00:17 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:5:"James";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:20;a:6:{s:4:"data";s:13:"\n	\n	\n	\n	\n	\n	\n";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:47:"WordPress.tv: Mason James: Supporting WordPress";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:28:"http://wordpress.tv/?p=13376";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:64:"http://wordpress.tv/2013/02/17/mason-james-supporting-wordpress/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:668:"<div id="v-8V7uymY1-1" class="video-player">\n</div>\n<br />  <a rel="nofollow" href="http://feeds.wordpress.com/1.0/gocomments/wptv.wordpress.com/13376/"><img alt="" border="0" src="http://feeds.wordpress.com/1.0/comments/wptv.wordpress.com/13376/" /></a> <img alt="" border="0" src="http://stats.wordpress.com/b.gif?host=wordpress.tv&blog=5089392&post=13376&subd=wptv&ref=&feed=1" width="1" height="1" /><div><a href="http://wordpress.tv/2013/02/17/mason-james-supporting-wordpress/"><img alt="Mason James: Supporting WordPress" src="http://videos.videopress.com/8V7uymY1/4211-04_supporting_wordpress_mason_james_std.original.jpg" width="160" height="120" /></a></div>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Sun, 17 Feb 2013 07:15:11 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:12:"WordPress.tv";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:21;a:6:{s:4:"data";s:13:"\n	\n	\n	\n	\n	\n	\n";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:61:"WordPress.tv: Joe Casabona: Building A Simple Theme Framework";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:28:"http://wordpress.tv/?p=16078";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:78:"http://wordpress.tv/2013/02/17/joe-casabona-building-a-simple-theme-framework/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:683:"<div id="v-qmHPbRWK-1" class="video-player">\n</div>\n<br />  <a rel="nofollow" href="http://feeds.wordpress.com/1.0/gocomments/wptv.wordpress.com/16078/"><img alt="" border="0" src="http://feeds.wordpress.com/1.0/comments/wptv.wordpress.com/16078/" /></a> <img alt="" border="0" src="http://stats.wordpress.com/b.gif?host=wordpress.tv&blog=5089392&post=16078&subd=wptv&ref=&feed=1" width="1" height="1" /><div><a href="http://wordpress.tv/2013/02/17/joe-casabona-building-a-simple-theme-framework/"><img alt="Joe Casabona: Building A Simple Theme Framework" src="http://videos.videopress.com/qmHPbRWK/joe_casabona_wc_philly_2012_std.original.jpg" width="160" height="120" /></a></div>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Sun, 17 Feb 2013 07:00:02 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:12:"WordPress.tv";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:22;a:6:{s:4:"data";s:13:"\n	\n	\n	\n	\n	\n	\n";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:85:"WordPress.tv: Jason Coleman: Membership Sites with WordPress – Paid Memberships Pro";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:28:"http://wordpress.tv/?p=13370";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:98:"http://wordpress.tv/2013/02/16/jason-coleman-membership-sites-with-wordpress-paid-memberships-pro/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:746:"<div id="v-8o5tKcUb-1" class="video-player">\n</div>\n<br />  <a rel="nofollow" href="http://feeds.wordpress.com/1.0/gocomments/wptv.wordpress.com/13370/"><img alt="" border="0" src="http://feeds.wordpress.com/1.0/comments/wptv.wordpress.com/13370/" /></a> <img alt="" border="0" src="http://stats.wordpress.com/b.gif?host=wordpress.tv&blog=5089392&post=13370&subd=wptv&ref=&feed=1" width="1" height="1" /><div><a href="http://wordpress.tv/2013/02/16/jason-coleman-membership-sites-with-wordpress-paid-memberships-pro/"><img alt="Jason Coleman: Membership Sites with WordPress &#8211; Paid Memberships Pro" src="http://videos.videopress.com/8o5tKcUb/4211-02_paid_memberships_pro_jason_coleman_std.original.jpg" width="160" height="120" /></a></div>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Sat, 16 Feb 2013 19:00:16 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:12:"WordPress.tv";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:23;a:6:{s:4:"data";s:13:"\n	\n	\n	\n	\n	\n	\n";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:75:"WordPress.tv: Chandra Maharzan: Making a successful career out of WordPress";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:28:"http://wordpress.tv/?p=16072";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:92:"http://wordpress.tv/2013/02/16/chandra-maharzan-making-a-successful-career-out-of-wordpress/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:706:"<div id="v-Db7XDjE6-1" class="video-player">\n</div>\n<br />  <a rel="nofollow" href="http://feeds.wordpress.com/1.0/gocomments/wptv.wordpress.com/16072/"><img alt="" border="0" src="http://feeds.wordpress.com/1.0/comments/wptv.wordpress.com/16072/" /></a> <img alt="" border="0" src="http://stats.wordpress.com/b.gif?host=wordpress.tv&blog=5089392&post=16072&subd=wptv&ref=&feed=1" width="1" height="1" /><div><a href="http://wordpress.tv/2013/02/16/chandra-maharzan-making-a-successful-career-out-of-wordpress/"><img alt="Chandra Maharzan: Making a successful career out of WordPress" src="http://videos.videopress.com/Db7XDjE6/video-630f297a8f_scruberthumbnail_0.jpg" width="160" height="120" /></a></div>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Sat, 16 Feb 2013 07:00:13 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:12:"WordPress.tv";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:24;a:6:{s:4:"data";s:13:"\n	\n	\n	\n	\n	\n	\n";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:59:"WordPress.tv: Avinash Kundaliya: JavaScript &amp; WordPress";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:28:"http://wordpress.tv/?p=16188";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:70:"http://wordpress.tv/2013/02/16/avinash-kundaliya-javascript-wordpress/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:664:"<div id="v-Aic5Ykaq-1" class="video-player">\n</div>\n<br />  <a rel="nofollow" href="http://feeds.wordpress.com/1.0/gocomments/wptv.wordpress.com/16188/"><img alt="" border="0" src="http://feeds.wordpress.com/1.0/comments/wptv.wordpress.com/16188/" /></a> <img alt="" border="0" src="http://stats.wordpress.com/b.gif?host=wordpress.tv&blog=5089392&post=16188&subd=wptv&ref=&feed=1" width="1" height="1" /><div><a href="http://wordpress.tv/2013/02/16/avinash-kundaliya-javascript-wordpress/"><img alt="Avinash Kundaliya: JavaScript & WordPress" src="http://videos.videopress.com/Aic5Ykaq/video-60cecee3fa_scruberthumbnail_1.jpg" width="160" height="120" /></a></div>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Sat, 16 Feb 2013 07:00:01 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:12:"WordPress.tv";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:25;a:6:{s:4:"data";s:13:"\n	\n	\n	\n	\n	\n	\n";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:58:"Weblog Tools Collection: Posterous to Shutdown on April 30";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:41:"http://weblogtoolscollection.com/?p=12663";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:73:"http://feedproxy.google.com/~r/weblogtoolscollection/UXMP/~3/-gw-jcZ6nSQ/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:1570:"<p>Some of you may remember that <a href="https://posterous.com">Posterous</a> was <a href="http://weblogtoolscollection.com/archives/2012/03/15/posterous-acquired-by-twitter/">acquired by Twitter</a> almost a year ago. At the time, the future of the service was in doubt, and they have <a href="http://blog.posterous.com/thanks-from-posterous">just announced today</a> that the service will be shutting down on April 30.</p>\n<p>If you&#8217;re still with Posterous, it&#8217;s not too late to move your blog elsewhere. If you prefer hosted blogging services, like Posterous, you can move to <a href="http://wordpress.com">WordPress.com</a> following <a href="http://en.support.wordpress.com/import/import-from-posterous/">this guide</a> and <a href="http://www.squarespace.com">Squarespace</a> following <a href="http://help.squarespace.com/customer/portal/articles/881311-importing-content-from-posterous">this guide</a>. If you&#8217;d rather have more control over the hosting and permanence of your content, it might be time to find yourself a hosting provider so you can install and run <a href="http://wordpress.org">WordPress</a> yourself and use <a href="http://wordpress.org/extend/plugins/posterous-importer/">this importer</a> to bring over your Posterous content.</p>\n<p>Don&#8217;t delay! The service will be completely shutting down on April 30, which means that you will not be able to edit or even view your Posterous blog past that date.</p>\n<img src="http://feeds.feedburner.com/~r/weblogtoolscollection/UXMP/~4/-gw-jcZ6nSQ" height="1" width="1" />";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Sat, 16 Feb 2013 01:45:09 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:5:"James";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:26;a:6:{s:4:"data";s:13:"\n	\n	\n	\n	\n	\n	\n";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:59:"Weblog Tools Collection: WordPress Plugin Releases for 2/15";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:41:"http://weblogtoolscollection.com/?p=12657";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:73:"http://feedproxy.google.com/~r/weblogtoolscollection/UXMP/~3/y8jGs8JJ1kA/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:1017:"<h3>New plugins</h3>\n<p><a href="http://wordpress.org/extend/plugins/debugger/"><strong>Debugger</strong></a> can be used to manually log data or to capture logging on WordPress actions. You can capture load time, memory, backtrace, data dumps, urls, and server IPs.</p>\n<p><a href="http://wordpress.org/extend/plugins/feedback-extended/"><strong>Feedback Extended</strong></a> enables users to reply to feedbacks from the admin panel, requires <a href="http://jetpack.me">Jetpack</a>.</p>\n<h3>Updated plugins</h3>\n<p><a href="http://wordpress.org/extend/plugins/facebook/"><strong>Facebook</strong></a> makes your site deeply social by integrating functionality from Facebook.</p>\n<p><a href="http://wordpress.org/extend/plugins/yet-another-related-posts-plugin/"><strong>Yet Another Related Posts Plugin</strong></a> displays a list of related entries on your site and feeds based on a unique algorithm.</p>\n<img src="http://feeds.feedburner.com/~r/weblogtoolscollection/UXMP/~4/y8jGs8JJ1kA" height="1" width="1" />";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Fri, 15 Feb 2013 20:15:06 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:5:"James";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:27;a:6:{s:4:"data";s:13:"\n	\n	\n	\n	\n	\n	\n";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:44:"WordPress.tv: Alison Barrett: Admin Creation";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:28:"http://wordpress.tv/?p=16332";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:61:"http://wordpress.tv/2013/02/15/alison-barrett-admin-creation/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:638:"<div id="v-4AEebg4X-1" class="video-player">\n</div>\n<br />  <a rel="nofollow" href="http://feeds.wordpress.com/1.0/gocomments/wptv.wordpress.com/16332/"><img alt="" border="0" src="http://feeds.wordpress.com/1.0/comments/wptv.wordpress.com/16332/" /></a> <img alt="" border="0" src="http://stats.wordpress.com/b.gif?host=wordpress.tv&blog=5089392&post=16332&subd=wptv&ref=&feed=1" width="1" height="1" /><div><a href="http://wordpress.tv/2013/02/15/alison-barrett-admin-creation/"><img alt="Alison Barrett: Admin Creation" src="http://videos.videopress.com/4AEebg4X/video-ef71a37170_std.original.jpg" width="160" height="120" /></a></div>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Fri, 15 Feb 2013 19:00:30 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:12:"WordPress.tv";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:28;a:6:{s:4:"data";s:13:"\n	\n	\n	\n	\n	\n	\n";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:59:"WordPress.tv: Jeremy Saxey: CSS for Beginning WP Developers";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:28:"http://wordpress.tv/?p=16258";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:76:"http://wordpress.tv/2013/02/15/jeremy-saxey-css-for-beginning-wp-developers/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:674:"<div id="v-W3mlRZh5-1" class="video-player">\n</div>\n<br />  <a rel="nofollow" href="http://feeds.wordpress.com/1.0/gocomments/wptv.wordpress.com/16258/"><img alt="" border="0" src="http://feeds.wordpress.com/1.0/comments/wptv.wordpress.com/16258/" /></a> <img alt="" border="0" src="http://stats.wordpress.com/b.gif?host=wordpress.tv&blog=5089392&post=16258&subd=wptv&ref=&feed=1" width="1" height="1" /><div><a href="http://wordpress.tv/2013/02/15/jeremy-saxey-css-for-beginning-wp-developers/"><img alt="Jeremy Saxey: CSS for Beginning WP Developers" src="http://videos.videopress.com/W3mlRZh5/video-54a380bf48_scruberthumbnail_0.jpg" width="160" height="120" /></a></div>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Fri, 15 Feb 2013 19:00:09 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:12:"WordPress.tv";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:29;a:6:{s:4:"data";s:13:"\n	\n	\n	\n	\n	\n	\n";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:33:"BuddyPress: BuddyPress 1.7 Beta 1";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:31:"http://buddypress.org/?p=153104";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:52:"http://buddypress.org/2013/02/buddypress-1-7-beta-1/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:1544:"<p>Today the BuddyPress team is excited to announce the first beta of BuddyPress 1.7.</p>\n<p>BuddyPress 1.7 is likely to be our most revolutionary release to date. With it will come full theme compatibility with almost all existing WordPress themes, making it easier than ever to get your community up and running quickly. For those of you looking for a complete changelog, check out <a href="http://buddypress.trac.wordpress.org/query?status=closed&group=resolution&milestone=1.7">the 1.7 milestone in trac</a>.</p>\n<p>From now until 1.7 is released, we will be periodically merging our ongoing development into the WordPress.org plugin repository. If you&#8217;re just starting your first BuddyPress site, we encourage you to start with the 1.7 beta rather than 1.6.4, so that you&#8217;re familiar with what&#8217;s coming rather than what&#8217;s passed.</p>\n<p>Now&#8217;s the time to <a href="http://codex.wordpress.org/Reporting_Bugs">report some feedback</a> and let us know if you find anything unexpected happening. We are on course to release BuddyPress 1.7 in the first half of March.</p>\n<p>If you think you found a bug, please report it on the <a href="http://buddypress.trac.wordpress.org">BuddyPress Core Trac</a>. If you find a security vulnerability, please be discrete and let us know privately using one of the methods posted on the <a href="http://wordpress.org/about/contact/">WordPress contact page</a>.</p>\n<p><a href="http://downloads.wordpress.org/plugin/buddypress.zip">Download BuddyPress 1.7, Beta 1 ↓</a></p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Fri, 15 Feb 2013 12:27:04 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:17:"John James Jacoby";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:30;a:6:{s:4:"data";s:13:"\n	\n	\n	\n	\n	\n	\n";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:44:"WordPress.tv: Seth Carstens: Navigating HTML";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:28:"http://wordpress.tv/?p=16250";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:61:"http://wordpress.tv/2013/02/15/seth-carstens-navigating-html/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:638:"<div id="v-eWbSbpKa-1" class="video-player">\n</div>\n<br />  <a rel="nofollow" href="http://feeds.wordpress.com/1.0/gocomments/wptv.wordpress.com/16250/"><img alt="" border="0" src="http://feeds.wordpress.com/1.0/comments/wptv.wordpress.com/16250/" /></a> <img alt="" border="0" src="http://stats.wordpress.com/b.gif?host=wordpress.tv&blog=5089392&post=16250&subd=wptv&ref=&feed=1" width="1" height="1" /><div><a href="http://wordpress.tv/2013/02/15/seth-carstens-navigating-html/"><img alt="Seth Carstens: Navigating HTML" src="http://videos.videopress.com/eWbSbpKa/video-7ffa2dcfc5_std.original.jpg" width="160" height="120" /></a></div>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Fri, 15 Feb 2013 07:00:53 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:12:"WordPress.tv";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:31;a:6:{s:4:"data";s:13:"\n	\n	\n	\n	\n	\n	\n";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:45:"WordPress.tv: Natalie MacLees: JavaScript 301";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:28:"http://wordpress.tv/?p=16271";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:62:"http://wordpress.tv/2013/02/15/natalie-maclees-javascript-301/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:640:"<div id="v-pfSuGHWB-1" class="video-player">\n</div>\n<br />  <a rel="nofollow" href="http://feeds.wordpress.com/1.0/gocomments/wptv.wordpress.com/16271/"><img alt="" border="0" src="http://feeds.wordpress.com/1.0/comments/wptv.wordpress.com/16271/" /></a> <img alt="" border="0" src="http://stats.wordpress.com/b.gif?host=wordpress.tv&blog=5089392&post=16271&subd=wptv&ref=&feed=1" width="1" height="1" /><div><a href="http://wordpress.tv/2013/02/15/natalie-maclees-javascript-301/"><img alt="Natalie MacLees: JavaScript 301" src="http://videos.videopress.com/pfSuGHWB/video-2fb76a42a2_std.original.jpg" width="160" height="120" /></a></div>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Fri, 15 Feb 2013 07:00:10 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:12:"WordPress.tv";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:32;a:6:{s:4:"data";s:13:"\n	\n	\n	\n	\n	\n	\n";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:75:"Weblog Tools Collection: Automattic Releases WordPress.com Theme Guidelines";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:41:"http://weblogtoolscollection.com/?p=12652";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:73:"http://feedproxy.google.com/~r/weblogtoolscollection/UXMP/~3/63js-tjhrbI/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:1159:"<p><a href="http://automattic.com">Automattic</a> wants you to have the best possible experience on <a href="http://wordpress.com">WordPress.com</a>, and to ensure that, all of <a href="http://theme.wordpress.com">the available themes</a> go through a rigorous series of tests.</p>\n<p>Each theme is carefully scrutinized by at least two, if not four, of Automattic&#8217;s Theme Team focussing on code quality, usability, and potential theme-specific anomalies. The result is a theme that &#8220;just works&#8221; out of the box, with no annoying bugs or usability quirks.</p>\n<p>Traditionally, things like this have been closely guarded secrets, but Automattic has publicly released <a href="http://developer.wordpress.com/themes/">their theme guidelines</a> so anyone can benefit from them. These guidelines, are not a requirement if you want to just develop a theme for <a href="http://wordpress.org">WordPress</a> in general, but they are still some great coding practices worth following if you want your theme to &#8220;just work&#8221; too.</p>\n<img src="http://feeds.feedburner.com/~r/weblogtoolscollection/UXMP/~4/63js-tjhrbI" height="1" width="1" />";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 14 Feb 2013 22:15:09 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:5:"James";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:33;a:6:{s:4:"data";s:13:"\n	\n	\n	\n	\n	\n	\n";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:117:"WordPress.tv: Robert Wagner: Frankenblog – Group blogging with WordPress for fun, frustration, &amp; financial gain";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:28:"http://wordpress.tv/?p=13227";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:122:"http://wordpress.tv/2013/02/14/robert-wagner-frankenblog-group-blogging-with-wordpress-for-fun-frustration-financial-gain/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:690:"<div id="v-Jb1NqLar-1" class="video-player">\n</div>\n<br />  <a rel="nofollow" href="http://feeds.wordpress.com/1.0/gocomments/wptv.wordpress.com/13227/"><img alt="" border="0" src="http://feeds.wordpress.com/1.0/comments/wptv.wordpress.com/13227/" /></a> <img alt="" border="0" src="http://stats.wordpress.com/b.gif?host=wordpress.tv&blog=5089392&post=13227&subd=wptv&ref=&feed=1" width="1" height="1" /><div><a href="http://wordpress.tv/2013/02/14/robert-wagner-frankenblog-group-blogging-with-wordpress-for-fun-frustration-financial-gain/"><img alt="Robert Wagner: Frankenblog" src="http://videos.videopress.com/Jb1NqLar/sequence-04_std.original.jpg" width="160" height="120" /></a></div>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 14 Feb 2013 19:00:01 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:12:"WordPress.tv";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:34;a:6:{s:4:"data";s:13:"\n	\n	\n	\n	\n	\n	\n";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:44:"WordPress.tv: Andrew Nacin: Y U NO CODE WELL";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:27:"http://wordpress.tv/?p=6081";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:61:"http://wordpress.tv/2013/02/14/andrew-nacin-y-u-no-code-well/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:648:"<div id="v-4RTgidPY-1" class="video-player">\n</div>\n<br />  <a rel="nofollow" href="http://feeds.wordpress.com/1.0/gocomments/wptv.wordpress.com/6081/"><img alt="" border="0" src="http://feeds.wordpress.com/1.0/comments/wptv.wordpress.com/6081/" /></a> <img alt="" border="0" src="http://stats.wordpress.com/b.gif?host=wordpress.tv&blog=5089392&post=6081&subd=wptv&ref=&feed=1" width="1" height="1" /><div><a href="http://wordpress.tv/2013/02/14/andrew-nacin-y-u-no-code-well/"><img alt="Andrew Nacin: Y U NO CODE WELL" src="http://videos.videopress.com/4RTgidPY/andrew-nacin-y-u-no-code-well_std.original.jpg" width="160" height="120" /></a></div>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 14 Feb 2013 19:00:00 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:12:"WordPress.tv";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:35;a:6:{s:4:"data";s:13:"\n	\n	\n	\n	\n	\n	\n";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:67:"WordPress.tv: Joseph Scott: Site Performance: From Pinto to Ferrari";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:27:"http://wordpress.tv/?p=8070";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:85:"http://wordpress.tv/2013/02/14/joseph-scott-site-performance-from-pinto-to-ferrari-2/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:661:"<div id="v-2wUzQhJy-1" class="video-player">\n</div>\n<br />  <a rel="nofollow" href="http://feeds.wordpress.com/1.0/gocomments/wptv.wordpress.com/8070/"><img alt="" border="0" src="http://feeds.wordpress.com/1.0/comments/wptv.wordpress.com/8070/" /></a> <img alt="" border="0" src="http://stats.wordpress.com/b.gif?host=wordpress.tv&blog=5089392&post=8070&subd=wptv&ref=&feed=1" width="1" height="1" /><div><a href="http://wordpress.tv/2013/02/14/joseph-scott-site-performance-from-pinto-to-ferrari-2/"><img alt="Site Performance-JosephC" src="http://videos.videopress.com/2wUzQhJy/site-performance-josephc_std.original.jpg" width="160" height="120" /></a></div>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 14 Feb 2013 07:00:55 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:12:"WordPress.tv";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:36;a:6:{s:4:"data";s:13:"\n	\n	\n	\n	\n	\n	\n";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:110:"WordPress.tv: Taylor Dewey: Why we click publish – Advocating for user-centricity through interaction design";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:28:"http://wordpress.tv/?p=13212";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:123:"http://wordpress.tv/2013/02/14/taylor-dewey-why-we-click-publish-advocating-for-user-centricity-through-interaction-design/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:771:"<div id="v-Drz5gns1-1" class="video-player">\n</div>\n<br />  <a rel="nofollow" href="http://feeds.wordpress.com/1.0/gocomments/wptv.wordpress.com/13212/"><img alt="" border="0" src="http://feeds.wordpress.com/1.0/comments/wptv.wordpress.com/13212/" /></a> <img alt="" border="0" src="http://stats.wordpress.com/b.gif?host=wordpress.tv&blog=5089392&post=13212&subd=wptv&ref=&feed=1" width="1" height="1" /><div><a href="http://wordpress.tv/2013/02/14/taylor-dewey-why-we-click-publish-advocating-for-user-centricity-through-interaction-design/"><img alt="Taylor Dewey: Why we click publish &#8211; Advocating for user-centricity through interaction design" src="http://videos.videopress.com/Drz5gns1/sequence-01_scruberthumbnail_4.jpg" width="160" height="120" /></a></div>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 14 Feb 2013 07:00:00 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:12:"WordPress.tv";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:37;a:6:{s:4:"data";s:13:"\n	\n	\n	\n	\n	\n	\n";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:58:"Weblog Tools Collection: WordPress Theme Releases for 2/13";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:41:"http://weblogtoolscollection.com/?p=12643";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:73:"http://feedproxy.google.com/~r/weblogtoolscollection/UXMP/~3/A0IB4mmhIQk/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:2284:"<p><a href="http://3oneseven.com/18/bt-extended-wordpress-theme/"><img class="alignnone size-thumbnail wp-image-12645" alt="screenshot" src="http://i1.wp.com/weblogtoolscollection.com/wp-content/uploads/2013/02/screenshot2.png?resize=150%2C150" /></a></p>\n<p><a href="http://3oneseven.com/18/bt-extended-wordpress-theme/"><strong>BT Extended</strong></a> is a newspaper style with a responsive four column fluid layout.</p>\n<p><a href="http://emptynestthemes.com/2013/02/12/cocoa-wordpress-website-theme/"><img class="alignnone size-thumbnail wp-image-12644" alt="DemoBlog" src="http://i1.wp.com/weblogtoolscollection.com/wp-content/uploads/2013/02/DemoBlog1.png?resize=150%2C150" /></a></p>\n<p><a href="http://emptynestthemes.com/2013/02/12/cocoa-wordpress-website-theme/"><strong>Cocoa</strong></a> is a basic, simple, minimalist theme of browns and black with just a touch of cinnamon red thrown in for flavor.</p>\n<p><a href="http://wordpress.org/extend/themes/columbus"><img class="alignnone size-thumbnail wp-image-12646" alt="screenshot-1" src="http://i1.wp.com/weblogtoolscollection.com/wp-content/uploads/2013/02/screenshot-12.png?resize=150%2C150" /></a></p>\n<p><a href="http://wordpress.org/extend/themes/columbus"><strong>Columbus</strong></a> is a real estate theme with a two-column layout and top-level page navigation.</p>\n<p><a href="http://wordpress.org/extend/themes/photogram"><img class="alignnone size-thumbnail wp-image-12647" alt="screenshot-2" src="http://i2.wp.com/weblogtoolscollection.com/wp-content/uploads/2013/02/screenshot-21.png?resize=150%2C150" /></a></p>\n<p><a href="http://wordpress.org/extend/themes/photogram"><strong>Photogram</strong></a> is designed to integrate your WordPress site with Instagram and Pinterest in a few simple clicks.</p>\n<p><a href="http://wordpress.org/extend/themes/simplify"><img class="alignnone size-thumbnail wp-image-12648" alt="screenshot-3" src="http://i2.wp.com/weblogtoolscollection.com/wp-content/uploads/2013/02/screenshot-31.png?resize=150%2C150" /></a></p>\n<p><a href="http://wordpress.org/extend/themes/simplify"><strong>Simplify</strong></a> is a responsive theme designed for small businesses.</p>\n<img src="http://feeds.feedburner.com/~r/weblogtoolscollection/UXMP/~4/A0IB4mmhIQk" height="1" width="1" />";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Wed, 13 Feb 2013 19:26:51 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:5:"James";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:38;a:6:{s:4:"data";s:13:"\n	\n	\n	\n	\n	\n	\n";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:61:"WordPress.tv: Curtiss Grymala: WordPress Multisite and Beyond";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:28:"http://wordpress.tv/?p=13946";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:78:"http://wordpress.tv/2013/02/13/curtiss-grymala-wordpress-multisite-and-beyond/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:677:"<div id="v-LvCLFw8o-1" class="video-player">\n</div>\n<br />  <a rel="nofollow" href="http://feeds.wordpress.com/1.0/gocomments/wptv.wordpress.com/13946/"><img alt="" border="0" src="http://feeds.wordpress.com/1.0/comments/wptv.wordpress.com/13946/" /></a> <img alt="" border="0" src="http://stats.wordpress.com/b.gif?host=wordpress.tv&blog=5089392&post=13946&subd=wptv&ref=&feed=1" width="1" height="1" /><div><a href="http://wordpress.tv/2013/02/13/curtiss-grymala-wordpress-multisite-and-beyond/"><img alt="Curtiss Grymala: WordPress Multisite and Beyond" src="http://videos.videopress.com/LvCLFw8o/curtiss-grymala_scruberthumbnail_0.jpg" width="160" height="120" /></a></div>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Wed, 13 Feb 2013 19:00:55 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:12:"WordPress.tv";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:39;a:6:{s:4:"data";s:13:"\n	\n	\n	\n	\n	\n	\n";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:64:"WordPress.tv: Mike Schroder: Image Manipulation in WordPress 3.5";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:28:"http://wordpress.tv/?p=16101";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:81:"http://wordpress.tv/2013/02/13/mike-schroder-image-manipulation-in-wordpress-3-5/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:663:"<div id="v-fBduPR3G-1" class="video-player">\n</div>\n<br />  <a rel="nofollow" href="http://feeds.wordpress.com/1.0/gocomments/wptv.wordpress.com/16101/"><img alt="" border="0" src="http://feeds.wordpress.com/1.0/comments/wptv.wordpress.com/16101/" /></a> <img alt="" border="0" src="http://stats.wordpress.com/b.gif?host=wordpress.tv&blog=5089392&post=16101&subd=wptv&ref=&feed=1" width="1" height="1" /><div><a href="http://wordpress.tv/2013/02/13/mike-schroder-image-manipulation-in-wordpress-3-5/"><img alt="Image Manipulation in WordPress 3.5" src="http://videos.videopress.com/fBduPR3G/video-8eb54ee9f3_std.original.jpg" width="160" height="120" /></a></div>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Wed, 13 Feb 2013 19:00:40 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:12:"WordPress.tv";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:40;a:6:{s:4:"data";s:13:"\n	\n	\n	\n	\n	\n	\n";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:45:"WordPress.tv: Erick Hitter: From URL to Query";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:28:"http://wordpress.tv/?p=16093";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:62:"http://wordpress.tv/2013/02/13/erick-hitter-from-url-to-query/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:640:"<div id="v-ztQPDLYS-1" class="video-player">\n</div>\n<br />  <a rel="nofollow" href="http://feeds.wordpress.com/1.0/gocomments/wptv.wordpress.com/16093/"><img alt="" border="0" src="http://feeds.wordpress.com/1.0/comments/wptv.wordpress.com/16093/" /></a> <img alt="" border="0" src="http://stats.wordpress.com/b.gif?host=wordpress.tv&blog=5089392&post=16093&subd=wptv&ref=&feed=1" width="1" height="1" /><div><a href="http://wordpress.tv/2013/02/13/erick-hitter-from-url-to-query/"><img alt="Erick Hitter: From URL to Query" src="http://videos.videopress.com/ztQPDLYS/video-c795611c2b_std.original.jpg" width="160" height="120" /></a></div>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Wed, 13 Feb 2013 07:00:32 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:12:"WordPress.tv";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:41;a:6:{s:4:"data";s:13:"\n	\n	\n	\n	\n	\n	\n";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:58:"WordPress.tv: Alison Barrett: Advanced Actions and Filters";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:28:"http://wordpress.tv/?p=16089";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:75:"http://wordpress.tv/2013/02/13/alison-barrett-advanced-actions-and-filters/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:666:"<div id="v-uRqun6EN-1" class="video-player">\n</div>\n<br />  <a rel="nofollow" href="http://feeds.wordpress.com/1.0/gocomments/wptv.wordpress.com/16089/"><img alt="" border="0" src="http://feeds.wordpress.com/1.0/comments/wptv.wordpress.com/16089/" /></a> <img alt="" border="0" src="http://stats.wordpress.com/b.gif?host=wordpress.tv&blog=5089392&post=16089&subd=wptv&ref=&feed=1" width="1" height="1" /><div><a href="http://wordpress.tv/2013/02/13/alison-barrett-advanced-actions-and-filters/"><img alt="Alison Barrett: Advanced Actions and Filters" src="http://videos.videopress.com/uRqun6EN/video-c12a8df95c_std.original.jpg" width="160" height="120" /></a></div>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Wed, 13 Feb 2013 07:00:27 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:12:"WordPress.tv";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:42;a:6:{s:4:"data";s:13:"\n	\n	\n	\n	\n	\n	\n";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:98:"WordPress.tv: Kurt Payne &amp; Josh Hansen: do_action(‘hack_me’) Advanced Security for Plugins";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:28:"http://wordpress.tv/?p=16091";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:101:"http://wordpress.tv/2013/02/12/kurt-payne-josh-hansen-do_actionhack_me-advanced-security-for-plugins/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:704:"<div id="v-X6NJiyR4-1" class="video-player">\n</div>\n<br />  <a rel="nofollow" href="http://feeds.wordpress.com/1.0/gocomments/wptv.wordpress.com/16091/"><img alt="" border="0" src="http://feeds.wordpress.com/1.0/comments/wptv.wordpress.com/16091/" /></a> <img alt="" border="0" src="http://stats.wordpress.com/b.gif?host=wordpress.tv&blog=5089392&post=16091&subd=wptv&ref=&feed=1" width="1" height="1" /><div><a href="http://wordpress.tv/2013/02/12/kurt-payne-josh-hansen-do_actionhack_me-advanced-security-for-plugins/"><img alt="Kurt Payne & Josh Hansen: do_action(‘hack_me’)" src="http://videos.videopress.com/X6NJiyR4/video-6c8e9a79cc_scruberthumbnail_0.jpg" width="160" height="120" /></a></div>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Tue, 12 Feb 2013 22:23:18 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:12:"WordPress.tv";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:43;a:6:{s:4:"data";s:13:"\n	\n	\n	\n	\n	\n	\n";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:116:"WordPress.tv: Ilene Haddad, Crystal R.R. Edwards, Amanda Quraishi, and Corrin Foster: But don’t you know who I am?";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:28:"http://wordpress.tv/?p=13479";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:125:"http://wordpress.tv/2013/02/12/ilene-haddad-crystal-r-r-edwards-amanda-quraishi-and-corrin-foster-but-dont-you-know-who-i-am/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:781:"<div id="v-EYPcAEhO-1" class="video-player">\n</div>\n<br />  <a rel="nofollow" href="http://feeds.wordpress.com/1.0/gocomments/wptv.wordpress.com/13479/"><img alt="" border="0" src="http://feeds.wordpress.com/1.0/comments/wptv.wordpress.com/13479/" /></a> <img alt="" border="0" src="http://stats.wordpress.com/b.gif?host=wordpress.tv&blog=5089392&post=13479&subd=wptv&ref=&feed=1" width="1" height="1" /><div><a href="http://wordpress.tv/2013/02/12/ilene-haddad-crystal-r-r-edwards-amanda-quraishi-and-corrin-foster-but-dont-you-know-who-i-am/"><img alt="Ilene Haddad, Crystal R.R. Edwards, Amanda Quraishi, and Corrin Foster: But dont you know who I am?" src="http://videos.videopress.com/EYPcAEhO/but-dont-you-know-who-i-am_std.original.jpg" width="160" height="120" /></a></div>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Tue, 12 Feb 2013 22:18:07 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:12:"WordPress.tv";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:44;a:6:{s:4:"data";s:13:"\n	\n	\n	\n	\n	\n	\n";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:41:"WordPress.tv: Eric Weiss: Content is King";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:28:"http://wordpress.tv/?p=13415";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:58:"http://wordpress.tv/2013/02/11/eric-weiss-content-is-king/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:626:"<div id="v-IaFYaXvU-1" class="video-player">\n</div>\n<br />  <a rel="nofollow" href="http://feeds.wordpress.com/1.0/gocomments/wptv.wordpress.com/13415/"><img alt="" border="0" src="http://feeds.wordpress.com/1.0/comments/wptv.wordpress.com/13415/" /></a> <img alt="" border="0" src="http://stats.wordpress.com/b.gif?host=wordpress.tv&blog=5089392&post=13415&subd=wptv&ref=&feed=1" width="1" height="1" /><div><a href="http://wordpress.tv/2013/02/11/eric-weiss-content-is-king/"><img alt="Eric Weiss: Content is King" src="http://videos.videopress.com/IaFYaXvU/eric-weiss_std.original.jpg" width="160" height="120" /></a></div>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Tue, 12 Feb 2013 05:37:44 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:12:"WordPress.tv";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:45;a:6:{s:4:"data";s:13:"\n	\n	\n	\n	\n	\n	\n";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:70:"WordPress.tv: Mark Kelnar: Adding source control to your code and life";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:28:"http://wordpress.tv/?p=16115";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:87:"http://wordpress.tv/2013/02/11/mark-kelnar-adding-source-control-to-your-code-and-life/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:696:"<div id="v-PmK7IYSf-1" class="video-player">\n</div>\n<br />  <a rel="nofollow" href="http://feeds.wordpress.com/1.0/gocomments/wptv.wordpress.com/16115/"><img alt="" border="0" src="http://feeds.wordpress.com/1.0/comments/wptv.wordpress.com/16115/" /></a> <img alt="" border="0" src="http://stats.wordpress.com/b.gif?host=wordpress.tv&blog=5089392&post=16115&subd=wptv&ref=&feed=1" width="1" height="1" /><div><a href="http://wordpress.tv/2013/02/11/mark-kelnar-adding-source-control-to-your-code-and-life/"><img alt="Mark Kelnar: Adding source control to your code and life" src="http://videos.videopress.com/PmK7IYSf/video-8575099a96_scruberthumbnail_0.jpg" width="160" height="120" /></a></div>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Tue, 12 Feb 2013 05:32:35 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:7:"Michael";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:46;a:6:{s:4:"data";s:13:"\n	\n	\n	\n	\n	\n	\n";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:59:"Weblog Tools Collection: WordPress Plugin Releases for 2/11";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:41:"http://weblogtoolscollection.com/?p=12639";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:73:"http://feedproxy.google.com/~r/weblogtoolscollection/UXMP/~3/RDb_qZjtN1E/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:1205:"<h3>New plugins</h3>\n<p><a href="http://wordpress.org/extend/plugins/facetious/"><strong>Facetious</strong></a> lets you add a faceted &#8211; often called an &#8216;advanced&#8217; &#8211; search form to your website.</p>\n<p><a href="http://wordpress.org/extend/plugins/wp-snippets/"><strong>WP Snippets</strong></a> makes it very easy to reuse fragments of content (i.e. Snippets).</p>\n<h3>Updated plugins</h3>\n<p><a href="http://wordpress.org/extend/plugins/facebook/"><strong>Facebook</strong></a> makes your site deeply social by integrating functionality from Facebook.</p>\n<p><a href="http://blog.milandinic.com/wordpress/plugins/nav-menu-images/"><strong>Nav Menu Images</strong></a> enables uploading of images for nav menu items on the menu edit screen.</p>\n<p><a href="http://wordpress.org/extend/plugins/osm/"><strong>OSM</strong></a> displays maps in your WordPress blog using the OpenLayers technology.</p>\n<p><a href="http://wordpress.org/extend/plugins/w3-total-cache/"><strong>W3 Total Cache</strong></a> allows you to improve site performance and user experience via caching.</p>\n<img src="http://feeds.feedburner.com/~r/weblogtoolscollection/UXMP/~4/RDb_qZjtN1E" height="1" width="1" />";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Mon, 11 Feb 2013 19:40:17 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:5:"James";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:47;a:6:{s:4:"data";s:13:"\n	\n	\n	\n	\n	\n	\n";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:60:"WordPress.tv: Aaron Campbell: Community – Getting Involved";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:28:"http://wordpress.tv/?p=13354";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:73:"http://wordpress.tv/2013/02/11/aaron-campbell-community-getting-involved/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:664:"<div id="v-4uEnKjLb-1" class="video-player">\n</div>\n<br />  <a rel="nofollow" href="http://feeds.wordpress.com/1.0/gocomments/wptv.wordpress.com/13354/"><img alt="" border="0" src="http://feeds.wordpress.com/1.0/comments/wptv.wordpress.com/13354/" /></a> <img alt="" border="0" src="http://stats.wordpress.com/b.gif?host=wordpress.tv&blog=5089392&post=13354&subd=wptv&ref=&feed=1" width="1" height="1" /><div><a href="http://wordpress.tv/2013/02/11/aaron-campbell-community-getting-involved/"><img alt="Aaron Campbell: Community – Getting Involved" src="http://videos.videopress.com/4uEnKjLb/aaron-campbell_std.original.jpg" width="160" height="120" /></a></div>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Mon, 11 Feb 2013 07:54:18 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:12:"WordPress.tv";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:48;a:6:{s:4:"data";s:13:"\n	\n	\n	\n	\n	\n	\n";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:46:"Mike Little: WordPress 3 for Business Bloggers";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:35:"http://zed1.com/journalized/?p=1847";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:159:"http://zed1.com/journalized/archives/2012/03/11/wordpress-3-for-business-bloggers/?utm_source=rss&utm_medium=rss&utm_campaign=wordpress-3-for-business-bloggers";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:1041:"<p>I&#8217;m currently reading <a href="http://www.packtpub.com/wordpress-3-for-business-bloggers/book">WordPress 3 for Business Bloggers</a><a href="http://www.packtpub.com/wordpress-3-for-business-bloggers/book"><img class="alignright" title="WordPress 3 for Business Bloggers" src="https://www.packtpub.com/sites/default/files/imagecache/productview/1322OS_WordPress%203%20for%20Business%20Bloggers_Frontcover.jpg" alt="" width="124" height="152" /></a> by Paul Thewlis. I&#8217;m trying to squeeze it in between all the other stuff I seem to have on my plate. I read the first edition of the book a couple of years ago (though I can&#8217;t find my review to point to); so I&#8217;m looking forward to this one.</p>\n<p>I&#8217;ll post a proper review when I&#8217;ve finished it.</p>\n<p>&nbsp;</p>\n<p>The post <a href="http://zed1.com/journalized/archives/2012/03/11/wordpress-3-for-business-bloggers/">WordPress 3 for Business Bloggers</a> appeared first on <a href="http://zed1.com/journalized">Mike Little&#039;s Journalized</a>.</p>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Sun, 10 Feb 2013 17:00:13 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:11:"Mike Little";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:49;a:6:{s:4:"data";s:13:"\n	\n	\n	\n	\n	\n	\n";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:85:"WordPress.tv: Cliff Seal: Content Strategy – No one cares about your content (yet.)";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:28:"http://wordpress.tv/?p=15209";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:95:"http://wordpress.tv/2013/02/09/cliff-seal-content-strategy-no-one-cares-about-your-content-yet/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:710:"<div id="v-7wXyrfye-1" class="video-player">\n</div>\n<br />  <a rel="nofollow" href="http://feeds.wordpress.com/1.0/gocomments/wptv.wordpress.com/15209/"><img alt="" border="0" src="http://feeds.wordpress.com/1.0/comments/wptv.wordpress.com/15209/" /></a> <img alt="" border="0" src="http://stats.wordpress.com/b.gif?host=wordpress.tv&blog=5089392&post=15209&subd=wptv&ref=&feed=1" width="1" height="1" /><div><a href="http://wordpress.tv/2013/02/09/cliff-seal-content-strategy-no-one-cares-about-your-content-yet/"><img alt="Cliff Seal: Content Strategy – No one cares about your content yet" src="http://videos.videopress.com/7wXyrfye/video-93ee0cad15_std.original.jpg" width="160" height="120" /></a></div>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Sat, 09 Feb 2013 18:29:33 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:12:"WordPress.tv";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}}}}}}}}}}}}s:4:"type";i:128;s:7:"headers";a:9:{s:6:"server";s:5:"nginx";s:4:"date";s:29:"Thu, 21 Feb 2013 05:56:25 GMT";s:12:"content-type";s:8:"text/xml";s:14:"content-length";s:5:"72893";s:4:"vary";s:15:"Accept-Encoding";s:13:"last-modified";s:29:"Thu, 21 Feb 2013 05:30:17 GMT";s:4:"x-nc";s:11:"HIT luv 139";s:13:"accept-ranges";s:5:"bytes";s:10:"connection";s:5:"close";}s:5:"build";s:14:"20121202164312";}', 'no');
INSERT INTO `wp_options` (`option_id`, `option_name`, `option_value`, `autoload`) VALUES
(209, '_transient_timeout_feed_57bc725ad6568758915363af670fd8bc', '1361469385', 'no'),
(210, '_transient_feed_57bc725ad6568758915363af670fd8bc', 'a:4:{s:5:"child";a:1:{s:0:"";a:1:{s:3:"rss";a:1:{i:0;a:6:{s:4:"data";s:3:"\n	\n";s:7:"attribs";a:1:{s:0:"";a:1:{s:7:"version";s:3:"2.0";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:1:{s:0:"";a:1:{s:7:"channel";a:1:{i:0;a:6:{s:4:"data";s:72:"\n		\n		\n		\n		\n		\n		\n				\n\n		\n		\n		\n		\n		\n		\n		\n		\n		\n		\n		\n		\n		\n		\n		\n\n	";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:7:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:33:"WordPress Plugins » View: Newest";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:47:"http://wordpress.org/extend/plugins/browse/new/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:33:"WordPress Plugins » View: Newest";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:8:"language";a:1:{i:0;a:5:{s:4:"data";s:5:"en-US";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 31 Jan 2013 14:47:24 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:9:"generator";a:1:{i:0;a:5:{s:4:"data";s:25:"http://bbpress.org/?v=1.1";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"item";a:15:{i:0;a:6:{s:4:"data";s:30:"\n			\n			\n			\n			\n			\n			\n					";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:8:"LabTools";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:56:"http://wordpress.org/extend/plugins/labtools/#post-46365";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 29 Nov 2012 16:43:01 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:42:"46365@http://wordpress.org/extend/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:107:"LabTools is a plugin for research labs. It helps labs dealing with : their members, and their publications.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:15:"CreativityJuice";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:1;a:6:{s:4:"data";s:30:"\n			\n			\n			\n			\n			\n			\n					";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:7:"Matprat";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:55:"http://wordpress.org/extend/plugins/matprat/#post-48861";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Wed, 30 Jan 2013 16:25:48 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:42:"48861@http://wordpress.org/extend/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:82:"The Matprat plugin allows you to control which posts appear on the Matprat portal.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:12:"Ryan Hellyer";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:2;a:6:{s:4:"data";s:30:"\n			\n			\n			\n			\n			\n			\n					";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:29:"Best Facebook Like Box widget";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:77:"http://wordpress.org/extend/plugins/best-facebook-like-box-widget/#post-46279";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Tue, 27 Nov 2012 19:29:37 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:42:"46279@http://wordpress.org/extend/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:149:"Best Facebook Like Box widget\n\nBest Facebook Like Box widget  for WordPress is a social plugin that enables Facebook Page  owners to attract and gain";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:10:"lamb5rifle";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:3;a:6:{s:4:"data";s:30:"\n			\n			\n			\n			\n			\n			\n					";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:10:"TheRanking";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:58:"http://wordpress.org/extend/plugins/theranking/#post-48810";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Tue, 29 Jan 2013 10:00:39 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:42:"48810@http://wordpress.org/extend/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:130:"Choose any of the rankings that we offer by category, or if you prefer, create your own ranking and then ask your users that vote.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:10:"TheRanking";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:4;a:6:{s:4:"data";s:30:"\n			\n			\n			\n			\n			\n			\n					";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:8:"WP Alert";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:56:"http://wordpress.org/extend/plugins/wp-alert/#post-48852";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Wed, 30 Jan 2013 12:35:20 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:42:"48852@http://wordpress.org/extend/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:147:"WP Alert Plugin is the easiest way to grab your visitors&#039; attention!\nIt allows you to add images,texts and links in a beautiful and smart way.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:11:"dmitritechs";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:5;a:6:{s:4:"data";s:30:"\n			\n			\n			\n			\n			\n			\n					";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:9:"Inspector";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:57:"http://wordpress.org/extend/plugins/inspector/#post-48844";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Wed, 30 Jan 2013 06:15:19 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:42:"48844@http://wordpress.org/extend/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:147:"Meta Box plugin helps you easily implement multiple meta boxes in editing pages in WordPress. Works with custom post types and various field types.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:6:"rilwis";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:6;a:6:{s:4:"data";s:30:"\n			\n			\n			\n			\n			\n			\n					";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:23:"Page Template Dashboard";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:71:"http://wordpress.org/extend/plugins/page-template-dashboard/#post-48877";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Wed, 30 Jan 2013 21:15:31 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:42:"48877@http://wordpress.org/extend/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:95:"An easy way to see which templates your pages are using without having to view the page editor.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:12:"Tom McFarlin";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:7;a:6:{s:4:"data";s:30:"\n			\n			\n			\n			\n			\n			\n					";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:14:"mPress Banners";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:62:"http://wordpress.org/extend/plugins/mpress-banners/#post-48738";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Sun, 27 Jan 2013 06:29:30 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:42:"48738@http://wordpress.org/extend/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:82:"Easily create slide-up or slide-down banners on your site with a simple shortcode.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:10:"Micah Wood";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:8;a:6:{s:4:"data";s:30:"\n			\n			\n			\n			\n			\n			\n					";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:18:"Anti Hacking Tools";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:66:"http://wordpress.org/extend/plugins/anti-hacking-tools/#post-48531";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Wed, 23 Jan 2013 19:13:39 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:42:"48531@http://wordpress.org/extend/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:71:"Protect your blog from hacking tools, ircbot (botnet) and fake browser.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:11:"JasmanXcrew";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:9;a:6:{s:4:"data";s:30:"\n			\n			\n			\n			\n			\n			\n					";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:22:"Livehours.co Live Chat";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:69:"http://wordpress.org/extend/plugins/livehoursco-live-chat/#post-48834";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Tue, 29 Jan 2013 23:28:23 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:42:"48834@http://wordpress.org/extend/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:85:"Add Live Chat Support for your website (messages come to your phone a text messages).";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:10:"dallas22ca";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:10;a:6:{s:4:"data";s:30:"\n			\n			\n			\n			\n			\n			\n					";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:9:"NewsBoard";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:57:"http://wordpress.org/extend/plugins/newsboard/#post-48802";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Tue, 29 Jan 2013 01:29:56 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:42:"48802@http://wordpress.org/extend/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:21:"Posts and RSS ticker.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:16:"NewsBoard Plugin";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:11;a:6:{s:4:"data";s:30:"\n			\n			\n			\n			\n			\n			\n					";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:11:"Random Maze";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:66:"http://wordpress.org/extend/plugins/random-maze-widget/#post-48804";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Tue, 29 Jan 2013 03:29:13 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:42:"48804@http://wordpress.org/extend/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:27:"Widget that creates a maze.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:4:"xtmx";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:12;a:6:{s:4:"data";s:30:"\n			\n			\n			\n			\n			\n			\n					";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:7:"BigOven";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:78:"http://wordpress.org/extend/plugins/bigoven-recipes-menus-and-more/#post-48835";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Tue, 29 Jan 2013 23:29:02 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:42:"48835@http://wordpress.org/extend/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:150:"This plugin will allow you to share your recipes and menus. Host your recipes and menus at BigOven.com and take them anywhere,\nincluding your WordPres";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:7:"BigOven";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:13;a:6:{s:4:"data";s:30:"\n			\n			\n			\n			\n			\n			\n					";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:7:"ABTasty";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:56:"http://wordpress.org/extend/plugins/ab-tasty/#post-47123";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Tue, 18 Dec 2012 14:38:14 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:42:"47123@http://wordpress.org/extend/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:143:"ABTasty extension, for easily adding ABTasty code onto your website.\n<a href="http://www.abtasty.com" rel="nofollow">http://www.abtasty.com</a>";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:10:"remiaubert";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:14;a:6:{s:4:"data";s:30:"\n			\n			\n			\n			\n			\n			\n					";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:25:"BuddyPress Security Check";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:65:"http://wordpress.org/extend/plugins/bp-security-check/#post-48805";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Tue, 29 Jan 2013 04:19:43 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:42:"48805@http://wordpress.org/extend/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:129:"Help combat spam registrations by forcing the user to answer a simple math sum while registering for your BuddyPress-powered site";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:10:"Shea Bunge";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}}}s:27:"http://www.w3.org/2005/Atom";a:1:{s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:0:"";s:7:"attribs";a:1:{s:0:"";a:3:{s:4:"href";s:48:"http://wordpress.org/extend/plugins/rss/view/new";s:3:"rel";s:4:"self";s:4:"type";s:19:"application/rss+xml";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}}}}}}}}s:4:"type";i:128;s:7:"headers";a:9:{s:6:"server";s:5:"nginx";s:4:"date";s:29:"Thu, 31 Jan 2013 14:58:43 GMT";s:12:"content-type";s:23:"text/xml; charset=UTF-8";s:4:"vary";s:15:"Accept-Encoding";s:13:"last-modified";s:29:"Thu, 29 Nov 2012 16:43:01 GMT";s:4:"x-nc";s:11:"HIT luv 138";s:3:"age";s:7:"1781862";s:14:"content-length";s:4:"7522";s:10:"connection";s:5:"close";}s:5:"build";s:14:"20121202164312";}', 'no'),
(213, '_transient_timeout_plugin_slugs', '1361512585', 'no'),
(214, '_transient_plugin_slugs', 'a:2:{i:0;s:19:"akismet/akismet.php";i:1;s:9:"hello.php";}', 'no'),
(215, '_transient_timeout_dash_de3249c4736ad3bd2cd29147c4a0d43e', '1361469385', 'no'),
(216, '_transient_dash_de3249c4736ad3bd2cd29147c4a0d43e', '<h4>Most Popular</h4>\n<h5><a href=''http://wordpress.org/extend/plugins/wordpress-importer/''>WordPress Importer</a></h5>&nbsp;<span>(<a href=''plugin-install.php?tab=plugin-information&amp;plugin=wordpress-importer&amp;_wpnonce=215ca0dae3&amp;TB_iframe=true&amp;width=600&amp;height=800'' class=''thickbox'' title=''WordPress Importer''>Install</a>)</span>\n<p>Import posts, pages, comments, custom fields, categories, tags and more from a WordPress export file.</p>\n<h4>Newest Plugins</h4>\n<h5><a href=''http://wordpress.org/extend/plugins/matprat/''>Matprat</a></h5>&nbsp;<span>(<a href=''plugin-install.php?tab=plugin-information&amp;plugin=matprat&amp;_wpnonce=38dc222a8f&amp;TB_iframe=true&amp;width=600&amp;height=800'' class=''thickbox'' title=''Matprat''>Install</a>)</span>\n<p>The Matprat plugin allows you to control which posts appear on the Matprat portal.</p>\n', 'no'),
(193, '_transient_timeout_feed_ac0b00fe65abe10e0c5b588f3ed8c7ca', '1361469384', 'no');
INSERT INTO `wp_options` (`option_id`, `option_name`, `option_value`, `autoload`) VALUES
(194, '_transient_feed_ac0b00fe65abe10e0c5b588f3ed8c7ca', 'a:4:{s:5:"child";a:1:{s:0:"";a:1:{s:3:"rss";a:1:{i:0;a:6:{s:4:"data";s:3:"\n\n\n";s:7:"attribs";a:1:{s:0:"";a:1:{s:7:"version";s:3:"2.0";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:1:{s:0:"";a:1:{s:7:"channel";a:1:{i:0;a:6:{s:4:"data";s:50:"\n	\n	\n	\n	\n	\n	\n	\n	\n	\n		\n		\n		\n		\n		\n		\n		\n		\n		\n		\n	";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:3:{s:0:"";a:7:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:14:"WordPress News";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:25:"http://wordpress.org/news";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:14:"WordPress News";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:13:"lastBuildDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 24 Jan 2013 22:23:03 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:8:"language";a:1:{i:0;a:5:{s:4:"data";s:5:"en-US";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:9:"generator";a:1:{i:0;a:5:{s:4:"data";s:39:"http://wordpress.org/?v=3.6-alpha-23334";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"item";a:10:{i:0;a:6:{s:4:"data";s:45:"\n		\n		\n		\n		\n		\n				\n		\n\n		\n		\n				\n			\n		\n		";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:5:{s:0:"";a:7:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:48:"WordPress 3.5.1 Maintenance and Security Release";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:50:"http://wordpress.org/news/2013/01/wordpress-3-5-1/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:8:"comments";a:1:{i:0;a:5:{s:4:"data";s:59:"http://wordpress.org/news/2013/01/wordpress-3-5-1/#comments";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 24 Jan 2013 22:23:03 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:8:"category";a:2:{i:0;a:5:{s:4:"data";s:8:"Releases";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}i:1;a:5:{s:4:"data";s:8:"Security";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:33:"http://wordpress.org/news/?p=2531";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:359:"WordPress 3.5.1 is now available. Version 3.5.1 is the first maintenance release of 3.5, fixing 37 bugs. It is also a security release for all previous WordPress versions. For a full list of changes, consult the list of tickets and the changelog, which include: Editor: Prevent certain HTML elements from being unexpectedly removed or modified in rare [...]";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:12:"Andrew Nacin";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:40:"http://purl.org/rss/1.0/modules/content/";a:1:{s:7:"encoded";a:1:{i:0;a:5:{s:4:"data";s:2499:"<p>WordPress 3.5.1 is now available. Version 3.5.1 is the first maintenance release of 3.5, <a href="http://core.trac.wordpress.org/milestone/3.5.1">fixing 37 bugs</a>. It is also a security release for all previous WordPress versions. For a full list of changes, consult the <a href="http://core.trac.wordpress.org/query?milestone=3.5.1">list of tickets</a> and the <a href="http://core.trac.wordpress.org/log/branches/3.5?rev=23341&amp;stop_rev=23167">changelog</a>, which include:</p>\n<ul>\n<li>Editor: Prevent certain HTML elements from being unexpectedly removed or modified in rare cases.</li>\n<li>Media: Fix a collection of minor workflow and compatibility issues in the new media manager.</li>\n<li>Networks: Suggest proper rewrite rules when creating a new network.</li>\n<li>Prevent scheduled posts from being stripped of certain HTML, such as video embeds, when they are published.</li>\n<li>Work around some misconfigurations that may have caused some JavaScript in the WordPress admin area to fail.</li>\n<li>Suppress some warnings that could occur when a plugin misused the database or user APIs.</li>\n</ul>\n<p>Additionally, a bug affecting Windows servers running IIS can prevent updating from 3.5 to 3.5.1. If you receive the error &#8220;Destination directory for file streaming does not exist or is not writable,&#8221; you will need to <a href="http://codex.wordpress.org/Version_3.5.1">follow the steps outlined on the Codex</a>.</p>\n<p>WordPress 3.5.1 also addresses the following security issues:</p>\n<ul>\n<li>A server-side request forgery vulnerability and remote port scanning using pingbacks. This vulnerability, which could potentially be used to expose information and compromise a site, affects all previous WordPress versions. This was fixed by the WordPress security team. We&#8217;d like to thank security researchers <a href="http://codeseekah.com/">Gennady Kovshenin</a> and <a href="http://www.ethicalhack3r.co.uk/">Ryan Dewhurst</a> for reviewing our work.</li>\n<li>Two instances of cross-site scripting via shortcodes and post content. These issues were discovered by Jon Cave of the WordPress security team.</li>\n<li>A cross-site scripting vulnerability in the external library Plupload. Thanks to the Moxiecode team for working with us on this, and for releasing Plupload 1.5.5 to address this issue.</li>\n</ul>\n<p><strong><a href="http://wordpress.org/download/">Download 3.5.1</a> or visit Dashboard → Updates in your site admin to update now.</strong></p>\n";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:36:"http://wellformedweb.org/CommentAPI/";a:1:{s:10:"commentRss";a:1:{i:0;a:5:{s:4:"data";s:55:"http://wordpress.org/news/2013/01/wordpress-3-5-1/feed/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:38:"http://purl.org/rss/1.0/modules/slash/";a:1:{s:8:"comments";a:1:{i:0;a:5:{s:4:"data";s:1:"0";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:1;a:6:{s:4:"data";s:42:"\n		\n		\n		\n		\n		\n				\n\n		\n		\n				\n			\n		\n		";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:5:{s:0:"";a:7:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:17:"2012: A Look Back";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:51:"http://wordpress.org/news/2013/01/2012-a-look-back/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:8:"comments";a:1:{i:0;a:5:{s:4:"data";s:60:"http://wordpress.org/news/2013/01/2012-a-look-back/#comments";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Tue, 01 Jan 2013 02:22:20 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:8:"category";a:1:{i:0;a:5:{s:4:"data";s:13:"Uncategorized";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:33:"http://wordpress.org/news/?p=2525";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:340:"Another year is coming to a close, and it&#8217;s time to look back and reflect on what we&#8217;ve accomplished in the past twelve months. The WordPress community is stronger than ever, and some of the accomplishments of the past year are definitely worth remembering. Software Releases We had two major releases of the WordPress web [...]";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:8:"Jen Mylo";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:40:"http://purl.org/rss/1.0/modules/content/";a:1:{s:7:"encoded";a:1:{i:0;a:5:{s:4:"data";s:4441:"<p>Another year is coming to a close, and it&#8217;s time to look back and reflect on what we&#8217;ve accomplished in the past twelve months. The WordPress community is stronger than ever, and some of the accomplishments of the past year are definitely worth remembering.</p>\n<h4>Software Releases</h4>\n<p>We had two major releases of the WordPress web application with versions <a href="http://wordpress.org/news/2012/06/green/">3.4</a> and <a href="http://wordpress.org/news/2012/12/elvin/">3.5</a>, as well as 5 security releases during 2012. 3.4 included the theme customizer, while 3.5 became the long awaited &#8220;media release&#8221; featuring a new uploader and gallery management tool. 3.5 contained code contributions from more people than ever, and we hope to continue growing the contributor ranks in the year ahead. We currently have native apps on 6 mobile platforms &#8212; <a href="http://ios.wordpress.org/">iOS</a>, <a href="http://android.wordpress.org/">Android</a>, <a href="http://blackberry.wordpress.org/">Blackberry</a>, <a href="http://wpwindowsphone.wordpress.com/">Windows Phone</a>, <a href="http://nokia.wordpress.org/">Nokia</a>, and <a href="http://webos.wordpress.org/">WebOS</a> &#8212; and saw several updates there as well.</p>\n<h4>Plugin Directory</h4>\n<p>A number of improvements were made to the Plugin Directory in 2012. More cosmetic  updates, like the introduction of branded plugin page headers, make it a nicer browsing experience, while functional changes like better-integrated support forums, plugin reviews, and a favorites system made the plugin directory even more useful as a resource.</p>\n<h4>The &#8220;Make&#8221; Network and Team Reps</h4>\n<p>2012 was the year that saw the creation of <a href="http://make.wordpress.org/">Make.wordpress.org</a>, a network of sites for the teams of contributors responsible for the different areas of the WordPress project. Now anyone can follow along and get involved with the teams that work on <a href="http://make.wordpress.org/core/">core</a>, <a href="http://make.wordpress.org/themes/">theme review</a>, <a href="http://make.wordpress.org/support/">forum support</a>, <a href="http://make.wordpress.org/docs/">documentation</a>, and more. In 2013 we&#8217;ll work to improve these sites to make it easier to become a contributor. Each team also now has elected Team Reps, a new role that has already led to more cross-team communication. Team reps post each week to the <a href="https://make.wordpress.org/updates/">Updates blog</a> so that the other reps can keep up with what&#8217;s going on in other teams.</p>\n<h4>WordPress Community Summit</h4>\n<p>At the end of October, about 100 of the most influential and respected members of the WordPress community attended an inaugural <a href="https://make.wordpress.org/summit">summit</a> to discuss where we all stand, and to figure out where we go next with WordPress. A &#8220;conference of conversations,&#8221; this unconference made everyone an active participant, and while not every issue brought to the table was solved by the end of the event, the right questions were being asked.</p>\n<h4>Meetup.com</h4>\n<p>The WordPress Foundation now has a central account with Meetup.com. We&#8217;ve brought in a couple dozen existing meetup groups as a pilot to test the system, and are in the process of working with more existing meetups (as well as new ones) to join us so that local organizers won&#8217;t have to pay organizer dues and can get more support from the WordPress project.</p>\n<h4>Internet Blackout Day</h4>\n<p>We participated in the protest against SOPA/PIPA, Internet Blackout Day, on January 18. Though we usually stay out of politics, this campaign was important, and we not only participated in the blackout on WordPress.org, we encouraged our users to do so as well, and recommended plugins to provide blackout functionality. It was deemed the <a href="http://sopastrike.com/numbers/">largest online protest in history</a>.</p>\n<h4>WordCamps</h4>\n<p>And finally, it wouldn&#8217;t be a recap without counting up the <a href="http://wordcamp.org">WordCamps</a>! There were 67 WordCamps around the world in 2012, bringing together WordPress users, developers, and fans. If you didn&#8217;t make it to a WordCamp this year, maybe it can be one of your new year resolutions: <a href="http://central.wordcamp.org/schedule/">check the schedule</a> to find one near you!</p>\n";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:36:"http://wellformedweb.org/CommentAPI/";a:1:{s:10:"commentRss";a:1:{i:0;a:5:{s:4:"data";s:56:"http://wordpress.org/news/2013/01/2012-a-look-back/feed/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:38:"http://purl.org/rss/1.0/modules/slash/";a:1:{s:8:"comments";a:1:{i:0;a:5:{s:4:"data";s:1:"0";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:2;a:6:{s:4:"data";s:42:"\n		\n		\n		\n		\n		\n				\n\n		\n		\n				\n			\n		\n		";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:5:{s:0:"";a:7:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:25:"WordPress 3.5 “Elvin”";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:40:"http://wordpress.org/news/2012/12/elvin/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:8:"comments";a:1:{i:0;a:5:{s:4:"data";s:49:"http://wordpress.org/news/2012/12/elvin/#comments";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Tue, 11 Dec 2012 16:54:23 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:8:"category";a:1:{i:0;a:5:{s:4:"data";s:8:"Releases";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:33:"http://wordpress.org/news/?p=2517";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:363:"It&#8217;s the most wonderful time of the year: a new WordPress release is available and chock-full of goodies to delight bloggers and developers alike. We&#8217;re calling this one &#8220;Elvin&#8221; in honor of drummer Elvin Jones, who played with John Coltrane in addition to many others. If you&#8217;ve been around WordPress a while, the most dramatic [...]";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:14:"Matt Mullenweg";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:40:"http://purl.org/rss/1.0/modules/content/";a:1:{s:7:"encoded";a:1:{i:0;a:5:{s:4:"data";s:20083:"<p>It&#8217;s the most wonderful time of the year: a new WordPress release <a href="http://wordpress.org/download/">is available</a> and chock-full of goodies to delight bloggers and developers alike. We&#8217;re calling this one &#8220;Elvin&#8221; in honor of <a href="http://en.wikipedia.org/wiki/Elvin_Jones">drummer Elvin Jones</a>, who played with John Coltrane in addition to many others.</p>\n<p>If you&#8217;ve been around WordPress a while, the most dramatic new change you&#8217;ll notice is a completely re-imagined flow for uploading photos and creating galleries. Media has long been a friction point and we&#8217;ve listened hard and given a lot of thought into crafting this new system. 3.5 includes a new default theme, Twenty Twelve, which has a very clean mobile-first responsive design and works fantastic as a base for a CMS site. Finally we&#8217;ve spent a lot of time refreshing the styles of the dashboard, updating everything to be Retina-ready with beautiful high resolution graphics, a new color picker, and streamlining a couple of fewer-used sections of the admin.</p>\n<p>Here&#8217;s a quick video overview of everything you can share with your friends:</p>\n<div id="v-jQDfEbzZ-1" class="video-player"><embed id="v-jQDfEbzZ-1-video" src="http://s0.videopress.com/player.swf?v=1.03&amp;guid=jQDfEbzZ&amp;isDynamicSeeking=true" type="application/x-shockwave-flash" width="692" height="388" title="Introducing WordPress 3.5" wmode="direct" seamlesstabbing="true" allowfullscreen="true" allowscriptaccess="always" overstretch="true"></embed></div>\n<h3>For Developers</h3>\n<p>You can now put your (or anyone&#8217;s) WordPress.org username on the plugins page and see your favorite tagged ones, to make it easy to install them again when setting up a new site. There&#8217;s a new Tumblr importer. New installs no longer show the links manager. Finally for multisite developers <code>switch_to_blog()</code> is way faster and you can now install MS in a sub-directory. The <a href="http://underscorejs.org/">Underscore</a> and <a href="http://backbonejs.org/">Backbone</a> JavaScript libraries are now available. <a href="http://codex.wordpress.org/Version_3.5">The Codex has a pretty good summary of the developer features above and beyond this</a>, and you can always <a href="http://core.trac.wordpress.org/milestone/3.5">grab a warm beverage and explore Trac directly</a>.</p>\n<h3>Percussion Section</h3>\n<p>Behind every great release is great contributors. 3.5 had more people involved than any release before it:</p>\n<p><a href="http://profiles.wordpress.org/aaroncampbell">Aaron D. Campbell</a>, <a href="http://profiles.wordpress.org/aaronholbrook">aaronholbrook</a>, <a href="http://profiles.wordpress.org/jorbin">Aaron Jorbin</a>, <a href="http://profiles.wordpress.org/kawauso">Adam Harley</a>, <a href="http://profiles.wordpress.org/alyssonweb">akbortoli</a>, <a href="http://profiles.wordpress.org/alecrust">alecrust</a>, <a href="http://profiles.wordpress.org/xknown">Alex Concha</a>, <a href="http://profiles.wordpress.org/alexkingorg">Alex King</a>, <a href="http://profiles.wordpress.org/viper007bond">Alex Mills (Viper007Bond)</a>, <a href="http://profiles.wordpress.org/alexvorn2">alexvorn2</a>, <a href="http://profiles.wordpress.org/ampt">ampt</a>, <a href="http://profiles.wordpress.org/sabreuse">Amy Hendrix (sabreuse)</a>, <a href="http://profiles.wordpress.org/andrear">andrea.r</a>, <a href="http://profiles.wordpress.org/nacin">Andrew Nacin</a>, <a href="http://profiles.wordpress.org/azaozz">Andrew Ozz</a>, <a href="http://profiles.wordpress.org/andrewryno">Andrew Ryno</a>, <a href="http://profiles.wordpress.org/andrewspittle">Andrew Spittle</a>, <a href="http://profiles.wordpress.org/andy">Andy Skelton</a>, <a href="http://profiles.wordpress.org/apokalyptik">apokalyptik</a>, <a href="http://profiles.wordpress.org/bainternet">Bainternet</a>, <a href="http://profiles.wordpress.org/barrykooij">Barry Kooij</a>, <a href="http://profiles.wordpress.org/bazza">bazza</a>, <a href="http://profiles.wordpress.org/bbrooks">bbrooks</a>, <a href="http://profiles.wordpress.org/casben79">Ben Casey</a>, <a href="http://profiles.wordpress.org/husobj">Ben Huson</a>, <a href="http://profiles.wordpress.org/benkulbertis">Ben Kulbertis</a>, <a href="http://profiles.wordpress.org/bergius">bergius</a>, <a href="http://profiles.wordpress.org/neoxx">Bernhard Riedl</a>, <a href="http://profiles.wordpress.org/betzster">betzster</a>, <a href="http://profiles.wordpress.org/bananastalktome">Billy (bananastalktome)</a>, <a href="http://profiles.wordpress.org/bolo1988">bolo1988</a>, <a href="http://profiles.wordpress.org/bradparbs">bradparbs</a>, <a href="http://profiles.wordpress.org/bradthomas127">bradthomas127</a>, <a href="http://profiles.wordpress.org/bradyvercher">Brady Vercher</a>, <a href="http://profiles.wordpress.org/brandondove">Brandon Dove</a>, <a href="http://profiles.wordpress.org/brianlayman">Brian Layman</a>, <a href="http://profiles.wordpress.org/rzen">Brian Richards</a>, <a href="http://profiles.wordpress.org/sennza">Bronson Quick</a>, <a href="http://profiles.wordpress.org/bpetty">Bryan Petty</a>, <a href="http://profiles.wordpress.org/cannona">cannona</a>, <a href="http://profiles.wordpress.org/sixhours">Caroline Moore</a>, <a href="http://profiles.wordpress.org/caspie">Caspie</a>, <a href="http://profiles.wordpress.org/cdog">cdog</a>, <a href="http://profiles.wordpress.org/thee17">Charles Frees-Melvin</a>, <a href="http://profiles.wordpress.org/chellycat">chellycat</a>, <a href="http://profiles.wordpress.org/chexee">Chelsea Otakan</a>, <a href="http://profiles.wordpress.org/chouby">Chouby</a>, <a href="http://profiles.wordpress.org/c3mdigital">Chris Olbekson</a>, <a href="http://profiles.wordpress.org/cfinke">Christopher Finke</a>, <a href="http://profiles.wordpress.org/chriswallace">Chris Wallace</a>, <a href="http://profiles.wordpress.org/corvannoorloos">Cor van Noorloos</a>, <a href="http://profiles.wordpress.org/scribu">Cristi Burc&#259;</a>, <a href="http://profiles.wordpress.org/mrroundhill">Dan</a>, <a href="http://profiles.wordpress.org/dan-rivera">Dan Rivera</a>, <a href="http://profiles.wordpress.org/koopersmith">Daryl Koopersmith</a>, <a href="http://profiles.wordpress.org/lessbloat">Dave Martin</a>, <a href="http://profiles.wordpress.org/deltafactory">deltafactory</a>, <a href="http://profiles.wordpress.org/dd32">Dion Hulse</a>, <a href="http://profiles.wordpress.org/djzone">DjZoNe</a>, <a href="http://profiles.wordpress.org/dllh">dllh</a>, <a href="http://profiles.wordpress.org/ocean90">Dominik Schilling</a>, <a href="http://profiles.wordpress.org/doublesharp">doublesharp</a>, <a href="http://profiles.wordpress.org/drewapicture">Drew Jaynes (DrewAPicture)</a>, <a href="http://profiles.wordpress.org/drewstrojny">Drew Strojny</a>, <a href="http://profiles.wordpress.org/eddiemoya">Eddie Moya</a>, <a href="http://profiles.wordpress.org/elyobo">elyobo</a>, <a href="http://profiles.wordpress.org/emiluzelac">Emil Uzelac</a>, <a href="http://profiles.wordpress.org/empireoflight">Empireoflight</a>, <a href="http://profiles.wordpress.org/ericlewis">Eric Andrew Lewis</a>, <a href="http://profiles.wordpress.org/ethitter">Erick Hitter</a>, <a href="http://profiles.wordpress.org/ericmann">Eric Mann</a>, <a href="http://profiles.wordpress.org/ericwahlforss">ericwahlforss</a>, <a href="http://profiles.wordpress.org/evansolomon">Evan Solomon</a>, <a href="http://profiles.wordpress.org/fadingdust">fadingdust</a>, <a href="http://profiles.wordpress.org/f-j-kaiser">F J Kaiser</a>, <a href="http://profiles.wordpress.org/foxinni">foxinni</a>, <a href="http://profiles.wordpress.org/garyc40">Gary Cao</a>, <a href="http://profiles.wordpress.org/garyj">Gary Jones</a>, <a href="http://profiles.wordpress.org/pento">Gary Pendergast</a>, <a href="http://profiles.wordpress.org/geertdd">GeertDD</a>, <a href="http://profiles.wordpress.org/mamaduka">George Mamadashvili</a>, <a href="http://profiles.wordpress.org/georgestephanis">George Stephanis</a>, <a href="http://profiles.wordpress.org/ghosttoast">GhostToast</a>, <a href="http://profiles.wordpress.org/gnarf">gnarf</a>, <a href="http://profiles.wordpress.org/goldenapples">goldenapples</a>, <a href="http://profiles.wordpress.org/webord">Gustavo Bordoni</a>, <a href="http://profiles.wordpress.org/hakre">hakre</a>, <a href="http://profiles.wordpress.org/hanni">hanni</a>, <a href="http://profiles.wordpress.org/hardy101">hardy101</a>, <a href="http://profiles.wordpress.org/hebbet">hebbet</a>, <a href="http://profiles.wordpress.org/helenyhou">Helen Hou-Sandi</a>, <a href="http://profiles.wordpress.org/hugobaeta">Hugo Baeta</a>, <a href="http://profiles.wordpress.org/iamfriendly">iamfriendly</a>, <a href="http://profiles.wordpress.org/iandstewart">Ian Stewart</a>, <a href="http://profiles.wordpress.org/ikailo">ikailo</a>, <a href="http://profiles.wordpress.org/ipstenu">Ipstenu (Mika Epstein)</a>, <a href="http://profiles.wordpress.org/itworx">itworx</a>, <a href="http://profiles.wordpress.org/j-idris">j-idris</a>, <a href="http://profiles.wordpress.org/jakemgold">Jake Goldman</a>, <a href="http://profiles.wordpress.org/jakubtyrcha">jakub.tyrcha</a>, <a href="http://profiles.wordpress.org/jamescollins">James Collins</a>, <a href="http://profiles.wordpress.org/jammitch">jammitch</a>, <a href="http://profiles.wordpress.org/jane">Jane Wells</a>, <a href="http://profiles.wordpress.org/japh">Japh</a>, <a href="http://profiles.wordpress.org/jarretc">JarretC</a>, <a href="http://profiles.wordpress.org/madtownlems">Jason Lemahieu (MadtownLems)</a>, <a href="http://profiles.wordpress.org/javert03">javert03</a>, <a href="http://profiles.wordpress.org/jbrinley">jbrinley</a>, <a href="http://profiles.wordpress.org/jcakec">jcakec</a>, <a href="http://profiles.wordpress.org/jblz">Jeff Bowen</a>, <a href="http://profiles.wordpress.org/jeffsebring">Jeff Sebring</a>, <a href="http://profiles.wordpress.org/jeremyfelt">Jeremy Felt</a>, <a href="http://profiles.wordpress.org/hd-j">Jeremy Herve</a>, <a href="http://profiles.wordpress.org/jerrysarcastic">Jerry Bates (JerrySarcastic)</a>, <a href="http://profiles.wordpress.org/jayjdk">Jesper Johansen (Jayjdk)</a>, <a href="http://profiles.wordpress.org/jndetlefsen">jndetlefsen</a>, <a href="http://profiles.wordpress.org/joehoyle">Joe Hoyle</a>, <a href="http://profiles.wordpress.org/joelhardi">joelhardi</a>, <a href="http://profiles.wordpress.org/jkudish">Joey Kudish</a>, <a href="http://profiles.wordpress.org/johnbillion">John Blackbourn (johnbillion)</a>, <a href="http://profiles.wordpress.org/johnjamesjacoby">John James Jacoby</a>, <a href="http://profiles.wordpress.org/johnpbloch">John P. Bloch</a>, <a href="http://profiles.wordpress.org/jond3r">Jonas Bolinder</a>, <a href="http://profiles.wordpress.org/jondavidjohn">Jonathan D. Johnson</a>, <a href="http://profiles.wordpress.org/duck_">Jon Cave</a>, <a href="http://profiles.wordpress.org/joostdekeijzer">joostdekeijzer</a>, <a href="http://profiles.wordpress.org/koke">Jorge Bernal</a>, <a href="http://profiles.wordpress.org/josephscott">Joseph Scott</a>, <a href="http://profiles.wordpress.org/pottersys">Juan</a>, <a href="http://profiles.wordpress.org/justinsainton">Justin Sainton</a>, <a href="http://profiles.wordpress.org/jtsternberg">Justin Sternberg</a>, <a href="http://profiles.wordpress.org/greenshady">Justin Tadlock</a>, <a href="http://profiles.wordpress.org/trepmal">Kailey Lampert (trepmal)</a>, <a href="http://profiles.wordpress.org/ryelle">Kelly Dwan</a>, <a href="http://profiles.wordpress.org/keruspe">Keruspe</a>, <a href="http://profiles.wordpress.org/kitchin">kitchin</a>, <a href="http://profiles.wordpress.org/knutsp">Knut Sparhell</a>, <a href="http://profiles.wordpress.org/kovshenin">Konstantin Kovshenin</a>, <a href="http://profiles.wordpress.org/obenland">Konstantin Obenland</a>, <a href="http://profiles.wordpress.org/kopepasah">Kopepasah</a>, <a href="http://profiles.wordpress.org/klagraff">Kristopher Lagraff</a>, <a href="http://profiles.wordpress.org/kurtpayne">Kurt Payne</a>, <a href="http://profiles.wordpress.org/kyrylo">Kyrylo</a>, <a href="http://profiles.wordpress.org/lancewillett">Lance Willett</a>, <a href="http://profiles.wordpress.org/larysa">Larysa Mykhas</a>, <a href="http://profiles.wordpress.org/leogermani">leogermani</a>, <a href="http://profiles.wordpress.org/lesteph">lesteph</a>, <a href="http://profiles.wordpress.org/linuxologos">linuxologos</a>, <a href="http://profiles.wordpress.org/ldebrouwer">Luc De Brouwer</a>, <a href="http://profiles.wordpress.org/lgedeon">Luke Gedeon</a>, <a href="http://profiles.wordpress.org/latz">Lutz Schroer</a>, <a href="http://profiles.wordpress.org/mailnew2ster">mailnew2ster</a>, <a href="http://profiles.wordpress.org/targz-1">Manuel Schmalstieg</a>, <a href="http://profiles.wordpress.org/maor">Maor Chasen</a>, <a href="http://profiles.wordpress.org/mimecine">Marco</a>, <a href="http://profiles.wordpress.org/marcuspope">MarcusPope</a>, <a href="http://profiles.wordpress.org/markjaquith">Mark Jaquith</a>, <a href="http://profiles.wordpress.org/markoheijnen">Marko Heijnen</a>, <a href="http://profiles.wordpress.org/martythornley">MartyThornley</a>, <a href="http://profiles.wordpress.org/mattdanner">mattdanner</a>, <a href="http://profiles.wordpress.org/bigdawggi">Matthew Richmond</a>, <a href="http://profiles.wordpress.org/sivel">Matt Martz</a>, <a href="http://profiles.wordpress.org/iammattthomas">Matt Thomas</a>, <a href="http://profiles.wordpress.org/mattwiebe">Matt Wiebe</a>, <a href="http://profiles.wordpress.org/mattyrob">mattyrob</a>, <a href="http://profiles.wordpress.org/maxcutler">Max Cutler</a>, <a href="http://profiles.wordpress.org/melchoyce">Mel Choyce</a>, <a href="http://profiles.wordpress.org/merty">Mert Yazicioglu</a>, <a href="http://profiles.wordpress.org/mdawaffe">Michael Adams (mdawaffe)</a>, <a href="http://profiles.wordpress.org/mfields">Michael Fields</a>, <a href="http://profiles.wordpress.org/mbijon">Mike Bijon</a>, <a href="http://profiles.wordpress.org/mdgl">Mike Glendinning</a>, <a href="http://profiles.wordpress.org/mikehansenme">Mike Hansen</a>, <a href="http://profiles.wordpress.org/mikelittle">Mike Little</a>, <a href="http://profiles.wordpress.org/mikeschinkel">Mike Schinkel</a>, <a href="http://profiles.wordpress.org/DH-Shredder">Mike Schroder</a>, <a href="http://profiles.wordpress.org/toppa">Mike Toppa</a>, <a href="http://profiles.wordpress.org/dimadin">Milan Dinic</a>, <a href="http://profiles.wordpress.org/mitchoyoshitaka">mitcho (Michael Yoshitaka Erlewine)</a>, <a href="http://profiles.wordpress.org/batmoo">Mohammad Jangda</a>, <a href="http://profiles.wordpress.org/mohanjith">mohanjith</a>, <a href="http://profiles.wordpress.org/mpvanwinkle77">mpvanwinkle77</a>, <a href="http://profiles.wordpress.org/usermrpapa">Mr Papa</a>, <a href="http://profiles.wordpress.org/murky">murky</a>, <a href="http://profiles.wordpress.org/Nao">Naoko Takano</a>, <a href="http://profiles.wordpress.org/alex-ye">Nashwan Doaqan</a>, <a href="http://profiles.wordpress.org/niallkennedy">Niall Kennedy</a>, <a href="http://profiles.wordpress.org/nbachiyski">Nikolay Bachiyski</a>, <a href="http://profiles.wordpress.org/ntm">ntm</a>, <a href="http://profiles.wordpress.org/nvartolomei">nvartolomei</a>, <a href="http://profiles.wordpress.org/pavelevap">pavelevap</a>, <a href="http://profiles.wordpress.org/pdclark">pdclark</a>, <a href="http://profiles.wordpress.org/petemall">Pete Mall</a>, <a href="http://profiles.wordpress.org/westi">Peter Westwood</a>, <a href="http://profiles.wordpress.org/pas5027">Pete Schuster</a>, <a href="http://profiles.wordpress.org/philiparthurmoore">Philip Arthur Moore</a>, <a href="http://profiles.wordpress.org/phill_brown">Phill Brown</a>, <a href="http://profiles.wordpress.org/picklepete">picklepete</a>, <a href="http://profiles.wordpress.org/picklewagon">Picklewagon</a>, <a href="http://profiles.wordpress.org/nprasath002">Prasath Nadarajah</a>, <a href="http://profiles.wordpress.org/r-a-y">r-a-y</a>, <a href="http://profiles.wordpress.org/ramiy">Rami Yushuvaev</a>, <a href="http://profiles.wordpress.org/moraleidame">Ricardo Moraleida</a>, <a href="http://profiles.wordpress.org/miqrogroove">Robert Chapin (miqrogroove)</a>, <a href="http://profiles.wordpress.org/wet">Robert Wetzlmayr</a>, <a href="http://profiles.wordpress.org/wpmuguru">Ron Rennick</a>, <a href="http://profiles.wordpress.org/rstern">rstern</a>, <a href="http://profiles.wordpress.org/ryan">Ryan Boren</a>, <a href="http://profiles.wordpress.org/ryanimel">Ryan Imel</a>, <a href="http://profiles.wordpress.org/ryanjkoehler">Ryan Koehler</a>, <a href="http://profiles.wordpress.org/markel">Ryan Markel</a>, <a href="http://profiles.wordpress.org/rmccue">Ryan McCue</a>, <a href="http://profiles.wordpress.org/zeo">Safirul Alredha</a>, <a href="http://profiles.wordpress.org/solarissmoke">Samir Shah</a>, <a href="http://profiles.wordpress.org/gluten">Sam Margulies</a>, <a href="http://profiles.wordpress.org/otto42">Samuel Wood (Otto)</a>, <a href="http://profiles.wordpress.org/saracannon">sara cannon</a>, <a href="http://profiles.wordpress.org/gandham">Satish Gandham</a>, <a href="http://profiles.wordpress.org/scottgonzalez">scott.gonzalez</a>, <a href="http://profiles.wordpress.org/sc0ttkclark">Scott Kingsley Clark</a>, <a href="http://profiles.wordpress.org/coffee2code">Scott Reilly</a>, <a href="http://profiles.wordpress.org/wonderboymusic">Scott Taylor</a>, <a href="http://profiles.wordpress.org/greglone">ScreenfeedFr</a>, <a href="http://profiles.wordpress.org/sergeysbetkenovgaroru">sergey.s.betke</a>, <a href="http://profiles.wordpress.org/sergeybiryukov">Sergey Biryukov</a>, <a href="http://profiles.wordpress.org/pross">Simon Prosser</a>, <a href="http://profiles.wordpress.org/simonwheatley">Simon Wheatley</a>, <a href="http://profiles.wordpress.org/sirzooro">sirzooro</a>, <a href="http://profiles.wordpress.org/ssamture">ssamture</a>, <a href="http://profiles.wordpress.org/sterlo">sterlo</a>, <a href="http://profiles.wordpress.org/sumindmitriy">sumindmitriy</a>, <a href="http://profiles.wordpress.org/sushkov">sushkov</a>, <a href="http://profiles.wordpress.org/swekitsune">swekitsune</a>, <a href="http://profiles.wordpress.org/iamtakashi">Takashi Irie</a>, <a href="http://profiles.wordpress.org/taylorde">Taylor Dewey</a>, <a href="http://profiles.wordpress.org/tlovett1">Taylor Lovett</a>, <a href="http://profiles.wordpress.org/saltcod">Terry Sutton</a>, <a href="http://profiles.wordpress.org/griffinjt">Thomas Griffin</a>, <a href="http://profiles.wordpress.org/tott">Thorsten Ott</a>, <a href="http://profiles.wordpress.org/timbeks">timbeks</a>, <a href="http://profiles.wordpress.org/timfs">timfs</a>, <a href="http://profiles.wordpress.org/tmoorewp">Tim Moore</a>, <a href="http://profiles.wordpress.org/tobiasbg">TobiasBg</a>, <a href="http://profiles.wordpress.org/tomasm">TomasM</a>, <a href="http://profiles.wordpress.org/tomauger">Tom Auger</a>, <a href="http://profiles.wordpress.org/tommcfarlin">tommcfarlin</a>, <a href="http://profiles.wordpress.org/willmot">Tom Willmot</a>, <a href="http://profiles.wordpress.org/toscho">toscho</a>, <a href="http://profiles.wordpress.org/wpsmith">Travis Smith</a>, <a href="http://profiles.wordpress.org/vhauri">Vasken Hauri</a>, <a href="http://profiles.wordpress.org/viniciusmassuchetto">Vinicius Massuchetto</a>, <a href="http://profiles.wordpress.org/lightningspirit">Vitor Carvalho</a>, <a href="http://profiles.wordpress.org/waclawjacek">Waclaw</a>, <a href="http://profiles.wordpress.org/waldojaquith">WaldoJaquith</a>, <a href="http://profiles.wordpress.org/wojtekszkutnik">Wojtek Szkutnik</a>, <a href="http://profiles.wordpress.org/xibe">Xavier Borderie</a>, <a href="http://profiles.wordpress.org/yoavf">Yoav Farhi</a>, <a href="http://profiles.wordpress.org/yogi-t">Yogi T</a>, <a href="http://profiles.wordpress.org/tollmanz">Zack Tollman</a>, and <a href="http://profiles.wordpress.org/zamoose">ZaMoose</a>.</p>\n";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:36:"http://wellformedweb.org/CommentAPI/";a:1:{s:10:"commentRss";a:1:{i:0;a:5:{s:4:"data";s:45:"http://wordpress.org/news/2012/12/elvin/feed/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:38:"http://purl.org/rss/1.0/modules/slash/";a:1:{s:8:"comments";a:1:{i:0;a:5:{s:4:"data";s:1:"0";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:3;a:6:{s:4:"data";s:45:"\n		\n		\n		\n		\n		\n				\n		\n\n		\n		\n				\n			\n		\n		";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:5:{s:0:"";a:7:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:33:"WordPress 3.5 Release Candidate 3";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:68:"http://wordpress.org/news/2012/12/wordpress-3-5-release-candidate-3/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:8:"comments";a:1:{i:0;a:5:{s:4:"data";s:77:"http://wordpress.org/news/2012/12/wordpress-3-5-release-candidate-3/#comments";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Tue, 04 Dec 2012 08:37:39 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:8:"category";a:2:{i:0;a:5:{s:4:"data";s:11:"Development";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}i:1;a:5:{s:4:"data";s:7:"Testing";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:68:"http://wordpress.org/news/2012/12/wordpress-3-5-release-candidate-3/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:339:"The third release candidate for WordPress 3.5 is now available. We&#8217;ve made a number of changes over the last week since RC2 that we can&#8217;t wait to get into your hands. Hope you&#8217;re ready to do some testing! Final UI improvements for the new media manager, based on lots of great feedback. Show more information about [...]";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:12:"Andrew Nacin";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:40:"http://purl.org/rss/1.0/modules/content/";a:1:{s:7:"encoded";a:1:{i:0;a:5:{s:4:"data";s:1950:"<p>The third release candidate for WordPress 3.5 is now available. We&#8217;ve made a number of changes over the last week since <a title="WordPress 3.5 Release Candidate 2" href="http://wordpress.org/news/2012/11/wordpress-3-5-release-candidate-2/">RC2</a> that we can&#8217;t wait to get into your hands. Hope you&#8217;re ready to do some testing!</p>\n<ul>\n<li><span style="line-height: 13px">Final UI improvements for the new media manager, based on lots of great feedback.</span></li>\n<li>Show more information about uploading errors when they occur.</li>\n<li>When inserting an image into a post, don&#8217;t forget the alternative text.</li>\n<li>Fixes for the new admin button styles.</li>\n<li>Improvements for mobile devices, Internet Explorer, and right-to-left languages.</li>\n<li>Fix cookies for subdomain installs when multisite is installed in a subdirectory.</li>\n<li>Fix ms-files.php rewriting for very old multisite installs.</li>\n</ul>\n<p>At this point, we only have a <a href="http://core.trac.wordpress.org/report/5">few minor issues</a> left. If all goes well, you will see WordPress 3.5 very soon. If you run into any issues, please post to the <a href="http://wordpress.org/support/forum/alphabeta/">Alpha/Beta area in the support forums</a>.</p>\n<p>If you&#8217;d like to know what to test, visit the About page (<strong><img style="vertical-align: middle" alt="" src="http://wordpress.org/wp-content/themes/twentyten/images/wordpress.png" /> → About</strong> in the toolbar) and check out the list of features. This is still development software, so your boss may get mad if you install this on a live site. To test WordPress 3.5, try the <a href="http://wordpress.org/extend/plugins/wordpress-beta-tester/">WordPress Beta Tester</a> plugin (you&#8217;ll want &#8220;bleeding edge nightlies&#8221;). Or you can <a href="http://wordpress.org/wordpress-3.5-RC3.zip">download the release candidate here (zip)</a>.</p>\n";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:36:"http://wellformedweb.org/CommentAPI/";a:1:{s:10:"commentRss";a:1:{i:0;a:5:{s:4:"data";s:73:"http://wordpress.org/news/2012/12/wordpress-3-5-release-candidate-3/feed/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:38:"http://purl.org/rss/1.0/modules/slash/";a:1:{s:8:"comments";a:1:{i:0;a:5:{s:4:"data";s:1:"0";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:4;a:6:{s:4:"data";s:45:"\n		\n		\n		\n		\n		\n				\n		\n\n		\n		\n				\n			\n		\n		";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:5:{s:0:"";a:7:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:33:"WordPress 3.5 Release Candidate 2";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:68:"http://wordpress.org/news/2012/11/wordpress-3-5-release-candidate-2/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:8:"comments";a:1:{i:0;a:5:{s:4:"data";s:77:"http://wordpress.org/news/2012/11/wordpress-3-5-release-candidate-2/#comments";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 29 Nov 2012 19:55:12 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:8:"category";a:2:{i:0;a:5:{s:4:"data";s:11:"Development";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}i:1;a:5:{s:4:"data";s:7:"Testing";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:33:"http://wordpress.org/news/?p=2494";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:339:"The second release candidate for WordPress 3.5 is now available for download and testing. We&#8217;re still working on about a dozen remaining issues, but we hope to deliver WordPress 3.5 to your hands as early as next week. If you&#8217;d like to know what to test, visit the About page ( → About in the toolbar) and check out [...]";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:12:"Andrew Nacin";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:40:"http://purl.org/rss/1.0/modules/content/";a:1:{s:7:"encoded";a:1:{i:0;a:5:{s:4:"data";s:1509:"<p>The second release candidate for WordPress 3.5 is now available for download and testing.</p>\n<p>We&#8217;re still working on about a dozen remaining issues, but we hope to deliver WordPress 3.5 to your hands as early as next week. If you&#8217;d like to know what to test, visit the About page (<strong><img alt="" src="http://wordpress.org/wp-content/themes/twentyten/images/wordpress.png" /> → About</strong> in the toolbar) and check out the list of features! As usual, this is still development software and we suggest you do not install this on a live site unless you are adventurous.</p>\n<p><strong>Think you&#8217;ve found a bug?</strong> Please post to the <a href="http://wordpress.org/support/forum/alphabeta/">Alpha/Beta area in the support forums</a>.</p>\n<p><strong>Developers,</strong> please continue to test your plugins and themes, so that if there is a compatibility issue, we can figure it out before the final release. You can find our <a href="http://core.trac.wordpress.org/report/6">list of known issues here</a>.</p>\n<p>To test WordPress 3.5, try the <a href="http://wordpress.org/extend/plugins/wordpress-beta-tester/">WordPress Beta Tester</a> plugin (you&#8217;ll want &#8220;bleeding edge nightlies&#8221;). Or you can <a href="http://wordpress.org/wordpress-3.5-RC2.zip">download the release candidate here (zip)</a>.</p>\n<p><em>&#8211;<br />\n</em><em>We are getting close<br />\n</em><em>Should have asked for haiku help<br />\n</em><em>Please test RC2</em></p>\n";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:36:"http://wellformedweb.org/CommentAPI/";a:1:{s:10:"commentRss";a:1:{i:0;a:5:{s:4:"data";s:73:"http://wordpress.org/news/2012/11/wordpress-3-5-release-candidate-2/feed/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:38:"http://purl.org/rss/1.0/modules/slash/";a:1:{s:8:"comments";a:1:{i:0;a:5:{s:4:"data";s:1:"0";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:5;a:6:{s:4:"data";s:45:"\n		\n		\n		\n		\n		\n				\n		\n\n		\n		\n				\n			\n		\n		";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:5:{s:0:"";a:7:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:31:"WordPress 3.5 Release Candidate";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:66:"http://wordpress.org/news/2012/11/wordpress-3-5-release-candidate/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:8:"comments";a:1:{i:0;a:5:{s:4:"data";s:75:"http://wordpress.org/news/2012/11/wordpress-3-5-release-candidate/#comments";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 22 Nov 2012 13:35:09 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:8:"category";a:2:{i:0;a:5:{s:4:"data";s:11:"Development";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}i:1;a:5:{s:4:"data";s:7:"Testing";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:33:"http://wordpress.org/news/?p=2479";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:341:"The first release candidate for WordPress 3.5 is now available. We hope to ship WordPress 3.5 in two weeks. But to do that, we need your help! If you haven&#8217;t tested 3.5 yet, there&#8217;s no time like the present. (The oft-repeated warning: Please, not on a live site, unless you&#8217;re adventurous.) Think you&#8217;ve found a [...]";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:12:"Andrew Nacin";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:40:"http://purl.org/rss/1.0/modules/content/";a:1:{s:7:"encoded";a:1:{i:0;a:5:{s:4:"data";s:1545:"<p>The first release candidate for WordPress 3.5 is now available.</p>\n<p>We hope to ship WordPress 3.5 in <em>two weeks</em>. But to do that, we need your help! If you haven&#8217;t tested 3.5 yet, there&#8217;s no time like the present. (The oft-repeated warning: Please, not on a live site, unless you&#8217;re adventurous.)</p>\n<p><strong>Think you&#8217;ve found a bug?</strong> Please post to the <a href="http://wordpress.org/support/forum/alphabeta/">Alpha/Beta area in the support forums</a>. If any known issues come up, you’ll be able to <a href="http://core.trac.wordpress.org/report/6">find them here</a>. <strong>Developers,</strong> please test your plugins and themes, so that if there is a compatibility issue, we can figure it out before the final release.</p>\n<p>To test WordPress 3.5, try the <a href="http://wordpress.org/extend/plugins/wordpress-beta-tester/">WordPress Beta Tester</a> plugin (you&#8217;ll want &#8220;bleeding edge nightlies&#8221;). Or you can <a href="http://wordpress.org/wordpress-3.5-RC1.zip">download the release candidate here (zip)</a>.</p>\n<p>If you&#8217;d like to know what to <del>break</del> test, visit the About page (<strong><img style="vertical-align: text-top" alt="" src="http://wordpress.org/wp-content/themes/twentyten/images/wordpress.png" /> → About</strong> in the toolbar) and check out the list of features! Trust me, you want to try out media.</p>\n<p><em>Release candidate</em><br />\n<em>Three point five in two weeks time</em><br />\n<em>Please test all the things</em></p>\n";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:36:"http://wellformedweb.org/CommentAPI/";a:1:{s:10:"commentRss";a:1:{i:0;a:5:{s:4:"data";s:71:"http://wordpress.org/news/2012/11/wordpress-3-5-release-candidate/feed/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:38:"http://purl.org/rss/1.0/modules/slash/";a:1:{s:8:"comments";a:1:{i:0;a:5:{s:4:"data";s:1:"0";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:6;a:6:{s:4:"data";s:48:"\n		\n		\n		\n		\n		\n				\n		\n		\n\n		\n		\n				\n			\n		\n		";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:5:{s:0:"";a:7:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:20:"WordPress 3.5 Beta 3";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:55:"http://wordpress.org/news/2012/11/wordpress-3-5-beta-3/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:8:"comments";a:1:{i:0;a:5:{s:4:"data";s:64:"http://wordpress.org/news/2012/11/wordpress-3-5-beta-3/#comments";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Tue, 13 Nov 2012 04:26:23 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:8:"category";a:3:{i:0;a:5:{s:4:"data";s:11:"Development";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}i:1;a:5:{s:4:"data";s:8:"Releases";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}i:2;a:5:{s:4:"data";s:7:"Testing";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:33:"http://wordpress.org/news/?p=2467";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:341:"The third beta release of WordPress 3.5 is now available for download and testing. Hey, developers! We expect to WordPress 3.5 to be ready in just a few short weeks. Please, please test your plugins and themes against beta 3. Media management has been rewritten, and we&#8217;ve taken great pains to ensure most plugins will work the [...]";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:12:"Andrew Nacin";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:40:"http://purl.org/rss/1.0/modules/content/";a:1:{s:7:"encoded";a:1:{i:0;a:5:{s:4:"data";s:2677:"<p>The third beta release of WordPress 3.5 is now available for download and testing.</p>\n<p><strong>Hey, developers!</strong> We expect to WordPress 3.5 to be ready in just a few short weeks. <em>Please, please</em> test your plugins and themes against beta 3. Media management has been rewritten, and we&#8217;ve taken great pains to ensure most plugins will work the same as before, but we&#8217;re not perfect. We would like to hear about any incompatibilities we&#8217;ve caused so we can work with you to address them <em>before</em> release, rather than after. I think you&#8217;ll agree it&#8217;s much better that way. <img src=''http://wordpress.org/news/wp-includes/images/smilies/icon_smile.gif'' alt='':-)'' class=''wp-smiley'' /> </p>\n<p>To test WordPress 3.5, try the <a href="http://wordpress.org/extend/plugins/wordpress-beta-tester/">WordPress Beta Tester</a> plugin (you’ll want “bleeding edge nightlies”). Or you can <a href="http://wordpress.org/wordpress-3.5-beta3.zip">download the beta here</a> (zip). For more on 3.5, <a title="WordPress 3.5 Beta 1" href="http://wordpress.org/news/2012/09/wordpress-3-5-beta-1/">check out the extensive Beta 1 blog post</a>, which covers what’s new in version 3.5 and how you can help. We made <a href="http://core.trac.wordpress.org/log/trunk?action=stop_on_copy&amp;mode=stop_on_copy&amp;rev=22557&amp;stop_rev=22224&amp;limit=400">more than 300 changes</a> since <a href="http://wordpress.org/news/2012/10/wordpress-3-5-beta-2/">beta 2</a>. <span style="line-height: 13px">At this point, the Add Media dialog is complete, and we&#8217;re now just working on fixing up inserting images into the editor. We&#8217;ve also u</span>pdated to jQuery UI 1.9.1, SimplePie 1.3.1, and TinyMCE 3.5.7.</p>\n<p>The usual warnings apply: We can see the light at the end of the tunnel, but this is software still in development, so we don’t recommend that you run it on a production site. Set up a test site to play with the new version.</p>\n<p>As always, if you think you’ve found a bug, you can post to the <a href="http://wordpress.org/support/forum/alphabeta">Alpha/Beta area</a> in the support forums. Or, if you’re comfortable writing a reproducible bug report, <a href="http://core.trac.wordpress.org/">file one on the WordPress Trac</a>. There, you can also find <a href="http://core.trac.wordpress.org/report/5">a list of known bugs</a> and <a href="http://core.trac.wordpress.org/query?status=closed&amp;group=component&amp;milestone=3.5">everything we’ve fixed</a> so far.</p>\n<p><em>Beta three is out</em><br />\n<em>Soon, a release candidate</em><br />\n<em>Three point five is near</em></p>\n";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:36:"http://wellformedweb.org/CommentAPI/";a:1:{s:10:"commentRss";a:1:{i:0;a:5:{s:4:"data";s:60:"http://wordpress.org/news/2012/11/wordpress-3-5-beta-3/feed/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:38:"http://purl.org/rss/1.0/modules/slash/";a:1:{s:8:"comments";a:1:{i:0;a:5:{s:4:"data";s:1:"0";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:7;a:6:{s:4:"data";s:45:"\n		\n		\n		\n		\n		\n				\n		\n\n		\n		\n				\n			\n		\n		";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:5:{s:0:"";a:7:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:20:"WordPress 3.5 Beta 2";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:55:"http://wordpress.org/news/2012/10/wordpress-3-5-beta-2/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:8:"comments";a:1:{i:0;a:5:{s:4:"data";s:64:"http://wordpress.org/news/2012/10/wordpress-3-5-beta-2/#comments";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Sat, 13 Oct 2012 00:02:08 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:8:"category";a:2:{i:0;a:5:{s:4:"data";s:8:"Releases";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}i:1;a:5:{s:4:"data";s:7:"Testing";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:33:"http://wordpress.org/news/?p=2458";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:342:"Two weeks after the first beta, WordPress 3.5 Beta 2 is now available for download and testing. This is software still in development, so we don’t recommend that you run it on a production site. Set up a test site to play with the new version. To test WordPress 3.5, try the WordPress Beta Tester plugin (you’ll want “bleeding [...]";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:12:"Andrew Nacin";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:40:"http://purl.org/rss/1.0/modules/content/";a:1:{s:7:"encoded";a:1:{i:0;a:5:{s:4:"data";s:1856:"<p>Two weeks after the first beta, WordPress 3.5 Beta 2 is now available for download and testing.</p>\n<p>This is software still in development, so we don’t recommend that you run it on a production site. Set up a test site to play with the new version. To test WordPress 3.5, try the <a href="http://wordpress.org/extend/plugins/wordpress-beta-tester/">WordPress Beta Tester</a> plugin (you’ll want “bleeding edge nightlies”). Or you can <a href="http://wordpress.org/wordpress-3.5-beta2.zip">download the beta here</a> (zip).</p>\n<p>For more, <a title="WordPress 3.5 Beta 1" href="http://wordpress.org/news/2012/09/wordpress-3-5-beta-1/"><strong>check out the extensive Beta 1 blog post</strong></a>, which covers what&#8217;s new in version 3.5 and how you can help. What&#8217;s new since beta 1? I&#8217;m glad you asked:</p>\n<ul>\n<li>New workflow for working with image galleries, including drag-and-drop reordering and quick caption editing.</li>\n<li>New image editing API. (<a title="Ticket 6821" href="http://core.trac.wordpress.org/ticket/6821">#6821</a>)</li>\n<li><del>New user interface for setting static front pages for the Reading Settings screen. (<a title="Ticket 16379" href="http://core.trac.wordpress.org/ticket/16379">#16379</a>)</del></li>\n</ul>\n<p>As always, if you think you’ve found a bug, you can post to the <a href="http://wordpress.org/support/forum/alphabeta">Alpha/Beta area</a> in the support forums. Or, if you’re comfortable writing a reproducible bug report, <a href="http://core.trac.wordpress.org/">file one on the WordPress Trac</a>. There, you can also find <a href="http://core.trac.wordpress.org/report/5">a list of known bugs</a> and <a href="http://core.trac.wordpress.org/query?status=closed&amp;group=component&amp;milestone=3.5">everything we’ve fixed</a> so far. Happy testing!</p>\n";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:36:"http://wellformedweb.org/CommentAPI/";a:1:{s:10:"commentRss";a:1:{i:0;a:5:{s:4:"data";s:60:"http://wordpress.org/news/2012/10/wordpress-3-5-beta-2/feed/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:38:"http://purl.org/rss/1.0/modules/slash/";a:1:{s:8:"comments";a:1:{i:0;a:5:{s:4:"data";s:1:"0";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:8;a:6:{s:4:"data";s:45:"\n		\n		\n		\n		\n		\n				\n		\n\n		\n		\n				\n			\n		\n		";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:5:{s:0:"";a:7:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:35:"WordPress 3.5 Beta 1 (and a bonus!)";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:55:"http://wordpress.org/news/2012/09/wordpress-3-5-beta-1/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:8:"comments";a:1:{i:0;a:5:{s:4:"data";s:64:"http://wordpress.org/news/2012/09/wordpress-3-5-beta-1/#comments";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 27 Sep 2012 22:37:49 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:8:"category";a:2:{i:0;a:5:{s:4:"data";s:8:"Releases";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}i:1;a:5:{s:4:"data";s:7:"Testing";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:33:"http://wordpress.org/news/?p=2443";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:376:"I&#8217;m excited to announce the availability of WordPress 3.5 Beta 1. This is software still in development and we really don’t recommend that you run it on a production site — set up a test site just to play with the new version. To test WordPress 3.5, try the WordPress Beta Tester plugin (you’ll want “bleeding edge nightlies”). Or you can download [...]";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:12:"Andrew Nacin";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:40:"http://purl.org/rss/1.0/modules/content/";a:1:{s:7:"encoded";a:1:{i:0;a:5:{s:4:"data";s:6696:"<p>I&#8217;m excited to announce the availability of WordPress 3.5 Beta 1.</p>\n<p>This is software still in development and <strong>we <em>really</em> don’t recommend that you run it on a production site</strong> — set up a test site just to play with the new version. To test WordPress 3.5, try the <a href="http://wordpress.org/extend/plugins/wordpress-beta-tester/">WordPress Beta Tester</a> plugin (you’ll want “bleeding edge nightlies”). Or you can <a href="http://wordpress.org/wordpress-3.5-beta-1.zip">download the beta here</a> (zip).</p>\n<p>In just three short months, we&#8217;ve already made a few hundred changes to improve your WordPress experience. The biggest thing we&#8217;ve been working on is overhauling the media experience from the ground up. We&#8217;ve made it all fair game: How you upload photos, arrange galleries, insert images into posts, and more. It&#8217;s still rough around the edges and some pieces are missing — which means now is the <em>perfect</em> time to test it out, report issues, and help shape our headline feature.</p>\n<p>As always, if you think you’ve found a bug, you can post to the <a href="http://wordpress.org/support/forum/alphabeta">Alpha/Beta area</a> in the support forums. Or, if you’re comfortable writing a reproducible bug report, <a href="http://core.trac.wordpress.org/">file one on the WordPress Trac</a>. There, you can also find <a href="http://core.trac.wordpress.org/report/5">a list of known bugs</a> and <a href="http://core.trac.wordpress.org/query?status=closed&amp;group=component&amp;milestone=3.5">everything we&#8217;ve fixed</a> so far.</p>\n<p>Here&#8217;s some more of what&#8217;s new:</p>\n<ul>\n<li><strong>Appearance: </strong>A simplified welcome screen. A new color picker. And the all-HiDPI (retina) dashboard.</li>\n<li><strong>Accessibility:</strong> Keyboard navigation and screen reader support have both been improved.</li>\n<li><strong>Plugins: </strong>You can browse and install plugins you&#8217;ve marked as favorites on WordPress.org, directly from your dashboard.</li>\n<li><strong>Mobile: </strong>It&#8217;ll be easier to link up your WordPress install with <a href="http://wordpress.org/extend/mobile/">our mobile apps</a>, as XML-RPC is now enabled by default.</li>\n<li><strong>Links: </strong>We&#8217;ve hidden the Link Manager for new installs. (Don&#8217;t worry, <a href="http://wordpress.org/extend/plugins/link-manager/">there&#8217;s a plugin for that</a>.)</li>\n</ul>\n<p><strong>Developers: </strong>We love you. We do. And one of the things we strive to do with every release is be compatible with all existing plugins and themes. To make sure we don&#8217;t break anything, we need your help. <strong>Please, please test your plugins and themes against 3.5.</strong> If something isn&#8217;t quite right, please let us know. (Chances are, it wasn&#8217;t intentional.) And despite all of the changes to media, we&#8217;re still aiming to be backwards compatible with plugins that make changes to the existing media library. It&#8217;s a tall task, and it means we need your help.</p>\n<p>Here&#8217;s some more things we think developers will enjoy (and should test their plugins and themes against):</p>\n<ul>\n<li><strong>External libraries updated:</strong> TinyMCE  <del>3.5.6</del> 3.5.7. SimplePie <del>1.3</del> 1.3.1. jQuery <del>1.8.2</del> 1.8.3. jQuery UI <del>1.9 (and it&#8217;s not even released yet)</del> 1.9.2. We&#8217;ve also added Backbone 0.9.2 and Underscore <del>1.3.3</del> 1.4.2, and you can use protocol-relative links when enqueueing scripts and styles. (<a href="http://core.trac.wordpress.org/ticket/16560">#16560</a>)</li>\n<li><strong>WP Query:</strong> You can now ask to receive posts in the order specified by <code>post__in</code>. (<a href="http://core.trac.wordpress.org/ticket/13729">#13729</a>)</li>\n<li><strong>XML-RPC:</strong> New user management, profile editing, and post revision methods. We&#8217;ve also removed AtomPub. (<a href="http://core.trac.wordpress.org/ticket/18428">#18428</a>, <a href="http://core.trac.wordpress.org/ticket/21397">#21397</a>, <a href="http://core.trac.wordpress.org/ticket/21866">#21866</a>)</li>\n<li><strong>Multisite: </strong>switch_to_blog() is now used in more places, is faster, and more reliable. Also: You can now use multisite in a subdirectory, and uploaded files no longer go through ms-files (for new installs). (<a href="http://core.trac.wordpress.org/ticket/21434">#21434</a>, <a href="http://core.trac.wordpress.org/ticket/19796">#19796</a>, <a href="http://core.trac.wordpress.org/ticket/19235">#19235</a>)</li>\n<li><strong>TinyMCE: </strong>We&#8217;ve added an experimental API for &#8220;views&#8221; which you can use to offer previews and interaction of elements from the visual editor. (<a href="http://core.trac.wordpress.org/ticket/21812">#21812</a>)</li>\n<li><strong>Posts API: </strong>Major performance improvements when working with hierarchies of pages and post ancestors. Also, you can now &#8220;turn on&#8221; native custom columns for taxonomies on edit post screens. (<a href="http://core.trac.wordpress.org/ticket/11399">#11399</a>, <a href="http://core.trac.wordpress.org/ticket/21309">#21309</a>, <a href="http://core.trac.wordpress.org/ticket/21240">#21240</a>)</li>\n<li><strong>Comments API:</strong> Search for comments of a particular status, or with a meta query (same as with WP_Query). (<a href="http://core.trac.wordpress.org/ticket/21101">#21101</a>, <a href="http://core.trac.wordpress.org/ticket/21003">#21003</a>)</li>\n<li><strong>oEmbed: </strong>We&#8217;ve added support for a few oEmbed providers, and we now handle SSL links. (<a href="http://core.trac.wordpress.org/ticket/15734">#15734</a>, <a href="http://core.trac.wordpress.org/ticket/21635">#21635</a>, <a href="http://core.trac.wordpress.org/ticket/16996">#16996</a>, <a href="http://core.trac.wordpress.org/ticket/20102">#20102</a>)</li>\n</ul>\n<p>We&#8217;re looking forward to your feedback. If you break it (find a bug), please report it, and if you’re a developer, try to help us fix it. We&#8217;ve already had more than 200 contributors to version 3.5 — come join us!</p>\n<h3>And as promised, a bonus:</h3>\n<p>We&#8217;re planning a December 5 release for WordPress 3.5. But, we have a special offering for you, today. The newest default theme for WordPress, <strong>Twenty</strong><strong> Twelve</strong>, is now <a href="http://wordpress.org/extend/themes/twentytwelve">available for download</a> from the WordPress themes directory. It&#8217;s a gorgeous and fully responsive theme, and it works with WordPress 3.4.2. Take it for a spin!</p>\n";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:36:"http://wellformedweb.org/CommentAPI/";a:1:{s:10:"commentRss";a:1:{i:0;a:5:{s:4:"data";s:60:"http://wordpress.org/news/2012/09/wordpress-3-5-beta-1/feed/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:38:"http://purl.org/rss/1.0/modules/slash/";a:1:{s:8:"comments";a:1:{i:0;a:5:{s:4:"data";s:1:"0";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:9;a:6:{s:4:"data";s:45:"\n		\n		\n		\n		\n		\n				\n		\n\n		\n		\n				\n			\n		\n		";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:5:{s:0:"";a:7:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:48:"WordPress 3.4.2 Maintenance and Security Release";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:50:"http://wordpress.org/news/2012/09/wordpress-3-4-2/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:8:"comments";a:1:{i:0;a:5:{s:4:"data";s:59:"http://wordpress.org/news/2012/09/wordpress-3-4-2/#comments";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 06 Sep 2012 20:07:21 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:8:"category";a:2:{i:0;a:5:{s:4:"data";s:8:"Releases";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}i:1;a:5:{s:4:"data";s:8:"Security";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:33:"http://wordpress.org/news/?p=2426";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:355:"WordPress 3.4.2, now available for download, is a maintenance and security release for all previous versions. After nearly 15 million downloads since 3.4 was released not three months ago, we&#8217;ve identified and fixed a number of nagging bugs, including: Fix some issues with older browsers in the administration area. Fix an issue where a theme [...]";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:12:"Andrew Nacin";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:40:"http://purl.org/rss/1.0/modules/content/";a:1:{s:7:"encoded";a:1:{i:0;a:5:{s:4:"data";s:1443:"<p>WordPress 3.4.2, now available for download, is a maintenance and security release for all previous versions.</p>\n<p>After nearly 15 million downloads since 3.4 was released not three months ago, we&#8217;ve <a href="http://core.trac.wordpress.org/query?status=closed&amp;resolution=fixed&amp;milestone=3.4.2&amp;group=resolution&amp;order=severity&amp;desc=1">identified and fixed a number of nagging bugs</a>, including:</p>\n<ul>\n<li>Fix some issues with older browsers in the administration area.</li>\n<li>Fix an issue where a theme may not preview correctly, or its screenshot may not be displayed.</li>\n<li>Improve plugin compatibility with the visual editor.</li>\n<li>Address pagination problems with some category permalink structures.</li>\n<li>Avoid errors with both oEmbed providers and trackbacks.</li>\n<li>Prevent improperly sized header images from being uploaded.</li>\n</ul>\n<p>Version 3.4.2 also fixes a few security issues and contains some security hardening. The vulnerabilities included potential privilege escalation and a bug that affects multisite installs with untrusted users. These issues were discovered and fixed by the WordPress security team.</p>\n<p><a href="http://wordpress.org/download/"><strong>Download 3.4.2</strong></a><strong> now or visit Dashboard → Updates in your site admin to update now.</strong></p>\n<p><em>Fixes for some bugs<br />\nBack to work on 3.5<br />\nIt&#8217;s time to update</em></p>\n";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:36:"http://wellformedweb.org/CommentAPI/";a:1:{s:10:"commentRss";a:1:{i:0;a:5:{s:4:"data";s:55:"http://wordpress.org/news/2012/09/wordpress-3-4-2/feed/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:38:"http://purl.org/rss/1.0/modules/slash/";a:1:{s:8:"comments";a:1:{i:0;a:5:{s:4:"data";s:1:"0";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}}}s:27:"http://www.w3.org/2005/Atom";a:1:{s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:0:"";s:7:"attribs";a:1:{s:0:"";a:3:{s:4:"href";s:31:"http://wordpress.org/news/feed/";s:3:"rel";s:4:"self";s:4:"type";s:19:"application/rss+xml";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:44:"http://purl.org/rss/1.0/modules/syndication/";a:2:{s:12:"updatePeriod";a:1:{i:0;a:5:{s:4:"data";s:6:"hourly";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:15:"updateFrequency";a:1:{i:0;a:5:{s:4:"data";s:1:"1";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}}}}}}}}s:4:"type";i:128;s:7:"headers";a:10:{s:12:"content-type";s:23:"text/xml; charset=UTF-8";s:4:"vary";s:15:"Accept-Encoding";s:6:"server";s:5:"nginx";s:4:"date";s:29:"Mon, 18 Feb 2013 12:29:45 GMT";s:10:"x-pingback";s:36:"http://wordpress.org/news/xmlrpc.php";s:13:"last-modified";s:29:"Thu, 24 Jan 2013 22:23:03 GMT";s:4:"x-nc";s:11:"HIT luv 138";s:3:"age";s:6:"235600";s:14:"content-length";s:5:"56152";s:10:"connection";s:5:"close";}s:5:"build";s:14:"20121202164312";}', 'no');
INSERT INTO `wp_options` (`option_id`, `option_name`, `option_value`, `autoload`) VALUES
(207, '_transient_timeout_feed_mod_a5420c83891a9c88ad2a4f04584a5efc', '1361469385', 'no'),
(208, '_transient_feed_mod_a5420c83891a9c88ad2a4f04584a5efc', '1361426185', 'no'),
(205, '_transient_timeout_feed_a5420c83891a9c88ad2a4f04584a5efc', '1361469385', 'no'),
(206, '_transient_feed_a5420c83891a9c88ad2a4f04584a5efc', 'a:4:{s:5:"child";a:1:{s:0:"";a:1:{s:3:"rss";a:1:{i:0;a:6:{s:4:"data";s:3:"\n	\n";s:7:"attribs";a:1:{s:0:"";a:1:{s:7:"version";s:3:"2.0";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:1:{s:0:"";a:1:{s:7:"channel";a:1:{i:0;a:6:{s:4:"data";s:72:"\n		\n		\n		\n		\n		\n		\n				\n\n		\n		\n		\n		\n		\n		\n		\n		\n		\n		\n		\n		\n		\n		\n		\n\n	";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:7:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:39:"WordPress Plugins » View: Most Popular";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:51:"http://wordpress.org/extend/plugins/browse/popular/";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:39:"WordPress Plugins » View: Most Popular";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:8:"language";a:1:{i:0;a:5:{s:4:"data";s:5:"en-US";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 24 Jan 2013 11:13:57 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:9:"generator";a:1:{i:0;a:5:{s:4:"data";s:25:"http://bbpress.org/?v=1.1";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"item";a:15:{i:0;a:6:{s:4:"data";s:30:"\n			\n			\n			\n			\n			\n			\n					";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:7:"Akismet";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:52:"http://wordpress.org/extend/plugins/akismet/#post-15";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Fri, 09 Mar 2007 22:11:30 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:39:"15@http://wordpress.org/extend/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:98:"Akismet checks your comments against the Akismet web service to see if they look like spam or not.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:14:"Matt Mullenweg";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:1;a:6:{s:4:"data";s:30:"\n			\n			\n			\n			\n			\n			\n					";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:19:"Google XML Sitemaps";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:70:"http://wordpress.org/extend/plugins/google-sitemap-generator/#post-132";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Fri, 09 Mar 2007 22:31:32 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:40:"132@http://wordpress.org/extend/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:105:"This plugin will generate a special XML sitemap which will help search engines to better index your blog.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:4:"Arne";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:2;a:6:{s:4:"data";s:30:"\n			\n			\n			\n			\n			\n			\n					";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:14:"Contact Form 7";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:61:"http://wordpress.org/extend/plugins/contact-form-7/#post-2141";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 02 Aug 2007 12:45:03 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:41:"2141@http://wordpress.org/extend/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:54:"Just another contact form plugin. Simple but flexible.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:16:"Takayuki Miyoshi";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:3;a:6:{s:4:"data";s:30:"\n			\n			\n			\n			\n			\n			\n					";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:22:"WordPress SEO by Yoast";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:60:"http://wordpress.org/extend/plugins/wordpress-seo/#post-8321";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 01 Jan 2009 20:34:44 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:41:"8321@http://wordpress.org/extend/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:131:"Improve your WordPress SEO: Write better content and have a fully optimized WordPress site using the WordPress SEO plugin by Yoast.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:13:"Joost de Valk";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:4;a:6:{s:4:"data";s:30:"\n			\n			\n			\n			\n			\n			\n					";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:24:"Jetpack by WordPress.com";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:55:"http://wordpress.org/extend/plugins/jetpack/#post-23862";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 20 Jan 2011 02:21:38 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:42:"23862@http://wordpress.org/extend/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:104:"Supercharge your WordPress site with powerful features previously only available to WordPress.com users.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:24:"Michael Adams (mdawaffe)";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:5;a:6:{s:4:"data";s:30:"\n			\n			\n			\n			\n			\n			\n					";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:19:"All in One SEO Pack";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:65:"http://wordpress.org/extend/plugins/all-in-one-seo-pack/#post-753";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Fri, 30 Mar 2007 20:08:18 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:40:"753@http://wordpress.org/extend/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:86:"WordPress SEO plugin to automatically optimize your Wordpress blog for Search Engines.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:8:"uberdose";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:6;a:6:{s:4:"data";s:30:"\n			\n			\n			\n			\n			\n			\n					";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:24:"Fast Secure Contact Form";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:63:"http://wordpress.org/extend/plugins/si-contact-form/#post-12636";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 27 Aug 2009 01:20:04 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:42:"12636@http://wordpress.org/extend/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:131:"A super customizable contact form that lets your visitors send you email. Blocks all automated spammers. No templates to mess with.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:12:"Mike Challis";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:7;a:6:{s:4:"data";s:30:"\n			\n			\n			\n			\n			\n			\n					";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:15:"NextGEN Gallery";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:62:"http://wordpress.org/extend/plugins/nextgen-gallery/#post-1169";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Mon, 23 Apr 2007 20:08:06 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:41:"1169@http://wordpress.org/extend/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:93:"The most popular WordPress gallery plugin with tons of features and over 6 million downloads.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:9:"Alex Rabe";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:8;a:6:{s:4:"data";s:30:"\n			\n			\n			\n			\n			\n			\n					";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:18:"WordPress Importer";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:66:"http://wordpress.org/extend/plugins/wordpress-importer/#post-18101";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 20 May 2010 17:42:45 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:42:"18101@http://wordpress.org/extend/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:101:"Import posts, pages, comments, custom fields, categories, tags and more from a WordPress export file.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:14:"Brian Colinger";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:9;a:6:{s:4:"data";s:30:"\n			\n			\n			\n			\n			\n			\n					";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:16:"Ultimate TinyMCE";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:64:"http://wordpress.org/extend/plugins/ultimate-tinymce/#post-32088";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Mon, 14 Nov 2011 09:06:40 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:42:"32088@http://wordpress.org/extend/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:84:"Description: Beef up your visual tinymce editor with a plethora of advanced options.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:4:"Josh";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:10;a:6:{s:4:"data";s:30:"\n			\n			\n			\n			\n			\n			\n					";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:19:"Social Media Widget";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:67:"http://wordpress.org/extend/plugins/social-media-widget/#post-18183";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Tue, 25 May 2010 02:22:34 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:42:"18183@http://wordpress.org/extend/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:129:"Adds links to all of your social media and sharing site profiles. Tons of icons come in 3 sizes, 4 icon styles, and 4 animations.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:17:"Blink Web Effects";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:11;a:6:{s:4:"data";s:30:"\n			\n			\n			\n			\n			\n			\n					";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:13:"Lightbox Plus";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:60:"http://wordpress.org/extend/plugins/lightbox-plus/#post-6394";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Fri, 25 Jul 2008 02:18:09 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:41:"6394@http://wordpress.org/extend/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:120:"Lightbox Plus permits users to view larger versions of images, simple slide shows, videos and content all in an overlay.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:11:"Dan Zappone";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:12;a:6:{s:4:"data";s:30:"\n			\n			\n			\n			\n			\n			\n					";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:14:"W3 Total Cache";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:62:"http://wordpress.org/extend/plugins/w3-total-cache/#post-12073";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Wed, 29 Jul 2009 18:46:31 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:42:"12073@http://wordpress.org/extend/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:135:"Improve site performance and user experience via caching: browser, page, object, database, minify and content delivery network support.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:16:"Frederick Townes";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:13;a:6:{s:4:"data";s:30:"\n			\n			\n			\n			\n			\n			\n					";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:8:"Facebook";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:56:"http://wordpress.org/extend/plugins/facebook/#post-37351";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Wed, 02 May 2012 19:36:35 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:42:"37351@http://wordpress.org/extend/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:75:"Make your WordPress site social in a couple of clicks, powered by Facebook.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:18:"Samuel Wood (Otto)";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}i:14;a:6:{s:4:"data";s:30:"\n			\n			\n			\n			\n			\n			\n					";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";s:5:"child";a:2:{s:0:"";a:5:{s:5:"title";a:1:{i:0;a:5:{s:4:"data";s:13:"WP to Twitter";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:60:"http://wordpress.org/extend/plugins/wp-to-twitter/#post-7509";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:7:"pubDate";a:1:{i:0;a:5:{s:4:"data";s:31:"Thu, 30 Oct 2008 20:13:21 +0000";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:4:"guid";a:1:{i:0;a:5:{s:4:"data";s:41:"7509@http://wordpress.org/extend/plugins/";s:7:"attribs";a:1:{s:0:"";a:1:{s:11:"isPermaLink";s:5:"false";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}s:11:"description";a:1:{i:0;a:5:{s:4:"data";s:133:"Auto-posts a Twitter update when you update your WordPress blog or blogroll, with your chosen URL shortening service. Requires PHP 5.";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}s:32:"http://purl.org/dc/elements/1.1/";a:1:{s:7:"creator";a:1:{i:0;a:5:{s:4:"data";s:10:"Joe Dolson";s:7:"attribs";a:0:{}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}}}s:27:"http://www.w3.org/2005/Atom";a:1:{s:4:"link";a:1:{i:0;a:5:{s:4:"data";s:0:"";s:7:"attribs";a:1:{s:0:"";a:3:{s:4:"href";s:52:"http://wordpress.org/extend/plugins/rss/view/popular";s:3:"rel";s:4:"self";s:4:"type";s:19:"application/rss+xml";}}s:8:"xml_base";s:0:"";s:17:"xml_base_explicit";b:0;s:8:"xml_lang";s:0:"";}}}}}}}}}}}}s:4:"type";i:128;s:7:"headers";a:9:{s:6:"server";s:5:"nginx";s:4:"date";s:29:"Thu, 24 Jan 2013 11:23:57 GMT";s:12:"content-type";s:23:"text/xml; charset=UTF-8";s:4:"vary";s:15:"Accept-Encoding";s:13:"last-modified";s:29:"Fri, 09 Mar 2007 22:11:30 GMT";s:4:"x-nc";s:11:"HIT luv 139";s:3:"age";s:7:"2399547";s:14:"content-length";s:4:"7592";s:10:"connection";s:5:"close";}s:5:"build";s:14:"20121202164312";}', 'no'),
(149, '_site_transient_timeout_browser_4035d4b4450759cca24a82ef888cec49', '1361887698', 'yes'),
(150, '_site_transient_browser_4035d4b4450759cca24a82ef888cec49', 'a:9:{s:8:"platform";s:7:"Windows";s:4:"name";s:7:"Firefox";s:7:"version";s:4:"16.0";s:10:"update_url";s:23:"http://www.firefox.com/";s:7:"img_src";s:50:"http://s.wordpress.org/images/browsers/firefox.png";s:11:"img_src_ssl";s:49:"https://wordpress.org/images/browsers/firefox.png";s:15:"current_version";s:2:"16";s:7:"upgrade";b:0;s:8:"insecure";b:0;}', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `wp_postmeta`
--

CREATE TABLE IF NOT EXISTS `wp_postmeta` (
  `meta_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `meta_key` varchar(255) DEFAULT NULL,
  `meta_value` longtext,
  PRIMARY KEY (`meta_id`),
  KEY `post_id` (`post_id`),
  KEY `meta_key` (`meta_key`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `wp_postmeta`
--

INSERT INTO `wp_postmeta` (`meta_id`, `post_id`, `meta_key`, `meta_value`) VALUES
(1, 2, '_wp_page_template', 'default');

-- --------------------------------------------------------

--
-- Table structure for table `wp_posts`
--

CREATE TABLE IF NOT EXISTS `wp_posts` (
  `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `post_author` bigint(20) unsigned NOT NULL DEFAULT '0',
  `post_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content` longtext NOT NULL,
  `post_title` text NOT NULL,
  `post_excerpt` text NOT NULL,
  `post_status` varchar(20) NOT NULL DEFAULT 'publish',
  `comment_status` varchar(20) NOT NULL DEFAULT 'open',
  `ping_status` varchar(20) NOT NULL DEFAULT 'open',
  `post_password` varchar(20) NOT NULL DEFAULT '',
  `post_name` varchar(200) NOT NULL DEFAULT '',
  `to_ping` text NOT NULL,
  `pinged` text NOT NULL,
  `post_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_modified_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content_filtered` longtext NOT NULL,
  `post_parent` bigint(20) unsigned NOT NULL DEFAULT '0',
  `guid` varchar(255) NOT NULL DEFAULT '',
  `menu_order` int(11) NOT NULL DEFAULT '0',
  `post_type` varchar(20) NOT NULL DEFAULT 'post',
  `post_mime_type` varchar(100) NOT NULL DEFAULT '',
  `comment_count` bigint(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`),
  KEY `post_name` (`post_name`),
  KEY `type_status_date` (`post_type`,`post_status`,`post_date`,`ID`),
  KEY `post_parent` (`post_parent`),
  KEY `post_author` (`post_author`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `wp_posts`
--

INSERT INTO `wp_posts` (`ID`, `post_author`, `post_date`, `post_date_gmt`, `post_content`, `post_title`, `post_excerpt`, `post_status`, `comment_status`, `ping_status`, `post_password`, `post_name`, `to_ping`, `pinged`, `post_modified`, `post_modified_gmt`, `post_content_filtered`, `post_parent`, `guid`, `menu_order`, `post_type`, `post_mime_type`, `comment_count`) VALUES
(1, 1, '2013-02-14 07:34:11', '2013-02-14 07:34:11', 'Welcome to WordPress. This is your first post. Edit or delete it, then start blogging!', 'Hello world!', '', 'publish', 'open', 'open', '', 'hello-world', '', '', '2013-02-14 07:34:11', '2013-02-14 07:34:11', '', 0, 'http://192.168.1.100/jamshaid/CodeIgniter/blog/?p=1', 0, 'post', '', 1),
(2, 1, '2013-02-14 07:34:11', '2013-02-14 07:34:11', 'This is an example page. It''s different from a blog post because it will stay in one place and will show up in your site navigation (in most themes). Most people start with an About page that introduces them to potential site visitors. It might say something like this:\n\n<blockquote>Hi there! I''m a bike messenger by day, aspiring actor by night, and this is my blog. I live in Los Angeles, have a great dog named Jack, and I like pi&#241;a coladas. (And gettin'' caught in the rain.)</blockquote>\n\n...or something like this:\n\n<blockquote>The XYZ Doohickey Company was founded in 1971, and has been providing quality doohickeys to the public ever since. Located in Gotham City, XYZ employs over 2,000 people and does all kinds of awesome things for the Gotham community.</blockquote>\n\nAs a new WordPress user, you should go to <a href="http://192.168.1.100/jamshaid/CodeIgniter/blog/wp-admin/">your dashboard</a> to delete this page and create new pages for your content. Have fun!', 'Sample Page', '', 'publish', 'open', 'open', '', 'sample-page', '', '', '2013-02-14 07:34:11', '2013-02-14 07:34:11', '', 0, 'http://192.168.1.100/jamshaid/CodeIgniter/blog/?page_id=2', 0, 'page', '', 0),
(3, 1, '2013-02-14 07:34:24', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'open', 'open', '', '', '', '', '2013-02-14 07:34:24', '0000-00-00 00:00:00', '', 0, 'http://192.168.1.100/jamshaid/CodeIgniter/blog/?p=3', 0, 'post', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `wp_terms`
--

CREATE TABLE IF NOT EXISTS `wp_terms` (
  `term_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL DEFAULT '',
  `slug` varchar(200) NOT NULL DEFAULT '',
  `term_group` bigint(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`term_id`),
  UNIQUE KEY `slug` (`slug`),
  KEY `name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `wp_terms`
--

INSERT INTO `wp_terms` (`term_id`, `name`, `slug`, `term_group`) VALUES
(1, 'Uncategorized', 'uncategorized', 0);

-- --------------------------------------------------------

--
-- Table structure for table `wp_term_relationships`
--

CREATE TABLE IF NOT EXISTS `wp_term_relationships` (
  `object_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `term_taxonomy_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `term_order` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`object_id`,`term_taxonomy_id`),
  KEY `term_taxonomy_id` (`term_taxonomy_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `wp_term_relationships`
--

INSERT INTO `wp_term_relationships` (`object_id`, `term_taxonomy_id`, `term_order`) VALUES
(1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `wp_term_taxonomy`
--

CREATE TABLE IF NOT EXISTS `wp_term_taxonomy` (
  `term_taxonomy_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `term_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `taxonomy` varchar(32) NOT NULL DEFAULT '',
  `description` longtext NOT NULL,
  `parent` bigint(20) unsigned NOT NULL DEFAULT '0',
  `count` bigint(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`term_taxonomy_id`),
  UNIQUE KEY `term_id_taxonomy` (`term_id`,`taxonomy`),
  KEY `taxonomy` (`taxonomy`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `wp_term_taxonomy`
--

INSERT INTO `wp_term_taxonomy` (`term_taxonomy_id`, `term_id`, `taxonomy`, `description`, `parent`, `count`) VALUES
(1, 1, 'category', '', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `wp_usermeta`
--

CREATE TABLE IF NOT EXISTS `wp_usermeta` (
  `umeta_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `meta_key` varchar(255) DEFAULT NULL,
  `meta_value` longtext,
  PRIMARY KEY (`umeta_id`),
  KEY `user_id` (`user_id`),
  KEY `meta_key` (`meta_key`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `wp_usermeta`
--

INSERT INTO `wp_usermeta` (`umeta_id`, `user_id`, `meta_key`, `meta_value`) VALUES
(1, 1, 'first_name', ''),
(2, 1, 'last_name', ''),
(3, 1, 'nickname', 'admin'),
(4, 1, 'description', ''),
(5, 1, 'rich_editing', 'true'),
(6, 1, 'comment_shortcuts', 'false'),
(7, 1, 'admin_color', 'fresh'),
(8, 1, 'use_ssl', '0'),
(9, 1, 'show_admin_bar_front', 'true'),
(10, 1, 'wp_capabilities', 'a:1:{s:13:"administrator";b:1;}'),
(11, 1, 'wp_user_level', '10'),
(12, 1, 'dismissed_wp_pointers', 'wp330_toolbar,wp330_saving_widgets,wp340_choose_image_from_library,wp340_customize_current_theme_link,wp350_media'),
(13, 1, 'show_welcome_panel', '1'),
(14, 1, 'wp_dashboard_quick_press_last_post_id', '3');

-- --------------------------------------------------------

--
-- Table structure for table `wp_users`
--

CREATE TABLE IF NOT EXISTS `wp_users` (
  `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_login` varchar(60) NOT NULL DEFAULT '',
  `user_pass` varchar(64) NOT NULL DEFAULT '',
  `user_nicename` varchar(50) NOT NULL DEFAULT '',
  `user_email` varchar(100) NOT NULL DEFAULT '',
  `user_url` varchar(100) NOT NULL DEFAULT '',
  `user_registered` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_activation_key` varchar(60) NOT NULL DEFAULT '',
  `user_status` int(11) NOT NULL DEFAULT '0',
  `display_name` varchar(250) NOT NULL DEFAULT '',
  PRIMARY KEY (`ID`),
  KEY `user_login_key` (`user_login`),
  KEY `user_nicename` (`user_nicename`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `wp_users`
--

INSERT INTO `wp_users` (`ID`, `user_login`, `user_pass`, `user_nicename`, `user_email`, `user_url`, `user_registered`, `user_activation_key`, `user_status`, `display_name`) VALUES
(1, 'admin', '$P$BO3L3VZtN8MFrJEAxUQg6.YHpKwQr71', 'admin', 'jamshaid.weber@gmail.com', '', '2013-02-14 07:34:11', '', 0, 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
