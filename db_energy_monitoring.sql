-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Okt 2022 pada 23.26
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_energy_monitoring`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `chart_daily`
--

CREATE TABLE `chart_daily` (
  `id` int(11) NOT NULL,
  `series` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `chart_daily`
--

INSERT INTO `chart_daily` (`id`, `series`, `created_at`) VALUES
(126, '2972.7752040450773', '2022-10-02 17:00:16'),
(127, '3641.090034104879', '2022-10-02 18:00:01'),
(128, '3210.7101574091444', '2022-10-02 19:00:00'),
(129, '7552.001589487092', '2022-09-02 19:00:00'),
(130, '3738.997799304873', '2022-10-02 20:00:01'),
(131, '9572', '2022-10-02 21:00:00');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `chart_daily`
--
ALTER TABLE `chart_daily`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `chart_daily`
--
ALTER TABLE `chart_daily`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
