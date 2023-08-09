<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>

<?php

	include("Concesionario.php");
	
	//El campo static no es privado, en pocas palabras se puede
	//modificar y se realiza de esta manera:
	//Se coloca con Compra_vehiculo:: porque pertenece a esa clase
	//como no es privado, se manipula el campo
	//Compra_vehiculo::$ayuda=10000;
	
	//aca llamamos si es epoca de ayuda o no
	//Compra_vehiculo::$ayuda=10000; esto da error
	Compra_vehiculo::descuento_gobierno();
	
	$compra_Antonio=new Compra_vehiculo("compacto");
	
	$compra_Antonio->climatizador();
	
	$compra_Antonio->tapiceria_cuero("blanco");
	
	echo $compra_Antonio->precio_final() . "<br>";
	
	$compra_Ana=new Compra_vehiculo("compacto");
	
	$compra_Ana->climatizador();
	
	$compra_Ana->tapiceria_cuero("rojo");
	
	echo $compra_Ana->precio_final();
	
	
	
	


?>
</body>
</html>