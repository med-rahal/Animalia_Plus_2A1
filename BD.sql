-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 03 mai 2021 à 23:42
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `animalia`
--

-- --------------------------------------------------------

--
-- Structure de la table `accessoire`
--

CREATE TABLE `accessoire` (
  `id_alimentation` int(11) NOT NULL,
  `ref_alimentation` varchar(40) NOT NULL,
  `categorie_alimentation` varchar(50) NOT NULL,
  `nom_alimentation` varchar(50) NOT NULL,
  `prix` float NOT NULL,
  `type` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

CREATE TABLE `administrateur` (
  `id_admin` int(11) NOT NULL,
  `nom_administrateur` varchar(40) NOT NULL,
  `mot_passe` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `administrateur`
--

INSERT INTO `administrateur` (`id_admin`, `nom_administrateur`, `mot_passe`) VALUES
(1, 'Mohamed_rahal', 'animalia_2021'),
(2, 'Houssem', '126458');

-- --------------------------------------------------------

--
-- Structure de la table `animal`
--

CREATE TABLE `animal` (
  `id` int(11) NOT NULL,
  `nom` varchar(40) NOT NULL,
  `prix` float NOT NULL,
  `race` varchar(40) NOT NULL,
  `id_client` int(11) NOT NULL,
  `categorie_animal` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `categories_accessoires`
--

CREATE TABLE `categories_accessoires` (
  `categorie_accessoire` varchar(50) NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `categories_animaux`
--

CREATE TABLE `categories_animaux` (
  `id` int(11) NOT NULL,
  `categorie_animal` varchar(40) NOT NULL,
  `description` longtext NOT NULL,
  `duree_vie` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `categories_plantes`
--

CREATE TABLE `categories_plantes` (
  `nom_categorie` varchar(40) NOT NULL,
  `description` text NOT NULL,
  `duree_vie` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id_client` int(11) NOT NULL,
  `nom_client` varchar(40) NOT NULL,
  `prenom_client` varchar(40) NOT NULL,
  `date_naissance` date NOT NULL,
  `type_client` varchar(40) NOT NULL,
  `email_client` varchar(40) NOT NULL,
  `login_client` varchar(40) NOT NULL,
  `mot_passe` varchar(40) NOT NULL,
  `id_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id_client`, `nom_client`, `prenom_client`, `date_naissance`, `type_client`, `email_client`, `login_client`, `mot_passe`, `id_admin`) VALUES
(1, 'aziz', 'abdallah', '1990-04-14', 'Client', 'abouda.maam@gmail.com', 'Abouda_maam', '20122021', 1),
(2, 'samer', 'amara', '2000-01-01', 'vendeur', 'sameh.samir@gmail.com', 'Sameh_samir', '12345', 1),
(4, 'iheb', 'belaarbi', '1988-01-01', 'Client', 'mehrez.belaarbi@gmail.com', 'Mehrez_belaarbi', '1978', 1),
(12, 'Mohamed', 'Rahal', '1999-01-01', 'Client', 'rahalmed467@gmail.com', 'Rahal_12', 'AZERTYUIOP', 1);

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `commentaire` longtext NOT NULL,
  `date_com` datetime NOT NULL,
  `id_client` int(11) NOT NULL,
  `id_publication` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`id`, `nom`, `commentaire`, `date_com`, `id_client`, `id_publication`) VALUES
(8, 'mehrez_belaarbi', 'ssss', '2021-04-26 16:50:50', 4, 2),
(9, 'mehrez_belaarbi', 'salem 5oya', '2021-04-26 16:51:05', 4, 2),
(10, 'mehrez_belaarbi', 'salem 5oya', '2021-04-26 16:51:12', 4, 2),
(11, 'mehrez_belaarbi', 'salem 5oya', '2021-04-26 16:51:15', 4, 2),
(12, 'mehrez_belaarbi', 'salem 5oya', '2021-04-26 16:51:16', 4, 2),
(13, 'mehrez_belaarbi', 'saaa', '2021-04-26 16:51:25', 4, 2),
(14, 'mehrez_belaarbi', 'saaaaaa', '2021-04-26 16:51:41', 4, 2),
(15, 'mehrez_belaarbi', 'mansss', '2021-04-26 16:52:20', 4, 2),
(16, 'mehrez_belaarbi', 'bienvenue', '2021-04-26 16:54:35', 4, 2),
(17, 'mehrez_belaarbi', 'aaa', '2021-04-26 16:54:44', 4, 2),
(18, 'mehrez_belaarbi', 'aaaaa', '2021-04-26 16:54:48', 4, 2),
(19, 'mehrez_belaarbi', 'aaaaaaaa', '2021-04-26 16:54:53', 4, 2),
(20, 'mehrez_belaarbi', 'aaaaaaaaaa', '2021-04-26 16:54:58', 4, 2),
(21, 'mehrez_belaarbi', 'aaaaaaaaaa', '2021-04-26 16:55:48', 4, 2),
(22, 'mehrez_belaarbi', 'ssss', '2021-04-26 16:55:58', 4, 2),
(23, 'mehrez_belaarbi', 'ssss', '2021-04-26 16:56:18', 4, 2),
(24, 'mehrez_belaarbi', 'aded', '2021-04-26 16:56:23', 4, 2),
(25, 'mehrez_belaarbi', 'marhbe bik ', '2021-04-26 16:56:33', 4, 2),
(26, 'mehrez_belaarbi', 'aaa', '2021-04-26 16:56:48', 4, 3),
(27, 'mehrez_belaarbi', 'labes cv ?', '2021-04-26 16:56:57', 4, 3),
(28, 'mehrez_belaarbi', 'winek enty', '2021-04-26 17:22:36', 4, 3),
(29, 'abouda_maam', 'Bonjour', '2021-04-27 00:12:36', 1, 4),
(30, 'sssss', 'Bonjour', '2021-04-27 00:15:17', 2, 4),
(31, 'sssss', 'Bonjour ', '2021-04-27 08:26:08', 2, 4),
(32, 'sssss', 'salut', '2021-04-27 10:52:45', 2, 4),
(33, 'Sameh_samir', 'bonjour', '2021-04-27 12:08:08', 2, 4);

-- --------------------------------------------------------

--
-- Structure de la table `location_tab`
--

CREATE TABLE `location_tab` (
  `locationLatitude` varchar(50) NOT NULL,
  `locationLongitude` varchar(50) NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `plante`
--

CREATE TABLE `plante` (
  `ref_plante` int(40) NOT NULL,
  `nom_categorie` varchar(40) NOT NULL,
  `nom_plante` varchar(40) NOT NULL,
  `prix` float NOT NULL,
  `date_plante` date NOT NULL,
  `image` blob NOT NULL,
  `id_client` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `publication`
--

CREATE TABLE `publication` (
  `id` int(11) NOT NULL,
  `titre` varchar(100) NOT NULL,
  `categorie` varchar(100) NOT NULL,
  `publication` longtext NOT NULL,
  `image` varchar(100) NOT NULL,
  `date_publication` datetime NOT NULL,
  `id_client` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `publication`
--

INSERT INTO `publication` (`id`, `titre`, `categorie`, `publication`, `image`, `date_publication`, `id_client`) VALUES
(2, 'Aide', 'Aide', 'Bonjour ', '../assets/images/favicon.png', '2021-04-02 15:07:49', 1),
(4, 'Rassemblement', 'Declaration', 'Bonjour je suis mohamed rahal client sur votre site animalia plus \r\n\r\n', '../assets/images/favicon.png', '2021-04-02 15:07:49', 4),
(5, 'Questionnaire', 'Questions', '\"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.\"', '../assets/images/favicon.png', '2021-04-16 15:21:32', 4);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `accessoire`
--
ALTER TABLE `accessoire`
  ADD PRIMARY KEY (`ref_alimentation`),
  ADD KEY `accessoire_fk1` (`categorie_alimentation`);

--
-- Index pour la table `administrateur`
--
ALTER TABLE `administrateur`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `mot_passe` (`mot_passe`),
  ADD UNIQUE KEY `id_admin` (`id_admin`);

--
-- Index pour la table `animal`
--
ALTER TABLE `animal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_categorie_animal` (`categorie_animal`),
  ADD KEY `fk1_animal` (`id_client`);

--
-- Index pour la table `categories_accessoires`
--
ALTER TABLE `categories_accessoires`
  ADD PRIMARY KEY (`categorie_accessoire`);

--
-- Index pour la table `categories_animaux`
--
ALTER TABLE `categories_animaux`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `categories_plantes`
--
ALTER TABLE `categories_plantes`
  ADD PRIMARY KEY (`nom_categorie`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client`),
  ADD KEY `fk_idadmin` (`id_admin`);

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_idpub` (`id_publication`),
  ADD KEY `fk_idclient` (`id_client`);

--
-- Index pour la table `plante`
--
ALTER TABLE `plante`
  ADD PRIMARY KEY (`ref_plante`),
  ADD KEY `nom_categorie` (`nom_categorie`),
  ADD KEY `id_client` (`id_client`);

--
-- Index pour la table `publication`
--
ALTER TABLE `publication`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_client` (`id_client`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT pour la table `plante`
--
ALTER TABLE `plante`
  MODIFY `ref_plante` int(40) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `accessoire`
--
ALTER TABLE `accessoire`
  ADD CONSTRAINT `accessoire_fk1` FOREIGN KEY (`categorie_alimentation`) REFERENCES `categories_accessoires` (`categorie_accessoire`);

--
-- Contraintes pour la table `animal`
--
ALTER TABLE `animal`
  ADD CONSTRAINT `fk1_animal` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`),
  ADD CONSTRAINT `fk2_animal` FOREIGN KEY (`categorie_animal`) REFERENCES `categories_animaux` (`categorie_animal`);

--
-- Contraintes pour la table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `client_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `administrateur` (`id_admin`);

--
-- Contraintes pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD CONSTRAINT `commentaire_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`);

--
-- Contraintes pour la table `plante`
--
ALTER TABLE `plante`
  ADD CONSTRAINT `fk1_plante` FOREIGN KEY (`nom_categorie`) REFERENCES `categories_plantes` (`nom_categorie`),
  ADD CONSTRAINT `fk2_plante` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
