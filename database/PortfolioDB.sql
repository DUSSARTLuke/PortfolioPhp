-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mar. 19 jan. 2021 à 19:05
-- Version du serveur :  10.1.47-MariaDB-0+deb9u1
-- Version de PHP : 7.3.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";



/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `lukeduss_base`
--
DROP DATABASE IF EXISTS `lukeduss_base`;
CREATE DATABASE `lukeduss_base`;
-- --------------------------------------------------------

--
-- Structure de la table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL auto_increment,
  `libelle` varchar(50) NOT NULL,
  `lien` varchar(100) NOT NULL,
  `presentation` varchar(512) NOT NULL,
  `class` varchar(100) not null,
  `type` enum('nav','reseau') default 'nav' not null
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `pages`
--

INSERT INTO `pages` (`id`, `libelle`, `lien`, `presentation`, `class`, `type`) VALUES
(NULL, 'index', '../index.php', 'Je me présente Luke DUSSART, agé de 21 ans et étudiant en seconde année de BTS Services Informatiques aux Organisation option SLAM au Lycée Bonaparte (Toulon).<br> Sur ce portfolio, vous allez retrouver une partie de moi, mes travaux réalisés en cours mais aussi en stage. Vous serez plongé dans mon univers et en espérant que votre lecture soit bonne.', 'fas fa-home', 'nav'),
(NULL, 'Mes compétences', '../pages/competence.php', 'Cette page vous présente mes compétences générales et informatiques.', 'fas fa-clipboard-list', 'nav'),
(NULL, 'Mes expériences', '../pages/experience.php', 'Cette page vous présente mon parcours scolaire ainsi que mes expériences professionnelles.', 'fas fa-address-card', 'nav'),
(NULL, 'Mes projets', '../pages/projets.php', 'Cette page vous présente mes projets effectués en cours mais aussi en stage.', 'fas fa-sliders-h', 'nav'),
(NULL, 'Github', 'https://github.com/DUSSARTLuke', '', 'fa fa-github', 'reseau'),
(NULL, 'Linkedin', 'https://www.linkedin.com/in/luke-dussart/', '', 'fa fa-linkedin', 'reseau'),
(NULL, 'Facebook', 'https://www.facebook.com/luke.dussart/', '', 'fa fa-facebook', 'reseau');
--
-- Index pour les tables déchargées
--

--
-- Index pour la table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Structure de la table `experience`
--

