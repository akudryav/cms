-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Мар 10 2014 г., 10:57
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `cms_langs`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id_article` int(11) NOT NULL AUTO_INCREMENT,
  `id_image` int(11) NOT NULL,
  `title` varchar(256) NOT NULL,
  `content` text NOT NULL,
  `dt` date NOT NULL,
  `is_show` enum('0','1','2') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_article`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id_article`, `id_image`, `title`, `content`, `dt`, `is_show`) VALUES
(1, 149, 'Новая крутая CMS!!!!!', '<p>))))))))))))))))))</p>\r\n\r\n<p><widget title="Обращение" widget-type="document-pdf">[[--widget/documents/7--]]</widget></p>\r\n\r\n<p>выаавы</p>\r\n', '2013-12-15', '1'),
(2, 152, 'Битрикс в страхе от новой CMS ШП', '<p>ухахахаха</p>\r\n\r\n<p>Они реально в шоке!!!!</p>\r\n', '2013-12-15', '1'),
(3, 156, 'vxcv', '<p>dsfds</p>\r\n\r\n<p><widget title="Обращение" widget-type="document-pdf">[[--widget/documents/7--]]</widget></p>\r\n', '2014-01-17', '1'),
(4, 154, 'sdfsd', '<p>dsfsd</p>\r\n', '2014-01-17', '1'),
(5, 155, 'dsfds', '<p>fdsfds</p>\r\n', '2014-01-17', '2');

-- --------------------------------------------------------

--
-- Структура таблицы `docs`
--

CREATE TABLE IF NOT EXISTS `docs` (
  `id_doc` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(256) NOT NULL,
  `path` varchar(256) NOT NULL,
  `type` varchar(3) NOT NULL,
  `is_show` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_doc`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Дамп данных таблицы `docs`
--

INSERT INTO `docs` (`id_doc`, `title`, `path`, `type`, `is_show`) VALUES
(7, 'Обращение', 'Obraschenie.pdf', 'pdf', '1');

-- --------------------------------------------------------

--
-- Структура таблицы `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `id_gallery` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `title` varchar(256) NOT NULL,
  PRIMARY KEY (`id_gallery`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Дамп данных таблицы `gallery`
--

INSERT INTO `gallery` (`id_gallery`, `name`, `title`) VALUES
(1, 'main', 'Главная'),
(8, 'gallery1', 'Основная галерея');

-- --------------------------------------------------------

--
-- Структура таблицы `gallery_images`
--

CREATE TABLE IF NOT EXISTS `gallery_images` (
  `id_gallery` int(11) NOT NULL,
  `id_image` int(11) NOT NULL,
  `num_sort` int(11) NOT NULL DEFAULT '0',
  UNIQUE KEY `id_gallery` (`id_gallery`,`id_image`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `gallery_images`
--

INSERT INTO `gallery_images` (`id_gallery`, `id_image`, `num_sort`) VALUES
(1, 138, 3),
(1, 139, 4),
(1, 143, 6),
(1, 146, 7),
(1, 147, 8),
(1, 150, 0),
(8, 131, 1),
(8, 132, 3),
(8, 133, 2),
(8, 134, 0),
(8, 135, 4);

-- --------------------------------------------------------

--
-- Структура таблицы `i18n`
--

CREATE TABLE IF NOT EXISTS `i18n` (
  `id_i18n` int(11) NOT NULL AUTO_INCREMENT,
  `id_lang` int(11) NOT NULL,
  `id_article` int(11) DEFAULT NULL,
  `id_image` int(11) DEFAULT NULL,
  `id_page` int(11) NOT NULL,
  `id_text` int(11) NOT NULL,
  `title` varchar(256) DEFAULT NULL,
  `title_image` varchar(256) NOT NULL,
  `content` text,
  `alt` varchar(256) DEFAULT NULL,
  `href` varchar(256) DEFAULT NULL,
  `title_in_menu` varchar(256) DEFAULT NULL,
  `keywords` varchar(256) DEFAULT NULL,
  `description` varchar(256) DEFAULT NULL,
  `is_show` enum('0','1','2') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_i18n`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=248 ;

--
-- Дамп данных таблицы `i18n`
--

