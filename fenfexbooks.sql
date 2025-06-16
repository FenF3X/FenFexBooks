-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-06-2025 a las 14:15:33
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
  `titulo_libro` varchar(255) DEFAULT NULL,
  `pagina_inicio` int(11) NOT NULL DEFAULT 0,
  `pagina_fin` int(11) NOT NULL DEFAULT 0,
  `descripcion` text DEFAULT NULL,
  `dia` date NOT NULL,
  `hora` time NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `diario_lectura`
--

INSERT INTO `diario_lectura` (`id`, `libro_id`, `titulo_libro`, `pagina_inicio`, `pagina_fin`, `descripcion`, `dia`, `hora`, `created_at`, `updated_at`) VALUES
(55, NULL, 'Trono de cristal (Trono de Cristal 1)', 0, 0, 'Inicio de lectura', '2025-06-13', '11:55:26', '2025-06-13 09:55:26', '2025-06-13 09:55:26'),
(56, NULL, 'Un alma de ceniza y sangre', 0, 0, 'Inicio de lectura', '2025-06-13', '12:08:25', '2025-06-13 10:08:25', '2025-06-13 10:08:25'),
(57, NULL, 'Un alma de ceniza y sangre', 0, 185, 'Historia contada desde lo que vio Casteel, Poppy ahora esta en extasis y es el viaje por los recuerdos de Casteel;\r\nJericho asesina a un guardia personal de Poppy pero la hiere lo que hace cabrear a Casteel y le corta la mano a Jericho. Durante el entierro del día siguiente Casteel consigue entablar conversación con Poppy pero aparece un wolven para avistar un ataque de vampry', '2025-06-13', '12:39:40', '2025-06-13 10:39:40', '2025-06-13 10:39:40'),
(58, NULL, 'Un alma de ceniza y sangre', 185, 219, 'Se encuentran un bebé recién transformado en vampry y deben matarlo. Tienen la reunión con el duque para que Casteel se convierta en la guardia personal de Poppy y mas tarde tienen la reunión  con la gente donde la familia Tulis pide no dar su tercer hijo al Rito ya que sus otros dos hijos murieron muy jovenes por una enfermedad en el corazón. El duque los rechaza y Casteel ordena en secreto que se los lleven a Atlantia.', '2025-06-13', '13:19:01', '2025-06-13 11:19:01', '2025-06-13 11:19:01'),
(59, NULL, 'Un alma de ceniza y sangre', 219, 275, 'Poppy reconoce a Casteel de la Perla Roja por lo que intenta no articular ninguna palabra para que no descubra quien era. Viktor no tolera a Casteel pero aun asi le da la capa de guardia personal. Cuando van hacia al Jardin se cruzan con dafina y Loren, quienes se quedan mirando a Casteel. Poppy se enfada y termina hablando. A los momentos le llama el duque para recibir su \'castigo\' por relacionarse con gente que no tiene permitida. Casteel detecta su temor y se pone nervioso. Viktor le cambia el turno', '2025-06-13', '13:22:01', '2025-06-13 11:22:01', '2025-06-13 11:22:01'),
(60, NULL, 'Un alma de ceniza y sangre', 275, 340, 'Casteel irritado despues de dos dias sin saber nada. Inician el ataque de demonios(muchos) con niebla densa. Casteel paga su frustración matando demonios. Cuando uno le pilla la espalda, alguien proteje a Casteel quien se da cuenta que es Poppy en el Adarve con camisón y un arco con flechas. Al dia siguiente los duques dan un comunicado que es rechazado socialmente y un Atlantiano se rebela publicamente y le lanza una mano de demonio cortada de la noche anterior', '2025-06-13', '13:24:35', '2025-06-13 11:24:35', '2025-06-13 11:24:35'),
(61, NULL, 'Un alma de ceniza y sangre', 340, 405, 'Casteel va a la habitacion de Poppy y encuentra el antiguo pasadizo por donde Poppy sale para tramar sus aventuras. Descubre que está en el Ateneo. Justo cuando llega tambien esta el duque en otra sala por lo que Poppy sale corriendo a la cornisa sujetando el diario de ls Srs Williams(atlantiana antigua). Casteel la ve y la cubre. A las horas se reune con Kieran para terminar de confirmar el plan final antes del ataque. Luego de eso Casteel se va al despacho del duque y mata a sus dos guardias personales que le andan esperando en la puerta', '2025-06-13', '13:27:06', '2025-06-13 11:27:06', '2025-06-13 11:27:06'),
(62, NULL, 'Un alma de ceniza y sangre', 405, 465, 'Cuando llega el duque lo tortura y lo empala en la cruz del Rito que se celebrará por la noche. Queda con Poppy mas tarde en los Jardines donde terminan besandose debajo del sauce. Viktor los ve y discute con  Casteel. El abandona el lugar y la deja sola con Viktor. A la media hora escucha un grito de Poppy y va hacia el salon del Rito. Todo esta en una pelea, Viktor esta en el suelo gravemente herido. Mazeen se rie de Poppy por tener sentimientos hacia su guardia personal, lo que hace que ella se enrabie y corte a pedazos a Mazeen todo delante de la duquesa. Esta no para de gritar', '2025-06-13', '13:30:29', '2025-06-13 11:30:29', '2025-06-13 11:30:29'),
(63, NULL, 'Un alma de ceniza y sangre', 465, 525, 'Se pasa un curandero y le da un somnífero que la mantiene dormida todo un dia entero. Al dia siguiente llega una carta de la reina Isbeth que debe ir Poppy a la capital por que ya no es seguro que se quede en Masadonia. Casteel y sus guardias, junto con otros de Masadonia la acompañan. El primer tramo llegan hasta el bosque de Sangre y acampan ahi', '2025-06-13', '13:32:05', '2025-06-13 11:32:05', '2025-06-13 11:32:05'),
(64, NULL, 'Un alma de ceniza y sangre', 525, 575, 'En el segundo tramo llegan a Tres Rios donde se cruzan con una manada de barrats que intentan matarlos pero al final todo el mundo sale vivo y termina con todos los barrats. Estos atrajeron a demonios lo que terminó con dos guardias muertos. Poppy usa su don delante de Casteel para que mueran en paz. En la vida real aparecen Millicient y Malik para anunciar que los retornados se están juntando para que Kolis recupere sus fuerzas', '2025-06-13', '13:35:00', '2025-06-13 11:35:00', '2025-06-13 11:35:00'),
(65, NULL, 'Un alma de ceniza y sangre', 575, 615, 'LLegan a New Heaven donde Atlantia se ha apoderado hace pocos dias por lo que Poppy no sabe nada. Hacen el amor y Casteel decida que le dira al dia siguiente toda la verdad', '2025-06-13', '13:39:07', '2025-06-13 11:39:07', '2025-06-13 11:39:07'),
(66, NULL, 'Un alma de ceniza y sangre', 615, 651, 'LLega el dia siguiente y antes de que Casteel hablara con Poppy llega un mensajero de la corona diciendo que Isbeth sabia que Casteel tenia a Poppy y que pagaría por sus crímenes. Casteel mata al mensajero pero consiguen secuestrar a Poppy. Al final Kieran se transforma y junto al grupo con Casteel terminan con todos. Casteel le cuenta toda la verdad a Poppy y lo intenta matar pero no lo consigue', '2025-06-13', '13:48:16', '2025-06-13 11:48:16', '2025-06-13 11:48:16'),
(67, NULL, 'Un alma de ceniza y sangre', 651, 673, 'Poppy esta en el granjero y aparecen un grupo de Descendentes que intentan matar a Poppy por venganza a la corona, entre ellos Jericho y el padre de los Tulis. Delano y Emil consiguen defenderla. Casteel llega y mata y empala a todos medio vivos aun para que todos vean lo que sucede si no le hacen caso. Terminan discutiendo Casteel y Poppy y le clava un cuchillo en el pecho a Casteel y sale huyendo al bosque frio del invierno. Al minuto Casteel se logra incorporar y va tras ella. Al final hacen el amor y vuelven a su paradero.\r\nEn la realidad Casteel se queda dormido, y un retornado de Kolis se cuela por la ventana, y aunque consigue clavar un hueso de antiguo a Casteel, este consigue transformarse y devora al retornado. Kieran escucha los ruidos y termina calmando a Casteel para que deje su forma notam. Poppy despierta', '2025-06-13', '13:53:27', '2025-06-13 11:53:27', '2025-06-13 11:54:09'),
(69, NULL, 'Una corte de rosas y espinas. Nueva presentación (Edición española)', 0, 0, 'Inicio de lectura', '2025-06-16', '10:03:14', '2025-06-16 08:03:14', '2025-06-16 08:03:14'),
(70, NULL, 'Una corte de rosas y espinas. Nueva presentación (Edición española)', 0, 33, 'Feyre, una chica joven que tiene 2 hermanas, bellas y un padre que apenas camina y su madre muerta. Odiaba a sus padres. Son una familia pobre donde Feyre tiene que ir a cazar en el bosque en pleno invierno', '2025-06-16', '10:06:53', '2025-06-16 08:06:53', '2025-06-16 08:06:53'),
(71, NULL, 'Una corte de rosas y espinas. Nueva presentación (Edición española)', 33, 64, 'Consigue cazar un ciervoy un lobo(El lobo es un fae en su forma notam). Va a un pueblo a vender las pieles donde una mercenaria se las compra por el doble del precio original. De camino a la vuelta, el fae gobernante reclama la vida de Feyre por la que ella quitó. Se va con el a tierras inmortales', '2025-06-16', '10:10:31', '2025-06-16 08:10:31', '2025-06-16 08:10:31'),
(72, NULL, 'Una corte de rosas y espinas. Nueva presentación (Edición española)', 64, 98, 'La tratan como invitada normal y puede que hacer lo que quiera dentro de la corte de Tamlin, el fae goberante de la corte Primavera. Aun asi le tienen rencor por el asesinato de su amigo', '2025-06-16', '10:12:06', '2025-06-16 08:12:06', '2025-06-16 08:12:06'),
(73, NULL, 'Una corte de rosas y espinas. Nueva presentación (Edición española)', 98, 133, 'Lucien y Feyre salen a cazar y se cruzan con un boggee que es un monstruo que se crea mentalmene y si les mantienes conctacto visual toman formas y son muy complicadas de matar. Tamlin se pasa la noche matando a los que hay. Aparece un puca(monstruo de los sueños), Feyre se siente atraída y va hacia el. Tamlin la salva', '2025-06-16', '10:18:20', '2025-06-16 08:18:20', '2025-06-16 08:18:20'),
(74, NULL, 'Una corte de rosas y espinas. Nueva presentación (Edición española)', 98, 133, 'Lucien y Feyre salen a cazar y se cruzan con un boggee que es un monstruo que se crea mentalmene y si les mantienes conctacto visual toman formas y son muy complicadas de matar. Tamlin se pasa la noche matando a los que hay. Aparece un puca(monstruo de los sueños), Feyre se siente atraída y va hacia el. Tamlin la salva', '2025-06-16', '10:18:20', '2025-06-16 08:18:20', '2025-06-16 08:18:20'),
(75, NULL, 'Una corte de rosas y espinas. Nueva presentación (Edición española)', 133, 160, 'Tamlin lleva a Feyre al estudio e intenta que aprenda a leer.Se  hace la madrugada y descansa donde encuentra un gran y hermoso mural que relata la historia de los fae. Tamlin se va a cazar. Lucien aparte le dijo a Feyre que podia cazar a un suriel y ella fue a por él. Cuando fue a terminarlo aparecieron 4 nagas. Ella acabó con uno pero no pudo con los otros tres. Apareció Tamlin y la salvó', '2025-06-16', '11:03:54', '2025-06-16 09:03:54', '2025-06-16 09:03:54'),
(76, NULL, 'Una corte de rosas y espinas. Nueva presentación (Edición española)', 160, 207, 'Despues de la pelea en el bosque, Feyre se da un baño y Alis la sirvienta la ayuda a lavarse y peinarse. Le cuenta a Feyre que, Alis tiene dos sobrinos en la Corte Verano que dejó su hermana antes de morir. A los dias van a un lago de luz de estrellas y se bañan Tamlin y ella. Feyre se entera que hay una fiesta pero Tamlin no le deja salir de su corte', '2025-06-16', '11:07:41', '2025-06-16 09:07:41', '2025-06-16 09:07:41'),
(77, NULL, 'Una corte de rosas y espinas. Nueva presentación (Edición española)', 207, 247, 'Feyre desobedece a Tamlin y va oculta con su yegua y una capa a la fiesta. La arrinconan tres inmortales. El alto fae de la Corte Noche la proteje pero ella le tiene aun mas miedo, se cruza con Lucien y vuelven corriendo a la corte Primavera. Tamlin termina de recibir todo el poder y se desahoga con mujeres en la fiesta. Aun asi cuando llega a la corte se encuentra con Feyre y no se resiste a morderla. A los dias aparece una cabeza clavada en una pica en la entrada enviada por la Corte Noche', '2025-06-16', '11:13:34', '2025-06-16 09:13:34', '2025-06-16 09:13:34'),
(78, NULL, 'Una corte de rosas y espinas. Nueva presentación (Edición española)', 247, 287, 'Se celebra el solsticio de Verano y Tamlin y Feyre terminan besándose. Aparece Rhysand confesando que fue el quien clavo la cabeza y avistando a Tamlin de que vendrá Amarantha a por ella y la torturará. Tamlin asustado, rompe el tratado y la devuelve al mundo humano pero ella no aguanta sin él', '2025-06-16', '11:16:03', '2025-06-16 09:16:03', '2025-06-16 09:16:03'),
(79, NULL, 'Una corte de rosas y espinas. Nueva presentación (Edición española)', 287, 364, 'Cuando vuelve Feyre a casa descubre a su padre con una nueva riqueza. Elain enamorada de sus flores pero Nesta lo recuerda todo. Recuerda como Tamlin se llevó a Feyre y Feyre se lo cuenta todo. Nesta admite que hubo un ataque hace unos dias en la casa de los Beldor. Cuando Rhysand los amenazó preguntando un nombre, ella dijo Clare Beldor. Vuelve corriendo a la corte de Tamlin y la descubre toda derruida y a Alis, cojeando con dolor. Alis le cuenta por que las mascaras y el ausente ojo derecho de Lucien. Feyre va a por ellos Bajo la Montaña pero a mitad camino la descubre el Attor y la atrapa. Amarantha le ofrece un trato. Hará tres pruebas y una adivinanza y si gana todo, Amarantha liberará todas las maldiciones de la corte primavera y le devolvera todo el poder a Tamlin, sino morirán. Le dan una paliza y la encierran, a los tres dias tiene la primera prueba, enfrentarse a un gusano de 20 metros de altura por 100 de largo en una cueva. Termina haciendo un agujero y astillando huesos por dentro. Consigue y gana pero solo Rhysand apostó por ella.', '2025-06-16', '11:25:53', '2025-06-16 09:25:53', '2025-06-16 09:25:53'),
(81, NULL, 'Una corte de rosas y espinas. Nueva presentación (Edición española)', 364, 453, 'Rhysand vuelve por la noche y hace un trato con ella, le curará todas las heridas si a cambio estaba una semana al mes en su corte, ella de mala gana acepta y se hace un tatuaje desde la flexion hasta la palma un tatuaje negro con un ojo. Durante varias semanas Feyre debia pintarse el cuerpo ENTERO de un maquillaje especial que deja la mas minima marca de roce y si el veia marcas que no eran de él mataria a quien la tocara. Llegó la segunda prueba, Lucien encadenado unas puas metalicas bajando, y una frase(acertijo) con tres palancas para elegir solución, ella no sabe leer. Cuando va a tocar una palanca siente dolor en el tatuaje excepto en una. Al final se decide y acierta(Rhysand le ayudó). Pasa la prueba y le quedan varias semanas. LLega la tercera y ultima prueba. Tenía que apuñalar a 3 personas. Le cuesta pero cuando llega a la 3 le quita la capucha y es Tamlin. Al final lo apuñala pero literalmente Tamlin tenia un corazón de piedra asi que no se muere. Amarantha ataca a Feyre, Rhysand va a por Amarantha pero Tamlin se transforma y acaba con ella. Para resucitar a Feyre, cada corte le concede el destello y juntos se revive', '2025-06-16', '14:06:33', '2025-06-16 12:06:33', '2025-06-16 12:07:22');

