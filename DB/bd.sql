DROP DATABASE IF EXISTS TEGPLANET;
CREATE DATABASE TEGPLANET;
USE TEGPLANET;

CREATE TABLE Paises(
    Id int(5) not null auto_increment,
    Nombre varchar (50) not null,
    Bandera varchar (10),
    PRIMARY KEY (Id)
);

CREATE TABLE Mayoristas(
    Id int (6) not null auto_increment,
    Nombre varchar (50) not null,
    Telefono varchar (20),
    Email varchar (50),
    Logo varchar (10),
    Direccion varchar (30),
    PRIMARY KEY (Id)
);

CREATE TABLE PaisMayorista(
    Id int(6) not null auto_increment,
    Pais int(5),
    Mayorista int(6),
    Fecha_Registro date,
    PRIMARY KEY (Id),
    FOREIGN KEY (Pais) references Paises (Id),
    FOREIGN KEY (Mayorista) references Mayoristas (Id)
);

CREATE TABLE Licencia(
    Id int (5) not null auto_increment,
    Fecha_Adquirida date,
    Validez date,
    PRIMARY KEY (Id)
);

CREATE TABLE Categoria(
    Id_Cat int(6) not null auto_increment,
    Nombre varchar (100) not null,
    PRIMARY KEY (iD_Cat)
);
 
 CREATE TABLE SubCategoria(
    Id_Sub int (6) not null auto_increment,
    Nombre varchar (80) not null,
    Categoria int(6),
    PRIMARY KEY (Id_Sub),
    FOREIGN KEY (Categoria) references Categoria (Id_Cat)
 );

CREATE TABLE Productos(
    Id_Produc int(3) not null auto_increment,
    Nombre varchar(50) not null,
    stock int(9) not null,
    stock_min int(4),
    fecha_vencimiento date,
    PRIMARY KEY (Id_Produc)
);
CREATE TABLE ProductoMayorista(
    Id int(6) not null auto_increment,
    Mayorista int(6),
    producto int (3),
    Fecha_Registro date,
    PRIMARY KEY (Id),
    FOREIGN KEY (Mayorista) references Mayoristas (Id),
    FOREIGN Key (producto) references Productos (Id_Produc)
);
CREATE TABLE Proveedor(
    Id_Prove int (6) not null auto_increment,
    Nombre varchar (80) not null,
    Direccion varchar (80),
    Telefono varchar (15),
    Email varchar (50),
    PRIMARY KEY (Id_Prove)
);

CREATE TABLE Compras(
    Id_Comp int(9) not null auto_increment,
    Cantidad int(12) not null,
    Precio_Unitario varchar(9) not null,
    Precio_Total varchar(15) not null,
    Fecha_Compra date,
    Producto int(3),
    Proveedor int(6),
    PRIMARY KEY (Id_Comp),
    FOREIGN KEY (Producto) references productos (Id_Produc),
    FOREIGN KEY (Proveedor) references Proveedor (Id_Prove)
);

CREATE TABLE Personal(
    Id_Per int (4) not null auto_increment,
    Nombre varchar (50) not null,
    Apellidos varchar (100),
    Telefono varchar (12),
    Email varchar (100),
    Responsabilidad varchar(100),
    PRIMARY KEY (Id_Per)
);

CREATE TABLE User(
    Id int (4) not null auto_increment,
    NombreUser varchar(50),
    Personal int (4),
    Tipo varchar (50),
    PRIMARY KEY (Id),
    FOREIGN KEY (Personal) references Personal (Id_Per)
);


CREATE TABLE Ventas(
    Id_Venta int (20) not null auto_increment,
    Fecha date,
    Vendedor int (4),
    PRIMARY KEY (Id_Venta),
    FOREIGN KEY (Vendedor) references Personal (Id_Per)
);

CREATE TABLE Detalle_Venta(
    Id int (8) not null auto_increment,
    Cantidad int (10) not null,
    Precio_Unitario varchar (15),
    Precio_Total varchar (30),
    Producto int (3),
    Venta int (20),
    PRIMARY KEY (Id),
    FOREIGN KEY (Producto) references Productos (Id_Produc),
    FOREIGN KEY (Venta) references Ventas (Id_Venta)
);