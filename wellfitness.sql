-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Мар 16 2024 г., 07:36
-- Версия сервера: 10.4.28-MariaDB
-- Версия PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `wellfitness`
--

-- --------------------------------------------------------

--
-- Структура таблицы `appeal`
--

CREATE TABLE `appeal` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `text` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `appeal`
--

INSERT INTO `appeal` (`id`, `username`, `email`, `text`) VALUES
(1, 'Юлия', 'jtimenova@rambler.ru', 'Добрый день!'),
(2, 'Юлия', 'jtimenova@rambler.ru', 'Как узнать, если товар в наличии? '),
(3, 'Юлия', 'jtimenova@gmail.com', 'Интересует беговая дорожка. Как приобрести?'),
(4, 'admin', 'admin@bk.ru', 'сообщение 1'),
(5, 'Юлия', 'jtimenova@rambler.ru', 'сообщение 2'),
(6, 'Евгений', 'evg@mail.ru', 'Здравствуйте, нужна консультация по товару. '),
(7, 'Евгений', 'evg@mail.ru', 'Здравствуйте, как связаться с менеджером? ');

-- --------------------------------------------------------

--
-- Структура таблицы `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `blog`
--

INSERT INTO `blog` (`id`, `image`, `title`, `text`, `date`) VALUES
(1, '1.png', 'В продажу поступили тренажеры Nautilus', 'Представляем тренажеры Nautilus 626 серии.', '2021-07-18'),
(2, '2.png', 'В продажу поступили тренажеры Nautilus', 'Представляем тренажеры Nautilus 626 серии.', '2021-07-18'),
(3, '3.png', 'В продажу поступили тренажеры Nautilus', 'Представляем тренажеры Nautilus 626 серии.', '2021-07-18'),
(4, '5.png', 'В продажу поступили тренажеры Nautilus', 'Представляем тренажеры Nautilus 626 серии.', '2021-07-18'),
(5, '4.png', 'В продажу поступили тренажеры Nautilus', 'Представляем тренажеры Nautilus 626 серии.', '2021-07-18'),
(6, '1.png', 'В продажу поступили тренажеры Nautilus', 'Представляем тренажеры Nautilus 626 серии.', '2021-07-18'),
(7, '3.png', 'В продажу поступили тренажеры Nautilus', 'Представляем тренажеры Nautilus 626 серии.', '2021-07-18'),
(8, '5.png', 'В продажу поступили тренажеры Nautilus', 'Представляем тренажеры Nautilus 626 серии.', '2021-07-18'),
(9, '2.png', 'В продажу поступили тренажеры Nautilus', 'Представляем тренажеры Nautilus 626 серии.', '2021-07-18'),
(10, '1.png', 'В продажу поступили тренажеры Nautilus', 'Представляем тренажеры Nautilus 626 серии.', '2021-07-18'),
(11, '4.png', 'В продажу поступили тренажеры Nautilus', 'Представляем тренажеры Nautilus 626 серии.', '2021-07-18'),
(12, '3.png', 'В продажу поступили тренажеры Nautilus', 'Представляем тренажеры Nautilus 626 серии.', '2021-07-18');

-- --------------------------------------------------------

--
-- Структура таблицы `bowflex`
--

CREATE TABLE `bowflex` (
  `id` int(11) NOT NULL,
  `image` varchar(250) NOT NULL,
  `title` varchar(250) NOT NULL,
  `current_price` int(100) NOT NULL,
  `old_price` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `bowflex`
--

INSERT INTO `bowflex` (`id`, `image`, `title`, `current_price`, `old_price`) VALUES
(1, 'product.png', 'Беговая дорожка Bowflex BXT128', 1199900, 1354900);

-- --------------------------------------------------------

--
-- Структура таблицы `brands`
--

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `brands`
--

INSERT INTO `brands` (`id`, `image`) VALUES
(1, '1.png'),
(2, '2.png'),
(3, '3.png'),
(4, '4.png'),
(5, '5.png'),
(6, '6.png'),
(7, '7.png'),
(8, '8.png'),
(9, '9.png'),
(10, '10.png'),
(11, '11.png'),
(12, '12.png'),
(13, '13.png'),
(14, '14.png'),
(15, '15.png'),
(16, '16.png'),
(17, '17.png'),
(18, '18.png'),
(19, '19.png'),
(20, '20.png'),
(21, '21.png'),
(22, '22.png'),
(23, '23.png');

-- --------------------------------------------------------

--
-- Структура таблицы `call_request`
--

CREATE TABLE `call_request` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `call_request`
--

INSERT INTO `call_request` (`id`, `username`, `phone`) VALUES
(1, 'Юлия', '+7 932 054-39-14'),
(2, 'Ксения', '+7 932 054-39-15');

-- --------------------------------------------------------

--
-- Структура таблицы `catalog`
--

CREATE TABLE `catalog` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `current_price` varchar(255) NOT NULL,
  `old_price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `catalog`
