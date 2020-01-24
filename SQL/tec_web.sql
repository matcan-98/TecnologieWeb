-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Gen 24, 2020 alle 14:38
-- Versione del server: 10.4.8-MariaDB
-- Versione PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tec_web`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `carrello`
--

CREATE TABLE `carrello` (
  `ID` int(11) NOT NULL,
  `Mail` varchar(75) NOT NULL,
  `e1` int(11) NOT NULL,
  `e2` int(11) NOT NULL,
  `e3` int(11) NOT NULL,
  `e4` int(11) NOT NULL,
  `e5` int(11) NOT NULL,
  `e6` int(11) NOT NULL,
  `e7` int(11) NOT NULL,
  `e8` int(11) NOT NULL,
  `e9` int(11) NOT NULL,
  `e10` int(11) NOT NULL,
  `e_stored` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `carrello`
--

INSERT INTO `carrello` (`ID`, `Mail`, `e1`, `e2`, `e3`, `e4`, `e5`, `e6`, `e7`, `e8`, `e9`, `e10`, `e_stored`) VALUES
(1, 'cliente@cliente.cliente', 1, 4, 0, 0, 0, 0, 0, 0, 0, 0, 2),
(2, 'cliente2@cliente2.cliente2', 7, 6, 9, 0, 0, 0, 0, 0, 0, 0, 3),
(3, 'cliente3@cliente3.cliente3', 1, 2, 3, 0, 0, 0, 0, 0, 0, 0, 3);

-- --------------------------------------------------------

--
-- Struttura della tabella `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `comment_subject` varchar(250) NOT NULL,
  `comment_text` text NOT NULL,
  `comment_status` int(1) NOT NULL,
  `vistada` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_subject`, `comment_text`, `comment_status`, `vistada`) VALUES
(1, 'Notifica Esempio', 'Notifica da Organizzatore a Clienti', 0, 'cliente@cliente.cliente'),
(2, 'MODIFICATO EVENTO:1', ' PREZZO ', 0, 'cliente@cliente.cliente');

-- --------------------------------------------------------

--
-- Struttura della tabella `commentso`
--

CREATE TABLE `commentso` (
  `comment_id` int(11) NOT NULL,
  `comment_subject` varchar(250) NOT NULL,
  `comment_text` text NOT NULL,
  `comment_status` int(1) NOT NULL,
  `vistada` varchar(255) NOT NULL,
  `mail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `commentso`
--

INSERT INTO `commentso` (`comment_id`, `comment_subject`, `comment_text`, `comment_status`, `vistada`, `mail`) VALUES
(1, 'soldout', 'event name= Evento Uno soldout</br> id evento=1', 0, 'org@org.org', 'org@org.org'),
(2, 'soldout', 'event name= Evento Uno soldout</br> id evento=1', 0, 'org@org.org', 'org@org.org');

-- --------------------------------------------------------

--
-- Struttura della tabella `contact`
--

