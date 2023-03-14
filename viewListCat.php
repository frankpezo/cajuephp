<?php
//1. Incluimos la base de datos
include('conexion.php');
//3. Realizamos la consulta
$sentencia = $conexion->prepare("SELECT * FROM categoria");
$sentencia->execute();
$resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);
//3.1. Imprimimos el resultado
print_r(json_encode($resultado));
?>