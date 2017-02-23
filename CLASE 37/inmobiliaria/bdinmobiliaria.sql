-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-01-2017 a las 20:50:52
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdinmobiliaria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alquileres`
--

CREATE TABLE `alquileres` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_viviendas` int(10) UNSIGNED NOT NULL,
  `precio` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `alquileres`
--

INSERT INTO `alquileres` (`id`, `id_viviendas`, `precio`) VALUES
(1, 1, 325),
(2, 3, 325),
(3, 4, 560),
(4, 8, 436),
(5, 12, 385),
(6, 13, 340),
(7, 14, 334),
(8, 15, 255),
(9, 20, 285);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `promociones`
--

CREATE TABLE `promociones` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_vivienda` int(11) NOT NULL,
  `precio_v_promocion` float NOT NULL,
  `precio_a_promocion` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `promociones`
--

INSERT INTO `promociones` (`id`, `id_vivienda`, `precio_v_promocion`, `precio_a_promocion`) VALUES
(1, 2, 120000, 0),
(2, 10, 80000, 0),
(3, 12, 0, 315),
(4, 13, 0, 250),
(5, 20, 0, 250);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `slider`
--

CREATE TABLE `slider` (
  `id` int(10) UNSIGNED NOT NULL,
  `urlImagen` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `orden` int(11) NOT NULL,
  `activo` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `slider`
--

INSERT INTO `slider` (`id`, `urlImagen`, `orden`, `activo`) VALUES
(1, 'img/slide.jpg', 1, 1),
(2, 'img/slide1349x400.jpg', 2, 1),
(3, 'img/slide21349x400.jpg', 3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiposvivienda`
--

