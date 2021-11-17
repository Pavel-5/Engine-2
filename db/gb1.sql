-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 15 2021 г., 12:48
-- Версия сервера: 8.0.24
-- Версия PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `gb1`
--

-- --------------------------------------------------------

--
-- Структура таблицы `basket`
--

CREATE TABLE `basket` (
  `id` int NOT NULL,
  `goods_id` int NOT NULL,
  `session_id` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `basket`
--

INSERT INTO `basket` (`id`, `goods_id`, `session_id`) VALUES
(31, 1, '9p3oui4l4httnmneltr97nq6110b2lec'),
(32, 2, '9p3oui4l4httnmneltr97nq6110b2lec'),
(33, 2, '9p3oui4l4httnmneltr97nq6110b2lec'),
(34, 3, '9p3oui4l4httnmneltr97nq6110b2lec'),
(35, 2, '9p3oui4l4httnmneltr97nq6110b2lec'),
(36, 1, '9p3oui4l4httnmneltr97nq6110b2lec'),
(37, 1, '16ej7pr5caaup3rpbufgissefkjbtiii'),
(38, 2, '16ej7pr5caaup3rpbufgissefkjbtiii'),
(39, 1, 'jc6ujinvrdjcfqqkq5vjh9ukg4ltgcg3'),
(44, 2, 'sthae6l4fa8i25c4v6c7rnvr4a4ktntm'),
(47, 3, 'sthae6l4fa8i25c4v6c7rnvr4a4ktntm'),
(48, 1, 'sthae6l4fa8i25c4v6c7rnvr4a4ktntm'),
(49, 1, 'sthae6l4fa8i25c4v6c7rnvr4a4ktntm'),
(50, 1, 'sthae6l4fa8i25c4v6c7rnvr4a4ktntm'),
(51, 1, 'sthae6l4fa8i25c4v6c7rnvr4a4ktntm'),
(52, 1, 'sthae6l4fa8i25c4v6c7rnvr4a4ktntm'),
(53, 1, 'ab5qnb36b6cp527ehq92v63gl0vihocm'),
(54, 1, 'id7563c9se8392ill3msq0ueajs0pftl'),
(55, 1, 'id7563c9se8392ill3msq0ueajs0pftl'),
(56, 1, 'id7563c9se8392ill3msq0ueajs0pftl'),
(57, 2, 'id7563c9se8392ill3msq0ueajs0pftl'),
(58, 3, 'id7563c9se8392ill3msq0ueajs0pftl'),
(59, 3, 'id7563c9se8392ill3msq0ueajs0pftl'),
(60, 1, 'kahohe0mpn4t553enq422rvsh9jne9uc'),
(61, 1, 'kahohe0mpn4t553enq422rvsh9jne9uc'),
(62, 2, 'kahohe0mpn4t553enq422rvsh9jne9uc'),
(63, 2, '9s52ptvfj6a8qqjda46gcmn6ujdfmmdk'),
(64, 2, '9s52ptvfj6a8qqjda46gcmn6ujdfmmdk'),
(65, 3, '9s52ptvfj6a8qqjda46gcmn6ujdfmmdk'),
(66, 3, '9s52ptvfj6a8qqjda46gcmn6ujdfmmdk'),
(67, 3, '9s52ptvfj6a8qqjda46gcmn6ujdfmmdk'),
(116, 1, 'mas7d7390n0i9cdkumpgt17870h186vq'),
(117, 1, 'mas7d7390n0i9cdkumpgt17870h186vq'),
(118, 1, 'mas7d7390n0i9cdkumpgt17870h186vq'),
(119, 1, 'mas7d7390n0i9cdkumpgt17870h186vq'),
(120, 1, 'mas7d7390n0i9cdkumpgt17870h186vq'),
(121, 1, 'mas7d7390n0i9cdkumpgt17870h186vq'),
(122, 1, 'mas7d7390n0i9cdkumpgt17870h186vq'),
(123, 1, 'mas7d7390n0i9cdkumpgt17870h186vq'),
(124, 1, 'mas7d7390n0i9cdkumpgt17870h186vq'),
(125, 1, 'mas7d7390n0i9cdkumpgt17870h186vq'),
(126, 2, 'g21qbbua26pcjl0r5l28vikhvkeq94kb'),
(127, 2, 'g21qbbua26pcjl0r5l28vikhvkeq94kb'),
(128, 2, 'g21qbbua26pcjl0r5l28vikhvkeq94kb'),
(129, 2, 'g21qbbua26pcjl0r5l28vikhvkeq94kb'),
(130, 1, 'g21qbbua26pcjl0r5l28vikhvkeq94kb'),
(131, 3, 'g21qbbua26pcjl0r5l28vikhvkeq94kb'),
(132, 3, 'g21qbbua26pcjl0r5l28vikhvkeq94kb'),
(133, 3, 'g21qbbua26pcjl0r5l28vikhvkeq94kb'),
(134, 1, 'g21qbbua26pcjl0r5l28vikhvkeq94kb'),
(135, 1, 'g21qbbua26pcjl0r5l28vikhvkeq94kb'),
(193, 1, '8rukl268euoib9is5otm14slj22ll0es'),
(194, 1, '8rukl268euoib9is5otm14slj22ll0es'),
(208, 1, 'uic38im414etqp5f9ruim5htieljh172'),
(209, 1, 'uic38im414etqp5f9ruim5htieljh172'),
(210, 2, 'dotpkrj2rpha5ph4o6b1e0548fs1k5t3'),
(211, 1, '4dpaek97j0dnkgsu3ld9rvuacb1v6apn'),
(212, 1, '4dpaek97j0dnkgsu3ld9rvuacb1v6apn'),
(213, 1, '677067oho92o009hjcdjrmvc0qqskslk'),
(214, 2, '677067oho92o009hjcdjrmvc0qqskslk'),
(222, 2, 'b2mhmb0224210k4d9u80uugv6usvm41e'),
(241, 1, 'qdgj18tdke9csc89i5kultf852j837r9'),
(242, 1, 'c0etqqhhic5lvfg07gdlpq160u4u5v40'),
(243, 1, 'c0etqqhhic5lvfg07gdlpq160u4u5v40'),
(244, 1, 'c0etqqhhic5lvfg07gdlpq160u4u5v40'),
(245, 1, 'c0etqqhhic5lvfg07gdlpq160u4u5v40'),
(246, 2, 'c0etqqhhic5lvfg07gdlpq160u4u5v40'),
(247, 2, 'c0etqqhhic5lvfg07gdlpq160u4u5v40'),
(248, 2, 'c0etqqhhic5lvfg07gdlpq160u4u5v40'),
(249, 1, 'fbudqef57lhv1vdbsn07pja7am89el5o'),
(250, 1, '706rf63eh8j3fi96akku7lliqr1aj018'),
(251, 1, '706rf63eh8j3fi96akku7lliqr1aj018'),
(252, 1, '706rf63eh8j3fi96akku7lliqr1aj018'),
(253, 1, 'qu1li79o350si9vol79eet9p56c1er9b'),
(254, 1, 'qu1li79o350si9vol79eet9p56c1er9b'),
(255, 1, '66akqr36sqa0r8p24knee2kftvbqtbaj'),
(256, 1, '66akqr36sqa0r8p24knee2kftvbqtbaj'),
(257, 2, '66akqr36sqa0r8p24knee2kftvbqtbaj'),
(258, 2, '66akqr36sqa0r8p24knee2kftvbqtbaj'),
(268, 1, 'kqb38f38l654mv5d6fnbq8a4n7p9khl7'),
(287, 1, 'rb0d1q4a1ubkp0fa0au1kkil1c4eohlc'),
(288, 2, 'rb0d1q4a1ubkp0fa0au1kkil1c4eohlc'),
(289, 1, 'g5v0s5vjr63hd45obsch143o64l7nlf8'),
(290, 2, 'g5v0s5vjr63hd45obsch143o64l7nlf8'),
(291, 1, 'sfbej84v2uaoico7gsj6lpeqt3qdht4u'),
(292, 2, 'sfbej84v2uaoico7gsj6lpeqt3qdht4u'),
(293, 3, 'sfbej84v2uaoico7gsj6lpeqt3qdht4u'),
(294, 1, 'cku8j0a5advrnrkiil8r3otf4s7t4ber'),
(295, 1, 'cku8j0a5advrnrkiil8r3otf4s7t4ber');

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int NOT NULL,
  `title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `title`) VALUES
(1, 'Категория 1');

-- --------------------------------------------------------

--
-- Структура таблицы `feedback`
--

CREATE TABLE `feedback` (
  `id` int NOT NULL,
  `author` varchar(255) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `feedback`
--

INSERT INTO `feedback` (`id`, `author`, `text`) VALUES
(1, 'Admin', 'Всем ку!'),
(2, 'Пират', 'Еху'),
(3, 'Bob', 'flowers'),
(4, 'Andrew', 'hi people!'),
(5, 'Tom', 'the best');

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE `goods` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `image` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `category_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`id`, `title`, `price`, `description`, `image`, `category_id`) VALUES
(1, 'Пицца', '24', 'Горячая', 'pizza.jpeg', 1),
(2, 'Чай', '1', 'Цейлонский', 'tea.png', 1),
(3, 'Яблоко', '12', 'Красное', 'apple.jpg', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `images`
--

CREATE TABLE `images` (
  `id` int NOT NULL,
  `title` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `views` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `images`
--

INSERT INTO `images` (`id`, `title`, `views`) VALUES
(2, '01.jpg', 39),
(3, '02.jpg', 21),
(4, '03.jpg', 2),
(5, '04.jpg', 1),
(6, '05.jpg', 0),
(7, '06.jpg', 0),
(8, '07.jpg', 0),
(9, '08.jpg', 0),
(10, '09.jpg', 2),
(11, '10.jpg', 1),
(12, '11.jpg', 1),
(13, '12.jpg', 2),
(14, '13.jpg', 1),
(15, '14.jpg', 25),
(16, '15.jpg', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `text`) VALUES
(1, 'Правительство и бизнес договорились по основным вопросам изменения налогов', 'Мишустин: правительство и бизнес договорились по основным параметрам изменения налогов\r\nПредседатель правительства РФ Михаил Мишустин проводит встречу с членами бюро правления Российского союза промышленников и предпринимателей - РИА Новости, 1920, 23.09.2021\r\n© РИА Новости / Александр Астафьев\r\nПерейти в фотобанк\r\nЧитать ria.ru в\r\nМОСКВА, 23 сен — РИА Новости. Власти и предпринимательское сообщество договорились по основным параметрам изменения налогов, заявил премьер-министр Михаил Мишустин на встрече с членами Российского союза промышленников и предпринимателей.'),
(2, 'Минобороны опровергло заявление Эстонии о нарушении воздушной границы', 'Минобороны опровергло заявление Эстонии о нарушении воздушной границы российским самолетом\r\nСамолет дальнего радиолокационного обнаружения А-50 - РИА Новости, 1920, 23.09.2021\r\n© РИА Новости / Антон Денисов\r\nПерейти в фотобанк\r\nЧитать ria.ru в\r\nМОСКВА, 23 сен — РИА Новости. Минобороны России опровергло заявление Эстонии о нарушении воздушного пространства страны.\r\nВ Таллине заявили, что самолет А-50 накануне пересек воздушную границу Эстонии.\r\n\"Экипаж самолета А-50 Воздушно-космических сил осуществил плановый перелет с аэродрома в Калининградской области в пункт постоянной дислокации\", — заявили в российском оборонном ведомстве.\r\nПодчеркивается, что \"перелет проходил по заранее согласованному маршруту с включенным транспондером\", а пилоты находились на связи эстонскими диспетчерами.'),
(4, 'Новый заголовок', 'dfgg4');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `user_id` int NOT NULL,
  `session_id` varchar(255) NOT NULL,
  `sum` int NOT NULL,
  `status` enum('Новый','Подтвержден','Собран','Передан в доставку','Доставлен') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'Новый'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `name`, `phone`, `user_id`, `session_id`, `sum`, `status`) VALUES
(14, 'admin', '2345678', 1, 'rb0d1q4a1ubkp0fa0au1kkil1c4eohlc', 25, 'Собран'),
(15, 'sdfgh', '345678', 1, 'g5v0s5vjr63hd45obsch143o64l7nlf8', 25, 'Новый'),
(16, 'sdfghj', '1234567', 2, 'sfbej84v2uaoico7gsj6lpeqt3qdht4u', 37, 'Новый'),
(17, 'sdfghnj', '1234567', 2, 'cku8j0a5advrnrkiil8r3otf4s7t4ber', 48, 'Новый');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `login` text NOT NULL,
  `pass` text NOT NULL,
  `hash` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `pass`, `hash`) VALUES
(1, 'admin', '$2y$10$hZ6IR4mmQac1rUtSdY91cu20wCcSgIYARfcCiNIupsFZLd3dacH4u', '1603617055618fb5f6596f37.20636569'),
(2, 'user', '$2y$10$3hfkKCgs.xsRLDcVdNUISOASXUqLhF2fIf.4WXAkMv8t8Fh5Owaoq', '8321995066190c9a6cd0fb7.32627997');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `basket`
--
ALTER TABLE `basket`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`),
  ADD KEY `goods_ibfk_1` (`category_id`);

--
-- Индексы таблицы `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `basket`
--
ALTER TABLE `basket`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=296;

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `goods`
--
ALTER TABLE `goods`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT для таблицы `images`
--
ALTER TABLE `images`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `goods`
--
ALTER TABLE `goods`
  ADD CONSTRAINT `goods_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
