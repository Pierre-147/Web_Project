-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 23 oct. 2020 à 14:06
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `quiz_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `answer`
--

DROP TABLE IF EXISTS `answer`;
CREATE TABLE IF NOT EXISTS `answer` (
  `answer_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'answer identifier',
  `answer_text` varchar(255) NOT NULL COMMENT 'text of the answer',
  `is_valid_answer` tinyint(1) NOT NULL COMMENT 'valid answer for question',
  `answer_question_id` int(11) NOT NULL COMMENT 'question related',
  PRIMARY KEY (`answer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `answer`
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
(30, '10', 1, 8);

-- --------------------------------------------------------

--
-- Structure de la table `question`
--

DROP TABLE IF EXISTS `question`;
CREATE TABLE IF NOT EXISTS `question` (
  `question_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'question_identification',
  `question_title` varchar(255) NOT NULL COMMENT 'title of the question',
  `question_quizz_id` int(11) NOT NULL COMMENT 'link question quizz',
  `question_input_type` varchar(255) NOT NULL COMMENT 'input of the question',
  PRIMARY KEY (`question_id`),
  KEY `question_quizz_id_fk` (`question_quizz_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `question`
--

INSERT INTO `question` (`question_id`, `question_title`, `question_quizz_id`, `question_input_type`) VALUES
(1, 'Combien de Star Wars a realise Georges Lucas ? ', 1, 'radio'),
(2, 'Lesquels de ces personnages ne sont pas des Jedi', 1, 'checkbox'),
(3, 'Dans La Revanche des Siths quel adversaire affronte Maitre Yoda', 1, 'selecteur'),
(4, 'Quel est l\'annee de sorti du premier Star Wars', 1, 'text'),
(5, 'Dans le film \"Pulp fiction\", ou meurt le personnage incarne par John Travolta ?', 2, 'radio'),
(6, 'Parmi ces personnages, quels sont ceux qui meurent dans le film \"Django unchained\" ?', 2, 'checkbox'),
(7, 'Quel est le 1er film realise par Quentin Tarantino ?', 2, 'select'),
(8, 'Combien de films Quentin Tarantino a-t-il realise ?', 2, 'number');

-- --------------------------------------------------------

--
-- Structure de la table `quizz`
--

DROP TABLE IF EXISTS `quizz`;
CREATE TABLE IF NOT EXISTS `quizz` (
  `quizz_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Quizz Identifiant',
  `quizz_name` varchar(255) NOT NULL COMMENT 'Quizz name',
  PRIMARY KEY (`quizz_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `quizz`
--

INSERT INTO `quizz` (`quizz_id`, `quizz_name`) VALUES
(1, 'Star Wars'),
(2, 'Tarantino');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'user identifiant',
  `user_last_name` varchar(255) NOT NULL COMMENT 'user last name',
  `user_first_name` varchar(255) NOT NULL COMMENT 'user first name',
  `user_adress` longtext COMMENT 'user physical adress',
  `user_phone` varchar(255) DEFAULT NULL COMMENT 'user phone',
  `user_birthdate` datetime DEFAULT NULL,
  `user_password` varchar(255) NOT NULL COMMENT 'User Password',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `user_answer`
--

DROP TABLE IF EXISTS `user_answer`;
CREATE TABLE IF NOT EXISTS `user_answer` (
  `user_answer_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'User answer identifiant',
  `user_id` int(11) NOT NULL COMMENT 'user identifiant',
  `answer_id` int(11) NOT NULL COMMENT 'answer_id',
  `user_answer_date` timestamp NULL DEFAULT NULL COMMENT 'date of answer user',
  PRIMARY KEY (`user_answer_id`),
  KEY `user_id_fk` (`user_id`),
  KEY `answer_id_fk` (`answer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `question_quizz_id_fk` FOREIGN KEY (`question_quizz_id`) REFERENCES `quizz` (`quizz_id`);

--
-- Contraintes pour la table `user_answer`
--
ALTER TABLE `user_answer`
  ADD CONSTRAINT `answer_id_fk` FOREIGN KEY (`answer_id`) REFERENCES `answer` (`answer_id`),
  ADD CONSTRAINT `user_id_fk` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
