<?php
//visitar: https://www.php.net/manual/es/ref.math.php

//random:
$num1 = rand(10,100);
echo "el numero random es: $num1 <br>";
//exponente
$num2 = pow(5,3);
echo "el numero exponente es: $num2 <br>";
//redondeo
$num3 = 5.25;
echo "el numero exponente es: " . round ($num3) .   " <br>";

//casting en php es implicito
//php es flexible y transforma solo el tipo de dato
$num4 = "5";
$num4 += 2; //con esta linea php castea el string a int;
$num4 += 5.75; //castea a tipo float sin hacer cosas explicitas

//casting tipo explicito en php
$num5 = "5";
$resultado = (int)$num5;

//Condicionales
// https://www.php.net/manual/es/language.operators.logical.php
/*
// pese a que dos se ven iguales no es lo mismo
&& Y logico
AND Y logico
|| o Lohico
OR o Logico
// en esos 4 no se tiene la misma prioridad:
ejm:
    2+3*6 = 20 //primero se toma de preferencia la multiplicacion
                A menos que se coloquen parentesis
                (2+3)*6

Lo mismo ocurre con los de arriba, hay ciertos que tienen prioridad que los otros
Se puede usar para ver en que orden usar

//Prioridad de operadores
https://www.php.net/manual/es/language.operators.precedence.php
desde arriba quienes tienen mas prioridad

XOR O Exclusivo
! Negacion (NOT)
*/

?>