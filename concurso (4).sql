-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 09-10-2021 a las 17:53:56
-- Versión del servidor: 10.4.10-MariaDB
-- Versión de PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `concurso`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

DROP TABLE IF EXISTS `categoria`;
CREATE TABLE IF NOT EXISTS `categoria` (
  `id_categoria` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `name`) VALUES
(1, 'Aritmética'),
(2, 'Fracciones'),
(3, 'Potenciación '),
(4, 'Radicación'),
(5, 'Todo en uno');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `niveles`
--

DROP TABLE IF EXISTS `niveles`;
CREATE TABLE IF NOT EXISTS `niveles` (
  `id_nivel` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_nivel`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `niveles`
--

INSERT INTO `niveles` (`id_nivel`, `name`) VALUES
(1, 'Básico'),
(2, 'Pre Intermedio'),
(3, 'Intermedio'),
(4, 'Avanzado'),
(5, 'Superior');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas`
--

DROP TABLE IF EXISTS `preguntas`;
CREATE TABLE IF NOT EXISTS `preguntas` (
  `id_pregunta` int(11) NOT NULL AUTO_INCREMENT,
  `pregunta` text COLLATE utf8_spanish_ci NOT NULL,
  `id_nivel` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  PRIMARY KEY (`id_pregunta`),
  KEY `id_nivel` (`id_nivel`),
  KEY `id_categoria` (`id_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `preguntas`
--

INSERT INTO `preguntas` (`id_pregunta`, `pregunta`, `id_nivel`, `id_categoria`) VALUES
(1, '¿Cuál respuesta es correcta?', 1, 1),
(2, 'Si al sumar 345+78 ¿Cuál es el resultado?', 1, 1),
(3, 'Si al sumar 3+0+1+101 ¿Cuál es el resultado?', 1, 1),
(4, '¿Cuál respuesta es la incorrecta?', 1, 1),
(5, '¿Cuáles de las siguientes operaciones es la correcta?', 1, 1),
(6, ' Si al Calcular 2/3+1/3=1 ¿Cuál sería el resultado?', 2, 2),
(7, 'Si al Calcular 2/11+5/11 ¿Cuál sería el resultado?', 2, 2),
(8, 'Si al Calcular 2/3-1/3 ¿Cuál sería el resultado?', 2, 2),
(9, 'Si al Calcular 2/3*3/5 ¿Cuál sería el resultado?', 2, 2),
(10, 'Calcular la fracción 3/4+5/6 ¿Cuál sería el resultado?', 2, 2),
(11, 'Calcular la potencia 2^5 ¿Cuál sería el resultado?', 3, 3),
(12, 'Calcular la potencia 0,5^2 ¿Cuál sería el resultado?', 3, 3),
(13, 'Calcular la potencia 2^-3 ¿Cuál sería el resultado?', 3, 3),
(14, 'Calcular la potencia 4^4 ¿Cuál sería el resultado?', 3, 3),
(15, 'Calcular la potencia 6^3 ¿Cuál sería el resultado?', 3, 3),
(16, '¿Cuál sería el resultado de √100?', 4, 4),
(17, '¿Cuál sería el resultado de √1021?', 4, 4),
(18, '¿Cuál sería el resultado de √2*3^2*5^5?', 4, 4),
(19, '¿Cuál sería el resultado de 2√3?', 4, 4),
(20, '¿Cuál sería el resultado de √1225?', 4, 4),
(21, '¿Cuál sería el resultado de 60 – 30 ÷ 3 • 5 + 7?', 5, 5),
(22, '¿Cuál sería el resultado de 14 + 28 ÷ 2^2?', 5, 5),
(23, ' ¿Cuál sería el resultado de 77 – (1 + 4 – 2)^2?', 5, 5),
(24, '¿Cuál sería el resultado de 4 – 3[20 – 3 • 4 – (2 + 4)] ÷ 2?', 5, 5),
(25, '¿Cuál sería el resultado de 2^5*2^4*2?', 5, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `premios`
--

DROP TABLE IF EXISTS `premios`;
CREATE TABLE IF NOT EXISTS `premios` (
  `id_premios` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_premios`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `premios`
--

INSERT INTO `premios` (`id_premios`, `name`) VALUES
(1, '10.000'),
(2, '30.000'),
(3, '60.000'),
(4, '100.000'),
(5, '150.000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuestas`
--

DROP TABLE IF EXISTS `respuestas`;
CREATE TABLE IF NOT EXISTS `respuestas` (
  `respuesta` text COLLATE utf8_spanish_ci NOT NULL,
  `id_premios` int(11) NOT NULL,
  `calificacion` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `id_pregunta` int(11) NOT NULL,
  KEY `id_premios` (`id_premios`),
  KEY `id_pregunta` (`id_pregunta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `respuestas`
--

INSERT INTO `respuestas` (`respuesta`, `id_premios`, `calificacion`, `id_pregunta`) VALUES
('54-12=21', 1, 'f', 1),
('78-40=38', 1, 'v', 1),
('254-145=102', 1, 'f', 1),
('1254-45=1200', 1, 'f', 1),
('365', 1, 'f', 2),
('412', 1, 'f', 2),
('432', 1, 'f', 2),
('423', 1, 'v', 2),
('106', 1, 'f', 3),
('104', 1, 'f', 3),
('105', 1, 'v', 3),
('102', 1, 'f', 3),
('26+12-4=34', 1, 'f', 4),
('8*5=40', 1, 'f', 4),
('34÷2=16 ', 1, 'v', 4),
('27*4=108', 1, 'f', 4),
('24*2=58', 1, 'f', 5),
('40÷4=10 ', 1, 'v', 5),
('75*3=215', 1, 'f', 5),
('47*0=47', 1, 'f', 5),
('2', 2, 'f', 6),
('3', 2, 'f', 6),
('1', 2, 'v', 6),
('0', 2, 'f', 6),
('7/12', 2, 'f', 7),
('55/22', 2, 'f', 7),
('7/11', 2, 'v', 7),
('22/7', 2, 'f', 7),
('1/3', 2, 'v', 8),
('55/22', 2, 'f', 8),
('7/11', 2, 'f', 8),
('22/7', 2, 'f', 8),
('3/6', 2, 'f', 9),
('2/5', 2, 'v', 9),
('4/2', 2, 'f', 9),
('6/2', 2, 'f', 9),
('19/12', 2, 'v', 10),
('20/12', 2, 'f', 10),
('4/12', 2, 'f', 10),
('15/12', 2, 'f', 10),
('30', 3, 'f', 11),
('32', 3, 'v', 11),
('40', 3, 'f', 11),
('45', 3, 'f', 11),
('1', 3, 'f', 12),
('2,25', 3, 'f', 12),
('0,25', 3, 'v', 12),
('-1', 3, 'f', 12),
('1/8', 3, 'v', 13),
('-1/8', 3, 'f', 13),
('2/6', 3, 'f', 13),
('-2/6', 3, 'f', 13),
('236', 3, 'f', 14),
('256', 3, 'v', 14),
('248', 3, 'f', 14),
('238', 3, 'f', 14),
('210', 3, 'f', 15),
('326', 3, 'f', 15),
('320', 3, 'f', 15),
('216', 3, 'v', 15),
('8', 4, 'f', 16),
('6', 4, 'f', 16),
('10', 4, 'v', 16),
('5', 4, 'f', 16),
('13', 4, 'f', 17),
('12', 4, 'f', 17),
('15', 4, 'f', 17),
('11', 4, 'v', 17),
('75√10', 4, 'v', 18),
('50√10', 4, 'f', 18),
('45√10', 4, 'f', 18),
('65√10', 4, 'f', 18),
('√24', 4, 'f', 19),
('√12', 4, 'v', 19),
('√2', 4, 'f', 19),
('√6', 4, 'f', 19),
('15', 4, 'f', 20),
('25', 4, 'f', 20),
('35', 4, 'v', 20),
('5', 4, 'f', 20),
('17', 5, 'v', 21),
('30', 5, 'f', 21),
('25', 5, 'f', 21),
('11', 5, 'f', 21),
('32', 5, 'f', 22),
('11', 5, 'f', 22),
('21', 5, 'v', 22),
('15', 5, 'f', 22),
('156', 5, 'f', 23),
('121', 5, 'f', 23),
('71', 5, 'f', 23),
('68', 5, 'v', 23),
('32', 5, 'f', 24),
('12', 5, 'f', 24),
('1', 5, 'v', 24),
('0', 5, 'f', 24),
('2^10', 5, 'v', 25),
('2^9', 5, 'f', 25),
('1^10', 5, 'f', 25),
('2^10', 5, 'f', 25);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resultados`
--

DROP TABLE IF EXISTS `resultados`;
CREATE TABLE IF NOT EXISTS `resultados` (
  `id_resultado` int(11) NOT NULL AUTO_INCREMENT,
  `puntuacion` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_resultado`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `nick_name` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `preguntas`
--
ALTER TABLE `preguntas`
  ADD CONSTRAINT `preguntas_ibfk_1` FOREIGN KEY (`id_nivel`) REFERENCES `niveles` (`id_nivel`) ON UPDATE CASCADE,
  ADD CONSTRAINT `preguntas_ibfk_2` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `respuestas`
--
ALTER TABLE `respuestas`
  ADD CONSTRAINT `respuestas_ibfk_1` FOREIGN KEY (`id_premios`) REFERENCES `premios` (`id_premios`) ON UPDATE CASCADE,
  ADD CONSTRAINT `respuestas_ibfk_2` FOREIGN KEY (`id_pregunta`) REFERENCES `preguntas` (`id_pregunta`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `resultados`
--
ALTER TABLE `resultados`
  ADD CONSTRAINT `resultados_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
