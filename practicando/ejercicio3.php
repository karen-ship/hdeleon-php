<?php

function validarNota(int|float $nota){
    if($nota >= 0 && $nota <= 10){
        echo "Nota valida <br>";
    }else{
        echo "Nota invalida <br>";
    }
}

validarNota(23);

for ($i=0; $i <= 50; $i++) { 
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz <br>";
    }elseif ($i % 3 == 0) {
        echo "Fizz <br>";
    }elseif ($i % 5 == 0) {
        echo "Buzz <br>";
    }else{
        echo "$i <br>";
    }
}
