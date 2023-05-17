<?php
include ('conexionBD.php');
session_start();
if(!empty($_POST['nombreUsuario']) && !empty($_POST['passwordUsuario'])){
    //Variables
    $correo = $_POST['nombreUsuario'];
    $contraseña = $_POST['passwordUsuario'];
    //Consultas de la base de datos
    $sql = "SELECT idUsuario FROM usuariost  WHERE Correo = '$correo' AND Passwords = '$contraseña'";
    $sql2 = "SELECT idUsuario FROM usuariosc  WHERE Correo = '$correo' AND Passwords = '$contraseña'";
    $sql3 = "SELECT Correo, Passwords FROM admins WHERE Correo = '$correo' AND Passwords = '$contraseña'";
    $result = $conexion->query($sql);
    $result2 = $conexion->query($sql2);
    $resultAdmin = $conexion->query($sql3);

    //Usuario es administrador
    if ($resultAdmin == false) {
        $arrayUsuario = array();
        $_SESSION['nombreUsuario'] = $_POST["nombreUsuario"];
        $_SESSION['passwordUsuario'] = $_POST['passwordUsuario'];
        $_SESSION['adminON'] = "1";
        header('location: ./perfil.php');
        exit();
    }
    //Usuario es Trabajador
    if($result1 !== false) {
        $comando = mysqli_query($conexion, $sql);
        $arrayUsuario = array();
        while($row = mysqli_fetch_array($comando)) {
            $id = $row['idUsuario'];
            $nombre = $row['Nombre'];
            $apellido = $row['Apellido'];
            $apellido2 = $row['Apellido2'];
            $correo = $row['Correo'];
            $region = $row['Region'];
            $genero = $row['Genero'];
            $rut = $row['Rut'];
            $contra = $row['Passwords'];
            $fecha = $row['Fecha'];

            $arrayUsuario[] = array(
                'id'=> $id,
                'nombre'=>$nombre,
                'apellido'=>$apellido,
                'apellido2'=>$apellido2,
                'correo'=>$correo,
                'region'=>$region,
                'genero'=>$genero,
                'rut'=>$rut,
                'contra'=>$contra,
                'fecha'=>$fecha
            );
        }
        echo $nombre;
        $_SESSION['arrayUsuario'] = $arrayUsuario;
        header('location: ./perfil.php');
        exit();

    }
    //Usuario es Empresa
    if ($result2 == false) {
        $comando = mysqli_query($conexion, $sql2);
        $arrayUsuario = array();
        while($row = mysqli_fetch_array($comando)) {
            $id = $row['idUsuario'];
            $nombre = $row['Nombre'];
            $apellido = $row['Apellido'];
            $apellido2 = $row['Apellido2'];
            $correo = $row['Correo'];
            $region = $row['Region'];
            $genero = $row['Genero'];
            $rut = $row['Rut'];
            $contra = $row['Passwords'];
            $fecha = $row['Fecha'];
            $company = $row['Company'];

            $arrayUsuario[] = array(
                'id'=> $id,
                'nombre'=>$nombre,
                'apellido'=>$apellido,
                'apellido2'=>$apellido2,
                'correo'=>$correo,
                'region'=>$region,
                'genero'=>$genero,
                'rut'=>$rut,
                'contra'=>$contra,
                'fecha'=>$fecha,
                'company'=>$company
            );
        }
            $_SESSION['arrayUsuario'] = $arrayUsuario;
            header('location: ./perfil.php');
    }
    else{
        header("Location:login.php?e=1");
    }
}
?>