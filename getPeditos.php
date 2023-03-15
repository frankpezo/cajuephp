<?php
//1. Incluimos la base de datos
include('conexion.php');
//2. Realizamos la consulta
$sentencia = $conexion->prepare("SELECT * FROM pedido");
$sentencia->execute();
$resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);
//IMPRIMIMOS
print_r(json_encode($resultado));

?>