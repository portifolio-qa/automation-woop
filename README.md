# automation-woop
Projeto Testes Automatizados Woop

* vendor/bin/behat
* vendor/bin/behat --dry-run --append-snippets

###Técnicas de testes escolhida:

O projeto de teste apresenta as seguintes tecnologias:

- Behat: framework de testes;
- Mink:  biblioteca de testes de aceitação web;
- MinkExtension: Utilizado para as classes *Context do Behat;
- BDD: para testes de negócio;
- TDD: para testes de desenvolvimento.

###Estrutura do Projeto:

- automation-woop: pasta principal do projeto;
- behat.yml: arquivo para utilizar o selenium;
- features: funcionalidades relacionadas ao projeto - default do framework behat;
- bootstrap: classes do projeto - default do framework behat (os steps: passos);
- models: classes do projeto, foi criada para definir o padrão MVC;
- woop: diretorio do projeto.
- vendor: dependências do projeto, que foram definidas no composer.json;

###Justificativa das tecnologias do projeto:

 As seguintes tecnologias foram escolhidas, devido a facilidade para utilizar o projeto com CI (integração contínua);

 O projeto se adapta para qualquer linguagem;

