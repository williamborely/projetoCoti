drop database relacionamento;

create database relacionamento;

use relacionamento;

create table cargo(
    idcargo int primary key auto_increment,
    nomecargo varchar(50),
    salario double(8,2)
);

insert into cargo values(null,'Programador',3000.00);
insert into cargo values(null,'Web Designer',2500.00);
insert into cargo values(null,'Analista',2200.00);

create table funcionario(
    idfunc int primary key auto_increment,
    nome varchar(50),
    email varchar(50),
    dtnasc date,
    cpf char(14),
    idcargo int,
    foreign key (idcargo) references cargo (idcargo)
);



/*salario double(8,2) -> 999999,99*/