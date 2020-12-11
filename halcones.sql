-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-12-2020 a las 06:59:36
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `halcones`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(3) NOT NULL,
  `comentario` varchar(255) NOT NULL,
  `idUsuario` int(3) NOT NULL,
  `idPub` int(3) NOT NULL,
  `deleted_at` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id`, `comentario`, `idUsuario`, `idPub`, `deleted_at`) VALUES
(1, 'sdaadsdsa', 1, 2, 2020),
(2, 'sdaadsdsa', 1, 2, NULL),
(3, 'sdaadsdsa', 1, 2, NULL),
(4, 'sdaadsdsa', 1, 2, NULL),
(5, 'sdaadsdsa', 1, 2, NULL),
(6, 'sdaadsdsa', 1, 2, NULL),
(7, 'sdasdasd', 1, 1, NULL),
(8, 'sdasdasd', 1, 1, NULL),
(9, 'sdasdasd', 1, 1, NULL),
(10, 'sdasdasd', 1, 1, NULL),
(11, 'sdasdasd', 1, 1, NULL),
(12, 'dsasddsa', 1, 2, NULL),
(13, 'trece', 1, 0, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cupon`
--

CREATE TABLE `cupon` (
  `id` int(3) NOT NULL,
  `nombreP` varchar(30) NOT NULL,
  `precio` float NOT NULL,
  `categoria` varchar(35) NOT NULL,
  `link` varchar(255) NOT NULL,
  `des` varchar(255) NOT NULL,
  `idUsuario` int(3) NOT NULL,
  `deleted_at` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cupon`
--

INSERT INTO `cupon` (`id`, `nombreP`, `precio`, `categoria`, `link`, `des`, `idUsuario`, `deleted_at`) VALUES
(1, 'Prueba', 0, 'Prueba', 'Prueba', 'Prueba', 2, 2020);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(5) NOT NULL,
  `email` varchar(30) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellidoPaterno` varchar(30) NOT NULL,
  `apellidoMaterno` varchar(30) NOT NULL,
  `nombreUsuario` varchar(30) NOT NULL,
  `contrasenia` varchar(30) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `deleted_at` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `email`, `nombre`, `apellidoPaterno`, `apellidoMaterno`, `nombreUsuario`, `contrasenia`, `telefono`, `deleted_at`) VALUES
(1, 'Mariano@gmail.com', 'Mariano', 'Cervantes', 'Hernandez', 'MarianoCH', 'LizetIslas', '123456789', 2020),
(2, 'Juan@gmail.com', 'Juega', 'Juega', 'Juegos', 'Juaniquilador', '123456789', '1234567890', NULL),
(3, 'tachidazo@gmail.com', 'Hector Efren', 'Gonzalez ', 'Cuevas', 'Tachido13', '1234567890', '7751066818', NULL),
(4, 'tachidazo14@gmail.com', 'Pedro', 'Gonzalez ', 'Cuevas', 'Pedrin19', '123456789', '7751066818', NULL),
(5, 'l', 'l', 'l', 'l', 'l', 'dsasaddas', '1234567890', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cupon`
--
ALTER TABLE `cupon`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `cupon`
--
ALTER TABLE `cupon`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