--

INSERT INTO `catalog` (`id`, `title`, `current_price`, `old_price`, `image`) VALUES
(1, 'Беговая дорожка CardioPower <br>\r\nS35', '1134900', '1154900', '1.jpg'),
(2, 'Беговая дорожка CardioPower <br>\r\nT20 Plus', '34900', '44900', '2.jpg'),
(3, 'Беговая дорожка CardioPower <br>\r\nT20 Plus', '34900', '44900', '3.jpg'),
(4, 'Беговая дорожка CardioPower <br>\r\nT20 Plus', '34900', '44900', '4.jpg'),
(5, 'Беговая дорожка CardioPower <br>\r\nS35', '1134900', '1154900', '1.jpg'),
(6, 'Беговая дорожка CardioPower <br>\r\nT20 Plus', '34900', '44900', '2.jpg'),
(7, 'Беговая дорожка CardioPower <br>\r\nT20 Plus', '34900', '44900', '3.jpg'),
(8, 'Беговая дорожка CardioPower <br>\r\nT20 Plus', '34900', '44900 ', '4.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `favorites`
--

CREATE TABLE `favorites` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `current_price` int(50) NOT NULL,
  `old_price` int(50) NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `favorites`
--

INSERT INTO `favorites` (`id`, `image`, `title`, `current_price`, `old_price`, `user_id`) VALUES
(1, 'product.png', 'Беговая дорожка Bowflex BXT128', 1199900, 1354900, 2),
(2, '2.jpg', 'Беговая дорожка CardioPower <br>\r\nT20 Plus', 34900, 44900, 2),
(3, '4.jpg', 'Беговая дорожка CardioPower <br>\r\nT20 Plus', 34900, 44900, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `for-fitness`
--

CREATE TABLE `for-fitness` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `link1` varchar(255) NOT NULL,
  `span1` int(11) NOT NULL,
  `line1` varchar(255) NOT NULL,
  `link2` varchar(255) NOT NULL,
  `span2` int(11) NOT NULL,
  `line2` varchar(255) NOT NULL,
  `link3` varchar(255) DEFAULT NULL,
  `span3` int(11) DEFAULT NULL,
  `line3` varchar(255) DEFAULT NULL,
  `link4` varchar(255) DEFAULT NULL,
  `span4` int(11) DEFAULT NULL,
  `line4` varchar(255) DEFAULT NULL,
  `link5` varchar(255) DEFAULT NULL,
  `span5` int(11) DEFAULT NULL,
  `line5` varchar(255) DEFAULT NULL,
  `link6` varchar(255) DEFAULT NULL,
  `span6` int(11) DEFAULT NULL,
  `line6` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `for-fitness`
--

INSERT INTO `for-fitness` (`id`, `image`, `title`, `link1`, `span1`, `line1`, `link2`, `span2`, `line2`, `link3`, `span3`, `line3`, `link4`, `span4`, `line4`, `link5`, `span5`, `line5`, `link6`, `span6`, `line6`) VALUES
(1, '1.png', 'Кардиотренажеры', 'Беговые дорожки', 57, 'line.png', 'Эллиптические тренажеры', 12, 'line.png', 'Велотренажеры', 57, 'line.png', 'Cтепперы', 3, 'line.png', 'Гребные тренажеры', 16, 'line.png', 'Сайклинг', 18, 'line.png'),
(2, '2.png', 'Силовые тренажеры', 'Грузоблочные', 57, 'line.png', 'Нагружаемые дисками', 12, 'line.png', 'Мультистанции', 57, 'line.png', 'Рамы и комплексы', 3, 'line.png', 'Скамьи, стойки', 16, 'line.png', NULL, NULL, NULL),
(3, '3.png', 'Функциональный тренинг', 'Комплексы для ФТ', 57, 'line.png', 'Горнолыжные тренажеры', 12, 'line.png', 'Slide&FIT', 57, 'line.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, '4.png', 'Свободные веса', 'Гантели и гантельные ряды', 57, 'line.png', 'Гири', 12, 'line.png', 'Диски и грифы', 57, 'line.png', 'Стойки и хранение', 3, 'line.png', NULL, NULL, NULL, NULL, NULL, NULL),
(5, '5.png', 'Аэробика', 'Аэробика', 57, 'line.png', 'Для групповых программ', 12, 'line.png', 'Для персонального тренинга', 57, 'line.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, '6.png', 'Массажное оборудование', 'Бесконтактные гидромассажные ванны', 57, 'line.png', 'Солярии', 12, 'line.png', 'Массажные столы', 57, 'line.png', 'Массажеры', 10, 'line.png', NULL, NULL, NULL, NULL, NULL, NULL),
(7, '7.png', 'Реабилитация и спортивная медицина', 'Диагностические комплексы', 57, 'line.png', 'Реабилитационные тренажеры', 23, 'line.png', 'Фитнес тестирование', 12, 'line.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, '1.png', 'Кардиотренажеры', 'Беговые дорожки', 57, 'line.png', 'Эллиптические тренажеры', 12, 'line.png', 'Велотренажеры', 57, 'line.png', 'Cтепперы', 3, 'line.png', 'Гребные тренажеры', 16, 'line.png', 'Сайклинг', 18, 'line.png'),
(9, '2.png', 'Силовые тренажеры', 'Грузоблочные', 57, 'line.png', 'Нагружаемые дисками', 12, 'line.png', 'Мультистанции', 57, 'line.png', 'Рамы и комплексы', 3, 'line.png', 'Скамьи, стойки', 16, 'line.png', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `for-home`
--

CREATE TABLE `for-home` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `link1` varchar(255) NOT NULL,
  `span1` int(11) NOT NULL,
  `line1` varchar(255) NOT NULL,
  `link2` varchar(255) NOT NULL,
  `span2` int(11) NOT NULL,
  `line2` varchar(255) NOT NULL,
  `link3` varchar(255) DEFAULT NULL,
  `span3` int(11) DEFAULT NULL,
  `line3` varchar(255) DEFAULT NULL,
  `link4` varchar(255) DEFAULT NULL,
  `span4` int(11) DEFAULT NULL,
  `line4` varchar(255) DEFAULT NULL,
  `link5` varchar(255) DEFAULT NULL,
  `span5` int(11) DEFAULT NULL,
  `line5` varchar(255) DEFAULT NULL,
  `link6` varchar(255) DEFAULT NULL,
  `span6` int(11) DEFAULT NULL,
  `line6` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `for-home`
--

INSERT INTO `for-home` (`id`, `image`, `title`, `link1`, `span1`, `line1`, `link2`, `span2`, `line2`, `link3`, `span3`, `line3`, `link4`, `span4`, `line4`, `link5`, `span5`, `line5`, `link6`, `span6`, `line6`) VALUES
(1, '1.png', 'Кардиотренажеры', 'Беговые дорожки', 57, 'line.png', 'Эллиптические <br> тренажеры', 23, 'line.png', 'Велотренажеры', 12, 'line.png', 'Cтепперы', 10, 'line.png', 'Гребные тренажеры', 15, 'line.png', 'Сайклинг', 20, 'line.png'),
(2, '2.png', 'Силовые тренажеры', 'Мультистанции', 57, 'line.png', 'Рамы и комплексы', 23, 'line.png', 'Скамьи', 12, 'line.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, '3.png', 'Уличные виды спорта', 'Батуты', 57, 'line.png', 'Баскетбол', 23, 'line.png', 'Футбол', 12, 'line.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, '4.png', 'Свободные веса', 'Гантели и <br> гантельные ряды', 57, 'line.png', 'Гири', 23, 'line.png', 'Диски и грифы', 12, 'line.png', 'Стойки и хранение', 10, 'line.png', NULL, NULL, NULL, NULL, NULL, NULL),
(5, '5.png', 'Игровые столы', 'Аэрохоккей', 57, 'line.png', 'Настольный футбол', 23, 'line.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, '6.png', 'Массажное оборудование', 'Массажные кресла', 57, 'line.png', 'Массажеры', 23, 'line.png', 'Массажные столы', 12, 'line.png', 'Бесконтактные <br> гидромассажные ванны', 10, 'line.png', NULL, NULL, NULL, NULL, NULL, NULL),
(7, '7.png', 'Фитнес аксессуары', 'Йога и пилатес', 57, 'line.png', 'Фитнес аксессуары', 23, 'line.png', 'Эспандеры', 12, 'line.png', 'Массажные аксессуары', 10, 'line.png', 'Тяги и рукоятки', 15, 'line.png', NULL, NULL, NULL),
(8, '8.png', 'Функциональный тренинг', 'Функциональные петли <br> Variosling', 57, 'line.png', 'Тренировочный комплекс <br> HyGear', 23, 'line.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `image`, `title`, `text`, `date`) VALUES
(1, 'news1.png', 'В продажу поступили тренажеры Nautilus', 'Представляем тренажеры Nautilus 626 серии.', '2021-07-18'),
(2, 'news2.png', 'В продажу поступили тренажеры Nautilus', 'Представляем тренажеры Nautilus 626 серии.', '2021-07-18'),
(3, 'news3.png', 'В продажу поступили тренажеры Nautilus', 'Представляем тренажеры Nautilus 626 серии.', '2021-07-18'),
(4, 'news4.png', 'В продажу поступили тренажеры Nautilus', 'Представляем тренажеры Nautilus 626 серии.', '2021-07-18');

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `current_price` int(50) NOT NULL,
  `old_price` int(50) NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `image`, `title`, `current_price`, `old_price`, `user_id`) VALUES
(1, '2.jpg', 'Беговая дорожка CardioPower <br>\r\nT20 Plus', 34900, 44900, 2),
(2, 'product.png', 'Беговая дорожка Bowflex BXT128', 1199900, 1354900, 2),
(3, '1.jpg', 'Беговая дорожка CardioPower <br>\r\nS35', 1134900, 1154900, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `promotion`
--

CREATE TABLE `promotion` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `current_price` varchar(255) NOT NULL,
  `old_price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `promotion`
--

INSERT INTO `promotion` (`id`, `title`, `current_price`, `old_price`, `image`) VALUES
(1, 'Беговая дорожка CardioPower <br> S35', '1134900', '1154900', '1.jpg'),
(2, 'Беговая дорожка CardioPower <br>\r\nT20 Plus', '34900', '44900', '2.jpg'),
(3, 'Беговая дорожка CardioPower <br>\r\nT20 Plus', '34900', '44900', '3.jpg'),
(4, 'Беговая дорожка CardioPower <br>\r\nT20 Plus', '34900', '44900', '4.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `service`
--

INSERT INTO `service` (`id`, `image`, `title`, `text`) VALUES
(1, '1.png', 'Видео-инструкция тренажеры Nautilus', 'Представляем тренажеры Nautilus 626 серии.'),
(2, '2.png', 'Видео-инструкция тренажеры Nautilus', 'Представляем тренажеры Nautilus 626 серии.'),
(3, '3.png', 'Видео-инструкция тренажеры Nautilus', 'Представляем тренажеры Nautilus 626 серии.'),
(4, '2.png', 'Видео-инструкция тренажеры Nautilus', 'Представляем тренажеры Nautilus 626 серии.'),
(5, '4.png', 'Видео-инструкция тренажеры Nautilus', 'Представляем тренажеры Nautilus 626 серии.'),
(6, '1.png', 'Видео-инструкция тренажеры Nautilus', 'Представляем тренажеры Nautilus 626 серии.');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `rights` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `phone`, `password`, `rights`) VALUES
(1, 'Админ', 'admin@bk.ru', '89992224455', '123', 'admin'),
(2, 'Юлия', 'jtimenova@rambler.ru', '89320543914', '123', 'user');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `appeal`
--
ALTER TABLE `appeal`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `bowflex`
--
ALTER TABLE `bowflex`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `call_request`
--
ALTER TABLE `call_request`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `for-fitness`
--
ALTER TABLE `for-fitness`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `for-home`
--
ALTER TABLE `for-home`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `promotion`
--
ALTER TABLE `promotion`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `appeal`
--
ALTER TABLE `appeal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `bowflex`
--
ALTER TABLE `bowflex`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT для таблицы `call_request`
--
ALTER TABLE `call_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `catalog`
--
ALTER TABLE `catalog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `favorites`
--
ALTER TABLE `favorites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `for-home`
--
ALTER TABLE `for-home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `promotion`
--
ALTER TABLE `promotion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `favorites`
--
ALTER TABLE `favorites`
  ADD CONSTRAINT `favorites_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Ограничения внешнего ключа таблицы `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
