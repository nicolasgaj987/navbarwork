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
                    <a class="nav-link" href="../index.php">Inicio</a>
                </li>
                <?php if(isset($_SESSION['nombreUsuario'])) { ?>
                <li class="nav-item">
                    <a class="nav-link" href="./perfil.php">Perfil</a>
                </li>
            <?php } else { ?>
                <li class="nav-item">
                    <a class="nav-link" href="./login.php">Login</a>
                </li>
                <?php } ?>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Contactos
                        <span class="visually-hidden">(current)</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>