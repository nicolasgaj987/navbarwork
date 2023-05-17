<!DOCTYPE html>
<html lang="es-cl">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign up</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-center">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02"
        aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse collapse" id="navbarColor02">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link" href="../index.html">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">Registro
              <span class="visually-hidden">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/html/sobre_nosotros.html">sobre nosotros</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-sm-2" type="search" placeholder="Search">
          <button class="btn btn-secondary my-2 my-sm-0" type="submit">buscar</button>
        </form>
      </div>
    </div>
  </nav>
  <div class="container">
    <main>
      <form class="row g-3 needs-validation" novalidate>
        <div class="col-md-4">
          <label for="Nombre" class="form-label">Nombre</label>
          <input type="text" class="form-control" id="Nombre" required>
          <div class="invalid-feedback">
            Introduzca su nombre.
          </div>
        </div>
        <div class="col-md-4">
          <label for="validationCustom02" class="form-label">Apellido</label>
          <input type="text" class="form-control" id="validationCustom02" required>
          <div class="invalid-feedback">
            Introduzca sus apellido.
          </div>
        </div>
        <div class="col-md-4">
          <label for="Correo" class="form-label">Correo</label>
          <div class="input-group has-validation">
            <span class="input-group-text" id="inputGroupPrepend">@</span>
            <input type="text" class="form-control" id="Correo" aria-describedby="inputGroupPrepend" required>
            <div class="invalid-feedback">
              Introduzca su Correo.
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <label for="Ciudad" class="form-label">Ciudad</label>
          <input type="text" class="form-control" id="Ciudad" required>
          <div class="invalid-feedback">
            Ingrese su Ciudad.
          </div>
        </div>
        <div class="col-md-3">
          <label for="validationCustom04" class="form-label">genero</label>
          <select class="form-select" id="validationCustom04" required>
            <option selected disabled value="">Seleccione...</option>
            <option>Masculino</option>
            <option>Femenino</option>
            <option>Prefiere no decir</option>
          </select>
          <div class="invalid-feedback">
            Porfavor seleccione un genero.
          </div>
        </div>
        <div class="col-md-3">
          <label for="validationCustom05" class="form-label">telefono</label>
          <input type="text" class="form-control" id="validationCustom05" required>
          <div class="invalid-feedback">
            Introdusca un numero valido.
          </div>
        </div>
        <div class="col-12">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
            <label class="form-check-label" for="invalidCheck">
              acepta terminos  condiciones.
            </label>
            <div class="invalid-feedback">
             Debe aceptar los terminos y condiciones.
            </div>
          </div>
        </div>
        <div class="col-12">
          <buttonn class="btn btn-primary" type="submit"> Crear Cuent </button>
        </div>
      </form>
    </main>
  </div>
  <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function () {
      'use strict'

      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.querySelectorAll('.needs-validation')

      // Loop over them and prevent submission
      Array.prototype.slice.call(forms)
        .forEach(function (form) {
          form.addEventListener('submit', function (event) {
            if (!form.checkValidity()) {
              event.preventDefault()
              event.stopPropagation()
            }

            form.classList.add('was-validated')
          }, false)
        })
    })()
  </script>
</body>
<footer>
  <script src="../js/bootstrap.min.js"></script>
  <!--<script src="/js/validaciones.js"></script>-->
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <script src="/js/bootstrap.bundle.js"></script>
  <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/estilos.css">
</footer>

</html>