<?php  

/* Faça um Programa que peça a temperatura em graus Farenheit, transforme e 
mostre a temperatura em graus Celsius. C = (5 * (F-32) / 9). */

function farenheitToCelsius($farenheit) {
    $celsius = round((5 * ($farenheit - 32) / 9), 2);
    
    echo "{$farenheit}F = {$celsius}C\n";
}

farenheitToCelsius(9);