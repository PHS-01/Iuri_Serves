-- Criando um banco de dados
create database db_database;

-- Seleciona um banco de dados, para edita etc...
use db_database;

-- Deleta o banco de dados
-- drop database db_database;

-- Criando uma tabela
create table tb_users( -- tabela usuarios
	-- Atributos de uma tabela
	use_id int primary key not null auto_increment, -- id do usuario
    use_name text not null, -- nome do usuario
    use_email text unique not null, -- email do usuario
    use_password text not null -- senha do usuario
);