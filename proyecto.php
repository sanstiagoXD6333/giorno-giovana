 <?php
$_SERVER = "Localhost";
$user = "root";
$pass = "";
$db = "contacto";

$conexion = new mysqli($_SERVER, $user, $pass, $db);

if($conexion->connect_error ){
 die("conexion fallida" . $conexion->connect_error);

}else{
    echo"conectado";
}

?>