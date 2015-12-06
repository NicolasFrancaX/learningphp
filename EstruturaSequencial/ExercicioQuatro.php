<?php

// Faça um Programa que peça as 4 notas bimestrais e mostre a média. 

function showMean($a, $b, $c, $d) {
    $mean = ($a + $b + $c + $d) / 4;
    
    echo "A média é {$mean}.\n";
}

showMean(10, 10, 10, 10);