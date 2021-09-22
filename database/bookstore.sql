-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.21 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table book_store.author
CREATE TABLE IF NOT EXISTS `author` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table book_store.author: 6 rows
/*!40000 ALTER TABLE `author` DISABLE KEYS */;
INSERT INTO `author` (`id`, `name`) VALUES
	(1, 'Waseem'),
	(2, 'Ahmed'),
	(3, 'Shahzad'),
	(4, 'Sajid'),
	(5, 'Umair'),
	(6, 'Rehman');
/*!40000 ALTER TABLE `author` ENABLE KEYS */;

-- Dumping structure for table book_store.books
CREATE TABLE IF NOT EXISTS `books` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(250) NOT NULL,
  `author_id` int NOT NULL,
  `category_id` int NOT NULL,
  `price` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table book_store.books: 32 rows
/*!40000 ALTER TABLE `books` DISABLE KEYS */;
INSERT INTO `books` (`id`, `name`, `description`, `image`, `author_id`, `category_id`, `price`) VALUES
	(1, 'Walter Ramos', 'Vel minim et quod no', '/assets/img/category/a1.jpg', 1, 5, 300),
	(2, 'Taylor Rhodes', 'Optio eos est vero ', '/assets/img/category/b1.jpg', 4, 2, 400),
	(3, 'Louis Finch', 'Quisquam deserunt ut', '/assets/img/category/c1.jpg', 2, 1, 400),
	(4, 'Branden Burgess', 'Explicabo Omnis in ', '/assets/img/category/d1.jpg', 3, 6, 500),
	(5, 'Karen Fernandez', 'Exercitation iusto e', '/assets/img/category/e1.jpg', 5, 3, 867),
	(6, 'Orla Cooley', 'Sequi dolor voluptat', '/assets/img/category/f1.jpg', 6, 4, 250),
	(15, 'Louis Patterson', 'Est qui ipsam labori', '/assets/img/book-20-250x333.jpg', 2, 3, 653),
	(14, 'Sara Turner', 'Voluptatum amet rep', '/assets/img/book-11-250x333.jpg', 2, 5, 156),
	(13, 'Sacha Vaughn', 'Ullamco expedita qui', '/assets/img/book-06-250x333.jpg', 3, 3, 164),
	(16, 'Miriam Myers', 'Aut beatae eum nihil', '/assets/img/book-15-250x333.jpg', 3, 5, 643),
	(17, 'Rhona Fulton', 'Irure sapiente ut ni', '/assets/img/book-21-250x333.jpg', 1, 1, 408),
	(18, 'James Good', 'Nisi sint facilis qu', '/assets/img/book-22-250x333.jpg', 4, 6, 286),
	(19, 'Hasad Owens', 'At voluptates exerci', '/assets/img/book-06-250x333.jpg', 5, 2, 694),
	(20, 'Demetria Aguilar', 'Nam dolor vel consec', '/assets/img/book-23-250x333.jpg', 6, 3, 801),
	(21, 'Keelie Kirby', 'Iure dignissimos qui', '/assets/img/category/a2.jpg', 4, 6, 309),
	(22, 'Joan Norris', 'Excepteur asperiores', '/assets/img/category/a3.jpg', 6, 1, 423),
	(23, 'Clementine Lane', 'Dicta et facilis in ', '/assets/img/category/a4.jpg', 1, 6, 289),
	(24, 'Dominic Rollins', 'Laudantium esse si', '/assets/img/category/b2.jpg', 4, 2, 83),
	(25, 'Burke Oconnor', 'Libero dolorum provi', '/assets/img/category/b3.jpg', 3, 4, 791),
	(26, 'Nathan Bradford', 'Tempor est quam ipsu', '/assets/img/category/b4.jpg', 5, 1, 348),
	(27, 'Shellie Moody', 'Ea ad corporis liber', '/assets/img/category/c2.jpg', 2, 5, 537),
	(28, 'Devin Hyde', 'Exercitationem nemo ', '/assets/img/category/c3.jpg', 3, 4, 106),
	(29, 'Yasir Munoz', 'Corporis quidem recu', '/assets/img/category/c4.jpg', 1, 5, 315),
	(30, 'Travis Guerra', 'Esse nihil omnis et ', '/assets/img/category/d2.jpg', 2, 4, 160),
	(31, 'Luke Grimes', 'Quo earum omnis volu', '/assets/img/category/d3.jpg', 2, 4, 376),
	(32, 'Britanney Lucas', 'Eos aliquid tempor e', '/assets/img/category/d4.jpg', 5, 2, 936),
	(33, 'Walker Weeks', 'Suscipit quisquam ne', '/assets/img/category/e2.jpg', 2, 6, 767),
	(34, 'Baker Rocha', 'Ipsum eius alias el', '/assets/img/category/e3.jpg', 2, 4, 220),
	(35, 'Alea Merritt', 'Non natus incididunt', '/assets/img/category/e4.jpg', 5, 6, 126),
	(36, 'Genevieve Hyde', 'Irure assumenda veli', '/assets/img/category/f2.jpg', 3, 5, 824),
	(37, 'Ashton Swanson', 'Obcaecati sit aliqui', '/assets/img/category/f3.jpg', 5, 2, 910),
	(38, 'Ross Coffey', 'Eiusmod laboris quia', '/assets/img/category/f4.jpg', 5, 1, 943);
/*!40000 ALTER TABLE `books` ENABLE KEYS */;

-- Dumping structure for table book_store.category
CREATE TABLE IF NOT EXISTS `category` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table book_store.category: 6 rows
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` (`id`, `name`) VALUES
	(1, 'crime'),
	(2, 'hobbies'),
	(3, 'science'),
	(4, 'education'),
	(5, 'buiseness'),
	(6, 'helth');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;

-- Dumping structure for table book_store.orders
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `total_ammount` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table book_store.orders: 0 rows
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;

-- Dumping structure for table book_store.order_item
CREATE TABLE IF NOT EXISTS `order_item` (
  `id` int NOT NULL AUTO_INCREMENT,
  `book_id` int NOT NULL,
  `order_id` int NOT NULL,
  `quantity` int NOT NULL,
  `unit_price` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table book_store.order_item: 0 rows
/*!40000 ALTER TABLE `order_item` DISABLE KEYS */;
/*!40000 ALTER TABLE `order_item` ENABLE KEYS */;

-- Dumping structure for table book_store.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `User_email` varchar(50) NOT NULL,
  `User_password` varchar(50) NOT NULL,
  `type` enum('CUSTOMER','ADMIN') DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table book_store.users: 2 rows
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `User_email`, `User_password`, `type`) VALUES
	(1, 'Sajid', 'sajid123@gmail.com', 'sajid123', 'ADMIN'),
	(5, 'Alfonso', 'coni@mailinator.com', 'Pa$$w0rd!', 'CUSTOMER');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
