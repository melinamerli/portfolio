<?php
  $pg = "inicio";
?>

<!DOCTYPE html>
<html lang="es" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css"> <!--vinculada hoja de estilos-->
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script> <!--vinculamos javascript, es p q funcione el boton sanguche, js es para cosas dinamicas-->
</head>
<body id="inicio">
    <header class="container">
        <?php include_once "menu.php";?>
    </header>
    <main class="container">
      <div class="row">
        <div class="col-12 text-center mt-5 cohete">
          <a href="proyectos.php"><img src="../portfolio/images/cohete.svg"></a>
        </div>
      </div>
      <div class="row">
        <div class="col-12 mt-sm-5 mb-sm-3 text-center">
          <p>Bienvenidx al maravilloso mundo de Tuti</p>
        </div>
      </div>
      <div class="row">
        <div class="col-12 text-center">
        <a href="proyectos.php" class="btn btn-blanco">Conoce mis proyectos</a>
      </div>
      </div>
    </main>
    <footer class="container">
        <div class="row pt-4">
            <div class="col-3">
                <a href="https://github.com/"><i class="fa-brands fa-github"></i></a>
                <a href="https://linkedin.com/"><i class="fa-brands fa-linkedin-in"></i></a>
            </div>
            <div class="col-sm-3">
                Sponsor
                <a href="https://depcsuite.com/">DePC Suite</a>
            </div>
            <div class="col-sm-3">
                <a href="mailto:melinamcf88@gmail.com">melinamcf88@gmail.com</a>
            </div>
        </div>
        <a class="btn-whatsapp" href="https://api.whatsapp.com/send?phone=+541160171556"><i class="fa-brands fa-whatsapp px-3 pb-4 pt-3"></i></a>
    </footer>
</body>
</html>