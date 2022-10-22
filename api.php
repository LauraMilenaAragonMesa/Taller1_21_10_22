<?php
    header("Access-Control-Allow-Origin: *");
    header('Content-Type: application/json; charset=utf-8');

    // "Desarrolle un algoritmo que realice la sumatoria de los números enteros 
    // comprendidos entre el 1 y el 1O, es decir, 1 + 2 + 3 + .... + 1O."
    $suma = 1+2+3+4+5+6+7+8+9+10;

    $obj = (object) [
        "Resultado" => "La sumatoria de los números enteros es : $suma ",
        "Mensaje" => "Servidor de origen ".$_SERVER["HTTP_HOST"]
    ];
 
    echo json_encode($obj,JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
?>