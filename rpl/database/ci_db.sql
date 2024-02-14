-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Feb 2024 pada 20.02
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `img` varchar(64) NOT NULL,
  `tittle` varchar(64) NOT NULL,
  `date` date NOT NULL,
  `categories` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `content`
--

CREATE TABLE `content` (
  `id` int(11) NOT NULL,
  `categories` varchar(64) NOT NULL,
  `type` varchar(64) NOT NULL,
  `url` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `tittle` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `content`
--

INSERT INTO `content` (`id`, `categories`, `type`, `url`, `description`, `thumbnail`, `tittle`) VALUES
(1, 'parenting', 'video', 'https://www.youtube.com/watch?v=avckjtexBF0', 'parenting adalah ....\r\n', 'course_1.jpg', 'Online parenting'),
(2, 'web-dev', 'abc', 'https://www.youtube.com/watch?v=anKmU1J0l9g', 'asdasdas\r\n', 'course_2.jpg', 'Web programming unpas'),
(3, 'mental-health', '123', 'https://www.youtube.com/watch?v=DLok7hKy2TM', 'The best voice in the world. Dimash Kudaibergenov - Opera 2 (2017)', 'course_3.jpg', 'Minahasa ohayo '),
(4, 'healthy', '91238', 'https://www.youtube.com/watch?v=gGJ2EHDT6Ps', 'vitas dream', 'course_4.jpg', 'hah'),
(5, 'memasak', 'video', 'https://youtu.be/5_MRXyYjHDk', 'asdas', 'course_5.jpg', 'nope');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(150) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `password` varchar(150) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`) VALUES
(1, 'vikri khoirul fikroh', 'vfikroh@gmail.com', '$2y$10$s6N3RyUYBaeEmfTypB/ozOwwl6l9ApI.OtxK63B9pVpWZeSnhh3wu', '2024-02-11 15:16:42'),
(2, 'vikri khoirul fikroh', 'sandhikagalih@unpas.ac.id', '$2y$10$OoiiXLP4oA0WnFWR.7jw9u0.UzvrFW4nbsiZYR6tJfXzVqClog6nK', '2024-02-12 12:48:26'),
(3, 'Rio de Janeiro', 'Rio@gmail.com', '$2y$10$Y7hYx8/7Cjga/3rjskZC5eg6azl1AQgriZGHP.87552ewiSv40bpi', '2024-02-13 15:56:37'),
(4, 'Rio de Janeiro', 'rio1@gmail.com', '$2y$10$7yrB8XJ8lyaSIiqA4tQpb.jJNwwrgVBlwHMpxIhPdoquj06PQqLru', '2024-02-13 16:01:49'),
(5, 'ricol', 'ricol@gmail.com', '$2y$10$sgl1NA5JnQd0eA1L64YFk.ZgApNfq/MqjI1c00p8NgzzVK7qN8Pke', '2024-02-13 22:23:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_preferences`
--

CREATE TABLE `user_preferences` (
  `id` int(11) NOT NULL,
  `category` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `is_active` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user_preferences`
--

INSERT INTO `user_preferences` (`id`, `category`, `email`, `is_active`) VALUES
(1, 'parenting', 'rio1@gmail.com', 1),
(2, 'modeling', 'rio1@gmail.com', 1),
(17, 'web-dev', 'rio1@gmail.com', 1),
(18, 'mental-health', 'rio1@gmail.com', 1),
(29, 'memasak', 'rio1@gmail.com', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_preferences`
--
ALTER TABLE `user_preferences`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `content`
--
ALTER TABLE `content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user_preferences`
--
ALTER TABLE `user_preferences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
