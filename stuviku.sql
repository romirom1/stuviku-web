-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Bulan Mei 2018 pada 11.24
-- Versi server: 10.1.30-MariaDB
-- Versi PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stuviku`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_region` int(10) UNSIGNED NOT NULL,
  `username` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no hp` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto profil` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `admins`
--

INSERT INTO `admins` (`id`, `id_region`, `username`, `password`, `nama`, `email`, `no hp`, `foto profil`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'romirom', '', 'romadlon rahmatulloh', 'romi@gmail.com', '110011', 'lalala', NULL, NULL, NULL),
(2, 2, 'romarom', '', 'romadlon yang lain', 'roma@gmail.com', '001100', 'lelele', NULL, NULL, NULL),
(3, 1, 'admin', '$2y$10$Ux37ijd0b5WafuAnfR4d5uqusAsOJgssj1WEleKCishotbWkQJlFm', 'Romadlon Rahmatulloh', 'admin@stuviku.co.id', '081217484227', '1525647442.jpg', NULL, '2018-04-30 15:39:46', '2018-04-30 15:39:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `nama`) VALUES
(1, 'Event'),
(2, 'Family'),
(3, 'Prewedding'),
(4, 'Wedding'),
(5, 'Arsitektur'),
(6, 'Produk');

-- --------------------------------------------------------

--
-- Struktur dari tabel `costumers`
--

CREATE TABLE `costumers` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama lengkap` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no hp` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis kelamin` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto profil` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `costumers`
--

INSERT INTO `costumers` (`id`, `username`, `password`, `nama lengkap`, `no hp`, `jenis kelamin`, `alamat`, `foto profil`, `email`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'romalagi', '', 'rahmatulloh yang lain', '101010', 'l', 'surabaya', 'tamvan', 'entahlah@gmail.com', 'masih kuli', NULL, NULL, NULL),
(2, 'romilagi', '', 'romadlon rr', '010101', 'p', 'nganjuk', 'cantiq', 'boskue@gmail.com', 'masih ada', NULL, NULL, NULL),
(3, 'romirom', '$2y$10$2H6okukc9L6fsXTP4ugY7eM.oliqA94TjVtZIqma.ONGdJG5rcCKy', NULL, '', NULL, NULL, NULL, 'romirom@gmail.com', '', NULL, '2018-04-30 04:51:12', '2018-04-30 04:51:12'),
(6, 'romiromi', '$2y$10$v2VuyS9nF2eUDDpMQcxnW.Lbxu4LoeuCIQvV4J/wfX1QG6HW/EJfq', 'Romadlon Rahmatulloh', '081217484227', 'l', 'Jalan Karah No 25 D', '1525224437.jpg', 'romiromi@gmail.com', 'aktif', NULL, '2018-04-30 19:45:40', '2018-05-01 18:27:17'),
(7, 'ardetak', '$2y$10$dRQTOMlmQRxKEjdCWK6QL.cVTmPNlPbxiKAoL8JAlpEj2R80sNeNu', NULL, '081217484227', NULL, NULL, NULL, 'ardetak@gmail.com', NULL, NULL, '2018-04-30 19:49:12', '2018-04-30 19:49:12'),
(8, 'romirom1', '$2y$10$Fyul.KmGEng8z86k4kqex.lJ7eDvdqqBCQ7pPj8ama67RtOg9ih1K', 'Romadlon Rahmatulloh', '081217484227', 'l', 'Jalan Karah Nomor 25D', '1525229495.jpg', 'romadlon711@gmail.com', 'aktif', NULL, '2018-05-01 19:47:40', '2018-05-01 19:51:35'),
(9, 'romirom2', '$2y$10$zHSawcWXrMXKpvaif9EbC.JcWzEw5gpAGu3RSWRgSHqvCKI4GozrS', 'Romadlon Rahmatulloh', '081217484227', 'l', 'Jalan Karah Nomor 25D', '1525229939.jpg', 'romirom2@gmail.com', 'aktif', NULL, '2018-05-01 19:53:49', '2018-05-01 19:58:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeries`
--

CREATE TABLE `galeries` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_category` int(10) UNSIGNED NOT NULL,
  `id_studio` int(10) UNSIGNED NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `galeries`
--

INSERT INTO `galeries` (`id`, `id_category`, `id_studio`, `foto`, `created_at`, `updated_at`) VALUES
(1, 3, 4, '1525647442.jpg', '2018-05-06 15:57:23', '2018-05-06 15:57:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `job_positions`
--

CREATE TABLE `job_positions` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `job_positions`
--

INSERT INTO `job_positions` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'kepala', NULL, NULL),
(2, 'sekretaris', NULL, NULL),
(3, 'bendahara', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_04_12_010510_create_regions_table', 1),
(4, '2018_04_12_024722_create_admins_table', 1),
(5, '2018_04_12_025746_create_costumers_table', 1),
(6, '2018_04_12_034917_create_categories_table', 1),
(7, '2018_04_12_051118_create_studios_table', 1),
(8, '2018_04_12_062824_create_job_positions_table', 1),
(9, '2018_04_12_064018_create_staffs_table', 1),
(10, '2018_04_12_070413_create_services_table', 1),
(11, '2018_04_12_073315_create_requests_table', 1),
(12, '2018_04_12_075525_create_galeries_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `regions`
--

CREATE TABLE `regions` (
  `id` int(10) UNSIGNED NOT NULL,
  `alamat kantor` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kota` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provinsi` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no telp` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `regions`
--

INSERT INTO `regions` (`id`, `alamat kantor`, `kota`, `provinsi`, `no telp`, `created_at`, `updated_at`) VALUES
(1, 'Jalan Ir. Soekarno', 'Jakarta', 'DKI Jakarta', '111111111', NULL, NULL),
(2, 'Jalan Panglima Sudirman', 'Surabaya', 'Jawa Timur', '111111111', NULL, NULL),
(3, 'Jalan Ahmad Yani', 'Medan', 'Jawa Timur', '111111111', NULL, NULL),
(4, 'Jalan Ir Soekarno', 'Bandung', 'Jawa Barat', '111111111', NULL, NULL),
(5, 'Jalan Ir Soekarno', 'Palembang', 'Sumatra Barat', '111111111', NULL, NULL),
(6, 'Jalan Ir Soekarno', 'Semarang', 'Jawa Tengah', '111111111', NULL, NULL),
(7, 'Jalan Ir Soekarno', 'Makassar', 'Sulawesi Selatan', '111111111', NULL, NULL),
(8, 'Jalan Ir Soekarno', 'Pekanbaru', 'Riau', '111111111', NULL, NULL),
(9, 'Jalan Ir Soekarno', 'Batam', 'Kepulauan Riau', '111111111', NULL, NULL),
(10, 'Jalan Ir Soekarno', 'Banjarmasin', 'Kalimantan Selatan', '111111111', NULL, NULL),
(11, 'Jalan Ir Soekarno', 'Balikpapan', 'Kalimantan Timur', '111111111', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `requests`
--

CREATE TABLE `requests` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_service` int(10) UNSIGNED NOT NULL,
  `id_costumer` int(10) UNSIGNED NOT NULL,
  `tanggal request` date NOT NULL,
  `status request` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat foto` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal foto` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `requests`
--

INSERT INTO `requests` (`id`, `id_service`, `id_costumer`, `tanggal request`, `status request`, `tempat foto`, `tanggal foto`, `created_at`, `updated_at`) VALUES
(2, 4, 9, '2018-05-02', 'selesai', 'Surabaya', '2018-05-04', NULL, '2018-05-05 07:11:00'),
(3, 8, 9, '2018-05-02', 'selesai', 'Malang', '2018-05-16', '2018-05-02 02:15:09', '2018-05-06 03:26:19'),
(4, 9, 9, '2018-05-05', 'selesai', 'Bali', '2018-05-19', '2018-05-05 05:56:04', '2018-05-05 06:59:05'),
(5, 8, 9, '2018-05-05', 'ditolak', 'Jogja', '2018-05-01', '2018-05-05 05:59:49', '2018-05-06 03:25:43'),
(6, 5, 9, '2018-05-05', 'ditolak', 'Singapura', '2018-05-30', '2018-05-05 06:09:29', '2018-05-05 06:09:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_studio` int(10) UNSIGNED NOT NULL,
  `id_category` int(10) UNSIGNED NOT NULL,
  `nama` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `services`
--

INSERT INTO `services` (`id`, `id_studio`, `id_category`, `nama`, `deskripsi`, `harga`, `created_at`, `updated_at`) VALUES
(4, 4, 1, 'PAKET PREWEDDING PREMIUM', 'DUrasi 3 jam, 15 foto cetak (10 foto cetak ukuran 5R, 4 cetak uk 10R, 1 cetak uk 12R), mendapat gratis stiker dan gratis DVD soft copy foto', 250000.00, '2018-05-02 00:04:01', '2018-05-02 00:04:01'),
(5, 4, 2, 'PAKET FAMILY PREMIUM', 'DUrasi 2 jam, 15 foto cetak (10 foto cetak ukuran 5R, 4 cetak uk 10R, 1 cetak uk 12R), mendapat gratis stiker dan gratis DVD soft copy foto', 200000.00, '2018-05-02 00:05:19', '2018-05-02 00:05:19'),
(6, 4, 3, 'PAKET PREWEDDING PREMIUM', 'DUrasi 2.5 jam, 15 foto cetak (10 foto cetak ukuran 5R, 4 cetak uk 10R, 1 cetak uk 12R), mendapat gratis stiker dan gratis DVD soft copy foto', 210000.00, '2018-05-02 00:05:55', '2018-05-02 00:05:55'),
(7, 4, 4, 'PAKET WEDDING PREMIUM', 'DUrasi 4 jam, 15 foto cetak (10 foto cetak ukuran 5R, 4 cetak uk 10R, 1 cetak uk 12R), mendapat gratis stiker dan gratis DVD soft copy foto', 260000.00, '2018-05-02 00:06:40', '2018-05-02 00:06:40'),
(8, 4, 5, 'PAKET ARSITEKTUR PREMIUM', 'DUrasi 3 jam, 15 foto cetak (10 foto cetak ukuran 5R, 4 cetak uk 10R, 1 cetak uk 12R), mendapat gratis stiker dan gratis DVD soft copy foto', 300000.00, '2018-05-02 00:07:04', '2018-05-02 00:07:04'),
(9, 4, 6, 'PAKET PRODUK PREMIUM', 'DUrasi 7 jam, 15 foto cetak (10 foto cetak ukuran 5R, 4 cetak uk 10R, 1 cetak uk 12R), mendapat gratis stiker dan gratis DVD soft copy foto', 500000.00, '2018-05-02 00:07:39', '2018-05-02 00:07:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `staff`
--

CREATE TABLE `staff` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_region` int(10) UNSIGNED NOT NULL,
  `id_job` int(10) UNSIGNED NOT NULL,
  `nama` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no hp` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis kelamin` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `staff`
--

INSERT INTO `staff` (`id`, `id_region`, `id_job`, `nama`, `no hp`, `email`, `jenis kelamin`, `foto`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'romadlon', '123123', 'ululu@gmil.com', 'p', 'entahlah', NULL, NULL),
(2, 2, 2, 'ganteng', '222111', 'asdasd@gm.com', 'l', 'asd', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `studios`
--

CREATE TABLE `studios` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_admin` int(10) UNSIGNED DEFAULT NULL,
  `username` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama studio` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat studio` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no telp` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama pemilik` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo studio` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `motto` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rating` double DEFAULT NULL,
  `status` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `studios`
--

INSERT INTO `studios` (`id`, `id_admin`, `username`, `password`, `email`, `nama studio`, `alamat studio`, `no telp`, `deskripsi`, `nama pemilik`, `logo studio`, `motto`, `rating`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 3, 'romirom', '$2y$10$yR4I9H1AgQXOEvM5h/6zAej9zEBPTnjH78Gzyi9hmYfmU3qs3wGbC', 'romirom_@gmail.com', 'K25D Picture', 'Jalan Karah No 25D', '081217484227', 'Ini hanya sebuah contoh Studio', 'Romadlon Rahmatulloh', '1525226866.jpg', 'Kualitas Adalah Prioritas', 0, 'aktif', NULL, '2018-04-30 14:54:10', '2018-05-01 19:07:46'),
(4, 3, 'romirom1', '$2y$10$4Wv/pgKs9uHXw1heq700ZO0Lx4fBbFucCczikzjSJ7dY4ljJPkHoq', 'romirom1@gmail.com', 'K25D Entertaintment', 'Jalan Karah Nomor 25D', '081217484227', 'Studio Virtual Milik Admin', 'Wahyu Muhammad', '1525246445.jpg', 'Hidup ini berat', 0, 'aktif', NULL, '2018-05-01 20:42:03', '2018-05-02 00:34:05'),
(6, NULL, 'romirom3', '$2y$10$M/jw32orsN6XnR7P6ASVIuoXb40Sx7HZMLOz42MS26gDhBRo4VF4K', 'romirom3@gmail.com', 'Kucing Media', NULL, '081217484227', NULL, 'Romadlon Rahmatulloh', NULL, NULL, 0, 'aktif', NULL, '2018-05-08 01:41:15', '2018-05-08 02:11:26'),
(7, NULL, 'macanfe', '$2y$10$zI/j/8fHbWHN2Z4qU4FDde0HWNm6HG3tF7WHyLBlqdMS4kK3PhNmy', 'macanfe@gmail.com', 'macanfe', NULL, '0811111111111', NULL, 'macan garong', NULL, NULL, 0, 'aktif', NULL, '2018-05-08 02:13:30', '2018-05-08 02:14:45');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_username_unique` (`username`),
  ADD UNIQUE KEY `admins_email_unique` (`email`),
  ADD KEY `admins_id_region_foreign` (`id_region`);

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `costumers`
--
ALTER TABLE `costumers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `costumers_email_unique` (`email`),
  ADD UNIQUE KEY `costumers_username_unique` (`username`);

--
-- Indeks untuk tabel `galeries`
--
ALTER TABLE `galeries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `galeries_id_category_foreign` (`id_category`),
  ADD KEY `galeries_id_studio_foreign` (`id_studio`);

--
-- Indeks untuk tabel `job_positions`
--
ALTER TABLE `job_positions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `requests_id_service_foreign` (`id_service`),
  ADD KEY `requests_id_costumer_foreign` (`id_costumer`);

--
-- Indeks untuk tabel `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `services_id_studio_foreign` (`id_studio`),
  ADD KEY `services_id_category_foreign` (`id_category`);

--
-- Indeks untuk tabel `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`),
  ADD KEY `staffs_id_region_foreign` (`id_region`),
  ADD KEY `staffs_id_job_foreign` (`id_job`);

--
-- Indeks untuk tabel `studios`
--
ALTER TABLE `studios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `studios_username_unique` (`username`),
  ADD UNIQUE KEY `studios_email_unique` (`email`),
  ADD KEY `studios_id_admin_foreign` (`id_admin`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `costumers`
--
ALTER TABLE `costumers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `galeries`
--
ALTER TABLE `galeries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `job_positions`
--
ALTER TABLE `job_positions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `regions`
--
ALTER TABLE `regions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `studios`
--
ALTER TABLE `studios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `admins`
--
ALTER TABLE `admins`
  ADD CONSTRAINT `admins_id_region_foreign` FOREIGN KEY (`id_region`) REFERENCES `regions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `galeries`
--
ALTER TABLE `galeries`
  ADD CONSTRAINT `galeries_id_category_foreign` FOREIGN KEY (`id_category`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `galeries_id_studio_foreign` FOREIGN KEY (`id_studio`) REFERENCES `studios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `requests`
--
ALTER TABLE `requests`
  ADD CONSTRAINT `requests_id_costumer_foreign` FOREIGN KEY (`id_costumer`) REFERENCES `costumers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `requests_id_service_foreign` FOREIGN KEY (`id_service`) REFERENCES `services` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_id_category_foreign` FOREIGN KEY (`id_category`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `services_id_studio_foreign` FOREIGN KEY (`id_studio`) REFERENCES `studios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staffs_id_job_foreign` FOREIGN KEY (`id_job`) REFERENCES `job_positions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `staffs_id_region_foreign` FOREIGN KEY (`id_region`) REFERENCES `regions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `studios`
--
ALTER TABLE `studios`
  ADD CONSTRAINT `studios_id_admin_foreign` FOREIGN KEY (`id_admin`) REFERENCES `admins` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
