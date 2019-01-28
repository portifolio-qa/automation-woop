<?php

use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

/**
 * Defines application features from the specific context.
 */
class SimuladorInvestContext implements Context, SnippetAcceptingContext
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    private $driver;

    public function __construct()
    {
        $this->driver = RemoteWebDriver::create(
            "http://localhost:4444/wd/hub", 
            DesiredCapabilities::firefox()
        );
        $this->driver->manage()->window()->maximize();
        $this->driver->manage()->timeouts()->implicitlyWait(5);
    }

    /**
     * @Given eu estou no site simulador :sicredi
     */
    public function euEstouNoSiteSimulador($sicredi)
    {
        $this->driver->get("https://www.sicredi.com.br/html/ferramenta/simulador-investimento-poupanca/");
    }

    /**
     * @Then devo ver a janela do navegador com o título :titulo
     */
    public function devoVerAJanelaDoNavegadorComOTitulo($titulo)
    {
        $this->driver->get("Simulador de investimento - Poupança | Sicredi");
    }

    /**
     * @When acesso a area :simule
     */
    public function acessoAArea($simule)
    {
        $this->driver->get("Simule quanto você pode guardar");
    }

    /**
     * @When marco o checkbox :perfil
     */
    public function marcoOCheckbox($perfil)
    {
        $this->driver->findElement(WebDriverBy::id("perfil"))->sendKeys("perfil");
    }

    /**
     * @When clico dentro do campo :valorAplicar
     */
    public function clicoDentroDoCampo($valorAplicar)
    {
        $this->driver->findElement(WebDriverBy::id("valorAplicar"))->sendKeys("280200");
    }

    /**
     * @When preencho o campo :valorInvestir com :valor
     */
    public function preenchoOCampoCom($valorInvestir, $valor)
    {
        findElement(WebDriverBy::name("valorInvestir"))->sendKeys("2000");
    }

    /**
     * @When pressiono :tempo
     */
    public function pressiono($tempo)
    {
        $this->driver->findElement(WebDriverBy::id("tempo"))->sendKeys("112");
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
        $this->driver->get("https://www.sicredi.com.br/html/ferramenta/simulador-investimento-poupanca/");
    }

    /**
     * @Then eu devo visualizar a mensagem :simule
     */
    public function euDevoVisualizarAMensagem($simule)
    {
        $caixaMensagem = $driver->findElement(WebDriverBy::cssSelector(".alert"));
        assertThat($caixaMensagem->getText(), equalTo("Simule quanto você pode guardar"));        
    }
    /**
     * @When clico dentro do campo :valorAplicar
     */
    public function clicoDentroDoCampo($valorAplicar)
    {
        $this->driver->findElement(WebDriverBy::id("valorAplicar"))->sendKeys("280200");
    }

    /**
     * @When preencho o campo :valorInvestir com :valor
     */
    public function preenchoOCampoCom($valorInvestir, $valor)
    {
        findElement(WebDriverBy::name("valorInvestir"))->sendKeys("2000");
    }   

        /**
     * @When clico dentro do campo :tempo
     */
    public function clicoDentroDoCampo($tempo)
    {
        $this->driver->findElement(WebDriverBy::id("tempo"))->sendKeys("112");
    }
        /**
     * @When aguardo a tela carregar
     */
    public function aguardoATelaCarregar()
    {
        throw new PendingException();
    }
    public function euDevoVisualizarAMensagem($meses)
    {
        $caixaMensagem = $driver->findElement(WebDriverBy::cssSelector(".alert"));
        assertThat($caixaMensagem->getText(), equalTo("Em 112 meses você terá guardado"));
        
    }
    
    /**
     * @Then eu devo visualizar o botao :simulacao
     */
    public function euDevoVisualizarOBotao($simulacao)
    {
        $driver->findElement(WebDriverBy::name("simulacao"))->sendKeys("REFAZER A SIMULAÇÃ");
        
    }


    /**
     * @Given eu estou no site simulador :sicredi
     */
    public function euEstouNoSiteSimulador($sicredi)
    {
        $this->driver->get("https://www.sicredi.com.br/html/ferramenta/simulador-investimento-poupanca/");
    }

    /**
     * @Then devo ver a janela do navegador com o título :titulo
     */
    public function devoVerAJanelaDoNavegadorComOTitulo($titulo)
    {
        $this->driver->get("Simulador de investimento - Poupança | Sicredi");
    }

    /**
     * @When acesso a area :simule
     */
    public function acessoAArea($simule)
    {
        $this->driver->get("Simule quanto você pode guardar");
    }

    /**
     * @When marco o checkbox :perfil
     */
    public function marcoOCheckbox($perfil)
    {
        $this->driver->findElement(WebDriverBy::id("perfil"))->sendKeys("perfil");
    }

    /**
     * @When clico dentro do campo :valorAplicar
     */
    public function clicoDentroDoCampo($valorAplicar)
    {
        $this->driver->findElement(WebDriverBy::id("valorAplicar"))->sendKeys("280200");
    }

    /**
     * @When preencho o campo :valorInvestir com :valor
     */
    public function preenchoOCampoCom($valorInvestir, $valor)
    {
        findElement(WebDriverBy::name("valorInvestir"))->sendKeys("2000");
    }

    /**
     * @When pressiono :tempo
     */
    public function pressiono($tempo)
    {
        $this->driver->findElement(WebDriverBy::id("tempo"))->sendKeys("112");
    }
        /**
     * @Then eu devo visualizar o botao :simulacao
     */
    public function euDevoVisualizarOBotao($simulacao)
    {
        $driver->findElement(WebDriverBy::name("simulacao"))->sendKeys("Valor mínimo de 20.00");
        $driver->quit();
}
}
