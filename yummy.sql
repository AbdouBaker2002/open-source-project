-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2023 at 11:14 PM
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
-- Database: `yummy`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` text NOT NULL,
  `message` text NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `message`, `status`) VALUES
(3, 'Moo Khaled', 'AbdelMoneim21042@fci.bu.edu.eg', 'Manager', 'unread'),
(4, 'Moo Khaled', 'AbdelMoneim21042@fci.bu.edu.eg', 'Manager ', 'unread'),
(5, 'cxvm c', 'AbdelMoneim21042@fci.bu.edu.eg', 'avsdl c', 'unread'),
(6, 'Moo Khaled', 'AbdelMoneim21042@fci.bu.edu.eg', 'Manager', 'unread'),
(7, 'Moo Khaled', 'AbdelMoneim21042@fci.bu.edu.eg', 'رقم واحد م يشغلوش ولا واحد ال MOOOO', 'unread'),
(8, 'svdmcl', 'AbdelMoneim21042@fci.bu.edu.eg', 'ad;cmsvdc ', 'unread');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `description`, `price`, `image_url`) VALUES
(1, 'Burger', 'Juicy beef patty with fresh toppings, served on a sesame seed bun.', '9.99', 'image/buger.jpg'),
(2, 'Pasta', 'Al dente pasta tossed in a rich tomato sauce with garlic, onions, and herbs.', '12.99', 'image/pasta.jpg'),
(3, 'Lasagna', 'Layers of pasta, seasoned ground meat, and melted cheese.', '14.99', 'image/lasagna.webp'),
(9, 'Sushi', 'Freshly prepared bite-sized rolls of rice with seafood and vegetables.', '18.99', 'image/Sushi.jpg'),
(10, 'Tacos', 'Tortillas filled with seasoned meat, salsa, guacamole, and cheese.', '3.99', 'image/Tacos.jpg'),
(11, 'Pad Thai', 'Stir-fried rice noodles with shrimp, tofu, eggs, and peanuts in tamarind sauce.', '10.99', 'image/Pad Thai.jpg'),
(12, 'Steak', 'Grilled beef served with vegetables and choice of sauce.', '24.99', 'image/Steak.jpg'),
(13, 'Ramen', 'Wheat noodles in savory broth with pork, egg, and green onions.', '13.99', 'image/Ramen.jpg'),
(14, 'Chicken Curry', 'Tender chicken in flavorful curry sauce with coconut milk.', '14.99', 'image/Chicken Curry.jpg'),
(15, 'Pizza', 'Thin crust pizza topped with fresh ingredients and mozzarella cheese.', '11.99', 'image/pizza.jpg'),
(16, 'Hot Dog', 'Grilled or boiled sausage in a soft bun with various toppings.', '4.99', 'image/Hot_dog.jpg'),
(17, 'Biryani', 'Fragrant basmati rice cooked with aromatic spices and tender meat.', '15.99', 'image/biryani.webp');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `order_email` varchar(255) NOT NULL,
  `order_name` varchar(255) NOT NULL,
  `order_image` text NOT NULL,
  `order_number` int(11) NOT NULL,
  `order_price` decimal(10,2) NOT NULL,
  `order_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `time` time DEFAULT NULL,
  `date` date DEFAULT NULL,
  `number_of_individuals` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `email`, `time`, `date`, `number_of_individuals`) VALUES
(6, 'AbdelMoneim21042@fci.bu.edu.eg', '18:00:00', '2023-05-25', 20);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `instagram` text NOT NULL,
  `twitter` text NOT NULL,
  `facebook` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `name`, `image`, `instagram`, `twitter`, `facebook`, `description`) VALUES
