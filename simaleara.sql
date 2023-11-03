-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-11-2023 a las 12:14:58
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `simaleara`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `id_admin` int(11) NOT NULL,
  `usuario` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(64) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`id_admin`, `usuario`, `password`) VALUES
(1, 'martin', 'hash');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `Id_Categoria` int(11) NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `fallo` int(11) NOT NULL DEFAULT 0,
  `Id_Sector` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`Id_Categoria`, `descripcion`, `fallo`, `Id_Sector`) VALUES
(1, 'ADM. Contable', 0, 2),
(2, 'ADMIN RRHH', 0, 2),
(3, 'Analista Contable', 0, 2),
(4, 'Asistente de Marketing', 0, 2),
(5, 'Asistente Tecnico', 0, 2),
(6, 'Operador de Control,Admision y Permanencia', 0, 2),
(7, 'Auxiliar tecnico', 0, 2),
(8, 'Cadete', 0, 2),
(9, 'Cajero/a de maquina', 20, 2),
(10, 'Encargado de limpieza', 0, 2),
(11, 'Jefe Mesa de Bingo', 20, 2),
(12, 'Jefe Tecnico', 0, 2),
(13, 'Limpieza', 0, 2),
(14, 'Mantenimiento Edilicio', 0, 2),
(15, 'Mantenimiento Tecnico', 25, 2),
(16, 'Pagador/a', 12, 2),
(17, 'Promotor/a', 0, 2),
(18, 'Relaciones Públicas', 0, 2),
(19, 'Recepcionista', 0, 2),
(20, 'Recuento', 5, 2),
(21, 'Secretaria', 0, 2),
(22, 'Supervisor Tecnico', 0, 2),
(23, 'Supervisor/a', 0, 2),
(24, 'Tesorero/a', 0, 2),
(25, 'Valet Parking', 0, 2),
(26, 'Categoria 1 ', 3, 1),
(27, 'Categoria 2', 0, 1),
(28, 'Categoria 3', 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comunicados`
--

CREATE TABLE `comunicados` (
  `Id_Comunicado` int(11) NOT NULL,
  `Titulo_Comunicado` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `Direccion` text COLLATE utf8_spanish_ci NOT NULL,
  `Id_Sector` int(11) NOT NULL DEFAULT 2,
  `Id_Fecha` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `comunicados`
--

INSERT INTO `comunicados` (`Id_Comunicado`, `Titulo_Comunicado`, `Direccion`, `Id_Sector`, `Id_Fecha`) VALUES
(2, 'Participacion en Ganancias', 'ParticipacionGanancias.pdf', 2, 1),
(33, 'Primer tratativa paritarias 2023', 'comunicado_29-03[1].pdf', 2, 9),
(34, 'Resolucion Homolgacion', 'ResolucionHomologacion.pdf', 1, 21);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conceptos`
--

CREATE TABLE `conceptos` (
  `Id_Concepto` int(11) NOT NULL,
  `Nombre_Concepto` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Monto` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `conceptos`
--

INSERT INTO `conceptos` (`Id_Concepto`, `Nombre_Concepto`, `Monto`) VALUES
(1, 'Antiguedad', 1),
(2, 'Presentismo', 5),
(3, 'Jubiliacion', -11),
(4, 'Horas Extra 50%', 0.75),
(5, 'Horas Extra 100%', 1),
(6, 'Ley 19032', -3),
(7, 'Obra Social', -3),
(8, 'Aleara', -2),
(9, 'Dia No trabajado', 30),
(10, 'Ad. Puntualidad', 10),
(11, 'Presentismo', 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fechas`
--

CREATE TABLE `fechas` (
  `Id_Fecha` int(11) NOT NULL,
  `mes` tinyint(4) NOT NULL,
  `año` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `fechas`
--

INSERT INTO `fechas` (`Id_Fecha`, `mes`, `año`) VALUES
(1, 7, 2023),
(2, 8, 2023),
(3, 9, 2023),
(4, 1, 2023),
(5, 1, 2020),
(6, 1, 2025),
(7, 2, 2020),
(8, 7, 2025),
(9, 3, 2023),
(10, 9, 2025),
(11, 4, 2020),
(12, 5, 2020),
(13, 4, 2021),
(14, 5, 2021),
(15, 7, 2022),
(16, 8, 2022),
(17, 9, 2022),
(18, 2, 2021),
(19, 8, 2024),
(20, 6, 2024),
(21, 1, 2022),
(22, 2, 2023),
(23, 4, 2023),
(24, 5, 2023),
(25, 6, 2023),
(26, 12, 2020),
(27, 1, 2021),
(28, 11, 2023),
(29, 12, 2023),
(30, 10, 2023);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `no_remunerativo`
--

CREATE TABLE `no_remunerativo` (
  `Id_NRemunerativo` int(11) NOT NULL,
  `Nombre` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `monto` double NOT NULL,
  `Id_Fecha` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `no_remunerativo`
--

INSERT INTO `no_remunerativo` (`Id_NRemunerativo`, `Nombre`, `monto`, `Id_Fecha`) VALUES
(1, 'Suma Agosto 2023', 26066.3, 2),
(2, 'Suma NR Julio', 82798.83, 1),
(3, 'Suma NR Sept', 34576.18, 3),
(4, 'NR 2023 cajero', 35946.4, 4),
(5, 'Alimentacion ', 900, 4),
(202, 'Alimentacion', 900, 4),
(203, 'Alimentacion', 900, 4),
(204, 'Alimentacion', 900, 4),
(205, 'Alimentacion', 900, 4),
(206, 'Alimentacion', 900, 4),
(207, 'Alimentacion', 900, 4),
(208, 'Alimentacion', 900, 4),
(209, 'Alimentacion', 900, 4),
(210, 'Alimentacion', 900, 4),
(211, 'Alimentacion', 900, 4),
(212, 'Alimentacion', 900, 4),
(213, 'Alimentacion', 900, 4),
(214, 'Alimentacion', 900, 4),
(215, 'Alimentacion', 900, 4),
(216, 'Alimentacion', 900, 4),
(217, 'Alimentacion', 900, 4),
(218, 'Alimentacion', 900, 4),
(219, 'Alimentacion', 900, 4),
(220, 'Alimentacion', 900, 4),
(221, 'Alimentacion', 900, 4),
(222, 'Alimentacion', 900, 4),
(223, 'Alimentacion', 900, 4),
(224, 'Alimentacion', 900, 4),
(225, 'Alimentacion', 900, 4),
(226, 'Alimentacion', 900, 4),
(227, 'Alimentacion', 900, 22),
(228, 'Alimentacion', 900, 22),
(229, 'Alimentacion', 900, 22),
(230, 'Alimentacion', 900, 22),
(231, 'Alimentacion', 900, 22),
(232, 'Alimentacion', 900, 22),
(233, 'Alimentacion', 900, 22),
(234, 'Alimentacion', 900, 22),
(235, 'Alimentacion', 900, 22),
(236, 'Alimentacion', 900, 22),
(237, 'Alimentacion', 900, 22),
(238, 'Alimentacion', 900, 22),
(239, 'Alimentacion', 900, 22),
(240, 'Alimentacion', 900, 22),
(241, 'Alimentacion', 900, 22),
(242, 'Alimentacion', 900, 22),
(243, 'Alimentacion', 900, 22),
(244, 'Alimentacion', 900, 22),
(245, 'Alimentacion', 900, 22),
(246, 'Alimentacion', 900, 22),
(247, 'Alimentacion', 900, 22),
(248, 'Alimentacion', 900, 22),
(249, 'Alimentacion', 900, 22),
(250, 'Alimentacion', 900, 22),
(251, 'Alimentacion', 900, 22),
(252, 'Alimentacion', 900, 9),
(253, 'Alimentacion', 900, 9),
(254, 'Alimentacion', 900, 9),
(255, 'Alimentacion', 900, 9),
(256, 'Alimentacion', 900, 9),
(257, 'Alimentacion', 900, 9),
(258, 'Alimentacion', 900, 9),
(259, 'Alimentacion', 900, 9),
(260, 'Alimentacion', 900, 9),
(261, 'Alimentacion', 900, 9),
(262, 'Alimentacion', 900, 9),
(263, 'Alimentacion', 900, 9),
(264, 'Alimentacion', 900, 9),
(265, 'Alimentacion', 900, 9),
(266, 'Alimentacion', 900, 9),
(267, 'Alimentacion', 900, 9),
(268, 'Alimentacion', 900, 9),
(269, 'Alimentacion', 900, 9),
(270, 'Alimentacion', 900, 9),
(271, 'Alimentacion', 900, 9),
(272, 'Alimentacion', 900, 9),
(273, 'Alimentacion', 900, 9),
(274, 'Alimentacion', 900, 9),
(275, 'Alimentacion', 900, 9),
(276, 'Alimentacion', 900, 9),
(277, 'Alimentacion', 900, 23),
(278, 'Alimentacion', 900, 23),
(279, 'Alimentacion', 900, 23),
(280, 'Alimentacion', 900, 23),
(281, 'Alimentacion', 900, 23),
(282, 'Alimentacion', 900, 23),
(283, 'Alimentacion', 900, 23),
(284, 'Alimentacion', 900, 23),
(285, 'Alimentacion', 900, 23),
(286, 'Alimentacion', 900, 23),
(287, 'Alimentacion', 900, 23),
(288, 'Alimentacion', 900, 23),
(289, 'Alimentacion', 900, 23),
(290, 'Alimentacion', 900, 23),
(291, 'Alimentacion', 900, 23),
(292, 'Alimentacion', 900, 23),
(293, 'Alimentacion', 900, 23),
(294, 'Alimentacion', 900, 23),
(295, 'Alimentacion', 900, 23),
(296, 'Alimentacion', 900, 23),
(297, 'Alimentacion', 900, 23),
(298, 'Alimentacion', 900, 23),
(299, 'Alimentacion', 900, 23),
(300, 'Alimentacion', 900, 23),
(301, 'Alimentacion', 900, 23),
(302, 'Alimentacion', 900, 24),
(303, 'Alimentacion', 900, 24),
(304, 'Alimentacion', 900, 24),
(305, 'Alimentacion', 900, 24),
(306, 'Alimentacion', 900, 24),
(307, 'Alimentacion', 900, 24),
(308, 'Alimentacion', 900, 24),
(309, 'Alimentacion', 900, 24),
(310, 'Alimentacion', 900, 24),
(311, 'Alimentacion', 900, 24),
(312, 'Alimentacion', 900, 24),
(313, 'Alimentacion', 900, 24),
(314, 'Alimentacion', 900, 24),
(315, 'Alimentacion', 900, 24),
(316, 'Alimentacion', 900, 24),
(317, 'Alimentacion', 900, 24),
(318, 'Alimentacion', 900, 24),
(319, 'Alimentacion', 900, 24),
(320, 'Alimentacion', 900, 24),
(321, 'Alimentacion', 900, 24),
(322, 'Alimentacion', 900, 24),
(323, 'Alimentacion', 900, 24),
(324, 'Alimentacion', 900, 24),
(325, 'Alimentacion', 900, 24),
(326, 'Alimentacion', 900, 24),
(327, 'Alimentacion', 900, 25),
(328, 'Alimentacion', 900, 25),
(329, 'Alimentacion', 900, 25),
(330, 'Alimentacion', 900, 25),
(331, 'Alimentacion', 900, 25),
(332, 'Alimentacion', 900, 25),
(333, 'Alimentacion', 900, 25),
(334, 'Alimentacion', 900, 25),
(335, 'Alimentacion', 900, 25),
(336, 'Alimentacion', 900, 25),
(337, 'Alimentacion', 900, 25),
(338, 'Alimentacion', 900, 25),
(339, 'Alimentacion', 900, 25),
(340, 'Alimentacion', 900, 25),
(341, 'Alimentacion', 900, 25),
(342, 'Alimentacion', 900, 25),
(343, 'Alimentacion', 900, 25),
(344, 'Alimentacion', 900, 25),
(345, 'Alimentacion', 900, 25),
(346, 'Alimentacion', 900, 25),
(347, 'Alimentacion', 900, 25),
(348, 'Alimentacion', 900, 25),
(349, 'Alimentacion', 900, 25),
(350, 'Alimentacion', 900, 25),
(351, 'Alimentacion', 900, 25),
(352, 'Alimentacion', 1200, 1),
(353, 'Alimentacion', 1200, 1),
(354, 'Alimentacion', 1200, 1),
(355, 'Alimentacion', 1200, 1),
(356, 'Alimentacion', 1200, 1),
(357, 'Alimentacion', 1200, 1),
(358, 'Alimentacion', 1200, 1),
(359, 'Alimentacion', 1200, 1),
(360, 'Alimentacion', 1200, 1),
(361, 'Alimentacion', 1200, 1),
(362, 'Alimentacion', 1200, 1),
(363, 'Alimentacion', 1200, 1),
(364, 'Alimentacion', 1200, 1),
(365, 'Alimentacion', 1200, 1),
(366, 'Alimentacion', 1200, 1),
(367, 'Alimentacion', 1200, 1),
(368, 'Alimentacion', 1200, 1),
(369, 'Alimentacion', 1200, 1),
(370, 'Alimentacion', 1200, 1),
(371, 'Alimentacion', 1200, 1),
(372, 'Alimentacion', 1200, 1),
(373, 'Alimentacion', 1200, 1),
(374, 'Alimentacion', 1200, 1),
(375, 'Alimentacion', 1200, 1),
(376, 'Alimentacion', 1200, 1),
(377, 'Alimentacion', 1200, 2),
(378, 'Alimentacion', 1200, 2),
(379, 'Alimentacion', 1200, 2),
(380, 'Alimentacion', 1200, 2),
(381, 'Alimentacion', 1200, 2),
(382, 'Alimentacion', 1200, 2),
(383, 'Alimentacion', 1200, 2),
(384, 'Alimentacion', 1200, 2),
(385, 'Alimentacion', 1200, 2),
(386, 'Alimentacion', 1200, 2),
(387, 'Alimentacion', 1200, 2),
(388, 'Alimentacion', 1200, 2),
(389, 'Alimentacion', 1200, 2),
(390, 'Alimentacion', 1200, 2),
(391, 'Alimentacion', 1200, 2),
(392, 'Alimentacion', 1200, 2),
(393, 'Alimentacion', 1200, 2),
(394, 'Alimentacion', 1200, 2),
(395, 'Alimentacion', 1200, 2),
(396, 'Alimentacion', 1200, 2),
(397, 'Alimentacion', 1200, 2),
(398, 'Alimentacion', 1200, 2),
(399, 'Alimentacion', 1200, 2),
(400, 'Alimentacion', 1200, 2),
(401, 'Alimentacion', 1200, 2),
(402, 'Alimentacion', 1200, 3),
(403, 'Alimentacion', 1200, 3),
(404, 'Alimentacion', 1200, 3),
(405, 'Alimentacion', 1200, 3),
(406, 'Alimentacion', 1200, 3),
(407, 'Alimentacion', 1200, 3),
(408, 'Alimentacion', 1200, 3),
(409, 'Alimentacion', 1200, 3),
(410, 'Alimentacion', 1200, 3),
(411, 'Alimentacion', 1200, 3),
(412, 'Alimentacion', 1200, 3),
(413, 'Alimentacion', 1200, 3),
(414, 'Alimentacion', 1200, 3),
(415, 'Alimentacion', 1200, 3),
(416, 'Alimentacion', 1200, 3),
(417, 'Alimentacion', 1200, 3),
(418, 'Alimentacion', 1200, 3),
(419, 'Alimentacion', 1200, 3),
(420, 'Alimentacion', 1200, 3),
(421, 'Alimentacion', 1200, 3),
(422, 'Alimentacion', 1200, 3),
(423, 'Alimentacion', 1200, 3),
(424, 'Alimentacion', 1200, 3),
(425, 'Alimentacion', 1200, 3),
(426, 'Alimentacion', 1200, 3),
(427, 'Alimentacion', 1200, 30),
(428, 'Alimentacion', 1200, 30),
(429, 'Alimentacion', 1200, 30),
(430, 'Alimentacion', 1200, 30),
(431, 'Alimentacion', 1200, 30),
(432, 'Alimentacion', 1200, 30),
(433, 'Alimentacion', 1200, 30),
(434, 'Alimentacion', 1200, 30),
(435, 'Alimentacion', 1200, 30),
(436, 'Alimentacion', 1200, 30),
(437, 'Alimentacion', 1200, 30),
(438, 'Alimentacion', 1200, 30),
(439, 'Alimentacion', 1200, 30),
(440, 'Alimentacion', 1200, 30),
(441, 'Alimentacion', 1200, 30),
(442, 'Alimentacion', 1200, 30),
(443, 'Alimentacion', 1200, 30),
(444, 'Alimentacion', 1200, 30),
(445, 'Alimentacion', 1200, 30),
(446, 'Alimentacion', 1200, 30),
(447, 'Alimentacion', 1200, 30),
(448, 'Alimentacion', 1200, 30),
(449, 'Alimentacion', 1200, 30),
(450, 'Alimentacion', 1200, 30),
(451, 'Alimentacion', 1200, 30);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sector`
--

CREATE TABLE `sector` (
  `Id_Sector` int(11) NOT NULL,
  `Nombre_Sector` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `sector`
--

INSERT INTO `sector` (`Id_Sector`, `Nombre_Sector`) VALUES
(1, 'Loteria'),
(2, 'Bingo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `se_acordo`
--

CREATE TABLE `se_acordo` (
  `Id_Concepto` int(11) NOT NULL,
  `Id_sector` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `se_acordo`
--

INSERT INTO `se_acordo` (`Id_Concepto`, `Id_sector`) VALUES
(1, 1),
(1, 2),
(2, 2),
(3, 1),
(3, 2),
(4, 1),
(5, 1),
(6, 1),
(6, 2),
(7, 1),
(7, 2),
(8, 1),
(8, 2),
(10, 2),
(11, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `se_asigna`
--

CREATE TABLE `se_asigna` (
  `Id_Categoria` int(11) NOT NULL,
  `Id_NRemunerativo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `se_asigna`
--

INSERT INTO `se_asigna` (`Id_Categoria`, `Id_NRemunerativo`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 202),
(1, 227),
(1, 252),
(1, 277),
(1, 302),
(1, 327),
(1, 352),
(1, 377),
(1, 402),
(1, 427),
(2, 203),
(2, 228),
(2, 253),
(2, 278),
(2, 303),
(2, 328),
(2, 353),
(2, 378),
(2, 403),
(2, 428),
(3, 204),
(3, 229),
(3, 254),
(3, 279),
(3, 304),
(3, 329),
(3, 354),
(3, 379),
(3, 404),
(3, 429),
(4, 205),
(4, 230),
(4, 255),
(4, 280),
(4, 305),
(4, 330),
(4, 355),
(4, 380),
(4, 405),
(4, 430),
(5, 206),
(5, 231),
(5, 256),
(5, 281),
(5, 306),
(5, 331),
(5, 356),
(5, 381),
(5, 406),
(5, 431),
(6, 207),
(6, 232),
(6, 257),
(6, 282),
(6, 307),
(6, 332),
(6, 357),
(6, 382),
(6, 407),
(6, 432),
(7, 208),
(7, 233),
(7, 258),
(7, 283),
(7, 308),
(7, 333),
(7, 358),
(7, 383),
(7, 408),
(7, 433),
(8, 209),
(8, 234),
(8, 259),
(8, 284),
(8, 309),
(8, 334),
(8, 359),
(8, 384),
(8, 409),
(8, 434),
(9, 4),
(9, 5),
(9, 210),
(9, 235),
(9, 260),
(9, 285),
(9, 310),
(9, 335),
(9, 360),
(9, 385),
(9, 410),
(9, 435),
(10, 211),
(10, 236),
(10, 261),
(10, 286),
(10, 311),
(10, 336),
(10, 361),
(10, 386),
(10, 411),
(10, 436),
(11, 212),
(11, 237),
(11, 262),
(11, 287),
(11, 312),
(11, 337),
(11, 362),
(11, 387),
(11, 412),
(11, 437),
(12, 213),
(12, 238),
(12, 263),
(12, 288),
(12, 313),
(12, 338),
(12, 363),
(12, 388),
(12, 413),
(12, 438),
(13, 214),
(13, 239),
(13, 264),
(13, 289),
(13, 314),
(13, 339),
(13, 364),
(13, 389),
(13, 414),
(13, 439),
(14, 215),
(14, 240),
(14, 265),
(14, 290),
(14, 315),
(14, 340),
(14, 365),
(14, 390),
(14, 415),
(14, 440),
(15, 216),
(15, 241),
(15, 266),
(15, 291),
(15, 316),
(15, 341),
(15, 366),
(15, 391),
(15, 416),
(15, 441),
(16, 217),
(16, 242),
(16, 267),
(16, 292),
(16, 317),
(16, 342),
(16, 367),
(16, 392),
(16, 417),
(16, 442),
(17, 218),
(17, 243),
(17, 268),
(17, 293),
(17, 318),
(17, 343),
(17, 368),
(17, 393),
(17, 418),
(17, 443),
(18, 219),
(18, 244),
(18, 269),
(18, 294),
(18, 319),
(18, 344),
(18, 369),
(18, 394),
(18, 419),
(18, 444),
(19, 220),
(19, 245),
(19, 270),
(19, 295),
(19, 320),
(19, 345),
(19, 370),
(19, 395),
(19, 420),
(19, 445),
(20, 221),
(20, 246),
(20, 271),
(20, 296),
(20, 321),
(20, 346),
(20, 371),
(20, 396),
(20, 421),
(20, 446),
(21, 222),
(21, 247),
(21, 272),
(21, 297),
(21, 322),
(21, 347),
(21, 372),
(21, 397),
(21, 422),
(21, 447),
(22, 223),
(22, 248),
(22, 273),
(22, 298),
(22, 323),
(22, 348),
(22, 373),
(22, 398),
(22, 423),
(22, 448),
(23, 224),
(23, 249),
(23, 274),
(23, 299),
(23, 324),
(23, 349),
(23, 374),
(23, 399),
(23, 424),
(23, 449),
(24, 225),
(24, 250),
(24, 275),
(24, 300),
(24, 325),
(24, 350),
(24, 375),
(24, 400),
(24, 425),
(24, 450),
(25, 226),
(25, 251),
(25, 276),
(25, 301),
(25, 326),
(25, 351),
(25, 376),
(25, 401),
(25, 426),
(25, 451);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sueldo_basico`
--

CREATE TABLE `sueldo_basico` (
  `Id_Sueldo` int(11) NOT NULL,
  `Sueldo_Basico` double NOT NULL,
  `Id_Categoria` int(11) NOT NULL,
  `Id_fecha` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `sueldo_basico`
--

INSERT INTO `sueldo_basico` (`Id_Sueldo`, `Sueldo_Basico`, `Id_Categoria`, `Id_fecha`) VALUES
(1, 150000, 1, 1),
(2, 310000.77, 1, 2),
(3, 315000.07, 1, 3),
(4, 103345.9, 9, 4),
(5, 150000, 26, 4),
(33, 150000, 1, 4),
(34, 150000, 1, 22),
(35, 150000, 1, 9),
(36, 150000, 1, 23),
(37, 150000, 1, 24),
(38, 150000, 1, 25),
(39, 500, 25, 4),
(40, 100, 2, 4),
(41, 150, 2, 22),
(42, 300, 2, 9),
(43, 200000, 26, 22),
(44, 200000, 26, 9),
(45, 300000, 26, 23),
(46, 300000, 26, 24),
(47, 300000, 26, 25),
(48, 300000, 26, 1),
(49, 320000, 1, 28),
(50, 320000, 1, 29);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`Id_Categoria`),
  ADD KEY `Pertenece` (`Id_Sector`);

--
-- Indices de la tabla `comunicados`
--
ALTER TABLE `comunicados`
  ADD PRIMARY KEY (`Id_Comunicado`),
  ADD KEY `Informan` (`Id_Sector`),
  ADD KEY `divulgan` (`Id_Fecha`);

--
-- Indices de la tabla `conceptos`
--
ALTER TABLE `conceptos`
  ADD PRIMARY KEY (`Id_Concepto`);

--
-- Indices de la tabla `fechas`
--
ALTER TABLE `fechas`
  ADD PRIMARY KEY (`Id_Fecha`);

--
-- Indices de la tabla `no_remunerativo`
--
ALTER TABLE `no_remunerativo`
  ADD PRIMARY KEY (`Id_NRemunerativo`),
  ADD KEY `Se otorga` (`Id_Fecha`);

--
-- Indices de la tabla `sector`
--
ALTER TABLE `sector`
  ADD PRIMARY KEY (`Id_Sector`);

--
-- Indices de la tabla `se_acordo`
--
ALTER TABLE `se_acordo`
  ADD PRIMARY KEY (`Id_Concepto`,`Id_sector`),
  ADD KEY `Se_Acrodo_Sector` (`Id_sector`);

--
-- Indices de la tabla `se_asigna`
--
ALTER TABLE `se_asigna`
  ADD PRIMARY KEY (`Id_Categoria`,`Id_NRemunerativo`),
  ADD KEY `NRemunerativo` (`Id_NRemunerativo`);

--
-- Indices de la tabla `sueldo_basico`
--
ALTER TABLE `sueldo_basico`
  ADD PRIMARY KEY (`Id_Sueldo`),
  ADD KEY `Cobra` (`Id_Categoria`),
  ADD KEY `Incrementa` (`Id_fecha`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administradores`
--
ALTER TABLE `administradores`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `Id_Categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT de la tabla `comunicados`
--
ALTER TABLE `comunicados`
  MODIFY `Id_Comunicado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de la tabla `conceptos`
--
ALTER TABLE `conceptos`
  MODIFY `Id_Concepto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `fechas`
--
ALTER TABLE `fechas`
  MODIFY `Id_Fecha` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `no_remunerativo`
--
ALTER TABLE `no_remunerativo`
  MODIFY `Id_NRemunerativo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=452;

--
-- AUTO_INCREMENT de la tabla `sector`
--
ALTER TABLE `sector`
  MODIFY `Id_Sector` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `sueldo_basico`
--
ALTER TABLE `sueldo_basico`
  MODIFY `Id_Sueldo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD CONSTRAINT `Pertenece` FOREIGN KEY (`Id_Sector`) REFERENCES `sector` (`Id_Sector`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `comunicados`
--
ALTER TABLE `comunicados`
  ADD CONSTRAINT `Informan` FOREIGN KEY (`Id_Sector`) REFERENCES `sector` (`Id_Sector`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `divulgan` FOREIGN KEY (`Id_Fecha`) REFERENCES `fechas` (`id_fecha`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `no_remunerativo`
--
ALTER TABLE `no_remunerativo`
  ADD CONSTRAINT `Se otorga` FOREIGN KEY (`Id_Fecha`) REFERENCES `fechas` (`id_fecha`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `se_acordo`
--
ALTER TABLE `se_acordo`
  ADD CONSTRAINT `Se_Acordo_Concepto` FOREIGN KEY (`Id_Concepto`) REFERENCES `conceptos` (`Id_Concepto`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `Se_Acrodo_Sector` FOREIGN KEY (`Id_sector`) REFERENCES `sector` (`Id_Sector`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `se_asigna`
--
ALTER TABLE `se_asigna`
  ADD CONSTRAINT `Categoria` FOREIGN KEY (`Id_Categoria`) REFERENCES `categorias` (`Id_Categoria`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `NRemunerativo` FOREIGN KEY (`Id_NRemunerativo`) REFERENCES `no_remunerativo` (`Id_NRemunerativo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `sueldo_basico`
--
ALTER TABLE `sueldo_basico`
  ADD CONSTRAINT `Cobra` FOREIGN KEY (`Id_Categoria`) REFERENCES `categorias` (`Id_Categoria`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Incrementa` FOREIGN KEY (`Id_fecha`) REFERENCES `fechas` (`id_fecha`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
