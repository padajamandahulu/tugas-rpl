-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Feb 2024 pada 20.20
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
  `categories` varchar(64) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `blog`
--

INSERT INTO `blog` (`id`, `img`, `tittle`, `date`, `categories`, `description`) VALUES
(1, 'news_5.jpg', 'Books, Kindle or Tablet?', '2024-02-01', 'parenting', ' Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum illo suscipit fuga nobis, doloremque cupiditate aspernatur sit explicabo officiis iusto reprehenderit quidem vero eligendi nam earum dignissimos blanditiis quos dolores.\r\n'),
(2, 'news_5.jpg', 'satu', '2024-02-21', 'web-dev', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum illo suscipit fuga nobis, doloremque cupiditate aspernatur sit explicabo officiis iusto reprehenderit quidem vero eligendi nam earum dignissimos blanditiis quos dolores.'),
(3, 'news_5.jpg', 'dua', '2024-02-05', 'mental-health', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laborum illo suscipit fuga nobis, doloremque cupiditate aspernatur sit explicabo officiis iusto reprehenderit quidem vero eligendi nam earum dignissimos blanditiis quos dolores.');

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
(1, 'parenting', 'video', 'https://www.youtube.com/watch?v=avckjtexBF0', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime quos accusantium labore nihil? Suscipit quod rem quia animi, veritatis non atque numquam, modi ducimus necessitatibus placeat, obcaecati maiores. Provident, voluptas.', 'course_1.jpg', 'Online parenting'),
(2, 'web-dev', 'abc', 'https://www.youtube.com/watch?v=anKmU1J0l9g', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime quos accusantium labore nihil? Suscipit quod rem quia animi, veritatis non atque numquam, modi ducimus necessitatibus placeat, obcaecati maiores. Provident, voluptas.', 'course_3.jpg', 'Web programming unpas'),
(3, 'mental-health', '123', 'https://www.youtube.com/watch?v=DLok7hKy2TM', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime quos accusantium labore nihil? Suscipit quod rem quia animi, veritatis non atque numquam, modi ducimus necessitatibus placeat, obcaecati maiores. Provident, voluptas.', 'course_3.jpg', 'Query Builder Class'),
(4, 'healthy', '91238', 'https://www.youtube.com/watch?v=gGJ2EHDT6Ps', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime quos accusantium labore nihil? Suscipit quod rem quia animi, veritatis non atque numquam, modi ducimus necessitatibus placeat, obcaecati maiores. Provident, voluptas.', 'course_4.jpg', 'Database Metadata'),
(5, 'memasak', 'video', 'https://youtu.be/5_MRXyYjHDk', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime quos accusantium labore nihil? Suscipit quod rem quia animi, veritatis non atque numquam, modi ducimus necessitatibus placeat, obcaecati maiores. Provident, voluptas.', 'course_5.jpg', 'XML Helper'),
(6, 'web-dev', 'blog', 'https://youtube.com', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorum reprehenderit excepturi veniam odit consequuntur quo, reiciendis aliquam molestias deserunt accusamus vero qui dolor delectus et eaque sit ipsam fugit id', 'course_7.jpg', 'Web Programming Unikom\r\n');

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
(2, 'vikri khoirul fikroh', 'sandhikagalih@unpas.ac.id', '$2y$10$OoiiXLP4oA0WnFWR.7jw9u0.UzvrFW4nbsiZYR6tJfXzVqClog6nK', '2024-02-12 12:48:26'),
(3, 'Rio de Janeiro', 'Rio@gmail.com', '$2y$10$Y7hYx8/7Cjga/3rjskZC5eg6azl1AQgriZGHP.87552ewiSv40bpi', '2024-02-13 15:56:37'),
(4, 'Rio de Janeiro', 'rio1@gmail.com', '$2y$10$7yrB8XJ8lyaSIiqA4tQpb.jJNwwrgVBlwHMpxIhPdoquj06PQqLru', '2024-02-13 16:01:49'),
(6, 'genta', 'genta@gmail.com', '$2y$10$odkitu0D5FcpNJQmgdvLF.X0IhItUcq6WEYiuauhtUhXf5fumzdiW', '2024-02-14 20:08:30'),
(7, 'absensi', '1@gmail.com', '$2y$10$7pxqbD5LqYxwMbNwwNlA/eXIjBakE6lt6U0kE9.wQTDCyB2zodyOW', '2024-02-15 12:45:34'),
(8, 'padil', 'padil@gmail.com', '$2y$10$tWyS.ZiKtFeDZyuaT/quPuaxjDoGADrIiD0obqYJmZ5wRxuW3bSgO', '2024-02-15 19:04:26');

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
(39, 'memasak', 'rio1@gmail.com', 1),
(40, 'parenting', 'rio1@gmail.com', 1),
(41, 'web-dev', 'rio1@gmail.com', 1),
(47, 'parenting', 'Rio@gmail.com', 1),
(48, 'mental-health', 'Rio@gmail.com', 1),
(50, 'web-dev', 'sandhikagalih@unpas.ac.id', 1),
(51, 'mental-health', 'sandhikagalih@unpas.ac.id', 1),
(52, 'memasak', 'sandhikagalih@unpas.ac.id', 1),
(53, 'web-dev', 'sandhikagalih@unpas.ac.id', 1),
(54, 'web-dev', '1@gmail.com', 1),
(55, 'mental-health', '1@gmail.com', 1);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `content`
--
ALTER TABLE `content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `user_preferences`
--
ALTER TABLE `user_preferences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
