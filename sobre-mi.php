<?php
  $pg = "sobre-mi";
?>

<!DOCTYPE html>
<html lang="es" class="h-100">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sobre mi</title>
  <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
  <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/estilos.css"> <!--vinculada hoja de estilos-->
  <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
  <link rel="shortcut icon" href="images/abmventas.png" type="image/x-icon"> <!--le agregue una imagen random-->
  <!--vinculamos javascript, es p q funcione el boton sanguche, js es para cosas dinamicas-->
</head>

<body id="sobre-mi">
  <header class="container">
      <?php include_once "menu.php";?>
  </header>
  <main>
    <section id="bio" class="container">
      <div class="row pb-5">
        <div class="col-sm-8 col-12">
          <h1 class="pt-3 pb-5">Sobre mí</h1>
          <p class="pb-3">Docente frustrada de Educación Secundaria en Geografía</p>
          <a href="contacto.php" class="btn btn-rojo">Enviar mensaje</a>
        </div>
        <div class="col-sm-4 col-12">
          <img src="../portfolio/images/yop.png">
        </div>
      </div>
    </section>
    <section id="stacktecnologico">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h2 class="py-5 px-3">Stack tecnológico</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-2 col-6">
            <div class="tecnologia mb-3">
              <h3 class="pt-5">Javascript</h3>
              <i class="fa-brands fa-js pb-5"></i>
            </div>
          </div>
          <div class="col-sm-2 col-6">
            <div class="tecnologia mb-3">
              <h3 class="pt-5">PHP</h3>
              <i class="fa-brands fa-php pb-5"></i>
            </div>
          </div>
          <div class="col-sm-2 col-6">
            <div class="tecnologia mb-3">
              <h3 class="pt-5">HTML</h3>
              <i class="fa-brands fa-html5 pb-5"></i>
            </div>
          </div>
          <div class="col-sm-2 col-6">
            <div class="tecnologia mb-3">
              <h3 class="pt-5">API Rest</h3>
              <i class="fa-solid fa-gears pb-5"></i>
            </div>
          </div>
          <div class="col-sm-2 col-6">
            <div class="tecnologia mb-3">
              <h3 class="pt-5">Laravel</h3>
              <i class="fa-brands fa-laravel pb-5"></i>
            </div>
          </div>
          <div class="col-sm-2 col-6">
            <div class="tecnologia mb-3">
              <h3 class="pt-5">Bootstrap</h3>
              <i class="fa-brands fa-bootstrap pb-5"></i>
            </div>
          </div>
          <div class="col-sm-2 col-6">
            <div class="tecnologia mb-3">
              <h3 class="pt-5">MySQL</h3>
              <i class="fa-solid fa-database pb-5"></i>
            </div>
          </div>
          <div class="col-sm-2 col-6">
            <div class="tecnologia mb-3">
              <h3 class="pt-5">CSS</h3>
              <i class="fa-brands fa-css3-alt pb-5"></i>
            </div>
          </div>
          <div class="col-sm-2 col-6">
            <div class="tecnologia mb-3">
              <h3 class="pt-5">Git</h3>
              <i class="fa-brands fa-git pb-5"></i>
            </div>
          </div>
          <div class="col-sm-2 col-6">
            <div class="tecnologia mb-3">
              <h3 class="pt-5">React.js</h3>
              <i class="fa-brands fa-react pb-5"></i>
            </div>
          </div>
          <div class="col-sm-2 col-6">
            <div class="tecnologia mb-3">
              <h3 class="pt-5">Mercadopago</h3>
              <i class="fa-solid fa-wallet pb-5"></i>
            </div>
          </div>
          <div class="col-sm-2 col-6">
            <div class="tecnologia mb-3">
              <h3 class="pt-5">Amazon AWS</h3>
              <i class="fa-brands fa-aws pb-5"></i>
            </div>
          </div>
          <div class="col-sm-2 col-6">
            <div class="tecnologia mb-3">
              <h3 class="pt-5">Linux</h3>
              <i class="fa-brands fa-linux pb-5"></i>
            </div>
          </div>
          <div class="col-sm-2 col-6">
            <div class="tecnologia mb-3">
              <h3 class="pt-5">Apache</h3>
              <i class="fa-solid fa-server pb-5"></i>
            </div>
          </div>
          <div class="col-sm-2 col-6">
            <div class="tecnologia mb-3">
              <h3 class="pt-5">Paypal</h3>
              <i class="fa-brands fa-paypal pb-5"></i>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="experiencia" class="container ">
      <div class="row">
        <div class="col-12">
          <h2 class="py-5 px-3">Experiencia laboral</h2>
        </div>
        <div class="row shadow m-0 pb-4">
          <div class="col-sm-2 col-6">
            <img src="../portfolio/images/aleman.png">
          </div>
          <div class="col-sm-10 col-6">
            <h3>Docente</h3>
            <h4>Colegio Aleman</h4>
            <h5>2021</h5>
            <p>Docente de 6to año, di la materia Ambiente, Desarrollo y Sociedad</p>
          </div>
          <div class="col-sm-2 col-6">
            <img src="../portfolio/images/ilz.png">
          </div>
          <div class="col-sm-10 col-6">
            <h3>Docente</h3>
            <h4>Instituto Lomas de Zamora Cooperativa</h4>
            <h5>2022 - presente</h5>
            <p>Cooperativista del Instituto Lomas de Zamora, docente de 3° y 5° año</p>
          </div>
        </div>
    </section>
    <section id="formacion" class="container">
      <div class="row">
        <div class="col-12">
          <h2 class="py-5 px-3">Formación laboral</h2>
        </div>
      </div>
      <div class="row shadow pb-4">
        <div class="col-sm-6 col-12">
          <div class="row">
            <div class="col-sm-4">
              <img src="../portfolio/images/educare.png">
            </div>
            <div class="col-sm-8">
              <h3>Profesorado en historia</h3>
              <h4>Instituto de Educacion Superior Educare</h4>
              <h5>2018</h5>
              <p>educare.com.ar</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="row">
            <div class="col-sm-4">
              <img src="../portfolio/images/sigloxxi.png">
            </div>
            <div class="col-sm-8">
              <h3>Profesorado en Educacion Secundaria en Geografia</h3>
              <h4>Instituto de Formacion Pedagogica Siglo XXI</h4>
              <h5>2019-2021</h5>
              <p>isfpsigloxxi.com.ar</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="row">
            <div class="col-sm-4">
              <img src="../portfolio/images/utnlogo.png">
            </div>
            <div class="col-sm-8">
              <h3>Curso de inglés</h3>
              <h4>Universidad tecnologica nacional</h4>
              <h5>2000</h5>
              <p>Esto es relleno en realidad</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="hobbies">
      <div class="container">
        <div class="row py-5 my-5">
          <div class="col-sm-6 col-12">
            <div class="row shadow card-idioma">
              <div class="col-4 card text-center">
                <i class="fas fa-comment-alt"></i>
              </div>
              <div class="col-8 p-5 pb-3">
                <h2>IDIOMAS</h2>
                <ul>
                  <li>Frances <span class="frances">oui oui le chat noir</span></li>
                  <li>Ingles</li>
                  <li>Idioma ardilla <span class="ardilla">squeaky, uh, squeak, squeaker, squeakin'</span></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-12">
            <div class="row shadow card-hobbies">
            <div class="col-4 card text-center">
              <i class="fas fa-star"></i>
            </div>
            <div class="col-8 p-5 pb-3">
              <h2>HOBBIES</h2>
              <ul>
                <li>Mirar pelis turbias y de amor</li>
                <li>Escribir cosas</li>
                <li>Comer</li>
              </ul>
            </div>
          </div>
          </div>
        </div>
      </div>

    </section>

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