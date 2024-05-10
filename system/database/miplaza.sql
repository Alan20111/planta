-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-12-2023 a las 15:31:14
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `miplaza`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `card-nosotros`
--

CREATE TABLE `card-nosotros` (
  `id` int(250) NOT NULL,
  `img` varchar(500) NOT NULL,
  `imgName` varchar(50) NOT NULL,
  `navtittle` varchar(50) NOT NULL,
  `tittle` varchar(50) NOT NULL,
  `descripcion` varchar(350) NOT NULL,
  `color` varchar(50) NOT NULL,
  `sombra` varchar(50) NOT NULL,
  `act1` varchar(50) NOT NULL,
  `act2` varchar(50) NOT NULL,
  `act3` varchar(50) NOT NULL,
  `act4` varchar(50) NOT NULL,
  `act5` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `card-nosotros`
--

INSERT INTO `card-nosotros` (`id`, `img`, `imgName`, `navtittle`, `tittle`, `descripcion`, `color`, `sombra`, `act1`, `act2`, `act3`, `act4`, `act5`) VALUES
(1, 'public/img/db/6543fff23e1a8_Imagen de WhatsApp 2023-10-25 a las 08.02.01_138e62e6.jpg', 'Imagen de WhatsApp 2023-10-25 a las 08.02.01_138e6', 'Gte. General', 'Gerente General', 'El Gerente General es el encargado de supervisar y coordinar todas las operaciones en la tienda, desde la gestión de personal hasta el mantenimiento de inventario y la relación con proveedores, con el', '#49b62b', '#7be85d', 'Supervisar la Apertura de la Tienda', 'Gestión de Personal y Uniformes', 'Mantenimiento del Inventario y Almacén', 'Gestión de Proveedores', 'Facturación y Ventas'),
(2, 'public/img/db/6543f35340b0c_Imagen de WhatsApp 2023-10-25 a las 08.02.01_7cf1abb7.jpg', 'Imagen de WhatsApp 2023-10-25 a las 08.02.01_7cf1a', 'Gte. Ope.', 'Gerente de Operaciones', 'El Gerente de Operaciones se encuentra en una posición estratégica para garantizar que la empresa funcione de manera eficiente, cumpliendo con los estándares de operación y los compromisos financieros', '#e62d40', '#ff5f72', 'Supervisión de Puntualidad y Asistencia', 'Control de Asistencia', 'Checklist para Gerentes de Tienda', 'Supervisión de Uniformes y Orden', 'Gestión de Finanzas y Personal'),
(4, 'public/img/db/65452dccd77cc_Imagen de WhatsApp 2023-10-25 a las 08.02.01_df62b154.jpg', 'Imagen de WhatsApp 2023-10-25 a las 08.02.01_df62b', 'Almacén', 'Encargado de Almacén', 'Estas actividades son esenciales para mantener la operación del almacén en orden, garantizar la seguridad del personal y cumplir con los estándares de calidad y eficiencia.', '#eab034', '#ffe266', 'Gestión de Asistencia y Puntualidad', 'Apertura y Seguridad del Almacén', 'Supervisión del Personal', 'Gestión de Inventario', 'Interacción con Proveedores y Clientes'),
(5, 'public/img/db/65454500a20f2_tree (1).jpg', 'tree (1).jpg', 'Aux. Admin.', 'Auxiliar Administrativo', 'Estas actividades están diseñadas para mostrar nuestro compromiso con un excelente servicio al cliente y la protección de tus datos personales. Si tienes alguna pregunta o inquietud, nuestros auxiliar', '#a434ef', '#d666ff', 'Brindar un Servicio Cordial y Profesional', 'Garantizar una Experiencia de Atención al Cliente ', 'Manejar Información Confidencial de Manera Segura', 'Facilitar la Resolución de Problemas y Peticiones', 'Asegurar la Precisión y Cumplimiento de Documentac'),
(6, 'public/img/db/657c9bd9dc5cf_IMG-20231215-WA0008.jpg', 'IMG-20231215-WA0008.jpg', 'Surtidor', 'Surtidor de Bodega', 'Nuestro surtidor se compromete a brindar una atención excepcional a nuestros clientes. Escucha activamente sus necesidades, busca soluciones rápidas y efectivas, y se asegura de que los clientes se si', '#e13344', '#ff6576', 'Eficiencia y Puntualidad en el Suministro', 'Asegurando la Seguridad de las Mercancías', 'Mantenimiento del Stock y Organización', 'Relación con Clientes y Proveedores', 'Solución de Problemas Ágil'),
(7, 'public/img/db/656a0cff30e66_Plantillajime.jpg', 'Plantillajime.jpg', 'Cajero', 'Cajero', 'El puesto de cajero es un papel central en nuestra empresa, ya que implica una interacción directa con nuestros valiosos clientes en el punto de venta. Los cajeros desempeñan un papel crucial al brindar atención ', '#477ff0', '#79b1ff', 'Gestionan su de Asistencia y Puntualidad', 'Cumplir con el Uniforme e Identificación', 'Realizar Cortes Precisos y Dentro del Margen de To', 'Supervisar Estantes, Faltantes y Caducidades', 'Brindar un Servicio Cordial y Profesional'),
(8, 'public/img/db/654549da85122_Imagen de WhatsApp 2023-10-25 a las 08.02.01_138e62e6.jpg', 'Imagen de WhatsApp 2023-10-25 a las 08.02.01_138e6', 'Cargador', 'Cargador', 'El cargador es un miembro fundamental de nuestro equipo, desempeñando un papel crucial en la logística y operaciones de nuestro almacén. Su principal responsabilidad es garantizar un flujo de trabajo', '#df8f34', '#ffc166', 'Trasladar mercancía', 'Cumplir con el Uniforme e Identificación', 'Surtir de Manera Adecuada y Eficiente', 'Mantener Orden y Limpieza en el Almacén', 'Apoyar en las Actividades del Almacén'),
(9, 'public/img/db/65454adc25c75_Imagen de WhatsApp 2023-10-25 a las 08.02.01_df62b154.jpg', 'Imagen de WhatsApp 2023-10-25 a las 08.02.01_df62b', 'Carnes F.', 'Carnes Frías', 'Carnes Frías requiere habilidades específicas en el manejo de alimentos, atención al cliente y responsabilidad en el manejo de productos frescos.', '#ea2e41', '#ff6073', 'Orden y Limpieza del Área de Carnes Frías', 'Mantener Productos en Stock', 'Mantener la Cámara en Orden', 'Atención al Cliente', 'Manejo de Productos Frescos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `user` varchar(100) NOT NULL,
  `contrasena` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `user`, `contrasena`) VALUES
(1, 'miplaza', 'miplaza2023');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `card-nosotros`
--
ALTER TABLE `card-nosotros`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `card-nosotros`
--
ALTER TABLE `card-nosotros`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
