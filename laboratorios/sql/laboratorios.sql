-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 19, 2020 at 09:11 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laboratorios`
--

-- --------------------------------------------------------

--
-- Table structure for table `estudios`
--

CREATE TABLE `estudios` (
  `estudio_nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `estudios`
--

INSERT INTO `estudios` (`estudio_nombre`) VALUES
('Activision Blizzard'),
('Bandai Namco'),
('Bethesda'),
('Capcom'),
('EA'),
('Konami'),
('Nintendo'),
('Ubisoft');

-- --------------------------------------------------------

--
-- Table structure for table `generos`
--

CREATE TABLE `generos` (
  `genero_nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `generos`
--

INSERT INTO `generos` (`genero_nombre`) VALUES
('Action Adventure'),
('Fighting'),
('First Person Shooter'),
('Hack and Slash'),
('JRPG'),
('Open World'),
('Platformer'),
('Racing'),
('RPG'),
('Strategy'),
('Third Person Shooter');

-- --------------------------------------------------------

--
-- Table structure for table `juegos`
--

CREATE TABLE `juegos` (
  `juego_nombre` varchar(100) NOT NULL,
  `juego_genero` varchar(100) DEFAULT NULL,
  `juego_precio` float DEFAULT 59.99,
  `juego_estudio` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `juegos`
--

INSERT INTO `juegos` (`juego_nombre`, `juego_genero`, `juego_precio`, `juego_estudio`) VALUES
('Assassin\'s Creed Odyssey', 'Open World', 49, 'Ubisoft'),
('Call of Duty: Black Ops', 'First Person Shooter', 9, 'Activision Blizzard'),
('Code Vein', 'Action Adventure', 59, 'Bandai Namco'),
('Doom Eternal', 'First Person Shooter', 59, 'Bethesda'),
('Dragon Ball Z Kakarot', 'Open World', 59, 'Bandai Namco'),
('Metroid Prime 4', 'Action Adventure', 59, 'Nintendo'),
('Splatoon 2', 'Third Person Shooter', 59, 'Nintendo'),
('Super Mario Odyssey', 'Platformer', 59, 'Nintendo'),
('The Elder Scrolls V: Skyrim', 'Open World', 29, 'Bethesda'),
('The Legend of Zelda Breathe of the Wild', 'Open World', 59, 'Nintendo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `estudios`
--
ALTER TABLE `estudios`
  ADD PRIMARY KEY (`estudio_nombre`);

--
-- Indexes for table `generos`
--
ALTER TABLE `generos`
  ADD PRIMARY KEY (`genero_nombre`);

--
-- Indexes for table `juegos`
--
ALTER TABLE `juegos`
  ADD PRIMARY KEY (`juego_nombre`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
