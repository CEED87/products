-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:8889
-- Время создания: Июн 24 2022 г., 11:05
-- Версия сервера: 5.7.34
-- Версия PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `market`
--

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `sku` varchar(40) DEFAULT NULL,
  `name` varchar(40) DEFAULT NULL,
  `price` varchar(40) DEFAULT NULL,
  `type` varchar(40) DEFAULT NULL,
  `weight` varchar(40) DEFAULT NULL,
  `size` varchar(40) DEFAULT NULL,
  `length` varchar(40) DEFAULT NULL,
  `width` varchar(40) DEFAULT NULL,
  `height` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `sku`, `name`, `price`, `type`, `weight`, `size`, `length`, `width`, `height`) VALUES
(142, 'GGWP7654', 'Chir', '10.00', 'Furniture', 'NULL', 'NULL', '222', '23', '2342'),
(145, 'FFQP3645', 'War and pace', '34.00', 'Book', '1234', 'NULL', 'NULL', 'NULL', 'NULL'),
(148, 'GGWP0008', 'Chir', '20.00', 'Furniture', 'NULL', 'NULL', '678', '3243', '2342'),
(149, 'GGWP0022', 'War and pace', '100.00', 'Book', '500', 'NULL', 'NULL', 'NULL', 'NULL'),
(150, 'GGWP0032', 'Chir', '50.00', 'Furniture', 'NULL', 'NULL', '60', '60', '2342'),
(151, 'GGWP7633', 'Chir', '100.00', 'Furniture', 'NULL', 'NULL', '60', '60', '60'),
(152, 'GGWP7632', 'War and pace', '100.00', 'Book', '500', 'NULL', 'NULL', 'NULL', 'NULL'),
(153, 'GGWP7632', 'War and pace', '100.00', 'Book', '500', 'NULL', 'NULL', 'NULL', 'NULL'),
(154, 'GGWP7632', 'War and pace', '100.00', 'Book', '500', 'NULL', 'NULL', 'NULL', 'NULL'),
(155, 'GGWP7632', 'War and pace', '100.00', 'Book', '500', 'NULL', 'NULL', 'NULL', 'NULL'),
(156, 'GGWP7632', 'War and pace', '100.00', 'Book', '500', 'NULL', 'NULL', 'NULL', 'NULL');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=157;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
