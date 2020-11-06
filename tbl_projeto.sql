create schema bd_projeto;

create table usuario(
id_usuario int not null primary key auto_increment,
nome varchar(50) not null,
email varchar(50) not null, 
endereco varchar(30) not null,
cep varchar(9) not null,
telefone varchar(12) not null,
senha varchar(8) not null
);

create table coletor(
id_coletor int not null primary key auto_increment,
razaosocial varchar(50) not null,
cnpj varchar(12) not null,
email varchar(50) not null, 
endereco varchar(30) not null,
cep varchar(9) not null,
telefone varchar(12) not null,
senha varchar(8) not null
);

