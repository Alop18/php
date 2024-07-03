<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Edad</th>
            <th>Hobbies</th>
            <th>Contacto</th>
            <th>Fijo</th>
        </tr>
        <?php
            $usuarios = [
                [
                    "nombre"=>"Waldir",
                    "apellido"=>"De la cruz",
                    "edad"=>null,
                    "hobbies"=>[
                        "futbol",
                        "ps3"
                    ],
                    "contacto"=>[
                        "celular"=>[
                            "3148549658"
                        ],
                        "fijo"=>[
                            "98745",
                            "3124156",
                            "312635156",
                            "3124456256"
                        ]
                    ]
                ],
                [
                    "nombre"=>"Adriana",
                    "apellido"=>"Ortiz",
                    "edad"=>null,
                    "hobbies"=>[
                        "Hacer el amor",
                        "Montar moto",
                    ],
                    "contacto"=>[
                        "celular"=>[
                            "3014548452",
                            "3148549658"
                        ],
                        "fijo"=>[
                            "3124156"
                        ]
                    ]
                ],
                [
                    "nombre"=>"Paola",
                    "apellido"=>"Jimenez",
                    "edad"=>null,
                    "hobbies"=>[
                        "dormir",
                        "ver tv"
                    ],
                    "contacto"=>[
                        "celular"=>[
                            "3154548452",
                            "3148549658"
                        ],
                        "fijo"=>[
                            "5095458"
                        ]
                    ]
                ]
            ];
            for ($i=0; $i < count($usuarios); $i++) { 

            
        ?>
                <tr>
                    <td>
                        <?php echo $usuarios[$i]['nombre'];?>
                    </td>
                    <td>
                        <?php echo $usuarios[$i]['apellido'];?>
                    </td>
                    <td>
                        <?php 
                            $usuarios[$i]['edad']=rand(18,30);
                            echo $usuarios[$i]['edad'];
                        ?>
                    </td>
                    <td>
                        <?php 
                            $Hobbie = implode(",  ",$usuarios[$i]['hobbies']);
                            echo $Hobbie;
                        ?>
                    </td>
                    <td>
                        <?php 
                            $RandomCel=array_rand($usuarios[$i]['contacto']['celular']);
                            echo $usuarios[$i]['contacto']['celular'][$RandomCel];
                        ?>
                    </td>
                    <td>
                        <?php 
                            $RandomFijo=array_rand($usuarios[$i]['contacto']['fijo']);
                            echo $usuarios[$i]['contacto']['fijo'][$RandomFijo];
                        ?>
                    </td>
                </tr>
            <?php } ?>   
    </table>



</body>
</html>
    <!-- CREAR BASE DE DATOS LLAMADA PHP , CREAR TABLA USUARIOS E INSERTAR REGISTROS A ESA TABLA-->
