-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Sep 2020 pada 11.57
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tracer_study`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alumni`
--

CREATE TABLE `alumni` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan` enum('IPA','IPS') COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telepon` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `alumni`
--

INSERT INTO `alumni` (`id`, `user_id`, `nama`, `jurusan`, `alamat`, `jenis_kelamin`, `no_telepon`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 2, 'Rizal Ruby Rahman', 'IPA', 'Karawang', 'Laki-Laki', '08993171565', 'rizal.jpg', '2020-08-16 00:01:59', '2020-08-19 21:32:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `event`
--

CREATE TABLE `event` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `event`
--

INSERT INTO `event` (`id`, `title`, `tempat`, `tanggal`, `waktu`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Pengukuhan Pengurus Alumni PHB Periode 2019-2022', 'Universitas Negri Jakarta', '2020-08-31', '09:00:00', 'hai guys akan ada kegiatan pengukuhan pengurus alumni PHB Periode 2019-2022\r\nLokasi : The Harber Cafe Kampus 1 PHB', '2020-08-16 23:05:35', '2020-08-27 02:50:08'),
(2, '\r\nJOB FAIR Diskankerin PHB', 'Telcom pdc karawang', '2020-09-16', '08:00:00', 'Dinas Tenaga Kerja dan Perindustrian Kota Tegal kembali menggelar Pameran Bursa Kerja (Job Fair) Tahun 2019.\r\n\r\nCatat tanggalnya, 29 - 30 Agustus 2019. Cek lokasinya, Politeknik Harapan Bersama, Jl. Mataram No. 9 Tegal (200 meter utara Terminal Tegal)\r\n\r\nSiapkan berkas-berkas untuk mendapatkan pekerjaan sesuai yang Anda inginkan.\r\n\r\nJob Fair ini juga dimeriahkan dengan Pameran Produk Unggulan karya Mahasiswa Poltek Harber dan Food Festival.', '2020-08-16 22:30:33', '2020-08-16 22:30:33'),
(3, 'Seminar IT', 'Universitas Indonesia', '2020-09-08', '09:00:00', 'Seminar tentang perkembangan teknologi masa kini', '2020-08-27 02:42:08', '2020-08-27 02:42:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jawaban`
--

CREATE TABLE `jawaban` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `jawaban1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jawaban2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jawaban3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jawaban4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jawaban5` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jawaban6` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jawaban7` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jawaban8` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jawaban9` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jawaban10` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jawaban`
--

INSERT INTO `jawaban` (`id`, `user_id`, `jawaban1`, `jawaban2`, `jawaban3`, `jawaban4`, `jawaban5`, `jawaban6`, `jawaban7`, `jawaban8`, `jawaban9`, `jawaban10`, `created_at`, `updated_at`) VALUES
(1, 2, 'A', 'B', 'C', 'D', 'D', NULL, NULL, NULL, NULL, NULL, '2020-08-16 05:40:41', '2020-08-16 05:40:41'),
(12, 4, 'B', 'B', 'B', 'B', 'B', NULL, NULL, NULL, NULL, NULL, '2020-08-17 16:47:12', '2020-08-17 16:47:12'),
(20, 3, 'D', 'C', 'B', 'C', 'B', NULL, NULL, NULL, NULL, NULL, '2020-08-17 17:02:30', '2020-08-17 17:02:30'),
(22, 2, 'A', 'A', 'A', 'B', 'A', NULL, NULL, NULL, NULL, NULL, '2020-08-17 21:01:39', '2020-08-17 21:01:39');

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
(34, '2014_10_12_000000_create_users_table', 1),
(35, '2014_10_12_100000_create_password_resets_table', 1),
(36, '2019_08_19_000000_create_failed_jobs_table', 1),
(37, '2020_08_07_084352_create_alumnis_table', 1),
(38, '2020_08_13_234453_create_pertanyaan_table', 1),
(39, '2020_08_13_235132_create_jawaban_table', 1),
(40, '2020_08_16_215640_create_event_table', 2);

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
-- Struktur dari tabel `pertanyaan`
--

CREATE TABLE `pertanyaan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pertanyaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jawaban_a` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jawaban_b` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jawaban_c` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jawaban_d` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pertanyaan`
--

INSERT INTO `pertanyaan` (`id`, `pertanyaan`, `jawaban_a`, `jawaban_b`, `jawaban_c`, `jawaban_d`, `created_at`, `updated_at`) VALUES
(1, 'Status anda setelah lulus', 'Kuliah', 'Bekerja', 'Menganggur', 'Dll', NULL, NULL),
(2, 'Lama waktu tunggu yang anda perlukan untuk mendapatkan pekerjaan/studi lanjut sejak waktu wisuda', 'Kurang dari 3 bulan', '3-6 bulan setelah lulus', '6-12 bulan setelah lulus', 'lebih dari 1 tahun', NULL, NULL),
(3, 'Apa pekerjaan anda setelah lulus', 'Karyawan', 'Wiraswasta', 'Dll', 'Tidak bekerja', NULL, NULL),
(4, 'Cara mendapatkan informasi pekerjaan/studi lanjut setelah lulus', 'Media cetak maupun online', 'Sosialisasi individu seperti teman ataupun keluarga', 'Menciptakan pekerjaan sendiri (wirausaha)', 'Dll', NULL, NULL),
(5, 'Bagaimana anda mendapatkan pekerjaan pertama', 'Kompetisi/tes', 'Rekomendasi/tanpa tes', 'Usaha mandiri', 'Dll', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Admin', 'Admin@gmail.com', NULL, '$2y$10$M/qKuRYP/Sy/qxqV73VYIOUDKeo4gpSVij77KYCHRMKxTlPyGKqei', 'W2BgBWo63qfldZ69DBsmfRcGuBDjpoFjUP7G05bdu42YY4jVxA1AF0zZuu4Y', '2020-08-15 23:59:23', '2020-08-15 23:59:23'),
(2, 'user', 'Rizal Ruby Rahman', 'rizalrubyr@gmail.com', NULL, '$2y$10$kKZF9DVtzATsvFnHlNrzd.SxwUZQ.IxiMvtsUe65eXoPfY.8MNuC.', 'mzmObP1myNp0AQn9Vnh9ishi3I4gylcArZ7gSOiaCvvODt7o9TTPEOzB19g8', '2020-08-16 00:01:59', '2020-08-16 00:01:59'),
(3, 'user', 'Nur Izzah Jundiah', 'izzahjundiah@gmail.com', NULL, '$2y$10$6pJDzoaVEdJS8Yqdp76hkej/sqPCmKlx52.v28RdijcIfCFxq9/6m', 'kQvpm8VZIUMZALW1V7nBPzz1H0CIvLxwkZ3RuESrxa1s0W2QJM00EJsnnLiU', '2020-08-17 16:07:51', '2020-08-17 16:07:51'),
(4, 'user', 'contoh', 'contoh@gmail.com', NULL, '$2y$10$FJpW/VqoChMOMftbgc72p.FK/LeWPKm6S9grJGR4jWRbhUyde/vSy', 'U5cYTs3HusGobSMAQ18e5s0j6X43TmYvOkLn8bTzOUNWThiD30BRO4y75LYN', '2020-08-17 16:10:47', '2020-08-17 16:10:47');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`id`),
  ADD KEY `alumni_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jawaban`
--
ALTER TABLE `jawaban`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jawaban_user_id_foreign` (`user_id`);

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
-- Indeks untuk tabel `pertanyaan`
--
ALTER TABLE `pertanyaan`
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
-- AUTO_INCREMENT untuk tabel `alumni`
--
ALTER TABLE `alumni`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `event`
--
ALTER TABLE `event`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jawaban`
--
ALTER TABLE `jawaban`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT untuk tabel `pertanyaan`
--
ALTER TABLE `pertanyaan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `alumni`
--
ALTER TABLE `alumni`
  ADD CONSTRAINT `alumni_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `jawaban`
--
ALTER TABLE `jawaban`
  ADD CONSTRAINT `jawaban_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
