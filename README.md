# automation-woop
# Projeto Testes Automatizados Woop Digital

* vendor/bin/behat
* vendor/bin/behat --dry-run --append-snippets
* docker-compose up -d (subir o ambiente)
* Não esqueça, para rodar o projeto, o container docker deve estar levantado (docker-compose up)

# Técnicas de testes escolhida:

O projeto de teste apresenta as seguintes tecnologias:

- Desenvolvido SO Windows 10;
- Behat: framework de testes;
- Mink:  biblioteca de testes de aceitação web;
- MinkExtension: Utilizado para as classes *Context do Behat;
- BDD: para testes de negócio;
- TDD: para testes de desenvolvimento.
- Docker: Ferramenta para o empacotamento e execução da aplicações.
- Desing Patterns: Observer PHP;
- Page Objects: Facebook WebDriver

# Estrutura do Projeto:

- automation-woop: pasta principal do projeto;
- behat.yml: arquivo de configuraçao do framework behat;
- features: funcionalidades relacionadas ao projeto - default do framework behat;
- bootstrap: classes do projeto - default do framework behat (os steps: passos);
- models: classes do projeto, foi criada para definir o padrão MVC;
- woop: diretorio do projeto.
- vendor: dependências do projeto, que foram definidas no composer.json;
- .env: arquivo de configuracao para o banco de dados;
- docker-compose.yml: arquivo docker com configuracao do ambiente;
- relatorios: relatórios dos testes executados;
- screenshot: Print dos erros, quando o teste falha;
- src: pasta com as classses do desing patterns (Observer PHP)
- fixtures: pasta criada para integrar o projeto com Banco de Dados, criar massa de dados

# Justificativa das tecnologias do projeto:

 As seguintes tecnologias foram escolhidas, devido a facilidade para utilizar o projeto com CI (integração contínua);

 O projeto se adapta para qualquer linguagem;

 Como o projeto inicialmente solicita teste de interface e negócio, foi utilizada a tecnologia facebook webdriver que é um padrão da W3C, para simular as ações do usuário em um navegador web,  foi escoljido por ser um padrão aberto e pode ser implementado em qualquer linguagem de programação, ele foi desenvolvido em PHP, foi utilizado também a biblioteca Hamcrest que avalia se se os testes obtiveram a resposta esperada. Para testes de negócio, foi utilizado o framework Behat, que automatiza as ações do usuário e o  Behat HTML Formatter para gerar relatórios no formato HTML.

 A tecnologia Docker, foi utilizada devido a facilidade de montar e configurar o ambiente de desenvolvimento, sendo útil também na integração e criação do ambiente de desenvolvimento de integração contínua.

# Execuçao do projeto:

* Gitclone: https://github.com/rosedias/automation-woop
* Ter o docker instalado;
* Executar o dockercompose.yml para instalar as dependências do projeto: docker-compose up -d
