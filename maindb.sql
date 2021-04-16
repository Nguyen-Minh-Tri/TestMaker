

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+07:00";

-- Database: `TestCreator`
-- Table users
CREATE TABLE `users` (
  `uid` int NOT NULL AUTO_INCREMENT,
  `username` varchar(256) CHARACTER SET ascii COLLATE ascii_bin NOT NULL,
  `password` varchar(256) NOT NULL,
  `type` varchar(10),
  PRIMARY KEY (`uid`,`username`),
  UNIQUE KEY `UserName` (`username`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --Table subjects------------------
CREATE TABLE `subjects` (
  `id` int NOT NULL,
  `subject` varchar(256) CHARACTER SET ascii COLLATE ascii_bin NOT NULL,
  PRIMARY KEY (`id`);
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --Table Question------------------
CREATE TABLE `questions` (
  `id` varchar(10) NOT NULL,
  `content` varchar(256) NOT NULL,
  `A` varchar(256) NOT NULL,
  `B` varchar(256) NOT NULL,
  `C` varchar(256) DEFAULT NULL,
  `D` varchar(256) DEFAULT NULL,
  `correct` varchar(1) NOT NULL,
  `difficulty` varchar(16) NOT NULL,
  `subject` varchar(256) NOT NULL,
  `creator` varchar(256) CHARACTER SET ascii COLLATE ascii_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `creator_idx` (`creator`), 
  CONSTRAINT `questions_fk01` FOREIGN KEY (`creator`) REFERENCES `users` (`username`) ON DELETE NO ACTION ON UPDATE NO ACTION
  CONSTRAINT `questions_fk02` FOREIGN KEY (`subject`) REFERENCES `subjects` (`subject`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `question_id` varchar(10) NOT NULL,
  `username` varchar(256) CHARACTER SET ascii COLLATE ascii_bin NOT NULL,
  `time` datetime NOT NULL,
  `type` varchar(10) NOT NULL,
  KEY `log_fk_1_idx` (`question_id`),
  KEY `log_fk_2_idx` (`username`),
  CONSTRAINT `log_fk_1` FOREIGN KEY (`question_id`) REFERENCES `questions`(`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `log_fk_2` FOREIGN KEY (`username`) REFERENCES `users`(`username`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




-- /*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
-- /*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
-- /*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
