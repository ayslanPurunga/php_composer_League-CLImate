<?php

require_once('vendor/autoload.php');

$climate = new League\CLImate\CLImate;

    $climate->out('[1] Raiz Quadrada');
    $climate->out('[2] Fatorial');
    $climate->out('[3] Ao Quadrado');

    $input = $climate->input('Escolha uma das opções acima: ');
    $input->accept(['1', '2', '3', '4']);
    $menu = $input->prompt();

