-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost

--
-- Base de datos: `Tienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Cliente`
--

CREATE TABLE IF NOT EXISTS `Cliente` (
  `cod` INT PRIMARY KEY,
  `nombre` varchar(30) UNIQUE NOT NULL,
  `dir_fac` varchar(50) NOT NULL,
  `telef` INT NOT NULL,
  `alias` varchar(20) UNIQUE NOT NULL,
  `pass` varchar(20) NOT NULL
);

--
-- Volcado de datos para la tabla `Cliente`
--

INSERT INTO `Cliente` (`cod`, `nombre`, `dir_fac`, `telef`, `alias`, `pass`) VALUES
(1, 'Pedro Pérez Gil', 'Calle Pasión 69, 3º, 28002 Madrid', 911884777, 'pperez', 'perejil'),
(2, 'Ana Torralbo López', 'Calle Húsar Tiburcio 12, 2º I, 24700 Astorga', 987611884, 'atorralbo', 'torralbo'),
(3, 'Juan Luis Expósito Alonso', 'Calle Cartagena 112, Bajo B, 28002 Madrid', 914178847, 'jlexpo', 'exposito'),
(4, 'Teresa Berganza Jáñez', 'Calle Portería 2, 2º, 24700 Astorga', 987617723, 'tberga', 'berganza');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Pedido`
--

CREATE TABLE IF NOT EXISTS `Pedido` (
  `cod` INT PRIMARY KEY,
  `fecha` DATE NOT NULL,
  `importe` DECIMAL(6,2) NOT NULL,
  `dir_env` varchar(50) NOT NULL,
  `cod_cliente` INT NOT NULL,
  FOREIGN KEY (`cod_cliente`) REFERENCES Cliente(`cod`)
);

--
-- Volcado de datos para la tabla `Pedido`
--

INSERT INTO `Pedido` (`cod`, `fecha`, `importe`, `dir_env`, `cod_cliente`) VALUES
(2016012901, '2016-01-29', 56.50, 'Calle Pasión 69, 3º, 28002 Madrid', 1),
(2016020201, '2016-02-02', 47.50, 'Calle Húsar Tiburcio 12, 2º I, 24700 Astorga', 2),
(2016021901, '2016-02-19', 44.00, 'Calle Pasión 69, 3º, 28002 Madrid', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Producto`
--

CREATE TABLE IF NOT EXISTS `Producto` (
  `cod` INT PRIMARY KEY NOT NULL,
  `nombre` VARCHAR(30) NOT NULL,
  `descrip` VARCHAR(80) NOT NULL,
  `precio` DECIMAL(6,2) NOT NULL
);

--
-- Volcado de datos para la tabla `Producto`
--

INSERT INTO `Producto` (`cod`, `nombre`, `descrip`, `precio`) VALUES
(1, 'Adaptador Acer', ' Adaptador de corriente para Acer 19V 3.42A 65W.', 12.50),
(2, 'Brasero Sogo', 'Brasero eléctrico Sogo. Potencia máxima 900 W.', 15.50),
(3, 'Calienta leches Solac', 'Calienta leches Solac. Potencia 400W. Capacidad 1L. Interior aluminio anodizado.', 42.00),
(4, 'Batidora Bosch', 'Batidora de mano Bosch. Pie de acero inoxidable.', 49.90),
(5, 'Carcasa de disco duro', 'Carcasa para disco duro SATA de 2,5 pulgadas Tooq negra de aluminio.', 12.00),
(6, 'SSD Sandisk', 'Disco duro SSD de 120 GB Sandisk SSD PLUS', 44.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Se_compone`
--

CREATE TABLE IF NOT EXISTS `Se_compone` (
  `cod_ped` INT NOT NULL,
  `cod_prod` INT NOT NULL,
  `unidades` INT NOT NULL,
  PRIMARY KEY (`cod_ped`, `cod_prod`),
  FOREIGN KEY (`cod_ped`) REFERENCES Pedido(`cod`),
  FOREIGN KEY (`cod_prod`) REFERENCES Producto(`cod`)
);

--
-- Volcado de datos para la tabla `Se_compone`
--

INSERT INTO `Se_compone` (`cod_ped`, `cod_prod`, `unidades`) VALUES
(2016012901, 1, 1),
(2016012901, 6, 1),
(2016020201, 2, 1),
(2016020201, 5, 3),
(2016021901, 6, 1);