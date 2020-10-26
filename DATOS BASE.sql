CREATE DATABASE CreaTecAlgabo;

USE CreaTecAlgabo;

CREATE TABLE Empleado(
dni int unique,
apellido varchar(30) not null,
nombre varchar(30) not null,
puesto varchar(30) not null,
legajo int unique auto_increment,
PRIMARY KEY (legajo)
);