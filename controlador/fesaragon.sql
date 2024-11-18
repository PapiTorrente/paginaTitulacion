-- Si existe la base de datos, se borra.
drop schema if exists `registro`;

-- Creación de la base de datos. 
create schema  if not exists `registro` default  character set utf8 collate  utf8_spanish2_ci;
USE `registro`; 

-- Creación de la tabla.
CREATE TABLE  `persona`(  
`nombre` text not null,
`ap_paterno` text not null,
`ap_materno` text not null,
`carrera` text not null,
`no_cuenta` int(10) not null,
`email` text not null,
`telefono` varchar (10) not null,
`direccion` text not null,
`password` varchar (8) not null,
`fecha_registro` datetime not null default current_timestamp,
`permisos` int (11) not null default '2',

PRIMARY KEY(no_cuenta)
)engine=Innodb default charset=utf8;

insert into `persona`(`nombre`,`ap_paterno`,`ap_materno`,`carrera`,`no_cuenta`,`email`,`telefono`,`direccion`,`password`,`fecha_registro`)values('Carlos Yael','Tenorio','Castilla','ICO',319260397,'yael_tc@live.com','1234567890','Aragón','12345678','2020-05-12 17:40:00');

-- define la llave primaria

-- commit confirma la trasaccion o proceso actual, haciendo que sus cambios sean permanentes
