-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: local
-- Czas generowania: 18 Maj 2016, 20:56
-- Wersja serwera: 5.7.10-log
-- Wersja PHP: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `substance`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `group`
--

CREATE TABLE `group` (
  `id` int(11) NOT NULL,
  `parent_name` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `group`
--

INSERT INTO `group` (`id`, `parent_name`, `name`) VALUES
(2, 'grupa2', 'grupa1'),
(1, 'grupa1', 'grupa2'),
(3, 'z2', 'z1');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `substance`
--

CREATE TABLE `substance` (
  `id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `unit` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `substance`
--

INSERT INTO `substance` (`id`, `code`, `name`, `unit`) VALUES
(1, 'aaa', 'aaa', 'aaaa'),
(2, 'b', 'b', 'b'),
(3, '33', '33', '33');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `unit`
--

CREATE TABLE `unit` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `shortcut` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `unit`
--

INSERT INTO `unit` (`id`, `name`, `shortcut`) VALUES
(1, 'złoty', 'pln');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `group`
--
ALTER TABLE `group`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name-parent_name` (`name`,`parent_name`) USING BTREE,
  ADD UNIQUE KEY `parent_name-name` (`parent_name`,`name`) USING BTREE;

--
-- Indexes for table `substance`
--
ALTER TABLE `substance`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `shortcut` (`shortcut`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `group`
--
ALTER TABLE `group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT dla tabeli `substance`
--
ALTER TABLE `substance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT dla tabeli `unit`
--
ALTER TABLE `unit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
