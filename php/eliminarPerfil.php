<?php
include ('./conexionBD.php');
session_start();
$correo = $_SESSION['nombreUsuario'];
$contra = $_SESSION['passwordUsuario'];

$sql = "DELETE FROM usuariosT  where Correo = '$correo' AND Passwords = '$contra'";
$sql2 = "DELETE from usuariosC  where Correo = '$correo' AND Passwords = '$contra'";
if(($conexion->query($sql))and($conexion->query($sql2))){
    header("location:login.php");
}
?>