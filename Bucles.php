<?php
    //Bucles
    //Indeterminados: no se sabe cuantas veces se repiten
    //Bucles while
    //while(condicion){hacer mientras la condicion es true}

    $var1 = 1; //si se coloca 7 se hace falso
    while($var1 < 5){
        echo "Se ejecuta el codigo: $var1 vez(es) <br>";
        $var1++; //si no se coloca esto, siempre hara esto, igual que otros lenguajes
    }
    echo "Se acabo el bucle While XD <br>";

    //Bucles do while:

    $var1 = 7; //si se coloca 7 se hace falso
    do{
        echo "Se ejecuta el codigo<br>";
        $var1++; //si no se coloca esto, siempre hara esto, igual que otros lenguajes
    }while($var1 < 6);
    echo "Se acabo el bucle DO WHILE XD <br>";

    //do{hacer hasta que la condicion sea false}while(condicion)
    //Determinados: se sabe cuantas veces se repite el codigo de su interior
    //for
    echo "<br>";
    for($i=0;$i<=10;$i++){ //igual que en otros lenguajes
        echo "9 X $i = " . (9 * $i). "<br>";
    }
    echo "<br>";
    for($i=10;$i>=0;$i--){ //igual que en otros lenguajes se puede interrumpir tambien
        echo "Se entro al for: $i vez(es) decremento<br>";
        if($i > 6){
            echo "Bucle interrumpido";
            break;
        }
    }
    echo "<br>";
    for($i=10;$i>=-10;$i--){
        //Cuando divida 9*0 sale error
        //entonces queremos decirle que esa linea no la lea, se usa continue, para que
        //obie esa vuelta de bucle y continue;
        if($i==0){
            echo "La division por 0 no se realiza<br>";
            continue;
        }

        echo "9 / $i = " . (9 / $i). "<br>";
    }
    //break, interrumpe algo
    //continue, evita que una vuelta del bucle no se ejecute y despues deja que se ejecute;
?>