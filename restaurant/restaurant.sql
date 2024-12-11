-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2022 at 08:30 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dishbook`
--

CREATE TABLE `dishbook` (
  `id` int(11) NOT NULL,
  `custid` varchar(100) NOT NULL,
  `custno` varchar(100) NOT NULL,
  `total` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dishbook`
--

INSERT INTO `dishbook` (`id`, `custid`, `custno`, `total`) VALUES
(3, '3', '9999999999', '55'),
(4, '3', '9999999999', '495'),
(5, '3', '1234567890', '220');

-- --------------------------------------------------------

--
-- Table structure for table `dishes`
--

CREATE TABLE `dishes` (
  `id` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `dishname` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dishes`
--

INSERT INTO `dishes` (`id`, `type`, `dishname`, `photo`, `description`, `price`) VALUES
(29, 'Chinese', 'Hot and Sour Soup', 'Hot and Sour Soup.webp', 'Is not it great to warm up with a piping hot bowl of soup during the winters? Here is a soup with a ', '200'),
(31, 'Chinese', 'Quick Noodles', 'Quick Noodles.webp', 'One of the staples in every home, noodles are not just a kids favourite snack to binge on but are al', '200'),
(32, 'Chinese', 'Szechwan Chilli Chicken', 'Szechwan Chilli Chicken.webp', '17 Most Popular Chinese Dishes | Easy Chinese DishesLove Chinese? Try these delightful 17 best Chine', '300'),
(33, 'Indian', 'Biryani', 'Biryani.jpg', 'States across India all cook this quintessential main dish in different styles, with Delhi biryani a', '150'),
(34, 'Indian', 'Curry', 'Curry.jpg', '“Curry” was a blanket term used by the British during the era of colonization for the wide variety o', '200'),
(35, 'Punjabi', 'Chole Bhature', 'Chole Bhature.jpg', 'One of the most popular vegetarian North Indian recipes, chole refers to the spicy garbanzo bean and', '100'),
(36, 'Punjabi', 'Dal Makhani', 'Dal Makhani.jpg', 'Another popular North Indian vegetarian dish, dal makhani is a creamy preparation made with black le', '100'),
(37, 'Italian', 'Caprese Salad with Pesto Sauce', 'Caprese Salad with Pesto Sauce.webp', 'Nothing like a fresh tomato salad in summers! A great antipasto bite to start your meal with. This c', '350'),
(38, 'Italian', 'Panzenella', 'Panzenella.webp', 'Panzenella is a Tuscan bread salad, ideal for summer. It does not follow a particular recipe, but th', '350'),
(39, 'Italian', 'Bruschetta', 'Bruschetta.jpg', 'An antipasto dish, bruschetta has grilled bread topped with veggies, rubbed garlic and tomato mix. A', '300'),
(40, 'Italian', 'Pasta Carbonara', 'Pasta Carbonara.webp', 'This simple Roman pasta dish derives its name from carbone meaning coal. It was a pasta popular with', '400'),
(41, 'Italian', 'Mushroom Risotto', 'Mushroom Risotto.webp', 'A plateful of buttery risotto with the goodness of mushrooms. A healthy bowl of mushroom risotto has', '250'),
(42, 'Chinese', 'Spring Rolls', 'Spring Rolls.webp', 'A crisp appetizer where shredded veggies are encased in thin sheets and then fried golden. Little mu', '100'),
(43, 'Chinese', 'Stir Fried Tofu with Rice', 'Stir Fried Tofu with Rice.webp', 'A simple stir-fry with tofu and oriental sauces. Sti fried togu with rice is a great main course dis', '200'),
(44, 'Indian', 'Korma', 'Korma.jpg', 'Like biryani, korma can be traced back to Mughlai cuisine, which specialized in meat-heavy, creamy d', '150'),
(45, 'Indian', 'Malai Kofta', 'Malai Kofta.jpg', 'ow prepare to meet kofta! In North Indian cuisine, kofta refers to deep fried balls made from vegeta', '100'),
(46, 'Indian', 'Pav Bhaji', 'Pav Bhaji.jpg', 'Pav bhaji originated in the western state of Maharashtra and is a popular street food, especially in', '50'),
(47, 'Punjabi', 'Butter Chicken', 'Butter Chicken.jpg', 'If biryani is the most well-known Indian dish, butter chicken (or murgh makhani) is a close second. ', '100'),
(48, 'Punjabi', 'Chicken Tikka Masala', 'Chicken Tikka Masala.jpg', 'This rich, incredibly moist chicken dish differs subtly from butter chicken, and though it’s conside', '300'),
(49, 'Punjabi', 'Palak Paneer', 'Palak Paneer.jpg', 'North Indian vegetarian cusine relies often on paneer, or Indian cottage cheese. One of the most pop', '150');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `type`) VALUES
(3, 'Indian'),
(4, 'Chinese'),
(5, 'Punjabi'),
(6, 'Italian');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `email`, `number`, `password`) VALUES
(2, 'Hardeep Singh', 'Hardeep@gmail.com', '9530604035', '123456'),
(3, 'Customer 1', 'customer1@gmail.com', '1234567890', '123456'),
(4, 'Customer 2', 'customer2@gmail.com', '1234567890', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `tablebook`
--

CREATE TABLE `tablebook` (
  `id` int(11) NOT NULL,
  `custid` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `guests` varchar(100) NOT NULL,
  `number` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `timefrom` varchar(100) NOT NULL,
  `timeto` varchar(100) NOT NULL,
  `request` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `temporary`
--

CREATE TABLE `temporary` (
  `id` int(11) NOT NULL,
  `custid` varchar(100) NOT NULL,
  `itemid` varchar(100) NOT NULL,
  `item` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `subtotal` varchar(100) NOT NULL,
  `shipping` varchar(100) NOT NULL,
  `total` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dishbook`
--
ALTER TABLE `dishbook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dishes`
--
ALTER TABLE `dishes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dishname` (`dishname`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tablebook`
--
ALTER TABLE `tablebook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temporary`
--
ALTER TABLE `temporary`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dishbook`
--
ALTER TABLE `dishbook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `dishes`
--
ALTER TABLE `dishes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tablebook`
--
ALTER TABLE `tablebook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `temporary`
--
ALTER TABLE `temporary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
