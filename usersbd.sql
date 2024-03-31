-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Час створення: Бер 31 2024 р., 15:02
-- Версія сервера: 8.0.30
-- Версія PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `usersbd`
--

-- --------------------------------------------------------

--
-- Структура таблиці `records`
--

CREATE TABLE `records` (
  `record_id` int NOT NULL,
  `user_id` int DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_520_ci,
  `preview_image` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `creation_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Дамп даних таблиці `records`
--

INSERT INTO `records` (`record_id`, `user_id`, `title`, `content`, `preview_image`, `creation_date`) VALUES
(1, 1, 'Перший запис користувача 1', 'Це вміст першого запису користувача 1.', 'image1.jpg', '2024-03-28'),
(2, 1, 'Другий запис користувача 1', 'Це вміст другого запису користувача 1.', 'image2.jpg', '2024-03-29'),
(3, 2, 'Перший запис користувача 2', 'Це вміст першого запису користувача 2.', 'image3.jpg', '2024-03-30'),
(4, 3, 'Перший запис користувача 3', 'Це вміст першого запису користувача 3.', 'image4.jpg', '2024-03-31');

-- --------------------------------------------------------

--
-- Структура таблиці `users`
--

CREATE TABLE `users` (
  `user_id` int NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Дамп даних таблиці `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`) VALUES
(1, 'user1', 'user1@example.com'),
(2, 'user2', 'user2@example.com'),
(3, 'user3', 'user3@example.com');

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`record_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Індекси таблиці `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Обмеження зовнішнього ключа збережених таблиць
--

--
-- Обмеження зовнішнього ключа таблиці `records`
--
ALTER TABLE `records`
  ADD CONSTRAINT `records_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
