use app_ci4
drop table productos
create table if not exists productos (
id_producto int not null, 
nombre varchar(100), 
stock int, 
precio float,
primary key (id_producto)
)
insert into productos (id_producto, nombre, stock, precio) values (1, "producto 1", 100, 50.00)
insert into productos (id_producto, nombre, stock, precio) values (2, "producto 2", 120, 30.00)
