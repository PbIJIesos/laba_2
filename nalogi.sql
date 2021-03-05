-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 05 2021 г., 06:29
-- Версия сервера: 10.3.13-MariaDB
-- Версия PHP: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `laba_2`
--

-- --------------------------------------------------------

--
-- Структура таблицы `nalogi`
--

CREATE TABLE `nalogi` (
  `id` int(11) NOT NULL,
  `OOO` varchar(50) NOT NULL,
  `type_of_tax` varchar(50) NOT NULL,
  `payment_date` date NOT NULL,
  `deadline` date NOT NULL,
  `tax_amount` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `nalogi`
--

INSERT INTO `nalogi` (`id`, `OOO`, `type_of_tax`, `payment_date`, `deadline`, `tax_amount`) VALUES
(1, 'Моя Оборона', 'Гос пошлина', '2021-03-01', '2021-03-05', 123123),
(2, 'Сатурн', 'НДПИ(Налог на добычу полезных ископаемых)', '2021-02-16', '2021-03-05', 5000000),
(3, 'Олимп', 'Земельный налог', '2021-01-14', '2021-03-05', 800000),
(104, 'asdasd', 'asdasd', '2021-03-05', '2021-03-05', 123),
(132, 'asdasdad', 'asdas', '2021-03-05', '2021-03-05', 12314);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `nalogi`
--
ALTER TABLE `nalogi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `nalogi`
--
ALTER TABLE `nalogi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
