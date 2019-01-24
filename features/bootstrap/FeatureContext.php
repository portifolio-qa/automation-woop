<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements SnippetAcceptingContext
{
    private $simulador;
    private $formulario;
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __simulador()
    {
        $this->simulador = new Simulador();
        $this->formulario = new Formulario($this->simulador);
    }
    
    /**
     * @Given eu estou no site simulador :sicredi
     */
    public function euEstouNoSiteSimulador($sicredi)
    {
        throw new PendingException();
    }

    /**
     * @Then devo ver a janela do navegador com o título :simulador
     */
    public function devoVerAJanelaDoNavegadorComOTitulo($simulador)
    {
        throw new PendingException();
    }

    /**
     * @When acesso a area :simule
     */
    public function acessoAArea($simule)
    {
        throw new PendingException();
    }

    /**
     * @When marco o checkbox :perfil
     */
    public function marcoOCheckbox($perfil)
    {
        throw new PendingException();
    }

    /**
     * @When clico dentro do campo :aplicar
     */
    public function clicoDentroDoCampo($aplicar)
    {
        throw new PendingException();
    }

    /**
     * @When preencho o campo :aplicar com :valor
     */
    public function preenchoOCampoCom($aplicar, $valor)
    {
        throw new PendingException();
    }

    /**
     * @When pressiono :simular
     */
    public function pressiono($simular)
    {
        throw new PendingException();
    }

    /**
     * @When aguardo a tela carregar
     */
    public function aguardoATelaCarregar()
    {
        throw new PendingException();
    }

    /**
     * @Given eu estou no site do simulador :sicredi
     */
    public function euEstouNoSiteDoSimulador($sicredi)
    {
        throw new PendingException();
    }

    /**
     * @Then eu devo visualizar a mensagem :meses
     */
    public function euDevoVisualizarAMensagem($meses)
    {
        throw new PendingException();
    }

    /**
     * @Then o :total
     */
    public function o($total)
    {
        throw new PendingException();
    }

    /**
     * @Then o texto :tempo com o :valortotal
     */
    public function oTextoComO($tempo, $valortotal)
    {
        throw new PendingException();
    }

    /**
     * @Then eu devo visualizar o botao :refazer
     */
    public function euDevoVisualizarOBotao($refazer)
    {
        throw new PendingException();
    }
}
