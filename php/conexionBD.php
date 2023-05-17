<?php
// ----------------------------------------------------------------
$user="root";
$pass="";
$server="localhost";
$bd="trabajofacil";
$conexion = new mysqli($server, $user, $pass, $bd);
if ($conexion->connect_errno) {
    die("Connection failed: ");
}
$conexion->set_charset("utf8");
// ----------------------------------------------------------------
?>