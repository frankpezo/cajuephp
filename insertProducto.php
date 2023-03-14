<?php
//1. Hacemos la conexión
include('conexion.php');
//1.1. Comprobamos que los campos no estén vacíos
if(!isset($_POST['idCat']) || !isset($_POST['name']) || !isset($_POST['price']) || !isset($_POST['description']) ){
    exit();
}

//2. Traemos en varibles
$idCat = $_POST['idCat'];
$name = $_POST['name'];
$price = $_POST['price'];
$description=$_POST['description'];

//3. Realizamos la consulta
$sentencia = $conexion->prepare("INSERT INTO producto(id_categoria, nombre, precio_venta, descripcion) VALUES(?,?,?,?)");
$resultado = $sentencia->execute([$idCat, $name, $price, $description]);

//3.1. Creamos arreglo para comprobar que todo va bien
$arr = array();
if($resultado === true){
    $arr['success'] = "true";
}

print(json_encode($arr));

?>