-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-07-2025 a las 15:40:31
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `base_datos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contraseña` varchar(255) NOT NULL,
  `adm` tinyint(1) NOT NULL DEFAULT 0,
  `imagen` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `contraseña`, `adm`, `imagen`) VALUES
(1, 'leo_miguel_00@hotmail.com', '$2y$10$6eNpwG38456thJs0LcH07OGqD9.RHQ3flh7VLzxjgSEsau6BqRGFS', 1, 'userimg_6873b5a8a7e0e.JPG'),
(2, 'leonardo.boubila@gmail.com', '$2y$10$ZsMab2INQmSCNRGz/AurwudDeZgdY9IST2VzSPcEWHL8yozp35lIy', 0, 'userimg_6873b5ad6c565.JPG'),
(3, 'maga_gauna@gmail.com', '$2y$10$Oud.d/w/Lt/hpX9C37K9r.xq0lLHK.BjdriPLYmR3LzYYBCnzwxnG', 0, NULL),
(4, 'maga@gmail.com', '$2y$10$6tK2xm.8NkeV46i7cB61De0GS1bJ90hD2JG5xEsRNNraOy/duMSfq', 0, NULL),
(5, 'maga373@gmail.com', '$2y$10$w2wsPUusdn3w1paocZr.j.F9sq03wn6nGPOA945HoK560jALrk5h6', 0, NULL),
(6, 'algo@gmail.com', '$2y$10$H2Zbpj7SJGYuEqp3ZfhAOe57U6Q6hxVcJ0t0ySYyfjLgTPHgre6hq', 0, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
