-- phpMyAdmin SQL Dump
-- version 4.0.10.10
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 05 2016 г., 19:09
-- Версия сервера: 5.6.26-log
-- Версия PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `course_project`
--
CREATE DATABASE IF NOT EXISTS `course_project` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `course_project`;

-- --------------------------------------------------------

--
-- Структура таблицы `firma`
--

CREATE TABLE IF NOT EXISTS `firma` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name_special` varchar(32) NOT NULL,
  `name_firma` varchar(70) NOT NULL,
  `amout_vacancy` int(20) NOT NULL,
  `condition_work` varchar(290) NOT NULL,
  `address` varchar(120) NOT NULL,
  `phone` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Дамп данных таблицы `firma`
--

INSERT INTO `firma` (`id`, `name_special`, `name_firma`, `amout_vacancy`, `condition_work`, `address`, `phone`) VALUES
(1, 'программист', 'ООО "НероСеть"', 3, 'Время работы: 9:00 - 18:00\r<br>Зарплата ~ 15 000 руб.<br>', 'Пенза, ул Козяева 23', '9784564323'),
(2, 'программист', 'ООО "Новая Мололежая Сеть"', 3, 'Время работы: 9:00 - 18:30<br>Зар. плата ~ 15 тыс. рублей', 'Пенза ул. Варская 13', '9063234836'),
(3, 'инеженер-технолог', 'ЗАО "Часовой завод"', 4, 'Время работы: 9:00 - 20:30<br>Зар. плата ~ 10 тыс. рублей', 'Пенза ул. Жоватски 15', '9063355836'),
(4, 'повар', 'ОАО "Вкусно приготовить"', 7, 'Время работы: 7:00 - 22:00<br>Зар. плата ~ 25 тыс. рублей', 'Пенза ул. Верхняя 24', '9034575534'),
(5, 'оператор-технолог', 'ЗАО "Часовой завод"', 4, 'Время работы: 9:00 - 18:30<br>Зар. плата ~ 17 тыс. рублей', 'Пенза ул. Жоватски 15', '9063355836'),
(6, 'программист', 'ОАО "ProgramDesign"', 4, 'Время работы: 10:00 - 17:30<br>Зар. плата ~ 30 тыс. рублей', 'Пенза ул. Ангельская 34', '9536673845'),
(7, 'программист', 'ОАО "GameDesign"', 12, 'Время работы: 9:00 - 18:30<br>Зар. плата ~ 14 тыс. рублей', 'Пенза ул. Жировская 23', '9052554354');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
