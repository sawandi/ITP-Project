-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2019 at 08:50 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `animalcare`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `AppointmentId` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `service` varchar(100) NOT NULL,
  `petage` int(11) DEFAULT NULL,
  `petgender` varchar(10) DEFAULT NULL,
  `adate` date NOT NULL,
  `atime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`AppointmentId`, `UserId`, `firstname`, `lastname`, `email`, `service`, `petage`, `petgender`, `adate`, `atime`) VALUES
(2, 112, 'Pramoda', 'sandaraenu', 'meda@gmail.com', 'vaccine', 4, 'male', '2019-08-24', '13:00:00'),
(3, 111, 'hasini', 'piyumali', 'meda@gmail.com', 'scan', 4, 'female', '2019-08-31', '13:00:00'),
(6, 111, 'sawandi', 'udeshitha', 'sawa1997@gmail.com', 'scan', 1, 'female', '2019-12-01', '13:00:00'),
(7, 113, 'Pramoda', 'Sandarenu', 'p@gmail.com', 'vaccine', 1, 'male', '2019-10-02', '15:45:00'),
(8, 115, 'Pumudi', 'Jaya', 'pumu@gmail.com', 'scan', 2, 'Female', '2019-10-05', '12:15:00');

-- --------------------------------------------------------

--
-- Table structure for table `carddetails`
--

CREATE TABLE `carddetails` (
  `CardId` int(11) NOT NULL,
  `PetOwnerId` int(11) NOT NULL,
  `CardNumber` int(11) NOT NULL,
  `CVVCode` int(11) NOT NULL,
  `BankName` varchar(20) NOT NULL,
  `ExpireDate` date NOT NULL,
  `CardType` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carddetails`
--

INSERT INTO `carddetails` (`CardId`, `PetOwnerId`, `CardNumber`, `CVVCode`, `BankName`, `ExpireDate`, `CardType`) VALUES
(1, 112, 1, 125, 'boc', '2019-08-30', 'debit'),
(2, 112, 123456, 789, 'boc', '2019-08-24', 'debit'),
(3, 112, 7, 525478, 'boc', '2019-09-08', 'debit'),
(4, 113, 1444, 444, 'BOC', '2019-10-02', 'Debit');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created`, `modified`) VALUES
(1, 'Dog Food', '2019-08-21 00:35:07', '2019-08-21 12:04:33'),
(2, 'Cat Food', '2019-08-21 00:35:07', '2019-08-21 12:04:33'),
(3, 'Vitamins & Supplements', '2019-08-21 00:35:07', '2019-08-21 12:04:54'),
(4, 'Shampoo & Soap', '2019-08-20 00:35:07', '2019-08-21 12:04:33'),
(5, 'Collars & Leashes', '2019-08-20 00:35:07', '2019-08-21 12:04:33'),
(6, 'Pet Ornaments', '2019-08-20 00:35:07', '2019-08-21 12:04:54');

-- --------------------------------------------------------

--
-- Table structure for table `medicalreports`
--

CREATE TABLE `medicalreports` (
  `ReportId` int(11) NOT NULL,
  `PetId` int(11) NOT NULL,
  `Date` date NOT NULL,
  `ServiceType` varchar(20) NOT NULL,
  `Status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicalreports`
--

INSERT INTO `medicalreports` (`ReportId`, `PetId`, `Date`, `ServiceType`, `Status`) VALUES
(3, 2, '2019-08-31', 'Lab Service', 1),
(4, 6, '2019-10-04', 'OPD', 1),
(5, 7, '2019-10-03', 'Surgery', 1),
(6, 8, '2019-10-02', 'Vaccinations', 1),
(7, 8, '2019-09-02', 'OPD', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `OrderId` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `address` text NOT NULL,
  `amount` double DEFAULT NULL,
  `ddate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`OrderId`, `UserId`, `fullname`, `email`, `phone`, `address`, `amount`, `ddate`) VALUES
(1, 78, 'fgh', 'abc@gmail.com', '0776785432', 'fghi', 52, '2019-08-16'),
(2, 110, 'sawandi udeshitha', 'meda@gmail.com', '0776785432', 'matara', 52, '2019-08-24'),
(6, 112, 'sawandi udeshitha', 'meda@gmail.com', '0718671943', 'matara', 1200, '2019-08-10');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `PaymentId` int(11) NOT NULL,
  `Amount` double NOT NULL,
  `AppoinmentId` int(11) DEFAULT NULL,
  `OrderId` int(11) DEFAULT NULL,
  `CardId` int(11) DEFAULT NULL,
  `Type` varchar(20) NOT NULL,
  `AccountNo` int(11) DEFAULT NULL,
  `AccountName` varchar(20) DEFAULT NULL,
  `CustomerName` varchar(50) NOT NULL,
  `Date` date NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`PaymentId`, `Amount`, `AppoinmentId`, `OrderId`, `CardId`, `Type`, `AccountNo`, `AccountName`, `CustomerName`, `Date`, `status`) VALUES