CREATE TABLE `tiposvivienda` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tiposvivienda`
--

INSERT INTO `tiposvivienda` (`id`, `nombre`, `descripcion`) VALUES
(1, 'Piso', 'Es un piso'),
(2, 'Casa', ''),
(3, 'Ático', ''),
(4, 'Chalet', ''),
(5, 'Adosado', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_viviendas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id`, `id_viviendas`) VALUES
(1, 2),
(2, 5),
(3, 10),
(4, 11),
(5, 12),
(6, 13),
(7, 14),
(8, 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `viviendas`
--

CREATE TABLE `viviendas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `urlImagen` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `precio` float(10,2) NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `dormitorios` int(11) NOT NULL,
  `banos` int(11) NOT NULL,
  `superficie` int(11) NOT NULL,
  `ascensor` int(11) NOT NULL,
  `jardin` int(11) NOT NULL,
  `id_tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `viviendas`
--

INSERT INTO `viviendas` (`id`, `nombre`, `urlImagen`, `precio`, `descripcion`, `direccion`, `dormitorios`, `banos`, `superficie`, `ascensor`, `jardin`, `id_tipo`) VALUES
(1, 'Piso Céntrico', 'img\\piso1.jpg', 120000.00, 'Superficie útil 400 m²,completamente amueblado, cocina equipada, agua y calefacción por gas natural, plaza de garaje, suelos de tarima, aire acondicionado bomba f c, carpintería exterior pvc, vidrios climalit, armarios empotrados, piscina comunitaria, ascensor, puerta blindada, año construcción 2005, gastos comunidad incluidos, exterior, certificación energética en trámite.', 'C\\ Falsa, Nº 123', 6, 4, 430, 1, 1, 1),
(2, 'Piso Valdepasillas', 'img\\piso2.jpg', 140000.00, 'Superficie útil 450 m², cocina equipada, agua y calefacción por gasoil, plaza de garaje, suelos de tarima, aire acondicionado bomba f c, carpintería exterior pvc, vidrios climalit, armarios empotrados, piscina comunitaria, ascensor, puerta blindada, año construcción 2005, gastos comunidad incluidos, exterior, certificación energética en trámite.', 'C\\ Sinforiano Madroñero, Nº 400', 4, 3, 450, 1, 0, 1),
(3, 'Ático', 'img\\piso3.jpg', 150000.00, 'Superficie útil 350 m², sin amueblar, cocina semiamueblada, agua y calefacción por electricidad, plaza de garaje, suelos de tarima, aire acondicionado bomba f c, carpintería exterior pvc, vidrios climalit, armarios empotrados, piscina comunitaria, ascensor, puerta blindada, año construcción 2005, gastos comunidad incluidos, exterior, certificación energética en trámite.', 'C\\ Privet Drive, Nº 4', 3, 2, 350, 0, 1, 1),
(4, 'Piso de playa', 'img\\piscina1800x300.jpg', 180000.00, 'Piso ubicado en playa de Huelva. Ambiente soleado, numerosos baños y jardín. Ubicado en primera línea de playa y con centro comercial cercano.', 'C\\ Mar, Nº127', 4, 3, 195, 0, 1, 2),
(5, 'Casa con jardín', 'img\\cocinabeig800x300.jpg', 269000.00, 'Superficie útil 290 m², sin amueblar, cocina equipada, agua, garaje, suelos con calor radiante, con aire acondicionado, vidrios climalit, piscina comunitaria, ascensor, puerta blindada, año construcción 2005, gastos comunidad incluidos, exterior, certificación energética.', 'c/ Juan Pereda Pila nº25', 4, 3, 290, 0, 1, 4),
(6, 'Ático en la ciudad', 'img\\piscina2.jpg', 487000.00, 'Superficie útil 450 m², cocina equipada, agua y calefacción por gasoil, plaza de garaje, suelos de marmol, aire acondicionado bomba f c, vidrios climalit, armarios empotrados, ascensor, puerta blindada, armarios empotrados, exterior, certificación energética en trámite.', 'c/ Amapola nº27 6A', 3, 2, 450, 1, 0, 3),
(7, 'Casa de pueblo', 'img\\cocinabeig800x300.jpg', 135000.00, 'Superficie útil 190 m², sin amueblar, cocina equipada, agua, plaza de garaje, suelos de tarima, sin aire acondicionado, vidrios climalit, armarios empotrados, piscina comunitaria, ascensor, puerta blindada, año construcción 2005, gastos comunidad incluidos, exterior, certificación energética en trámite.', 'C\\Abedul, Nº35 ', 4, 2, 190, 0, 1, 2),
(8, 'Atico de lujo', 'img\\salonbalcon800x300.jpg', 370000.00, 'Superficie útil 450 m², cocina equipada, agua y calefacción por gasoil, plaza de garaje, suelos de tarima, aire acondicionado bomba f c, carpintería exterior pvc, vidrios climalit, armarios empotrados, piscina comunitaria, ascensor, puerta blindada, año construcción 2005, gastos comunidad incluidos, exterior, certificación energética en trámite.', 'C\\ Sinforiano Madroñero, Nº 400', 6, 4, 450, 1, 1, 3),
(9, 'Chalet rivero', 'img\\salongranate800x300.jpg', 320000.00, 'Superficie útil 360 m², cocina equipada, agua y calefacción por gasoil, plaza de garaje, suelos de tarima, aire acondicionado bomba f c, carpintería exterior pvc, vidrios climalit, armarios empotrados, piscina comunitaria, ascensor, puerta blindada, año construcción 2005, gastos comunidad incluidos, exterior, certificación energética en trámite.', 'Carretera Mérida KM 47, Parcela 3', 5, 4, 360, 0, 1, 4),
(10, 'Casa de los crímenes', 'img\\urbanizacion.jpg', 120000.00, 'Superficie útil 280 m². Varios propietarios han muerto, yo que tu no la cogía... o si, si te gustan las aventuras y crees que miento', 'Carretera de la Corte, Nº34 Badajoz ', 5, 3, 280, 0, 1, 4),
(11, 'Casa franca', 'img\\piscinamoderna800x300.jpg', 180000.00, 'Superficie útil 180 m². Ideal para vender droga y que no te pillen', 'Plaza alta, Nº27 Badajoz ', 4, 2, 180, 0, 0, 2),
(12, 'Adosado Sol', 'img\\piscinamoderna800x300.jpg', 275000.00, 'Casa Fuente del Sol 50 es un adosado de lujo con una decoración exquisita, situado al lado de la playa de Puntalejos en la urbanización Fuente del Sol. La casa se encuentra al final de la segunda línea y cuenta con vistas al mar desde la primera planta y desde el pequeño jardín privado.  El interior es muy amplio. En la planta baja hay un salón-comedor (Internet WIFI), una cocina con una pequeña mesa así como dos dormitorios y un cuarto de baño. En la primera planta están los dos dormitorios principales, cada uno con vestidor y cuarto de baño en suite. Uno de ellos tiene acceso a una terraza con maravillosas vistas al mar.', 'C La gamba, Nº12 Granada', 4, 2, 170, 0, 1, 5),
(13, 'Casa de Campo', 'img\\promocion1.jpg', 244000.00, 'casa ubicada en Las Hurdes de Extremadura. Ambiente soleado, numerosos baños y jardín. Ubicado cenrca de piscina y con centro comercial cercano.', 'C/ En el Campo, Nº3', 6, 4, 840, 0, 1, 0),
(14, 'Casa Madrid', 'img\\Promocion2.jpg', 350000.00, 'Superficie útil 350 m², sin amueblar, cocina semiamueblada, agua y calefacción por electricidad, plaza de garaje, suelos de tarima, aire acondicionado bomba f c, carpintería exterior pvc, vidrios climalit, armarios empotrados, piscina comunitaria, ascensor, puerta blindada, año construcción 2005, gastos comunidad incluidos, exterior, certificación energética en trámite.', 'c/Algun lugar del mundo', 5, 3, 644, 1, 0, 0),
(15, 'Piso Palma de Mallorca', 'img\\Promocion1.jpg', 184000.00, 'Superficie útil 440 m², sin amueblar, cocina semiamueblada, agua y calefacción por electricidad, plaza de garaje, suelos de tarima, aire acondicionado bomba f c, carpintería exterior pvc, vidrios climalit, armarios empotrados, piscina comunitaria, ascensor, puerta blindada, año construcción 2005, gastos comunidad incluidos, exterior, certificación energética en trámite.', 'C/ Wonderland, Nº44', 4, 2, 440, 1, 0, 0),
(16, 'Casa Madrid', 'img\\Promocion3.jpg', 350000.00, 'Superficie útil 350 m², sin amueblar, cocina semiamueblada, agua y calefacción por electricidad, plaza de garaje, suelos de tarima, aire acondicionado bomba f c, carpintería exterior pvc, vidrios climalit, armarios empotrados, piscina comunitaria, ascensor, puerta blindada, año construcción 2005, gastos comunidad incluidos, exterior, certificación energética en trámite.', 'C/Algun lugar del mundo', 5, 3, 644, 1, 0, 0),
(17, 'Chalet', 'img\\Promocion4.jpg', 350000.00, 'Superficie útil 350 m², sin amueblar, cocina semiamueblada, agua y calefacción por electricidad, plaza de garaje, suelos de tarima, aire acondicionado bomba f c, carpintería exterior pvc, vidrios climalit, armarios empotrados, piscina comunitaria, ascensor, puerta blindada, año construcción 2005, gastos comunidad incluidos, exterior, certificación energética en trámite.', 'C/Algun lugar del mundo', 5, 3, 644, 1, 0, 0),
(18, 'Casa estándar', 'img\\casa1.png', 190000.00, 'La casa de tus sueños, con garaje, sótano y bus escolar. Posee varias habitaciones y baño personal en la habitación principal. Dos plantas sin ascensor y la tv funciona perfectamente. Amueblado y con sofá.', 'Avenida Simpre Viva nº 742, Springfield', 4, 2, 185, 0, 1, 2),
(19, 'Casa rústica', 'img/cocinamadera800x300.jpg', 256000.00, 'Superficie total 498 m², superficie útil 200 m²,completamente amueblado, cocina de madera, agua y calefacción por gas natural, garaje a la entrada, suelos de tarima, carpintería exterior pvc, vidrios climalit, armarios empotrados, piscina privada, puerta blindada, año construcción 2010.', 'c/Florencio Castúo nº6', 2, 1, 498, 0, 1, 2),
(20, 'Adosado de vacaciones', 'img/piscina1800x300.jpg', 367000.00, 'Superficie útil 250 m²,amueblado, piscina comunitaria con jardín, cocina amueblada y con electrodomésticos, terraza, agua y calefacción por gasoil, suelo laminado. ', 'av. Las palmeras nº15, 23', 3, 2, 250, 0, 1, 5),
(21, 'Ático céntrico', 'img/cocina800x300.jpg', 678000.00, 'En pleno centro ático de 300 m², exterior, terraza amplia con muebles, ascensor, agua y calefacción por gas natural, certificado energético, suelo de tarima flotante, cocina amueblada y equipada con electrodomésticos de última generación.', 'av. Ricardo Carapeto nº56 7c', 2, 1, 300, 1, 0, 3),
(22, 'Chalet', 'img\\casarustica.jpg', 150000.00, 'Superficie útil 800 m²,completamente amueblado, cocina equipada, agua y calefacción por gas natural, plaza de garaje, suelos de tarima, aire acondicionado bomba f c, carpintería exterior pvc, vidrios climalit, armarios empotrados, piscina comunitaria, ascensor, puerta blindada, año construcción 2005, gastos comunidad incluidos, exterior, certificación energética en trámite.', 'C/Callejuela, Nº45', 6, 4, 800, 0, 1, 0),
(23, 'Casa céntrica', 'img\\piso1.jpg', 154000.00, 'Superficie útil 256 m², sin amueblar, cocina equipada, agua y calefacción por gasoil, sin garaje, suelos de tarima, aire acondicionado bomba f c, vidrios climalit, armarios empotrados, ascensor, puerta blindada, año construcción 2010, gastos comunidad incluidos, exterior, certificación energética en trámite.', 'C\\ El gorrión Nº 25', 3, 2, 256, 0, 0, 2),
(24, 'Ático piedra', 'img\\piso3.jpg', 215500.00, 'Superficie útil 350 m², sin amueblar, cocina semiamueblada, agua y calefacción por electricidad, plaza de garaje, aire acondicionado, carpintería exterior pvc, armarios de mampostería, piscina comunitaria, ascensor, puerta blindada, año construcción 2005, gastos comunidad incluidos, exterior, certificación energética en trámite.', 'C\\ Gondolié Nº 67 8D', 2, 1, 350, 1, 0, 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alquileres`
--
ALTER TABLE `alquileres`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `promociones`
--
ALTER TABLE `promociones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tiposvivienda`
--
ALTER TABLE `tiposvivienda`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `viviendas`
--
ALTER TABLE `viviendas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alquileres`
--
ALTER TABLE `alquileres`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `promociones`
--
ALTER TABLE `promociones`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `tiposvivienda`
--
ALTER TABLE `tiposvivienda`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `viviendas`
--
ALTER TABLE `viviendas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
