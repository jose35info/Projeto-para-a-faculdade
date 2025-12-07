# Sistema de Login e Cadastro com PHP e Bootstrap

Este repositório contém um sistema de autenticação de usuários desenvolvido como parte da avaliação da disciplina de **Banco de dados & PHP** do curso de **Análise Desenvolvimento de Sistemas**.

O projeto permite que novos usuários se cadastrem no banco de dados e acessem uma área restrita através de login e senha.

## 🚀 Tecnologias Utilizadas

* **Front-end:** HTML5, CSS3, Bootstrap 5.
* **Back-end:** PHP (Nativo).
* **Banco de Dados:** MySQL.
* **Ambiente de Desenvolvimento:** [XAMPP / WAMP / Laragon].

## ⚙️ Funcionalidades

- [x] **Cadastro de Usuários:** Registro de nome, e-mail e senha no banco de dados.
- [x] **Login:** Validação de credenciais.
- [x] **Sessão:** Proteção de rotas (páginas internas não podem ser acessadas sem login).
- [x] **Logout:** Encerramento seguro da sessão.
- [x] **Feedback Visual:** Alertas de sucesso ou erro estilizados com Bootstrap.

## 📦 Como rodar o projeto

Para rodar este projeto na sua máquina, siga os passos abaixo:

### 1. Configuração do Banco de Dados
Crie um banco de dados no MySQL chamado `sistema_login` (ou o nome que preferir) e execute o seguinte comando SQL para criar a tabela de usuários:

```sql
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL,
    data_cadastro DATETIME DEFAULT CURRENT_TIMESTAMP



> **Nota:** Certifique-se de configurar o arquivo de conexão (`conexao.php` ou `db.php`) com suas credenciais locais (usuário e senha do MySQL).

### 2\. Execução

1.  Baixe o projeto e coloque a pasta dentro do diretório do seu servidor local (ex: `C:\xampp\htdocs\meu-projeto`).
2.  Inicie o servidor Apache e MySQL.
3.  Acesse no navegador: `http://localhost/meu-projeto`.

## 📂 Estrutura de Arquivos

  * `index.php`: Tela de Login.
  * `cadastro.php`: Tela de Registro.
  * `dashboard.php`: Página restrita (após o login).
  * `conexao.php`: Configuração do banco de dados.
  * `logout.php`: Script de encerramento de sessão.
  * `css/`: Arquivos de estilo customizados.

## 👨‍💻 Autor

Desenvolvido por **TonyDev**.

-----

*Projeto acadêmico para fins de aprendizado.*

```

---

