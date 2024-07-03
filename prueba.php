<?php
$usuarios = [
    [
        "nombre" => "Waldir",
        "apellido" => "De la cruz",
        "edad" => null,
        "hobbies" => [
            "futbol",
            "ps3"
        ],
        "contacto" => [
            "celular" => [
                "3148549658"
            ],
            "fijo" => [
                "98745",
                "3124156"
            ]
        ]
    ],
    [
        "nombre" => "Adriana",
        "apellido" => "Ortiz",
        "edad" => null,
        "hobbies" => [
            "Hacer el amor",
            "Montar moto",
        ],
        "contacto" => [
            "celular" => [
                "3014548452",
                "3148549658"
            ],
            "fijo" => [
                "3124156"
            ]
        ]
    ],
    [
        "nombre" => "Paola",
        "apellido" => "Jimenez",
        "edad" => null,
        "hobbies" => [
            "dormir",
            "ver tv"
        ],
        "contacto" => [
            "celular" => [
                "3154548452",
                "3148549658"
            ],
            "fijo" => [
                "5095458"
            ]
        ]
    ]
];

// Iniciar la tabla HTML
echo '<table border="1">';
echo '<tr><th>Nombre Completo</th><th>Edad</th><th>Hobbies</th><th>Celular Aleatorio</th><th>Fijo Aleatorio</th></tr>';

foreach ($usuarios as $usuario) {
    // Obtener nombre completo
    $nombreCompleto = $usuario["nombre"] . ' ' . $usuario["apellido"];
    
    // Obtener edad
    $edad = $Edad=$usuarios[$i]['edad']=rand(18,28);
    
    // Obtener hobbies como cadena de texto separados por comas
    $hobbies = implode(", ", $usuario["hobbies"]);
    
    // Obtener un celular aleatorio
    $celular = !empty($usuario["contacto"]["celular"]) ? $usuario["contacto"]["celular"][array_rand($usuario["contacto"]["celular"])] : 'N/A';
    
    // Obtener un fijo aleatorio
    $fijo = !empty($usuario["contacto"]["fijo"]) ? $usuario["contacto"]["fijo"][array_rand($usuario["contacto"]["fijo"])] : 'N/A';
    
    // Imprimir fila de la tabla
    echo '<tr>';
    echo '<td>' . $nombreCompleto . '</td>';
    echo '<td>' . $edad . '</td>';
    echo '<td>' . $hobbies . '</td>';
    echo '<td>' . $celular . '</td>';
    echo '<td>' . $fijo . '</td>';
    echo '</tr>';
}

// Cerrar la tabla HTML
echo '</table>';
?>