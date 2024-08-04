-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2024 at 03:00 PM
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
-- Database: `cap_details`
--

-- --------------------------------------------------------

--
-- Table structure for table `carttable`
--

CREATE TABLE `carttable` (
  `CartNumber` int(11) NOT NULL,
  `ItemId` varchar(10) NOT NULL,
  `UserName` varchar(75) NOT NULL,
  `Size` varchar(10) NOT NULL,
  `Quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `carttable`
--

INSERT INTO `carttable` (`CartNumber`, `ItemId`, `UserName`, `Size`, `Quantity`) VALUES
(4, 'SK:010', 'z1@gamil.com', 'Small', 1);

-- --------------------------------------------------------

--
-- Table structure for table `itemtable`
--

CREATE TABLE `itemtable` (
  `ItemId` varchar(10) NOT NULL,
  `ItemName` varchar(100) NOT NULL,
  `Description` varchar(250) NOT NULL,
  `Price` int(11) NOT NULL,
  `ListingDate` date NOT NULL,
  `ImagePath` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `itemtable`
--

INSERT INTO `itemtable` (`ItemId`, `ItemName`, `Description`, `Price`, `ListingDate`, `ImagePath`) VALUES
('SK:001', 'RAW Head Cap for Men', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quae, voluptates ratione, a consequatur suscipit architecto molestiae vero quod autem facilis voluptatibus deserunt natus non fugit eius eligendi odio ex ea?', 999, '2024-01-01', 'cap-images/limited-edition/1.webp'),
('SK:002', 'RAW Unisex Cap', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quae, voluptates ratione, a consequatur suscipit architecto molestiae vero quod autem facilis voluptatibus deserunt natus non fugit eius eligendi odio ex ea?', 499, '2024-10-26', 'cap-images/limited-edition/2.webp'),
('SK:003', 'RAW Brand Black Cotton', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quae, voluptates ratione, a consequatur suscipit architecto molestiae vero quod autem facilis voluptatibus deserunt natus non fugit eius eligendi odio ex ea?', 899, '2024-10-04', 'cap-images/limited-edition/3.webp'),
('SK:004', 'RAW Unisex Adult Cap', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quae, voluptates ratione, a consequatur suscipit architecto molestiae vero quod autem facilis voluptatibus deserunt natus non fugit eius eligendi odio ex ea?', 249, '2024-12-21', 'cap-images/limited-edition/4.webp'),
('SK:005', 'Unisex Denim Cap Water Resistance', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quae, voluptates ratione, a consequatur suscipit architecto molestiae vero quod autem facilis voluptatibus deserunt natus non fugit eius eligendi odio ex ea?', 399, '2024-02-27', 'cap-images/limited-edition/5.webp'),
('SK:006', 'RAW Brand A Soft Cap', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quae, voluptates ratione, a consequatur suscipit architecto molestiae vero quod autem facilis voluptatibus deserunt natus non fugit eius eligendi odio ex ea?', 499, '2024-04-01', 'cap-images/limited-edition/6.webp'),
('SK:007', 'RAW Baseball Unisex', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quae, voluptates ratione, a consequatur suscipit architecto molestiae vero quod autem facilis voluptatibus deserunt natus non fugit eius eligendi odio ex ea?', 149, '2024-07-11', 'cap-images/limited-edition/7.webp'),
('SK:008', 'RAW Cap For Unisex', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quae, voluptates ratione, a consequatur suscipit architecto molestiae vero quod autem facilis voluptatibus deserunt natus non fugit eius eligendi odio ex ea?', 999, '2024-08-17', 'cap-images/limited-edition/8.webp'),
('SK:009', 'RAW Baseball Cap', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quae, voluptates ratione, a consequatur suscipit architecto molestiae vero quod autem facilis voluptatibus deserunt natus non fugit eius eligendi odio ex ea?', 999, '2024-04-07', 'cap-images/limited-edition/9.webp'),
('SK:010', 'RAW Plain Baseball Sport Cap', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quae, voluptates ratione, a consequatur suscipit architecto molestiae vero quod autem facilis voluptatibus deserunt natus non fugit eius eligendi odio ex ea?', 149, '2024-04-02', 'cap-images/limited-edition/10.webp'),
('SK:011', 'RAW Baseball Unisex', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quae, voluptates ratione, a consequatur suscipit architecto molestiae vero quod autem facilis voluptatibus deserunt natus non fugit eius eligendi odio ex ea?', 899, '2024-09-27', 'cap-images/limited-edition/11.webp'),
('SK:012', 'RAW Plain Baseball Sport Cap', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quae, voluptates ratione, a consequatur suscipit architecto molestiae vero quod autem facilis voluptatibus deserunt natus non fugit eius eligendi odio ex ea?', 799, '2024-10-03', 'cap-images/limited-edition/12.webp'),
('SK:013', 'RAW Brand A Soft Cap', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quae, voluptates ratione, a consequatur suscipit architecto molestiae vero quod autem facilis voluptatibus deserunt natus non fugit eius eligendi odio ex ea?', 299, '2024-10-27', 'cap-images/limited-edition/13.webp'),
('SK:014', 'RAW Brand A Soft Cap', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quae, voluptates ratione, a consequatur suscipit architecto molestiae vero quod autem facilis voluptatibus deserunt natus non fugit eius eligendi odio ex ea?', 249, '2024-01-05', 'cap-images/limited-edition/14.webp'),
('SK:015', 'RAW Brand A Soft Cap', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quae, voluptates ratione, a consequatur suscipit architecto molestiae vero quod autem facilis voluptatibus deserunt natus non fugit eius eligendi odio ex ea?', 399, '2024-03-03', 'cap-images/limited-edition/15.webp'),
('SK:016', 'RAW Brand A Soft Cap', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quae, voluptates ratione, a consequatur suscipit architecto molestiae vero quod autem facilis voluptatibus deserunt natus non fugit eius eligendi odio ex ea?', 149, '2024-05-14', 'cap-images/limited-edition/16.webp');

-- --------------------------------------------------------

--
-- Table structure for table `ordertable`
--

CREATE TABLE `ordertable` (
  `OrderNumber` int(11) NOT NULL,
  `ItemId` varchar(10) NOT NULL,
  `UserName` varchar(75) NOT NULL,
  `OrderDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `UserName` varchar(75) NOT NULL,
  `UserPassword` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`UserName`, `UserPassword`) VALUES
