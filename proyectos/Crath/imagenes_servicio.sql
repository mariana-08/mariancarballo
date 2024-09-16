-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-12-2015 a las 19:09:28
-- Versión del servidor: 10.1.8-MariaDB
-- Versión de PHP: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `crath`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes_servicio`
--

CREATE TABLE `imagenes_servicio` (
  `id_imagen` int(11) NOT NULL,
  `id_servicio` int(11) NOT NULL,
  `ruta_imagen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `imagenes_servicio`
--

INSERT INTO `imagenes_servicio` (`id_imagen`, `id_servicio`, `ruta_imagen`) VALUES
(1, 1, 'img/servicios/2.jpg'),
(2, 1, 'img/servicios/5.jpg'),
(3, 2, 'img/servicios/1.jpg'),
(4, 2, 'img/servicios/3.jpg'),
(5, 2, 'img/servicios/4.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `imagenes_servicio`
--
ALTER TABLE `imagenes_servicio`
  ADD PRIMARY KEY (`id_imagen`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `imagenes_servicio`
--
ALTER TABLE `imagenes_servicio`
  MODIFY `id_imagen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
