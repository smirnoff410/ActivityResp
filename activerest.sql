-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Фев 05 2018 г., 05:07
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `activerest`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cities`
--

CREATE TABLE IF NOT EXISTS `cities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Name` (`Name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `cities`
--

INSERT INTO `cities` (`id`, `Name`) VALUES
(2, 'Геленджик'),
(3, 'Роза-Хутор'),
(1, 'Сочи');

-- --------------------------------------------------------

--
-- Структура таблицы `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_login` varchar(255) NOT NULL,
  `Tour` varchar(255) NOT NULL,
  `mark` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Tour` (`Tour`),
  KEY `Tour_2` (`Tour`),
  KEY `user_login` (`user_login`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Дамп данных таблицы `feedback`
--

INSERT INTO `feedback` (`id`, `user_login`, `Tour`, `mark`, `text`) VALUES
(5, 'Иван', 'Спуск по реке Алатырь', 'Отлично', 'Все понравилось!!'),
(6, 'Петр', 'Глубоководное приключение', 'Хорошо', 'Хороший тур, приятный гид, рекомендую! Было весело! Я доволен!!');

-- --------------------------------------------------------

--
-- Структура таблицы `guides`
--

CREATE TABLE IF NOT EXISTS `guides` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(255) NOT NULL,
  `FIO` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `Staj` varchar(255) NOT NULL,
  `Telnum` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `FIO` (`FIO`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Дамп данных таблицы `guides`
--

INSERT INTO `guides` (`id`, `img`, `FIO`, `Type`, `Staj`, `Telnum`) VALUES
(1, 'img/ava1.jpg', 'Иванов Иван Иванович', 'Специалист по дайвингу', '5', '8-978-698-74-51'),
(2, 'img/ava2.jpg', 'Петров Петр Петрович', 'Специалист по рафтингу', '15', '8-741-657-98-63'),
(4, 'img/ava4.jpg', 'Сергеев Сергей Сергеевич', 'Специалист по горному спорту', '20', '+7-981-897-96-36'),
(6, 'img/ava3.jpg', 'Витальев Денис Игоревич', 'Горнолыжный спорт', '5', '+7-981-897-96-36');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `News_head` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `News_head`, `text`, `date`) VALUES
(1, 'Ожидается потепление в Сочи', 'По данным метеорологов грядет потепление в городе сочи на 2-4 градуса.', '2018-02-28'),
(2, 'Спуск в Розе-Хутор закроют', 'Спуск в городе Роза-Хутор закроют на неделю для реконструкции и ремонтных работ.', '2018-02-24');

-- --------------------------------------------------------

--
-- Структура таблицы `rest_type`
--

CREATE TABLE IF NOT EXISTS `rest_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `About` text NOT NULL,
  `img` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Name` (`Name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `rest_type`
--

INSERT INTO `rest_type` (`id`, `Name`, `About`, `img`) VALUES
(2, 'Рафтинг', 'Рафтинг – это спортивный сплав по горным рекам, и рекам с большим количеством порогов, перекатов, водопадов с прохождением естественных и искусственных препятствий на время. Такой сплав делают на рафтах – это надувное маломерное судно, и в отличии от плота имеет более вытянутую форму, чтобы хорошо маневрировать. Рафтинг — командный вид спорта и каждый участник во время сплава выполняет определенные функции, а экипаж в целом выполняет указания лидера-капитана. Маршруты для сплава имеют шесть категорий трудности. Сами препятствия на реке так же имеют свою сложность, и измеряются они по семибалльной шкале. К этому занятию нужно относиться особенно осторожно на маршрутах с трудностью категории 3 и выше.', 'img/rafting.jpg'),
(3, 'Дайвинг', 'Дайвинг — это плавание под водой с аппаратами, обеспечивающими автономный запас воздуха (или иной газовой смеси) для дыхания под водой от нескольких минут до 12 и более часов, в зависимости от глубины, типа дыхательного аппарата и потребления ныряльщиком газовой смеси.\n\n', 'img/dayving.jpg'),
(4, 'Поход в горы', 'Поход в горы поможет избавиться от накопленного стресса, ведь там человек возвращается к своим истокам, возвращется к самому себе, забывая об условностях, навязанных социумом. Несравнимая красота гор и умеренные физические нагрузки восстанавливают нервы и душевное равновесие.', 'img/pohod_v_gory.jpg'),
(5, 'Горнолыжный спуск', 'Прекрасная возможность попробовать свои виды в зимних видах спорта, а также оздоровить себя и всю свою семью - это горнолыжные спуски! Для вас работают лучшие инструкторы, везде приятная атмосфера и запах какао!', 'img/gornol_sport.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `tours`
--

CREATE TABLE IF NOT EXISTS `tours` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(255) NOT NULL,
  `Name_tour` varchar(255) NOT NULL,
  `City` varchar(255) NOT NULL,
  `About` text NOT NULL,
  `Type` varchar(255) NOT NULL,
  `Guide` varchar(255) NOT NULL,
  `Cost` int(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Name_tour` (`Name_tour`),
  KEY `City` (`City`),
  KEY `Type` (`Type`),
  KEY `Guide` (`Guide`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Дамп данных таблицы `tours`
--

INSERT INTO `tours` (`id`, `img`, `Name_tour`, `City`, `About`, `Type`, `Guide`, `Cost`) VALUES
(3, 'img/rafting.jpg', 'Спуск по реке Алатырь', 'Геленджик', 'Пенная река, вокруг лишь верные друзья, что может быть лучше для настоящего любителя рафтинга!', 'Рафтинг', 'Петров Петр Петрович', 10000),
(4, 'img/dayving.jpg', 'Глубоководное приключение', 'Сочи', 'Погружение в морские просторы черного моря!!!', 'Дайвинг', 'Иванов Иван Иванович', 2000),
(7, 'img/pohod_v_gory.jpg', 'Покорение вершин Казбека', 'Геленджик', 'Вас ждут потрясающие виды и прекрасный чистый воздух, так чего же вы ждете??', 'Поход в горы', 'Сергеев Сергей Сергеевич', 2500),
(11, 'img/gornol_sport.jpg', 'Бескрайние снежные просторы', 'Роза-Хутор', 'Почувствуй себя настоящим первооткрывателем горных вершин!!', 'Горнолыжный спуск', 'Витальев Денис Игоревич', 12555);

-- --------------------------------------------------------

--
-- Структура таблицы `пользователь`
--

CREATE TABLE IF NOT EXISTS `пользователь` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Фамилия` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Имя` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Телефон` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Логин` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Пароль` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Роль` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Дамп данных таблицы `пользователь`
--

INSERT INTO `пользователь` (`id`, `Фамилия`, `Имя`, `Телефон`, `Логин`, `Пароль`, `Роль`) VALUES
(3, 'Петров', 'Петр', '+7-987-456-32-14', 'Peter', 'qwerty', 2),
(4, 'Иванов', 'Иван', '+7-895-741-96-32', 'admin', 'admin', 1);

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`Tour`) REFERENCES `tours` (`Name_tour`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `tours`
--
ALTER TABLE `tours`
  ADD CONSTRAINT `tours_ibfk_1` FOREIGN KEY (`Guide`) REFERENCES `guides` (`FIO`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tours_ibfk_2` FOREIGN KEY (`City`) REFERENCES `cities` (`Name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tours_ibfk_3` FOREIGN KEY (`Type`) REFERENCES `rest_type` (`Name`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
