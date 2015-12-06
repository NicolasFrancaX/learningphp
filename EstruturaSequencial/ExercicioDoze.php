<?php

/* Tendo como dados de entrada a altura de uma pessoa, construa um algoritmo que
calcule seu peso ideal, usando a seguinte fórmula: (72.7*altura) - 58 */

function idealWeight($high) {
    $ideal = (72.7 * $high) - 58;
    
    echo "Seu peso ideal é {$ideal}.\n";
}

idealWeight(1.7);