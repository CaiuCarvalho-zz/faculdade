/* Deleta o banco de dados (para testes) */
drop database if exists atividade_2;

/* Cria o banco de dados "atividade_2" */
create database if not exists atividade_2;

/* Seleciona o banco a ser usado */
use atividade_2;

/* Cria a tabela "nacoes" */
create table nacoes (
    nacao varchar(20) not null,
    primary key (nacao)    
);

insert into nacoes
	(nacao)
values
	("Brasil"),
	("Angola"),
	("México");

select * from nacoes;


/* Cria a tabela "estados" */
create table estados (
    estado varchar(20) not null,
    nacao varchar(20) not null,
    primary key (estado),
    foreign key (nacao) references nacoes(nacao)
);

insert into estados
	(estado, nacao)
value
	("Mato Grosso", "Brasil"),
	("Minas Gerais", "Brasil"),
	("Bahia", "Brasil"),
	("Huambo", "Angola"),
	("Huíla", "Angola"),
	("Luanda", "Angola"),
	("Jalisco", "México"),
	("Michoacán", "México"),
	("Nuevo León", "México");


select * from estados;

/* Cria a tabela "cidades" */
create table cidades (
	cidade varchar(20) not null,
	estado varchar(20) not null,
    	nacao varchar(20) not null,
    	primary key (cidade),
   	foreign key (nacao) references nacoes(nacao),
   	foreign key (estado) references estados(estado)
    
    );
/* Inserindo cidades no Brasileiras */
insert into cidades
	(cidade, nacao, estado)
value
	("Cuiabá", "Brasil", "Mato Grosso"),
	("Várzea Grande", "Brasil", "Mato Grosso"),
	("Rondonópolis", "Brasil", "Mato Grosso"),
	("Salvador", "Brasil", "Bahia"),
	("Ilhéus", "Brasil", "Bahia"),
	("Itabuna", "Brasil", "Bahia"),
	("Belo Horizonte", "Brasil", "Minas Gerais"),
	("Uberlândia", "Brasil", "Minas Gerais"),
	("Contagem", "Brasil", "Minas Gerais");

/* Inserindo cidades na Angola */
insert into cidades
	(cidade, nacao, estado)
value
	("Bailundo", "Angola", "Huambo"),
	("Huambo", "Angola", "Huambo"),
	("Longongo", "Angola", "Huambo"),
	("Lubango", "Angola", "Huíla"),
	("Jamba", "Angola", "Huíla"),
	("Chicomba", "Angola", "Huíla"),
	("Cazenga", "Angola", "Luanda"),
	("Quiçama", "Angola", "Luanda"),
	("Viana", "Angola", "Luanda");

/* Inserindo cidades no México */
insert into cidades
	(cidade, nacao, estado)
value
	("Guadalajara", "México", "Jalisco"),
	("Tonalá", "México", "Jalisco"),
	("Arandas", "México", "Jalisco"),
	("Morélia", "México", "Michoacán"),
	("Uruapan", "México", "Michoacán"),
	("Sahuayo", "México", "Michoacán"),
	("Monterrey", "México", "Nuevo León"),
	("Apodaca", "México", "Nuevo León"),
	("Guadaloupe", "México", "Nuevo León");

select * from cidades;
    