CREATE TABLE `contact` (
  `ID` int(11) NOT NULL,
  `name` varchar(75) NOT NULL,
  `Mail` varchar(75) NOT NULL,
  `Comment` varchar(300) NOT NULL,
  `Seleziona` varchar(15) NOT NULL,
  `Robot` varchar(5) NOT NULL,
  `Data` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `contact`
--

INSERT INTO `contact` (`ID`, `name`, `Mail`, `Comment`, `Seleziona`, `Robot`, `Data`) VALUES
(1, 'Contatto', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Client', 'si', '2020-01-24 09:06:29');

-- --------------------------------------------------------

--
-- Struttura della tabella `event`
--

CREATE TABLE `event` (
  `ID` int(11) NOT NULL,
  `h_evento` varchar(75) NOT NULL,
  `p_evento` varchar(255) NOT NULL,
  `creatore` varchar(50) NOT NULL,
  `d_evento` date NOT NULL,
  `d_creazione` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `n_Max` int(250) NOT NULL,
  `n_partecipanti` int(250) NOT NULL,
  `n_Buy` int(250) NOT NULL,
  `image` varchar(100) NOT NULL,
  `price` int(250) NOT NULL,
  `soldout` int(3) NOT NULL,
  `Creatore_not` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `event`
--

INSERT INTO `event` (`ID`, `h_evento`, `p_evento`, `creatore`, `d_evento`, `d_creazione`, `n_Max`, `n_partecipanti`, `n_Buy`, `image`, `price`, `soldout`, `Creatore_not`) VALUES
(1, 'Evento Uno', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'org@org.org', '2020-01-31', '2020-01-24 09:13:40', 150, 0, 150, 'images/org1.jpg', 100, 1, 1),
(2, 'Evento Due', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'org@org.org', '2020-01-31', '2020-01-24 10:09:27', 100, 0, 6, 'images/org1_due.jpg', 10, 0, 0),
(3, 'Evento Tre', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'org@org.org', '2020-01-31', '2020-01-24 09:02:37', 200, 1, 10, 'images/org1_tre.jpg', 5, 0, 0),
(4, 'Evento Quattro', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'org2@org2.org2', '2020-01-31', '2020-01-24 09:02:27', 35, 1, 1, 'images/org2.jpg', 5, 0, 0),
(5, 'Evento Cinque', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'org2@org2.org2', '2020-01-31', '2020-01-24 09:02:27', 133, 0, 1, 'images/org2_due.jpg', 3, 0, 0),
(6, 'Evento Sei', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'org2@org2.org2', '2020-01-31', '2020-01-24 09:02:27', 125, 1, 1, 'images/org2_tre.jpg', 25, 0, 0),
(7, 'Evento Sette', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'org3@org3.org3', '2020-01-31', '2020-01-24 09:02:19', 25, 1, 0, 'images/org3.jpg', 2, 0, 0),
(8, 'Evento Otto', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'org3@org3.org3', '2020-01-31', '2020-01-24 09:02:21', 245, 0, 0, 'images/org3_due.jpg', 30, 0, 0),
(9, 'Evento Nove', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'org3@org3.org3', '2020-01-31', '2020-01-24 09:02:24', 145, 1, 0, 'images/org3_tre.jpg', 16, 0, 0);

-- --------------------------------------------------------

--
-- Struttura della tabella `loginclient`
--

CREATE TABLE `loginclient` (
  `ID` int(11) NOT NULL,
  `name` varchar(75) NOT NULL,
  `Mail` varchar(75) NOT NULL,
  `Password` varchar(75) NOT NULL,
  `data` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `loginclient`
--

INSERT INTO `loginclient` (`ID`, `name`, `Mail`, `Password`, `data`) VALUES
(1, 'cliente', 'cliente@cliente.cliente', 'd94019fd760a71edf11844bb5c601a4de95aacaf', '2020-01-24 08:44:19'),
(2, 'cliente2', 'cliente2@cliente2.cliente2', 'd94019fd760a71edf11844bb5c601a4de95aacaf', '2020-01-24 08:44:45'),
(3, 'cliente3', 'cliente3@cliente3.cliente3', 'd94019fd760a71edf11844bb5c601a4de95aacaf', '2020-01-24 08:45:05');

-- --------------------------------------------------------

--
-- Struttura della tabella `loginorganizer`
--

CREATE TABLE `loginorganizer` (
  `ID` int(11) NOT NULL,
  `name` varchar(75) NOT NULL,
  `Mail` varchar(75) NOT NULL,
  `Password` varchar(75) NOT NULL,
  `data` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `loginorganizer`
--

INSERT INTO `loginorganizer` (`ID`, `name`, `Mail`, `Password`, `data`) VALUES
(1, 'organizzatore', 'org@org.org', 'd23b5987504c1b3de484bf2e47c76f75abb794d3', '2020-01-24 08:45:26'),
(2, 'organizzatore2', 'org2@org2.org2', 'd23b5987504c1b3de484bf2e47c76f75abb794d3', '2020-01-24 08:45:55'),
(3, 'organizzatore3', 'org3@org3.org3', 'd23b5987504c1b3de484bf2e47c76f75abb794d3', '2020-01-24 08:46:14');

-- --------------------------------------------------------

--
-- Struttura della tabella `more`
--

CREATE TABLE `more` (
  `ID` int(100) NOT NULL,
  `mail` varchar(75) NOT NULL,
  `eventID` int(100) NOT NULL,
  `numero` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `more`
--

INSERT INTO `more` (`ID`, `mail`, `eventID`, `numero`) VALUES
(1, 'cliente2@cliente2.cliente2', 1, 4),
(2, 'cliente2@cliente2.cliente2', 3, 8),
(3, 'cliente3@cliente3.cliente3', 2, 3),
(4, 'cliente3@cliente3.cliente3', 3, 2),
(5, 'cliente@cliente.cliente', 2, 3);

-- --------------------------------------------------------

--
-- Struttura della tabella `ordinati`
--

CREATE TABLE `ordinati` (
  `ID` int(11) NOT NULL,
  `Mail` varchar(75) NOT NULL,
  `e1` int(11) NOT NULL,
  `e2` int(11) NOT NULL,
  `e3` int(11) NOT NULL,
  `e4` int(11) NOT NULL,
  `e5` int(11) NOT NULL,
  `e6` int(11) NOT NULL,
  `e7` int(11) NOT NULL,
  `e8` int(11) NOT NULL,
  `e9` int(11) NOT NULL,
  `e10` int(11) NOT NULL,
  `e_stored` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `ordinati`
--

INSERT INTO `ordinati` (`ID`, `Mail`, `e1`, `e2`, `e3`, `e4`, `e5`, `e6`, `e7`, `e8`, `e9`, `e10`, `e_stored`) VALUES
(1, 'cliente@cliente.cliente', 5, 7, 8, 2, 0, 0, 0, 0, 0, 0, 4),
(2, 'cliente2@cliente2.cliente2', 1, 3, 4, 0, 0, 0, 0, 0, 0, 0, 3),
(3, 'cliente3@cliente3.cliente3', 1, 2, 3, 5, 6, 4, 0, 0, 0, 0, 6);

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `carrello`
--
ALTER TABLE `carrello`
  ADD PRIMARY KEY (`ID`);

--
-- Indici per le tabelle `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indici per le tabelle `commentso`
--
ALTER TABLE `commentso`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indici per le tabelle `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ID`);

--
-- Indici per le tabelle `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`ID`);

--
-- Indici per le tabelle `loginclient`
--
ALTER TABLE `loginclient`
  ADD PRIMARY KEY (`ID`);

--
-- Indici per le tabelle `loginorganizer`
--
ALTER TABLE `loginorganizer`
  ADD PRIMARY KEY (`ID`);

--
-- Indici per le tabelle `more`
--
ALTER TABLE `more`
  ADD PRIMARY KEY (`ID`);

--
-- Indici per le tabelle `ordinati`
--
ALTER TABLE `ordinati`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `carrello`
--
ALTER TABLE `carrello`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT per la tabella `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT per la tabella `commentso`
--
ALTER TABLE `commentso`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT per la tabella `contact`
--
ALTER TABLE `contact`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT per la tabella `event`
--
ALTER TABLE `event`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT per la tabella `loginclient`
--
ALTER TABLE `loginclient`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT per la tabella `loginorganizer`
--
ALTER TABLE `loginorganizer`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT per la tabella `more`
--
ALTER TABLE `more`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT per la tabella `ordinati`
--
ALTER TABLE `ordinati`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
