-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-06-2025 a las 13:45:37
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
-- Base de datos: `fenfexbooks`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `diario_lectura`
--

CREATE TABLE `diario_lectura` (
  `id` int(11) NOT NULL,
  `libro_id` int(11) DEFAULT NULL,
  `pagina_inicio` int(11) NOT NULL DEFAULT 0,
  `pagina_fin` int(11) NOT NULL DEFAULT 0,
  `descripcion` varchar(500) DEFAULT NULL,
  `dia` date NOT NULL,
  `hora` time NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `diario_lectura`
--

INSERT INTO `diario_lectura` (`id`, `libro_id`, `pagina_inicio`, `pagina_fin`, `descripcion`, `dia`, `hora`, `created_at`, `updated_at`) VALUES
(5, 5, 0, 50, 'Lectura inicial', '2025-06-12', '10:26:36', '2025-06-12 08:26:36', '2025-06-12 08:26:36'),
(6, 5, 50, 100, 'Continuacion de lectura', '2025-06-12', '12:35:01', '2025-06-12 10:35:01', '2025-06-12 10:35:01'),
(19, 10, 0, 0, 'Inicio de lectura', '2025-06-12', '12:54:54', '2025-06-12 10:54:54', '2025-06-12 10:54:54');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `favoritos`
--

CREATE TABLE `favoritos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `autor` varchar(255) NOT NULL,
  `anio_publicacion` int(11) DEFAULT NULL,
  `paginas` int(11) DEFAULT NULL,
  `isbn` varchar(20) DEFAULT NULL,
  `portada` varchar(1000) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `favoritos`
--

INSERT INTO `favoritos` (`id`, `titulo`, `autor`, `anio_publicacion`, `paginas`, `isbn`, `portada`, `created_at`, `updated_at`) VALUES
(1, '¡Hola, mi nuevo amigo! (Hello, New Friend!)', 'Autor desconocido', 2023, 28, '9781665938662', 'http://books.google.com/books/content?id=31KsEAAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', '2025-06-12 04:38:09', '2025-06-12 04:38:09'),
(2, 'Anhelo (Serie Crave 1)', 'Tracy Wolff', 2020, 583, '9788408233862', 'http://books.google.com/books/content?id=qenzDwAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', '2025-06-12 10:56:51', '2025-06-12 10:56:51');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `leidos`
--

CREATE TABLE `leidos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `autor` varchar(255) NOT NULL,
  `anio_publicacion` int(11) DEFAULT NULL,
  `paginas` int(11) DEFAULT NULL,
  `isbn` varchar(20) DEFAULT NULL,
  `portada` varchar(1000) DEFAULT NULL,
  `fin_lectura` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `leidos`
--

INSERT INTO `leidos` (`id`, `titulo`, `autor`, `anio_publicacion`, `paginas`, `isbn`, `portada`, `fin_lectura`, `created_at`, `updated_at`) VALUES
(1, 'Enigmas sin resolver', 'Iker Jiménez Elizari', 2006, 364, '9788441417748', 'http://books.google.com/books/content?id=2jhzc_0smZMC&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', '2025-06-12', '2025-06-12 10:41:08', '2025-06-12 10:41:08'),
(2, 'Furia (Serie Crave 2)', 'Tracy Wolff', 2021, 736, '9788408241027', 'http://books.google.com/books/content?id=sTQXEAAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', '2025-06-12', '2025-06-12 10:42:13', '2025-06-12 10:42:13'),
(4, 'Anhelo (Serie Crave 1)', 'Tracy Wolff', 2020, 583, '9788408233862', 'http://books.google.com/books/content?id=qenzDwAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', NULL, '2025-06-12 10:56:48', '2025-06-12 10:56:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `leyendo`
--

CREATE TABLE `leyendo` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `autor` varchar(255) NOT NULL,
  `anio_publicacion` int(11) DEFAULT NULL,
  `paginas` int(11) DEFAULT NULL,
  `isbn` varchar(20) DEFAULT NULL,
  `portada` varchar(1000) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `leyendo`
--

INSERT INTO `leyendo` (`id`, `titulo`, `autor`, `anio_publicacion`, `paginas`, `isbn`, `portada`, `created_at`, `updated_at`) VALUES
(5, 'Anhelo (Serie Crave 1)', 'Tracy Wolff', 2020, 583, '9788408233862', 'http://books.google.com/books/content?id=qenzDwAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', '2025-06-12 06:17:11', '2025-06-12 06:17:11'),
(10, 'Los cinco anhelos', 'David Richo', 2018, 145, '9786073163668', 'http://books.google.com/books/content?id=nuRLDwAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', '2025-06-12 10:54:54', '2025-06-12 10:54:54');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `autor` varchar(255) DEFAULT NULL,
  `anio` int(11) DEFAULT NULL,
  `genero` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`id`, `titulo`, `autor`, `anio`, `genero`) VALUES
(1, 'Cien años de soledad', 'Gabriel García Márquez', 1967, 'Realismo mágico'),
(3, 'El nombre del viento', 'Patrick Rothfuss', 2007, 'Fantasía'),
(4, 'La sombra del viento', 'Carlos Ruiz Zafón', 2001, 'Misterio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`id`, `usuario`, `password`, `created_at`, `updated_at`) VALUES
(3, 'admin', '$2y$12$WJ51xVplGITjZAnAWqWOdOWVJfa/16b4XYMoDqPyRoKn7qZ/UZ3wC', '2025-06-10 04:21:58', '2025-06-10 04:21:58');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `ruta` varchar(255) NOT NULL,
  `icono` varchar(100) DEFAULT NULL,
  `orden` int(11) DEFAULT 0,
  `visible` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `menu`
--

INSERT INTO `menu` (`id`, `nombre`, `ruta`, `icono`, `orden`, `visible`) VALUES
(1, 'Inicio', '/inicio', 'home', 1, 1),
(2, 'Terminados', '/leidos', 'fact_check', 4, 1),
(3, 'Leyendo', '/leyendo', 'auto_stories', 3, 1),
(4, 'Configuración', '/ajustes', 'settings', 7, 1),
(5, 'Favoritos', '/favoritos', 'bookmark_heart', 5, 1),
(6, 'Pendientes', '/porleer', 'book', 2, 1),
(7, 'Diario', '/diario', 'ink_pen', 6, 1);

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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '2025_06_09_111257_create_logins_table', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pendientes`
--

CREATE TABLE `pendientes` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `autor` varchar(255) NOT NULL,
  `anio_publicacion` int(11) DEFAULT NULL,
  `paginas` int(11) DEFAULT NULL,
  `isbn` varchar(20) DEFAULT NULL,
  `portada` varchar(1000) DEFAULT NULL,
  `orden_pendiente` int(11) DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pendientes`
--

INSERT INTO `pendientes` (`id`, `titulo`, `autor`, `anio_publicacion`, `paginas`, `isbn`, `portada`, `orden_pendiente`, `created_at`, `updated_at`) VALUES
(1, 'Anhelo (Serie Crave 1)', 'Tracy Wolff', 2020, 583, ' 978-8408232995', 'http://books.google.com/books/content?id=qenzDwAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', 1, '2025-06-12 04:04:48', '2025-06-12 04:04:48'),
(2, 'Anhelo (Serie Crave 1)', 'Tracy Wolff', 2020, 583, '9788408233862', 'http://books.google.com/books/content?id=qenzDwAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', 2, '2025-06-12 10:58:55', '2025-06-12 10:58:55');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('8w3IVbvCKeiaizsVm0CsfpemHtU9nSbmaYcVOi5U', 3, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiOHRSRlE2bG83Z2ZrNnRmdnB0WVNoYk4wMHpndWwwWTZnVGNyUFRWcSI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI4OiJodHRwOi8vbG9jYWxob3N0OjgwMDAvZGlhcmlvIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6Mzt9', 1749728636);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `rol` enum('admin','usuario') DEFAULT 'usuario',
  `nombre` varchar(100) DEFAULT NULL,
  `creado_en` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `password`, `rol`, `nombre`, `creado_en`) VALUES
(1, 'admin123', 'usuario', 'FenFex', '2025-06-06 07:38:29');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `diario_lectura`
--
ALTER TABLE `diario_lectura`
  ADD PRIMARY KEY (`id`),
  ADD KEY `diario_lectura_libro_id_foreign` (`libro_id`);

--
-- Indices de la tabla `favoritos`
--
ALTER TABLE `favoritos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `leidos`
--
ALTER TABLE `leidos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `isbn` (`isbn`);

--
-- Indices de la tabla `leyendo`
--
ALTER TABLE `leyendo`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `isbn` (`isbn`);

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login_usuario_unique` (`usuario`);

--
-- Indices de la tabla `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `pendientes`
--
ALTER TABLE `pendientes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `isbn` (`isbn`);

--
-- Indices de la tabla `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `diario_lectura`
--
ALTER TABLE `diario_lectura`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `favoritos`
--
ALTER TABLE `favoritos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `leidos`
--
ALTER TABLE `leidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `leyendo`
--
ALTER TABLE `leyendo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `pendientes`
--
ALTER TABLE `pendientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `diario_lectura`
--
ALTER TABLE `diario_lectura`
  ADD CONSTRAINT `diario_lectura_ibfk_1` FOREIGN KEY (`libro_id`) REFERENCES `leyendo` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `diario_lectura_libro_id_foreign` FOREIGN KEY (`libro_id`) REFERENCES `leyendo` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
