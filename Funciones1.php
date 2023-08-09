<?php
//Funciones predefinidas de php
//https://www.php.net/manual/es/indexes.functions.php
//transformas minus a mayus, 

$palabra = "Edwin";
echo(strtolower($palabra)), "<br>";
echo(strtoupper($palabra)), "<br>";

//Funciones propias: las construimos nosotros
function frase_mayus($frase,$conversion=true){
    $frase = strtolower($frase);
    if($conversion == true){
        $resultado = ucwords($frase);
    }else{
        $resultado = strtoupper($frase);
    }
    return $resultado;
}

echo (frase_mayus("esto es una prueba<br>"));
echo (frase_mayus("esto es una prueba2<br>",false));

//paso de parametro por valor
//la funcion no sabe nada de lo que hay afuera
//no modifica nada, asi que la funcion y el
//numero son distintos
function incrementa ($valor1){
    $valor1++;
    return $valor1;
}
$numero = 5;
echo incrementa($numero),"<br>";
echo $numero . "<br>";
//paso de parametro po referencia (&)
//creamos una conexion por referencia con el origen
//La funcion sabe que hay fuera de ella y la modifica

function incrementa2 (&$valor1){
    $valor1++;
    return $valor1;
}
$numero2 = 6;
echo incrementa2($numero2),"<br>";
echo $numero2 . "<br>";
?>