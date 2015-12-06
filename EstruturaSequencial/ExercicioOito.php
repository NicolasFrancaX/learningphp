<?php

/* Faça um Programa que pergunte quanto você ganha por hora e o número de horas
trabalhadas no mês. Calcule e mostre o total do seu salário no referido mês. */

function showSalary($hour, $hours) {
    $salary = $hour * $hours;
    
    echo "Seu salário no mês é {$salary}.\n";
}

showSalary(20, 168);