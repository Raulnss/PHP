create database teste;
use teste;
create table tb_usuario(
    cd_usuario int primary key auto_increment,
    nm_nome_completo varchar(100),
    nm_usuario varchar(40),
    ds_email varchar (30),
    ds_senha varchar (8)
);