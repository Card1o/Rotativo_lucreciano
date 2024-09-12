-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-09-2024 a las 15:08:29
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
-- Base de datos: `administrador`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `archivo`
--

CREATE TABLE `archivo` (
  `id` int(11) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `descripcion` varchar(900) NOT NULL,
  `imagen` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `archivo`
--

INSERT INTO `archivo` (`id`, `titulo`, `descripcion`, `imagen`) VALUES
(1, 'Primera Plataforma Nacional de Telemedicina para Mejorar el Acceso a la Atención Médica', 'El lanzamiento de MedConnect incluye una colaboración entre el Ministerio de Salud, organizaciones no gubernamentales y empresas tecnológicas. La plataforma ha sido diseñada para ser accesible incluso en zonas con conexión a internet limitada, utilizando tecnología de compresión de datos para asegurar que los servicios estén disponibles en las regiones más remotas.  El Ministro de Salud, [Nombre del Ministro], destacó la importancia del proyecto: “MedConnect representa un gran avance en nuestro esfuerzo por garantizar que todos los ciudadanos, sin importar dónde vivan, tengan acceso a servicios médicos de calidad. Con esta plataforma, estamos eliminando barreras y llevando la atención médica a quienes más la necesitan.”', 0x6d65646963696e612e6a666966);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galeria`
--

CREATE TABLE `galeria` (
  `id` int(11) NOT NULL,
  `persona` varchar(100) NOT NULL,
  `imagen` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `galeria`
--

INSERT INTO `galeria` (`id`, `persona`, `imagen`) VALUES
(2, 'Adrian', 0x6172745f3030322e6a706567);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `literaria`
--

CREATE TABLE `literaria` (
  `id` int(11) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `persona` varchar(100) NOT NULL,
  `descripcion` varchar(900) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `literaria`
--

INSERT INTO `literaria` (`id`, `titulo`, `persona`, `descripcion`) VALUES
(2, 'LA FLOR DE LOTO', 'Poema por Mariana Prado', 'En aguas quietas nace flor sagrada, del barro oscuro surge pura y clara, su esencia mística el alma calma En cada pétalo luz revelada   Sus hojas verdes, calma relajada, de la mañana al sol que la prepara su suave aroma el aire repara belleza eterna, nunca manchada   Flor de loto, simbolo de pureza en tus pétalos guardas la promesa, de elevarse sobre la adversidad   En tí encuentro paz y fortaleza reflejo de un espiritu de nobleza flor que del lodo alcanza la verdad');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `contrasena` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`id`, `usuario`, `contrasena`) VALUES
(1, 'admin', 'lucrecio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personeria`
--

CREATE TABLE `personeria` (
  `id` int(11) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `descripcion` varchar(900) NOT NULL,
  `imagen` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `personeria`
--

INSERT INTO `personeria` (`id`, `titulo`, `descripcion`, `imagen`) VALUES
(1, 'INFORMACIÓN CONTRALORÍA', 'El bazar del día de la familia (20 de Julio) será para conseguir mesas metalicas para los quioscos', 0x436f6e7472616c6f722e706e67);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicacion`
--

CREATE TABLE `publicacion` (
  `id` int(11) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `descripcion` varchar(900) NOT NULL,
  `imagen` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `publicacion`
--

INSERT INTO `publicacion` (`id`, `titulo`, `descripcion`, `imagen`) VALUES
(1, 'Descubren que los patos pueden comunicarse con los humanos a través de un lenguaje secreto de cuac', ' Claro, aquí tienes una noticia falsa:  \"Descubren que los patos pueden comunicarse con los humanos a través de un lenguaje secreto de cuac\"  En un sorprendente giro de los acontecimientos, un grupo de investigadores de la Universidad de la Imaginación ha revelado que los patos han desarrollado un lenguaje secreto basado en una serie de cuac-cuac especiales que sólo los humanos pueden descifrar. Según el estudio, los patos utilizan este lenguaje para discutir temas tan diversos como el clima, el estado de los estanques y, sorprendentemente, sus preferencias culinarias.  Los científicos explican que, con un poco de entrenamiento, los humanos pueden aprender a entender los mensajes complejos que los patos envían entre sí. Los primeros experimentos mostraron que, cuando se les habla en el lenguaje de los patos, estos responden con una mezcla de cuacs que corresponden a afirmaciones, pregunt', 0x64657363617267612e6a666966),
(3, ' Nuevas Medidas de Protección Ambiental en la Ciudad: Una Iniciativa para Combatir el Cambio Climático', 'A partir del próximo mes, se establecerán zonas de bajas emisiones en el centro de la ciudad, donde se restringirá el acceso a vehículos que no cumplan con los estándares de emisiones más estrictos. Además, se lanzará una nueva red de transporte público eléctrico que conectará los principales barrios y zonas industriales, con el objetivo de reducir la dependencia de los vehículos privados y disminuir la contaminación del aire.  El plan también contempla la creación de 50 nuevas áreas verdes en zonas urbanas densamente pobladas, que incluirán parques y jardines comunitarios. Estas áreas no solo servirán como pulmones verdes, sino que también proporcionarán espacios recreativos para los residentes y fomentarán la biodiversidad local.', 0x616d6269656e74652e6a666966),
(4, 'Innovadora Tecnología de Energía Solar Lleva Electricidad a Comunidades Rurales', ' El sistema, conocido como SolarConnect, está compuesto por paneles solares que capturan la energía del sol durante el día y la almacenan en baterías para su uso durante la noche. La tecnología también incluye un software de gestión inteligente que optimiza el uso de la energía y minimiza las pérdidas. Este enfoque integral ha demostrado ser capaz de generar suficiente electricidad para abastecer a viviendas, escuelas y centros de salud en comunidades que anteriormente dependían de fuentes de energía ineficientes y costosas, como generadores diésel.  La primera fase de implementación del proyecto ha comenzado en las regiones de [Nombre de las Regiones], donde ya se han instalado más de 500 sistemas solares. La respuesta de las comunidades ha sido positiva, con residentes informando mejoras significativas en la calidad de vida, incluyendo el acceso a luz eléctrica en el hogar y la posibil', 0x73697374656d615f616d6269656e74616c2e6a666966),
(5, 'Primera Plataforma Nacional de Telemedicina para Mejorar el Acceso a la Atención Médica', 'El lanzamiento de MedConnect incluye una colaboración entre el Ministerio de Salud, organizaciones no gubernamentales y empresas tecnológicas. La plataforma ha sido diseñada para ser accesible incluso en zonas con conexión a internet limitada, utilizando tecnología de compresión de datos para asegurar que los servicios estén disponibles en las regiones más remotas.  El Ministro de Salud, [Nombre del Ministro], destacó la importancia del proyecto: “MedConnect representa un gran avance en nuestro esfuerzo por garantizar que todos los ciudadanos, sin importar dónde vivan, tengan acceso a servicios médicos de calidad. Con esta plataforma, estamos eliminando barreras y llevando la atención médica a quienes más la necesitan.”', 0x6d65646963696e612e6a666966);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reconocimientos`
--

CREATE TABLE `reconocimientos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `descripcion` varchar(900) NOT NULL,
  `imagen` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `reconocimientos`
--

INSERT INTO `reconocimientos` (`id`, `titulo`, `descripcion`, `imagen`) VALUES
(1, 'dasda', 'dsa', 0x64657363617267612e6a666966);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reto_mental`
--

CREATE TABLE `reto_mental` (
  `id` int(11) NOT NULL,
  `imagen` blob NOT NULL,
  `reto` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `reto_mental`
--

INSERT INTO `reto_mental` (`id`, `imagen`, `reto`) VALUES
(1, 0x3754414750464a344d42485044503742454437514434325441492e6a7067, '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `archivo`
--
ALTER TABLE `archivo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `galeria`
--
ALTER TABLE `galeria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `literaria`
--
ALTER TABLE `literaria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `personeria`
--
ALTER TABLE `personeria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `publicacion`
--
ALTER TABLE `publicacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `reconocimientos`
--
ALTER TABLE `reconocimientos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `reto_mental`
--
ALTER TABLE `reto_mental`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `archivo`
--
ALTER TABLE `archivo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `galeria`
--
ALTER TABLE `galeria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `literaria`
--
ALTER TABLE `literaria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `personeria`
--
ALTER TABLE `personeria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `publicacion`
--
ALTER TABLE `publicacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `reconocimientos`
--
ALTER TABLE `reconocimientos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `reto_mental`
--
ALTER TABLE `reto_mental`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
