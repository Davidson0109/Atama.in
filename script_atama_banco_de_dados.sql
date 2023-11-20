Create database atama;

create table usuarios(
id int not null auto_increment primary key,
nome varchar(100) not null,
senha varchar(20) not null,
cpf char(11) not null,
email varchar(100) not null,
telefone char(11) not null,
dataNascimento date not null
);

use atama;

select * from usuarios;