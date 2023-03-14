<?php

//1. Incluimos la bd
include('conexion.php');
//2. Verificamos el campos
if(!isset($_POST['id'])){
    exit();
}



//2.1. Traemos los campos
$id = $_POST['id'];
//3.  Consulta
$sentencia = $conexion->prepare("SELECT  nombre, precio_venta, descripcion FROM producto WHERE id_categoria = ?;");
$sentencia->execute([$id]);
//4.  Traemos los datos
$arr = array();
while($fila = $sentencia->fetch(PDO::FETCH_ASSOC)){
    $arr[] = $fila;
}

print_r(json_encode($arr));




?>