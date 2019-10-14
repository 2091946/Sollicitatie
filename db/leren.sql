-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 14 okt 2019 om 15:10
-- Serverversie: 10.1.36-MariaDB
-- PHP-versie: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `leren`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `uploaded_on` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `images`
--

INSERT INTO `images` (`id`, `file_name`, `uploaded_on`, `status`) VALUES
(1, 'image.png', '2019-10-14 14:51:04', '1'),
(2, 'image.png', '2019-10-14 14:54:28', '1'),
(3, 'image.png', '2019-10-14 14:55:00', '1'),
(4, 'image.png', '2019-10-14 14:55:40', '1'),
(5, 'image.png', '2019-10-14 14:55:58', '1'),
(6, 'image.png', '2019-10-14 14:56:19', '1');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `suffix` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `birthdate` date NOT NULL,
  `country` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `username`, `firstname`, `suffix`, `lastname`, `age`, `birthdate`, `country`, `password`, `created_at`) VALUES
(1, 'testuser1', 'Rocco', 'van', 'Baardwijk', 19, '1999-10-28', 'Netherlands', '$2y$10$cxRwUv/2NZBhfoiTVWvLKuXV.YG1VciOY7n/vA88nUTyQlz8J6eAW', '2019-10-14 08:58:06');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
