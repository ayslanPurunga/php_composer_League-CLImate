<?php

require_once('vendor/autoload.php');

$climate = new League\CLImate\CLImate;

    $climate->out('[1] Raiz Quadrada');
    $climate->out('[2] Fatorial');
    $climate->out('[3] Ao Quadrado');

    $input = $climate->input('Escolha uma das opções acima: ');
    $input->accept(['1', '2', '3']);
    $menu = $input->prompt();

    switch ($menu) {
        case '1':
            //raiz quadrada
            $numeroRaizInput = $climate->input('Insira o número: ');
            $numeroRaiz = $numeroRaizInput->prompt();

            echo sprintf("Resultado: %s", sqrt($numeroRaiz));
            break;
        
        case '2':
            //Fatorial

            break;
        
        case '3':
            //Ao Quadrado

            break;
        
        default:
            # code...
            break;
    }

