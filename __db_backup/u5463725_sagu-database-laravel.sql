-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 28, 2024 at 09:17 AM
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
(29, 97, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/1bk8T5xdcBi0ZyjaGUxrJKYvx3LG82U4_?usp=sharing', '2024-02-20 01:10:33', '2024-02-20 01:10:33'),
(30, 95, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/1UhuzeU2bJzO418Y-N7NINkuZRovTdXgM?usp=sharing', '2024-02-20 01:10:45', '2024-02-20 01:10:45'),
(31, 74, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/1bbY-JgoDl5qzNZLT6Q5cHpUzUmmpkGgx?usp=drive_link', '2024-02-20 01:11:22', '2024-02-20 01:11:22'),
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
(165, 98, 'Google Sheets', 'All documents and links', 'https://docs.google.com/spreadsheets/d/1tIV3a7XyIIihZV15B-C0pLWqjG1qjYij8ofynBlP-oc/edit?usp=sharing', '2024-02-20 04:23:01', '2024-02-20 04:23:01'),
(166, 20, 'Goggle sheets', 'Daftar semua dokumen dan link', 'https://docs.google.com/spreadsheets/d/1uoesxo_zHYbqnAh6Y0a_5tafVesrV4gR7Vps5-mneBw/edit?usp=drive_link', '2024-02-21 02:16:04', '2024-02-21 02:16:04'),
(167, 136, 'Goggle sheets', 'Daftar semua dokumen dan link', 'https://docs.google.com/spreadsheets/d/1K1FBG7S8p2rGRmSB4xqWeifLkPRFozAj79IZu-IgBSw/edit?usp=drive_link', '2024-02-21 02:18:37', '2024-02-21 02:18:37'),
(168, 23, 'Goggle sheets', 'Daftar semua dokumen dan link', 'https://docs.google.com/spreadsheets/d/1xKp7i3p3hxyh-z8ZfBTx5RVfuJgJP5rCFmLcBEoAVEs/edit?usp=drive_link', '2024-02-21 02:22:55', '2024-02-21 02:22:55'),
(169, 146, 'Goggle sheets', 'Daftar semua dokumen dan link', 'https://docs.google.com/spreadsheets/d/1T2hhQ_Pug00RYJ_PT2LmrhIOSKNNM8uUhOGfUg6QBkg/edit?usp=drive_link', '2024-02-21 02:25:53', '2024-02-21 02:25:53'),
(170, 26, 'Goggle sheets', 'Daftar semua dokumen dan link', 'https://docs.google.com/spreadsheets/d/1e3iuN8sF5lakJdQjzcXWCjFwqyGfkICJJkqUknyXuUQ/edit?usp=drive_link', '2024-02-21 02:29:49', '2024-02-21 02:29:49'),
(171, 99, 'Goggle sheets', 'Daftar semua dokumen dan link', 'https://docs.google.com/spreadsheets/d/1E9o71t9g5uRD9-Hd9wu0ChMtKYG-QRronSJHL4Lty60/edit?usp=drive_link', '2024-02-21 02:31:47', '2024-02-21 02:31:47'),
(172, 145, 'Goggle sheets', 'Daftar semua dokumen dan link', 'https://docs.google.com/spreadsheets/d/1avALXiaqOlNRFi_QKdSoLKjdpedUeihdw4ffLF3IQFQ/edit?usp=drive_link', '2024-02-21 02:34:15', '2024-02-21 02:34:15'),
(173, 21, 'Goggle sheets', 'Daftar semua dokumen dan link', 'https://docs.google.com/spreadsheets/d/12Vu9aju2ou_GjSQ4AFyl-kXuK6rtaMqStTlbJ3oFc8o/edit?usp=drive_link', '2024-02-21 02:37:09', '2024-02-21 02:37:09'),
(174, 22, 'Goggle sheets', 'Daftar semua dokumen dan link', 'https://docs.google.com/spreadsheets/d/11wAEDQzgQF2Uh0k2pgcbVYdqfGjBqEc-_OBLdi_Xe4M/edit?usp=drive_link', '2024-02-21 02:39:54', '2024-02-21 02:39:54'),
(175, 24, 'Goggle sheets', 'Daftar semua dokumen dan link', 'https://docs.google.com/spreadsheets/d/1JN8Za-akXXjOUJUdZb844qjx3VREIomVjU8E6Jrm9is/edit?usp=drive_link', '2024-02-21 02:43:39', '2024-02-21 02:43:39'),
(176, 151, 'Goggle sheets', 'Semua dokumen dan link', 'https://docs.google.com/spreadsheets/d/1nrDDGi41bCXS64go9utbvT9gPJos9NeAbSQ88K1PR9M/edit?usp=drive_link', '2024-02-21 03:04:01', '2024-02-21 03:04:01'),
(177, 28, 'Goggle sheets', 'Semua dokumen dan link', 'https://docs.google.com/spreadsheets/d/1R12XOx0CyAfnGEX3VdXg4xH2PxYMvzw8i5HHmz34T9c/edit?usp=drive_link', '2024-02-21 03:06:14', '2024-02-21 03:06:14'),
(178, 25, 'Goggle sheets', 'Semua dokumen dan link', 'https://docs.google.com/spreadsheets/d/1hDgiV7sRkV0ZmNyhujL28xsgDyy8PN984OntR6kHtPQ/edit?usp=drive_link', '2024-02-21 03:09:13', '2024-02-21 03:09:13'),
(179, 27, 'Goggle sheets', 'Semua dokumen dan link', 'https://docs.google.com/spreadsheets/d/1caCexcIzz_TnymMVSWN7N1tP9LkZUUU_qaSaAjvCwIw/edit?usp=drive_link', '2024-02-21 03:12:21', '2024-02-21 03:12:21'),
(180, 100, 'goggle sheets', 'Semua dokumen dan link', 'https://docs.google.com/spreadsheets/d/1d6U9G85ro7UUyO0sS_qjvAvEwNj1lBoFTBA0ukorRs4/edit?usp=drive_link', '2024-02-21 03:24:49', '2024-02-21 03:24:49'),
(181, 85, 'Goggle sheets', 'Semua dokumen dan link', 'https://docs.google.com/spreadsheets/d/1Bqg2Myhj4hgUHztywn9zoaZO0VOaRtlPysqHRTBT-ko/edit?usp=drive_link', '2024-02-21 03:45:05', '2024-02-21 03:45:05'),
(182, 142, 'Goggle sheets', 'Semua dokumen dan link', 'https://docs.google.com/spreadsheets/d/1kUnhPH-Po9mGbBUS8EIICIs8mzOWXoJUFPrqxZrZQgc/edit?usp=drive_link', '2024-02-21 03:47:17', '2024-02-21 03:47:17'),
(183, 130, 'Goggle sheets', 'Semua dokumen dan link', 'https://docs.google.com/spreadsheets/d/1XyANkCGG0CsHUsHBOaacez1rfF3h9VV-7SlZojc-WxA/edit?usp=drive_link', '2024-02-21 03:49:12', '2024-02-21 03:49:12'),
(185, 31, 'Goggle sheets', 'Semua dokumen dan link', 'https://docs.google.com/spreadsheets/d/1Sb5YtDkutqM9qWyWVGX1-0YVcDFajXMSvTQXFSU0mkw/edit?usp=drive_link', '2024-02-21 04:02:16', '2024-02-21 04:02:16'),
(187, 30, 'Goggle sheets', 'Semua dokumen dan link', 'https://docs.google.com/spreadsheets/d/1GWgg7N89qBLCJ346Ylft4-I0qpdVWQHSk8-DImO_2z0/edit?usp=drive_link', '2024-02-21 04:04:48', '2024-02-21 04:04:48'),
(188, 86, 'Goggle sheets', 'Semua dokumen dan link', 'https://docs.google.com/spreadsheets/d/1LhibFl4IHyB2PwdM3B2yK0ifI8Hl8SAIKCj8BT8UmH4/edit?usp=drive_link', '2024-02-21 04:08:02', '2024-02-21 04:08:02'),
(189, 33, 'Goggle sheets', 'Semua folder dan link', 'https://docs.google.com/spreadsheets/d/19IYYzeuoDcREKhIxrudAl1MIPUpO18lTdnfTGGoDGXs/edit?usp=drive_link', '2024-02-21 04:10:37', '2024-02-21 04:10:37'),
(190, 87, 'Goggle sheets', 'Semua folder dan link', 'https://docs.google.com/spreadsheets/d/1qrRxDWc9VQxwgR1B5hEn0g9TatBtySurVGXrC7J_d14/edit?usp=drive_link', '2024-02-21 04:12:49', '2024-02-21 04:12:49'),
(191, 34, 'Goggle sheets', 'Semua folder dan link', 'https://docs.google.com/spreadsheets/d/1oXLfKKw2QpdfS0WKHKvDPeyxy1ysDOOYjfWxUivI6Jk/edit?usp=drive_link', '2024-02-21 04:16:20', '2024-02-21 04:16:20'),
(192, 37, 'Goggle sheets', 'Semua folder dan link', 'https://docs.google.com/spreadsheets/d/1AWRO7jKeUzl5vqv2v1Ku2H2B9URIWVZS76993uJU4Vg/edit?usp=drive_link', '2024-02-21 04:19:11', '2024-02-21 04:19:11'),
(193, 32, 'Goggle sheets', 'Semua folder dan link', 'https://docs.google.com/spreadsheets/d/1zsHJUOrfl2YdcirIxPbllEJ3KSJaMXwa9UkhycOT02o/edit?usp=drive_link', '2024-02-21 04:21:50', '2024-02-21 04:21:50'),
(194, 40, 'Goggle sheets', 'Semua folder dan link', 'https://docs.google.com/spreadsheets/d/10rn-B3smDr31VGEA_afQIK0M-RxmMEPCFGi_dy_zY3A/edit?usp=drive_link', '2024-02-21 04:23:47', '2024-02-21 04:23:47'),
(195, 42, 'Goggle sheets', 'Semua folder dan link', 'https://docs.google.com/spreadsheets/d/1BFrTxO07d330e8hsLvKvvNLS1bpAJ8miQiZoytrbb5Y/edit?usp=drive_link', '2024-02-21 04:28:02', '2024-02-21 04:28:02'),
(196, 44, 'Goggle sheets', 'Semua folder dan link', 'https://docs.google.com/spreadsheets/d/1u1ZW87w742jW_3z4eS8hEvECzGdse509HRLjevx5i-s/edit?usp=drive_link', '2024-02-21 04:32:04', '2024-02-21 04:32:04'),
(197, 36, 'Goggle sheets', 'Semua folder dan link', 'https://docs.google.com/spreadsheets/d/1hNurBF9WPVONoJ-rvE5b5F5bKp6QDyPYtWoiw9b3PC4/edit?usp=drive_link', '2024-02-21 04:34:47', '2024-02-21 04:34:47'),
(198, 35, 'Goggle sheets', 'Semua folder dan link', 'https://docs.google.com/spreadsheets/d/1sW4IUriGH2R46brZNwPNsfVR1AEkCFzKvV6ZaBNwUE4/edit?usp=drive_link', '2024-02-21 04:41:55', '2024-02-21 04:41:55'),
(199, 88, 'Goggle sheets', 'Semua folder dan link', 'https://docs.google.com/spreadsheets/d/1skemwLotxmTwZqYA1zGo_IrfZDZ63lMO59ecNutCYtY/edit?usp=drive_link', '2024-02-21 04:45:59', '2024-02-21 04:45:59'),
(200, 131, 'Goggle sheets', 'Semua folder dan link', 'https://docs.google.com/spreadsheets/d/1CuJH0Ksm7pk-D4bnMsOdSaltaHJWYOElFoVjhtKeYYw/edit?usp=drive_link', '2024-02-21 04:47:59', '2024-02-21 04:47:59'),
(201, 38, 'Goggle sheets', 'Semua folder dan link', 'https://docs.google.com/spreadsheets/d/1u0rWCcjA_nIJd__KELQ0pj_pevVvdLzp-wehV2RBr28/edit?usp=drive_link', '2024-02-21 04:55:55', '2024-02-21 04:55:55'),
(202, 39, 'Goggle sheets', 'Semua folder dan link', 'https://docs.google.com/spreadsheets/d/1JfklyujRVJ3A7NziNh1BRYgBLTgLsRpaiQ7eMeiiNyk/edit?usp=drive_link', '2024-02-21 05:03:37', '2024-02-21 05:03:37'),
(203, 46, 'Goggle sheets', 'Semua folder dan link', 'https://docs.google.com/spreadsheets/d/1RlfL2MXm-g4taRsZwENtin_J69IdD9RTbQgVKrSOCI8/edit?usp=drive_link', '2024-02-21 05:08:48', '2024-02-21 05:08:48'),
(204, 101, 'Goggle sheets', 'Semua folder dan link', 'https://docs.google.com/spreadsheets/d/1hzb-v_z37m5LpwkipoJk_CJobPFVjzK3Gdt-0W2xLFE/edit?usp=drive_link', '2024-02-21 05:15:28', '2024-02-21 05:15:28'),
(205, 51, 'Goggle sheets', 'Semua folder dan link', 'https://docs.google.com/spreadsheets/d/1MAJnbiaiqUofC0CxNiijlTQH3K9uuEk0mKSShS6_glk/edit?usp=drive_link', '2024-02-21 05:41:08', '2024-02-21 05:41:08'),
(206, 53, 'Goggle sheets', 'Semua folder dan link', 'https://docs.google.com/spreadsheets/d/1b4LRAc4QBGzJaaeCKzDZ-ArnOlIGBmK7TiEhmoUnUhw/edit?usp=drive_link', '2024-02-21 05:42:35', '2024-02-21 05:42:35'),
(207, 102, 'Goggle sheets', 'Semua folder dan link', 'https://docs.google.com/spreadsheets/d/1Ph0yXSXdYvO6ygWiGh2oS0dBXD_UFo5ZFWOfuQaL0ak/edit?usp=drive_link', '2024-02-21 05:44:00', '2024-02-21 05:44:00'),
(208, 55, 'Goggle sheets', 'Semua folder dan link', 'https://docs.google.com/spreadsheets/d/140IdYyUBu-LyKfE9WqdNdZG4goiBAWpXgb0_VfmGsXk/edit?usp=drive_link', '2024-02-21 05:46:18', '2024-02-21 05:46:18'),
(209, 144, 'Goggle sheets', 'Semua folder dan link', 'https://docs.google.com/spreadsheets/d/1kNOJE5iCtwgQqive8cvxpk97SnGhiH_qt2uHbT44Vp0/edit?usp=drive_link', '2024-02-21 05:47:40', '2024-02-21 05:47:40'),
(210, 41, 'Goggle sheets', 'Semua folder dan link', 'https://docs.google.com/spreadsheets/d/1OqzwJV1M-TjDiQky8u-TXtlyba8OFbG8yuLDBL_xUVg/edit?usp=drive_link', '2024-02-21 05:49:19', '2024-02-21 05:49:19'),
(211, 147, 'Goggle sheets', 'Semua folder dan link', 'https://docs.google.com/spreadsheets/d/1Tl_8v5LREOL8hYn9QoHCh9FUzMVpxEJ25rSp3HCaD7o/edit?usp=drive_link', '2024-02-21 05:50:39', '2024-02-21 05:50:39'),
(212, 132, 'Goggle sheets', 'Semua folder dan link', 'https://docs.google.com/spreadsheets/d/14FSUOHeQ54gowPZbNSNhgrxYXvdPTaivJbHr8CqNdbI/edit?usp=drive_link', '2024-02-21 05:52:03', '2024-02-21 05:52:03'),
(213, 43, 'Goggle sheets', 'Semua folder dan link', '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vQoWGmBJROqGz2UhXR3tJ26SlvKs4J0EoGkWC-4gZiUGGhztLz1GYFukezHPeqPTC-A6o0SUZ8zocyd/pubhtml?widget=true&amp;headers=false\"></iframe>', '2024-02-21 05:53:31', '2024-02-21 05:53:31'),
(214, 143, 'Goggle sheets', 'Semua folder dan link', 'https://docs.google.com/spreadsheets/d/15J8JS-hT23bLICcfpQQmks4Xt1KFExXngBFlcHOfBP0/edit?usp=drive_link', '2024-02-21 05:55:25', '2024-02-21 05:55:25'),
(215, 103, 'Goggle sheets', 'Semua folder dan link', 'https://docs.google.com/spreadsheets/d/1qlBTPkKLBNIqFyLk-F6bkLU_4QY-EhVXzosHsPaKsfQ/edit?usp=drive_link', '2024-02-21 05:59:43', '2024-02-21 05:59:43'),
(216, 104, 'Goggle sheets', 'Semua folder dan link', 'https://docs.google.com/spreadsheets/d/1sQHqNDJ8ZTwyFSmND_Rq34CnYhdexjzRbyVITXxVeZw/edit?usp=drive_link', '2024-02-21 06:02:55', '2024-02-21 06:02:55'),
(217, 89, 'Goggle sheets', 'Semua folder dan link', 'https://docs.google.com/spreadsheets/d/1vpTiYCCsr6LZeBf0fGg1C2YICiLuY0xKsqGTpmxHpWU/edit?usp=drive_link', '2024-02-21 06:04:09', '2024-02-21 06:04:09'),
(218, 45, 'Goggle sheets', 'Semua folder dan link', 'https://docs.google.com/spreadsheets/d/1CJGxFRyGl-B7bV07VOnUYDOHsuEMjJgsok6uTUjBT8Y/edit?usp=drive_link', '2024-02-21 06:05:15', '2024-02-21 06:05:15'),
(219, 56, 'Goggle sheets', 'Semua folder dan link', 'https://docs.google.com/spreadsheets/d/1fXQHrG-UCCqhmkLOfMQcL2Bi97eWYLRAdjYdcxYsUOM/edit?usp=drive_link', '2024-02-21 06:07:12', '2024-02-21 06:07:12'),
(220, 58, 'Goggle sheets', 'Semua folder dan link', 'https://docs.google.com/spreadsheets/d/16Ea49CX0AukVJEyu3zZLL7al_KQeNCxfuVNO2-NfHWQ/edit?usp=drive_link', '2024-02-21 06:18:15', '2024-02-21 06:18:15'),
(221, 47, 'Goggle sheets', 'Semua folder dan link', 'https://docs.google.com/spreadsheets/d/1sUUSqAmElHxwyMGo_G4Ife0kDUjD_QOC8u2htw-XZsY/edit?usp=drive_link', '2024-02-21 06:19:43', '2024-02-21 06:19:43'),
(222, 149, 'Goggle sheets', 'Semua folder dan link', 'https://docs.google.com/spreadsheets/d/1Rx_Wm6XY1Os_wMRTILlitgqaUHqOV6OE74E5yxxyW2Y/edit?usp=drive_link', '2024-02-21 06:21:20', '2024-02-21 06:21:20'),
(223, 148, 'Goggle sheets', 'Semua folder dan link', 'https://docs.google.com/spreadsheets/d/116_a-D67RQOxRV2DXkRCccw8yJwFlDUdthyUy_2cEGg/edit?usp=drive_link', '2024-02-21 06:24:31', '2024-02-21 06:24:31'),
(224, 133, 'Goggle sheets', 'Semua folder dan link', 'https://docs.google.com/spreadsheets/d/1cPqOsNLk8obr9E5ua3XhaM40MaKxlg0IbSVk2Pug5JU/edit?usp=drive_link', '2024-02-21 06:26:55', '2024-02-21 06:26:55'),
(225, 140, 'Goggle sheets', 'Semua folder dan link', 'https://docs.google.com/spreadsheets/d/1RsnulfPfiYREs2-IRGItb9WgSwStyWCPLMF8ho3BQAI/edit?usp=drive_link', '2024-02-21 06:30:11', '2024-02-21 06:30:11'),
(226, 49, 'Goggle sheets', 'Semua folder dan link', 'https://docs.google.com/spreadsheets/d/1-_v-KWsCRAZUsTxYb5lvfZzPmSjn3_BbyrUmU8bcKGk/edit?usp=drive_link', '2024-02-21 06:33:25', '2024-02-21 06:33:25'),
(227, 50, 'Goggle sheets', 'Semua folder dan link', 'https://docs.google.com/spreadsheets/d/1g2112bgQKsvMH3sEzG7no6N5ficgYnvugHeuz7kxjaQ/edit?usp=drive_link', '2024-02-21 06:35:27', '2024-02-21 06:35:27'),
(228, 52, 'Goggle sheets', 'Semua folder dan link', 'https://docs.google.com/spreadsheets/d/17jLRNY5j72VerMQ-ZYdp9FJRPtYS0hpJy9ZGNMJlJHI/edit?usp=drive_link', '2024-02-21 06:37:15', '2024-02-21 06:37:15'),
(229, 125, 'Goggle sheets', 'Semua folder dan link', 'https://docs.google.com/spreadsheets/d/1edW01AiPZymwGUTpIRw67uUNaVyR_I365TnsIc6jOUo/edit?usp=drive_link', '2024-02-21 06:40:12', '2024-02-21 06:40:12'),
(230, 108, 'Google sheets', 'Semua folder dan link', 'https://docs.google.com/spreadsheets/d/1T6Aq8Sfn-TBJWfjuLiuzfGDrkhqedZA3Tx6HpRzFihM/edit?usp=drive_link', '2024-02-21 06:42:46', '2024-02-21 06:42:46'),
(231, 54, 'Goggle sheets', 'Semua folder dan link', 'https://docs.google.com/spreadsheets/d/1WtBv3Qze9Cua78TumnnduNjR5AU0Rn0kG_23h5jeqjY/edit?usp=drive_link', '2024-02-21 06:46:31', '2024-02-21 06:46:31'),
(232, 57, 'Goggle sheets', 'Semua folder dan link', 'https://docs.google.com/spreadsheets/d/1r2L7py9_AAJz1rdVraghw3Z_4Q0OrufsIy9VNOYjBp4/edit?usp=drive_link', '2024-02-21 06:49:22', '2024-02-21 06:49:22'),
(233, 90, 'Goggle sheets', 'Semua folder dan link', 'https://docs.google.com/spreadsheets/d/1IdxuURYY9z0nx41ULcQ3c6gtfY37kQaOEBL83qpLsAY/edit?usp=drive_link', '2024-02-21 06:52:23', '2024-02-21 06:52:23'),
(234, 59, 'Goggle sheets', 'Semua folder dan link', 'https://docs.google.com/spreadsheets/d/1q-BXI5_Nk9GzyS9Uk0ZZIar-8kYB7v3Ci_mtCui7XZc/edit?usp=drive_link', '2024-02-21 06:55:20', '2024-02-21 06:55:20'),
(235, 106, 'Goggle sheets', 'Semua folder dan link', 'https://docs.google.com/spreadsheets/d/10Bs6kN_uFGrYEVwIYFKfKnEsoMJOw0hLqFhYrQH8qLs/edit?usp=drive_link', '2024-02-22 04:58:01', '2024-02-22 04:58:01'),
(236, 61, 'Goggle sheets', 'Semua folder dan link', 'https://docs.google.com/spreadsheets/d/1bgDT1huSwjIb5BEWqymVEuR0vqPT3ev4FBI3sqSajuE/edit?usp=drive_link', '2024-02-22 05:01:29', '2024-02-22 05:01:29'),
(237, 139, 'Goggle sheets', 'Semua folder dan link', 'https://docs.google.com/spreadsheets/d/1UWFxZ_GKf_Zs54suEBQDzIeqGaxAUwqu8AxTOPARpm4/edit?usp=drive_link', '2024-02-22 05:09:32', '2024-02-22 05:09:32'),
(238, 62, 'Goggle sheets', 'Semua folder dan link', 'https://docs.google.com/spreadsheets/d/1amDtBNzF0M8tGxnbf4tih-N0nfyxJsKRk2LBKH9KeNM/edit?usp=drive_link', '2024-02-22 05:11:04', '2024-02-22 05:11:04'),
(239, 60, 'Goggle sheets', 'Semua folder dan link', 'https://docs.google.com/spreadsheets/d/1AItHwwRhf8KSMmsAjCwbDHZkf7x7XReikbT7QD3XePs/edit?usp=drive_link', '2024-02-22 05:12:47', '2024-02-22 05:12:47'),
(240, 91, 'Goggle sheets', 'Semua folder dan link', 'https://docs.google.com/spreadsheets/d/1umtRxgcqwR9CXCzqADb-x2Rj6zGpKhPqwNzzSeOjorA/edit?usp=drive_link', '2024-02-22 05:14:15', '2024-02-22 05:14:15'),
(241, 64, 'Goggle sheets', 'Semua folder dan link', 'https://docs.google.com/spreadsheets/d/1qjPg2KOyAQ9dJSHoNSOW5fDLN53OdTzbCm0LRPZqxWk/edit?usp=drive_link', '2024-02-22 05:15:28', '2024-02-22 05:15:28'),
(242, 66, 'Goggle sheets', 'Semua folder dan link', 'https://docs.google.com/spreadsheets/d/14-mEhbvBpexEevY-iIknhxnPZQJXzhO2LpmoEYNr0Ok/edit?usp=drive_link', '2024-02-22 05:16:49', '2024-02-22 05:16:49'),
(243, 92, 'Goggle sheets', 'Semua folder dan link', 'https://docs.google.com/spreadsheets/d/14NuVjGVK_S0w4LbI7fG1-4LMVJh0k20UphhioHJ51OM/edit?usp=drive_link', '2024-02-22 05:19:14', '2024-02-22 05:19:14'),
(244, 68, 'Goggle sheets', 'Semua folder dan link', 'https://docs.google.com/spreadsheets/d/1apWOIWRW2EYnWgBA784OXiLxCesPTIrg_RQUfEHrKj4/edit?usp=drive_link', '2024-02-22 05:20:30', '2024-02-22 05:20:30'),
(245, 105, 'Goggle sheets', 'Semua folder dan link', 'https://docs.google.com/spreadsheets/d/18vE2jdH3mVQ7shs39NuTB_4-yLkY4XQFUujPFw7Wb08/edit?usp=drive_link', '2024-02-22 05:22:27', '2024-02-22 05:22:27'),
(246, 69, 'Goggle sheets', 'Semua folder dan link', 'https://docs.google.com/spreadsheets/d/19Wd0ORemC44Mj4Z26GzqF-ZeRq_s2gA5x3hnKXuBf_w/edit?usp=drive_link', '2024-02-22 05:23:55', '2024-02-22 05:23:55'),
(247, 126, 'Goggle sheets', 'Semua folder dan link', 'https://docs.google.com/spreadsheets/d/1XLimOxWrNK6Vo7GKyHy0fYefMr-VKTtVAdOm3PDO5Es/edit?usp=drive_link', '2024-02-22 05:26:16', '2024-02-22 05:26:16'),
(248, 127, 'Goggle sheets', 'Semua folder dan link', 'https://docs.google.com/spreadsheets/d/1y9TfMOCznq63do8dOikkQlhX1E1SPAhGCZg6ILVAYl8/edit?usp=drive_link', '2024-02-22 05:27:41', '2024-02-22 05:27:41'),
(249, 128, 'Goggle sheets', 'Semua folder dan link', 'https://docs.google.com/spreadsheets/d/1uiyx8k3H29I7114Q1oT7ja2S9rdUUhirfOETAQgs0pw/edit?usp=drive_link', '2024-02-22 05:29:06', '2024-02-22 05:29:06'),
(250, 107, 'Goggle sheets', 'Semua folder dan link', 'https://docs.google.com/spreadsheets/d/1_RTVVBF9_ZpenRklLzF_RnYZUafNzediZ6LCHzoq7Lk/edit?usp=drive_link', '2024-02-22 05:30:23', '2024-02-22 05:30:23'),
(251, 75, 'Goggle sheets', 'Semua folder dan link', 'https://docs.google.com/spreadsheets/d/1YMLFcWh7nvJ14Vv0jor85v4-rV7tt8-Cx7X0DfbVvT0/edit?usp=drive_link', '2024-02-22 05:31:48', '2024-02-22 05:31:48'),
(252, 63, 'Goggle sheets', 'Semua folder dan link', 'https://docs.google.com/spreadsheets/d/13PwZHWsDe8Ra3pqArdCMcr5C430YjtUhTgueehMMJUs/edit?usp=drive_link', '2024-02-22 05:32:51', '2024-02-22 05:32:51'),
(253, 93, 'Goggle sheets', 'Semua folder dan link', 'https://docs.google.com/spreadsheets/d/16k2o3Oh4iM696_oK03Da7tEJ_C9KlNkSnL3U4EznzTI/edit?usp=drive_link', '2024-02-22 05:34:05', '2024-02-22 05:34:05'),
(254, 65, 'Goggle sheets', 'Semua folder dan link', 'https://docs.google.com/spreadsheets/d/1okvhr4eK4_CoZljUjh2pgyub0Ut7FceggU0dlNOkZXM/edit?usp=drive_link', '2024-02-22 05:35:09', '2024-02-22 05:35:09'),
(255, 67, 'Goggle sheets', 'Semua folder dan link', 'https://docs.google.com/spreadsheets/d/1gDH_SUjr0KBWclViAEXSH5BgZVxuuNfTIYfegCu_1rE/edit?usp=drive_link', '2024-02-22 05:37:24', '2024-02-22 05:37:24'),
(256, 129, 'Goggle sheets', 'Semua folder dan link', 'https://docs.google.com/spreadsheets/d/1fdHG4qi2nNhX1dV6AVJJwz7ZOiT3iD96_GeLFFsvUPc/edit?usp=drive_link', '2024-02-22 05:39:07', '2024-02-22 05:39:07'),
(257, 134, 'Goggle sheets', 'Semua folder dan link', 'https://docs.google.com/spreadsheets/d/1JYYwebcB1BKMPAiW_iwmA6ubq3GNlzy0hkmvUrBnnU0/edit?usp=drive_link', '2024-02-22 05:41:16', '2024-02-22 05:41:16'),
(258, 70, 'Goggle sheets', 'Semua folder dan link', 'https://docs.google.com/spreadsheets/d/1XiVunc_yt_brWhDaYNvK7n_-c5s-D_WXUqP9yeBaj4U/edit?usp=drive_link', '2024-02-22 05:43:06', '2024-02-22 05:43:06'),
(259, 135, 'Goggle sheets', 'Semua folder dan link', 'https://docs.google.com/spreadsheets/d/1MSsSVqzRJlVyJBlrrvqAPilyL_Q-7XlTD8se6ynlaxY/edit?usp=drive_link', '2024-02-22 05:45:37', '2024-02-22 05:45:37'),
(260, 141, 'Gogglee sheets', 'Semua folder dan link', 'https://docs.google.com/spreadsheets/d/19cEHk7Uz4aLonXVdNCLxNW69ca1H2ZjR12eKHZtICBI/edit?usp=drive_link', '2024-02-22 05:47:13', '2024-02-22 05:47:13'),
(261, 137, 'Goggle sheets', 'Semua folder dan link', 'https://docs.google.com/spreadsheets/d/1m3IriX2OK33svDa_MMY5YU_BhMLloc0r7nTwVCQWzKc/edit?usp=drive_link', '2024-02-22 05:49:18', '2024-02-22 05:49:18'),
(262, 71, 'Goggle sheets', 'Semua folder dan link', 'https://docs.google.com/spreadsheets/d/15BjgXpvYhCdcjq6YD8_uVFu0mvfGKbOI-Rt2icnaKhU/edit?usp=drive_link', '2024-02-22 05:50:58', '2024-02-22 05:50:58'),
(263, 76, 'Goggle sheets', 'Semua folder dan link', 'https://docs.google.com/spreadsheets/d/1U7QIPjxROI6aX8syABVekXb5Z2ktCIf05JxxSHxXvmQ/edit?usp=drive_link', '2024-02-22 05:52:29', '2024-02-22 05:52:29'),
(264, 77, 'Goggle sheets', 'Semua folder dan link', 'https://docs.google.com/spreadsheets/d/1koazlGLsuIhyksVIOMqD5tl8dibey8GofxBFCGcHGCo/edit?usp=drive_link', '2024-02-22 05:54:22', '2024-02-22 05:54:22'),
(265, 78, 'Goggle sheets', 'Semua folder dan link', 'https://docs.google.com/spreadsheets/d/142cyOpLiMazMFrn57CPAsb-R3hZz-HRpeC8B6y5f8-o/edit?usp=drive_link', '2024-02-22 05:56:00', '2024-02-22 05:56:00'),
(266, 79, 'Goggle sheets', 'Semua folder dan link', 'https://docs.google.com/spreadsheets/d/1kJNTHeyvKvpjM6MZNwVCEJnTFeGH7Q8lGp0wMDt2jp4/edit?usp=drive_link', '2024-02-22 05:58:30', '2024-02-22 05:58:30'),
(267, 80, 'Goggle sheets', 'Semua folder dan link', 'https://docs.google.com/spreadsheets/d/1DqQdaCuL__2C3KgLJCS067AUmQxeyNB3kffwVFWb9Uc/edit?usp=drive_link', '2024-02-22 06:00:59', '2024-02-22 06:00:59'),
(268, 72, 'Goggle sheets', 'Semua folder dan link', 'https://docs.google.com/spreadsheets/d/19tDnwr3BZgt2-NA8d9ipkJwwL_lkgDKr_Fzf3n1Dyk0/edit?usp=drive_link', '2024-02-22 06:02:51', '2024-02-22 06:02:51'),
(269, 138, 'Goggle sheets', 'Semua folder dan link', 'https://docs.google.com/spreadsheets/d/1I8VBBQ6BVjQqCwtcBLShTSU3RUTh1imh_2BbMwRKmqg/edit?usp=drive_link', '2024-02-22 06:04:57', '2024-02-22 06:04:57'),
(270, 81, 'Goggle sheets', 'Semua folder dan link', 'https://docs.google.com/spreadsheets/d/17HMFiig0EDaGnui4AME7hSnzY1x1Yk3tgOeH8Lkoz-8/edit?usp=drive_link', '2024-02-22 06:06:56', '2024-02-22 06:06:56'),
(271, 94, 'Goggle sheets', 'Semua folder dan link', 'https://docs.google.com/spreadsheets/d/1mRUdxtcJlPPFu2Li9sFyfKlp1q8ZqmE5mgE-B5eCpsM/edit?usp=drive_link', '2024-02-22 06:08:46', '2024-02-22 06:08:46'),
(272, 73, 'Goggle sheets', 'Semua folder dan link', 'https://docs.google.com/spreadsheets/d/1hhk_ZApNrA_NFYN5yGOClqZZCU144pMfRFH2lFcNWyM/edit?usp=drive_link', '2024-02-22 06:10:26', '2024-02-22 06:10:26'),
(273, 95, 'Goggle sheets', 'Semua folder dan link', 'https://docs.google.com/spreadsheets/d/1bR6M8L6msV7t9Pat_wYS1xDbj5XCYQyjNSwxZCL8sOU/edit?usp=drive_link', '2024-02-22 06:25:42', '2024-02-22 06:25:42'),
(274, 17, 'Google Drive', 'Main folder', 'https://drive.google.com/drive/folders/1tP2RVN1ve4-Tgizksb7dkvpKhCSIOEbO?usp=drive_link', '2024-02-22 06:54:17', '2024-02-22 06:54:17'),
(275, 96, 'Google Sheets', 'All documents and links', 'https://docs.google.com/spreadsheets/d/1fatx-54X6tmzXSw6Bfs5kt1BkYQMvNKOMD5CRg_PB7k/edit?usp=drive_link', '2024-02-22 06:57:38', '2024-02-22 06:57:38'),
(276, 97, 'Google Sheets', 'All documents and links', 'https://docs.google.com/spreadsheets/d/1shJ6YpMbwmgcr8lDFBsp9nLnaM9BcrlexwKp9KmOEuo/edit?usp=drive_link', '2024-02-22 06:58:25', '2024-02-22 06:58:25'),
(279, 237, 'Goggle drive', 'Folder utama', 'https://drive.google.com/drive/folders/1lXHX0gAlruV8wI0otw1QyxNvtfLsERMC?usp=drive_link', '2024-03-06 05:30:00', '2024-03-06 05:30:00'),
(280, 237, 'Goggle sheets', 'Semua folder dan link', 'https://docs.google.com/spreadsheets/d/1BkkYXgPn9iNvrGnjXqeqiZRUP0hUf7JX-WdNc2s15oM/edit?usp=drive_link', '2024-03-06 05:30:41', '2024-03-06 05:30:41');

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
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `group_title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `short_description` varchar(255) DEFAULT NULL,
  `full_description` mediumtext DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `group_title`, `slug`, `short_description`, `full_description`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 'General English', NULL, 'General English Classes by SAGU Foundation', NULL, 'Publish', '2024-03-21 09:29:36', '2024-03-28 01:26:02', NULL),
(4, 'Computer Literacy', NULL, 'Computer Literacy Classes by SAGU Foundation', NULL, 'Publish', '2024-03-21 09:30:02', '2024-03-28 01:26:22', NULL),
(5, 'IELTS', NULL, 'IELTS Preparation and IELTS Simulation by SAGU Foundation', NULL, 'Publish', '2024-03-21 09:33:29', '2024-03-28 01:28:11', NULL),
(6, 'TOEFL', NULL, 'TOEFL Preparation and TOEFL Simulation by SAGU Foundation', NULL, 'Publish', '2024-03-21 09:33:46', '2024-03-28 01:27:46', NULL),
(7, 'Community Development', NULL, 'Community Development program by SAGU Foundation or with Partners', '<p>here you can write more descriptions and list documents</p>', 'Publish', '2024-03-28 01:25:27', '2024-03-28 01:25:27', NULL),
(8, 'Events', NULL, 'Students from other event conduct by SAGU Foundation or by collaboration with partners.', NULL, 'Publish', '2024-03-28 01:27:22', '2024-03-28 01:27:22', NULL),
(9, 'Collaboration', NULL, 'Programs by partners with SAGU Foundation', NULL, 'Publish', '2024-03-28 01:30:52', '2024-03-28 01:30:52', NULL);

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
(3, 'App\\Models\\User', 152),
(3, 'App\\Models\\User', 153),
(3, 'App\\Models\\User', 154),
(3, 'App\\Models\\User', 155),
(3, 'App\\Models\\User', 156),
(3, 'App\\Models\\User', 157),
(3, 'App\\Models\\User', 158),
(3, 'App\\Models\\User', 159),
(3, 'App\\Models\\User', 160),
(3, 'App\\Models\\User', 161),
(3, 'App\\Models\\User', 164),
(3, 'App\\Models\\User', 166),
(3, 'App\\Models\\User', 167),
(3, 'App\\Models\\User', 168),
(3, 'App\\Models\\User', 169),
(3, 'App\\Models\\User', 170),
(3, 'App\\Models\\User', 171),
(3, 'App\\Models\\User', 172),
(3, 'App\\Models\\User', 174),
(3, 'App\\Models\\User', 175),
(3, 'App\\Models\\User', 176),
(3, 'App\\Models\\User', 177),
(3, 'App\\Models\\User', 182),
(3, 'App\\Models\\User', 183),
(3, 'App\\Models\\User', 184),
(3, 'App\\Models\\User', 185),
(3, 'App\\Models\\User', 186),
(3, 'App\\Models\\User', 189),
(3, 'App\\Models\\User', 190),
(3, 'App\\Models\\User', 191),
(3, 'App\\Models\\User', 192),
(3, 'App\\Models\\User', 193),
(3, 'App\\Models\\User', 194),
(3, 'App\\Models\\User', 196),
(3, 'App\\Models\\User', 198),
(3, 'App\\Models\\User', 199),
(3, 'App\\Models\\User', 203),
(3, 'App\\Models\\User', 205),
(3, 'App\\Models\\User', 206),
(3, 'App\\Models\\User', 207),
(3, 'App\\Models\\User', 208),
(3, 'App\\Models\\User', 209),
(3, 'App\\Models\\User', 210),
(3, 'App\\Models\\User', 211),
(3, 'App\\Models\\User', 212),
(3, 'App\\Models\\User', 213),
(3, 'App\\Models\\User', 214),
(3, 'App\\Models\\User', 215),
(3, 'App\\Models\\User', 216),
(3, 'App\\Models\\User', 217),
(3, 'App\\Models\\User', 218),
(3, 'App\\Models\\User', 219),
(3, 'App\\Models\\User', 220),
(3, 'App\\Models\\User', 221),
(3, 'App\\Models\\User', 222),
(3, 'App\\Models\\User', 223),
(3, 'App\\Models\\User', 224),
(3, 'App\\Models\\User', 225),
(3, 'App\\Models\\User', 227),
(3, 'App\\Models\\User', 231),
(3, 'App\\Models\\User', 233),
(3, 'App\\Models\\User', 234),
(3, 'App\\Models\\User', 235),
(3, 'App\\Models\\User', 237),
(3, 'App\\Models\\User', 238),
(3, 'App\\Models\\User', 239),
(3, 'App\\Models\\User', 240),
(3, 'App\\Models\\User', 241),
(3, 'App\\Models\\User', 242),
(3, 'App\\Models\\User', 243),
(3, 'App\\Models\\User', 246),
(3, 'App\\Models\\User', 247),
(3, 'App\\Models\\User', 248),
(3, 'App\\Models\\User', 249),
(3, 'App\\Models\\User', 250),
(3, 'App\\Models\\User', 251),
(3, 'App\\Models\\User', 252),
(3, 'App\\Models\\User', 253),
(3, 'App\\Models\\User', 254),
(3, 'App\\Models\\User', 255),
(3, 'App\\Models\\User', 256),
(3, 'App\\Models\\User', 257),
(3, 'App\\Models\\User', 258),
(3, 'App\\Models\\User', 259),
(3, 'App\\Models\\User', 260),
(3, 'App\\Models\\User', 261),
(3, 'App\\Models\\User', 262),
(3, 'App\\Models\\User', 263),
(3, 'App\\Models\\User', 264),
(3, 'App\\Models\\User', 265),
(3, 'App\\Models\\User', 266),
(3, 'App\\Models\\User', 267),
(3, 'App\\Models\\User', 268),
(3, 'App\\Models\\User', 269),
(3, 'App\\Models\\User', 270),
(3, 'App\\Models\\User', 271),
(3, 'App\\Models\\User', 272),
(3, 'App\\Models\\User', 273),
(3, 'App\\Models\\User', 274),
(3, 'App\\Models\\User', 275),
(3, 'App\\Models\\User', 276),
(3, 'App\\Models\\User', 277),
(3, 'App\\Models\\User', 278),
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
  `group_id` bigint(20) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `short_description` varchar(255) DEFAULT NULL,
  `full_description` mediumtext DEFAULT NULL,
  `program_year` varchar(255) DEFAULT NULL,
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

INSERT INTO `programs` (`id`, `program_title`, `group_id`, `slug`, `short_description`, `full_description`, `program_year`, `program_start`, `program_end`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'SUP Vokasi 2020', NULL, 'sup-vokasi-2020', 'Beasiswa Siswa Unggul Papua Bidang Vokasi Tahun 2020', '<p>Beasiswa Siswa Unggul Papua Bidang Vokasi Tahun 2020 merupakan beasiswa yang diselenggarakan oleh BPSDM Provinsi Papua.</p>\r\n\r\n<p><strong>Status Program</strong></p>\r\n\r\n<p>On progress...</p>\r\n\r\n<p><strong>Documents</strong></p>\r\n\r\n<ol>\r\n	<li>Initial reports <a href=\"#\">[view here]</a></li>\r\n	<li>Progress reports <a href=\"#\">[view here]</a></li>\r\n	<li>Final reports <a href=\"#\">[view here]</a></li>\r\n</ol>\r\n\r\n<p><strong>Documentation (Photos &amp; Videos)</strong></p>\r\n\r\n<ol>\r\n	<li>Class activity <a href=\"#\">[view here]</a></li>\r\n	<li>Video on youtube&nbsp;<a href=\"#\">[view here]</a></li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', '2020', NULL, NULL, 'Publish', '2023-10-13 05:29:55', '2024-03-19 02:11:42', NULL),
(2, 'SUP 2021', NULL, 'sup-vokasi-2021', 'Beasiswa Siswa Unggul Papua (SUP) Tahun 2021. Program by The Government of Papua Province through BPSDM.', '<p>Beasiswa Siswa Unggul Papua Bidang Vokasi Tahun 2021 merupakan beasiswa yang diselenggarakan oleh BPSDM Provinsi Papua.</p>\r\n\r\n<p><strong>Status Program</strong></p>\r\n\r\n<p>On progress...</p>\r\n\r\n<p><strong>Documents</strong></p>\r\n\r\n<ol>\r\n	<li>Initial reports <a href=\"#\">[view here]</a></li>\r\n	<li>Progress reports <a href=\"#\">[view here]</a></li>\r\n	<li>Final reports <a href=\"#\">[view here]</a></li>\r\n</ol>\r\n\r\n<p><strong>Documentation (Photos &amp; Videos)</strong></p>\r\n\r\n<ol>\r\n	<li>Class activity <a href=\"#\">[view here]</a></li>\r\n	<li>Video on youtube&nbsp;<a href=\"#\">[view here]</a></li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', '2021', NULL, NULL, 'Publish', '2023-10-13 05:29:55', '2024-03-28 01:37:05', NULL),
(3, 'General English For Yahukimo Students, 2020', 3, 'ykm-2020', 'Program by Pemerintah Provinsi Kabupaten Jayukimo', '<p>Program beasiswa Pemerintah Daerah Kabupaten Yahukimo bagi Mahasiswa yang sedang studi di Jayapura.</p>\r\n\r\n<p><strong>Status Program</strong></p>\r\n\r\n<p>On progress...</p>\r\n\r\n<p><strong>Documents</strong></p>\r\n\r\n<ol>\r\n	<li>Initial reports <a href=\"#\">[view here]</a></li>\r\n	<li>Progress reports <a href=\"#\">[view here]</a></li>\r\n	<li>Final reports <a href=\"#\">[view here]</a></li>\r\n</ol>\r\n\r\n<p><strong>Documentation (Photos &amp; Videos)</strong></p>\r\n\r\n<ol>\r\n	<li>Class activity <a href=\"#\">[view here]</a></li>\r\n	<li>Video on youtube&nbsp;<a href=\"#\">[view here]</a></li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', '2020', NULL, NULL, 'Publish', '2023-10-13 05:29:55', '2024-03-28 01:32:58', NULL),
(4, 'Computer Literacy - Membangun Pemuda, Membangun Papua 2023', 9, NULL, 'Program by Kopernik with SAGU Foundation', '<p>SAGU Foundation dan&nbsp;Kopernik menyelenggarakan program &ldquo;Literasi Komputer : Pemanfaatan Teknologi Untuk Peningkatan Efisiensi Kerja dan Kolaborasi Organisasi&rdquo; yang berfokus pada pengembangan peluang bekerja dan peningkatan literasi komputer bagi generasi muda Papua. Program akan berlangsung selama 7 bulan dengan materi yang dikaji secara khusus untuk keterampilan penggunaan platform digital dalam membangun karir di Abad-21.</p>\r\n\r\n<p><strong>Status Program</strong></p>\r\n\r\n<p>On progress...</p>\r\n\r\n<p><strong>Documents</strong></p>\r\n\r\n<ol>\r\n	<li>Initial reports <a href=\"#\">[view here]</a></li>\r\n	<li>Progress reports <a href=\"#\">[view here]</a></li>\r\n	<li>Final reports <a href=\"#\">[view here]</a></li>\r\n</ol>\r\n\r\n<p><strong>Documentation (Photos &amp; Videos)</strong></p>\r\n\r\n<ol>\r\n	<li>Class activity <a href=\"#\">[view here]</a></li>\r\n	<li>Video on youtube&nbsp;<a href=\"#\">[view here]</a></li>\r\n</ol>', '2023', NULL, NULL, 'Publish', '2023-11-14 04:12:27', '2024-03-28 01:34:52', NULL),
(5, 'Internship', NULL, NULL, 'Student internship from school, university and others.', '<p>Write something here...</p>\r\n\r\n<p><strong>Status Program</strong></p>\r\n\r\n<p>On progress...</p>\r\n\r\n<p><strong>Documents</strong></p>\r\n\r\n<ol>\r\n	<li>Initial reports <a href=\"#\">[view here]</a></li>\r\n	<li>Progress reports <a href=\"#\">[view here]</a></li>\r\n	<li>Final reports <a href=\"#\">[view here]</a></li>\r\n</ol>\r\n\r\n<p><strong>Documentation (Photos &amp; Videos)</strong></p>\r\n\r\n<ol>\r\n	<li>Class activity <a href=\"#\">[view here]</a></li>\r\n	<li>Video on youtube&nbsp;<a href=\"#\">[view here]</a></li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', NULL, NULL, NULL, 'Publish', '2023-11-20 00:01:31', '2024-03-28 01:37:33', '2024-03-28 01:37:33'),
(6, 'General English Term 1 2024', 3, NULL, 'General English Class', '<p>Write something here...</p>\r\n\r\n<p><strong>Status Program</strong></p>\r\n\r\n<p>On progress...</p>\r\n\r\n<p><strong>Documents</strong></p>\r\n\r\n<ol>\r\n	<li>Initial reports <a href=\"#\">[view here]</a></li>\r\n	<li>Progress reports <a href=\"#\">[view here]</a></li>\r\n	<li>Final reports <a href=\"#\">[view here]</a></li>\r\n</ol>\r\n\r\n<p><strong>Documentation (Photos &amp; Videos)</strong></p>\r\n\r\n<ol>\r\n	<li>Class activity <a href=\"#\">[view here]</a></li>\r\n	<li>Video on youtube&nbsp;<a href=\"#\">[view here]</a></li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', '2024', NULL, NULL, 'Publish', '2024-01-25 02:08:40', '2024-03-22 02:23:34', NULL),
(7, 'General English Yahukimo 2024', 3, NULL, 'Beasiswa Pemerintah Daerah Kabupaten Yahukimo Tahun 2024', '<p>Write something here...</p>\r\n\r\n<p><strong>Status Program</strong></p>\r\n\r\n<p>On progress...</p>\r\n\r\n<p><strong>Documents</strong></p>\r\n\r\n<ol>\r\n	<li>Laporan Kegiatan Akademik [<a href=\"https://www.canva.com/design/DAF6kmCMHxA/ox-TFwP1PNEmcGuz03vo5g/edit?utm_content=DAF6kmCMHxA&amp;utm_campaign=designshare&amp;utm_medium=link2&amp;utm_source=sharebutton\">view here</a>]</li>\r\n	<li>...</li>\r\n	<li>...</li>\r\n	<li>...</li>\r\n</ol>\r\n\r\n<p><strong>Documentation (Photos &amp; Videos)</strong></p>\r\n\r\n<ol>\r\n	<li>Class activity <a href=\"#\">[view here]</a></li>\r\n	<li>Video on youtube&nbsp;<a href=\"#\">[view here]</a></li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', '2024', NULL, NULL, 'Publish', '2024-01-25 02:09:53', '2024-03-26 01:30:30', NULL),
(8, 'SUP Vokasi 2020 Dalam Negeri', NULL, NULL, 'Siswa Program Beasiswa SUP Vokasi 2020 yang mengikuti program pada universitas yang ada di Indonesia', '<p>Siswa Program Beasiswa SUP Vokasi 2020 yang mengikuti program pada universitas yang ada di Indonesia</p>', '2020', NULL, NULL, 'Publish', '2024-02-28 02:55:17', '2024-02-28 06:12:47', '2024-02-28 06:12:47'),
(9, 'SUP Vokasi 2020 Dalam Negeri', NULL, NULL, 'Siswa Program Beasiswa SUP Vokasi 2020 yang masuk pada universitas di Indonesia', '<p>Write something here...</p>\r\n\r\n<p><strong>Status Program</strong></p>\r\n\r\n<p>On progress...</p>\r\n\r\n<p><strong>Documents</strong></p>\r\n\r\n<ol>\r\n	<li>Initial reports <a href=\"#\">[view here]</a></li>\r\n	<li>Progress reports <a href=\"#\">[view here]</a></li>\r\n	<li>Final reports <a href=\"#\">[view here]</a></li>\r\n</ol>\r\n\r\n<p><strong>Documentation (Photos &amp; Videos)</strong></p>\r\n\r\n<ol>\r\n	<li>Class activity <a href=\"#\">[view here]</a></li>\r\n	<li>Video on youtube&nbsp;<a href=\"#\">[view here]</a></li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', '2020', NULL, NULL, 'Publish', '2024-02-28 05:55:59', '2024-03-19 02:07:28', NULL),
(10, 'SUP 2021 Dalam Negeri', NULL, NULL, 'Siswa Program Beasiswa SUP 2021 yang masuk pada universitas di Indonesia', '<p>Write something here...</p>\r\n\r\n<p><strong>Status Program</strong></p>\r\n\r\n<p>On progress...</p>\r\n\r\n<p><strong>Documents</strong></p>\r\n\r\n<ol>\r\n	<li>Initial reports <a href=\"#\">[view here]</a></li>\r\n	<li>Progress reports <a href=\"#\">[view here]</a></li>\r\n	<li>Final reports <a href=\"#\">[view here]</a></li>\r\n</ol>\r\n\r\n<p><strong>Documentation (Photos &amp; Videos)</strong></p>\r\n\r\n<ol>\r\n	<li>Class activity <a href=\"#\">[view here]</a></li>\r\n	<li>Video on youtube&nbsp;<a href=\"#\">[view here]</a></li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', '2021', NULL, NULL, 'Publish', '2024-02-28 05:56:35', '2024-03-28 01:32:32', '2024-03-28 01:32:32'),
(11, 'General English Khusus SMK - 2024', 1, NULL, 'General English Khusus SMK - 2024', '<p>General English Khusus SMK - 2024</p>', '2024', NULL, NULL, 'Publish', '2024-03-06 03:58:22', '2024-03-20 07:02:46', NULL),
(12, 'General English Term II 2022', 3, NULL, 'General English Term II 2022 students', '<p>General English Term II 2022 students</p>', '2022', NULL, NULL, 'Publish', '2024-03-22 07:37:08', '2024-03-25 03:00:49', '2024-03-25 03:00:49'),
(13, 'General English Term I 2022', 3, NULL, 'General English Term I 2022 students', '<p>General English Term I 2022 students</p>', '2022', NULL, NULL, 'Publish', '2024-03-22 07:37:32', '2024-03-25 03:00:47', '2024-03-25 03:00:47'),
(14, 'General English Yahukimo Term I 2022', 3, NULL, 'General English Yahukimo Term I 2022 students', '<p>General English Yahukimo Term I 2022 students</p>', '2022', NULL, NULL, 'Publish', '2024-03-22 07:38:28', '2024-03-25 03:00:45', '2024-03-25 03:00:45'),
(15, 'General English Yahukimo Term I 2023', 3, NULL, 'General English Yahukimo Term I 2023 students', '<p>General English Yahukimo Term I 2023 students</p>', '2023', NULL, NULL, 'Publish', '2024-03-22 07:38:55', '2024-03-25 03:00:42', '2024-03-25 03:00:42'),
(16, 'General English For Yahukimo Students, 2021', 3, NULL, 'Program by Pemerintah Provinsi Kabupaten Jayukimo', NULL, '2021', NULL, NULL, 'Publish', '2024-03-26 01:30:57', '2024-03-28 01:31:58', NULL),
(17, 'General English For Yahukimo Students, 2023', 3, NULL, 'Program by Pemerintah Provinsi Kabupaten Jayukimo', NULL, '2023', NULL, NULL, 'Publish', '2024-03-26 01:31:15', '2024-03-28 01:31:27', NULL);

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
(3, 'Papua Tengah', 'Province of Papua Tengah', '2023-10-13 05:29:55', '2023-10-13 05:29:55'),
(4, 'Papua Selatan', 'Provinces Papua Selatan', '2024-02-22 14:22:07', '2024-02-22 14:22:07'),
(5, 'Papua Barat Daya', 'Province Papua Barat Daya ', '2024-02-22 14:22:07', '2024-02-22 14:22:07'),
(6, 'Papua Barat', 'Provinces Papua Barat', '2024-02-22 14:25:22', '2024-02-22 14:25:22');

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
  `gender` varchar(255) DEFAULT NULL,
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

INSERT INTO `students` (`id`, `user_id`, `province_id`, `profile`, `gender`, `place_of_birth`, `date_of_birth`, `ktp`, `province`, `full_address`, `email_google`, `email_outlook`, `email_sagu`, `email_campus_1`, `email_campus_2`, `education_history`, `doc_google_sheets`, `created_at`, `updated_at`, `deleted_at`, `programs`) VALUES
(1, 8, NULL, NULL, 'Female', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vQS9TAxqBWxz6xQYxED8GwPAHI7B_oxfc2xSMd7HyFcNc5328lkk3DqMA8JNT8M2g9LKkWqOoUrJG-0/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-10-13 05:29:55', '2024-02-27 07:18:49', NULL, ''),
(4, 15, NULL, NULL, 'Female', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vTFK7H1y_RaY6LzXLOq9M0vxBliZbPXqZ2jzsr4aKmjsAnfvy4gCQTbaoX_-kTqc2QeKsAGWXUOvRDu/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-11-03 02:06:45', '2024-02-27 07:19:24', NULL, '[\"2\"]'),
(5, 16, NULL, NULL, 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vRUTd6FVQEraUNfmCf5ZVYGP0P3fwiu0OLj5oB70hpDesPDBx8y_ipELKUJ7uGs_S9BcGGzCgiVjb04/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-11-03 02:14:15', '2024-02-27 07:19:19', NULL, ''),
(6, 17, NULL, NULL, 'Female', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vT4nXTrHMEnJP1dKyHNJhwzRKu-DaKqvhVP94Cwp3tGI94jI-pXB9ieZJCzNGFgmUL3aJZgvrz_IT_P/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-11-03 02:17:48', '2024-02-27 07:18:59', NULL, ''),
(8, 19, NULL, NULL, 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vR1__Z9qyAOVRjui-TSjlgJAN8DhAz-eTSec0bv8AnrHm2yUATl39PF-VmXVZtpAgNj4E6pIQK9HMRG/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-11-03 02:19:53', '2024-02-27 07:18:54', NULL, ''),
(9, 20, NULL, NULL, 'Female', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vTN5l9OchnBWZhMhcYRlO6U_6zykNrFjnjq0nzASF3_YDBnesSudypzodqILqGj8hO7uuMdmzkQTa0l/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-11-03 02:20:33', '2024-02-27 07:20:20', NULL, ''),
(10, 21, 2, NULL, 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vTJeHSVwMDyMze8rDHJIKKkMvjkL5TEjmnuiznJG068nSorN9O-jJuaZQF4ls3wURgEjQ6NkGAekHbA/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-11-03 02:22:00', '2024-02-28 01:58:26', NULL, ''),
(11, 22, NULL, NULL, 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vSgWLSikSJuuvTARCLH4BFCtJLeQqkh7329BuAACgz-YJF9qm0rcF9pYuNTP6rlN21XcqLYdoQEB5BL/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-11-03 02:23:54', '2024-02-27 07:21:23', NULL, ''),
(12, 23, NULL, NULL, 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vRLO0N7LF6fivl-Ctscm41UNGq3Bz-YhAXRGOmP8TKvgejdClyQ6D5qIEU-XnKUfi1z5E_9EoaUrXLM/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-11-03 02:25:05', '2024-02-27 07:20:38', NULL, ''),
(13, 24, NULL, NULL, 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vQDsXuSi1ivGhE9Fu9_s4QmnmNFe5gwCRodBeCcvCxby53K81DVmtd1FQuobyrZsP6QKhgJhkkAyHiI/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-11-03 02:25:29', '2024-02-27 07:30:33', NULL, ''),
(14, 25, NULL, NULL, 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vTW2SIKgwcJaiqEOI1R2cX24-vwIIemNEt_qYbSrhGlT5yD7iltOKe8FEkVmavyZnZyDX36AiLKflyg/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-11-03 02:26:45', '2024-02-27 07:30:57', NULL, ''),
(15, 26, NULL, NULL, 'Female', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vQm5TZpRWs13MVCirs9gN14pE16AOdyIkphHV4hYHb7eK3WptxsoyQXDiEUHIiwYSbRPEhzBTENR0bR/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-11-03 02:27:06', '2024-02-27 07:20:58', NULL, ''),
(16, 27, NULL, NULL, 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vTjm-n4HFSOj1l8-1vEKm6VZg1jyYkUg3uWR4GDEvgqjUDqhp66Rs2GtsleaLQzoUGt3aoDgm-zR0Od/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-11-03 02:28:35', '2024-02-27 07:31:03', NULL, ''),
(17, 28, NULL, NULL, 'Female', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vRGa3x-sHrW77UO92MVY7A_MzFvUAqn4kMqA54FTDaviLBwXrV68jZRsBmnFAszNpGZuJ9ydZ0ennPi/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-11-03 02:28:45', '2024-02-27 07:30:46', NULL, ''),
(18, 29, NULL, NULL, 'Female', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vSU16yKMZwhJtI8dgO3RUZ6u2eS_3P1TDZy0dXxxtRsQDwzBu_dhr5TW1SRJJ7IjyqW384qd4M9vTZM/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-11-03 02:30:09', '2024-02-27 07:31:17', NULL, ''),
(19, 30, NULL, NULL, 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vRPEZ-9vQktQYZXIPKDs8wy9rVi0FZTCASEEeW8rgk9Ovis0nnNrToCrJ4RIWNR6h2ohR55gsolBVS_/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-11-03 02:39:52', '2024-02-27 07:33:06', NULL, ''),
(20, 31, NULL, NULL, 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vQUY9m0GMFHHr-dNE3tYF1snbnWsTsgS_maCBsbCsB58N46NnVBft0m8OmE8jq4RRQDjkPRJcnnaxtU/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-11-03 02:40:08', '2024-02-27 07:32:57', NULL, ''),
(21, 32, NULL, NULL, 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vQqpJANIVnh3uNvhuy8qwhK-waO-BEYiZAgE3tFnZ4WeXR3OJ0vd3kjH1yFN8rQ0vq2gfoQWcC-TChk/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-11-03 02:41:29', '2024-02-27 07:51:10', NULL, ''),
(22, 33, NULL, NULL, 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vSP1--HWc5tlBchML-0xX7zpb1qM7htn-2Pctik1YWLiiqoVGm0yXef4q-RAwMZBe8sgZdMj-Mx7hrG/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-11-03 02:42:11', '2024-02-27 07:33:18', NULL, ''),
(23, 34, NULL, NULL, 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vTyzo_14y3VWLWgupgHmEWK3dwNfvuDZ91TmBj4GfIsucNpC9I2fHpcygVqevlx4Gb8hfPDlBwHA4If/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-11-03 02:44:08', '2024-02-27 07:33:34', NULL, ''),
(24, 35, NULL, NULL, 'Female', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vT42ZdyXuqjG5TzoEBjadbyIx8vJF-JR2--WD_4A8NhP8is3dG71cWO4Nvq9jZ3owQSyGiBdXWUoHgV/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-11-03 02:45:02', '2024-02-27 07:52:28', NULL, ''),
(25, 36, NULL, NULL, 'Female', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vQIDkk-KQVKrX5FK4sbWvceewSzV_3vU9Fh_boQ44QukqDn5y3G-DvN5DJE35A5GxQ2728kBZFfzWtE/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-11-03 02:47:41', '2024-02-27 07:52:21', NULL, ''),
(26, 37, NULL, NULL, 'Female', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vQgTo31s4wspXSus7fbNHY_keDIQeK6-fAaPIx_zqvFHR5GRYDO4updRSCiK3th2TxKnBIYrQClM34u/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-11-03 02:47:47', '2024-02-27 07:50:59', NULL, ''),
(27, 38, NULL, NULL, 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vTnDAaj3DwDe8QY2tXWkYaqZg0RfEW1MVASalwwWVk9PYoi74ci1gQpuYxKs3-gtKkTOdgd95vdgqzR/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-11-03 02:49:05', '2024-02-27 07:53:08', NULL, ''),
(28, 39, NULL, NULL, 'Female', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vS96vSJKGxMblUzbZqG0KFP-4zft-Tzmo3Ul4HnF5QxryS3tARutMR3J72AAeuvB8crvKHVnHg4OLT-/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-11-03 02:52:10', '2024-02-27 07:53:15', NULL, ''),
(29, 40, NULL, NULL, 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vQ0bCz-lUOB3tm1XQ1YLf1M8iFkABgqfbHUkcUpfTprY4S5tq5KqTUadtST8fhDr2gWqNqN-zXXZQZT/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-11-03 02:56:03', '2024-02-27 07:51:17', NULL, ''),
(30, 41, NULL, NULL, 'Female', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vSHPzD8OcTFt6AT5muB9X_2Btc8N2928-EWC6Wj12migo6uqaQzZ4kYPbpYMa-6S2A2d5fndqR3cmRi/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-11-03 02:56:41', '2024-02-27 07:57:06', NULL, ''),
(31, 42, NULL, NULL, 'Female', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vT-FcXATOLyWrSxj47-Y6xkuy2UDvBj1GOyDCQMe2MWXp_t4sjvN4zvcLiw6LNlcyL7FaPFMFsIOEPG/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-11-03 02:57:43', '2024-02-27 08:57:53', NULL, ''),
(32, 43, NULL, NULL, 'Female', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vQoWGmBJROqGz2UhXR3tJ26SlvKs4J0EoGkWC-4gZiUGGhztLz1GYFukezHPeqPTC-A6o0SUZ8zocyd/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-11-03 02:57:53', '2024-02-27 07:57:35', NULL, ''),
(33, 44, NULL, NULL, 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vTE34WhXHyHUDrJmm5jTAb113zOz6xVxkTXsw3kVxZZHpKB3tl3PuZAeO8fJRvrNMRhDQgQluUyWqvm/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-11-03 02:59:33', '2024-02-27 07:52:11', NULL, ''),
(34, 45, NULL, NULL, 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vRjrCor_4klGUgHgpnMWaHNZuJ4xGI1Y0eKtBHEHl_xXF0qNwZR-mB0G-TReL8FYSxbEEF_ERwx7OqZ/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-11-03 03:00:04', '2024-02-27 07:58:47', NULL, ''),
(35, 46, NULL, NULL, 'Female', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vQS9TAxqBWxz6xQYxED8GwPAHI7B_oxfc2xSMd7HyFcNc5328lkk3DqMA8JNT8M2g9LKkWqOoUrJG-0/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-11-03 03:02:20', '2024-02-27 07:54:21', NULL, ''),
(36, 47, NULL, NULL, 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vRQr2F-pa-nOm0N9n2F3J4NhxWatKdJ5-AXmp6leGO7LexMICeMBkMsyD8wmLLh34XfQ1nn923WTeYj/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-11-03 03:02:35', '2024-02-27 07:59:14', NULL, ''),
(37, 48, NULL, NULL, 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-03 03:03:30', '2024-02-27 07:54:33', NULL, ''),
(38, 49, NULL, NULL, 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vRGY53t95p2QqYLJlrHKGGGQQjZxHCt_RLtrAaJbKvhY74dXsufI9IPNc-1a9tCoHyRLkEaVB62EDUH/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-11-03 03:03:38', '2024-02-27 08:02:52', NULL, ''),
(39, 50, NULL, NULL, 'Female', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vS_b_ymiSaqMIWhsJ6HO_ogfaTACtySl55YaiiRiBUeDLQRplIUG6nyRHkGONBshNhiyW6YFh1H9NZV/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-11-03 03:04:53', '2024-02-27 08:02:58', NULL, ''),
(40, 51, NULL, NULL, 'Female', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vRIBxmGoIixQ39XAWQaz4lKpe_vNXM5USq9Z7yEU24wnEGPuK2-NsUc67UKez53ofaTTbOEuo4YoJoM/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-11-03 03:05:53', '2024-02-27 07:56:15', NULL, ''),
(41, 52, NULL, NULL, 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vQnWVEVw2wNX3Es_mZokK27l51HpADLHAKDjFPGLEZvXjEV-pgbI7HURsTRnmTpJH1EnTF8MNfu5QxT/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-11-03 03:06:54', '2024-02-27 08:03:04', NULL, ''),
(42, 53, 2, NULL, 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vTxEKZY5TDrRQqZG8bTGdeHlMCtby26rzIyAGym7Kj6ndSjdHKLTHJjwb0jdIVaKB-pyQiRAWHqJtD-/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-11-03 03:07:23', '2024-02-28 01:58:19', NULL, ''),
(43, 54, NULL, NULL, 'Female', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vT4L53XggT36RTKqqOFbMVzyTreB_thr1mTQH20jcaH_rF86iQAHTd6XCjAJYhIjaMsy8BtoLFfHDWk/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-11-03 03:08:06', '2024-02-27 08:03:59', NULL, ''),
(44, 55, NULL, NULL, 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vSDHdK7ln5WFHGFuf9YPM-lda1rfZRdyTDGAq0KiYMq4bqxe1MplwTAxBV-eJ2tBYQLaIQMIgliWMvb/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-11-03 03:08:45', '2024-02-27 07:56:49', NULL, ''),
(45, 56, NULL, NULL, 'Female', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vQOXm5GKcZtfTUXxTRJ9kGVUUhyUo4r9jE2tLZoITvGio9rsnVCJo59A71CrDJL9Aa6Oz8s06ZRGRFW/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-11-03 03:09:48', '2024-02-27 07:58:58', NULL, ''),
(46, 57, NULL, NULL, 'Female', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vQ6RhBwgCjRDcqbR6kgDrvHH7eAhjEIYpipNE_TOfwfNaJ1H6RmED1FXzUlPpX61i0vCPlPlaOSzQIo/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-11-03 03:10:09', '2024-02-27 08:04:07', NULL, ''),
(47, 58, NULL, NULL, 'Female', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vRRc7d49XKICkYuOH36BdETKbINvRAcsVdGM6NaS9_4NSUp0KsRXpRUqORFBBbdnw71BUE7zK2Kba4J/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-11-03 03:11:02', '2024-02-27 07:59:05', NULL, ''),
(48, 59, NULL, NULL, 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vTTmPLV6FhekQjsyV29ZCU_UUk9k9ymVlg8IoKipNPm8hpaC-vD5KmIn3JznX6dNytj9F6WEKgq8h74/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-11-03 03:11:12', '2024-02-27 08:04:38', NULL, ''),
(49, 60, NULL, NULL, 'Female', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vSGrV6jNV2fmRtAs0VjNr4I9MH_gmmW3J4f_c_H8hhntCdP8r2_2tkyjn-20q8MsfJQRjZ0YvnE_xOi/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-11-03 03:12:10', '2024-02-27 08:07:42', NULL, ''),
(50, 61, NULL, NULL, 'Female', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vQovxQcNJ1Vm4bYByjX9D2lL44nTiELWbyjfC3xzmUvlQO6EiavT8YJKuJC960LHXUlHeYKSUZ3Q-4M/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-11-03 03:12:20', '2024-02-27 08:07:26', NULL, ''),
(51, 62, NULL, NULL, 'Female', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vRyYny7Psub-ckIRhaKEXCdyFqKjJHcJvMJ7DYTw2w3wJJsxf1ZoszZ_Jx3tdy8XFzKqP0GUNtNy61c/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-11-03 03:14:16', '2024-02-27 08:07:37', NULL, ''),
(52, 63, NULL, NULL, 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vQIPor123gw20dPCXC1EIT656ctUZ9POZgCgwHpaf4p3MlYpY8vh_vmbJ_dO6JuMyld1hAj-eov5Cvv/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-11-03 03:15:16', '2024-02-27 08:10:21', NULL, ''),
(53, 64, NULL, NULL, 'Female', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vQXJK9v6f-DuJT-dMjxHYoZ_Cbk_hBC-KU-EVzuq2ojsCz5_-OLAeheXN5rH4-3kn6OdZ8E0wLO0Aw6/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-11-03 03:16:01', '2024-02-27 08:07:52', NULL, ''),
(54, 65, NULL, NULL, 'Female', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vTIvdTx49pxZSLwlSUlgkm67Q8L25tb64sjZpguSEp5XoyhwhmOZ1TXDA3VxjlWbAdPabAorxqCwVnn/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-11-03 03:16:42', '2024-02-27 08:09:32', NULL, ''),
(55, 66, NULL, NULL, 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vTI7TbH0YAFfBGdU5fF3HjGWo7UD9iSeNXZusPgHw133Cs2rtAVzOhHvaTab-dT_V8nG9DsIfI4D5mg/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-11-03 03:17:24', '2024-02-27 08:07:57', NULL, ''),
(56, 67, NULL, NULL, 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vS5AAOuVdaBGbszGF8-2xojuFGGuCG3tidB4M3ySYgRWjEHHjv4P4po3MXBtSR0y4xRD1pLIBYq8BNR/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-11-03 03:18:18', '2024-02-27 08:11:38', NULL, ''),
(57, 68, NULL, NULL, 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vTCLEiBLcO2V5fdbSfQRpRUWQUit7OmoLXKaXksIVXHoKyWiJPgsvEC-dI8Z4R8d1HPsQKNJFgEwhJL/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-11-03 03:18:23', '2024-02-27 08:08:30', NULL, ''),
(58, 69, NULL, NULL, 'Female', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vTM8qoEw-H6QL9PvifB8pWTR3wzD45rmlHLQju5qt5zb7_pK475F3xluAPFTgx3sDENRhAJgTocJ0lr/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-11-03 03:19:18', '2024-02-27 08:09:48', NULL, ''),
(59, 70, NULL, NULL, 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vQU1yWW-jrwNt-w-MJEquWrkC9Hoi7PIJtddg2feBW9IZ8M1JB6cgoe1IqhfJT1lw2TUgbkWa0zLY_Q/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-11-03 03:19:55', '2024-02-27 08:20:55', NULL, ''),
(60, 71, NULL, NULL, 'Female', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vSkz0WO99YK_sqPP_8CWp563K2MXuTI7pAwnD8YR99Vv2JRg3wEKv8w0GiOM3KdTtY4HmsqIazefg5Y/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-11-03 03:21:17', '2024-02-27 08:12:13', NULL, ''),
(61, 72, NULL, NULL, 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vRc2YJ6_iiGM6qf1M70jwq456Nbmum55iATxinhfzdvE93i4KzhCNN_HlsfH1P4HxU9XYkT8MUSAIh7/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-11-03 03:24:54', '2024-02-27 08:12:49', NULL, ''),
(62, 73, 4, NULL, 'Female', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vSJD3BwDIxwrDsGN94SyjKxoIiCSCVIOAxdnhWMOI0x-LLXehNSdNIQ0SzYvY4R59vn7E8Pn9vc2uBe/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-11-03 03:26:25', '2024-02-28 02:20:30', NULL, ''),
(63, 74, NULL, NULL, 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vRVGQh_1qHxbEQ6duLenr5ECu7F4WVeP2YbHZVLUrttdBEN0IOwbhFOS100egF-CjDFDxgUNuDdtWwb/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-11-03 03:27:44', '2024-02-27 08:13:50', NULL, ''),
(64, 75, NULL, NULL, 'Female', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vSe_BrPTQUBBK3JiBa5eBbFkA8787MA8ZCfxqDreONpBBIBCpspKj-WOU4qNrcME5TdFICeD47YMj4N/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-11-03 05:44:48', '2024-02-27 08:10:16', NULL, ''),
(65, 76, NULL, NULL, 'Female', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vRzpPCnCx8k_IK12wzl88DP1Yy8VfVbGE1tYleo9tocuyDB1BCBa83JPrucwFwX0PIKqS_Ud6G-tgG6/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-11-03 05:47:51', '2024-02-27 08:12:20', NULL, ''),
(66, 77, NULL, NULL, 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vR7durTXCq5MisF5IDVZqp3ebVuKkYSFzlUtnEst4n3HCV8mQBg-pSuuDbeySJEw1bIQ_P2CwK0F6r_/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-11-03 05:49:10', '2024-02-27 08:12:26', NULL, ''),
(67, 78, NULL, NULL, 'Female', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vQZdMYAZLOopwUaMQ6KE_frLJBSlwxFqtf8I86jjwxj0KPLXLzAqQtkiOPuG8MwTY4NtdGWvz-3hwZy/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-11-03 05:50:42', '2024-02-27 08:12:33', NULL, ''),
(68, 79, NULL, NULL, 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vTlqplTMWONvmJjSDbfG__DPK8IGgxZK6UB64IzwSWL-Ac9toukh5TC6JbAwZ-AlkxDRP20OPq2SJcW/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-11-03 05:52:01', '2024-02-27 08:12:38', NULL, ''),
(69, 80, NULL, NULL, 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vQ5T7zuOXE2HtnMlPPV7YruinFKX57Sj8nD2c34rYW5ZTS3OCG_3aq5LpFpGzhRMhuPaX3XShfUHVNN/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-11-03 05:53:31', '2024-02-27 08:12:43', NULL, ''),
(70, 81, 2, NULL, 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vRX5Ec8b67W8y0I7_ghgLwFmAR0jnIKGAABtikpxYAdsQOPoKOSec8ax3WQ_gormNUFALc6SJklr5A0/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-11-03 05:54:34', '2024-02-28 06:55:19', NULL, ''),
(71, 82, 1, NULL, 'Female', NULL, NULL, NULL, NULL, 'Jalan Raya...', 'adrianadianaanes@gmail.com', NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vQhbhA7KGbV5yMImJxyI_x2PI1nN7GbBQ2GiomucT6MnKTHXv09ms_L1TFAV52OkB-te3fF-3IgNySp/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-11-16 02:00:33', '2024-02-27 07:19:30', NULL, '[\"4\"]'),
(72, 83, NULL, NULL, 'Male', NULL, NULL, NULL, NULL, NULL, 'alipgobai@gmail.com', NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vSIROICxkG1CLlVoKTbv23rJX2NjeZcBSWlWylnW0H_GAE_drPQ4f9CP9wzcQdah6uQssh7nSrWGDP9/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-11-16 02:03:28', '2024-02-27 07:19:06', NULL, ''),
(73, 84, NULL, NULL, 'Female', NULL, NULL, NULL, NULL, NULL, 'anastasiahuby3@gmail.com', NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vRcR0Y0Kd341JXNzq7F-E7V_agzA9TmvZBG7xK41lqBusnRtt6CwZcO4YqbbuwLsLctT-zDAslKPvrU/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-11-16 02:04:52', '2024-02-27 07:18:44', NULL, ''),
(74, 85, NULL, NULL, 'Female', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vTm7RCpY_niNy6gEF4meSB_68FJrCMqrSpMQVWIU_1YVxV7vA7sXfvhk7tamPGsPlAkMqxNLM3V734s/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-11-16 02:07:11', '2024-02-27 07:31:41', NULL, ''),
(75, 86, NULL, NULL, 'Female', NULL, NULL, NULL, NULL, NULL, 'elisaros1815@gmail.com', NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vR00Kt5zdiWudJkk6nBMJYOu-v1xwo5Vy-kFHSt0SKCBHiUC4dfX6M8Ii1KIWkywlxuBjwFJPaaUtZD/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-11-16 02:09:25', '2024-02-27 07:33:13', NULL, ''),
(76, 87, NULL, NULL, 'Female', NULL, NULL, NULL, NULL, NULL, 'fredaarwam332@gmail.com', NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vS1FcogA4RWOKDqEtxUrjavaeUs25oiDDDWshH-BqSQmBhbjWNujIwe1_EbcqAQpnb2phm5wHwp5WIk/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-11-16 02:11:03', '2024-02-27 07:33:28', NULL, ''),
(77, 88, NULL, NULL, 'Female', NULL, NULL, NULL, NULL, NULL, 'hburwos@gmail.com', NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vSh92iu2rP11fxkQd2-9Xk9N9z51Ej50adBA2YHQE8pgN85FN2Xp2WmvDZJlutQ1CtWiLv1Cq858tuf/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-11-16 02:15:41', '2024-02-27 07:52:33', NULL, ''),
(78, 89, NULL, NULL, 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'https://docs.google.com/spreadsheets/d/1sQHqNDJ8ZTwyFSmND_Rq34CnYhdexjzRbyVITXxVeZw/edit?usp=drive_link', '2023-11-16 02:16:38', '2024-02-27 07:58:39', NULL, ''),
(79, 90, NULL, NULL, 'Female', NULL, NULL, NULL, NULL, NULL, 'wangguway02@gmail.com', NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vS7Wl63PJGinsea2QSmQw01FbGtC1dTDVDcgbSlvmirWmaREmgvMsThPTunlCmFMxmcIs5755qLeojU/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-11-16 02:17:36', '2024-02-27 08:04:29', NULL, ''),
(80, 91, NULL, NULL, 'Female', NULL, NULL, NULL, NULL, NULL, 'ravensckamyouwe@gmail.com', NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vTYuG28EUYCKIHNWTliUkLm2BiiGWG07BNsfo_hwI5NnKRjRbBYCYDHeaoF799cJE94lXXkPcqjsEKx/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-11-16 02:18:50', '2024-02-27 08:07:47', NULL, ''),
(81, 92, NULL, NULL, 'Female', NULL, NULL, NULL, NULL, NULL, 'ridawenda99@gmail.com', NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vRH5AZB-JyaKUp__kOCdAIPmVCxp14Dh3R3U0JARIcykuXXLIYoppwb_EOjR0NhfdrKM360ZXcGh5aE/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-11-16 02:19:48', '2024-02-27 08:08:02', NULL, ''),
(82, 93, NULL, NULL, 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vQpL9M3fKKLEjVe5fEHqj2AWEaGFqimjo-B9-YDVt-Tft_ikLD0rJCMMMhKH0iJx7pBcDLHididIqsN/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-11-16 02:20:47', '2024-02-27 08:09:25', NULL, ''),
(83, 94, NULL, NULL, 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vRbWjaZtY90_Pma-DxoAlfYiKYfRGnlJgpC_652Kqu-XGXBqg2avf6jbTT9AXqU8InYIiMV0AvQrGAo/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-11-16 02:22:36', '2024-02-27 08:13:45', NULL, ''),
(84, 95, NULL, NULL, 'Female', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vQL__h6ZLH0vnX6FRAzLIJuSM4Avib1DqB76U5FUn8GcwV93oyWaZbFYzwotU9isJjLzCayIa6qIKOJ/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-11-16 02:23:32', '2024-02-27 08:13:21', NULL, ''),
(85, 96, 1, NULL, 'Female', NULL, NULL, NULL, NULL, 'Jl. Sulawesi Dok IX Bawah, RT 002 / RW 003, Kel/Desa Imbi, Kecamatan Jayapura Utara, Kota Jayapura, Papua.', 'andrietapaula@gmail.com', NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vQH2k-BdxNkqJtTDZZWoGENZxnwNOopevqfQSPBWwXGBycm82zQ_psJ6pN6MoXESEUIj-gxyKWV7Flu/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-11-16 02:24:40', '2024-02-29 07:17:32', NULL, ''),
(86, 97, NULL, NULL, 'Female', NULL, NULL, NULL, NULL, NULL, 'anjaliwaimuri@gmail.com', NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vSrxmsD4bJgeVPOAhCZlqYHVz6KRDfMkaXM_qQwmP2bCtRpCO2ln8KdsIyyYgt-5Bz3eLSTt1EzgHib/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-11-16 02:25:52', '2024-02-27 07:18:32', NULL, ''),
(87, 98, NULL, NULL, 'Female', NULL, NULL, NULL, NULL, NULL, 'antonetamartha3@gmail.com', NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vS4RBBXfUBf_SCwRdm5cfg4WpMy7AOLvebuDD9OQBUzrmkum0hq0uJ9MHU_Q2e9paxc-ql3vwNPKv3T/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-11-16 02:27:55', '2024-02-27 07:20:14', NULL, ''),
(88, 99, 1, NULL, 'Female', NULL, NULL, NULL, NULL, NULL, 'kwtbenita9@gmail.com', NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vQnh0SQwPm0guLGwM8Jvtc22UclTi2S3wS62rtI8Vxlhl0ffMcYKIajSekcWniFESZqncmQlxufDpvL/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-11-16 02:29:11', '2024-02-29 04:54:02', NULL, '[\"6\",\"4\"]'),
(89, 100, NULL, NULL, 'Female', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vSxh9ZSJLfcJGM3vIeJM68SpJgFBSUPDuvBMIu24GW-G-GF3urL4Moc0AzRcwVSn_M_fU83JgcSduwp/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-11-16 02:30:13', '2024-02-27 07:31:12', NULL, ''),
(90, 101, NULL, NULL, 'Female', NULL, NULL, NULL, NULL, NULL, 'rumbewasjamina97@gmail.com', NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vR6KLcVGDvV4JC9_atUrsxLpzebtJIMqJDz3FiZ2BoF2Pjj3FFQsVaQ_lbYQZgsRQ8xt64C5uVT2EU1/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-11-16 02:31:27', '2024-02-27 07:54:27', NULL, ''),
(91, 102, NULL, NULL, 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vT_76hgc4bHghnSL1YcNV7kBHgEly0BmgTB-RJuv-cipWD-Bs35lkUEQzLc2DmWL-thkUCQyBdbwAAv/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-11-16 02:32:33', '2024-02-27 07:56:44', NULL, ''),
(92, 103, NULL, NULL, 'Female', NULL, NULL, NULL, NULL, NULL, 'rooseveltlouise25@gmail.com', NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vSX8WCqslW0boj-tvGQ1kaQzf-r4710WmZW6C6unSN--4OEBHQQ2T5rM8Du0GcIucQ6lRwVgFNMPuLu/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-11-16 02:34:08', '2024-02-27 07:58:27', NULL, ''),
(93, 104, NULL, NULL, 'Female', NULL, NULL, NULL, NULL, NULL, 'lusianadaka1996@gmail.com', NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vRwihYfrQS5Bqhcjh4bTUnFsQNNpd6g5Pnm5n1_NmrN01n7rTb2_zzNxZ_5yhSNkUw4tDGuGCyFdHhW/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-11-16 02:35:20', '2024-02-27 07:58:32', NULL, ''),
(94, 105, NULL, NULL, 'Male', NULL, NULL, NULL, NULL, NULL, 'rjigibalom09@gmail.com', NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vTrNXnUuENZh6ZPWiTlFA6k7pg7rflBQdxmP061UTQBTIQAoxGjK9rmO0U1K76WmgYyKO7EQZwZrloV/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-11-16 02:40:17', '2024-02-27 08:08:20', NULL, ''),
(95, 106, NULL, NULL, 'Male', NULL, NULL, NULL, NULL, NULL, 'ryandwitamaraya@gmail.com', NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vQcJxMFA9iiOCoJ8A5I4MohbhPjVwrJNV_3y_bhrTs3_y4_0GC_M4X3TQbCzEipVw0BXS5ces8z7iCS/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-11-16 02:41:46', '2024-02-27 08:09:38', NULL, ''),
(96, 107, NULL, NULL, 'Female', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vSdwiCYUbBqRQOxZHO-gY-IktHz6y8k4QFgpE2FfmypNQ8VcyRACYQA4CKlmWOZXxtd75bS_NXfEc-4/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-11-16 02:42:41', '2024-02-27 08:10:12', NULL, ''),
(97, 108, NULL, NULL, 'Female', NULL, NULL, NULL, NULL, NULL, 'naomi.vwn@gmail.com', NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vQY_j9eQUMT51N7HTcBUL_HoJRMovoquXkCbHpjszzg9saxQZ_NEg6LKLwF_uNiQD5DLwFx0jeRlWhM/pubhtml?widget=true&amp;headers=false\"></iframe>', '2023-11-16 02:44:37', '2024-02-27 08:03:15', NULL, ''),
(100, 125, NULL, NULL, 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vQQjFRo6WP5Dy0FQFi-zuIYUxz40gcPeGtaAtxz9oKTZIBcMPu0nU0EIhurX8l7Y7GyB_cJEVX31tVY/pubhtml?widget=true&amp;headers=false\"></iframe>', '2024-01-30 05:44:28', '2024-02-27 08:03:10', NULL, NULL),
(101, 126, NULL, NULL, 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vTfpi3GAf2JeKr5YW1crysE02xxmnOsR4v9c118dQCPbu2Z84WNxn9B6CjVXwagXqlRqEJZKf3u6rSL/pubhtml?widget=true&amp;headers=false\"></iframe>', '2024-01-30 05:46:45', '2024-02-27 08:09:52', NULL, NULL),
(102, 127, NULL, NULL, 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vSU6TShpfwzQCXEbCAxvwuD-pypqkntg3x-pnciXs7Ilic1-kKY6APkeits0quKU1zRkZiO3emrpYuw/pubhtml?widget=true&amp;headers=false\"></iframe>', '2024-01-30 05:48:30', '2024-02-27 08:10:02', NULL, NULL),
(103, 128, NULL, NULL, 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vTuRapLqZZ6UPGN5i4RWyGoOUiH58FtOCMCUtm3wHIItcPvUKHgNND7WVIxr69YL8XcPXlezTgVvKlB/pubhtml?widget=true&amp;headers=false\"></iframe>', '2024-01-30 05:50:14', '2024-02-27 08:10:07', NULL, NULL),
(104, 129, NULL, NULL, 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vSgqiIy4l40pxAlLurg8Tdg-pFJmFuUDFE-G8u9i5wiXRVqiSdPAorU_oBbdT1PTaguYipHanlFA1rG/pubhtml?widget=true&amp;headers=false\"></iframe>', '2024-01-30 05:52:06', '2024-02-27 08:11:43', NULL, NULL),
(105, 130, NULL, NULL, 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vQUY9m0GMFHHr-dNE3tYF1snbnWsTsgS_maCBsbCsB58N46NnVBft0m8OmE8jq4RRQDjkPRJcnnaxtU/pubhtml?widget=true&amp;headers=false\"></iframe>', '2024-01-30 05:58:44', '2024-02-27 07:32:08', NULL, NULL),
(106, 131, NULL, NULL, 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vRt0CvH-lh_nhkBaXceWXShIporY4tVztZU_sohHm4cVZVbezAFjNwf1t3TsQiuQvRGKi-fl4OzJ-TC/pubhtml?widget=true&amp;headers=false\"></iframe>', '2024-01-30 06:00:57', '2024-02-27 07:53:01', NULL, NULL),
(107, 132, NULL, NULL, 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vT_X25KIMt8MPw2pnwA-9vyvbwf1HZ4sMnIqnctWmHxHXoRpDSIUwJXTsQI_NP8vAnUEREBO1Xk3ReD/pubhtml?widget=true&amp;headers=false\"></iframe>', '2024-01-30 06:02:15', '2024-02-27 07:57:24', NULL, NULL),
(108, 133, NULL, NULL, 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vSx0cYG7VpkryZfGIBVgByl-pW0RWOROTy-aHok-KSjau1JX8NzBdHcLu8KUHRHxEnSD4tbWuDtJ2PO/pubhtml?widget=true&amp;headers=false\"></iframe>', '2024-01-30 06:03:55', '2024-02-27 08:00:55', NULL, NULL),
(109, 134, NULL, NULL, 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vTXZedVOpj8ePcswxc280T7Eb6FTbc_TbaUa3OI72kZQXdQxtXy6Dbr1_jo-nrm43yIk8KQKBB24730/pubhtml?widget=true&amp;headers=false\"></iframe>', '2024-01-30 06:08:05', '2024-02-27 08:11:50', NULL, NULL),
(110, 135, NULL, NULL, 'Female', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vT5oDE-l1yuqybGO1ztjpDcp0QprK3ovVpVa-3bCjdgW9N3njmyh2TEr5n3ler4ox2WE8i61Tac28IR/pubhtml?widget=true&amp;headers=false\"></iframe>', '2024-01-30 06:09:09', '2024-02-27 08:11:56', NULL, NULL),
(111, 136, NULL, NULL, 'Female', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vQlzkArK2u06qqvFj9G9tq-1VV8YCeGBn6XS1hCnddwVhzgUPFv9c3LQcz27vqjWcMhqr1RxN4-QgDg/pubhtml?widget=true&amp;headers=false\"></iframe>', '2024-01-30 06:10:42', '2024-02-27 07:20:25', NULL, NULL),
(112, 137, NULL, NULL, 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vQhuW8otNcrPO14kzqbT2EUHyj9QSyFGqCyBmop6wTqZ1sySyO5K5KhoqhWvEg9PYDX21ClX94ZkIu9/pubhtml?widget=true&amp;headers=false\"></iframe>', '2024-01-30 06:21:48', '2024-02-27 08:12:08', NULL, NULL),
(113, 138, NULL, NULL, 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vQ20ibyXv02ZB7qHC2pJBw6Qbwqdv-rbVQai4HZk3GHxPcbdFBb57Td5BWtomYiuk-Y5FDGWBXQzCjf/pubhtml?widget=true&amp;headers=false\"></iframe>', '2024-01-30 06:23:38', '2024-02-27 08:12:55', NULL, NULL),
(114, 139, NULL, NULL, 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vQGo-90VuJ8SvflFsCSIvz7Eqg_YoS0gqfy3VHpl92XR49N0ytEDHfEu8F79e8HEDvcaKCPZ0lZluKU/pubhtml?widget=true&amp;headers=false\"></iframe>', '2024-01-30 06:52:10', '2024-02-27 08:07:32', NULL, NULL),
(115, 140, NULL, NULL, 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vR_W4hRWoQO58iinmxRv_V1P-01DmZUA26_q1xSknAm_DgPC_3JMpqkrBMKFrsDUanAhdv1tshWA9E8/pubhtml?widget=true&amp;headers=false\"></iframe>', '2024-01-30 06:54:26', '2024-02-27 08:02:47', NULL, NULL),
(116, 141, 1, NULL, 'Female', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vQVcGTGya1FnlOMRyWGSVgaRTxqMnAbgKeI7mff3Jfh99XfTUb4TQrN2PaIF2XpnMEg4z5HF51n_PDL/pubhtml?widget=true&amp;headers=false\"></iframe>', '2024-01-31 01:09:46', '2024-02-29 10:59:42', NULL, NULL),
(117, 142, 1, NULL, 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vQLg50Y1cQPs1nZArzG1JYh48dbk6UMGLGs_ceE9yNlvE1l2xl4fHWyPILSP4FtSRpcIXQhYIA_fcJp/pubhtml?widget=true&amp;headers=false\"></iframe>', '2024-01-31 01:12:30', '2024-02-29 10:59:02', NULL, NULL),
(118, 143, 1, NULL, 'Female', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vTxzM8QBi3fXaAMtxx4Xgu9HtUodVXg7w7DDt1rbpP3Bkn9pvR_gzIH-AuANw0DRz9UcrWPrv9LBBMK/pubhtml?widget=true&amp;headers=false\"></iframe>', '2024-01-31 01:15:05', '2024-02-29 10:59:19', NULL, NULL),
(119, 144, 1, NULL, 'Female', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vQf7xZI8Vclr-jeLZx4VbCO2FO5M9VvhaMrzGe3LmoiH2nrH2c08_mE0KWRgzXJfyyG9516tfWVVfgY/pubhtml?widget=true&amp;headers=false\"></iframe>', '2024-01-31 01:31:12', '2024-02-29 10:59:08', NULL, NULL),
(120, 145, 1, NULL, 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vRJ-EmR4Gsb9RUmSKCR4pDD5GYJUzuSUDIM0mpfwOpwwQ-HDXPuviaV5VuMG39BoLg97aimaNMA4QR0/pubhtml?widget=true&amp;headers=false\"></iframe>', '2024-01-31 01:33:50', '2024-02-29 10:58:50', NULL, NULL),
(121, 146, 1, NULL, 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vQ-b4CNPLGIdLlXM77gfwNCudIxPdVgjG9lFt4Ye6nenI4iqkDqZy4M5CX3v2Nn4r8WdGpmNzJ2mvkW/pubhtml?widget=true&amp;headers=false\"></iframe>', '2024-01-31 01:36:17', '2024-02-29 10:58:34', NULL, NULL),
(122, 147, 1, NULL, 'Female', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vQGGLSG735Po356UF8YMeQmyxx80_LmKeOso88_YcyIj_lrUFsewdJcgHH20ebkk1l3zy8Y4IQGsSy0/pubhtml?widget=true&amp;headers=false\"></iframe>', '2024-01-31 01:40:00', '2024-02-29 10:59:14', NULL, NULL),
(123, 148, 1, NULL, 'Female', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vRarQNr-nHX64385kjmuJmztzijg_WxvyCxkIf6YUWGj5msPckJD1Pv_6jVAEJNW4-GN0hyG3q-aRZx/pubhtml?widget=true&amp;headers=false\"></iframe>', '2024-01-31 01:45:43', '2024-02-29 10:59:34', NULL, NULL),
(124, 149, 1, NULL, 'Female', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vR1kagBuxY5NjT-W--sR5aPvMO6iwzWaIb5C_ledPEf-iC0_bW9YfFkjM0C7cN2aBcSeZ-1_e7J2yu5/pubhtml?widget=true&amp;headers=false\"></iframe>', '2024-01-31 01:48:19', '2024-02-29 10:59:27', NULL, NULL),
(126, 151, 1, NULL, 'Female', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vQXjbzBLEm2C5H2vM-JEzIokK4Gnigjjpsb-Ltl4gvFiaddsKAn_Z3S4EFTi9VEEq3uzgKLX5em7OAC/pubhtml?widget=true&amp;headers=false\"></iframe>', '2024-02-06 02:31:36', '2024-02-29 10:58:57', NULL, NULL),
(127, 152, 2, NULL, 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-28 03:01:40', '2024-02-28 03:01:40', NULL, NULL),
(128, 153, 2, NULL, 'Female', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-28 04:12:58', '2024-02-28 04:12:58', NULL, NULL),
(129, 154, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-28 04:28:25', '2024-02-28 04:28:25', NULL, NULL),
(130, 155, 2, NULL, 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-28 04:33:16', '2024-02-28 04:33:16', NULL, NULL),
(131, 156, 2, NULL, 'Female', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-28 04:46:28', '2024-02-28 04:46:28', NULL, NULL),
(132, 157, 2, NULL, 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-28 04:48:06', '2024-02-28 04:48:06', NULL, NULL),
(133, 158, 2, NULL, 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-28 04:49:36', '2024-02-28 04:49:36', NULL, NULL),
(134, 159, 2, NULL, 'Female', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-28 04:51:04', '2024-02-28 04:51:04', NULL, NULL),
(135, 160, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-28 04:54:19', '2024-02-28 04:54:19', NULL, NULL),
(136, 161, 2, NULL, 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-28 04:58:12', '2024-02-28 04:58:12', NULL, NULL),
(139, 164, 2, NULL, 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-28 05:17:26', '2024-02-28 05:17:26', NULL, NULL),
(141, 166, 4, NULL, 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-28 05:36:26', '2024-02-28 05:36:26', NULL, NULL),
(142, 167, 4, NULL, 'Female', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-28 05:44:45', '2024-02-28 05:44:45', NULL, NULL),
(143, 168, 1, NULL, 'Female', NULL, NULL, NULL, NULL, NULL, 'siskaasso111@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-28 07:19:35', '2024-02-28 07:21:18', NULL, NULL),
(144, 169, 1, NULL, 'Female', NULL, NULL, NULL, NULL, NULL, 'niarmonim6@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-28 07:22:36', '2024-02-28 07:22:36', NULL, NULL),
(145, 170, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'siharissaryati@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-28 07:23:57', '2024-02-28 07:23:57', NULL, NULL),
(146, 171, 1, NULL, 'Male', NULL, NULL, NULL, NULL, NULL, 'melpenyogi2019@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-28 07:29:33', '2024-02-28 07:29:33', NULL, NULL),
(147, 172, 2, NULL, 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-28 07:31:29', '2024-02-28 07:31:29', NULL, NULL),
(149, 174, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-06 04:13:03', '2024-03-06 04:13:03', NULL, NULL),
(150, 175, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-06 04:14:09', '2024-03-06 04:14:09', NULL, NULL),
(151, 176, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-06 04:15:01', '2024-03-06 04:15:01', NULL, NULL),
(152, 177, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-06 04:15:54', '2024-03-06 04:15:54', NULL, NULL),
(157, 182, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-06 04:20:15', '2024-03-06 04:20:15', NULL, NULL),
(158, 183, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-06 04:21:08', '2024-03-06 04:21:08', NULL, NULL),
(159, 184, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-06 04:23:12', '2024-03-06 04:23:12', NULL, NULL),
(160, 185, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-06 04:23:58', '2024-03-06 04:23:58', NULL, NULL),
(161, 186, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-06 04:24:51', '2024-03-06 04:24:51', NULL, NULL),
(164, 189, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-06 04:27:34', '2024-03-06 04:27:34', NULL, NULL),
(165, 190, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-06 04:27:49', '2024-03-06 04:27:49', NULL, NULL),
(166, 191, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-06 04:28:33', '2024-03-06 04:28:33', NULL, NULL),
(167, 192, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-06 04:29:05', '2024-03-06 04:29:05', NULL, NULL),
(168, 193, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-06 04:29:28', '2024-03-06 04:29:28', NULL, NULL),
(169, 194, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-06 04:30:14', '2024-03-06 04:30:14', NULL, NULL),
(171, 196, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-06 04:31:21', '2024-03-06 04:31:21', NULL, NULL),
(173, 198, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-06 04:32:26', '2024-03-06 04:32:26', NULL, NULL),
(174, 199, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-06 04:32:57', '2024-03-06 04:32:57', NULL, NULL),
(176, 203, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-06 04:34:32', '2024-03-06 04:34:32', NULL, NULL),
(177, 205, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-06 04:35:15', '2024-03-06 04:35:15', NULL, NULL),
(178, 206, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-06 04:35:59', '2024-03-06 04:35:59', NULL, NULL),
(179, 207, NULL, NULL, 'Male', NULL, NULL, NULL, NULL, NULL, 'kristopolfoi@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-06 04:36:38', '2024-03-08 02:08:23', NULL, NULL),
(180, 208, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-06 04:36:42', '2024-03-06 04:36:42', NULL, NULL),
(181, 209, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-06 04:37:32', '2024-03-06 04:37:32', NULL, NULL),
(182, 210, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-06 04:38:35', '2024-03-06 04:38:35', NULL, NULL),
(183, 211, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-06 04:39:56', '2024-03-06 04:39:56', NULL, NULL),
(184, 212, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-06 04:40:32', '2024-03-06 04:40:32', NULL, NULL),
(185, 213, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-06 04:41:07', '2024-03-06 04:41:07', NULL, NULL),
(186, 214, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-06 04:41:21', '2024-03-06 04:41:21', NULL, NULL),
(187, 215, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-06 04:42:08', '2024-03-06 04:42:08', NULL, NULL);
INSERT INTO `students` (`id`, `user_id`, `province_id`, `profile`, `gender`, `place_of_birth`, `date_of_birth`, `ktp`, `province`, `full_address`, `email_google`, `email_outlook`, `email_sagu`, `email_campus_1`, `email_campus_2`, `education_history`, `doc_google_sheets`, `created_at`, `updated_at`, `deleted_at`, `programs`) VALUES
(188, 216, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-06 04:42:08', '2024-03-06 04:42:08', NULL, NULL),
(189, 217, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-06 04:42:52', '2024-03-06 04:42:52', NULL, NULL),
(190, 218, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-06 04:43:39', '2024-03-06 04:43:39', NULL, NULL),
(191, 219, NULL, NULL, 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-06 04:43:39', '2024-03-08 02:11:21', NULL, NULL),
(192, 220, NULL, NULL, 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-06 04:44:40', '2024-03-08 02:09:58', NULL, NULL),
(193, 221, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-06 04:46:03', '2024-03-06 04:46:03', NULL, NULL),
(194, 222, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-06 04:46:29', '2024-03-06 04:46:29', NULL, NULL),
(195, 223, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-06 04:47:10', '2024-03-06 04:47:10', NULL, NULL),
(196, 224, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-06 04:47:20', '2024-03-06 04:47:20', NULL, NULL),
(197, 225, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-06 04:48:08', '2024-03-06 04:48:08', NULL, NULL),
(199, 227, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-06 04:49:00', '2024-03-06 04:49:00', NULL, NULL),
(203, 231, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-06 04:51:07', '2024-03-06 04:51:07', NULL, NULL),
(205, 233, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-06 04:51:57', '2024-03-06 04:51:57', NULL, NULL),
(206, 234, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-06 04:52:25', '2024-03-06 04:52:25', NULL, NULL),
(207, 235, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-06 04:52:45', '2024-03-06 04:52:45', NULL, NULL),
(209, 237, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://docs.google.com/spreadsheets/d/e/2PACX-1vRoM8hLdGwShgRPU8BU_keoWLYbCevNW5xwbOz9clh2m2l2fTwpLRae9gmnPPoIOmaeu8JhZOCD7_kC/pubhtml?widget=true&amp;headers=false\"></iframe>', '2024-03-06 04:53:58', '2024-03-06 05:21:42', NULL, NULL),
(210, 238, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-06 04:55:06', '2024-03-06 04:55:06', NULL, NULL),
(211, 239, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-06 04:55:12', '2024-03-06 04:55:12', NULL, NULL),
(212, 240, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-06 04:56:52', '2024-03-06 04:56:52', NULL, NULL),
(213, 241, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-08 02:03:01', '2024-03-08 02:03:01', NULL, NULL),
(214, 242, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-08 02:07:23', '2024-03-08 02:07:23', NULL, NULL),
(215, 243, NULL, NULL, 'Male', NULL, NULL, NULL, NULL, NULL, 'martiasbusup.busup@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-08 02:09:19', '2024-03-08 02:09:39', NULL, NULL),
(217, 246, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-22 07:23:53', '2024-03-22 07:23:53', NULL, NULL),
(218, 247, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-22 07:24:43', '2024-03-22 07:24:43', NULL, NULL),
(219, 248, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-22 07:25:21', '2024-03-22 07:25:21', NULL, NULL),
(220, 249, NULL, NULL, NULL, 'Yahukimo', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-22 07:25:49', '2024-03-22 07:25:49', NULL, NULL),
(221, 250, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-22 07:26:02', '2024-03-22 07:26:02', NULL, NULL),
(222, 251, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-22 07:26:33', '2024-03-22 07:26:33', NULL, NULL),
(223, 252, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-22 07:27:10', '2024-03-22 07:27:10', NULL, NULL),
(224, 253, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-22 07:27:40', '2024-03-22 07:27:40', NULL, NULL),
(225, 254, NULL, NULL, 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-22 07:27:44', '2024-03-22 07:27:44', NULL, NULL),
(226, 255, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-22 07:28:15', '2024-03-22 07:28:15', NULL, NULL),
(227, 256, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-22 07:28:51', '2024-03-22 07:28:51', NULL, NULL),
(228, 257, NULL, NULL, 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-22 07:29:14', '2024-03-22 07:29:14', NULL, NULL),
(229, 258, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-22 07:29:38', '2024-03-22 07:29:38', NULL, NULL),
(230, 259, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-22 07:30:07', '2024-03-22 07:30:07', NULL, NULL),
(231, 260, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-22 07:30:43', '2024-03-22 07:30:43', NULL, NULL),
(232, 261, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-22 07:30:43', '2024-03-22 07:30:43', NULL, NULL),
(233, 262, NULL, NULL, 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-22 07:31:33', '2024-03-22 07:31:33', NULL, NULL),
(234, 263, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-22 07:32:14', '2024-03-22 07:32:14', NULL, NULL),
(235, 264, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-22 07:32:54', '2024-03-22 07:32:54', NULL, NULL),
(236, 265, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-22 07:33:07', '2024-03-22 07:33:07', NULL, NULL),
(237, 266, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-22 07:33:32', '2024-03-22 07:33:32', NULL, NULL),
(238, 267, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-22 07:34:03', '2024-03-22 07:34:03', NULL, NULL),
(239, 268, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-22 07:34:40', '2024-03-22 07:34:40', NULL, NULL),
(240, 269, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-22 07:35:21', '2024-03-22 07:35:21', NULL, NULL),
(241, 270, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-22 07:36:02', '2024-03-22 07:36:02', NULL, NULL),
(242, 271, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-22 07:36:07', '2024-03-22 07:36:07', NULL, NULL),
(243, 272, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-22 07:36:47', '2024-03-22 07:36:47', NULL, NULL),
(244, 273, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-22 07:36:51', '2024-03-22 07:36:51', NULL, NULL),
(245, 274, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-22 07:37:42', '2024-03-22 07:37:42', NULL, NULL),
(246, 275, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-22 07:38:17', '2024-03-22 07:38:17', NULL, NULL),
(247, 276, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-22 07:38:52', '2024-03-22 07:38:52', NULL, NULL),
(248, 277, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-22 07:39:28', '2024-03-22 07:39:28', NULL, NULL),
(249, 278, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-22 07:40:43', '2024-03-22 07:40:43', NULL, NULL);

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
(109, 71, 4, '2024-02-09 08:04:03', '2024-02-09 08:04:03'),
(110, 127, 9, '2024-02-28 06:13:58', '2024-02-28 06:13:58'),
(111, 128, 9, '2024-02-28 06:14:04', '2024-02-28 06:14:04'),
(112, 129, 9, '2024-02-28 06:14:55', '2024-02-28 06:14:55'),
(113, 130, 9, '2024-02-28 06:15:05', '2024-02-28 06:15:05'),
(114, 131, 9, '2024-02-28 06:15:14', '2024-02-28 06:15:14'),
(115, 132, 9, '2024-02-28 06:15:37', '2024-02-28 06:15:37'),
(116, 28, 1, '2024-02-28 06:15:47', '2024-02-28 06:15:47'),
(117, 139, 10, '2024-02-28 06:51:53', '2024-02-28 06:51:53'),
(118, 62, 10, '2024-02-28 06:52:14', '2024-02-28 06:52:14'),
(119, 63, 2, '2024-02-28 06:52:22', '2024-02-28 06:52:22'),
(120, 84, 4, '2024-02-28 06:52:57', '2024-02-28 06:52:57'),
(121, 67, 1, '2024-02-28 06:53:25', '2024-02-28 06:53:25'),
(122, 68, 1, '2024-02-28 06:53:33', '2024-02-28 06:53:33'),
(123, 69, 1, '2024-02-28 06:53:39', '2024-02-28 06:53:39'),
(124, 61, 10, '2024-02-28 06:53:48', '2024-02-28 06:53:48'),
(125, 142, 9, '2024-02-28 06:54:19', '2024-02-28 06:54:19'),
(126, 70, 1, '2024-02-28 06:54:30', '2024-02-28 06:54:30'),
(127, 83, 4, '2024-02-28 06:55:30', '2024-02-28 06:55:30'),
(128, 136, 10, '2024-02-28 06:56:25', '2024-02-28 06:56:25'),
(129, 116, 6, '2024-02-28 06:57:29', '2024-02-28 06:57:29'),
(131, 135, 9, '2024-02-28 07:00:35', '2024-02-28 07:00:35'),
(132, 96, 4, '2024-02-28 07:00:53', '2024-02-28 07:00:53'),
(133, 82, 4, '2024-02-28 07:01:01', '2024-02-28 07:01:01'),
(134, 141, 9, '2024-02-28 07:01:55', '2024-02-28 07:01:55'),
(135, 124, 6, '2024-02-28 07:02:52', '2024-02-28 07:02:52'),
(136, 119, 6, '2024-02-28 07:03:34', '2024-02-28 07:03:34'),
(137, 133, 10, '2024-02-28 07:03:59', '2024-02-28 07:03:59'),
(138, 107, 7, '2024-02-28 07:04:10', '2024-02-28 07:04:10'),
(139, 134, 9, '2024-02-28 07:04:22', '2024-02-28 07:04:22'),
(140, 91, 4, '2024-02-28 07:04:55', '2024-02-28 07:04:55'),
(141, 21, 1, '2024-02-28 07:05:09', '2024-02-28 07:05:09'),
(142, 74, 4, '2024-02-28 07:05:30', '2024-02-28 07:05:30'),
(143, 117, 6, '2024-02-28 07:05:54', '2024-02-28 07:05:54'),
(144, 105, 7, '2024-02-28 07:06:06', '2024-02-28 07:06:06'),
(145, 89, 4, '2024-02-28 07:06:36', '2024-02-28 07:06:36'),
(146, 126, 6, '2024-02-28 07:06:44', '2024-02-28 07:06:44'),
(147, 143, 5, '2024-02-28 07:20:21', '2024-02-28 07:20:21'),
(148, 144, 5, '2024-02-28 07:23:04', '2024-02-28 07:23:04'),
(149, 145, 5, '2024-02-28 07:25:31', '2024-02-28 07:25:31'),
(150, 147, 5, '2024-02-28 07:31:37', '2024-02-28 07:31:37'),
(153, 146, 9, '2024-02-28 07:32:01', '2024-02-28 07:32:01'),
(154, 146, 5, '2024-02-28 07:32:01', '2024-02-28 07:32:01'),
(156, 209, 11, '2024-03-08 01:54:10', '2024-03-08 01:54:10'),
(157, 171, 11, '2024-03-08 01:54:37', '2024-03-08 01:54:37'),
(158, 183, 11, '2024-03-08 01:55:31', '2024-03-08 01:55:31'),
(159, 196, 11, '2024-03-08 01:55:36', '2024-03-08 01:55:36'),
(160, 207, 11, '2024-03-08 01:55:41', '2024-03-08 01:55:41'),
(161, 186, 11, '2024-03-08 01:55:45', '2024-03-08 01:55:45'),
(162, 166, 11, '2024-03-08 01:57:30', '2024-03-08 01:57:30'),
(163, 211, 11, '2024-03-08 01:57:37', '2024-03-08 01:57:37'),
(164, 164, 11, '2024-03-08 01:58:11', '2024-03-08 01:58:11'),
(165, 188, 11, '2024-03-08 01:58:45', '2024-03-08 01:58:45'),
(166, 165, 11, '2024-03-08 01:59:33', '2024-03-08 01:59:33'),
(167, 185, 11, '2024-03-08 02:00:43', '2024-03-08 02:00:43'),
(168, 212, 11, '2024-03-08 02:00:56', '2024-03-08 02:00:56'),
(169, 150, 11, '2024-03-08 02:01:08', '2024-03-08 02:01:08'),
(170, 197, 11, '2024-03-08 02:02:27', '2024-03-08 02:02:27'),
(171, 213, 11, '2024-03-08 02:03:01', '2024-03-08 02:03:01'),
(172, 173, 11, '2024-03-08 02:03:54', '2024-03-08 02:03:54'),
(173, 182, 11, '2024-03-08 02:04:36', '2024-03-08 02:04:36'),
(174, 176, 11, '2024-03-08 02:05:06', '2024-03-08 02:05:06'),
(175, 152, 11, '2024-03-08 02:05:35', '2024-03-08 02:05:35'),
(176, 194, 11, '2024-03-08 02:05:52', '2024-03-08 02:05:52'),
(177, 151, 11, '2024-03-08 02:06:22', '2024-03-08 02:06:22'),
(178, 214, 11, '2024-03-08 02:07:23', '2024-03-08 02:07:23'),
(179, 179, 11, '2024-03-08 02:08:03', '2024-03-08 02:08:03'),
(180, 215, 11, '2024-03-08 02:09:19', '2024-03-08 02:09:19'),
(181, 192, 11, '2024-03-08 02:10:04', '2024-03-08 02:10:04'),
(182, 161, 11, '2024-03-08 02:10:43', '2024-03-08 02:10:43'),
(183, 191, 11, '2024-03-08 02:11:35', '2024-03-08 02:11:35'),
(188, 149, 1, '2024-03-08 06:47:35', '2024-03-08 06:47:35'),
(189, 206, 1, '2024-03-08 06:47:44', '2024-03-08 06:47:44'),
(190, 189, 1, '2024-03-08 06:48:15', '2024-03-08 06:48:15'),
(191, 220, 7, '2024-03-22 07:25:49', '2024-03-22 07:25:49'),
(192, 228, 7, '2024-03-22 07:29:14', '2024-03-22 07:29:14'),
(193, 230, 7, '2024-03-22 07:30:07', '2024-03-22 07:30:07'),
(194, 231, 7, '2024-03-22 07:30:43', '2024-03-22 07:30:43'),
(195, 233, 7, '2024-03-22 07:31:33', '2024-03-22 07:31:33'),
(196, 235, 7, '2024-03-22 07:32:54', '2024-03-22 07:32:54'),
(197, 237, 7, '2024-03-22 07:33:32', '2024-03-22 07:33:32'),
(200, 1, 1, '2024-03-25 02:56:12', '2024-03-25 02:56:12');

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
(1, 'Janzen', NULL, 'Faidiban', 'Information Technology Coordinator', 'janzen.faidiban@sagufoundation.org', NULL, NULL, '$2y$10$xSJxHVBl0ESoioxaDPjo9eGcO6k0Dm18C3Cbulbp3mAOXbbPoRft6', 'images/users/Janzen-3-200x200.jpg', 'janzen-faidiban', 'Publish', NULL, '2023-10-13 05:29:54', '2023-10-13 05:29:54', NULL),
(2, 'Febe', '', 'Worabay', 'Administration Officer', 'febe-woaraby@sagufoundation.org', NULL, NULL, '$2y$10$c5zvztV2dzPdlcZ8wv8lAuVNBsqHjXnGEnpcW5p2wcNQbnCHZRiQy', 'images/users/Febe-200x200.jpg', 'febe-worabay', 'Publish', NULL, '2023-10-13 05:29:54', '2023-10-13 05:29:54', NULL),
(3, 'Tisha', NULL, 'Rumbewas', 'Director', 'tisha.rumbewas@sagufoundation.org', NULL, NULL, '$2y$10$LhOGklOQj/J1eBYKS4lB0ee6h1PJGHevCDruGjfdVDRioo4KToC4W', 'images/users/Tisha-200x200.jpg', 'tisha-rumbewas', 'Publish', NULL, '2023-10-13 05:29:54', '2023-10-13 05:29:54', NULL),
(4, 'Elisabeth', '', 'Jakarimilena', 'Finance Officer', 'elisabeth.jakarimilena@sagufoundation.org', NULL, NULL, '$2y$10$RBCvnVmjxKzDPL/oDHqVsulWw8KNqwFrCZW1A3.rA1EY9DWeVWNmi', 'images/users/Ellysabeth-200x200.jpg', 'elisabeth-jakarimilena', 'Publish', NULL, '2023-10-13 05:29:54', '2023-10-13 05:29:54', NULL),
(5, 'Samuel', NULL, 'Bosawer', 'Web Developer', 'samuel.bosawer@sagufoundation.org', NULL, NULL, '$2y$10$jMVnv.V5NAh01T75dcNLLuNOoXDfmuuBUPAw34FrtHdsz3gL1.Pim', 'images/users/samuel-1707466130.png', 'samuel', 'Publish', 'NE5zBdF3vQc3ukaOtST8fNTMXVOPBqvojemMc3egRuE2eGvqA9xiPti3kCYZ', '2023-10-13 05:29:55', '2024-02-13 01:37:51', NULL),
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
(136, 'Apolos', NULL, 'Kabak', NULL, 'apoloskabak@gmail.com', '+62 821-9270-6870', NULL, '$2y$10$.Lbu9GK/2BLjjxE3E27LC.x5sJExEUpdFOakLV/7Vs.67S8wkju8a', 'images/students/image-single.jpg', 'apoloskabak', 'Publish', NULL, '2024-01-30 06:10:42', '2024-02-28 06:04:34', NULL),
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
(151, 'Christine', NULL, 'worabay', NULL, 'worabayxtin@gmail.com', '+62 822-4774-3047', NULL, '$2y$10$liELdk6.Y/6Gd8bhxxgyiOI2KoVqB9Hzunxc/bBh05XCJjQphX1bW', 'images/students/SAGU - WEB USER AVATARS (23).png', 'christineworabay', 'Publish', NULL, '2024-02-06 02:31:36', '2024-02-06 02:33:05', NULL),
(152, 'Ati', NULL, 'Segenil', NULL, 'atisegenil@mail.com', NULL, NULL, '$2y$10$c9cQ06gJ.rdqu3R4nvQ0aeZ8wBpGVJoRFCO714sThiMay2nCO9IyC', NULL, 'atisegenil', 'Publish', NULL, '2024-02-28 03:01:40', '2024-02-28 03:01:40', NULL),
(153, 'Atna', NULL, 'Kossay', NULL, 'atnakossay@gmail.com', NULL, NULL, '$2y$10$hpHHzFfOwxPrN8V.wlcnFuY1siajgjlUT4vAu4wh6PFR8dVDE/zV6', NULL, 'atnakossay', 'Publish', NULL, '2024-02-28 04:12:57', '2024-02-28 04:12:57', NULL),
(154, 'Danius', NULL, 'Magayang', NULL, 'daniusmagayang@mail.com', NULL, NULL, '$2y$10$9dvetCimT3JvzgPlsAo8dejCdvgxs.ENPcdhIDnlzuJ/1VAcRGF66', NULL, 'daniusmagayang', 'Publish', NULL, '2024-02-28 04:28:25', '2024-02-28 04:28:25', NULL),
(155, 'Doni', NULL, 'Lokobal', NULL, 'donilokobal@mail.com', NULL, NULL, '$2y$10$QjjvIJMPBI/gMllLhZPDsOXc0KaAsw69DpkQEspYyltHp8snICGXm', NULL, 'donilokobal', 'Publish', NULL, '2024-02-28 04:33:16', '2024-02-28 04:33:16', NULL),
(156, 'Firlasia', 'Priska Rosevela', 'Gombo', NULL, 'firlasiapriskarosevelagombo@mail.com', NULL, NULL, '$2y$10$L5qIUsDLxQAoKdM3mZ1gzO7A855v/J76EjHzYf5K9C27PHWtUcP16', NULL, 'firlasia-priska-rosevelagombo', 'Publish', NULL, '2024-02-28 04:46:28', '2024-02-28 06:15:29', NULL),
(157, 'Hosea', NULL, 'Himan', NULL, 'hoseahiman@mail.com', NULL, NULL, '$2y$10$CMl4EhzOU5ulqVB8rYmvAu4N.iBf5Jrw/6LpSt02BT7g8Gg3G9YrG', NULL, 'hoseahiman', 'Publish', NULL, '2024-02-28 04:48:06', '2024-02-28 04:48:06', NULL),
(158, 'Kaleb', 'Charles', 'Wenda', NULL, 'kalebcharleswenda@mail.com', NULL, NULL, '$2y$10$VhzTSTJ7HK8Egvvv57mdoeX6ByYOrB7MM3LlQ7XnC2fdY22bAw0.u', NULL, 'kaleb-charleswenda', 'Publish', NULL, '2024-02-28 04:49:36', '2024-02-28 07:03:51', NULL),
(159, 'Lili', NULL, 'Wantik', NULL, 'liliwantik@mail.com', NULL, NULL, '$2y$10$kyelOREDTJAepFwlHo9cxO9F1ds3XmxW8SASGvT73OxENXfx3U9j2', NULL, 'liliwantik', 'Publish', NULL, '2024-02-28 04:51:04', '2024-02-28 07:03:39', NULL),
(160, 'Sara', NULL, 'Wetapo', NULL, 'sarawetapo@mail.com', NULL, NULL, '$2y$10$Na6917.BLBFoOTluN0EkWeiyqst3reluafvKiWx5css2QZxMWGbvG', NULL, 'sarawetapo', 'Publish', NULL, '2024-02-28 04:54:19', '2024-02-28 06:59:36', NULL),
(161, 'Wanggo', NULL, 'Uropkulin', NULL, 'wanggouropkulin@mail.com', NULL, NULL, '$2y$10$FC4M9JVcjxlpNyJW/jdE.u6dj83R5wlSKbNzacaVnsavLCan4Wvqq', NULL, 'wanggouropkulin', 'Publish', NULL, '2024-02-28 04:58:12', '2024-02-28 06:56:14', NULL),
(164, 'Yunias', NULL, 'mirin', NULL, 'yuniasmirin@mail.com', NULL, NULL, '$2y$10$V5TmGos3lYPmhfHz9UNCJ.zyp2XATQ8zxoFBuBLkRK9OEq1XqzSJC', NULL, 'yuniasmirin', 'Publish', NULL, '2024-02-28 05:17:26', '2024-02-28 05:17:26', NULL),
(166, 'Penja', 'Kelly Evan Jerizky', 'Makmur', NULL, 'Penjakellyevanjerizkymakmur@mail.com', NULL, NULL, '$2y$10$updGkLdEtV1bSoTJrqodd.p4yQYFS2y0CNWwWO368N4P6nfJbErMG', NULL, 'penja-kelly-evan-jerizkymakmur', 'Publish', NULL, '2024-02-28 05:36:26', '2024-02-28 07:01:43', NULL),
(167, 'Yermina', 'Brgitha Tubango', 'Endewip', NULL, 'yerminabrgithatubango@mail.com', NULL, NULL, '$2y$10$/./6ony822e7jJMiz2bAM.7qcdqcY2sO.pR8EUrUF/zFD6xP4vUTK', NULL, 'yermina-brgitha-tubangoendewip', 'Publish', NULL, '2024-02-28 05:44:45', '2024-02-28 06:54:09', NULL),
(168, 'Siska', NULL, 'Asso', NULL, 'siskaasso111@gmail.com', '081390716104', NULL, '$2y$10$yGf61BVD4lu46Z3e7RS8s.w3PkloSkFy4uvEaxC8IYo34LbzXy4uS', 'images/students/Siska.png', 'siskaasso', 'Publish', NULL, '2024-02-28 07:19:35', '2024-02-28 07:21:18', NULL),
(169, 'Djuniarth', NULL, 'Monim', NULL, 'niarmonim6@gmail.com', NULL, NULL, '$2y$10$AiHetLIH5C8HJO9md9WgneGQwoCBPpQSVns6LrZ0zV1WzwAvvigVC', 'images/students/Yuniar.png', 'djuniarthmonim', 'Publish', NULL, '2024-02-28 07:22:36', '2024-02-28 07:22:54', NULL),
(170, 'Saryati', NULL, 'Siharis', NULL, 'siharissaryati@gmail.com', NULL, NULL, '$2y$10$Q2NSdfuoeh7364BBQTx0uO52FQYvr/uWphUvNyTTW0K/apMXakwHm', 'images/students/Saryati.png', 'saryatisiharis', 'Publish', NULL, '2024-02-28 07:23:57', '2024-02-28 07:24:21', NULL),
(171, 'Melpen', NULL, 'Yogi', NULL, 'melpenyogi2019@gmail.com', NULL, NULL, '$2y$10$9OTkZ2zDjMG/fU6VF.XSQupNEJR.hTfHMcZhbvfjZjifo5zCKLC1C', NULL, 'melpenyogi', 'Publish', NULL, '2024-02-28 07:29:33', '2024-02-28 07:29:33', NULL),
(172, 'Penias', NULL, 'Salawala', NULL, 'peniassalawala@mail.com', NULL, NULL, '$2y$10$qX6eMenZ3GZvnh4JO.61mOVV1GqUzopZcMLJU/6QVw28LpkUex/2a', NULL, 'peniassalawala', 'Publish', NULL, '2024-02-28 07:31:29', '2024-02-28 07:31:29', NULL),
(174, 'Annabella', NULL, 'Shara Marchella Bonay', NULL, 'sharaannabella@gmail.com', '082281096859', NULL, '$2y$10$loqt0dVGsfWlSBedBJXcreEwNJecGSEBXnSRhQRsy.F1h7Ihg8Rj.', NULL, 'annabellashara-marchella-bonay', 'Publish', NULL, '2024-03-06 04:13:03', '2024-03-06 04:13:03', NULL),
(175, 'Selvy', 'Trivena', 'Kaikatuy', NULL, 'selvykaikatuy@gmail.com', '081343408549', NULL, '$2y$10$PcblxFK5fcSwlsQxklaw.OApBUtJjn9flqjo9F42rLKGohTy2E4R2', NULL, 'selvytrivena-kaikatuy', 'Publish', NULL, '2024-03-06 04:14:09', '2024-03-08 02:01:03', NULL),
(176, 'Ideide', 'Amoye', 'Pigai', NULL, 'gaipiyopi09@gmail.com', '085361675635', NULL, '$2y$10$Asayt5cQ4LsEcyFYSstIwOUqDjFPaxTg/ZenUIm03ICHe.OagYUC6', NULL, 'ideideamoye-pigai', 'Publish', NULL, '2024-03-06 04:15:01', '2024-03-08 02:06:17', NULL),
(177, 'Gladys', 'S. R.', 'Burumi', NULL, 'gladyssrburumi@gmail.com', '081243641565', NULL, '$2y$10$1o2V8462hqnCibDYwBFZO.rYHyEzf2ITrcnMvm2RYJg3aTMZcIxwK', NULL, 'gladyssr-burumi', 'Publish', NULL, '2024-03-06 04:15:54', '2024-03-08 02:05:29', NULL),
(182, 'Chindy', NULL, 'Feronika Waromi', NULL, 'waromichindy@gmai.com', '082197726208', NULL, '$2y$10$WAB252WUoMiTtqQtUbWvu.QR1dXjJyW.Fl5VJVYYSPBM5YGa9h0Be', NULL, 'chindyferonika-waromi', 'Publish', NULL, '2024-03-06 04:20:15', '2024-03-06 04:20:15', NULL),
(183, 'Yohanis', NULL, 'Daniel Bakarbessy', NULL, 'danibakarbessy@gmail.com', '082325160517', NULL, '$2y$10$8WDcm6EfDD07quNfYwZ4uejSSLwLjRoyQptDkO84H2FMHBNvmqGr2', NULL, 'yohanisdaniel-bakarbessy', 'Publish', NULL, '2024-03-06 04:21:08', '2024-03-06 04:21:08', NULL),
(184, 'Penny', NULL, 'Randongkir', NULL, 'Pennyrandongkir@gmail.com', '081297480308', NULL, '$2y$10$o/V5dr47u6Mkl0caAt0sOOmPWAmKCJcZGR2B1Qs1N/IW/l9WkeWZu', NULL, 'pennyrandongkir', 'Publish', NULL, '2024-03-06 04:23:12', '2024-03-06 04:23:12', NULL),
(185, 'Yos', NULL, 'Suhuniap', NULL, 'yosnare2@gmail.com', '081247092669', NULL, '$2y$10$ig/MptWlw0DB2AZZc8WWJuz7XBBUmY2zuineQlgPsT98VNvf7q9RK', NULL, 'yossuhuniap', 'Publish', NULL, '2024-03-06 04:23:58', '2024-03-06 04:23:58', NULL),
(186, 'Sirinus', NULL, 'Lokbere', NULL, 'sirinuslokbere@gmail.com', '081327799984', NULL, '$2y$10$0vLjhh6HXYE2k/ifqldqzOVoDqpqzQUBbtPO5h3RcWEbxetpblSZW', NULL, 'sirinuslokbere', 'Publish', NULL, '2024-03-06 04:24:51', '2024-03-08 02:10:37', NULL),
(189, 'Naomi', 'Albertina', 'Wondiwoy', NULL, 'mimiwdy@gmail.com', '081346673367', NULL, '$2y$10$3W6/OJ/Z9jWf4rvNI35qTuRHA/yCRCVrL6wtNQIH19vuE9qx3YYQO', NULL, 'naomi-albertina-wondiwoyalbertina-wondiwoyalbertina-wondiwoy', 'Publish', NULL, '2024-03-06 04:27:34', '2024-03-08 01:58:06', NULL),
(190, 'Putri', 'Ummi', 'Qolstsum', NULL, 'putriummi883@gmail.com', '081250236462', NULL, '$2y$10$VYvec/EyX4l5vU8lSPXWFO7TNjmrAh7874ofZirk13MPqhEYAJ6Ru', NULL, 'putriummi-qolstsum', 'Publish', NULL, '2024-03-06 04:27:49', '2024-03-08 01:59:27', NULL),
(191, 'Marice', NULL, 'Wengmo', NULL, 'maricewengmo56@gmail.com', '082199308516', NULL, '$2y$10$Fbibn1N6vRXzOzNYwL06nOC956NU46.yl5kkF0y7L4WKMN/G0EPa.', NULL, 'maricewengmo', 'Publish', NULL, '2024-03-06 04:28:33', '2024-03-06 04:28:33', NULL),
(192, 'Dimas', NULL, 'Yalak', NULL, 'yalakdimas@gmail.com', '081240089098', NULL, '$2y$10$uvhr.bUCuaJS4YcMQhGthu1ssMOMEBvy37rWnAbcnQtrrQyfwfdZm', NULL, 'dimas-yalakyalakyalak', 'Publish', NULL, '2024-03-06 04:29:05', '2024-03-06 04:29:54', NULL),
(193, 'EVANTHE', NULL, 'RACHEL KECIA FELLE', NULL, 'rachelfelle0812@gmail.com', '082199643437', NULL, '$2y$10$dp8nMpRyt40Q4MqeCekdtORsc6mN.Ypge9FTgkoDXHg3nB1VLgM2a', NULL, 'evantherachel-kecia-felle', 'Publish', NULL, '2024-03-06 04:29:28', '2024-03-06 04:29:28', NULL),
(194, 'Jemi', NULL, 'Gobai', NULL, 'gobaijemi2002@gmail.com', '081369862092', NULL, '$2y$10$e4dCOZJTqldH35HfXF5R1./SnxRQIGP6n.EgpAkfkb553g0vEDmiS', NULL, 'jemigobai', 'Publish', NULL, '2024-03-06 04:30:14', '2024-03-06 04:30:14', NULL),
(196, 'Anderson', NULL, 'Dominggu Griapon', NULL, 'andersongriapon02@gmail.com', '082325125501', NULL, '$2y$10$wCfv8ubrYXMNJV98K7cdKO1M6A.aWbgWSEEJmAAftSQO9HgFYCDTG', NULL, 'andersondominggu-griapon', 'Publish', NULL, '2024-03-06 04:31:21', '2024-03-06 04:31:21', NULL),
(198, 'Dominggus', NULL, 'Deteri', NULL, 'domidezinedterx@gmail.com', '081240873175', NULL, '$2y$10$CdICvikVBomE2YrLHR2afuMcGAn83wHYUg94hE6KjW5WyKHB/IBtW', NULL, 'dominggusdeteri', 'Publish', NULL, '2024-03-06 04:32:26', '2024-03-06 04:32:26', NULL),
(199, 'Theodorus', NULL, 'Warnares', NULL, 'twarnares@gmail.com', '081235125509', NULL, '$2y$10$pXNLACi.u1.Zj/40mgOBGua0gjFQAtjpQ8xUKgcmWjJK0pGVYG36C', NULL, 'theodoruswarnares', 'Publish', NULL, '2024-03-06 04:32:57', '2024-03-06 04:32:57', NULL),
(203, 'Febriana', 'Verra', 'Rumbewas', NULL, 'febrianarumbewasfebby@gmail.com', '082197866439', NULL, '$2y$10$xzDIYNGs.gBURyeTBegVA.gtj5H9z8sAvTTVl0iR2dYskviDcG/AG', NULL, 'febrianaverra-rumbewas', 'Publish', NULL, '2024-03-06 04:34:32', '2024-03-08 02:05:01', NULL),
(205, 'Renny', NULL, 'mebri', NULL, 'rennymebri0@gmail.com', '081341746699', NULL, '$2y$10$uLfstD7Akm/EYC0x1RXq0e2QPk8Q1Oi1JlZZHcr.DTieqyTH2X6Vm', NULL, 'rennymebri', 'Publish', NULL, '2024-03-06 04:35:15', '2024-03-06 04:35:15', NULL),
(206, 'Joy', NULL, 'Richarson Wally', NULL, 'joyrichardwally@gmail.com', '081249118673', NULL, '$2y$10$1PxY5NYApWpFZqXybVUCbejN6FgZrj.31GydLZDx/0mX.NK6DUJEq', NULL, 'joyricharson-wally', 'Publish', NULL, '2024-03-06 04:35:59', '2024-03-06 04:35:59', NULL),
(207, 'Kristopol', NULL, 'Foi', NULL, 'kristopolfoi@gmail.com', '081221743915', NULL, '$2y$10$wuI/JCr6/bBk1WpnDJpOOebEt83QEVLgKu2Ma0fsIh.NGtvWx6MAq', NULL, 'kristopolfoi', 'Publish', NULL, '2024-03-06 04:36:38', '2024-03-08 02:07:51', NULL),
(208, 'Yohana', NULL, 'Gobai', NULL, 'yohanagobai52@gmail.com', '081247182748', NULL, '$2y$10$u9G85jNBm6CxAA4sXqZey.TsUFB8HdC1/c/GoqxkDumkIz8b0zexu', NULL, 'yohanagobai', 'Publish', NULL, '2024-03-06 04:36:42', '2024-03-06 04:36:42', NULL),
(209, 'Margaretha', NULL, 'aronggear', NULL, 'margarethaaronggearmaga@gmail.com', '082198082013', NULL, '$2y$10$TDALeSxaMLQ6G9yyzvpVOeRwkZ4ZTMHTsJ47pBFmt1TAZ2piGWJY.', NULL, 'margarethaaronggear', 'Publish', NULL, '2024-03-06 04:37:32', '2024-03-06 04:37:32', NULL),
(210, 'Erpi', 'Sofience', 'Siep', NULL, 'erpisofiencesiep04@gmail.com', '082375638599', NULL, '$2y$10$TuJrK/YoeGX0qHfx2A9SMuvSordzWDYfw4D7usD4E5.RKh6eC49nu', NULL, 'erpisofience-siep', 'Publish', NULL, '2024-03-06 04:38:35', '2024-03-08 02:04:30', NULL),
(211, 'Frans', NULL, 'Felix Fredrik Pangkali', NULL, 'franspangkali2003@gmail.com', '082149841325', NULL, '$2y$10$N0vDWd7mH8.g72sGNWXfSOQ1uuc1.vH2GRbne0qO/h3w16q8FiVcu', NULL, 'fransfelix-fredrik-pangkali', 'Publish', NULL, '2024-03-06 04:39:56', '2024-03-06 04:39:56', NULL),
(212, 'Penius', NULL, 'Wisal', NULL, 'wisalpenius16@gmail.com', '081391613030', NULL, '$2y$10$MTi53ihzvX3j1zkbSSPiGejsdXW4/ApwpLUC3D7TD87GxToZTgLOe', NULL, 'peniuswisal', 'Publish', NULL, '2024-03-06 04:40:32', '2024-03-06 04:40:32', NULL),
(213, 'Rostie', 'N.', 'Pangkali', NULL, 'rostienatalie@gmail.com', '082148457650', NULL, '$2y$10$ulDAGG.XKy/XVPCTk8AC5eZ.Rtjg1tdUb1imPB4jOvGlVce91cHvK', NULL, 'rostien-pangkali', 'Publish', NULL, '2024-03-06 04:41:07', '2024-03-08 02:00:38', NULL),
(214, 'Maria', 'Dina', 'Morin', NULL, 'justdimor@gmail.com', '082199151732', NULL, '$2y$10$2oKl6mLA53QiCS3trSZmK.DyBnTmNfwZZSKwVOrodBjYCZHJwFz2u', NULL, 'mariadina-morin', 'Publish', NULL, '2024-03-06 04:41:21', '2024-03-08 01:55:58', NULL),
(215, 'Frans', NULL, 'Dogopia', NULL, 'gmbak105@gmail.com', '082252651998', NULL, '$2y$10$Rq8RKrFnn1sZGPnxxejdBOGApM2fd18dnAz8FwpiZ1mB/a/rEHo2y', NULL, 'fransdogopia', 'Publish', NULL, '2024-03-06 04:42:08', '2024-03-06 04:42:08', NULL),
(216, 'Netty', 'Oktavia', 'Manuri', NULL, 'nettymanuri01@icloud.con', '081240361237', NULL, '$2y$10$9wMoMqrpA5PXLxKcI9j64OT0GqpC3MNSUz3FXISev0CVNegCcXtrG', NULL, 'nettyoktavia-manuri', 'Publish', NULL, '2024-03-06 04:42:08', '2024-03-08 01:58:40', NULL),
(217, 'Imelda', NULL, 'Okoseray', NULL, 'imeldaokoseray3@gmail.com', '082252651998 082239648421', NULL, '$2y$10$7GpMrVSEmWt1G32FI5L9qOdPiyXNu74t8dFQ5H7Dx5FAp3G4sUxz.', NULL, 'imeldaokoseray', 'Publish', NULL, '2024-03-06 04:42:52', '2024-03-06 04:42:52', NULL),
(218, 'Otis', NULL, 'Dawe', NULL, 'otisdawedawe@gmail.com', '081229475147', NULL, '$2y$10$Nyw0W0AaZB5n4IGJ65If6.lBD.XF4Md0DqRhzh33I6W2wLm0M5UH2', NULL, 'otisdawe', 'Publish', NULL, '2024-03-06 04:43:39', '2024-03-06 04:43:39', NULL),
(219, 'Yakob', NULL, 'Ayeri', NULL, 'hansbritay@gmail.com', '081240361910', NULL, '$2y$10$go5YEynNnlj8oSMvPZCeieNnwDO5nRNAhrDNRbg3FQdB6TOwUum.G', NULL, 'yakobariyeri', 'Publish', NULL, '2024-03-06 04:43:39', '2024-03-08 02:11:21', NULL);
INSERT INTO `users` (`id`, `first_name`, `middle_name`, `last_name`, `job_title`, `email`, `phone`, `email_verified_at`, `password`, `picture`, `slug`, `status`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(220, 'Oriwan', NULL, 'Kakyarmabin', NULL, 'oriwan56@gmail.com', '081352521303', NULL, '$2y$10$4eCBvtISDAvQsPCvPyaDv.gt6gA9EIYnPSS51Y7QnH52OCmAx0PaC', NULL, 'oriwankakyarmabin', 'Publish', NULL, '2024-03-06 04:44:40', '2024-03-06 04:44:40', NULL),
(221, 'Yetis', NULL, 'makaian', NULL, 'yetismakaian@gmail.com', '081341253975', NULL, '$2y$10$qrkjtncyb/2mFBd09VKS8.Ykj9YDaaO7FVK8vXs1g4Udwresfi2a.', NULL, 'yetismakaian', 'Publish', NULL, '2024-03-06 04:46:03', '2024-03-06 04:46:03', NULL),
(222, 'Heriyek', NULL, 'Ulunggi', NULL, 'yalifilyalak@gmail.com', '0852-4495-9329', NULL, '$2y$10$ntbBaLsiEmBVow2hfc76bO7SOMgxpQyTiBC7ozz0CKABohL8rdGca', NULL, 'heriyekulunggi', 'Publish', NULL, '2024-03-06 04:46:29', '2024-03-06 04:46:29', NULL),
(223, 'diaspora', NULL, 'thaes', NULL, 'diasporabelakang@gmail.com', '081343301626', NULL, '$2y$10$Cl92VAKgHZ.pCmKOSevgR.88ZkO8CCOJxJbO7h.lignQiTu1IVo1O', NULL, 'diasporathaes', 'Publish', NULL, '2024-03-06 04:47:10', '2024-03-06 04:47:10', NULL),
(224, 'Gladies', NULL, 'Chaterin Kanipa', NULL, 'gladieschaterin@gmail.com', '085354435255', NULL, '$2y$10$Lo3P.B5EKSc46ohi1WGhcuBrvO3.ScMcW/ee5/BnkASIAEybU7fSS', NULL, 'gladieschaterin-kanipa', 'Publish', NULL, '2024-03-06 04:47:20', '2024-03-06 04:47:20', NULL),
(225, 'Axel', 'Thomas Daniello', 'Watori', NULL, 'rachelmansawan00@gmail.com', '082155318096', NULL, '$2y$10$ynYL7EaRcdGnv4vxf/mIQ.EggA7dNtjNBPdFAMA3fFgTMvtyrkDTu', NULL, 'axelthomas-daniello-watori', 'Publish', NULL, '2024-03-06 04:48:08', '2024-03-08 02:02:22', NULL),
(227, 'Yaswanis', NULL, 'wanimbo', NULL, 'wqww863@gmail.com', '082236508813', NULL, '$2y$10$/LEdfWzUtU7spAbv7049TuMDkefZyyboHBJQjWKi00bmJUMrr7PPe', NULL, 'yaswaniswanimbo', 'Publish', NULL, '2024-03-06 04:49:00', '2024-03-06 04:49:00', NULL),
(231, 'Chelsea', NULL, 'Kesya Baneftar', NULL, 'chelseakesya304@gmail.com', '082197834850', NULL, '$2y$10$qDe.XhNeGI2y7Q4goRZs2e2x3RDiiMJzi01S4jd3PkTncEjDoj2De', NULL, 'chelseakesya-baneftar', 'Publish', NULL, '2024-03-06 04:51:07', '2024-03-06 04:51:07', NULL),
(233, 'NURHAIDA', NULL, 'AGNIA R TIANOTAK', NULL, 'nurhaidaagniat@gmail.com', '0812-1100-6042', NULL, '$2y$10$Fz3lUb3KyH.0xF.9k1Bs.unfXrA4SbXZPeU5dfVwijNsDeowA.tnq', NULL, 'nurhaidaagnia-r-tianotak', 'Publish', NULL, '2024-03-06 04:51:57', '2024-03-06 04:51:57', NULL),
(234, 'Apince', NULL, 'Tebay', NULL, 'apincetebayy.farm2021@gmail.com', '081216297025', NULL, '$2y$10$5CJatOvOT7gTGSpZWdXkAeX1vE9RHdjfBmgF97q8mBDWepbYZab8i', NULL, 'apincetebay', 'Publish', NULL, '2024-03-06 04:52:25', '2024-03-06 04:52:25', NULL),
(235, 'Kaila', 'Keren Hapuk', 'Kaikatuy', NULL, 'kailakaikatuy1@gmail.com', '081248432289', NULL, '$2y$10$g.sm73Ps5EltmOt6O7tmrukpRC3Ta7rk1pPZKMRzvH7CNKAjlUZMC', NULL, 'kailakeren-hapuk-kaikatuy', 'Publish', NULL, '2024-03-06 04:52:45', '2024-03-08 01:56:21', NULL),
(237, 'Anastasya', NULL, 'Puspita Sari', NULL, 'anastasyapuspita101@gmail.com', '082249486720', NULL, '$2y$10$UE9HOP7dGuqGGce17vAR0ubfxb5a90DQhdKbHjd4axHKBJfM.VKMW', NULL, 'anastasyapuspita-sari', 'Publish', NULL, '2024-03-06 04:53:58', '2024-03-06 04:53:58', NULL),
(238, 'Yeki', NULL, 'Yalak', NULL, 'yekiyalakne94200@gamil.com', '2021041034088', NULL, '$2y$10$30.rAfO94hbi9XSlwp1hVerdvVtarm1L0mAqs9eFoAVGKoR3FLXTq', NULL, 'yekiyalak', 'Publish', NULL, '2024-03-06 04:55:06', '2024-03-06 04:55:06', NULL),
(239, 'Mutiara', NULL, 'Urkora Karelau', NULL, 'aydenurko@gmail.com', '081213818252', NULL, '$2y$10$wW9ivitrsGHOz2trZW/CoeUq2ep6WHIaq1YW.huRkAuSQIIG0eR1C', NULL, 'mutiaraurkora-karelau', 'Publish', NULL, '2024-03-06 04:55:12', '2024-03-06 04:55:12', NULL),
(240, 'Savira', 'Margaretha', 'Kosay', NULL, 'kossaysavira@gmail.com', '082114395864', NULL, '$2y$10$GexLwXFqzOG5Z3KAALZzeO37O8732Gn2scNkr0sX/EUIbw0MqfCK2', NULL, 'saviramargaretha-kosay', 'Publish', NULL, '2024-03-06 04:56:52', '2024-03-08 02:00:51', NULL),
(241, 'Deasynta', 'Golda', 'Soindemi', NULL, 'soindemi80@gmail.com', '081247788246', NULL, '$2y$10$yoQxXRvxV.0XrRZgJZ930ui5TsXYuOADHc5TYCImSZNWspk7MlM9S', NULL, 'deasyntagoldasoindemi', 'Publish', NULL, '2024-03-08 02:03:01', '2024-03-08 02:03:01', NULL),
(242, 'Iriani', 'Irene', 'Arfusauw', NULL, 'arfusauw@gmail.com', '085233717969', NULL, '$2y$10$S6QMwfjIf4SGNP5ja4vb9OUFFEqegQhi1QHhbCdY8Vuq3PXFxDQKG', NULL, 'irianiirenearfusauw', 'Publish', NULL, '2024-03-08 02:07:23', '2024-03-08 02:07:23', NULL),
(243, 'Martias', NULL, 'Busup', NULL, 'martiasbusup.busup@gmail.com', NULL, NULL, '$2y$10$cKAw6cke86uBWM2C65SG8eybBStD00U/4CKw3rwwMCBlL04UNR7r6', NULL, 'martiasbusup', 'Publish', NULL, '2024-03-08 02:09:19', '2024-03-08 02:09:19', NULL),
(246, 'Lakiek', NULL, 'Kobak', NULL, 'lakiekkobak@gmail.com', NULL, NULL, '$2y$10$MRcrtQ1QrPvobk5la8dP/enKa8QJ8btP2Bm4T1g/X4bOYE0ndwzDm', NULL, 'lakiekkobak', 'Draft', NULL, '2024-03-22 07:23:53', '2024-03-22 07:23:53', NULL),
(247, 'Niadimus', NULL, 'Oso', NULL, 'niadimusoso@gmail.com', NULL, NULL, '$2y$10$aFQc.OthKw8I/2cdEv03gu7r8EAUH4i1qGfzxlh4BRuCDCWASsQXC', NULL, 'niadimusoso', 'Draft', NULL, '2024-03-22 07:24:43', '2024-03-22 07:24:43', NULL),
(248, 'Albertus', NULL, 'Heluka', NULL, 'albertusheluka@gmail.com', NULL, NULL, '$2y$10$HnwW6mVBN2krNVY9GhRg3ejUbxJY6wPli9j8dXER3hLNWI9jrFRS6', NULL, 'albertusheluka', 'Draft', NULL, '2024-03-22 07:25:21', '2024-03-22 07:25:21', NULL),
(249, 'Heni', NULL, 'Kobak', NULL, 'henikobak@gmail.com', NULL, NULL, '$2y$10$XrzsS6LeDcFRwH9qbRnXwOcwJWa8sVL7bAac6Wn9SwOs1Qn/xJlFO', NULL, 'henikobak', 'Draft', NULL, '2024-03-22 07:25:49', '2024-03-22 07:25:49', NULL),
(250, 'Alinus', NULL, 'Aliknoe', NULL, 'alinusaliknoe@gmail.com', NULL, NULL, '$2y$10$DbGBaJwkxQgfZqfRekERIe94OePGa3hSfER1rq5tgqClR4waobyYe', NULL, 'alinusaliknoe', 'Draft', NULL, '2024-03-22 07:26:02', '2024-03-22 07:26:02', NULL),
(251, 'Maikel', NULL, 'Silak', NULL, 'maikelsilak@mail.com', NULL, NULL, '$2y$10$C7x35k61rMMZAAu.775KlukfHwjqBEmm2wQfoFFwZYJmQ.GwxIPN6', NULL, 'maikelsilak', 'Draft', NULL, '2024-03-22 07:26:33', '2024-03-22 07:26:33', NULL),
(252, 'Omil', NULL, 'Bahabol', NULL, 'omilbahabol@mail.com', NULL, NULL, '$2y$10$rO3LdfUrTU2WoxkKxk6kWeEXJTVywnJk3Zq.YO27.4FGobMq2T3kK', NULL, 'omilbahabol', 'Draft', NULL, '2024-03-22 07:27:10', '2024-03-22 07:27:10', NULL),
(253, 'Petrus', NULL, 'Kwebu', NULL, 'petruskwebu@mail.com', NULL, NULL, '$2y$10$VVjtJyHgJc09vpxsjerXdObf9NFgQfbBdxH3lOpgIOcb7Z.9ErYIu', NULL, 'petruskwebu', 'Draft', NULL, '2024-03-22 07:27:40', '2024-03-22 07:27:40', NULL),
(254, 'Anias', NULL, 'Serongan', NULL, 'aniasserongan@mail.com', NULL, NULL, '$2y$10$xKUJc2NNO2Te/vRcT8uqoO9nKLeto8CVBM2yDEc3q7nLTFpw2lqnG', NULL, 'aniasserongan', 'Draft', NULL, '2024-03-22 07:27:44', '2024-03-22 07:27:44', NULL),
(255, 'Semai', NULL, 'Yando', NULL, 'semiyando@mail.com', NULL, NULL, '$2y$10$sZTILuSl94N7YOo.rLkKy.1BAb6dy.DNTO0gbqZfZ/Nzd02qronnW', NULL, 'semaiyando', 'Draft', NULL, '2024-03-22 07:28:15', '2024-03-22 07:28:15', NULL),
(256, 'Septinus', NULL, 'Wetipo', NULL, 'septinuswetipo@mail.com', NULL, NULL, '$2y$10$Q9Q5iPrEFXp6HwicGE0eHOKDMsS51GgzRst.SvX3Wr1DWO.DLc0De', NULL, 'septinuswetipo', 'Draft', NULL, '2024-03-22 07:28:51', '2024-03-22 07:28:51', NULL),
(257, 'Abimael', 'Michael Robby', 'Miram', NULL, 'abimaelmiram@gmail.com', NULL, NULL, '$2y$10$SfxeLOTlSJIX3C7dDZweRuWMOey.tQh9BomqNgVF5tTdH7f9/aBju', NULL, 'abimaelmichael-robbymiram', 'Draft', NULL, '2024-03-22 07:29:14', '2024-03-22 07:29:14', NULL),
(258, 'Yetinus', NULL, 'Kobak', NULL, 'yeniuskabak@mail.com', NULL, NULL, '$2y$10$/01pqPv33yWsvyiX104jFeh9LbQSltAlGr8h6YYOWx9PIJ15aobqG', NULL, 'yetinuskobak', 'Draft', NULL, '2024-03-22 07:29:38', '2024-03-22 07:29:38', NULL),
(259, 'Elia', NULL, 'Itlay', NULL, 'eliaitlay@gmail.com', NULL, NULL, '$2y$10$V5TGUM.YT8HC/nPc5ugvr.Z7Vu0WBTicS.APYECjinIE8GBMKekDa', NULL, 'eliaitlay', 'Draft', NULL, '2024-03-22 07:30:07', '2024-03-22 07:30:07', NULL),
(260, 'Elis', NULL, 'Silip', NULL, 'elissilip@gmail.com', NULL, NULL, '$2y$10$Dhotfq.71WscvSRTUdbRD.TFy1kCLNtOxJNu03D0WwB9EilZ9SHPe', NULL, 'elissilip', 'Draft', NULL, '2024-03-22 07:30:43', '2024-03-22 07:30:43', NULL),
(261, 'Yosem', NULL, 'Suhuniap', NULL, 'yosemsuhuniap@mail.com', NULL, NULL, '$2y$10$O7sARpZxjEpW6oGU2fIXQuRNCYrB4BdpCqHcNGOUX8LP1JCSXUMFG', NULL, 'yosemsuhuniap', 'Draft', NULL, '2024-03-22 07:30:43', '2024-03-22 07:30:43', NULL),
(262, 'Hodani', NULL, 'Kobak', NULL, 'hodanikobat@gmail.com', NULL, NULL, '$2y$10$4wTWZs3AYjv52ebuwb7alOA1gfDYI2SC0c.fdVexBVZrf3jCAVnF.', NULL, 'hodanikobak', 'Draft', NULL, '2024-03-22 07:31:33', '2024-03-22 07:31:33', NULL),
(263, 'Nius', NULL, 'Asso', NULL, 'niusasso@gmail.com', NULL, NULL, '$2y$10$F5x19wF2dty08hb0sfR84ucNa7vwCQzC/UrKSyrjdrb4CXChE2hHe', NULL, 'niusasso', 'Draft', NULL, '2024-03-22 07:32:14', '2024-03-22 07:32:14', NULL),
(264, 'Tiel', NULL, 'Kobak', NULL, 'tielkobak@gmail.com', NULL, NULL, '$2y$10$k/1vpSNpuBax2VkzKamkJuyLL/pPEyW.jJph6k0V35RRuF3XvieNS', NULL, 'tielkobak', 'Draft', NULL, '2024-03-22 07:32:54', '2024-03-22 07:32:54', NULL),
(265, 'Queen', 'Agnel', 'Michiko', NULL, 'queen.agnel.michiko@gmail.com', NULL, NULL, '$2y$10$6lh8yyvmdKKQwZJxl4hb3Ot4FBhkUurYVj/VuOUrJg9I7YFhJoSxm', NULL, 'queenagnelmichiko', 'Draft', NULL, '2024-03-22 07:33:07', '2024-03-22 07:33:07', NULL),
(266, 'Yuspat', NULL, 'Asso', NULL, 'yuspatasso@gmail.com', NULL, NULL, '$2y$10$Ohh3gDAC.yOuZc1zts6ztO3lhnNsHOZHfAi87VvDaxsmMjhdLckJm', NULL, 'yuspatasso', 'Draft', NULL, '2024-03-22 07:33:32', '2024-03-22 07:33:32', NULL),
(267, 'Caroline', 'Maria Rita', 'Bolang', NULL, 'caroline220506@gmail.com', NULL, NULL, '$2y$10$GNOTtq1.ftmMjpMXlP6bBO6EHHrRDNMF7axPVJGjbpjkQH4lN0uFq', NULL, 'carolinemaria-ritabolang', 'Draft', NULL, '2024-03-22 07:34:03', '2024-03-22 07:34:03', NULL),
(268, 'Dimas', 'Ibnu', 'Nugroho', NULL, 'dimasinugroho@gmail.com', NULL, NULL, '$2y$10$HMcMmw.nyvUI1RdXurET...ONioJtDKCqzQy0N4lMEo/h7JtW6rr6', NULL, 'dimasibnunugroho', 'Draft', NULL, '2024-03-22 07:34:40', '2024-03-22 07:34:40', NULL),
(269, 'Enggar', 'Tri', 'Maulana', NULL, 'enggarmlna@gmail.com', NULL, NULL, '$2y$10$sNN3BGy.y18PRgVqmdIy..fpsl2Y5Ag0Dw9Oh5/WtaFduC0VX3SlG', NULL, 'enggartrimaulana', 'Draft', NULL, '2024-03-22 07:35:21', '2024-03-22 07:35:21', NULL),
(270, 'Immanuel', 'Richard', 'Ayorbaba', NULL, 'iangeissler5212@gmail.com', NULL, NULL, '$2y$10$NzzDfu81jR/uNemk/I7Kp./SREr6YHl2AqL9rChwxQ/vB2o/GoD9G', NULL, 'immanuelrichardayorbaba', 'Draft', NULL, '2024-03-22 07:36:02', '2024-03-22 07:36:02', NULL),
(271, 'Aldi', 'Putra', 'Viantara', NULL, 'aldiviantara04@gmail.com', NULL, NULL, '$2y$10$qC8xpZMG9tp6sx8IUvTUL.uisV2xISBQlBosEkIb45cliFB2pjWha', NULL, 'aldiputraviantara', 'Draft', NULL, '2024-03-22 07:36:07', '2024-03-22 07:36:07', NULL),
(272, 'Dewi', 'Gracea Akma Suhemasari', 'Ketaren', NULL, 'dewiketaren07@gmail.com', NULL, NULL, '$2y$10$Kq5eIILOv0NRNuIbPOH9xOnAoArIMvjoGrF5vixtH74CFzp4ILIXa', NULL, 'dewigracea-akma-suhemasariketaren', 'Draft', NULL, '2024-03-22 07:36:47', '2024-03-22 07:36:47', NULL),
(273, 'Tamariska Terra', 'Incognita', 'Abidondifu', NULL, 'tabidondifu18@gmail.com', NULL, NULL, '$2y$10$pjAe37CUUncxuHa9KKYDWun6xt6X5pcZzlz6NT.QMTugphuh7sO8y', NULL, 'tamariska-terraincognitaabidondifu', 'Draft', NULL, '2024-03-22 07:36:51', '2024-03-22 07:36:51', NULL),
(274, 'Gllory', 'Flamengo Lionel', 'Wanimbo', NULL, 'greylione120@gmail.com', NULL, NULL, '$2y$10$4vuCS2c27XPK2jWt60EZSuPe5sgBH6hA5eHOxeZyTgGXrHi2OfNlm', NULL, 'glloryflamengo-lionelwanimbo', 'Draft', NULL, '2024-03-22 07:37:42', '2024-03-22 07:37:42', NULL),
(275, 'Kenny', 'Virginia', 'Johannes', NULL, 'virginiakenny896@gmail.com', NULL, NULL, '$2y$10$HJaaCj01VB0UQtbAO0quKOqFwR1S6E19TJnasxLG1xIHVMYnZVXbe', NULL, 'kennyvirginiajohannes', 'Draft', NULL, '2024-03-22 07:38:17', '2024-03-22 07:38:17', NULL),
(276, 'Magrid', NULL, 'Kogoya', NULL, 'kogoyagwemagrid@gmail.com', NULL, NULL, '$2y$10$uC1CkZ7x7uwN./GHqHh3fuUs0Xc00N6VLUTdilaC91V0yXUF9d3VC', NULL, 'magridkogoya', 'Draft', NULL, '2024-03-22 07:38:52', '2024-03-22 07:38:52', NULL),
(277, 'Renti', 'Br.', 'Tompul', NULL, 'rentisitompul486@gmail.com', NULL, NULL, '$2y$10$xSBRgEKDg4E3rTJJpOP4juG8UI4uQ18WLypid7.xKgos4cXNmYigm', NULL, 'rentibrtompul', 'Draft', NULL, '2024-03-22 07:39:28', '2024-03-22 07:39:28', NULL),
(278, 'Yosua', 'Imanuel', 'Patasik', NULL, 'yosuapatasik52@gmail.com', NULL, NULL, '$2y$10$88PREd5U5FMx8O54RexmreFWWv582XYfbgSYWMEaq00IgYJuYUQ/W', NULL, 'yosuaimanuelpatasik', 'Draft', NULL, '2024-03-22 07:40:43', '2024-03-22 07:40:43', NULL);

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
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=281;

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
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `provinces`
--
ALTER TABLE `provinces`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=250;

--
-- AUTO_INCREMENT for table `student_program`
--
ALTER TABLE `student_program`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;

--
-- AUTO_INCREMENT for table `universitas`
--
ALTER TABLE `universitas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=279;

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
