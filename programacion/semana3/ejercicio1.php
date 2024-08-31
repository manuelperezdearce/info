<?php

// Definición de un descuento en porcentaje
$descuento = 15;

// Lista de productos con su nombre y precio en USD
$productos = [
    ["producto" => "Leche", "precio_usd" => 1.50],
    ["producto" => "Pan", "precio_usd" => 2.00],
    ["producto" => "Huevos", "precio_usd" => 3.00],
    ["producto" => "Arroz", "precio_usd" => 2.50],
    ["producto" => "Pasta", "precio_usd" => 1.75],
    ["producto" => "Pollo", "precio_usd" => 7.50],
    ["producto" => "Manzanas", "precio_usd" => 2.00],
    ["producto" => "Plátanos", "precio_usd" => 1.20],
    ["producto" => "Café", "precio_usd" => 190.00],
    ["producto" => "Azúcar", "precio_usd" => 1.80]
];

// Función para calcular el total de los precios de los productos
function calcularTotal(array $productos): float
{
    $suma = 0; // Inicializa la suma en 0
    foreach ($productos as $producto) {
        // Suma el precio de cada producto al total acumulado
        $suma = $suma + $producto['precio_usd'];
    }
    return $suma; // Devuelve el total acumulado
};

// Función para aplicar un descuento al total si se cumple la condición
function aplicarDescuento(float $total, float $descuento): float
{
    // Si el total supera los 200 USD, aplica el descuento
    $factorDescuento = ($total > 200) ? (1 - ($descuento / 100)) : 1;
    return $total * $factorDescuento; // Devuelve el total con el descuento aplicado
}

// Calcular el total sin descuento
$total = calcularTotal($productos);

// Aplicar el descuento al total
$totalConDescuento = aplicarDescuento($total, $descuento);

// Mostrar el total final a pagar con formato de dos decimales
echo "Total a pagar: $" . number_format($totalConDescuento, 2) . " USD";
