<?php
//1. Incluimos la base de datos
include('conexion.php');

//2. Realizamos la sentencia
$sentencia = $conexion->prepare('SELECT id_categoria, nombre FROM categoria ');
$sentencia->execute();
$resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);
//3. Imprimimos
print_r(json_encode($resultado));


?>