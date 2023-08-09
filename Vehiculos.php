<?php
//clases, la primera letra en mayuscula
class Coche{
    //private solo da acceso desde la propia clase
    //protected, es accesible para las clases que herdan la clase
    //ahora si es accesible para la clase camion
    protected $ruedas;
    var $color;
    protected $motor;

    //Constructor: estado inicial de la clase
    //se debe usar __construct
    function  __construct(){
        //$this, se refiere a la clase coche
        //->se refiere a las propiedades o caracteristicas
        $this->ruedas = 4;
        $this->color = "";
        $this->motor=1600;
    }

    function get_ruedas(){
        return $this->ruedas;
    }

    function get_motor(){
        return $this->motor;
    }

    //que puede hacer el Objeto
    function arrancar(){
        echo "Estoy arrancando<br>";
        //instruccion parent, llama al metodo de la clase padre
    }
    function girar(){
        echo "Estoy girando<br>";
    }
    function frenar(){
        echo "Estoy frenando<br>";
    }

    //Get and set?
    function set_color($color_coche, $nombre_coche){
        $this->color = $color_coche;
        echo "El color de " . $nombre_coche . " es: " . $this->color . "<br>";
    }
}

$yaris = new Coche();
$toyota = new Coche();
$izuzu = new Coche();

/*$yaris->girar();
echo $yaris->ruedas . "<br>";

$toyota->set_color("Rojo", "TOYOTA");
$izuzu->set_color("Azul","IZUZU");
*/
//-----------------------------------------------------------
/*class Camion{
    var $ruedas;
    var $color;
    var $motor;

    function  __construct(){
        $this->ruedas = 8;
        $this->color = "gris";
        $this->motor=2600;
    }

    //que puede hacer el Objeto
    function arrancar(){
        echo "Estoy arrancando<br>";
    }
    function girar(){
        echo "Estoy girando<br>";
    }
    function frenar(){
        echo "Estoy frenando<br>";
    }
}*/

//Hacer que camion herede de coche:
class Camion extends Coche{

    function  __construct(){
        $this->ruedas = 8;
        $this->color = "gris";
        $this->motor=2600;
    }

    function establece_color($color_camion, $nombre_camion){
        $this->color = $color_camion;
        echo "El color de " . $nombre_camion . " es: " . $this->color . "<br>";
    }
    function arrancar(){
        //Se le dice que primero ejecute el metodo de la clase padre (coche)
        parent::arrancar();
        echo "Camion arrancado";
        //luego se le agrega lo que se desea!
    }
}
?>