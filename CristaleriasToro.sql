-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-02-2023 a las 14:59:42
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
-- Base de datos: `cristaleria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `categoria` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `categoria`) VALUES
(3, 'Vinos Tranquilos'),
(4, 'Vinos Espumantes'),
(5, 'Alimentos'),
(6, 'Aguas y Jugos'),
(7, 'Aceites'),
(8, 'Licores'),
(9, 'Cerveza');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(100) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `precio_pallet` int(11) NOT NULL,
  `codigo` int(11) NOT NULL,
  `cantidad` int(100) NOT NULL,
  `imagen` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `id_categoria` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `precio_pallet`, `codigo`, `cantidad`, `imagen`, `id_categoria`) VALUES
(8, 'Botella Vinos Tranquilos', 'Botella ', 11000, 100, 100, '20220627041825.jpg', 3),
(9, 'botella vinos Tranquilos', 'botella', 13000, 101, 100, '20220627041910.jpg', 3),
(10, 'Botella Vinos Tranquilos', 'Botella', 10000, 102, 200, '20220627042131.jpg', 3),
(11, 'Botella Vinos Espumantes', 'Botella', 15000, 200, 100, '20220627044901.jpg', 4),
(12, 'Botella Vinos Espumantes', 'botella', 16000, 201, 100, '20220627044929.jpg', 4),
(13, 'Botella Vinos Espumantes', 'botella', 17000, 202, 100, '20220627045018.jpg', 4),
(14, 'Frasco Alimento', 'Frasco', 9000, 300, 100, '20220627045229.jpg', 5),
(15, 'Frasco Alimento', 'Frasco ', 5000, 301, 100, '20220627045343.jpg', 5),
(16, 'Frasco Alimento', 'Frasco ', 12000, 302, 100, '20220627045501.jpg', 5),
(17, 'Botella Para Agua y Jugos', 'Botella ', 17000, 400, 230, '20220627051519.jpg', 6),
(18, 'Botella Para Agua y Jugos', 'Botella', 12500, 401, 120, '20220627051610.jpg', 6),
(19, 'Botella Para Agua y Jugos', 'Botella', 10000, 402, 700, '20220627051701.jpg', 6),
(20, 'Botella Para Aceite', 'botella', 10, 500, 270, '20220627052044.jpg', 7),
(21, 'Botella Para Aceite', 'Botella ', 10000, 501, 750, '20220627052131.jpg', 7),
(22, 'Botella Para Aceite', 'Botella', 70000, 502, 1000, '20220627052246.jpg', 7),
(23, 'Botella Para Licores', 'Botella ', 200, 600, 150, '20220627052518.jpg', 8),
(24, 'Botella Para Licores', 'Botella ', 20000, 601, 550, '20220627053002.jpg', 8),
(25, 'Botella Para Licores', 'Botella', 7500, 602, 220, '20220627053046.jpg', 8),
(26, 'Botellas para Cerveza', 'Botella', 20000, 700, 1000, '20220627053140.jpg', 9),
(27, 'Botellas para Cerveza', 'Botella', 27000, 701, 230, '20220627053216.jpg', 9),
(28, 'Botellas para Cerveza', 'botella', 13500, 702, 740, '20220627053312.jpg', 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(100) NOT NULL,
  `nombre_completo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `usuario` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `contrasena` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre_completo`, `correo`, `usuario`, `contrasena`) VALUES
(17, 'marco', 'marco', 'marco', '1234');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
