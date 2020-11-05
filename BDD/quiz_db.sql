-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 05, 2020 at 07:15 PM
-- Server version: 8.0.22-0ubuntu0.20.04.2
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `answer_id` int NOT NULL COMMENT 'answer identifier',
  `answer_text` varchar(255) NOT NULL COMMENT 'text of the answer',
  `is_valid_answer` tinyint(1) NOT NULL COMMENT 'valid answer for question',
  `answer_question_id` int NOT NULL COMMENT 'question related'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`answer_id`, `answer_text`, `is_valid_answer`, `answer_question_id`) VALUES
(1, '6', 1, 1),
(2, '9', 0, 1),
(3, '12', 0, 1),
(4, 'Yoda', 0, 2),
(5, 'Jar Jar Binks', 1, 2),
(6, 'R2D2', 1, 2),
(7, 'Ahsoka Tano', 0, 2),
(8, 'Dark Plageis', 0, 3),
(9, 'Dark Maul', 0, 3),
(10, 'Dark Sidious', 1, 3),
(11, '1977', 1, 4),
(12, 'Dans une cuisine', 0, 5),
(13, 'Dans une voiture', 0, 5),
(14, 'Aux toilettes', 1, 5),
(15, 'Dans un bar', 0, 5),
(16, 'Django', 0, 6),
(17, 'Dr King Schultz', 1, 6),
(18, 'Calvin Candie', 1, 6),
(19, 'Broomhilda von Shaft', 0, 6),
(20, 'Pulp fiction', 0, 7),
(21, 'Django unchained', 0, 7),
(22, 'Jacky Brown', 0, 7),
(23, 'Reservoir dogs', 1, 7),
(24, 'Boulevard de la mort', 0, 7),
(25, 'Kill Bill Volume 1', 0, 7),
(26, 'Inglorious basterds', 0, 7),
(27, 'Les 8 salopards', 0, 7),
(30, '10', 1, 8),
(31, '1', 1, 9),
(32, 'I', 1, 10),
(33, 'II', 1, 10),
(34, 'III', 1, 10),
(35, 'IV', 0, 10),
(36, 'V', 1, 10),
(37, 'VI', 1, 10),
(38, 'VII', 0, 10),
(39, 'VIII', 1, 10),
(40, 'IX', 0, 10);

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `question_id` int NOT NULL COMMENT 'question_identification',
  `question_title` varchar(255) NOT NULL COMMENT 'title of the question',
  `question_quizz_id` int NOT NULL COMMENT 'link question quizz',
  `question_input_type` varchar(255) NOT NULL COMMENT 'input of the question'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`question_id`, `question_title`, `question_quizz_id`, `question_input_type`) VALUES
(1, 'Combien de Star Wars a realise Georges Lucas ? ', 1, 'radio'),
(2, 'Lesquels de ces personnages ne sont pas des Jedi ?', 1, 'checkbox'),
(3, 'Dans La Revanche des Siths quel adversaire affronte Maitre Yoda ?', 1, 'select'),
(4, 'Quel est l\'annee de sorti du premier Star Wars ?', 1, 'input'),
(5, 'Dans le film \"Pulp fiction\", ou meurt le personnage incarne par John Travolta ?', 2, 'radio'),
(6, 'Parmi ces personnages, quels sont ceux qui meurent dans le film \"Django unchained\" ?', 2, 'checkbox'),
(7, 'Quel est le 1er film realise par Quentin Tarantino ?', 2, 'select'),
(8, 'Combien de films Quentin Tarantino a-t-il realise ?', 2, 'input'),
(9, 'Combien de Padawan a le droit de former un Jedi ?', 1, 'input'),
(10, 'Dans quels films Yoda apparait-il?', 1, 'checkbox');

-- --------------------------------------------------------

--
-- Table structure for table `quizz`
--

CREATE TABLE `quizz` (
  `quizz_id` int NOT NULL COMMENT 'Quizz Identifiant',
  `quizz_name` varchar(255) NOT NULL COMMENT 'Quizz name'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `quizz`
--

INSERT INTO `quizz` (`quizz_id`, `quizz_name`) VALUES
(1, 'Star Wars'),
(2, 'Tarantino');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int NOT NULL COMMENT 'user identifiant',
  `user_last_name` varchar(255) NOT NULL COMMENT 'user last name',
  `user_first_name` varchar(255) NOT NULL COMMENT 'user first name',
  `user_adress` longtext COMMENT 'user physical adress',
  `user_phone` varchar(255) DEFAULT NULL COMMENT 'user phone',
  `user_birthdate` datetime DEFAULT NULL,
  `user_password` varchar(255) NOT NULL COMMENT 'User Password'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user_answer`
--

CREATE TABLE `user_answer` (
  `user_answer_id` int NOT NULL COMMENT 'User answer identifiant',
  `user_id` int NOT NULL COMMENT 'user identifiant',
  `answer_id` int NOT NULL COMMENT 'answer_id',
  `user_answer_date` timestamp NULL DEFAULT NULL COMMENT 'date of answer user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`answer_id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`question_id`),
  ADD KEY `question_quizz_id_fk` (`question_quizz_id`);

--
-- Indexes for table `quizz`
--
ALTER TABLE `quizz`
  ADD PRIMARY KEY (`quizz_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_answer`
--
ALTER TABLE `user_answer`
  ADD PRIMARY KEY (`user_answer_id`),
  ADD KEY `user_id_fk` (`user_id`),
  ADD KEY `answer_id_fk` (`answer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answer`
--
ALTER TABLE `answer`
  MODIFY `answer_id` int NOT NULL AUTO_INCREMENT COMMENT 'answer identifier', AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `question_id` int NOT NULL AUTO_INCREMENT COMMENT 'question_identification', AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `quizz`
--
ALTER TABLE `quizz`
  MODIFY `quizz_id` int NOT NULL AUTO_INCREMENT COMMENT 'Quizz Identifiant', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT COMMENT 'user identifiant';

--
-- AUTO_INCREMENT for table `user_answer`
--
ALTER TABLE `user_answer`
  MODIFY `user_answer_id` int NOT NULL AUTO_INCREMENT COMMENT 'User answer identifiant';

--
-- Constraints for dumped tables
--

--
-- Constraints for table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `question_quizz_id_fk` FOREIGN KEY (`question_quizz_id`) REFERENCES `quizz` (`quizz_id`);

--
-- Constraints for table `user_answer`
--
ALTER TABLE `user_answer`
  ADD CONSTRAINT `answer_id_fk` FOREIGN KEY (`answer_id`) REFERENCES `answer` (`answer_id`),
  ADD CONSTRAINT `user_id_fk` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
