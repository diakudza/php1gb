-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 30 2021 г., 22:46
-- Версия сервера: 8.0.19
-- Версия PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `phpgb`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cart`
--

CREATE TABLE `cart` (
  `id` int NOT NULL,
  `id_good` int NOT NULL,
  `count` int NOT NULL DEFAULT '1',
  `data` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `userid` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `cart`
--

INSERT INTO `cart` (`id`, `id_good`, `count`, `data`, `userid`) VALUES
(31, 3, 1, '2021-11-28 11:43:04', 0),
(32, 10, 1, '2021-11-28 11:43:16', 0),
(33, 1, 1, '2021-11-28 11:43:56', 0),
(34, 1, 1, '2021-11-28 13:26:56', 0),
(35, 2, 1, '2021-11-28 18:23:43', 0),
(36, 5, 1, '2021-11-28 18:40:04', 0),
(37, 2, 1, '2021-11-28 19:47:02', 0),
(38, 3, 1, '2021-11-28 19:47:06', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `idCategory` int NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`idCategory`, `description`) VALUES
(1, 'For women'),
(2, 'For men'),
(3, 'For kids'),
(4, 'Accessories');

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE `goods` (
  `id` int NOT NULL,
  `title` varchar(20) NOT NULL DEFAULT 'Заголовоктовара',
  `description` varchar(250) NOT NULL DEFAULT 'Описание товара',
  `count` int NOT NULL DEFAULT '1',
  `price` int NOT NULL,
  `photo` varchar(50) NOT NULL,
  `category` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`id`, `title`, `description`, `count`, `price`, `photo`, `category`) VALUES
(1, 'Куртка', 'Описание товара', 1, 200, 'product-card1.png', 2),
(2, 'Костюм', 'Описание товара', 5, 100, 'product-card2.png', 1),
(3, 'MANGO PEOPLE T-SHIRT', 'Описание товара', 1, 300, 'product-card3.png', 2),
(4, 'Брюки', 'Описание товара', 2, 150, 'product-card4.png', 2),
(5, 'Педжак', 'Описание товара', 2, 150, 'product-card5.png', 1),
(6, 'Рубашка', 'Описание товара', 3, 40, 'product-card6.png', 1),
(7, 'Футболка', 'Описание товара', 2, 150, 'product-card7.png', 2),
(8, 'Бейсболка', 'Описание товара', 10, 100, 'product-card8.png', 2),
(9, 'Рубашка', 'Описание товара', 7, 354, 'product-card9.png', 2),
(10, 'Куртка ', 'Кожанная куртка \"Косуха\"', 4, 600, 'product-card10.png', 2),
(11, 'Рубашка', 'Описание товара', 2, 150, 'product-card11.png', 2),
(12, 'Рубашка', 'Описание товара', 3, 353, 'product-card12.png', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `pic`
--

CREATE TABLE `pic` (
  `id` int NOT NULL,
  `name` varchar(20) NOT NULL,
  `size` int NOT NULL,
  `serverpath` varchar(200) NOT NULL,
  `counts` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `pic`
--

INSERT INTO `pic` (`id`, `name`, `size`, `serverpath`, `counts`) VALUES
(16, '1560838551_1.jpg', 134916, 'D:MihaOSPaneluserdata	empphpA149.tmp', 0),
(17, '1560838578_8.jpg', 121646, 'D:MihaOSPaneluserdata	empphp312A.tmp', 2),
(18, '1560838591_2.jpg', 110409, 'D:MihaOSPaneluserdata	empphp440F.tmp', 0),
(19, '1560838603_7.jpg', 58540, 'D:MihaOSPaneluserdata	empphp7C3F.tmp', 7),
(20, '1560838613_5.jpg', 84693, 'D:MihaOSPaneluserdata	empphp9175.tmp', 0),
(21, '1560838613_5.jpg', 84693, 'D:MihaOSPaneluserdata	empphpA5EF.tmp', 0),
(22, '1560838615_3.jpg', 96611, 'D:MihaOSPaneluserdata	empphpC3CC.tmp', 0),
(23, '1560838633_9.jpg', 83029, 'D:MihaOSPaneluserdata	empphpDF1A.tmp', 0),
(24, '1560838636_4.jpg', 48248, 'D:MihaOSPaneluserdata	empphpF26D.tmp', 0),
(25, '1560838636_4.jpg', 48248, 'D:MihaOSPaneluserdata	empphp652D.tmp', 0),
(26, '1560838636_4.jpg', 48248, 'D:MihaOSPaneluserdata	empphpE3DE.tmp', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `review`
--

CREATE TABLE `review` (
  `id_review` int NOT NULL,
  `good_id` int NOT NULL,
  `user_id` int NOT NULL,
  `text` varchar(300) NOT NULL,
  `data` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `review`
--

INSERT INTO `review` (`id_review`, `good_id`, `user_id`, `text`, `data`) VALUES
(1, 1, 24, 'Отличный товар', '2021-11-30 21:57:44'),
(2, 1111, 24, 'adasdadad', '2021-11-30 22:43:01'),
(3, 1, 24, 'dasddad', '2021-11-30 22:43:15'),
(4, 1, 24, 'dasddad', '2021-11-30 22:43:46');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `idUser` int NOT NULL,
  `login` varchar(20) NOT NULL,
  `pass` varchar(100) DEFAULT NULL,
  `lastname` varchar(20) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `sex` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`idUser`, `login`, `pass`, `lastname`, `firstname`, `sex`) VALUES
(24, 'diakudza@gmail.com', '202cb962ac59075b964b07152d234b70', 'Mikhail', 'Dyakov', 'famale');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`idCategory`);

--
-- Индексы таблицы `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `pic`
--
ALTER TABLE `pic`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `review`
--
ALTER TABLE `review`
  ADD UNIQUE KEY `review_id_review_uindex` (`id_review`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`),
  ADD UNIQUE KEY `user_login_uindex` (`login`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `idCategory` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `goods`
--
ALTER TABLE `goods`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `pic`
--
ALTER TABLE `pic`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT для таблицы `review`
--
ALTER TABLE `review`
  MODIFY `id_review` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
