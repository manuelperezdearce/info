<?php

$texto = "Este eS uN texTO";

echo "strtoupper(): " . strtoupper($texto) . "\n"; // Convierte todo a mayúsculas
echo "strtolower(): " . strtolower($texto) . "\n"; // Convierte todo a minúsculas
echo "count(): " . count(str_split($texto)) . "\n"; // Cuenta los caracteres (incluyendo espacios)
echo "chr(): " . chr(675) . "\n"; // Devuelve el carácter correspondiente al código ASCII 2
echo "substr(): " . substr($texto, 1, 6) . "\n"; // Obtiene el segundo carácter (índice 1)
echo "strlen(): " . strlen($texto) . "\n"; // Devuelve la longitud de la cadena
