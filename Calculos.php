

<?php
    if(isset($_POST["button"])){
        $numero1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operacion = $_POST["operacion"];
        
        //Parametros asi
        calcular($numero1,$operacion);
    }

    function calcular($num1,$oper){
        global $num2;
//Reemplazar if por case; se usa con Switch (condicion){}
//o tambien se usa con Switch (condicion):
        switch($oper){
            case "Suma" /* Tambien se pueden usar condicionales && $num1 >2 */&& $num1 >2:
                echo ("El resultado es: " . ($num1 + $num2));
                break; //break tambien se usa para interrumpir el flujo de la condicion y salir
            case "Resta":
                echo ("El resultado es: " . ($num1 - $num2));
                break;
            case "Multiplicación":
                echo ("El resultado es: " . ($num1 * $num2));
                break;
            case "División":
                echo ("El resultado es: " . ($num1 / $num2));
                break;
            case "Módulo":
                echo ("El resultado es: " . ($num1 % $num2));
                break;
            case "Incremento":
                $num1++;
                $resultado=$num1;
                echo ("El resultado es: " . ($resultado));
                break;
            case "Decremento":
                $num1--;
                $resultado=$num1;
                echo ("El resultado es: " . ($resultado--));
            default:
                echo "Estas mal mijo";
        }


/*
        if(!strcmp("Suma",$oper)){
            //o hacer global las variables asi:
            global $num2;
            //se debe de colocar entre parentesis para que no concatene mal
            echo ("El resultado es: " . ($num1 + $num2));
        }
        if(!strcmp("Resta",$oper)){
            //o hacer global las variables asi:
            global $num2;
            echo ("El resultado es: " . ($num1 - $num2));
        }
        if(!strcmp("Multiplicación",$oper)){
            //o hacer global las variables asi:
            global $num2;
            echo ("El resultado es: " . ($num1 * $num2));
        }
        if(!strcmp("División",$oper)){
            //o hacer global las variables asi:
            global $num2;
            echo ("El resultado es: " . ($num1 / $num2));
        }
        if(!strcmp("Módulo",$oper)){
            //o hacer global las variables asi:
            global $num2;
            echo ("El resultado es: " . ($num1 % $num2));
        }

        if(!strcmp("Incremento",$oper)){
            $num1++;
            $resultado=$num1;
            echo ("El resultado es: " . ($resultado));
        }

        if(!strcmp("Decremento",$oper)){
            $num1--;
            $resultado=$num1;
            echo ("El resultado es: " . ($resultado--));
        }*/

    }
?>