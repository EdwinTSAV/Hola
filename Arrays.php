<?php
//en variables solo se almacena un valor
//En un array se puede almacenar varios datos
//En cualquiera se almacena cualquier tipo de dato

//Arrays indexados
//para referirse a un valor de array especifico, 
//se le llma por indice: Array[2] //trae elemento del
//indice 2
//$mys_numeros[] = {1,2,3,4}; echo $mys_numeros[2];

//Arrays Asociativos
//son aquellas iguaes que los indexados, pero para llamar
//a un valor especifico, se le puede llamar por un nombre
//$mys_numeros = {1,2,3,4}; echo $mys_numeros["valor3"];

//Arrays indexados sintaxis 1
$semana[]="Lunes";
$semana[]="Martes";
$semana[]="Miercoles";
$semana[]="Jueves";
$semana[]="Viernes";
$semana[]="Sabado";
$semana[]="Domingo";
//como no se coloca un numero en los indices, php
//lo guarda en orden de arriba abajo de 0 a 6;
//los arrays siempre empiezan desde el indice 0
echo $semana[1] . "<br>";
/*$semana[0]="Lunes";
$semana[1]="Martes";
$semana[2]="Miercoles";
$semana[3]="Jueves";
$semana[4]="Viernes";
$semana[5]="Sabado";
$semana[6]="Domingo";*/
//como no se coloca un numero en los indices, php
//lo guarda en orden de arriba abajo de 0 a 6;
//los arrays siempre empiezan desde el indice 0
//echo $semana[7]; //esto me daria error porque no esta definido
//lo mismo si olvido colocar el 0 u otro indice

//Arrays indexados sintaxis 2
$semana2 = array("Lunes","Martes","Miercoles","Jueves","Viernes","Sabado","Domingo");
//Lo mismo, lo guarda en orden, aunque no lo hayamos definido
echo $semana2[3] . "<br>";

//Arrays Asociativos sintaxis 1
//para asociar un nombre con su posicion, se usa el =>
//lo que se hace a continuacion, es que al valor "Juan" no se le coloca
//indice 0, sino el nombre
$datos = array("Nombre"=>"Juan", "Apellido"=>"Sancho","Edad"=>22);
//en los corchetes se coloca el nombre de la asociacion del dato
echo $datos["Nombre"] . "<br>";

/*$datos[]="Lunes";
$datos[]="Martes";
$datos[]="Miercoles";
$datos[]="Jueves";
$datos[]="Viernes";
$datos[]="Sabado";
$datos[]="Domingo";*/

//la base de datos, responde a un query, la base de datos
//que devuelva, se debe almacenar en Array;
//Advertencia: cuando se usa nombre a las posiciones
//se debe evitar repetir, porque da problemas
//que no se detectan facilmente

//$datos = "Martin"; tener cuidado de esto

//Como saber si es array o no
if(is_array($datos)){
    echo "Si es un array <br>";
}else{
    echo "No es un array <br>";
}
//recorrer array
//Asociativo
//aca es ams distinto a otros lenguajes
//se coloca $datos, que recorrera con $nomindex
//que es donde se guardara el nombre del indice
//=> $nomvalor, que es donde se obtiene el valor
foreach($datos as $nomindex=>$nomvalor){
    echo "A $nomindex le corresponde $nomvalor <br>";
}

//idexado
//si se conoce cual es el numero del array se coloca el numero
//si no se conoce se coloca count($semana)
for($i=0;$i<count($semana);$i++){
    echo $semana[$i] . "<br>";
}

//añadir elementos a array
//Indexado
$semana[]="No hay";
//recorrido de nuevo, porque el de arriba no lo recorre
for($i=0;$i<count($semana);$i++){
    echo $semana[$i] . "<br>";
}

//Asociativo
$datos["Pais"]="España";
//recorrido de nuevo
foreach($datos as $nomindex=>$nomvalor){
    echo "A $nomindex le corresponde $nomvalor <br>";
}

//ordenar array
//alfabeticamente
sort($semana);
for($i=0;$i<count($semana);$i++){
    echo $semana[$i] . "<br>";
}

//Arrays Multidimensionales
//Array dentro de otro array
$alimentos=array("fruta"=>array("tropical"=>"kiwi",
                                "citricos"=>"mandarina",
                                "otros"=>"manzana"),
                "leche"=>array("animal"=>"vaca",
                                "vegetal"=>"coco"),
                "carne"=>array("vacuno"=>"lomo",
                                "porcino"=>"pata"));

//Acceder a estos elementos
echo $alimentos["carne"]["vacuno"] ."<br>";

//recorrer con el bucle
//desdoblar la primera dimension
foreach($alimentos as $clave_ali/*primera dimension del array*/=> $alim /*segunda dimension*/){
    echo "$clave_ali:<br>";
    //desdoblar la segunda dimension
    //each creo que es de foreach
    //each = por cada alim, lo desdoble en $clave y $valor
    //y se le dice que lo haga mientras haya valores en la lista
    /*while(list($clave, $valor)=each($alim)){
        echo "$clave = $valor <br>";
    }*esta en desuso pipipip*/
    foreach ($alim as $clave => $valor) {
	   echo "$clave = $valor <br>";
   }
    echo "<br>";
}

//imprimir array en pantalla
echo var_dump($alimentos);

?>