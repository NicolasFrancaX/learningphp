<?php

/* Faça um Programa que peça 2 números inteiros e um número real. Calcule e mostre:
    1. o produto do dobro do primeiro com metade do segundo .
    2. a soma do triplo do primeiro com o terceiro.
    3. o terceiro elevado ao cubo. */
    
function calculate($a, $b, $c) {
    $a      = (int)($a);
    $b      = (int)($b);
    
    $first  = ($a * 2) * ($b * 0.5);
    $second = ($a * 3) + $c;
    $third  = pow($c, 3);
    
    echo "1. {$first}\n2. {$second}\n3. {$third}\n";
}

calculate(13.9, 4, 94.9);