--
-- Disparadores `diario_lectura`
--
DELIMITER $$
CREATE TRIGGER `insertar_titulo_libro` BEFORE INSERT ON `diario_lectura` FOR EACH ROW BEGIN
  DECLARE nombre_libro VARCHAR(255);

  -- Buscar el título en la tabla 'leyendo' usando el ID del libro
  SELECT titulo INTO nombre_libro
  FROM leyendo
  WHERE id = NEW.libro_id;

  -- Asignar directamente el título al nuevo registro
  SET NEW.titulo_libro = nombre_libro;
END
$$
DELIMITER ;

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
(14, 'Un alma de ceniza y sangre', 'JENNIFER ARMENTROUT', 2023, 673, '9788419936066', 'http://books.google.com/books/content?id=bmLlEAAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', NULL, '2025-06-13 11:56:42', '2025-06-13 11:56:42'),
(15, 'Anhelo (Serie Crave 1)', 'Tracy Wolff', 2020, 583, '9788408233862', 'http://books.google.com/books/content?id=qenzDwAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', NULL, '2025-06-16 07:54:53', '2025-06-16 07:54:53'),
(16, 'Furia (Serie Crave 2)', 'Tracy Wolff', 2021, 736, '9788408241027', 'http://books.google.com/books/content?id=sTQXEAAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', NULL, '2025-06-16 07:54:57', '2025-06-16 07:54:57'),
(17, 'Ansia (Serie Crave 3)', 'Tracy Wolff', 2021, 930, '9788408247296', 'http://books.google.com/books/content?id=iK44EAAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', NULL, '2025-06-16 07:55:22', '2025-06-16 07:55:22'),
(18, 'Fulgor(Serie Crave 4)', 'Tracy Wolff', 2024, 960, '9788408285038', 'https://imagessl8.casadellibro.com/a/l/s7/38/9788408285038.webp', '2024-12-18', '2025-06-16 07:59:48', '2025-06-16 07:59:48'),
(19, 'Hechizo (Serie Crave 5)', 'Tracy Wolff', 2023, 751, '9788408270652', 'http://books.google.com/books/content?id=TpakEAAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', NULL, '2025-06-16 08:02:09', '2025-06-16 08:02:09'),
(20, 'Una corte de rosas y espinas', 'Sarah J Maas', 2016, 453, '9788408257103', 'https://imagessl3.casadellibro.com/a/l/s7/03/9788408257103.webp', '2025-01-09', '2025-06-16 12:11:45', '2025-06-16 12:11:45');

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
(4, 'Configuración', '/configuracion', 'settings', 7, 1),
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
(3, 'La espada de la asesina (Trono de Cristal 0)', 'Sarah J. Maas', 2022, 512, '9786073817820', 'http://books.google.com/books/content?id=y9dyEAAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', 1, '2025-06-13 09:57:28', '2025-06-13 09:57:28'),
(4, 'Corona de medianoche (Trono de Cristal 2)', 'Sarah J. Maas', 2022, 512, '9786073817844', 'http://books.google.com/books/content?id=dmJwEAAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', 2, '2025-06-13 10:01:17', '2025-06-13 10:01:17'),
(5, 'Heredera de fuego (Trono de Cristal 3)', 'Sarah J. Maas', 2016, 576, '9786073140690', 'http://books.google.com/books/content?id=0yXPCwAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', 3, '2025-06-13 10:03:06', '2025-06-13 10:03:06'),
(6, 'Reina de sombras (Trono de Cristal 4)', 'Sarah J. Maas', 2017, 739, '9786073152747', 'http://books.google.com/books/content?id=D6tRDgAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', 4, '2025-06-13 10:04:02', '2025-06-13 10:04:02'),
(7, 'Imperio de tormentas (Trono de Cristal 5)', 'Sarah J. Maas', 2017, 816, '9786073156516', 'http://books.google.com/books/content?id=VQQoDwAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', 5, '2025-06-13 10:04:32', '2025-06-13 10:04:32'),
(8, 'Torre del alba (Trono de Cristal 6)', 'Sarah J. Maas', 2018, 756, '9786073174282', 'http://books.google.com/books/content?id=uLByDwAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', 6, '2025-06-13 10:05:47', '2025-06-13 10:05:47'),
(9, 'Reino de cenizas (Trono de Cristal 7)', 'Sarah J. Maas', 2020, 1048, '9786073198264', 'http://books.google.com/books/content?id=cCcMEAAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api', 7, '2025-06-13 10:06:42', '2025-06-13 10:06:42');

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
('4gs2qzDwJn0HSeqwiQrpqsVbxlRmDWsjOFoSx1rt', 3, '127.0.0.1', 'Mozilla/5.0 (Linux; Android 11; CPH2239) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.127 Mobile Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiQk1TeGM3bUowYktscHJ1QTVEYkMzbWpkQUJRWnM1MmEzR0VQQTVxaSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyODoiaHR0cDovL2xvY2FsaG9zdDo4MDAwL2RpYXJpbyI7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjM1OiJodHRwOi8vbG9jYWxob3N0OjgwMDAvY29uZmlndXJhY2lvbiI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjM7fQ==', 1750076013),
('WtTqSfrQIDbf7ovh4H9G60A3WFDDMDBR4b6xgDgm', 3, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiYnk0bkNDSFE2SDFMTk5SUndPQU5pWEVoVzhsbExLT29OWkJNWGZHRSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9wYWdpbmEtZmluLzE5Ijt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6Mzt9', 1750065954);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT de la tabla `favoritos`
--
ALTER TABLE `favoritos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `leidos`
--
ALTER TABLE `leidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `leyendo`
--
ALTER TABLE `leyendo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
  ADD CONSTRAINT `diario_lectura_libro_id_foreign` FOREIGN KEY (`libro_id`) REFERENCES `leyendo` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
