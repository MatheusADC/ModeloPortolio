<?php

class Pagina
{
    protected $titulo;

    public function __construct($titulo)
    {
        $this->titulo = $titulo;
    }

    public function renderizarCabecalho()
    {
        echo '<!DOCTYPE html>';
        echo '<html lang="pt-BR">';
        echo '<head>';
        echo '<meta charset="UTF-8">';
        echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
        echo '<title>' . $this->titulo . '</title>';
        echo '<link rel="icon" type="image/png" href="assets/icone-maleta.png" />';
        echo "<link href='https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;700&display=swap' rel='stylesheet'>";
        echo '</head>';
        echo '<body style="
                        margin:0; 
                        background-color:#011627; 
                        color:#d6deeb; 
                        font-family:\'Ubuntu\', sans-serif; 
                        overflow-x: 
                        hidden; 
                        display: flex;
                        flex-direction: column;
                        min-height: 100vh">';

        echo "<div style='
                        width:100%; 
                        background:#1d3b53; 
                        padding:10px 20px; 
                        display:flex; 
                        align-items:center; 
                        justify-content:space-between;'>";

        // Ícone no canto esquerdo
        echo "<div style='
                        display:flex; 
                        align-items:center; 
                        gap:10px;'>";
        echo "<img src='assets/icone-maleta.png' alt='ícone maleta' style='height:40px; width:40px;'>";
        echo "<h1 style='
                        margin:0; 
                        color:#82aaff; 
                        font-size:24px;'>
                    " . $this->titulo . "
            </h1>";
        echo "</div>";

        // CSS para o evento hover
        echo "
            <style>
                nav a {
                    color: #d6deeb;
                    text-decoration: none;
                    margin: 0 10px;
                    transition: color 0.3s;
                }
                nav a:hover {
                    color: #82aaff;
                }
            </style>";

        // Menu
        echo "<nav>";
        echo "<a href='#inicio'>Início</a>";
        echo "<a href='#detalhes'>Detalhes</a>";
        echo "<a href='#mais-sobre'>Sobre</a>";

        echo "</nav>";
        echo "</div>";
    }

    public function renderizarRodape()
    {
        echo "<div style='
                        width:100%; 
                        background:#1d3b53; 
                        padding:15px; 
                        text-align:center; '>";
        echo "<p style='
                        margin:0; 
                        font-size:14px; 
                        color:#7fdbca;'>&copy; 
                    " . date("Y") . " - Desenvolvido por Matheus Amaral da Costa
            </p>";
        echo "</div>";

        echo '</body>';
        echo '</html>';
    }

    public function renderizarConteudo() {}

    public function renderizarPagina()
    {
        $this->renderizarCabecalho();
        $this->renderizarConteudo();
        $this->renderizarRodape();
    }
}