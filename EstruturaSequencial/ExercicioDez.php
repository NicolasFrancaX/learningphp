<?php

/* Faça um Programa que peça a temperatura em graus Celsius, transforme e 
mostre em graus Farenheit. */

function celsiusToFarenheit($celsius) {
    $farenheit = round((($celsius * 9) / 5) + 32, 2);
    
    echo "{$celsius}C = {$farenheit}F\n";
}

celsiusToFarenheit(6.2454);