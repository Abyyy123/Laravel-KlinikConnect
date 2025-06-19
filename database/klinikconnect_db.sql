-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Bulan Mei 2025 pada 07.50
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `klinikconnect_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `appointments`
--

CREATE TABLE `appointments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `doctor_id` bigint(20) UNSIGNED NOT NULL,
  `appointment_time` datetime NOT NULL,
  `notes` text DEFAULT NULL,
  `status` enum('pending','confirmed','cancelled','completed') NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `doctors`
--

CREATE TABLE `doctors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `specialization` varchar(255) NOT NULL,
  `education` varchar(255) DEFAULT NULL,
  `experience_years` varchar(255) DEFAULT NULL,
  `bio` text DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `sip_number` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `clinic_address` text DEFAULT NULL,
  `city` varchar(255) NOT NULL DEFAULT 'Jakarta',
  `work_days` varchar(255) DEFAULT NULL,
  `work_hours` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `doctors`
--

INSERT INTO `doctors` (`id`, `name`, `specialization`, `education`, `experience_years`, `bio`, `gender`, `sip_number`, `phone_number`, `email`, `clinic_address`, `city`, `work_days`, `work_hours`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Dr. Budi Santoso, Sp.A', 'Spesialis Anak', 'Fakultas Kedokteran Universitas Indonesia', '12 tahun', 'Berpengalaman dalam kesehatan anak, tumbuh kembang, dan imunisasi. Ramah anak dan keluarga.', 'Laki-laki', 'SIP/DU/001/2020', '081234567890', 'budi.santoso@klinikxyz.com', 'Jl. Kesehatan No. 10, Jakarta Pusat', 'Jakarta', 'Senin, Rabu, Jumat', '09:00 - 17:00', 1, '2025-05-23 20:02:14', '2025-05-23 20:02:14'),
(2, 'Dr. Ayu Lestari, Sp.OG', 'Spesialis Kandungan', 'Fakultas Kedokteran Universitas Gadjah Mada', '9 tahun', 'Fokus pada kesehatan ibu dan kandungan, program kehamilan, dan persalinan. Mendukung persalinan normal dan minim trauma.', 'Perempuan', 'SIP/OG/002/2021', '087654321098', 'ayu.lestari@klinikxyz.com', 'Jl. Kebahagiaan No. 5, Jakarta Selatan', 'Jakarta', 'Selasa, Kamis, Sabtu', '10:00 - 18:00', 1, '2025-05-23 20:02:14', '2025-05-23 20:02:14'),
(3, 'Dr. Candra Wijaya, Sp.PD', 'Spesialis Penyakit Dalam', 'Fakultas Kedokteran Universitas Padjadjaran', '15 tahun', 'Ahli dalam penanganan penyakit kronis seperti diabetes, hipertensi, dan masalah pencernaan. Mengedepankan pendekatan personal.', 'Laki-laki', 'SIP/PD/003/2019', '085012345678', 'candra.wijaya@klinikxyz.com', 'Jl. Kesejahteraan No. 1, Jakarta Barat', 'Jakarta', 'Senin - Jumat', '08:00 - 16:00', 1, '2025-05-23 20:02:14', '2025-05-23 20:02:14'),
(4, 'Dr. Dian Permata, Sp.M', 'Spesialis Mata', 'Fakultas Kedokteran Universitas Airlangga', '7 tahun', 'Fokus pada diagnostik dan penanganan berbagai masalah mata, termasuk katarak dan glaukoma. Memberikan perawatan mata komprehensif.', 'Perempuan', 'SIP/M/004/2022', '089876543210', 'dian.permata@klinikxyz.com', 'Jl. Penglihatan Indah No. 7, Jakarta Utara', 'Jakarta', 'Selasa, Kamis', '13:00 - 20:00', 1, '2025-05-23 20:02:14', '2025-05-23 20:02:14'),
(5, 'Dr. Eko Prasetyo, Sp.THT-KL', 'Spesialis THT-KL', 'Fakultas Kedokteran Universitas Hasanuddin', '10 tahun', 'Menangani masalah telinga, hidung, tenggorokan, kepala dan leher. Berpengalaman dalam prosedur bedah minor.', 'Laki-laki', 'SIP/THT/005/2020', '081122334455', 'eko.prasetyo@klinikxyz.com', 'Jl. Pendengaran No. 12, Jakarta Timur', 'Jakarta', 'Rabu, Jumat', '09:00 - 15:00', 1, '2025-05-23 20:02:14', '2025-05-23 20:02:14'),
(6, 'Dr. Fina Maharani, Sp.KK', 'Spesialis Kulit & Kelamin', 'Fakultas Kedokteran Universitas Diponegoro', '8 tahun', 'Pakar dalam masalah kulit dan kecantikan, serta penyakit menular seksual. Memberikan konsultasi estetik medis.', 'Perempuan', 'SIP/KK/006/2022', '087788990011', 'fina.maharani@klinikxyz.com', 'Jl. Cantik Jelita No. 3, Jakarta Selatan', 'Jakarta', 'Senin, Kamis', '11:00 - 19:00', 1, '2025-05-23 20:02:14', '2025-05-23 20:02:14'),
(7, 'Dr. Gilang Ramadhan, Sp.JP', 'Spesialis Jantung & Pembuluh Darah', 'Fakultas Kedokteran Universitas Brawijaya', '14 tahun', 'Konsentrasi pada penyakit jantung koroner, aritmia, dan gagal jantung. Menerima pasien dengan rujukan dan umum.', 'Laki-laki', 'SIP/JP/007/2018', '085210987654', 'gilang.ramadhan@klinikxyz.com', 'Jl. Detak Jantung No. 8, Jakarta Pusat', 'Jakarta', 'Selasa, Jumat', '08:00 - 15:00', 1, '2025-05-23 20:02:14', '2025-05-23 20:02:14'),
(8, 'Dr. Hani Putri, Sp.KFR', 'Spesialis Kedokteran Fisik & Rehabilitasi', 'Fakultas Kedokteran Universitas Sebelas Maret', '6 tahun', 'Membantu pasien memulihkan fungsi tubuh pasca cedera atau penyakit. Terapi fisik dan rehabilitasi komprehensif.', 'Perempuan', 'SIP/KFR/008/2023', '081928374650', 'hani.putri@klinikxyz.com', 'Jl. Pemulihan No. 15, Jakarta Barat', 'Jakarta', 'Rabu, Sabtu', '10:00 - 16:00', 1, '2025-05-23 20:02:14', '2025-05-23 20:02:14'),
(9, 'Dr. Ivan Pratama, Sp.BS', 'Spesialis Bedah Saraf', 'Fakultas Kedokteran Universitas Padjadjaran', '18 tahun', 'Pakar dalam bedah otak dan tulang belakang. Mengutamakan keselamatan dan hasil terbaik bagi pasien.', 'Laki-laki', 'SIP/BS/009/2016', '081345678901', 'ivan.pratama@klinikxyz.com', 'Jl. Bedah Unggul No. 20, Jakarta Pusat', 'Jakarta', 'Senin, Kamis', '07:00 - 14:00', 1, '2025-05-23 20:02:14', '2025-05-23 20:02:14'),
(10, 'Dr. Jenny Widya, Sp.GK', 'Spesialis Gizi Klinik', 'Fakultas Kedokteran Universitas Indonesia', '5 tahun', 'Menyediakan konsultasi gizi untuk berbagai kondisi medis dan kebutuhan gaya hidup sehat. Rencana diet personal.', 'Perempuan', 'SIP/GK/010/2024', '082233445566', 'jenny.widya@klinikxyz.com', 'Jl. Nutrisi Sehat No. 9, Jakarta Utara', 'Jakarta', 'Selasa, Jumat', '09:00 - 16:00', 1, '2025-05-23 20:02:14', '2025-05-23 20:02:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_05_24_024410_create_doctors_table', 2),
(5, '2025_05_24_031356_create_appointments_table', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('Bapf4xUcoCc13NymYdq31SPheeyTGrgwA1yU91r9', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNDVoald4RjJ4cXZrM0JTMDM3dURiN0lWUWMxTnhxZFFFY3JpbUxUNSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fX0=', 1748062362);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `gender`, `date_of_birth`, `phone_number`, `address`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Test User', 'test@example.com', '2025-05-23 16:53:04', '$2y$12$wPe/9yfKAEJm.s/0OKTlx.pGK0QpaGA6Lm04/alj36EWDCM6JCjnW', NULL, NULL, NULL, NULL, 'eQFpT6zIcA', '2025-05-23 16:53:04', '2025-05-23 16:53:04'),
(2, 'Aby Adinthya', 'adinthyaaby@gmail.com', NULL, '$2y$12$0sGN56OsaJIcCD9SJ/pPxOxspQq8Loi0055CuZjHM9NMrbH2jpyaC', 'Laki-Laki', '2001-04-10', '085117013527', 'Kamp.kandang', NULL, '2025-05-23 18:08:02', '2025-05-23 18:08:02');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `appointments_user_id_foreign` (`user_id`),
  ADD KEY `appointments_doctor_id_foreign` (`doctor_id`);

--
-- Indeks untuk tabel `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `doctors_email_unique` (`email`),
  ADD UNIQUE KEY `doctors_sip_number_unique` (`sip_number`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indeks untuk tabel `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

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
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT untuk tabel `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `appointments_doctor_id_foreign` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `appointments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
