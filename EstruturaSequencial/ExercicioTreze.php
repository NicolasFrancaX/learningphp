<?php

/* Tendo como dados de entrada a altura e o sexo de uma pessoa, construa um 
algoritmo que calcule seu peso ideal, utilizando as seguintes fórmulas:
    a. Para homens: (72.7*h) - 58
    b. Para mulheres: (62.1*h) - 44.7 (h = altura)
    c. Peça o peso da pessoa e informe se ela está dentro, acima ou abaixo do 
   peso. */

function idealWeight($high, $sex, $weight) {
    $ideal = ($sex == 'm') ? (72.7 * $high) - 58 : (62.1*h) - 44.7;
   
    echo "Peso ";
    
    if ($ideal > $weight) {
       echo "abaixo do ideal.\n";
    } elseif ($ideal < $weight) {
       echo "acima do ideal.\n";
    } else {
       echo "dentro do ideal.\n";
    }
}

idealWeight(1.70, 'f', 65.59);