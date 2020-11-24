create database CreaTecAlgabo;

use CreaTecAlgabo;

create table Empleado(
dni int unique,
apellido varchar(30) not null,
nombre varchar(30) not null,
puesto varchar(30) not null,
id_tarjeta int unique auto_increment,
usuario varchar(30) not null unique,
pass varchar(30) not null,
primary key (id_tarjeta)
);

create table Producto(
codigo int unique,
nom_prod varchar(50) not null
primary key (codigo)
);

create table lecturasRFID(
uid int ,
idlector int unique,
fecha date,
hora time not null,
primary key(idlector)
);

insert into lecturasRFID values
('1','1','1990-10-08','8:30'),
('2','2','2000-06-04','9:45');

create table accesoPersonal(
uid int ,
idmolinete int unique,
sentido varchar(30) not null,
fecha date,
hora time not null,
primary key(idmolinete)
);

insert into accesoPersonal values
('1','1','entrada','1990-10-08','10:30'),
('2','2','salida','2000-06-04','12:45');

select * from Empleado;
select * from Producto;
select * from lecturasRFID;
select * from accesoPersonal;
