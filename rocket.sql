-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 02 2021 г., 13:22
-- Версия сервера: 5.7.29
-- Версия PHP: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `rocket`
--

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `text` text NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `text`, `data`) VALUES
(1, 'Акции на размещение баннерного панно 20% до конца июля', '2021-07-01 12:35:28'),
(2, 'Мы работаем в обычном режиме с 15 июня!', '2021-07-01 12:36:32'),
(3, 'Как правильно подобрать рекламный канал?', '2021-07-01 12:36:49'),
(4, 'Акции на размещение баннерного панно 20% до конца июля 2', '2021-07-01 12:51:12'),
(5, 'Мы работаем в обычном режиме с 15 июня! 2', '2021-07-01 12:51:27'),
(6, 'Как правильно подобрать рекламный канал? 2', '2021-07-01 12:51:42'),
(7, 'Акции на размещение баннерного панно 20% до конца июля 3', '2021-07-01 12:52:17'),
(8, 'Мы работаем в обычном режиме с 15 июня! 3', '2021-07-01 12:52:27'),
(9, 'Как правильно подобрать рекламный канал? 3', '2021-07-01 12:52:37');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
