create database ProjetoIntegrado_php;

use ProjetoIntegrado_php;

CREATE TABLE cadastro_cliente (
  id int(11) NOT NULL auto_increment,
  nome varchar(100) NOT NULL,
  cnpj int(14) NOT NULL,
  telefone int(11) NOT NULL,
  logradouro varchar(50) NOT NULL,
  complemento varchar(50),
  cidade varchar(50) NOT NULL,
  estado varchar(50) NOT NULL,
  email varchar(100) NOT NULL,
  senha varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
);

use ProjetoIntegrado_php;

CREATE TABLE cadastro_produtos (
  id int(11) NOT NULL auto_increment,
  nome varchar(100) NOT NULL,
  codigo int(14) NOT NULL,
  preco decimal(30) NOT NULL,
  email varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
);