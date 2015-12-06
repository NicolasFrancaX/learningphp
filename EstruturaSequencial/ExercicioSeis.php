<?php

// Faça um Programa que peça o raio de um círculo, calcule e mostre sua área. 

function circleArea($radius) {
    $area = round(M_PI * pow($radius, 2), 2);
    
    echo "A área do círculo de raio {$radius}m é {$area}m².\n";
}

circleArea(6);