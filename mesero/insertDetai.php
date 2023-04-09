<?php
//1. Traemos la conexión de la base de datos
include('../conexion.php');

//2. Verificamos que los campos no estén vacíos
if(  !isset($_POST['cantidad']) || !isset($_POST['monto'])){
    exit();
    
}
//2.1. Traemos los campos
//$idP= $_POST['idP'];
$cantidad = $_POST['cantidad'];
$monto= $_POST['monto'];

//3. Realizamos la consulta
$sentencia = $conexion->prepare("INSERT INTO detalle_pedido(cantidad, monto) VALUES (?, ?)" );
$resultado = $sentencia->execute([$cantidad, $monto]);

//4. Creamos el array 
$arr = array();
if($resultado === true){
    $arr['success']= "true";
}
//4.1. Imprimimos
print(json_encode($arr));




?>