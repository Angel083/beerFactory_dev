-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 08-12-2022 a las 16:47:26
-- Versión del servidor: 5.6.51-cll-lve
-- Versión de PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_beerfactory`
--

-- --------------------------------------------------------
CREATE DATABASE bd_beerfactory;
USE bd_beerfactory;

/* CREATE USER 'su_bf'@'db' IDENTIFIED BY '-B^7{N(#,&^e';
GRANT ALL PRIVILEGES ON *. * TO 'su_bf'@'localhost';
GRANT ALL PRIVILEGES ON *. * TO 'su_bf'@'db';
GRANT ALL PRIVILEGES ON *. * TO 'su_bf'@'172.22.0.4'; */

--
-- Estructura de tabla para la tabla `botellas`
--

CREATE TABLE `botellas` (
  `id_imagen` int(11) NOT NULL,
  `nombre_imagen` varchar(255) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `ruta` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `botellas`
--

INSERT INTO `botellas` (`id_imagen`, `nombre_imagen`, `titulo`, `descripcion`, `ruta`) VALUES
(18, 'BF_Elementos_Cervezas-03.png', 'Botella', 'Es difícil tomar solo una,\r\n                        ¡llévate seis en botella!', 'recs/assets/images/Cerveceria/'),
(19, 'BF_Elementos-Cervezas-Paths_4.png', 'Growler', 'No te separes de ella, lleva tu cerveza favorita a todos lados en nuestro Growler de 1.89L', 'recs/assets/images/Cerveceria/'),
(20, 'BF_Elementos-Cervezas-Paths_5.png', 'Barril', 'El mejor pretexto para compartir con amigos es nuestro barril de 20, 50 y 58 L.', 'recs/assets/images/Cerveceria/');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calendario`
--

