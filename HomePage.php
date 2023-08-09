<h1>Hola Mundo
</h1>
<p>Use this page to detail your site's privacy policy.</p>
<br />
<?php
    print "Bienvenidos al curso de PHP <br>";
    print "Hola alumnos <br>";
    print "Hasta el proximo video <br>";

    // las variables siempre se configuran con $ al inicio del nombre de variable ejmp:
    $nombre_a = "edwin";
    $edad = 22;

    echo "El nombre de esta persona es: " . $nombre_a ;
    /* echo y print imprimen en pantalla,
    echo consume menos recursos, tambien imprime (expresion)
    print consume mas recursos (funcion)
    se utiliza . para concatenar o tampoco no. Ejm:*/
    echo "<br>El nombre de esta persona es: $nombre_a y su edad es " . $edad . "<br>";

    //echo tambien puede imprimir asi (print no lo admite):
    echo $nombre_a, $edad;

    //funcion, se debe colocar antes de ser llamada:
    function dameDatos(){
        echo "<br> mensaje de funcion <br>";
    }
    
    dameDatos();

    /*Si necesitamos a la funcion porque es repetitiva:
    podemos guardarlo en un archivo aparte y llamarlo cuando
    consideramos necesario.*/

    /*debemos llamar a nuestro archivo donde esta la
    funcion utilizando la siguiente linea
    y siempre colocandola antes de invocar a la funcion
    o lo que haya dentro del archivo externo
    (se puede usar archivos online y de otras carpetas, o eso creo XD):*/

    include("Funcion.php");
    
    //llamamos a la funcion como si estuviera en este doc
    dameDatosAparte();

    /*require vs include
    include: si escribes mal el archivo y no lo encuentra, trazara
    error es esa linea de codigo y lo demas seguira funcionando correctamente.
    require: no ejecuta nada de lo que haya a a partir de la linea de error
    con required se esta diciendo que ese archivo es escencial para el
    funcionamiento del programa, y si no esta o no se encuentra no debe
    funcionar
    include es mas flexible.*/

    require("Funcion.php");
    
    //llamamos a la funcion como si estuviera en este doc
    dameDatosAparte();
?>