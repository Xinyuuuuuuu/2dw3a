-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-11-2024 a las 10:50:43
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `agenciaviajes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Familia'),
(2, 'Aventura'),
(3, 'Cultura'),
(4, 'Monte'),
(5, 'Playa'),
(6, 'Deporte');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trips`
--

CREATE TABLE `trips` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `destino` varchar(100) NOT NULL,
  `fecha` date NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `imagen_path` varchar(255) DEFAULT NULL,
  `categoria_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `trips`
--

INSERT INTO `trips` (`id`, `titulo`, `destino`, `fecha`, `precio`, `descripcion`, `imagen_path`, `categoria_id`) VALUES
(1, 'Senderismo en Pirineos', 'Pirineos', '2024-07-10', '350.00', 'Senderismo aventura en Pirineos.', 'trip1.jpg', 4),
(2, 'Ciudad de Paris', 'Paris', '2024-05-15', '800.00', 'Visita cultural en Paris.', 'trip2.jpg', 3),
(3, 'Festival de surf en Zarautz', 'Zarautz', '2024-08-01', '200.00', 'amoso festival de Surf en Zarautz.', 'trip3.jpg', 6),
(4, 'Recorridos por Euskal Herria', 'Euskal Herria', '2024-06-20', '150.00', 'Inmersion cultural y naturaleza.', 'trip4.jpg', 3),
(5, 'Aventura playas del Caribe', 'Caribe', '2024-12-10', '1200.00', 'Playas y hotel de lujo en el Caribe.', 'trip5.jpg', 5),
(6, 'Aventura en Sahara', 'Sahara', '2024-03-15', '900.00', 'Aventura desiertos del Sahara.', 'trip6.jpg', 2),
(7, 'Andalucia Flamenca', 'Sevilla', '2024-04-25', '650.00', 'Curso y espéctaculo flamenco en  Sevilla.', 'trip7.jpg', 3),
(8, 'Recorrido por Amazonas', 'Amazonas', '2024-09-10', '1100.00', 'Recorrido ecológico por Amazonas.', 'trip8.jpg', 4),
(9, 'Jornadas de yoga en Biarritz', 'Biarritz', '2024-05-20', '400.00', 'Jornadas de yoga a orillas del mar.', 'trip9.jpg', 5),
(10, 'Italia Tour', 'Italia', '2024-06-05', '950.00', 'Historia y Cultura de Italia.', 'trip10.jpg', 3),
(11, 'Eski en Andorra', 'Andorra', '2024-02-12', '500.00', 'Eski en montes del  Pirineo.', 'trip11.jpg', 4),
(12, 'Marruecos Sahara Adventure', 'Marruecos', '2024-09-12', '1200.00', 'Travesia en 4x4 por el desierto del Sahara.', 'trip12.jpg', 2),
(13, 'Historia de Tokio', 'Tokio', '2024-11-22', '1350.00', 'Descubrir la cultura e historia de Tokio..', 'trip13.jpg', 3),
(14, 'Viaje surfero a Hawai', 'Hawai', '2024-07-05', '1300.00', 'Jornadas de surf y playa.', 'trip14.jpg', 6),
(15, 'Eski en Pirineos', 'Pirinioak', '2024-01-15', '400.00', 'Curso de Eski en Pirineos.', 'trip15.jpg', 4),
(16, 'Macrofiesta playera', 'Ibiza', '2024-08-17', '950.00', 'Fiesta y playa en Ibiza.', 'trip16.jpg', 5),
(17, 'Crucero por el Mediterraneo', 'Mediterraneo', '2024-10-10', '1400.00', 'Recorrido en crucero por el Mediterraneo..', 'trip17.jpg', 5),
(18, 'Vacaciones de Ski en los  Alpes', 'Alpes', '2024-01-05', '1200.00', 'Vacaciones practicando Ski en los Alpes europeos.', 'trip18.jpg', 4),
(19, 'Aventura Familiar en   Navarra', 'Navarra', '2024-06-01', '250.00', 'Aventura Familiar- Naturaleza y montaña.', 'trip19.jpg', 1),
(20, 'Recorrido por la Costa Atlantica', 'Donostia', '2024-09-05', '100.00', 'Recorrido a pie por el Flysch Euskal.', 'trip20.jpg', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(1, 'admin', 'admin123', 'admin@example.com'),
(2, 'user1', 'password1', 'user1@example.com'),
(3, 'user2', 'password2', 'user2@example.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `trips`
--
ALTER TABLE `trips`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoria_id` (`categoria_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `trips`
--
ALTER TABLE `trips`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `trips`
--
ALTER TABLE `trips`
  ADD CONSTRAINT `trips_ibfk_1` FOREIGN KEY (`categoria_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
