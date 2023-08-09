<?php

    //variables staticas:

    function incrementaVar(){
        static $contador = 0; //con static conseguimos que su valor no se destruya, en lugar de declararla como global.
        $contador++;

        echo $contador , "<br>";

        /*cuando una funcion termina, el valor
        d su variable se destruye*/
    }
    incrementaVar();
    incrementaVar();
    incrementaVar();
    incrementaVar();

    //para hacer que se conserve podemos hacer esto:
    // static $contador = 0;

?>