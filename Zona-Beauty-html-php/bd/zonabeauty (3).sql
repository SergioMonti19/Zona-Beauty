-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-10-2024 a las 22:40:35
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
-- Base de datos: `zonabeauty`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignacionesservicios`
--

CREATE TABLE `asignacionesservicios` (
  `id_asignacion` int(11) NOT NULL,
  `id_empleado` int(11) NOT NULL,
  `id_servicio` int(11) NOT NULL,
  `id_cita` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `asignacionesservicios`
--

INSERT INTO `asignacionesservicios` (`id_asignacion`, `id_empleado`, `id_servicio`, `id_cita`) VALUES
(1, 1, 2, 1),
(2, 1, 2, 2),
(3, 2, 3, 3),
(4, 2, 5, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `id_cita` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_servicio` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `estado` enum('Pendiente','Confirmada','Cancelada','Completada') DEFAULT 'Pendiente',
  `comentarios` text DEFAULT NULL,
  `fechaCreacion` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `citas`
--

INSERT INTO `citas` (`id_cita`, `id_usuario`, `id_servicio`, `fecha`, `hora`, `estado`, `comentarios`, `fechaCreacion`) VALUES
(1, 4, 2, '0000-00-00', '05:15:00', 'Confirmada', 'hola!', '2024-10-16 10:16:00'),
(2, 4, 2, '2024-10-15', '07:21:00', 'Confirmada', 'XD', '2024-10-16 06:00:00'),
(3, 4, 3, '2024-10-16', '04:26:00', 'Completada', 'LLego aprox 4:30 - 4:40', '2024-10-16 08:28:00'),
(4, 3, 5, '2024-10-23', '05:02:00', 'Cancelada', 'XD', '2024-10-16 14:02:25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `id_empleado` int(11) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `contrasena` varchar(30) NOT NULL,
  `nombre_completo` varchar(255) NOT NULL,
  `edad` int(11) NOT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `puesto` enum('Empleado','Administrador') NOT NULL,
  `estado` enum('Activo','Inactivo') DEFAULT 'Activo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id_empleado`, `usuario`, `contrasena`, `nombre_completo`, `edad`, `correo`, `telefono`, `puesto`, `estado`) VALUES
(1, 'SamuBo', '1234', 'sa', 23, 'samu@gmail.com', '234123', 'Empleado', 'Inactivo'),
(2, 'SergiMont', '1234', 'Sergio Monti', 22, 'sergiMonti@gmail.com', '637231', 'Empleado', 'Activo'),
(3, 'FranMen', '1234', 'Francisco Mendoza', 22, 'fran@gmail.com', '1234-1234', 'Administrador', 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id_servicio` int(11) NOT NULL,
  `nombre_servicio` varchar(100) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `duracion` int(11) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `estado` enum('Activo','Inactivo') DEFAULT 'Activo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id_servicio`, `nombre_servicio`, `descripcion`, `duracion`, `precio`, `estado`) VALUES
(1, 'Manicura Clásica', 'Un tratamiento completo para embellecer tus manos y uñas.', 2, 8.00, 'Activo'),
(2, 'Pedicura Spa', 'Relájate con nuestra pedicura spa, ideal para cuidar tus pies.', 2, 10.00, 'Activo'),
(3, 'Uñas Acrílicas', 'Dale un toque especial a tus manos con nuestras uñas acrílicas.', 2, 12.00, 'Activo'),
(4, 'Decoración de Uñas', 'Haz que tus uñas se vean increíbles con nuestra decoración personalizada.', 2, 12.00, 'Activo'),
(5, 'Tratamiento de Uñas', 'Fortalece y cuida tus uñas con nuestros tratamientos especiales.', 2, 12.00, 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre_completo` varchar(255) NOT NULL,
  `edad` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `contrasena` varchar(255) NOT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `rol` enum('Cliente') NOT NULL,
  `fecha_registro` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre_completo`, `edad`, `usuario`, `correo`, `contrasena`, `telefono`, `rol`, `fecha_registro`) VALUES
(1, 'Luz Perez', 19, 'LuzP06', 'luz@gmail.com', '1234', '12345678', 'Cliente', '2024-10-12 14:24:15'),
(3, 'Olinda Mendoza', 65, 'OliMen', 'oli@gmail.com', '1234', '12341', 'Cliente', '2024-10-12 14:29:40'),
(4, 'Adela Lopez', 42, 'AdeLop', 'ade@gmail.com', '1234', '1234', 'Cliente', '2024-10-12 14:41:55');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asignacionesservicios`
--
ALTER TABLE `asignacionesservicios`
  ADD PRIMARY KEY (`id_asignacion`),
  ADD KEY `id_empleado` (`id_empleado`),
  ADD KEY `id_servicio` (`id_servicio`),
  ADD KEY `fk_asignacionesservicios_citas` (`id_cita`);

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`id_cita`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_servicio` (`id_servicio`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id_empleado`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id_servicio`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `usuario` (`usuario`),
  ADD UNIQUE KEY `correo` (`correo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asignacionesservicios`
--
ALTER TABLE `asignacionesservicios`
  MODIFY `id_asignacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `id_cita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id_empleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id_servicio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `asignacionesservicios`
--
ALTER TABLE `asignacionesservicios`
  ADD CONSTRAINT `asignacionesservicios_ibfk_1` FOREIGN KEY (`id_empleado`) REFERENCES `empleados` (`id_empleado`) ON DELETE CASCADE,
  ADD CONSTRAINT `asignacionesservicios_ibfk_2` FOREIGN KEY (`id_servicio`) REFERENCES `servicios` (`id_servicio`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_asignacionesservicios_citas` FOREIGN KEY (`id_cita`) REFERENCES `citas` (`id_cita`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `citas`
--
ALTER TABLE `citas`
  ADD CONSTRAINT `citas_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE,
  ADD CONSTRAINT `citas_ibfk_2` FOREIGN KEY (`id_servicio`) REFERENCES `servicios` (`id_servicio`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
