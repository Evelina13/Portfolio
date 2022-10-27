-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Сен 08 2022 г., 12:54
-- Версия сервера: 10.4.24-MariaDB
-- Версия PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `eva`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `admin`
--

INSERT INTO `admin` (`id`, `login`, `password`) VALUES
(1, 'admin', '123');

-- --------------------------------------------------------

--
-- Структура таблицы `coffee`
--

CREATE TABLE `coffee` (
  `id` int(11) NOT NULL,
  `img1` varchar(255) NOT NULL,
  `img2` varchar(255) NOT NULL,
  `img3` varchar(255) NOT NULL,
  `img4` varchar(255) NOT NULL,
  `img5` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `coffee`
--

INSERT INTO `coffee` (`id`, `img1`, `img2`, `img3`, `img4`, `img5`) VALUES
(1, '1662633515.jpg', '1662633520.jpg', '1662633523.jpg', '1662633525.jpg', '1662633530.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `text1` varchar(255) NOT NULL,
  `text2` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `gallery`
--

INSERT INTO `gallery` (`id`, `text1`, `text2`, `img`) VALUES
(1, 'asdf', 'asdf', '1.jpg'),
(2, 'asdg', 'adfg', '9.jpg'),
(3, 'fffff', 'sssssssss', '1414 (1).jpg'),
(8, 'Italy', 'Rome', 'shannon-tremaine-NRz7SfpnqUM-unsplash.jpg'),
(9, 'helloo', '435345', 'patrick-tomasso-SVVTZtTGyaU-unsplash.jpg'),
(13, 'armenia', 'erevan', '1662633925.jpg'),
(14, '', '', '1662633914.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `mardiq`
--

CREATE TABLE `mardiq` (
  `id` int(11) NOT NULL,
  `loginner` varchar(255) NOT NULL,
  `passwordner` varchar(255) NOT NULL,
  `tariq` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `mardiq`
--

INSERT INTO `mardiq` (`id`, `loginner`, `passwordner`, `tariq`) VALUES
(1, 'kku', '123', 55),
(2, 'hello', 'world', 66),
(3, 'armenia', 'erevan', 88),
(4, 'diana', 'matashova', 17);

-- --------------------------------------------------------

--
-- Структура таблицы `people`
--

CREATE TABLE `people` (
  `id` int(11) NOT NULL,
  `anun` varchar(15) NOT NULL,
  `azganun` varchar(20) NOT NULL,
  `profession` varchar(30) NOT NULL,
  `ser` varchar(10) NOT NULL,
  `karq` varchar(5) NOT NULL,
  `cnndtiv` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `people`
--

INSERT INTO `people` (`id`, `anun`, `azganun`, `profession`, `ser`, `karq`, `cnndtiv`) VALUES
(1, 'ксения', 'маташова', 'графический дизайнер', 'женский', 'да', '2012-07-18'),
(2, 'зоя', 'гореян', 'био-химик', 'женский', 'да', '2014-12-12'),
(3, 'валентина', 'капустина', 'менеджер', 'женский', 'нет', '2015-08-12'),
(4, 'мушех', 'чолоян', 'пластический хирург', 'мужской', 'да', '2005-08-16'),
(5, 'тигран', 'балаян', 'стоматолог', 'мужской', 'нет', '2002-08-14'),
(6, 'владимир', 'жуковский', 'врач', 'мужской', 'нет', '2017-03-21');

-- --------------------------------------------------------

--
-- Структура таблицы `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `text1` varchar(255) NOT NULL,
  `text2` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `top` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `portfolio`
--

INSERT INTO `portfolio` (`id`, `text1`, `text2`, `img`, `top`, `type`) VALUES
(6, 'Great Britain', 'London', '1661859398.jpg', 'yes', 'inbound'),
(7, 'France', 'Paris', 'rafael-miranda-HRxkGGBn3eA-unsplash.jpg', 'yes', 'inbound'),
(8, 'German', 'Berlin', 'claudio-schwarz-TScGhJM716g-unsplash.jpg', 'yes', 'outbound'),
(9, 'USA', 'New York', 'patrick-tomasso-SVVTZtTGyaU-unsplash.jpg', 'yes', 'outbound'),
(11, 'Netherlands', 'Amsterdam', 'azhar-j-t2hgHV1R7_g-unsplash.jpg', 'yes', 'inbound'),
(12, 'zzzzzzzzzzz', 'aaaaaaaaaaaaa', '1658913665.jpg', 'yes', 'outbound'),
(14, 'armenia', 'erevan', '1661859288.jpg', 'yes', 'outbound'),
(17, 'ddddddd', 'vvvvvvvvvv', '1661858575.jpg', 'yes', 'outbound');

-- --------------------------------------------------------

--
-- Структура таблицы `rain`
--

CREATE TABLE `rain` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `rain`
--

INSERT INTO `rain` (`id`, `img`) VALUES
(1, '1.jpg'),
(2, '2.jpg'),
(3, '3.jpg'),
(4, '4.jpg'),
(5, '5.jpg'),
(6, '6.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `vzgo`
--

CREATE TABLE `vzgo` (
  `id` int(11) NOT NULL,
  `text1` varchar(255) NOT NULL,
  `text2` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `vzgo`
--

INSERT INTO `vzgo` (`id`, `text1`, `text2`, `img`) VALUES
(1, 'dfghjk', '2345678', '1.jpg'),
(2, 'szkfh', 'gfxjrtfg\r\n', '2.jpg'),
(3, 'mkvyfm', 'dfhtgyu', '3.jpg'),
(4, 'bcfgj', 'dgdhbdfuj', '4.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `wow`
--

CREATE TABLE `wow` (
  `id` int(11) NOT NULL,
  `text1` varchar(255) NOT NULL,
  `text2` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `wow`
--

INSERT INTO `wow` (`id`, `text1`, `text2`, `img`) VALUES
(1, 'ooooooooo', 'vvvvvvvvvvvvvv', '1.jpg'),
(2, 'wwwwwwwwww', 'wsssssssssssss', '2.jpg\r\n'),
(3, 'ccccccccccc', 'dddddddddddd', '3.jpg'),
(4, '9', '8', '13.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `coffee`
--
ALTER TABLE `coffee`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `mardiq`
--
ALTER TABLE `mardiq`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `rain`
--
ALTER TABLE `rain`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `vzgo`
--
ALTER TABLE `vzgo`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `wow`
--
ALTER TABLE `wow`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `coffee`
--
ALTER TABLE `coffee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `mardiq`
--
ALTER TABLE `mardiq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `people`
--
ALTER TABLE `people`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT для таблицы `rain`
--
ALTER TABLE `rain`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `vzgo`
--
ALTER TABLE `vzgo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `wow`
--
ALTER TABLE `wow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
