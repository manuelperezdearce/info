<?php

$variables = ["", "", 1, [], [], 1.2, true, "bien"]; // Se define una variable tipo array que contiene multiples tipos de variables.

$variablesCompuestas = 0; // contador V.Compuestas
$variablesEscalares = 0; // contaro V.Escalares

foreach ($variables as $variable) {  // Loop para recorrer $variables por cada elemento $variable.
    if (gettype($variable) === "array") { // gettype devuelve el tipo de una variable.
        $variablesCompuestas++;
    } else {
        $variablesEscalares++;
    }
}

// Imprime por pantalla el resultado de los contadores
print_r(
    [
        'variables_escalares' => $variablesEscalares,
        'variables_compuestas' => $variablesCompuestas
    ]
);
