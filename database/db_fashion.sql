-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2023 at 09:12 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_fashion`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_to_cart`
--

CREATE TABLE `add_to_cart` (
  `atc_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_to_cart`
--

INSERT INTO `add_to_cart` (`atc_id`, `p_id`, `c_id`, `user_id`) VALUES
(18, 14, 16, 1),
(20, 12, 16, 2),
(21, 10, 15, 2);

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `a_id` int(11) NOT NULL,
  `a_name` varchar(255) NOT NULL,
  `a_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`a_id`, `a_name`, `a_pass`) VALUES
(1, 'eric', '123');

-- --------------------------------------------------------

--
-- Table structure for table `billing`
--

CREATE TABLE `billing` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `Country` varchar(255) NOT NULL,
  `StreetAddress` varchar(255) NOT NULL,
  `WorkPhoneNo` varchar(20) NOT NULL,
  `CellNo` varchar(20) NOT NULL,
  `Category` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `billing`
--

INSERT INTO `billing` (`id`, `user_id`, `Name`, `dob`, `Country`, `StreetAddress`, `WorkPhoneNo`, `CellNo`, `Category`, `email`, `remarks`) VALUES
(4, 2, 'eric', '0000-00-00', 'pakistan', 'Karachi ', '3333333333', '33333333', 'Cosmetic', 'r@email.com', 'lllllllllllllllll'),
(5, 2, 'elliot', '0000-00-00', 'new york', 'nyc', '333333333', '33333333', '(Jewelry', 'r@email.com', ',,,,'),
(7, 2, 'diana', '0000-00-00', 'nyc', 'nyc', '77777777777', '66666666666', 'jjj', 'r@email.com', '.....'),
(8, 2, 'justin', '0000-00-00', 'll', 'll', '888', '888', 'jj', 'j@email.com', 'kk');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `c_img` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `c_name`, `c_img`, `created_at`) VALUES
(15, 'Cosmetics', 'pexels-photo-1819791.jpeg', '2023-10-05 15:33:31'),
(16, 'Imitation Jewelry ', 'cat-4-3.jpg', '2023-10-05 15:35:45'),
(17, 'Skin Care', 'photo-1618234330588-7b943a13ae3e.avif', '2023-10-05 15:39:41'),
(18, 'Hair Care', 'photo-1605980766335-d3a41c7332a1.avif', '2023-10-05 15:53:09'),
(19, 'Fragrances', 'photo-1557170334-a9632e77c6e4.avif', '2023-10-05 15:55:35');

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `order_id` int(11) NOT NULL,
  `atcc_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total amount` decimal(10,0) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`order_id`, `atcc_id`, `quantity`, `total amount`, `order_date`) VALUES
(3, 18, 2, 2, '2023-10-13 19:16:01'),
(4, 18, 6, 2, '2023-10-13 19:17:03'),
(5, 18, 12, 2, '2023-10-13 19:18:58'),
(7, 18, 1, 1, '2023-10-13 19:21:32'),
(8, 18, 2, 2355, '2023-10-13 19:22:48'),
(9, 18, 2, 2355, '2023-10-13 19:23:17'),
(10, 18, 2, 2310, '2023-10-14 11:12:59'),
(12, 18, 2, 2310, '2023-10-14 11:16:32'),
(13, 18, 2, 2310, '2023-10-14 11:17:20'),
(14, 18, 2, 2511, '2023-10-14 12:03:36'),
(15, 18, 3, 837, '2023-10-15 02:15:38'),
(16, 18, 2, 837, '2023-10-15 02:16:19'),
(17, 18, 2, 0, '2023-10-15 02:21:10'),
(22, 18, 5, 0, '2023-10-15 02:32:59'),
(23, 18, 3, 837, '2023-10-15 02:33:43'),
(24, 18, 1, 837, '2023-10-15 02:46:55'),
(25, 18, 4, 837, '2023-10-15 03:28:17'),
(32, 18, 0, 0, '2023-10-15 04:42:24'),
(33, 18, 0, 0, '2023-10-15 04:52:33'),
(34, 18, 0, 0, '2023-10-15 04:53:11'),
(35, 18, 0, 0, '2023-10-15 04:55:16'),
(36, 18, 0, 0, '2023-10-15 04:56:56'),
(37, 18, 0, 0, '2023-10-15 06:36:20'),
(38, 18, 0, 0, '2023-10-15 06:39:32');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `u_id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`u_id`, `name`, `email`, `message`) VALUES
(1, 'rabia', 'allen@gmail.com', '....');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `u_id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(25) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`u_id`, `name`, `email`, `pass`, `created_at`) VALUES
(1, 'ariana', 'alen@gmail.com', 'p@nd@456', '2023-09-25 14:33:16'),
(2, 'eric', 'eric123@email.com', '123', '2023-10-06 07:48:40');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `p_price` int(11) NOT NULL,
  `p_desc` varchar(255) NOT NULL,
  `c_id` int(11) NOT NULL,
  `p_img` varchar(512) DEFAULT NULL,
  `Quantity` int(11) NOT NULL,
  `Variants` varchar(255) NOT NULL,
  `Discount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `p_name`, `p_price`, `p_desc`, `c_id`, `p_img`, `Quantity`, `Variants`, `Discount`) VALUES
