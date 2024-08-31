<?php

$user = 'Manu3l';
$password = 'E$423fd';

function validarUser(string $user): bool
{
    $userArray_LENGTH = strlen($user);

    // Acá van las validaciones para el username.

    if ($userArray_LENGTH < 6 || $userArray_LENGTH > 10) return false; // Validación para longitud, entre 6 y 10 carácteres.
    if (!ctype_alpha($user[0]) || !ctype_alpha($user[$userArray_LENGTH - 1])) return false; // Validación de letra para el primer y ultimo elemento del array.
    if (!preg_match("/\d/", $user)) return false; // Validación para verificar si posee un número.

    return true; // Todas las validaciones pasadas.
}

function validarPassword(string $password): bool
{
    $passwordArray_LENGTH = strlen($password);
    // Acá van las validaciones para el password, mientras es true.

    if ($passwordArray_LENGTH > 8) return false; // Validación para longitud máxima 8 carácteres.
    if (!ctype_upper($password[0])) return false; // Validación para que primer caracter sea Mayuscula.
    if (!preg_match("/[\#$%&]/", $password)) return false; // Validación para que el string tenga caracteres especiales ()

    return true;
}

function validarCredencialesUsuario(string $user, string $password): string
{
    $validated = [
        'user' => validarUser($user),
        'password' => validarPassword(($password))
    ];

    return $validated['user'] && $validated['password'] ? 'Validado' : 'No validado';
}

$mensaje = validarCredencialesUsuario($user, $password);

echo $mensaje;
