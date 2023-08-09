<?php
    //ambito de variables
    //Variable Local
    
    $nombre = "Juan";

    /*    
    function dameNombre(){
        $nombre = "Maria";
    }
    */

    //include("datosOtros.php");
    //dameNombre();

    echo $nombre;

    /*Imprime a Juan, porque "Maria"
    solo existe dentro de la funcion
    esto, ayuda para que nosotros no 
    combinemos nuestras variables en
    este documento con otro*/


    //variable global:  
  
    function dameNombre(){
        /* me refiero a la variable que esta fuera de la funcion
        para sobreescribirla y modificar sus datps
        (no funciona si se coloca fuera) de la funcion, porque no sobreescribiria nada
        En resumen el parametro o funcion global debe estar dentro de la funicon para 
        hacer global la variable que se encuentra fuera
        */
        global $nombre;
        $nombre = "<br>El nombre es $nombre";
    }

    dameNombre();
    echo $nombre;

?>