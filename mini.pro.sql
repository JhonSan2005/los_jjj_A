create database mini_pro;
USE mini_pro;

create table Clientes(
DNI_cli int not null,
Nombre varchar(20) not null,
Apellido varchar(20) not null,
Correo  varchar(50) not null,
Contraseña  varchar(20) not null,
N°Mesa int null,
Primary key(DNI_cli));

select*From Clientes;
drop table Musica;

create table Musica(
ID int not null,
Nombre varchar(20) not null,
artista varchar(30) not null,
Primary key(ID));
select*From Musica;
drop table Musica;
SELECT COUNT(Nombre) FROM Clientes WHERE DNI_cli = '8765' AND Contraseña = 'julian123';

