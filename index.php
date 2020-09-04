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
            $numeroFatorInput = $climate->input('Insira o número: ');
            $numeroFator = $numeroFatorInput->prompt();

            class Fator 
                {    
                    public function calcular($fator)
                    {    
                        $resultado = 1;
                        for($i = $fator; $i > 1; $i--)
                        {
                            $resultado *= $fator;
                            $fator--;                 
                        }
                        return $resultado;
                    }
                }
                $result = "";
                if (isset($numeroFator) && is_numeric($numeroFator))
                {
                    $c1 = new Fator();
            
                    //executa a funcao
                    $result = $c1->calcular((int)$numeroFator);
                }
                    

                echo sprintf ("Resultado: %s", $result);
                break;
        
        case '3':
            //Ao Quadrado
            $numeroBaseInput = $climate->input('Insira o numero base:');
            $numeroBase = $numeroBaseInput->prompt();
            $expoenteInput = $climate->input('Insira o numero expoente:');
            $expoente = $expoenteInput->prompt();

            echo sprintf ("Resultado: %s", pow($numeroBase, $expoente));

            break;
        
        default:
            # code...
            break;
    }

