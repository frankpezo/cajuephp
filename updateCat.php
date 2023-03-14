<?php
//1. Incluimos la bd
include('conexion.php');
//2. Verificamos los campos
if( !isset($_POST['id'])   ||!isset($_POST['name']) || !isset($_POST['description'])){
    exit();
    
}
//2.1. Traemos los campos
$idcat = $_POST['id'];
$nombre = $_POST['name'];
$descripcion= $_POST['description'];
//3. Realizamos la consulta
$sentencia = $conexion->prepare("UPDATE categoria SET nombre = ?, descripcion = ? WHERE id_categoria = ?" );
$resultado = $sentencia->execute([$nombre, $descripcion, $idcat] );
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