CREATE TABLE `calendario` (
  `id_evento` int(11) NOT NULL,
  `nombre_evento` varchar(300) NOT NULL,
  `lugar` varchar(300) NOT NULL,
  `fecha` varchar(300) NOT NULL,
  `hora` varchar(300) NOT NULL,
  `url_evento` varchar(300) NOT NULL,
  `descripcion` varchar(300) NOT NULL,
  `promocion` varchar(300) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `calendario`
--

INSERT INTO `calendario` (`id_evento`, `nombre_evento`, `lugar`, `fecha`, `hora`, `url_evento`, `descripcion`, `promocion`) VALUES
(96, 'COREA VS PORTUGAL', 'BEER FACTORY', 'VIERNES 2 DIC 2022', '10:00 HRS. ', '', 'ABRIMOS 9:00 HRS. ¡RESERVA EN TU SUCURSAL FAVORITA!', ''),
(95, 'JAPÓN VS ESPAÑA', 'BEER FACTORY', 'JUEVES 01 DIC 2022', '13:00 HRS.', '', '¡RESERVA EN TU SUCURSAL FAVORITA!', ''),
(94, 'ARABIA SAUDITA VS MÉXICO', 'BEER FACTORY ', 'MIÉRCOLES 30 NOVIEMBRE 2022', '13:00 HRS.', '', '¡RESERVA EN TU SUCURSAL FAVORITA!', 'POR CADA GOL DE MÉXICO, TE REGALAMOS UNA CERVEZA TRIBUNA DE 300 ML.'),
(93, 'PORTUGAL VS URUGUAY', 'BEER FACTORY', 'LUNES 28 NOVIEMBRE 2022', '13:00 HRS.', '', '¡RESERVA EN TU SUCURSAL FAVORITA!', ''),
(92, 'BRASIL VS SUIZA', 'BEER FACTORY ', 'LUNES 28 NOVIEMBRE 2022', '10:00 HRS.', '', 'ABRIMOS 9:00 HRS. ¡RESERVA EN TU SUCURSAL FAVORITA!', ''),
(91, 'ESPAÑA VS ALEMANIA', 'BEER FACTORY', 'DOMINGO 27 NOVIEMBRE 2022', '13:00 HRS.', '', '¡RESERVA EN TU SUCURSAL FAVORITA!', ''),
(90, 'ARGENTINA VS MÉXICO', 'BEER FACTORY', 'SÁBADO 26 NOVIEMBRE 2022', '13:00 HRS.', '', '¡RESERVA EN TU SUCURSAL FAVORITA!', 'POR CADA GOL DE MÉXICO, TE REGALAMOS UNA CERVEZA TRIBUNA DE 300 ML.'),
(89, 'FRANCIA VS DINAMARCA', 'BEER FACTORY', 'SÁBADO 26 NOVIEMBRE 2022', '10:00 HRS.', '', 'ABRIMOS 9:00 HRS. ¡RESERVA EN TU SUCURSAL FAVORITA!', ''),
(86, 'BÉLGICA VS CANADÁ', 'BEER FACTORY', 'MIÉRCOLES 23 NOVIEMBRE 2022', '13:00 HRS.', '', '¡RESERVA EN TU SUCURSAL FAVORITA!', ''),
(87, 'PORTUGAL VS GHANA', 'BEER FACTORY', 'JUEVES 24 NOVIEMBRE 2022', '10:00 HRS.', '', 'ABRIMOS 9:00 HRS. ¡RESERVA EN TU SUCURSAL FAVORITA!', ''),
(88, 'INGLATERRA VS ESTADOS UNIDOS', 'BEER FACTORY', 'VIERNES 25 NOVIEMBRE 2022', '13:00 HRS', '', '¡RESERVA EN TU SUCURSAL FAVORITA!', ''),
(85, 'ESPAÑA VS COSTA RICA', 'BEER FACTORY', 'MIÉRCOLES 23 NOVIEMBRE 2022', '10:00 HRS', '', 'ABRIMOS 9:00 HRS. ¡RESERVA EN TU SUCURSAL FAVORITA!', ''),
(84, 'FRANCIA VS AUSTRALIA', 'BEER FACTORY', 'MARTES 22 NOVIEMBRE 2022', '13:00 HRS', '', '¡RESERVA EN TU SUCURSAL FAVORITA!', ''),
(82, 'ESTADOS UNIDOS VS GALES', 'BEER FACTORY', 'MARTES 21 NOVIEMBRE 2022', '13:00 HRS', '', '¡RESERVA EN TU SUCURSAL FAVORITA!', ''),
(83, 'MÉXICO VS POLONIA', 'BEER FACTORY', 'MARTES 22 NOVIEMBRE 2022', '10:00 HRS.', '', 'ABRIMOS 8:30 HRS. ¡RESERVA EN TU SUCURSAL FAVORITA!', 'POR CADA GOL DE MÉXICO, TE REGALAMOS UNA CERVEZA TRIBUNA DE 300 ML.'),
(81, 'INAUGURACIÓN MUNDIAL 2022', 'BEER FACTORY', 'DOMINGO 20 NOVIEMBRE 2022', '10:00 HRS.', '', 'ABRIMOS 9:00 HRS. DISFRUTA DEL ARRANQUE DEL MUNDIAL EN TU SUCURSAL FAVORITA.', ''),
(97, 'CAMERÚN VS BRASIL', 'BEER FACTORY', 'VIERNES 2 DIC 2022', '13:00 HRS.', '', '¡RESERVA EN TU SUCURSAL FAVORITA!', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cards_inicio`
--

CREATE TABLE `cards_inicio` (
  `id_card` int(11) NOT NULL,
  `nombre_imagen_fondo` varchar(300) NOT NULL,
  `nombre_imagen_frontal` varchar(300) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `contenido` varchar(300) NOT NULL,
  `accion` varchar(300) NOT NULL,
  `imagen_completa` varchar(300) NOT NULL,
  `tipo_card` varchar(300) NOT NULL,
  `ruta_imagen_fondo` varchar(300) NOT NULL,
  `ruta_imagen_frontal` varchar(300) NOT NULL,
  `ruta_imagen_completa` varchar(300) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cards_inicio`
--

INSERT INTO `cards_inicio` (`id_card`, `nombre_imagen_fondo`, `nombre_imagen_frontal`, `titulo`, `contenido`, `accion`, `imagen_completa`, `tipo_card`, `ruta_imagen_fondo`, `ruta_imagen_frontal`, `ruta_imagen_completa`) VALUES
(83, '', 'Tribuna_900x500.jpg', 'ESTAMOS LISTOS PARA GRITAR GOOOOOL ', 'Prueba Tribuna, nuestra cerveza estilo Orange Sour para disfrutar de Qatar. ', '', 'Tribuna_900x5001.jpg', 'card-custom', 'recs/assets/images/', 'recs/assets/images/', 'recs/assets/images/'),
(84, '', 'Horarios_mundial_OCTAVOS_900x500.jpg', 'CALENDARIO QATAR EN BEER FACTORY®', 'Te presentamos nuestra transmisión de partidos y horarios de apertura. \r\n¡No olvides reservar en tu sucursal favorita!', '', 'Horarios_mundial_OCTAVOS_900x5001.jpg', 'card-custom', 'recs/assets/images/', 'recs/assets/images/', 'recs/assets/images/'),
(51, 'fondo2.png', 'texto_Dark_kitchen.png', '¡ENCUÉNTRANOS EN UBER EATS!', 'LINDAVISTA, CUICUILCO, TERRAZA COAPA, TEZONTLE, VILLA LATINA, VILLA COAPA, SATELITE, VALLE DORADO, PATIO SANTA FE, EDUARDO MOLINA, ZARAGOZA, CUAUTITLÁN, NARVARTE, VIADUCTO, TAXQUEÑA, PLAZA AEROPUERTO, ZONA ESMERALDA, CAMARONES, PATIO TLALPAN, REVOLUCIÓN, BARRANCA DEL MUERTO, COACALCO, BOSQUES DE ARA', '', 'Full_Dark_K.jpg', 'card-custom', 'recs/assets/images/', 'recs/assets/images/', 'recs/assets/images/'),
(80, '', 'cover_mundial_FB(1).jpg', '¡MUY PRONTO DISFRUTA DE LA SELECCIÓN BEER FACTORY®', '¡Tenemos todo para disfrutar los partidos! ', '', 'cover_HM_Twitter_(1).jpg', 'card-custom', 'recs/assets/images/', 'recs/assets/images/', 'recs/assets/images/'),
(63, '', '900X500.jpg', '¡ÚNETE A NUESTRO PROGRAMA DE LEALTAD!', 'Cada consumo acumula puntos que puedes redimir en tu siguiente visita a Beer Factory, a Toks, a Panda Express o a El Farolito. ¡Visítanos! El punto es que vuelvas. ', '', 'TÉRMINOS_Y_CONDICIONES_A_COMER_CLUB_VIGENTES_OCTUBRE_2022.pdf', 'card-custom', 'recs/assets/images/', 'recs/assets/images/', 'recs/assets/images/'),
(85, '', 'Jingle_beer_900x500.jpg', '¡¡¡YA LLEGÓ JINGLE BEER!!!', 'Una de nuestras cervezas más esperadas, no te quedes sin probarla. ??????', '', 'Jingle_beer_900x5001.jpg', 'card-custom', 'recs/assets/images/', 'recs/assets/images/', 'recs/assets/images/');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrousel_cervezas`
--

CREATE TABLE `carrousel_cervezas` (
  `id_imagen` int(11) NOT NULL,
  `nombre_imagen` varchar(300) NOT NULL,
  `ruta` varchar(300) NOT NULL,
  `tipo` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `carrousel_cervezas`
--

INSERT INTO `carrousel_cervezas` (`id_imagen`, `nombre_imagen`, `ruta`, `tipo`) VALUES
(25, 'Carresel_cervezas_1800x500_wannabe.jpg', 'recs/assets/images/Cervezas/', 'jpg'),
(26, 'Carresel_cervezas_1800x500_mil_culpas.jpg', 'recs/assets/images/Cervezas/', 'jpg'),
(27, 'Carresel_cervezas_1800x500_mediterranea.jpg', 'recs/assets/images/Cervezas/', 'jpg'),
(23, 'Carresel_cervezas_1800x500_santa_fe.jpg', 'recs/assets/images/Cervezas/', 'jpg'),
(24, 'Carresel_cervezas_1800x500_coyote.jpg', 'recs/assets/images/Cervezas/', 'jpg'),
(22, 'Carresel_cervezas_1800x500_luna_llena.jpg', 'recs/assets/images/Cervezas/', 'jpg'),
(28, 'Carresel_cervezas_1800x500_ave_de_mal_aguero.jpg', 'recs/assets/images/Cervezas/', 'jpg'),
(30, 'Carresel_cervezas_alivianada_1800x500.jpg', 'recs/assets/images/Cervezas/', 'jpg'),
(34, 'Carresel_cervezas_jingle_beer_1800x500.jpg', 'recs/assets/images/Cervezas/', 'jpg'),
(33, 'Carresel_cervezas_tribuna_1800x500.jpg', 'recs/assets/images/Cervezas/', 'jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cervezas`
--

CREATE TABLE `cervezas` (
  `id_cerveza` int(11) NOT NULL,
  `nombre_imagen_fondo` varchar(300) NOT NULL,
  `ruta_img_fondo` varchar(300) NOT NULL,
  `tipo_img_fondo` varchar(50) NOT NULL,
  `nombre_imagen_frontal` varchar(300) NOT NULL,
  `ruta_img_frontal` varchar(300) NOT NULL,
  `tipo_img_frontal` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cervezas`
--

INSERT INTO `cervezas` (`id_cerveza`, `nombre_imagen_fondo`, `ruta_img_fondo`, `tipo_img_fondo`, `nombre_imagen_frontal`, `ruta_img_frontal`, `tipo_img_frontal`) VALUES
(48, 'Cover_Ave_de_mal_aguero_1_1920x1080.jpg', 'recs/assets/images/Cervezas/', 'jpg', 'Cover_Ave_de_mal_aguero_2_1920x1080.jpg', 'recs/assets/images/Cervezas/', 'jpg'),
(49, 'Cover_mil_culpas1_1920x10801.jpg', 'recs/assets/images/Cervezas/', 'jpg', 'Cover_mil_culpas_2_1920x10801.jpg', 'recs/assets/images/Cervezas/', 'jpg'),
(45, 'Cover_mediterranea1_1920x1080.jpg', 'recs/assets/images/Cervezas/', 'jpg', 'Cover_mediterranea_2_1920x1080.jpg', 'recs/assets/images/Cervezas/', 'jpg'),
(44, 'Cover_wannabe_1_1920x1080.jpg', 'recs/assets/images/Cervezas/', 'jpg', 'Cover_wannabe_2_1920x1080.jpg', 'recs/assets/images/Cervezas/', 'jpg'),
(41, 'Cover_Luna_llena_1_1920x10801.jpg', 'recs/assets/images/Cervezas/', 'jpg', 'Cover_2_1920x10801.jpg', 'recs/assets/images/Cervezas/', 'jpg'),
(42, 'Cover_santa_fe_1_1920x1080.jpg', 'recs/assets/images/Cervezas/', 'jpg', 'Cover_santa_fe_2_1920x1080.jpg', 'recs/assets/images/Cervezas/', 'jpg'),
(43, 'Cover_coyote_1_1920x1080.jpg', 'recs/assets/images/Cervezas/', 'jpg', 'Cover_coyote_2_1920x1080.jpg', 'recs/assets/images/Cervezas/', 'jpg'),
(50, 'Cover_Alivianada_1_1920x10801.jpg', 'recs/assets/images/Cervezas/', 'jpg', 'Cover_Alivianada_2_1920x10801.jpg', 'recs/assets/images/Cervezas/', 'jpg'),
(57, 'Cover_2_jingle_beer_1920x1080.jpg', 'recs/assets/images/Cervezas/', 'jpg', 'Cover_1_jingle_beer_1920x1080.jpg', 'recs/assets/images/Cervezas/', 'jpg'),
(56, 'Cover_1_TRIBUNA_1920x10801.jpg', 'recs/assets/images/Cervezas/', 'jpg', 'Cover_2_TRIBUNA_1920x10801.jpg', 'recs/assets/images/Cervezas/', 'jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galeria_cervezas`
--

CREATE TABLE `galeria_cervezas` (
  `id_imagen` int(11) NOT NULL,
  `nombre` varchar(300) NOT NULL,
  `ruta` varchar(300) NOT NULL,
  `tipo` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `galeria_cervezas`
--

INSERT INTO `galeria_cervezas` (`id_imagen`, `nombre`, `ruta`, `tipo`) VALUES
(19, 'Santa_Fe_3.jpg', 'recs/assets/images/Cerveceria/', 'jpg'),
(17, 'Santa_Fe_1.jpg', 'recs/assets/images/Cerveceria/', 'jpg'),
(11, 'g_8_b.jpg', 'recs/assets/images/Cerveceria/', 'jpg'),
(12, 'g_9_b.jpg', 'recs/assets/images/Cerveceria/', 'jpg'),
(18, 'Santa_Fe_2.jpg', 'recs/assets/images/Cerveceria/', 'jpg'),
(20, 'Santa_Fe_4.jpg', 'recs/assets/images/Cerveceria/', 'jpg'),
(21, 'Santa_Fe_5.jpg', 'recs/assets/images/Cerveceria/', 'jpg'),
(22, '30629194_10156317093549628_2231042082124857344_o.jpg', 'recs/assets/images/Cerveceria/', 'jpg'),
(23, '30623787_10156317093519628_497005721343229952_o.jpg', 'recs/assets/images/Cerveceria/', 'jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historia`
--

CREATE TABLE `historia` (
  `id_imagen` int(11) NOT NULL,
  `nombre_imagen` varchar(100) NOT NULL,
  `ruta` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `historia`
--

INSERT INTO `historia` (`id_imagen`, `nombre_imagen`, `ruta`) VALUES
(1, 'Manifiesto_nosotros.jpg', '/recs/assets/images/Nosotros');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes_menus`
--

CREATE TABLE `imagenes_menus` (
  `id_imagen` int(11) NOT NULL,
  `id_menu` int(11) DEFAULT NULL,
  `nombre_imagen` varchar(300) NOT NULL,
  `ruta` varchar(300) NOT NULL,
  `tipo` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `imagenes_menus`
--

INSERT INTO `imagenes_menus` (`id_imagen`, `id_menu`, `nombre_imagen`, `ruta`, `tipo`) VALUES
(48, -1, 'ALITAS13.png', 'recs/assets/images/Menu/', 'jpg'),
(100, 1, '51.jpg', 'recs/assets/images/Menu/', 'jpg'),
(101, 1, '11_Delivery_2x1-jar.jpg', 'recs/assets/images/Menu/', 'jpg'),
(97, 1, '2.jpg', 'recs/assets/images/Menu/', 'jpg'),
(98, 1, '3.jpg', 'recs/assets/images/Menu/', 'jpg'),
(99, 1, '41_Delivery_2x1-cerveza.jpg', 'recs/assets/images/Menu/', 'jpg'),
(47, 2, 'Platon_Beer_Factory3.png', 'recs/assets/images/Menu/', 'jpg'),
(51, 6, 'Jugo_de_Carne_al_Estilo_del_Patron1.png', 'recs/assets/images/Menu/', 'jpg'),
(53, 6, 'Savage_Grill1.png', 'recs/assets/images/Menu/', 'jpg'),
(54, 6, 'Shrimp_Mac___Cheese1.png', 'recs/assets/images/Menu/', 'jpg'),
(92, -1, 'pizzasmasboneless.jpg', 'recs/assets/images/Menu/', 'jpg'),
(56, 7, 'Pepperoni___Mushrooms1.png', 'recs/assets/images/Menu/', 'jpg'),
(57, 7, 'ARGENTINA_PIZZA2.png', 'recs/assets/images/Menu/', 'jpg'),
(58, 7, 'Mamma’s_Chilli2.png', 'recs/assets/images/Menu/', 'jpg'),
(59, 8, 'Veggie_Burger1.png', 'recs/assets/images/Menu/', 'jpg'),
(62, 8, 'Grand_comanche_Burger2.png', 'recs/assets/images/Menu/', 'jpg'),
(63, 8, 'Blue_Cheese_Burger4.png', 'recs/assets/images/Menu/', 'jpg'),
(64, 8, 'Guac-A-Ring_Burger2.png', 'recs/assets/images/Menu/', 'jpg'),
(66, 8, 'Pibe_Burger2.png', 'recs/assets/images/Menu/', 'jpg'),
(67, 9, 'New_York_BF_F1.png', 'recs/assets/images/Menu/', 'jpg'),
(68, 9, 'Norteño_Steak1.png', 'recs/assets/images/Menu/', 'jpg'),
(71, 9, 'Mezquite_Chick2.png', 'recs/assets/images/Menu/', 'jpg'),
(73, 9, 'Ribs1.png', 'recs/assets/images/Menu/', 'jpg'),
(75, 11, 'Brownie_BF_F2.png', 'recs/assets/images/Menu/', 'jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maridaje`
--

CREATE TABLE `maridaje` (
  `id_imagen` int(11) NOT NULL,
  `nombre_imagen` text NOT NULL,
  `ruta` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `maridaje`
--

INSERT INTO `maridaje` (`id_imagen`, `nombre_imagen`, `ruta`) VALUES
(1, 'maridaje-011.png', 'recs/assets/images/Cervezas/');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menus`
--

CREATE TABLE `menus` (
  `id_menu` int(11) NOT NULL,
  `nombre_menu` varchar(300) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `menus`
--

INSERT INTO `menus` (`id_menu`, `nombre_menu`) VALUES
(1, 'UBER EATS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `procesos`
--

CREATE TABLE `procesos` (
  `id_imagen` int(11) NOT NULL,
  `nombre_imagen` varchar(100) NOT NULL,
  `ruta` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `procesos`
--

INSERT INTO `procesos` (`id_imagen`, `nombre_imagen`, `ruta`) VALUES
(1, '1_materias_primas1.png', 'recs/assets/images/Cerveceria/'),
(2, '2_molieda1.png', 'recs/assets/images/Cerveceria/'),
(3, '3_brewhouse1.png', 'recs/assets/images/Cerveceria/'),
(4, '4_fermentación.png', 'recs/assets/images/Cerveceria/'),
(5, '5_filtrado1.png', 'recs/assets/images/Cerveceria/'),
(6, '6_almacenado1.png', 'recs/assets/images/Cerveceria/'),
(8, '7_cerveza_terminada1.png', 'recs/assets/images/Cerveceria/');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `promociones`
--

CREATE TABLE `promociones` (
  `id_promocion` int(11) NOT NULL,
  `nombre_imagen` varchar(300) NOT NULL,
  `nombre_pdf` varchar(300) NOT NULL,
  `tipo_imagen` varchar(50) NOT NULL,
  `tipo_archivo` varchar(50) NOT NULL,
  `url_imagen` varchar(300) NOT NULL,
  `url_pdf` varchar(300) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `promociones`
--

INSERT INTO `promociones` (`id_promocion`, `nombre_imagen`, `nombre_pdf`, `tipo_imagen`, `tipo_archivo`, `url_imagen`, `url_pdf`) VALUES
(80, 'Lunes_Come_Gratis.png', 'LUNES_COME_GRATIS_2022.pdf', 'jpg', 'pdf', 'recs/assets/images/Promociones/', 'recs/assets/images/Promociones/'),
(88, 'a_comer.png', 'TÉRMINOS_Y_CONDICIONES_A_COMER_CLUB_VIGENTES_OCTUBRE_2022.pdf', 'jpg', 'pdf', 'recs/assets/images/Promociones/', 'recs/assets/images/Promociones/'),
(90, 'DOMINGO_800_x_450_(1).jpg', 'Domingo_Exóticas_restricciones_web.pdf', 'jpg', 'pdf', 'recs/assets/images/Promociones/', 'recs/assets/images/Promociones/'),
(91, 'TARROS_2_x_1_800_x_480.jpg', 'tarros_2x1_restricciones_web.pdf', 'jpg', 'pdf', 'recs/assets/images/Promociones/', 'recs/assets/images/Promociones/'),
(85, '2x16-35x490cumple_(1).jpg', 'CUMPLEANOS.pdf', 'jpg', 'pdf', 'recs/assets/images/Promociones/', 'recs/assets/images/Promociones/'),
(81, 'WEB_MIERCOLES.jpg', 'MIERCOLES_UPGRADE.pdf', 'jpg', 'pdf', 'recs/assets/images/Promociones/', 'recs/assets/images/Promociones/'),
(92, 'WEB_2X1_MARTES_Y_JUEVES1.jpg', 'MARTES_Y_JUEVES_2X1_restricciones_web.pdf', 'jpg', 'pdf', 'recs/assets/images/Promociones/', 'recs/assets/images/Promociones/');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ubicaciones`
--

CREATE TABLE `ubicaciones` (
  `id_ubicacion` int(11) NOT NULL,
  `nombre_ubicacion` varchar(300) NOT NULL,
  `direccion` varchar(300) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `dias` varchar(300) NOT NULL,
  `latitud` varchar(100) NOT NULL,
  `longitud` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ubicaciones`
--

INSERT INTO `ubicaciones` (`id_ubicacion`, `nombre_ubicacion`, `direccion`, `telefono`, `dias`, `latitud`, `longitud`) VALUES
(4, 'Cuicuilco', 'Plaza Cuicuilco Insurgentes Sur 3500 Peña Pobre, Del. Tlalpan 14060 Ciudad de México', '55 56.06.06.12', '¡ABIERTO! RESTAURANTE DE LUNES A JUEVES DE 12 PM A 12 AM, VIERNES Y SÁBADO DE 12 PM A 2 AM Y EL DOMINGO DE 12 PM A 10 PM. SERVICIO PARA LLEVAR O A DOMICILIO A TRAVÉS DE UBER EATS, DIDI FOOD Y RAPPI EN LOS MISMOS HORARIOS', '19.2985186', '-99.1819094'),
(3, 'Mundo E ', 'Mundo E, M. Avíla Camacho 1007 local 19A, San Lucas Tepetlacalco, 54056 Tlalnepantla, Méx.', '55 53.66.96.51', '¡ABIERTO! RESTAURANTE DE LUNES A JUEVES DE 12 PM A 12 AM, VIERNES Y SÁBADO DE 12 PM A 2 AM Y EL DOMINGO DE 12 PM A 10 PM. ', '19.5256884', '-99.2276088'),
(5, 'Santa Fe', 'Centro Comercial Santa Fe, Av. Vasco de Quiroga 3800, Lomas de Santa Fe, Cuajimalpa de Morelos, 01210 Ciudad de México, D.F.', '55 52.57.11.19', '¡ABIERTO! SERVICIO EN SUCURSAL Y PARA LLEVAR DE LUNES A JUEVES DE 12 PM A 12 AM, VIERNES Y SÁBADO DE 12 PM A 2 AM Y DOMINGO DE 12 PM A 10 PM. ¡TE ESPERAMOS!', '19.36155079189929', '-99.27352825115969'),
(6, 'Lindavista ', 'Av. Insurgentes Norte 1812, Gustavo A. Madero, Lindavista, 07300 Ciudad de México, D.F.', '55 55.77.37.11', '¡ABIERTO! RESTAURANTE DE LUNES A JUEVES DE 12 PM A 12 AM, VIERNES Y SÁBADO DE 12 PM A 2 AM Y EL DOMINGO DE 12 PM A 10 PM. SERVICIO PARA LLEVAR O A DOMICILIO A TRAVÉS DE UBER EATS, DIDI FOOD Y RAPPI EN LOS MISMOS HORARIOS', '19.487239', '-99.125063'),
(7, 'Tezontle', 'Av. Canal de Tezontle 1512, Área Federal Central de Abastos, Ciudad de México, CDMX.', '55 91.29.01.72', '¡YA ABRIMOS! TE ESPERAMOS DE LUNES A JUEVES DE 12PM A 11PM, VIERNES Y SABADO DE 12PM A 1AM Y DOMINGO DE 12PM A 10PM. TAMBIÉN CON SERVICIO A DOMICILIO A TRAVÉS DE UBER EATS, RAPPI Y DIDI FOOD DE LUNES A DOMINGO 12 HRS A ', '19.3847856', '-99.0825161'),
(14, 'Terraza Coapa', 'Calz Acoxpa 610, Coapa, Equipamiento Plaza Coapa 14390', '55.59.10.39.82', '¡ABIERTO! RESTAURANTE DE LUNES A JUEVES DE 12 PM A 12 AM, VIERNES Y SÁBADO DE 12 PM A 2 AM Y EL DOMINGO DE 12 PM A 10 PM. SERVICIO PARA LLEVAR O A DOMICILIO A TRAVÉS DE UBER EATS, DIDI FOOD Y RAPPI EN LOS MISMOS HORARIOS', '19.294030', '-99.126322');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `password` varchar(11) NOT NULL,
  `tipo` varchar(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `usuario`, `password`, `tipo`) VALUES
(1, 'admin', '1234', 'administrad'),
(4, 'admin_BF', '83$RF4to*', 'administrad');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `botellas`
--
ALTER TABLE `botellas`
  ADD PRIMARY KEY (`id_imagen`);

--
-- Indices de la tabla `calendario`
--
ALTER TABLE `calendario`
  ADD PRIMARY KEY (`id_evento`);

--
-- Indices de la tabla `cards_inicio`
--
ALTER TABLE `cards_inicio`
  ADD PRIMARY KEY (`id_card`);

--
-- Indices de la tabla `carrousel_cervezas`
--
ALTER TABLE `carrousel_cervezas`
  ADD PRIMARY KEY (`id_imagen`);

--
-- Indices de la tabla `cervezas`
--
ALTER TABLE `cervezas`
  ADD PRIMARY KEY (`id_cerveza`);

--
-- Indices de la tabla `galeria_cervezas`
--
ALTER TABLE `galeria_cervezas`
  ADD PRIMARY KEY (`id_imagen`);

--
-- Indices de la tabla `historia`
--
ALTER TABLE `historia`
  ADD PRIMARY KEY (`id_imagen`);

--
-- Indices de la tabla `imagenes_menus`
--
ALTER TABLE `imagenes_menus`
  ADD PRIMARY KEY (`id_imagen`),
  ADD KEY `fk_id_menu` (`id_menu`);

--
-- Indices de la tabla `maridaje`
--
ALTER TABLE `maridaje`
  ADD PRIMARY KEY (`id_imagen`);

--
-- Indices de la tabla `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indices de la tabla `procesos`
--
ALTER TABLE `procesos`
  ADD PRIMARY KEY (`id_imagen`);

--
-- Indices de la tabla `promociones`
--
ALTER TABLE `promociones`
  ADD PRIMARY KEY (`id_promocion`);

--
-- Indices de la tabla `ubicaciones`
--
ALTER TABLE `ubicaciones`
  ADD PRIMARY KEY (`id_ubicacion`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `botellas`
--
ALTER TABLE `botellas`
  MODIFY `id_imagen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `calendario`
--
ALTER TABLE `calendario`
  MODIFY `id_evento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT de la tabla `cards_inicio`
--
ALTER TABLE `cards_inicio`
  MODIFY `id_card` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT de la tabla `carrousel_cervezas`
--
ALTER TABLE `carrousel_cervezas`
  MODIFY `id_imagen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de la tabla `cervezas`
--
ALTER TABLE `cervezas`
  MODIFY `id_cerveza` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT de la tabla `galeria_cervezas`
--
ALTER TABLE `galeria_cervezas`
  MODIFY `id_imagen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `historia`
--
ALTER TABLE `historia`
  MODIFY `id_imagen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `imagenes_menus`
--
ALTER TABLE `imagenes_menus`
  MODIFY `id_imagen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT de la tabla `maridaje`
--
ALTER TABLE `maridaje`
  MODIFY `id_imagen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `menus`
--
ALTER TABLE `menus`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `procesos`
--
ALTER TABLE `procesos`
  MODIFY `id_imagen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `promociones`
--
ALTER TABLE `promociones`
  MODIFY `id_promocion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT de la tabla `ubicaciones`
--
ALTER TABLE `ubicaciones`
  MODIFY `id_ubicacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
