# To-Do List - Projeto MVC em PHP

Este projeto é uma aplicação web de lista de tarefas (To-Do List). Ele foi construído utilizando o padrão de arquitetura **MVC (Model-View-Controller)**, com foco em organização, boas práticas e separação de responsabilidades.

---

## Autores

- **Thiago Natale** — RA: 5155797  
- **Pedro Hilário** — RA: 5160251

---

## Tecnologias Utilizadas

- PHP
- MySQL
- HTML5 + CSS
- Padrão MVC (Model, View, Controller)
- Git + GitHub

---

## Funcionalidades

- Cadastrar novas tarefas
- Editar tarefas existentes
- Excluir tarefas
- Marcar tarefas como concluídas
- Visualizar todas as tarefas cadastradas

---

## Script de Criação do Banco de Dados

CREATE DATABASE todo_list;

USE todo_list;

CREATE TABLE tasks (
  id int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  title varchar(255) NOT NULL,
  description text,
  is_completed tinyint(1) NOT NULL DEFAULT '0',
  created_at timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  updated_at timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (id)
);

---

## Como Executar

Clone ou baixe este repositório.
Link do repositório: https://github.com/Thiago-Natale/Todo-List-MVC.git

Coloque o projeto na pasta htdocs do seu XAMPP.

Crie o banco de dados executando o script passado anteriormente.

Acesse o navegador e vá para:
http://localhost/todo-list-mvc/public/



