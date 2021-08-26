-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-08-2021 a las 17:40:26
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `forox`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignaturas`
--

CREATE TABLE `asignaturas` (
  `id_asignatura` int(3) NOT NULL,
  `nombre_asignatura` varchar(30) NOT NULL,
  `descripcion_asignatura` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `asignaturas`
--

INSERT INTO `asignaturas` (`id_asignatura`, `nombre_asignatura`, `descripcion_asignatura`) VALUES
(1, 'Matemáticas', 'pues eso, todo y más'),
(2, 'Química', ''),
(3, 'Física', ''),
(4, 'Lengua Castellana', ''),
(5, 'Inglés', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id_comentario` int(6) NOT NULL,
  `id_usuario` int(3) NOT NULL,
  `titulo_comentario` varchar(20) NOT NULL,
  `texto_comentario` text NOT NULL,
  `fecha_comentario` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id_comentario`, `id_usuario`, `titulo_comentario`, `texto_comentario`, `fecha_comentario`) VALUES
(27, 32, 'Cuanto es 2 + 2', 'Ez mu difisil', '2021-08-20'),
(28, 1, 'Mas mates', 'Mas mates', '2021-08-23'),
(29, 1, 'Otra Pregunta mate', 'Pregunta de prueba mate', '2021-08-24'),
(30, 1, 'Prueba con quínmica', 'Pregunta de prueba con quimica', '2021-08-24'),
(31, 1, 'No se de fisica', 'Pregunta rpueba fisica', '2021-08-24'),
(32, 1, 'Como hablar español', 'Solo se ingles', '2021-08-24'),
(33, 1, 'Its very diuficult t', 'NI para de ingles', '2021-08-24'),
(34, 1, 'Depilación', 'Como se depilan las ingles?\r\nGracias de antepierna', '2021-08-26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios_asignaturas`
--

CREATE TABLE `comentarios_asignaturas` (
  `id_comentarios_asignaturas` int(4) NOT NULL,
  `id_comentario` int(6) NOT NULL,
  `id_asignatura` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `comentarios_asignaturas`
--

INSERT INTO `comentarios_asignaturas` (`id_comentarios_asignaturas`, `id_comentario`, `id_asignatura`) VALUES
(5, 27, 1),
(6, 28, 1),
(7, 29, 1),
(8, 30, 2),
(9, 31, 3),
(10, 32, 4),
(11, 33, 5),
(12, 34, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `etiquetas`
--

CREATE TABLE `etiquetas` (
  `id_etiqueta` int(3) NOT NULL,
  `etiqueta_etiqueta` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `etiquetas`
--

INSERT INTO `etiquetas` (`id_etiqueta`, `etiqueta_etiqueta`) VALUES
(1, 'matematicas'),
(2, 'quimica'),
(3, 'ejercicio'),
(4, 'solucion'),
(5, 'teoria'),
(6, 'problema');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `etiquetas_comentarios`
--

CREATE TABLE `etiquetas_comentarios` (
  `id_comentario` int(6) NOT NULL,
  `id_etiqueta` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `institutos`
--

CREATE TABLE `institutos` (
  `id_instituto` int(3) NOT NULL,
  `nombre_instituto` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `institutos`
--

INSERT INTO `institutos` (`id_instituto`, `nombre_instituto`) VALUES
(1, 'Monte das Moas'),
(2, 'Santa Maria del Mar'),
(3, 'Monelos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuestas`
--

CREATE TABLE `respuestas` (
  `id_respuesta` int(6) NOT NULL,
  `texto_respuesta` text CHARACTER SET ascii NOT NULL,
  `id_usuario` int(3) NOT NULL,
  `id_comentario` int(6) NOT NULL,
  `fecha_respuesta` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `respuestas`
--

INSERT INTO `respuestas` (`id_respuesta`, `texto_respuesta`, `id_usuario`, `id_comentario`, `fecha_respuesta`) VALUES
(1, 'asdfasdfasdf', 1, 11, '2021-08-19'),
(2, 'Claro que si guapi', 7, 15, '2021-08-19'),
(3, 'De la vaca, supongo', 7, 15, '2021-08-20'),
(4, 'Mientras sea en mi sombra...', 7, 15, '2021-08-20'),
(5, 'asjdhfljas?ldfkj?lasdf', 32, 11, '2021-08-20'),
(6, 'Ze lo que se siente.\r\nHe buscao en google y dece q es 4', 1, 27, '2021-08-25'),
(7, 'TO esto. Busca a rajoy, mu buen nivel ', 7, 33, '2021-08-25'),
(8, 'Pregunta algo quilloo', 7, 28, '2021-08-25'),
(9, 'REspuesta de prueba mate\r\n', 7, 29, '2021-08-25'),
(10, 'Respuesta de prueba quimica\r\n', 7, 30, '2021-08-25'),
(11, 'REspuesta prueba fisica', 7, 31, '2021-08-25'),
(12, 'Pues no se te da mal', 7, 32, '2021-08-25'),
(13, 'You do it very well\r\n', 7, 32, '2021-08-25'),
(14, 'Con mucho dolor, bonico', 33, 34, '2021-08-26'),
(15, 'Nooo, eso dice mi novia', 33, 34, '2021-08-26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(3) NOT NULL,
  `id_instituto` int(3) NOT NULL,
  `nombre_usuario` varchar(30) NOT NULL,
  `apellido_usuario` varchar(30) NOT NULL,
  `email_usuario` varchar(35) NOT NULL,
  `password_usuario` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `id_instituto`, `nombre_usuario`, `apellido_usuario`, `email_usuario`, `password_usuario`) VALUES
(1, 1, 'pedro', 'jimeno', 'jimeno@casita.com', '1234'),
(2, 2, 'Pacheco', 'El cojo', 'sordoelultimo@catmail.com', 'ladesiempre'),
(3, 1, 'Julio', 'Escobar', 'hipopotamo@catmail.com', '1234'),
(7, 1, 'david', 'roibal', 'david@yo.com', '1234'),
(32, 3, 'Oly', 'Guapa', 'oly@guapa', '1234'),
(33, 3, 'Laila', 'Di', 'laila@mail.com', '1234');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asignaturas`
--
ALTER TABLE `asignaturas`
  ADD PRIMARY KEY (`id_asignatura`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id_comentario`);

--
-- Indices de la tabla `comentarios_asignaturas`
--
ALTER TABLE `comentarios_asignaturas`
  ADD PRIMARY KEY (`id_comentarios_asignaturas`);

--
-- Indices de la tabla `etiquetas`
--
ALTER TABLE `etiquetas`
  ADD PRIMARY KEY (`id_etiqueta`);

--
-- Indices de la tabla `institutos`
--
ALTER TABLE `institutos`
  ADD PRIMARY KEY (`id_instituto`);

--
-- Indices de la tabla `respuestas`
--
ALTER TABLE `respuestas`
  ADD PRIMARY KEY (`id_respuesta`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asignaturas`
--
ALTER TABLE `asignaturas`
  MODIFY `id_asignatura` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id_comentario` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de la tabla `comentarios_asignaturas`
--
ALTER TABLE `comentarios_asignaturas`
  MODIFY `id_comentarios_asignaturas` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `etiquetas`
--
ALTER TABLE `etiquetas`
  MODIFY `id_etiqueta` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `institutos`
--
ALTER TABLE `institutos`
  MODIFY `id_instituto` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `respuestas`
--
ALTER TABLE `respuestas`
  MODIFY `id_respuesta` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
