create database crud_clase;
use crud_clase;
create table listacompra(id int not null auto_increment primary key,
                             nombre varchar(50) not null,
                             unidades int);