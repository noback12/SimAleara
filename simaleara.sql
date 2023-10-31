-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-10-2023 a las 10:19:15
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
(11, 'Jefe Mesa de Bingo', 0, 2),
(12, 'Jefe Tecnico', 0, 2),
(13, 'Limpieza', 0, 2),
(14, 'Mantenimiento Edilicio', 0, 2),
(15, 'Mantenimiento Tecnico', 0, 2),
(16, 'Pagador/a', 12, 2),
(17, 'Promotor/a', 0, 2),
(18, 'Relaciones Públicas', 0, 2),
(19, 'Recepcionista', 0, 2),
(20, 'Recuento', 0, 2),
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
(5, 'Horas extra 100%', 1),
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
(4, 1, 2023);

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
(5, 'Alimentacion ', 900, 4);

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
(9, 4),
(9, 5);

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
(1, 289029.24, 1, 1),
(2, 345761.77, 1, 2),
(3, 371828.07, 1, 3),
(4, 103345.9, 9, 4),
(5, 100000, 26, 4);

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
  MODIFY `Id_Categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `conceptos`
--
ALTER TABLE `conceptos`
  MODIFY `Id_Concepto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `fechas`
--
ALTER TABLE `fechas`
  MODIFY `Id_Fecha` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `no_remunerativo`
--
ALTER TABLE `no_remunerativo`
  MODIFY `Id_NRemunerativo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `sector`
--
ALTER TABLE `sector`
  MODIFY `Id_Sector` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `sueldo_basico`
--
ALTER TABLE `sueldo_basico`
  MODIFY `Id_Sueldo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD CONSTRAINT `Pertenece` FOREIGN KEY (`Id_Sector`) REFERENCES `sector` (`Id_Sector`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
  ADD CONSTRAINT `Categoria` FOREIGN KEY (`Id_Categoria`) REFERENCES `categorias` (`Id_Categoria`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `NRemunerativo` FOREIGN KEY (`Id_NRemunerativo`) REFERENCES `no_remunerativo` (`Id_NRemunerativo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `sueldo_basico`
--
ALTER TABLE `sueldo_basico`
  ADD CONSTRAINT `Cobra` FOREIGN KEY (`Id_Categoria`) REFERENCES `categorias` (`Id_Categoria`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `Incrementa` FOREIGN KEY (`Id_fecha`) REFERENCES `fechas` (`id_fecha`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
