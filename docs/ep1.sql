-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2024 at 11:48 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ep1`
--

-- --------------------------------------------------------

--
-- Table structure for table `departamento`
--

CREATE TABLE `departamento` (
  `ID_departamento` int(11) NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  `Ubicacion` text NOT NULL,
  `Presupuesto` varchar(45) NOT NULL,
  `Jefe` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `departamento`
--

INSERT INTO `departamento` (`ID_departamento`, `Nombre`, `Ubicacion`, `Presupuesto`, `Jefe`) VALUES
(0, 'h', 'j', 'k', 'k'),
(0, 'Finanzas', 'Loja', '23', 'Isabella'),
(0, 'se', 'rt', 'aw', 'qw');

-- --------------------------------------------------------

--
-- Table structure for table `empleado`
--

CREATE TABLE `empleado` (
  `ID_empleado` int(11) NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  `Cargo` text NOT NULL,
  `Salario` varchar(45) NOT NULL,
  `Fecha_contratacion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `empleado`
--

INSERT INTO `empleado` (`ID_empleado`, `Nombre`, `Cargo`, `Salario`, `Fecha_contratacion`) VALUES
(1, 'ty', 'ui', '677', '2024-03-01 18:26:17'),
(2, 'a', 'a', 'a', '0000-00-00 00:00:00'),
(3, 'a', 'a', 'a', '0000-00-00 00:00:00'),
(4, 'q', 'q', 'q', ''),
(5, 'a', 'a', 'a', ''),
(6, 'g', 'h', 'j', ''),
(7, 'sofia', 'back-end', '34', '');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `idRoles` int(11) NOT NULL,
  `Rol` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`idRoles`, `Rol`) VALUES
(5, 'ADMINISTRADOR'),
(6, 'Control'),
(7, 'Front-end');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuarios` int(11) NOT NULL,
  `Nombres` varchar(45) NOT NULL,
  `Apellidos` text NOT NULL,
  `contrasenia` varchar(45) NOT NULL,
  `Correo` varchar(45) NOT NULL,
  `Cedula` varchar(17) NOT NULL,
  `SucursalId` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`idUsuarios`, `Nombres`, `Apellidos`, `contrasenia`, `Correo`, `Cedula`, `SucursalId`) VALUES
(3, 'Luis', 'Llerena', '123', 'correo@gmail.com', '1803971371', ''),
(4, 'xxxx', 'xxxx', '123', 'otro@otro.com', '1804233151', ''),
(5, 'Luis Antonio', 'Llerena Ocaña', '123', 'lleroc@gmail.com', '1801770569', ''),
(6, 'kjhvkjhbk', 'bkjhbkjhbkjhb', '', '', '1802491181', ''),
(7, 'kjhvkjhbk', 'bkjhbkjhbkjhb', '', '', '1803971730', ''),
(8, '', '', '123', 'correo@gmail.com', 's', ''),
(9, 's', 'e', '123', 'correo@gmail.com', 'sa', ''),
(10, 'sergio', 'guzman', '123', 'correo@gmail.com', '777', '');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios_roles`
--

CREATE TABLE `usuarios_roles` (
  `Usuarios_idUsuarios` int(11) NOT NULL,
  `Roles_idRoles` int(11) NOT NULL,
  `idUsuariosRoles` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `usuarios_roles`
--

INSERT INTO `usuarios_roles` (`Usuarios_idUsuarios`, `Roles_idRoles`, `idUsuariosRoles`) VALUES
(3, 5, 3),
(4, 5, 4),
(5, 6, 5),
(7, 6, 7),
(9, 6, 9),
(10, 7, 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`ID_empleado`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`idRoles`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuarios`);

--
-- Indexes for table `usuarios_roles`
--
ALTER TABLE `usuarios_roles`
  ADD PRIMARY KEY (`idUsuariosRoles`),
  ADD KEY `fk_Usuarios_has_Roles_Roles1_idx` (`Roles_idRoles`),
  ADD KEY `fk_Usuarios_has_Roles_Usuarios1_idx` (`Usuarios_idUsuarios`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `empleado`
--
ALTER TABLE `empleado`
  MODIFY `ID_empleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `idRoles` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `usuarios_roles`
--
ALTER TABLE `usuarios_roles`
  MODIFY `idUsuariosRoles` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `usuarios_roles`
--
ALTER TABLE `usuarios_roles`
  ADD CONSTRAINT `fk_Usuarios_has_Roles_Roles1` FOREIGN KEY (`Roles_idRoles`) REFERENCES `roles` (`idRoles`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Usuarios_has_Roles_Usuarios1` FOREIGN KEY (`Usuarios_idUsuarios`) REFERENCES `usuarios` (`idUsuarios`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
