<?php
//1. Incluimos la conexión
include('conexion.php');

//2. Colocamos verficamos los campos
if(!isset($_POST['user'])|| !isset($_POST['password'])){
    exit();
}
//2.1. Lo traemos en variables
$user = $_POST['user'];
$password = $_POST['password'];

//3. Realizamos la sentencia
$sentencia = $conexion->prepare("SELECT * FROM usuario WHERE username=? AND clave=?");
$sentencia->execute([$user, $password]);

//4. Creamos el arreglo y lo que nos permitirá ingresar
$arr = array();
while($resultado = $sentencia->fetch(PDO::FETCH_ASSOC)){
    $arr[] = $resultado;
}

//imprimos
print_r(json_encode($arr));

?>