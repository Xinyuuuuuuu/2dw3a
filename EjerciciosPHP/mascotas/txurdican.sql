-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-02-2024 a las 19:05:50
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
-- Base de datos: `txurdican`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mascotas`
--

CREATE TABLE `mascotas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `adoptado` tinyint(1) NOT NULL DEFAULT 0,
  `raza_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `mascotas`
--

INSERT INTO `mascotas` (`id`, `nombre`, `imagen`, `adoptado`, `raza_id`) VALUES
(1, 'Txurtxil', 'Chihuahua.jpg', 0, 1),
(2, 'Mini', 'boxer.jpg', 0, 3),
(3, 'Duxkor', 'pastor.jfif', 0, 2),
(4, 'Zazpi', 'SCHNAUZER.jpg', 0, 4),
(5, 'Vendor', 'BULLDOG FRANCÉS.jpg', 0, 3),
(6, 'Label', 'animales_18.png', 0, 3),
(7, 'Gau', 'bullgog1.jfif', 0, 3),
(8, 'Gogor', 'bullgog2.jfif', 0, 3),
(9, 'Sabu', 'sabueso1.jfif', 0, 4),
(10, 'Luze', 'pastorcachorro.jfif', 0, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2023_01_12_175740_create_razas_table', 1),
(2, '2023_01_12_175811_create_mascotas_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `razas`
--

CREATE TABLE `razas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre_raza` varchar(50) NOT NULL,
  `descripcion_raza` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `razas`
--

INSERT INTO `razas` (`id`, `nombre_raza`, `descripcion_raza`) VALUES
(1, 'Chihuahua', 'Es una raza de perro originaria de México'),
(2, 'Pastor Alemán', 'Son perros ágiles y bien equilibrados de porte orgulloso. Su pelaje puede presentar varios colores (consulta el estándar de la raza) y están formados por un manto superior duro, áspero y lacio, y un manto inferior grueso. La altura ideal del macho adulto es de 63 cm y la de la hembra, 58 cm.'),
(3, 'Bulldog frances', 'pequeño tamaño y, sobre todo,  carácter sociable, juguetón y cariñoso.'),
(4, 'Sabueso español', 'Aunque se desarrolló para la caza, es también un excelente perro de compañía e incluso puede ser un buen guardián. Inteligente, resistente y obstinado.\n        ');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `mascotas`
--
ALTER TABLE `mascotas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mascotas_raza_id_foreign` (`raza_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `razas`
--
ALTER TABLE `razas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `mascotas`
--
ALTER TABLE `mascotas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `razas`
--
ALTER TABLE `razas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `mascotas`
--
ALTER TABLE `mascotas`
  ADD CONSTRAINT `mascotas_raza_id_foreign` FOREIGN KEY (`raza_id`) REFERENCES `razas` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
