
/*Apaga a base de dados*/
drop database crud;

/*cria uma base de dados*/
create database crud;

/*conecta a uma base existente*/
use crud;

create table cliente(
    cod int primary key auto_increment,
    nome varchar(50),
    email varchar(50),
    cpf char(11),
    sexo char(1)
);

create table usuario(
    cod int primary key auto_increment,
    nome varchar(50),
    email varchar(50),
    login varchar(50) unique,
    senha char(32),
    perfil enum('adm','user')
);

insert into usuario values(null,'David','david@gmail.com','david',md5('123'),'adm');
insert into usuario values(null,'Eliel','elisel@gmail.com','eliel',md5('abc'),'user');

select * from usuario;


