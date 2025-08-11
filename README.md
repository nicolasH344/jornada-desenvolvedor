# Projeto de Sistema de Login e Registro

Este projeto é um sistema simples de login e registro de usuários, desenvolvido em PHP. Ele permite que usuários se cadastrem e façam login em uma aplicação web.

## Estrutura do Projeto

O projeto possui os seguintes arquivos:

- **login.php**: Página de login do sistema. Contém um formulário que solicita o nome de usuário e a senha, enviando os dados para `autenticar.php` para validação.
  
- **registro.php**: Página que permite novos usuários se cadastrarem no sistema. Contém um formulário que coleta informações como nome, e-mail, usuário e senha, enviando esses dados para um script de processamento.

- **autenticar.php**: Script que processa os dados enviados pelo formulário de login em `login.php`. Verifica as credenciais do usuário em um banco de dados e, se válidas, inicia uma sessão para o usuário.

- **login.css**: Arquivo de estilos CSS para a página de login, definindo a aparência do formulário e do layout.

## Instruções de Instalação

1. Clone este repositório ou faça o download dos arquivos.
2. Coloque os arquivos na pasta `htdocs` do seu servidor local (por exemplo, XAMPP).
3. Certifique-se de que o servidor Apache e MySQL estão em execução.
4. Crie um banco de dados e configure as credenciais no arquivo `autenticar.php` (a ser implementado).
5. Acesse `login.php` pelo navegador para visualizar a página de login.

## Uso

- Para se registrar, acesse `registro.php` e preencha o formulário.
- Após o registro, você pode fazer login usando `login.php`.

## Observações

- Este projeto é um exemplo básico e pode ser expandido com funcionalidades adicionais, como recuperação de senha, validação de e-mail, e segurança aprimorada.
- Certifique-se de implementar medidas de segurança adequadas ao lidar com senhas e dados de usuários.