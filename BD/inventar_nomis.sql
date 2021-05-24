-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 24-05-2021 a las 18:43:58
-- Versión del servidor: 5.6.51
-- Versión de PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `inventar_nomis`
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
(1, 'SISTEMAS'),
(4, 'ATENCION A CLIENTES'),
(5, 'COBRANZA'),
(6, 'ADMINISTRACION'),
(7, 'RECUPERACION'),
(8, 'REPARACIONES'),
(9, 'ACOMETIDAS'),
(10, 'CONSTRUCCION DE FIBRA OPTICA'),
(11, 'TORRES'),
(12, 'ADMINISTRACION'),
(13, 'TALLER'),
(14, 'VIGILANCIA'),
(15, 'MANTENIMIENTO Y ASEO'),
(16, 'EXTERNOS'),
(17, 'OTROS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `dni` int(11) NOT NULL,
  `id_empleado` varchar(13) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `apellido_paterno` varchar(150) NOT NULL,
  `apellido_materno` varchar(150) NOT NULL,
  `fecha_ingreso` date NOT NULL,
  `sueldo_mensual` double NOT NULL,
  `sueldo_diario` double NOT NULL,
  `departamento` varchar(150) NOT NULL,
  `frecuencia_pago` varchar(255) NOT NULL,
  `status` int(10) NOT NULL,
  `foto` varchar(150) NOT NULL,
  `fecha_baja` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`dni`, `id_empleado`, `nombre`, `apellido_paterno`, `apellido_materno`, `fecha_ingreso`, `sueldo_mensual`, `sueldo_diario`, `departamento`, `frecuencia_pago`, `status`, `foto`, `fecha_baja`) VALUES
