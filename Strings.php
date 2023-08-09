<h1>Hola Mundo
</h1>
<p>Use this page to detail your site's privacy policy.</p>
<br />

<style>
    .resaltar{
        color: #F00;
        font-weight:bold;
    }
</style>

<?php

    // para colocar comillas hijas dentro de comilla padre se usa las simples
    //y tambien viseversa
    echo "<p class='resaltar'>Esto es un ejemplo de frase simple</p>";
    echo '<p class="resaltar">Esto es un ejemplo de frase doble</p>';
    //o tambien una barra invertida (se le indica al leguna que el caracter que va a continuacion no forma parte del String)
    echo "<p class=\"resaltar\">Esto es un ejemplo de frase</p>";
    $nombre = "Edwin";
    //con las comillas doble si considera la variable
    echo "Hola $nombre <br>";
    //con la comilla simple no la considera
    echo 'Hola $nombre <br>';

    //Comparar cadenas de String
    /*strcmp //compara String mayusculas y minusculas
    strcasecmp //compara String ignorando mayus y minus*/
    //ambos devuelven 1 si es false y 0 si es true;
    //lo que genera confucion
    //o es false y unos es true en php
    //pero este comparador de estring, 0 significa es falso que no coinciden
    //es verdadero que si coinciden. (hace bolas xd)

    $varibale1 = "CASA";
    $varibale2 = "casa";

    $resultado = strcmp($varibale1,$varibale2); //devuelve 1 si es false y 0 si es true;

    echo "El resultado es " . $resultado . "<br>";

    if($resultado){
        echo "no coinciden <br>";
    }else{
        echo "coinciden <br>";
    }

    $resultado2 = strcasecmp($varibale1,$varibale2); //devuelve 1 si es false y 0 si es true;
    echo "El resultado es " . $resultado2 . "<br>";

    if(!$resultado2){ //con el valor exclamacion se cambia el resultado
        echo "coinciden <br>";
    }else{
        echo "no coinciden <br>";
    }
?>
