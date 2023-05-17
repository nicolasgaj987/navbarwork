<?php
include('erroresComunes.php');
include('conexionBD.php');
//Variables
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$apellido2 = $_POST['apellido2'];
$correo = $_POST['correo'];
$region = $_POST['region'];
$genero = $_POST['genero'];
$rut = $_POST['rut'];
$password = $_POST['password'];
$fecha = $_POST['fecha'];
$telefono = $_POST['telefono'];
$tipoUsuario = $_POST['tipoUsuario'];

//Consular tipo de Usuario
if ($tipoUsuario == 0){
    //ConsultasSQL
    $sql = "INSERT INTO usuariosT VALUES (NULL,'$nombre','$apellido','$apellido2','$correo','$region','$genero','$Rut','$password','$fecha')";
}else{
    $sql = "INSERT INTO usuariosC VALUES (NULL,'$nombre','$apellido','$apellido2','$correo','$region','$genero','$Rut','$password','$fecha',NULL)";
}
//Aplica Datos
if($conexion->query($sql)){
    header("Location:login.php?=Hecho");
}
?>