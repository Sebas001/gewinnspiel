-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 24. Aug 2018 um 16:33
-- Server-Version: 10.1.34-MariaDB
-- PHP-Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Datenbank: `gewinnspiel`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `angebote`
--

CREATE TABLE `angebote` (
  `pkid` int(11) NOT NULL,
  `angebotname` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Daten für Tabelle `angebote`
--

INSERT INTO `angebote` (`pkid`, `angebotname`) VALUES
(1, 'Angebot 1'),
(2, 'Angebot 2'),
(3, 'Angebot 3');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `personen`
--

CREATE TABLE `personen` (
  `pkid` int(11) NOT NULL,
  `vorname` varchar(255) COLLATE utf8_bin NOT NULL,
  `nachname` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `strasse` varchar(255) COLLATE utf8_bin NOT NULL,
  `plz` varchar(255) COLLATE utf8_bin NOT NULL,
  `ort` varchar(255) COLLATE utf8_bin NOT NULL,
  `geburtsdatum` date NOT NULL,
  `agb1` varchar(255) COLLATE utf8_bin NOT NULL,
  `agb2` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Daten für Tabelle `personen`
--

INSERT INTO `personen` (`pkid`, `vorname`, `nachname`, `email`, `strasse`, `plz`, `ort`, `geburtsdatum`, `agb1`, `agb2`) VALUES
(1, 'as', 'asasas', 'asas@sadasd.de', '', '', '', '0000-00-00', 'acc1', 'acc2'),
(2, 'xcvxcv', 'xcvxcv', 'xcvxcvqdf@sdf.de', '', '', '', '0000-00-00', 'acc1', 'acc2'),
(3, 'asddd', 'asd', 'asdasd@adasd.de', '', '', '', '0000-00-00', 'acc1', 'acc2'),
(4, 'asas', 'asas', 'asas@asfdiuhasd.de', '', '', '', '0000-00-00', 'acc1', 'acc2'),
(5, 'asd', 'asdas', 'asd111@sdfg.as', '', '', '', '0000-00-00', 'acc1', 'acc2'),
(6, 'as', 'asas', 'asfgd@asdasd.de', '', '', '', '0000-00-00', 'acc1', 'acc2'),
(7, 'ghjghj', 'ghjghj', 'ghjghj@fhfgh.li', '', '', '', '0000-00-00', 'acc1', 'acc2'),
(8, 'cvbcvb', 'cvbvcb', 'cvbcvbcvb@fgfgh.gr', '', '', '', '0000-00-00', 'acc1', 'acc2'),
(9, 'cxvbxcvb', 'ttztrzrtz', 'rtzrtz@jghjghj.mj', '', '', '', '0000-00-00', 'acc1', 'acc2'),
(10, 'tzutzu', 'ztutzutzu', 'tzuztu@fghfghfgh.gt', '', '', '', '0000-00-00', 'acc1', 'acc2'),
(11, 'xycvxycv', 'xycvyxcv', 'xycvyxvc@hjghj.rt', 'dfgdfg1', 'dfgdfg3', 'dfgdfg2', '0000-00-00', 'acc1', 'acc2'),
(12, 'cvbcvb', 'cvbcvbcvb', 'cvbcvbcvb@fgvvvgh.gr', 'cvbcvbc', '232323', 'cvbcvb', '0000-00-00', 'acc1', 'acc2'),
(13, 'yxyxyx', 'yxyxyx', 'yxyx@fghfgh.dh', 'fghfgh', 'fghfgh', 'fghfgh', '0000-00-00', 'acc1', 'acc2'),
(14, 'vbnvbn', 'vbnvbn', 'vbnvbn@chfgh.ds', '', '', '', '0000-00-00', 'acc1', 'acc2'),
(15, 'vbnvbn', 'vbnvbn', 'vbnvbn@chfgh.ds', 'sdf', '12312', 'sdf', '0000-00-00', 'acc1', 'acc2'),
(16, 'fdgzzu', 'tzutzu', 'tzutzu@xhjghjg.df', 'sdfsdf', '1234g', 'sdfg', '0000-00-00', 'acc1', 'acc2'),
(17, 'fghfgh', 'fghfgh', 'fghfgh@gjghj.jt', 'fgfghfgh', '123hg', 'fghfghfgh', '0000-00-00', 'acc1', 'acc2'),
(18, 'fghfgh', 'fghfgh', 'fghfgh@ghjghj.gj', 'ghjghj', '12345', 'ghjghj', '0000-00-00', 'acc1', 'acc2'),
(19, 'fghfghfgh', 'fghfghfgh', 'tzuzthhu@fghfghfgh.gt', 'fghfgh', '23444', 'fghfgh', '0000-00-00', 'acc1', 'acc2'),
(20, 'gfhfgh', 'hhh', 'fghfgh@ghjghj.gj', 'fgh', '12322', 'fgh', '0000-00-00', 'acc1', 'acc2'),
(21, 'sdfsdf', 'sdfsdf', 'asd111@sdfg.as', 'sdfsdf', '33232', 'sdfsdf', '0000-00-00', 'acc1', 'acc2'),
(22, 'asdasdasd', 'asdasdasd', 'asd111@sdfg.as', 'asdasd', '12345', 'asdasd', '0000-00-00', 'acc1', 'acc2');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `personen2angebote`
--

CREATE TABLE `personen2angebote` (
  `pkid` int(11) NOT NULL,
  `personid` int(11) NOT NULL,
  `angebotid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Daten für Tabelle `personen2angebote`
--

INSERT INTO `personen2angebote` (`pkid`, `personid`, `angebotid`) VALUES
(1, 1, 2),
(2, 2, 3),
(3, 19, 0),
(4, 20, 0),
(5, 20, 2),
(6, 21, 2),
(7, 22, 3);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `angebote`
--
ALTER TABLE `angebote`
  ADD PRIMARY KEY (`pkid`);

--
-- Indizes für die Tabelle `personen`
--
ALTER TABLE `personen`
  ADD PRIMARY KEY (`pkid`);

--
-- Indizes für die Tabelle `personen2angebote`
--
ALTER TABLE `personen2angebote`
  ADD PRIMARY KEY (`pkid`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `angebote`
--
ALTER TABLE `angebote`
  MODIFY `pkid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT für Tabelle `personen`
--
ALTER TABLE `personen`
  MODIFY `pkid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT für Tabelle `personen2angebote`
--
ALTER TABLE `personen2angebote`
  MODIFY `pkid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;