(2, '0000000004', 'KAROLINA YAMILETE', 'ARGAEZ', 'SANCHEZ', '2020-01-27', 6000, 197.36842105263, 'ATENCION A CLIENTES', '14', 1, 'imagenes_nomina/0000000004A.jpg', '0000-00-00'),
(3, '0000000006', 'JOSE DE JESUS', 'DURAN', 'PUGA', '2014-02-01', 10857.14, 357.14276315789, 'RECUPERACION', '7', 1, '', '0000-00-00'),
(4, '0000000007', 'RUBEN', 'PEREZ', 'RAMIREZ', '2014-04-01', 10857.14, 357.14276315789, 'REPARACIONES', '7', 1, '', '0000-00-00'),
(5, '0000000008', 'ANDREA ZULEIMA', 'OROZCO', 'LEDEZMA', '2019-04-03', 6000, 197.36842105263, 'COBRANZA', '14', 1, '', '0000-00-00'),
(6, '0000000009', 'LUIS FERNADO', 'VEGA', 'GUZMAN', '2020-09-13', 10857.14, 357.14276315789, 'ACOMETIDAS', '7', 1, '', '0000-00-00'),
(7, '0000000010', 'ANDREA ZULEIMA', 'OROZCO', 'LEDEZMA', '2019-04-01', 6000, 197.36842105263, 'COBRANZA', '14', 1, '', '0000-00-00'),
(8, '0000000011', 'MARLENNE PAOLA', 'BECERRA', 'RAMOS', '2020-05-13', 6000, 197.36842105263, 'ATENCION A CLIENTES', '14', 1, '', '0000-00-00'),
(9, '0000000003', 'CLAUDIA IVETTE', 'MARTINEZ', 'FEMAT', '2021-01-01', 6514.29, 214.28585526316, 'OTROS', '7', 1, '', '0000-00-00'),
(11, '0000000013', 'LITZY MAYTE', 'BAILON', 'MARTINEZ', '2020-04-30', 6000, 197.36842105263, 'ATENCION A CLIENTES', '14', 1, '', '0000-00-00'),
(12, '0000000014', 'ISAURA RAQUEL', 'LOPEZ', 'LOPEZ', '2019-02-02', 6000, 197.36842105263, 'ATENCION A CLIENTES', '14', 1, '', '0000-00-00'),
(13, '0000000015', 'THANIA ALEJANDRA', 'REYNA', 'ESPARZA', '2019-04-01', 6000, 197.36842105263, 'ATENCION A CLIENTES', '14', 1, '', '0000-00-00'),
(14, '0000000016', 'LUIS WILFRIDO', 'VASQUEZ', 'VARGAS', '2020-09-13', 10857.14, 357.14276315789, 'ACOMETIDAS', '7', 1, '', '0000-00-00'),
(15, '0000000018', 'MISSAEL SALVADOR', 'CAMPOS', 'PALACIO', '2020-03-01', 10857.14, 357.14276315789, 'TORRES', '7', 1, '', '0000-00-00'),
(16, '0000000019', 'FRANCISCO ARTURO', 'ALARCON', 'CASTILLO', '2019-09-21', 8685.71, 285.71414473684, 'REPARACIONES', '7', 1, '', '0000-00-00'),
(17, '0000000020', 'SAUL', 'PEREZ', 'JIMENEZ', '2016-11-30', 17371.43, 571.42861842105, 'TORRES', '7', 1, '', '0000-00-00'),
(18, '0000000023', 'APOLINAR', 'VAZQUEZ', 'CRUZ', '2020-06-03', 13028.57, 428.57138157895, 'TALLER', '7', 1, '', '0000-00-00'),
(19, '0000000025', 'MA DE LOURDES', 'ESPARZA', 'MARTINEZ', '2014-01-01', 8251.43, 271.42861842105, 'MANTENIMIENTO Y ASEO', '7', 1, '', '0000-00-00'),
(20, '0000000012', 'JOSEMAR JONATHAN', 'HERNANDEZ', 'MORENO', '2020-03-01', 15200, 500, 'CONSTRUCCION DE FIBRA OPTICA', '7', 1, '', '0000-00-00'),
(21, '0000000026', 'MARIANA', 'CASTILLO', 'MUÑOZ', '2020-01-15', 6000, 197.36842105263, 'ADMINISTRACION', '14', 1, '', '0000-00-00'),
(22, '0000000027', 'ISAIAS EZEQUIEL', 'MARQUEZ', 'MOLINA', '2020-01-01', 8685.71, 285.71414473684, 'REPARACIONES', '7', 1, '', '0000-00-00'),
(23, '0000000028', 'CELINA', 'LOZA', 'GAMBOA', '2020-06-13', 6000, 197.36842105263, 'SISTEMAS', '14', 1, '', '0000-00-00'),
(24, '0000000029', 'DAVID', 'GUEVARA', 'AVILA', '2020-01-06', 10857.14, 357.14276315789, 'TALLER', '7', 1, '', '0000-00-00'),
(25, '0000000030', 'ALVARO', 'FLORES', 'MACIAS', '2020-01-02', 16502.86, 542.85723684211, 'REPARACIONES', '7', 1, '', '0000-00-00'),
(26, '0000000032', 'LUIS ANGEL', 'RODRIGUEZ', 'RODRIGUEZ', '2020-11-28', 6514.29, 214.28585526316, 'ACOMETIDAS', '7', 1, '', '0000-00-00'),
(27, '0000000033', 'GERARDO RAMON', 'RODRIGUEZ', 'MARTINEZ', '2020-06-04', 8685.71, 285.71414473684, 'CONSTRUCCION DE FIBRA OPTICA', '7', 1, '', '0000-00-00'),
(28, '0000000034', 'DIEGO ARMANDO', 'ANAYA', 'X', '2020-12-27', 8685.71, 285.71414473684, 'ACOMETIDAS', '7', 1, '', '0000-00-00'),
(29, '0000000035', 'MARIA TERESA', 'SUAREZ', 'RETANA', '2020-10-30', 5000, 164.47368421053, 'COBRANZA', '14', 1, '', '0000-00-00'),
(30, '0000000036', 'MARIA FERNANDA', 'VIELMA', 'SUAREZ', '2020-06-09', 5000, 164.47368421053, 'ATENCION A CLIENTES', '14', 1, '', '0000-00-00'),
(31, '0000000037', 'JAKE', 'BALDERRAMA', 'LOPEZ', '2019-09-04', 23885.71, 785.71414473684, 'ADMINISTRACION', '7', 1, '', '0000-00-00'),
(32, '0000000040', 'JOSE ALBERTO', 'CAMACHO', 'CORNEJO', '2021-01-27', 8000, 263.15789473684, 'SISTEMAS', '14', 1, '', '0000-00-00'),
(33, '0000000043', 'ESTEBAN', 'ESPARZA', 'DIAZ', '2021-02-19', 8000, 263.15789473684, 'SISTEMAS', '14', 1, '', '0000-00-00'),
(34, '0000000044', 'SALVADOR ISRAEL', 'MARTINEZ', 'AGUIL', '2021-02-21', 8685.71, 285.71414473684, 'CONSTRUCCION DE FIBRA OPTICA', '7', 1, '', '0000-00-00'),
(35, '0000000045', 'DANIEL GUSTAVO', 'GUERRERO', 'LOPEZ', '2021-03-10', 8000, 263.15789473684, 'SISTEMAS', '14', 1, '', '0000-00-00'),
(36, '0000000049', 'PABLO ISRAEL', 'SAUCEDO', 'RAMOS', '2021-03-25', 7817.14, 257.14276315789, 'REPARACIONES', '7', 1, '', '0000-00-00'),
(37, '0000000050', 'JESUS BERZAIN', 'GUTIERREZ', 'VICTORIO', '2021-03-26', 7817.14, 257.14276315789, 'REPARACIONES', '7', 1, '', '0000-00-00'),
(38, '0000000051', 'SERGIO GIOVANNI', 'RODRIGUEZ', 'ESQUIVEL', '2021-04-24', 6514.29, 214.28585526316, 'TALLER', '7', 1, '', '0000-00-00'),
(39, '0000000052', 'JOSE ANTONIO', 'AGUIRRE', 'ESQUIVEL', '2021-04-26', 6514.29, 214.28585526316, 'VIGILANCIA', '7', 1, '', '0000-00-00'),
(40, '0000000053', 'JUAN FRANCISCO', 'MARQUEZ', 'RODRIGUEZ', '2021-04-22', 6514.29, 214.28585526316, 'CONSTRUCCION DE FIBRA OPTICA', '7', 1, '', '0000-00-00'),
(41, '0000000054', 'JOSE JUAN', 'DURON', 'DE LEON', '2021-03-10', 6514.29, 214.28585526316, 'CONSTRUCCION DE FIBRA OPTICA', '7', 1, '', '0000-00-00'),
(42, '0000000055', 'LEONEL ALEJANDRO', 'CAMPOS', 'PALACIO', '2021-05-17', 6514.29, 214.28585526316, 'REPARACIONES', '7', 1, '', '0000-00-00'),
(43, '0000000056', 'ALEXIS JOVAN', 'GALVAN', 'DELGADO', '2021-05-17', 7817.14, 257.14276315789, 'REPARACIONES', '7', 1, '', '0000-00-00');

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
-- Estructura de tabla para la tabla `percepciones`
--

CREATE TABLE `percepciones` (
  `id_per` int(99) NOT NULL,
  `descripcion` varchar(99) NOT NULL,
  `monto` int(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `percepciones`
--

INSERT INTO `percepciones` (`id_per`, `descripcion`, `monto`) VALUES
(1, 'Dia Extra', 100);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id_rol` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id_rol`, `nombre`) VALUES
(2, 'usuario'),
(3, 'administrador');

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(99) NOT NULL,
  `nombre` varchar(99) NOT NULL,
  `pass` varchar(99) NOT NULL,
  `rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `pass`, `rol`) VALUES
(1, 'carlos', '4048', 3),
(2, 'sistemas', '1234', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vacaciones`
--

CREATE TABLE `vacaciones` (
  `id_empleado` int(99) NOT NULL,
  `nombre` varchar(99) NOT NULL,
  `apellido_paterno` varchar(99) NOT NULL,
  `apellido_materno` varchar(99) NOT NULL,
  `inicio_v` varchar(99) NOT NULL,
  `fin_v` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  ADD PRIMARY KEY (`dni`);

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
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  MODIFY `id_departamento` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `dni` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

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
