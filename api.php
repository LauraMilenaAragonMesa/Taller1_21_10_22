<?php
    header("Access-Control-Allow-Origin: *");
    header('Content-Type: application/json; charset=utf-8');

    //2. Determinar la hipotenusa de un triángulo rectángulo conocidas 
    //las longitudes de sus dos catetos. Desarrolle el algoritmo 
    //correspondiente. Formula: (HIP = √CATa + √CATb)

    $CATa = 9;
    $CATb = 16;

    $RaizCATa = sqrt($CATa);
    $RaizCATb = sqrt($CATb);

    $HIP = $RaizCATa + $RaizCATb;

    

    $obj = (object) [
        "Resultado" => "La hipotenusa de un triángulo rectángulo es : $HIP ",
        "Mensaje" => "Servidor de origen ".$_SERVER["HTTP_HOST"]
    ];
 
    echo json_encode($obj,JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
?>