<?php
//Incluimos la bd 
include('conexion.php');
//2. Verificamos que los campos no estén vacíos
if(!isset($_POST['username'])){
    exit();
}
//2.1. Lo traemos en una variable
$user = $_POST['username'];
//3. Realizamos la sentencia
$sentencia = $conexion->prepare("SELECT nombre, username FROM usuario WHERE username=?");
$sentencia -> execute([$user]);

//4. 
$arr = array();
while($resultado = $sentencia -> fetch(PDO::FETCH_ASSOC)){
    $arr[] = $resultado;
}

print_r(json_encode($arr));





?>