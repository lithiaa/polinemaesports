-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2025 at 06:52 AM
-- Server version: 8.0.30
-- PHP Version: 8.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `polinemaesports`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id_event` bigint UNSIGNED NOT NULL,
  `nama_event` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasi_event` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_event` datetime NOT NULL,
  `deskripsi_event` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar_event` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id_event`, `nama_event`, `lokasi_event`, `tanggal_event`, `deskripsi_event`, `gambar_event`, `created_at`, `updated_at`) VALUES
(3, 'Polinema HOK Opening Community Tournament', 'Malang Creative Center Lt.3', '2024-07-06 00:00:00', '🏆 Polinema HOK Community Opening Tournament 🏆\r\n\r\nDetail Acara :\r\n📅 Tanggal: 6 Juli 2024\r\n🕒 Waktu: 17.00 s/d Selesai\r\n📍 Tempat: Malang Creative Center Lt.3\r\n\r\nPendaftaran : Gratis!\r\n\r\n🎁 Prizepool \r\nRp1.000.000\r\nJadwal & hadiah tetap, walaupun slot kurang\r\n\r\nJangan ragu untuk daftar dan buktikan bahwa kamu adalah yang terbaik!\r\n\r\n🔗 Link pendaftaran: bit.ly/tournamenthokpolinema\r\n\r\n#HonorofKingsIndonesia \r\n#HonorofKings\r\n#CobaAjaDulu \r\n#HOKID\r\n#ACECommunity', 'foto_event/Polinema HOK Opening Community Tournament240729040712.png', '2024-07-28 21:07:12', '2024-07-28 21:07:12'),
(4, 'Charity Mobile Legends Championship', 'Selasar Gd Sipil Lt.3 Politeknik Negeri Malang', '2024-08-11 00:00:00', 'HALOO SOBAT MABAR!!👋\r\n\r\nPendaftaran Charity Mobile Legends Championship telah dibuka!!!🔥🔥\r\n\r\nCharity Mobile Legends Championship merupakan turnamen mobile legends untuk umum yang diselenggarakan oleh Lembaga Manajemen Infaq (LMI) di Politeknik Negeri Malang dan Polinema Esports menjadi Event Organized dalam acara tersebut loh🤩\r\n\r\nDalam turnamen ini, kami memperkenalkan konsep baru yaitu \"Turnamen Sambil Beramal\". Selain menjadi ajang yang menantang, acara ini juga memberikan kesempatan bagi peserta untuk tidak hanya meningkatkan keterampilan mereka, tetapi juga berbagi kebaikan kepada orang lain✨\r\n\r\n📆 Event Schedule :\r\n  - Technical Meeting : Minggu, 5 Mei 2024\r\n  - Kualifikasi Online  : Kamis, 9 Mei 2024\r\n  - Kualifikasi Offline  : Sabtu, 11 Mei 2024\r\n\r\n📌 Venue : Selasar Gd. Sipil Lt. 3 Politeknik Negeri Malang\r\n💰 Total Prizepool : Rp 3.000.000 + Throphy + Certif\r\n💸 Fee regist   : Rp 50.000 / team\r\n💳 Payment    : Seabank, DANA, Shopeepay\r\nLink Regist      : https://bit.ly/RegistCharityMobileLegendsChampionship\r\n\r\n☎ Contact Person : \r\n  - 0821-2690-8940 (Arjuna)\r\n  - 0812-3038-5100 (Sania)\r\n\r\n📱Social Media : \r\n  @polinemaesports\r\n  @lmizakat_malangraya', 'foto_event/Charity Mobile Legends Championship240801011402.jpg', '2024-08-01 06:14:03', '2024-08-01 06:14:03');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_06_16_133431_create_events_table', 1),
(6, '2024_08_17_115940_create_news_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id_news` bigint UNSIGNED NOT NULL,
  `name_news` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_news` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_news` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar_news` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tombol_news` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id_news`, `name_news`, `deskripsi_news`, `link_news`, `gambar_news`, `tombol_news`, `created_at`, `updated_at`) VALUES
(1, 'Open Recruitment Member Komunitas Polinema Esports', 'Recruitment anggota Polinema Esports telah dibuka, Yuk daftar dan jadilah bagian dari Polinema Esports!', 'https://linktr.ee/PMLC.ID', 'gambar_news/news1.jpg', 'Daftar Sekarang!', '2024-08-18 03:06:14', '2024-08-18 03:06:14'),
(2, 'Pre-Order Jersey Polinema Esports V3', 'Dengan banyaknya antusias temen2 yg ingin dibuka PO kembali. Jersey Polinema Esports v3 ini akan dibuka untuk terakhir kalinya!', 'bit.ly/JerseyPolinemaEsports', 'gambar_news/news2.png', 'Pre-Order Now!', '2024-08-18 03:09:02', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Lithia', 'lithiaproject@gmail.com', NULL, '$2y$12$yycSKaDgeQZ93z98tbrbfu6nVK.hm65d6krzofVGKQE5ijFrxsL82', NULL, '2024-07-22 07:59:13', '2024-07-22 07:59:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id_event`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id_news`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id_event` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id_news` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