INSERT INTO `i18n` (`id_i18n`, `id_lang`, `id_article`, `id_image`, `id_page`, `id_text`, `title`, `title_image`, `content`, `alt`, `href`, `title_in_menu`, `keywords`, `description`, `is_show`) VALUES
(1, 1, NULL, NULL, 1, 0, 'Home', '', '<h2 style="color: rgb(170, 170, 170); font-style: italic;"><var>WOW! CMS rulit!!!!</var></h2>\r\n\r\n<p><widget title="Обращение" widget-type="document-pdf">[[--widget/documents/7--]]</widget></p>\r\n\r\n<p><widget title="Главная" widget-type="slider">[[--widget/slider/1--]]</widget></p>\r\n', NULL, NULL, 'Home', 'Главная', 'Главная', '1'),
(2, 2, NULL, NULL, 1, 0, 'Главная     ', '', '<h2 style="color: rgb(170, 170, 170); font-style: italic;"><var>Вот и пришло в<strong>ремя</strong> новой ступени семинара of CMS.</var></h2>\r\n\r\n<p><widget title="Обращение" widget-type="document-pdf">[[--widget/documents/7--]]</widget></p>\r\n\r\n<p><widget title="Главная" widget-type="slider">[[--widget/slider/1--]]</widget></p>\r\n', NULL, NULL, 'Главная     ', 'Главная', 'Главная', '1'),
(3, 1, NULL, NULL, 2, 0, 'Products', '', '<p>Products</p>\r\n\r\n<p><widget title="Главная" widget-type="slider">[[--widget/slider/1--]]</widget></p>\r\n', NULL, NULL, 'Products', 'Товары', 'Товары', '1'),
(4, 2, NULL, NULL, 2, 0, 'Товары', '', '<p>Товары</p>\r\n\r\n<p><widget title="Главная" widget-type="slider">[[--widget/slider/1--]]</widget></p>\r\n', NULL, NULL, 'Товары', 'Товары', 'Товары', '1'),
(5, 1, NULL, NULL, 3, 0, 'Услуги', '', '<p>Услуги</p>\n\n<p>kjvjhfjgkj<img alt="" height="213" src="/media/images/ck/ba20a98ffea8.jpg" width="285" /></p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p>nvjhvhjvjh</p>\n\n<p><widget title="Основная галерея" widget-type="lightbox">[[--widget/gallery/8--]]</widget></p>\n\n<p>&nbsp;</p>\n', NULL, NULL, 'Helpers', 'Услуги', 'Услуги', '1'),
(6, 2, NULL, NULL, 3, 0, 'Услуги', '', '<p>Услуги</p>\n\n<p>kjvjhfjgkj<img alt="" height="213" src="/media/images/ck/ba20a98ffea8.jpg" width="285" /></p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p>nvjhvhjvjh</p>\n\n<p><widget title="Основная галерея" widget-type="lightbox">[[--widget/gallery/8--]]</widget></p>\n\n<p>&nbsp;</p>\n', NULL, NULL, 'Услуги', 'Услуги', 'Услуги', '1'),
(7, 1, NULL, NULL, 4, 0, 'Контакты', '', '<p>Добраться до нас можно так:</p>\r\n\r\n<p><widget title="Основная галерея" widget-type="slider">[[--widget/slider/8--]]</widget></p>\r\n\r\n<p><widget title="Обращение" widget-type="document-pdf">[[--widget/documents/7--]]</widget></p>\r\n', NULL, NULL, 'New contacts  ', 'Контакты', 'Контакты', '1'),
(8, 2, NULL, NULL, 4, 0, 'Контакты', '', '<p>Добраться до нас можно так:</p>\n\n<p><widget title="Основная галерея" widget-type="slider">[[--widget/slider/8--]]</widget></p>\n\n<p><widget title="Обращение" widget-type="document-pdf">[[--widget/documents/7--]]</widget></p>\n', NULL, NULL, '  Новые Контакты  ', 'Контакты', 'Контакты', '1'),
(9, 1, NULL, NULL, 5, 0, 'Компы', '', '<p>Компы</p>\r\n', NULL, NULL, 'Computers', 'Компы', 'Компы', '1'),
(10, 2, NULL, NULL, 5, 0, 'Компы', '', '<p>Компы</p>\r\n', NULL, NULL, 'Компы', 'Компы', 'Компы', '1'),
(11, 1, NULL, NULL, 6, 0, 'Гаджеты1', '', '<p>Гаджеты</p>\n\n<p><widget title="Главная" widget-type="slider">[[--widget/slider/1--]]</widget></p>\n\n<p><widget title="Обращение" widget-type="document-pdf">[[--widget/documents/7--]]</widget></p>\n', NULL, NULL, 'Gadgets', 'Гаджеты', 'Гаджеты', '1'),
(12, 2, NULL, NULL, 6, 0, 'Гаджеты1', '', '<p>Гаджеты</p>\n\n<p><widget title="Главная" widget-type="lightbox">[[--widget/gallery/1--]]</widget></p>\n', NULL, NULL, 'Гаджеты', 'Гаджеты', 'Гаджеты', '1'),
(13, 1, NULL, NULL, 7, 0, 'Ноутбуки', '', '<p>Ноутбуки</p>\r\n', NULL, NULL, 'Ноутбуки', 'Ноутбуки', 'Ноутбуки', '1'),
(14, 2, NULL, NULL, 7, 0, 'Ноутбуки', '', '<p>Ноутбуки</p>\r\n', NULL, NULL, 'Notebooks', 'Ноутбуки', 'Ноутбуки', '1'),
(15, 1, NULL, NULL, 8, 0, 'Stable', '', '<widget title="Главная" widget-type="slider">[[--widget/slider/1--]]</widget>\n<p>Стационарные</p>\n', NULL, NULL, 'Stable', 'Стационарные', 'Стационарные', '1'),
(16, 2, NULL, NULL, 8, 0, 'Стационарные', '', '<widget title="Главная" widget-type="slider">[[--widget/slider/1--]]</widget>\r\n<p>&nbsp;</p>\r\n\r\n<p>Стационарные</p>\r\n\r\n<p>&nbsp;</p>\r\n', NULL, NULL, 'Стационарные', 'Стационарные', 'Стационарные', '1'),
(17, 1, NULL, NULL, 9, 0, 'Моноблоки', '', '<p>Моноблоки</p>\r\n', NULL, NULL, 'Моноблоки', 'Моноблоки', 'Моноблоки', '1'),
(18, 2, NULL, NULL, 9, 0, 'Моноблоки', '', '<p>Моноблоки</p>\r\n', NULL, NULL, 'Monoblocks', 'Моноблоки', 'Моноблоки', '1'),
(19, 1, NULL, NULL, 10, 0, 'Ремонт', '', '<p>Ремонт</p>\n\n<p><img alt="" height="165" src="/media/images/ck/c055a6e93c3a.jpg" width="221" /></p>\n', NULL, NULL, ' Ремонт ', 'Ремонт', 'Ремонт', '2'),
(20, 2, NULL, NULL, 10, 0, 'Ремонт', '', '<p>Ремонт</p>\n\n<p><img alt="" height="165" src="/media/images/ck/c055a6e93c3a.jpg" width="221" /></p>\n', NULL, NULL, ' Ремонт ', 'Ремонт', 'Ремонт', '1'),
(21, 1, NULL, NULL, 11, 0, 'Утилизация', '', '<p>Утилизация</p>\r\n', NULL, NULL, 'Утилизация', 'Утилизация', 'Утилизация', '1'),
(22, 2, NULL, NULL, 11, 0, 'Утилизация', '', '<p>Утилизация</p>\r\n', NULL, NULL, 'Утилизация', 'Утилизация', 'Утилизация', '1'),
(23, 1, NULL, NULL, 12, 0, 'Установка ПО', '', '<p>Установка ПО</p>\r\n', NULL, NULL, 'Установка ПО ', 'Установка ПО', 'Установка ПО', '1'),
(24, 2, NULL, NULL, 12, 0, 'Установка ПО', '', '<p>Установка ПО</p>\r\n', NULL, NULL, 'Установка ПО ', 'Установка ПО', 'Установка ПО', '1'),
(25, 1, NULL, NULL, 13, 0, 'Новости', '', '<p>Новости</p>\r\n', NULL, NULL, 'News', 'Новости', 'Новости', '1'),
(26, 2, NULL, NULL, 13, 0, 'Новости', '', '<p>Новости</p>\r\n', NULL, NULL, 'Новости', 'Новости', 'Новости', '1'),
(27, 1, NULL, NULL, 14, 0, 'Asus', '', '<p>Asus</p>\n\n<p><widget title="Главная" widget-type="slider">[[--widget/slider/1--]]</widget></p>\n\n<p>fsdfdsds</p>\n', NULL, NULL, 'Asus', 'Asus', 'Asus', '1'),
(28, 2, NULL, NULL, 14, 0, 'Asus', '', '<p>Asus</p>\n\n<p><widget title="Главная" widget-type="slider">[[--widget/slider/1--]]</widget></p>\n\n<p>fsdfdsds</p>\n', NULL, NULL, 'Asus', 'Asus', 'Asus', '1'),
(29, 1, NULL, NULL, 15, 0, 'acer', '', '<p><em><strong>acer</strong></em></p>\n\n<p><em><strong>dfghjkl</strong></em></p>\n\n<p><img alt="" height="183" src="/media/images/ck/55eca11aecbd.jpg" width="245" /></p>\n', NULL, NULL, 'acer', 'acer', 'acer', '1'),
(30, 2, NULL, NULL, 15, 0, 'acer', '', '<p><em><strong>acer</strong></em></p>\n\n<p><em><strong>dfghjkl</strong></em></p>\n\n<p><img alt="" height="183" src="/media/images/ck/55eca11aecbd.jpg" width="245" /></p>\n', NULL, NULL, 'acer', 'acer', 'acer', '1'),
(31, 1, NULL, NULL, 16, 0, 'Page', '', '<p>Page</p>\r\n', NULL, NULL, 'Page', 'Page', 'Page', '1'),
(32, 2, NULL, NULL, 16, 0, 'Page', '', '<p>Page</p>\r\n', NULL, NULL, 'Page', 'Page', 'Page', '1'),
(35, 1, 1, 149, 0, 0, 'Новая крутая CMS!!!!!', '', '<p>))))))))))))))))))</p>\r\n\r\n<p><widget title="Обращение" widget-type="document-pdf">[[--widget/documents/7--]]</widget></p>\r\n\r\n<p>выаавы</p>\r\n', NULL, NULL, NULL, NULL, NULL, '1'),
(36, 2, 1, 149, 0, 0, 'Новая крутая CMS!!!!!', '', '<p>))))))))))))))))))</p>\r\n\r\n<p><widget title="Обращение" widget-type="document-pdf">[[--widget/documents/7--]]</widget></p>\r\n\r\n<p>выаавы</p>\r\n', NULL, NULL, NULL, NULL, NULL, '1'),
(37, 1, 2, 152, 0, 0, 'Битрикс в страхе от новой CMS ШП', '', '<p>ухахахаха</p>\r\n\r\n<p>Они реально в шоке!!!!</p>\r\n', NULL, NULL, NULL, NULL, NULL, '1'),
(38, 2, 2, 152, 0, 0, 'Битрикс в страхе от новой CMS ШП', '', '<p>ухахахаха</p>\r\n\r\n<p>Они реально в шоке!!!!</p>\r\n', NULL, NULL, NULL, NULL, NULL, '1'),
(39, 1, 3, 156, 0, 0, 'vxcv', '', '<p>dsfds</p>\r\n\r\n<p><widget title="Обращение" widget-type="document-pdf">[[--widget/documents/7--]]</widget></p>\r\n', NULL, NULL, NULL, NULL, NULL, '1'),
(40, 2, 3, 156, 0, 0, 'vxcv', '', '<p>dsfds</p>\r\n\r\n<p><widget title="Обращение" widget-type="document-pdf">[[--widget/documents/7--]]</widget></p>\r\n', NULL, NULL, NULL, NULL, NULL, '0'),
(41, 1, 4, 154, 0, 0, 'sdfsd', '', '<p>dsfsd</p>\r\n', NULL, NULL, NULL, NULL, NULL, '1'),
(42, 2, 4, 154, 0, 0, 'sdfsd', '', '<p>dsfsd</p>\r\n', NULL, NULL, NULL, NULL, NULL, '1'),
(43, 1, 5, 155, 0, 0, 'dsfds', '', '<p>fdsfds</p>\r\n', NULL, NULL, NULL, NULL, NULL, '1'),
(44, 2, 5, 155, 0, 0, 'dsfds', '', '<p>fdsfds</p>\r\n', NULL, NULL, NULL, NULL, NULL, '2'),
(45, 1, NULL, 1, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '1'),
(46, 2, NULL, 1, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '1'),
(47, 1, NULL, 2, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '1'),
(48, 2, NULL, 2, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '1'),
(49, 1, NULL, 3, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '1'),
(50, 2, NULL, 3, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '1'),
(51, 1, NULL, 4, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '1'),
(52, 2, NULL, 4, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '1'),
(53, 1, NULL, 5, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '1'),
(54, 2, NULL, 5, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '1'),
(55, 1, NULL, 6, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '1'),
(56, 2, NULL, 6, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '1'),
(57, 1, NULL, 34, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '1'),
(58, 2, NULL, 34, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '1'),
(59, 1, NULL, 35, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '1'),
(60, 2, NULL, 35, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '1'),
(61, 1, NULL, 36, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '1'),
(62, 2, NULL, 36, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '1'),
(63, 1, NULL, 39, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '1'),
(64, 2, NULL, 39, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '1'),
(65, 1, NULL, 51, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '1'),
(66, 2, NULL, 51, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '1'),
(67, 1, NULL, 58, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '1'),
(68, 2, NULL, 58, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '1'),
(69, 1, NULL, 59, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '1'),
(70, 2, NULL, 59, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '1'),
(71, 1, NULL, 60, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '1'),
(72, 2, NULL, 60, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '1'),
(73, 1, NULL, 61, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '1'),
(74, 2, NULL, 61, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '1'),
(75, 1, NULL, 63, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '1'),
(76, 2, NULL, 63, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '1'),
(77, 1, NULL, 66, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '1'),
(78, 2, NULL, 66, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '1'),
(79, 1, NULL, 130, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '1'),
(80, 2, NULL, 130, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '1'),
(81, 1, NULL, 131, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '1'),
(82, 2, NULL, 131, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '1'),
(83, 1, NULL, 132, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '1'),
(84, 2, NULL, 132, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '1'),
(85, 1, NULL, 133, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '1'),
(86, 2, NULL, 133, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '1'),
(87, 1, NULL, 134, 0, 0, NULL, '', NULL, 'Зимой он без лепестков', '', NULL, NULL, NULL, '1'),
(88, 2, NULL, 134, 0, 0, NULL, '', NULL, 'Зимой он без лепестков', '', NULL, NULL, NULL, '1'),
(89, 1, NULL, 135, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '1'),
(90, 2, NULL, 135, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '1'),
(91, 1, NULL, 138, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '1'),
(92, 2, NULL, 138, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '0'),
(93, 1, NULL, 139, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '1'),
(94, 2, NULL, 139, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '0'),
(101, 1, NULL, 143, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '1'),
(102, 2, NULL, 143, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '1'),
(103, 1, NULL, 146, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '1'),
(104, 2, NULL, 146, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '1'),
(105, 1, NULL, 147, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '1'),
(106, 2, NULL, 147, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '1'),
(109, 1, NULL, 150, 0, 0, NULL, 'Hi, people!', NULL, '', '', NULL, NULL, NULL, '1'),
(110, 2, NULL, 150, 0, 0, NULL, 'Здарова, люди!', NULL, '', '', NULL, NULL, NULL, '1'),
(111, 1, NULL, NULL, 0, 1, 'Подвал2', '', 'Ещё какой-нибудь текст в подвале', NULL, NULL, NULL, NULL, NULL, '1'),
(112, 2, NULL, NULL, 0, 1, 'Подвал2', '', 'Ещё какой-нибудь текст в подвале', NULL, NULL, NULL, NULL, NULL, '1'),
(113, 1, NULL, NULL, 0, 2, 'Шапка', '', '8911111111122<br>', NULL, NULL, NULL, NULL, NULL, '1'),
(114, 2, NULL, NULL, 0, 2, 'Шапка', '', '8911111111122<br>', NULL, NULL, NULL, NULL, NULL, '1'),
(115, 1, NULL, NULL, 0, 4, 'заголовок в шапке', '', 'Site title', NULL, NULL, NULL, NULL, NULL, '1'),
(116, 2, NULL, NULL, 0, 4, 'заголовок в шапке', '', 'Название сайта', NULL, NULL, NULL, NULL, NULL, '1'),
(117, 1, NULL, NULL, 0, 5, 'копирайт', '', 'Текст в подвале с каким-нибудь копирайтом &copy;', NULL, NULL, NULL, NULL, NULL, '1'),
(118, 2, NULL, NULL, 0, 5, 'копирайт', '', 'Текст в подвале с каким-нибудь копирайтом &copy;', NULL, NULL, NULL, NULL, NULL, '1'),
(119, 1, NULL, NULL, 0, 6, 'Разработчик', '', 'Кем-то создано', NULL, NULL, NULL, NULL, NULL, '1'),
(120, 2, NULL, NULL, 0, 6, 'Разработчик', '', 'Кем-то создано', NULL, NULL, NULL, NULL, NULL, '1'),
(121, 1, NULL, NULL, 0, 7, 'Подзаголовок в шапке', '', 'My super site ', NULL, NULL, NULL, NULL, NULL, '1'),
(122, 2, NULL, NULL, 0, 7, 'Подзаголовок в шапке', '', 'Сайт что-то', NULL, NULL, NULL, NULL, NULL, '1'),
(123, 1, NULL, NULL, 0, 8, '', '', '', NULL, NULL, NULL, NULL, NULL, '1'),
(124, 2, NULL, NULL, 0, 8, 'Что это', '', 'dfdsf', NULL, NULL, NULL, NULL, NULL, '1'),
(125, 3, NULL, NULL, 1, 0, 'Ahahahhahaha', '', '<h2 style="color: rgb(170, 170, 170); font-style: italic;"><var>WOW! CMS rulit!!!!</var></h2>\n\n<p><widget title="Обращение" widget-type="document-pdf">[[--widget/documents/7--]]</widget></p>\n\n<p><widget title="Главная" widget-type="slider">[[--widget/slider/1--]]</widget></p>\n', NULL, NULL, 'Home', 'Главная', 'Главная', '1'),
(126, 3, NULL, NULL, 2, 0, 'Товары', '', '<p>Products</p>\r\n\r\n<p><widget title="Главная" widget-type="slider">[[--widget/slider/1--]]</widget></p>\r\n', NULL, NULL, 'Products', 'Товары', 'Товары', '0'),
(127, 3, NULL, NULL, 3, 0, 'Услуги', '', '<p>Услуги</p>\n\n<p>kjvjhfjgkj<img alt="" height="213" src="/media/images/ck/ba20a98ffea8.jpg" width="285" /></p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p>nvjhvhjvjh</p>\n\n<p><widget title="Основная галерея" widget-type="lightbox">[[--widget/gallery/8--]]</widget></p>\n\n<p>&nbsp;</p>\n', NULL, NULL, 'Helpers', 'Услуги', 'Услуги', '0'),
(128, 3, NULL, NULL, 4, 0, 'Контакты', '', '<p>Добраться до нас можно так:</p>\n\n<p><widget title="Основная галерея" widget-type="slider">[[--widget/slider/8--]]</widget></p>\n\n<p><widget title="Обращение" widget-type="document-pdf">[[--widget/documents/7--]]</widget></p>\n', NULL, NULL, 'New contacts', 'Контакты', 'Контакты', '0'),
(129, 3, NULL, NULL, 5, 0, 'Компы', '', '<p>Компы</p>\r\n', NULL, NULL, 'Computers', 'Компы', 'Компы', '0'),
(130, 3, NULL, NULL, 6, 0, 'Гаджеты1', '', '<p>Гаджеты</p>\r\n\r\n<p><widget title="Главная" widget-type="lightbox">[[--widget/gallery/1--]]</widget></p>\r\n', NULL, NULL, 'Gadgets', 'Гаджеты', 'Гаджеты', '0'),
(131, 3, NULL, NULL, 7, 0, 'Ноутбуки', '', '<p>Ноутбуки</p>\r\n', NULL, NULL, 'Notebooks', 'Ноутбуки', 'Ноутбуки', '1'),
(132, 3, NULL, NULL, 8, 0, 'Стационарные', '', '<widget title="Главная" widget-type="slider">[[--widget/slider/1--]]</widget>\n<p>Стационарные</p>\n', NULL, NULL, 'Stable', 'Стационарные', 'Стационарные', '1'),
(133, 3, NULL, NULL, 9, 0, 'Моноблоки', '', '<p>Моноблоки</p>\r\n', NULL, NULL, 'Monoblocks', 'Моноблоки', 'Моноблоки', '1'),
(134, 3, NULL, NULL, 10, 0, 'Ремонт', '', '<p>Ремонт</p>\n\n<p><img alt="" height="165" src="/media/images/ck/c055a6e93c3a.jpg" width="221" /></p>\n', NULL, NULL, ' Ремонт ', 'Ремонт', 'Ремонт', '1'),
(135, 3, NULL, NULL, 11, 0, 'Утилизация', '', '<p>Утилизация</p>\r\n', NULL, NULL, 'Утилизация', 'Утилизация', 'Утилизация', '1'),
(136, 3, NULL, NULL, 12, 0, 'Установка ПО', '', '<p>Установка ПО</p>\r\n', NULL, NULL, 'Установка ПО ', 'Установка ПО', 'Установка ПО', '1'),
(137, 3, NULL, NULL, 13, 0, 'Новости', '', '<p>Новости</p>\r\n', NULL, NULL, 'News', 'Новости', 'Новости', '1'),
(138, 3, NULL, NULL, 14, 0, 'Asus', '', '<p>Asus</p>\n\n<p><widget title="Главная" widget-type="slider">[[--widget/slider/1--]]</widget></p>\n\n<p>fsdfdsds</p>\n', NULL, NULL, 'Asus', 'Asus', 'Asus', '1'),
(139, 3, NULL, NULL, 15, 0, 'acer', '', '<p><em><strong>acer</strong></em></p>\n\n<p><em><strong>dfghjkl</strong></em></p>\n\n<p><img alt="" height="183" src="/media/images/ck/55eca11aecbd.jpg" width="245" /></p>\n', NULL, NULL, 'acer', 'acer', 'acer', '1'),
(140, 3, NULL, NULL, 16, 0, 'Page', '', '<p>Page</p>\r\n', NULL, NULL, 'Page', 'Page', 'Page', '1'),
(142, 3, 1, 149, 0, 0, 'Новая крутая CMS!!!!!', '', '<p>))))))))))))))))))</p>\r\n\r\n<p><widget title="Обращение" widget-type="document-pdf">[[--widget/documents/7--]]</widget></p>\r\n\r\n<p>выаавы</p>\r\n', NULL, NULL, NULL, NULL, NULL, '1'),
(143, 3, 2, 152, 0, 0, 'Битрикс в страхе от новой CMS ШП', '', '<p>ухахахаха</p>\r\n\r\n<p>Они реально в шоке!!!!</p>\r\n', NULL, NULL, NULL, NULL, NULL, '1'),
(144, 3, 3, 156, 0, 0, 'vxcv', '', '<p>dsfds</p>\r\n\r\n<p><widget title="Обращение" widget-type="document-pdf">[[--widget/documents/7--]]</widget></p>\r\n', NULL, NULL, NULL, NULL, NULL, '1'),
(145, 3, 4, 154, 0, 0, 'sdfsd', '', '<p>dsfsd</p>\r\n', NULL, NULL, NULL, NULL, NULL, '1'),
(146, 3, 5, 155, 0, 0, 'dsfds', '', '<p>fdsfds</p>\r\n', NULL, NULL, NULL, NULL, NULL, '1'),
(147, 3, NULL, 1, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '1'),
(148, 3, NULL, 2, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '1'),
(149, 3, NULL, 3, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '1'),
(150, 3, NULL, 4, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '1'),
(151, 3, NULL, 5, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '1'),
(152, 3, NULL, 6, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '1'),
(153, 3, NULL, 34, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '1'),
(154, 3, NULL, 35, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '1'),
(155, 3, NULL, 36, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '1'),
(156, 3, NULL, 39, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '1'),
(157, 3, NULL, 51, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '1'),
(158, 3, NULL, 58, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '1'),
(159, 3, NULL, 59, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '1'),
(160, 3, NULL, 60, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '1'),
(161, 3, NULL, 61, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '1'),
(162, 3, NULL, 63, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '1'),
(163, 3, NULL, 66, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '1'),
(164, 3, NULL, 130, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '1'),
(165, 3, NULL, 131, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '1'),
(166, 3, NULL, 132, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '1'),
(167, 3, NULL, 133, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '1'),
(168, 3, NULL, 134, 0, 0, NULL, '', NULL, 'Зимой он без лепестков', '', NULL, NULL, NULL, '1'),
(169, 3, NULL, 135, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '1'),
(170, 3, NULL, 138, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '1'),
(171, 3, NULL, 139, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '1'),
(175, 3, NULL, 143, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '1'),
(176, 3, NULL, 146, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '1'),
(177, 3, NULL, 147, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '1'),
(179, 3, NULL, 150, 0, 0, NULL, 'Hz', NULL, '', '', NULL, NULL, NULL, '1'),
(180, 3, NULL, NULL, 0, 1, 'Подвал2', '', 'Ещё какой-нибудь текст в подвале', NULL, NULL, NULL, NULL, NULL, '1'),
(181, 3, NULL, NULL, 0, 2, 'Шапка', '', '8911111111122<br>', NULL, NULL, NULL, NULL, NULL, '1'),
(182, 3, NULL, NULL, 0, 4, 'заголовок в шапке', '', 'Site-site', NULL, NULL, NULL, NULL, NULL, '1'),
(183, 3, NULL, NULL, 0, 5, 'копирайт', '', 'Текст в подвале с каким-нибудь копирайтом &copy;', NULL, NULL, NULL, NULL, NULL, '1'),
(184, 3, NULL, NULL, 0, 6, 'Разработчик', '', 'Кем-то создано', NULL, NULL, NULL, NULL, NULL, '1'),
(185, 3, NULL, NULL, 0, 7, 'Подзаголовок в шапке', '', 'Ma saita', NULL, NULL, NULL, NULL, NULL, '1'),
(186, 3, NULL, NULL, 0, 8, '', '', '', NULL, NULL, NULL, NULL, NULL, '1'),
(187, 4, NULL, NULL, 1, 0, 'Щьрщ', '', '<h2 style="color: rgb(170, 170, 170); font-style: italic;"><var>WOW! CMS rulit!!!!</var></h2>\r\n\r\n<p><widget title="Обращение" widget-type="document-pdf">[[--widget/documents/7--]]</widget></p>\r\n\r\n<p><widget title="Главная" widget-type="slider">[[--widget/slider/1--]]</widget></p>\r\n', NULL, NULL, 'Home', 'Главная', 'Главная', '1'),
(188, 4, NULL, NULL, 2, 0, 'Товары', '', '<p>Products</p>\r\n\r\n<p><widget title="Главная" widget-type="slider">[[--widget/slider/1--]]</widget></p>\r\n', NULL, NULL, 'Products', 'Товары', 'Товары', '1'),
(189, 4, NULL, NULL, 3, 0, 'Услуги', '', '<p>Услуги</p>\n\n<p>kjvjhfjgkj<img alt="" height="213" src="/media/images/ck/ba20a98ffea8.jpg" width="285" /></p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p>nvjhvhjvjh</p>\n\n<p><widget title="Основная галерея" widget-type="lightbox">[[--widget/gallery/8--]]</widget></p>\n\n<p>&nbsp;</p>\n', NULL, NULL, 'Helpers', 'Услуги', 'Услуги', '0'),
(190, 4, NULL, NULL, 4, 0, 'Контакты', '', '<p>Добраться до нас можно так:</p>\r\n\r\n<p><widget title="Основная галерея" widget-type="slider">[[--widget/slider/8--]]</widget></p>\r\n\r\n<p><widget title="Обращение" widget-type="document-pdf">[[--widget/documents/7--]]</widget></p>\r\n', NULL, NULL, '  Новые Контакты  ', 'Контакты', 'Контакты', '0'),
(191, 4, NULL, NULL, 5, 0, 'Компы', '', '<p>Компы</p>\r\n', NULL, NULL, 'Computers', 'Компы', 'Компы', '0'),
(192, 4, NULL, NULL, 6, 0, 'Гаджеты1', '', '<p>Гаджеты</p>\r\n\r\n<p><widget title="Главная" widget-type="lightbox">[[--widget/gallery/1--]]</widget></p>\r\n', NULL, NULL, 'Gadgets', 'Гаджеты', 'Гаджеты', '0'),
(193, 4, NULL, NULL, 7, 0, 'Ноутбуки', '', '<p>Ноутбуки</p>\r\n', NULL, NULL, 'Ноутбуки', 'Ноутбуки', 'Ноутбуки', '0'),
(194, 4, NULL, NULL, 8, 0, 'Stable', '', '<widget title="Главная" widget-type="slider">[[--widget/slider/1--]]</widget>\r\n<p>&nbsp;</p>\r\n\r\n<p>Стационарные</p>\r\n\r\n<p>&nbsp;</p>\r\n', NULL, NULL, 'Стационарные', 'Стационарные', 'Стационарные', '0'),
(195, 4, NULL, NULL, 9, 0, 'Моноблоки', '', '<p>Моноблоки</p>\r\n', NULL, NULL, 'Monoblocks', 'Моноблоки', 'Моноблоки', '0'),
(196, 4, NULL, NULL, 10, 0, 'Ремонт', '', '<p>Ремонт</p>\n\n<p><img alt="" height="165" src="/media/images/ck/c055a6e93c3a.jpg" width="221" /></p>\n', NULL, NULL, ' Ремонт ', 'Ремонт', 'Ремонт', '0'),
(197, 4, NULL, NULL, 11, 0, 'Утилизация', '', '<p>Утилизация</p>\r\n', NULL, NULL, 'Утилизация', 'Утилизация', 'Утилизация', '0'),
(198, 4, NULL, NULL, 12, 0, 'Установка ПО', '', '<p>Установка ПО</p>\r\n', NULL, NULL, 'Установка ПО ', 'Установка ПО', 'Установка ПО', '0'),
(199, 4, NULL, NULL, 13, 0, 'Новости', '', '<p>Новости</p>\r\n', NULL, NULL, 'News', 'Новости', 'Новости', '0'),
(200, 4, NULL, NULL, 14, 0, 'Asus', '', '<p>Asus</p>\n\n<p><widget title="Главная" widget-type="slider">[[--widget/slider/1--]]</widget></p>\n\n<p>fsdfdsds</p>\n', NULL, NULL, 'Asus', 'Asus', 'Asus', '0'),
(201, 4, NULL, NULL, 15, 0, 'acer', '', '<p><em><strong>acer</strong></em></p>\n\n<p><em><strong>dfghjkl</strong></em></p>\n\n<p><img alt="" height="183" src="/media/images/ck/55eca11aecbd.jpg" width="245" /></p>\n', NULL, NULL, 'acer', 'acer', 'acer', '0'),
(202, 4, NULL, NULL, 16, 0, 'Page', '', '<p>Page</p>\r\n', NULL, NULL, 'Page', 'Page', 'Page', '0'),
(203, 4, 1, 149, 0, 0, 'Новая крутая CMS!!!!!', '', '<p>))))))))))))))))))</p>\r\n\r\n<p><widget title="Обращение" widget-type="document-pdf">[[--widget/documents/7--]]</widget></p>\r\n\r\n<p>выаавы</p>\r\n', NULL, NULL, NULL, NULL, NULL, '1'),
(204, 4, 2, 152, 0, 0, 'Битрикс в страхе от новой CMS ШП', '', '<p>ухахахаха</p>\r\n\r\n<p>Они реально в шоке!!!!</p>\r\n', NULL, NULL, NULL, NULL, NULL, '0'),
(205, 4, 3, 156, 0, 0, 'vxcv', '', '<p>dsfds</p>\r\n\r\n<p><widget title="Обращение" widget-type="document-pdf">[[--widget/documents/7--]]</widget></p>\r\n', NULL, NULL, NULL, NULL, NULL, '0'),
(206, 4, 4, 154, 0, 0, 'sdfsd', '', '<p>dsfsd</p>\r\n', NULL, NULL, NULL, NULL, NULL, '0'),
(207, 4, 5, 155, 0, 0, 'dsfds', '', '<p>fdsfds</p>\r\n', NULL, NULL, NULL, NULL, NULL, '0'),
(208, 4, NULL, 1, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '0'),
(209, 4, NULL, 2, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '0'),
(210, 4, NULL, 3, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '0'),
(211, 4, NULL, 4, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '0'),
(212, 4, NULL, 5, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '0'),
(213, 4, NULL, 6, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '0'),
(214, 4, NULL, 34, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '0'),
(215, 4, NULL, 35, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '0'),
(216, 4, NULL, 36, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '0'),
(217, 4, NULL, 39, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '0'),
(218, 4, NULL, 51, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '0'),
(219, 4, NULL, 58, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '0'),
(220, 4, NULL, 59, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '0'),
(221, 4, NULL, 60, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '0'),
(222, 4, NULL, 61, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '0'),
(223, 4, NULL, 63, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '0'),
(224, 4, NULL, 66, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '0'),
(225, 4, NULL, 130, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '0'),
(226, 4, NULL, 131, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '0'),
(227, 4, NULL, 132, 0, 0, NULL, 'Сначала сюды идёшь', NULL, '', '', NULL, NULL, NULL, '0'),
(228, 4, NULL, 133, 0, 0, NULL, 'Уворачиваешься от неё', NULL, '', '', NULL, NULL, NULL, '0'),
(229, 4, NULL, 134, 0, 0, NULL, 'Далее вот этот ориентир', NULL, 'Зимой он без лепестков', '', NULL, NULL, NULL, '0'),
(230, 4, NULL, 135, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '0'),
(231, 4, NULL, 138, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '0'),
(232, 4, NULL, 139, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '0'),
(233, 4, NULL, 143, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '0'),
(234, 4, NULL, 146, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '0'),
(235, 4, NULL, 147, 0, 0, NULL, '', NULL, '', '', NULL, NULL, NULL, '0'),
(236, 4, NULL, 150, 0, 0, NULL, 'Здарова, люди!', NULL, '', '', NULL, NULL, NULL, '1'),
(237, 4, NULL, NULL, 0, 1, 'Подвал2', '', 'Ещё какой-нибудь текст в подвале', NULL, NULL, NULL, NULL, NULL, '0'),
(238, 4, NULL, NULL, 0, 2, 'Шапка', '', '8911111111122<br>', NULL, NULL, NULL, NULL, NULL, '0'),
(239, 4, NULL, NULL, 0, 4, 'заголовок в шапке', '', 'Site title', NULL, NULL, NULL, NULL, NULL, '1'),
(240, 4, NULL, NULL, 0, 5, 'копирайт', '', 'Текст в подвале с каким-нибудь копирайтом &copy;', NULL, NULL, NULL, NULL, NULL, '0'),
(241, 4, NULL, NULL, 0, 6, 'Разработчик', '', 'Кем-то создано', NULL, NULL, NULL, NULL, NULL, '0'),
(242, 4, NULL, NULL, 0, 7, 'Подзаголовок в шапке', '', 'la saita', NULL, NULL, NULL, NULL, NULL, '1'),
(243, 4, NULL, NULL, 0, 8, 'Что это', '', 'dfdsf', NULL, NULL, NULL, NULL, NULL, '0'),
(244, 1, NULL, NULL, 17, 0, 'nsdfdsf', '', '<p>kln</p>\r\n', NULL, NULL, '87689u', 'lkn', 'lkn', '1'),
(245, 2, NULL, NULL, 17, 0, 'nsdfdsf', '', '<p>kln</p>\r\n', NULL, NULL, '87689u', 'lkn', 'lkn', '0'),
(246, 3, NULL, NULL, 17, 0, 'nsdfdsf', '', '<p>kln</p>\r\n', NULL, NULL, '87689u', 'lkn', 'lkn', '0'),
(247, 4, NULL, NULL, 17, 0, 'nsdfdsf', '', '<p>kln</p>\r\n', NULL, NULL, '87689u', 'lkn', 'lkn', '0');

