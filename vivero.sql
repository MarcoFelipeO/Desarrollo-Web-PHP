-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-06-2023 a las 18:37:19
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `vivero`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `categoria` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `categoria`) VALUES
(11, 'Helechos'),
(12, 'Arboles Frutales'),
(13, 'Plantas Medicinales'),
(14, 'Flores'),
(15, 'Arbustos'),
(16, 'Sustratos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(100) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `precio_unitario` int(30) NOT NULL,
  `precio_pallet` int(11) NOT NULL,
  `codigo` int(11) NOT NULL,
  `cantidad_Carro` int(100) NOT NULL,
  `imagen` varchar(50) NOT NULL,
  `id_categoria` int(100) NOT NULL,
  `stock_Productos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `precio_unitario`, `precio_pallet`, `codigo`, `cantidad_Carro`, `imagen`, `id_categoria`, `stock_Productos`) VALUES
(44, 'Limonero', 'Limonero, es un arbol mediano que alcanza los dos metros', 14000, 100000, 0, 1, '20230608070247.jpg', 12, 20),
(45, 'Matico medicinal', 'Planta medicinal', 2500, 100000, 0, 1, '20230608070402.jpg', 13, 30),
(53, 'Manzana', 'Arbol de manzanas', 14990, 12500, 1, 1, '20230609203331.jpg', 12, 0),
(54, 'Nectarina', 'Nectarina', 15990, 75000, 2, 1, '20230609203432.jpg', 12, 200),
(59, 'Sustrato Light Mix', 'Light mix premium', 12990, 55000, 5, 1, '20230609232027.jpg', 16, 25),
(60, 'Flor azul', 'Flor azul', 12990, 45000, 6, 1, '20230609232105.jpg', 14, 35);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(100) NOT NULL,
  `nombre_completo` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `contrasena` varchar(50) NOT NULL,
  `rol` varchar(20) NOT NULL,
  `sesion_activa` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre_completo`, `correo`, `usuario`, `contrasena`, `rol`, `sesion_activa`) VALUES
(17, 'marco', 'mafeorellana09@gmail.com', 'marco', '1234', 'admin', 0),
(19, 'felipe', 'felipe@felipe.cl', 'felipe', '1234', '', 1),
(20, 'Juancho', 'mafe', 'Juancho Queso', '1234', '', 0),
(21, 'Marco', 'ma', '123', 'masa', '', 0),
(22, 'Marco', 'marco@marco.cl', '', 'Marco14371437', '', 1);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
