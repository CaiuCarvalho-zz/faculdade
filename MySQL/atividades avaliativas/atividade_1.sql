/* Deleta o banco de dados (para testes) */
drop database if exists atividade_1;

/* Cria o banco de dados "atividade_1" */
create database if not exists atividade_1;

/* Seleciona o banco de dados "atividade_1" */
use atividade_1;

/* Cria a tabela "voos" */
create table voos(
	id_voo int not null,
    de_para varchar(40),
    primary key (id_voo)
);

/* Cria a tabela "passegeiros" */
create table passageiros(
	id_passageiro int not null,
    id_voo int not null,
	nome varchar (40) not null,
    sexo enum('Masculino', 'Feminino'),
    primary key (id_passageiro),
    foreign key (id_voo) references voos(id_voo)
);

/* Inserir os voos na tabela */
insert into voos
(id_voo, de_para)
values
('01', 'Curitiba - São Paulo'),
('02', 'Curitiba - Rio de Janeiro'),
('03', 'Curitiba - Santa Catarina');

/* Mostra a tabela voos */
select * from voos; 

/* Adiciona os voos a tabela passageiros*/
insert into passageiros
(id_voo, id_passageiro, nome, sexo)
value
('01', '001', 'Luenna', 'Feminino'),
('01', '002', 'Fábio', 'Masculino'),
('01', '003', 'Luis', 'Masculino'),
('01', '004', 'Grace', 'Feminino'),
('01', '005', 'Estela', 'Feminino'),
('02', '006', 'Kendrick', 'Masculino'),
('02', '007', 'Ariele', 'Feminino'),
('02', '008', 'Jussara', 'Feminino'),
('02', '009', 'Samira', 'Feminino'),
('02', '010', 'Vitor', 'Masculino'),
('03', '011', 'Mario', 'Masculino'),
('03', '012', 'Gustavo', 'Masculino'),
('03', '013', 'Veronica', 'Feminino'),
('03', '014', 'Ária', 'Feminino'),
('03', '015', 'Nando', 'Masculino');

/* Mostra a tabela "passageiros" */
select * from passageiros;

 