/*
 Navicat Premium Data Transfer

 Source Server         : MiConexion
 Source Server Type    : MySQL
 Source Server Version : 80027 (8.0.27)
 Source Host           : localhost:3306
 Source Schema         : tegplanet

 Target Server Type    : MySQL
 Target Server Version : 80027 (8.0.27)
 File Encoding         : 65001

 Date: 19/12/2022 13:26:24
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for categoria
-- ----------------------------
DROP TABLE IF EXISTS categoria;
CREATE TABLE `categoria`  (
  `Id_Cat` int NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`Id_Cat`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of categoria
-- ----------------------------
INSERT INTO `categoria` VALUES (2, 'Frutas');
INSERT INTO `categoria` VALUES (3, 'Verdurdas');
INSERT INTO `categoria` VALUES (4, 'Lacteos');
INSERT INTO `categoria` VALUES (5, '');

-- ----------------------------
-- Table structure for compras
-- ----------------------------
DROP TABLE IF EXISTS compras;
CREATE TABLE `compras`  (
  `Id_Comp` int NOT NULL AUTO_INCREMENT,
  `Cantidad` int NOT NULL,
  `Precio_Unitario` varchar(9) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Precio_Total` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Fecha_Compra` date NULL DEFAULT NULL,
  `Producto` int NULL DEFAULT NULL,
  `Proveedor` int NULL DEFAULT NULL,
  PRIMARY KEY (`Id_Comp`) USING BTREE,
  INDEX `Producto`(`Producto` ASC) USING BTREE,
  INDEX `Proveedor`(`Proveedor` ASC) USING BTREE,
  CONSTRAINT `compras_ibfk_1` FOREIGN KEY (`Producto`) REFERENCES `productos` (`Id_Produc`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `compras_ibfk_2` FOREIGN KEY (`Proveedor`) REFERENCES `proveedor` (`Id_Prove`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of compras
-- ----------------------------

-- ----------------------------
-- Table structure for detalle_venta
-- ----------------------------
DROP TABLE IF EXISTS detalle_venta;
CREATE TABLE `detalle_venta`  (
  `IdD_venta` int NOT NULL AUTO_INCREMENT,
  `Cantidad` int NOT NULL,
  `Precio_Unitario` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `Precio_Total` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `IdProducto` int NULL DEFAULT NULL,
  `IdVenta` int NULL DEFAULT NULL,
  `fechaVenta` date NULL DEFAULT NULL,
  PRIMARY KEY (`IdD_venta`) USING BTREE,
  INDEX `Producto`(`IdProducto` ASC) USING BTREE,
  INDEX `Venta`(`IdVenta` ASC) USING BTREE,
  CONSTRAINT `detalle_venta_ibfk_1` FOREIGN KEY (`IdProducto`) REFERENCES `productos` (`Id_Produc`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `detalle_venta_ibfk_2` FOREIGN KEY (`IdVenta`) REFERENCES `ventas` (`Id_Venta`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 15 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of detalle_venta
-- ----------------------------
INSERT INTO `detalle_venta` VALUES (1, 2, '14000', '28000', 2, NULL, '2022-12-19');
INSERT INTO `detalle_venta` VALUES (2, 3, '10500', '31500', 1, NULL, '2022-12-19');
INSERT INTO `detalle_venta` VALUES (3, 6, '14000', '84000', 2, NULL, '2022-12-19');
INSERT INTO `detalle_venta` VALUES (4, 3, '10000', '30000', 4, NULL, '2022-12-19');
INSERT INTO `detalle_venta` VALUES (5, 5, '10000', '50000', 4, NULL, '2022-12-19');
INSERT INTO `detalle_venta` VALUES (6, 2, '14000', '28000', 2, NULL, '2022-12-19');
INSERT INTO `detalle_venta` VALUES (7, 1, '10500', '10500', 1, NULL, '2022-12-19');
INSERT INTO `detalle_venta` VALUES (8, 1, '14000', '14000', 2, NULL, '2022-12-19');
INSERT INTO `detalle_venta` VALUES (9, 1, '14000', '14000', 2, NULL, '2022-12-19');
INSERT INTO `detalle_venta` VALUES (10, 1, '14000', '14000', 2, NULL, '2022-12-19');
INSERT INTO `detalle_venta` VALUES (11, 1, '14000', '14000', 2, NULL, '2022-12-19');
INSERT INTO `detalle_venta` VALUES (12, 2, '10000', '20000', 4, NULL, '2022-12-19');
INSERT INTO `detalle_venta` VALUES (13, 1, '10000', '10000', 4, NULL, '2022-12-19');
INSERT INTO `detalle_venta` VALUES (14, 1, '14000', '14000', 2, NULL, '2022-12-19');

-- ----------------------------
-- Table structure for personal
-- ----------------------------
DROP TABLE IF EXISTS personal;
CREATE TABLE `personal`  (
  `Id_Per` int NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Apellidos` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `Telefono` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `Email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `Responsabilidad` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `Fecha_Nacimiento` date NULL DEFAULT NULL,
  PRIMARY KEY (`Id_Per`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of personal
-- ----------------------------
INSERT INTO `personal` VALUES (1, 'prueba', 'prueba', NULL, NULL, NULL, '1999-06-18');
INSERT INTO `personal` VALUES (2, 'Juan Ernesto', 'Ela', NULL, NULL, NULL, '1998-12-18');
INSERT INTO `personal` VALUES (3, 'Miguel Angel', 'Buesule', '222548963', NULL, 'Informatico', '1997-05-08');
INSERT INTO `personal` VALUES (4, 'Octavio Milam', 'Ndjewe', '22246966', NULL, 'Informatico', '1995-12-18');
INSERT INTO `personal` VALUES (5, 'Fermin', 'Apellido X', '222146546', NULL, 'oivjhihdihigh', '1995-05-18');
INSERT INTO `personal` VALUES (6, 'Veronica', 'Andeme', '22255996', NULL, 'Informatico', '1998-09-18');
INSERT INTO `personal` VALUES (7, 'Pedro', 'Osomo', '22256558414', NULL, 'Tecnico', '1997-05-07');

-- ----------------------------
-- Table structure for productos
-- ----------------------------
DROP TABLE IF EXISTS productos;
CREATE TABLE `productos`  (
  `Id_Produc` int NOT NULL AUTO_INCREMENT,
  `NombreProducto` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `stock_inicial` int NOT NULL,
  `stock_min` int NULL DEFAULT NULL,
  `fecha_vencimiento` date NULL DEFAULT NULL,
  `Total` int NULL DEFAULT NULL,
  `Subcategoria` int NOT NULL,
  `Precio` int NULL DEFAULT NULL,
  `idProveedor` int NULL DEFAULT NULL,
  PRIMARY KEY (`Id_Produc`) USING BTREE,
  INDEX `Producto_Categoria`(`Subcategoria` ASC) USING BTREE,
  INDEX `Producto_Proveedor`(`idProveedor` ASC) USING BTREE,
  CONSTRAINT `Producto_Categoria` FOREIGN KEY (`Subcategoria`) REFERENCES `categoria` (`Id_Cat`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `Producto_Proveedor` FOREIGN KEY (`idProveedor`) REFERENCES `proveedor` (`Id_Prove`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of productos
-- ----------------------------
INSERT INTO `productos` VALUES (1, 'Tomate', 100, 10, '2026-02-18', NULL, 2, 10500, 1);
INSERT INTO `productos` VALUES (2, 'Manzana', 253, 50, '2025-02-18', NULL, 2, 14000, 1);
INSERT INTO `productos` VALUES (3, 'Repollo', 150, 50, '2024-05-01', NULL, 3, 12000, 1);
INSERT INTO `productos` VALUES (4, 'Leche', 20, 5, '2023-02-08', NULL, 4, 10000, 1);

-- ----------------------------
-- Table structure for proveedor
-- ----------------------------
DROP TABLE IF EXISTS proveedor;
CREATE TABLE `proveedor`  (
  `Id_Prove` int NOT NULL AUTO_INCREMENT,
  `NombreProveedor` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Direccion` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `Telefono` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `Email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  PRIMARY KEY (`Id_Prove`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of proveedor
-- ----------------------------
INSERT INTO `proveedor` VALUES (1, 'Veronica', 'ElaNguema', '222090016', 'AndemeVeronica12@gmail.com');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `Id` int NOT NULL AUTO_INCREMENT,
  `NombreUser` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `Personal` int NOT NULL,
  `Tipo` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `Password` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  PRIMARY KEY (`Id`) USING BTREE,
  INDEX `UserPersonal`(`Personal` ASC) USING BTREE,
  CONSTRAINT `UserPersonal` FOREIGN KEY (`Personal`) REFERENCES `personal` (`Id_Per`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (4, 'Ernesto_gucci', 2, 'Vendedor', 'Hydra.juan00');
INSERT INTO `user` VALUES (5, 'Miguel', 3, 'Administrador', 'hola');
INSERT INTO `user` VALUES (6, 'Octa', 4, 'Administrador', 'octa');
INSERT INTO `user` VALUES (7, 'Fermin', 5, 'Administrador', 'hhhh');
INSERT INTO `user` VALUES (8, 'Veronica', 6, 'Administrador', 'vero');
INSERT INTO `user` VALUES (9, 's', 7, 'Supervisor', 's');

-- ----------------------------
-- Table structure for ventaresultado
-- ----------------------------
DROP TABLE IF EXISTS `ventaresultado`;
CREATE TABLE `ventaresultado`  (
  `idResultVenta` int NOT NULL AUTO_INCREMENT,
  `NomProducto` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `cantidadVendida` int NULL DEFAULT NULL,
  `Ganancias` int NULL DEFAULT NULL,
  `perioMasvendido` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `Proveedor` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  PRIMARY KEY (`idResultVenta`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ventaresultado
-- ----------------------------
INSERT INTO `ventaresultado` VALUES (8, 'Leche', 11, 110000, 'No Disp.', 'Veronica');
INSERT INTO `ventaresultado` VALUES (9, 'Manzana', 15, 210000, 'No Disp.', 'Veronica');

-- ----------------------------
-- Table structure for ventas
-- ----------------------------
DROP TABLE IF EXISTS `ventas`;
CREATE TABLE `ventas`  (
  `Id_Venta` int NOT NULL AUTO_INCREMENT,
  `Fecha_venta` date NULL DEFAULT NULL,
  `Vendedor` int NULL DEFAULT NULL,
  PRIMARY KEY (`Id_Venta`) USING BTREE,
  INDEX `Vendedor`(`Vendedor` ASC) USING BTREE,
  CONSTRAINT `ventas_ibfk_1` FOREIGN KEY (`Vendedor`) REFERENCES `personal` (`Id_Per`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ventas
-- ----------------------------

-- ----------------------------
-- View structure for productoprov
-- ----------------------------
DROP VIEW IF EXISTS `productoprov`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `productoprov` AS select `a`.`Id_Produc` AS `Id_Produc`,`a`.`NombreProducto` AS `NombreProducto`,`a`.`stock_inicial` AS `stock_inicial`,`a`.`stock_min` AS `stock_min`,`a`.`fecha_vencimiento` AS `fecha_vencimiento`,`a`.`Total` AS `Total`,`a`.`Subcategoria` AS `Subcategoria`,`a`.`Precio` AS `Precio`,`a`.`idProveedor` AS `idProveedor`,`p`.`Id_Prove` AS `Id_Prove`,`p`.`NombreProveedor` AS `NombreProveedor`,`p`.`Direccion` AS `Direccion`,`p`.`Telefono` AS `Telefono`,`p`.`Email` AS `Email` from (`productos` `a` join `proveedor` `p` on((`a`.`idProveedor` = `p`.`Id_Prove`)));

-- ----------------------------
-- View structure for usuarios
-- ----------------------------
DROP VIEW IF EXISTS `usuarios`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `usuarios` AS select `u`.`Id` AS `Id`,`p`.`Nombre` AS `nombre`,`p`.`Apellidos` AS `Apellidos`,`p`.`Fecha_Nacimiento` AS `Fecha_Nacimiento`,`u`.`Tipo` AS `Tipo` from (`user` `u` join `personal` `p` on((`u`.`Personal` = `p`.`Id_Per`)));

-- ----------------------------
-- View structure for venta
-- ----------------------------
DROP VIEW IF EXISTS `venta`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `venta` AS select `dt`.`IdD_venta` AS `IdD_venta`,`dt`.`Cantidad` AS `Cantidad`,`dt`.`Precio_Unitario` AS `Precio_Unitario`,`dt`.`Precio_Total` AS `Precio_Total`,`dt`.`IdProducto` AS `IdProducto`,`dt`.`IdVenta` AS `IdVenta`,`dt`.`fechaVenta` AS `fechaVenta`,`pr`.`NombreProducto` AS `NombreProducto` from (`detalle_venta` `dt` join `productos` `pr` on((`dt`.`IdProducto` = `pr`.`Id_Produc`)));

SET FOREIGN_KEY_CHECKS = 1;
