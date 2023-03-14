<?php

//1. Incluimos la conexión
include('conexion.php');

//3. Realizamos la consulta
$sentencia = $conexion->prepare('SELECT id_rol, nombre FROM rol ');
$sentencia->execute();
$resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);
//3.1. Imprimimos
print_r(json_encode($resultado));

?>