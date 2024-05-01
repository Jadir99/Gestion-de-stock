-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 25 déc. 2022 à 05:09
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projet_gestion_stock`
--

-- --------------------------------------------------------

--
-- Structure de la table `achat`
--

CREATE TABLE `achat` (
  `num_achat` int(11) NOT NULL,
  `reference` int(11) NOT NULL,
  `num_apro` int(11) NOT NULL,
  `prix_totale` int(11) DEFAULT NULL,
  `quantiti_achat` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(40) DEFAULT NULL,
  `password` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'jadir', 'jadirhh'),
(2, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `approvisionnement`
--

CREATE TABLE `approvisionnement` (
  `id_apro` int(11) NOT NULL,
  `date_apro` date DEFAULT NULL,
  `id_for` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `approvisionnement2`
--

CREATE TABLE `approvisionnement2` (
  `id_apro` int(11) NOT NULL,
  `date_apro` date NOT NULL,
  `id_for` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `approvisionnement2`
--

INSERT INTO `approvisionnement2` (`id_apro`, `date_apro`, `id_for`) VALUES
(66, '2022-12-21', 19),
(98, '2022-12-23', 20);

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id_cat` int(11) NOT NULL,
  `nom_cat` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id_cat`, `nom_cat`) VALUES
(15, 'flex'),
(20, 'Gaming');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id_client` int(11) NOT NULL,
  `nom` varchar(29) DEFAULT NULL,
  `prenom` varchar(30) DEFAULT NULL,
  `adresse` varchar(30) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `tele` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id_client`, `nom`, `prenom`, `adresse`, `email`, `tele`) VALUES
(41, 'simo', 'Jadir', 'essaouuira', 'mohamad.jadir2018@gmail.com', '0682846580'),
(64, 'Jelloulii', 'Youness', 'Casablanca', 'jellouli@gmail.com', '0789765432'),
(65, 'Yahya', 'Lemkharbach', 'zemamra', 'yahya@gmail.com', '0687989854'),
(66, 'Kamal', 'Idoufkir', 'Agadir', 'Kamal@gmail.com', '0676768889'),
(69, 'samir', 'samir', 'safi', 'samir2018@gmail.com', '9876543'),
(71, 'karim', 'karim', 'KSA', 'karim@hotmail.com', '0660'),
(72, 'JHABH', 'ABDELLAH', 'k', 'mohamad.jadir2018@gmail.com', '0683846580'),
(73, 'jadir', 'mohammed', 'IUGIU', 'mohamad.jadir2018@gmail.com', '231');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id_client` int(11) NOT NULL,
  `num_com` int(11) NOT NULL,
  `date_commande` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`id_client`, `num_com`, `date_commande`) VALUES
(41, 0, '2012-05-07'),
(41, 5, '2012-05-07'),
(41, 8, '2012-05-07');

-- --------------------------------------------------------

--
-- Structure de la table `commande2`
--

