<?php
    header("Access-Control-Allow-Origin: *");
    header('Content-Type: application/json; charset=utf-8');

    //3. Desarrolle un algoritmo que permita determinar el área
    //lateral y volumen de un cilindro dado su radio (R) y
    //altura (H). Formula: (VOL = π * R^2 * H), 
    //(AREA_LATERAL = 2 * π * R * H)

    $R = 9; //radio
    $H = 16; //altura
    $PI = 3.141592; // valor de π
    $R2 = $R ** 2; // valor del radio elevado a la 2

    $VOL = $PI * $R2 * $H; // volumen del cilindro
    $areaLateral = 2 * $PI * $R * $H; // area lateral del cilindro


    $obj = (object) [
        "Resultado" => ["El volumen del cilindro es : $VOL ",
        "El área lateral del cilindro es: $areaLateral "] ,
        "Mensaje" => "Servidor de origen ".$_SERVER["HTTP_HOST"]
    ];
 
    echo json_encode($obj,JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
?>