(8, 'Lipstick ', 56, 'A classic red lipstick for bold and vibrant lips.\r\n', 15, 'photo-1619352520578-8fefbfa2f904.avif', 8, ' Shade: Ruby Red', 50),
(9, 'Foundation - Shade: Ivory', 67, 'A lightweight foundation for a natural and even skin tone.', 15, 'photo-1557205465-f3762edea6d3.avif', 8, ' Shade: Ivory', 87),
(10, 'Eyeshadow Palette - Neutral Tones', 100, 'A palette with various neutral eyeshadow shades for versatile eye makeup looks.', 15, 'photo-1512496015851-a90fb38ba796.avif', 11, 'Neutral Tones', 99),
(11, 'Makeup Brushes Set', 89, 'A set of high-quality makeup brushes for precise application.', 15, 'photo-1607774000480-de3f239fdd4c.avif', 8, '..', 66),
(12, 'Necklace - Crystal Pendant', 670, 'Adorn yourself with elegance and sparkle with our crystal pendant necklace.', 16, 'cat-8-3.jpg', 7, 'medium', 550),
(13, 'Earrings - Hoop Earrings', 88, 'Add a touch of sophistication with these versatile hoop earrings.', 16, '2-2.jpg', 7, 'gold', 66),
(14, 'Ring - Gemstone Ring', 345, 'Make a statement with this stunning gemstone ring.', 16, '4.jpg', 5, 'gold', 88),
(15, 'Charm Bracelet - Heart Charms', 879, 'Express your personality with our charm bracelet featuring heart charms.', 16, '1.jpg', 6, 'medium', 455),
(16, 'Biolage Hydrasource Detangling Solution', 788, 'A detangler for easy combing and manageability.', 18, 'photo-1624939461078-66a124b3539c.avif', 6, 'medium', 566),
(18, 'CeraVe Hydrating Cleanser', 333, 'A gentle cleanser that hydrates and helps maintain the skin\'s natural barrier.', 17, 'photo-1598440947619-2c35fc9aa908.avif', 1, 'medium', 331),
(19, 'Chanel Coco Mademoiselle', 333, 'A classic floral fragrance with a modern, oriental twist.', 19, 'photo-1613521140785-e85e427f8002.avif', 3, 'medium', 233),
(20, 'Calvin Klein Eternity', 666, 'A timeless and romantic floral fragrance.', 19, 'photo-1595535373192-fc8935bacd89.avif', 7, 'medium', 656);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `rating` int(11) NOT NULL,
  `u_review` varchar(255) NOT NULL,
  `Product Name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `name`, `email`, `rating`, `u_review`, `Product Name`, `title`, `img`, `created_at`) VALUES
(3, 'nn', 'mm@email.com', 0, 'nn', '', 'mmm', '1.jpg', '2023-10-01 13:49:28'),
(4, ',,', 'r@email.com', 4, 'zz', 'mm', 'zz', '2.jpg', '2023-10-01 14:03:16'),
(5, 'mm', 'ss@email.com', 4, 'ss', 'mm', 'mm', '4.jpg', '2023-10-01 14:12:42'),
(6, ',,', 'r@email.com', 1, ',,,', ',,,', 'mm', '3.jpg', '2023-10-01 14:13:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_to_cart`
--
ALTER TABLE `add_to_cart`
  ADD PRIMARY KEY (`atc_id`),
  ADD KEY `p_id` (`p_id`),
  ADD KEY `c_id` (`c_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `billing`
--
ALTER TABLE `billing`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `atc_id` (`atcc_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `c_id` (`c_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_to_cart`
--
ALTER TABLE `add_to_cart`
  MODIFY `atc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `billing`
--
ALTER TABLE `billing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `add_to_cart`
--
ALTER TABLE `add_to_cart`
  ADD CONSTRAINT `add_to_cart_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `add_to_cart_ibfk_2` FOREIGN KEY (`c_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `add_to_cart_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `login` (`u_id`);

--
-- Constraints for table `billing`
--
ALTER TABLE `billing`
  ADD CONSTRAINT `billing_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `login` (`u_id`);

--
-- Constraints for table `checkout`
--
ALTER TABLE `checkout`
  ADD CONSTRAINT `checkout_ibfk_1` FOREIGN KEY (`atcc_id`) REFERENCES `add_to_cart` (`atc_id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
