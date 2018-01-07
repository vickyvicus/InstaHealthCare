-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2018 at 07:41 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id` int(11) NOT NULL,
  `admin_name` varchar(30) NOT NULL,
  `admin_password` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_name`, `admin_password`) VALUES
(2, 'admin', '25d55ad283aa400af464c76d713c07ad');

-- --------------------------------------------------------

--
-- Table structure for table `connect`
--

CREATE TABLE IF NOT EXISTS `connect` (
`id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `message` varchar(150) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `connect`
--

INSERT INTO `connect` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'AVNISH SINGH', 'avnishsinghjat@gmail.com', 'query', 'hjhu');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE IF NOT EXISTS `doctor` (
`id` int(11) NOT NULL,
  `Doc_name` varchar(30) NOT NULL,
  `Doc_email` varchar(100) NOT NULL,
  `doc_contact` varchar(12) NOT NULL,
  `type` varchar(20) NOT NULL,
  `info` varchar(255) NOT NULL,
  `tags` varchar(800) NOT NULL,
  `doc_photo` varchar(100) NOT NULL,
  `city` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `Doc_name`, `Doc_email`, `doc_contact`, `type`, `info`, `tags`, `doc_photo`, `city`) VALUES
(1, 'Dr. Peter', 'peter@example.com', '9828090421', 'dentist', 'MBBS', '                        teeth/tooth       ', 'doc/Dr. Peter.jpg', 'jaipur'),
(2, 'Dr. Alex', 'alex@example.com', '9828096264', 'ent', 'MBBS, MD', '    breathe    head head-headche    neck      smell things    taste     vomit   ', 'doc/Dr. Alex.jpg', 'jaipur'),
(4, 'Dr. Eva', 'eva@example.com', '9999999999', 'neurologist', 'MBBS ', '        head head-headche       remember  sleep  sprain   taste      walk  write', 'doc/Dr. Eva.jpg', 'jaipur'),
(5, 'Dr. Harry', 'harry@example.com', '9825556258', 'orthopedic', 'MBBS MS MD', ' assaulted back   chest  fracture head  in a traffic accident   neck                walk  write torncartilage', 'doc/Dr. Harry.jpg', 'jaipur'),
(6, 'Dr. John', 'john@example.com', '8565856587', 'physician', 'MBBS', 'abdomen assaulted back blindness breathe chest cold/fever fracture head head-headche in a traffic accident limb nausea neck nosebleed passurine remember shot sleep smell things sprain stabbed stomach taste teeth/tooth tired torn cartilage vagina vomit walk weak write', 'doc/Dr. John.jpg', 'jaipur'),
(7, 'Dr. Michael', 'michael@example.com', '8745685265', 'surgeon', 'MBBS MD', 'abdomen assaulted back   chest cold/fever fracture head  in a traffic accident limb nausea  nosebleed passurine  shot sleep smell things sprain stabbed stomach     vagina vomit  weak ', 'doc/Dr. Michael.jpg', 'mumbai'),
(8, 'Dr. Jack', 'jack@exmaple.com', '7895458555', 'ent', 'MBBS', '    breathe    head head-headche    neck      smell things    taste     vomit   ', 'doc/Dr. Jack.jpg', 'jaipur'),
(9, 'Dr. Simon', 'simon@exapmle.com', '7898525486', 'neurologist', 'MBBS', '        head head-headche       remember  sleep  sprain   taste      walk  write', 'doc/Dr. Simon.jpg', 'delhi'),
(10, 'Dr. Jane', 'jane@exmaple.com', '8947698524', 'gynecologist', 'MBBS MD MS', ' assaulted              passurine            vagina vomit  weak ', 'doc/Dr. Jane.jpg', 'mumbai'),
(11, 'Dr. Bob', 'bob@example.com', '8925656898', 'surgeon', 'MBBS MD', 'abdomen assaulted back   chest cold/fever fracture head  in a traffic accident limb nausea  nosebleed passurine  shot sleep smell things sprain stabbed stomach     vagina vomit  weak ', 'doc/Dr. Bob.jpg', 'jaipur'),
(12, 'Dr. Ronald', 'ronald@example.com', '8526987456', 'physician', 'MBBS', 'abdomen assaulted back blindness breathe chest cold/fever fracture head head-headche in a traffic accident limb nausea neck nosebleed passurine remember shot sleep smell things sprain stabbed stomach taste teeth/tooth tired torn cartilage vagina vomit walk weak write', 'doc/Dr. Ronald.jpg', 'delhi'),
(13, 'Madhur Sain', 'madhursain@gmail.com', '7864512467', 'neurologist', 'Just an Random Indain Doctor', 'abdomen     chest   head  in a traffic accident   neck   remember shot sleep   stabbed  taste   torn cartilage   walk weak ', 'doc/Madhur Sain9620.jpg', 'jaipur'),
(14, 'Madhur Sain', 'madhursain@gmail.com', '9678656456', 'dentist', 'bgvcg', ' assaulted   breathe                           ', 'doc/Madhur Sain2274.jpg', 'jaipur');

-- --------------------------------------------------------

--
-- Table structure for table `doctors_clinic`
--

CREATE TABLE IF NOT EXISTS `doctors_clinic` (
  `doc_id` int(11) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `lat` float DEFAULT NULL,
  `lng` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors_clinic`
--

INSERT INTO `doctors_clinic` (`doc_id`, `address`, `lat`, `lng`) VALUES
(1, 'Manipal Hospital, road number 1,sikar road,jaipur-302039', 26.9683, 75.7736),
(2, 'Manipal Hospital, road number 1,sikar road,jaipur', 26.9683, 75.7736),
(4, 'khethan hospital sikar road jaipur-302039', 26.959, 75.7711),
(5, 'dristi eye hospital sikar road jaipur', 26.9622, 75.7709),
(6, 'sms hospital tonk road jaipur', 26.9064, 75.8155),
(7, 'sevenhills hsopital near maraj maroashi hsopital mumbai', 19.1176, 72.8786),
(8, 'SDM Hospital Santokba Durlabhji Memorial near birla mandir jaipur', 26.8936, 75.8122),
(9, 'kalra hospital,Tulsi Dass Kalra Marg, Kirti Nagar, Block A, Indira Colony, Kirti Nagar, New Delhi, Delhi 110015', 28.6544, 77.139),
(10, 'holy spirit hospital near road no 13 mumbai', 19.1283, 72.8665),
(11, 'apex hospital mansarovar jaipur', 26.8658, 75.7624),
(12, 'batra hospital,B-1/5, Janak Puri, Near Cheque Post, Block B 2B, Janakpuri, New Delhi, Delhi 110058', 28.6344, 77.0904),
(13, 'Fortis Escorts Hospital, Jawahar Lal Nehru Marg, Malviya Nagar, Sector 5, Malviya Nagar,Jaipur', 26.8466, 75.8034),
(14, 'maxwell hospital Jhotwara Road, Opposite Khantaka Marriage Garden, Doodh Mandi, Subash Nagar, Shastri Nagar, Jaipur, Rajasthan 302016', 26.9343, 75.795);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE IF NOT EXISTS `signup` (
`id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `age` int(3) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `city` varchar(50) NOT NULL,
  `sec_que` varchar(255) NOT NULL,
  `sec_ans` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `username`, `password`, `name`, `email`, `age`, `sex`, `city`, `sec_que`, `sec_ans`, `photo`) VALUES
(2, 'admin', '25d55ad283aa400af464c76d713c07ad', 'vicky agarwal', 'vicky.agarwal4us@gmail.com', 24, 'male', 'jaipur', 'what is your pet name ?', 'lucy', 'profiles/admin.jpg'),
(4, 'vickyvicus', '25d55ad283aa400af464c76d713c07ad', 'vicky agarwal', 'vickyvicus@gmail.com', 21, 'male', 'jaipur', 'who is your favourite teacher ?', 'myself', 'profiles/vickyvicus.jpg'),
(21, 'vikas', '7815696ecbf1c96e6894b779456d330e', 'vikas ', 'rockingbuddy228@gmail.com', 21, 'male', 'jaipur', 'who is your favourite teacher ?', 'asd', 'profiles/vikas.jpg'),
(22, 'rai', 'f1290186a5d0b1ceab27f4e77c0c5d68', 'rai', 'e@g', 21, 'male', 'jaipur', 'who is your favourite teacher ?', '1', 'profiles/rai.jpg'),
(23, 'e', 'c81e728d9d4c2f636f067f89cc14862c', 'e', 'rockingbuddy229@gmail.com', 32, 'male', 'jaipur', 'who is your favourite teacher ?', '2', 'profiles/e.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `connect`
--
ALTER TABLE `connect`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors_clinic`
--
ALTER TABLE `doctors_clinic`
 ADD PRIMARY KEY (`doc_id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `connect`
--
ALTER TABLE `connect`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
