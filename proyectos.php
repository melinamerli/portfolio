<?php
  $pg = "proyectos";
?>
<!DOCTYPE html>
<html lang="es" class="h-100">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mis proyectos</title>
  <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
  <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/estilos.css"> <!--vinculada hoja de estilos-->
  <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!--vinculamos javascript, es p q funcione el boton sanguche, js es para cosas dinamicas-->
</head>

<body id="proyectos">
  <header class="container">
    <?php include_once "menu.php";?>
  </header>
  <main class="container">
    <div class="row">
      <div class="col-12">
        <h1 class="pt-3 pb-5" >Proyectos</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <p class="pb-3">Los siguientes son algunos de los trabajos que he realizado:</p>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-sm-4 ">
        <div class="proyecto">
          <img class="img-fluid" src="../portfolio/images/abmclientes.png">
          <h2 class="px-3 py-2">ABM CLIENTES</h2>
          <p class="px-3 py-1">Alta, baja y modificación de un registro de clientes. Realizado en HTML, CSS, PHP, Bootstrap y Json.</p>
          <div class="px-3 pt-4">
            <div class="row">
              <div class="col-6">
                <a class="btn btn-rojo" href="#">Ver online</a>
              </div>
              <div class="col-6">
                <a class="linkrojo" href="#">Ver código fuente</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-4 ">
        <div class="proyecto">
          <img class="img-fluid" src="../portfolio/images/abmventas.png">
          <h2 class="px-3 py-2">SISTEMA DE GESTIÓN DE VENTAS</h2>
          <p class="px-3 py-1">Sistema de gestión de clientes, productos y ventas. Realizado en HTML, CSS, PHP, MVC, Bootstrap, Js, Ajax,
            jQuery y MySQL de base de datos.</p>
          <div class="px-3 pt-4">
            <div class="row">
              <div class="col-6">
                <a class="btn btn-rojo" href="#">Ver online</a>
              </div>
              <div class="col-6">
                <a class="linkrojo" href="#">Ver código fuente</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-4 ">
        <div class="proyecto">
          <img class="img-fluid" src="../portfolio/images/proyecto-integrador.png">
          <h2 class="px-3 py-2">PROYECTO INTEGRADOR</h2>
          <p class="px-3 py-1">Proyecto Full Stack desarrollado en PHP, Laravel, Javascript, jQuery, AJAX, HTML, CSS, Mercadopago con
            panel
            administrador, gestor de usuarios, módulo de permisos y funcionalidades a fines.</p>
          <div class="px-3 pt-4">
            <div class="row">
              <div class="col-6">
                <a class="btn btn-rojo" href="#">Ver online</a>
              </div>
              <div class="col-6">
                <a class="linkrojo" href="#">Ver código fuente</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <footer class="container py-4">
    <div class="row pt-4">
      <div class=" col-12 col-sm-3">
        <a href="https://github.com/"><i class="fa-brands fa-github"></i></a>
        <a href="https://linkedin.com/"><i class="fa-brands fa-linkedin-in"></i></a>
      </div>
      <div class="col-6 col-sm-3">
        Sponsor
        <a href="https://depcsuite.com/">DePC Suite</a>
      </div>
      <div class=" col-6 col-sm-3">
        <a href="mailto:melinamcf88@gmail.com">melinamcf88@gmail.com</a>
      </div>
    </div>
    <a href="https://api.whatsapp.com/send?phone=+541160171556"><i class="fa-brands fa-whatsapp px-3 pb-4 pt-3"></i></a>
  </footer>
</body>

</html>