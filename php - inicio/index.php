<?php

    // Variáveis, Operações, Operadores condicionais, Laços de repetição e Arrays

    // Variáveis

    $mensagem = 'Bora pro lol';
    $a = 5;
    $b = 2;
    $soma = $a + $b;
    $subtracao = $a - $b;
    $multiplicacao = $a * $b;
    $divisao = $a / $b;
    $i = 0;
    $y = [0,1,2,3,4,5,6,7,8,9];
    $variavel = array(1,2,3,4,5);
    $varistr = array("a" => "abacaxi", "b" => "bola", "c" => "cachorro");

    echo $mensagem;
    echo "<hr>";

    // Operações

    echo "a Soma é = ". $soma. "<br>";
    echo "a Subtração é = ". $subtracao. "<br>";
    echo "a Multiplicação é = ". $multiplicacao. "<br>";
    echo "a Divisão é = ". $divisao. "<br>";
    echo "<hr>";

    // Operadores condicionais

    if ($b % 2 == 1) {
        echo "Numero impar";
    } else {
        echo "Numero par";
    }
    echo "<hr>";

    // Laços de repetição

    # while
    
    while ($i <= 10) {
        echo "while: $i<br>";
        $i++;
    }
    echo "<hr>";

    # do...while

    do {
        echo "do...while: $i<br>";
        $i++;
    } while ($i <= 20);
    echo "<hr>";

    # for

    for ($i = 0; $i < 10; $i++){
        echo "for = $i <br>";
    }
    echo "<hr>";

    # foreach

    foreach ($y as $j) {
        echo "foreach = $j <br>";
    }
    echo "<hr>";

    # Arrays

    print_r ($variavel);
    echo "<br>";

    foreach ($variavel as $v) {
        echo "Array = $v <br>";
    }
    echo "<br>";

    foreach ($varistr as $a) {
        echo "Array String = $a <br>";
    }
    echo "<br>";

    echo $varistr ["b"];
    echo "<br>";
    echo $variavel [1];
?>