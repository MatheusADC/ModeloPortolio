<?php

require_once 'classes/Pagina.class.php';
require_once 'classes/PaginaServ.class.php';

$servicos = ['Desenvolvimento FullStack', 'Reparo de Computadores', 'Suporte e Infraestrutura', 'Modelagem de Banco de Dados'];
$valores = [4000, 2000, 3000, 8000];

$paginaServ = new PaginaServ(
    'Matheus Amaral',
    'Engenharia da Computação',
    'matheus@email.com',
    '+552799999-9999',
    $servicos,
    $valores
);

$paginaServ->renderizarPagina();