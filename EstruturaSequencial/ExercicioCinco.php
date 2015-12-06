<?php

// Faça um Programa que converta metros para centímetros. 

function metersToCentimeters($meters) {
    $centimeters = $meters * 100;
    
    echo "{$meters}m is {$centimeters}cm.\n";
}

metersToCentimeters(1); // => 100cm