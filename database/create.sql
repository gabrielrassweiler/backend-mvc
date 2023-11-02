create table if not exists pessoa(
	id serial primary key,
	nome varchar(255) not null,
	cpf varchar(11) not null unique
);

create table if not exists contato(
	id serial primary key,
	id_pessoa int not null,
	tipo bool not null,
	descricao varchar not null,
	constraint fk_pessoa foreign key(id_pessoa) references pessoa(id) on delete cascade
);