CREATE TABLE `commande2` (
  `num_com` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `date_commande` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `commande2`
--

INSERT INTO `commande2` (`num_com`, `id_client`, `date_commande`) VALUES
(2, 41, '2022-12-24'),
(8, 41, '2022-12-23'),
(21, 64, '2022-12-23'),
(22, 64, '2022-12-23'),
(44, 64, '2022-12-24'),
(45, 41, '2022-12-24'),
(223, 65, '2022-12-21'),
(766, 66, '2022-12-23'),
(767, 64, '2022-12-19'),
(1115, 64, '2022-12-22'),
(4545, 66, '2022-12-24'),
(6567, 66, '2022-12-21'),
(7667, 65, '2022-12-23'),
(212123, 41, '2022-12-24'),
(876999, 41, '2022-12-24'),
(877000, 41, '2022-12-24');

-- --------------------------------------------------------

--
-- Structure de la table `commandes`
--

CREATE TABLE `commandes` (
  `id_Commande` int(50) NOT NULL,
  `id_Client` int(11) DEFAULT NULL,
  `Num_Produit` varchar(250) NOT NULL,
  `SUBTOTAL` varchar(50) NOT NULL,
  `LESSVAT` varchar(50) NOT NULL,
  `NETVAT` varchar(50) NOT NULL,
  `ADDVAT` varchar(50) NOT NULL,
  `GRANDTOTAL` varchar(250) NOT NULL,
  `CASH` varchar(250) NOT NULL,
  `DATE` varchar(50) NOT NULL,
  `Commande_D_ID` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commandes`
--

INSERT INTO `commandes` (`id_Commande`, `id_Client`, `Num_Produit`, `SUBTOTAL`, `LESSVAT`, `NETVAT`, `ADDVAT`, `GRANDTOTAL`, `CASH`, `DATE`, `Commande_D_ID`) VALUES
(1, 1, '2', '29,800.00', '3,192.86', '26,607.14', '3,192.86', '29,800.00', '30000', '2022-12-15 22:42 pm', '1215224247'),
(2, 12, '2', '9,600.00', '1,028.57', '8,571.43', '1,028.57', '9,600.00', '131131', '2022-12-15 23:28 pm', '1215232853'),
(3, 1, '6', '49,650.00', '5,319.64', '44,330.36', '5,319.64', '49,650.00', '12331', '2022-12-16 00:11 am', '121601153'),
(4, 1, '2', '53,400.00', '5,721.43', '47,678.57', '5,721.43', '53,400.00', '312', '2022-12-16 00:18 am', '121601932'),
(5, 1, '1', '400.00', '42.86', '357.14', '42.86', '400.00', '9', '2022-12-16 03:39 am', '121634009'),
(6, 20, '1', '1,800.00', '192.86', '1,607.14', '192.86', '1,800.00', '0', '2022-12-16 03:41 am', '121634113'),
(7, 12, '1', '117,000.00', '12,535.71', '104,464.29', '12,535.71', '117,000.00', '0', '2022-12-16 03:53 am', '121635322'),
(8, 1, '1', '9,296,000.00', '996,000.00', '8,300,000.00', '996,000.00', '9,296,000.00', '34', '2022-12-16 04:32 am', '121643224'),
(9, 1, '3', '9,120.00', '977.14', '8,142.86', '977.14', '9,120.00', '241', '2022-12-16 20:17 pm', '1216201723'),
(10, 12, '2', '53,800.00', '5,764.29', '48,035.71', '5,764.29', '53,800.00', '12', '2022-12-19 22:56 pm', '1219225651'),
(11, 1, '1', '8,000.00', '857.14', '7,142.86', '857.14', '8,000.00', '10000', '2022-12-20 17:06 pm', '1220170701'),
(12, 20, '1', '3,900.00', '354.55', '3,545.45', '354.55', '3,900.00', '4000', '2022-12-20 17:40 pm', '1220174016'),
(13, 12, '1', '11,000.00', '1,178.57', '9,821.43', '1,178.57', '11,000.00', '144', '2022-12-22 01:51 am', '122215259');

-- --------------------------------------------------------

--
-- Structure de la table `commandes_details`
--

CREATE TABLE `commandes_details` (
  `ID` int(11) NOT NULL,
  `Commande_D_ID` varchar(250) NOT NULL,
  `Produits` varchar(250) NOT NULL,
  `Qty` varchar(250) NOT NULL,
  `Prix` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commandes_details`
--

INSERT INTO `commandes_details` (`ID`, `Commande_D_ID`, `Produits`, `Qty`, `Prix`) VALUES
(1, '1215224247', 'Canon EOS Rebel T7', '7', '4000'),
(2, '1215224247', 'Portable Washing Machine', '1', '1800'),
(3, '1215232853', 'Canon EOS Rebel T7', '2', '4000'),
(4, '1215232853', 'Hand Mixer Electric', '4', '400'),
(5, '121601153', 'Newmen E120', '1', '550'),
(6, '121601153', 'Hand Mixer Electric', '10', '400'),
(7, '121601153', 'Lenovo 2022 Laptop', '1', '3900'),
(8, '121601153', 'Canon EOS Rebel T7', '3', '4000'),
(9, '121601153', 'Portable Washing Machine', '4', '1800'),
(10, '121601153', ' SAMSUNG Galaxy S21', '4', '5500'),
(11, '121601932', 'Canon EOS Rebel T7', '12', '4000'),
(12, '121601932', 'Portable Washing Machine', '3', '1800'),
(13, '121634009', 'Hand Mixer Electric', '1', '400'),
(14, '121634113', 'Portable Washing Machine', '1', '1800'),
(15, '121635322', 'Lenovo 2022 Laptop', '30', '3900'),
(16, '121643224', 'Canon EOS Rebel T7', '2324', '4000'),
(17, '1216201723', 'Canon EOS Rebel T7', '2', '4000'),
(18, '1216201723', 'Hand Mixer Electric', '1', '400'),
(19, '1216201723', ' Redragon M690-1 Gaming Mouse', '6', '120'),
(20, '1219225651', 'Canon EOS Rebel T7', '13', '4000'),
(21, '1219225651', 'Portable Washing Machine', '1', '1800'),
(22, '1220170701', 'Canon EOS Rebel T7', '2', '4000'),
(23, '1220174016', 'Lenovo 2022 Laptop', '1', '3900'),
(24, '122215259', ' SAMSUNG Galaxy S21', '2', '5500');

-- --------------------------------------------------------

--
-- Structure de la table `detail`
--

CREATE TABLE `detail` (
  `num_detail` int(11) NOT NULL,
  `reference` int(11) NOT NULL,
  `num_com` int(11) NOT NULL,
  `quantiti_commande` int(11) NOT NULL,
  `prix_totale` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `detail`
--

INSERT INTO `detail` (`num_detail`, `reference`, `num_com`, `quantiti_commande`, `prix_totale`) VALUES
(11163, 95, 767, 1, 100),
(11164, 96, 767, 1, 750),
(11166, 98, 767, 5, 700),
(11174, 98, 766, 1, 98),
(11180, 98, 7667, 2, 280),
(11181, 96, 21, 1, 750),
(11182, 98, 22, 1, 140),
(11191, 95, 2, 9, 900),
(11192, 96, 2, 5, 3750),
(11193, 98, 2, 2, 280),
(11196, 95, 4545, 8, 800),
(11197, 96, 4545, 2, 1500),
(11198, 98, 4545, 1, 140),
(11201, 98, 44, 1, 140),
(11202, 96, 44, 2, 1500),
(11203, 95, 44, 6, 600),
(11207, 98, 212123, 1, 140),
(11208, 96, 212123, 1, 750),
(11209, 95, 212123, 1, 100);

-- --------------------------------------------------------

--
-- Structure de la table `fournisseur`
--

CREATE TABLE `fournisseur` (
  `id_for` int(11) NOT NULL,
  `nom_for` varchar(29) DEFAULT NULL,
  `prenom_for` varchar(30) DEFAULT NULL,
  `adresse_for` varchar(30) DEFAULT NULL,
  `email_for` varchar(40) DEFAULT NULL,
  `tele_for` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `fournisseur`
--

INSERT INTO `fournisseur` (`id_for`, `nom_for`, `prenom_for`, `adresse_for`, `email_for`, `tele_for`) VALUES
(19, 'jelle', 'Lyami9', 'Casa', 'Lyami9@gmail.com', '0600876560'),
(20, 'Yahya', 'yahya', 'inconnu', 'yahya@gmail.com', '06999999'),
(21, 'mohammed', 'jadir', 'Essaouira', 'mohamad.jadir2018@gmail.com', '0683846580'),
(22, 'jadir', 'mohammed', 'essaouuira', 'mohamad.jadir2018@gmail.com', '0683846580'),
(23, 'JHABH', '', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `reference` int(11) NOT NULL,
  `libelle` varchar(20) DEFAULT NULL,
  `prix_Unitair` int(11) DEFAULT NULL,
  `quantite_stock` int(11) DEFAULT NULL,
  `prix_achat` int(11) DEFAULT NULL,
  `prix_vent` int(11) DEFAULT NULL,
  `description` varchar(70) DEFAULT NULL,
  `img` longblob DEFAULT NULL,
  `id_cat` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`reference`, `libelle`, `prix_Unitair`, `quantite_stock`, `prix_achat`, `prix_vent`, `description`, `img`, `id_cat`) VALUES
(95, 'Air phone', 100, 38, 70, 100, 'nice', 0x2e2e2f2e2e2f696d6167652f2e4169722070686f6e652e6a7067, 15),
(96, 'chair gaming', 750, 9, 650, 750, 'good', 0x2e2e2f2e2e2f696d6167652f2e63686169722067616d696e672e6a7067, 15),
(98, 'maouse', 140, 5, 100, 140, 'nadeee', 0x2e2e2f2e2e2f696d6167652f2e6d616f7573652e77656270, 20);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `achat`
--
ALTER TABLE `achat`
  ADD PRIMARY KEY (`num_achat`,`reference`,`num_apro`),
  ADD KEY `reference` (`reference`),
  ADD KEY `num_apro` (`num_apro`);

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Index pour la table `approvisionnement`
--
ALTER TABLE `approvisionnement`
  ADD PRIMARY KEY (`id_apro`),
  ADD KEY `id_for` (`id_for`);

--
-- Index pour la table `approvisionnement2`
--
ALTER TABLE `approvisionnement2`
  ADD PRIMARY KEY (`id_apro`),
  ADD KEY `id_for` (`id_for`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id_cat`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`num_com`),
  ADD KEY `id_client` (`id_client`);

--
-- Index pour la table `commande2`
--
ALTER TABLE `commande2`
  ADD PRIMARY KEY (`num_com`),
  ADD KEY `id_client` (`id_client`);

--
-- Index pour la table `commandes`
--
ALTER TABLE `commandes`
  ADD PRIMARY KEY (`id_Commande`),
  ADD KEY `TRANS_DETAIL_ID` (`Commande_D_ID`),
  ADD KEY `CUST_ID` (`id_Client`);

--
-- Index pour la table `commandes_details`
--
ALTER TABLE `commandes_details`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `TRANS_D_ID` (`Commande_D_ID`) USING BTREE;

--
-- Index pour la table `detail`
--
ALTER TABLE `detail`
  ADD PRIMARY KEY (`num_detail`,`reference`,`num_com`),
  ADD KEY `reference` (`reference`),
  ADD KEY `num_com` (`num_com`);

--
-- Index pour la table `fournisseur`
--
ALTER TABLE `fournisseur`
  ADD PRIMARY KEY (`id_for`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`reference`),
  ADD KEY `produit_ibfk_1` (`id_cat`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `achat`
--
ALTER TABLE `achat`
  MODIFY `num_achat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `approvisionnement`
--
ALTER TABLE `approvisionnement`
  MODIFY `id_apro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT pour la table `approvisionnement2`
--
ALTER TABLE `approvisionnement2`
  MODIFY `id_apro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10001;

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id_cat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT pour la table `commande2`
--
ALTER TABLE `commande2`
  MODIFY `num_com` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=877001;

--
-- AUTO_INCREMENT pour la table `commandes`
--
ALTER TABLE `commandes`
  MODIFY `id_Commande` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `commandes_details`
--
ALTER TABLE `commandes_details`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `detail`
--
ALTER TABLE `detail`
  MODIFY `num_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11210;

--
-- AUTO_INCREMENT pour la table `fournisseur`
--
ALTER TABLE `fournisseur`
  MODIFY `id_for` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `reference` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `achat`
--
ALTER TABLE `achat`
  ADD CONSTRAINT `achat_ibfk_1` FOREIGN KEY (`reference`) REFERENCES `produit` (`reference`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `achat_ibfk_2` FOREIGN KEY (`num_apro`) REFERENCES `approvisionnement2` (`id_apro`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `approvisionnement`
--
ALTER TABLE `approvisionnement`
  ADD CONSTRAINT `approvisionnement_ibfk_1` FOREIGN KEY (`id_for`) REFERENCES `fournisseur` (`id_for`),
  ADD CONSTRAINT `approvisionnement_ibfk_2` FOREIGN KEY (`id_for`) REFERENCES `fournisseur` (`id_for`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `approvisionnement2`
--
ALTER TABLE `approvisionnement2`
  ADD CONSTRAINT `approvisionnement2_ibfk_1` FOREIGN KEY (`id_for`) REFERENCES `fournisseur` (`id_for`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `commande_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`),
  ADD CONSTRAINT `commande_ibfk_2` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `commande2`
--
ALTER TABLE `commande2`
  ADD CONSTRAINT `commande2_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `detail`
--
ALTER TABLE `detail`
  ADD CONSTRAINT `detail_ibfk_1` FOREIGN KEY (`reference`) REFERENCES `produit` (`reference`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_ibfk_2` FOREIGN KEY (`num_com`) REFERENCES `commande2` (`num_com`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `produit_ibfk_1` FOREIGN KEY (`id_cat`) REFERENCES `categorie` (`id_cat`),
  ADD CONSTRAINT `produit_ibfk_2` FOREIGN KEY (`id_cat`) REFERENCES `categorie` (`id_cat`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
