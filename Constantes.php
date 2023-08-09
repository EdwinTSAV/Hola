<?php
//Una constabnte no cambia su valor almacenado

//El nombre de las constantes siempre en mayusculas
//No deben llevar el signo de dolar como las variables
//se debe colocar con define (NOMBRECONSTANTE,valor);

//definir constante: el true es para definir que sea
//impresindible en mayusculas e ignora como se haya
//declarado y lo toma como minus, pero debe colocarse
//siempre en mayusculas y no importa como coloquemos
define("AUTOR","Edwin"/*,true*/);

//no se puede hacer como la variable, ya que no la reconoce:
echo "El autor es : AUTOR <br>";
//debe concatenarse
echo "El autor es : " . AUTOR . "<br>";

//Esto marcara un error, puesto que no es posible:
//AUTOR = "Maria";

//Esto marcara un error, puesto que no es posible:
//define("AUTOR","Andy");
//El true de la linea 11 puede hacer que imprima Andy
//ya que se ignora mayusculas y minusculas

//Constantes predefinidas:
//https://www.php.net/manual/es/language.constants.predefined.php

echo "La linea de la instruccion es: " . __LINE__ . "<br>";
echo "La linea de la instruccion es: " . __FILE__ . "<br>";

?>