📦 Estoque Unifarma
Sistema simplificado para controle de estoque, registro de requisições por Centro de Custo e rastreabilidade de itens.

🚀 Como Rodar o Projeto
1. Preparar o Banco de Dados
Certifique-se de que o MySQL (via XAMPP) está ligado. No seu phpMyAdmin, crie o banco de dados e as tabelas com o seguinte comando SQL:
```
SQL
CREATE DATABASE estoque_teste_hoje;
USE estoque_teste_hoje;

CREATE TABLE itens (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    quantidade INT NOT NULL
);

CREATE TABLE saidas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_itens INT NOT NULL,
    quantidade INT NOT NULL,
    centro_custo VARCHAR(255) NOT NULL,
    data_saida TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_itens) REFERENCES itens(id)
);
```

2. Configurar os Arquivos
Coloque todos os arquivos do projeto em uma pasta de sua preferência (ex: C:\Projetos\unifarma). O arquivo conexao.php já está configurado para conectar ao localhost com o usuário root e sem senha.

3. Iniciar o Servidor
Abra o terminal (CMD ou PowerShell) dentro da pasta do projeto e execute:
```
Bash
php -S localhost:8080
```
4. Acessar o Sistema
Abra o seu navegador e digite: http://localhost:8080

🛠️ Funcionalidades
Painel Principal (index.php): Visualização de todos os produtos e acesso rápido para excluir ou requisitar.

Cadastro (cadastrar.php): Adição de novos itens ao estoque.

Requisição (saida.php): Registro de saída de materiais informando o Centro de Custo.

Relatório (relatorio.php): Histórico detalhado de quem pegou o quê e quando.

📁 Estrutura de Arquivos
conexao.php: Gerencia a conexão com o banco MySQL.

salvar_item.php / salvar_saida.php: Processam as inserções no banco e atualizam o saldo do estoque.

style.css: Estilização visual utilizando a fonte Lexend Deca.
