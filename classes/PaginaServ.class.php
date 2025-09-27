<?php

class PaginaServ extends Pagina
{
    private $nome;
    private $formacao;
    private $email;
    private $celular;
    private $servicos;
    private $valores;

    public function __construct($nome, $formacao, $email, $celular, $servicos, $valores)
    {
        parent::__construct('Especialidades de ' . $nome);
        $this->nome = $nome;
        $this->formacao = $formacao;
        $this->email = $email;
        $this->celular = $celular;
        $this->servicos = $servicos;
        $this->valores = $valores;
    }

    private function estilizarGlobalmente($extra = '')
    {
        return "flex: 1;
                max-width: 600px; 
                margin: 30px auto; 
                padding: 20px; 
                text-align: center; 
                font-family: Ubuntu, sans-serif; 
                color: #d6deeb; 
                background-color: #011627; 
                $extra";
    }

    private function estilizarTitulo($nivel)
    {
        switch ($nivel) {
            case 1:
                return "color: #82aaff; 
                        font-size: 28px;
                        margin-bottom: 15px;";
            case 2:
                return "color: #ecc48d; 
                        font-size: 22px; 
                        margin-top: 25px; 
                        margin-bottom: 10px;";
            default:
                return "color: #d6deeb;";
        }
    }

    private function estilizarLinhaHorizontal()
    {
        return "border: 1px solid #1d3b53; 
                margin: 20px 0;";
    }

    private function estilizarLista()
    {
        return "list-style: none; 
                padding: 0; 
                margin: 0;";
    }

    private function estilizarItemLista()
    {
        return "background:#1d3b53; 
                margin: 5px 0; 
                padding: 10px; 
                border-radius: 8px;";
    }

    public function renderizarConteudo()
    {
        // Div de conteúdo principal
        echo "<div style='" . $this->estilizarGlobalmente() . "'>";

        // Título principal
        echo "<h1 style='" . $this->estilizarTitulo(1) . "'>Especialidades de " . $this->nome . "</h1>";

        // Informações pessoais
        echo "<p>Formação: 
                <strong>" . $this->formacao . "</strong>
            </p>";
        echo "<p>Email: 
                <a href='mailto:" . $this->email . 
                    "' style='color:#7fdbca; text-decoration:none;'>" . $this->email . "
                </a>
            </p>";
        echo "<p>Celular: 
                <span style='color:#7fdbca'>
                    " . $this->celular . "
                </span>
            </p>";
        echo "<hr style='" . $this->estilizarLinhaHorizontal() . "'>";

        // Serviços
        echo "<h2 style='" . $this->estilizarTitulo(2) . "'>Serviços</h2>";
        echo "<ul style='" . $this->estilizarLista() . "'>";
        foreach ($this->servicos as $servico) {
            echo "<li style='" . $this->estilizarItemLista() . "'>" . $servico . "</li>";
        }
        echo "</ul>";
        echo "<hr style='" . $this->estilizarLinhaHorizontal() . "'>";

        // Valores
        echo "<h2 style='" . $this->estilizarTitulo(2) . "'>Valores</h2>";
        echo "<ul style='" . $this->estilizarLista() . "'>";
        foreach ($this->valores as $valor) {
            echo "<li style='" . $this->estilizarItemLista() . "'>
                💰 R$ " . number_format($valor, 2, ',', '.') . "/mês
            </li>";
        }
        echo "</ul>";

        echo "</div>";
    }
}