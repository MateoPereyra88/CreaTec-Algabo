CREATE DATABASE CreaTecAlgabo;

USE CreaTecAlgabo;

CREATE TABLE Empleado(
dni int unique,
apellido varchar(30) not null,
nombre varchar(30) not null,
puesto varchar(30) not null,
id_tarjeta int unique,
user varchar(30) not null unique,
pass varchar(30) not null,
legajo int unique auto_increment,
PRIMARY KEY (legajo)
);

CREATE TABLE Producto(
codigo int unique,
nom_prod varchar(50) not null
PRIMARY KEY (codigo)
);