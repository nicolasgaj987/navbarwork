<?php
include ('conexionBD.php');
session_start();
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
                        <a class="nav-link" href="../index.php">Inicio
                            <span class="visually-hidden">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="./perfil.php">Perfil</a>
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
    <br/>
    <div class="container p-3">
    <main class="bg-dark p-5 rounded-5">
      <form method="post" action="../php/crearUsuario.php"class="row g-3 needs-validation" novalidate>
        <div class="col-md-4">
          <label for="nombre" class="form-label">Nombre</label>
          <input type="text" class="form-control" id="nombre" name="nombre" value = "<?php $nombre = $ArrayUsuario['nombre'];echo $nombre; ?>" required>
          <div class="invalid-feedback">
            Introduzca su nombre.
          </div>
        </div>
        <div class="col-md-4">
          <label for="apellido" class="form-label">Apellido</label>
          <input type="text" class="form-control" id="apellido" name="apellido" required>
          <div class="invalid-feedback">
            Introduzca sus apellido.
          </div>
        </div>
        <div class="col-md-4">
          <label for="apellido2" class="form-label">Segundo Apellido</label>
          <input type="text" class="form-control" id="apellido2" name="apellido2" required>
          <div class="invalid-feedback">
            Introduzca sus apellido.
          </div>
        </div>
        <div class="col-md-4">
          <label for="correo" class="form-label">Correo</label>
          <div class="input-group has-validation">
            <span class="input-group-text" id="inputGroupPrepend">@</span>
            <input type="text" class="form-control" id="correo" aria-describedby="inputGroupPrepend" placeholder="ejemplo@correo.com" name="correo" required>
            <div class="invalid-feedback">
              Introduzca su Correo.
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <label for="region" class="form-label">Region</label>
          <select class="form-select" id="region" name="region" required>
          <option selected disabled value="">Seleccione...</option>
          <option value="15">Arica y Parinacota</option>
          <option value="1">Tarapacá</option>
          <option value="2">Antofagasta</option>
          <option value="3">Atacama</option>
          <option value="4">Coquimbo</option>
          <option value="5">Valparaíso</option>
          <option value="13">Metropolitana de Santiago</option>
          <option value="6">O'Higgins</option>
          <option value="7">Maule</option>
          <option value="16">Ñuble</option>
          <option value="8">Biobío</option>
          <option value="9">Araucanía</option>
          <option value="14">Los Ríos</option>
          <option value="10">Los Lagos</option>
          <option value="11">Aysén</option>
          <option value="12">Magallanes y Antártica Chilena</option>
          </select>
          <div class="invalid-feedback">
            Ingrese su Region.
          </div>
        </div>
        <div class="col-md-3">
          <label for="genero" class="form-label">Genero</label>
          <select class="form-select" id="genero" name="genero" required>
            <option selected disabled value="">Seleccione...</option>
            <option value="m">Masculino</option>
            <option value="f">Femenino</option>
            <option value="o">Prefiere no decir</option>
          </select>
          <div class="invalid-feedback">
            Porfavor seleccione un genero.
          </div>
        </div>
        <div class="col-md-3">
          <label for="rut" class="form-label">Rut</label>
          <input type="text" class="form-control" id="rut" placeholder="12.345.678-9" name="rut" required>
          <div class="invalid-feedback">
            Introduzca un numero valido.
          </div>
        </div>
        <div class="col-md-3">
          <label for="passwords" class="form-label">contraseña</label>
          <input type="passwords" class="form-control" id="passwords" name="passwords" required>
          <div class="invalid-feedback">
            Introduzca una contraseña valida.
          </div>
        </div>
        <div class="col-md-3">
          <label for="rPassword" class="form-label">repita su contraseña</label>
          <input type="password" class="form-control" id="rPassword" name="rPassword" required>
          <div class="invalid-feedback">
            La contraseñas no son iguales.
          </div>
        </div>
        <div class="col-md-3">
          <label for="fecha" class="form-label">fecha de nacimiento</label>
          <input type="date" class="form-control" id="fecha" name="fecha" required>
          <div class="invalid-feedback">
            Introduzca una fecha.
          </div>
        </div>
        <div class="col-md-3">
          <label for="telefono" class="form-label">telefono</label>
          <input type="text" class="form-control" id="telefono" placeholder="+12345678901" name="telefono" required>
          <div class="invalid-feedback">
            Introduzca un numero valido.
          </div>
        </div>
        <div class="col-md-3">
          <label for="tipoUsuario" class="form-label">tipo de usuario</label>
          <select class="form-select" id="tipoUsuario" name="tipoUsuario" required>
            <option selected disabled value="">Seleccione...</option>
            <option value="0">Persona</option>
            <option value="1">Empresa</option>
          </select>
          <div class="invalid-feedback">
            Porfavor seleccione un genero.
          </div>
        </div>
        <div class="col-md-3">
          <label for="companyName" class="form-label">Nombre de Compañia</label>
          <input type="text" class="form-control" id="companyName" placeholder="+12345678901" name="companyName" required>
          <div class="invalid-feedback">
            Introduzca un numero valido.
          </div>
        </div>
        <div class="col-12">
        </div>
        <div class="col-12">
          <button class="btn btn-primary" type="submit" name="btnIngresar">Actualizar datos</button>
        </div>
      </form>
    </main>
    </div>
</body>

<footer>
    <?php
    include ("../html/footer.html");
    ?>
</footer>
</html>