(1, 'C.Ronaldo', 'image/Cristiano Ronaldo.jpg', ' https://www.instagram.com/cristiano', ' https://twitter.com/Cristiano', ' https://www.facebook.com/Cristiano', '\r\nI visited Yummy and was thoroughly impressed. The ambiance was inviting, the service was impeccable, and the food was divine. The flavors were outstanding, and the presentation was top-notch. I highly recommend Yummy for an unforgettable dining experience.'),
(2, 'Lionel Messi', 'image/messi.jpg', 'https://www.instagram.com/leomessi', 'https://twitter.com/messi10stats', ' https://www.facebook.com/leomessi', 'I visited Yummy and was thoroughly impressed. The ambiance was inviting, the service was impeccable, and the food was divine. The flavors were outstanding, and the presentation was top-notch. I highly recommend Yummy for an unforgettable dining experience.\r\n\r\n\r\n\r\n\r\n\r\n\r\n'),
(3, 'Serena Williams', 'image/Serena Williams.jpg', 'https://www.instagram.com/serenawilliams', ' https://twitter.com/serenawilliams', ' https://www.facebook.com/SerenaWilliams', '\r\nI visited Yummy and was thoroughly impressed. The ambiance was inviting, the service was impeccable, and the food was divine. The flavors were outstanding, and the presentation was top-notch. I highly recommend Yummy for an unforgettable dining experience.'),
(4, 'LeBron James', 'image/LeBron James.jpg', 'https://www.instagram.com/kingjames', 'https://twitter.com/KingJames', 'https://www.facebook.com/LeBron', 'I visited Yummy and was thoroughly impressed. The ambiance was inviting, the service was impeccable, and the food was divine. The flavors were outstanding, and the presentation was top-notch. I highly recommend Yummy for an unforgettable dining experience.\r\n\r\n\r\n\r\n\r\n\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `instagram` text NOT NULL,
  `facebook` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `name`, `description`, `instagram`, `facebook`, `image`) VALUES
(1, 'Hakim Samir', 'Hakim Samir specializes in Italian food', 'https://instagram.com/hakim__samir?igshid=ZGUzMzM3NWJiOQ==', 'https://www.facebook.com/hakimsamir.hakim.94?mibextid=ZbWKwL', 'image/hakim.jpg'),
(2, 'Zeyad Walid', 'Zeyad Walid specializes in Egyptian food', 'https://instagram.com/zeyadgonem171?igshid=ZGUzMzM3NWJiOQ==', 'https://www.facebook.com/zezo.gonem?mibextid=ZbWKwL', 'image/zeyad.jpg'),
(3, 'A.Ayman', 'Ahmed Ayman is a specialist in the sweets department', 'https://instagram.com/ahmedayman2002?igshid=MzNlNGNkZWQ4Mg==', 'https://www.facebook.com/profile.php?id=100006438232948&mibextid=ZbWKwL', 'image/ahmed.jpg'),
(4, 'Khaled Saeed', 'Khaled Saeed is a specialist in the beverage department', 'https://instagram.com/khaled_saeeed_cr7_?igshid=NTc4MTIwNjQ2YQ==', 'https://www.facebook.com/profile.php?id=100012311620190&mibextid=ZbWKwL', 'image/khaled.jpg'),
(5, 'A.Baker', 'Abdou Baker specializes in French food', 'https://instagram.com/bdlmnm9347?igshid=MmJiY2I4NDBkZg==', 'https://www.facebook.com/profile.php?id=100056947776592&mibextid=ZbWKwL', 'image/abdou.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `First_Name` varchar(40) NOT NULL,
  `Last_Name` varchar(40) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `User_Password` varchar(50) NOT NULL,
  `phone` text NOT NULL,
  `User_Address` text NOT NULL,
  `Age` int(11) NOT NULL,
  `Gender` int(11) NOT NULL,
  `Admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `First_Name`, `Last_Name`, `Email`, `User_Password`, `phone`, `User_Address`, `Age`, `Gender`, `Admin`) VALUES
(11, 'Abdou', 'Baker', 'abdolmoneaalaabaker@gmail.com', 'Alaa1974yy@', '01093712599', 'jdihisw svissih scjidv h', 21, 1, 1),
(12, 'abdulmonem', 'alaa aldeen', 'AbdelMoneim21042@fci.bu.edu.eg', 'Alaa1974yy@', '01093712599', 'tahla benha ', 21, 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
