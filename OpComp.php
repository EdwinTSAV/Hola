<?php

/***
    $v1 == $v2 (igual que) ver si son iguales
    $v1 === $v2 (identica que) ver si son iguales y del mismo tipo
    $v1 != $v2 (diferente que) ver si no son iguales
    $v1 <> $v2 (diferente que) ver si no son iguales y ni del mismo tipo
    $v1 < $v2 (menor que) ver si $v1 es menor que $v2
    $v1 > $v2 (mayor que) ver si $v1 es mayor que $v2
    $v1 <= $v2 (menor o igual que) ver si $v1 es menor o igual que $v2
    $v1 >=   $v2 (mayor o igual que) ver si $v1 es mayor o igual que $v2

***/

    $var1 = 8;
    $var2 = "8";
    $var3 = "Juan";

    if($var1 == $var2){
        echo "son iguales <br>";
    }else{
        echo "no son iguales <br>";
    }

    if($var1 === $var2){
        echo "son iguales <br>";
    }else{
        echo "no son iguales <br>";
    }

    if($var1 == $var3){
        echo "son iguales <br>";
    }else{
        echo "no son iguales <br>";
    }
    
    if($var1 != $var3){
        echo "son diferentes <br>";
    }else{
        echo "no son diferentes <br>";
    }

    
?>