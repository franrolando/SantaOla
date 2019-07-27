-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 29-12-2018 a las 01:11:02
-- Versión del servidor: 5.7.17-log
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `santaola`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carouselimages`
--

CREATE TABLE `carouselimages` (
  `id` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `name` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `type` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `status` varchar(10) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `categoryname` varchar(15) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `events`
--

CREATE TABLE `events` (
  `idevent` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(300) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(10) DEFAULT NULL,
  `oncarousel` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `events`
--

INSERT INTO `events` (`idevent`, `title`, `description`, `date`, `status`, `oncarousel`) VALUES
(13, 'Campeonato de meo en largo', 'Bananero tournament', '2019-07-03', 'active', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `images`
--

CREATE TABLE `images` (
  `imgid` varchar(15) NOT NULL,
  `image` varchar(100) NOT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `images`
--

INSERT INTO `images` (`imgid`, `image`, `status`) VALUES
('1313131', 'view/images/sponsors/1313131-1.jpg', 'active'),
('1313131', 'view/images/sponsors/1313131-2.jpg', 'active'),
('1313131', 'view/images/sponsors/1313131-3.jpg', 'active'),
('COD-001', 'view/images/products/Crocs-1.jpg', 'active'),
('COD-002', 'view/images/products/Jean Chinchulin-1.jpg', 'active'),
('COD-003', 'view/images/products/Zapa-1.jpg', 'active'),
('13', 'view/images/events/13-1.jpg', 'active');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `idproduct` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `status` varchar(10) DEFAULT NULL,
  `oncarousel` tinyint(1) NOT NULL,
  `sex` varchar(6) DEFAULT NULL,
  `category` varchar(50) NOT NULL,
  `isnew` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`idproduct`, `name`, `description`, `price`, `status`, `oncarousel`, `sex`, `category`, `isnew`) VALUES
('COD-001', 'Crocs', 'Calzado hogareño simil a pantuflas y ojotas', 500, 'active', 0, 'Hombre', 'Hombre', 1),
('COD-002', 'Jean Chinchulin', 'Un jean ajusta3', 700, 'active', 0, 'Mujer', 'Mujer', 1),
('COD-003', 'Zapa', 'un s', 21, 'active', 0, 'Mujer', 'Mujer', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sponsors`
--

CREATE TABLE `sponsors` (
  `dni` varchar(15) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(200) NOT NULL,
  `status` varchar(10) DEFAULT NULL,
  `oncarousel` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sponsors`
--

INSERT INTO `sponsors` (`dni`, `name`, `description`, `status`, `oncarousel`) VALUES
('1313131', 'Kelly Slater', 'alto picante', 'active', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `user` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(15) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carouselimages`
--
ALTER TABLE `carouselimages`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categoryname`);

--
-- Indices de la tabla `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`idevent`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`idproduct`);

--
-- Indices de la tabla `sponsors`
--
ALTER TABLE `sponsors`
  ADD PRIMARY KEY (`dni`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `events`
--
ALTER TABLE `events`
  MODIFY `idevent` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
