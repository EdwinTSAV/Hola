<?php
//introducir nombre, edad y pulsar en el boton enviar

    /*isset funcion predefinida de PHP (boton enviar)
    comprueba si se pulso el boton enviar (nombre de id)
    debe colocarse el nombre id del boton que tiene*/
    if(isset($_POST["enviando"])){
        /*$_POST tiene ambito superglobal de PHP
        coge un array y la almacena, necesita id de cuadro
        usa el nombre del cuadro que se introduce el dato*/
        $usuario = $_POST["nombre_usuario"];
        $edad = $_POST["edad_usuario"];

        //en pocas palabras coge el contenido del formulario XD

        if($usuario == "Edwin" && $edad >= 18){
            echo ("<p class='validado'>Bienvenido, puedes entrar</p>");
        }else{
            echo "<p class='no_validado'>Alerta, no puedes entrar</p>";
        }
		
		if($edad <=18){
			echo ("<p class='validado'>Eres menor de edad</p>");
		}elseif($edad<=40){
			echo ("<p class='validado'>Eres joven</p>");
		}elseif($edad<=65){
			echo ("<p class='validado'>Eres maduro</p>");
		}else{
			echo ("<p class='validado'>Cuidate</p>");
		}

		//operador ternario:
		//despues de tener almacenado lo que queremos:
		//Condicion a evaluar ? TRUE : FALSE
		echo $edad<18 ? "<p class='validado'>Eres menor de edad mano</p>" : "<p class='validado'>Ya eres viejo mano, entra</p>";
		echo $edad<18 && $usuario = "Edwin" ? "<p class='validado'>Edwin</p>" : "<p class='validado'>Quien eres?</p>";
    }
?>
<style>
	h1{
		text-align:center;
	}

	table{
		background-color:#FFC;
		padding:5px;
		border:#666 5px solid;
	}
	
	.no_validado{
		font-size:18px;
		color:#F00;
		font-weight:bold;
	}
	
	.validado{
		font-size:18px;
		color:#0C3;
		font-weight:bold;
	}


</style>