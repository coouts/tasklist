create database tasklist;

use tasklist;

create table tbl_task (
	id int primary key auto_increment,
    descricao varchar(255) not null
);

select * from tbl_task;

insert into tbl_task (descricao) values ("estudar java");

insert tbl_task (descricao) values ("fazer exercícios de php");

insert tbl_task (descricao) values ("ler o livro clean code");

insert tbl_task (descricao) values ("ter hábitos saudáveis");