<h1 align="center">Sistema de Login - README</h1>

Este é um simples sistema de login desenvolvido em PHP e MySQL. Ele permite que os usuários se cadastrem, façam login e encerrem a sessão.

<h1 align="center">Pré-requisitos:</h1>

PHP (versão 5.6 ou superior)
MySQL (ou outro servidor de banco de dados compatível com o PHP)
Configuração
Clone o repositório ou faça o download dos arquivos.

<h1 align="center">Importe o banco de dados:</h1>

Crie um banco de dados MySQL chamado "atividade".
Importe o arquivo database.sql para criar a tabela necessária.
Configure a conexão com o banco de dados:

Abra o arquivo config.php.
Modifique as variáveis $host, $db_user, $db_password e $db_name de acordo com as configurações do seu servidor MySQL.
Utilização
Abra o navegador e acesse o arquivo login.php.

<h1 align="center">Página de Cadastro:</h1>

Clique no link "Cadastro de Usuário".
Preencha o formulário de cadastro com um nome de usuário e senha.
Clique no botão "Cadastrar".
Uma mensagem de sucesso será exibida se o cadastro for realizado com êxito.
Página de Login:

Preencha o formulário de login com as informações cadastradas anteriormente.
Clique no botão "Entrar".
Se as credenciais estiverem corretas, você será redirecionado para a página de sucesso.
Caso contrário, uma mensagem de erro será exibida.
Página de Sucesso:

Esta página indica que o login foi realizado com sucesso.
Clique no link "Fazer logoff" para encerrar a sessão.
Contribuição
Contribuições são bem-vindas! Sinta-se à vontade para abrir uma issue para relatar problemas ou enviar um pull request com melhorias e correções.

<h1 align="center">Status:</h1>


<p align="center">
<img src="http://img.shields.io/static/v1?label=STATUS&message=EM%20DESENVOLVIMENTO&color=GREEN&style=for-the-badge"/>
</p>