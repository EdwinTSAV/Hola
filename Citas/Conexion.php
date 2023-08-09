<?php
$db_host = "localhost";
$db_nombre = "apiprueb_chef";
$db_usuario = "root";
$db_contra = "mundo";

$conexion = new mysqli($db_host,$db_usuario,$db_contra,$db_nombre);

if(mysqli_connect_errno()){
    echo "Fallo al conectar con la BBDD";
    exit();
}

mysqli_select_db($conexion,$db_nombre) or die("No se encuentra la BBDD");

mysqli_set_charset($conexion,"utf8");

$consulta = "SELECT * FROM orders";
$resultados = mysqli_query($conexion,$consulta);

/*while($fila = mysqli_fetch_row($resultados)){
    //$fila = mysqli_fetch_row($resultados);
    echo $fila[0] . " ";
    echo $fila[1] . " ";
    echo $fila[2] . " ";
    echo "<br>";
    echo "<br>";
}*/

while($fila = mysqli_fetch_array($resultados, MYSQLI_ASSOC)){
    //$fila = mysqli_fetch_row($resultados);
    /*echo $fila["id"] . " ";
    echo $fila["order_unique_id"] . " ";
    echo $fila["store_id"] . " ";
    echo "<br>";
    echo "<br>";*/
    foreach($fila as $clave=>$valor){
		echo "$valor - ";
       }
       echo "<br>";

}

mysqli_close($conexion);
?>