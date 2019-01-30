-- Adminer 4.7.0 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `Article`;
CREATE TABLE `Article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `author` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `author` (`author`),
  CONSTRAINT `Article_ibfk_1` FOREIGN KEY (`author`) REFERENCES `User` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `Article` (`id`, `title`, `content`, `author`) VALUES
(2,	'test',	'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio animi earum, nam repellendus quisquam aspernatur ipsa doloremque fugit recusandae rerum tempora id commodi illo assumenda, ratione illum molestias nisi incidunt.',	7),
(3,	'test2',	'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio animi earum, nam repellendus quisquam aspernatur ipsa doloremque fugit recusandae rerum tempora id commodi illo assumenda, ratione illum molestias nisi incidunt.',	7),
(4,	'test3',	'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio animi earum, nam repellendus quisquam aspernatur ipsa doloremque fugit recusandae rerum tempora id commodi illo assumenda, ratione illum molestias nisi incidunt.',	7),
(5,	'test4',	'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio animi earum, nam repellendus quisquam aspernatur ipsa doloremque fugit recusandae rerum tempora id commodi illo assumenda, ratione illum molestias nisi incidunt.',	7),
(6,	'test5',	'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio animi earum, nam repellendus quisquam aspernatur ipsa doloremque fugit recusandae rerum tempora id commodi illo assumenda, ratione illum molestias nisi incidunt.',	7),
(7,	'test6',	'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio animi earum, nam repellendus quisquam aspernatur ipsa doloremque fugit recusandae rerum tempora id commodi illo assumenda, ratione illum molestias nisi incidunt.',	7);

-- 2019-01-30 19:39:03
