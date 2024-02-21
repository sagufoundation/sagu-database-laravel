-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 21, 2024 at 08:17 AM
-- Server version: 10.6.16-MariaDB-cll-lve
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u5463725_sagu-database-laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` enum('Publish','Draft') DEFAULT 'Publish',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `name`, `slug`, `description`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Robin Hood', NULL, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'Publish', '2023-10-08 17:44:39', '2023-10-08 17:44:39', NULL),
(2, 'Felix Hood', NULL, 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'Publish', '2023-10-08 17:44:39', '2023-10-08 17:44:39', NULL),
(3, 'Juan Hood', NULL, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.', 'Publish', '2023-10-08 17:44:39', '2023-10-08 17:44:39', NULL),
(4, 'Howard Pyle', 'howard-pyle', NULL, 'Publish', '2023-10-08 17:50:32', '2023-10-08 17:50:32', NULL),
(5, 'Jane Rollason', 'jane-rollason', NULL, 'Publish', '2023-10-08 17:57:38', '2023-10-08 17:57:38', NULL),
(6, 'Hustler', 'hustler', NULL, 'Publish', '2023-10-08 18:03:31', '2023-10-08 18:03:31', NULL),
(7, 'Cho Young-Sun', 'cho-young-sun', NULL, 'Publish', '2023-10-08 18:05:25', '2023-10-08 18:05:25', NULL),
(8, 'David Morrison', 'david-morrison', NULL, 'Publish', '2023-10-08 18:07:04', '2023-10-08 18:07:04', NULL),
(9, 'Antoinette Moses', 'antoinette-moses', NULL, 'Publish', '2023-10-08 18:08:53', '2023-10-08 18:08:53', NULL),
(10, 'J.M. Barrie Peter Pan', 'jm-barrie-peter-pan', NULL, 'Publish', '2023-10-08 18:10:40', '2023-10-08 18:10:40', NULL),
(11, 'H.G.Wels', 'hgwels', NULL, 'Publish', '2023-10-08 18:13:12', '2023-10-08 18:13:12', NULL),
(12, 'J.M. Newsome', 'jm-newsome', NULL, 'Publish', '2023-10-08 18:15:07', '2023-10-08 18:15:07', NULL),
(13, 'J.K. Rowling', 'jk-rowling', NULL, 'Publish', '2023-10-08 18:17:27', '2023-10-08 18:18:24', NULL),
(14, 'Jhon M. Echols dan Hasan Shadily', 'jhon-m-echols-dan-hasan-shadily', NULL, 'Publish', '2023-10-08 18:26:46', '2023-10-08 18:26:46', NULL),
(15, 'Max Lucado & Randi Frazee', 'max-lucado-randi-frazee', NULL, 'Publish', '2023-10-08 18:28:10', '2023-10-08 18:28:10', NULL),
(16, 'Jane Austen', 'jane-austen', NULL, 'Publish', '2023-10-08 18:30:31', '2023-10-08 18:30:31', NULL),
(17, 'Westerhill Road Bishopbriggs clasgow', 'westerhill-road-bishopbriggs-clasgow', NULL, 'Publish', '2023-10-08 18:33:06', '2023-10-08 18:33:06', NULL),
(18, 'Sakae Tsuboi', 'sakae-tsuboi', NULL, 'Publish', '2023-10-08 18:34:27', '2023-10-08 18:34:27', NULL),
(19, 'Aulia Mahiranissa. Mayasti Sattwika Duhita, Sofi Nito Amalia, Yurista Andina', 'aulia-mahiranissa-mayasti-sattwika-duhita-sofi-nito-amalia-yurista-andina', NULL, 'Publish', '2023-10-08 18:41:53', '2023-10-08 18:41:53', NULL),
(20, 'Prof. Dr. Yohana Yembise', 'prof-dr-yohana-yembise', NULL, 'Publish', '2023-10-08 18:45:32', '2023-10-08 18:45:32', NULL),
(21, 'Brian Sargent', 'brian-sargent', NULL, 'Publish', '2023-10-08 18:49:59', '2023-10-08 18:49:59', NULL),
(22, 'Kathtyn O Dell', 'kathtyn-o-dell', NULL, 'Publish', '2023-10-08 18:51:25', '2023-10-08 18:51:25', NULL),
(23, 'Nic Harris', 'nic-harris', NULL, 'Publish', '2023-10-08 18:53:30', '2023-10-08 18:53:30', NULL),
(24, 'Simon Beaver', 'simon-beaver', NULL, 'Publish', '2023-10-08 19:05:26', '2023-10-08 19:05:26', NULL),
(25, 'Eleanor Atikson', 'eleanor-atikson', NULL, 'Publish', '2023-10-08 19:07:10', '2023-10-08 19:07:10', NULL),
(26, 'Diana Naughton', 'diana-naughton', NULL, 'Publish', '2023-10-08 19:07:27', '2023-10-08 19:07:35', NULL),
(27, 'Kenna Bourke', 'kenna-bourke', NULL, 'Publish', '2023-10-08 19:11:26', '2023-10-08 19:11:26', NULL),
(28, 'Beatrix Potter', 'beatrix-potter', NULL, 'Publish', '2023-10-08 19:12:32', '2023-10-08 19:12:32', NULL),
(29, 'Lobert Ludlums', 'lobert-ludlums', NULL, 'Publish', '2023-10-08 19:14:57', '2023-10-08 19:14:57', NULL),
(30, 'Brother Grimm', 'brother-grimm', NULL, 'Publish', '2023-10-08 19:16:08', '2023-10-08 19:16:08', NULL),
(31, 'Sergei Eliseev', 'sergei-eliseev', NULL, 'Publish', '2023-10-08 19:19:20', '2023-10-08 19:19:20', NULL),
(32, 'Eta Wilson', 'eta-wilson', NULL, 'Publish', '2023-10-08 19:20:49', '2023-10-08 19:20:49', NULL),
(33, 'Benedicktus KG Pratama dkk', 'benedicktus-kg-pratama-dkk', NULL, 'Publish', '2023-10-08 19:22:59', '2023-10-08 19:22:59', NULL),
(34, 'Mellie Buse and Jan Page', 'mellie-buse-and-jan-page', NULL, 'Publish', '2023-10-08 19:24:23', '2023-10-08 19:24:23', NULL),
(35, 'Chamila de Ia Bedoyere', 'chamila-de-ia-bedoyere', NULL, 'Publish', '2023-10-08 19:28:29', '2023-10-08 19:28:29', NULL),
(36, 'Prof. Dr. Softjan Assauri M.B.A', 'prof-dr-softjan-assauri-mba', NULL, 'Publish', '2023-10-08 19:52:23', '2023-10-08 19:52:23', NULL),
(37, 'Indah Ein Fajar Wati Wainsaf, S.Ket, Dkk', 'indah-ein-fajar-wati-wainsaf-sket-dkk', NULL, 'Publish', '2023-10-08 19:55:00', '2023-10-08 19:55:00', NULL),
(38, 'Mr. Fox yang Fantastis', 'mr-fox-yang-fantastis', NULL, 'Publish', '2023-10-08 20:57:32', '2023-10-08 20:57:32', NULL),
(39, 'Cho Nam Joo', 'cho-nam-joo', NULL, 'Publish', '2023-10-08 20:59:06', '2023-10-08 20:59:06', NULL),
(40, 'Chamila de Ia Bedoyere, Jhon Farndon, Steve Parker, Barbara Taylor', 'chamila-de-ia-bedoyere-jhon-farndon-steve-parker-barbara-taylor', NULL, 'Publish', '2023-10-08 21:01:09', '2023-10-08 21:01:09', NULL),
(41, 'Roald Dahl', 'roald-dahl', NULL, 'Publish', '2023-10-08 21:02:42', '2023-10-08 21:02:42', NULL),
(42, 'John Escott', 'john-escott', NULL, 'Publish', '2023-10-08 21:04:10', '2023-10-08 21:04:10', NULL),
(43, 'Margaret Greaves', 'margaret-greaves', NULL, 'Publish', '2023-10-08 21:06:07', '2023-10-08 21:06:07', NULL),
(44, 'Marilyn Jager Adams Iva Carruthers Marsha Roit', 'marilyn-jager-adams-iva-carruthers-marsha-roit', NULL, 'Publish', '2023-10-08 21:09:04', '2023-10-08 21:09:04', NULL),
(45, 'Frank Brennan', 'frank-brennan', NULL, 'Publish', '2023-10-08 21:12:34', '2023-10-08 21:12:34', NULL),
(46, 'Kay Stammers', 'kay-stammers', NULL, 'Publish', '2023-10-08 21:18:29', '2023-10-08 21:18:29', NULL),
(47, 'Wellington Road Rowvile', 'wellington-road-rowvile', NULL, 'Publish', '2023-10-08 21:49:10', '2023-10-08 21:49:10', NULL),
(48, 'Quentin Blake', 'quentin-blake', NULL, 'Publish', '2023-10-08 21:51:09', '2023-10-08 21:51:09', NULL),
(49, 'Nintendo', 'nintendo', NULL, 'Publish', '2023-10-08 22:01:52', '2023-10-08 22:01:52', NULL),
(50, 'Andersen Press Ltd', 'andersen-press-ltd', NULL, 'Publish', '2023-10-08 22:03:46', '2023-10-08 22:03:46', NULL),
(51, 'Robbin Cuddy', 'robbin-cuddy', NULL, 'Publish', '2023-10-08 22:05:22', '2023-10-08 22:05:22', NULL),
(52, 'Dayu Rifanto & Maya Puspa Dewi', 'dayu-rifanto-maya-puspa-dewi', NULL, 'Publish', '2023-10-08 22:07:59', '2023-10-08 22:07:59', NULL),
(53, 'James Reyne and Wendi Straw', 'james-reyne-and-wendi-straw', NULL, 'Publish', '2023-10-08 22:10:00', '2023-10-08 22:10:00', NULL),
(54, 'Beatrix Potter', 'beatrix-potter', NULL, 'Publish', '2023-10-08 22:11:13', '2023-10-10 21:33:03', '2023-10-10 21:33:03'),
(55, 'John Malam', 'john-malam', NULL, 'Publish', '2023-10-08 22:12:45', '2023-10-08 22:12:45', NULL),
(56, 'Tom Mason And Dan Danko', 'tom-mason-and-dan-danko', NULL, 'Publish', '2023-10-08 22:14:04', '2023-10-08 22:14:04', NULL),
(57, 'Camilla de la Bedoyere', 'camilla-de-la-bedoyere', NULL, 'Publish', '2023-10-08 22:15:44', '2023-10-08 22:15:44', NULL),
(58, 'Kate Toms', 'kate-toms', NULL, 'Publish', '2023-10-08 22:17:04', '2023-10-08 22:17:04', NULL),
(59, 'Bungaran Antonius Simanjuntak', 'bungaran-antonius-simanjuntak', NULL, 'Publish', '2023-10-08 22:18:11', '2023-10-08 22:18:11', NULL),
(60, 'Max Lucado', 'max-lucado', NULL, 'Publish', '2023-10-08 22:20:47', '2023-10-08 22:20:47', NULL),
(61, 'Komunitas Rimbah', 'komunitas-rimbah', NULL, 'Publish', '2023-10-08 22:22:17', '2023-10-08 22:22:17', NULL),
(62, 'Drs. Sri Endah Martini, M.Ed', 'drs-sri-endah-martini-med', NULL, 'Publish', '2023-10-08 22:23:39', '2023-10-08 22:23:39', NULL),
(63, 'Maman Shuerman', 'maman-shuerman', NULL, 'Publish', '2023-10-08 22:24:47', '2023-10-08 22:24:47', NULL),
(64, 'Yayank Maulana & Mei Lin Indra Wati', 'yayank-maulana-mei-lin-indra-wati', NULL, 'Publish', '2023-10-08 22:26:08', '2023-10-08 22:26:08', NULL),
(65, 'Valerie Wilame', 'valerie-wilame', NULL, 'Publish', '2023-10-08 22:27:43', '2023-10-08 22:27:43', NULL),
(66, 'Hengki Harisoi', 'hengki-harisoi', NULL, 'Publish', '2023-10-08 22:30:42', '2023-10-08 22:30:42', NULL),
(67, 'Eric Van Lustbader', 'eric-van-lustbader', NULL, 'Publish', '2023-10-08 22:32:01', '2023-10-08 22:32:01', NULL),
(68, 'David Mckee', 'david-mckee', NULL, 'Publish', '2023-10-08 22:33:27', '2023-10-08 22:33:27', NULL),
(69, 'Anggelina Ballerina', 'anggelina-ballerina', NULL, 'Publish', '2023-10-08 22:34:41', '2023-10-08 22:34:41', NULL),
(70, 'Anastasia Febriani Yandon Kossay', 'anastasia-febriani-yandon-kossay', NULL, 'Publish', '2023-10-08 22:35:51', '2023-10-08 22:35:51', NULL),
(71, 'Jogianto', 'jogianto', 'Jogianto', 'Publish', '2023-12-21 02:46:52', '2023-12-21 02:46:52', NULL),
(72, 'Frances Walkins', 'frances-walkins', NULL, 'Publish', '2024-01-25 01:37:05', '2024-01-25 01:37:05', NULL),
(73, 'Alexsandra brown', 'alexsandra-brown', NULL, 'Publish', '2024-01-25 02:06:21', '2024-01-25 02:06:21', NULL),
(74, 'Rawdon wyatt', 'rawdon-wyatt', NULL, 'Publish', '2024-01-25 02:09:13', '2024-01-25 02:09:13', NULL),
(75, 'Liz and john soars', 'liz-and-john-soars', NULL, 'Publish', '2024-01-25 02:12:05', '2024-01-25 02:12:05', NULL),
(76, 'Christina latham', 'christina-latham', NULL, 'Publish', '2024-01-25 02:13:47', '2024-01-25 02:13:47', NULL),
(77, 'SAGU FOUNDATION', 'sagu-foundation', NULL, 'Publish', '2024-01-25 02:15:30', '2024-01-25 02:15:30', NULL),
(78, 'Paul seligson', 'paul-seligson', NULL, 'Publish', '2024-01-25 02:17:46', '2024-01-25 02:17:46', NULL),
(79, 'Paul seligson', 'paul-seligson', NULL, 'Publish', '2024-01-25 02:18:07', '2024-01-25 02:18:07', NULL),
(80, 'Paul suligson', 'paul-suligson', NULL, 'Publish', '2024-01-25 02:33:54', '2024-01-25 02:33:54', NULL),
(81, 'Scoot thornbury', 'scoot-thornbury', NULL, 'Publish', '2024-01-25 02:45:24', '2024-01-25 02:45:24', NULL),
(82, 'SAGU FOUNDATION', 'sagu-foundation', NULL, 'Publish', '2024-01-25 02:56:52', '2024-01-25 02:56:52', NULL),
(83, 'liz', 'liz', NULL, 'Publish', '2024-01-25 02:59:04', '2024-01-25 02:59:04', NULL),
(84, 'Gabi duigu', 'gabi-duigu', NULL, 'Publish', '2024-01-25 03:00:52', '2024-01-25 03:00:52', NULL),
(85, 'Erric keller', 'erric-keller', NULL, 'Publish', '2024-01-25 03:02:50', '2024-01-25 03:02:50', NULL),
(86, 'Chris gough', 'chris-gough', NULL, 'Publish', '2024-01-25 03:07:06', '2024-01-25 03:07:06', NULL),
(87, 'Louis Rogers', 'louis-rogers', NULL, 'Publish', '2024-01-25 03:19:28', '2024-01-25 03:19:28', NULL),
(88, 'Jerry Lambert', 'jerry-lambert', NULL, 'Publish', '2024-01-25 03:25:10', '2024-01-25 03:25:10', NULL),
(89, 'Mario Rinvolucri', 'mario-rinvolucri', NULL, 'Publish', '2024-01-25 03:28:06', '2024-01-25 03:28:06', NULL),
(90, 'Vannesa Jakaman', 'vannesa-jakaman', NULL, 'Publish', '2024-01-25 03:29:40', '2024-01-25 03:29:40', NULL),
(91, 'Sue Kay', 'sue-kay', NULL, 'Publish', '2024-01-25 03:32:14', '2024-01-25 03:32:14', NULL),
(92, 'Ruth Gairus', 'ruth-gairus', NULL, 'Publish', '2024-01-25 03:33:55', '2024-01-25 03:33:55', NULL),
(93, 'Amanda Jefrities', 'amanda-jefrities', NULL, 'Publish', '2024-01-25 03:35:44', '2024-01-25 03:35:44', NULL),
(94, 'David Jay', 'david-jay', NULL, 'Publish', '2024-01-25 03:37:45', '2024-01-25 03:37:45', NULL),
(95, 'Fiona Mcgarry', 'fiona-mcgarry', NULL, 'Publish', '2024-01-25 03:39:49', '2024-01-25 03:39:49', NULL),
(96, 'Tola Okogwu', 'tola-okogwu', NULL, 'Publish', '2024-01-25 03:41:46', '2024-01-25 03:41:46', NULL),
(97, 'Guid Blyton', 'guid-blyton', NULL, 'Publish', '2024-01-25 03:43:24', '2024-01-25 03:43:24', NULL),
(98, 'Rawdon Wyatt', 'rawdon-wyatt', NULL, 'Publish', '2024-01-25 03:45:32', '2024-01-25 03:45:32', NULL),
(99, 'Helena Gom', 'helena-gom', NULL, 'Publish', '2024-01-25 03:47:53', '2024-01-25 03:47:53', NULL),
(100, 'Sarah', 'sarah', NULL, 'Publish', '2024-01-25 03:50:05', '2024-01-25 03:50:05', NULL),
(101, 'Lyu Scoot', 'lyu-scoot', NULL, 'Publish', '2024-01-25 03:52:04', '2024-01-25 03:52:04', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `author_id` bigint(20) UNSIGNED NOT NULL,
  `catagory_id` bigint(20) UNSIGNED NOT NULL,
  `cover` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `total` varchar(255) DEFAULT NULL,
  `summary` text DEFAULT NULL,
  `status` enum('Publish','Draft') DEFAULT 'Publish',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `author_id`, `catagory_id`, `cover`, `title`, `slug`, `total`, `summary`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(6, 4, 5, 'images/books/the-merry-adventures-of-robin-hood-1696812986.png', 'The Merry Adventures of Robin Hood', 'the-merry-adventures-of-robin-hood', '1', NULL, 'Publish', '2023-10-08 17:56:26', '2023-10-08 17:56:26', NULL),
(7, 5, 5, 'images/books/killer-bess-1696813121.png', 'Killer Bess', 'killer-bess', '1', NULL, 'Publish', '2023-10-08 17:58:41', '2023-10-08 17:58:41', NULL),
(8, 6, 4, 'images/books/rintisan-strategi-belajar-dari-kegagalan-1696813456.png', 'Rintisan Strategi Belajar Dari Kegagalan', 'rintisan-strategi-belajar-dari-kegagalan', '1', NULL, 'Publish', '2023-10-08 18:04:16', '2023-10-08 18:04:16', NULL),
(9, 7, 4, 'images/books/sport-seciense-sains-dalam-olaraga-1696813570.png', 'Sport Seciense Sains Dalam Olaraga', 'sport-seciense-sains-dalam-olaraga', '1', NULL, 'Publish', '2023-10-08 18:06:10', '2023-10-08 18:06:10', NULL),
(10, 8, 4, 'images/books/the-mind-map-1696813683.png', 'The Mind Map', 'the-mind-map', '1', NULL, 'Publish', '2023-10-08 18:08:03', '2023-10-08 18:08:03', NULL),
(11, 9, 3, 'images/books/book-boy-1696813777.png', 'Book Boy', 'book-boy', '1', NULL, 'Publish', '2023-10-08 18:09:37', '2023-10-08 18:09:37', NULL),
(12, 10, 5, 'images/books/second-start-to-the-right-and-straight-on-til-morning-1696813900.png', 'Second start to the right, and straight on til morning', 'second-start-to-the-right-and-straight-on-til-morning', '1', NULL, 'Publish', '2023-10-08 18:11:40', '2023-10-08 18:11:40', NULL),
(13, 11, 3, 'images/books/the-war-of-the-worlds-1696814037.png', 'The War Of The Worlds', 'the-war-of-the-worlds', '1', NULL, 'Publish', '2023-10-08 18:13:57', '2023-10-08 18:13:57', NULL),
(14, 12, 5, 'images/books/dragons-eggs-1696814176.png', 'Dragons Eggs', 'dragons-eggs', '1', NULL, 'Publish', '2023-10-08 18:16:16', '2023-10-08 18:16:16', NULL),
(15, 13, 4, 'images/books/the-asual-vacancy-1696814404.png', 'The Asual Vacancy', 'the-asual-vacancy', '1', NULL, 'Publish', '2023-10-08 18:20:04', '2023-10-08 18:20:04', NULL),
(16, 14, 4, 'images/books/kamus-inggris-indonesia-1696814852.png', 'Kamus Inggris Indonesia', 'kamus-inggris-indonesia', '4', NULL, 'Publish', '2023-10-08 18:27:32', '2023-10-08 18:27:32', NULL),
(17, 15, 4, 'images/books/the-story-the-bible-as-one-continuing-story-of-god-and-his-people-1696814977.png', 'The Story The bible as one continuing story of god and his people', 'the-story-the-bible-as-one-continuing-story-of-god-and-his-people', '1', NULL, 'Publish', '2023-10-08 18:29:37', '2023-10-08 18:29:37', NULL),
(18, 16, 4, 'images/books/pride-and-prejudice-1696815109.png', 'Pride And Prejudice', 'pride-and-prejudice', '1', NULL, 'Publish', '2023-10-08 18:31:49', '2023-10-08 18:31:49', NULL),
(19, 17, 8, 'images/books/colins-cobuild-advanced-learners-english-dictionary-1696815628.png', 'Colins Cobuild Advanced Learner\'s English Dictionary', 'colins-cobuild-advanced-learners-english-dictionary', '1', NULL, 'Publish', '2023-10-08 18:40:28', '2023-10-08 18:40:28', NULL),
(20, 18, 8, 'images/books/twenty-four-eyes-1696815646.png', 'Twenty-Four Eyes', 'twenty-four-eyes', '1', NULL, 'Publish', '2023-10-08 18:40:46', '2023-10-08 18:40:46', NULL),
(21, 19, 8, 'images/books/rintisan-prinsip-awal-pengembangan-produk-1696815766.png', 'Rintisan Prinsip Awal Pengembangan Produk', 'rintisan-prinsip-awal-pengembangan-produk', '4', NULL, 'Publish', '2023-10-08 18:42:46', '2023-10-08 18:42:46', NULL),
(22, 19, 8, 'images/books/bagimana-cara-membuat-gaya-jenama-1696815885.png', 'Bagimana Cara Membuat Gaya Jenama', 'bagimana-cara-membuat-gaya-jenama', '4', NULL, 'Publish', '2023-10-08 18:44:45', '2023-10-08 18:44:45', NULL),
(23, 20, 8, 'images/books/dunia-yohana-1696815990.png', 'Dunia Yohana', 'dunia-yohana', '1', NULL, 'Publish', '2023-10-08 18:46:30', '2023-10-08 18:46:30', NULL),
(24, 14, 8, 'images/books/kamus-indonesia-inggris-1696816102.png', 'Kamus Indonesia Inggris', 'kamus-indonesia-inggris', '3', NULL, 'Publish', '2023-10-08 18:48:22', '2023-10-08 18:48:22', NULL),
(25, 20, 8, 'images/books/mutiara-dari-timur-1696816163.png', 'Mutiara Dari Timur', 'mutiara-dari-timur', '1', NULL, 'Publish', '2023-10-08 18:49:23', '2023-10-08 18:49:23', NULL),
(26, 21, 8, 'images/books/mark-your-teritory-1696816238.png', 'Mark Your Teritory', 'mark-your-teritory', '1', NULL, 'Publish', '2023-10-08 18:50:38', '2023-10-08 18:50:38', NULL),
(27, 22, 8, 'images/books/mummies-and-myths-1696816345.png', 'Mummies And Myths', 'mummies-and-myths', '1', NULL, 'Publish', '2023-10-08 18:52:25', '2023-10-08 18:52:25', NULL),
(28, 23, 8, 'images/books/the-greatest-invention-of-all-time-1696817015.png', 'The Greatest Invention Of All Time', 'the-greatest-invention-of-all-time', '1', NULL, 'Publish', '2023-10-08 19:03:35', '2023-10-08 19:03:35', NULL),
(29, 23, 8, 'images/books/medicine-old-and-new-1696817075.png', 'Medicine Old And New', 'medicine-old-and-new', '1', NULL, 'Publish', '2023-10-08 19:04:35', '2023-10-08 19:04:35', NULL),
(30, 24, 8, 'images/books/wild-australia-1696817219.png', 'Wild Australia!', 'wild-australia', '1', NULL, 'Publish', '2023-10-08 19:06:59', '2023-10-08 19:06:59', NULL),
(31, 25, 8, 'images/books/greyfriars-bobby-1696817277.png', 'Greyfriars Bobby', 'greyfriars-bobby', '1', NULL, 'Publish', '2023-10-08 19:07:57', '2023-10-08 19:07:57', NULL),
(32, 26, 8, 'images/books/our-green-future-1696817303.png', 'Our Green Future', 'our-green-future', '1', NULL, 'Publish', '2023-10-08 19:08:23', '2023-10-08 19:08:23', NULL),
(33, 23, 8, 'images/books/wonder-of-the-world-1696817446.png', 'Wonder Of The World', 'wonder-of-the-world', '1', NULL, 'Publish', '2023-10-08 19:10:46', '2023-10-08 19:10:46', NULL),
(34, 27, 8, 'images/books/lost-the-mistery-of-amelia-earhart-1696817533.png', 'LOST The Mistery Of Amelia Earhart', 'lost-the-mistery-of-amelia-earhart', '1', NULL, 'Publish', '2023-10-08 19:12:13', '2023-10-08 19:12:13', NULL),
(35, 28, 8, 'images/books/the-tale-of-squirrel-nutkin-1696817587.png', 'The Tale Of Squirrel Nutkin', 'the-tale-of-squirrel-nutkin', '1', NULL, 'Publish', '2023-10-08 19:13:07', '2023-10-08 19:13:07', NULL),
(36, 21, 8, 'images/books/life-on-the-edge-extreme-homes-1696817648.png', 'LIFE ON THE EDGE Extreme Homes', 'life-on-the-edge-extreme-homes', '1', NULL, 'Publish', '2023-10-08 19:14:08', '2023-10-08 19:14:08', NULL),
(37, 29, 8, 'images/books/the-artic-event-1696817735.png', 'The Artic Event', 'the-artic-event', '1', NULL, 'Publish', '2023-10-08 19:15:35', '2023-10-08 19:15:35', NULL),
(38, 30, 8, 'images/books/hansel-and-gretel-1696817832.png', 'Hansel And Gretel', 'hansel-and-gretel', '1', NULL, 'Publish', '2023-10-08 19:17:12', '2023-10-08 19:17:12', NULL),
(40, 19, 8, 'images/books/bagimana-startup-mengelola-arus-kas-1696817922.png', 'Bagimana Startup Mengelola Arus Kas', 'bagimana-startup-mengelola-arus-kas', '1', NULL, 'Publish', '2023-10-08 19:18:42', '2023-10-08 19:18:42', NULL),
(41, 31, 8, 'images/books/princes-stories-1696818001.png', 'Princes Stories', 'princes-stories', '1', NULL, 'Publish', '2023-10-08 19:20:01', '2023-10-08 19:20:01', NULL),
(42, 32, 8, 'images/books/the-flintstenes-1696818124.png', 'The FlinTsTenes', 'the-flintstenes', '1', NULL, 'Publish', '2023-10-08 19:22:04', '2023-10-08 19:22:04', NULL),
(43, 33, 8, 'images/books/cinta-rakyat-papua-1696818241.png', 'Cinta Rakyat Papua', 'cinta-rakyat-papua', '1', NULL, 'Publish', '2023-10-08 19:24:01', '2023-10-08 19:24:01', NULL),
(44, 34, 8, 'images/books/grandpa-in-my-pocket-1696818432.png', 'Grandpa in my Pocket', 'grandpa-in-my-pocket', '1', NULL, 'Publish', '2023-10-08 19:27:12', '2023-10-08 19:27:12', NULL),
(45, 35, 8, 'images/books/egg-to-chicken-1696818550.png', 'Egg to Chicken', 'egg-to-chicken', '1', NULL, 'Publish', '2023-10-08 19:29:10', '2023-10-08 19:29:10', NULL),
(46, 35, 8, 'images/books/tadpole-to-frog-1696818621.png', 'Tadpole to Frog', 'tadpole-to-frog', '1', NULL, 'Publish', '2023-10-08 19:30:22', '2023-10-08 19:30:22', NULL),
(47, 36, 8, 'images/books/strategi-manajemen-sustainable-competitive-advantages-1696820012.png', 'Strategi Manajemen Sustainable Competitive Advantages', 'strategi-manajemen-sustainable-competitive-advantages', '1', NULL, 'Publish', '2023-10-08 19:53:32', '2023-10-08 19:53:32', NULL),
(48, 37, 8, 'images/books/kunang-kunang-laut-yang-baik-hati-1696820153.png', 'Kunang-Kunang Laut Yang Baik Hati', 'kunang-kunang-laut-yang-baik-hati', '1', NULL, 'Publish', '2023-10-08 19:55:53', '2023-10-08 19:55:53', NULL),
(49, 38, 8, 'images/books/roald-dahl-1696823909.png', 'Roald  Dahl', 'roald-dahl', '1', NULL, 'Publish', '2023-10-08 20:58:29', '2023-10-08 20:58:29', NULL),
(50, 39, 8, 'images/books/her-name-is-1696824015.png', 'Her Name Is..', 'her-name-is', '1', NULL, 'Publish', '2023-10-08 21:00:15', '2023-10-08 21:00:15', NULL),
(51, 40, 8, 'images/books/the-unlimate-guide-1696824122.png', 'The Unlimate Guide', 'the-unlimate-guide', '1', NULL, 'Publish', '2023-10-08 21:02:02', '2023-10-08 21:02:02', NULL),
(52, 41, 8, 'images/books/boy-tales-of-childhood-1696824218.png', 'Boy Tales of childhood', 'boy-tales-of-childhood', '1', NULL, 'Publish', '2023-10-08 21:03:38', '2023-10-08 21:03:38', NULL),
(53, 42, 8, 'images/books/postman-pat-1696824300.png', 'Postman Pat', 'postman-pat', '1', NULL, 'Publish', '2023-10-08 21:05:00', '2023-10-08 21:05:00', NULL),
(54, 43, 8, 'images/books/amanda-and-the-star-child-1696824456.png', 'Amanda And The Star Child', 'amanda-and-the-star-child', '1', NULL, 'Publish', '2023-10-08 21:07:36', '2023-10-08 21:07:36', NULL),
(55, 44, 8, 'images/books/open-court-reading-1696824593.png', 'Open Court Reading', 'open-court-reading', '1', NULL, 'Publish', '2023-10-08 21:09:53', '2023-10-08 21:09:53', NULL),
(56, 45, 8, 'images/books/windows-of-the-mind-1696824913.png', 'Windows Of The Mind', 'windows-of-the-mind', '1', NULL, 'Publish', '2023-10-08 21:15:13', '2023-10-08 21:15:13', NULL),
(57, 46, 8, 'images/books/tily-and-mrs-tweddle-1696825226.png', 'Tily And MRS Tweddle', 'tily-and-mrs-tweddle', '1', NULL, 'Publish', '2023-10-08 21:20:26', '2023-10-08 21:20:26', NULL),
(58, 47, 8, 'images/books/disnep-classic-storybook-collection-1696827023.png', 'Disnep Classic Storybook Collection', 'disnep-classic-storybook-collection', '1', NULL, 'Publish', '2023-10-08 21:50:23', '2023-10-08 21:50:23', NULL),
(59, 48, 8, 'images/books/james-and-the-gaint-peach-1696827126.png', 'James And the Gaint Peach', 'james-and-the-gaint-peach', '1', NULL, 'Publish', '2023-10-08 21:52:06', '2023-10-08 21:52:06', NULL),
(60, 48, 8, 'images/books/the-wits-1696827237.png', 'The Wits', 'the-wits', '1', NULL, 'Publish', '2023-10-08 21:53:57', '2023-10-08 21:53:57', NULL),
(61, 48, 8, 'images/books/matilda-1696827322.png', 'Matilda', 'matilda', '1', NULL, 'Publish', '2023-10-08 21:55:22', '2023-10-08 21:55:22', NULL),
(62, 48, 8, 'images/books/the-bfg-raksasa-besar-yang-baik-1696827400.png', 'The BFG Raksasa Besar Yang Baik', 'the-bfg-raksasa-besar-yang-baik', '1', NULL, 'Publish', '2023-10-08 21:56:40', '2023-10-08 21:56:40', NULL),
(63, 48, 8, 'images/books/charlie-and-the-great-glass-elevator-1696827543.png', 'Charlie and The Great Glass Elevator', 'charlie-and-the-great-glass-elevator', '1', NULL, 'Publish', '2023-10-08 21:59:03', '2023-10-08 21:59:03', NULL),
(64, 48, 8, 'images/books/charlie-and-the-chocolate-factory-1696827612.png', 'Charlie and The Chocolate Factory', 'charlie-and-the-chocolate-factory', '1', NULL, 'Publish', '2023-10-08 22:00:12', '2023-10-08 22:00:12', NULL),
(65, 49, 8, 'images/books/national-geographic-kids-1696827765.png', 'National Geographic KIDS', 'national-geographic-kids', '1', NULL, 'Publish', '2023-10-08 22:02:45', '2023-10-08 22:02:45', NULL),
(66, 50, 8, 'images/books/elmers-special-day-1696827880.png', 'Elmer\'s Special Day', 'elmers-special-day', '1', NULL, 'Publish', '2023-10-08 22:04:40', '2023-10-08 22:04:40', NULL),
(67, 51, 8, 'images/books/the-hunchback-of-notre-dame-1696827984.png', 'The Hunchback of Notre Dame', 'the-hunchback-of-notre-dame', '1', NULL, 'Publish', '2023-10-08 22:06:24', '2023-10-08 22:06:24', NULL),
(68, 52, 8, 'images/books/mira-and-edo-consevation-heroes-of-raja-ampat-1696828168.png', 'Mira And Edo Consevation Heroes Of Raja Ampat', 'mira-and-edo-consevation-heroes-of-raja-ampat', '1', NULL, 'Publish', '2023-10-08 22:09:28', '2023-10-08 22:09:28', NULL),
(69, 53, 8, 'images/books/the-little-engine-that-could-1696828238.png', 'The Little Engine That could', 'the-little-engine-that-could', '1', NULL, 'Publish', '2023-10-08 22:10:38', '2023-10-08 22:10:38', NULL),
(70, 54, 8, 'images/books/the-tales-of-the-flopsy-bunnies-1696828327.png', 'The Tales Of The FlopsY Bunnies', 'the-tales-of-the-flopsy-bunnies', '1', NULL, 'Publish', '2023-10-08 22:12:07', '2023-10-08 22:12:07', NULL),
(71, 55, 8, 'images/books/mithologies-giants-1696828412.png', 'Mithologies Giants', 'mithologies-giants', '1', NULL, 'Publish', '2023-10-08 22:13:32', '2023-10-08 22:13:32', NULL),
(72, 56, 8, 'images/books/shrek-2-the-movie-story-book-1696828496.png', 'Shrek 2 The Movie Story Book', 'shrek-2-the-movie-story-book', '1', NULL, 'Publish', '2023-10-08 22:14:56', '2023-10-08 22:14:56', NULL),
(73, 57, 8, 'images/books/seed-to-sunflowers-1696828584.png', 'Seed to Sunflowers', 'seed-to-sunflowers', '1', NULL, 'Publish', '2023-10-08 22:16:24', '2023-10-08 22:16:24', NULL),
(74, 58, 8, 'images/books/there-was-an-old-lady-who-swallowed-a-fly-1696828665.png', 'There Was an old lady who swallowed a fly', 'there-was-an-old-lady-who-swallowed-a-fly', '1', NULL, 'Publish', '2023-10-08 22:17:45', '2023-10-08 22:17:45', NULL),
(75, 59, 8, 'images/books/sejara-pariwisata-menuju-perkemangan-pariwisata-indonesia-1696828737.png', 'Sejara Pariwisata Menuju Perkemangan Pariwisata Indonesia', 'sejara-pariwisata-menuju-perkemangan-pariwisata-indonesia', '1', NULL, 'Publish', '2023-10-08 22:18:57', '2023-10-08 22:18:57', NULL),
(76, 60, 8, 'images/books/mukjizat-di-kafe-higher-grounds-1696828900.png', 'Mukjizat di Kafe Higher Grounds', 'mukjizat-di-kafe-higher-grounds', '1', NULL, 'Publish', '2023-10-08 22:21:40', '2023-10-08 22:21:40', NULL),
(77, 61, 8, 'images/books/kawan-antara-sunyi-1696828987.png', 'Kawan Antara Sunyi', 'kawan-antara-sunyi', '1', NULL, 'Publish', '2023-10-08 22:23:07', '2023-10-08 22:23:07', NULL),
(78, 62, 8, 'images/books/its-stony-time-1696829056.png', 'It\'s Stony Time', 'its-stony-time', '1', NULL, 'Publish', '2023-10-08 22:24:16', '2023-10-08 22:24:16', NULL),
(79, 63, 8, 'images/books/syair-semografi-sebuah-perjumpaan-tak-terduga-1696829127.png', 'Syair Semografi Sebuah Perjumpaan Tak Terduga', 'syair-semografi-sebuah-perjumpaan-tak-terduga', '1', NULL, 'Publish', '2023-10-08 22:25:27', '2023-10-08 22:25:27', NULL),
(80, 64, 8, 'images/books/napas-yang-tertinggal-di-tanah-papua-1696829216.png', 'Napas Yang Tertinggal Di Tanah Papua', 'napas-yang-tertinggal-di-tanah-papua', '1', NULL, 'Publish', '2023-10-08 22:26:56', '2023-10-08 22:26:56', NULL),
(81, 65, 8, 'images/books/mengenal-lingkungan-sekitar-1696829404.png', 'Mengenal Lingkungan Sekitar', 'mengenal-lingkungan-sekitar', '1', NULL, 'Publish', '2023-10-08 22:30:04', '2023-10-08 22:30:04', NULL),
(82, 66, 8, 'images/books/nyanyian-rohani-empat-suara-dari-is-kijne-1696829493.png', 'Nyanyian Rohani Empat Suara Dari I.S. KIJNE', 'nyanyian-rohani-empat-suara-dari-is-kijne', '1', NULL, 'Publish', '2023-10-08 22:31:33', '2023-10-08 22:31:33', NULL),
(83, 67, 8, 'images/books/jason-bourne-dan-retorns-in-robert-ludlums-the-bourne-deception-1696829575.png', 'Jason Bourne Dan Retorns In Robert Ludlum\'s The Bourne Deception', 'jason-bourne-dan-retorns-in-robert-ludlums-the-bourne-deception', '1', NULL, 'Publish', '2023-10-08 22:32:55', '2023-10-08 22:32:55', NULL),
(84, 68, 8, 'images/books/elmer-and-the-lost-teddy-1696829648.png', 'Elmer and The Lost Teddy', 'elmer-and-the-lost-teddy', '1', NULL, 'Publish', '2023-10-08 22:34:08', '2023-10-08 22:34:08', NULL),
(85, 69, 8, 'images/books/with-over-50-mini-stickers-1696829731.png', 'With Over 50 Mini Stickers!', 'with-over-50-mini-stickers', '1', NULL, 'Publish', '2023-10-08 22:35:31', '2023-10-08 22:35:31', NULL),
(86, 70, 8, 'images/books/sa-tra-pernah-melangka-sendiri-1696829792.png', 'Sa Tra Pernah Melangka Sendiri', 'sa-tra-pernah-melangka-sendiri', '1', NULL, 'Publish', '2023-10-08 22:36:32', '2023-10-08 22:36:32', NULL),
(87, 71, 4, 'images/books/rekayasa-perangkat-lunak-1703126948.png', 'Rekayasa Perangkat Lunak', 'rekayasa-perangkat-lunak', '1', NULL, 'Publish', '2023-12-21 02:49:08', '2023-12-21 02:49:08', NULL),
(88, 72, 8, 'images/books/global-1706148250.png', 'Global', 'global', '1', NULL, 'Publish', '2024-01-25 02:04:10', '2024-01-25 02:04:10', NULL),
(89, 73, 8, 'images/books/christmas-at-cassingtons-1706148457.png', 'Christmas at cassington\'s', 'christmas-at-cassingtons', '-1', NULL, 'Publish', '2024-01-25 02:07:37', '2024-01-25 02:07:37', NULL),
(90, 74, 8, 'images/books/english-vocabulary-ielts-1706148693.png', 'English vocabulary IELTS', 'english-vocabulary-ielts', '-1', NULL, 'Publish', '2024-01-25 02:11:33', '2024-01-25 02:11:33', NULL),
(91, 75, 8, 'images/books/new-headway-1706148772.png', 'New Headway', 'new-headway', '-1', NULL, 'Publish', '2024-01-25 02:12:52', '2024-01-25 02:12:52', NULL),
(92, 76, 13, 'images/books/new-english-file-1706148901.png', 'New English File', 'new-english-file', '-1', NULL, 'Publish', '2024-01-25 02:15:01', '2024-01-25 02:44:05', NULL),
(93, 77, 12, 'images/books/progam-beasiswa-unggul-papua-1706149019.png', 'Progam beasiswa unggul papua', 'progam-beasiswa-unggul-papua', '1', NULL, 'Publish', '2024-01-25 02:16:59', '2024-01-25 02:42:47', NULL),
(94, 78, 10, 'images/books/new-english-file-1706150138.png', 'New English File', 'new-english-file', '-1', NULL, 'Publish', '2024-01-25 02:35:38', '2024-01-25 02:35:38', NULL),
(95, 81, 14, 'images/books/tips-four-teaching-pronunction-1706151349.png', 'Tips four teaching pronunction', 'tips-four-teaching-pronunction', '1', NULL, 'Publish', '2024-01-25 02:55:49', '2024-01-25 02:55:49', NULL),
(96, 82, 10, 'images/books/islpr-hanbook-1706151490.png', 'ISLPR HANBOOK', 'islpr-hanbook', '1', NULL, 'Publish', '2024-01-25 02:58:10', '2024-01-25 02:58:10', NULL),
(98, 84, 8, 'images/books/visual-writing-about-graps-1706151731.png', 'Visual writing about graps', 'visual-writing-about-graps', '-1', NULL, 'Publish', '2024-01-25 03:02:11', '2024-01-25 03:02:11', NULL),
(99, 85, 8, 'images/books/conversation-gambits-1706151819.png', 'Conversation gambits', 'conversation-gambits', '1', NULL, 'Publish', '2024-01-25 03:03:39', '2024-01-25 03:03:39', NULL),
(100, 82, 8, 'images/books/introducytory-academic-progam-1706151953.png', 'introducytory academic progam', 'introducytory-academic-progam', '-1', NULL, 'Publish', '2024-01-25 03:05:53', '2024-01-25 03:05:53', NULL),
(101, 86, 8, 'images/books/ielts-target-50-1706152078.png', 'IELTS target 5.0', 'ielts-target-50', '-1', NULL, 'Publish', '2024-01-25 03:07:58', '2024-01-25 03:07:58', NULL),
(102, 87, 8, 'images/books/bridge-to-ielts-1706153030.png', 'Bridge to IELTS', 'bridge-to-ielts', '-1', NULL, 'Publish', '2024-01-25 03:23:50', '2024-01-25 03:23:50', NULL),
(103, 88, 8, 'images/books/english-file-1706153192.png', 'English File', 'english-file', '-1', NULL, 'Publish', '2024-01-25 03:26:32', '2024-01-25 03:26:32', NULL),
(104, 89, 8, 'images/books/grammar-games-1706153340.png', 'Grammar Games', 'grammar-games', '-1', NULL, 'Publish', '2024-01-25 03:29:00', '2024-01-25 03:29:00', NULL),
(105, 90, 8, 'images/books/step-up-to-ielts-1706153460.png', 'Step Up to IELTS', 'step-up-to-ielts', '-1', NULL, 'Publish', '2024-01-25 03:31:00', '2024-01-25 03:31:00', NULL),
(106, 91, 8, 'images/books/inside-out-1706153594.png', 'Inside Out', 'inside-out', '-1', NULL, 'Publish', '2024-01-25 03:33:14', '2024-01-25 03:33:14', NULL),
(107, 92, 8, 'images/books/natural-english-1706153700.png', 'Natural English', 'natural-english', '-1', NULL, 'Publish', '2024-01-25 03:35:00', '2024-01-25 03:35:00', NULL),
(108, 93, 8, 'images/books/coursebook-1706153818.png', 'CourseBook', 'coursebook', '-1', NULL, 'Publish', '2024-01-25 03:36:58', '2024-01-25 03:36:58', NULL),
(109, 94, 8, 'images/books/new-english-file-1706153960.png', 'New English File', 'new-english-file', '-1', NULL, 'Publish', '2024-01-25 03:39:20', '2024-01-25 03:39:20', NULL),
(110, 95, 8, 'images/books/get-ready-for-ielts-1706154072.png', 'Get Ready For IELTS', 'get-ready-for-ielts', '-1', NULL, 'Publish', '2024-01-25 03:41:12', '2024-01-25 03:41:12', NULL),
(111, 96, 8, 'images/books/onyeka-and-academy-1706154168.png', 'Onyeka And Academy', 'onyeka-and-academy', '-1', NULL, 'Publish', '2024-01-25 03:42:48', '2024-01-25 03:42:48', NULL),
(112, 97, 8, 'images/books/the-magic-faraway-tree-1706154285.png', 'The Magic Faraway Tree', 'the-magic-faraway-tree', '-1', NULL, 'Publish', '2024-01-25 03:44:45', '2024-01-25 03:44:45', NULL),
(113, 98, 8, 'images/books/complete-ielts-1706154442.png', 'Complete IELTS', 'complete-ielts', '-1', NULL, 'Publish', '2024-01-25 03:47:22', '2024-01-25 03:47:22', NULL),
(114, 99, 8, 'images/books/inside-out-1706154545.png', 'Inside Out', 'inside-out', '-1', NULL, 'Publish', '2024-01-25 03:49:05', '2024-01-25 03:49:05', NULL),
(115, 100, 8, 'images/books/cutty-edge-1706154686.png', 'Cutty Edge', 'cutty-edge', '-1', NULL, 'Publish', '2024-01-25 03:51:26', '2024-01-25 03:51:26', NULL),
(116, 101, 8, 'images/books/natural-englihs-1706154775.png', 'Natural Englihs', 'natural-englihs', '-1', NULL, 'Publish', '2024-01-25 03:52:55', '2024-01-25 03:52:55', NULL),
(117, 83, 8, 'images/books/new-headway-1706490403.png', 'New Headway', 'new-headway', '-1', NULL, 'Publish', '2024-01-29 01:06:43', '2024-01-29 01:06:43', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `catagories`
--

CREATE TABLE `catagories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `status` enum('Publish','Draft') DEFAULT 'Publish',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `catagories`
--

