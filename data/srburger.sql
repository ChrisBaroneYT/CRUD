-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-09-2024 a las 17:49:38
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
-- Base de datos: `srburger`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `Documento` varchar(50) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Telefono` varchar(50) NOT NULL,
  `FechaNacimiento` varchar(50) NOT NULL,
  `Genero` varchar(50) NOT NULL,
  `Mensaje` varchar(200) NOT NULL,
  `TerminosYCondiciones` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`Documento`, `Nombre`, `Correo`, `Telefono`, `FechaNacimiento`, `Genero`, `Mensaje`, `TerminosYCondiciones`) VALUES
('10208423669', 'peguelo', 'peguelo@gmial.com', '320654321', '1999-06-28', 'masculino', 'awfrasfas', '1'),
('10208423669', 'peguelo', 'peguelo@gmial.com', '320654321', '1999-06-28', 'masculino', 'awfrasfas', '1'),
('10208423669', 'peguelo', 'peguelo@gmial.com', '320654321', '1999-06-28', 'masculino', 'awfrasfas', '1'),
('10208423', 'Sosa Yara', 'co.cristiand@gmail.com', '3025373', '1990-06-28', 'masculino', '0', '1'),
('1020842', 'mARIA', 'co.maria@gmail.com', '3025373', '1990-06-28', 'femenino', '0', '1'),
('12345267', 'Dylan', 'dylan@gmail.com', '321654', '2000-10-28', 'masculino', '0', '1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
