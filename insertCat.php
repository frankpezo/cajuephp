<?php
//1. Incluimos la bd
include('conexion.php');
//2. Verificamos campos
if(!isset($_POST['name']) || !isset($_POST['description'])){
    exit();
    
}
//2.1. Traemos los campos
$nombre = $_POST['name'];
$descripcion= $_POST['description'];

//3. Realizmos la consulta
$sentencia = $conexion->prepare("INSERT INTO categoria(nombre, descripcion) VALUES (?,?)" );
$resultado =  $sentencia->execute([$nombre, $descripcion]);

//4. Creamos Arrays
$arr = array();
if($resultado === true){
    $arr['success']= "true";
}

print(json_encode($arr));



?>