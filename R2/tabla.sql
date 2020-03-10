drop DATABASE IF EXISTS lindavista;

CREATE DATABASE lindavista;

USE lindavista; 

CREATE TABLE noticias(
	id_noticia INT auto_increment primary key,
	titulo VARCHAR(20),
	noticia VARCHAR(100)
);