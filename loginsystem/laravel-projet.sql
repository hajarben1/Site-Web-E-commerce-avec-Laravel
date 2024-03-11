-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 31 mai 2023 à 19:37
-- Version du serveur : 10.4.25-MariaDB
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `laravel-projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `cart`
--

CREATE TABLE `cart` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `cart`
--

INSERT INTO `cart` (`id`, `product_id`, `user_id`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 7, 9, 1, '2023-05-25 12:15:53', '2023-05-25 12:15:53'),
(2, 7, 8, 1, '2023-05-25 12:48:39', '2023-05-25 12:48:39');

-- --------------------------------------------------------

--
-- Structure de la table `cart_product`
--

CREATE TABLE `cart_product` (
  `cart_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `cart_product`
--

INSERT INTO `cart_product` (`cart_id`, `product_id`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 52, 1, NULL, NULL),
(2, 61, 1, NULL, NULL),
(1, 68, 1, NULL, NULL),
(2, 73, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_05_16_145418_create_users_table', 1),
(6, '2023_05_19_082617_create_products_table', 2),
(7, '2023_05_24_102549_create_cart_table', 3),
(8, '2023_05_25_131143_add_quantity_to_products', 4),
(9, '2023_05_25_143233_create_cart_product_table', 5);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `role`, `created_at`, `is_admin`) VALUES
('hajar.benkhadra2010@gmail.com', '$2y$10$AFcaWEnMhfn2srdXy6osnOv/vJWZh6JxuEbRLHLnGsuMWmft8EzFC', 0, '2023-05-29 09:18:14', 0);

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `catégorie` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `quantity` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`id`, `catégorie`, `name`, `prix`, `image`, `created_at`, `updated_at`, `quantity`) VALUES
(52, 'Travel', 'Glam Italia! How To Travel Italy', '101', 'images/1685360998.jpg', '2023-05-27 09:58:35', '2023-05-29 13:28:43', 0),
(60, 'Business', 'A Modern Day Coming-of-Age Story', '400', 'images/DAUq3o1PTpF1Lube9sFHejFAyMxyIyx5Md3lOI8y.jpg', '2023-05-29 09:56:18', '2023-05-29 09:56:18', 0),
(61, 'Children', 'The Half Moon: A Novel , Mary Beth Keane', '120', 'images/bLMavYvBgp20wyMqD8g5ma8E91RUYogTutI7StGO.jpg', '2023-05-29 09:58:06', '2023-05-29 09:58:06', 0),
(62, 'Travel', 'Glam Italia! How To Travel Italy', '200', 'images/k220O8gZ9YKsizzBg599iASBpyrHEwsv6ioF5ngq.jpg', '2023-05-29 15:53:20', '2023-05-29 15:53:20', 0),
(63, 'Travel', 'Glam Italia! How To Travel Italy', '400', 'images/dhWRJ0MLyWDdCcaRsbvdcHOy25tsB4EaVuMWVbxO.jpg', '2023-05-29 15:53:57', '2023-05-29 15:53:57', 0),
(64, 'Travel', 'Glam Italia! How To Travel Italy', '300', 'images/FptAjn89V4QeuZ0aV44oy9NP62DQmJNyVtPTkknr.jpg', '2023-05-29 15:54:42', '2023-05-29 15:54:42', 0),
(65, 'Travel', 'Glam Italia! How To Travel Italy', '100', 'images/i4XeMd7ng3ncGI1FzWSzqtvvqsj43AZ8Bf14DgFb.jpg', '2023-05-29 15:55:18', '2023-05-29 15:55:18', 0),
(66, 'Travel', 'Glam Italia! How To Travel Italy', '500', 'images/c30rFRtpTkVdUmzFQ0FYvM6Prm65YBsKDsEdKz7c.jpg', '2023-05-29 15:56:09', '2023-05-29 15:56:09', 0),
(67, 'Travel', 'Glam Italia! How To Travel Italy', '100', 'images/myMNpogtobL4xmgvBFhCf7zSqqkqRgKtrEyo9qVb.jpg', '2023-05-29 15:56:34', '2023-05-29 15:56:34', 0),
(68, 'Travel', 'Glam Italia! How To Travel Italy', '300', 'images/qooRco4IJFuwbp1x6FYEqdnQCcWx2rZEplT0SJ1u.jpg', '2023-05-29 15:57:02', '2023-05-31 14:58:28', 0),
(70, 'Education', 'Tiny changes , Remarkable results', '400', 'images/XBXVkeIoJwMm63f9ZUZMwqfvaWw6NlEclUWf8M8t.jpg', '2023-05-31 15:01:45', '2023-05-31 15:01:45', 0),
(71, 'Education', 'Tiny changes , Remarkable results', '100', 'images/8qQ3dRpTXpPzxYNXQK4K9dIaQmlnS43cYBYp81o4.jpg', '2023-05-31 15:02:16', '2023-05-31 15:02:16', 0),
(72, 'Education', 'Tiny changes , Remarkable results', '470', 'images/QsE0No5vpwp19Kd6P085ph0eTSex25XVZCf1njAH.jpg', '2023-05-31 15:02:46', '2023-05-31 15:02:46', 0),
(73, 'Education', 'Tiny changes , Remarkable results', '700', 'images/kxNf418NKlZxGYfgnBNe50WA5D2Zzhgnx1GFF5q2.jpg', '2023-05-31 15:03:13', '2023-05-31 15:03:13', 0),
(74, 'Education', 'Tiny changes , Remarkable results', '100', 'images/rDq8EPjfddNJPubcKe0GkkxkFje2780B3S9fgCxx.jpg', '2023-05-31 15:04:16', '2023-05-31 15:04:16', 0),
(75, 'Education', 'Tiny changes , Remarkable results', '900', 'images/VGTGAGLXLmDkchHJdsCgd2Yzi2oxv9XIn3ECJwtv.jpg', '2023-05-31 15:05:10', '2023-05-31 15:05:10', 0),
(76, 'Education', 'Tiny changes , Remarkable results', '800', 'images/J6tTIr1Qi9u3VCHtIT1a6Uc6PraHSIiYFQpQAiOP.jpg', '2023-05-31 15:05:34', '2023-05-31 15:05:34', 0);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `is_admin`, `password`, `created_at`, `updated_at`) VALUES
(8, 'imane', 'karima.benkhadra2010@gmail.com', 0, '$2y$10$X64kH.2IHVm8OJirXmMmUOO2dDnC8tFOrSlPHlXLolekut5fDAO2W', '2023-05-18 13:12:49', '2023-05-18 13:12:49'),
(9, 'hajar benkhadra', 'hajar.benkhadra2010@gmail.com', 1, '$2y$10$JrX87cTVZwgvl./vMbhD.OqB/16/rIPzxmUMUXnmsBcuHJKeaLEr2', '2023-05-18 13:14:33', '2023-05-18 13:14:33');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `cart_product`
--
ALTER TABLE `cart_product`
  ADD KEY `cart_product_cart_id_foreign` (`cart_id`),
  ADD KEY `cart_product_product_id_foreign` (`product_id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `cart_product`
--
ALTER TABLE `cart_product`
  ADD CONSTRAINT `cart_product_cart_id_foreign` FOREIGN KEY (`cart_id`) REFERENCES `cart` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `cart_product_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
