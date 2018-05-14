-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-05-2018 a las 13:39:55
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `alumni_g9`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `capacitaciones`
--

CREATE TABLE `capacitaciones` (
  `id_cap` int(11) NOT NULL,
  `nombre_cap` varchar(1500) NOT NULL,
  `sponsor_cap` int(2) NOT NULL,
  `lugar_cap` varchar(1500) NOT NULL,
  `horario_cap` varchar(500) NOT NULL,
  `duracion_cap` varchar(400) NOT NULL,
  `descripcion_cap` varchar(1500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `capacitaciones`
--

INSERT INTO `capacitaciones` (`id_cap`, `nombre_cap`, `sponsor_cap`, `lugar_cap`, `horario_cap`, `duracion_cap`, `descripcion_cap`) VALUES
(1, 'Formación Emprendedora', 4, 'Instalaciones ITCA FEPADE', '08:30-11:00 AM', '3 meses', '	\r\nOfrece apoyo a emprendedores mediante un proceso de enseñanza aprendizaje de atributos y destrezas a través del cual se desarrolla y fomenta competencias y habilidades para crear nuevas empresas u organizaciones económicas y sociales a través de una idea de negocio.\r\n\r\n\r\nAdemás brinda un acompañamiento integral y el acceso a redes de contacto y servicios destinados a facilitar la implementación de un nuevo negocio o fortalecer el ya existente.'),
(2, 'Seminario de Costos', 9, 'Instalaciones de Asociación Salvadoreña de la industria', '08:00 - 17:00', '1 día', 'Ampliar información con herramientas  de control de análisis y reportes que permitan administración de la gestión idónea de costos \r\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargos`
--

CREATE TABLE `cargos` (
  `id_carg` int(2) NOT NULL,
  `nombre_carg` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id_categ` int(11) NOT NULL,
  `n_categ` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id_categ`, `n_categ`) VALUES
(1, 'Maestría'),
(2, '\0P\0o\0s\0t\0-\0g\0r\0a\0d\0o'),
(3, '\0D\0i\0p\0l\0o\0m\0a\0d\0o'),
(4, '\0D\0o\0c\0t\0o\0r\0a\0d\0o');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

CREATE TABLE `departamentos` (
  `id_depto` int(2) NOT NULL,
  `nombre_depto` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `departamentos`
--

INSERT INTO `departamentos` (`id_depto`, `nombre_depto`) VALUES
(1, 'Ahuachapán'),
(2, 'Sonsonate'),
(3, 'Santa Ana'),
(4, 'Chalatenango'),
(5, 'San Salvador'),
(6, 'La Libertad'),
(7, 'Cabañas'),
(8, 'San Vicente'),
(9, 'Cuscatlán'),
(10, 'La Paz'),
(11, 'Usulután'),
(12, 'San Francisco Gotera'),
(13, 'San Miguel'),
(14, 'La Unión');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `emprendimientos`
--

CREATE TABLE `emprendimientos` (
  `id_emp` int(2) NOT NULL,
  `nombre_emp` varchar(500) NOT NULL,
  `responsable_emp` varchar(500) NOT NULL,
  `rubro_emp` int(2) NOT NULL,
  `tiempo_emp` varchar(50) NOT NULL,
  `descripcion_emp` varchar(1500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `emprendimientos`
--

INSERT INTO `emprendimientos` (`id_emp`, `nombre_emp`, `responsable_emp`, `rubro_emp`, `tiempo_emp`, `descripcion_emp`) VALUES
(1, 'Agencyes', 'Gerson Alexis Flores Reyes\r\n', 11, '5 años', 'Realizan Actividades de impresión y actividades de servicios conexas'),
(2, 'Open Load', 'Ricardo Alexander Coreas Velásquez\r\n', 3, '3 años', 'Mantenimiento y reparación de maquinaria y equipo informático\r\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

CREATE TABLE `empresas` (
  `id_empresa` int(2) NOT NULL,
  `nombre_empresa` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudio`
--

CREATE TABLE `estudio` (
  `id_est` int(11) NOT NULL,
  `nombre_est` varchar(200) CHARACTER SET utf8 NOT NULL,
  `categ_est` int(2) NOT NULL,
  `inst_est` int(2) NOT NULL,
  `prog_est` int(2) DEFAULT NULL,
  `rub_est` int(2) NOT NULL,
  `duracion_est` varchar(50) CHARACTER SET utf8 NOT NULL,
  `mod_est` int(2) NOT NULL,
  `descripcion_est` varchar(900) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `estudio`
--

INSERT INTO `estudio` (`id_est`, `nombre_est`, `categ_est`, `inst_est`, `prog_est`, `rub_est`, `duracion_est`, `mod_est`, `descripcion_est`) VALUES
(1, 'Maestría en Robótica', 1, 1, 1, 3, '2 años', 1, ''),
(5, 'Seguridad Eficaz y Acceso a la Justicia con Enfoque de Derechos Humanos', 3, 2, 2, 6, '5 meses', 3, 'Capacitar al personal de las instituciones policiales en temas de Derechos Humanos, actualizando los conocimientos a la luz de los cambios que la modernidad impone y de las demandas ciudadanas, aportando herramientas indispensables para desarrollar un pensamiento reflexivo y positivo, desde una perspectiva prospectiva e interdisciplinaria, generando competencias en el alumnado para una actuación policial coherente y óptima, a través del análisis de la relación existente entre la función policial y derechos humanos.'),
(6, 'Doctorado en Ciencias Económicas', 4, 3, NULL, 13, 'Tres años', 1, 'Un objetivo primordial del Doctorado en Ciencias Económicas (DoCE) es formar investigadores en las Ciencias Económicas; profesionales capaces de impulsar el avance de la disciplina económica aplicada a los problemas del desarrollo económico que adolece la región centroamericana en general y particularmente El Salvador. Así, el DoCE, está abocado a ser un doctorado que permita el desarrollo pleno de las Ciencias Económicas; por lo tanto, engloba y trasciende aquellos programas doctorales simplemente para hacer negocios.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `financiamientos`
--

CREATE TABLE `financiamientos` (
  `id_finan` int(2) NOT NULL,
  `nombre_finan` varchar(1500) NOT NULL,
  `descripcion_finan` varchar(1500) NOT NULL,
  `sponsor_finan` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `financiamientos`
--

INSERT INTO `financiamientos` (`id_finan`, `nombre_finan`, `descripcion_finan`, `sponsor_finan`) VALUES
(1, 'Banca EmprendES', 'Aporte destinado a compra de mobiliario, maquinaria, capital de trabajo y remodelación de instalaciones, entre otros', 7),
(2, 'Corredores Productivos', 'El fin del programa es contribuir al crecimiento económico en municipios priorizados de la Franja Costero-Marina. Los objetivos específicos del programa son:i) aumentar la competitividad de las Micro, Pequeña y Mediana Empresa (MIPYME) ubicada en estos territorios; ii) mejorar la infraestructura productiva, operativa y logística a nivel local para incrementar la competitividad; iii) fortalecer la gestión ambiental de la Franja Costero Marina (FCM), como elemento fundamental para lograr un desarrollo ambientalmente sostenible y equilibrado en estos territorios; y iv) contribuir al fortalecimiento del marco institucional, normativo y de políticas públicas que apoyen al desarrollo de corredores productivos.', 6),
(3, 'Empresa Móvil', 'Te has preguntado ¿cómo puedes tener tu propio negocio, crecer e innovar?\r\nEn FosoFamilia te ayudamos proporcionándote herramientas financieras y técnicas para tu desarrollo y el de tu negocio.\r\nContamos con la línea de crédito “Empresa Móvil” que te brinda diferentes opciones para que inicies tu negocio.', 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `institucion`
--

CREATE TABLE `institucion` (
  `id_inst` int(2) NOT NULL,
  `nombre_ins` varchar(70) COLLATE utf8_spanish_ci NOT NULL,
  `pais_ins` varchar(70) COLLATE utf8_spanish_ci NOT NULL,
  `ciudad_ins` varchar(70) COLLATE utf8_spanish_ci NOT NULL,
  `telefono_ins` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `correo_ins` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `sitio_ins` varchar(70) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `institucion`
--

INSERT INTO `institucion` (`id_inst`, `nombre_ins`, `pais_ins`, `ciudad_ins`, `telefono_ins`, `correo_ins`, `sitio_ins`) VALUES
(1, 'Innopolis University', 'Russia', 'Innopolis', '+7 (843) 203-92-53 ', 'university@innopolis.ru', 'https://university.innopolis.ru/en/'),
(2, 'Universidad de Chile', 'Chile', 'Santiago de Chile', '+56 2 29782000', NULL, 'http://www.uchile.cl/'),
(3, 'Universidad de El Salvador', 'El Salvador', 'San Salvador', '2521-0177', 'doctorado.economia@ues.edu.sv', 'ues.edu.sv');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modalidades`
--

CREATE TABLE `modalidades` (
  `id_mod` int(2) NOT NULL,
  `tipo_mod` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `modalidades`
--

INSERT INTO `modalidades` (`id_mod`, `tipo_mod`) VALUES
(1, 'Presencial'),
(2, 'Virtual'),
(3, 'Mixta');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `cod_noticia` int(11) NOT NULL,
  `Titulo` varchar(100) NOT NULL,
  `Imagen` varchar(500) NOT NULL,
  `Contenido` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ofertas`
--

CREATE TABLE `ofertas` (
  `id_oferta` int(2) NOT NULL,
  `nombre_of` varchar(1000) NOT NULL,
  `cargo_of` int(2) NOT NULL,
  `empresa_of` int(2) NOT NULL,
  `direccion_of` varchar(900) NOT NULL,
  `salariomin_of` int(5) NOT NULL,
  `salariomax_of` int(5) DEFAULT NULL,
  `imagen_of` varchar(900) NOT NULL,
  `funciones_of` varchar(1000) NOT NULL,
  `requisitos_of` varchar(1000) NOT NULL,
  `deptos_of` int(2) NOT NULL,
  `categorias_of` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

CREATE TABLE `perfil` (
  `id_perfil` int(11) NOT NULL,
  `nombres` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `genero` varchar(13) NOT NULL,
  `fecha_nacimiento` varchar(11) NOT NULL,
  `foto_per` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `perfil`
--

INSERT INTO `perfil` (`id_perfil`, `nombres`, `apellidos`, `genero`, `fecha_nacimiento`, `foto_per`) VALUES
(26, 'Carlos Gabriel', 'Ramos ', 'M', '2018-05-14', '24067839_10215631749009699_1115630447003167789_n.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programas`
--

CREATE TABLE `programas` (
  `id_prog` int(11) NOT NULL,
  `nombre_prog` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `sponsor_prog` int(2) NOT NULL,
  `descripcion_prog` varchar(1500) COLLATE utf8_spanish_ci DEFAULT NULL,
  `perfilAplicante_prog` varchar(1500) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `programas`
--

INSERT INTO `programas` (`id_prog`, `nombre_prog`, `sponsor_prog`, `descripcion_prog`, `perfilAplicante_prog`) VALUES
(1, 'Becas de la embajada de Rusia en El Salvador', 1, 'La beca cubre 100% del costo de los estudios. \r\nAproximadamente 42 000 rublos para estudiantes de maestría en caso de un rendimiento académico perfecto. \r\nLa beca no cubre pasaje aéreo.', 'Ser salvadoreño y residir en El Salvador. \r\nExcelente conocimiento de matemática. \r\nBuen desempeño académico en física e informática (programación), estadísticas y algoritmos. \r\nConocimiento de teoría de ingeniería eléctrica, ingeniería mecánica y control. \r\n-Comprender qué es el robot y las áreas de experiencia práctica robótica en la industria'),
(2, 'Becas del Ministerio de Relaciones Exteriores SV', 2, 'BECA COMPLETA: \r\n\r\nEl Curso financiará*: \r\n\r\n-Pasajes desde el país de origen hasta Santiago de Chile. \r\n\r\n-Arancel y costos del Programa de Diplomado. \r\n\r\n-Traslado aeropuerto-hotel-aeropuerto. \r\n\r\n-Alojamiento. \r\n\r\n-Viático de US$ 30 diarios por concepto de alimentación. ', '-Ser salvadoreño residiendo en el país. \r\n\r\n-Ser integrante titular del cuerpo policial en servicio activo del país convocado, cuyo rol se encuentre vinculado a materias de seguridad y derechos humanos. \r\n\r\n-Ser encargado/a o con influencia en áreas de educación y formación policial, fiscalización y control interno, como asimismo, asesoría estratégica en los mandos respectivos y áreas operativas y de gestión. \r\n\r\n-Contar con al menos 10 años de servicio (con proyección institucional). \r\n\r\n-Ser autorizado por su jefatura directa e institución que representa para participar en el presente Diplomado, y fundamentalmente la autorización para viajar a Chile para participar en la semana presencial desde el 12 al 16 de noviembre de 2018. \r\n\r\n-Contar con el respaldo de la institución policial a la que pertenece. \r\n\r\n-Presentar salud física y mental compatible con la actividad académica. Aquellas postulantes que estén embarazadas deben presentar un certificado médico que acredite que su participación en el Diplomado no acarrea riesgos para su salud. \r\n\r\n-Contar con la documentación necesaria y vigente para el ingreso al país. ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rubros`
--

CREATE TABLE `rubros` (
  `id_tag` int(11) NOT NULL,
  `nombre_tag` varchar(70) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `rubros`
--

INSERT INTO `rubros` (`id_tag`, `nombre_tag`) VALUES
(1, 'Salud'),
(2, 'Educación'),
(3, 'Tecnología'),
(4, 'Medio Ambiente'),
(5, 'Negocios'),
(6, 'Humanidades'),
(7, 'Ciencias Exactas'),
(8, 'Gastronomía'),
(9, 'Logística'),
(10, 'Finanzas'),
(11, 'Consultoría'),
(12, 'Soporte técnico'),
(13, 'Economía'),
(14, 'Administración');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sponsor`
--

CREATE TABLE `sponsor` (
  `id_spon` int(2) NOT NULL,
  `nombre_spon` varchar(50) NOT NULL,
  `abreviatura_spon` varchar(50) DEFAULT NULL,
  `correo_spon` varchar(50) DEFAULT NULL,
  `telefono_spon` int(10) DEFAULT NULL,
  `sitio_spon` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sponsor`
--

INSERT INTO `sponsor` (`id_spon`, `nombre_spon`, `abreviatura_spon`, `correo_spon`, `telefono_spon`, `sitio_spon`) VALUES
(1, 'Consulado de Rusia en El Salvador', NULL, 'malicia2513@yahoo.com', 22630641, 'https://www.embassypages.com/embajada21640/'),
(2, 'Ministerio de Relaciones Exteriores de El Salvador', 'MINREX', 'infobecas@rree.gob.sv', 22311308, 'http://becas.rree.gob.sv/'),
(3, 'Instituto Salvadoreño de Formación Profesional', 'INSAFORP', NULL, 25227300, 'insaforp.org.sv'),
(4, 'Fundación Empresarial para el Desarrollo Educativo', 'FEPADE', 'fepade@fepade.edu.sv', 22121600, 'fepade.org.sv'),
(5, 'Junior Achievement El Salvador', 'JAES', 'info@jaelsalvador.org ', 22635354, 'http://jaelsalvador.org/'),
(6, 'Fondo de Desarrollo Productivo', 'FONDEPRO', NULL, NULL, 'fondepro.gob.sv'),
(7, 'Banco de Desarrollo de El Salvador', 'BANDESAL', 'redes.sociales@bandesal.gob.sv', 25921100, 'bandesal.gob.sv'),
(8, 'Fondo Solidario para la Familia Microempresaria', 'FOSOFAMILIA', 'comunicaciones@fosofamilia.gob.sv', 25911000, 'fosofamilia.gob.sv'),
(9, 'Asociación Salvadoreña de Industriales', 'ASI', 'info@asi.com.sv', 22679200, 'industriaelsalvador.com'),
(10, 'Universidad Doctor José Matías Delgado', 'UJMD', 'posgradomatias@ujmd.edu.sv', 22124000, 'ujmd.edu.sv');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(60) DEFAULT NULL,
  `profile_pic` varchar(250) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `kind` int(11) NOT NULL DEFAULT '1',
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `username`, `name`, `email`, `password`, `profile_pic`, `is_active`, `kind`, `created_at`) VALUES
(1, 'admin', 'Amner Saucedo Sosa', 'waptoing7@gmail.com', '90b9aa7e25f80cf4f64e990b78a9fc5ebd6cecad', 'IMG_20180313_150215_1.jpg', 1, 1, '2017-07-15 12:05:45'),
(6, 'usuario', 'gerardo rosales ', 'solorzgerard', 'adcd7048512e64b48da55b027577886ee5a36350', 'IMG_20180313_150215_1.jpg', 1, 1, '2018-05-13 10:44:50'),
(7, 'mad', 'mad', 'asds', 'mad', NULL, 1, 1, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_user` int(11) NOT NULL,
  `nick_user` varchar(80) NOT NULL,
  `pass_user` varchar(200) NOT NULL,
  `status_user` int(11) NOT NULL,
  `nivel_access_user` int(11) NOT NULL,
  `perfil_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_user`, `nick_user`, `pass_user`, `status_user`, `nivel_access_user`, `perfil_user`) VALUES
(11, 'cgabriel.rp@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 1, 3, 26);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `capacitaciones`
--
ALTER TABLE `capacitaciones`
  ADD PRIMARY KEY (`id_cap`),
  ADD KEY `sponsor_cap` (`sponsor_cap`);

--
-- Indices de la tabla `cargos`
--
ALTER TABLE `cargos`
  ADD PRIMARY KEY (`id_carg`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categ`);

--
-- Indices de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  ADD PRIMARY KEY (`id_depto`);

--
-- Indices de la tabla `emprendimientos`
--
ALTER TABLE `emprendimientos`
  ADD PRIMARY KEY (`id_emp`),
  ADD KEY `rubro_emp` (`rubro_emp`),
  ADD KEY `rubro_emp_2` (`rubro_emp`);

--
-- Indices de la tabla `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`id_empresa`);

--
-- Indices de la tabla `estudio`
--
ALTER TABLE `estudio`
  ADD PRIMARY KEY (`id_est`),
  ADD KEY `categ_est` (`categ_est`),
  ADD KEY `inst_est` (`inst_est`),
  ADD KEY `prog_est` (`prog_est`),
  ADD KEY `rub_est` (`rub_est`),
  ADD KEY `mod_est` (`mod_est`),
  ADD KEY `prog_est_2` (`prog_est`);

--
-- Indices de la tabla `financiamientos`
--
ALTER TABLE `financiamientos`
  ADD PRIMARY KEY (`id_finan`),
  ADD KEY `sponsor_finan` (`sponsor_finan`);

--
-- Indices de la tabla `institucion`
--
ALTER TABLE `institucion`
  ADD PRIMARY KEY (`id_inst`);

--
-- Indices de la tabla `modalidades`
--
ALTER TABLE `modalidades`
  ADD PRIMARY KEY (`id_mod`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`cod_noticia`);

--
-- Indices de la tabla `ofertas`
--
ALTER TABLE `ofertas`
  ADD PRIMARY KEY (`id_oferta`),
  ADD KEY `empresa_of` (`empresa_of`),
  ADD KEY `cargo_of` (`cargo_of`),
  ADD KEY `deptos_of` (`deptos_of`),
  ADD KEY `categorias_of` (`categorias_of`);

--
-- Indices de la tabla `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`id_perfil`);

--
-- Indices de la tabla `programas`
--
ALTER TABLE `programas`
  ADD PRIMARY KEY (`id_prog`),
  ADD KEY `sponsor_prog` (`sponsor_prog`);

--
-- Indices de la tabla `rubros`
--
ALTER TABLE `rubros`
  ADD PRIMARY KEY (`id_tag`);

--
-- Indices de la tabla `sponsor`
--
ALTER TABLE `sponsor`
  ADD PRIMARY KEY (`id_spon`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `fk_usuario` (`perfil_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `capacitaciones`
--
ALTER TABLE `capacitaciones`
  MODIFY `id_cap` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `cargos`
--
ALTER TABLE `cargos`
  MODIFY `id_carg` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categ` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  MODIFY `id_depto` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `emprendimientos`
--
ALTER TABLE `emprendimientos`
  MODIFY `id_emp` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `empresas`
--
ALTER TABLE `empresas`
  MODIFY `id_empresa` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `estudio`
--
ALTER TABLE `estudio`
  MODIFY `id_est` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `financiamientos`
--
ALTER TABLE `financiamientos`
  MODIFY `id_finan` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `institucion`
--
ALTER TABLE `institucion`
  MODIFY `id_inst` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `modalidades`
--
ALTER TABLE `modalidades`
  MODIFY `id_mod` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `cod_noticia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `perfil`
--
ALTER TABLE `perfil`
  MODIFY `id_perfil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `programas`
--
ALTER TABLE `programas`
  MODIFY `id_prog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `rubros`
--
ALTER TABLE `rubros`
  MODIFY `id_tag` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `sponsor`
--
ALTER TABLE `sponsor`
  MODIFY `id_spon` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `capacitaciones`
--
ALTER TABLE `capacitaciones`
  ADD CONSTRAINT `capacitaciones_ibfk_1` FOREIGN KEY (`sponsor_cap`) REFERENCES `sponsor` (`id_spon`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `emprendimientos`
--
ALTER TABLE `emprendimientos`
  ADD CONSTRAINT `emprendimientos_ibfk_1` FOREIGN KEY (`rubro_emp`) REFERENCES `rubros` (`id_tag`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `estudio`
--
ALTER TABLE `estudio`
  ADD CONSTRAINT `estudio_ibfk_1` FOREIGN KEY (`categ_est`) REFERENCES `categorias` (`id_categ`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `estudio_ibfk_2` FOREIGN KEY (`mod_est`) REFERENCES `modalidades` (`id_mod`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `estudio_ibfk_3` FOREIGN KEY (`rub_est`) REFERENCES `rubros` (`id_tag`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `estudio_ibfk_4` FOREIGN KEY (`inst_est`) REFERENCES `institucion` (`id_inst`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `estudio_ibfk_5` FOREIGN KEY (`prog_est`) REFERENCES `programas` (`id_prog`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `financiamientos`
--
ALTER TABLE `financiamientos`
  ADD CONSTRAINT `financiamientos_ibfk_1` FOREIGN KEY (`sponsor_finan`) REFERENCES `sponsor` (`id_spon`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `ofertas`
--
ALTER TABLE `ofertas`
  ADD CONSTRAINT `ofertas_ibfk_1` FOREIGN KEY (`empresa_of`) REFERENCES `empresas` (`id_empresa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ofertas_ibfk_2` FOREIGN KEY (`categorias_of`) REFERENCES `rubros` (`id_tag`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ofertas_ibfk_3` FOREIGN KEY (`cargo_of`) REFERENCES `cargos` (`id_carg`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ofertas_ibfk_4` FOREIGN KEY (`deptos_of`) REFERENCES `departamentos` (`id_depto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `programas`
--
ALTER TABLE `programas`
  ADD CONSTRAINT `programas_ibfk_1` FOREIGN KEY (`sponsor_prog`) REFERENCES `sponsor` (`id_spon`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_usuario` FOREIGN KEY (`perfil_user`) REFERENCES `perfil` (`id_perfil`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
