<?php
//1. Hacemos la conexión
include('conexion.php');
//1.1. Comprobamos que los campos no estén vacíos
if(!isset($_POST['idRol']) ||!isset($_POST['name'])|| !isset($_POST['dniU'])  || !isset($_POST['address']) || !isset($_POST['phone']) || !isset($_POST['user']) || !isset($_POST['password']) ){
    exit();
}
//2. Guardamos los datos en las variables
$idRol = $_POST['idRol'];
$name = $_POST['name'];
$dni = $_POST['dniU'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$user = $_POST['user'];
$password = $_POST['password'];

//3. Realizamos la sentencia
$sentencia = $conexion->prepare("INSERT INTO usuario(id_rol, nombre, dni, direccion, telefono, username, clave) VALUES(?,?,?,?,?,?,?)");
$resultado = $sentencia->execute([$idRol,$name, $dni , $address, $phone, $user, $password]);

//3.1. Creamos arreglo para comprobar que todo va bien
$arr = array();
if($resultado === true){
    $arr['success'] = "true";
}

print(json_encode($arr));


?>