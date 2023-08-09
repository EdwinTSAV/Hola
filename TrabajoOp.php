<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
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
</head>

<body>
<h1>USANDO OPERADORES COMPARACIÓN</h1>

<?php /* action funciona igual que siempre, 
se coloca la pg a la que se manda los datos del form*/
//?>
<form action="Validacion.php" method="post" name="datos_usuario" id="datos_usuario">
  <table width="15%" align="center">
    <tr>
      <td>Nombre:</td>
      <td><label for="nombre_usuario"></label>
      <input type="text" name="nombre_usuario" id="nombre_usuario"></td>
    </tr>
    <tr>
      <td>Edad:</td>
      <td><label for="edad_usuario"></label>
      <input type="text" name="edad_usuario" id="edad_usuario"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="enviando" id="enviando" value="Enviar"></td>
    </tr>
  </table>
</form>



<?php
/*//introducir nombre, edad y pulsar en el boton enviar

    /*isset funcion predefinida de PHP (boton enviar)
    comprueba si se pulso el boton enviar (nombre de id)
    debe colocarse el nombre id del boton que tiene/
    if(isset($_POST["enviando"])){
        /*$_POST tiene ambito superglobal de PHP
        coge un array y la almacena, necesita id de cuadro
        usa el nombre del cuadro que se introduce el dato/
        $usuario = $_POST["nombre_usuario"];
        $edad = $_POST["edad_usuario"];

        //en pocas palabras coge el contenido del formulario XD

        if($usuario == "Edwin" && $edad >= 18){
            echo ("<p class='validado'>Bienvenido, puedes entrar</p>");
        }else{
            echo "<p class='no_validado'>Alerta, no puedes entrar</p>";
        }
    }
*/
?>

</body>
</html>