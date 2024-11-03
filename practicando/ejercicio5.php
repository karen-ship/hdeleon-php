<?php

function esPar($num){
    return $num % 2 == 0;
}

function factorial($num){
    $suma = 1;
    for ($i=1; $i <= $num; $i++) { 
        $suma = $suma * $i;
    }
    return $suma;
}

function calcularPromedio(array $notas){
    $resultado = 0;
    foreach ($notas as $nota) {
        $resultado = $resultado + $nota;
    }
    return round($resultado / count($notas), 1);
}

$notas = [6, 7, 9, 6, 7, 10, 8];

function esPrimo($num){
    if ($num<2) return false;
    for ($i=1; $i <= sqrt($num); $i++) { 
        if ($num % $i == 0) return false;
    }

    return true;
}


function fibonacci($n){
    $primero = 0;
    $segundo = 1;
    $resultado = 0;
    for ($i=1; $i < $n; $i++) {
        $resultado = $primero + $segundo;
        $primero = $segundo;
        $segundo = $resultado;
    }
    if ($n == 0) return 0;
    if ($n == 1) return 1;

    return $resultado;
}


function numeroAleatorio(){
    return rand(0, 100);
}


function crearArreglos($tamanio){
    $arreglo = [];
    for ($i=0; $i < $tamanio; $i++) { 
        $arreglo[] = numeroAleatorio();
    }
    return $arreglo;
}


$arreglo = crearArreglos(10);


function encontrarMayor(array $arreglo){
    // $mayor;

    // for ($i=0; $i < count($arreglo); $i++) { 
    //     if ($i == 0) {
    //         $mayor = $arreglo[$i];
    //     }
    //     if ($arreglo[$i] >= $mayor) {
    //         $mayor = $arreglo[$i];
    //     }
    // }

    // return $mayor;
    return max($arreglo);
}



function celsiusAFahrenheit($valor){
    return $valor * 9/5 + 32;
}


function contarPalabras($cadena){
    return str_word_count($cadena);
}

$cadena = "Somos o no somos";
// $contando = str_split($cadena); // convertimos una cadena en un array
// $cadena2 = strrev(str_replace(" ", "", $cadena));
// $nuevo = array_reverse($contando); // invierte un array

// print_r($cadena2);

// $new = strtolower($cadena);

// print_r($contando);
// print_r($nuevo);

// print_r($new);

function esPalindromo($palabra){
    $sinEspacio = str_replace(" ", "", $palabra);
    $formateado = strrev($sinEspacio);
    
    return strcasecmp($sinEspacio, $formateado) == 0;
}

$arreglo12 = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];

function invertirArreglo($arreglo){
    return array_reverse($arreglo);
}

$invertido = invertirArreglo($arreglo12);


$numeross = [1,2,5,6,5,3,6,3,2,3,9,9,9,1,9,0,2,2,2,2,2];

function numeroMasFrecuente($arreglo){
    // $frecuencias = array_count_values($arreglo);
    // $mayor = 0;
    // $vuelta = 0;
    // $clave;
    // foreach ($frecuencias as $key => $value) {
    //     echo "key: $key => value(repeticiones): $value <br>";
    //     if ($vuelta == 0) {
    //         $mayor = $value;
    //         $vuelta++;
    //     }
    //     if ($value >= $mayor) {
    //         $clave = $key;
    //         $mayor = $value;
    //     }
    // }

    // return $clave;
    
    $frecuencias = array_count_values($arreglo);
    arsort($frecuencias);
    return array_key_first($frecuencias);
}


echo "El numero mas frecuente del arreglo es " . numeroMasFrecuente($numeross);



