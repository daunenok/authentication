-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 26 2017 г., 11:27
-- Версия сервера: 5.7.16
-- Версия PHP: 7.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `login`
--

-- --------------------------------------------------------

--
-- Структура таблицы `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `login`
--

INSERT INTO `login` (`id`, `username`, `pass`) VALUES
(1, 'user123', '$2y$10$nR9b9isCZt3z2sy.6UxBSOiT3LHF688dPADNhJXb6hav.1/2Vr5O2'),
(2, 'user456', '$2y$10$43pE691XzUcdlboh43fVCuGFKMp3uYETMm1QVoniqu8gWEy8Md9UO'),
(12, 'user789', '$2y$10$9SSACkXIeusxduDpQ7lXYesFlQ7rCNEb0ahlh.lsHBM5DslSkIzYO'),
(13, 'user159', '$2y$10$O6cJtgR4EC1W8dO/MDhDzebZVqDzJI3pvmLCh5uI0e/Z4DSKlDNpG');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
