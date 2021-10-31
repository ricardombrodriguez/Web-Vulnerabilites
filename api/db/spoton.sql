create database spoton
go

create table users (
	id INT NOT NULL IDENTITY(1,1) PRIMARY KEY,
	nome VARCHAR(100) NOT NULL,
	email VARCHAR(150) NOT NULL,
	pass VARCHAR(100) NOT NULL
);
go

create table trips (
	id INT NOT NULL IDENTITY(1,1) PRIMARY KEY,
	nome VARCHAR(100) NOT NULL,
	preco FLOAT not null,
	descricao VARCHAR(300),
	lugar  VARCHAR(100) not null,
	avaliacao int check (avaliacao >= 0 and avaliacao < 6)
);
go

create table comment (
	id INT NOT NULL IDENTITY(1,1) PRIMARY KEY,
	autor int not null,
	texto VARCHAR(300),

	FOREIGN KEY (autor) references users(id)
);