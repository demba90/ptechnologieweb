-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 04 Août 2015 à 01:42
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `preinscript_demat`
--

-- --------------------------------------------------------

--
-- Structure de la table `pre_administrateur`
--

CREATE TABLE IF NOT EXISTS `pre_administrateur` (
  `idAdministrateur` varchar(12) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `departement` varchar(100) NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(45) NOT NULL,
  PRIMARY KEY (`idAdministrateur`),
  UNIQUE KEY `login` (`login`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `pre_administrateur`
--

INSERT INTO `pre_administrateur` (`idAdministrateur`, `prenom`, `nom`, `departement`, `login`, `password`) VALUES
('142398', 'Kaba', 'SALL', 'Departement Genie Informatique', 'kaba.sall', 'kabasall');

-- --------------------------------------------------------

--
-- Structure de la table `pre_candidat`
--

CREATE TABLE IF NOT EXISTS `pre_candidat` (
  `idCandidat` int(12) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `nom` varchar(45) NOT NULL,
  `dateNaissance` date NOT NULL,
  `lieuNaissance` varchar(50) NOT NULL,
  `sexe` varchar(1) NOT NULL,
  `nationalite` varchar(45) NOT NULL,
  `adresse` varchar(100) DEFAULT NULL,
  `mail` varchar(50) DEFAULT NULL,
  `telephone` decimal(10,0) NOT NULL,
  `niveauEtude` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idCandidat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `pre_candidat`
--

INSERT INTO `pre_candidat` (`idCandidat`, `prenom`, `nom`, `dateNaissance`, `lieuNaissance`, `sexe`, `nationalite`, `adresse`, `mail`, `telephone`, `niveauEtude`) VALUES
(0, 'Mouhamed', 'GUEYE', '2015-08-05', 'Thies', 'M', 'Senegal', 'Soprim', 'gueyemouhamed.gueye@gmail.com', '772224864', 'Baccalaureat'),
(10, 'Moussa', 'GAYE', '2015-08-11', 'Thies', 'M', 'Senegal', 'soprim', 'gayemoussa.gaye@gmail.com', '772486512', 'Licence'),
(11, 'Maimouna', 'SECK', '2015-08-16', 'Dakar', 'F', 'Mauritanie', 'Pikine', 'maimouna.seeck@hotmail.com', '765847896', 'Master');

-- --------------------------------------------------------

--
-- Structure de la table `pre_departement`
--

CREATE TABLE IF NOT EXISTS `pre_departement` (
  `idDepartement` int(12) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `specialite` varchar(50) NOT NULL,
  PRIMARY KEY (`idDepartement`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `pre_departement`
--

INSERT INTO `pre_departement` (`idDepartement`, `nom`, `specialite`) VALUES
(5646896, 'Departement Genie Informatique', 'Telecommunications et Reseaux'),
(15151515, 'Departement de genie Mecanique', 'Mecanique'),
(32135161, 'Departement de Chimie et Biologie Appliquee', 'Chimie'),
(45754112, 'Departement de Gestion', 'Gestion des Entreprises et des Administrations'),
(152455689, 'Departement Genie Informatique', 'Informatique'),
(457864513, 'Departement Genie Electrique', 'Electricite');

-- --------------------------------------------------------

--
-- Structure de la table `pre_diplome`
--

CREATE TABLE IF NOT EXISTS `pre_diplome` (
  `idDiplome` int(12) NOT NULL,
  `intitule` varchar(100) DEFAULT NULL,
  `annee` year(4) DEFAULT NULL,
  `etablissement` varchar(100) DEFAULT NULL,
  `commentaires` varchar(250) DEFAULT NULL,
  `lien` varchar(100) DEFAULT NULL,
  `Candidat_idCandidat` int(12) NOT NULL,
  PRIMARY KEY (`idDiplome`,`Candidat_idCandidat`),
  KEY `fk_Diplome_Candidat1_idx` (`Candidat_idCandidat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `pre_dossiercandidature`
--

CREATE TABLE IF NOT EXISTS `pre_dossiercandidature` (
  `idDossierCandidature` int(12) NOT NULL,
  `statut` varchar(45) DEFAULT NULL,
  `Liste_idListe` int(12) NOT NULL DEFAULT '0',
  `Candidat_idCandidat` int(12) NOT NULL,
  `Quitus_idQuitus` int(12) NOT NULL,
  PRIMARY KEY (`idDossierCandidature`,`Liste_idListe`,`Candidat_idCandidat`,`Quitus_idQuitus`),
  KEY `fk_DossierCandidature_Liste_idx` (`Liste_idListe`),
  KEY `fk_DossierCandidature_Candidat1_idx` (`Candidat_idCandidat`),
  KEY `fk_DossierCandidature_Quitus1_idx` (`Quitus_idQuitus`),
  KEY `Quitus_idQuitus` (`Quitus_idQuitus`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `pre_dossiercandidature`
--

INSERT INTO `pre_dossiercandidature` (`idDossierCandidature`, `statut`, `Liste_idListe`, `Candidat_idCandidat`, `Quitus_idQuitus`) VALUES
(1596, 'cours', 0, 11, 7800),
(454455, 'cours', 0, 151545, 15421);

-- --------------------------------------------------------

--
-- Structure de la table `pre_formation`
--

CREATE TABLE IF NOT EXISTS `pre_formation` (
  `idFormation` int(12) NOT NULL,
  `intitutle` varchar(100) DEFAULT NULL,
  `nbAnneeEtude` int(11) DEFAULT NULL,
  `descriptif` varchar(500) DEFAULT NULL,
  `dateOuverture` date DEFAULT NULL,
  `dateFermeture` date DEFAULT NULL,
  `prixEnCharge` varchar(3) DEFAULT NULL,
  `Departement_idDepartement` int(12) NOT NULL,
  PRIMARY KEY (`idFormation`,`Departement_idDepartement`),
  KEY `fk_Formation_Departement1_idx` (`Departement_idDepartement`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `pre_formation`
--

INSERT INTO `pre_formation` (`idFormation`, `intitutle`, `nbAnneeEtude`, `descriptif`, `dateOuverture`, `dateFermeture`, `prixEnCharge`, `Departement_idDepartement`) VALUES
(15481548, 'Diplome d''ingenieur de conception en mecanique', 3, 'Formation d''ingenieur', '2015-08-02', '2015-08-10', 'CPE', 15151515);

-- --------------------------------------------------------

--
-- Structure de la table `pre_liste`
--

CREATE TABLE IF NOT EXISTS `pre_liste` (
  `idListe` int(12) NOT NULL,
  `intitule` varchar(100) NOT NULL,
  `nbCandidats` int(11) DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL,
  `Formation_idFormation` int(12) NOT NULL,
  PRIMARY KEY (`idListe`,`Formation_idFormation`),
  KEY `fk_Liste_Formation1_idx` (`Formation_idFormation`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `pre_quitus`
--

CREATE TABLE IF NOT EXISTS `pre_quitus` (
  `idQuitus` int(12) NOT NULL,
  `montant` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`idQuitus`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `pre_quitus`
--

INSERT INTO `pre_quitus` (`idQuitus`, `montant`, `date`) VALUES
(7800, 10000, '2015-08-17'),
(124586, 10000, '2015-08-10');

-- --------------------------------------------------------

--
-- Structure de la table `pre_user`
--

CREATE TABLE IF NOT EXISTS `pre_user` (
  `id_user` int(12) NOT NULL AUTO_INCREMENT,
  `login` varchar(50) NOT NULL,
  `password` varchar(25) NOT NULL,
  `id_candidat` int(12) NOT NULL,
  PRIMARY KEY (`id_user`),
  KEY `id_candidat` (`id_candidat`),
  KEY `id_candidat_2` (`id_candidat`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `pre_user`
--

INSERT INTO `pre_user` (`id_user`, `login`, `password`, `id_candidat`) VALUES
(1, 'gueyemouhamed.gueye@gmail.com', 'bonjour', 0);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `pre_diplome`
--
ALTER TABLE `pre_diplome`
  ADD CONSTRAINT `fk_Diplome_Candidat1` FOREIGN KEY (`Candidat_idCandidat`) REFERENCES `pre_candidat` (`idCandidat`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `pre_formation`
--
ALTER TABLE `pre_formation`
  ADD CONSTRAINT `fk_Formation_Departement1` FOREIGN KEY (`Departement_idDepartement`) REFERENCES `pre_departement` (`idDepartement`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `pre_liste`
--
ALTER TABLE `pre_liste`
  ADD CONSTRAINT `fk_Liste_Formation1` FOREIGN KEY (`Formation_idFormation`) REFERENCES `pre_formation` (`idFormation`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `pre_user`
--
ALTER TABLE `pre_user`
  ADD CONSTRAINT `pre_user_ibfk_1` FOREIGN KEY (`id_candidat`) REFERENCES `pre_candidat` (`idCandidat`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
