-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-04-2021 a las 20:17:40
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `nomis`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

CREATE TABLE `departamentos` (
  `id_departamento` int(10) NOT NULL,
  `nombre` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `departamentos`
--

INSERT INTO `departamentos` (`id_departamento`, `nombre`) VALUES
(1, 'Sistemas'),
(2, 'Ventas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `id_empleado` int(10) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `apellido_paterno` varchar(150) NOT NULL,
  `apellido_materno` varchar(150) NOT NULL,
  `fecha_ingreso` date NOT NULL,
  `sueldo_mensual` double NOT NULL,
  `sueldo_diario` double NOT NULL,
  `departamento` varchar(150) NOT NULL,
  `frecuencia_pago` int(10) NOT NULL,
  `status` int(10) NOT NULL,
  `foto` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id_empleado`, `nombre`, `apellido_paterno`, `apellido_materno`, `fecha_ingreso`, `sueldo_mensual`, `sueldo_diario`, `departamento`, `frecuencia_pago`, `status`, `foto`) VALUES
(10050100, 'Cam', 'Matador', 'Rodriguez', '2021-01-27', 1000, 50, 'Sistemas', 14, 1, ''),
(10060100, 'Estebi', 'Cabrino', 'Rodriguez', '2021-02-19', 1000, 50, 'Ventas', 7, 1, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago_semana`
--

CREATE TABLE `pago_semana` (
  `id_semana` int(10) NOT NULL,
  `id_empleado` int(10) NOT NULL,
  `faltas` int(10) NOT NULL,
  `cantidad` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pago_semana`
--

INSERT INTO `pago_semana` (`id_semana`, `id_empleado`, `faltas`, `cantidad`) VALUES
(1, 10050100, 2, 800);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago_total`
--

CREATE TABLE `pago_total` (
  `id_total` int(10) NOT NULL,
  `id_empleado` int(10) NOT NULL,
  `monto_total` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pago_total`
--

INSERT INTO `pago_total` (`id_total`, `id_empleado`, `monto_total`) VALUES
(1, 10060100, 100);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `temporal_catorcena`
--

CREATE TABLE `temporal_catorcena` (
  `id_catorcena` int(10) NOT NULL,
  `id_empleado` int(10) NOT NULL,
  `faltas` int(10) NOT NULL,
  `cantidad` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `temporal_catorcena`
--

INSERT INTO `temporal_catorcena` (`id_catorcena`, `id_empleado`, `faltas`, `cantidad`) VALUES
(1, 10050100, 2, 500);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  ADD PRIMARY KEY (`id_departamento`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id_empleado`);

--
-- Indices de la tabla `pago_semana`
--
ALTER TABLE `pago_semana`
  ADD PRIMARY KEY (`id_semana`);

--
-- Indices de la tabla `pago_total`
--
ALTER TABLE `pago_total`
  ADD PRIMARY KEY (`id_total`);

--
-- Indices de la tabla `temporal_catorcena`
--
ALTER TABLE `temporal_catorcena`
  ADD PRIMARY KEY (`id_catorcena`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  MODIFY `id_departamento` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `pago_semana`
--
ALTER TABLE `pago_semana`
  MODIFY `id_semana` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `pago_total`
--
ALTER TABLE `pago_total`
  MODIFY `id_total` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `temporal_catorcena`
--
ALTER TABLE `temporal_catorcena`
  MODIFY `id_catorcena` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
