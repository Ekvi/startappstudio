-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Июл 21 2016 г., 22:39
-- Версия сервера: 5.6.17
-- Версия PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `startapp-studio`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cities`
--

CREATE TABLE IF NOT EXISTS `cities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- Дамп данных таблицы `cities`
--

INSERT INTO `cities` (`id`, `title`, `created_at`, `updated_at`) VALUES
(2, 'Одесса', 1468954544, 1468954544),
(3, 'Киев', 1468954576, 1468954576),
(4, 'Харьков', 1468954585, 1468954585),
(5, 'Львов', 1468954596, 1468954596),
(6, 'Донецк', 1468954604, 1468954604),
(7, 'Запорожье', 1468954614, 1468954614),
(8, 'Кировоград', 1468954625, 1468954625),
(9, 'Винница', 1468954641, 1468954641),
(10, 'Житомир', 1468954650, 1468954650),
(11, 'Ужгород', 1468954658, 1468954658),
(12, 'Днепропетровск', 1468954678, 1468954678),
(13, 'Кривой Рог', 1468954713, 1468954713),
(14, 'Николаев', 1468954728, 1468954728),
(15, 'Мариуполь', 1468954739, 1468954739),
(16, 'Луганск', 1468954750, 1468954750),
(17, 'Херсон', 1468954764, 1468954764),
(18, 'Чернигов', 1468954778, 1468954778),
(19, 'Полтава', 1468954792, 1468954792),
(20, 'Черкассы', 1468954804, 1468954804),
(21, 'Сумы', 1468954816, 1468954816);

-- --------------------------------------------------------

--
-- Структура таблицы `employees`
--

CREATE TABLE IF NOT EXISTS `employees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fio` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `city_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `role` varchar(50) NOT NULL DEFAULT 'Не задано',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Дамп данных таблицы `employees`
--

INSERT INTO `employees` (`id`, `fio`, `email`, `city_id`, `project_id`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Василий Петрович', 'vasiliy@gmail.com', 2, 1, 'программист', 1468956661, 1469038025),
(2, 'Петров Пётр Петрович', 'piter@gmail.com', 3, 4, 'программист', 0, 1469038032),
(3, 'Васичкин Василий Васильевич', 'vasichkin@gmail.com', 2, 1, 'дизайнер', 1468957878, 1469133441),
(4, 'Кузьмин Александр Васильевич', 'kysia@gmail.com', 9, 4, 'тестировщик', 1468958071, 1469133162),
(5, 'Степанов  Александр Александрович ', 'stepa@mail.ru', 8, 1, 'Не задано', 1468958440, 1469120656),
(6, 'Борисов Александр Юрьевич', 'boria@mail.ru', 4, 5, 'программист', 1468960164, 1469038085),
(7, 'Ковалёв Александр Владимирович', 'kovalev@gmail.com', 4, 3, 'менеджер', 1468961033, 1469038015),
(8, 'Ильин Александр Александрович', 'iliin@rambler.ru', 2, 2, 'программист', 1468961070, 1469126931),
(9, 'Андреев Александр Александрович', 'andreev@mail.ru', 14, 2, 'менеджер', 1468961103, 1469045234),
(10, 'Романов Александр Георгиевич ', 'romanov@gmail.com', 12, 2, 'Не задано', 1468961132, 1469120688),
(11, 'Кудрявцев Александр Сергеевич', 'kydriavcev@mail.ru', 5, 2, 'Не задано', 1468961167, 1469120704),
(12, 'Куликов Александр Сергеевич', 'kulikov@mail.ru', 19, 1, 'менеджер', 1468961201, 1469038055),
(13, 'Баранов, Александр Александрович', 'baranov@mail.ru', 16, 6, 'Не задано', 1468961226, 1469120711),
(14, 'Медведев Вадим Андреевич', 'medvedev@gmail.com', 5, 3, 'тестировщик', 1468961266, 1469125115),
(15, 'Сорокин Григорий Михайлович', 'sorokin@gmail.com', 17, 1, 'дизайнер', 1468961303, 1469045432),
(16, 'Сорокин, Георгий Матвеевич', 'sorokin2@mail.ru', 15, 1, 'Не задано', 1468961337, 1469120646);

-- --------------------------------------------------------

--
-- Структура таблицы `migration`
--

CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1468950169),
('m130524_201442_init', 1468950178);

-- --------------------------------------------------------

--
-- Структура таблицы `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `status` varchar(50) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Дамп данных таблицы `projects`
--

INSERT INTO `projects` (`id`, `title`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Проект 1', 'Описание к проекту 1', 'проектирование', 1469032215, 1469033199),
(2, 'Проект 2', 'Описание к проекту 2', 'проектирование', 1469032261, 1469032261),
(3, 'Проект 3', 'Описание к проекту 3', 'тестирование', 1469032278, 1469034926),
(4, 'Проект 4', 'Описание к проекту 4', 'завершен', 1469033033, 1469034902),
(5, 'Проект 5', 'Описание к проекту 5', 'разработка', 1469033165, 1469034705),
(6, 'Проект 6', 'Описание к проекту 6', 'тестирование', 1469039455, 1469039455);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fio` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `city_id` int(11) NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `username`, `fio`, `city_id`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', '', 0, 'AGZ9NeJ0pDWrfD8nLNkxhmtfHERlExod', '$2y$13$7aWt/3ixUt8fbpzQjE77oO.CLZZfTK0ABLVJ8PKGPqb1xCtAO8dti', NULL, 'admin@admin.com', 10, 1468950603, 1468950603),
(2, '', '', 0, '', '', NULL, '', 10, 1468955099, 1468955099);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
