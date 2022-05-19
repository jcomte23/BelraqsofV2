-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-04-2022 a las 03:27:02
-- Versión del servidor: 10.4.16-MariaDB
-- Versión de PHP: 7.3.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `belraqsoft`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblclientes`
--

CREATE TABLE `tblclientes` (
  `idCliente` int(11) NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Apellidos` varchar(50) DEFAULT NULL,
  `Documento` varchar(15) DEFAULT NULL,
  `Correo` varchar(100) DEFAULT NULL,
  `Fec_Nacimiento` date DEFAULT NULL,
  `Direccion` varchar(250) DEFAULT NULL,
  `Telf` varchar(40) DEFAULT NULL,
  `Ciudad_Municipio` varchar(50) DEFAULT NULL,
  `Estado` varchar(20) DEFAULT 'Activo',
  `tblTipoDocumento_idTipoDocumento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblcompras`
--

CREATE TABLE `tblcompras` (
  `id_compra` int(11) NOT NULL,
  `FechaCompra` date DEFAULT NULL,
  `TotalCantidadProductos` int(11) DEFAULT NULL,
  `ValorCompra` double DEFAULT NULL,
  `Recibo` varchar(100) DEFAULT NULL,
  `fecharegistro` datetime DEFAULT NULL,
  `Estado` varchar(20) DEFAULT 'Activo',
  `tblUsuarios_idUsuario` int(11) NOT NULL,
  `tblProveedores_idProveedor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbldetallecompra`
--

CREATE TABLE `tbldetallecompra` (
  `idDetalleCompra` int(11) NOT NULL,
  `CantidadProductos` int(11) DEFAULT NULL,
  `SUBTOTAL` double DEFAULT NULL,
  `TOTAL` double DEFAULT NULL,
  `tblCompras_id_compra` int(11) NOT NULL,
  `tblProductos_idProducto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbldetallespedidos`
--

CREATE TABLE `tbldetallespedidos` (
  `idDetallePedidos` int(11) NOT NULL,
  `CantidadProductos` int(11) DEFAULT NULL,
  `SUBTOTAL` double DEFAULT NULL,
  `TOTAL` double DEFAULT NULL,
  `tblProductos_idProducto` int(11) NOT NULL,
  `tblPedidos_idPedido` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbldetallesventas`
--

CREATE TABLE `tbldetallesventas` (
  `idDetalleVentas` int(11) NOT NULL,
  `CantidadProductos` int(11) DEFAULT NULL,
  `SUBTOTAL` double DEFAULT NULL,
  `TOTAL` double DEFAULT NULL,
  `tblProductos_idProducto` int(11) NOT NULL,
  `tblVentas_idVenta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblpagina`
--

CREATE TABLE `tblpagina` (
  `idtblPagina` int(11) NOT NULL,
  `Pagina` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblpedidos`
--

CREATE TABLE `tblpedidos` (
  `idPedido` int(11) NOT NULL,
  `FechaPedido` timestamp NULL DEFAULT NULL,
  `CantidadProductos` int(11) DEFAULT NULL,
  `ValorPedido` double DEFAULT NULL,
  `Estado` varchar(20) DEFAULT 'Proceso',
  `tblClientes_idCliente` int(11) NOT NULL,
  `tblUsuarios_idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblproductos`
--

CREATE TABLE `tblproductos` (
  `idProducto` int(11) NOT NULL,
  `Codigo` varchar(45) DEFAULT NULL,
  `Nombre` varchar(80) DEFAULT NULL,
  `Descripcion` varchar(255) DEFAULT NULL,
  `Valor_unitario` double DEFAULT NULL,
  `Stock` int(11) DEFAULT NULL,
  `Detal` double DEFAULT NULL,
  `Mayor` double DEFAULT NULL,
  `Estado` varchar(20) DEFAULT 'Activo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tblproductos`
--

INSERT INTO `tblproductos` (`idProducto`, `Codigo`, `Nombre`, `Descripcion`, `Valor_unitario`, `Stock`, `Detal`, `Mayor`, `Estado`) VALUES
(1, '12', 'Labial Rojo', 'Punta delgada', 2000, 12, 2200, 2100, 'Activo'),
(2, '13', 'Sombra Negra', 'Lucida', 5000, 12, 5500, 5400, 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblproveedores`
--

CREATE TABLE `tblproveedores` (
  `idProveedor` int(11) NOT NULL,
  `Nombre_Razon_social` varchar(50) DEFAULT NULL,
  `Nombre_Contacto` varchar(80) DEFAULT NULL,
  `Numero_Contacto` varchar(50) DEFAULT NULL,
  `Numero_iden_NIT` varchar(25) DEFAULT NULL,
  `Correo` varchar(100) DEFAULT NULL,
  `Telf` varchar(40) DEFAULT NULL,
  `Descripcion` varchar(250) DEFAULT NULL,
  `Direccion` varchar(250) DEFAULT NULL,
  `Ciudad_Municipio` varchar(50) DEFAULT NULL,
  `Estado` varchar(20) DEFAULT 'Activo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblroles`
--

CREATE TABLE `tblroles` (
  `id_Roles` int(11) NOT NULL,
  `Nombre` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblroles_has_tblpagina`
--

CREATE TABLE `tblroles_has_tblpagina` (
  `id_Pag_Roles` int(11) NOT NULL,
  `tblRoles_id_Roles` int(11) NOT NULL,
  `tblPagina_idtblPagina` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbltipodocumento`
--

CREATE TABLE `tbltipodocumento` (
  `idTipoDocumento` int(11) NOT NULL,
  `TipoDocumento` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblusuarios`
--

CREATE TABLE `tblusuarios` (
  `idUsuario` int(11) NOT NULL,
  `documento` varchar(15) DEFAULT NULL,
  `NombreUsuario` varchar(50) DEFAULT NULL,
  `ApellidosUsuario` varchar(50) DEFAULT NULL,
  `ContraseñaUsuario` varchar(25) DEFAULT NULL,
  `CorreoUsuario` varchar(100) DEFAULT NULL,
  `Fec_ExpUsuario` date DEFAULT NULL,
  `DireccionUsuario` varchar(250) DEFAULT NULL,
  `Ciudad_Municipio` varchar(50) DEFAULT NULL,
  `TelfUsuario` varchar(40) DEFAULT NULL,
  `Estado` varchar(20) DEFAULT 'Activo',
  `tblRoles_id_Roles` int(11) NOT NULL,
  `tblTipoDocumento_idTipoDocumento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblventas`
--

CREATE TABLE `tblventas` (
  `idVenta` int(11) NOT NULL,
  `FechaVenta` timestamp NULL DEFAULT NULL,
  `CantidadProductos` int(11) DEFAULT NULL,
  `ValorVenta` double DEFAULT NULL,
  `Estado` varchar(20) DEFAULT 'Activo',
  `tblClientes_idCliente` int(11) NOT NULL,
  `tblUsuarios_idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tblclientes`
--
ALTER TABLE `tblclientes`
  ADD PRIMARY KEY (`idCliente`),
  ADD KEY `fk_tblClientes_tblTipoDocumento1_idx` (`tblTipoDocumento_idTipoDocumento`);

--
-- Indices de la tabla `tblcompras`
--
ALTER TABLE `tblcompras`
  ADD PRIMARY KEY (`id_compra`),
  ADD KEY `fk_tblCompras_tblUsuarios1_idx` (`tblUsuarios_idUsuario`),
  ADD KEY `fk_tblCompras_tblProveedores1_idx` (`tblProveedores_idProveedor`);

--
-- Indices de la tabla `tbldetallecompra`
--
ALTER TABLE `tbldetallecompra`
  ADD PRIMARY KEY (`idDetalleCompra`),
  ADD KEY `fk_tblDetalleCompra_tblCompras1_idx` (`tblCompras_id_compra`),
  ADD KEY `fk_tblDetalleCompra_tblProductos1_idx` (`tblProductos_idProducto`);

--
-- Indices de la tabla `tbldetallespedidos`
--
ALTER TABLE `tbldetallespedidos`
  ADD PRIMARY KEY (`idDetallePedidos`),
  ADD KEY `fk_tblDetallesVentas_tblProductos1_idx` (`tblProductos_idProducto`),
  ADD KEY `fk_tblDetallesPedidos_tblPedidos1_idx` (`tblPedidos_idPedido`);

--
-- Indices de la tabla `tbldetallesventas`
--
ALTER TABLE `tbldetallesventas`
  ADD PRIMARY KEY (`idDetalleVentas`),
  ADD KEY `fk_tblDetallesVentas_tblProductos1_idx` (`tblProductos_idProducto`),
  ADD KEY `fk_tblDetallesVentas_tblVentas1_idx` (`tblVentas_idVenta`);

--
-- Indices de la tabla `tblpagina`
--
ALTER TABLE `tblpagina`
  ADD PRIMARY KEY (`idtblPagina`);

--
-- Indices de la tabla `tblpedidos`
--
ALTER TABLE `tblpedidos`
  ADD PRIMARY KEY (`idPedido`),
  ADD KEY `fk_tblSalidas_tblClientes1_idx` (`tblClientes_idCliente`),
  ADD KEY `fk_tblSalidas_tblUsuarios1_idx` (`tblUsuarios_idUsuario`);

--
-- Indices de la tabla `tblproductos`
--
ALTER TABLE `tblproductos`
  ADD PRIMARY KEY (`idProducto`),
  ADD UNIQUE KEY `Codigo_UNIQUE` (`Codigo`);

--
-- Indices de la tabla `tblproveedores`
--
ALTER TABLE `tblproveedores`
  ADD PRIMARY KEY (`idProveedor`);

--
-- Indices de la tabla `tblroles`
--
ALTER TABLE `tblroles`
  ADD PRIMARY KEY (`id_Roles`);

--
-- Indices de la tabla `tblroles_has_tblpagina`
--
ALTER TABLE `tblroles_has_tblpagina`
  ADD PRIMARY KEY (`id_Pag_Roles`),
  ADD KEY `fk_tblRoles_has_tblPagina_tblPagina1_idx` (`tblPagina_idtblPagina`),
  ADD KEY `fk_tblRoles_has_tblPagina_tblRoles_idx` (`tblRoles_id_Roles`);

--
-- Indices de la tabla `tbltipodocumento`
--
ALTER TABLE `tbltipodocumento`
  ADD PRIMARY KEY (`idTipoDocumento`);

--
-- Indices de la tabla `tblusuarios`
--
ALTER TABLE `tblusuarios`
  ADD PRIMARY KEY (`idUsuario`),
  ADD KEY `fk_tblUsuarios_tblRoles1_idx` (`tblRoles_id_Roles`),
  ADD KEY `fk_tblUsuarios_tblTipoDocumento1_idx` (`tblTipoDocumento_idTipoDocumento`);

--
-- Indices de la tabla `tblventas`
--
ALTER TABLE `tblventas`
  ADD PRIMARY KEY (`idVenta`),
  ADD KEY `fk_tblSalidas_tblClientes1_idx` (`tblClientes_idCliente`),
  ADD KEY `fk_tblSalidas_tblUsuarios1_idx` (`tblUsuarios_idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tblclientes`
--
ALTER TABLE `tblclientes`
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbldetallecompra`
--
ALTER TABLE `tbldetallecompra`
  MODIFY `idDetalleCompra` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbldetallespedidos`
--
ALTER TABLE `tbldetallespedidos`
  MODIFY `idDetallePedidos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbldetallesventas`
--
ALTER TABLE `tbldetallesventas`
  MODIFY `idDetalleVentas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tblpagina`
--
ALTER TABLE `tblpagina`
  MODIFY `idtblPagina` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tblpedidos`
--
ALTER TABLE `tblpedidos`
  MODIFY `idPedido` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tblproductos`
--
ALTER TABLE `tblproductos`
  MODIFY `idProducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tblproveedores`
--
ALTER TABLE `tblproveedores`
  MODIFY `idProveedor` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tblroles`
--
ALTER TABLE `tblroles`
  MODIFY `id_Roles` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tblroles_has_tblpagina`
--
ALTER TABLE `tblroles_has_tblpagina`
  MODIFY `id_Pag_Roles` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tblusuarios`
--
ALTER TABLE `tblusuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tblventas`
--
ALTER TABLE `tblventas`
  MODIFY `idVenta` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tblclientes`
--
ALTER TABLE `tblclientes`
  ADD CONSTRAINT `fk_tblClientes_tblTipoDocumento1` FOREIGN KEY (`tblTipoDocumento_idTipoDocumento`) REFERENCES `tbltipodocumento` (`idTipoDocumento`);

--
-- Filtros para la tabla `tblcompras`
--
ALTER TABLE `tblcompras`
  ADD CONSTRAINT `fk_tblCompras_tblProveedores1` FOREIGN KEY (`tblProveedores_idProveedor`) REFERENCES `tblproveedores` (`idProveedor`),
  ADD CONSTRAINT `fk_tblCompras_tblUsuarios1` FOREIGN KEY (`tblUsuarios_idUsuario`) REFERENCES `tblusuarios` (`idUsuario`);

--
-- Filtros para la tabla `tbldetallecompra`
--
ALTER TABLE `tbldetallecompra`
  ADD CONSTRAINT `fk_tblDetalleCompra_tblCompras1` FOREIGN KEY (`tblCompras_id_compra`) REFERENCES `tblcompras` (`id_compra`),
  ADD CONSTRAINT `fk_tblDetalleCompra_tblProductos1` FOREIGN KEY (`tblProductos_idProducto`) REFERENCES `tblproductos` (`idProducto`);

--
-- Filtros para la tabla `tbldetallespedidos`
--
ALTER TABLE `tbldetallespedidos`
  ADD CONSTRAINT `fk_tblDetallesPedidos_tblPedidos1` FOREIGN KEY (`tblPedidos_idPedido`) REFERENCES `tblpedidos` (`idPedido`),
  ADD CONSTRAINT `fk_tblDetallesVentas_tblProductos10` FOREIGN KEY (`tblProductos_idProducto`) REFERENCES `tblproductos` (`idProducto`);

--
-- Filtros para la tabla `tbldetallesventas`
--
ALTER TABLE `tbldetallesventas`
  ADD CONSTRAINT `fk_tblDetallesVentas_tblProductos1` FOREIGN KEY (`tblProductos_idProducto`) REFERENCES `tblproductos` (`idProducto`),
  ADD CONSTRAINT `fk_tblDetallesVentas_tblVentas1` FOREIGN KEY (`tblVentas_idVenta`) REFERENCES `tblventas` (`idVenta`);

--
-- Filtros para la tabla `tblpedidos`
--
ALTER TABLE `tblpedidos`
  ADD CONSTRAINT `fk_tblSalidas_tblClientes10` FOREIGN KEY (`tblClientes_idCliente`) REFERENCES `tblclientes` (`idCliente`),
  ADD CONSTRAINT `fk_tblSalidas_tblUsuarios10` FOREIGN KEY (`tblUsuarios_idUsuario`) REFERENCES `tblusuarios` (`idUsuario`);

--
-- Filtros para la tabla `tblroles_has_tblpagina`
--
ALTER TABLE `tblroles_has_tblpagina`
  ADD CONSTRAINT `fk_tblRoles_has_tblPagina_tblPagina1` FOREIGN KEY (`tblPagina_idtblPagina`) REFERENCES `tblpagina` (`idtblPagina`),
  ADD CONSTRAINT `fk_tblRoles_has_tblPagina_tblRoles` FOREIGN KEY (`tblRoles_id_Roles`) REFERENCES `tblroles` (`id_Roles`);

--
-- Filtros para la tabla `tblusuarios`
--
ALTER TABLE `tblusuarios`
  ADD CONSTRAINT `fk_tblUsuarios_tblRoles1` FOREIGN KEY (`tblRoles_id_Roles`) REFERENCES `tblroles` (`id_Roles`),
  ADD CONSTRAINT `fk_tblUsuarios_tblTipoDocumento1` FOREIGN KEY (`tblTipoDocumento_idTipoDocumento`) REFERENCES `tbltipodocumento` (`idTipoDocumento`);

--
-- Filtros para la tabla `tblventas`
--
ALTER TABLE `tblventas`
  ADD CONSTRAINT `fk_tblSalidas_tblClientes1` FOREIGN KEY (`tblClientes_idCliente`) REFERENCES `tblclientes` (`idCliente`),
  ADD CONSTRAINT `fk_tblSalidas_tblUsuarios1` FOREIGN KEY (`tblUsuarios_idUsuario`) REFERENCES `tblusuarios` (`idUsuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
