#DataBridge PHP.

Camada de abstração para acesso a banco de dados utilizando PDO.

O objetivo do projeto é facilitar a execução de queries parametrizadas com segurança, organização e retorno padronizado.

Descrição

Classe que encapsula operações com banco de dados MySQL utilizando PDO, permitindo executar queries de forma simples, segura e reutilizável.

A classe suporta:

- Queries com retorno (SELECT)
- Queries sem retorno (INSERT, UPDATE, DELETE)
- Uso de parâmetros (proteção contra SQL Injection)
- Transações automáticas
- Retorno estruturado de resultados

🚀 Funcionalidades

- Execução de queries com function execute_query()
- Execução de comandos com function execute_non_query()
- Suporte a parâmetros nomeados
- Retorno em formato objeto ou array
- Controle automático de transações
- Tratamento de erros com PDOException

---

Tecnologias utilizadas

- PHP
- PDO (PHP Data Objects)
- MySQL

---
Como utilizar

Importe a classe, configure os dados do banco e crie uma instância de Database.
Depois disso, utilize execute_query() para consultas (SELECT) e execute_non_query() para operações como INSERT, UPDATE e DELETE.

As queries podem usar parâmetros nomeados, que devem ser passados em um array, garantindo mais segurança.

Todos os métodos retornam um objeto com informações da execução, como status, mensagem, resultados, linhas afetadas e último ID inserido.
