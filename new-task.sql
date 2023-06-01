-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Bulan Mei 2023 pada 11.27
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `new-task`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berkas`
--

CREATE TABLE `berkas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `berkas_cv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `berkas_lamaran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `lamarans`
--

CREATE TABLE `lamarans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `pekerjaan_id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pesan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('terkirim','dalam_review','tidak_lolos') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'terkirim',
  `cv_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `surat_lamaran_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(8, '2014_10_12_000000_create_users_table', 1),
(9, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(10, '2019_08_19_000000_create_failed_jobs_table', 1),
(11, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(12, '2023_05_09_032547_create_pekerjaans_table', 1),
(13, '2023_05_14_131838_create_berkas_table', 1),
(14, '2023_05_16_082010_create_pekerjaan_user_table', 1),
(15, '2023_05_26_073928_create_lamarans_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pekerjaans`
--

CREATE TABLE `pekerjaans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul_pekerjaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pt_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_pekerjaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_salary` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_salary` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expected_experience` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fungsi_kerja` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lulusan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kualifikasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `benefits` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pekerjaans`
--

INSERT INTO `pekerjaans` (`id`, `image`, `judul_pekerjaan`, `pt_id`, `status_pekerjaan`, `start_salary`, `end_salary`, `expected_experience`, `fungsi_kerja`, `level`, `lulusan`, `deskripsi`, `kualifikasi`, `benefits`, `about`, `created_at`, `updated_at`) VALUES
(1, 'web.png', 'Web Designer', 'PTs Asia Harapan', 'I City Tiban - Kota Batam(On Site)', '2.600.000', '3.600.000', '3 Tahun', 'Desain Web, Front End Web', 'Junior webdev', 'Minimal Diploma', 'Yooooooooooooooo', 'Memahami konsep REST API', 'Free housing accommodation as per Company Policy', 'PT Asia Harapan is Public Appraisal Services Office we were grow here with 5 (five) Partners who', '2023-05-16 07:31:53', '2023-05-26 01:07:53'),
(2, 'ux.png', 'UI/UX Designer', 'PT Asia Harapan', 'Siteba - Kota Padang (On Site)', '2.500.000', '3.500.000', '2 Tahun', 'Desain Web, Front End Web', 'Junior webdev', 'Minimal Diploma', 'Merancang dan mengembangkan aplikasi yg sedang dibangun\r\nMelakukan analisa teknis dan design dari aplikasi yg sedang dibangunMerancang dan mengembangkan aplikasi yg sedang dibangun\r\nMelakukan analisa teknis dan design dari aplikasi yg sedang dibangun', 'Memahami konsep REST API', 'Free housing accommodation as per Company Policy', 'PT Asia Harapan is Public Appraisal Services Office we were grow here with 5 (five) Partners who', '2023-05-17 19:25:53', '2023-05-17 19:25:54'),
(3, 'frontend.png', 'Front End Engineer', 'PT Asia Harapan', 'Siteba - Kota Padang (On Site)', '2.500.000', '3.500.000', '4 Tahun', 'Desain Web, Front End Web', 'Junior Frontend', 'Minimal Diploma', 'Yooooooooooooooooooooooo', 'Memahami konsep REST API', 'Free housing accommodation as per Company Policy', 'PT Asia Harapan is Public Appraisal Services Office we were grow here with 5 (five) Partners who', '2023-05-25 19:44:33', '2023-05-25 19:44:33'),
(4, 'backend.png', 'Backend', 'PT Asia Harapan', 'Aceh- Kota Banda Aceh(On Site)', '3.500.000', '5.500.000', '1 Tahun', 'Desain Web, Front End Web', 'Junior Backend', 'Minimal Diploma', 'Gaesssssssssssssssss', 'Memahami konsep REST API', 'Free housing accommodation as per Company Policy', 'PT Asia Harapan is Public Appraisal Services Office we were grow here with 5 (five) Partners who', '2023-05-25 21:23:12', '2023-05-25 21:23:12'),
(5, 'seo.png', 'SEO', 'PT Asia Harapan', 'Siteba - Kota SEO (On Site)', '2.800.000', '4.200.000', '2 Tahun', 'Desain Web, Front End Web', 'Junior webdev', 'Minimal Diploma', 'Yooooooooooooooooooooooo', 'Memahami konsep REST API', 'Free housing accommodation as per Company Policy', 'PT Asia Harapan is Public Appraisal Services Office we were grow here with 5 (five) Partners who', '2023-05-28 21:32:00', '2023-05-28 21:32:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pekerjaan_user`
--

CREATE TABLE `pekerjaan_user` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `pekerjaan_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `phone`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Tegar Febrian Permana', 'admin@gmail.com', '0812-6424-3751', '2023-05-29 10:13:12', '$2y$10$gSE0JzDeg0ZukY4vxedr/OwfeWVWr.JlldRB5eey8w3kwZZpMTvDm', NULL, '2023-05-16 07:31:09', '2023-05-16 07:31:09'),
(3, 'garssssss', 'aneukacehku@gmail.com', '12345678912', NULL, '$2y$10$j4KplM0CeC1qndEz/D0cfO5yW.dBHIiRTEW.NFKuoeljEfLJUfsQ2', NULL, '2023-05-29 06:28:32', '2023-05-29 06:28:32'),
(4, 'shadiq', 'shadiq@gmail.com', '123456789123', NULL, '$2y$10$1vgfl/QVcTVWTBTSwstkpeQjUR0HvFGPmX0A/gLpPxsv3EEJEixqC', NULL, '2023-05-29 06:31:19', '2023-05-29 06:31:19'),
(5, 'shadiqq', 'shadiqq@gmail.com', '1234567891232', NULL, '$2y$10$vImaugGDpp6U2aynUMdi1OnhzjwQSl3NPOrd8LDCJsMfwDrcOSunm', NULL, '2023-05-29 06:32:18', '2023-05-29 06:32:18'),
(6, 'asdsdaw', 'admindssd@gmail.com', '123456789122', NULL, '$2y$10$phBVIUcYZLDmEIsYXl78wu7OTaKnR0dIQStMqCaA/EvR8CDMK.lyC', NULL, '2023-05-29 06:33:01', '2023-05-29 06:33:01'),
(7, 'shadiq23', 'aneukacehku2@gmail.com', '1234567891234', NULL, '$2y$10$aR5Tpf81UX8bjnJXP4eeAe8BBugt4v5db1EfqleNeoabb5yuN6odq', NULL, '2023-05-29 06:33:46', '2023-05-29 06:33:46');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berkas`
--
ALTER TABLE `berkas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `lamarans`
--
ALTER TABLE `lamarans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lamarans_user_id_foreign` (`user_id`),
  ADD KEY `lamarans_pekerjaan_id_foreign` (`pekerjaan_id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `pekerjaans`
--
ALTER TABLE `pekerjaans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pekerjaan_user`
--
ALTER TABLE `pekerjaan_user`
  ADD KEY `pekerjaan_user_user_id_foreign` (`user_id`),
  ADD KEY `pekerjaan_user_pekerjaan_id_foreign` (`pekerjaan_id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berkas`
--
ALTER TABLE `berkas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `lamarans`
--
ALTER TABLE `lamarans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `pekerjaans`
--
ALTER TABLE `pekerjaans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `lamarans`
--
ALTER TABLE `lamarans`
  ADD CONSTRAINT `lamarans_pekerjaan_id_foreign` FOREIGN KEY (`pekerjaan_id`) REFERENCES `pekerjaans` (`id`),
  ADD CONSTRAINT `lamarans_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `pekerjaan_user`
--
ALTER TABLE `pekerjaan_user`
  ADD CONSTRAINT `pekerjaan_user_pekerjaan_id_foreign` FOREIGN KEY (`pekerjaan_id`) REFERENCES `pekerjaans` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pekerjaan_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
