-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 22, 2023 at 09:42 PM
-- Server version: 5.7.39-0ubuntu0.18.04.2
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) NOT NULL,
  `productname` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `price` float NOT NULL,
  `image` text NOT NULL,
  `thumbImage` text NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `productname`, `description`, `price`, `image`, `thumbImage`, `created_at`) VALUES
(8, 'Very good camera', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus id congue mauris. Sed nulla quam, viverra vel laoreet eget, tincidunt dictum elit. Proin iaculis arcu ac hendrerit varius. Aenean euismod venenatis massa, in placerat dui elementum eget.', 199.95, 'images/uploadedImages/camera01_big.webp', 'images/uploadedImages/camera01.webp', '2023-08-21 19:27:06'),
(9, 'Vitamin C glue', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus id congue mauris. Sed nulla quam, viverra vel laoreet eget, tincidunt dictum elit. Proin iaculis arcu ac hendrerit varius. Aenean euismod venenatis massa, in placerat dui elementum eget.', 19.99, 'images/uploadedImages/vitac01_big.webp', 'images/uploadedImages/vitac01.webp', '2023-08-21 19:27:06'),
(10, 'Nice bottle', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus id congue mauris. Sed nulla quam, viverra vel laoreet eget, tincidunt dictum elit. Proin iaculis arcu ac hendrerit varius. Aenean euismod venenatis massa, in placerat dui elementum eget.', 15.45, 'images/uploadedImages/bottle01_big.webp', 'images/uploadedImages/bottle01.webp', '2023-08-21 20:10:57'),
(11, 'Useful oil just for you', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus id congue mauris. Sed nulla quam, viverra vel laoreet eget, tincidunt dictum elit. Proin iaculis arcu ac hendrerit varius. Aenean euismod venenatis massa, in placerat dui elementum eget.', 158.3, 'images/uploadedImages/oil01_big.webp', 'images/uploadedImages/oil01.webp', '2023-08-21 20:10:57'),
(12, 'Nice bottle again', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus id congue mauris. Sed nulla quam, viverra vel laoreet eget, tincidunt dictum elit. Proin iaculis arcu ac hendrerit varius. Aenean euismod venenatis massa, in placerat dui elementum eget.', 15.45, 'images/uploadedImages/bottle01_big.webp', 'images/uploadedImages/bottle01.webp', '2023-08-21 20:10:57'),
(13, 'Useful oil for everyone', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus id congue mauris. Sed nulla quam, viverra vel laoreet eget, tincidunt dictum elit. Proin iaculis arcu ac hendrerit varius. Aenean euismod venenatis massa, in placerat dui elementum eget.', 158.3, 'images/uploadedImages/oil01_big.webp', 'images/uploadedImages/oil01.webp', '2023-08-21 20:10:57'),
(14, 'Rosemary, because you deserve', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus id congue mauris. Sed nulla quam, viverra vel laoreet eget, tincidunt dictum elit. Proin iaculis arcu ac hendrerit varius. Aenean euismod venenatis massa, in placerat dui elementum eget.', 99.9, 'images/uploadedImages/rosemary01_big.webp', 'images/uploadedImages/rosemary01.webp', '2023-08-21 20:13:11'),
(15, 'Very good camera', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus id congue mauris. Sed nulla quam, viverra vel laoreet eget, tincidunt dictum elit. Proin iaculis arcu ac hendrerit varius. Aenean euismod venenatis massa, in placerat dui elementum eget.', 199.95, 'images/uploadedImages/camera01_big.webp', 'images/uploadedImages/camera01.webp', '2023-08-21 19:27:06'),
(16, 'Vitamin C glue', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus id congue mauris. Sed nulla quam, viverra vel laoreet eget, tincidunt dictum elit. Proin iaculis arcu ac hendrerit varius. Aenean euismod venenatis massa, in placerat dui elementum eget.', 19.99, 'images/uploadedImages/vitac01_big.webp', 'images/uploadedImages/vitac01.webp', '2023-08-21 19:27:06'),
(17, 'Nice bottle', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus id congue mauris. Sed nulla quam, viverra vel laoreet eget, tincidunt dictum elit. Proin iaculis arcu ac hendrerit varius. Aenean euismod venenatis massa, in placerat dui elementum eget.', 15.45, 'images/uploadedImages/bottle01_big.webp', 'images/uploadedImages/bottle01.webp', '2023-08-21 20:10:57'),
(18, 'Useful oil just for you', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus id congue mauris. Sed nulla quam, viverra vel laoreet eget, tincidunt dictum elit. Proin iaculis arcu ac hendrerit varius. Aenean euismod venenatis massa, in placerat dui elementum eget.', 158.3, 'images/uploadedImages/oil01_big.webp', 'images/uploadedImages/oil01.webp', '2023-08-21 20:10:57'),
(19, 'Nice bottle again', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus id congue mauris. Sed nulla quam, viverra vel laoreet eget, tincidunt dictum elit. Proin iaculis arcu ac hendrerit varius. Aenean euismod venenatis massa, in placerat dui elementum eget.', 15.45, 'images/uploadedImages/bottle01_big.webp', 'images/uploadedImages/bottle01.webp', '2023-08-21 20:10:57'),
(20, 'Useful oil for everyone', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus id congue mauris. Sed nulla quam, viverra vel laoreet eget, tincidunt dictum elit. Proin iaculis arcu ac hendrerit varius. Aenean euismod venenatis massa, in placerat dui elementum eget.', 158.3, 'images/uploadedImages/oil01_big.webp', 'images/uploadedImages/oil01.webp', '2023-08-21 20:10:57'),
(21, 'Rosemary, because you deserve', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus id congue mauris. Sed nulla quam, viverra vel laoreet eget, tincidunt dictum elit. Proin iaculis arcu ac hendrerit varius. Aenean euismod venenatis massa, in placerat dui elementum eget.', 99.9, 'images/uploadedImages/rosemary01_big.webp', 'images/uploadedImages/rosemary01.webp', '2023-08-21 20:13:11'),
(22, 'Very good camera', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus id congue mauris. Sed nulla quam, viverra vel laoreet eget, tincidunt dictum elit. Proin iaculis arcu ac hendrerit varius. Aenean euismod venenatis massa, in placerat dui elementum eget.', 199.95, 'images/uploadedImages/camera01_big.webp', 'images/uploadedImages/camera01.webp', '2023-08-21 19:27:06'),
(23, 'Vitamin C glue', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus id congue mauris. Sed nulla quam, viverra vel laoreet eget, tincidunt dictum elit. Proin iaculis arcu ac hendrerit varius. Aenean euismod venenatis massa, in placerat dui elementum eget.', 19.99, 'images/uploadedImages/vitac01_big.webp', 'images/uploadedImages/vitac01.webp', '2023-08-21 19:27:06'),
(24, 'Nice bottle', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus id congue mauris. Sed nulla quam, viverra vel laoreet eget, tincidunt dictum elit. Proin iaculis arcu ac hendrerit varius. Aenean euismod venenatis massa, in placerat dui elementum eget.', 15.45, 'images/uploadedImages/bottle01_big.webp', 'images/uploadedImages/bottle01.webp', '2023-08-21 20:10:57'),
(25, 'Useful oil just for you', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus id congue mauris. Sed nulla quam, viverra vel laoreet eget, tincidunt dictum elit. Proin iaculis arcu ac hendrerit varius. Aenean euismod venenatis massa, in placerat dui elementum eget.', 158.3, 'images/uploadedImages/oil01_big.webp', 'images/uploadedImages/oil01.webp', '2023-08-21 20:10:57'),
(26, 'Nice bottle again', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus id congue mauris. Sed nulla quam, viverra vel laoreet eget, tincidunt dictum elit. Proin iaculis arcu ac hendrerit varius. Aenean euismod venenatis massa, in placerat dui elementum eget.', 15.45, 'images/uploadedImages/bottle01_big.webp', 'images/uploadedImages/bottle01.webp', '2023-08-21 20:10:57'),
(27, 'Useful oil for everyone', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus id congue mauris. Sed nulla quam, viverra vel laoreet eget, tincidunt dictum elit. Proin iaculis arcu ac hendrerit varius. Aenean euismod venenatis massa, in placerat dui elementum eget.', 158.3, 'images/uploadedImages/oil01_big.webp', 'images/uploadedImages/oil01.webp', '2023-08-21 20:10:57'),
(28, 'Rosemary, because you deserve', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus id congue mauris. Sed nulla quam, viverra vel laoreet eget, tincidunt dictum elit. Proin iaculis arcu ac hendrerit varius. Aenean euismod venenatis massa, in placerat dui elementum eget.', 99.9, 'images/uploadedImages/rosemary01_big.webp', 'images/uploadedImages/rosemary01.webp', '2023-08-21 20:13:11'),
(29, 'Very good camera', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus id congue mauris. Sed nulla quam, viverra vel laoreet eget, tincidunt dictum elit. Proin iaculis arcu ac hendrerit varius. Aenean euismod venenatis massa, in placerat dui elementum eget.', 199.95, 'images/uploadedImages/camera01_big.webp', 'images/uploadedImages/camera01.webp', '2023-08-21 19:27:06'),
(30, 'Vitamin C glue', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus id congue mauris. Sed nulla quam, viverra vel laoreet eget, tincidunt dictum elit. Proin iaculis arcu ac hendrerit varius. Aenean euismod venenatis massa, in placerat dui elementum eget.', 19.99, 'images/uploadedImages/vitac01_big.webp', 'images/uploadedImages/vitac01.webp', '2023-08-21 19:27:06'),
(31, 'Nice bottle', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus id congue mauris. Sed nulla quam, viverra vel laoreet eget, tincidunt dictum elit. Proin iaculis arcu ac hendrerit varius. Aenean euismod venenatis massa, in placerat dui elementum eget.', 15.45, 'images/uploadedImages/bottle01_big.webp', 'images/uploadedImages/bottle01.webp', '2023-08-21 20:10:57'),
(32, 'Useful oil just for you', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus id congue mauris. Sed nulla quam, viverra vel laoreet eget, tincidunt dictum elit. Proin iaculis arcu ac hendrerit varius. Aenean euismod venenatis massa, in placerat dui elementum eget.', 158.3, 'images/uploadedImages/oil01_big.webp', 'images/uploadedImages/oil01.webp', '2023-08-21 20:10:57'),
(33, 'Nice bottle again', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus id congue mauris. Sed nulla quam, viverra vel laoreet eget, tincidunt dictum elit. Proin iaculis arcu ac hendrerit varius. Aenean euismod venenatis massa, in placerat dui elementum eget.', 15.45, 'images/uploadedImages/bottle01_big.webp', 'images/uploadedImages/bottle01.webp', '2023-08-21 20:10:57'),
(34, 'Useful oil for everyone', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus id congue mauris. Sed nulla quam, viverra vel laoreet eget, tincidunt dictum elit. Proin iaculis arcu ac hendrerit varius. Aenean euismod venenatis massa, in placerat dui elementum eget.', 158.3, 'images/uploadedImages/oil01_big.webp', 'images/uploadedImages/oil01.webp', '2023-08-21 20:10:57'),
(35, 'Rosemary, because you deserve', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus id congue mauris. Sed nulla quam, viverra vel laoreet eget, tincidunt dictum elit. Proin iaculis arcu ac hendrerit varius. Aenean euismod venenatis massa, in placerat dui elementum eget.', 99.9, 'images/uploadedImages/rosemary01_big.webp', 'images/uploadedImages/rosemary01.webp', '2023-08-21 20:13:11');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `registered` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `registered`) VALUES
(13, 'chaby', 'chaby@mail.com', '$2y$10$2eZ2sFAbjnB3Me9Sjh8McutfTDr9a3tdfTJLXquK.OnnMiF65tDXW', '2023-08-22 20:42:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
