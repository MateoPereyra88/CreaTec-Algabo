create database RFID;
USE RFID;

Create table lecturasRFID(
uid int ,
idlector int unique,
fecha date,
hora time not null,
Primary key(idlector)
);

insert into lecturasRFID values
('1','1','1990-10-08','8:30'),
('2','2','2000-06-04','9:45');

select * from lecturasRFID;


Create table accesoPersonal(
uid int ,
idmolinete int unique,
sentido varchar(30) not null,
fecha date,
hora time not null,
Primary key(idmolinete)
);


insert into accesoPersonal values
('1','1','entrada','1990-10-08','10:30'),
('2','2','salida','2000-06-04','12:45');

select * from accesoPersonal;
