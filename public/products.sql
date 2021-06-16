-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2021 at 05:26 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `productattrs`
--

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `attributes`, `created_at`, `updated_at`) VALUES
(1, 'Product with Colors & Sizes', '{\"Colors\":[{\"id\":1,\"name\":\"Red\"},{\"id\":3,\"name\":\"Blue\"}],\"Sizes\":[{\"id\":5,\"name\":\"Medium\"},{\"id\":6,\"name\":\"Small\"}]}', '2021-06-16 01:22:09', '2021-06-16 01:22:09'),
(2, 'Product with Colors & Types', '{\"Colors\":[{\"id\":2,\"name\":\"Black\"},{\"id\":3,\"name\":\"Blue\"}],\"Types\":[{\"id\":7,\"name\":\"Coton\"},{\"id\":8,\"name\":\"Polyester\"}]}', '2021-06-16 01:22:39', '2021-06-16 01:22:40'),
(3, 'Product with Sizes & Types', '{\"Sizes\":[{\"id\":4,\"name\":\"Large\"},{\"id\":5,\"name\":\"Medium\"}],\"Types\":[{\"id\":8,\"name\":\"Polyester\"}]}', '2021-06-16 01:23:03', '2021-06-16 01:23:03'),
(4, 'Product with Colors , Sizes & Types', '{\"Colors\":[{\"id\":1,\"name\":\"Red\"}],\"Sizes\":[{\"id\":5,\"name\":\"Medium\"}],\"Types\":[{\"id\":7,\"name\":\"Coton\"},{\"id\":8,\"name\":\"Polyester\"}]}', '2021-06-16 01:23:24', '2021-06-16 01:23:24'),
(5, 'Product with Colors only', '{\"Colors\":[{\"id\":2,\"name\":\"Black\"}]}', '2021-06-16 01:23:51', '2021-06-16 01:23:51');

--
-- Dumping data for table `product_attributes`
--

INSERT INTO `product_attributes` (`id`, `product_id`, `attribute_option_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2021-06-16 01:22:09', '2021-06-16 01:22:09'),
(2, 1, 3, '2021-06-16 01:22:09', '2021-06-16 01:22:09'),
(3, 1, 5, '2021-06-16 01:22:09', '2021-06-16 01:22:09'),
(4, 1, 6, '2021-06-16 01:22:09', '2021-06-16 01:22:09'),
(5, 2, 2, '2021-06-16 01:22:39', '2021-06-16 01:22:39'),
(6, 2, 3, '2021-06-16 01:22:39', '2021-06-16 01:22:39'),
(7, 2, 7, '2021-06-16 01:22:40', '2021-06-16 01:22:40'),
(8, 2, 8, '2021-06-16 01:22:40', '2021-06-16 01:22:40'),
(9, 3, 4, '2021-06-16 01:23:03', '2021-06-16 01:23:03'),
(10, 3, 5, '2021-06-16 01:23:03', '2021-06-16 01:23:03'),
(11, 3, 8, '2021-06-16 01:23:03', '2021-06-16 01:23:03'),
(12, 4, 1, '2021-06-16 01:23:24', '2021-06-16 01:23:24'),
(13, 4, 5, '2021-06-16 01:23:24', '2021-06-16 01:23:24'),
(14, 4, 7, '2021-06-16 01:23:24', '2021-06-16 01:23:24'),
(15, 4, 8, '2021-06-16 01:23:24', '2021-06-16 01:23:24'),
(16, 5, 2, '2021-06-16 01:23:51', '2021-06-16 01:23:51');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
