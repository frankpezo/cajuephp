<?php
//1. Incluimos la bd
include('conexion.php');
//2. Verificamos los campos
if(!isset($_POST['id']) || !isset($_POST['name']) || !isset($_POST['price']) || !isset($_POST['description'])){
    exit();
}
//2.1. Traemos los campos
$id = $_POST['id'];
$name = $_POST['name'];
$price = $_POST['price'];
$description = $_POST['description'];
//3. Realizamos la consulta
$sentencia = $conexion->prepare("UPDATE producto SET nombre = ?, precio_venta = ?, descripcion = ? WHERE id_producto = ?" );
$resultado = $sentencia->execute([$name, $price, $description, $id] );
//4. Creamos un arreglo
$arr = array();
if($resultado === true){
    $arr['success']="true";
}else{
    $arr['success'] = "false";
}
//4.1.
print(json_encode($arr));



?>