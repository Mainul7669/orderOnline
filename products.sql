-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2023 at 04:13 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `price` int(10) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category`, `price`, `image`) VALUES
(1, 'Pepperoni pizza', 'Pizza', 800, 'top-view-pepperoni-pizza-with-mushroom-sausages-bell-pepper-olive-corn-black-wooden.jpg'),
(3, 'Chocolate-cake', 'Desserts', 250, 'glaze-pouring-chocolate-cake-wooden-board-syrop-side-view.jpg'),
(4, 'Seafood pasta with shrimps', 'Pasta', 250, 'olayinka-babalola-r01ZopTiEV8-unsplash.jpg'),
(6, 'white Pasta', 'Pasta', 150, 'pixzolo-photography-aeESmmFKH0M-unsplash.jpg'),
(7, 'Spaghetti Bolognese', 'Pasta', 180, 'stefan-schauberger-Zy3H2bIF3Vs-unsplash.jpg'),
(8, 'Mushrooms Pizza', 'Pizza', 270, 'pizza-5.png'),
(9, 'BBQ Pizza', 'Pizza', 350, 'pizza-4.png'),
(10, 'Cheesy Pizza', 'Pizza', 450, 'pizza-1.png'),
(11, 'Orange Juice', 'Drinks', 170, 'drink-1.png'),
(12, 'Coffe', 'Drinks', 70, 'drink-2.png'),
(13, 'Lemon Juice', 'Drinks', 120, 'drink-3.png'),
(14, 'Strawberry Juice', 'Drinks', 140, 'drink-5.png'),
(15, 'Oreo Shake', 'Desserts', 150, 'dessert-3.png'),
(16, 'Mini Cake', 'Desserts', 120, 'dessert-4.png'),
(17, 'Vanilla shake', 'Desserts', 160, 'dessert-5.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
