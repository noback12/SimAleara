-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-07-2023 a las 16:17:15
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
-- Base de datos: `simrecibo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_cat` int(11) NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `fallo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_cat`, `descripcion`, `fallo`) VALUES
(1, 'ADM. Contable', 0),
(2, 'ADMIN RRHH', 0),
(3, 'Analista Contable', 0),
(4, 'Asistente de Marketing', 0),
(5, 'Asistente Tecnico', 0),
(6, 'Operador de Control,Admision y Permanencia', 0),
(7, 'Auxiliar tecnico', 0),
(8, 'Cadete', 0),
(9, 'Cajero/a de maquina', 20),
(10, 'Encargado de limpieza', 0),
(11, 'Jefe Mesa de Bingo', 0),
(12, 'Jefe Tecnico', 0),
(13, 'Limpieza', 0),
(14, 'Mantenimiento Edilicio', 0),
(15, 'Mantenimiento Tecnico', 0),
(16, 'Pagador/a', 12),
(17, 'Promotor/a', 0),
(18, 'Relaciones Públicas', 0),
(19, 'Recepcionista', 0),
(20, 'Recuento', 0),
(21, 'Secretaria', 0),
(22, 'Supervisor Tecnico', 0),
(23, 'Supervisor/a', 0),
(24, 'Tesorero/a', 0),
(25, 'Valet Parking', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `escala_salarial`
--

CREATE TABLE `escala_salarial` (
  `id_sal` int(11) NOT NULL,
  `basico` double NOT NULL,
  `no remunerativo` double DEFAULT NULL,
  `id_fecha` int(11) NOT NULL,
  `id_cat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `escala_salarial`
--

INSERT INTO `escala_salarial` (`id_sal`, `basico`, `no remunerativo`, `id_fecha`, `id_cat`) VALUES
(1, 173104.89, 49589.73, 1, 5),
(2, 207083.04, 15611.58, 2, 5),
(3, 222694.62, 0, 3, 5),
(4, 155918.18, 44580.27, 1, 17),
(5, 186163.92, 14034.53, 2, 17),
(6, 200198.45, 0, 3, 17);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fecha`
--

CREATE TABLE `fecha` (
  `id_fecha` int(11) NOT NULL,
  `mes` tinyint(4) NOT NULL,
  `año` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `fecha`
--

INSERT INTO `fecha` (`id_fecha`, `mes`, `año`) VALUES
(1, 7, 2023),
(2, 8, 2023),
(3, 9, 2023);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_cat`);

--
-- Indices de la tabla `escala_salarial`
--
ALTER TABLE `escala_salarial`
  ADD PRIMARY KEY (`id_sal`);

--
-- Indices de la tabla `fecha`
--
ALTER TABLE `fecha`
  ADD PRIMARY KEY (`id_fecha`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_cat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `escala_salarial`
--
ALTER TABLE `escala_salarial`
  MODIFY `id_sal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `fecha`
--
ALTER TABLE `fecha`
  MODIFY `id_fecha` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
