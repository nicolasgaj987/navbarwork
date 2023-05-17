-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-05-2023 a las 16:38:33
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `trabajofacil`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admins`
--

CREATE TABLE `admins` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Correo` varchar(100) NOT NULL,
  `Passwords` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `admins`
--

INSERT INTO `admins` (`id`, `Nombre`, `Correo`, `Passwords`) VALUES
(1, 'admin1', 'prueba@correo.com', 'aaa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuariosc`
--

CREATE TABLE `usuariosc` (
  `idUsuario` mediumint(8) UNSIGNED NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Apellido1` varchar(100) NOT NULL,
  `Apellido2` varchar(100) NOT NULL,
  `Correo` varchar(100) NOT NULL,
  `Region` varchar(3) NOT NULL,
  `Genero` varchar(2) NOT NULL,
  `Rut` varchar(15) NOT NULL,
  `Passwords` varchar(100) NOT NULL,
  `Fecha` varchar(15) NOT NULL,
  `Company` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuariosc`
--

INSERT INTO `usuariosc` (`idUsuario`, `Nombre`, `Apellido1`, `Apellido2`, `Correo`, `Region`, `Genero`, `Rut`, `Passwords`, `Fecha`, `Company`) VALUES
(1, 'Courtney', 'Javier', 'Daniel', 'non.nisi.aenean@google.com', '6', 'm', '4110756-1', '11', '2023-01-09', 'Predeterminado'),
(2, 'Jordan', 'Valentina', 'Testudines', 'semper.et.lacinia@hotmail.com', '5', 'o', '46278658-1', '15', '2023-11-30', 'Predeterminado'),
(3, 'Ashely', 'Lopez', 'Alonsos', 'orci.in.consequat@hotmail.com', '5', 'm', '1584077-3', '17', '2023-02-28', 'Predeterminado'),
(4, 'Macy', 'Ramirez', 'Augustin', 'quis.massa.mauris@hotmail.com', '15', 'f', '10649513-0', '15', '2024-02-03', 'Predeterminado'),
(5, 'Aretha', 'Magdalena', 'Diem', 'volutpat.ornare@hotmail.com', '6', 'm', '14224696-1', '15', '2022-08-05', 'Predeterminado'),
(6, 'Xyla', 'Monserrat', 'Ramirez', 'donec.est.nunc@hotmail.com', '15', 'f', '10172535-9', '17', '2022-09-09', 'Predeterminado'),
(7, 'Clayton', 'Jose', 'Munoz', 'sit.amet@google.com', '7', 'm', '4749241-6', '3', '2024-03-13', 'Predeterminado'),
(8, 'Hiroko', 'Paz', 'Sebastian', 'fusce.aliquet@hotmail.com', '13', 'f', '41180652-9', '19', '2022-10-03', 'Predeterminado'),
(9, 'Evan', 'Vega', 'Maximo', 'convallis.est@hotmail.com', '6', 'f', '18231548-6', '1', '2024-04-10', 'Predeterminado'),
(10, 'Melinda', 'Monserrat', 'Gomez', 'orci.luctus@hotmail.com', '1', 'f', '34379825-3', '13', '2023-05-07', 'Predeterminado'),
(11, 'Vincent', 'Vasquez', 'Trinidad', 'cursus.purus.nullam@google.com', '6', 'm', '30505781-9', '19', '2023-12-17', 'Predeterminado'),
(12, 'Sylvester', 'Francisco', 'Javier', 'vel@google.com', '12', 'o', '14155862-5', '1', '2023-05-16', 'Predeterminado'),
(13, 'Rebecca', 'Emilia', 'Carla', 'et.malesuada@hotmail.com', '12', 'o', '41760621-1', '19', '2023-07-27', 'Predeterminado'),
(14, 'Damon', 'Vega', 'Nunez', 'ipsum.dolor@google.com', '13', 'o', '47472887-0', '7', '2023-04-21', 'Predeterminado'),
(15, 'Ivan', 'Chichi', 'Silva', 'aliquam.erat@google.com', '9', 'm', '17216358-0', '7', '2023-09-13', 'Predeterminado'),
(16, 'Howard', 'Isabella', 'Carrasco', 'in.sodales@google.com', '3', 'f', '31658610-4', '1', '2023-10-20', 'Predeterminado'),
(17, 'Joan', 'Martina', 'Zavala', 'tristique.senectus.et@google.com', '3', 'f', '44562144-7', '7', '2022-08-19', 'Predeterminado'),
(18, 'Mannix', 'Vega', 'Azizi', 'pede.nonummy.ut@hotmail.com', '9', 'f', '26792943-2', '13', '2022-11-04', 'Predeterminado'),
(19, 'Vaughan', 'Emilia', 'Francisco', 'nibh.donec.est@hotmail.com', '14', 'o', '14726168-3', '13', '2022-08-21', 'Predeterminado'),
(20, 'Ingrid', 'Zavala', 'Martin', 'non.leo@google.com', '2', 'f', '45315875-6', '3', '2022-08-20', 'Predeterminado'),
(21, 'Howard', 'Sebastian', 'Carrasco', 'molestie@google.com', '13', 'm', '1080374-8', '17', '2023-06-01', 'Predeterminado'),
(22, 'Finn', 'Catalina', 'Gomez', 'vel.turpis@hotmail.com', '16', 'o', '32517849-3', '1', '2023-02-27', 'Predeterminado'),
(23, 'Coby', 'Rocio', 'Paz', 'vulputate@hotmail.com', '7', 'f', '17952466-K', '17', '2022-12-13', 'Predeterminado'),
(24, 'Abel', 'Julieta', 'Alonsos', 'malesuada@google.com', '16', 'f', '44914988-2', '11', '2022-06-12', 'Predeterminado'),
(25, 'Clementine', 'Monserrat', 'Torres', 'id@google.com', '8', 'm', '36437628-6', '9', '2024-01-29', 'Predeterminado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuariost`
--

CREATE TABLE `usuariost` (
  `idUsuario` mediumint(8) UNSIGNED NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Apellido1` varchar(100) NOT NULL,
  `Apellido2` varchar(100) NOT NULL,
  `Correo` varchar(255) NOT NULL,
  `Region` int(3) NOT NULL,
  `Genero` varchar(2) NOT NULL,
  `Rut` varchar(15) NOT NULL,
  `Passwords` varchar(100) NOT NULL,
  `Fecha` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuariost`
--

INSERT INTO `usuariost` (`idUsuario`, `Nombre`, `Apellido1`, `Apellido2`, `Correo`, `Region`, `Genero`, `Rut`, `Passwords`, `Fecha`) VALUES
(1, 'Quynn', 'Rocio', 'Martinez', 'orci@google.com', 7, 'o', '10139968-0', '3', '2022-11-06'),
(2, 'Lars', 'Vargas', 'Carrasco', 'sodales.elit.erat@google.com', 8, 'f', '37301223-8', '11', '2022-12-30'),
(3, 'Ferris', 'Emilia', 'Diaz', 'blandit.enim@hotmail.com', 6, 'm', '26740885-8', '9', '2023-05-13'),
(4, 'Celeste', 'Vera', 'Soto', 'diam@google.com', 1, 'f', '9430313-3', '13', '2023-12-07'),
(5, 'Denton', 'Bastian', 'Azizi', 'ipsum.suspendisse@google.com', 6, 'f', '50700292-7', '13', '2023-10-26'),
(6, 'Timon', 'Herrera', 'Rivera', 'sem@google.com', 5, 'm', '10967844-9', '1', '2023-03-16'),
(7, 'Kevyn', 'Nunez', 'Sanchez', 'leo.in@google.com', 8, 'f', '28485463-2', '3', '2022-09-16'),
(8, 'Hanna', 'Atlas', 'Vera', 'nulla.magna.malesuada@hotmail.com', 6, 'm', '24366456-K', '19', '2022-12-02'),
(9, 'Medge', 'Gomez', 'Sepulveda', 'egestas.fusce@hotmail.com', 10, 'f', '31286206-9', '1', '2022-07-23'),
(10, 'Jemima', 'Carla', 'Maria', 'dolor.dolor.tempus@google.com', 8, 'f', '66851-6', '11', '2022-08-20'),
(11, 'Nita', 'Matilde', 'Vera', 'tristique.senectus@google.com', 7, 'm', '33585818-2', '15', '2022-09-12'),
(12, 'Ciaran', 'Joaquin', 'Diaz', 'elit.a@hotmail.com', 5, 'f', '17967924-8', '1', '2024-03-11'),
(13, 'Omar', 'Julieta', 'Fernandez', 'lacus@google.com', 2, 'm', '22176300-9', '5', '2023-12-01'),
(14, 'Hedda', 'Sepulveda', 'Luis', 'risus.quis@google.com', 3, 'o', '27353333-8', '15', '2023-12-08'),
(15, 'Nathaniel', 'Ignacio', 'Catalina', 'nulla.facilisis@google.com', 7, 'o', '10731937-9', '5', '2024-01-14'),
(16, 'Flavia', 'Juan', 'Valenzuela', 'mauris.eu@hotmail.com', 10, 'f', '45918502-K', '7', '2022-09-06'),
(17, 'Lila', 'Vera', 'Alonsos', 'nibh.donec.est@google.com', 14, 'o', '41294876-9', '19', '2022-08-30'),
(18, 'Brent', 'Benjamin', 'Isabella', 'quis@hotmail.com', 14, 'o', '27758215-5', '1', '2024-01-25'),
(19, 'Harrison', 'Laura', 'Gutierrez', 'erat@hotmail.com', 15, 'f', '27225695-0', '3', '2022-12-11'),
(20, 'Trevor', 'Rodriguez', 'Chichi', 'congue.turpis@google.com', 13, 'f', '44246278-K', '7', '2023-04-18'),
(21, 'Brandon', 'Benjamin', 'Vera', 'conubia.nostra@google.com', 15, 'o', '1375685-6', '17', '2023-10-08'),
(22, 'Eve', 'Torres', 'Rojas', 'lobortis.ultrices.vivamus@hotmail.com', 10, 'o', '35950558-2', '19', '2024-02-04'),
(23, 'Deacon', 'Miranda', 'Contreras', 'tellus.imperdiet@google.com', 8, 'o', '22295478-9', '7', '2022-11-20'),
(24, 'Ingrid', 'Araya', 'Francisco', 'lobortis.tellus@hotmail.com', 6, 'm', '50317508-8', '1', '2023-09-28'),
(26, 'A', 'A', 'A', 'cvbdfgdfgfdg@gmail.com', 15, 'm', '', 'A', '2023-05-03');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuariosc`
--
ALTER TABLE `usuariosc`
  ADD PRIMARY KEY (`idUsuario`);

--
-- Indices de la tabla `usuariost`
--
ALTER TABLE `usuariost`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admins`
--
ALTER TABLE `admins`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuariosc`
--
ALTER TABLE `usuariosc`
  MODIFY `idUsuario` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `usuariost`
--
ALTER TABLE `usuariost`
  MODIFY `idUsuario` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
