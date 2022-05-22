-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Apr 15, 2022 alle 18:33
-- Versione del server: 10.4.22-MariaDB
-- Versione PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `orariofacile`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `aule`
--

CREATE TABLE `aule` (
  `idaula` varchar(5) NOT NULL,
  `nomeaula` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `aule`
--

INSERT INTO `aule` (`idaula`, `nomeaula`) VALUES
('A0000', '2'),
('A0001', '30'),
('A0002', '30bis'),
('A0003', '34'),
('A0004', '35'),
('A0005', '36'),
('A0006', '37'),
('A0007', '38'),
('A0008', '40'),
('A0009', '41'),
('A0010', '45'),
('A0011', '46'),
('A0012', '47'),
('A0013', '49'),
('A0014', '50'),
('A0015', '51'),
('A0016', '53'),
('A0017', '54'),
('A0018', '55'),
('A0019', '56'),
('A0020', '64'),
('A0021', '65'),
('A0022', '66'),
('A0023', '68'),
('A0024', '69'),
('A0025', '70'),
('A0026', '72'),
('A0027', '73'),
('A0028', '74'),
('A0029', '76'),
('A0030', '77'),
('A0031', '78'),
('A0032', '79'),
('A0033', '8'),
('A0034', 'Disposizioni Sede Centrale'),
('A0035', 'Disposizioni Sede Staccata'),
('A0036', 'Lab Automazione'),
('A0037', 'Lab Chimica'),
('A0038', 'Lab Disegno'),
('A0039', 'Lab Elettronica'),
('A0040', 'Lab Fisica'),
('A0041', 'Lab Informatica'),
('A0042', 'Lab Logistica'),
('A0043', 'Lab Sis Ele'),
('A0044', 'Lab Sis Inf'),
('A0045', 'Lab TPSEE'),
('A0046', 'Lab.InAula'),
('A0047', 'Palestra Ceccato 1'),
('A0048', 'Palestra Ceccato 2'),
('A0049', 'Palestra Ceccato 3'),
('A0050', 'Palestra Ferrarin'),
('A0051', 'Palestrina'),
('A0052', 'Staccata1'),
('A0053', 'Staccata2'),
('A0054', 'Staccata3'),
('A0055', 'Staccata4');

-- --------------------------------------------------------

--
-- Struttura della tabella `aulelezioni`
--

CREATE TABLE `aulelezioni` (
  `idlezione` varchar(8) DEFAULT NULL,
  `idaula` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `classi`
--

CREATE TABLE `classi` (
  `idclasse` varchar(5) NOT NULL,
  `nomeclasse` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `classi`
--

INSERT INTO `classi` (`idclasse`, `nomeclasse`) VALUES
('C0000', '1A'),
('C0001', '1B'),
('C0002', '1C'),
('C0003', '1D'),
('C0004', '1E'),
('C0005', '1F'),
('C0006', '1G'),
('C0007', '1H'),
('C0008', '2A'),
('C0009', '2B'),
('C0010', '2C'),
('C0011', '2D'),
('C0012', '2E'),
('C0013', '2F'),
('C0014', '2G'),
('C0015', '2H'),
('C0016', '3A-A'),
('C0017', '3A-B'),
('C0018', '3E-A'),
('C0019', '3I-A'),
('C0020', '3I-B'),
('C0021', '3I-C'),
('C0022', '3I-D'),
('C0023', '3L-A'),
('C0024', '4A-A'),
('C0025', '4A-B'),
('C0026', '4EL-M'),
('C0027', '4I-A'),
('C0028', '4I-B'),
('C0029', '4I-C'),
('C0030', '4L-A'),
('C0031', '5A-A'),
('C0032', '5A-B'),
('C0033', '5AI-M'),
('C0034', '5I-A'),
('C0035', '5I-B'),
('C0036', '5I-C'),
('C0037', '5L-A'),
('C0038', '5L-B'),
('C0039', '4E-M'),
('C0040', '4L-M'),
('C0041', '5A-M'),
('C0042', '5I-M');

-- --------------------------------------------------------

--
-- Struttura della tabella `classilezioni`
--

CREATE TABLE `classilezioni` (
  `idlezione` varchar(8) DEFAULT NULL,
  `idclasse` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `docenti`
--

CREATE TABLE `docenti` (
  `iddocente` varchar(5) NOT NULL,
  `nomedocente` varchar(255) DEFAULT NULL,
  `emaildocente` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `docenti`
--

INSERT INTO `docenti` (`iddocente`, `nomedocente`, `emaildocente`) VALUES
('P0000', '.Allocca', '(null)'),
('P0001', '.Bortoli', '(null)'),
('P0002', '.Busin', '(null)'),
('P0003', '.Calcara (LABELE_15)', '(null)'),
('P0004', '.Carotta', '(null)'),
('P0005', '.Coppola (LABINF18)', '(null)'),
('P0006', '.Coppone (LabInf3_11)', '(null)'),
('P0007', '.Crivellaro', '(null)'),
('P0008', '.Cuoghi', '(null)'),
('P0009', '.Ghirardello', '(null)'),
('P0010', '.Maculan', '(null)'),
('P0011', '.Nardon', '(null)'),
('P0012', '.Tavella', '(null)'),
('P0013', '.Tisato', '(null)'),
('P0014', '.Vaccari (LABINF18)', '(null)'),
('P0015', '.Zanone', '(null)'),
('P0016', '.Zovi', '(null)'),
('P0017', 'Antonello (RC 3)', '(null)'),
('P0018', 'Baldan', '(null)'),
('P0019', 'Barbieri', '(null)'),
('P0020', 'Bassanese (ELE18)', '(null)'),
('P0021', 'Bertacco', '(null)'),
('P0022', 'Bertoldo', '(null)'),
('P0023', 'Bettanin', '(null)'),
('P0024', 'Borgo', '(null)'),
('P0025', 'Borin', '(null)'),
('P0026', 'Bruni', '(null)'),
('P0027', 'Caceffo', '(null)'),
('P0028', 'Calc�', '(null)'),
('P0029', 'Calgaro', '(null)'),
('P0030', 'Calvi', '(null)'),
('P0031', 'Cantarini', '(null)'),
('P0032', 'Carara', '(null)'),
('P0033', 'Carli', '(null)'),
('P0034', 'Carollo C', '(null)'),
('P0035', 'Carollo G', '(null)'),
('P0036', 'Carretta', '(null)'),
('P0037', 'Chieffo', '(null)'),
('P0038', 'Chilese', '(null)'),
('P0039', 'Ciato', '(null)'),
('P0040', 'Dabionelli', '(null)'),
('P0041', 'Dal Santo', '(null)'),
('P0042', 'Dalla Pozza', '(null)'),
('P0043', 'Dalle Rive', '(null)'),
('P0044', 'De Antoni', '(null)'),
('P0045', 'De Iorio', '(null)'),
('P0046', 'Dionisi', '(null)'),
('P0047', 'Eberle', '(null)'),
('P0048', 'ELETTRONICA18', '(null)'),
('P0049', 'Farinaro (Sc.Mot.6)', '(null)'),
('P0050', 'Fiorio', '(null)'),
('P0051', 'Foscarini', '(null)'),
('P0052', 'Frigenti', '(null)'),
('P0053', 'Garbin (Testolin B.)', '(null)'),
('P0054', 'Giaretta', '(null)'),
('P0055', 'Golin', '(null)'),
('P0056', 'Greco', '(null)'),
('P0057', 'Lovato', '(null)'),
('P0058', 'Lovison', '(null)'),
('P0059', 'Manzardo', '(null)'),
('P0060', 'Marcante', '(null)'),
('P0061', 'Mazzucco', '(null)'),
('P0062', 'Mendo', '(null)'),
('P0063', 'Meneghini', '(null)'),
('P0064', 'Mignanelli', '(null)'),
('P0065', 'Milan', '(null)'),
('P0066', 'Nogara', '(null)'),
('P0067', 'Oliviero', '(null)'),
('P0068', 'Pasin', '(null)'),
('P0069', 'Paulon', '(null)'),
('P0070', 'Pellizzari', '(null)'),
('P0071', 'Perfetti', '(null)'),
('P0072', 'Pesavento', '(null)'),
('P0073', 'Petrosino', '(null)'),
('P0074', 'Pettenon', '(null)'),
('P0075', 'Piazza', '(null)'),
('P0076', 'Pignat', '(null)'),
('P0077', 'Povolo', '(null)'),
('P0078', 'Rasile', '(null)'),
('P0079', 'Reghellin', '(null)'),
('P0080', 'Rizzato', '(null)'),
('P0081', 'Rossi', '(null)'),
('P0082', 'Rossi M.', '(null)'),
('P0083', 'Sandon�', '(null)'),
('P0084', 'Sano', '(null)'),
('P0085', 'Sartori', '(null)'),
('P0086', 'Savio', '(null)'),
('P0087', 'Scabio', '(null)'),
('P0088', 'Scapin', '(null)'),
('P0089', 'Schirato', '(null)'),
('P0090', 'Seganfreddo', '(null)'),
('P0091', 'Sorrentino', '(null)'),
('P0092', 'Tescari', '(null)'),
('P0093', 'Testa', '(null)'),
('P0094', 'Toniollo', '(null)'),
('P0095', 'Tresso', '(null)'),
('P0096', 'Trupiani', '(null)'),
('P0097', 'Valente', '(null)'),
('P0098', 'Vezzaro (Sc.Mot.2_18)', '(null)'),
('P0099', 'Zanandrea', '(null)'),
('P0100', 'Zenere', '(null)'),
('P0101', 'Zin', '(null)'),
('P0102', 'Zuccolo', '(null)'),
('P0103', '_Alosi', '(null)'),
('P0104', '_Buonocore', '(null)'),
('P0105', '_Carollo', '(null)'),
('P0106', '_Ferracin', '(null)'),
('P0107', '_Marsilio', '(null)'),
('P0108', '_Pedrini', '(null)'),
('P0109', '_SOST7', '(null)'),
('P0110', '_SOST8(14)', '(null)'),
('P0111', '_Zulpo', '(null)');

-- --------------------------------------------------------

--
-- Struttura della tabella `docentilezioni`
--

CREATE TABLE `docentilezioni` (
  `idlezione` varchar(8) DEFAULT NULL,
  `iddocente` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `giorni`
--

CREATE TABLE `giorni` (
  `idgiorno` int(4) NOT NULL,
  `nomegiorno` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `giorni`
--

INSERT INTO `giorni` (`idgiorno`, `nomegiorno`) VALUES
(0, 'LUN'),
(1, 'MAR'),
(2, 'MER'),
(3, 'GIO'),
(4, 'VEN');

-- --------------------------------------------------------

--
-- Struttura della tabella `lezioni`
--

CREATE TABLE `lezioni` (
  `idlezione` varchar(8) NOT NULL,
  `durata` int(4) DEFAULT NULL,
  `idgiorno` int(4) DEFAULT NULL,
  `idora` int(4) DEFAULT NULL,
  `idoragiorno` int(8) NOT NULL,
  `idmateria` varchar(5) DEFAULT NULL,
  `idsede` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `materie`
--

CREATE TABLE `materie` (
  `idmateria` varchar(5) NOT NULL,
  `nomemateria` varchar(255) DEFAULT NULL,
  `codicemiur` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `ore`
--

CREATE TABLE `ore` (
  `idoragiorno` int(8) NOT NULL,
  `idora` int(4) NOT NULL,
  `idgiorno` int(4) NOT NULL,
  `orainizio` varchar(5) DEFAULT NULL,
  `orafine` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `sedi`
--

CREATE TABLE `sedi` (
  `idsede` varchar(5) NOT NULL,
  `nomesede` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `aule`
--
ALTER TABLE `aule`
  ADD PRIMARY KEY (`idaula`);

--
-- Indici per le tabelle `aulelezioni`
--
ALTER TABLE `aulelezioni`
  ADD KEY `idaula` (`idaula`),
  ADD KEY `aulelezioni_ibfk_2` (`idlezione`);

--
-- Indici per le tabelle `classi`
--
ALTER TABLE `classi`
  ADD PRIMARY KEY (`idclasse`);

--
-- Indici per le tabelle `classilezioni`
--
ALTER TABLE `classilezioni`
  ADD KEY `idlezione` (`idlezione`),
  ADD KEY `idclasse` (`idclasse`);

--
-- Indici per le tabelle `docenti`
--
ALTER TABLE `docenti`
  ADD PRIMARY KEY (`iddocente`);

--
-- Indici per le tabelle `docentilezioni`
--
ALTER TABLE `docentilezioni`
  ADD KEY `iddocente` (`iddocente`),
  ADD KEY `docentilezioni_ibfk_2` (`idlezione`);

--
-- Indici per le tabelle `giorni`
--
ALTER TABLE `giorni`
  ADD PRIMARY KEY (`idgiorno`);

--
-- Indici per le tabelle `lezioni`
--
ALTER TABLE `lezioni`
  ADD PRIMARY KEY (`idlezione`),
  ADD KEY `idgiorno` (`idgiorno`,`idora`),
  ADD KEY `idsede` (`idsede`),
  ADD KEY `idmateria` (`idmateria`),
  ADD KEY `idoragiorno` (`idoragiorno`);

--
-- Indici per le tabelle `materie`
--
ALTER TABLE `materie`
  ADD PRIMARY KEY (`idmateria`);

--
-- Indici per le tabelle `ore`
--
ALTER TABLE `ore`
  ADD PRIMARY KEY (`idoragiorno`),
  ADD KEY `idgiorno` (`idgiorno`);

--
-- Indici per le tabelle `sedi`
--
ALTER TABLE `sedi`
  ADD PRIMARY KEY (`idsede`);

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `aulelezioni`
--
ALTER TABLE `aulelezioni`
  ADD CONSTRAINT `aulelezioni_ibfk_1` FOREIGN KEY (`idaula`) REFERENCES `aule` (`idaula`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `aulelezioni_ibfk_2` FOREIGN KEY (`idlezione`) REFERENCES `lezioni` (`idlezione`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limiti per la tabella `classilezioni`
--
ALTER TABLE `classilezioni`
  ADD CONSTRAINT `classilezioni_ibfk_1` FOREIGN KEY (`idlezione`) REFERENCES `lezioni` (`idlezione`),
  ADD CONSTRAINT `classilezioni_ibfk_2` FOREIGN KEY (`idclasse`) REFERENCES `classi` (`idclasse`);

--
-- Limiti per la tabella `docentilezioni`
--
ALTER TABLE `docentilezioni`
  ADD CONSTRAINT `docentilezioni_ibfk_1` FOREIGN KEY (`iddocente`) REFERENCES `docenti` (`iddocente`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `docentilezioni_ibfk_2` FOREIGN KEY (`idlezione`) REFERENCES `lezioni` (`idlezione`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limiti per la tabella `lezioni`
--
ALTER TABLE `lezioni`
  ADD CONSTRAINT `lezioni_ibfk_2` FOREIGN KEY (`idsede`) REFERENCES `sedi` (`idsede`),
  ADD CONSTRAINT `lezioni_ibfk_3` FOREIGN KEY (`idmateria`) REFERENCES `materie` (`idmateria`),
  ADD CONSTRAINT `lezioni_ibfk_4` FOREIGN KEY (`idoragiorno`) REFERENCES `ore` (`idoragiorno`);

--
-- Limiti per la tabella `ore`
--
ALTER TABLE `ore`
  ADD CONSTRAINT `ore_ibfk_1` FOREIGN KEY (`idgiorno`) REFERENCES `giorni` (`idgiorno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