INSERT INTO `catagories` (`id`, `name`, `slug`, `description`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Fashion', 'fashion', 'All books about fashion', 'Publish', '2023-10-08 17:44:39', '2023-11-03 01:28:24', NULL),
(2, 'Health', 'health', 'All books about health', 'Publish', '2023-10-08 17:44:39', '2023-11-03 01:28:29', NULL),
(3, 'Natural', 'natural', 'All books about natural', 'Publish', '2023-10-08 17:44:39', '2023-11-03 01:28:35', NULL),
(4, 'Education', 'education', 'All books about education', 'Publish', '2023-10-08 17:44:39', '2023-11-03 01:27:33', NULL),
(5, 'Fantasy', 'fantasy', 'Fantasy books', 'Publish', '2023-10-08 17:53:12', '2023-10-22 12:59:29', NULL),
(7, 'Fiction', 'fiction', NULL, 'Publish', '2023-10-08 17:59:35', '2023-10-10 22:41:07', NULL),
(8, 'Uncategorized', 'uncategorized', 'Don\'t have category yet', 'Publish', '2023-10-08 18:35:41', '2023-10-08 18:35:41', NULL),
(9, 'new', 'new', 'All books about new', 'Publish', '2023-11-03 01:28:55', '2023-11-03 01:29:02', '2023-11-03 01:29:02'),
(10, 'Learn English', 'learn-english', NULL, 'Publish', '2024-01-25 01:57:20', '2024-01-25 01:57:20', NULL),
(11, 'Rawdon wyatt', 'rawdon-wyatt', NULL, 'Publish', '2024-01-25 02:08:27', '2024-01-25 02:08:39', NULL),
(12, 'Reports', 'reports', NULL, 'Publish', '2024-01-25 02:36:52', '2024-01-25 02:36:52', NULL),
(13, 'Learn English', 'learn-english', NULL, 'Publish', '2024-01-25 02:43:47', '2024-01-25 02:43:47', NULL),
(14, 'Teaching English', 'teaching-english', NULL, 'Publish', '2024-01-25 02:45:49', '2024-01-25 02:45:49', NULL),
(15, 'Learn English', 'learn-english', NULL, 'Publish', '2024-01-25 02:57:10', '2024-01-25 02:57:10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`id`, `user_id`, `title`, `description`, `url`, `created_at`, `updated_at`) VALUES
(1, 7, 'KTP', 'Kartu Tanda Penduduk', 'https://sagufoundation.org/', '2023-10-13 05:29:55', '2023-10-13 05:29:55'),
(2, 7, 'KTP', 'Kartu Tanda Penduduk', 'https://sagufoundation.org/', '2023-10-13 05:29:55', '2023-10-13 05:29:55'),
(3, 7, 'Akta Kelahiran', 'Surat Akta Kelahiran', 'https://sagufoundation.org/', '2023-10-13 05:29:55', '2023-10-13 05:29:55'),
(4, 7, 'Akta Kelahiran', 'Surat Akta Kelahiran', 'https://sagufoundation.org/', '2023-10-13 05:29:55', '2023-10-13 05:29:55'),
(5, 7, 'Ijazah SMK', 'Ijazah Sekolah Menengah Kejuruan', 'https://sagufoundation.org/', '2023-10-13 05:29:55', '2023-10-13 05:29:55'),
(6, 7, 'Ijazah SMK', 'Ijazah Sekolah Menengah Kejuruan', 'https://sagufoundation.org/', '2023-10-13 05:29:55', '2023-10-13 05:29:55'),
(11, 16, 'Goggle Drive', 'Folder utama', 'https://drive.google.com/drive/folders/1f_Q8nrvITo14tHWDQeIlFf0AEE0WGNoF?usp=drive_link', '2024-02-19 07:14:49', '2024-02-19 07:14:49'),
(12, 83, 'Goggle Drive', 'Folder utama', 'https://drive.google.com/drive/folders/1dnMhIYjU6aX8DrN8MooX-XSHUyBz2kfH?usp=drive_link', '2024-02-19 07:15:36', '2024-02-19 07:15:36'),
(14, 17, 'Goggle Drive', 'Folder utama', 'https://docs.google.com/spreadsheets/d/1Zk8jNtwrkQ0vRe8FHH7HywgIUx8y5oeBYpDG5tf05Hg/edit?usp=drive_link', '2024-02-19 07:24:29', '2024-02-19 07:24:29'),
(15, 17, 'Goggle Sheets', 'Daftar semua dokumen dan link', 'https://docs.google.com/spreadsheets/d/1Zk8jNtwrkQ0vRe8FHH7HywgIUx8y5oeBYpDG5tf05Hg/edit?usp=drive_link', '2024-02-19 07:33:33', '2024-02-19 07:33:33'),
(16, 16, 'Goggle Seets', 'Folder utama milik Adriana Diana Anes', 'https://docs.google.com/spreadsheets/d/1RsnulfPfiYREs2-IRGItb9WgSwStyWCPLMF8ho3BQAI/edit?usp=drive_link', '2024-02-19 07:40:40', '2024-02-19 07:40:40'),
(18, 83, 'Goggle seets', 'Daftar semua dokumen dan link', 'https://docs.google.com/spreadsheets/d/1g0FwX-cOPpSG7v04GPeydDb-H59Wb8qTg8bXpgANr_g/edit?usp=drive_link', '2024-02-19 07:43:03', '2024-02-19 07:43:03'),
(19, 19, 'Goggle Drive', 'Folder utama', 'https://drive.google.com/drive/folders/1PwyEt9z4TmYUECH4f9SaYYHBMv2FdsZf?usp=drive_link', '2024-02-19 07:44:15', '2024-02-19 07:44:15'),
(20, 19, 'Goggle seets', 'Daftar semua dokumen dan link', 'https://docs.google.com/spreadsheets/d/1HTwo0TJBie2cZikVJMCEYPGQnwgEFg2SdM2xYSQBNwg/edit?usp=drive_link', '2024-02-19 07:47:08', '2024-02-19 07:47:08'),
(21, 8, 'Goggle Drive', 'Folder utama', 'https://drive.google.com/drive/folders/11LLavgNQ4oz093JBSCdP9m2IaPdbywo2?usp=drive_link', '2024-02-19 07:48:20', '2024-02-19 07:48:20'),
(22, 8, 'Goggle seets', 'Daftar semua dokumen dan link', 'https://docs.google.com/spreadsheets/d/1UNOQpMyiA3l3alrCxB7FEVDB5KSTijQ0_yC7ME3tQbs/edit?usp=drive_link', '2024-02-19 07:50:17', '2024-02-19 07:50:17'),
(23, 84, 'Goggle Drive', 'Folder utama', 'https://drive.google.com/drive/folders/1KnnNymiRVvlrPRFnGKnrN9_fu93bpWQ_?usp=drive_link', '2024-02-19 07:51:07', '2024-02-19 07:51:07'),
(24, 84, 'Goggle seets', 'Daftar semua dokumen dan link', 'https://docs.google.com/spreadsheets/d/15Wq6aQFNFzwc0zplGD3mtc_dZtfiiUSzYcjqoNRjIog/edit?usp=drive_link', '2024-02-19 07:53:15', '2024-02-19 07:53:15'),
(25, 96, 'Goggle Drive', 'Folder utama', 'https://drive.google.com/drive/folders/1ADM62Yw5ykv3_wcNtEsnzoMSfr1KB1RR?usp=drive_link', '2024-02-19 07:55:48', '2024-02-19 07:55:48'),
(26, 82, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/17_FAMkka7UQQ4z-8AeiJ5JWvHLXVh_KC?usp=sharing', '2024-02-20 00:54:40', '2024-02-20 00:54:40'),
(27, 82, 'Google Sheets', 'All documents', 'https://docs.google.com/spreadsheets/d/1AEJUdgU0JqWqJwK4zG6EhpXoH1M1_NpIVy1LXfkPqhc/edit?usp=sharing', '2024-02-20 00:57:18', '2024-02-20 00:57:18'),
(28, 96, 'Google Sheet', 'All documents', 'https://drive.google.com/drive/folders/1ADM62Yw5ykv3_wcNtEsnzoMSfr1KB1RR?usp=sharing', '2024-02-20 01:09:23', '2024-02-20 01:09:23'),
(29, 97, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/1bk8T5xdcBi0ZyjaGUxrJKYvx3LG82U4_?usp=sharing', '2024-02-20 01:10:33', '2024-02-20 01:10:33'),
(30, 95, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/1UhuzeU2bJzO418Y-N7NINkuZRovTdXgM?usp=sharing', '2024-02-20 01:10:45', '2024-02-20 01:10:45'),
(31, 74, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/1bbY-JgoDl5qzNZLT6Q5cHpUzUmmpkGgx?usp=drive_link', '2024-02-20 01:11:22', '2024-02-20 01:11:22'),
(32, 97, 'Google Sheets', 'All documents', 'https://drive.google.com/drive/folders/1bk8T5xdcBi0ZyjaGUxrJKYvx3LG82U4_?usp=sharing', '2024-02-20 01:11:31', '2024-02-20 01:11:31'),
(33, 73, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/1i0P_JgKNR-1ynnbvppeqPpOXX6XgNUTU?usp=drive_link', '2024-02-20 01:11:47', '2024-02-20 01:11:47'),
(34, 94, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/1ADt1wp4NMRxdE7c5o1uRWypUhMW2pCOx?usp=drive_link', '2024-02-20 01:12:05', '2024-02-20 01:12:05'),
(35, 81, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/10MfqR6ccMYyN5rS_ogonfYppyDsRku1L?usp=drive_link', '2024-02-20 01:12:22', '2024-02-20 01:12:22'),
(36, 98, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/1tlU4Ofiiz63eYqGetMcCSIDbI1EjpPx4?usp=sharing', '2024-02-20 01:12:38', '2024-02-20 01:12:38'),
(37, 138, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/1LzLtqmi3y84UToHotzGq8v1ufDxQpYP5?usp=drive_link', '2024-02-20 01:12:39', '2024-02-20 01:12:39'),
(38, 72, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/1pBU48J_dybh7qkwRdDmRSSAf72KYLy1a?usp=drive_link', '2024-02-20 01:12:58', '2024-02-20 01:12:58'),
(39, 80, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/17EbyqAVF5IA8_AYeITDN03PKu0ZjGs-q?usp=drive_link', '2024-02-20 01:13:12', '2024-02-20 01:13:12'),
(41, 79, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/12LYbcf3fZErMeXyEigicQBCEPZiX2XCn?usp=drive_link', '2024-02-20 01:13:25', '2024-02-20 01:13:25'),
(42, 78, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/1aKQiZq_XVrus4gV7kaQVbN7qqnO7putS?usp=drive_link', '2024-02-20 01:13:41', '2024-02-20 01:13:41'),
(43, 77, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/12BZXAreziHSp244XTlE_Jq9U9fM1hACv?usp=drive_link', '2024-02-20 01:14:23', '2024-02-20 01:14:23'),
(44, 15, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/14zt0EznOvb_SZ_ybjXUGTGZsHGDG_Rag?usp=sharing', '2024-02-20 01:14:29', '2024-02-20 01:14:29'),
(45, 76, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/1MkSeX4l2lUgaKFebB1KxrOD6I_lgNrSR?usp=drive_link', '2024-02-20 01:14:37', '2024-02-20 01:14:37'),
(46, 71, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/1y1Sbc4FwME3I6GAEJfneMrWbH-ZsCMit?usp=drive_link', '2024-02-20 01:14:51', '2024-02-20 01:14:51'),
(47, 15, 'Google Sheets', 'All documents', 'https://drive.google.com/drive/folders/14zt0EznOvb_SZ_ybjXUGTGZsHGDG_Rag?usp=sharing', '2024-02-20 01:14:54', '2024-02-20 01:14:54'),
(48, 137, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/1hpcJAVibMP8cvKKAOOrfymGE0fThPc09?usp=drive_link', '2024-02-20 01:15:06', '2024-02-20 01:15:06'),
(49, 141, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/1poXHwV-Z_qeLSav49xBOIwIRBdxWzg27?usp=drive_link', '2024-02-20 01:15:22', '2024-02-20 01:15:22'),
(50, 135, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/16jcOlN6mEcKBtoEwD-EBDesHSEbSYwzQ?usp=drive_link', '2024-02-20 01:15:37', '2024-02-20 01:15:37'),
(51, 70, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/1Ax2RB0VExKLgmmF7VY6_LhWqlF-Xcmt7?usp=drive_link', '2024-02-20 01:16:00', '2024-02-20 01:16:00'),
(52, 134, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/18HjQTOcEV_hDSxM49mEGOh3DLBrFX5eH?usp=drive_link', '2024-02-20 01:16:16', '2024-02-20 01:16:16'),
(54, 129, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/1i9AcFdZoVDvJHilImiwhMrUsJeOTnynb?usp=drive_link', '2024-02-20 01:16:30', '2024-02-20 01:16:30'),
(55, 67, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/1BVZnVDbi3kP_sLUVsaKKXMmoPVN4i-Jm?usp=drive_link', '2024-02-20 01:16:50', '2024-02-20 01:16:50'),
(56, 65, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/1aFuOriprHiSw17ikPzIH_r2sOqw8vP4F?usp=drive_link', '2024-02-20 01:23:05', '2024-02-20 01:23:05'),
(57, 93, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/1Ho4kRc45p7DpSd_Gg1b0EHpAukMb9VJF?usp=drive_link', '2024-02-20 01:23:22', '2024-02-20 01:23:22'),
(58, 63, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/1PWTlROeYuxFx-icEyQbjHuJ28SrNfUZz?usp=drive_link', '2024-02-20 01:23:39', '2024-02-20 01:23:39'),
(59, 75, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/1CnsJNEIaI2gj0F6STRdcY1GiuaVmylzz?usp=drive_link', '2024-02-20 01:23:59', '2024-02-20 01:23:59'),
(60, 107, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/1ddAWYbgf1LtuThKKB6m416M2e5PgC-gQ?usp=drive_link', '2024-02-20 01:24:16', '2024-02-20 01:24:16'),
(61, 128, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/1-ZeNuiGZ4CgRoInRczm7fUEXu-QLAGaE?usp=drive_link', '2024-02-20 01:24:44', '2024-02-20 01:24:44'),
(62, 127, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/1RA2bOoPlADH86n-h9hqVspOhoAsJeyvA?usp=drive_link', '2024-02-20 01:25:00', '2024-02-20 01:25:00'),
(63, 126, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/1PRkUknwTQRp-PN-KOU3QFZMZdBzMjXVG?usp=drive_link', '2024-02-20 01:25:39', '2024-02-20 01:25:39'),
(64, 69, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/16csh2gqPXp0a4XeGGv_ScH_uq90jXirD?usp=drive_link', '2024-02-20 01:26:03', '2024-02-20 01:26:03'),
(65, 106, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/1GRlE5uUVmaj3swvymZhzd8THgXNJ_IGu?usp=drive_link', '2024-02-20 01:26:18', '2024-02-20 01:26:18'),
(66, 20, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/1kVDJA8_RfaR3L_EQbYLZ7uuKCQX7Zf3v?usp=sharing', '2024-02-20 01:26:28', '2024-02-20 01:26:28'),
(67, 105, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/1Bkkt97Z_GYjrlK-Fe4zIC5_hupm95lkO?usp=drive_link', '2024-02-20 01:26:49', '2024-02-20 01:26:49'),
(68, 68, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/1NFtqrcIxpqJTjmVFj0lFpe24aseEWBmR?usp=drive_link', '2024-02-20 01:27:03', '2024-02-20 01:27:03'),
(69, 92, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/1DGivNiG4HltDkjOzb7jheHq-nm3n5H7g?usp=drive_link', '2024-02-20 01:27:28', '2024-02-20 01:27:28'),
(70, 66, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/1kXTI1uhPvF8cWBG4YJ7SNYRw4ZHU3BJC?usp=drive_link', '2024-02-20 01:27:45', '2024-02-20 01:27:45'),
(71, 64, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/1-LZKUsbPmV3OheC0zwtf9OcP9s-lk8Dr?usp=drive_link', '2024-02-20 01:27:59', '2024-02-20 01:27:59'),
(72, 91, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/1JtK4ATL-OJOIe_Sb5wJvJmiqr7Rw0plf?usp=drive_link', '2024-02-20 01:28:15', '2024-02-20 01:28:15'),
(73, 60, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/1guPUD9gpclSz5FpPqeH422tHj-w7rlrX?usp=drive_link', '2024-02-20 01:28:39', '2024-02-20 01:28:39'),
(74, 62, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/1TJn05d7tTUIVzCC6V5zIsTdgRH38CkZe?usp=drive_link', '2024-02-20 01:28:56', '2024-02-20 01:28:56'),
(75, 139, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/1guPUD9gpclSz5FpPqeH422tHj-w7rlrX?usp=drive_link', '2024-02-20 01:29:12', '2024-02-20 01:29:12'),
(76, 61, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/1SkntZ-ZwhyRo7ptncLXXCNEvo5LehTuf?usp=drive_link', '2024-02-20 01:29:28', '2024-02-20 01:29:28'),
(77, 59, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/1adnUc9m5CGwijyfHxHjgyhFvL3EKuMj8?usp=drive_link', '2024-02-20 01:30:05', '2024-02-20 01:30:05'),
(78, 90, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/1j4-uCqaxFK7TXojdu2Zsl9VgcAA9B10Y?usp=drive_link', '2024-02-20 01:30:18', '2024-02-20 01:30:18'),
(79, 57, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/1UvkNoUiKu3licAZRA8GTXgIwJmG7tUmR?usp=drive_link', '2024-02-20 01:30:38', '2024-02-20 01:30:38'),
(80, 54, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/1GW8Fz_XSLqKyFm-sZJlrpXUHIlE_taR1?usp=drive_link', '2024-02-20 01:30:55', '2024-02-20 01:30:55'),
(81, 136, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/1oXK5EuhpWgz138Sq73xfds7V_VRbZuV8?usp=sharing', '2024-02-20 01:30:58', '2024-02-20 01:30:58'),
(82, 108, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/1EvT-mKS_8NilBZOBEtcYu5nSluLRgHtQ?usp=drive_link', '2024-02-20 01:31:07', '2024-02-20 01:31:07'),
(83, 125, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/1aF9JMx9qyHIGTt4eCiLDEL95LNa26jqd?usp=drive_link', '2024-02-20 01:31:23', '2024-02-20 01:31:23'),
(84, 52, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/1arGMZpi2s8JAWl805OydBzc8_axg2SCg?usp=drive_link', '2024-02-20 01:31:37', '2024-02-20 01:31:37'),
(85, 50, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/1Y2ApC1o5NRuI4UziCqK8r3ss6SpQD6aF?usp=drive_link', '2024-02-20 01:31:52', '2024-02-20 01:31:52'),
(86, 49, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/1c40NDKpGiQG0szBZcG_PkJVOjRjhPiYr?usp=drive_link', '2024-02-20 01:32:06', '2024-02-20 01:32:06'),
(87, 23, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/1RCoisMD1Yvhx86lhdPOL2Z6lPcFjAMLF?usp=sharing', '2024-02-20 01:32:11', '2024-02-20 01:32:11'),
(88, 140, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/1t1vBB7oqkoTCGyCH5Db7YfnMEcZ-Sm-g?usp=drive_link', '2024-02-20 01:32:22', '2024-02-20 01:32:22'),
(89, 133, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/1Vgg070EQUpjsYYZ-HY_7Thfy77p-qWcY?usp=drive_link', '2024-02-20 01:32:55', '2024-02-20 01:32:55'),
(90, 148, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/1_Kv8tBB_nySXJ18QpVfDhQv4wtdK28Hk?usp=drive_link', '2024-02-20 01:33:08', '2024-02-20 01:33:08'),
(91, 146, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/1_59VprQTxMASE1OYaajagbQQ3mOJMwwE?usp=sharing', '2024-02-20 01:33:10', '2024-02-20 01:33:10'),
(92, 149, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/1WAMFgHNoxUwBWwVoCF25CHCyR37E9UdA?usp=drive_link', '2024-02-20 01:33:22', '2024-02-20 01:33:22'),
(93, 47, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/1NFEoLHzSbhZtqrf3tWUvUUvKonYA2SCy?usp=drive_link', '2024-02-20 01:33:35', '2024-02-20 01:33:35'),
(94, 58, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/1p0m6M9apydAu4p1sEdDoT30mcuRRKWXv?usp=drive_link', '2024-02-20 01:33:50', '2024-02-20 01:33:50'),
(95, 26, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/1UlHDKdJQNYsL58IsV14EdjJEhRsyTzd2?usp=sharing', '2024-02-20 01:34:02', '2024-02-20 01:34:02'),
(96, 56, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/1yEbtunzPTjQUrEhL4eBH7PK39-CtpGJb?usp=drive_link', '2024-02-20 01:34:05', '2024-02-20 01:34:05'),
(97, 45, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/1AA9V6Ot3VFp2vk0PtA0EsFB08KNN63Df?usp=drive_link', '2024-02-20 01:34:25', '2024-02-20 01:34:25'),
(98, 89, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/1573SOXW77TRA05roqVBGl2rb3w7QdFL4?usp=drive_link', '2024-02-20 01:34:41', '2024-02-20 01:34:41'),
(99, 104, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/1036IvlUg3pUzDQLjtodx-a8icWrJDpsj?usp=drive_link', '2024-02-20 01:34:56', '2024-02-20 01:34:56'),
(100, 99, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/1PW8QG-ePAuJ1BsGFFbwUayhHRUG7On2M?usp=sharing', '2024-02-20 01:35:01', '2024-02-20 01:35:01'),
(101, 103, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/1seWwYeAaxBRKg4fPOyqcGXPoqDBKuCxC?usp=drive_link', '2024-02-20 01:35:10', '2024-02-20 01:35:10'),
(102, 145, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/1rc1flqjmU8O_l3ScPxyYnUxj-kaA4_tW?usp=sharing', '2024-02-20 01:36:14', '2024-02-20 01:36:14'),
(103, 21, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/11MSd-UqMlmaFfBESadWz3qLeiY5Tgb-5?usp=sharing', '2024-02-20 01:37:23', '2024-02-20 01:37:23'),
(104, 22, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/1ZnMnetfmJV_IOYCXkfTGmRs4YwwdbvxN?usp=sharing', '2024-02-20 01:38:21', '2024-02-20 01:38:21'),
(105, 143, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/1gKMHGh3LoN-rt5B37PZ4HVtnf7swHUpE?usp=drive_link', '2024-02-20 01:38:56', '2024-02-20 01:38:56'),
(106, 43, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/156K_8ucKjYS1cNzpi7QulBqRo1JR9rgs?usp=drive_link', '2024-02-20 01:39:13', '2024-02-20 01:39:13'),
(107, 132, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/1M9l1ERkHpehm5ZBYfvavRWHFfxSnFwr2?usp=drive_link', '2024-02-20 01:39:28', '2024-02-20 01:39:28'),
(108, 147, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/1-6tL7pFiiiqAktO5xpgvsDw4EyJVW_qQ?usp=drive_link', '2024-02-20 01:39:46', '2024-02-20 01:39:46'),
(109, 41, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/15jMzzM_jTDQWujxsp2wkyY-SFVMhjKgK?usp=drive_link', '2024-02-20 01:40:01', '2024-02-20 01:40:01'),
(110, 144, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/10PZ8d0Rcb8NzLj3TMiD76VYHvtHAcKzD?usp=drive_link', '2024-02-20 01:40:16', '2024-02-20 01:40:16'),
(111, 55, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/1ecLlPz1MxCS7vhUdzSZRikvicIw7aT3S?usp=drive_link', '2024-02-20 01:40:32', '2024-02-20 01:40:32'),
(112, 102, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/1ZvzBHiFvxf6V6URFH-Ltchbtgt7OxY74?usp=drive_link', '2024-02-20 01:40:51', '2024-02-20 01:40:51'),
(113, 53, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/10sili1iWboYrZwPQSrp2xO4CXLtR02Mz?usp=drive_link', '2024-02-20 01:41:04', '2024-02-20 01:41:04'),
(114, 51, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/1bTsx94qZqP99uYohiPAGdof7SB80U7oS?usp=drive_link', '2024-02-20 01:41:19', '2024-02-20 01:41:19'),
(115, 24, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/1qBrMUvAqQgI6O1dYoSYLeqU2G32GUJZx?usp=sharing', '2024-02-20 01:42:00', '2024-02-20 01:42:00'),
(116, 48, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/1_zIiOw-BRLxFwX2kEE87CTlWlqjR39_X?usp=drive_link', '2024-02-20 01:42:03', '2024-02-20 01:42:03'),
(117, 101, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/1sOrLmfJH5m4F69JPCtGnNXJmEOpDt1jV?usp=drive_link', '2024-02-20 01:42:24', '2024-02-20 01:42:24'),
(118, 151, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/1T2FoDIj9p9iE79KGC3yUYk51S1zJTa8Z?usp=sharing', '2024-02-20 01:42:59', '2024-02-20 01:42:59'),
(119, 46, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/1AZ8UADk3p-tPrMVRWrdhdQS4anOkoSD1?usp=drive_link', '2024-02-20 01:43:20', '2024-02-20 01:43:20'),
(120, 39, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/1Bxird2uhIjNO7tMRTVpxmUdOoNaXGbbx?usp=drive_link', '2024-02-20 01:43:36', '2024-02-20 01:43:36'),
(123, 28, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/1DX4rLe7ufJbYsLqY3ctkg-ZZ9_WmwJyy?usp=sharing', '2024-02-20 01:44:13', '2024-02-20 01:44:13'),
(125, 25, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/1eGvGIFP3jJNDrDx8P0C-LEyDkw7Hc4S7?usp=sharing', '2024-02-20 01:45:25', '2024-02-20 01:45:25'),
(129, 27, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/1YK8G4d3CDWMgmaXuxmqFwTh9KYY7mZ_D?usp=sharing', '2024-02-20 01:47:19', '2024-02-20 01:47:19'),
(133, 100, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/10d38OV2ghUF5T5VYXXGwokBmvGMzHFNz?usp=sharing', '2024-02-20 01:48:38', '2024-02-20 01:48:38'),
(138, 29, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/1zbX3S5IQgBb_5ZDQu4iXKsIUlFW99eHw?usp=sharing', '2024-02-20 01:49:33', '2024-02-20 01:49:33'),
(143, 85, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/15H4UTurNOX1gUUcHPSGZSrdQDP2RyV2H?usp=sharing', '2024-02-20 01:50:47', '2024-02-20 01:50:47'),
(145, 85, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/15H4UTurNOX1gUUcHPSGZSrdQDP2RyV2H?usp=drive_link', '2024-02-20 01:51:09', '2024-02-20 01:51:09'),
(146, 142, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/1mjLzDI8pShSfUuUModY_0BZSviTR7rP5?usp=sharing', '2024-02-20 01:53:01', '2024-02-20 01:53:01'),
(147, 74, 'Google Sheets', 'Document list and links', 'https://docs.google.com/spreadsheets/d/1KKXW4hlne4V_XSwa4XZ7zAu9OkCu8BvZCvXPRJm9CGg/edit?usp=sharing', '2024-02-20 01:58:26', '2024-02-20 01:58:26'),
(148, 130, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/1u-6zZ-TTJo50TyUYgRBuEdmDkVEvpIYG?usp=sharing', '2024-02-20 02:13:25', '2024-02-20 02:13:25'),
(149, 31, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/13cvq552iIYDHHH-p4dyJz6IwsXiZ6_A4?usp=sharing', '2024-02-20 02:14:43', '2024-02-20 02:14:43'),
(150, 30, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/188RbfaM5I61aJlkpTSea99i-NEoT3fJU?usp=sharing', '2024-02-20 02:17:32', '2024-02-20 02:17:32'),
(151, 86, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/1F0VclbZjxhDQ38TUPrJhBGfNeYhbkSBW?usp=sharing', '2024-02-20 02:18:36', '2024-02-20 02:18:36'),
(152, 33, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/15ucUEhyuNW2GqpXaNzfZP2p6vTr0Vwcg?usp=sharing', '2024-02-20 02:19:48', '2024-02-20 02:19:48'),
(153, 87, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/1tO4KYLnGOb_CstH1Qr1SJZAKNNn4ICM5?usp=sharing', '2024-02-20 02:21:04', '2024-02-20 02:21:04'),
(154, 34, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/1RK4EUfT1sYaGSwFR5jemFqcYqT-i2hxu?usp=sharing', '2024-02-20 02:22:08', '2024-02-20 02:22:08'),
(155, 37, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/1BgRwFt9WsYgDUoE5_IXGRzA75pI2oNRP?usp=sharing', '2024-02-20 02:23:31', '2024-02-20 02:23:31'),
(156, 32, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/13-8P3tLsVCGbX93Fu1s-P7EWErOWkmc6?usp=sharing', '2024-02-20 02:24:36', '2024-02-20 02:24:36'),
(157, 40, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/13-8P3tLsVCGbX93Fu1s-P7EWErOWkmc6?usp=sharing', '2024-02-20 02:25:40', '2024-02-20 02:25:40'),
(158, 42, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/1Y-q0K-8YWYaAqiFFSgGWAJL2aU9TE_gE?usp=sharing', '2024-02-20 02:27:16', '2024-02-20 02:27:16'),
(159, 44, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/1tthaU7DxSrlflY4hTEADGQ-e41K1wCBd?usp=sharing', '2024-02-20 02:34:14', '2024-02-20 02:34:14'),
(160, 36, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/1kRuDK6hJE6oIptqj7xyoHDPqMssk50Oq?usp=sharing', '2024-02-20 02:35:48', '2024-02-20 02:35:48'),
(161, 35, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/1DUSvDKJmearTx6kAkA4_29AA5UjRrVZd?usp=sharing', '2024-02-20 02:37:16', '2024-02-20 02:37:16'),
(162, 88, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/1CJqZGsqElNvlfjM-UHX4XTMIsdOW7dQT?usp=sharing', '2024-02-20 02:39:01', '2024-02-20 02:39:01'),
(163, 131, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/12hUucXMy9_sJp5mhqC2XC7saaDamvLgt?usp=sharing', '2024-02-20 02:39:59', '2024-02-20 02:39:59'),
(164, 38, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/1b5Z41juJgC-HSSDxLkBV5E9CGxvAdb2b?usp=sharing', '2024-02-20 02:43:55', '2024-02-20 02:43:55'),
(165, 98, 'Google Sheets', 'All documents and links', 'https://docs.google.com/spreadsheets/d/1tIV3a7XyIIihZV15B-C0pLWqjG1qjYij8ofynBlP-oc/edit?usp=sharing', '2024-02-20 04:23:01', '2024-02-20 04:23:01');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `year` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `url` longtext DEFAULT NULL,
  `category` enum('Formal','Non Formal') DEFAULT 'Formal',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `user_id`, `title`, `year`, `description`, `url`, `category`, `created_at`, `updated_at`) VALUES
(1, 7, 'SMP Negeri 1', '2015', 'Sekolah di SMP slama 3 tahun dengan mengambil jurusan tersedia pada sekolah. Sekolah hingga lulus di sekolah yang sama.', 'https://drive.google.com/', 'Formal', '2023-10-13 05:29:55', '2023-10-13 05:29:55'),
(2, 7, 'SMK Negeri 1', '2016', 'Sekolah di SMK slama 3 tahun dengan mengambil jurusan tersedia pada sekolah. Sekolah hingga lulus di sekolah yang sama.', 'https://drive.google.com/', 'Formal', '2023-10-13 05:29:55', '2023-10-13 05:29:55'),
(3, 7, 'SMK Katholik Tunas Bangsa Timika', '2020', 'Sekolah Menengah Kejuruan Program 3 Tahun, Program Keahlian : Manajemen Perkantoran, Kompetensi Keahlian : Otomatiasasi dan Tata kelola Perkantoran.', 'https://drive.google.com/', 'Formal', '2023-10-13 05:29:55', '2023-10-13 05:29:55'),
(4, 7, 'Judul Program Pendidikan Non Formal', '2015', 'Contoh keterangan singkat tentang pendidikan non formal yang telah diambil oleh siswa', 'https://drive.google.com/', 'Non Formal', '2023-10-13 05:29:55', '2023-10-13 05:29:55'),
(5, 7, 'Judul Program Pendidikan Non Formal', '2016', 'Contoh keterangan singkat tentang pendidikan non formal yang telah diambil oleh siswa', 'https://drive.google.com/', 'Non Formal', '2023-10-13 05:29:55', '2023-10-13 05:29:55'),
(6, 7, 'Judul Program Pendidikan Non Formal', '2020', 'Contoh keterangan singkat tentang pendidikan non formal yang telah diambil oleh siswa', 'https://drive.google.com/', 'Non Formal', '2023-10-13 05:29:55', '2023-10-13 05:29:55'),
(7, 7, 'Judul Program Pendidikan Non Formal Kedua', '2021', 'Contoh keterangan singkat tentang pendidikan non formal yang telah diambil oleh siswa', 'https://drive.google.com/', 'Non Formal', '2023-10-13 05:29:55', '2023-10-13 05:29:55');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loan_books`
--

CREATE TABLE `loan_books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `book_id` bigint(20) UNSIGNED NOT NULL,
  `return_date` varchar(255) DEFAULT NULL,
  `status` enum('Active','Pending','Returned') DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_01_28_003629_create_permission_tables', 1),
(6, '2023_05_07_122406_create_settings_table', 1),
(7, '2023_06_29_230152_create_provinces_table', 1),
(8, '2023_06_30_130452_create_students_table', 1),
(9, '2023_07_01_110652_create_programs_table', 1),
(10, '2023_07_03_133728_create_documents_table', 1),
(11, '2023_07_05_000111_create_education_table', 1),
(12, '2023_07_17_185855_create_universitas_table', 1),
(13, '2023_07_24_020024_create_student_program_table', 1),
(14, '2023_10_03_162241_create_catagories_table', 1),
(15, '2023_10_03_162305_create_authors_table', 1),
(16, '2023_10_03_162319_create_books_table', 1),
(17, '2023_10_03_163459_create_loan_books_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(1, 'App\\Models\\User', 2),
(1, 'App\\Models\\User', 3),
(1, 'App\\Models\\User', 4),
(1, 'App\\Models\\User', 5),
(3, 'App\\Models\\User', 8),
(3, 'App\\Models\\User', 14),
(3, 'App\\Models\\User', 15),
(3, 'App\\Models\\User', 16),
(3, 'App\\Models\\User', 17),
(3, 'App\\Models\\User', 19),
(3, 'App\\Models\\User', 20),
(3, 'App\\Models\\User', 21),
(3, 'App\\Models\\User', 22),
(3, 'App\\Models\\User', 23),
(3, 'App\\Models\\User', 24),
(3, 'App\\Models\\User', 25),
(3, 'App\\Models\\User', 26),
(3, 'App\\Models\\User', 27),
(3, 'App\\Models\\User', 28),
(3, 'App\\Models\\User', 29),
(3, 'App\\Models\\User', 30),
(3, 'App\\Models\\User', 31),
(3, 'App\\Models\\User', 32),
(3, 'App\\Models\\User', 33),
(3, 'App\\Models\\User', 34),
(3, 'App\\Models\\User', 35),
(3, 'App\\Models\\User', 36),
(3, 'App\\Models\\User', 37),
(3, 'App\\Models\\User', 38),
(3, 'App\\Models\\User', 39),
(3, 'App\\Models\\User', 40),
(3, 'App\\Models\\User', 41),
(3, 'App\\Models\\User', 42),
(3, 'App\\Models\\User', 43),
(3, 'App\\Models\\User', 44),
(3, 'App\\Models\\User', 45),
(3, 'App\\Models\\User', 46),
(3, 'App\\Models\\User', 47),
(3, 'App\\Models\\User', 48),
(3, 'App\\Models\\User', 49),
(3, 'App\\Models\\User', 50),
(3, 'App\\Models\\User', 51),
(3, 'App\\Models\\User', 52),
(3, 'App\\Models\\User', 53),
(3, 'App\\Models\\User', 54),
(3, 'App\\Models\\User', 55),
(3, 'App\\Models\\User', 56),
(3, 'App\\Models\\User', 57),
(3, 'App\\Models\\User', 58),
(3, 'App\\Models\\User', 59),
(3, 'App\\Models\\User', 60),
(3, 'App\\Models\\User', 61),
(3, 'App\\Models\\User', 62),
(3, 'App\\Models\\User', 63),
(3, 'App\\Models\\User', 64),
(3, 'App\\Models\\User', 65),
(3, 'App\\Models\\User', 66),
(3, 'App\\Models\\User', 67),
(3, 'App\\Models\\User', 68),
(3, 'App\\Models\\User', 69),
(3, 'App\\Models\\User', 70),
(3, 'App\\Models\\User', 71),
(3, 'App\\Models\\User', 72),
(3, 'App\\Models\\User', 73),
(3, 'App\\Models\\User', 74),
(3, 'App\\Models\\User', 75),
(3, 'App\\Models\\User', 76),
(3, 'App\\Models\\User', 77),
(3, 'App\\Models\\User', 78),
(3, 'App\\Models\\User', 79),
(3, 'App\\Models\\User', 80),
(3, 'App\\Models\\User', 81),
(3, 'App\\Models\\User', 82),
(3, 'App\\Models\\User', 83),
(3, 'App\\Models\\User', 84),
(3, 'App\\Models\\User', 85),
(3, 'App\\Models\\User', 86),
(3, 'App\\Models\\User', 87),
(3, 'App\\Models\\User', 88),
(3, 'App\\Models\\User', 89),
(3, 'App\\Models\\User', 90),
(3, 'App\\Models\\User', 91),
(3, 'App\\Models\\User', 92),
(3, 'App\\Models\\User', 93),
(3, 'App\\Models\\User', 94),
(3, 'App\\Models\\User', 95),
(3, 'App\\Models\\User', 96),
(3, 'App\\Models\\User', 97),
(3, 'App\\Models\\User', 98),
(3, 'App\\Models\\User', 99),
(3, 'App\\Models\\User', 100),
(3, 'App\\Models\\User', 101),
(3, 'App\\Models\\User', 102),
(3, 'App\\Models\\User', 103),
(3, 'App\\Models\\User', 104),
(3, 'App\\Models\\User', 105),
(3, 'App\\Models\\User', 106),
(3, 'App\\Models\\User', 107),
(3, 'App\\Models\\User', 108),
(3, 'App\\Models\\User', 124),
(3, 'App\\Models\\User', 125),
(3, 'App\\Models\\User', 126),
(3, 'App\\Models\\User', 127),
(3, 'App\\Models\\User', 128),
(3, 'App\\Models\\User', 129),
(3, 'App\\Models\\User', 130),
(3, 'App\\Models\\User', 131),
(3, 'App\\Models\\User', 132),
(3, 'App\\Models\\User', 133),
(3, 'App\\Models\\User', 134),
(3, 'App\\Models\\User', 135),
(3, 'App\\Models\\User', 136),
(3, 'App\\Models\\User', 137),
(3, 'App\\Models\\User', 138),
(3, 'App\\Models\\User', 139),
(3, 'App\\Models\\User', 140),
(3, 'App\\Models\\User', 141),
(3, 'App\\Models\\User', 142),
(3, 'App\\Models\\User', 143),
(3, 'App\\Models\\User', 144),
(3, 'App\\Models\\User', 145),
(3, 'App\\Models\\User', 146),
(3, 'App\\Models\\User', 147),
(3, 'App\\Models\\User', 148),
(3, 'App\\Models\\User', 149),
(3, 'App\\Models\\User', 151),
(4, 'App\\Models\\User', 6),
(4, 'App\\Models\\User', 7),
(5, 'App\\Models\\User', 12);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE `programs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `program_title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `short_description` varchar(255) DEFAULT NULL,
  `full_description` mediumtext DEFAULT NULL,
  `program_start` varchar(255) DEFAULT NULL,
  `program_end` varchar(255) DEFAULT NULL,
  `status` enum('Publish','Draft') DEFAULT 'Publish',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`id`, `program_title`, `slug`, `short_description`, `full_description`, `program_start`, `program_end`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'SUP Vokasi 2020', 'sup-vokasi-2020', 'Beasiswa Siswa Unggul Papua Bidang Vokasi Tahun 2020', 'Beasiswa Siswa Unggul Papua Bidang Vokasi Tahun 2020 merupakan beasiswa yang diselenggarakan oleh BPSDM Provinsi Papua.', '2020', '-', 'Publish', '2023-10-13 05:29:55', '2023-10-13 05:29:55', NULL),
(2, 'SUP 2021', 'sup-vokasi-2021', 'Beasiswa Siswa Unggul Papua Tahun 2021', 'Beasiswa Siswa Unggul Papua Bidang Vokasi Tahun 2021 merupakan beasiswa yang diselenggarakan oleh BPSDM Provinsi Papua.', '2021', '-', 'Publish', '2023-10-13 05:29:55', '2023-10-13 05:29:55', NULL),
(3, 'YKM 2020', 'ykm-2020', 'Program Beasiswa Mahasiswa Yahukimo di Jayapura, Tahun 2020', 'Program beasiswa Pemerintah Daerah Kabupaten Yahukimo bagi Mahasiswa yang sedang studi di Jayapura.', '2020', '-', 'Publish', '2023-10-13 05:29:55', '2023-10-13 05:29:55', NULL),
(4, 'Kopernik - Computer Literacy', NULL, 'Program Membangun Pemuda, Membangun Papua 2023.', '<p>SAGU Foundation dan&nbsp;Kopernik menyelenggarakan program &ldquo;Literasi Komputer : Pemanfaatan Teknologi Untuk Peningkatan Efisiensi Kerja dan Kolaborasi Organisasi&rdquo; yang berfokus pada pengembangan peluang bekerja dan peningkatan literasi komputer bagi generasi muda Papua. Program akan berlangsung selama 7 bulan dengan materi yang dikaji secara khusus untuk keterampilan penggunaan platform digital dalam membangun karir di Abad-21.</p>', NULL, NULL, 'Publish', '2023-11-14 04:12:27', '2024-02-13 01:36:42', NULL),
(5, 'Internship', NULL, 'Student internship from school, university and others.', NULL, NULL, NULL, 'Publish', '2023-11-20 00:01:31', '2023-11-21 22:46:07', NULL),
(6, 'General English Term 1 2024', NULL, 'General English Class', '<p>General English Class</p>', NULL, NULL, 'Publish', '2024-01-25 02:08:40', '2024-01-25 02:08:40', NULL),
(7, 'YKM 2024', NULL, 'Beasiswa Pemerintah Daerah Kabupaten Yahukimo Tahun 2024', NULL, NULL, NULL, 'Publish', '2024-01-25 02:09:53', '2024-01-25 02:11:13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `provinces`
--

CREATE TABLE `provinces` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `provinces`
--

INSERT INTO `provinces` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Papua', 'Province of Papua', '2023-10-13 05:29:55', '2023-10-13 05:29:55'),
(2, 'Papua Pegunungan', 'Province of Papua Pegunungan', '2023-10-13 05:29:55', '2023-10-13 05:29:55'),
(3, 'Papua Tengah', 'Province of Papua Tengah', '2023-10-13 05:29:55', '2023-10-13 05:29:55');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `display_name` varchar(255) NOT NULL,
  `description` mediumtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'administrator', 'web', 'Administrator', 'Account with this role can access all the features. Able to view, create, edit, delete all the datas.', '2023-10-13 05:29:54', '2023-10-13 05:29:54'),
(2, 'users', 'web', 'Users', 'Able to view some features : View and update profile, view books, manage loan logs.', '2023-10-13 05:29:54', '2023-10-13 05:29:54'),
(3, 'student', 'web', 'Student', 'Able to view some features : View and update profile, view books, manage loan logs.', '2023-10-13 05:29:54', '2023-10-13 05:29:54'),
(4, 'guest', 'web', 'Guest', 'Able to view some features and do not able to manage or update any information.', '2023-10-13 05:29:54', '2023-10-13 05:29:54'),
(5, 'librarian', 'web', 'Librarian', 'Able to view and manage some features: View, create, edit, delete books and also manage the loan logs.', '2023-10-13 05:29:54', '2023-10-13 05:29:54');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `site_title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `meta_description` varchar(255) DEFAULT NULL,
  `meta_keywords` varchar(255) DEFAULT NULL,
  `copyright` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `logo_loader` varchar(255) DEFAULT NULL,
  `logo_meta` varchar(255) DEFAULT NULL,
  `favicon` varchar(255) DEFAULT NULL,
  `site_address` varchar(255) DEFAULT NULL,
  `email_address` varchar(255) DEFAULT NULL,
  `telephone` varchar(255) DEFAULT NULL,
  `office_address` varchar(255) DEFAULT NULL,
  `google_map_embed` mediumtext DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `tiktok` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `logo_dashboard_lg_dark` varchar(255) DEFAULT NULL,
  `logo_dashboard_sm_dark` varchar(255) DEFAULT NULL,
  `logo_dashboard_lg_light` varchar(255) DEFAULT NULL,
  `logo_dashboard_sm_light` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `site_title`, `slug`, `meta_description`, `meta_keywords`, `copyright`, `logo`, `logo_loader`, `logo_meta`, `favicon`, `site_address`, `email_address`, `telephone`, `office_address`, `google_map_embed`, `instagram`, `facebook`, `twitter`, `tiktok`, `linkedin`, `youtube`, `logo_dashboard_lg_dark`, `logo_dashboard_sm_dark`, `logo_dashboard_lg_light`, `logo_dashboard_sm_light`, `created_at`, `updated_at`) VALUES
(1, 'Database SAGU Foundation', NULL, '', '', '2023, SAGU Foundation - All Rights Reserved | <a href=\'https://sagufoundation.org/\' target=\'_blank\'>www.sagufoundation.org</a>', 'logo-panel.png', 'logo-loader.png', 'https://database.sagufoundation.org/gambar/logo_meta.jpg', 'favicon.png', 'https://database@sagufoundation.org/', 'info@sagufoundation.org', '082197964985', 'Jl. Pasar Baru Youtefa, Kompleks Pertokoan ATC Blok H5, Kotaraja Jayapura, Papua - Indonesia.', '', 'https://instagram.com/sagufoundation', 'https://facebook.com/', '', '', 'https://linkedin.com/', 'https://www.youtube.com/@sagufoundation', 'logo_lg_dark.png', 'logo_sm_dark.png', 'logo_lg_light.png', 'logo_sm_light.png', '2023-10-13 05:29:54', '2023-10-13 05:29:54');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `province_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile` longtext DEFAULT NULL,
  `place_of_birth` varchar(255) DEFAULT NULL,
  `date_of_birth` varchar(255) DEFAULT NULL,
  `ktp` varchar(255) DEFAULT NULL,
  `province` tinytext DEFAULT NULL,
  `full_address` tinytext DEFAULT NULL,
  `email_google` varchar(255) DEFAULT NULL,
  `email_outlook` varchar(255) DEFAULT NULL,
  `email_sagu` varchar(255) DEFAULT NULL,
  `email_campus_1` varchar(255) DEFAULT NULL,
  `email_campus_2` varchar(255) DEFAULT NULL,
  `education_history` tinytext DEFAULT NULL,
  `doc_google_sheets` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `programs` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `user_id`, `province_id`, `profile`, `place_of_birth`, `date_of_birth`, `ktp`, `province`, `full_address`, `email_google`, `email_outlook`, `email_sagu`, `email_campus_1`, `email_campus_2`, `education_history`, `doc_google_sheets`, `created_at`, `updated_at`, `deleted_at`, `programs`) VALUES
(1, 8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vQS9TAxqBWxz6xQYxED8GwPAHI7B_oxfc2xSMd7HyFcNc5328lkk3DqMA8JNT8M2g9LKkWqOoUrJG-0/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-10-13 05:29:55', '2024-02-19 07:49:29', NULL, ''),
(4, 15, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vTFK7H1y_RaY6LzXLOq9M0vxBliZbPXqZ2jzsr4aKmjsAnfvy4gCQTbaoX_-kTqc2QeKsAGWXUOvRDu/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-11-03 02:06:45', '2024-02-19 07:00:39', NULL, '[\"2\"]'),
(5, 16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vRUTd6FVQEraUNfmCf5ZVYGP0P3fwiu0OLj5oB70hpDesPDBx8y_ipELKUJ7uGs_S9BcGGzCgiVjb04/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-11-03 02:14:15', '2024-02-19 07:39:05', NULL, ''),
(6, 17, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vT4nXTrHMEnJP1dKyHNJhwzRKu-DaKqvhVP94Cwp3tGI94jI-pXB9ieZJCzNGFgmUL3aJZgvrz_IT_P/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-11-03 02:17:48', '2024-02-12 02:36:41', NULL, ''),
(8, 19, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vR1__Z9qyAOVRjui-TSjlgJAN8DhAz-eTSec0bv8AnrHm2yUATl39PF-VmXVZtpAgNj4E6pIQK9HMRG/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-11-03 02:19:53', '2024-02-19 07:45:49', NULL, ''),
(9, 20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-03 02:20:33', '2023-11-03 02:20:33', NULL, ''),
(10, 21, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-03 02:22:00', '2023-11-03 02:22:00', NULL, ''),
(11, 22, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-03 02:23:54', '2023-11-03 02:23:54', NULL, ''),
(12, 23, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-03 02:25:05', '2023-11-03 02:25:05', NULL, ''),
(13, 24, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-03 02:25:29', '2023-11-03 02:25:29', NULL, ''),
(14, 25, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-03 02:26:45', '2023-11-03 02:26:45', NULL, ''),
(15, 26, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-03 02:27:06', '2023-11-03 02:27:06', NULL, ''),
(16, 27, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-03 02:28:35', '2023-11-03 02:28:35', NULL, ''),
(17, 28, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-03 02:28:45', '2023-11-03 02:28:45', NULL, ''),
(18, 29, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-03 02:30:09', '2023-11-03 02:30:09', NULL, ''),
(19, 30, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-03 02:39:52', '2023-11-03 02:39:52', NULL, ''),
(20, 31, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-03 02:40:08', '2023-11-03 02:40:08', NULL, ''),
(21, 32, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-03 02:41:29', '2023-11-03 02:41:29', NULL, ''),
(22, 33, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-03 02:42:11', '2023-11-03 02:42:11', NULL, ''),
(23, 34, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-03 02:44:08', '2023-11-03 02:44:08', NULL, ''),
(24, 35, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-03 02:45:02', '2023-11-03 02:45:02', NULL, ''),
(25, 36, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-03 02:47:41', '2023-11-03 02:47:41', NULL, ''),
(26, 37, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-03 02:47:47', '2023-11-03 02:47:47', NULL, ''),
(27, 38, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-03 02:49:05', '2023-11-03 02:49:05', NULL, ''),
(28, 39, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-03 02:52:10', '2023-11-03 02:52:10', NULL, ''),
(29, 40, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-03 02:56:03', '2023-11-03 02:56:03', NULL, ''),
(30, 41, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-03 02:56:41', '2023-11-03 02:56:41', NULL, ''),
(31, 42, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-03 02:57:43', '2023-11-03 02:57:43', NULL, ''),
(32, 43, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-03 02:57:53', '2023-11-03 02:57:53', NULL, ''),
(33, 44, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-03 02:59:33', '2023-11-03 02:59:33', NULL, ''),
(34, 45, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-03 03:00:04', '2023-11-03 03:00:04', NULL, ''),
(35, 46, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-03 03:02:20', '2023-11-03 03:02:20', NULL, ''),
(36, 47, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-03 03:02:35', '2023-11-03 03:02:35', NULL, ''),
(37, 48, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-03 03:03:30', '2023-11-03 03:03:30', NULL, ''),
(38, 49, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-03 03:03:38', '2023-11-03 03:03:38', NULL, ''),
(39, 50, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-03 03:04:53', '2023-11-03 03:04:53', NULL, ''),
(40, 51, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-03 03:05:53', '2023-11-03 03:05:53', NULL, ''),
(41, 52, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-03 03:06:54', '2023-11-03 03:06:54', NULL, ''),
(42, 53, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-03 03:07:23', '2023-11-03 03:07:23', NULL, ''),
(43, 54, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-03 03:08:06', '2023-11-03 03:08:06', NULL, ''),
(44, 55, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-03 03:08:45', '2023-11-03 03:08:45', NULL, ''),
(45, 56, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-03 03:09:48', '2023-11-03 03:09:48', NULL, ''),
(46, 57, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-03 03:10:09', '2023-11-03 03:10:09', NULL, ''),
(47, 58, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-03 03:11:02', '2023-11-03 03:11:02', NULL, ''),
(48, 59, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-03 03:11:12', '2023-11-03 03:11:12', NULL, ''),
(49, 60, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-03 03:12:10', '2023-11-03 03:12:10', NULL, ''),
(50, 61, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-03 03:12:20', '2023-11-03 03:12:20', NULL, ''),
(51, 62, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-03 03:14:16', '2023-11-03 03:14:16', NULL, ''),
(52, 63, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-03 03:15:16', '2023-11-03 03:15:16', NULL, ''),
(53, 64, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-03 03:16:01', '2023-11-03 03:16:01', NULL, ''),
(54, 65, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-03 03:16:42', '2023-11-03 03:16:42', NULL, ''),
(55, 66, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-03 03:17:24', '2023-11-03 03:17:24', NULL, ''),
(56, 67, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-03 03:18:18', '2023-11-03 03:18:18', NULL, ''),
(57, 68, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-03 03:18:23', '2023-11-03 03:18:23', NULL, ''),
(58, 69, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-03 03:19:18', '2023-11-03 03:19:18', NULL, ''),
(59, 70, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-03 03:19:55', '2023-11-03 03:19:55', NULL, ''),
(60, 71, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-03 03:21:17', '2023-11-03 03:21:17', NULL, ''),
(61, 72, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-03 03:24:54', '2023-11-03 03:24:54', NULL, ''),
(62, 73, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-03 03:26:25', '2023-11-03 03:26:25', NULL, ''),
(63, 74, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vRVGQh_1qHxbEQ6duLenr5ECu7F4WVeP2YbHZVLUrttdBEN0IOwbhFOS100egF-CjDFDxgUNuDdtWwb/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-11-03 03:27:44', '2024-02-20 01:57:45', NULL, ''),
(64, 75, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-03 05:44:48', '2023-11-03 05:44:48', NULL, ''),
(65, 76, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-03 05:47:51', '2023-11-03 05:47:51', NULL, ''),
(66, 77, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-03 05:49:10', '2023-11-03 05:49:10', NULL, ''),
(67, 78, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-03 05:50:42', '2023-11-03 05:50:42', NULL, ''),
(68, 79, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-03 05:52:01', '2023-11-03 05:52:01', NULL, ''),
(69, 80, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-03 05:53:31', '2023-11-03 05:53:31', NULL, ''),
(70, 81, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-03 05:54:34', '2023-11-03 05:54:34', NULL, ''),
(71, 82, 1, NULL, NULL, NULL, NULL, NULL, 'Jalan Raya...', 'adrianadianaanes@gmail.com', NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vQhbhA7KGbV5yMImJxyI_x2PI1nN7GbBQ2GiomucT6MnKTHXv09ms_L1TFAV52OkB-te3fF-3IgNySp/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-11-16 02:00:33', '2024-02-20 00:37:59', NULL, '[\"4\"]'),
(72, 83, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'alipgobai@gmail.com', NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vSIROICxkG1CLlVoKTbv23rJX2NjeZcBSWlWylnW0H_GAE_drPQ4f9CP9wzcQdah6uQssh7nSrWGDP9/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-11-16 02:03:28', '2024-02-20 00:41:07', NULL, ''),
(73, 84, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'anastasiahuby3@gmail.com', NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vRcR0Y0Kd341JXNzq7F-E7V_agzA9TmvZBG7xK41lqBusnRtt6CwZcO4YqbbuwLsLctT-zDAslKPvrU/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-11-16 02:04:52', '2024-02-20 02:13:25', NULL, ''),
(74, 85, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-16 02:07:11', '2023-11-16 02:07:11', NULL, ''),
(75, 86, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'elisaros1815@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-16 02:09:25', '2024-02-20 02:16:12', NULL, ''),
(76, 87, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'fredaarwam332@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-16 02:11:03', '2024-02-20 02:16:50', NULL, ''),
(77, 88, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'hburwos@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-16 02:15:41', '2024-02-20 02:17:11', NULL, ''),
(78, 89, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-16 02:16:38', '2023-11-16 02:16:38', NULL, ''),
(79, 90, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'wangguway02@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-16 02:17:36', '2024-02-20 02:19:12', NULL, ''),
(80, 91, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ravensckamyouwe@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-16 02:18:50', '2024-02-20 02:19:29', NULL, ''),
(81, 92, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ridawenda99@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-16 02:19:48', '2024-02-20 02:19:49', NULL, ''),
(82, 93, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-16 02:20:47', '2023-11-16 02:20:47', NULL, ''),
(83, 94, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-16 02:22:36', '2023-11-16 02:22:36', NULL, ''),
(84, 95, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vQL__h6ZLH0vnX6FRAzLIJuSM4Avib1DqB76U5FUn8GcwV93oyWaZbFYzwotU9isJjLzCayIa6qIKOJ/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-11-16 02:23:32', '2024-02-20 01:56:30', NULL, ''),
(85, 96, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'andrietapaula@gmail.com', NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vQH2k-BdxNkqJtTDZZWoGENZxnwNOopevqfQSPBWwXGBycm82zQ_psJ6pN6MoXESEUIj-gxyKWV7Flu/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-11-16 02:24:40', '2024-02-20 02:10:45', NULL, ''),
(86, 97, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'anjaliwaimuri@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-16 02:25:52', '2024-02-20 02:14:50', NULL, ''),
(87, 98, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'antonetamartha3@gmail.com', NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vS4RBBXfUBf_SCwRdm5cfg4WpMy7AOLvebuDD9OQBUzrmkum0hq0uJ9MHU_Q2e9paxc-ql3vwNPKv3T/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-11-16 02:27:55', '2024-02-20 04:21:17', NULL, ''),
(88, 99, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'kwtbenita9@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-16 02:29:11', '2024-02-20 02:15:36', NULL, '[\"6\",\"4\"]'),
(89, 100, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-16 02:30:13', '2023-11-16 02:30:13', NULL, ''),
(90, 101, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'rumbewasjamina97@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-16 02:31:27', '2024-02-20 02:21:17', NULL, ''),
(91, 102, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-16 02:32:33', '2023-11-16 02:32:33', NULL, ''),
(92, 103, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'rooseveltlouise25@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-16 02:34:08', '2024-02-20 02:17:47', NULL, ''),
(93, 104, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'lusianadaka1996@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-16 02:35:20', '2024-02-20 02:17:30', NULL, ''),
(94, 105, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'rjigibalom09@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-16 02:40:17', '2024-02-20 02:20:10', NULL, ''),
(95, 106, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ryandwitamaraya@gmail.com', NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vQcJxMFA9iiOCoJ8A5I4MohbhPjVwrJNV_3y_bhrTs3_y4_0GC_M4X3TQbCzEipVw0BXS5ces8z7iCS/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-11-16 02:41:46', '2024-02-20 02:40:39', NULL, ''),
(96, 107, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-16 02:42:41', '2023-11-16 02:42:41', NULL, ''),
(97, 108, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'naomi.vwn@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-16 02:44:37', '2024-02-20 02:18:01', NULL, ''),
(100, 125, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-30 05:44:28', '2024-01-30 05:44:28', NULL, NULL),
(101, 126, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-30 05:46:45', '2024-01-30 05:46:45', NULL, NULL),
(102, 127, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-30 05:48:30', '2024-01-30 05:48:30', NULL, NULL),
(103, 128, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-30 05:50:14', '2024-01-30 05:50:14', NULL, NULL),
(104, 129, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-30 05:52:06', '2024-01-30 05:52:06', NULL, NULL),
(105, 130, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-30 05:58:44', '2024-01-30 05:58:44', NULL, NULL),
(106, 131, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-30 06:00:57', '2024-01-30 06:00:57', NULL, NULL),
(107, 132, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-30 06:02:15', '2024-01-30 06:02:15', NULL, NULL),
(108, 133, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-30 06:03:55', '2024-01-30 06:03:55', NULL, NULL),
(109, 134, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-30 06:08:05', '2024-01-30 06:08:05', NULL, NULL),
(110, 135, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-30 06:09:09', '2024-01-30 06:09:09', NULL, NULL),
(111, 136, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-30 06:10:42', '2024-01-30 06:10:42', NULL, NULL),
(112, 137, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-30 06:21:48', '2024-01-30 06:21:48', NULL, NULL),
(113, 138, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-30 06:23:38', '2024-01-30 06:23:38', NULL, NULL),
(114, 139, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-30 06:52:10', '2024-01-30 06:52:10', NULL, NULL),
(115, 140, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-30 06:54:26', '2024-01-30 06:54:26', NULL, NULL),
(116, 141, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-31 01:09:46', '2024-01-31 01:09:46', NULL, NULL),
(117, 142, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-31 01:12:30', '2024-01-31 01:12:30', NULL, NULL),
(118, 143, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-31 01:15:05', '2024-01-31 01:15:05', NULL, NULL),
(119, 144, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-31 01:31:12', '2024-01-31 01:31:12', NULL, NULL),
(120, 145, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-31 01:33:50', '2024-01-31 01:33:50', NULL, NULL),
(121, 146, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-31 01:36:17', '2024-01-31 01:36:17', NULL, NULL),
(122, 147, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-31 01:40:00', '2024-01-31 01:40:00', NULL, NULL),
(123, 148, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-31 01:45:43', '2024-01-31 01:45:43', NULL, NULL),
(124, 149, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-31 01:48:19', '2024-01-31 01:48:19', NULL, NULL),
(126, 151, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-06 02:31:36', '2024-02-06 02:31:36', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student_program`
--

CREATE TABLE `student_program` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `students_id` bigint(20) UNSIGNED NOT NULL,
  `program_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_program`
--

INSERT INTO `student_program` (`id`, `students_id`, `program_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 1, 2, NULL, NULL),
(6, 72, 4, '2024-02-09 05:01:04', '2024-02-09 05:01:04'),
(7, 73, 4, '2024-02-09 05:01:55', '2024-02-09 05:01:55'),
(8, 85, 4, '2024-02-09 05:02:17', '2024-02-09 05:02:17'),
(9, 4, 2, '2024-02-09 05:02:31', '2024-02-09 05:02:31'),
(10, 86, 4, '2024-02-09 05:02:35', '2024-02-09 05:02:35'),
(11, 5, 2, '2024-02-09 05:02:36', '2024-02-09 05:02:36'),
(12, 6, 2, '2024-02-09 05:02:40', '2024-02-09 05:02:40'),
(13, 8, 2, '2024-02-09 05:02:44', '2024-02-09 05:02:44'),
(14, 87, 4, '2024-02-09 05:04:31', '2024-02-09 05:04:31'),
(15, 9, 1, '2024-02-09 05:04:36', '2024-02-09 05:04:36'),
(16, 12, 1, '2024-02-09 05:04:40', '2024-02-09 05:04:40'),
(17, 15, 1, '2024-02-09 05:04:48', '2024-02-09 05:04:48'),
(18, 10, 2, '2024-02-09 05:04:54', '2024-02-09 05:04:54'),
(19, 11, 2, '2024-02-09 05:04:59', '2024-02-09 05:04:59'),
(20, 13, 2, '2024-02-09 05:05:29', '2024-02-09 05:05:29'),
(22, 17, 1, '2024-02-09 05:05:34', '2024-02-09 05:05:34'),
(23, 14, 2, '2024-02-09 05:05:37', '2024-02-09 05:05:37'),
(24, 16, 2, '2024-02-09 05:05:39', '2024-02-09 05:05:39'),
(25, 18, 2, '2024-02-09 05:05:43', '2024-02-09 05:05:43'),
(26, 20, 1, '2024-02-09 05:06:05', '2024-02-09 05:06:05'),
(27, 19, 2, '2024-02-09 05:06:08', '2024-02-09 05:06:08'),
(28, 22, 2, '2024-02-09 05:06:15', '2024-02-09 05:06:15'),
(29, 23, 2, '2024-02-09 05:06:21', '2024-02-09 05:06:21'),
(30, 26, 2, '2024-02-09 05:06:26', '2024-02-09 05:06:26'),
(32, 29, 2, '2024-02-09 05:06:32', '2024-02-09 05:06:32'),
(33, 31, 2, '2024-02-09 05:06:37', '2024-02-09 05:06:37'),
(34, 33, 2, '2024-02-09 05:07:08', '2024-02-09 05:07:08'),
(35, 25, 1, '2024-02-09 05:07:12', '2024-02-09 05:07:12'),
(36, 24, 1, '2024-02-09 05:07:17', '2024-02-09 05:07:17'),
(37, 27, 1, '2024-02-09 05:07:20', '2024-02-09 05:07:20'),
(38, 35, 2, '2024-02-09 05:07:27', '2024-02-09 05:07:27'),
(39, 88, 6, '2024-02-09 05:07:29', '2024-02-09 05:07:29'),
(40, 88, 4, '2024-02-09 05:07:29', '2024-02-09 05:07:29'),
(41, 37, 2, '2024-02-09 05:07:34', '2024-02-09 05:07:34'),
(42, 40, 2, '2024-02-09 05:07:55', '2024-02-09 05:07:55'),
(43, 42, 2, '2024-02-09 05:08:04', '2024-02-09 05:08:04'),
(44, 44, 2, '2024-02-09 05:08:10', '2024-02-09 05:08:10'),
(46, 30, 1, '2024-02-09 05:08:23', '2024-02-09 05:08:23'),
(47, 32, 1, '2024-02-09 05:08:30', '2024-02-09 05:08:30'),
(48, 121, 6, '2024-02-09 05:08:40', '2024-02-09 05:08:40'),
(49, 120, 6, '2024-02-09 05:08:49', '2024-02-09 05:08:49'),
(50, 34, 1, '2024-02-09 05:09:06', '2024-02-09 05:09:06'),
(51, 36, 1, '2024-02-09 05:09:14', '2024-02-09 05:09:14'),
(52, 111, 7, '2024-02-09 05:09:18', '2024-02-09 05:09:18'),
(53, 47, 2, '2024-02-09 05:09:19', '2024-02-09 05:09:19'),
(54, 45, 2, '2024-02-09 05:09:26', '2024-02-09 05:09:26'),
(56, 38, 1, '2024-02-09 05:09:36', '2024-02-09 05:09:36'),
(57, 39, 1, '2024-02-09 05:09:49', '2024-02-09 05:09:49'),
(58, 41, 1, '2024-02-09 05:09:56', '2024-02-09 05:09:56'),
(59, 43, 1, '2024-02-09 05:10:03', '2024-02-09 05:10:03'),
(60, 46, 1, '2024-02-09 05:10:09', '2024-02-09 05:10:09'),
(61, 48, 1, '2024-02-09 05:10:15', '2024-02-09 05:10:15'),
(62, 75, 4, '2024-02-09 05:10:22', '2024-02-09 05:10:22'),
(63, 76, 4, '2024-02-09 05:10:33', '2024-02-09 05:10:33'),
(64, 50, 2, '2024-02-09 05:10:40', '2024-02-09 05:10:40'),
(65, 77, 4, '2024-02-09 05:10:41', '2024-02-09 05:10:41'),
(66, 51, 1, '2024-02-09 05:10:48', '2024-02-09 05:10:48'),
(67, 106, 7, '2024-02-09 05:10:49', '2024-02-09 05:10:49'),
(68, 49, 1, '2024-02-09 05:10:54', '2024-02-09 05:10:54'),
(69, 53, 1, '2024-02-09 05:11:00', '2024-02-09 05:11:00'),
(70, 55, 1, '2024-02-09 05:11:05', '2024-02-09 05:11:05'),
(71, 57, 1, '2024-02-09 05:11:11', '2024-02-09 05:11:11'),
(72, 90, 4, '2024-02-09 05:11:15', '2024-02-09 05:11:15'),
(73, 58, 1, '2024-02-09 05:11:42', '2024-02-09 05:11:42'),
(74, 64, 1, '2024-02-09 05:11:48', '2024-02-09 05:11:48'),
(75, 52, 2, '2024-02-09 05:11:55', '2024-02-09 05:11:55'),
(76, 54, 2, '2024-02-09 05:12:01', '2024-02-09 05:12:01'),
(77, 122, 6, '2024-02-09 05:12:04', '2024-02-09 05:12:04'),
(78, 56, 2, '2024-02-09 05:12:07', '2024-02-09 05:12:07'),
(79, 59, 2, '2024-02-09 05:12:13', '2024-02-09 05:12:13'),
(80, 118, 6, '2024-02-09 05:12:17', '2024-02-09 05:12:17'),
(81, 60, 2, '2024-02-09 05:12:19', '2024-02-09 05:12:19'),
(82, 65, 1, '2024-02-09 05:12:25', '2024-02-09 05:12:25'),
(84, 66, 1, '2024-02-09 05:12:35', '2024-02-09 05:12:35'),
(85, 108, 7, '2024-02-09 05:15:59', '2024-02-09 05:15:59'),
(86, 93, 4, '2024-02-09 05:16:08', '2024-02-09 05:16:08'),
(87, 92, 4, '2024-02-09 05:16:13', '2024-02-09 05:16:13'),
(88, 78, 4, '2024-02-09 05:17:24', '2024-02-09 05:17:24'),
(89, 123, 6, '2024-02-09 05:17:35', '2024-02-09 05:17:35'),
(90, 115, 7, '2024-02-09 05:17:43', '2024-02-09 05:17:43'),
(91, 100, 7, '2024-02-09 05:17:54', '2024-02-09 05:17:54'),
(92, 97, 4, '2024-02-09 05:18:13', '2024-02-09 05:18:13'),
(93, 79, 4, '2024-02-09 05:18:21', '2024-02-09 05:18:21'),
(94, 114, 7, '2024-02-09 05:18:28', '2024-02-09 05:18:28'),
(95, 80, 4, '2024-02-09 05:18:38', '2024-02-09 05:18:38'),
(96, 81, 4, '2024-02-09 05:18:54', '2024-02-09 05:18:54'),
(97, 94, 4, '2024-02-09 05:19:09', '2024-02-09 05:19:09'),
(98, 95, 4, '2024-02-09 05:20:47', '2024-02-09 05:20:47'),
(99, 101, 7, '2024-02-09 05:20:53', '2024-02-09 05:20:53'),
(100, 102, 7, '2024-02-09 05:21:01', '2024-02-09 05:21:01'),
(101, 103, 7, '2024-02-09 05:21:19', '2024-02-09 05:21:19'),
(102, 104, 7, '2024-02-09 05:21:23', '2024-02-09 05:21:23'),
(103, 109, 7, '2024-02-09 05:21:32', '2024-02-09 05:21:32'),
(104, 110, 7, '2024-02-09 05:21:37', '2024-02-09 05:21:37'),
(105, 112, 7, '2024-02-09 05:21:46', '2024-02-09 05:21:46'),
(106, 113, 7, '2024-02-09 05:21:53', '2024-02-09 05:21:53'),
(109, 71, 4, '2024-02-09 08:04:03', '2024-02-09 08:04:03');

-- --------------------------------------------------------

--
-- Table structure for table `universitas`
--

CREATE TABLE `universitas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `job_title` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `status` enum('Publish','Draft') DEFAULT 'Publish',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `middle_name`, `last_name`, `job_title`, `email`, `phone`, `email_verified_at`, `password`, `picture`, `slug`, `status`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Janzen', '', 'Faidiban', 'Information Technology Coordinator', 'janzen.faidiban@sagufoundation.org', NULL, NULL, '$2y$10$xSJxHVBl0ESoioxaDPjo9eGcO6k0Dm18C3Cbulbp3mAOXbbPoRft6', 'images/users/Janzen-3-200x200.jpg', 'janzen-faidiban', 'Publish', NULL, '2023-10-13 05:29:54', '2023-10-13 05:29:54', NULL),
(2, 'Febe', '', 'Worabay', 'Administration Officer', 'febe-woaraby@sagufoundation.org', NULL, NULL, '$2y$10$c5zvztV2dzPdlcZ8wv8lAuVNBsqHjXnGEnpcW5p2wcNQbnCHZRiQy', 'images/users/Febe-200x200.jpg', 'febe-worabay', 'Publish', NULL, '2023-10-13 05:29:54', '2023-10-13 05:29:54', NULL),
(3, 'Tisha', '', 'Rumbewas', 'Director', 'tisha.rumbewas@sagufoundation.org', NULL, NULL, '$2y$10$LhOGklOQj/J1eBYKS4lB0ee6h1PJGHevCDruGjfdVDRioo4KToC4W', 'images/users/Tisha-200x200.jpg', 'tisha-rumbewas', 'Publish', NULL, '2023-10-13 05:29:54', '2023-10-13 05:29:54', NULL),
(4, 'Elisabeth', '', 'Jakarimilena', 'Finance Officer', 'elisabeth.jakarimilena@sagufoundation.org', NULL, NULL, '$2y$10$RBCvnVmjxKzDPL/oDHqVsulWw8KNqwFrCZW1A3.rA1EY9DWeVWNmi', 'images/users/Ellysabeth-200x200.jpg', 'elisabeth-jakarimilena', 'Publish', NULL, '2023-10-13 05:29:54', '2023-10-13 05:29:54', NULL),
(5, 'Samuel', NULL, 'Bosawer', 'Web Developer', 'samuel.bosawer@sagufoundation.org', NULL, NULL, '$2y$10$jMVnv.V5NAh01T75dcNLLuNOoXDfmuuBUPAw34FrtHdsz3gL1.Pim', 'images/users/samuel-1707466130.png', 'samuel', 'Publish', 'XiiTmIRnOKeHRgiPrTYdp7eGo1NJFz0rQRk3DwlxOJM9PDOAZCQEVfnwED5r', '2023-10-13 05:29:55', '2024-02-13 01:37:51', NULL),
(6, 'Guest', '', 'SAGU', 'Guest SAGU Foundation', 'guest@sagufoundation.org', NULL, NULL, '$2y$10$LQyaQDaRTWGe85IzbfTMlOIgOc38rBXdY9Jx/quQ.Q6bOpgWQyR4u', 'images/users/profile-sagu-foundation.jpg', 'guest-sagu', 'Publish', NULL, '2023-10-13 05:29:55', '2023-10-13 05:29:55', NULL),
(7, 'BPSDM', '', '', 'Pemerintah Provinsi Papua', 'admin.bpsdm@papua.go.id', NULL, NULL, '$2y$10$PsAaKk66rmunPlUeaTz2j.7YlZnqUkHwVFt6.v/fQovKoBkLIhW6K', 'images/users/profile-provinsi-papua.jpg', 'bpsdm', 'Publish', NULL, '2023-10-13 05:29:55', '2023-10-13 05:29:55', NULL),
(8, 'Anastasia', 'Febriani', 'Yandong', NULL, 'anastasia@gmail.com', '082112341234', NULL, '$2y$10$sRWnauPvCFjbsYGgMNDYEegMCv3aJ/GBOqqNJhDLBQa7CPbRed5qe', 'images/users/anastasia-yandong.jpg', 'anastasia-febriani-yandong', 'Publish', NULL, '2023-10-13 05:29:55', '2023-10-13 05:29:55', NULL),
(12, 'Elisa', NULL, 'Faidiban', 'Office Assistant', 'elisa.faidiban@sagufoundation.org', '082198482326', NULL, '$2y$10$bpcngKKcvwbVDdazpC6S1eqGjjo/fIHAaZvKs2GaEo2Eg1pogRPkG', 'images/users/elisa-1697979486.png', 'elisa', 'Publish', NULL, '2023-10-22 12:58:06', '2023-10-22 12:58:06', NULL),
(15, 'Aftania', NULL, 'M. Waromi', NULL, 'awaromi.sup2021@sagufoundation.org', '082239808309', NULL, '$2y$10$K3OlwR6Z2HLKdoSe6oDEXuolLof7AHjKJtURK9IFcM9Kx7LiizPCi', 'images/students/IMG_1211.webp', 'aftaniam-waromi', 'Publish', NULL, '2023-11-03 02:06:45', '2023-11-17 05:34:56', NULL),
(16, 'Agustinus', NULL, 'I. Enembe', NULL, 'aenembe.sup2021@sagufoundation.org', '081247028935', NULL, '$2y$10$vD7b7J040uiTBKg832VTwesU9mbG50eMZRc31ij1vDTe5btLwaxwS', 'images/students/PAS Foto.JPG', 'agustinusi-enembe', 'Publish', NULL, '2023-11-03 02:14:15', '2023-11-17 04:09:35', NULL),
(17, 'Amelia', NULL, 'H. Heselo', NULL, 'aheselo.sup2021@sagufoundation.org', '082196700359', NULL, '$2y$10$OQCjommjW.0pKtMeFutueefuLvIu4gq6xojRLl8E1ARNF9bGfXf0e', 'images/students/IMG_1219.webp', 'ameliah-heselo', 'Publish', NULL, '2023-11-03 02:17:48', '2023-11-17 04:16:48', NULL),
(19, 'Amisael', NULL, 'Wenda', NULL, 'awenda.sup2021@sagufoundation.org', NULL, NULL, '$2y$10$jCyI34gGBb1h4gvJBw/6ouJwuKwB2j9B95kD6Yh7y5rgfcFUaBmKu', 'images/students/Amisael Wenda - Foto-1.webp', 'amisaelwenda', 'Publish', NULL, '2023-11-03 02:19:53', '2023-11-17 04:56:21', NULL),
(20, 'Apela', NULL, 'Omabak', NULL, 'aomabak.supvokasi2020@sagufoundation.org', NULL, NULL, '$2y$10$NJb8R6nB0OGKYcDV0czu9u1CFyXygv9saYQorJBZEGfbbUFJAgUzS', 'images/students/25 Apela Omabak - Photo.jpg', 'apelaomabak', 'Publish', NULL, '2023-11-03 02:20:33', '2023-11-14 03:59:52', NULL),
(21, 'Beri', NULL, 'Pahabol', NULL, 'bpahabol.sup2021@sagufoundation.org', NULL, NULL, '$2y$10$FhqjeotMkn9Al6EJN5Z3J./EqiWbP/KfFZfKEloLFjosZSX7JJt7W', 'images/students/IMG_1218.webp', 'beripahabol', 'Publish', NULL, '2023-11-03 02:22:00', '2023-11-17 04:29:51', NULL),
(22, 'Charles', NULL, 'Deda', NULL, 'cdeda.sup2021@sagufoundation.org', '082238687818', NULL, '$2y$10$5pevxvzw.NkmlvKd9RF8K.oYP3GcgoFt4US3ypwLhSqb5bZ3a1oky', 'images/students/IMG_1234.webp', 'charlesdeda', 'Publish', NULL, '2023-11-03 02:23:54', '2023-11-17 04:31:09', NULL),
(23, 'Aris', NULL, 'Arison R. E. Yeimo', NULL, 'ayeimo.supvokasi2020@sagufoundation.org', NULL, NULL, '$2y$10$/XbDY6rA7y.4iLhF7YWq0OkgnSwvAszFvjs.wTjBikWRESQ5Dqjqy', 'images/students/25 Aris A. R. E. Yeimo - Photo.jpg', 'arisarison-r-e-yeimo', 'Publish', NULL, '2023-11-03 02:25:05', '2023-11-14 04:06:19', NULL),
(24, 'Chiristofel', NULL, 'R. Ukaago', NULL, 'cukaago.sup2021@sagufoundation.org', '081343429217', NULL, '$2y$10$H95WO0vUKiHgg/qMT8DLPO7/Y2B7Gu6/lzOs.et.gnxBrDf.hGYbm', 'images/students/IMG_1220.webp', 'chiristofelr-ukaago', 'Publish', NULL, '2023-11-03 02:25:29', '2023-11-17 04:33:19', NULL),
(25, 'Daniel', NULL, 'S. T. Gombo', NULL, 'dgombo.sup2021@sagufoundation.org', NULL, NULL, '$2y$10$OeMuS6g..cxTsTyzZAxbi.TW9pduNcyBPkQ/iE0gnH10TbAkC/0qi', 'images/students/IMG_1212.webp', 'daniels-t-gombo', 'Publish', NULL, '2023-11-03 02:26:45', '2023-11-17 04:34:28', NULL),
(26, 'Behlinda', NULL, 'Jenni Numberi', NULL, 'bnumberi.supvokasi2020@sagufoundation.org', NULL, NULL, '$2y$10$hbNDRBSC72QlgaoKT463megiLAjqscL5hRYJp1m1pdKzephCVJqwm', 'images/students/25 Behlinda J. Numberi - Photo.jpg', 'behlindajenni-numberi', 'Publish', NULL, '2023-11-03 02:27:06', '2023-11-14 04:09:24', NULL),
(27, 'Daniel', NULL, 'T. Nawipa', NULL, 'dnawipa.sup2021@sagufoundation.org', '081344626097', NULL, '$2y$10$Tvwtoc5qZNspIF5RgJIt5uczmCXHwKCsGQpMBsxYNDrK7tphMunyy', 'images/students/IMG_1241.webp', 'danielt-nawipa', 'Publish', NULL, '2023-11-03 02:28:35', '2023-11-17 04:35:55', NULL),
(28, 'Costantina', NULL, 'Melan Numberi', NULL, 'cnumberi.supvokasi2020@sagufoundation.org', NULL, NULL, '$2y$10$c0bZMsmD2OjWvmWgYZL28uLMFLWeIKU8WHleEMq9vcWupDpNkWo7q', 'images/students/25 Costantina M. Numberi - Photo.jpg', 'costantinamelan-numberi', 'Publish', NULL, '2023-11-03 02:28:45', '2023-11-14 04:08:15', NULL),
(29, 'Dianti', NULL, 'R. Wanimbo', NULL, 'dwanimbo.sup2021@sagufoundation.org', '082238650803', NULL, '$2y$10$7Hy3KoxWrrRgAb4vvBekPeVMXoa5RueZszwG0YOBpJaWUL3hpry/y', 'images/students/IMG_1228.webp', 'diantir-wanimbo', 'Publish', NULL, '2023-11-03 02:30:09', '2023-11-17 04:36:50', NULL),
(30, 'Elisa', NULL, 'Soor', NULL, 'esoor.sup2021@sagufoundation.org', '082197754670', NULL, '$2y$10$xIh8vteU6CCke3TQjmiOl.1eI36ImdeHsJbfoeg5GAIpZPxVwlzpa', 'images/students/IMG_1231.webp', 'elisasoor', 'Publish', NULL, '2023-11-03 02:39:52', '2023-11-17 04:37:46', NULL),
(31, 'Elisa', NULL, 'Johan Hugo Ajamiseba', NULL, 'eajamiseba.supvokasi2020@sagufoundation.org', NULL, NULL, '$2y$10$xiDzVCYXrwgfjnWdjKXL2ukN6vMSJdTLRbOFFvuxOMQbPvlkeLiIi', 'images/students/25 Elisa J. H. Ajamiseba - Photo.jpg', 'elisajohan-hugo-ajamiseba', 'Publish', NULL, '2023-11-03 02:40:08', '2023-11-14 04:11:46', NULL),
(32, 'GIberth', NULL, 'David Rifurareany', NULL, 'grifurareany.supvokasi2020@sagufoundation.org', NULL, NULL, '$2y$10$vLc47hFyhdadHUvFr1NmvudwOxcfSOYFQslENuu32MG9lr5MNDu4u', 'images/students/25 Gilberth D. Rifurareany - Photo.jpg', 'gilberth-david-rifurareanydavid-rifurareany', 'Publish', NULL, '2023-11-03 02:41:29', '2024-02-20 01:48:26', NULL),
(33, 'Ezra', NULL, 'Mofu', NULL, 'emofu.sup2021@sagufoundation.org', NULL, NULL, '$2y$10$YaiwiIs74dkdCFqNbVcvJeF4Nbbt8nhUhyYRujsZi8tUwq4qzJljq', 'images/students/IMG_1237.webp', 'ezramofu', 'Publish', NULL, '2023-11-03 02:42:11', '2023-11-17 04:38:32', NULL),
(34, 'Frits', NULL, 'S. Wanggai', NULL, 'fwanggai.sup2021@sagufoundation.org', '085244915603', NULL, '$2y$10$jU3ybmQ4mTW2nb78pLfWcOprfSRT8/LPaEtuFIEy/Vy.PGk968TbS', 'images/students/Photo 2022-08-16 02.05.02 PM.webp', 'fritss-wanggai', 'Publish', NULL, '2023-11-03 02:44:08', '2023-11-17 04:39:22', NULL),
(35, 'Helena', NULL, 'Delma Famei Mundomi', NULL, 'hmundoni.supvokasi2020@sagufoundation.org', NULL, NULL, '$2y$10$fSS8S6D8ZbO1m3.E4LN3L.QHHD0Y5XhYNqRjGL1u7QXQrACCmpu9S', 'images/students/25 Helena D. F. Mundoni - Photo.jpg', 'helenadelma-famei-mundomi', 'Publish', NULL, '2023-11-03 02:45:02', '2023-11-14 04:13:32', NULL),
(36, 'Helena', NULL, 'Grace Melani Sineri', NULL, 'hsineri.supvokasi2020@sagufoundation.org', NULL, NULL, '$2y$10$L7l6/IuThNo8jh77AWhBxuJZi/R7vg3hNjdP8oCHpQ24ylvSMJWka', 'images/students/25 Helena G. H. Sineri - Photo.jpg', 'helenagrace-melani-sineri', 'Publish', NULL, '2023-11-03 02:47:41', '2023-11-14 04:14:45', NULL),
(37, 'Gabriela', NULL, 'Orisu', NULL, 'gorisu.sup2021@sagufoundation.org', '081248845802', NULL, '$2y$10$sfu.aK0PbciVadGkOHVNUuhzX4dwT534s1kP39fyFd5iBn/MWaAv6', 'images/students/IMG_1243.webp', 'gabrielaorisu', 'Publish', NULL, '2023-11-03 02:47:47', '2023-11-17 04:41:05', NULL),
(38, 'Immanuel', NULL, 'Yafet Kubuan', NULL, 'ikubuan.supvokasi2020@sagufoundation.org', NULL, NULL, '$2y$10$8B86aCVj7/E6hANi0hOkI.DSzh0SOHieLTNSs52AZ1mqXRKcbu/Ji', 'images/students/25 Immanuel Y. Kubuan - Photo.jpg', 'immanuelyafet-kubuan', 'Publish', NULL, '2023-11-03 02:49:05', '2023-11-14 04:16:14', NULL),
(39, 'Irene', NULL, 'Inri Jeny Woloin', NULL, 'iwoloin.supvokasi2020@sagufoundation.org', NULL, NULL, '$2y$10$zXrtIWaEL2r2YxGmQsZPqeoA66zOUns5koy0QVNZ79/IgwfmH7t/C', NULL, 'ireneinri-jeny-woloin', 'Publish', NULL, '2023-11-03 02:52:10', '2023-11-03 02:52:10', NULL),
(40, 'Gipson', NULL, 'Suu', NULL, 'gsuu.sup2021@sagufoundation.org', NULL, NULL, '$2y$10$C3e.WaF1RRfvm.2Pyk6MO.FpLGIH8MTzkUpCbiglOZYe69r9LNKsC', 'images/students/IMG_1215.webp', 'gipsonsuu', 'Publish', NULL, '2023-11-03 02:56:03', '2023-11-17 04:41:34', NULL),
(41, 'Kanaan', NULL, 'Apryl Karunia Damaris Abidondifu', NULL, 'kabidondifu.student@sagufoundation.org', NULL, NULL, '$2y$10$nj0YWUtRlOvVo2oR2yREPuPdYQlveB/zWO9qYaSVcGp0nkX846wvO', 'images/students/25 Kanaan A. K. D. Abidondifu - Photo.jpg', 'kanaanapryl-karunia-damaris-abidondifu', 'Publish', NULL, '2023-11-03 02:56:41', '2023-11-14 04:18:19', NULL),
(42, 'Gloria', NULL, 'Rumbekwan', NULL, 'grumbekwan.sup2021@sagufoundation.org', '082325142888', NULL, '$2y$10$JqfrB7DW89dMOk8HuUkF9eZtOOnii9/dRjf/lUm/suoPg1o4vfeD2', 'images/students/IMG_1232.webp', 'gloriarumbekwan', 'Publish', NULL, '2023-11-03 02:57:43', '2023-11-17 04:43:00', NULL),
(43, 'Kristina', NULL, 'Wakur', NULL, 'kwakur.supvokasi2020@sagufoundation.org', NULL, NULL, '$2y$10$7ARYJJDzAnaCPsL7MCTeOeauLsaBo5F5LH6i.CE9yUgudbsCkRha6', 'images/students/25 Kristina Wakur - Photo.jpg', 'kristinawakur', 'Publish', NULL, '2023-11-03 02:57:53', '2023-11-14 04:19:42', NULL),
(44, 'Heavenly', NULL, 'Morin', NULL, 'hmorin.sup2021@sagufoundation.org', '082124121244', NULL, '$2y$10$xTV08L80OsYfdwavQqeHYOrOU90Z/Fwn0atdgPmJfC/juMoek8Og.', 'images/students/IMG_1239.webp', 'heavenlymorin', 'Publish', NULL, '2023-11-03 02:59:33', '2023-11-17 04:43:26', NULL),
(45, 'Marcellino', NULL, 'Septiansyah Carlos Rumayau', NULL, 'mrumayauw.supvokasi2020@sagufoundation.org', NULL, NULL, '$2y$10$87nweVxhBj6yi8iz9ps.6u.7aHV091g1HMqL5BbNF4ptZZ2i60cPW', 'images/students/25 Marcellino Rumayauw - Photo.jpg', 'marcellinoseptiansyah-carlos-rumayau', 'Publish', NULL, '2023-11-03 03:00:04', '2023-11-14 04:21:03', NULL),
(46, 'Ita', NULL, 'M. M. Wanggai', NULL, 'iwanggai.sup2021@sagufoundation.org', '081247100229', NULL, '$2y$10$m2x4xdy7POcKWHx8sqb1hu6jLpivDuNAWx9YHZiAWxpjds68jeBO2', 'images/students/IMG_1225.webp', 'itam-m-wanggai', 'Publish', NULL, '2023-11-03 03:02:20', '2023-11-17 04:45:09', NULL),
(47, 'Mark', NULL, 'Zedekia Uruktem', NULL, 'muruktem.supvokasi2020@sagufoundation.org', NULL, NULL, '$2y$10$R34WdXSk8bdsYxcoClZFdeU8Kckr2dEA67NRyaIzqQv7F2Kn0BglC', 'images/students/25 Mark Z. Uruktem - Photo.jpg', 'markzedekia-uruktem', 'Publish', NULL, '2023-11-03 03:02:35', '2023-11-14 04:22:25', NULL),
(48, 'Jefri', NULL, 'Sembai', NULL, 'jsembai.sup2021@sagufoundation.org', '\'081340914020', NULL, '$2y$10$SHMwBjlHFPkHPieHuZxStetHPaZeTpWfzdEPVIIa6E15/DMGBN.dS', 'images/students/IMG_1242.webp', 'jefrisembai', 'Publish', NULL, '2023-11-03 03:03:30', '2023-11-17 04:45:48', NULL),
(49, 'Mesendi', NULL, 'Sermuri Ap', NULL, 'mesendiap.supvokasi2020@sagufoundation.org', NULL, NULL, '$2y$10$gUdJD2gUALr4VXc/U4CBbOlu8XfQ0pyM2hb89zM6NpRnpwm5F164i', 'images/students/25 Mesendi S. Ap - Photo.jpg', 'mesendisermuri-ap', 'Publish', NULL, '2023-11-03 03:03:38', '2023-11-14 04:24:23', NULL),
(50, 'Michal', NULL, 'Anathasia Kafiar', NULL, 'michalkafiar.supvokasi2020@sagufoundation.org', NULL, NULL, '$2y$10$sxkohHzPzpuOviX5UNy6Eupsh5iIbeHrFG1Z9WopgUNkBMNcQdWD6', 'images/students/25 Michal A. Kafiar - Photo.jpg', 'michalanathasia-kafiar', 'Publish', NULL, '2023-11-03 03:04:53', '2023-11-14 04:25:49', NULL),
(51, 'Jessica', NULL, 'J. Boikaway', NULL, 'jboikaway.sup2021@sagufoundation.org', NULL, NULL, '$2y$10$IB4k8tR1xGralDzpPGhsOusGO.QnCqtgNvEWEva2l5VWSKF.tCu82', 'images/students/IMG_1236.webp', 'jessicaj-boikaway', 'Publish', NULL, '2023-11-03 03:05:53', '2023-11-17 04:46:42', NULL),
(52, 'Misericordias', NULL, 'Domini Ernesto Jonathan Kafiar', NULL, 'mkafiar.supvokasi2020@sagufoundation.org', NULL, NULL, '$2y$10$79or8iia4oSkDOjRsIuH0ubm0m22D/MKPIV2.8bghQEIxjtUAG7hq', 'images/students/25 Misericordias D. E. J. Kafiar - Photo.jpg', 'misericordiasdomini-ernesto-jonathan-kafiar', 'Publish', NULL, '2023-11-03 03:06:54', '2023-11-14 04:26:51', NULL),
(53, 'Jhon', NULL, 'Sub', NULL, 'jsub.sup2021@sagufoundation.org', NULL, NULL, '$2y$10$DoZsE0PCgrhEFWYkEFLdTudwVfNyvIrAldQLyXpb1puDAdOhcx6Qi', 'images/students/IMG_1216.webp', 'jhonsub', 'Publish', NULL, '2023-11-03 03:07:23', '2023-11-17 04:47:42', NULL),
(54, 'Olimpiany', NULL, 'Kezia Esterina Hamadi', NULL, 'ohamadi.supvokasi2020@sagufoundation.org', NULL, NULL, '$2y$10$Rd3Vq6Qe1WF7L2/3amu6O.Zw86sruLP.ytMvzW/mYDDUthr5/YR4C', 'images/students/25 Olimpiany K. E. Hamadi - Photo.jpg', 'olimpianykezia-esterina-hamadi', 'Publish', NULL, '2023-11-03 03:08:06', '2023-11-14 04:28:51', NULL),
(55, 'Jou', NULL, 'Doom', NULL, 'jdoom.sup2021@sagufoundation.org', '081387450301', NULL, '$2y$10$A/srx6z5dkHMsal21hvZHeoCIbVWLKfyKXf.gVyim1QwgmhhMneJS', 'images/students/IMG_1230.webp', 'joudoom', 'Publish', NULL, '2023-11-03 03:08:45', '2023-11-17 04:48:28', NULL),
(56, 'Mariana', NULL, 'Marisan', NULL, 'mmarisan.sup2021@sagufoundation.org', NULL, NULL, '$2y$10$j/qHdnPgI6Sgd1nhb3cuqOGV.8iCC7fnF2mSCMb0CAdjL2jm2D9si', 'images/students/IMG_1233.webp', 'marianamarisan', 'Publish', NULL, '2023-11-03 03:09:48', '2023-11-17 04:49:52', NULL),
(57, 'Orlina', NULL, 'Magayan Brabar', NULL, 'obrabar.supvokasi2020@sagufoundation.org', NULL, NULL, '$2y$10$TGLR3EkwzmjQouVxtZ8P5eVzppTAzDd1MV.Jc9ZSO30UBjUB7daTG', 'images/students/25 Orlina M. Brabar - Photo.jpg', 'orlinamagayan-brabar', 'Publish', NULL, '2023-11-03 03:10:09', '2023-11-14 04:29:56', NULL),
(58, 'Marina', NULL, 'Rumy', NULL, 'mrumi.sup2021@sagufoundation.org', '081228255359', NULL, '$2y$10$YKdNDa4UeM81iPr98X.Gwu1RBT0Qu.ZFY58TiO5Zr.Wp4W7l63NMq', 'images/students/IMG_1227.webp', 'marinarumy', 'Publish', NULL, '2023-11-03 03:11:02', '2023-11-17 04:50:36', NULL),
(59, 'Paul', NULL, 'Marinus Yarangga', NULL, 'pyarangga.supvokasi2020@sagufoundation.org', NULL, NULL, '$2y$10$d6DrxracUnhyPuyOSqHhMeW0fCS1x53wfU.XfpEhQ0EXWEgDFqKDS', 'images/students/25 Paul M. Yarangga - Photo.jpg', 'paulmarinus-yarangga', 'Publish', NULL, '2023-11-03 03:11:12', '2023-11-14 04:31:01', NULL),
(60, 'Rachel', NULL, 'Jaroseray', NULL, 'rjaroseray.supvokasi2020@sagufoundation.org', NULL, NULL, '$2y$10$lDat9L9ZYt5wrV.a66SPF.RxBYp8gH5XeUQoYnObIFDJ1TiZ33Nvu', 'images/students/25 Rachel Jaroseray - Photo.jpg', 'racheljaroseray', 'Publish', NULL, '2023-11-03 03:12:10', '2023-11-14 04:32:05', NULL),
(61, 'Paulina', NULL, 'H. M. Rumere', NULL, 'prumere.sup2021@sagufoundation.org', '081248802980', NULL, '$2y$10$BXGaiYph.3XX5alMjDfzLucXdXlWesVLUc4kodETojsDyMg8y8/UK', 'images/students/IMG_1223.webp', 'paulinah-m-rumere', 'Publish', NULL, '2023-11-03 03:12:20', '2023-11-17 04:51:31', NULL),
(62, 'Rachel', NULL, 'Sisyira Adventin Cessarie Mansawan', NULL, 'rmansawan.supvokasi2020@sagufoundation.org', NULL, NULL, '$2y$10$XkbAqWkpD.9y/nI6jz9qLOMQ7FmUhl2/ZX7WJDaLvy6mLKlYg7f2K', 'images/students/25 Rachel S. A. C. Mansawan - Photo.jpg', 'rachelsisyira-adventin-cessarie-mansawan', 'Publish', NULL, '2023-11-03 03:14:16', '2023-11-14 04:33:17', NULL),
(63, 'Sony', NULL, 'L. Rumfaker', NULL, 'srumfaker.sup2021@sagufoundation.org', '081227708524', NULL, '$2y$10$EY3ZAw7qYHpRBrKItHOKYux/7Y2E491UYOtcBDcltkmPDNCsLLL8.', 'images/students/IMG_1235.webp', 'sonyl-rumfaker', 'Publish', NULL, '2023-11-03 03:15:16', '2023-11-17 04:53:28', NULL),
(64, 'Ribka', NULL, 'Yulianti Ovide', NULL, 'rovide.supvokasi2020@sagufoundation.org', NULL, NULL, '$2y$10$tohxu2Zn.EorLezzZQZ5T.02FeZanqrRPkM9UkvRaSGYJzXwxGDeK', 'images/students/25 Ribka Y. Ovide - Photo.jpg', 'ribkayulianti-ovide', 'Publish', NULL, '2023-11-03 03:16:01', '2023-11-14 04:35:32', NULL),
(65, 'Stevania', NULL, 'Wanggai', NULL, 'swanggai.sup2021@sagufoundation.org', '082123561901', NULL, '$2y$10$uHg9ne5lmjIWMIX1fQKpc.eluVW1I9HQx1XlUUqyhFGpivzgd54cW', 'images/students/IMG_1229.webp', 'stevaniawanggai', 'Publish', NULL, '2023-11-03 03:16:42', '2023-11-17 04:53:05', NULL),
(66, 'Ricky', NULL, 'Ronaldo Pekei', NULL, 'rpekei.supvokasi2020@sagufoundation.org', NULL, NULL, '$2y$10$2WSA3oeNnVMfJaFJYatdkumo77GtE/eeKgxgADpoTi1Q1PRIsQg2.', 'images/students/25 Ricky R. Pekei - Photo.jpg', 'rickyronaldo-pekei', 'Publish', NULL, '2023-11-03 03:17:24', '2023-11-14 04:36:40', NULL),
(67, 'Stevano', NULL, 'A. Mofu', NULL, 'smofu.sup2021@sagufoundation.org', '081247674671', NULL, '$2y$10$rStA4jNTAhj36JFsseII6.L84HifTkSih2NwVjaBFBjvLTczDdOcq', 'images/students/IMG_1238.webp', 'stevanoa-mofu', 'Publish', NULL, '2023-11-03 03:18:18', '2023-11-17 04:54:00', NULL),
(68, 'Rogers', NULL, 'Alexander Tegai', NULL, 'rtegai.supvokasi2020@sagufoundation.org', NULL, NULL, '$2y$10$/Cq27i.G1OmPCnbaXf1kfuOahJ9Aq58UMPQDSQbbiP382pER0ArHe', 'images/students/25 Rogers Tegai - Photo.jpg', 'rogersalexander-tegai', 'Publish', NULL, '2023-11-03 03:18:23', '2023-11-14 04:38:14', NULL),
(69, 'Sarcy', NULL, 'Nenepat', NULL, 'snenepat.supvokasi2020@sagufoundation.org', NULL, NULL, '$2y$10$6cMK9aqMEsCqwikiEmNfg.Qv1dEn3geX/tf5hXF44bLTAYA2z1X2S', 'images/students/25 Sarcy Nenepat - Photo.jpg', 'sarcynenepat', 'Publish', NULL, '2023-11-03 03:19:18', '2023-11-14 04:39:14', NULL),
(70, 'Van', NULL, 'A. D. Ondi', NULL, 'vondi.sup2021@sagufoundation.org', '081247217215', NULL, '$2y$10$wzdRWS62yiZo0zc4pwH9kexzj23URvQ6uWDaZcZb.QqeHlJX.yfdq', 'images/students/IMG_1221.webp', 'vana-d-ondi', 'Publish', NULL, '2023-11-03 03:19:55', '2023-11-17 04:55:05', NULL),
(71, 'Victoria', NULL, 'Sada', NULL, 'vsada.sup2021@sagufoundation.org', '082397119509', NULL, '$2y$10$fetcL5Ub8yJRi7lTEdj05O7px7qWDKzMHPBjJNzUWC6hy8AYyRpwe', 'images/students/IMG_1226.webp', 'victoriasada', 'Publish', NULL, '2023-11-03 03:21:17', '2023-11-17 04:30:31', NULL),
(72, 'Yeremia', NULL, 'S. Aufey', NULL, 'yaufey.sup2021@sagufoundation.org', NULL, NULL, '$2y$10$sja/UpFF2zDNKh9a0eDPmewYLHV03IK8X2RyH5tmemKV75tNCqR4y', 'images/students/IMG_1217.webp', 'yeremias-aufey', 'Publish', NULL, '2023-11-03 03:24:54', '2023-11-17 04:21:32', NULL),
(73, 'Yosepinax', NULL, 'Camewade', NULL, 'ycamewade.sup2021@sagufoundation.org', NULL, NULL, '$2y$10$bhvXq0OLLkUrONn33GHrKOFCpy.yLrvh3oaLuSNcQ2IfQL3FUc65y', 'images/students/IMG_1213.webp', 'yosepinaxcamewade', 'Publish', NULL, '2023-11-03 03:26:25', '2023-11-17 04:19:05', NULL),
(74, 'Yules', NULL, 'Pulalo', NULL, 'ypulalo.sup2021@sagufoundation.org', '081247633030', NULL, '$2y$10$2n9NI/tO5GJR/xtgJ0Kv5ubm2fzjGl7Dd8aed4.HL9RA96Kw3DvlW', 'images/students/IMG_1222.webp', 'yulespulalo', 'Publish', NULL, '2023-11-03 03:27:44', '2023-11-17 04:16:20', NULL),
(75, 'Sipora', NULL, 'Yuliana Refasi', NULL, 'srefasi.supvokasi2020@sagufoundation.org', NULL, NULL, '$2y$10$Ti3sHGHhxhCVLFTOY6vh4eXvEOu6t0R2fOU9ZIYClLXBg4sxq7Ue.', 'images/students/25 Sipora Y. Refasi - Photo.jpg', 'siporayuliana-refasi', 'Publish', NULL, '2023-11-03 05:44:48', '2023-11-14 04:40:36', NULL),
(76, 'Vingky', NULL, 'Natasya Robaha', NULL, 'vrobaha.supvokasi2020@sagufoundation.org', NULL, NULL, '$2y$10$Un56G77ucBcrV.Van1Z45eNQEtbxIjKhAjNSlAub4S7UacQToTSWi', 'images/students/25 Vingky N. Robaha - Photo.jpg', 'vingkynatasya-robaha', 'Publish', NULL, '2023-11-03 05:47:51', '2024-02-09 07:31:46', NULL),
(77, 'Weinan', NULL, 'Fingkreuw', NULL, 'wfingkreuw.supvokasi2020@sagufoundation.org', NULL, NULL, '$2y$10$O1YxLiMeR5XrSiXhgVQLQuW/r0rF5Pva1hMucxFvZJQ0jEIciJ5a2', 'images/students/25 Weinan Fingkreuw - Photo.jpg', 'weinanfingkreuw', 'Publish', NULL, '2023-11-03 05:49:10', '2023-11-14 04:42:04', NULL),
(78, 'Wihelmina', NULL, 'Beatrix Enjilin Waromi', NULL, 'wwaromi.supvokasi2020@sagufoundation.org', NULL, NULL, '$2y$10$4fXL8cuu4Oy1Bsmqn2Nqi.NryMyrIcxHMPc2Wu5TiwubsjzpbR3.O', 'images/students/25 Wihelmina B. E. Waromi - Photo.jpg', 'wihelminabeatrix-enjilin-waromi', 'Publish', NULL, '2023-11-03 05:50:42', '2023-11-14 04:43:10', NULL),
(79, 'Willem', NULL, 'Walilo', NULL, 'wwalilo.supvokasi2020@sagufoundation.org', NULL, NULL, '$2y$10$Anob3Gdbm6D8OzB.NdLkSOZNhEzWRXX.0BlLM1ommebPkvgRE0aS2', 'images/students/25 Willem Walilo - Photo.jpg', 'willemwalilo', 'Publish', NULL, '2023-11-03 05:52:01', '2023-11-14 04:44:07', NULL),
(80, 'Yekson', NULL, 'Somatuau Bagau', NULL, 'ybagau.supvokasi2020@sagufoundation.org', NULL, NULL, '$2y$10$SGbIw.X2zgSYMmiIVTQVhObcCwUMSuwER7d/kk0HjrCzWTKEkFzXe', 'images/students/25 Yekson S. Bagau - Photo.jpg', 'yeksonsomatuau-bagau', 'Publish', NULL, '2023-11-03 05:53:31', '2023-11-14 04:44:57', NULL),
(81, 'Yesterianus', NULL, 'Kaladana', NULL, 'ykaladana.supvokasi2020@sagufoundation.org', NULL, NULL, '$2y$10$.EEPWgXTMFQkau0QqrSxvubd2zqW8NVjPbwMBDiI.xzzWyxxFf/FO', 'images/students/25 Yesterianus Kaladana - Photo.jpg', 'yesterianuskaladana', 'Publish', NULL, '2023-11-03 05:54:34', '2023-11-14 04:45:59', NULL),
(82, 'Adriana', 'Diana', 'Anes', NULL, 'adrianadianaanes@gmail.com', '081344005821', NULL, '$2y$10$ox6VxXJ9EF2NSC0J4X0y7.2eQvcW1vdBe1/tzXdT0XGbt/RYX95hO', 'images/students/32.png', 'adrianadiana-anes', 'Publish', NULL, '2023-11-16 02:00:33', '2024-02-20 00:38:33', NULL),
(83, 'Alip', NULL, 'Gobai', NULL, 'alipgobai@gmail.com', '082172893426', NULL, '$2y$10$OvsLPaISdYa.9hdcRn1sAe62MV0pDKT1t/v1apNHa.2cmAWBIHqDu', 'images/students/33.png', 'alipgobai', 'Publish', NULL, '2023-11-16 02:03:28', '2024-02-20 00:41:07', NULL),
(84, 'Anastasia', NULL, 'Huby', NULL, 'anastasiahuby3@gmail', '081226801229', NULL, '$2y$10$De5t7xCxMDLBe.YcBbCnZuqj6yGfUjtVoPFi.cAJdSxk7WuAnJe.C', 'images/students/34.png', 'anastasiahuby', 'Publish', NULL, '2023-11-16 02:04:52', '2024-02-20 02:13:25', NULL),
(85, 'Elfira', NULL, 'Lintrifa Wakum', NULL, 'elfirawakum@gmail.com', NULL, NULL, '$2y$10$jOURw7kKlsHP329RLxMfM.tGJ/Gfr9Hewu61Ay6jSvS3U9XvX3hLu', 'images/students/35.png', 'elfiralintrifa-wakum', 'Publish', NULL, '2023-11-16 02:07:11', '2024-01-29 03:32:55', NULL),
(86, 'Elisabet', NULL, 'Rosalina Awi', NULL, 'elisaros@gmail.com', NULL, NULL, '$2y$10$hllMX0H5YFAQvfhC7vaZoOuZSqLv5u9lg0txad8Pfs4YXWLEg7nU6', NULL, 'elisabetrosalina-awi', 'Publish', NULL, '2023-11-16 02:09:25', '2023-11-16 02:09:25', NULL),
(87, 'Freda', NULL, 'Marliana Foni Arwam', NULL, 'fredaarwam@gmail.com', '082199026590', NULL, '$2y$10$y2jlrZxNUOrEvNsrz6RZ3.AJYeba3dClrX5JgV0LYxeux8pC1uMj.', 'images/students/36.png', 'fredamarliana-foni-arwam', 'Publish', NULL, '2023-11-16 02:11:03', '2024-02-20 02:16:50', NULL),
(88, 'Herliana', NULL, 'Alfin Burwos', NULL, 'hburwos@gmail.com', '082199654332', NULL, '$2y$10$L.uzsDGuVBeu37gjCZKmgO9AzQ4FTNJ8fJJ4jGOpIdJPNzRl0i5I2', 'images/students/SAGU - WEB USER AVATARS.png', 'herlianaalfin-burwos', 'Publish', NULL, '2023-11-16 02:15:41', '2024-02-20 02:17:11', NULL),
(89, 'Manfret', NULL, 'Boma', NULL, 'manfretboma09@gmail.com', NULL, NULL, '$2y$10$4qPrrDWib/Iak4Izvn1dVeeD/gasN2uE7T0pwPc.MEDxw.5KYJOhG', NULL, 'manfretboma', 'Publish', NULL, '2023-11-16 02:16:38', '2023-11-16 02:16:38', NULL),
(90, 'Orpa', NULL, 'Wangguway', NULL, 'wangguway02@gmail.com', '082398503502', NULL, '$2y$10$jqNQTDTJRxCStRJ0.IVAMuBgAkw8p2gFvB5Tvqd42q4PKcUyp5mEG', 'images/students/37.png', 'orpawangguway', 'Publish', NULL, '2023-11-16 02:17:36', '2024-02-20 02:19:12', NULL),
(91, 'Ravenscka', NULL, 'Madeline Youwe', NULL, 'ravensckamyouwe@gmail.com', '081356219984', NULL, '$2y$10$Naqgl20Uytj89xj0OoEykeaHTJIYcFkzHQDxMNXbY8eCI5NCSnKr.', 'images/students/38.png', 'ravensckamadeline-youwe', 'Publish', NULL, '2023-11-16 02:18:50', '2024-02-20 02:19:29', NULL),
(92, 'Rida', NULL, 'Wenda', NULL, 'ridawenda99@gmail.com', '081248365680', NULL, '$2y$10$2lcjrmkZZrwzOPNGshwBsuA3JpNSQEM0TmvGXwXngmKasqQM7e6ku', 'images/students/39.png', 'ridawenda', 'Publish', NULL, '2023-11-16 02:19:48', '2024-02-20 02:19:49', NULL),
(93, 'Sopater', NULL, 'Kapisa', NULL, 'paterkapisa11@gmail.com', NULL, NULL, '$2y$10$liCNd.HQkuOh/p1Mch2V3O/udWJoOikzrSWhlfY9DQ9Kn0Zjttjjy', NULL, 'sopaterkapisa', 'Publish', NULL, '2023-11-16 02:20:47', '2023-11-16 02:20:47', NULL),
(94, 'Yohanes', NULL, 'Akwila Wona', NULL, 'yohaneswona291@gmail.com', NULL, NULL, '$2y$10$hs04AhZgOJQ5DFM3f/Vn4.eYurXgFLEK68Q.36nDMjVcrTPiYBaA6', NULL, 'yohanesakwila-wona', 'Publish', NULL, '2023-11-16 02:22:36', '2023-11-16 02:22:36', NULL),
(95, 'Yumi', NULL, 'Wonda', NULL, 'yumiwonda28@gmail.com', NULL, NULL, '$2y$10$w5VhgT4uuOHuvcv/DxzJge1LWD9mAX79VK8STrMZtUYSw7rLu.SpK', NULL, 'yumiwonda', 'Publish', NULL, '2023-11-16 02:23:32', '2023-11-16 02:23:32', NULL),
(96, 'Andrieta', NULL, 'Paula Mansawan', NULL, 'Andietapaula@gmail.com', '082322587991', NULL, '$2y$10$g2CPDjOsuGRKvZoBSfZ45uAzSdRTd2C9bNzwEihkpBCiQz0CedaZ6', 'images/students/27.png', 'andrietapaula-mansawan', 'Publish', NULL, '2023-11-16 02:24:40', '2024-02-20 02:10:45', NULL),
(97, 'Anjali', NULL, 'Dona Anastasia Waimuri', NULL, 'anjaliwaiwuri@gmail.com', '081243252218', NULL, '$2y$10$duq9Ue3PYKUBF9oIgltUQ.pwyxvOCw.BvYOSmnVZbN4A4PKpk6G8i', NULL, 'anjalidona-anastasia-waimuri', 'Publish', NULL, '2023-11-16 02:25:52', '2024-02-20 02:14:50', NULL),
(98, 'Antoneta', NULL, 'Martha Yoku', NULL, 'antonetamartha3@gmail.com', '081319713769', NULL, '$2y$10$DAhwjFw6OqHSwU8upc5ozOpwXUiBKmp2864u2MaGR6uHwvHUhkPA.', 'images/students/26.png', 'antonetamartha-yoku', 'Publish', NULL, '2023-11-16 02:27:55', '2024-02-20 02:15:13', NULL),
(99, 'Benita', NULL, 'Luciane Kawaitouw', NULL, 'kwbenita9@gmail.com', '082197719421', NULL, '$2y$10$qFXIjeERFDTS9d7lm41vruIHnvzJBNh96wYMYfk5HMjFPyuMRUqzS', 'images/students/40.png', 'benitaluciane-kawaitouw', 'Publish', NULL, '2023-11-16 02:29:11', '2024-02-20 02:15:36', NULL),
(100, 'Desiana', NULL, 'Eveline Mare', NULL, 'desianamare2@gmai.com', NULL, NULL, '$2y$10$hrmECpXSfOPYwO6AAXbsberzsG4/YbittI72gQQZdthML3jtgeJl.', 'images/students/28.png', 'desianaeveline-mare', 'Publish', NULL, '2023-11-16 02:30:13', '2024-01-30 01:04:16', NULL),
(101, 'Jamina', NULL, 'Rineke Rumbewas', NULL, 'rumbewasjamina97@gmail.com', NULL, NULL, '$2y$10$T7//g3QICLbR5HE8jAa4hu1epmYGGxhYk7pqf08DkvzY3Nn1R/spu', NULL, 'jaminarineke-rumbewas', 'Publish', NULL, '2023-11-16 02:31:27', '2023-11-16 02:31:27', NULL),
(102, 'John', NULL, 'Philep Merauje', NULL, '15merauje@gmail.com', NULL, NULL, '$2y$10$s3tWh1HHjed/RawRxVj1MOlrPUUDFO.U.OXuzn7bFpAfRmqNfZO0q', 'images/students/29.png', 'johnphilep-merauje', 'Publish', NULL, '2023-11-16 02:32:33', '2024-01-29 03:36:18', NULL),
(103, 'Louise', NULL, 'Roosevit Mambrasar', NULL, 'rooseveltlouide25@gmail.com', '082313572041', NULL, '$2y$10$FBVFnLvSR33iT5PeesBCLeT42JdhKsbjVqOFc1/hyzV2QBEwEvrVu', 'images/students/24.png', 'louiseroosevit-mambrasar', 'Publish', NULL, '2023-11-16 02:34:08', '2024-02-20 02:17:47', NULL),
(104, 'Lusiana', NULL, 'Tale Ngai Daka', NULL, 'lusianadaka1996@gmail.com', '085197536622', NULL, '$2y$10$75px4xb1l613YNloXqpSP.mZob0Bve3Ete9t6HQQz7zdSpdZocb5W', 'images/students/30.png', 'lusianatale-ngai-daka', 'Publish', NULL, '2023-11-16 02:35:20', '2024-02-20 02:17:30', NULL),
(105, 'Ronal', NULL, 'W Jigibalom', NULL, 'rjigibalom09@gmail.com', '082146517027', NULL, '$2y$10$vkvJfC6CKAQh8EBVRaoSEOU77cvcBJhDiQt0MMOt.DTu/WzhCHdUi', 'images/students/41.png', 'ronalw-jigibalom', 'Publish', NULL, '2023-11-16 02:40:17', '2024-02-20 02:20:10', NULL),
(106, 'Ryan', NULL, 'Dwitama Raya', NULL, 'ryandwitamaraya@gmail.com', '085298622531', NULL, '$2y$10$gNqojmujyxNLgaJIfTrY4.UhKTqK02ckVQWjhEhZnQyfJGnG6vUGq', 'images/students/31.png', 'ryandwitama-raya', 'Publish', NULL, '2023-11-16 02:41:46', '2024-02-20 02:20:28', NULL),
(107, 'Sindy', NULL, 'Margaretha Hamadi', NULL, 'sindyhamadi13@gmail.com', NULL, NULL, '$2y$10$03I.rQ7B6vjui13yO0vhaePoN3gVc8pZeAViJ8Wsl0lW.eT.k17pG', 'images/students/25.png', 'sindymargaretha-hamadi', 'Publish', NULL, '2023-11-16 02:42:41', '2024-01-29 03:35:33', NULL),
(108, 'Nona', NULL, 'Isaura Naomi Vewen', NULL, 'naomi.vwn@gmail.com', '081344961199', NULL, '$2y$10$x60agqDw4Ri6ADewfTLx1ecvkpHsR4CIcjAwx72VeeQzPIOiDXyHe', 'images/students/Nona Isaura Naomi Vewen.png', 'nonaisaura-naomi-vewen', 'Publish', NULL, '2023-11-16 02:44:37', '2024-02-20 02:18:01', NULL),
(119, 'Siska', NULL, 'Asso', NULL, 'tessiskaasso@gmail.com', NULL, NULL, '$2y$10$cHenJU/ExEF52lOUR7.P6eYw18mr7FMt7KtKCZi7pBh.r6b9PFOPW', NULL, 'siskaasso', 'Draft', NULL, '2024-01-30 04:33:39', '2024-01-30 04:33:39', NULL),
(125, 'Nipen', NULL, 'soo', NULL, 'nipensoo24@gmail.com', '0812-7044-3081', NULL, '$2y$10$f91RfaW3kTlUJ/JkV0nBieqKPvbNBnRHPq7lgORXZ933E.FFXDIAy', 'images/students/SAGU - WEB USER AVATARS (6).png', 'nipensoo', 'Publish', NULL, '2024-01-30 05:44:28', '2024-01-30 05:44:49', NULL),
(126, 'Selli', NULL, 'Mirin', NULL, 'illesmirin@gmail.com', '+62 812-3954-8690', NULL, '$2y$10$n1/vHuDAACqvyGEfGnGZDe4BpAqS86dkZutySQczoeEVxjOn2zCpS', 'images/students/SAGU - WEB USER AVATARS (8).png', 'sellimirin', 'Publish', NULL, '2024-01-30 05:46:45', '2024-02-20 01:25:17', NULL),
(127, 'Selpius', NULL, 'Asso', NULL, 'hubulaap@gmail.com', '0822-1125-2908', NULL, '$2y$10$64bZbuDkYzsfN3sEIh6vu.EAiVkHV1e9iH34MrvVtIzEz1sMEEr3G', 'images/students/SAGU - WEB USER AVATARS (9).png', 'selpiusasso', 'Publish', NULL, '2024-01-30 05:48:30', '2024-01-30 05:48:49', NULL),
(128, 'Semi', NULL, 'Yahuli', NULL, 'semirazhcolyahuli@gmail.com', '0821-4381-8993', NULL, '$2y$10$zjEkYH1/Qt6YriWCEWmfBucXqfPo0MSFBbGk83b.H4ZVUeDP1AKde', 'images/students/SAGU - WEB USER AVATARS (10).png', 'semiyahuli', 'Publish', NULL, '2024-01-30 05:50:14', '2024-01-30 05:50:29', NULL),
(129, 'Theri', NULL, 'Suhun', NULL, 'chlinnoderrysuhun@gmail.com', '0813-6603-6694', NULL, '$2y$10$XwR5qKrN/dYl6LkQni73Bu7cJ5DW00jYUjQQN.dw/nbx5zGalRtyW', 'images/students/SAGU - WEB USER AVATARS (11).png', 'therisuhun', 'Publish', NULL, '2024-01-30 05:52:06', '2024-01-30 05:52:18', NULL),
(130, 'Elikius', NULL, 'Kobak', NULL, 'elkiuskobakkobakelkius@gmail.com', '+62 822-1412-2764', NULL, '$2y$10$6SF5XXCSNVWKedW59MZaGu0gQlvgqzu1U5Q7vhyMR2mzvrAZ/0b8.', 'images/students/SAGU - WEB USER AVATARS (1).png', 'elikiuskobak', 'Publish', NULL, '2024-01-30 05:58:44', '2024-01-30 05:59:54', NULL),
(131, 'Hodani', NULL, 'Kobak', NULL, 'hodanikobak@gmail.com', '+62 852-1972-4871', NULL, '$2y$10$z1M0orPLEk6HXgNyiaOGq.HwYrmGlCAdyL8ACdOwuJ8JdmD2W8e8m', 'images/students/SAGU - WEB USER AVATARS (2).png', 'hodanikobak', 'Publish', NULL, '2024-01-30 06:00:57', '2024-01-30 06:01:18', NULL),
(132, 'Kristian', NULL, 'Kobak', NULL, 'yenerwysen05@gmail.com', '+62 821-9814-7561', NULL, '$2y$10$nDYwvzX6ProaPjUnXKRuluZtHWrwHcPtSy5VnzTXoW425bIIWC8OG', 'images/students/SAGU - WEB USER AVATARS (3).png', 'kristiankobak', 'Publish', NULL, '2024-01-30 06:02:15', '2024-01-30 06:02:28', NULL),
(133, 'Menius', NULL, 'Heluka', NULL, 'meniusheluka16@gmail.com', '+62 821-9806-6648', NULL, '$2y$10$Ouf0gNR8K/Fzqrkj0gE3/.ED3nlDUbi2EQQzetex1cSiMtUYqRwFm', 'images/students/SAGU - WEB USER AVATARS (4).png', 'meniusheluka', 'Publish', NULL, '2024-01-30 06:03:55', '2024-01-30 06:04:07', NULL),
(134, 'Tiel', NULL, 'Kobak', NULL, 'kobakt@gmail.com', '+62 821-8328-5907', NULL, '$2y$10$tFuRP70KJ218yg13VkLHhOMgKp/pwXRjLFQq0yo3gZuV.Jp9aPB2S', 'images/students/SAGU - WEB USER AVATARS (12).png', 'tielkobak', 'Publish', NULL, '2024-01-30 06:08:05', '2024-01-30 06:08:19', NULL),
(135, 'Velly', NULL, 'Ambolon', NULL, 'vellyambolon88@gmail.com', '+62 813-1227-8009', NULL, '$2y$10$IjTrsfJjMU4//8N.NXAK.ennDFgrNGRI18vhHO837NDUUB57F5XYi', 'images/students/SAGU - WEB USER AVATARS (13).png', 'vellyambolon', 'Publish', NULL, '2024-01-30 06:09:09', '2024-01-30 06:09:21', NULL),
(136, 'Apolos', NULL, 'Kabak', NULL, 'apoloskabak@gmail.com', '+62 821-9270-6870', NULL, '$2y$10$.Lbu9GK/2BLjjxE3E27LC.x5sJExEUpdFOakLV/7Vs.67S8wkju8a', 'images/students/SAGU - WEB USER AVATARS.png', 'apoloskabak', 'Publish', NULL, '2024-01-30 06:10:42', '2024-01-30 06:10:58', NULL),
(137, 'Verinus', NULL, 'Kabak', NULL, 'verinusk@gmail.com', '+62 821-9268-4109', NULL, '$2y$10$WEsd5VzGumfqn6R3.lT1OuQZQTAoxY4Gz62p98YTK7W15VwL31sCG', 'images/students/SAGU - WEB USER AVATARS (14).png', 'verinuskabak', 'Publish', NULL, '2024-01-30 06:21:48', '2024-01-30 06:22:01', NULL),
(138, 'Yeri', NULL, 'Mirin', NULL, 'mirinyerimirin@gmail.com', '+62 812-8345-3572', NULL, '$2y$10$h1bzTWoZ7uVhCT3JkplSY.CPT4sOb00dmi6Qci8TJzA2G9Q/1HkNG', 'images/students/SAGU - WEB USER AVATARS (15).png', 'yerimirin', 'Publish', NULL, '2024-01-30 06:23:38', '2024-01-30 06:24:00', NULL),
(139, 'Pinus', NULL, 'Asso', NULL, 'pinosasso@gmail.com', '+62 852-3110-8643', NULL, '$2y$10$o9KVmlpgk7pmwb/4B1ACTe4APA1io4G2SZvH1fBpOIIEiTV.vCaZS', 'images/students/SAGU - WEB USER AVATARS (7).png', 'pinusasso', 'Publish', NULL, '2024-01-30 06:52:10', '2024-01-30 06:52:24', NULL),
(140, 'Merpi', NULL, 'Pahabol', NULL, 'merpipahabol544@gmailcom', '+62 852-1598-0152', NULL, '$2y$10$5fOvJQX27ZP0jAaGggi7V.kQ9aO/XuBBTbdtPeS2oB8D46M1/KbRW', 'images/students/SAGU - WEB USER AVATARS (5).png', 'merpipahabol', 'Publish', NULL, '2024-01-30 06:54:26', '2024-01-30 06:54:40', NULL),
(141, 'Veni', NULL, 'Alfonsia', NULL, 'venialfonsia@gmail.com', '085254790988', NULL, '$2y$10$rPVxFIISwYh0Xx9uxJ7UxOplDT9zexfBe6cyPgdw7DIC.ZKFnE07O', NULL, 'venialfonsia', 'Publish', NULL, '2024-01-31 01:09:46', '2024-01-31 01:09:46', NULL),
(142, 'Elias', NULL, 'Alberto Udam', NULL, 'eliasalbertoudam@gmail.com', '085244564017', NULL, '$2y$10$/9J5DWnUN8yI9W8IEMLnP.xOA52HKbGT0qsynkq4E8i5DO/2eZSQu', 'images/students/SAGU - WEB USER AVATARS (18).png', 'eliasalberto-udam', 'Publish', NULL, '2024-01-31 01:12:30', '2024-02-06 02:14:29', NULL),
(143, 'Letrin', NULL, 'Caterin Waroy', NULL, 'letrinwaroy@gmail.com', '085254857103', NULL, '$2y$10$lqTpZoByoWU9OAqYbFay/.R2m9ygLd.Q9uf40k1QWRAjkaBhIDwu6', 'images/students/SAGU - WEB USER AVATARS (17).png', 'letrincaterin-waroy', 'Publish', NULL, '2024-01-31 01:15:05', '2024-02-06 02:15:07', NULL),
(144, 'Juliana', NULL, 'Makanuay', NULL, 'mcjuliana91@gmail.com', '085254858430', NULL, '$2y$10$0xCOTBETtwVh1a./73VqeuQ7YBwsh0lfNz/sTq0YxxRbvZToqqLDS', 'images/students/SAGU - WEB USER AVATARS (19).png', 'julianamakanuay', 'Publish', NULL, '2024-01-31 01:31:12', '2024-02-06 02:17:50', NULL),
(145, 'Benny', NULL, 'Yumame', NULL, 'bennyyumame18@gmail.com', '081369665691', NULL, '$2y$10$jx06aLkmYYlW8fwqs8RpcOTFxSxQQOC8uvwYE69eCLjzWs0ClnBM6', 'images/students/SAGU - WEB USER AVATARS (16).png', 'bennyyumame', 'Publish', NULL, '2024-01-31 01:33:50', '2024-02-06 02:12:55', NULL),
(146, 'Arllie', NULL, 'Marseliano Hanok Solossa', NULL, 'arlliesolossa4@gmail.com', '081281882248', NULL, '$2y$10$Otp9LMCmJKKS4WE8cxTDNO.4dFyprKGKY6eiaomZ8AgdWDmmRj3FC', 'images/students/SAGU - WEB USER AVATARS (20).png', 'arlliemarseliano-hanok-solossa', 'Publish', NULL, '2024-01-31 01:36:17', '2024-02-06 02:19:14', NULL),
(147, 'Klara', NULL, 'Wonar', NULL, 'klara.wonar@gmaill.com', '081234939326', NULL, '$2y$10$2uunuF3k6/z734qftp8B5e6RlwGQxET33mLQ/9A8.e6sVEQYdp7cO', 'images/students/SAGU - WEB USER AVATARS (21).png', 'klarawonar', 'Publish', NULL, '2024-01-31 01:40:00', '2024-02-06 02:20:20', NULL),
(148, 'Maylen', NULL, 'K.P Kambuaya', NULL, 'kjayapura@yahoo.com', '081281081985', NULL, '$2y$10$bWBlKx5O5hBgoYGP3hl4i.hFxDkNZR3jX6BefHvrMT/ubkarAua..', 'images/students/SAGU - WEB USER AVATARS (22).png', 'maylenkp-kambuaya', 'Publish', NULL, '2024-01-31 01:45:42', '2024-02-06 02:20:59', NULL),
(149, 'Martapina', NULL, 'Berotabui', NULL, 'kakaatha205@gmail.com', '082225974807', NULL, '$2y$10$B9J/3YTuwk8JBlgqwYL0reC85txXZV57vME1CSCKMy15qycdUWEpO', NULL, 'martapinaberotabui', 'Publish', NULL, '2024-01-31 01:48:19', '2024-01-31 01:48:19', NULL),
(151, 'Christine', NULL, 'worabay', NULL, 'worabayxtin@gmail.com', '+62 822-4774-3047', NULL, '$2y$10$liELdk6.Y/6Gd8bhxxgyiOI2KoVqB9Hzunxc/bBh05XCJjQphX1bW', 'images/students/SAGU - WEB USER AVATARS (23).png', 'christineworabay', 'Publish', NULL, '2024-02-06 02:31:36', '2024-02-06 02:33:05', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `books_author_id_foreign` (`author_id`),
  ADD KEY `books_catagory_id_foreign` (`catagory_id`);

--
-- Indexes for table `catagories`
--
ALTER TABLE `catagories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `documents_user_id_foreign` (`user_id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`),
  ADD KEY `education_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `loan_books`
--
ALTER TABLE `loan_books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `loan_books_user_id_foreign` (`user_id`),
  ADD KEY `loan_books_book_id_foreign` (`book_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `provinces`
--
ALTER TABLE `provinces`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `students_province_id_foreign` (`province_id`),
  ADD KEY `students_user_id_foreign` (`user_id`);

--
-- Indexes for table `student_program`
--
ALTER TABLE `student_program`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_program_students_id_foreign` (`students_id`),
  ADD KEY `student_program_program_id_foreign` (`program_id`);

--
-- Indexes for table `universitas`
--
ALTER TABLE `universitas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT for table `catagories`
--
ALTER TABLE `catagories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=166;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loan_books`
--
ALTER TABLE `loan_books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `provinces`
--
ALTER TABLE `provinces`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT for table `student_program`
--
ALTER TABLE `student_program`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `universitas`
--
ALTER TABLE `universitas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_author_id_foreign` FOREIGN KEY (`author_id`) REFERENCES `authors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `books_catagory_id_foreign` FOREIGN KEY (`catagory_id`) REFERENCES `catagories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `documents`
--
ALTER TABLE `documents`
  ADD CONSTRAINT `documents_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `education`
--
ALTER TABLE `education`
  ADD CONSTRAINT `education_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `loan_books`
--
ALTER TABLE `loan_books`
  ADD CONSTRAINT `loan_books_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `loan_books_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_province_id_foreign` FOREIGN KEY (`province_id`) REFERENCES `provinces` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `students_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student_program`
--
ALTER TABLE `student_program`
  ADD CONSTRAINT `student_program_program_id_foreign` FOREIGN KEY (`program_id`) REFERENCES `programs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_program_students_id_foreign` FOREIGN KEY (`students_id`) REFERENCES `students` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