CREATE table `experience`(
  `id` int(11) NOT NULL auto_increment,
  `nom_entreprise` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `intitule` varchar(50) NOT NULL,
  `presentation` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `pages`
--

Insert into experience (`id`, `nom_entreprise`, `date`, `intitule`, `presentation`) values
(NULL, 'Optimum CIT', '2020-05-01', 'Développement PHP Symfony 4', "Création/mise en œuvre de bundles, création de services, création de commandes, respect de l'architecture MVC, création de templates avec Twig, gestion de la persistance avec Doctrine."),
(NULL, 'BNP Paribas PF', '2019-07-01', 'Auxiliaire de vacances', "Traitement des dossiers arrivés sur une application web de courtage, vérification des données et transmission des dossiers au service d'étude"),
(NULL, 'Love Radius', '2021-01-11', 'Développement web', "Création de nouvelles interfaces graphiques, de MCD dirigé à l'élaboration de tables de base de données, utilisation de langage tel que HTML, CSS, PHP, JS, SQL");

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id`);

--
-- Structure de la table `parcours_sco`
--

CREATE table `parcours_sco`(
  `id` int(11) NOT NULL auto_increment,
  `date_obtention` date NOT NULL,
  `intitule` varchar(50) NOT NULL,
  `etat` varchar(50) NOT NULL,
  `description` varchar(512) NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `parcours_sco`
--

INSERT into parcours_sco (`id`, `date_obtention`, `intitule`, `etat`, `description`) values
(NULL, '2021-07-01', 'BTS SIO option SLAM', 'En cours', 'Brevet de Technicien Supérieur "Services Informatiques aux Organisations ", option "Solutions Logicielles et Applications Métiers "'),
(NULL, '2019-07-01', 'Licence STAPS spécialité ES', 'Arrêté mais DEUG obtenu', 'Licence STAPS "Sciences et Techniques des Activités Sportives" spécialité ES "Entraînement Sportif"'),
(NULL, '2017-07-01', 'BAC ES spécialité mathématiques', 'Obtenu mention Très Bien', 'Baccalauréat Econimique et Social spécialité mathématiques'),
(NULL, '2014-07-01', 'Brevet des collèges', 'Obtenu mention Très Bien', NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `parcours_sco`
--
ALTER TABLE `parcours_sco`
  ADD PRIMARY KEY (`id`);

--
-- Structure de la table `competence_gen`
--

CREATE table `competence_gen`(
  `id` int(11) NOT NULL auto_increment,
  `libelle` varchar(100) NOT NULL,
  `taille` int NOT NULL,
  `class` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `competennce_gen`
--

INSERT into competence_gen (`id`, `libelle`, `taille`, `class`) values
(NULL, 'informatique', 80, 'success'),
(NULL, 'mathématiques', 70, 'danger'),
(NULL, 'economie', 65, 'primary');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `parcours_sco`
--
ALTER TABLE `competence_gen`
  ADD PRIMARY KEY (`id`);

--
-- Structure de la table `competence_info`
--

CREATE table `competence_info`(
  `id` int(11) NOT NULL auto_increment,
  `libelle` varchar(100) NOT NULL,
  `lien` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `competennce_gen`
--

INSERT into competence_info (`id`, `libelle`, `lien`) values
(NULL, 'Développement Web', 'devWeb'),
(NULL, 'Développement logiciel', 'devLog'),
(NULL, 'IDE', 'ide'),
(NULL, "Système d'exploitation", 'OS'),
(NULL, 'Outils informatiques', 'outilsInfo');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `competence_info`
--
ALTER TABLE `competence_info`
  ADD PRIMARY KEY (`id`);

--
-- Structure de la table `competence_info_spe`
--

CREATE table `competence_info_spe`(
  `id` int(11) NOT NULL auto_increment,
  `libelle` varchar(100) NOT NULL,
  `taille` int NOT NULL,
  `icone` varchar(100) NOT NULL,
  `type` int(11) not null  
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `competence_info_spe`
--

INSERT into competence_info_spe (`id`, `libelle`, `taille`, `icone`, `type`) values
(NULL, 'HTML5', 80, 'devicon-html5-plain-wordmark', '1'),
(NULL, 'Twitter Bootstrap', 70, 'devicon-bootstrap-plain-wordmark', '1'),
(NULL, 'CSS3', 50, 'devicon-css3-plain-wordmark competence-logo', '1'),
(NULL, 'JavaScript', 65, 'devicon-javascript-plain', '1'),
(NULL, 'Jquery', 60, 'devicon-jquery-plain-wordmark', '1'),
(NULL, 'PHP', 80, 'devicon-php-plain', '1'),
(NULL, 'symfony', 75, 'devicon-symfony-original-wordmark', '1'),
(NULL, 'C#', 65, 'devicon-csharp-plain', '2'),
(NULL, 'Java', 50, 'devicon-java-plain-wordmark', '2'),
(NULL, 'python', 60, 'devicon-python-plain-wordmark', '2'),
(NULL, 'JetBrains', 65, 'devicon-jetbrains-plain-wordmark', '3'),
(NULL, 'Oracle Sql Developer', 80, 'devicon-oracle-original', '3'),
(NULL, 'PHP Storm', 75, 'devicon-phpstorm-plain-wordmark', '3'),
(NULL, 'Visual Studio', 85, 'devicon-visualstudio-plain-wordmark', '3'),
(NULL, 'Android', 70, 'devicon-android-plain-wordmark', '4'),
(NULL, 'Debian', 55, 'devicon-debian-plain-wordmark', '4'),
(NULL, 'Windows 10', 85, 'devicon-windows8-original', '4'),
(NULL, 'Google chrome', 75, 'devicon-chrome-plain-wordmark', '5'),
(NULL, 'composer', 70, 'devicon-composer-line-wordmark', '5'),
(NULL, 'Firefox', 75, 'devicon-firefox-plain-wordmark', '5'),
(NULL, 'Git', 85, 'devicon-git-plain-wordmark', '5'),
(NULL, 'Github', 85, 'devicon-github-original-wordmark', '5'),
(NULL, 'GitLab', 75, 'devicon-gitlab-plain-wordmark', '5'),
(NULL, 'MySql', 90, 'devicon-mysql-plain-wordmark', '5'),
(NULL, 'Postgresql', 85, 'devicon-postgresql-plain-wordmark', '5'),
(NULL, 'Slack', 65, 'devicon-slack-plain-wordmark', '5'),
(NULL, 'Trello', 75, 'devicon-trello-plain-wordmark', '5');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `competence_info_spe`
--
ALTER TABLE `competence_info_spe`
  ADD PRIMARY KEY (`id`);





/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
