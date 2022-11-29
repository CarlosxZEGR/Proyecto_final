-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-11-2022 a las 18:47:30
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `aiepgaming1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `game`
--

CREATE TABLE `game` (
  `id_game` int(1) NOT NULL,
  `game_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `game`
--

INSERT INTO `game` (`id_game`, `game_name`) VALUES
(0, 'Counter Strike'),
(1, 'League Of Leguends'),
(2, 'Valorant');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `party`
--

CREATE TABLE `party` (
  `id_party` int(50) NOT NULL,
  `host` int(10) NOT NULL,
  `name` varchar(40) NOT NULL,
  `game_mode` varchar(40) NOT NULL,
  `fecha` date NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `game` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `party`
--

INSERT INTO `party` (`id_party`, `host`, `name`, `game_mode`, `fecha`, `descripcion`, `game`) VALUES
(4, 1, '6786786Y', 'Desactivar la bomba (Clasificatorias)', '2022-11-15', 'DFGHHFGGFH', 0),
(5, 1, '6786786Y', 'Desactivar la bomba (Clasificatorias)', '2022-11-15', 'DFGHHFGGFH', 0),
(6, 1, 'JURGO', 'DeathMatch', '2023-02-10', 'HOLA', 0),
(7, 1, 'DGHFGJ', 'Desactivar la bomba (Clasificatorias)', '2022-12-27', '46788855', 0),
(8, 1, 'KLKKL', 'DeathMatch', '2022-11-09', 'ASF', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `type_user`
--

CREATE TABLE `type_user` (
  `id_type` int(1) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `type_user`
--

INSERT INTO `type_user` (`id_type`, `type`) VALUES
(0, 'Administrador'),
(1, 'usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(10) NOT NULL,
  `user` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `gmail` varchar(30) NOT NULL,
  `type_user` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `user`, `password`, `gmail`, `type_user`) VALUES
(1, '123', '123', 'carlosgomezr.2002@gmail.com', 0),
(2, '111', '111', '111', 1),
(3, '123', '123', 'carlos', 1),
(4, '123', '123', '123', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `waiting_list`
--

CREATE TABLE `waiting_list` (
  `id_list` int(100) NOT NULL,
  `id_user` int(10) NOT NULL,
  `id_party` int(40) NOT NULL,
  `id_game` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`id_game`);

--
-- Indices de la tabla `party`
--
ALTER TABLE `party`
  ADD PRIMARY KEY (`id_party`),
  ADD KEY `host` (`host`),
  ADD KEY `game` (`game`);

--
-- Indices de la tabla `type_user`
--
ALTER TABLE `type_user`
  ADD PRIMARY KEY (`id_type`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `type_user` (`type_user`);

--
-- Indices de la tabla `waiting_list`
--
ALTER TABLE `waiting_list`
  ADD PRIMARY KEY (`id_list`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_party` (`id_party`),
  ADD KEY `id_game` (`id_game`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `party`
--
ALTER TABLE `party`
  MODIFY `id_party` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `party`
--
ALTER TABLE `party`
  ADD CONSTRAINT `party_ibfk_2` FOREIGN KEY (`game`) REFERENCES `game` (`id_game`),
  ADD CONSTRAINT `party_ibfk_3` FOREIGN KEY (`host`) REFERENCES `usuario` (`id_usuario`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`type_user`) REFERENCES `type_user` (`id_type`);

--
-- Filtros para la tabla `waiting_list`
--
ALTER TABLE `waiting_list`
  ADD CONSTRAINT `waiting_list_ibfk_3` FOREIGN KEY (`id_game`) REFERENCES `game` (`id_game`),
  ADD CONSTRAINT `waiting_list_ibfk_4` FOREIGN KEY (`id_user`) REFERENCES `usuario` (`id_usuario`),
  ADD CONSTRAINT `waiting_list_ibfk_5` FOREIGN KEY (`id_party`) REFERENCES `party` (`id_party`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
