-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Сен 06 2018 г., 18:33
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `taskphp`
--

-- --------------------------------------------------------

--
-- Структура таблицы `entitiescompendium`
--

CREATE TABLE IF NOT EXISTS `entitiescompendium` (
  `code_group` int(11) NOT NULL AUTO_INCREMENT,
  `name_group` varchar(64) NOT NULL,
  `ID_parent_group` int(11) NOT NULL,
  `name_drug` varchar(64) NOT NULL,
  `manufacturer` varchar(64) NOT NULL,
  `URL` varchar(255) NOT NULL,
  PRIMARY KEY (`code_group`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
