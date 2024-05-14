-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-04-2015 a las 22:32:49
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `lossantoscafe`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bebidas`
--

CREATE TABLE IF NOT EXISTS `bebidas` (
`idImagen` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `ruta` varchar(100) NOT NULL,
  `idTipoBebida` int(100) NOT NULL,
  `ingredientes` varchar(150) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COMMENT='Tabla que guarda los datos de las imágenes de las bebidas.';

--
-- Volcado de datos para la tabla `bebidas`
--

INSERT INTO `bebidas` (`idImagen`, `nombre`, `ruta`, `idTipoBebida`, `ingredientes`) VALUES
(1, 'Oriental.jpg', '../img/menu/expressos/Oriental.jpg', 4, 'CafÃ© Santa MarÃ­a'),
(2, 'mokaccino.jpg', '../img/menu/expressos/mokaccino.jpg', 4, 'CafÃ© mokaccino'),
(3, 'moka.jpg', '../img/menu/expressos/moka.jpg', 4, 'CafÃ© moka'),
(4, 'latte.jpg', '../img/menu/expressos/latte.jpg', 4, 'CafÃ© latte'),
(5, 'Coco.jpg', '../img/menu/expressos/Coco.jpg', 4, 'CafÃ© coco'),
(6, 'capuccinoreal.jpg', '../img/menu/expressos/capuccinoreal.jpg', 4, 'CafÃ© capuccino real'),
(7, 'latte2.jpg', '../img/menu/expressos/latte2.jpg', 4, 'CafÃ© latte 2'),
(8, 'latte.jpg', '../img/menu/batidos/latte.jpg', 1, 'Prueba'),
(9, 'latte2.jpg', '../img/menu/batidos/latte2.jpg', 1, 'Prueba');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE IF NOT EXISTS `contacto` (
`idContacto` int(11) NOT NULL,
  `fechaRegistro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `nombre` varchar(100) NOT NULL,
  `apellidos` varchar(200) NOT NULL,
  `email` varchar(60) NOT NULL,
  `comentario` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Tabla para guardar los datos del formulario Contacto';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
`idProducto` int(11) NOT NULL,
  `nombreProducto` varchar(100) NOT NULL,
  `ruta` varchar(100) NOT NULL,
  `descripcion` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Tabla que guarda las rutas de las imágenes de los productos';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipobebida`
--

CREATE TABLE IF NOT EXISTS `tipobebida` (
`idTipoBebida` int(11) NOT NULL,
  `tipoBebida` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COMMENT='Tabla que almacena los tipos de bebidas';

--
-- Volcado de datos para la tabla `tipobebida`
--

INSERT INTO `tipobebida` (`idTipoBebida`, `tipoBebida`) VALUES
(1, 'batidos'),
(2, 'batidosSaludables'),
(3, 'capuccinos'),
(4, 'expressos'),
(5, 'lattesFrios'),
(6, 'otros'),
(7, 'saborizadosCalientes'),
(8, 'saborizadosFrios');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
`idUsuario` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `rol` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='Tabla para registrar los usuarios del sistema';

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `nombre`, `password`, `rol`) VALUES
(1, 'admin', '123456', 'administrador');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bebidas`
--
ALTER TABLE `bebidas`
 ADD PRIMARY KEY (`idImagen`);

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
 ADD PRIMARY KEY (`idContacto`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
 ADD PRIMARY KEY (`idProducto`);

--
-- Indices de la tabla `tipobebida`
--
ALTER TABLE `tipobebida`
 ADD PRIMARY KEY (`idTipoBebida`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
 ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bebidas`
--
ALTER TABLE `bebidas`
MODIFY `idImagen` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
MODIFY `idContacto` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
MODIFY `idProducto` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tipobebida`
--
ALTER TABLE `tipobebida`
MODIFY `idTipoBebida` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
