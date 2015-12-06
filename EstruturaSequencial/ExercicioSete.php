<?php

// Faça um Programa que calcule a área de um quadrado, em seguida mostre o dobro desta área para o usuário. 

function doubleSquareArea($side) {
    $square       = pow($side, 2);
    $doubleSquare = 2 * $square;
    
    echo "A área do quadrado de lado {$side} é {$square}, e o seu dobro é {$doubleSquare}.\n";
}

doubleSquareArea(6);