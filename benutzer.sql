-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: mysql04.manitu.net
-- Erstellungszeit: 25. Aug 2022 um 11:27
-- Server-Version: 10.2.36-MariaDB-log
-- PHP-Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `db82468`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `benutzer`
--

CREATE TABLE `benutzer` (
  `wtc_id` int(11) NOT NULL,
  `wtc_vorname` varchar(255) NOT NULL,
  `wtc_nachname` varchar(255) NOT NULL,
  `wtc_email` varchar(255) NOT NULL,
  `wtc_firma` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `benutzer`
--

INSERT INTO `benutzer` (`wtc_id`, `wtc_vorname`, `wtc_nachname`, `wtc_email`, `wtc_firma`) VALUES
(20, 'Peter', 'Muffin', 'petermuffin@live.com', 'Tabaluga & Partner'),
(18, 'Thomas', 'Anders', 'ichbin@anders.com', 'Anders & Anders'),
(17, 'Peter', 'Muffin', 'petermuffin@live.com', 'Tabaluga & Partner'),
(16, 'Detlef', 'D! Wurst', 'detlefdisoost@web.de', 'Detlef-Casting'),
(14, 'Han', 'Solo', 'han@solo.com', 'Jedi Company'),
(15, 'Peter ', 'Pan', 'info@peterpan.de', 'Neverland GmbH'),
(21, 'Gisela', 'Wolkenweich', 'gisela.wolkenweich@firma.de', 'Ball'),
(22, 'Marianne', 'Weber', 'm.weber@t-online.com', 't-online'),
(23, 'Lutz', 'der Fuchs', 'lutzfuchs@friedl.de', 'fuchs und fuchs');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `benutzer`
--
ALTER TABLE `benutzer`
  ADD PRIMARY KEY (`wtc_id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `benutzer`
--
ALTER TABLE `benutzer`
  MODIFY `wtc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
