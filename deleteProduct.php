<?php
//1. Incluimos la bd
include('conexion.php');
//2. Comprobamos que el campo no esté vacío
if(!isset($_POST['id'])){
    exit();
}

//2. Guardo en un variable
$id = $_POST['id'];
//3. Preparo la consulta
$sentencia = $conexion->prepare("DELETE FROM producto WHERE id_producto = ?");
$resultado = $sentencia->execute([$id]);
//4.Creamos un arreglo
$arr = array();
if($resultado === true){
    $arr['success'] = "true";
}else{
    $arr['success'] = "false";
}
//4.1. Imprimimos
print(json_encode($arr));











?>