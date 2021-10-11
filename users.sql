-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-10-2021 a las 12:13:25
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `users`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `d1`
--

CREATE TABLE `d1` (
  `seccion` smallint(4) NOT NULL,
  `municipio` varchar(70) NOT NULL,
  `representante` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `d1`
--

INSERT INTO `d1` (`seccion`, `municipio`, `representante`) VALUES
(0, '0', '0'),
(1, 'Tlaxiaco', 'Juan Lopez'),
(2, 'mexico', 'Juan Lopez'),
(3, 'Tlaxiaco', 'ferb');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `d2`
--

CREATE TABLE `d2` (
  `seccion` smallint(4) NOT NULL,
  `municipio` varchar(70) NOT NULL,
  `representante` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `d2`
--

INSERT INTO `d2` (`seccion`, `municipio`, `representante`) VALUES
(0, '0', '0'),
(1, 'mexico', 'ferb');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `d3`
--

CREATE TABLE `d3` (
  `seccion` smallint(4) NOT NULL,
  `municipio` varchar(70) NOT NULL,
  `representante` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `d3`
--

INSERT INTO `d3` (`seccion`, `municipio`, `representante`) VALUES
(0, '0', '0'),
(1, 'Tlaxiaco', 'Juan Lopez');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `d4`
--

CREATE TABLE `d4` (
  `seccion` smallint(4) NOT NULL,
  `municipio` varchar(70) NOT NULL,
  `representante` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `d4`
--

INSERT INTO `d4` (`seccion`, `municipio`, `representante`) VALUES
(0, '0', '0'),
(1, 'Tlaxiaco', 'Juan Lopez');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `d5`
--

CREATE TABLE `d5` (
  `seccion` smallint(4) NOT NULL,
  `municipio` varchar(70) NOT NULL,
  `representante` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `d5`
--

INSERT INTO `d5` (`seccion`, `municipio`, `representante`) VALUES
(0, '0', '0'),
(1, 'Tlaxiaco', 'Juan Lopez');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `d6`
--

CREATE TABLE `d6` (
  `seccion` smallint(4) NOT NULL,
  `municipio` varchar(70) NOT NULL,
  `representante` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `d6`
--

INSERT INTO `d6` (`seccion`, `municipio`, `representante`) VALUES
(0, '0', '0'),
(2, 'mexico', 'dddd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `d7`
--

CREATE TABLE `d7` (
  `seccion` smallint(4) NOT NULL,
  `municipio` varchar(70) NOT NULL,
  `representante` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `d7`
--

INSERT INTO `d7` (`seccion`, `municipio`, `representante`) VALUES
(0, '0', '0'),
(1, 'Tlaxiaco', 'dddd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `d8`
--

CREATE TABLE `d8` (
  `seccion` smallint(4) NOT NULL,
  `municipio` varchar(70) NOT NULL,
  `representante` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `d8`
--

INSERT INTO `d8` (`seccion`, `municipio`, `representante`) VALUES
(0, '0', '0'),
(1111, 'Tlaxiaco', 'dddd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `d9`
--

CREATE TABLE `d9` (
  `seccion` smallint(4) NOT NULL,
  `municipio` varchar(70) NOT NULL,
  `representante` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `d9`
--

INSERT INTO `d9` (`seccion`, `municipio`, `representante`) VALUES
(0, '0', '0'),
(4, 'grecia', 'Juan cruz');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `d10`
--

CREATE TABLE `d10` (
  `seccion` smallint(4) NOT NULL,
  `municipio` varchar(70) NOT NULL,
  `representante` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `d10`
--

INSERT INTO `d10` (`seccion`, `municipio`, `representante`) VALUES
(0, '0', '0'),
(4, 'mexico', 'dddd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'pepe', 'pepe@pepe.es', '81dc9bdb52d04dc20036dbd8313ed055'),
(3, 'fer', 'anita@es.com', '202cb962ac59075b964b07152d234b70'),
(4, 'fer', 'fer@fer.com', '202cb962ac59075b964b07152d234b70'),
(5, 'ros', 'ros@ros.com', '202cb962ac59075b964b07152d234b70'),
(6, 'ross', 'ross@eee.com', '202cb962ac59075b964b07152d234b70'),
(7, 'fer', 'fer1@fer.com', '202cb962ac59075b964b07152d234b70');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `d1`
--
ALTER TABLE `d1`
  ADD UNIQUE KEY `seccion` (`seccion`);

--
-- Indices de la tabla `d2`
--
ALTER TABLE `d2`
  ADD UNIQUE KEY `seccion` (`seccion`);

--
-- Indices de la tabla `d3`
--
ALTER TABLE `d3`
  ADD UNIQUE KEY `seccion` (`seccion`);

--
-- Indices de la tabla `d4`
--
ALTER TABLE `d4`
  ADD UNIQUE KEY `seccion` (`seccion`);

--
-- Indices de la tabla `d5`
--
ALTER TABLE `d5`
  ADD UNIQUE KEY `seccion` (`seccion`);

--
-- Indices de la tabla `d6`
--
ALTER TABLE `d6`
  ADD UNIQUE KEY `seccion` (`seccion`);

--
-- Indices de la tabla `d7`
--
ALTER TABLE `d7`
  ADD UNIQUE KEY `seccion` (`seccion`);

--
-- Indices de la tabla `d8`
--
ALTER TABLE `d8`
  ADD UNIQUE KEY `seccion` (`seccion`);

--
-- Indices de la tabla `d9`
--
ALTER TABLE `d9`
  ADD UNIQUE KEY `seccion` (`seccion`);

--
-- Indices de la tabla `d10`
--
ALTER TABLE `d10`
  ADD UNIQUE KEY `seccion` (`seccion`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`),
  ADD KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
