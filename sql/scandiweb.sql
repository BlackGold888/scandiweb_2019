-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Мар 24 2019 г., 17:43
-- Версия сервера: 10.1.37-MariaDB
-- Версия PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `scandiweb`
--

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `sku` varchar(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `size` float DEFAULT NULL,
  `weight` int(11) DEFAULT NULL,
  `height` int(11) DEFAULT NULL,
  `width` int(11) DEFAULT NULL,
  `length` int(11) DEFAULT NULL,
  `type` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `sku`, `name`, `price`, `size`, `weight`, `height`, `width`, `length`, `type`) VALUES
(48, 'JVC200123', 'Disc1', 10, 512, NULL, NULL, NULL, NULL, 'disc'),
(49, 'JVC200124', 'Disc2', 10.01, 1024, NULL, NULL, NULL, NULL, 'disc'),
(50, 'JVC200125', 'Disc3', 10.02, 2048, NULL, NULL, NULL, NULL, 'disc'),
(51, 'JVC200126', 'Disc4', 10.03, 124, NULL, NULL, NULL, NULL, 'disc'),
(52, 'GGWP0007', 'Book1', 10, NULL, 2, NULL, NULL, NULL, 'book'),
(53, 'GGWP0008', 'Book2', 10, NULL, 1, NULL, NULL, NULL, 'book'),
(54, 'GGWP0009', 'Book3', 10.12, NULL, 2, NULL, NULL, NULL, 'book'),
(55, 'GGWP0010', 'Book4', 10.12, NULL, 1, NULL, NULL, NULL, 'book'),
(56, 'TR120555', 'Chair', 10, NULL, NULL, 24, 45, 15, 'furniture'),
(57, 'TR120556', 'Table', 11, NULL, NULL, 42, 43, 23, 'furniture'),
(58, 'TR120557', 'Chair2', 123, NULL, NULL, 24, 45, 15, 'furniture'),
(59, 'TR120558', 'Table2', 11.13, NULL, NULL, 32, 13, 4, 'furniture');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
