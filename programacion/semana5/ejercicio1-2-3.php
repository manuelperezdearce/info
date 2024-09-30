<?php

// Tabla de Reservaciones
$BD_RESERVACIONES = [
    [
        'reservacion_id' => '001',
        'nombre_cliente' => 'Juan Pérez',
        'telefono_cliente' => '3001234567',
        'cantidad_comensales' => 4,
        'tipo_evento' => 'Cumpleaños',  // Ejemplo: tipo_evento_id 2
        'menu_id' => '2',  // Almuerzo Ejecutivo
        'area_id' => '1',  // Terraza
        'fecha_reservacion' => '2024-09-15',
        'hora_reservacion' => '13:00',
        'create_at' => '2024-09-12',
        'update_at' => '2024-09-12'
    ],
    [
        'reservacion_id' => '002',
        'nombre_cliente' => 'Ana Gómez',
        'telefono_cliente' => '3009876543',
        'cantidad_comensales' => 2,
        'tipo_evento' => 'Reunión Empresarial',  // Ejemplo: tipo_evento_id 3
        'menu_id' => '1',  // Desayuno Continental
        'area_id' => '2',  // Salón Privado
        'fecha_reservacion' => '2024-09-15',
        'hora_reservacion' => '09:00',
        'create_at' => '2024-09-12',
        'update_at' => '2024-09-12'
    ],
    [
        'reservacion_id' => '003',
        'nombre_cliente' => 'Carlos Ramírez',
        'telefono_cliente' => '3005554321',
        'cantidad_comensales' => 8,
        'tipo_evento' => 'Boda',  // Ejemplo: tipo_evento_id 1
        'menu_id' => '3',  // Cena Gourmet
        'area_id' => '3',  // Comedor Principal
        'fecha_reservacion' => '2024-09-17',
        'hora_reservacion' => '18:30',
        'create_at' => '2024-09-12',
        'update_at' => '2024-09-12'
    ]
];

// Tabla de Áreas
$BD_AREAS = [
    [
        'area_id' => '1',
        'nombre_area' => 'Terraza',
        'descripcion_area' => 'Una terraza con muy buena vista.'
    ],
    [
        'area_id' => '2',
        'nombre_area' => 'Salón Privado',
        'descripcion_area' => 'Un salón con elegancia y prestancia.'
    ],
    [
        'area_id' => '3',
        'nombre_area' => 'Comedor Principal',
        'descripcion_area' => 'Espectacular espacio.'
    ],
];

// Tabla de Tipos de Eventos
$BD_EVENTOS = [
    [
        'tipo_evento_id' => '1',
        'nombre_evento' => 'Boda',
        'descripcion_evento' => 'Celebración de matrimonio con ceremonia y banquete.'
    ],
    [
        'tipo_evento_id' => '2',
        'nombre_evento' => 'Cumpleaños',
        'descripcion_evento' => 'Celebración de cumpleaños con comida y entretenimiento.'
    ],
    [
        'tipo_evento_id' => '3',
        'nombre_evento' => 'Reunión Empresarial',
        'descripcion_evento' => 'Evento corporativo con presentaciones y banquete.'
    ],
    [
        'tipo_evento_id' => '4',
        'nombre_evento' => 'Aniversario',
        'descripcion_evento' => 'Celebración de aniversario conmemorando una ocasión especial.'
    ],
    [
        'tipo_evento_id' => '5',
        'nombre_evento' => 'Conferencia',
        'descripcion_evento' => 'Evento para compartir conocimientos y networking.'
    ],
];

// Tabla de Menús
$BD_MENUS = [
    [
        'menu_id' => '1',
        'nombre_menu' => 'Desayuno Continental',
        'descripcion_menu' => 'Incluye café, jugo natural, tostadas y frutas frescas.'
    ],
    [
        'menu_id' => '2',
        'nombre_menu' => 'Almuerzo Ejecutivo',
        'descripcion_menu' => 'Consiste en una entrada, plato principal con opción de carne o pescado, bebida y postre.'
    ],
    [
        'menu_id' => '3',
        'nombre_menu' => 'Cena Gourmet',
        'descripcion_menu' => 'Ofrece una selección de platos internacionales, con maridaje de vinos incluido.'
    ],
];


function obtenerReservacionesPorDia($reservaciones)
{
    $reservaciones_por_dia = [];

    foreach ($reservaciones as $reservacion) {
        $fecha = $reservacion['fecha_reservacion'];
        if (!isset($reservaciones_por_dia[$fecha])) {
            $reservaciones_por_dia[$fecha] = [
                'reservaciones' => [],
                'total_comensales' => 0
            ];
        }
        $reservaciones_por_dia[$fecha]['reservaciones'][] = $reservacion;
        $reservaciones_por_dia[$fecha]['total_comensales'] += $reservacion['cantidad_comensales'];
    }

    return $reservaciones_por_dia;
}

// Función para obtener los comensales por área
function obtenerComensalesPorArea($reservaciones)
{
    $comensales_por_area = [
        '1' => 0,  // Terraza
        '2' => 0,  // Salón Privado
        '3' => 0   // Comedor Principal
    ];

    foreach ($reservaciones as $reservacion) {
        $area = $reservacion['area_id'];
        $comensales_por_area[$area] += $reservacion['cantidad_comensales'];
    }

    return $comensales_por_area;
}

// Simulación de reservaciones
$reservaciones = $BD_RESERVACIONES;

// Obtener las reservaciones por día
$resultado_por_dia = obtenerReservacionesPorDia($reservaciones);

// Obtener los comensales por área para un día específico
$fecha_seleccionada = '2024-09-15';
if (isset($resultado_por_dia[$fecha_seleccionada])) {
    $reservaciones_dia = $resultado_por_dia[$fecha_seleccionada]['reservaciones'];
    $resultado_por_area = obtenerComensalesPorArea($reservaciones_dia);
    print_r($resultado_por_area);
} else {
    echo "No hay reservaciones para el día seleccionado.";
}
