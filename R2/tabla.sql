USE lindavista; 

drop table if exists noticias;

CREATE TABLE noticias(
	id_noticia INT auto_increment primary key,
	titulo VARCHAR(20),
	noticia VARCHAR(100)
);