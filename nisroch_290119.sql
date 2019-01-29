-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2019 at 09:09 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nisroch`
--

-- --------------------------------------------------------

--
-- Table structure for table `admission`
--

CREATE TABLE `admission` (
  `id` int(10) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `smobile` varchar(100) NOT NULL,
  `father_name` varchar(100) NOT NULL,
  `pmobile` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `class` varchar(100) NOT NULL,
  `address` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admission`
--

INSERT INTO `admission` (`id`, `fname`, `lname`, `dob`, `smobile`, `father_name`, `pmobile`, `city`, `class`, `address`) VALUES
(1, 'viknj', 'ssdds', '2018-09-21', '2333454545', 'cvdscvds', '3445566', 'vdvds', 'nursery', 0x737373206767);

-- --------------------------------------------------------

--
-- Table structure for table `awards`
--

CREATE TABLE `awards` (
  `id` int(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `image` longblob NOT NULL,
  `date` int(10) NOT NULL,
  `month` varchar(100) NOT NULL,
  `detail` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `awards`
--

INSERT INTO `awards` (`id`, `title`, `image`, `date`, `month`, `detail`) VALUES
(1, 'awards1', 0x696d616765732f67616c6c6172792f313533373433303335386177617264732e6a7067, 14, 'july', 0x526571756972656d656e743a20546561636865727320726571756972656420666f72205365636f6e6461727920436c6173732c205375626a6563743a20536369656e636520616e6420532e5374202d2046656d616c652043616e64696461746573204f6e6c79),
(2, 'awards2', 0x696d616765732f67616c6c6172792f313533373433303338396177617264732d616e642d686f6e6f7572732e6a7067, 11, 'june', 0x526571756972656d656e743a20546561636865727320726571756972656420666f72205365636f6e6461727920436c6173732c205375626a6563743a20536369656e636520616e6420532e5374202d2046656d616c652043616e64696461746573204f6e6c79),
(3, 'awards3', 0x696d616765732f67616c6c6172792f3135333734333034333570726573656e746174696f6e2d6576656e696e672d31323030783830302e6a7067, 22, 'march', 0x526571756972656d656e743a20546561636865727320726571756972656420666f72205365636f6e6461727920436c6173732c205375626a6563743a20536369656e636520616e6420532e5374202d2046656d616c652043616e64696461746573204f6e6c79);

-- --------------------------------------------------------

--
-- Table structure for table `book_now`
--

CREATE TABLE `book_now` (
  `id` int(10) NOT NULL,
  `p_id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_now`
--

INSERT INTO `book_now` (`id`, `p_id`, `name`, `mobile`, `email`, `address`, `message`) VALUES
(1, 8, 'manoj', '8805667890', 'manoj@gmail.com', 'Patna', 'ddf vf'),
(2, 5, 'Riya', '8409310527', 'riya@gmail.com', 'DR. USHA KIRAN, MANGLAM ENCLAVE, BAILY ROAD, DANAPUR', 'ccc');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(10) NOT NULL,
  `image` longblob NOT NULL,
  `name` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `detail` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
-- Error reading data for table nisroch.course: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `nisroch`.`course`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `flash`
--

CREATE TABLE `flash` (
  `id` int(10) NOT NULL,
  `message` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flash`
--

INSERT INTO `flash` (`id`, `message`) VALUES
(1, 0x5468697320697320466c617368204d657373616765),
(3, 0x5468697320697320466c617368204d65737361676532);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(10) NOT NULL,
  `image` longblob NOT NULL,
  `class` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `image`, `class`, `name`) VALUES
(1, 0x696d616765732f67616c6c6172792f3135333936303332343067312e6a7067, 'INSECTICIDES', ''),
(2, 0x696d616765732f67616c6c6172792f3135333936303332363467322e6a7067, 'FUNGICIDES', ''),
(3, 0x696d616765732f67616c6c6172792f3135333936303333303767332e6a7067, 'HERBICIDES', ''),
(4, 0x696d616765732f67616c6c6172792f3135333936303333323367342e6a7067, 'ANTIBIOTICS', ''),
(5, 0x696d616765732f67616c6c6172792f3135333936303333333567352e6a7067, 'PLANTGROWTH', '');

-- --------------------------------------------------------

--
-- Table structure for table `house`
--

CREATE TABLE `house` (
  `id` int(10) NOT NULL,
  `category` varchar(100) NOT NULL,
  `discipline` varchar(100) NOT NULL,
  `homework` varchar(100) NOT NULL,
  `activities` varchar(100) NOT NULL,
  `speaking` varchar(100) NOT NULL,
  `attendance` varchar(100) NOT NULL,
  `total` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `house`
--

INSERT INTO `house` (`id`, `category`, `discipline`, `homework`, `activities`, `speaking`, `attendance`, `total`) VALUES
(3, 'Dexterous Dragon', 'A', 'B', 'C', 'D', 'E', 'A'),
(4, 'Flawless Falcon', 'B', 'B', 'C', 'C', 'B', 'B'),
(5, 'Hilarious Hawk', 'A', 'A', 'B', 'B', 'B', 'A'),
(6, 'Unerring Unicorn', 'C', 'B', 'C', 'C', 'A', 'C');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `role`) VALUES
(1, 'nisroch', '5f1f6d932eb1e2518049d73421a125ee', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) NOT NULL,
  `image` longblob NOT NULL,
  `date` int(2) NOT NULL,
  `month` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `detail` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `image`, `date`, `month`, `title`, `detail`) VALUES
(1, 0x696d616765732f67616c6c6172792f313533373236333732326e6577732d312e6a7067, 10, 'september', 'T', 0x526571756972656d656e743a20546561636865727320726571756972656420666f72205365636f6e6461727920436c6173732c205375626a6563743a20536369656e636520616e6420532e5374202d2046656d616c652043616e64696461746573204f6e6c79),
(2, 0x696d616765732f67616c6c6172792f313533373236333739326e6577732d322e6a7067, 14, 'July', 'V', 0x526571756972656d656e743a20546561636865727320726571756972656420666f72205365636f6e6461727920436c6173732c205375626a6563743a20536369656e636520616e6420532e5374202d2046656d616c652043616e64696461746573204f6e6c79),
(3, 0x696d616765732f67616c6c6172792f313533373236333834356e6577732d332e6a7067, 21, 'August', 'C', 0x526571756972656d656e743a20546561636865727320726571756972656420666f72205365636f6e6461727920436c6173732c205375626a6563743a20536369656e636520616e6420532e5374202d2046656d616c652043616e64696461746573204f6e6c79);

-- --------------------------------------------------------

--
-- Table structure for table `periodic`
--

CREATE TABLE `periodic` (
  `id` int(10) NOT NULL,
  `work` varchar(100) NOT NULL,
  `awards` varchar(100) NOT NULL,
  `happy_client` varchar(100) NOT NULL,
  `dealers` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `periodic`
--

INSERT INTO `periodic` (`id`, `work`, `awards`, `happy_client`, `dealers`) VALUES
(1, '24x7', '24', '500+', '100+'),
(2, '24x5', '21', '211', '211');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(10) NOT NULL,
  `p_id` int(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `detail` varchar(150) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `p_id`, `title`, `detail`, `image`) VALUES
(1, 1, 'Adamant', 'Imidacloprid 70% WG  is a systemic insecticide which is very effective against various insect pests. Target Crops : Cotton, Rice, Okra,Cucumber etc. T', 'images/gallary/1539595579i1.jpg'),
(2, 1, 'DZIRE', '(Deltamethrin1%+Trizophos 35%EC) is recommended to control spotted Bollworms, Pink bollworms etc. Target Crops:Cotton,Timber, Oilseeds Cereals,Fruits,', 'images/gallary/1539595763i2.jpg'),
(3, 1, 'Niscron Plus', '(Profenophos40%+Cypermethrin4%EC) is a combination of insecticides. It is the wide spectrum insecticide with easy bio-degradation and high bio activit', 'images/gallary/1539596034i4.jpg'),
(4, 1, 'jade', '( Chlorpyriphos 50%) is a non-systematic insecticide used on various crops. Target Crops: Cotton, Rice etc Target Insect: Bollworms,Stem Borer, Leaf R', 'images/gallary/1539596231jade.jpg'),
(5, 1, 'N-tara', 'Garden', 'images/gallary/1539596560i5.jpg'),
(6, 1, 'Rounak', 'insecticides', 'images/gallary/1539596673i6.jpg'),
(7, 1, 'superkill-25', 'insecticides', 'images/gallary/1539596732i7.jpg'),
(8, 1, 'car 4G', 'insecticides', 'images/gallary/1539596785i8.jpg'),
(9, 1, 'NIMET 10-G', 'insecticides', 'images/gallary/1539596848i9.jpg'),
(10, 1, 'ACP-20', 'insecticides', 'images/gallary/1539596899i10.jpg'),
(11, 1, 'Confine', 'insecticides', 'images/gallary/1539597023i11.jpg'),
(12, 1, 'NOWAN', 'insecticides', 'images/gallary/1539597059i12.jpg'),
(13, 1, 'AGENT', 'insecticides', 'images/gallary/1539597384i13.jpg'),
(14, 1, 'ACATAF', 'insecticides', 'images/gallary/1539597426i14.jpg'),
(15, 1, 'Niscron', 'insecticides', 'images/gallary/1539597464i15.jpg'),
(16, 2, 'NAGRON 35 WS', 'Fungicides', 'images/gallary/1539597576f1.jpg'),
(17, 2, 'Sikka', 'Lawn', 'images/gallary/1539597645f2.jpg'),
(18, 2, 'LEADER', 'Garden', 'images/gallary/1539597682f3.jpg'),
(19, 2, 'Vavistin', 'Garden', 'images/gallary/1539597724f4.jpg'),
(20, 2, 'saan', 'Garden', 'images/gallary/1539597754f5.jpg'),
(21, 2, 'NISROCH', 'Garden', 'images/gallary/1539597850f6.jpg'),
(22, 2, 'Star Plus', 'Garden', 'images/gallary/1539597962f7.jpg'),
(23, 2, 'Tie', 'Garden', 'images/gallary/1539597989f8.jpg'),
(24, 2, 'ENDOFIL', 'Garden', 'images/gallary/1539598176f9.jpg'),
(25, 2, 'VISHAL POWER', 'Garden', 'images/gallary/1539598204f10.jpg'),
(26, 3, 'SHUT OUT', 'Garden', 'images/gallary/1539598253h1.jpg'),
(27, 3, 'Pahal', 'Garden', 'images/gallary/1539598326h2.jpg'),
(28, 4, 'KISSU', 'antibiotic', 'images/gallary/1539598365a1.jpg'),
(29, 4, 'PRASHU', 'antibiotic', 'images/gallary/1539598392a2.jpg'),
(30, 5, 'Project Title Here', 'bioproducts', 'images/gallary/1539598465b1.jpg'),
(31, 5, 'Spreader', 'bioproducts', 'images/gallary/1539598507b2.jpg'),
(32, 5, 'Super', 'bioproducts', 'images/gallary/1539598526b3.jpg'),
(33, 5, 'TAKU', 'bioproducts', 'images/gallary/1539598554b4.jpg'),
(34, 5, 'Cheeni kum', 'bioproducts', 'images/gallary/1539598602b5.jpg'),
(35, 5, 'SABA', 'bioproducts', 'images/gallary/1539598632b6.jpg'),
(36, 6, 'HUMAX', 'plantgrowth', 'images/gallary/1539598724p1.jpg'),
(37, 6, 'NITRO', 'plantgrowth', 'images/gallary/1539598753p2.jpg'),
(38, 6, 'VIP-95', 'plantgrowth', 'images/gallary/1539598781p3.jpg'),
(39, 6, 'NISROCH', 'plantgrowth', 'images/gallary/1539598810p4.jpg'),
(40, 6, 'DHOOM', 'plantgrowth', 'images/gallary/1539598917p5.jpg'),
(41, 6, 'ISRO', 'plantgrowth', 'images/gallary/1539598962p6.jpg'),
(42, 6, 'p7', 'plantgrowth', 'images/gallary/1539598989p7.jpg'),
(43, 6, 'Glitz', 'plantgrowth', 'images/gallary/1539599014p8.jpg'),
(44, 6, 'HUMAX-G', 'plantgrowth', 'images/gallary/1539599095p9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`id`, `name`) VALUES
(1, 'INSECTICIDES'),
(2, 'FUNGICIDES'),
(3, 'HERBICIDES'),
(4, 'ANTIBIOTIC'),
(5, 'BIOPRODUCTS'),
(6, 'PLANTGROWTH');

-- --------------------------------------------------------

--
-- Table structure for table `reply`
--

CREATE TABLE `reply` (
  `id` int(10) NOT NULL,
  `news_id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `message` longblob NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reply`
--

INSERT INTO `reply` (`id`, `news_id`, `name`, `email`, `phone`, `message`, `date`) VALUES
(1, 2, 'david', 'arm@com', '9980663047', 0x546865207374616e64617264206368756e6b206f66204c6f72656d20497073756d20757365642073696e63652074686520313530307320697320726570726f64756365642062656c6f7720666f722074686f736520696e74657265737465642e2053656374696f6e7320312e31302e333220616e6420312e31302e33332066726f6d202264652046696e6962757320426f6e6f72756d206574204d616c6f72756d222062792043696365726f2061726520616c736f20726570726f647563656420696e207468656972206578616374206f726967696e616c20666f726d2c206163636f6d70616e69656420627920456e676c6973682076657273696f6e732066726f6d207468652031393134207472616e736c6174696f6e20627920482e205261636b68616d2e, '2018-09-19 10:31:26'),
(2, 2, 'Mecovet XL', 'arm@com', '9980663047', 0x546865207374616e64617264206368756e6b206f66204c6f72656d20497073756d20757365642073696e63652074686520313530307320697320726570726f64756365642062656c6f7720666f722074686f736520696e74657265737465642e2053656374696f6e7320312e31302e333220616e6420312e31302e33332066726f6d202264652046696e6962757320426f6e6f72756d206574204d616c6f72756d222062792043696365726f2061726520616c736f20726570726f647563656420696e207468656972206578616374206f726967696e616c20666f726d2c206163636f6d70616e69656420627920456e676c6973682076657273696f6e732066726f6d207468652031393134207472616e736c6174696f6e20627920482e205261636b68616d2e0d0a0d0a, '2018-09-19 10:38:03'),
(3, 2, 'latifur 15', 'patna@com', '9980663047', 0x546865207374616e64617264206368756e6b206f66204c6f72656d20497073756d20757365642073696e63652074686520313530307320697320726570726f64756365642062656c6f7720666f722074686f736520696e74657265737465642e2053656374696f6e7320312e31302e333220616e6420312e31302e33332066726f6d202264652046696e6962757320426f6e6f72756d206574204d616c6f72756d222062792043696365726f2061726520616c736f20726570726f647563656420696e207468656972206578616374206f726967696e616c20666f726d2c206163636f6d70616e69656420627920456e676c6973682076657273696f6e732066726f6d207468652031393134207472616e736c6174696f6e20627920482e205261636b68616d2e0d0a0d0a, '2018-09-19 10:38:21');

-- --------------------------------------------------------

--
-- Table structure for table `reply_message`
--

CREATE TABLE `reply_message` (
  `id` int(10) NOT NULL,
  `reply_id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `message` longblob NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reply_message`
--

INSERT INTO `reply_message` (`id`, `reply_id`, `name`, `mobile`, `message`, `date`) VALUES
(1, 1, 'vikki', '7787667898', 0x646463206665, '2018-09-24'),
(2, 2, 'aa', '8876776789', 0x6363206262, '2018-09-24'),
(3, 3, 'ff', '7787667898', 0x7676, '2018-09-24'),
(8, 3, 'KOL-L', '7787667898', 0x6b2061686f, '2018-09-26');

-- --------------------------------------------------------

--
-- Table structure for table `slider1`
--

CREATE TABLE `slider1` (
  `id` int(10) NOT NULL,
  `image` longblob NOT NULL,
  `title` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `detail` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider1`
--

INSERT INTO `slider1` (`id`, `image`, `title`, `name`, `detail`) VALUES
(1, 0x696d616765732f736c696465722f313533393433323134365f312e6a7067, 'AN ISO 9001 : 2015 CERTIFIED COMPANY', 'NISROCH CHEMICALS PVT. LTD.', 'Plants Mayor Creates Better Crops'),
(2, 0x696d616765732f736c696465722f313533393433323136305f322e6a7067, 'AN ISO 9001 : 2015 CERTIFIED COMPANY', 'NISROCH CHEMICALS PVT. LTD.', 'Plants Mayor Creates Better Crops');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(10) NOT NULL,
  `image` longblob NOT NULL,
  `name` varchar(100) NOT NULL,
  `post` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `image`, `name`, `post`) VALUES
(1, 0x696d616765732f746561636865722f313533373138373036317465616d2d312e6a7067, 'A', 'English Teacher'),
(2, 0x696d616765732f746561636865722f313533373138373134377465616d2d322e6a7067, 'B', 'Math Teacher'),
(3, 0x696d616765732f746561636865722f313533373138373139337465616d2d332e6a7067, 'C', 'Science Teacher'),
(4, 0x696d616765732f746561636865722f313533373138373239317465616d2d342e6a7067, 'D', 'Music Teacher'),
(5, 0x696d616765732f746561636865722f313533373138373339327465616d2d332e6a7067, 'E', 'PT Teacher');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `post` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `name`, `post`, `image`) VALUES
(1, 'swati kumari', 'lab incharge', 'images/gallary/15403722343.jpg'),
(2, 'rohit kumar', 'marketing manager', 'images/gallary/15403723811.jpg'),
(3, 'Rajesh Kumar', 'production incharge', 'images/gallary/15403724174.jpg'),
(4, 'suresh singh', 'marketing excutive', 'images/gallary/15403724782.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `message` longtext NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `name`, `designation`, `message`, `status`) VALUES
(1, 'Rahul', 'Farmer', 'Nisroch Chemicals has a wide range of products for Insecticides, Herbicides, Fungicdes and Plant Growth Regulator.', 1),
(2, 'Sonu', 'Farmer', 'Nisroch Chemicals products are of very good quality and it help me to creates better crops. ', 0);

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(10) NOT NULL,
  `url` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `url`) VALUES
(1, 'vxaY6ppCyOM'),
(2, 'vxaY6ppCyOM'),
(3, 'vxaY6ppCyOM'),
(4, 'vxaY6ppCyOM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admission`
--
ALTER TABLE `admission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `awards`
--
ALTER TABLE `awards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_now`
--
ALTER TABLE `book_now`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flash`
--
ALTER TABLE `flash`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `house`
--
ALTER TABLE `house`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `periodic`
--
ALTER TABLE `periodic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reply`
--
ALTER TABLE `reply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reply_message`
--
ALTER TABLE `reply_message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider1`
--
ALTER TABLE `slider1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admission`
--
ALTER TABLE `admission`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `awards`
--
ALTER TABLE `awards`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `book_now`
--
ALTER TABLE `book_now`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `flash`
--
ALTER TABLE `flash`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `house`
--
ALTER TABLE `house`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `periodic`
--
ALTER TABLE `periodic`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `reply`
--
ALTER TABLE `reply`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reply_message`
--
ALTER TABLE `reply_message`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `slider1`
--
ALTER TABLE `slider1`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
