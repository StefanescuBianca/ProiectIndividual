-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1
-- Timp de generare: ian. 04, 2021 la 09:43 PM
-- Versiune server: 10.4.11-MariaDB
-- Versiune PHP: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Bază de date: `registration`
--

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `quiz`
--

CREATE TABLE `quiz` (
  `id` int(11) NOT NULL,
  `id_user` varchar(100) NOT NULL,
  `Câte planete se rotesc în jurul Soarelui?` varchar(100) NOT NULL,
  `Care dintre urmatoarele planete sunt planete pitice?` varchar(100) NOT NULL,
  `Care este planeta cea mai apropiată de Soare?` varchar(100) NOT NULL,
  `Planeta pe care se afla cel mai înalt munte` varchar(200) NOT NULL,
  `Cand s-a format Sistemul Solar?` varchar(100) NOT NULL,
  `Câte planete pitice se rotesc în jurul Soarelui?` varchar(100) NOT NULL,
  `Care este cel mai masiv obiect al Sistemului Solar?` varchar(100) NOT NULL,
  `Ce planete sunt numite „giganți de gheață”?` varchar(100) NOT NULL,
  `Cum se numesc planetele din Sistemul Solar?` varchar(100) NOT NULL,
  `Care este planeta cea mai mare ca marime?` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Eliminarea datelor din tabel `quiz`
--

INSERT INTO `quiz` (`id`, `id_user`, `Câte planete se rotesc în jurul Soarelui?`, `Care dintre urmatoarele planete sunt planete pitice?`, `Care este planeta cea mai apropiată de Soare?`, `Planeta pe care se afla cel mai înalt munte`, `Cand s-a format Sistemul Solar?`, `Câte planete pitice se rotesc în jurul Soarelui?`, `Care este cel mai masiv obiect al Sistemului Solar?`, `Ce planete sunt numite „giganți de gheață”?`, `Cum se numesc planetele din Sistemul Solar?`, `Care este planeta cea mai mare ca marime?`) VALUES
(12, '1009', 'a) 8 planete', 'c) Eris, Makemake, Pluto', 'b) Mercur', 'c) Marte', 'b) acum 4,6 miliarde de ani', 'c) 3 planete', 'b) Soarele', 'c) Neptun și Uranus', 'c) Mercur, Venus, Pământ, Marte, Jupiter, Saturn, Uranus, Neptun', 'a) Jupiter '),
(13, '1009', 'b) 5 planete', 'b) Neptun, Jupiter, Uranus', 'c) Jupiter', 'c) Marte', 'b) acum 4,6 miliarde de ani', 'c) 3 planete', 'b) Soarele', 'c) Neptun și Uranus', 'c) Mercur, Venus, Pământ, Marte, Jupiter, Saturn, Uranus, Neptun', 'c) Uranus '),
(14, '1009', 'a) 8 planete', 'c) Eris, Makemake, Pluto', 'b) Mercur', 'b) Pământ', 'b) acum 4,6 miliarde de ani', 'c) 3 planete', 'b) Soarele', 'c) Neptun și Uranus', 'c) Mercur, Venus, Pământ, Marte, Jupiter, Saturn, Uranus, Neptun', 'a) Jupiter ');

--
-- Indexuri pentru tabele eliminate
--

--
-- Indexuri pentru tabele `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pentru tabele eliminate
--

--
-- AUTO_INCREMENT pentru tabele `quiz`
--
ALTER TABLE `quiz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
