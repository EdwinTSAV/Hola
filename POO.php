<?php
//clases, la primera letra en mayuscula
include("Vehiculos.php");
$ford = new Coche();
$volvo = new Camion();

//como esta en public todos pueden modificar esta propiedad, debe encapsularse
//se debe colocar como private
//$ford->ruedas=7;
//despues de esto, se oculta el de ruedas

//Entonces no puede acceder a la variable encapsulada:
//si quiero ver cuantas ruedas tiene debo de: get y set
//echo "El Volvo tiene " . $volvo->ruedas . " ruedas <br>" ;
//Ahora se puede llamar para ver las ruedas
echo "El Fors tiene " . $ford->get_ruedas() . " ruedas <br>" ;

//Ahora hay un problema en el camion
echo "El Volvo tiene " . $volvo->get_ruedas() . " ruedas<br>";

echo "El Ford tiene un motor de " . $ford->get_motor() . "cc <br>";
?>