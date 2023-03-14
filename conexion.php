<?php
 
//1. Declaramos las variables
$user ='';
$pass = ''; 
$host ='LAPTOP-A7ED93UJ';
$bd = 'Cajuezino';
//2. Realizamos el try-catch
try{
    //3.Realizamos la conexión
    $conexion = new PDO("sqlsrv:server= $host; database = $bd", $user, $pass);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   // echo 'MADAFAKA';

}catch(PDOException $e){
    echo 'ERROR: '.$e->getMessage();
}


?>