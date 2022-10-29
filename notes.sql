-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3307
-- Généré le : lun. 24 oct. 2022 à 10:37
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `notes`
--

-- --------------------------------------------------------

--
-- Structure de la table `notes`
--

CREATE TABLE `notes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `note` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `etudiant_id` bigint(20) UNSIGNED NOT NULL,
  `module_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `notes`
--

INSERT INTO `notes` (`id`, `note`, `created_at`, `updated_at`, `etudiant_id`, `module_id`) VALUES
(12, 8, NULL, NULL, 1, 1),
(13, 16, NULL, NULL, 1, 5),
(14, 14, NULL, NULL, 1, 7),
(15, 10, NULL, NULL, 1, 14),
(16, 13, NULL, NULL, 1, 13),
(17, 8, NULL, NULL, 2, 1),
(18, 13.5, NULL, NULL, 5, 1),
(20, 12, NULL, NULL, 19, 1),
(21, 14, NULL, NULL, 5, 4),
(22, 18, NULL, NULL, 5, 14),
(23, 13.5, NULL, NULL, 3, 3),
(24, 9, NULL, NULL, 2, 4),
(25, 12.5, NULL, NULL, 2, 3),
(26, 8, NULL, NULL, 1, 2),
(28, 14.5, NULL, NULL, 1, 12),
(29, 15.5, NULL, NULL, 1, 3),
(30, 18.5, NULL, NULL, 1, 4),
(31, 12, NULL, NULL, 6, 1),
(32, 13.5, NULL, NULL, 6, 2),
(33, 15, NULL, NULL, 6, 3),
(34, 17, NULL, NULL, 6, 4),
(35, 11, NULL, NULL, 6, 5),
(37, 13.25, NULL, NULL, 6, 7),
(38, 8, NULL, NULL, 6, 10),
(40, 8, NULL, NULL, 19, 2),
(41, 17, NULL, NULL, 19, 3),
(42, 13, NULL, NULL, 19, 4),
(43, 15, NULL, NULL, 19, 5),
(47, 7, NULL, NULL, 19, 10),
(48, 18, NULL, NULL, 21, 1),
(49, 9, NULL, NULL, 22, 10),
(50, 17.5, NULL, NULL, 3, 7),
(54, 15, '2022-10-22 14:59:08', '2022-10-22 14:59:08', 14, 1),
(55, 10, '2022-10-22 15:00:03', '2022-10-22 15:00:03', 13, 2),
(56, 17, '2022-10-22 15:02:57', '2022-10-22 15:02:57', 13, 3);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notes_etudiant_id_foreign` (`etudiant_id`),
  ADD KEY `notes_module_id_foreign` (`module_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `notes`
--
ALTER TABLE `notes`
  ADD CONSTRAINT `notes_etudiant_id_foreign` FOREIGN KEY (`etudiant_id`) REFERENCES `etudiants` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `notes_module_id_foreign` FOREIGN KEY (`module_id`) REFERENCES `modules` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
