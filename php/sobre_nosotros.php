<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es-cl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Nosotros</title>
</head>

<body>
  <?php
  include ('./navbars/navbarSN.php');
  include ('../html/acercaDeNosotros.html')
  ?>
</body>
<footer>
    <?php
    include ('../html/footer.html');
    ?>
</footer>

</html>