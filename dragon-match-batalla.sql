-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-09-2022 a las 15:30:33
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dragon-match-batalla`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cartas`
--

CREATE TABLE `cartas` (
  `id` int(11) NOT NULL,
  `grupo` varchar(3) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `poder` varchar(3) NOT NULL,
  `velocidad` varchar(3) NOT NULL,
  `alcance` varchar(3) NOT NULL,
  `tecnica` varchar(3) NOT NULL,
  `energia` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cartas`
--

INSERT INTO `cartas` (`id`, `grupo`, `nombre`, `poder`, `velocidad`, `alcance`, `tecnica`, `energia`) VALUES
(1, 'A1', 'Maestro roshi', '6', '6', '4', '8', '7'),
(2, 'A2', 'Gohan', '7', '7', '5', '5', '6'),
(3, 'A3', 'Goten', '5', '4', '5', '3', '6'),
(4, 'A4', 'Trunks', '6', '5', '3', '3', '7'),
(5, 'B1', 'Vegeta', '9', '8', '7', '8', '9'),
(6, 'B2', 'Ten Shin Han', '5', '4', '5', '7', '4'),
(7, 'B3', 'Chaoz', '3', '4', '2', '7', '5'),
(8, 'B4', 'Krilin', '5', '5', '4', '6', '5'),
(9, 'C1', 'Piccoro', '7', '7', '10', '8', '5'),
(10, 'C2', 'Son Goku', '10', '8', '6', '8', '10'),
(11, 'C3', 'Majin Boo', '9', '6', '10', '4', '8'),
(12, 'C4', 'Freezer', '8', '8', '5', '4', '3'),
(13, 'D1', 'Dr.hero', '6', '3', '4', '2', '7'),
(14, 'D2', 'Androide #19', '5', '6', '2', '2', '9'),
(15, 'D3', 'Androide #18', '7', '7', '4', '6', '∞'),
(16, 'D4', 'Androide #17', '8', '6', '3', '7', '∞'),
(17, 'E1', 'Androide #16', '8', '4', '3', '5', '∞'),
(18, 'E2', 'Cell', '8', '7', '6', '5', '9'),
(19, 'E3', 'Bardock', '4', '3', '6', '1', '7'),
(20, 'E4', 'Raditz', '6', '3', '4', '6', '5'),
(21, 'F1', 'Nappa', '5', '2', '7', '6', '4'),
(22, 'F2', 'Hirundegar', '10', '9', '5', '1', '3'),
(23, 'F3', 'Janemba', '8', '10', '6', '3', '5'),
(24, 'F4', 'Paikujan ', '7', '7', '6', '9', '3'),
(25, 'G1', 'Yamcha', '3', '2', '2', '4', '7'),
(26, 'G2', 'Tao Pai Pai', '2', '5', '4', '7', '1'),
(27, 'G3', 'Zarbon', '6', '3', '2', '8', '8'),
(28, 'G4', 'Reacomme', '7', '1', '3', '6', '8'),
(29, 'H1', 'Capital Ginyu', '7', '7', '2', '4', '2'),
(30, 'H2', 'Pan', '6', '5', '2', '2', '6'),
(31, 'H3', 'Broly', '10', '3', '10', '7', '∞'),
(32, 'H4', 'Dodoria', '6', '2', '2', '5', '6');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cartas`
--
ALTER TABLE `cartas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cartas`
--
ALTER TABLE `cartas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
