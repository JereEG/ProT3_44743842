-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-06-2025 a las 01:03:11
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gonzalez_jeremias_ezequiel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `perfil_id` int(11) NOT NULL DEFAULT 2,
  `baja` varchar(2) NOT NULL DEFAULT 'NO'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `apellido`, `usuario`, `email`, `pass`, `perfil_id`, `baja`) VALUES
(10, 'Jeremias', 'Gonzalez', 'jeremias123', 'jeremias@gmail.com', '$2y$10$DWd1iFr3c9wz2XjMMSgzLe5MmNqHOJoR7dJs4tFF7ZffHz.bKVYEa', 1, 'NO'),
(12, 'noad', 'admin', 'noadmin', 'noadmin@gamil.com', '$2y$10$a1uuX0L4hQ8sjgjsREOViOagx6kHH27vww21anSmzF3eQT0ckFBka', 2, 'NO'),
(13, 'admin', 'eladmin', 'admin', 'admin@admin.com', '$2y$10$o1J6oM0b0njOow7nTUCCjuAPx3AsPra/FW54HoNHa5o2tg.izdwmu', 1, 'NO'),
(14, 'Jeremias Ezequiel', 'Gonzalez', '45845578', 'jeremiasgonzalez7464@gmail.com', '$2y$10$VuUXtohCs/4JUgkgBguRRuCHYgQh5.E1b.lxPDQ7EM/ji.P91jqGK', 2, 'NO'),
(15, 'Prueba de usuario', 'Prueba', 'pruebaaaa', 'prueba@prueba.com', '$2y$10$Wnujac.t2HgPnpEuKxs6NuP9VM/GZbXATekkkCRf8P1Dhym4GrAUK', 2, 'NO');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `perfil_id` (`perfil_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
