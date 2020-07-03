-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jul 03, 2020 at 05:08 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `parcinformatique`
--

-- --------------------------------------------------------

--
-- Table structure for table `serveur`
--

CREATE TABLE `serveur` (
  `idserv` int(11) NOT NULL,
  `nomserv` varchar(100) NOT NULL,
  `adripserv` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `serveur`
--

INSERT INTO `serveur` (`idserv`, `nomserv`, `adripserv`) VALUES
(4, 'Livebox', '192.168.1.1'),
(6, 'MySQL', '192.168.24.5'),
(7, 'IESIG', '192.168.24.7'),
(8, 'YNOV', '192.168.24.9');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `ids` int(11) NOT NULL,
  `noms` varchar(100) NOT NULL,
  `port` int(11) NOT NULL,
  `etats` int(11) NOT NULL,
  `idserv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`ids`, `noms`, `port`, `etats`, `idserv`) VALUES
(2, 'ISmaila', 12, 1, 6),
(3, 'Info', 80, 0, 6),
(4, 'Info', 99, 0, 8),
(6, 'bbjbh', 8, 1, 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `serveur`
--
ALTER TABLE `serveur`
  ADD PRIMARY KEY (`idserv`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`ids`),
  ADD KEY `idserv` (`idserv`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `serveur`
--
ALTER TABLE `serveur`
  MODIFY `idserv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `ids` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `service`
--
ALTER TABLE `service`
  ADD CONSTRAINT `service_ibfk_1` FOREIGN KEY (`idserv`) REFERENCES `serveur` (`idserv`);
