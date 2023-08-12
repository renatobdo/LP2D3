create database cafebistro_lp2d3;
use cafebistro_lp2d3;
create table usuario (id int auto_increment,
nome varchar(40),
email varchar(255) primary key,
senha varchar(255));
insert into usuario values (1, 'admin', 
'admin@ifsp.edu.br', 'lp2d3');
select * from usuario;