('z1@gamil.com', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carttable`
--
ALTER TABLE `carttable`
  ADD PRIMARY KEY (`CartNumber`),
  ADD KEY `ItemId` (`ItemId`),
  ADD KEY `UserName` (`UserName`);

--
-- Indexes for table `itemtable`
--
ALTER TABLE `itemtable`
  ADD PRIMARY KEY (`ItemId`);

--
-- Indexes for table `ordertable`
--
ALTER TABLE `ordertable`
  ADD PRIMARY KEY (`OrderNumber`),
  ADD KEY `ItemId` (`ItemId`),
  ADD KEY `UserName` (`UserName`);

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`UserName`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carttable`
--
ALTER TABLE `carttable`
  MODIFY `CartNumber` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ordertable`
--
ALTER TABLE `ordertable`
  MODIFY `OrderNumber` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carttable`
--
ALTER TABLE `carttable`
  ADD CONSTRAINT `carttable_ibfk_1` FOREIGN KEY (`ItemId`) REFERENCES `itemtable` (`ItemId`),
  ADD CONSTRAINT `carttable_ibfk_2` FOREIGN KEY (`UserName`) REFERENCES `usertable` (`UserName`);

--
-- Constraints for table `ordertable`
--
ALTER TABLE `ordertable`
  ADD CONSTRAINT `ordertable_ibfk_1` FOREIGN KEY (`ItemId`) REFERENCES `itemtable` (`ItemId`),
  ADD CONSTRAINT `ordertable_ibfk_2` FOREIGN KEY (`UserName`) REFERENCES `usertable` (`UserName`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
