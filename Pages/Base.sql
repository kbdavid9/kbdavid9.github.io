drop database if exists couture;
create database if not exists couture;
use couture;

create table if not exists clients(
idclients int(50) auto_increment primary key,
nomclt varchar(50),
tel varchar(50)
);

create table if not exists utilisateurs(
    idutilisateurs int(50) auto_increment primary key,
    nom varchar(50),
    psw varchar(50)
);

INSERT INTO utilisateurs(nom,psw) VALUES
    ("David","21596325"),
    ("Autre","59822366");

INSERT INTO clients(nomclt,tel) VALUES
    ("Davidson","21596325"),
    ("Autrert","59822366");

select * from clients;
select * from utilisateurs;