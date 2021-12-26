-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 26 déc. 2021 à 19:02
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
(14, 'admin', 'test@test', '$2y$10$4Xk74GI1soASe1mU0yXs3ObSn5./yCgfPo0YrhHCrmjNBTVMb8ltG', 1, '', 1),
(22, 'test', 'test@test', '$2y$10$AHZv2ZxEFLPErM7Vhus3NuZuYu3ZzufQndp9w7/dJC0etqC.fQ9na', 0, '$2y$10$gp7FG1W2jaS5vM71.ZCxu.kpNISYWA4N5blfrybU5IjJMHGcHROf6', 0),
(23, 'test', 'test@test', '$2y$10$N7E6JnJcwow.qrSzs9Rv0e5ZWgaHMaTWrG.Zs87zVKmZa7IGih8Uy', 0, '$2y$10$XjFx0cYzD2b73RXFag1PeucGxEE9CZHigQQksdiZ1H2gstj0rzKQC', 0),
(24, 'test', 'test@test', '$2y$10$h9CCq7fPZcOUbKZTubwSbOtgBRh04SIuexyKK.zt713e2H.rQ65ry', 0, '$2y$10$vVPiqy5JMIB8T5XQIFLOJuG0gUddORHB6HlMG2qAEtOCr2x/SLb/O', 0),
(25, 'test', 'test@test', '$2y$10$Pz7JRgfES/9HsN3opthTZO9v2uUGgLR6UtBvc08iUSQ6LcQEKVxHm', 0, '$2y$10$JSfxJ58JS1z.HIb.O7mxguKZZ/AH5GENiMnw17EHV4lTqU1sGgkye', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id_utilisateur`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
