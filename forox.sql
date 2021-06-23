-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-06-2021 a las 12:47:11
-- Versión del servidor: 10.4.10-MariaDB
-- Versión de PHP: 7.2.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
(1, 'matemáticas', 'pues eso, todo y más'),
(2, 'química', '');

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
(11, 1, 'coment1', 'ssdñlkfalskdjfñal\r\nslkdfjñalksdj\r\nlksajdfñlkajs', '0000-00-00'),
(12, 1, 'coment1', 'ssdñlkfalskdjfñal\r\nslkdfjñalksdj\r\nlksajdfñlkajs', '0000-00-00'),
(13, 1, 'coment2', 'ssdñlkfalskdjfñal\r\nslkdfjñalksdj\r\nlksajdfñlkajs', '2021-06-22'),
(14, 1, 'sasdasd', 'sadasdasd', '2021-06-22'),
(15, 1, 'caca', 'me cago en tu sombra, profe', '2021-06-22'),
(16, 1, 'segundo comengtario', 'asjdfñlaksjdfñlajdfñlkajñs\r\nlñkasjfdñlaksjdfñaskl\r\nañlkjdfñlkajdfñlkasdjf', '2021-06-23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios_asignaturas`
--

CREATE TABLE `comentarios_asignaturas` (
  `id_comentario` int(6) NOT NULL,
  `id_asignatura` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(2, 'Santa Maria del Mar');

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
(3, 1, 'Julio', 'Escobar', 'hipopotamo@catmail.com', '1234');

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
  MODIFY `id_asignatura` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id_comentario` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `etiquetas`
--
ALTER TABLE `etiquetas`
  MODIFY `id_etiqueta` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `institutos`
--
ALTER TABLE `institutos`
  MODIFY `id_instituto` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
