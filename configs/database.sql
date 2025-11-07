-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : jeu. 06 nov. 2025 à 13:59
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `sneakshop`
--

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category` text NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `large_description` text NOT NULL,
  `notation` float DEFAULT NULL,
  `price` float NOT NULL,
  `caracteristics` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`caracteristics`)),
  `main_image` text DEFAULT 'NA',
  `stock` int(11) NOT NULL,
  `registration` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`id`, `category`, `name`, `description`, `large_description`, `notation`, `price`, `caracteristics`, `main_image`, `stock`, `registration`) VALUES
(1, 'c1', 'Images IA', 'Tigsihpijsdosôkdpojsdipd,isjdpijpo', '<div>u_sèç_àudç)sàujdôsjdsd</div><div>siud_à)sçud)àidàçsuçdàsjd</div><div>dhsà_djàçdu)us_çdhç_hsç_hd</div><div>shdç_sàdçujç)diàsiàdi</div>', 1, 2500, '[\"sj,sp\",\"ijposjdo\",\"ijpdfjpjdf\"]', 'NA', 12, '2025-10-29 11:02:28'),
(2, 'c3', 'Images IA', 'Images réalistes en IA de phénomène et de lieux inédits', '<div>Besoin d\'images de lieux insolites, de photos de phénomènes météos rarement observés?</div><div>Vous êtes au bon endroit.</div><div><br></div><div>Je m\'appelle <b>John Doe</b>,</div><div>ancien photographe pour le <b>whoNiews</b> et le <b>morning BBL</b>,</div><div>j\'ai su prendre le virage de l\'IA en proposant à mes client</div><ul><li>Des images de lieux insolites,</li><li>De phénomènes inédits,</li><li>De l\'art</li></ul><div><br></div><div><i>N\'hésitez pas à me contactez dès aujourd\'hui</i> pour bénéficier d\'une <u><b>réduction de 10% sur vôtre première commande</b></u>!</div>', 4, 2750, '{\"Qualit\\u00e9\":\"Ultra HD\",\"Models IA\":\"Google nano banana\",\"Delais\":\"2jours\",\"Quantit\\u00e9\":\"3\",\"Pi\\u00e8ces\":\"1 UltraHD - 1 de 500MP - 1 vignette 32MB\"}', 'NA', 100, '2025-10-29 11:10:45');

-- --------------------------------------------------------

--
-- Structure de la table `temps`
--

CREATE TABLE `temps` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL,
  `registration` int(11) NOT NULL,
  `deletion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `cart` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL DEFAULT '[]' CHECK (json_valid(`cart`)),
  `bought` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL DEFAULT '[]',
  `regstration` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `cart`, `bought`, `regstration`) VALUES
(5, 'Yaya', 'Tangara', 'yayatangara027@gmail.com', '$2y$10$hcdMYvZfv4.Wsisn5BI0.u0KzmZv1TID5pBnwTIG87BrVW3v8JhZm', '{\"2\":1}', '[]', '2025-11-04 10:22:35');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `temps`
--
ALTER TABLE `temps`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `temps`
--
ALTER TABLE `temps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
