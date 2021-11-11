# CRUD com PHP para prova Estácio Fic - AV2 | MySQL

## Banco de dados
Banco de dados criado para realizar o CRUD, tabela se chama `estacio`:
```sql
-- Criando banco de dados `estacio`
create database estacio;

-- Usando o banco de dados para depois criar a tabela
use estacio;

-- Criando a tabela `alunos`
create table alunos (
	id int not null primary key auto_increment,
    nome varchar(100) not null,
    email varchar(100) not null
);

-- Inserindo alunos na tabela `alunos`
insert into alunos (id, nome, email) values
  (1, 'Pamella Fernandes', 'pamelafernandes07@hotmail.com'),
  (2, 'Manoel Miqueias', 'madeira5nolol@hotmail.com'),
  (3, 'Thomas Glelson', 'thomasreidelas@hotmai.com'),
  (4, 'Jose Dario', 'josekun@hotmail.com');
  
-- Verificando os valores da tabela alunos.
select * from alunos;
```


## Composer
Aplicação só ira funcionar se houver o composer para o autoload das classes.

Se você não tiver o composer instalado na máquina, baixe no site composer:
[https://getcomposer.org/download](https://getcomposer.org/download/)

Agora com o composer instalado, entre dentro da pasta do projeto e execute esse comando no CMD(TERMINAL):
```shell
 composer install
```
