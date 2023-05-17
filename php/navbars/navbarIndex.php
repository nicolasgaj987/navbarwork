<!--La NavBar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark text-center">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button
            class="navbar-toggler collapsed"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarColor02"
            aria-controls="navbarColor02"
            aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbarColor02">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Inicio
                        <span class="visually-hidden">(current)</span>
                    </a>
                </li>
                <!--Opcion si el usuario inicio sesion-->
                <!---------------------------------------------------------------->
                <?php if(isset($_SESSION['nombreUsuario'])) { ?>
                <!-- Si se ha iniciado sesión -->
                <li class="nav-item">
                     <a class="nav-link" href="./php/perfil.php">Perfil</a>
                 </li>
                <?php } else { ?>
                 <!-- Si no se ha iniciado sesión -->
                <li class="nav-item">
                    <a class="nav-link" href="./php/login.php">Login</a>
                </li>
                <?php } ?>
                <li class="nav-item">
                    <a class="nav-link" href="./php/sobre_nosotros.php">Contactos</a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-sm-2" type="search" placeholder="Search">
                    <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </div>
<!--Diseño barra-->
</nav>