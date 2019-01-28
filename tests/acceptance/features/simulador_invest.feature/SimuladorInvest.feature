#language: pt
#Critério de aceitação:
#O associado preencher todos os campos corretamente e visualizar o formulário de simulação
#O associado preencher o Valor inferior a “20.00” e receber a mensagem de orientação “Valor mínimo de 20.00”.

Funcionalidade: Simulador de Investimentos
  Como um Associado, 
  Eu gostaria de preencher o formulário de simulação, 
  Para ver a tabela de resultado com Mês e Valor

Cenário: 01- Preencher os campos do formulario
  Dado eu estou no site simulador "Sicredi"
    Então devo ver a janela do navegador com o título "Simulador de investimento - Poupança | Sicredi"
    Quando acesso a area "Simule quanto você pode guardar"
    E marco o checkbox "perfil"
    E clico dentro do campo "valorAplicar"
    E preencho o campo "valorAplicar" com "280200"
    E clico dentro do campo "valorInvestir"
    E preencho o campo "valorInvestir" com "2000"
    E clico dentro do campo "tempo" 
    E preencho o campo "tempo" com "112"
    E pressiono "Simular"
    E aguardo a tela carregar

Cenário: 02- Visualizar o formulário de simulação
  Dado eu estou no site do simulador "Sicredi"
    Então devo ver a janela do navegador com o título "Simulador de investimento - Poupança | Sicredi"
    Quando acesso a area "Simule quanto você pode guardar"
    E clico dentro do campo "valorAplicar"
    E preencho o campo "valorAplicar" com "280200"
    E clico dentro do campo "valorInvestir"
    E preencho o campo "valorInvestir" com "2000"
    E clico dentro do campo "tempo" 
    E preencho o campo "tempo" com "112"
    E pressiono "Simular"
    E aguardo a tela carregar
    Entao eu devo visualizar a mensagem "Em 112 meses você terá guardado"
    E o "valorTotal" 
    E o texto "Tempo (Meses)" com o "R$ 7.016"
    Entao eu devo visualizar o botao "REFAZER A SIMULAÇÃO"

    
Cenário: 03- Simulacao valor menor $20,00
  Dado eu estou no site do simulador "Sicredi"
    Então devo ver a janela do navegador com o título "Simulador de investimento - Poupança | Sicredi"
    Quando acesso a area "Simule quanto você pode guardar"
    E clico dentro do campo "valorAplicar"
    E clico dentro do campo "valorInvestir"
    Entao eu devo visualizar a mensagem "Valor mínimo de 20.00"


