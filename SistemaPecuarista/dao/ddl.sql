drop table usuario, raca, lote, vacina, vacinacao, animal, receita, despesa, cliente, fornecedor,sexo;
select * from vacinacao

select * from receita where usuario_id = 1 and data_receita = 
'09/06/2018' order by data_receita

ALTER DATABASE sistemapecuarista SET datestyle TO SQL, DMY; -- seta o formato de data dia/mes/ano

create table usuario(
   id serial primary key,
   username varchar(100) unique,
   password varchar(100)
);
create table raca(
id serial primary key,
nome varchar(50) NOT NULL,
usuario_id integer references usuario(id) on delete cascade
);

create table lote(
id serial primary key,
lote_nome varchar(50) NOT NULL,
usuario_id integer references usuario(id) on delete cascade
);

create table sexo(
id serial primary key,
sexo_nome varchar(5) NOT NULL
);

create table animal(
id serial primary key,
brinco integer NOT NULL,
raca_id integer references raca(id) on delete cascade,
lote_id integer references lote(id) on delete cascade,
sexo_id integer references sexo(id),
usuario_id integer references usuario(id) on delete cascade
);

select * from vacina
create table vacina(
id serial primary key,
nome varchar(50) NOT NULL,
descricao varchar(100) NOT NULL,
usuario_id integer references usuario(id) on delete cascade
);

create table vacinacao(
id serial primary key,
animal_id integer references animal(id),
vacina_id integer references vacina(id),
data_vacinacao DATE DEFAULT CURRENT_DATE,
usuario_id integer references usuario(id) on delete cascade
);

create table cliente(
id serial primary key,
cliente_nome varchar(50) NOT NULL,
telefone varchar(20),
email varchar(50),
usuario_id integer references usuario(id) on delete cascade
);


create table fornecedor(
id serial primary key,
fornecedor_nome varchar(50) NOT NULL,
telefone varchar(20),
email varchar(50),
usuario_id integer references usuario(id) on delete cascade
);

create table receita(
id serial primary key,
valor real NOT NULL,
descricao varchar(40) NOT NULL,
-- desconto real DEFAULT 0,
cliente_id integer references cliente(id),
usuario_id integer references usuario(id) on delete cascade,
data_receita DATE DEFAULT CURRENT_DATE
);

create table despesa(
id serial primary key,
valor real,
descricao varchar(40),
data_despesa DATE DEFAULT CURRENT_DATE,
usuario_id integer references usuario(id),
fornecedor_id integer references fornecedor(id)
);



-- sexos existentes
select * from sexo
insert into sexo(sexo_nome) values ('Macho');
insert into sexo(sexo_nome) values ('Fêmea');
-- raca_id integer references raca(id) on delete cascade
insert into usuario(username, password) values('admin', md5('admin'));
insert into usuario(username, password) values('x', md5('x'));
--create table carro(
--   id serial primary key,
--   cor varchar(100),
--   modelo varchar(100),
--   usuario_id integer references usuario(id) on delete cascade
--);
--create table animal(

--raca_id integer references raca(id) on delete cascade
--);

select * from usuario

select * from usuario where username = 'admin' and password = md5('admin');