-- --------------------------------------------------------

--
-- Структура таблицы `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `id_image` int(11) NOT NULL AUTO_INCREMENT,
  `path` varchar(256) NOT NULL,
  `title_image` varchar(256) NOT NULL,
  `alt` varchar(256) NOT NULL,
  `href` varchar(256) NOT NULL,
  `is_show` enum('0','1') NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_image`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=157 ;

--
-- Дамп данных таблицы `images`
--

INSERT INTO `images` (`id_image`, `path`, `title_image`, `alt`, `href`, `is_show`) VALUES
(1, '7186631.jpg', '', '', '', '1'),
(2, '8328726.jpg', '', '', '', '1'),
(3, '8687432.jpg', '', '', '', '1'),
(4, '9016177.jpg', '', '', '', '1'),
(5, '5402774.jpg', '', '', '', '1'),
(6, '8754409.jpg', '', '', '', '1'),
(34, '6693198.jpg', '', '', '', '1'),
(35, '6543276.jpg', '', '', '', '1'),
(36, '9294802.jpg', '', '', '', '1'),
(39, 'italtrike.jpg', '', '', '', '1'),
(51, 'Bauman.jpeg', '', '', '', '1'),
(58, 'milc(1).jpg', '', '', '', '1'),
(59, 'ARTA6671(1).JPG', '', '', '', '1'),
(60, 'site.jpg', '', '', '', '1'),
(61, '17907321.jpg', '', '', '', '1'),
(63, 'photo-small.jpg', '', '', '', '1'),
(66, 'news-image1.jpg', '', '', '', '1'),
(130, 'Penguins(1).jpg', '', '', '', '1'),
(131, '8084266.jpg', '', '', '', '1'),
(132, '2112795.jpg', 'Сначала сюды идёшь', '', '', '1'),
(133, '7027612.jpg', 'Уворачиваешься от неё', '', '', '1'),
(134, '7890804.jpg', 'Далее вот этот ориентир', 'Зимой он без лепестков', '', '1'),
(135, '3562331.jpg', '', '', '', '1'),
(138, '6443.jpg', '', '', '', '1'),
(139, '8720299.jpg', '', '', '', '1'),
(143, '4988415.jpg', '', '', '', '1'),
(146, '9512200.jpg', '', '', '', '1'),
(147, '5342519.jpg', '', '', '', '1'),
(149, 'Penguins(2).jpg', '', '', '', '1'),
(150, '5860337.jpg', 'Здарова, люди!', '', '', ''),
(152, 'Koala.jpg', '', '', '', '1'),
(154, 'Chrysanthemum.jpg', '', '', '', '1'),
(155, 'Hydrangeas.jpg', '', '', '', '1'),
(156, 'Lighthouse.jpg', '', '', '', '1');

