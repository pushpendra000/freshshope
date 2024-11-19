-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 08, 2022 at 09:02 PM
-- Server version: 10.6.5-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_freshshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_adminlogin`
--

CREATE TABLE `tbl_adminlogin` (
  `AdminId` int(11) NOT NULL,
  `Email` varchar(200) CHARACTER SET utf8mb4 NOT NULL,
  `Password` varchar(200) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_adminlogin`
--

INSERT INTO `tbl_adminlogin` (`AdminId`, `Email`, `Password`) VALUES
(1, 'admin@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blog`
--

CREATE TABLE `tbl_blog` (
  `BlogId` int(11) NOT NULL,
  `Title` varchar(200) NOT NULL,
  `BlogDate` varchar(200) NOT NULL,
  `ShortDescription` varchar(2000) NOT NULL,
  `ShortBanner` varchar(2000) NOT NULL,
  `FullDescription` varchar(2000) NOT NULL,
  `FullBanner` varchar(2000) NOT NULL,
  `Author` varchar(200) NOT NULL,
  `Status` int(11) NOT NULL,
  `CategoryId` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_blog`
--

INSERT INTO `tbl_blog` (`BlogId`, `Title`, `BlogDate`, `ShortDescription`, `ShortBanner`, `FullDescription`, `FullBanner`, `Author`, `Status`, `CategoryId`) VALUES
(25, 'title', '', 'sd', 'ProductImage/25.webp', 'fd', 'fb', 'a', 1, 2),
(31, 'pawan swami', '', 'hello every one', 'ProductImage/31.png', 'helklsdkjfbajsd', 'ProductImage/34.jpg', 'pawan swami', 0, 2),
(37, 'mukul', '2222-02-22', 'djjj', 'ProductImage/37.', 'mnnnnn', '', 'mjjnnnn', 0, 2),
(50, 'ram ji', '2021-09-28', 'jai shri ram', 'ProductImage/Short-50.jpg', '<p style=\"text-align: center;\"><em><strong>hello</strong></em></p>', 'ProductImage/Big-50.jpg', 'pawan', 0, 2),
(51, ' Kitchen Gardening', '', ' Kitchen Gardening | Vegetables', 'ProductImage/Short-51.jpg', 'The traditional kitchen garden, vegetable garden, also known as a potager (from the French jardin potager) or in Scotland a kailyaird,[1] is a space separate from the rest of the residential garden – the ornamental plants and lawn areas. It is used for growing plants for eating, flavouring food, and often some medicinal plants, especially historically. The plants are grown for use by the owner and their household, though some seasonal surpluses are given away or sold; a commercial operation growing a variety of vegetables is a market garden (or a farm). The kitchen garden is different not only in its history, but also its functional design. It differs from an allotment in that a kitchen garden is on private land attached or very close to the dwelling. It is regarded as essential that the kitchen garden could be quickly accessed by the cook.', 'ProductImage/Big-51.jpg', ' Charles Estienne', 0, 1),
(52, 'Rainbow Chard', '2022-05-25', 'Rainbow Chard | vagitable', 'ProductImage/Short-52.jpg', 'Wondering what to plant after your tomatoes are finished? Organic allotmenteer Lou recommends salads like winter purslane to keep your greenhouse or coldframe producing even as the weather cools.  Pop over to Rainbow Chard every week for photos and a rundown of the happenings on this organic allotment in Norwich, along with great ideas for what to cook with your homegrown veg, like this vegetable toad in the hole. And do check out the ‘monster green butternut squash’ – a beast at 16lbs, a real monster.', 'ProductImage/Big-52.jpg', 'Rainbow Chard', 0, 1),
(53, 'Fruits', '2022-05-23', 'Something about fruits', 'ProductImage/Short-53.jpg', 'Karnataka state implements several schemes for the benefit of farmers. Farmers undertake different agriculture and agriculture related activities like growing Agriculture crops, Horticulture crops, Sericulture, Dairy, Poultry, Fishery etc. Each of this activity requires specialised knowledge and experience. Therefore, the state has established specialised and specific department to assist farmers in carrying out farming activities effectively and efficiently. While establishment of exclusive departments brings focused approach for development of each of these activities, farmers need to approach different departments for availing any type of assistance and benefits. It is common practice that all the departments seek documents from the farmers for providing benefits under any scheme. Farmers end up submitting same set of documents to different departments every year. Sometimes they will be required to submit one set of documents for every scheme in same department.  A well organized and scrutinized farmer database will avoid farmers from running pillar to post for availing benefits. Besides it would helps the departments in overcoming the aforesaid issues. DPAR e Governance department in association with NIC has developed a software application called Farmer Registration &Unified Beneficiary Information System – FRUITS.', 'ProductImage/Big-53.jpg', 'unknown', 0, 6);

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
(1, 'Vagetable', 'BlogCategory/5.jpg'),
(6, 'Fruit', 'BlogCategory/6.jpg');

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
(1, 38, 1, 1),
(2, 41, 1, 1),
(3, 32, 1, 1);

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
(7, 'pwan swami', '1234567890', 'admin@gmail.com', 'Test '),
(8, 'Mukul swami', '1234567890', 'admin@gmail.com', 'Test');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `CustomerId` int(11) NOT NULL,
  `CustomerName` varchar(200) NOT NULL,
  `Mobile` varchar(12) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Status` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`CustomerId`, `CustomerName`, `Mobile`, `Email`, `Password`, `Status`) VALUES
(1, 'Test', '1234567890', 'test@gmail.com', 'test', 0),
(2, 'Mukul Swami', '1234567890', 'test2@gmail.com', '123', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_location`
--

CREATE TABLE `tbl_location` (
  `BranchId` int(11) NOT NULL,
  `BranchName` varchar(200) NOT NULL,
  `City` varchar(200) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `ContactNo` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_location`
--

INSERT INTO `tbl_location` (`BranchId`, `BranchName`, `City`, `Address`, `ContactNo`) VALUES
(1, 'Fresh Vegitable', 'Jaipur', 'tank Phatak', '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_newsevent`
--

CREATE TABLE `tbl_newsevent` (
  `NewsEventId` int(11) NOT NULL,
  `CategoryId` int(20) NOT NULL,
  `NewsEventName` varchar(200) NOT NULL,
  `Banner` varchar(200) NOT NULL,
  `StartDate` date NOT NULL,
  `EndDate` date NOT NULL,
  `StartTime` varchar(11) NOT NULL,
  `EndTime` varchar(11) NOT NULL,
  `Description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_newsevent`
--

INSERT INTO `tbl_newsevent` (`NewsEventId`, `CategoryId`, `NewsEventName`, `Banner`, `StartDate`, `EndDate`, `StartTime`, `EndTime`, `Description`) VALUES
(1, 1, '', 'NewsEventImage/.jpg', '0000-00-00', '0000-00-00', '', '', ''),
(2, 2, '', 'NewsEventImage/2.jpg', '0000-00-00', '0000-00-00', '', '', ''),
(5, 1, 'PAwan', 'NewsEventImage/5.jpg', '0000-00-00', '0000-00-00', '', '', ''),
(6, 2, 'pawan', '', '0000-00-00', '0000-00-00', '', '', ''),
(7, 2, '', 'NewsEventImage/7.jpg', '0000-00-00', '0000-00-00', '', '', ''),
(8, 1, 'pawan swami', 'NewsEventImage/8.jpg', '2021-09-16', '2021-09-11', '17:43', '17:46', 'gfhgf'),
(9, 1, 'pawan', 'NewsEventImage/9.jpg', '2021-09-28', '2021-09-29', '2021-09-28', '2021-09-29', 'Pawan'),
(10, 1, 'jai shri ram', 'NewsEventImage/10.jpg', '2021-09-28', '2021-09-28', '2021-09-28', '2021-09-28', 'gfhgf'),
(11, 2, 'jai shri ram', 'NewsEventImage/11.jpg', '2021-09-28', '2021-09-28', '2021-09-28', '2021-09-28', 'gfhgf');

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
(1, 'Vageitable'),
(2, 'Fruits');

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
(1, 'a@a.com'),
(2, ''),
(3, ''),
(4, ''),
(5, ''),
(6, ''),
(7, ''),
(8, ''),
(9, ''),
(10, ''),
(11, ''),
(12, 'a@a.com'),
(13, 'a@a.com'),
(14, 'a@a.com'),
(15, 'admin@gmail.com'),
(16, 'admin@gmail.com'),
(17, 'admin@gmail.com');

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
(1, 'notifiation 1', '#'),
(2, 'notifiation notifiation notifiation notifiation 2', '#'),
(3, 'notifiation notifiation notifiation notifiation 3', '#'),
(5, 'Notification 4', '#');

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

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ordermaster`
--

CREATE TABLE `tbl_ordermaster` (
  `OMID` int(11) NOT NULL,
  `CustomerId` int(11) NOT NULL,
  `OrderDate` date NOT NULL,
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
(1, 1, 'BlackBerry', 'ProductImage/1.jpg', 2, 1, '', 'epsum Lorem epsum Lorem epsum Lorem epsum Lorem', 0, 0, 0),
(2, 2, 'Pea', 'ProductImage/2.jpg', 24, 12, '', 'The pea is most commonly the small spherical seed', 0, 0, 0),
(32, 1, 'Banana', 'ProductImage/32.jpg', 30, 1, '', 'epsum Lorem epsum Lorem epsum Lorem', 15, 0, 1),
(33, 1, 'Pineapple', 'ProductImage/33.jpg', 105, 1, '', 'The pineapple (Ananas comosus) is a tropical plant', 0, 0, 0),
(34, 2, 'Okra', 'ProductImage/34.jpg', 50, 1, '', 'Okra or Okro, Abelmoschus esculentus, known in many English-speaking', 0, 0, 0),
(35, 2, 'Aubergine', 'ProductImage/35.jpg', 54, 1, '', 'Eggplant, aubergine or brinjal is a plant species in the nightshade family ', 0, 0, 0),
(36, 1, 'Watermelon', 'ProductImage/36.jpg', 33, 1, '', 'Watermelon is a flowering plant species of the Cucurbitaceae family and the name', 0, 0, 0),
(37, 1, 'Pomegranate', 'ProductImage/37.jpg', 22, 1, '', 'The pomegranate is a fruit-bearing deciduous shrub in the family Lythraceae, subfamily Punicoidea', 0, 0, 0),
(38, 2, 'red chilli', 'ProductImage/38.jpg', 45, 1, '', 'bhot teekhi hoti h', 0, 0, 0),
(39, 1, 'black grapes', 'ProductImage/39.jpg', 233, 1, '', 'Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum ', 0, 0, 0),
(40, 1, 'Lychee', 'ProductImage/40.jpg', 200, 1, '', 'Lychee is a monotypic taxon and the sole member in the genus Litchi in the soapberry family,', 0, 0, 0),
(41, 1, 'Dragon-Fruit', 'ProductImage/41.jpg', 300, 1, '', 'A pitaya or pitahaya is the fruit of several different cactus species indigenous to the Americas.', 0, 0, 0),
(42, 1, 'Pear', 'ProductImage/42.jpg', 135, 1, '', 'Pears are fruits produced and consumed around the world, growing on a tree', 0, 0, 0);

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
(1, 'Fruit', 'ProductCategory/1.jpg'),
(2, 'Vagitable', 'ProductCategory/2.jpg');

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
(2, 41, 1),
(3, 32, 1);

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
-- Indexes for table `tbl_location`
--
ALTER TABLE `tbl_location`
  ADD PRIMARY KEY (`BranchId`);

--
-- Indexes for table `tbl_newsevent`
--
ALTER TABLE `tbl_newsevent`
  ADD PRIMARY KEY (`NewsEventId`);

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
  MODIFY `AdminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  MODIFY `BlogId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `tbl_blogcategory`
--
ALTER TABLE `tbl_blogcategory`
  MODIFY `CategoryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `CartId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_contactus`
--
ALTER TABLE `tbl_contactus`
  MODIFY `ContactId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `CustomerId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_location`
--
ALTER TABLE `tbl_location`
  MODIFY `BranchId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_newsevent`
--
ALTER TABLE `tbl_newsevent`
  MODIFY `NewsEventId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_newseventcategory`
--
ALTER TABLE `tbl_newseventcategory`
  MODIFY `CategoryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_newsletter`
--
ALTER TABLE `tbl_newsletter`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_notification`
--
ALTER TABLE `tbl_notification`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_orderdetails`
--
ALTER TABLE `tbl_orderdetails`
  MODIFY `ODId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_ordermaster`
--
ALTER TABLE `tbl_ordermaster`
  MODIFY `OMID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `ProductId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `tbl_productcategory`
--
ALTER TABLE `tbl_productcategory`
  MODIFY `CategoryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_wishlist`
--
ALTER TABLE `tbl_wishlist`
  MODIFY `WishListId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
