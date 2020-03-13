use lindavista;

drop table if exists votos;

create table votos(
	id_votacion int primary key,
	a int,
	b int,
	c int,
	n_votos int
);