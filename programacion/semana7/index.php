<?php

// Obtener el nombre del controlador desde la URL con solicidud GET del servidor.
$controllerName = isset($_GET['controller']) ? $_GET['controller'] : 'home';
// Obtener la acción del controlador desde la URL con solicitud GET del servidor.
$action = isset($_GET['action']) ? $_GET['action'] : 'render';

// Obtener ruta de controladores
$controllerPath = __DIR__ . "/controller/" . $controllerName . '.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea Semana 7 Programación</title>
    <!-- CDN TailWindcss -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- CDN Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <?php include_once "views/components/navbar.php" ?>
    <main class="bg-slate-200 min-h-[100vh]">
        <section class="max-w-[1200px] m-auto p-4">
            <?php
            if (file_exists($controllerPath)) {
                include_once $controllerPath;
                // Crear instancia del controlador y llamar a la acción
                $controller = new $controllerName();
                if (method_exists($controller, $action)) {
                    $controller->$action();
                } else {
                    echo "La acción no existe.";
                }
            } else {
                echo "El controlador no existe.";
            }
            ?>
        </section>

    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</body>

</html>