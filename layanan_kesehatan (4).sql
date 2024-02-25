-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 28 Jan 2024 pada 13.08
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `layanan_kesehatan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `judul` text NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `link` text NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul`, `thumbnail`, `deskripsi`, `link`, `created_at`) VALUES
(2, '7 Langkah Mencapai Hamil Sehat', '1705875198_9e439221275ce63b1028.jpeg', 'Hamil sehat bisa dicapai dengan menjaga kesehatan diri dan janin dalam kandungan. Ada beberapa langkah mudah yang dapat dilakukan ibu hamil untuk mewujudkan kehamilan yang sehat hingga saat persalinan.', 'https://www.alodokter.com/hamil-sehat-bisa-dicapai-dengan-7-langkah-ini', '0000-00-00'),
(3, 'lorem ipsum', '1705874287_9caebfa9b37b86016a0f.jpg', 'ddadada', 'dadad', '0000-00-00'),
(4, 'Kehamilan', '1705875820_0668b3dbaac1a598e1ce.png', 'Kehamilan adalah salah satu kondisi yang digunakan untuk menggambarkan periode saat janin berkembang dalam rahim. Biasanya, proses kehamilan berlangsung selama 40 minggu atau lebih dari sembilan bulan. Waktu ini dihitung dari periode menstruasi yang terakhir.', 'https://www.halodoc.com/kesehatan/kehamilan', '0000-00-00'),
(5, 'Kehamilan', '1705875881_f6b41d9f269a25236121.png', 'Kehamilan adalah salah satu kondisi yang digunakan untuk menggambarkan periode saat janin berkembang dalam rahim. Biasanya, proses kehamilan berlangsung selama 40 minggu atau lebih dari sembilan bulan. Waktu ini dihitung dari periode menstruasi yang terakhir.', 'https://www.halodoc.com/kesehatan/kehamilan', '0000-00-00'),
(6, 'Kehamilan', '1705875907_0b79aa951ae7bfa6356d.png', '\r\nKehamilan adalah salah satu kondisi yang digunakan untuk menggambarkan periode saat janin berkembang dalam rahim. Biasanya, proses kehamilan berlangsung selama 40 minggu atau lebih dari sembilan bulan. Waktu ini dihitung dari periode menstruasi yang terakhir.', 'https://www.halodoc.com/kesehatan/kehamilan', '0000-00-00'),
(7, 'Kehamilan', '1705875942_1c342a18ec7348e76f85.jpeg', 'Kehamilan adalah salah satu kondisi yang digunakan untuk menggambarkan periode saat janin berkembang dalam rahim. Biasanya, proses kehamilan berlangsung selama 40 minggu atau lebih dari sembilan bulan. Waktu ini dihitung dari periode menstruasi yang terakhir.', 'https://www.halodoc.com/kesehatan/kehamilan', '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'nakes', ''),
(2, 'admin', ''),
(3, 'pasien', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `auth_groups_permissions`
--

INSERT INTO `auth_groups_permissions` (`group_id`, `permission_id`) VALUES
(1, 1),
(2, 2),
(3, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`group_id`, `user_id`) VALUES
(1, 1),
(1, 8),
(2, 3),
(2, 4),
(3, 2),
(3, 6),
(3, 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'nakes@gmail.com', 1, '2024-01-14 20:13:35', 1),
(2, '::1', 'nakes@gmail.com', 1, '2024-01-14 21:39:27', 1),
(3, '::1', 'nakes@gmail.com', 1, '2024-01-15 04:09:03', 1),
(4, '::1', 'pasien@gmail.com', 2, '2024-01-15 04:24:29', 1),
(5, '::1', 'nakes@gmail.com', 1, '2024-01-15 05:34:16', 1),
(6, '::1', 'admin', NULL, '2024-01-15 08:36:17', 0),
(7, '::1', 'admin1@gmail.com', 4, '2024-01-15 08:36:48', 1),
(8, '::1', 'admin1@gmail.com', 4, '2024-01-15 08:37:29', 1),
(9, '::1', 'admin1@gmail.com', 4, '2024-01-15 08:39:35', 1),
(10, '::1', 'admin1@gmail.com', 4, '2024-01-15 08:42:34', 1),
(11, '::1', 'admin1@gmail.com', 4, '2024-01-15 08:43:01', 1),
(12, '::1', 'pasien@gmail.com', 2, '2024-01-15 08:43:22', 1),
(13, '::1', 'nakes', NULL, '2024-01-15 08:43:32', 0),
(14, '::1', 'nakes@gmail.com', 1, '2024-01-15 08:43:38', 1),
(15, '::1', 'admin1@gmail.com', 4, '2024-01-15 08:54:32', 1),
(16, '::1', 'admin', NULL, '2024-01-18 17:56:01', 0),
(17, '::1', 'nakes@gmail.com', 1, '2024-01-18 17:56:20', 1),
(18, '::1', 'nakes@gmail.com', 1, '2024-01-18 20:17:15', 1),
(19, '::1', 'nakes@gmail.com', 1, '2024-01-18 21:49:58', 1),
(20, '::1', 'pasienbaru1', 6, '2024-01-18 22:42:48', 0),
(21, '::1', 'nakes@gmail.com', 1, '2024-01-18 22:44:13', 1),
(22, '::1', 'nakes2@gmail.com', 8, '2024-01-18 22:48:29', 1),
(23, '::1', 'nakes@gmail.com', 1, '2024-01-18 23:01:42', 1),
(24, '::1', 'nakes@gmail.com', 1, '2024-01-19 00:14:25', 1),
(25, '::1', 'admin', NULL, '2024-01-19 00:16:59', 0),
(26, '::1', 'admin1@gmail.com', 4, '2024-01-19 00:17:11', 1),
(27, '::1', 'admin1@gmail.com', 4, '2024-01-19 02:35:36', 1),
(28, '::1', 'admin1@gmail.com', 4, '2024-01-21 21:54:55', 1),
(29, '::1', 'admin1@gmail.com', 4, '2024-01-21 22:44:52', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `auth_permissions`
--

INSERT INTO `auth_permissions` (`id`, `name`, `description`) VALUES
(1, 'nakes site', ''),
(2, 'admin site', ''),
(3, 'pasien site', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `lapor_bb`
--

CREATE TABLE `lapor_bb` (
  `ID_lapor` int(11) NOT NULL,
  `ID_Pasien` int(11) NOT NULL,
  `berat_badan` float NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `lapor_bb`
--

INSERT INTO `lapor_bb` (`ID_lapor`, `ID_Pasien`, `berat_badan`, `created_at`) VALUES
(1, 2, 60, '2024-01-10'),
(2, 2, 62, '2024-01-17'),
(3, 2, 65, '2024-01-19'),
(4, 3, 75, '2024-01-10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1705262863, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nakes`
--

CREATE TABLE `nakes` (
  `id_nakes` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jabatan` varchar(50) DEFAULT NULL,
  `spesialisasi` varchar(100) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `no_telepon` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `nakes`
--

INSERT INTO `nakes` (`id_nakes`, `nama`, `jabatan`, `spesialisasi`, `alamat`, `no_telepon`) VALUES
(1, 'lorem', 'lorem', 'lorem', 'lorem', '12121'),
(3, 'lorem', 'lorem', 'lorem', NULL, '12113213'),
(4, 'adadad', 'adada', 'dada', 'dada', '21212');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE `pasien` (
  `ID_Pasien` int(11) NOT NULL,
  `Nama` varchar(255) DEFAULT NULL,
  `Nomor_HP` varchar(20) DEFAULT NULL,
  `Alamat` text DEFAULT NULL,
  `Umur` int(11) DEFAULT NULL,
  `Usia_Kehamilan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`ID_Pasien`, `Nama`, `Nomor_HP`, `Alamat`, `Umur`, `Usia_Kehamilan`) VALUES
(1, 'lorem ipsum baru', '12121212', NULL, 28, 20),
(2, 'data baru', '2123', NULL, 23, 20),
(3, 'data baru', '2123', NULL, 23, 20);

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayat`
--

CREATE TABLE `riwayat` (
  `ID_riwayat` int(11) NOT NULL,
  `ID_Pasien` int(11) NOT NULL,
  `riwayat_kesehatan` text NOT NULL,
  `rekomendasi_gizi` text NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `riwayat`
--

INSERT INTO `riwayat` (`ID_riwayat`, `ID_Pasien`, `riwayat_kesehatan`, `rekomendasi_gizi`, `created_at`) VALUES
(7, 2, 'update baru', 'update baru1', '2024-01-11'),
(8, 2, 'lorem ipsum', 'lorem ipsum', '2024-01-11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'nakes@gmail.com', 'nakes', '$2y$10$X8LM0GIsU2Y.lDf/A4HAv.hYlcr38nTLYVUNtFKeba/I9D8vxrxBG', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-01-14 20:13:30', '2024-01-14 20:13:30', NULL),
(2, 'pasien@gmail.com', 'pasien', '$2y$10$G6NSd2O6C5k5w/osiMoRze/aE0BaJnNNGbF/rSIC28QE4C8uSt3Yy', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-01-15 04:23:40', '2024-01-15 04:23:40', NULL),
(3, 'admin@gmail.com', 'admin', 'rhsbanget', 'rhsbanget', NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL),
(4, 'admin1@gmail.com', 'superadmin', '$2y$10$Se9sH6AOmkpwc027hbJMj.pHLpchtKvB2xG.UjhVi.XRruQS6R7vG', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-01-15 08:36:40', '2024-01-15 08:36:40', NULL),
(5, 'pasienbaru@gmail.com', 'pasienbaru', '$2y$10$apJMi6DouH5X46Jc.4d3iuVVOEVGGLIwtrAMV4vAEOutQ.0D4ZxcW', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-01-18 22:32:22', '2024-01-18 22:54:23', '2024-01-18 22:54:23'),
(6, 'pasienbaru1@gmail.com', 'pasienbaru1', '$2y$10$0SDwY94xSj/aUbne/tXwCu4LNZBD0O1.eVXGmL3MXtZOtlm9wWgD6', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, '2024-01-18 22:42:15', '2024-01-18 22:42:15', NULL),
(7, 'pasienbaru2@gmail.com', 'pasienbaru2', '$2y$10$K.RNkwaIUrmK3q4vA6mLn.5qrPp1ptXhJaC.FarfLWgZnyKRp263S', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-01-18 22:48:00', '2024-01-18 22:48:00', NULL),
(8, 'nakes2@gmail.com', 'nakes2', '$2y$10$/8XO6q..QJCsR/RJ5.DaGexZuX37b6vgoVwAg18A1kTJaNSg04Gyy', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-01-18 22:48:20', '2024-01-18 22:48:20', '2024-01-18 22:58:55');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indeks untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indeks untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indeks untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indeks untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indeks untuk tabel `lapor_bb`
--
ALTER TABLE `lapor_bb`
  ADD PRIMARY KEY (`ID_lapor`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `nakes`
--
ALTER TABLE `nakes`
  ADD PRIMARY KEY (`id_nakes`);

--
-- Indeks untuk tabel `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`ID_Pasien`);

--
-- Indeks untuk tabel `riwayat`
--
ALTER TABLE `riwayat`
  ADD PRIMARY KEY (`ID_riwayat`),
  ADD KEY `ID_Pasien` (`ID_Pasien`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `lapor_bb`
--
ALTER TABLE `lapor_bb`
  MODIFY `ID_lapor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `nakes`
--
ALTER TABLE `nakes`
  MODIFY `id_nakes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pasien`
--
ALTER TABLE `pasien`
  MODIFY `ID_Pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `riwayat`
--
ALTER TABLE `riwayat`
  MODIFY `ID_riwayat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `riwayat`
--
ALTER TABLE `riwayat`
  ADD CONSTRAINT `riwayat_ibfk_1` FOREIGN KEY (`ID_Pasien`) REFERENCES `pasien` (`ID_Pasien`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
