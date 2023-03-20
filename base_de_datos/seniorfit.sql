-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-03-2023 a las 04:31:03
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `seniorfit`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ejercicios`
--

CREATE TABLE `ejercicios` (
  `id_ejercicio` int(6) NOT NULL,
  `nombre_ejercicio` varchar(50) NOT NULL,
  `fecha_adicion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ejercicios`
--

INSERT INTO `ejercicios` (`id_ejercicio`, `nombre_ejercicio`, `fecha_adicion`) VALUES
(4, 'abdominales', '2023-03-19 22:31:54'),
(5, 'sentadillas', '2023-03-19 22:32:20'),
(7, 'prueba 2', '2023-03-19 22:44:49'),
(8, 'prueba3', '2023-03-20 02:27:13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(6) UNSIGNED NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `edad` int(3) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `genero` varchar(10) NOT NULL,
  `tipo_usuario` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `nombre_usuario` varchar(10) DEFAULT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `cedula` varchar(15) DEFAULT NULL,
  `telefono` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `edad`, `fecha_nacimiento`, `genero`, `tipo_usuario`, `email`, `password`, `nombre_usuario`, `fecha_registro`, `cedula`, `telefono`) VALUES
(1, 'canela yela', 22, '2001-02-11', 'Femenino', 'Adulto Mayor', 'canelita@gmail.com', '1234', 'cane', '2023-03-20 02:52:40', '123', '3108276464'),
(3, 'luisa yela', 16, '2006-06-29', 'Femenino', 'Entrenador', 'luisa@gmail.com', '123', 'luisa', '2023-03-20 02:44:37', '1101', '3178959461'),
(4, 'jose', 52, '1972-02-12', 'Masculino', 'Entrenador', 'joseyela@gmail.com', '123', 'jose', '2023-03-19 21:49:49', '98352444', '3145431020'),
(5, 'Betty Cab', 46, '1976-05-30', 'Femenino', 'Adulto Mayor', 'betty@gmail.com', '123', 'betty', '2023-03-20 03:01:05', '27227939', '3207619962'),
(9, 'Camila Yela', 22, '2001-01-11', 'Femenino', 'Adulto Mayor', 'cami@gmail.com', '123', 'camiyela', '2023-03-19 22:00:45', '1007292710', '3108276464'),
(10, 'veronica vera', 22, '2000-11-12', 'Femenino', 'Adulto Mayor', 'vero@gmail.com', '123', 'vero', '2023-03-19 22:34:24', '108879909', '9909090'),
(11, 'karen vera prado', 17, '2000-12-12', 'Femenino', 'Adulto Mayor', 'karen@gmail.com', '123', 'karen', '2023-03-20 02:59:57', '1888881', '12919299');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ejercicios`
--
ALTER TABLE `ejercicios`
  ADD PRIMARY KEY (`id_ejercicio`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ejercicios`
--
ALTER TABLE `ejercicios`
  MODIFY `id_ejercicio` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
