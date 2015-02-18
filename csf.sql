-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               5.6.22-log - MySQL Community Server (GPL)
-- ОС Сервера:                   Win32
-- HeidiSQL Версия:              9.1.0.4867
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Дамп структуры для таблица csf.call_shedule
CREATE TABLE IF NOT EXISTS `call_shedule` (
  `lesson_number` int(11) NOT NULL AUTO_INCREMENT,
  `begin_time` varchar(255) DEFAULT NULL,
  `end_time` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`lesson_number`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы csf.call_shedule: ~0 rows (приблизительно)
DELETE FROM `call_shedule`;
/*!40000 ALTER TABLE `call_shedule` DISABLE KEYS */;
/*!40000 ALTER TABLE `call_shedule` ENABLE KEYS */;


-- Дамп структуры для таблица csf.Classroom
CREATE TABLE IF NOT EXISTS `Classroom` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `position` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы csf.Classroom: ~1 rows (приблизительно)
DELETE FROM `Classroom`;
/*!40000 ALTER TABLE `Classroom` DISABLE KEYS */;
INSERT INTO `Classroom` (`id`, `title`, `position`) VALUES
	(1, '382(Л4)', '3 этаж где алгем был');
/*!40000 ALTER TABLE `Classroom` ENABLE KEYS */;


-- Дамп структуры для таблица csf.Discipline
CREATE TABLE IF NOT EXISTS `Discipline` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы csf.Discipline: ~3 rows (приблизительно)
DELETE FROM `Discipline`;
/*!40000 ALTER TABLE `Discipline` DISABLE KEYS */;
INSERT INTO `Discipline` (`id`, `title`) VALUES
	(1, 'Квантовая теория (лекция)'),
	(2, 'С++ (лекция)'),
	(3, 'Компьютерные сети (лекция)');
/*!40000 ALTER TABLE `Discipline` ENABLE KEYS */;


-- Дамп структуры для таблица csf.Group
CREATE TABLE IF NOT EXISTS `Group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `capacity` int(11) DEFAULT NULL,
  `profession` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы csf.Group: ~1 rows (приблизительно)
DELETE FROM `Group`;
/*!40000 ALTER TABLE `Group` DISABLE KEYS */;
INSERT INTO `Group` (`id`, `title`, `capacity`, `profession`) VALUES
	(1, 'ПИИТ (3.1)', 13, 'Специалист компьютерных наук');
/*!40000 ALTER TABLE `Group` ENABLE KEYS */;


-- Дамп структуры для таблица csf.Professor
CREATE TABLE IF NOT EXISTS `Professor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fio` varchar(255) DEFAULT NULL,
  `disciplineId` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `Professor_fk1` (`disciplineId`),
  CONSTRAINT `Professor_fk1` FOREIGN KEY (`disciplineId`) REFERENCES `Discipline` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы csf.Professor: ~1 rows (приблизительно)
DELETE FROM `Professor`;
/*!40000 ALTER TABLE `Professor` DISABLE KEYS */;
INSERT INTO `Professor` (`id`, `fio`, `disciplineId`) VALUES
	(2, 'Запрягаев С.А.', 1);
/*!40000 ALTER TABLE `Professor` ENABLE KEYS */;


-- Дамп структуры для таблица csf.Shedule
CREATE TABLE IF NOT EXISTS `Shedule` (
  `id` int(11) NOT NULL,
  `weekday_number` int(11) DEFAULT NULL,
  `lesson_number_id` int(11) DEFAULT NULL,
  `classroom_id` int(11) DEFAULT NULL,
  `discipline_id` int(11) DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  `teacher_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `Shedule_fk1` (`weekday_number`),
  KEY `Shedule_fk2` (`lesson_number_id`),
  KEY `Shedule_fk3` (`classroom_id`),
  KEY `Shedule_fk4` (`discipline_id`),
  KEY `FK_Shedule_Group` (`group_id`),
  KEY `FK_Shedule_Professor` (`teacher_id`),
  CONSTRAINT `FK_Shedule_Group` FOREIGN KEY (`group_id`) REFERENCES `Group` (`id`),
  CONSTRAINT `FK_Shedule_Professor` FOREIGN KEY (`teacher_id`) REFERENCES `Professor` (`id`),
  CONSTRAINT `Shedule_fk1` FOREIGN KEY (`weekday_number`) REFERENCES `Weekday` (`number`),
  CONSTRAINT `Shedule_fk2` FOREIGN KEY (`lesson_number_id`) REFERENCES `CallShedule` (`lesson_number`),
  CONSTRAINT `Shedule_fk3` FOREIGN KEY (`classroom_id`) REFERENCES `Сlassroom` (`id`),
  CONSTRAINT `Shedule_fk4` FOREIGN KEY (`discipline_id`) REFERENCES `Discipline` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы csf.Shedule: ~0 rows (приблизительно)
DELETE FROM `Shedule`;
/*!40000 ALTER TABLE `Shedule` DISABLE KEYS */;
/*!40000 ALTER TABLE `Shedule` ENABLE KEYS */;


-- Дамп структуры для таблица csf.student
CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `fathername` varchar(255) NOT NULL,
  `group_id` int(11) NOT NULL,
  `grandmaster_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK__Group` (`group_id`),
  KEY `FK__Professor` (`grandmaster_id`),
  CONSTRAINT `FK__Group` FOREIGN KEY (`group_id`) REFERENCES `Group` (`id`),
  CONSTRAINT `FK__Professor` FOREIGN KEY (`grandmaster_id`) REFERENCES `Professor` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы csf.student: ~0 rows (приблизительно)
DELETE FROM `student`;
/*!40000 ALTER TABLE `student` DISABLE KEYS */;
/*!40000 ALTER TABLE `student` ENABLE KEYS */;


-- Дамп структуры для таблица csf.User
CREATE TABLE IF NOT EXISTS `User` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `login` (`login`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы csf.User: ~0 rows (приблизительно)
DELETE FROM `User`;
/*!40000 ALTER TABLE `User` DISABLE KEYS */;
/*!40000 ALTER TABLE `User` ENABLE KEYS */;


-- Дамп структуры для таблица csf.Weekday
CREATE TABLE IF NOT EXISTS `Weekday` (
  `number` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`number`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы csf.Weekday: ~6 rows (приблизительно)
DELETE FROM `Weekday`;
/*!40000 ALTER TABLE `Weekday` DISABLE KEYS */;
INSERT INTO `Weekday` (`number`, `title`) VALUES
	(1, 'Понедельник'),
	(2, 'Вторник'),
	(3, 'Среда'),
	(4, 'Четверг'),
	(5, 'Пятница'),
	(6, 'Суббота');
/*!40000 ALTER TABLE `Weekday` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
