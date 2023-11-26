-- Active: 1686147157825@@127.0.0.1@3306@uf2177_evaluacion2
-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-09-2023 a las 11:24:01
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4
DROP DATABASE IF EXISTS tienda;

CREATE DATABASE tienda;

USE tienda;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo`
--

CREATE TABLE `articulo` (
  `id_articulo` smallint(5) UNSIGNED NOT NULL,
  `nom_articulo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `articulo`
--

INSERT INTO `articulo` (`id_articulo`, `nom_articulo`) VALUES
(1, 'arti-iph-12'),
(2, 'arti-iph-11'),
(3, 'arti-sms-21'),
(4, 'arti-sms-10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulosmoviles`
--

CREATE TABLE `articulosmoviles` (
  `id_articulo` smallint(5) UNSIGNED NOT NULL,
  `id_moviles` smallint(5) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `articulosmoviles`
--

INSERT INTO `articulosmoviles` (`id_articulo`, `id_moviles`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `capacidad`
--

CREATE TABLE `capacidad` (
  `IDCAPACIDAD` smallint(5) UNSIGNED NOT NULL,
  `CAPACIDAD` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargadores`
--

CREATE TABLE `cargadores` (
  `id_cargadores` smallint(5) UNSIGNED NOT NULL,
  `tipo_cargadores` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `cargadores`
--

INSERT INTO `cargadores` (`id_cargadores`, `tipo_cargadores`) VALUES
(1, 'Tipo C'),
(2, 'Tipo USB'),
(3, 'Tipo Lightning');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `color`
--

CREATE TABLE `color` (
  `id_color` smallint(5) UNSIGNED NOT NULL,
  `nom_color` varchar(10) NOT NULL,
  `imgcolor` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `color`
--

INSERT INTO `color` (`id_color`, `nom_color`, `imgcolor`) VALUES
(1, 'rojo', 'colorrojo.png'),
(2, 'azul', 'colorazul.png'),
(3, 'verde', 'colorverde.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

CREATE TABLE `imagenes` (
  `id_imagenes` smallint(5) UNSIGNED NOT NULL,
  `nom_imagenes` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
CREATE TABLE `opiniones` (
  `id_opinion` smallint(5) UNSIGNED NOT NULL,
  `opinion` varchar(250) NOT NULL,
  `useropinion` varchar(50) NOT NULL,
  `email`       varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `imagenes`
--

INSERT INTO `imagenes` (`id_imagenes`, `nom_imagenes`) VALUES
(1, 'img/iph12.png'),
(2, 'img/iph11.png'),
(3, 'img/smg21.png'),
(4, 'img/smg10.png'),
(5, 'img/iphone 13.avif'),
(6, 'img/LG Velvet.avif'),
(7, 'img/OnePlus 9 Pro.avif'),
(8, 'img/OnePlus 10.avif'),
(9, 'img/OnePlus Nord 2.avif'),
(10, 'img/Samsung Galaxy A53.avif'),
(11, 'img/Samsung Galaxy Z Fol.avif'),
(12, 'img/Sony Xperia 1 III.avif'),
(13, 'img/Sony Xperia 2.avif'),
(14, 'img/Sony Xperia 3.avif'),
(15, 'img/Xiaomi Mi 11.avif'),
(16, 'img/Xiaomi Mi 12.avif'),
(17, 'img/Xiaomi Redmi Note 10.avif'),
(18, 'img/Xiaomi Redmi Note 11.avif'),
(19, 'img/smg21.png'),
(20, 'img/smg10.png'),
(21, 'img/iph12.png'),
(22, 'img/iph11.png'),
(23, 'img/smg21.png');


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE `marcas` (
  `id_marcas` smallint(5) UNSIGNED NOT NULL,
  `nom_marca` varchar(20) NOT NULL,
  `id_sistemaoperativo` smallint(5) UNSIGNED NOT NULL
 ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`id_marcas`, `nom_marca`, `id_sistemaoperativo`) VALUES
(1, 'Apple', 2),
(2, 'Samsung', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modelos`
--

CREATE TABLE `modelos` (
  `id_modelos` smallint(5) UNSIGNED NOT NULL,
  `id_marcas` smallint(5) UNSIGNED NOT NULL,
  `nom_modelos` varchar(20) NOT NULL,
  `id_cargadores` smallint(5) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `modelos`
--

INSERT INTO `modelos` (`id_modelos`, `id_marcas`, `nom_modelos`, `id_cargadores`) VALUES
(4, 2, 'S10GZ35', 1),
(5, 2, 'S10GZ40', 2),
(6, 1, 'iphone 12', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modeloscolor`
--

CREATE TABLE `modeloscolor` (
  `id_modelos` smallint(5) UNSIGNED NOT NULL,
  `id_color` smallint(5) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `modeloscolor`
--

INSERT INTO `modeloscolor` (`id_modelos`, `id_color`) VALUES
(5, 1),
(6, 2),
(6, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modelosreligiones`
--

CREATE TABLE `modelosreligiones` (
  `id_modelos` smallint(5) UNSIGNED NOT NULL,
  `id_regiones` smallint(5) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `modelosreligiones`
--

INSERT INTO `modelosreligiones` (`id_modelos`, `id_regiones`) VALUES
(5, 1),
(6, 1),
(5, 2),
(6, 2),
(4, 3),
(6, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modelostenercapacidad`
--

CREATE TABLE `modelostenercapacidad` (
  `id_modelos` smallint(5) UNSIGNED NOT NULL,
  `IDCAPACIDAD` smallint(5) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `moviles`
--

CREATE TABLE `moviles` (
  `id_moviles` smallint(5) UNSIGNED NOT NULL ,
  `nom_moviles` varchar(20) NOT NULL,
  `estadosim` varchar(10) NOT NULL,
  `garantia` date NOT NULL,
  `precio` smallint(6) NOT NULL,
  `id_imagenes` smallint(5) UNSIGNED DEFAULT NULL,
  `descripcion` VARCHAR(255) NOT NULL  -- Corrección: Añade el tipo de dato para `descripcion`
);


--
-- Volcado de datos para la tabla `moviles`
--

-- Volcado de datos para la tabla `moviles`
--

INSERT INTO `moviles` (`id_moviles`,`nom_moviles`, `estadosim`, `garantia`, `precio`, `id_imagenes`, `descripcion`) 
VALUES
    (1,'Iphone 12 mini', 'libre', '2024-10-20', 900, 1, 'El iPhone 12 mini es un teléfono compacto pero potente con un rendimiento excepcional y una gran pantalla.'),
    (2,'Iphone 11', 'libre', '2024-10-30', 500, 2, 'El iPhone 11 es un teléfono versátil con una excelente calidad de cámara y un rendimiento sólido.'),
    (3,'Samsung galaxy s21', 'libre', '2024-12-30', 900, 4, 'El Samsung Galaxy S21 es un smartphone de gama alta con una pantalla impresionante y un rendimiento rápido.'),
    (4,'Samsung galaxy s10', 'libre', '2023-12-30', 1000, 3, 'El Samsung Galaxy S10 fue uno de los buques insignia de Samsung con características destacadas en su época.'),
    (5,'Samsung galaxy s20', 'libre', '2023-12-30', 800, 1, 'El Samsung Galaxy S20 es un teléfono con una cámara potente y una pantalla vibrante.'),
    (6,'Iphone 13', 'bloqueado', '2023-12-30', 1100, 5, 'El iPhone 13 es la última incorporación a la familia iPhone, con un rendimiento líder en la industria.'),
    (7,'OnePlus 9 Pro', 'libre', '2024-10-25', 750, 7, 'El OnePlus 9 Pro es un teléfono Android de alta gama con un rendimiento excepcional.'),
    (8,'Xiaomi Mi 11', 'libre', '2024-11-05', 600, 15, 'El Xiaomi Mi 11 es un dispositivo de alta calidad con características de vanguardia a un precio competitivo.'),
    (9,'OnePlus Nord 2', 'libre', '2024-11-10', 450, 9, 'El OnePlus Nord 2 es un smartphone de gama media con un gran equilibrio entre rendimiento y precio.'),
    (10,'Xiaomi Redmi Note 10', 'libre', '2024-11-20', 250, 17, 'El Xiaomi Redmi Note 10 ofrece un rendimiento sólido a un precio asequible.'),
    (11,'Sony Xperia 1 III', 'libre', '2024-12-05', 1100, 14, 'El Sony Xperia 1 III es un teléfono Sony de alta gama con una pantalla impresionante y características multimedia avanzadas.'),
    (12,'LG Velvet', 'libre', '2024-10-15', 400, 6, 'El LG Velvet es un smartphone elegante con un diseño distintivo y características de cámara destacadas.'),
    (13,'Google Pixel 7', 'libre', '2024-12-20', 850, 5, 'El Google Pixel 7 continúa la tradición de Google de ofrecer cámaras de primera calidad en un teléfono Android.'),
    (14,'OnePlus 9', 'libre', '2024-11-28', 650, 7, 'El OnePlus 9 es un dispositivo de gama alta con un rendimiento sólido y una experiencia Android fluida.'),
    (15,'Xiaomi Mi 12', 'libre', '2025-01-10', 700, 16, 'El Xiaomi Mi 12 es una actualización de la serie Mi con características avanzadas y una gran pantalla.'),
    (16,'Samsung Galaxy Z Fold 4', 'libre', '2025-02-15', 1800, 11, 'El Samsung Galaxy Z Fold 4 es un teléfono plegable de última generación con una pantalla impresionante.'),
    (17,'Google Pixel 8', 'libre', '2025-01-20', 900, 5, 'El Google Pixel 8 continúa la tradición de ofrecer cámaras excepcionales y una experiencia Android pura.'),
    (18,'Sony Xperia 2', 'libre', '2025-02-05', 1200, 13, 'El Sony Xperia 2 es un dispositivo Sony de alta gama con un diseño elegante y características avanzadas.'),
    (19,'OnePlus 10', 'libre', '2025-03-10', 750, 8, 'El OnePlus 10 es una opción confiable para aquellos que buscan un rendimiento excepcional en un teléfono Android.'),
    (20,'Xiaomi Redmi Note 11', 'libre', '2025-03-20', 300, 18, 'El Xiaomi Redmi Note 11 ofrece un equilibrio entre precio y rendimiento para los usuarios exigentes.'),
    (21,'Samsung Galaxy A53', 'libre', '2025-02-28', 400, 10, 'El Samsung Galaxy A53 es un smartphone de gama media con características destacadas y durabilidad.'),
    (22,'Google Pixel 9', 'libre', '2025-04-05', 950, 5, 'El Google Pixel 9 continúa la tradición de ofrecer una experiencia Android premium y cámaras excepcionales.'),
    (23,'Sony Xperia 3', 'libre', '2025-04-15', 1300, 12, 'El Sony Xperia 3 es un teléfono Sony de alta gama con características avanzadas y diseño elegante.');


  

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movilesmarcas`
--

CREATE TABLE `movilesmarcas` (
  `id_moviles` smallint(5) UNSIGNED NOT NULL,
  `id_marcas` smallint(5) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `movilesmarcas`
--

INSERT INTO `movilesmarcas` (`id_moviles`, `id_marcas`) VALUES
(1, 1),
(3, 2),
(4, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE `pais` (
  `id_pais` smallint(5) UNSIGNED NOT NULL,
  `nom_pais` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `pais`
--

INSERT INTO `pais` (`id_pais`, `nom_pais`) VALUES
(1, 'Mexico'),
(2, 'Republica Dominicana'),
(3, 'Estados Unidos'),
(4, 'russia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paismoviles`
--

CREATE TABLE `paismoviles` (
  `id_pais` smallint(5) UNSIGNED NOT NULL,
  `id_moviles` smallint(5) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `paismoviles`
--

INSERT INTO `paismoviles` (`id_pais`, `id_moviles`) VALUES
(1, 1),
(2, 3),
(3, 2),
(3, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `regiones`
--

CREATE TABLE `regiones` (
  `id_regiones` smallint(5) UNSIGNED NOT NULL,
  `nom_regiones` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `regiones`
--

INSERT INTO `regiones` (`id_regiones`, `nom_regiones`) VALUES
(1, 'europa'),
(2, 'america'),
(3, 'Asia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sistemaoperativo`
--

CREATE TABLE `sistemaoperativo` (
  `id_sistemaoperativo` smallint(5) UNSIGNED NOT NULL,
  `nom_sistemaoperativo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `sistemaoperativo`
--

INSERT INTO `sistemaoperativo` (`id_sistemaoperativo`, `nom_sistemaoperativo`) VALUES
(1, 'Android'),
(2, 'Ios');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuarios` smallint(5) UNSIGNED NOT NULL,
  `nom_usuarios` varchar(50) NOT NULL UNIQUE,
  `contraseña`   VARCHAR (50) NOT NULL,
  `fecnacimiento`date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuarios`, `nom_usuarios`, `fecnacimiento`) VALUES
(1, 'Angel Daniel Garcia', '2003-06-26'),
(2, 'Andreina Michelle', '1990-04-20'),
(3, 'Andres Rodriguez', '2004-01-25'),
(4, 'Reina Michelle', '2000-07-10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarioscomprar`
--

CREATE TABLE `usuarioscomprar` (
  `id_usuarios` smallint(5) UNSIGNED NOT NULL,
  `id_articulo` smallint(5) UNSIGNED NOT NULL,
  `feccompra` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuarioscomprar`
--

INSERT INTO `usuarioscomprar` (`id_usuarios`, `id_articulo`, `feccompra`) VALUES
(2, 1, '2022-01-25'),
(2, 4, '2019-12-25'),
(3, 4, '2022-01-26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `valoracion`
--

CREATE TABLE `valoracion` (
  `id_articulo` smallint(5) UNSIGNED DEFAULT NULL,
  `id_usuarios` smallint(5) UNSIGNED DEFAULT NULL,
  `idvaloracion` smallint(5) UNSIGNED NOT NULL,
  `valoracion` float(5,2) NOT NULL,
  `nom_votantes` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `valoracion`
--

INSERT INTO `valoracion` (`id_articulo`, `id_usuarios`, `idvaloracion`, `valoracion`, `nom_votantes`) VALUES
(1, 2, 1, 3.50, 'Andreina Michelle');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD PRIMARY KEY (`id_articulo`);
ALTER TABLE `opiniones`
  ADD PRIMARY KEY (`id_opinion`);

--
-- Indices de la tabla `articulosmoviles`
--
ALTER TABLE `articulosmoviles`
  ADD PRIMARY KEY (`id_articulo`,`id_moviles`),
  ADD KEY `FK_ARTICULOSMOVILES_id_moviles` (`id_moviles`);

--
-- Indices de la tabla `capacidad`
--
ALTER TABLE `capacidad`
  ADD PRIMARY KEY (`IDCAPACIDAD`);

--
-- Indices de la tabla `cargadores`
--
ALTER TABLE `cargadores`
  ADD PRIMARY KEY (`id_cargadores`);

--
-- Indices de la tabla `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`id_color`);

--
-- Indices de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD PRIMARY KEY (`id_imagenes`);

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`id_marcas`),
  ADD KEY `FK_MARCAS_id_sistemaoperativo` (`id_sistemaoperativo`);

--
-- Indices de la tabla `modelos`
--
ALTER TABLE `modelos`
  ADD PRIMARY KEY (`id_modelos`,`id_marcas`),
  ADD UNIQUE KEY `nom_modelos` (`nom_modelos`),
  ADD KEY `FK_MODELOS_id_cargadores` (`id_cargadores`),
  ADD KEY `FK_MODELOS_id_marcas` (`id_marcas`);

--
-- Indices de la tabla `modeloscolor`
--
ALTER TABLE `modeloscolor`
  ADD PRIMARY KEY (`id_modelos`,`id_color`),
  ADD KEY `FK_MODELOSCOLOR_id_color` (`id_color`);

--
-- Indices de la tabla `modelosreligiones`
--
ALTER TABLE `modelosreligiones`
  ADD PRIMARY KEY (`id_regiones`,`id_modelos`),
  ADD KEY `FK_MODELOSRELIGIONES_id_modelos` (`id_modelos`);

--
-- Indices de la tabla `modelostenercapacidad`
--
ALTER TABLE `modelostenercapacidad`
  ADD PRIMARY KEY (`id_modelos`,`IDCAPACIDAD`),
  ADD KEY `FK_MODELOSTENERCAPACIDAD_IDCAPACIDAD` (`IDCAPACIDAD`);

--
-- Indices de la tabla `moviles`
--
ALTER TABLE `moviles`
  ADD PRIMARY KEY (`id_moviles`),
  ADD KEY `FK_MOVILES_id_imagen` (`id_imagenes`);

--
-- Indices de la tabla `movilesmarcas`
--
ALTER TABLE `movilesmarcas`
  ADD PRIMARY KEY (`id_marcas`,`id_moviles`),
  ADD KEY `FK_movilesmarcas_id_moviles` (`id_moviles`);

--
-- Indices de la tabla `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`id_pais`);

--
-- Indices de la tabla `paismoviles`
--
ALTER TABLE `paismoviles`
  ADD PRIMARY KEY (`id_pais`,`id_moviles`),
  ADD KEY `FK_PAISMOVILES_id_moviles` (`id_moviles`);

--
-- Indices de la tabla `regiones`
--
ALTER TABLE `regiones`
  ADD PRIMARY KEY (`id_regiones`);

--
-- Indices de la tabla `sistemaoperativo`
--
ALTER TABLE `sistemaoperativo`
  ADD PRIMARY KEY (`id_sistemaoperativo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuarios`);

--
-- Indices de la tabla `usuarioscomprar`
--
ALTER TABLE `usuarioscomprar`
  ADD PRIMARY KEY (`id_articulo`,`id_usuarios`,`feccompra`),
  ADD KEY `FK_USUARIOSCOMPRAR_id_usuarios` (`id_usuarios`);

--
-- Indices de la tabla `valoracion`
--
ALTER TABLE `valoracion`
  ADD PRIMARY KEY (`idvaloracion`),
  ADD KEY `FK_VALORACION_id_usuarios` (`id_usuarios`),
  ADD KEY `FK_VALORACION_id_articulo` (`id_articulo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulo`
--
ALTER TABLE `articulo`
  MODIFY `id_articulo` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `capacidad`
--
ALTER TABLE `capacidad`
  MODIFY `IDCAPACIDAD` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cargadores`
--
ALTER TABLE `cargadores`
  MODIFY `id_cargadores` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `color`
--
ALTER TABLE `color`
  MODIFY `id_color` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  MODIFY `id_imagenes` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `marcas`
--
ALTER TABLE `marcas`
  MODIFY `id_marcas` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `modelos`
--
ALTER TABLE `modelos`
  MODIFY `id_modelos` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `moviles`
--
ALTER TABLE `moviles`
  MODIFY `id_moviles` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `pais`
--
ALTER TABLE `pais`
  MODIFY `id_pais` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `regiones`
--
ALTER TABLE `regiones`
  MODIFY `id_regiones` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `sistemaoperativo`
--
ALTER TABLE `sistemaoperativo`
  MODIFY `id_sistemaoperativo` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuarios` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `valoracion`
--
ALTER TABLE `valoracion`
  MODIFY `idvaloracion` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `articulosmoviles`
--
ALTER TABLE `articulosmoviles`
  ADD CONSTRAINT `FK_ARTICULOSMOVILES_id_articulo` FOREIGN KEY (`id_articulo`) REFERENCES `articulo` (`id_articulo`),
  ADD CONSTRAINT `FK_ARTICULOSMOVILES_id_moviles` FOREIGN KEY (`id_moviles`) REFERENCES `moviles` (`id_moviles`);

--
-- Filtros para la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD CONSTRAINT `FK_MARCAS_id_sistemaoperativo` FOREIGN KEY (`id_sistemaoperativo`) REFERENCES `sistemaoperativo` (`id_sistemaoperativo`);

--
-- Filtros para la tabla `modelos`
--
ALTER TABLE `modelos`
  ADD CONSTRAINT `FK_MODELOS_id_cargadores` FOREIGN KEY (`id_cargadores`) REFERENCES `cargadores` (`id_cargadores`),
  ADD CONSTRAINT `FK_MODELOS_id_marcas` FOREIGN KEY (`id_marcas`) REFERENCES `marcas` (`id_marcas`);

--
-- Filtros para la tabla `modeloscolor`
--
ALTER TABLE `modeloscolor`
  ADD CONSTRAINT `FK_MODELOSCOLOR_id_color` FOREIGN KEY (`id_color`) REFERENCES `color` (`id_color`),
  ADD CONSTRAINT `FK_MODELOSCOLOR_id_modelos` FOREIGN KEY (`id_modelos`) REFERENCES `modelos` (`id_modelos`);

--
-- Filtros para la tabla `modelosreligiones`
--
ALTER TABLE `modelosreligiones`
  ADD CONSTRAINT `FK_MODELOSRELIGIONES_id_modelos` FOREIGN KEY (`id_modelos`) REFERENCES `modelos` (`id_modelos`),
  ADD CONSTRAINT `FK_MODELOSRELIGIONES_id_regiones` FOREIGN KEY (`id_regiones`) REFERENCES `regiones` (`id_regiones`);

--
-- Filtros para la tabla `modelostenercapacidad`
--
ALTER TABLE `modelostenercapacidad`
  ADD CONSTRAINT `FK_MODELOSTENERCAPACIDAD_IDCAPACIDAD` FOREIGN KEY (`IDCAPACIDAD`) REFERENCES `capacidad` (`IDCAPACIDAD`),
  ADD CONSTRAINT `FK_MODELOSTENERCAPACIDAD_id_modelos` FOREIGN KEY (`id_modelos`) REFERENCES `modelos` (`id_modelos`);

--
-- Filtros para la tabla `moviles`
--
ALTER TABLE `moviles`
  ADD CONSTRAINT `FK_MOVILES_id_imagen` FOREIGN KEY (`id_imagenes`) REFERENCES `imagenes` (`id_imagenes`);

--
-- Filtros para la tabla `movilesmarcas`
--
ALTER TABLE `movilesmarcas`
  ADD CONSTRAINT `FK_movilesmarcas_id_marcas` FOREIGN KEY (`id_marcas`) REFERENCES `marcas` (`id_marcas`),
  ADD CONSTRAINT `FK_movilesmarcas_id_moviles` FOREIGN KEY (`id_moviles`) REFERENCES `moviles` (`id_moviles`);

--
-- Filtros para la tabla `paismoviles`
--
ALTER TABLE `paismoviles`
  ADD CONSTRAINT `FK_PAISMOVILES_id_moviles` FOREIGN KEY (`id_moviles`) REFERENCES `moviles` (`id_moviles`),
  ADD CONSTRAINT `FK_PAISMOVILES_id_pais` FOREIGN KEY (`id_pais`) REFERENCES `pais` (`id_pais`);

--
-- Filtros para la tabla `usuarioscomprar`
--
ALTER TABLE `usuarioscomprar`
  ADD CONSTRAINT `FK_USUARIOSCOMPRAR_id_articulo` FOREIGN KEY (`id_articulo`) REFERENCES `articulosmoviles` (`id_articulo`),
  ADD CONSTRAINT `FK_USUARIOSCOMPRAR_id_usuarios` FOREIGN KEY (`id_usuarios`) REFERENCES `usuarios` (`id_usuarios`);

--
-- Filtros para la tabla `valoracion`
--
ALTER TABLE `valoracion`
  ADD CONSTRAINT `FK_VALORACION_id_articulo` FOREIGN KEY (`id_articulo`) REFERENCES `usuarioscomprar` (`id_articulo`),
  ADD CONSTRAINT `FK_VALORACION_id_usuarios` FOREIGN KEY (`id_usuarios`) REFERENCES `usuarios` (`id_usuarios`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
