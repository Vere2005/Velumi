-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-12-2021 a las 21:02:21
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `velumi`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `id` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `usuario` text COLLATE utf8_bin NOT NULL,
  `contrasenia` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`id`, `usuario`, `contrasenia`) VALUES
(5, 'vere200594@gmail.com', 'bolt');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` text COLLATE utf8_bin NOT NULL,
  `categoria` text COLLATE utf8_bin NOT NULL,
  `foto` text COLLATE utf8_bin NOT NULL,
  `descripcion` text COLLATE utf8_bin NOT NULL,
  `precio` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `categoria`, `foto`, `descripcion`, `precio`) VALUES
(1, 'Blusa', 'rop_mujer', 'img/b1.jpg', 'Blusa color negro', '$350'),
(2, 'Blusa', 'rop_mujer', 'img/b2.jpg', 'Blusa color rosa', '$300'),
(3, 'Blusa', 'rop_mujer', 'img/b3.jpg', 'Blusa color verde', '$250'),
(4, 'Vestido', 'rop_mujer', 'img/b4.jpg', 'Vestido color rojo', '$500'),
(5, 'Bota ', 'zap_mujer', 'img/b5.jpg', 'Bota militar color negro', '$800'),
(6, 'Bota', 'zap_mujer', 'img/b6.jpg', 'Heavy bota Goodyear', '$700'),
(7, 'Zapatilla', 'zap_mujer', 'img/b7.jpg', 'Zapatilla color rosa ', '$800'),
(8, 'Zapatilla', 'zap_mujer', 'img/b8.jpg', 'Zapatilla color rojo', '$700'),
(9, 'Bolsa', 'acc_mujer', 'img/b9.jpg', 'Bolsa color negro', '$500'),
(10, 'Bolsa', 'acc_mujer', 'img/b10.jpg', 'Bolsa color vino', '$800'),
(11, 'Gorra', 'acc_mujer', 'img/b11.jpg', 'Gorra puma color rosa', '$500'),
(12, 'Cartera', 'acc_mujer', 'img/b12.jpg', 'Cartera color azul', '$250'),
(13, 'Chamarra', 'rop_hombre', 'img/b13.jpg', 'Chamarra color negro', '$1500'),
(14, 'Camisa', 'rop_hombre', 'img/b14.jpg', 'Camisa cuadros', '$350'),
(15, 'Camisa', 'rop_hombre', 'img/b15.jpg', 'Camisa color blanco', '$400'),
(16, 'Pantalon', 'rop_hombre', 'img/b16.jpg', 'Pantalón color azul', '$600'),
(17, 'Bota', 'zap_hombre', 'img/b17.jpg', 'Bota color negro', '$900'),
(18, 'Tenis', 'zap_hombre', 'img/b18.jpg', 'Tenis color blanco', '$800'),
(19, 'Tenis', 'zap_hombre', 'img/b19.jpg', 'Tenis color rojos', '$800'),
(20, 'Tenis', 'zap_hombre', 'img/b20.jpg', 'Tenis deportivos color múltiple', '$900'),
(21, 'Gorra', 'acc_hombre', 'img/b21.jpg', 'Gorra Adidas', '$500'),
(22, 'Gorra', 'acc_hombre', 'img/b22.jpg', 'Gorra color verde', '$400'),
(23, 'Cinturón', 'acc_hombre', 'img/b23.jpg', 'Cinturón color azul', '$400'),
(24, 'Maleta', 'acc_hombre', 'img/b24.jpg', 'Maleta NIKE color negro', '$1500');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` text COLLATE utf8_bin NOT NULL,
  `apellido` text COLLATE utf8_bin NOT NULL,
  `direccion` text COLLATE utf8_bin NOT NULL,
  `telefono` text COLLATE utf8_bin NOT NULL,
  `email` text COLLATE utf8_bin NOT NULL,
  `contrasenia` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `apellido`, `direccion`, `telefono`, `email`, `contrasenia`) VALUES
(8, 'Verenice', 'Sosa', 'Compositores mexicanos', '5547600990', 'vere200594@gmail.com', 'bolt');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
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
-- AUTO_INCREMENT de la tabla `carrito`
--
ALTER TABLE `carrito`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=180;

--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
