<?php
$var1 = true;
$var2 = false;
$resultado = $var1 && $var2;//se alamcenara false por el $var2
// && obliga que se cumplan todas las condiciones
//var 1 y var 2 tienen que ser true para que sea verdadero

if($resultado){
    echo "correcto<br>";
}else{
    echo "incorrecto<br>";
}

$resultado2 = $var1 and $var2;//se alamcenara true
// and cambia la prioridad ya que tiene mas prioridad =
//var 1 se almacena primero en resultado, a menos que
// se coloque en parentesis

if($resultado2){
    echo "correcto<br>";
}else{
    echo "incorrecto<br>";
}

$resultado3 = ($var1 and $var2);//se alamcenara true
// and cambia la prioridad ya que tiene mas prioridad =
//var 1 se almacena primero en resultado, a menos que
// se coloque en parentesis (lo he colocado los parentesis y dio false)

if($resultado3){
    echo "correcto<br>";
}else{
    echo "incorrecto<br>";
}

?>