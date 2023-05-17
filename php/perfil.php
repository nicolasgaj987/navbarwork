<?php
session_start();
$arrayUsuario = array();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <title>Inicio</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-center">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="navbarColor02">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php">Inicio
                            <span class="visually-hidden">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Perfil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./sobre_nosotros.php">Contactos</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-sm-2" type="search" placeholder="Search">
                    <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <br>
    <div class="navbar navbar-expand-lg navbar-dark bg-dark text-center">
        <div class="container">
            <div class="row bf-info justify-content-center align-items-center my-5 bg-dark p-4 rounded-5 ">
                <div class="nav col-sm-6">
                        <div class="p-1 bg-black">
                            <img src="../img/OIP.jpg" alt=""></img>
                        </div>
                </div>
                <div class="col-sm-6">
                <?php
                $user=$_SESSION['nombreUsuario'];
                echo"<h1>hola usuario ".$user."</h1>";
                ?>
                </div>
                <?php
                //if($_SESSION[adminON] == 1){
                ?>
                <form action="./modificarPerfil.php" method="post">
                    <input type="submit" value="Modificar Perfil">
                </form>
                <form action="./eliminarPerfil.php" method="post">
                    <input type="submit" value="Eliminar Perfil">
                </form>
                <?php
                //}
                ?>
                <form action="./cerrar_session.php" method="post">
                    <input type="submit" value="Cerrar sesión">
                </form>
            </div>
        </div>
    </div>

</body>

<footer>
    <?php
    include ("../html/footer.html");
    ?>
</footer>
</html>