create database Proyecto;

use Proyecto;

create table Productos(
    ID_Producto int auto_increment,
    Code_Producto varchar(70),
    Desc_Producto varchar(MAX),
    Cantidad int,
    Precio float,
    Estado varchar(MAX)
    primary key(ID_Producto)
);