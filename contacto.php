<?php
  $pg = "contacto";
?>
<!DOCTYPE html>
<html lang="es" class="h-100">

<head>
    <meta charset="UTF-8"> <!--va a tener los caracteres del español-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css"> <!--ya esta vinc fonawesome y bootstrap-->
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css"> <!--vinculada hoja de estilos-->
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!--vinculamos javascript, es p q funcione el boton sanguche, js es para cosas dinamicas-->
</head>

<body id="contacto">
    <header class="container">
        <?php include_once "menu.php";?>
    </header>

    <main class="container">
        <div class="row">
            <div class="col-12 pt-3 pb-5">
                <h1>Contacto</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-12">
                <p>Te invito a que te contactes enviándome un mensaje o bien por whatsapp.</p>
            </div>
            <div class="col-sm-6 col-12">
                <form action="" method="POST"> <!--empieza formulario-->
                    <div class=" pb-3">
                        <input type="text" name="txtNombre" id="txtNombre" placeholder="Nombre" class="form-control shadow">
                        <!--id para jv o css /name para php para codigo de backend, necesitamos capturar los datos y hacer algo-->
                    </div>
                    <div class=" pb-3">
                        <input type="email" name="txtCorreo" id="txtCorreo" placeholder="Correo" class="form-control shadow">
                    </div>
                    <div class=" pb-3">
                        <input type="tel" name="" id="" placeholder="Telefono/Whatsapp" class="form-control shadow">
                    </div>
                    <div class=" pb-3">
                        <textarea name="txtMensaje" id="txtMensaje" class="form-control shadow"
                            placeholder="Escribe tu mensaje aquí"></textarea>
                    </div>
                    <div class="">
                        <button type="submit" name="btnEnviar" id="btnEnviar" class="btn px-3">ENVIAR</button>
                    </div>
                </form> <!--termina formulario -->
            </div>
        </div>
    </main>
    <footer class="container">
        <div class="row pt-4">
            <div class="col-sm-3 col-12">
                <a href="https://github.com/"><i class="fa-brands fa-github"></i></a>
                <a href="https://linkedin.com/"><i class="fa-brands fa-linkedin-in"></i></a>
            </div>
            <div class="col-sm-3 col-6">
                Sponsor
                <a href="https://depcsuite.com/">DePC Suite</a>
            </div>
            <div class="col-sm-3 col-6">
                <a href="mailto:melinamcf88@gmail.com">melinamcf88@gmail.com</a>
            </div>
        </div>
        <a class="btn-whatsapp" href="https://api.whatsapp.com/send?phone=+541160171556"><i class="fa-brands fa-whatsapp px-3 pb-4 pt-3"></i></a>
    </footer>
</body>

</html>