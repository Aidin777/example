-- phpMyAdmin SQL Dump
-- version 4.4.8
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Июн 25 2019 г., 16:10
-- Версия сервера: 5.6.24
-- Версия PHP: 5.6.10RC1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `example`
--

-- --------------------------------------------------------

--
-- Структура таблицы `future`
--

CREATE TABLE IF NOT EXISTS `future` (
  `id` int(11) NOT NULL,
  `name` varchar(15) DEFAULT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `comment` text
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `future`
--

INSERT INTO `future` (`id`, `name`, `data`, `comment`) VALUES
(2, 'Елена', '2019-06-25 16:06:56', 'Ого!!!'),
(3, 'Евдоким', '2019-06-25 16:07:02', 'Если включить мозги, то всё элементарно Ватсон!!!'),
(4, 'Артемий', '2019-06-25 16:07:07', 'Почему такое сложное задание??? Мне кажется, что нужно быть первоклассным программистом, чтобы выполнить данное задание!!!');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `future`
--
ALTER TABLE `future`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `future`
--
ALTER TABLE `future`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
