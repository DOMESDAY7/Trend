-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 26 déc. 2021 à 11:56
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `trends`
--

-- --------------------------------------------------------

--
-- Structure de la table `billet`
--

CREATE TABLE `billet` (
  `id_billet` int(11) NOT NULL,
  `titre` varchar(100) NOT NULL,
  `article` text NOT NULL,
  `imgName` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `short_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `billet`
--

INSERT INTO `billet` (`id_billet`, `titre`, `article`, `imgName`, `date`, `short_description`) VALUES
(17, 'test', 'test', ' 2.jpg', '2021-12-25', 'test'),
(24, 'test', 'test', '94368624_156371432577889_7556001364497928147_n.jpg', '2021-12-25', 'test');

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `id_commentaire` int(11) NOT NULL,
  `post_date` date NOT NULL,
  `content` text NOT NULL,
  `ext_billet` int(11) NOT NULL,
  `ext_utilisateur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`id_commentaire`, `post_date`, `content`, `ext_billet`, `ext_utilisateur`) VALUES
(34, '2021-10-26', 'incroyable', 2, 14),
(35, '2021-10-26', 'testtest', 2, 14),
(36, '2021-10-26', 'trend 3', 3, 14),
(37, '0000-00-00', '', 0, 0),
(38, '2021-11-05', 'trestr', 3, 14),
(39, '2021-11-05', 'bonjour', 3, 14),
(40, '2021-11-24', 'trop bien ', 4, 14);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id_utilisateur` int(11) NOT NULL,
  `pseudo` varchar(20) NOT NULL,
  `login` varchar(100) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `user_check` int(11) NOT NULL,
  `verificationKey` varchar(255) NOT NULL,
  `canComment` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id_utilisateur`, `pseudo`, `login`, `mdp`, `user_check`, `verificationKey`, `canComment`) VALUES
(14, 'admin', 'test@test', '$2y$10$4Xk74GI1soASe1mU0yXs3ObSn5./yCgfPo0YrhHCrmjNBTVMb8ltG', 1, '', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `billet`
--
ALTER TABLE `billet`
  ADD PRIMARY KEY (`id_billet`);

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`id_commentaire`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id_utilisateur`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `billet`
--
ALTER TABLE `billet`
  MODIFY `id_billet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `id_commentaire` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
