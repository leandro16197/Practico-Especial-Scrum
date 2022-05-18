-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-05-2022 a las 21:54:57
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `turnofacil`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paciente`
--

CREATE TABLE `paciente` (
  `DNI` int(8) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Apellido` varchar(30) NOT NULL,
  `Direccion` varchar(50) NOT NULL,
  `Telefono` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Obra social` varchar(10) NOT NULL,
  `Numero de afiliado` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `paciente`
--

INSERT INTO `paciente` (`DNI`, `Nombre`, `Apellido`, `Direccion`, `Telefono`, `Email`, `Obra social`, `Numero de afiliado`) VALUES
(11223344, 'Juan', 'Perez', 'Durruti 1200', '0800 112233', 'JuanPerez@hotmail.com', 'PAMI', 15388954);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `turno`
--

CREATE TABLE `turno` (
  `id_turno` int(10) NOT NULL,
  `dni_paciente` int(11) NOT NULL,
  `id_doctor` int(11) NOT NULL,
  `especialidad` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `confirmado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `paciente`
--
ALTER TABLE `paciente`
  ADD KEY `DNI` (`DNI`);

--
-- Indices de la tabla `turno`
--
ALTER TABLE `turno`
  ADD PRIMARY KEY (`id_turno`),
  ADD KEY `id_turno` (`id_turno`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `turno`
--
ALTER TABLE `turno`
  MODIFY `id_turno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
