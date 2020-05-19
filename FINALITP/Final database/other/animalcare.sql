-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2019 at 06:41 AM
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
-- Table structure for table `appoinments`
--

CREATE TABLE `appoinments` (
  `AppoinmentId` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `PetId` int(11) NOT NULL,
  `DateAndTime` datetime NOT NULL,
  `ServiceId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Table structure for table `medicalreports`
--

CREATE TABLE `medicalreports` (
  `ReportId` int(11) NOT NULL,
  `PetId` int(11) NOT NULL,
  `Date` date NOT NULL,
  `ServiceType` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `OrderId` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `ProductId` int(11) NOT NULL,
  `Amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `AccountName` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(111, 'Sawandi', 'Naotunna', '9759600269', 'sawandi@gmail.com', '0711319382', 1);

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
  `Cat` tinyint(1) NOT NULL,
  `Dog` tinyint(1) NOT NULL,
  `Photo` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pets`
--

INSERT INTO `pets` (`PetId`, `UserId`, `PetName`, `Breed`, `Age`, `Colour`, `Gender`, `Cat`, `Dog`, `Photo`) VALUES
(1, 111, 'Roxy', 'Lion Shepard', 1, 'brown', 'male', 0, 1, ''),
(2, 111, 'kitty', 'Perseon', 1, 'brown', 'Female', 1, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ProductDescriptionId` int(11) NOT NULL,
  `ProductId` int(11) NOT NULL,
  `Description` varchar(200) NOT NULL,
  `Photo` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `UnitPrice` double NOT NULL,
  `ExpiredQTY` int(11) NOT NULL,
  `Status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `servicecharges`
--

CREATE TABLE `servicecharges` (
  `ServiceChargeId` int(11) NOT NULL,
  `ServiceId` int(11) NOT NULL,
  `AgeGap` varchar(20) NOT NULL,
  `ServiceCharge` double NOT NULL,
  `PetType` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `serviceId` int(11) NOT NULL,
  `serviceType` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  `availableTime` datetime NOT NULL,
  `staus` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(4, '199651', 'Punsala', 'nima', 'nima@gmail.com', '011459865', 'BSC gedree', 'male', 'Receptionist'),
(5, '199651', 'Punsala', 'nima', 'nima@gmail.com', '011459865', 'BSC gedree', 'male', 'Receptionist'),
(6, '196545676', 'Dil', 'piyumali', 'd1@gmail', '0672343212', 'BSC gedree', 'male', 'Receptionist'),
(7, '1997596002', 'hasini', 'rangika', 'abc@gmail', '0712345678', 'wet degree', 'female', 'Admin'),
(8, '67812345', 'shalinka', 'wikramathilaka', 'cdf@gmail', '0718671943', 'BSC degree', 'male', 'Receptionist'),
(9, '19987865', 'shamina', 'wikramathilaka', 'shami@gmail.com', '09845673', 'BSC gedree', 'female', 'Admin');

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
  `NextVaccineCharge` double NOT NULL,
  `NextVaccinationTime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `systamaticvaccinatedetails`
--

INSERT INTO `systamaticvaccinatedetails` (`VaccinateId`, `PetId`, `LastVaccineId`, `LastVaccinateDate`, `NextVaccineId`, `NextVaccinateDate`, `NextVaccineCharge`, `NextVaccinationTime`) VALUES
(1, 1, 1, '2019-08-01', 1, '2020-08-01', 650, '00:00:00'),
(2, 2, 1, '2019-08-14', 1, '2020-08-14', 650, '13:15:00');

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
(7, 'hasini123', 'hasini123', 'Admin'),
(8, 'shali', '', 'Receptionist'),
(9, 'shami', '8d7fc1ca63cb9143e2479f6a4810daea1bb0c2fc019a0b2f4e1442079c015782d91091b38e4ff7a94eb8a407e73c9bee472b9511e8aca957d13590ce42959976', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `vaccines`
--

CREATE TABLE `vaccines` (
  `VaccineId` int(10) NOT NULL,
  `VaccineName` varchar(30) NOT NULL,
  `Charge` double NOT NULL,
  `TimePeriod` varchar(20) NOT NULL,
  `Cat` tinyint(1) NOT NULL,
  `Dog` tinyint(1) NOT NULL,
  `Status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vaccines`
--

INSERT INTO `vaccines` (`VaccineId`, `VaccineName`, `Charge`, `TimePeriod`, `Cat`, `Dog`, `Status`) VALUES
(1, 'Rabies', 650, 'Anually', 1, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appoinments`
--
ALTER TABLE `appoinments`
  ADD PRIMARY KEY (`AppoinmentId`),
  ADD KEY `UserId` (`UserId`),
  ADD KEY `PetId` (`PetId`),
  ADD KEY `ServiceId` (`ServiceId`);

--
-- Indexes for table `carddetails`
--
ALTER TABLE `carddetails`
  ADD PRIMARY KEY (`CardId`),
  ADD KEY `PetOwnerId` (`PetOwnerId`);

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
  ADD PRIMARY KEY (`OrderId`),
  ADD KEY `UserId` (`UserId`),
  ADD KEY `ProductId` (`ProductId`);

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
  ADD PRIMARY KEY (`ProductDescriptionId`),
  ADD KEY `ProductId` (`ProductId`);

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
-- AUTO_INCREMENT for table `carddetails`
--
ALTER TABLE `carddetails`
  MODIFY `CardId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `medicalreports`
--
ALTER TABLE `medicalreports`
  MODIFY `ReportId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `OrderId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `PaymentId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `petadvertisement`
--
ALTER TABLE `petadvertisement`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `petowners`
--
ALTER TABLE `petowners`
  MODIFY `UserId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `pets`
--
ALTER TABLE `pets`
  MODIFY `PetId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ProductDescriptionId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `productstock`
--
ALTER TABLE `productstock`
  MODIFY `ProductId` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `servicecharges`
--
ALTER TABLE `servicecharges`
  MODIFY `ServiceChargeId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `serviceId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staffdetails`
--
ALTER TABLE `staffdetails`
  MODIFY `StaffId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `systamaticvaccinatedetails`
--
ALTER TABLE `systamaticvaccinatedetails`
  MODIFY `VaccinateId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vaccines`
--
ALTER TABLE `vaccines`
  MODIFY `VaccineId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appoinments`
--
ALTER TABLE `appoinments`
  ADD CONSTRAINT `appoinments_ibfk_1` FOREIGN KEY (`UserId`) REFERENCES `petowners` (`UserId`),
  ADD CONSTRAINT `appoinments_ibfk_2` FOREIGN KEY (`PetId`) REFERENCES `pets` (`PetId`),
  ADD CONSTRAINT `appoinments_ibfk_3` FOREIGN KEY (`ServiceId`) REFERENCES `services` (`serviceId`);

--
-- Constraints for table `carddetails`
--
ALTER TABLE `carddetails`
  ADD CONSTRAINT `carddetails_ibfk_1` FOREIGN KEY (`PetOwnerId`) REFERENCES `pets` (`UserId`);

--
-- Constraints for table `medicalreports`
--
ALTER TABLE `medicalreports`
  ADD CONSTRAINT `medicalreports_ibfk_1` FOREIGN KEY (`PetId`) REFERENCES `pets` (`PetId`);

--
-- Constraints for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD CONSTRAINT `orderdetails_ibfk_1` FOREIGN KEY (`UserId`) REFERENCES `petowners` (`UserId`),
  ADD CONSTRAINT `orderdetails_ibfk_2` FOREIGN KEY (`ProductId`) REFERENCES `productstock` (`ProductId`);

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_ibfk_1` FOREIGN KEY (`AppoinmentId`) REFERENCES `appoinments` (`AppoinmentId`),
  ADD CONSTRAINT `payments_ibfk_2` FOREIGN KEY (`OrderId`) REFERENCES `orderdetails` (`OrderId`),
  ADD CONSTRAINT `payments_ibfk_3` FOREIGN KEY (`CardId`) REFERENCES `carddetails` (`CardId`);

--
-- Constraints for table `pets`
--
ALTER TABLE `pets`
  ADD CONSTRAINT `pets_ibfk_1` FOREIGN KEY (`UserId`) REFERENCES `petowners` (`UserId`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`ProductId`) REFERENCES `productstock` (`ProductId`);

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
