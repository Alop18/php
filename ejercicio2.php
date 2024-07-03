<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>TABLA</title>
</head>
<body>
  <div>
    <div class="btn-modal">
      <label for="modal"></label>
    </div>
  </div>
    <table>
        <tr>
          <th>NOMBRE</th>
          <th>APELLIDO</th>
          <th>EDAD</th>
          <th>DIRECCIÓN</th>
          <th>OCUPACIÓN</th>
          <th>CORREO</th>
          <th>HOBBIE</th>
          <th>CELULAR</th>
          <th>FIJO</th>
          <th>AMIGOS</th>
          <th>OPCION</th>
        </tr>
        <?php
      $usuarios = [
          [
            "nombre" => "Waldir",
              "apellido" => "De la Cruz",
              "edad" => null,
              "direccion" => [
                "calle" => "Calle 123",
                  "ciudad" => "Bogotá",
                  "pais" => "Colombia"
              ],
              "ocupacion" => "Ingeniero de Software",
              "correo" => "waldir.delacruz@example.com",
              "hobbies" => [
                  "futbol",
                  "ps3",
                  "leer",
                  "viajar"
                ],
              "contacto" => [
                  "celular" => [
                      "3148549658",
                      "3201234567"
                  ],
                  "fijo" => [
                      "98745",
                      "3124156"
                  ]
              ],
              "amigos" => [
                  "Carlos", "Ana", "Luis"
              ]
          ],
          [
              "nombre" => "Adriana",
              "apellido" => "Ortiz",
              "edad" => null,
              "direccion" => [
                  "calle" => "Avenida Siempre Viva",
                  "ciudad" => "Medellín",
                  "pais" => "Colombia"
              ],
              "ocupacion" => "Diseñadora Gráfica",
              "correo" => "adriana.ortiz@example.com",
              "hobbies" => [
                  "Montar moto",
                  "dormir",
                  "yoga"
                ],
              "contacto" => [
                  "celular" => [
                      "3014548452",
                      "3148549658"
                  ],
                  "fijo" => [
                    "3124156"
                  ]
                ],
              "amigos" => [
                  "María", "Juan", "Felipe"
              ]
          ],
          [
              "nombre" => "Paola",
              "apellido" => "Jimenez",
              "edad" => null,
              "direccion" => [
                  "calle" => "Carrera 7",
                  "ciudad" => "Cali",
                  "pais" => "Colombia",
                  "codigo_postal" => "760045"
              ],
              "ocupacion" => "Estudiante",
              "correo" => "paola.jimenez@example.com",
              "hobbies" => [
                  "dormir",
                  "ver tv",
                  "bailar",
                  "pintar"
              ],
              "contacto" => [
                "celular" => [
                      "3154548452",
                      "3178848569"
                    ],
                  "fijo" => [
                      "5023698"
                  ]
              ],
              "amigos" => [
                  "Laura", "Andrés", "Camila"
                  ]
          ],
          [
            "nombre" => "Carlos",
              "apellido" => "Pérez",
              "edad" => null,
              "direccion" => [
                  "calle" => "Calle 456",
                  "ciudad" => "Barranquilla",
                  "pais" => "Colombia"
              ],
              "ocupacion" => "Médico",
              "correo" => "carlos.perez@example.com",
              "hobbies" => [
                  "nadar",
                  "correr",
                  "leer",
                  "viajar"
              ],
              "contacto" => [
                "celular" => [
                      "3101234567",
                      "3156549871"
                    ],
                    "fijo" => [
                      "123456",
                      "654321"
                  ]
                ],
              "amigos" => [
                  "Pedro", "Lucía", "Sandra"
              ]
            ],
          [
              "nombre" => "Lucía",
              "apellido" => "Gómez",
              "edad" => null,
              "direccion" => [
                "calle" => "Carrera 12",
                  "ciudad" => "Cartagena",
                  "pais" => "Colombia"
                ],
                "ocupacion" => "Arquitecta",
                "correo" => "lucia.gomez@example.com",
                "hobbies" => [
                  "dibujar",
                  "pintar",
                  "correr",
                  "yoga"
                ],
              "contacto" => [
                  "celular" => [
                      "3161234567",
                      "3174567891"
                  ],
                  "fijo" => [
                    "987654",
                      "321456"
                  ]
              ],
              "amigos" => [
                  "Carolina", "Marta", "Ricardo"
              ]
          ]
      ];
      for ($i=0; $i < count($usuarios); $i++) { 
        # code...
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
                        <?php echo $usuarios[$i]["direccion"]["calle"] . ', ' . $usuarios[$i]["direccion"]["ciudad"] . ', ' . $usuarios[$i]["direccion"]["pais"];?>
                    </td>
                    <td>
                        <?php echo $usuarios[$i]['ocupacion'];?>
                    </td>
                    <td>
                        <?php echo $usuarios[$i]['correo'];?>
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
                    <td>
                        <?php 
                            $Amigos = implode(", ",$usuarios[$i]['amigos']);
                            echo $Amigos;
                        ?>
                    </td>
                    <td>
                        <button>ACTUALIZAR</button>
                        <button>BORRAR</button>
                    </td>
          </tr>
    <?php } ?>
  </table>
</body>
</html>