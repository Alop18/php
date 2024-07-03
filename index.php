<?php
$usuarios = [
    [
        "nombre"=>"Waldir",
        "apellido"=>"Mandon",
        "ciudad"=>[
            "Valledupar"=>[
                "novias"=>['Jisel','Adriana']
            ],
            "Medellin",
            "Bogota"
        ],
        "info"=>'Waldir Adriana Bogotá'
    ],
    [
        "nombre"=>"Eduardo",
        "apellido"=>"Mandon",
        "ciudad"=>[
            "Valledupar"=>[
                "novias"=>['Adriana']
            ],
            "Medellin",
            "Bogota"
        ],
        "info"=>'Eduardo Adriana Bogotá'
    ]
];
for ($i=0; $i < count($usuarios); $i++) {
    $novia = '';
    $ciudad = '';
    $nombre1 = $usuarios[$i]['nombre'];
    $noviaArray =$usuarios[$i]['ciudad']['Valledupar']['novias'];
    $ciudadArray =$usuarios[$i]['ciudad'];
    if (isset($noviaArray[1])) {
        $novia = $noviaArray[1];
    } else{
        $novia = $noviaArray[0];
    }
    if (isset($ciudadArray[0])&& $i==0) {
        $ciudad = $ciudadArray[0];
    } else{
        $ciudad = $ciudadArray[1];
    }
    $info = $nombre1.' '.$novia.' '.$ciudad;
    $usuarios[$i]=$info;
    # code...
}
var_dump($usuarios);