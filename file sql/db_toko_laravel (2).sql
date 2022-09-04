-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Agu 2022 pada 18.19
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_toko_laravel`
--

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
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `nama_kategori` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `foto`, `nama_kategori`, `created_at`, `updated_at`, `deleted_at`) VALUES
(8, '', 'Kategori Wilayah', '2022-08-21 07:54:39', '2022-08-30 10:18:03', '2022-08-30 10:18:03'),
(9, '', 'Bangli', '2022-08-28 22:03:19', '2022-08-31 08:59:41', '2022-08-31 08:59:41'),
(10, '', 'Kintamani', '2022-08-28 22:03:27', '2022-08-31 09:03:36', '2022-08-31 09:03:36'),
(11, '', 'Susut', '2022-08-28 22:03:34', '2022-08-31 08:58:15', '2022-08-31 08:58:15'),
(12, 'kategori_1661960537.jpeg', 'bhb', '2022-08-31 08:42:17', '2022-08-31 09:04:13', '2022-08-31 09:04:13'),
(13, 'kategori_1661960562.jpeg', 'Coba 2', '2022-08-31 08:42:42', '2022-08-31 08:57:48', '2022-08-31 08:57:48'),
(14, 'kategori_1661961910.jpg', 'Bangli', '2022-08-31 09:05:10', NULL, NULL),
(15, 'kategori_1661961961.jpg', 'Susut', '2022-08-31 09:06:01', NULL, NULL),
(16, 'kategori_1661961978.jpg', 'Kintamani', '2022-08-31 09:06:18', NULL, NULL),
(17, 'kategori_1661961994.jpg', 'Landih', '2022-08-31 09:06:34', NULL, NULL);

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `nama_produk` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `harga_jual` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `id_kategori`, `gambar`, `nama_produk`, `deskripsi`, `harga_jual`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'produk_1661092565.jpg', 'HIJAB VOAL SEGI EMPAT', 'Sempurnakan tampilan harianmu dengan hijab segiempat', 98000, '2021-12-13 02:45:21', '2022-08-30 09:49:41', '2022-08-30 09:49:41'),
(2, 5, 'produk_1661092548.jpg', 'Koko Kurta Agno Big Size', 'Koko Kurta Agno Koko simpel, elegan dan special berbahan katun Toyobo', 200000, '2021-12-13 04:37:41', '2022-08-30 05:49:44', '2022-08-30 05:49:44'),
(3, 5, 'produk_1661092535.jpg', 'Jersey/Sportwear Oslo Long', 'Jersey/Sportwear Oslo Long', 275000, '2021-12-13 04:41:58', '2022-08-30 05:49:38', '2022-08-30 05:49:38'),
(4, 10, 'produk_1661092521.jpg', 'New Kaleena Tunic Blue for HIJUP', 'Koleksi terbaru', 346500, '2021-12-13 04:43:04', '2022-08-30 09:51:23', '2022-08-30 09:51:23'),
(5, 7, 'produk_1643112137.jpg', 'OWIEN WHITE', 'Material : Premium Synthetic Leather K+ Accesories', 314000, '2021-12-13 04:45:03', '2022-08-21 07:30:19', '2022-08-21 07:30:19'),
(6, 7, 'produk_1643112115.jpg', 'Kalung Etnik Tenun Batu', 'Ukuran Lingkaran kalung 75 cm', 198000, '2021-12-13 04:46:26', '2022-08-21 07:30:12', '2022-08-21 07:30:12'),
(7, 9, 'produk_1661092121.jpg', 'HIJAB VOAL SEGI EMPAT', 'Sempurnakan tampilan harianmu dengan hijab segiempat printed berbahan voal yang adem anti gerah, tegak didahi.', 116100, '2021-12-13 04:47:30', '2022-08-30 05:49:51', '2022-08-30 05:49:51'),
(8, 11, 'produk_1661092190.jpg', 'Koko Long Sleeves Black Red', 'Koko Long Sleeves Black Red dari Fatih Indonesia.', 399000, '2021-12-13 04:48:39', '2022-08-30 09:51:29', '2022-08-30 09:51:29'),
(9, 16, 'produk_1661092177.jpg', 'Nasi Goreng', 'uiyyu', 10000, '2022-08-07 20:05:23', '2022-08-31 09:09:28', NULL),
(10, 1, 'produk_1661091490.jpg', 'Nasi Goreng', 'jahsjhsahjsa', 10000, '2022-08-21 07:18:10', '2022-08-28 22:39:27', '2022-08-28 22:39:27'),
(11, 14, 'produk_1661751192.jpg', 'Nasi Goreng Special', 'ajhhjsdhhsd', 10000, '2022-08-21 07:28:21', '2022-08-31 09:09:17', NULL),
(12, 15, 'produk_1661878338.jpg', 'Ayam Bakar Spesial 2', 'znxxzxz', 10000, '2022-08-30 09:52:18', '2022-08-31 09:09:06', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `address`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Nurqomariah Azzahra', 'admin@gmail.com', '085333850298', 'Jln. WIjaya Kusuma Gang V No.1a', NULL, '$2y$10$jMFQripfG2tbxsdAJEHL7uFl8deOph745ruuClnH8cOAtV4SpZi.y', NULL, '2021-12-13 00:13:32', '2022-08-22 00:33:24');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
