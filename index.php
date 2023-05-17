<?php
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

<?php
include ('./php/navbars/navbarIndex.php');
include ('./php/Listados.php');
include('./php/listatrabajos.php');
//include('./html/botones.html');
?>
</body>
<footer>
<?php
include('./html/footerindex.html');
?>
</footer>

</html>