-- --------------------------------------------------------

--
-- Структура таблицы `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id_menu` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(128) NOT NULL,
  PRIMARY KEY (`id_menu`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `menu`
--

INSERT INTO `menu` (`id_menu`, `title`) VALUES
(1, 'Верхнее'),
(2, 'Для главной'),
(3, 'Для компов');

-- --------------------------------------------------------

--
-- Структура таблицы `menu_pages`
--

CREATE TABLE IF NOT EXISTS `menu_pages` (
  `id_menu` int(11) NOT NULL,
  `id_page` int(11) NOT NULL,
  `num_sort` int(11) NOT NULL,
  UNIQUE KEY `id_menu` (`id_menu`,`id_page`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `menu_pages`
--

INSERT INTO `menu_pages` (`id_menu`, `id_page`, `num_sort`) VALUES
(1, 1, 1),
(1, 3, 2),
(1, 4, 0),
(1, 8, 3),
(2, 2, 0),
(2, 3, 1),
(2, 4, 2),
(2, 13, 3),
(3, 14, 0),
(3, 15, 1),
(4, 5, 0),
(4, 7, 0),
(5, 1, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id_page` int(11) NOT NULL AUTO_INCREMENT,
  `id_menu` int(11) NOT NULL,
  `id_parent` int(11) NOT NULL,
  `url` varchar(256) NOT NULL,
  `full_cache_url` varchar(512) NOT NULL,
  `title` varchar(256) NOT NULL,
  `title_in_menu` varchar(256) NOT NULL,
  `content` text NOT NULL,
  `keywords` varchar(256) NOT NULL,
  `description` varchar(256) NOT NULL,
  `is_show` enum('0','1','2') NOT NULL DEFAULT '1',
  `children_sort` int(11) NOT NULL DEFAULT '0',
  `id_base_template` int(11) NOT NULL,
  `id_template` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_page`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Дамп данных таблицы `pages`
--

INSERT INTO `pages` (`id_page`, `id_menu`, `id_parent`, `url`, `full_cache_url`, `title`, `title_in_menu`, `content`, `keywords`, `description`, `is_show`, `children_sort`, `id_base_template`, `id_template`) VALUES
(1, 2, 0, 'home', 'home', 'Home', 'Home', '<h2 style="color: rgb(170, 170, 170); font-style: italic;"><var>WOW! CMS rulit!!!!</var></h2>\r\n\r\n<p><widget title="Обращение" widget-type="document-pdf">[[--widget/documents/7--]]</widget></p>\r\n\r\n<p><widget title="Главная" widget-type="slider">[[--widget/slider/1--]]</widget></p>\r\n', 'Главная', 'Главная', '1', 0, 5, 1),
(2, 0, 0, 'products', 'products', 'Products', 'Products', '<p>Products</p>\r\n\r\n<p><widget title="Главная" widget-type="slider">[[--widget/slider/1--]]</widget></p>\r\n', 'Товары', 'Товары', '1', 0, 4, 3),
(3, 0, 0, 'services', 'services', 'Услуги', 'Helpers', '<p>Услуги</p>\n\n<p>kjvjhfjgkj<img alt="" height="213" src="/media/images/ck/ba20a98ffea8.jpg" width="285" /></p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p>nvjhvhjvjh</p>\n\n<p><widget title="Основная галерея" widget-type="lightbox">[[--widget/gallery/8--]]</widget></p>\n\n<p>&nbsp;</p>\n', 'Услуги', 'Услуги', '0', 0, 4, 1),
(4, 2, 0, 'contacts', 'contacts', 'Контакты', '  Новые Контакты  ', '<p>Добраться до нас можно так:</p>\r\n\r\n<p><widget title="Основная галерея" widget-type="slider">[[--widget/slider/8--]]</widget></p>\r\n\r\n<p><widget title="Обращение" widget-type="document-pdf">[[--widget/documents/7--]]</widget></p>\r\n', 'Контакты', 'Контакты', '0', 0, 4, 3),
(5, 0, 2, 'computers', 'products/computers', 'Компы', 'Computers', '<p>Компы</p>\r\n', 'Компы', 'Компы', '1', 0, 4, 1),
(6, 0, 2, 'gadgets', 'products/gadgets', 'Гаджеты1', 'Gadgets', '<p>Гаджеты</p>\n\n<p><widget title="Главная" widget-type="slider">[[--widget/slider/1--]]</widget></p>\n\n<p><widget title="Обращение" widget-type="document-pdf">[[--widget/documents/7--]]</widget></p>\n', 'Гаджеты', 'Гаджеты', '1', 1, 4, 1),
(7, 3, 5, 'notebooks', 'products/computers/notebooks', 'Ноутбуки', 'Ноутбуки', '<p>Ноутбуки</p>\r\n', 'Ноутбуки', 'Ноутбуки', '1', 0, 4, 1),
(8, 0, 5, 'base', 'products/computers/base', 'Stable', 'Стационарные', '<widget title="Главная" widget-type="slider">[[--widget/slider/1--]]</widget>\r\n<p>&nbsp;</p>\r\n\r\n<p>Стационарные</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'Стационарные', 'Стационарные', '1', 1, 4, 1),
(9, 0, 5, 'mono', 'products/computers/mono', 'Моноблоки', 'Monoblocks', '<p>Моноблоки</p>\r\n', 'Моноблоки', 'Моноблоки', '1', 2, 4, 1),
(10, 0, 3, 'repair', 'services/repair', 'Ремонт', ' Ремонт ', '<p>Ремонт</p>\n\n<p><img alt="" height="165" src="/media/images/ck/c055a6e93c3a.jpg" width="221" /></p>\n', 'Ремонт', 'Ремонт', '2', 0, 4, 1),
(11, 0, 3, 'utilization', 'services/utilization', 'Утилизация', 'Утилизация', '<p>Утилизация</p>\r\n', 'Утилизация', 'Утилизация', '1', 0, 4, 1),
(12, 0, 3, 'software', 'services/software', 'Установка ПО', 'Установка ПО ', '<p>Установка ПО</p>\r\n', 'Установка ПО', 'Установка ПО', '1', 0, 4, 1),
(13, 0, 0, 'news', 'news', 'Новости', 'News', '<p>Новости</p>\r\n', 'Новости', 'Новости', '1', 0, 4, 1),
(14, 3, 7, 'asus', 'products/computers/notebooks/asus', 'Asus', 'Asus', '<p>Asus</p>\n\n<p><widget title="Главная" widget-type="slider">[[--widget/slider/1--]]</widget></p>\n\n<p>fsdfdsds</p>\n', 'Asus', 'Asus', '1', 0, 4, 3),
(15, 0, 7, 'acer', 'products/computers/notebooks/acer', 'acer', 'acer', '<p><em><strong>acer</strong></em></p>\n\n<p><em><strong>dfghjkl</strong></em></p>\n\n<p><img alt="" height="183" src="/media/images/ck/55eca11aecbd.jpg" width="245" /></p>\n', 'acer', 'acer', '1', 1, 4, 1),
(16, 0, 0, 'first_langs', 'first_langs', 'Page', 'Page', '<p>Page</p>\r\n', 'Page', 'Page', '1', 0, 4, 1),
(17, 0, 0, 'wetywr', 'wetywr', 'nsdfdsf', '87689u', '<p>kln</p>\r\n', 'lkn', 'lkn', '1', 0, 4, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `privs`
--

CREATE TABLE IF NOT EXISTS `privs` (
  `id_priv` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `description` varchar(512) DEFAULT NULL,
  PRIMARY KEY (`id_priv`),
  UNIQUE KEY `name` (`name`(200))
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `privs`
--

INSERT INTO `privs` (`id_priv`, `name`, `description`) VALUES
(1, 'ALL', 'Всё может'),
(2, 'PAGES', 'Редактирование страниц');

-- --------------------------------------------------------

--
-- Структура таблицы `privs2roles`
--

CREATE TABLE IF NOT EXISTS `privs2roles` (
  `id_priv` int(5) NOT NULL,
  `id_role` int(5) NOT NULL,
  PRIMARY KEY (`id_priv`,`id_role`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `privs2roles`
--

INSERT INTO `privs2roles` (`id_priv`, `id_role`) VALUES
(1, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id_role` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `description` varchar(512) DEFAULT NULL,
  PRIMARY KEY (`id_role`),
  UNIQUE KEY `name` (`name`(200))
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `roles`
--

INSERT INTO `roles` (`id_role`, `name`, `description`) VALUES
(1, 'admin', 'Администратор'),
(2, 'manager', 'Контент мен');

-- --------------------------------------------------------

--
-- Структура таблицы `sessions`
--

CREATE TABLE IF NOT EXISTS `sessions` (
  `id_session` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `sid` varchar(10) NOT NULL,
  `time_start` datetime NOT NULL,
  `time_last` datetime NOT NULL,
  PRIMARY KEY (`id_session`),
  UNIQUE KEY `sid` (`sid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=135 ;

--
-- Дамп данных таблицы `sessions`
--

INSERT INTO `sessions` (`id_session`, `id_user`, `sid`, `time_start`, `time_last`) VALUES
(1, 1, 'GQpR4st4uK', '2013-04-30 19:08:40', '2013-04-30 19:18:07'),
(2, 1, 'iIalUiff9G', '2013-04-30 19:34:03', '2013-04-30 19:35:37'),
(3, 1, '2ZgZmLUXYG', '2013-06-18 21:19:20', '2013-06-18 21:21:49'),
(4, 1, '5HknSFgN6U', '2013-06-18 21:36:34', '2013-06-18 21:36:45'),
(5, 1, 'gBb3kVmYfH', '2013-07-26 18:46:34', '2013-07-26 18:46:50'),
(6, 1, 'q9dJ75UWdD', '2013-07-26 19:05:04', '2013-07-26 19:07:43'),
(7, 1, 'y5P6rvi7Ak', '2013-07-26 19:07:46', '2013-07-26 19:15:54'),
(8, 1, 'afOJF1na7a', '2013-07-26 19:15:57', '2013-07-26 19:39:50'),
(9, 1, '22cugtYmrZ', '2013-08-23 11:23:43', '2013-08-23 12:04:45'),
(10, 1, '3XNVFBFzKI', '2013-08-23 13:31:49', '2013-08-23 13:32:38'),
(11, 1, '0oKvzJ6I7I', '2013-08-23 20:54:53', '2013-08-23 20:55:03'),
(12, 1, 'rGo8gi4wJr', '2013-08-23 21:28:38', '2013-08-23 21:29:33'),
(13, 1, 'TxGLhArsfc', '2013-08-23 21:36:03', '2013-08-23 21:59:31'),
(14, 1, 'TZQLy5JpX6', '2013-09-24 19:07:33', '2013-09-24 19:36:19'),
(15, 1, 'zvMM8RFjFL', '2013-09-24 19:47:03', '2013-09-24 19:48:45'),
(16, 1, 'fZ5jZ1yujZ', '2013-09-29 15:19:47', '2013-09-29 19:04:04'),
(17, 1, 'uRowD47g9T', '2013-10-12 18:46:01', '2013-10-12 20:51:55'),
(18, 1, '7TPiZwgaAZ', '2013-10-13 12:39:30', '2013-10-13 13:16:46'),
(19, 1, 'Rx1TrpNrHk', '2013-10-13 14:13:57', '2013-10-13 17:44:43'),
(20, 1, 'cRUo4uY5mv', '2013-10-13 17:46:29', '2013-10-13 18:03:01'),
(21, 1, 'XvPniU6MYg', '2013-10-13 18:03:28', '2013-10-13 18:05:11'),
(22, 1, 'aiI2bYYr0P', '2013-10-13 18:05:23', '2013-10-13 18:06:40'),
(23, 2, '297EvPujE6', '2013-10-13 18:06:47', '2013-10-13 18:07:36'),
(24, 1, 'ac4HqIybi8', '2013-10-13 18:07:44', '2013-10-13 18:51:47'),
(25, 1, 'KLrvVim1BP', '2013-10-14 00:30:10', '2013-10-14 00:30:21'),
(26, 1, 'ks09qrxOZT', '2013-10-19 11:49:10', '2013-10-19 11:49:52'),
(27, 1, 'pJw3otP4si', '2013-10-24 18:49:53', '2013-10-24 18:50:11'),
(28, 1, 'QtW920PPrq', '2013-10-25 18:46:16', '2013-10-25 18:46:34'),
(29, 1, '9WgVaKxM5x', '2013-10-31 14:26:20', '2013-10-31 14:27:01'),
(30, 3, 'H3GNVrU3Ud', '2013-10-31 14:29:08', '2013-10-31 14:29:19'),
(31, 1, 'msIJDN0kav', '2013-10-31 14:29:25', '2013-10-31 14:34:40'),
(32, 1, 'pbolJ1AKjr', '2013-10-31 14:35:43', '2013-10-31 14:59:59'),
(33, 1, 'Fh7JBcbtit', '2013-10-31 15:21:37', '2013-10-31 15:21:44'),
(34, 1, '1ihLpqi5hM', '2013-10-31 16:55:41', '2013-10-31 16:55:51'),
(35, 1, '6a8rDcAnWe', '2013-10-31 17:25:45', '2013-10-31 17:43:43'),
(36, 3, 'TN21QTMvDs', '2013-11-01 18:45:46', '2013-11-01 18:46:13'),
(37, 3, 'PacnTAiryD', '2013-11-02 19:01:10', '2013-11-02 19:01:28'),
(38, 1, 'DCsNr7UGTd', '2013-11-02 19:01:39', '2013-11-02 19:36:29'),
(39, 1, 'xQujuKGDbC', '2013-11-02 19:36:32', '2013-11-03 01:46:59'),
(40, 1, 'YrSMwbyM6j', '2013-11-02 22:17:59', '2013-11-02 22:20:53'),
(41, 3, 'p9rdHwNors', '2013-11-03 13:54:45', '2013-11-03 13:54:51'),
(42, 1, '3UxnCjAy7c', '2013-11-03 13:55:02', '2013-11-03 13:57:27'),
(43, 1, '81FnqFlgLP', '2013-11-03 14:18:01', '2013-11-03 14:41:03'),
(44, 1, '9CIQV3SMAL', '2013-11-03 14:23:20', '2013-11-03 14:43:04'),
(45, 1, '1TUS4RyU3g', '2013-11-03 14:43:10', '2013-11-03 18:46:46'),
(46, 1, '4Jul8360ez', '2013-11-03 18:47:43', '2013-11-03 18:48:59'),
(47, 1, 'xx6fuLAnvo', '2013-11-03 22:59:37', '2013-11-04 00:13:46'),
(48, 3, 'bMv0JqhdrJ', '2013-11-04 00:10:36', '2013-11-04 00:22:25'),
(49, 3, '9f3mnLhEWe', '2013-11-04 00:13:01', '2013-11-04 00:24:18'),
(50, 3, 'cNrvxx5WEP', '2013-11-04 00:13:47', '2013-11-04 00:16:54'),
(51, 1, 'JpqeM2pOBs', '2013-11-04 00:16:57', '2013-11-04 00:21:34'),
(52, 3, 'htpYoh7K40', '2013-11-09 01:08:07', '2013-11-09 01:09:15'),
(53, 3, '5wsdP87z6n', '2013-11-09 01:09:15', '2013-11-09 01:09:27'),
(54, 3, 'iuo9ZvEYhO', '2013-11-09 01:09:40', '2013-11-09 01:14:38'),
(55, 1, 'Sbfj3TExWO', '2013-11-09 01:14:46', '2013-11-09 01:14:55'),
(56, 1, 'MTIX7QuADs', '2013-11-09 23:26:04', '2013-11-10 00:10:42'),
(57, 1, 'e538PZ0teF', '2013-11-10 00:10:48', '2013-11-10 01:09:47'),
(58, 1, 'w1eOkNWKUo', '2013-11-10 12:06:18', '2013-11-10 13:20:18'),
(59, 1, 'UtL5kMpCB6', '2013-11-10 18:13:47', '2013-11-10 22:18:32'),
(60, 1, 'daMCl3sTEW', '2013-11-12 00:36:48', '2013-11-12 01:49:33'),
(61, 1, 'SkBq5RYvsh', '2013-11-12 23:25:38', '2013-11-13 01:49:45'),
(62, 1, 'q7pbR0OwjL', '2013-11-13 23:33:55', '2013-11-13 23:45:02'),
(63, 1, 'P1rU5fIhMC', '2013-11-13 23:45:08', '2013-11-14 00:02:47'),
(64, 1, 'oRbm61eMHb', '2013-11-16 00:47:18', '2013-11-16 00:48:35'),
(65, 1, 'yRXAHTtR5s', '2013-11-17 00:06:08', '2013-11-17 02:10:05'),
(66, 1, 'FcPaMPjsSB', '2013-11-17 02:02:40', '2013-11-17 02:02:40'),
(67, 1, 'WSGCablhBd', '2013-11-17 13:17:21', '2013-11-17 21:01:26'),
(68, 1, 'voB0x0QGjJ', '2013-11-17 14:59:19', '2013-11-17 18:04:17'),
(69, 1, 'o24raM5b46', '2013-11-17 19:14:57', '2013-11-17 19:15:15'),
(70, 1, 'ektGBkPnoy', '2013-11-17 22:42:15', '2013-11-17 23:15:08'),
(71, 1, 'Lv7Xm627El', '2013-11-18 23:25:28', '2013-11-19 00:24:04'),
(72, 1, '1yLGRJckCm', '2013-11-19 00:24:13', '2013-11-19 00:53:37'),
(73, 1, 'KwAjhXV4ra', '2013-11-19 00:53:46', '2013-11-19 01:16:04'),
(74, 1, 'cYAYWzjEKu', '2013-11-19 01:16:14', '2013-11-19 01:20:19'),
(75, 1, 'GAqfjMSxJE', '2013-11-20 23:36:22', '2013-11-21 01:23:30'),
(76, 1, 'IkFNkw7Oh4', '2013-11-21 23:08:19', '2013-11-21 23:11:45'),
(77, 1, 'VA7s3hrrbB', '2013-11-22 20:29:25', '2013-11-22 20:38:52'),
(78, 1, 'w2FVD1lOMZ', '2013-11-25 11:50:43', '2013-11-25 12:24:51'),
(79, 1, 'desXnc2V6t', '2013-11-27 15:55:28', '2013-11-27 22:05:53'),
(80, 1, 'oMATLZb8B1', '2013-11-28 11:06:38', '2013-11-28 17:21:55'),
(81, 1, 'dc4PbTYf0Y', '2013-11-28 12:19:52', '2013-11-28 17:19:28'),
(82, 1, 'I6uJavRjvd', '2013-11-28 18:04:47', '2013-11-28 19:25:29'),
(83, 1, 'x5YIiph05C', '2013-11-28 19:25:57', '2013-11-28 21:52:56'),
(84, 1, 'tu25qvTfEs', '2013-11-28 22:57:20', '2013-11-29 01:05:57'),
(85, 1, 'jQxgtx4pWk', '2013-11-29 01:10:27', '2013-11-29 01:22:32'),
(86, 1, 'WcGdFmxBgL', '2013-11-29 23:31:59', '2013-11-30 01:40:47'),
(87, 1, '6nbaCrc5UI', '2013-11-29 23:32:57', '2013-11-29 23:56:45'),
(88, 1, 'VzDJsFnipj', '2013-11-30 22:31:18', '2013-11-30 23:18:36'),
(89, 1, 'H0XJaZedxI', '2013-12-01 22:06:17', '2013-12-01 23:36:52'),
(90, 1, '77B4CIoNnJ', '2013-12-01 23:37:00', '2013-12-02 01:28:40'),
(91, 1, 'Hj5Rrma51q', '2013-12-02 23:37:44', '2013-12-03 00:57:58'),
(92, 1, 'mcMIi6p8El', '2013-12-05 14:09:57', '2013-12-05 14:25:49'),
(93, 1, 'MFBu89u5i3', '2013-12-10 21:06:07', '2013-12-10 21:07:49'),
(94, 1, 'XzIufaqCTG', '2013-12-14 11:44:36', '2013-12-14 12:09:31'),
(95, 1, '2Ea1oajmwK', '2013-12-14 12:19:32', '2013-12-14 12:20:05'),
(96, 1, 'Y1fRxikQGB', '2013-12-15 17:15:52', '2013-12-15 18:08:50'),
(97, 1, 'u5I2QW9eJb', '2013-12-15 18:09:05', '2013-12-15 20:04:36'),
(98, 1, 'SYMsmj35J3', '2013-12-15 19:52:03', '2013-12-15 19:52:39'),
(99, 1, 'Kivy0sxWbD', '2013-12-15 19:53:02', '2013-12-15 19:54:34'),
(100, 1, '5CxmMTnop3', '2013-12-15 20:05:11', '2013-12-15 20:05:16'),
(101, 1, 'VZQK9viqUN', '2013-12-15 20:06:15', '2013-12-15 20:06:19'),
(102, 1, '3ofmkTARYt', '2013-12-15 20:07:02', '2013-12-15 20:07:06'),
(103, 1, 'trgAztbzdI', '2013-12-15 20:09:17', '2013-12-15 20:24:55'),
(104, 1, 'daa6ciyHoj', '2013-12-15 21:11:19', '2013-12-15 21:13:14'),
(105, 1, 'dpkVGyI8Az', '2013-12-15 21:14:06', '2013-12-16 01:01:39'),
(106, 1, 'Al3NcKBOTu', '2013-12-17 21:58:00', '2013-12-17 21:58:10'),
(107, 1, 'JA7A3rxNBh', '2014-01-15 14:32:06', '2014-01-15 14:56:11'),
(108, 1, 'YXrLQ9v4Xi', '2014-01-15 16:25:58', '2014-01-15 16:42:45'),
(109, 1, 'Dluq8e541O', '2014-01-15 16:42:57', '2014-01-15 16:51:19'),
(110, 1, 'bkCTgaAZZJ', '2014-01-16 14:46:22', '2014-01-16 15:28:28'),
(111, 1, '3W3VYNPxpP', '2014-01-16 15:35:18', '2014-01-16 16:01:44'),
(112, 1, 'CFaBAIVsPz', '2014-01-16 16:23:52', '2014-01-16 16:41:39'),
(113, 1, 'mda8dyGyJl', '2014-01-17 14:32:25', '2014-01-17 16:08:04'),
(114, 1, 'lfeWu8LXdL', '2014-01-18 23:24:08', '2014-01-19 00:47:19'),
(115, 1, 'qfTBt3Wh9b', '2014-01-19 00:49:50', '2014-01-19 01:19:35'),
(116, 1, 'VD0lD1gP98', '2014-02-08 19:07:32', '2014-02-08 19:49:59'),
(117, 1, 'zHfXoseQpf', '2014-02-14 18:32:03', '2014-02-14 19:25:36'),
(118, 1, 'UXZG3BCLt6', '2014-02-16 14:04:47', '2014-02-16 14:26:08'),
(119, 1, '6PSomB40bS', '2014-02-16 14:26:31', '2014-02-16 18:36:44'),
(120, 1, 'waKwHCtOvq', '2014-02-16 18:40:51', '2014-02-16 18:42:21'),
(121, 1, 'DGVJE1VPq3', '2014-02-26 13:17:40', '2014-02-26 13:40:40'),
(122, 1, 'dtXxUUtYD3', '2014-02-26 13:41:36', '2014-02-26 15:11:45'),
(123, 1, 'fIrg7XauhY', '2014-02-26 18:05:22', '2014-02-26 18:05:39'),
(124, 1, 't8c4nIVunV', '2014-02-27 20:29:58', '2014-02-27 20:30:08'),
(125, 1, 'Jjcv3YS18w', '2014-02-28 20:37:57', '2014-02-28 20:38:16'),
(126, 1, 'Q8tGmyM88k', '2014-03-01 15:21:27', '2014-03-01 15:25:04'),
(127, 1, 'Ra5nALt3mB', '2014-03-01 15:51:11', '2014-03-01 21:10:37'),
(128, 1, 'S8U3vfqsmp', '2014-03-01 21:16:36', '2014-03-01 22:40:33'),
(129, 1, 'GdxqwVLn1Y', '2014-03-01 22:43:06', '2014-03-02 01:06:13'),
(130, 2, '4n5yArfJzs', '2014-03-01 23:59:57', '2014-03-02 01:09:02'),
(131, 1, 'YXvOie3aLC', '2014-03-02 16:29:57', '2014-03-02 16:58:17'),
(132, 2, 'NrmBEqoSkw', '2014-03-02 16:33:27', '2014-03-02 16:45:24'),
(133, 1, 'X7osU0ifJu', '2014-03-02 17:04:10', '2014-03-02 18:25:24'),
(134, 1, 'sF26NFWCf5', '2014-03-03 19:44:06', '2014-03-03 19:44:45');

-- --------------------------------------------------------

--
-- Структура таблицы `templates`
--

CREATE TABLE IF NOT EXISTS `templates` (
  `id_template` int(11) NOT NULL AUTO_INCREMENT,
  `ttype` enum('0','1') NOT NULL,
  `path` varchar(32) NOT NULL,
  `name` varchar(32) NOT NULL,
  PRIMARY KEY (`id_template`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `templates`
--

INSERT INTO `templates` (`id_template`, `ttype`, `path`, `name`) VALUES
(1, '1', 'v_main.php', 'Основной'),
(3, '1', 'v_index.php', 'для главной'),
(4, '0', 'v_main.php', 'Основной базовый'),
(5, '0', 'v_index.php', 'Внешний для главной');

-- --------------------------------------------------------

--
-- Структура таблицы `texts`
--

CREATE TABLE IF NOT EXISTS `texts` (
  `id_text` int(11) NOT NULL AUTO_INCREMENT,
  `alias` varchar(30) NOT NULL,
  `title` varchar(256) NOT NULL,
  `content` text NOT NULL,
  `dt` date NOT NULL,
  `is_show` enum('0','1','2') NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_text`),
  UNIQUE KEY `alias` (`alias`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Дамп данных таблицы `texts`
--

INSERT INTO `texts` (`id_text`, `alias`, `title`, `content`, `dt`, `is_show`) VALUES
(1, 'f_contacts', 'Подвал2', 'Ещё какой-нибудь текст в подвале', '0000-00-00', '1'),
(2, 'h_contacts', 'Шапка', '8911111111122<br>', '2013-11-21', '1'),
(4, 'h_title', 'заголовок в шапке', 'Site title', '2013-11-25', '1'),
(5, 'f_copyright', 'копирайт', 'Текст в подвале с каким-нибудь копирайтом &copy;', '2013-11-25', '1'),
(6, 'f_developer', 'Разработчик', 'Кем-то создано', '2013-11-25', '1'),
(7, 'h_subtitle', 'Подзаголовок в шапке', 'la saita', '2013-12-05', '1'),
(8, 'wtf', 'Что это', 'dfdsf', '0000-00-00', '0');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int(5) NOT NULL AUTO_INCREMENT,
  `login` varchar(256) NOT NULL,
  `password` varchar(32) NOT NULL,
  `id_role` int(5) DEFAULT NULL,
  `name` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `login` (`login`(200))
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id_user`, `login`, `password`, `id_role`, `name`) VALUES
(1, 'test@test.ru', '202cb962ac59075b964b07152d234b70', 1, 'admin'),
(2, 'manager', '202cb962ac59075b964b07152d234b70', 2, 'Пупс'),
(3, '123', '84d9cfc2f395ce883a41d7ffc1bbcf4e', 2, '123');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
