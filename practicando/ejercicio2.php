<?php

function calcularAreaRectangulo($base, $altura){
    $area = $base * $altura;
    echo "El area de tu rectangulo es: $area";
}

// calcularAreaRectangulo(20, 10);

$frutas = ["mandarina", "naranja", "kiwi", "sandilla", "manzana verde"];

/*
foreach ($frutas as $fruta) {
    echo "$fruta <br>";
}
*/

$alumno = [
    "nombre" => "Richard Rodriguez",
    "edad" => 22,
    "curso" => "Programacion I",
    "calificacion" => 77
];

foreach ($alumno as $key => $value) {
    echo "$key => $value <br>";
}

function saludo($nombre, $saludo = "Hola"){
    echo "$saludo, $nombre <br>";
}

saludo("Richard");
saludo("Saida", "Buenos dias");