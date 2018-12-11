-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 27-11-2018 a las 11:03:35
-- Versión del servidor: 10.1.34-MariaDB-0ubuntu0.18.04.1
-- Versión de PHP: 7.2.10-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `examenDWS1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lja`
--

CREATE TABLE `lja` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `volar` tinyint(1) NOT NULL,
  `imagen` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `lja`
--

INSERT INTO `lja` (`id`, `nombre`, `alias`, `volar`, `imagen`) VALUES
(1, 'Clark Kent', 'Superman', 1, 'superman.png'),
(2, 'Bruce Wayne', 'Batman', 0, 'batman.png'),
(3, 'Arthur Curry', 'Aquaman', 0, 'aquaman.png'),
(4, 'Bartholomew Henry \"Barry\" Allen', 'Flash', 0, 'flash.png'),
(5, 'Harold Jorda', 'Linterna verde', 1, 'green_lantern.png'),
(6, 'J\'onn J\'onzz', 'Detective Marciano', 1, 'martial_manhunter.png'),
(7, 'Princesa Diana', 'Wonder Woman', 1, 'wonder_woman.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombreUsuario` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vengadores`
--

CREATE TABLE `vengadores` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `poderes` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `imagen` varchar(80) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `vengadores`
--

INSERT INTO `vengadores` (`id`, `nombre`, `alias`, `poderes`, `imagen`) VALUES
(1, 'Steven Grant Rogers', 'Capitán América', 'Sentidos, agilidad, velocidad y fuerza sobrehumanas;Escudo especial;Liderazgo;Inmune a enfermedades;Genio táctico, artista marcial, acróbata experto', 'captain_america.png'),
(2, 'Anthony Edward Stark', 'Iron Man', 'Mente prodigiosa;Vínculo ciberpático con una versión anterior de su armadura;Fuerza sobrehumana;Vuelo;Rayos repulsores;Balas, misiles, láseres (entre otros)', 'iron_man.png'),
(3, 'Thor Odinson', 'Dios del Trueno', 'Superfuerza;Resistencia;Gran velocidad;Capacidad de curarse rápidamente;Larga vida;Martillo Mjolnir', 'thor.png'),
(4, 'Robert Bruce Banner', 'Hulk', 'Súper fuerza;Súper resistencia;Invulnerabilidad;Super saltos', 'hulk.png'),
(5, 'Natalia Alianovna Romanova', 'Natasha Romanoff', 'Combatiente cuerpo a cuerpo;Experta en artes marciales;Envejecimiento lento;Condición atlética, defensas psicológicas y el sistema inmunológico anormalmente superiores;Hipnosis', 'black_widow.png'),
(6, 'Clinton Francis \"Clint\" Barton', 'Ojo de halcón', 'Arquero excepcional;Excelente percepción y reflejos extraordinarios.;Acróbata experto.;Buen combatiente cuerpo a cuerpo.;Arcos fabricados por industrias Stark.;Flechas multiusos.', 'hawkeye.png');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `lja`
--
ALTER TABLE `lja`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombreUsuario` (`nombreUsuario`);

--
-- Indices de la tabla `vengadores`
--
ALTER TABLE `vengadores`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `lja`
--
ALTER TABLE `lja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `vengadores`
--
ALTER TABLE `vengadores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
