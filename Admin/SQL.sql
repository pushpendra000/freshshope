-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2021 at 02:21 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_batch6pm`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_adminlogin`
--

CREATE TABLE `tbl_adminlogin` (
  `AdminId` int(11) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_adminlogin`
--

INSERT INTO `tbl_adminlogin` (`AdminId`, `Email`, `Password`) VALUES
(1, 'a@a.com', 'a'),
(2, 'b@b.com', 'b');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blog`
--

CREATE TABLE `tbl_blog` (
  `BlogId` int(11) NOT NULL,
  `CategoyrId` int(11) NOT NULL,
  `Title` varchar(200) NOT NULL,
  `BlogDate` varchar(200) NOT NULL,
  `ShortDescription` varchar(2000) NOT NULL,
  `ShortBanner` varchar(2000) NOT NULL,
  `FullDescription` varchar(2000) NOT NULL,
  `FullBanner` varchar(2000) NOT NULL,
  `Author` varchar(200) NOT NULL,
  `Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_blog`
--

INSERT INTO `tbl_blog` (`BlogId`, `CategoyrId`, `Title`, `BlogDate`, `ShortDescription`, `ShortBanner`, `FullDescription`, `FullBanner`, `Author`, `Status`) VALUES
(1, 35, 'Title ', '01-01-2020', 'Short Description Short Description Short Description Short Description Short Description Short Description Short Description Short Description Short Description ', 'BlogImages/a.jpg', 'Full Description Full Description Full Description Full Description Full Description Full Description Full Description Full Description Full Description Full Description Full Description Full Description Full Description Full Description Full Description Full Description Full Description Full Description Full Description Full Description Full Description Full Description Full Description Full Description Full Description Full Description Full Description Full Description Full Description Full Description Full Description Full Description Full Description Full Description Full Description Full Description Full Description Full Description Full Description Full Description Full Description Full Description Full Description Full Description ', 'BlogImages/a.jpg', 'Shri Ram', 1),
(2, 36, 'Title 11', '01-01-2020', 'Short Description Short Description Short Description Short Description Short Description Short Description Short Description Short Description Short Description ', 'BlogImages/a.jpg', 'Full Description Full Description Full Description Full Description Full Description Full Description Full Description Full Description Full Description Full Description Full Description Full Description Full Description Full Description Full Description Full Description Full Description Full Description Full Description Full Description Full Description Full Description Full Description Full Description Full Description Full Description Full Description Full Description Full Description Full Description Full Description Full Description Full Description Full Description Full Description Full Description Full Description Full Description Full Description Full Description Full Description Full Description Full Description Full Description ', 'BlogImages/a.jpg', 'Shri Ram', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blogcategory`
--

CREATE TABLE `tbl_blogcategory` (
  `CategoryId` int(11) NOT NULL,
  `CategoryName` varchar(200) NOT NULL,
  `PhotoUrl` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_blogcategory`
--

INSERT INTO `tbl_blogcategory` (`CategoryId`, `CategoryName`, `PhotoUrl`) VALUES
(35, 'Category1yu', 'BlogCategory/35.jpg'),
(36, 'Category2sdfsd', 'BlogCategory/36.jpg'),
(38, 'Category6', 'BlogCategory/38.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `CartId` int(11) NOT NULL,
  `ProductId` int(11) NOT NULL,
  `CustomerId` int(11) NOT NULL,
  `Qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`CartId`, `ProductId`, `CustomerId`, `Qty`) VALUES
(14, 1, 1, 1),
(15, 2, 1, 1),
(16, 4, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contactus`
--

CREATE TABLE `tbl_contactus` (
  `ContactId` int(11) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Mobile` varchar(10) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Message` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_contactus`
--

INSERT INTO `tbl_contactus` (`ContactId`, `Name`, `Mobile`, `Email`, `Message`) VALUES
(1, 'abc', '99999eee', 'email', 'asfasdf'),
(2, 'abc', '99999eee', 'email', 'asfasdf');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `CustomerId` int(11) NOT NULL,
  `CustomerName` varchar(200) NOT NULL,
  `Mobile` varchar(12) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`CustomerId`, `CustomerName`, `Mobile`, `Email`, `Password`) VALUES
(1, 'abc', 'a', 'a', 'aaa'),
(2, 'a ji Ji', '1234567890', 'email', 'a'),
(3, 'b', 'b', 'b', 'b');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_newseventcategory`
--

CREATE TABLE `tbl_newseventcategory` (
  `CategoryId` int(11) NOT NULL,
  `CategoryName` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_newseventcategory`
--

INSERT INTO `tbl_newseventcategory` (`CategoryId`, `CategoryName`) VALUES
(1, 'Category1'),
(6, 'Category2'),
(7, 'Category3');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_newsletter`
--

CREATE TABLE `tbl_newsletter` (
  `Id` int(11) NOT NULL,
  `Email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_newsletter`
--

INSERT INTO `tbl_newsletter` (`Id`, `Email`) VALUES
(1, 'a@a.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_notification`
--

CREATE TABLE `tbl_notification` (
  `Id` int(11) NOT NULL,
  `Title` varchar(2000) NOT NULL,
  `Link` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_notification`
--

INSERT INTO `tbl_notification` (`Id`, `Title`, `Link`) VALUES
(1, 'notifiation notifiation notifiation notifiation 1', '#'),
(2, 'notifiation notifiation notifiation notifiation 2', '#'),
(3, 'notifiation notifiation notifiation notifiation 3', '#');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_orderdetails`
--

CREATE TABLE `tbl_orderdetails` (
  `ODId` int(11) NOT NULL,
  `OMID` int(11) NOT NULL,
  `ProductId` int(11) NOT NULL,
  `Qty` int(11) NOT NULL,
  `Price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_orderdetails`
--

INSERT INTO `tbl_orderdetails` (`ODId`, `OMID`, `ProductId`, `Qty`, `Price`) VALUES
(8, 2, 1, 9, 1144),
(9, 2, 2, 1, 112),
(10, 2, 3, 2, 11);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ordermaster`
--

CREATE TABLE `tbl_ordermaster` (
  `OMID` int(11) NOT NULL,
  `CustomerId` int(11) NOT NULL,
  `OrderDate` varchar(200) NOT NULL,
  `TotalAmount` int(11) NOT NULL,
  `TAX` int(11) NOT NULL,
  `Disc` int(11) NOT NULL,
  `NetAmount` int(11) NOT NULL,
  `DA_Name` varchar(200) NOT NULL,
  `DA_Email` varchar(200) NOT NULL,
  `DA_Mobile` varchar(200) NOT NULL,
  `DA_Address` varchar(200) NOT NULL,
  `BA_Name` varchar(200) NOT NULL,
  `BA_Email` varchar(200) NOT NULL,
  `BA_Mobile` varchar(200) NOT NULL,
  `BA_Address` varchar(200) NOT NULL,
  `Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_ordermaster`
--

INSERT INTO `tbl_ordermaster` (`OMID`, `CustomerId`, `OrderDate`, `TotalAmount`, `TAX`, `Disc`, `NetAmount`, `DA_Name`, `DA_Email`, `DA_Mobile`, `DA_Address`, `BA_Name`, `BA_Email`, `BA_Mobile`, `BA_Address`, `Status`) VALUES
(2, 1, '26-08-21', 10430, 0, 0, 10430, 'da name', 'da email', 'da mobile', 'da address', 'ba name', 'ba meial', 'ba mobile', 'ba address', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `ProductId` int(11) NOT NULL,
  `CategoryId` int(11) NOT NULL,
  `ProductName` varchar(200) NOT NULL,
  `PhotoUrl` varchar(200) NOT NULL,
  `Price` int(11) NOT NULL,
  `Qty` int(11) NOT NULL,
  `ShortDescription` varchar(2000) NOT NULL,
  `FullDescription` varchar(2000) NOT NULL,
  `OfferPrice` int(11) NOT NULL,
  `IsOffer` int(11) NOT NULL,
  `IsBlocked` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`ProductId`, `CategoryId`, `ProductName`, `PhotoUrl`, `Price`, `Qty`, `ShortDescription`, `FullDescription`, `OfferPrice`, `IsOffer`, `IsBlocked`) VALUES
(2, 0, 'hdfhd', 'dfsdf', 0, 0, 'Nam sagittis a augue eget scelerisque. Nullam lacinia consectetur sagittis. Nam sed neque id eros fermentum dignissim quis at tortor. Nullam ultricies urna quis sem sagittis pharetra. Nam erat turpis, cursus in ipsum at, tempor imperdiet metus. In interdum id nulla tristique accumsan. Ut semper in quam nec pretium. Donec egestas finibus suscipit. Curabitur tincidunt convallis arcu.', 'sdfsdf', 0, 0, 0),
(4, 10, 'Product 4', 'ProductPhoto/img-pro-03.jpg', 113, 1, 'Nam sagittis a augue eget scelerisque. Nullam lacinia consectetur sagittis. Nam sed neque id eros fermentum dignissim quis at tortor. Nullam ultricies urna quis sem sagittis pharetra. Nam erat turpis, cursus in ipsum at, tempor imperdiet metus. In interdum id nulla tristique accumsan. Ut semper in quam nec pretium. Donec egestas finibus suscipit. Curabitur tincidunt convallis arcu.', 'Nam sagittis a augue eget scelerisque. Nullam lacinia consectetur sagittis. Nam sed neque id eros fermentum dignissim quis at tortor. Nullam ultricies urna quis sem sagittis pharetra. Nam erat turpis, cursus in ipsum at, tempor imperdiet metus. In interdum id nulla tristique accumsan. Ut semper in quam nec pretium. Donec egestas finibus suscipit. Curabitur tincidunt convallis arcu.', 0, 0, 0),
(8, 10, 'ultron', 'images/gallery-img-08.jpg', 1000, 2, '', 'gfdggfdgg', 0, 0, 0),
(10, 8, 'jo bhi', 'images/c.jpg', 24, 14, '', 'ewferfewrgferg', 0, 0, 0),
(11, 8, 'jo bhi', 'images/c.jpg', 24, 13, '', 'ewferfewrgferg', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_productcategory`
--

CREATE TABLE `tbl_productcategory` (
  `CategoryId` int(11) NOT NULL,
  `CategoryName` varchar(200) NOT NULL,
  `PhotoUrl` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_productcategory`
--

INSERT INTO `tbl_productcategory` (`CategoryId`, `CategoryName`, `PhotoUrl`) VALUES
(8, 'Category2', 'ProductCategory/8.jpg'),
(10, 'Category3', 'images/banner-03.jpg'),
(11, 'Category6', 'ProductCategory/11.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_wishlist`
--

CREATE TABLE `tbl_wishlist` (
  `WishListId` int(11) NOT NULL,
  `ProductId` int(11) NOT NULL,
  `CustomerId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_wishlist`
--

INSERT INTO `tbl_wishlist` (`WishListId`, `ProductId`, `CustomerId`) VALUES
(1, 1, 1),
(2, 2, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_adminlogin`
--
ALTER TABLE `tbl_adminlogin`
  ADD PRIMARY KEY (`AdminId`);

--
-- Indexes for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  ADD PRIMARY KEY (`BlogId`);

--
-- Indexes for table `tbl_blogcategory`
--
ALTER TABLE `tbl_blogcategory`
  ADD PRIMARY KEY (`CategoryId`);

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`CartId`);

--
-- Indexes for table `tbl_contactus`
--
ALTER TABLE `tbl_contactus`
  ADD PRIMARY KEY (`ContactId`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`CustomerId`);

--
-- Indexes for table `tbl_newseventcategory`
--
ALTER TABLE `tbl_newseventcategory`
  ADD PRIMARY KEY (`CategoryId`);

--
-- Indexes for table `tbl_newsletter`
--
ALTER TABLE `tbl_newsletter`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_notification`
--
ALTER TABLE `tbl_notification`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbl_orderdetails`
--
ALTER TABLE `tbl_orderdetails`
  ADD PRIMARY KEY (`ODId`);

--
-- Indexes for table `tbl_ordermaster`
--
ALTER TABLE `tbl_ordermaster`
  ADD PRIMARY KEY (`OMID`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`ProductId`);

--
-- Indexes for table `tbl_productcategory`
--
ALTER TABLE `tbl_productcategory`
  ADD PRIMARY KEY (`CategoryId`);

--
-- Indexes for table `tbl_wishlist`
--
ALTER TABLE `tbl_wishlist`
  ADD PRIMARY KEY (`WishListId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_adminlogin`
--
ALTER TABLE `tbl_adminlogin`
  MODIFY `AdminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  MODIFY `BlogId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_blogcategory`
--
ALTER TABLE `tbl_blogcategory`
  MODIFY `CategoryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `CartId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_contactus`
--
ALTER TABLE `tbl_contactus`
  MODIFY `ContactId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `CustomerId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_newseventcategory`
--
ALTER TABLE `tbl_newseventcategory`
  MODIFY `CategoryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_newsletter`
--
ALTER TABLE `tbl_newsletter`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_notification`
--
ALTER TABLE `tbl_notification`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_orderdetails`
--
ALTER TABLE `tbl_orderdetails`
  MODIFY `ODId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_ordermaster`
--
ALTER TABLE `tbl_ordermaster`
  MODIFY `OMID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `ProductId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_productcategory`
--
ALTER TABLE `tbl_productcategory`
  MODIFY `CategoryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_wishlist`
--
ALTER TABLE `tbl_wishlist`
  MODIFY `WishListId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