(1, 1256, NULL, NULL, NULL, '', 123455, 'savings', '', '0000-00-00', 0),
(2, 1000, NULL, NULL, NULL, '', 123654, 'debit', '', '0000-00-00', 0),
(3, 500, NULL, NULL, NULL, '', NULL, NULL, 'pramoo', '2019-08-24', 1),
(4, 1200, NULL, NULL, NULL, '', 2147483647, 'savings', '', '0000-00-00', 0),
(5, 1000, NULL, NULL, NULL, '', NULL, NULL, 'pramoo', '2019-09-18', 0),
(6, 600, NULL, NULL, NULL, '', 2147483647, 'debit', '', '0000-00-00', 0),
(7, 450, NULL, NULL, NULL, '', 1345456757, 'debit', '', '0000-00-00', 0),
(8, 600, NULL, NULL, NULL, '', 123456100, 'savings', '', '0000-00-00', 0),
(9, 1000, NULL, NULL, NULL, '', 800700500, 'debit', '', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `petadvertisement`
--

CREATE TABLE `petadvertisement` (
  `id` int(10) NOT NULL,
  `cust_name` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `PetDescription` varchar(200) NOT NULL,
  `PetImage` blob NOT NULL,
  `staus` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petadvertisement`
--

INSERT INTO `petadvertisement` (`id`, `cust_name`, `phone`, `email`, `PetDescription`, `PetImage`, `staus`) VALUES
(1, 'sawandi', '0712345678', 'sawa@gmail.com', 'dog', '', 1),
(3, 'cchcgh', '45878', 'sf@gmail.com', 'dgfhjfhgjghj', '', 0),
(5, 'Britney', '0112223456', 'btni4@gmail.com', 'healthy dog', '', 0),
(6, 'Hasini', '0412289765', 'h@gmail.com', 'good health conditions', '', 0),
(7, 'sawandi', '0721456765', 'sawa@gmail.com', 'good health conditions', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `petowners`
--

CREATE TABLE `petowners` (
  `UserId` int(10) NOT NULL,
  `Fname` varchar(20) NOT NULL,
  `Lname` varchar(20) NOT NULL,
  `NIC` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone` varchar(10) NOT NULL,
  `Status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petowners`
--

INSERT INTO `petowners` (`UserId`, `Fname`, `Lname`, `NIC`, `Email`, `Phone`, `Status`) VALUES
(110, 'Sawandi', 'Udeshitha', '199759600269', 'sun@gmail.com', '0412264852', 1),
(111, 'Sawandi', 'naotunna', '9759600269', 'sawandi@gmail.com', '0711319382', 1),
(112, 'Pramoda', 'sandaraenu', '19960934', 'pr@gmail.com', '0413765456', 1),
(113, 'Pramoda', 'Sandarenu', '199646', 'ps@gmail.com', '0412265790', 1),
(114, 'Meedu', 'ranagala', '19961209876', 'meedu@gmail.com', '0756784356', 1),
(115, 'Pumudi', 'Jaya', '9878909755', 'pumu@gmail.com', '0715678654', 1),
(116, 'Pumudi', 'Jayawardhana', '19960501', 'pumujaya51@gmail.com', '0723443212', 1),
(117, 'suneth', 'chinthaka', '96052525252', 'sdfs@sdfsd.com', '0716767676', 1),
(118, 'Pramoda', 'Hewage', '199646v', 'h@gmail.com', '0415672345', 1),
(119, 'Yashodara', 'Pramodi', '19971007', 'yp@gmail.com', '0412254240', 1),
(120, 'Sisara', 'Tharaka', '19920120', 'sisara@gmail.com', '0718123467', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pets`
--

CREATE TABLE `pets` (
  `PetId` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `PetName` varchar(20) NOT NULL,
  `Breed` varchar(20) NOT NULL,
  `Age` int(11) NOT NULL,
  `Colour` varchar(20) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Species` varchar(5) NOT NULL,
  `Status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pets`
--

INSERT INTO `pets` (`PetId`, `UserId`, `PetName`, `Breed`, `Age`, `Colour`, `Gender`, `Species`, `Status`) VALUES
(1, 111, 'Roxy', 'Lion Shepard', 12, 'brown', 'male', 'Cat', 0),
(2, 111, 'kitty', 'Perseon', 1, 'brown', 'Female', '', 0),
(3, 111, 'Boxer', 'Lion shepard', 1, 'white', 'male', 'Speci', 1),
(4, 116, 'Whity', 'Fomanarian', 12, 'white', 'male', 'Dog', 1),
(5, 112, 'Pinky', 'Fomanarian', 10, 'White', 'female', 'Dog', 1),
(6, 112, 'Blinky', 'Jermon Shepard', 15, 'black', 'male', 'Dog', 1),
(7, 114, 'rafael', 'alsesion', 12, 'brown', 'female', 'Dog', 1),
(8, 111, 'Kin', 'Persian', 12, 'Brown', 'female', 'Cat', 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(7,2) NOT NULL,
  `category_id` int(11) NOT NULL,
  `rrp` decimal(7,2) DEFAULT '0.00',
  `quantity` int(11) DEFAULT NULL,
  `image` blob NOT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `category_id`, `rrp`, `quantity`, `image`, `created`, `modified`) VALUES
(46, 'My Beau Skin &amp; Hair Shampoo', 'Supplement Quantity: 300 ml Suitable for: both cats &amp; dogs. For the support of healthy skin &amp; hair. Amino Acids support the strengthening of hair.', '600.00', 4, '700.00', 10, 0x663736373837653864623966643139393164303336633064383533313333323631323334333561382d6d792d626561752d736b696e2d686169722e6a7067, '2019-08-21 05:15:47', '2019-08-21 03:15:47'),
(51, 'Bones Up', 'A mineral &amp; vitamin supplement for pet dogs and cats in all ages including pregnant &amp; lactating and all breeds. Rich in Calcium.', '400.00', 3, '0.00', 50, 0x313933363764313663646331643931326633363238333062633837643532666264306662313832642d626f6e65732075702e6a7067, '2019-08-21 08:23:07', '2019-08-21 06:23:07'),
(44, 'Whiskas Mackeral 85 g ', '100 percent complete nutrition for cats. With ta urine to help support a healthy heart , natural oils for a shiny coat and vitamin A for perfect eye.', '120.00', 2, '0.00', 10, 0x616638363866383564666665303033343463346361363231353066613139353132626532383961382d576869736b61732e6a7067, '2019-08-21 05:05:57', '2019-08-21 03:05:57'),
(43, 'Black Hawk Adult Lamb &amp; Rice', 'Black Hawk Adult Lamb &amp; Rice is highly palatable and digestible all Australian free-range lamb and rice formula is an excellent source of protein rich in zinc and iron.', '2000.00', 1, '0.00', 650, 0x386233323234663731386430303063306339646535626331383636366333373734346164646664622d42482d4c616d622e6a7067, '2019-08-21 05:03:10', '2019-08-21 03:03:10'),
(42, 'Drools Puppy Starter', '100% nutrition, Organic Minerals, Better digestibility and Health, DHA for smarter and stronger puppy.', '2500.00', 1, '0.00', 100, 0x313337366330643561343033353737393938316138373739646137303137353131316565306433662d44726f6f6c732e6a7067, '2019-08-21 05:00:36', '2019-08-21 03:00:36'),
(58, 'Red Leashes', 'Dog Leashes with Dog Watch graphic on navy ribbon on assorted color nylon. Leashes are 6\' Long.  These leashes machine wash well and are very durable.', '900.00', 6, '0.00', 45, 0x653637333737643030303963383463303733373032386463323064613531356432376333353631622d726564206c6561736865732e6a7067, '2019-08-25 08:49:34', '2019-08-25 06:49:34'),
(47, 'Fur Up Shampoo', 'Herbal shampoo which gives a pet a tangle-free dazzling fur with resistance and repellent to dandruff and eco-parasites. A luxurious blend of herbal oils and vitamins', '400.00', 4, '0.00', 150, 0x313338313466336432653863626331363632613666663564613164316538633736663062333039612d4675722d75702e6a7067, '2019-08-21 05:17:51', '2019-08-21 03:17:51'),
(48, 'Can Can dog shampoo', 'Can-Can is the only 4 in 1 formula in Sri Lanka to have d-phenothrin and keep your dog free from harmful parasites such as Ticks, Fleas and Lice', '590.00', 4, '0.00', 60, 0x386137383734323566333939656164323631316332333731303262633066316430663665643662372d43616e2d43616e2d7368616d706f6f2e706e67, '2019-08-21 05:19:23', '2019-08-21 03:19:23'),
(49, 'Nylon Leash Collar', 'Maintain control while walking your pet with a Pet Safe. Our soft, flexible leashes are available in 6 colors. Choose from 2 length options.', '1400.00', 5, '0.00', 10, 0x633135643837636434653931323030656666666536623136666637336531653766386537613664382d4e796c6f6e2050657420436f6c6c61722e6a7067, '2019-08-21 05:21:22', '2019-08-21 03:21:22'),
(50, 'Pet Dog Cat Cleaning Brush ', 'New Pet Dog Cat Grooming Self Cleaning Brush Comb Hair Fur Shedding Tool.  Material: ABS Stainless steel, Color: Blue, Needle Length.', '900.00', 6, '0.00', 10, 0x633632626136633939633939656466383363316631333935323937353430373965393839363139342d50657420436c65616e696e672042727573682e6a7067, '2019-08-21 05:22:25', '2019-08-21 03:22:25'),
(52, 'Eukanuba Puppy Dog Food', 'Eukanuba is always developing quality dog nutrition to help nurture the best qualities in your favorite companion. Eukanuba is synonymous with pioneering nutritional breakthroughs,', '13100.00', 1, '0.00', 10, 0x316135346438663365333866616265316333386438383461343266363239386261636434396536612d45756b616e7562612e6a7067, '2019-08-22 05:03:57', '2019-08-22 03:03:57'),
(53, 'Scooby dog Tick killer Shampoo', 'For ticks and fleas free healthier skin and fur coat.', '450.00', 4, '0.00', 10, 0x656630666366666236343965306463366537366365636163343761653136383837313766306232632d5469636b2d6b696c6c65722d5368616d706f6f2e706e67, '2019-08-22 15:48:42', '2019-08-22 13:48:42'),
(55, 'Pedigree Adult Meat &amp; Rice', 'PEDIGREE Meat &amp; Rice is a healthy and complete meal for your adult dog, packed with proteins (from meat) &amp; vitamins (from vegetables).', '1800.00', 1, '0.00', 200, 0x363232386564663634383938333935656136633531333761303263383563323063383934313230662d50656469677265652e6a7067, '2019-08-23 00:46:35', '2019-08-22 22:46:35');

-- --------------------------------------------------------

--
-- Table structure for table `productstock`
--

CREATE TABLE `productstock` (
  `ProductId` int(10) NOT NULL,
  `ProductType` varchar(50) NOT NULL,
  `ProductName` varchar(50) NOT NULL,
  `AvailableQTY` int(11) NOT NULL,
  `ReOrderLimit` int(11) NOT NULL,
  `UnitPrice` decimal(7,2) NOT NULL,
  `ExpiredQTY` int(11) NOT NULL,
  `Status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productstock`
--

INSERT INTO `productstock` (`ProductId`, `ProductType`, `ProductName`, `AvailableQTY`, `ReOrderLimit`, `UnitPrice`, `ExpiredQTY`, `Status`) VALUES
(1, 'dog food', 'pedigree', 100, 50, '800.00', 3, 1),
(2, 'Dryfoods', 'Pedigree', 80, 10, '550.00', 5, 1),
(15, 'Cat Food', 'Whiskas  Makeral', 200, 60, '450.00', 3, 1),
(16, 'Cat Food', 'Whiskas  Makeral', 200, 60, '450.00', 3, 1),
(17, 'Dog Shampoo', 'Fur Guard Dog Shampoo', 200, 60, '800.00', 6, 1),
(18, 'Dog Shampoo', 'Fur Guard Dog Shampoo', 200, 60, '800.00', 6, 1),
(19, 'Dryfoods', 'Pedigree', 80, 10, '550.00', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `servicecharges`
--

CREATE TABLE `servicecharges` (
  `ServiceChargeId` int(11) NOT NULL,
  `ServiceId` int(11) NOT NULL,
  `AgeGap` varchar(20) NOT NULL,
  `ServiceCharge` decimal(7,2) NOT NULL,
  `PetType` varchar(20) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `servicecharges`
--

INSERT INTO `servicecharges` (`ServiceChargeId`, `ServiceId`, `AgeGap`, `ServiceCharge`, `PetType`, `status`) VALUES
(4, 2, 'Adult ', '700.00', 'dog', 0),
(5, 1, 'Kitty', '750.00', 'Cat', 0),
(6, 3, 'puppy', '500.00', 'Dog', 0),
(7, 4, 'Adult ', '800.00', 'Dog', 0),
(8, 4, 'Kitty', '1000.00', 'Cat', 0);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `serviceId` int(11) NOT NULL,
  `serviceType` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  `startTime` time NOT NULL,
  `endTime` time NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`serviceId`, `serviceType`, `description`, `startTime`, `endTime`, `status`) VALUES
(1, 'General HealthChecku', 'tick and flea treatments8', '08:00:00', '13:00:00', 0),
(2, 'Surgery', 'All surgeries', '08:00:00', '13:00:00', 0),
(3, 'Lab Service', 'blood report', '08:00:00', '13:00:00', 0),
(4, 'Vaccinations', 'parvo virus', '09:55:00', '16:55:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `staffdetails`
--

CREATE TABLE `staffdetails` (
  `StaffId` int(11) NOT NULL,
  `NIC` varchar(20) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `EmailAddress` varchar(50) NOT NULL,
  `PhoneNumber` varchar(20) NOT NULL,
  `Qualification` varchar(200) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `UserType` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staffdetails`
--

INSERT INTO `staffdetails` (`StaffId`, `NIC`, `FirstName`, `LastName`, `EmailAddress`, `PhoneNumber`, `Qualification`, `Gender`, `UserType`) VALUES
(5, '199651', 'Punsala', 'nima', 'nima@gmail.com', '011459865', 'BSC gedree', 'male', 'Receptionist'),
(6, '196545676', 'Dil', 'piyumali', 'd1@gmail', '0672343212', 'BSC gedree', 'male', 'Receptionist'),
(8, '67812345', 'shalinka', 'wikramathilaka', 'cdf@gmail', '0718671943', 'BSC degree', 'male', 'Receptionist'),
(9, '19987865', 'shamina', 'wikramathilaka', 'shami@gmail.com', '09845673', 'BSC gedree', 'female', 'Admin'),
(10, '20076578987', 'Imaliaa', 'sandaruwani', 'ima@gmail.com', '0712978654', 'bsc degree', 'female', 'Receptionist'),
(11, '19971100', 'Tharushi', 'Himasha', 'tharu@gmail.com', '041456723', 'wet degree', 'female', 'Admin'),
(12, '199885643v', 'ranruwinira', 'mati', 'ran@gmail.com', '0432167890', 'BSC gedree', 'female', 'Admin'),
(13, '19971010', 'shalinka', 'wikramathilaka', 'shaliiii@gmail.com', '0412222225', 'bsc degree', 'female', 'Admin'),
(14, '20000405', 'Dinith', 'Deshitha', 'dd@gmail.com', '0712345132', 'wet degree', 'male', 'Admin'),
(15, '19970120v', 'Hasini', 'piyumali', 'piyu@gmail.com', '041220891', 'BSC gedree', 'female', 'Receptionist'),
(16, '19950607', 'Maduransi', 'Kawshala', 'madu@gmail.com', '0716745698', 'wet degree', 'female', 'Receptionist'),
(17, '977172744V', 'Tharushi', 'Himasha', 'tharushi23@gmail.com', '0714476415', 'BSc', 'female', 'Admin'),
(18, '977172744V', 'Tharushi', 'Himasha', 'tharushi23@gmail.com', '0714476415', 'BSc', '', 'Admin'),
(19, '977172744V', 'Tharushi', 'Himasha', 'tharushi23@gmail.com', '0714476415', 'BSc', 'female', 'Admin'),
(20, '977172744V', 'Tharushi', 'Himasha', 'tharushi23@gmail.com', '0714476415', 'BSc', '', 'Admin'),
(21, '977172744V', 'Tharushi', 'Himasha', 'tharushi23@gmail.com', '0714476415', 'BSc', 'female', 'Admin'),
(22, '977172744V', 'Tharushi', 'Himasha', 'tharushi23@gmail.com', '0714476415', 'BSc', 'female', 'Admin'),
(23, '977172744V', 'Tharushi', 'Himasha', 'tharushi23@gmail.com', '0714476415', 'BSc', 'female', 'Admin'),
(24, '977172744V', 'Tharushi', 'Himasha', 'tharushi23@gmail.com', '0714476415', 'BSc', 'female', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `systamaticvaccinatedetails`
--

CREATE TABLE `systamaticvaccinatedetails` (
  `VaccinateId` int(11) NOT NULL,
  `PetId` int(11) NOT NULL,
  `LastVaccineId` int(11) NOT NULL,
  `LastVaccinateDate` date NOT NULL,
  `NextVaccineId` int(11) NOT NULL,
  `NextVaccinateDate` date NOT NULL,
  `NextVaccineCharge` decimal(7,2) NOT NULL,
  `NextVaccinationTime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `systamaticvaccinatedetails`
--

INSERT INTO `systamaticvaccinatedetails` (`VaccinateId`, `PetId`, `LastVaccineId`, `LastVaccinateDate`, `NextVaccineId`, `NextVaccinateDate`, `NextVaccineCharge`, `NextVaccinationTime`) VALUES
(4, 1, 2, '2019-08-02', 2, '2020-04-04', '650.00', '09:20:00'),
(6, 3, 2, '2019-08-24', 3, '2019-09-21', '500.00', '13:00:00'),
(7, 3, 3, '2019-10-01', 2, '2020-05-10', '650.00', '10:15:00'),
(11, 4, 3, '2019-10-04', 3, '2020-11-05', '500.00', '00:00:00'),
(17, 4, 2, '2019-10-12', 3, '2020-03-14', '500.00', '11:05:00'),
(18, 3, 8, '2019-10-05', 7, '2020-05-16', '700.00', '10:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `userlogindetails`
--

CREATE TABLE `userlogindetails` (
  `UserId` int(11) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(1000) NOT NULL,
  `UserType` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlogindetails`
--

INSERT INTO `userlogindetails` (`UserId`, `Username`, `Password`, `UserType`) VALUES
(6, 'dil', 'dil', 'Receptionist'),
(111, 'sun97', '5e6dfc2d7d4d675da7773804cec2ac4052a48ab4e533b0173e8e8db97cce88b7cb3a0479098994d3f4c3adc734f6a33e0ae4ca1dae9d6d070f6703875428719c', 'Pet Owner'),
(8, 'shali', '', 'Receptionist'),
(9, 'shami', '', 'Admin'),
(112, 'pr123', 'bf12fd98aa1a4f3bb554b24d283afe6cad28c2d9ad9af2ba1bae1e4de7ff5bda7b2a78b9d591da25659830d9b6021de84e7925ca2111757d57e5501bda92d7d2', 'Pet Owner'),
(10, 'ima', '0367cb1cd0ccc44075eb77e5c133fc3c08a92f59cb735bdc0e3dc4e9d956d1828267315e8e111357a0367db31e97184d9a1aac4fd55ec8e8b5bfa54df64107b7', 'Receptionist'),
(11, 'tharu', '', 'Admin'),
(12, 'mati', 'db34d49cebe2b28ea3c1edd244620a63d5da48fcff171e0a0345b3ff0509697ee443841f855f6b7f5037e1d0451e0b00d039beb833d2627a95dbd38750c5712f', 'Admin'),
(113, 'ps123', '44dfbab4deebc73a0fccbcb3e7464d0beed6d1226587ce6f8598ac001ae060c2c38546897171897a160c14219b18d11f657d93a30a256ce7e6517f7940a9dc9c', 'Pet Owner'),
(114, 'meedumi', 'd3dca5315bd61a59b64cc91f05ecc818ece7d606502f8271da74b791d78e40050b2a885227ece590b3cbbea10de4cdb3789733a0e97ced96b19f317579c2fa92', 'Pet Owner'),
(115, 'pumu', 'b6d7287418e4c4efc4aa1eef59d77563faa98234cbc6445441de2e09242f3d8d9f7014c4f4aa334320de9b21cba42e13c998f1f5679c71f1e5bfb8a069dc7879', 'Pet Owner'),
(116, 'pumudi51', '9274adf5c347bfd699ce10b766d1313b58688826b8d2fc02676df97bcc69d152a36ac94bf8e7c31a31ee4caa5a7e5d176ebf9747a5ee33c4c1c8b5aea2214b8f', 'Pet Owner'),
(13, 'shaliw', 'e3afe6c1ead765689e715d4ffeff821496769280daa83fd6c014db1b988339f1806b2bf9db1e7610111c4d06660e192b92c7e7299e1da665d2e57471ba4c8196', 'Admin'),
(14, 'dd', '150990c01ce3198086c91576d323046d5cd72c3846bb006c96ba4bbb2fea819e0c0be618b54da576daca212f10340c57ab2f09b46666f1e2c15056ae77b22527', 'Admin'),
(117, 'suneth', 'cd329d3602055ac8c7ed1342ae31ce01f12c0c6713e7e28d148cf6ea2c10d7b12e95b60ed650a371348bee978c92703ac86bc6cd7f91938bddf1cae6d0ba8e88', 'Pet Owner'),
(15, 'piyu', 'b1e920cb13be84be6f0fa54cb71ebcb72fc1be1c5099e0f5552cef2b45b9d97101b0f4561617c536eb6e9026be1d9fc279f71a2d5c485473d3aded03bc1b1447', 'Receptionist'),
(118, 'hewage', 'f9a05e108e7b495aab0f38c3dce16b6c1262b3202ecccc9fd1836c506c09c719c373a5d9a725c549d053f19ed53e852f7a18bc0efa888df98a7869c03b22c6f2', 'Pet Owner'),
(119, 'yasho', '1a09a642130edb6c994b432a31b4984b5b64455a4ad2457c8d5d8cf081ccc54e75e06ce3ed3efd3098aaa40d6823b0b92e34b3682e8e4be8e586021ccbbe0419', 'Pet Owner'),
(16, 'madu', '4dfae64e1eaf6d20af1c12f0e93e24d890027cb199e6916ba1f8fb5502975e66a56e4f4f3eef31c5f47ccefe61b260a49f7f4beb17de8b6695f5c92a5a038256', 'Receptionist'),
(17, 'IT18143300', 'dfa777198498551680bc94e335f51d385cea689d6ce14fa6d50973ae9d0f93325dacc1f3a32cb4e0a1cc8d95308431e9376e4b949770a8172bf51965e8771b46', 'Admin'),
(17, 'IT18143300', 'dfa777198498551680bc94e335f51d385cea689d6ce14fa6d50973ae9d0f93325dacc1f3a32cb4e0a1cc8d95308431e9376e4b949770a8172bf51965e8771b46', 'Admin'),
(17, 'IT18143300', 'dfa777198498551680bc94e335f51d385cea689d6ce14fa6d50973ae9d0f93325dacc1f3a32cb4e0a1cc8d95308431e9376e4b949770a8172bf51965e8771b46', 'Admin'),
(17, 'IT18143300', 'dfa777198498551680bc94e335f51d385cea689d6ce14fa6d50973ae9d0f93325dacc1f3a32cb4e0a1cc8d95308431e9376e4b949770a8172bf51965e8771b46', 'Admin'),
(17, 'IT18143300', 'dfa777198498551680bc94e335f51d385cea689d6ce14fa6d50973ae9d0f93325dacc1f3a32cb4e0a1cc8d95308431e9376e4b949770a8172bf51965e8771b46', 'Admin'),
(17, 'IT18143300', 'dfa777198498551680bc94e335f51d385cea689d6ce14fa6d50973ae9d0f93325dacc1f3a32cb4e0a1cc8d95308431e9376e4b949770a8172bf51965e8771b46', 'Admin'),
(17, 'IT18143300', 'dfa777198498551680bc94e335f51d385cea689d6ce14fa6d50973ae9d0f93325dacc1f3a32cb4e0a1cc8d95308431e9376e4b949770a8172bf51965e8771b46', 'Admin'),
(17, 'IT18143300', 'dfa777198498551680bc94e335f51d385cea689d6ce14fa6d50973ae9d0f93325dacc1f3a32cb4e0a1cc8d95308431e9376e4b949770a8172bf51965e8771b46', 'Admin'),
(17, 'IT18143300', 'dfa777198498551680bc94e335f51d385cea689d6ce14fa6d50973ae9d0f93325dacc1f3a32cb4e0a1cc8d95308431e9376e4b949770a8172bf51965e8771b46', 'Admin'),
(17, 'IT18143300', 'dfa777198498551680bc94e335f51d385cea689d6ce14fa6d50973ae9d0f93325dacc1f3a32cb4e0a1cc8d95308431e9376e4b949770a8172bf51965e8771b46', 'Admin'),
(17, 'IT18143300', 'dfa777198498551680bc94e335f51d385cea689d6ce14fa6d50973ae9d0f93325dacc1f3a32cb4e0a1cc8d95308431e9376e4b949770a8172bf51965e8771b46', 'Admin'),
(17, 'IT18143300', 'dfa777198498551680bc94e335f51d385cea689d6ce14fa6d50973ae9d0f93325dacc1f3a32cb4e0a1cc8d95308431e9376e4b949770a8172bf51965e8771b46', 'Admin'),
(120, 'sisara', 'f1a1afa909dda8b0906a3d59836201c31f57e3d98378411d79d1472d39cd93442798e80bed1ede1f1738a997885b7c12ea2b0d28abbcfc35d08cc94cab331e6b', 'Pet Owner');

-- --------------------------------------------------------

--
-- Table structure for table `vaccines`
--

CREATE TABLE `vaccines` (
  `VaccineId` int(10) NOT NULL,
  `VaccineName` varchar(30) NOT NULL,
  `Charge` decimal(7,2) NOT NULL,
  `TimePeriod` varchar(20) NOT NULL,
  `Cat` tinyint(1) NOT NULL,
  `Dog` tinyint(1) NOT NULL,
  `Status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vaccines`
--

INSERT INTO `vaccines` (`VaccineId`, `VaccineName`, `Charge`, `TimePeriod`, `Cat`, `Dog`, `Status`) VALUES
(2, 'Rabies', '700.00', ' Anually', 1, 1, 1),
(3, 'Distemper', '500.00', ' 6 weeks', 1, 1, 1),
(7, 'pavo', '700.00', ' Anually', 1, 1, 1),
(8, 'leptospirosis', '600.00', ' Anually', 1, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`AppointmentId`);

--
-- Indexes for table `carddetails`
--
ALTER TABLE `carddetails`
  ADD PRIMARY KEY (`CardId`),
  ADD KEY `PetOwnerId` (`PetOwnerId`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicalreports`
--
ALTER TABLE `medicalreports`
  ADD PRIMARY KEY (`ReportId`),
  ADD KEY `PetId` (`PetId`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`OrderId`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`PaymentId`),
  ADD KEY `AppoinmentId` (`AppoinmentId`),
  ADD KEY `OrderId` (`OrderId`),
  ADD KEY `CardId` (`CardId`);

--
-- Indexes for table `petadvertisement`
--
ALTER TABLE `petadvertisement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `petowners`
--
ALTER TABLE `petowners`
  ADD PRIMARY KEY (`UserId`) USING BTREE;

--
-- Indexes for table `pets`
--
ALTER TABLE `pets`
  ADD PRIMARY KEY (`PetId`),
  ADD KEY `UserId` (`UserId`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productstock`
--
ALTER TABLE `productstock`
  ADD PRIMARY KEY (`ProductId`);

--
-- Indexes for table `servicecharges`
--
ALTER TABLE `servicecharges`
  ADD PRIMARY KEY (`ServiceChargeId`),
  ADD KEY `ServiceId` (`ServiceId`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`serviceId`);

--
-- Indexes for table `staffdetails`
--
ALTER TABLE `staffdetails`
  ADD PRIMARY KEY (`StaffId`);

--
-- Indexes for table `systamaticvaccinatedetails`
--
ALTER TABLE `systamaticvaccinatedetails`
  ADD PRIMARY KEY (`VaccinateId`),
  ADD KEY `PetId` (`PetId`),
  ADD KEY `NextVaccineId` (`NextVaccineId`),
  ADD KEY `LastVaccineId` (`LastVaccineId`);

--
-- Indexes for table `vaccines`
--
ALTER TABLE `vaccines`
  ADD PRIMARY KEY (`VaccineId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `AppointmentId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `carddetails`
--
ALTER TABLE `carddetails`
  MODIFY `CardId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `medicalreports`
--
ALTER TABLE `medicalreports`
  MODIFY `ReportId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `OrderId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `PaymentId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `petadvertisement`
--
ALTER TABLE `petadvertisement`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `petowners`
--
ALTER TABLE `petowners`
  MODIFY `UserId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `pets`
--
ALTER TABLE `pets`
  MODIFY `PetId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `productstock`
--
ALTER TABLE `productstock`
  MODIFY `ProductId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `servicecharges`
--
ALTER TABLE `servicecharges`
  MODIFY `ServiceChargeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `serviceId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `staffdetails`
--
ALTER TABLE `staffdetails`
  MODIFY `StaffId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `systamaticvaccinatedetails`
--
ALTER TABLE `systamaticvaccinatedetails`
  MODIFY `VaccinateId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `vaccines`
--
ALTER TABLE `vaccines`
  MODIFY `VaccineId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carddetails`
--
ALTER TABLE `carddetails`
  ADD CONSTRAINT `carddetails_ibfk_1` FOREIGN KEY (`PetOwnerId`) REFERENCES `petowners` (`UserId`);

--
-- Constraints for table `medicalreports`
--
ALTER TABLE `medicalreports`
  ADD CONSTRAINT `medicalreports_ibfk_1` FOREIGN KEY (`PetId`) REFERENCES `pets` (`PetId`);

--
-- Constraints for table `pets`
--
ALTER TABLE `pets`
  ADD CONSTRAINT `pets_ibfk_1` FOREIGN KEY (`UserId`) REFERENCES `petowners` (`UserId`);

--
-- Constraints for table `servicecharges`
--
ALTER TABLE `servicecharges`
  ADD CONSTRAINT `servicecharges_ibfk_1` FOREIGN KEY (`ServiceId`) REFERENCES `services` (`serviceId`);

--
-- Constraints for table `systamaticvaccinatedetails`
--
ALTER TABLE `systamaticvaccinatedetails`
  ADD CONSTRAINT `systamaticvaccinatedetails_ibfk_1` FOREIGN KEY (`PetId`) REFERENCES `pets` (`PetId`),
  ADD CONSTRAINT `systamaticvaccinatedetails_ibfk_2` FOREIGN KEY (`NextVaccineId`) REFERENCES `vaccines` (`VaccineId`),
  ADD CONSTRAINT `systamaticvaccinatedetails_ibfk_3` FOREIGN KEY (`LastVaccineId`) REFERENCES `vaccines` (`VaccineId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
