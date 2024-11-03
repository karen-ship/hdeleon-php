<?php

$nombre = "Richard";

// echo $nombre;

$c = 86;
$d = 40;

function calcular($c, $d){
    echo "$c + $d = ".$c + $d."<br>";
    echo "$c - $d = ".$c - $d."<br>";
    echo "$c * $d = ".$c * $d."<br>";
    echo "$c / $d = ".$c / $d."<br>";
}

// calcular($c, $d);

for ($i=0; $i < 11; $i++) { 
    if ($i == 0) {
        echo "BUCLE FOR <br>";
    }
    echo "$i <br>";
}

$a = 0;

while ($a < 11) {
    if ($a == 0) {
        echo "BUCLE WHILE <br>";
    }
    echo "$a <br>";

    $a++;
}

