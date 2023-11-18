<?php

define('METHOD','AES-256-CBC');
define('SECRET_KEY','$T@ll37@2024');
define('SECRET_IV','051120');
class SED {
    public static function encryption($string){
        $output=FALSE;
        $key=hash('sha256', SECRET_KEY);
        $iv=substr(hash('sha256', SECRET_IV), 0, 16);
        $output=openssl_encrypt($string, METHOD, $key, 0, $iv);
        $output=base64_encode($output);
        return $output;
    }
    public static function decryption($string){
        $key=hash('sha256', SECRET_KEY);
        $iv=substr(hash('sha256', SECRET_IV), 0, 16);
        $output=openssl_decrypt(base64_decode($string), METHOD, $key, 0, $iv);
        return $output;
    }
}

$psw = '123456';
echo md5($psw).'<br>';
echo sha1($psw).'<br>';
echo '<br>';
$encripty = SED::encryption($psw);
echo "Encriptado: ".$encripty.'<br>';
echo "Desencriptado: ".SED::decryption($encripty).'<br>';
echo '<br>';

//hash (alg, string) todos los algoritmos de hash y la encriptacion de $psw
foreach(hash_algos() as $algo){
    echo $algo . ": ". hash($algo, $psw).'<br>';
}
echo '<br>';
//password_hash

$hash = password_hash($psw,PASSWORD_DEFAULT,['cost' => 10]);
//si se aumenta el costo, dmeora mas en cargar la pagina
echo $hash.'<br>';
if(password_verify($psw, $hash)){
    echo "Contraseña correcta";
}else{
    echo "Contraseña incorrecta";
}

?>