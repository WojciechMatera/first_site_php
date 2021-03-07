-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Host: sql3.netmark.pl:3306
-- Czas wygenerowania: 18 Lut 2018, 21:07
-- Wersja serwera: 5.0.77
-- Wersja PHP: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Baza danych: `wmaterap_wmatera_db`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `autorzy`
--

CREATE TABLE IF NOT EXISTS `autorzy` (
  `nazwa_uz` varchar(16) NOT NULL,
  `haslo` varchar(40) NOT NULL,
  `pelne_nazwisko` text,
  PRIMARY KEY  (`nazwa_uz`)
) ENGINE=InnoDB DEFAULT CHARSET=latin2;

--
-- Zrzut danych tabeli `autorzy`
--

INSERT INTO `autorzy` (`nazwa_uz`, `haslo`, `pelne_nazwisko`) VALUES
('admin', '', 'admin_strony');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pola`
--

CREATE TABLE IF NOT EXISTS `pola` (
  `id` int(11) NOT NULL auto_increment,
  `autor` varchar(16) NOT NULL,
  `strona` varchar(16) NOT NULL,
  `kolumna1` text,
  `kolumna2` text,
  `kolumna3` text,
  `kolumna4` text,
  `kolumna5` text,
  `kolumna6` text,
  `kolumna7` text,
  `kolumna8` text,
  `kolumna9` text,
  `kolumna10` text,
  `kolumna11` text,
  `kolumna12` text,
  `kolumna13` text,
  `kolumna14` text,
  `kolumna15` text,
  `utworzony` int(11) default NULL,
  `zmodyfikowany` int(11) default NULL,
  `opublikowany` int(11) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin2 AUTO_INCREMENT=70 ;

--
-- Zrzut danych tabeli `pola`
--

INSERT INTO `pola` (`id`, `autor`, `strona`, `kolumna1`, `kolumna2`, `kolumna3`, `kolumna4`, `kolumna5`, `kolumna6`, `kolumna7`, `kolumna8`, `kolumna9`, `kolumna10`, `kolumna11`, `kolumna12`, `kolumna13`, `kolumna14`, `kolumna15`, `utworzony`, `zmodyfikowany`, `opublikowany`) VALUES
(8, 'Admin', 'strona13', '', '', 'moja_historia', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `slowa_kluczowe`
--

CREATE TABLE IF NOT EXISTS `slowa_kluczowe` (
  `pola` int(11) NOT NULL,
  `slowo_klucz` varchar(32) NOT NULL,
  `waznosc` int(11) NOT NULL,
  PRIMARY KEY  (`pola`,`slowo_klucz`)
) ENGINE=InnoDB DEFAULT CHARSET=latin2;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `statystyka`
--

CREATE TABLE IF NOT EXISTS `statystyka` (
  `id` int(11) NOT NULL auto_increment,
  `ip` text,
  `system` text,
  `browser` text,
  `data` date NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin2 AUTO_INCREMENT=59539 ;

--
-- Zrzut danych tabeli `statystyka`
--

INSERT INTO `statystyka` (`id`, `ip`, `system`, `browser`, `data`) VALUES
(1, 'Add', '', 'artykuĹ', '0000-00-00'),
(62, '', '', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `strony`
--

CREATE TABLE IF NOT EXISTS `strony` (
  `kod` varchar(16) NOT NULL,
  `opis` text,
  PRIMARY KEY  (`kod`)
) ENGINE=InnoDB DEFAULT CHARSET=latin2;

--
-- Zrzut danych tabeli `strony`
--

INSERT INTO `strony` (`kod`, `opis`) VALUES
('statystyki', NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uprawnienia_autora`
--

CREATE TABLE IF NOT EXISTS `uprawnienia_autora` (
  `autor` varchar(16) NOT NULL,
  `strona` varchar(16) NOT NULL,
  PRIMARY KEY  (`autor`,`strona`)
) ENGINE=InnoDB DEFAULT CHARSET=latin2;

--
-- Zrzut danych tabeli `uprawnienia_autora`
--

INSERT INTO `uprawnienia_autora` (`autor`, `strona`) VALUES
('piotr', 'stat');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
