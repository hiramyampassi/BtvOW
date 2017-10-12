<?php namespace Views;

$public = new Template();

class Template {

    public function __construct()
    {
?>

        <!doctype html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <title>Bolivia TV Admin | {titulo}</title>
            <link rel="stylesheet" href="<?php echo URL; ?>Views/public/css/bootstrap.min.css">


        </head>
        <body>
          <nav class="navbar navbar-default">
            <div class="container-fluid">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Bolivia TV</a>
              </div>

              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Admin <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Usuarios</a></li>
                      <li><a href="#">Secciones</a></li>
                      <li><a href="#">Regiones</a></li>
                    </ul>
                  </li>
                  <li><a href="<?php echo URL; ?>noticias">Noticias</a></li>
                  <li><a href="<?php echo URL; ?>noticias">Docs web</a></li>
                  <li><a href="<?php echo URL; ?>noticias">Banner sup</a></li>
                  <li><a href="<?php echo URL; ?>noticias">Eventos especiales</a></li>
                  <li><a href="<?php echo URL; ?>noticias">Youtube</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Nombre de usuario <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Datos personales</a></li>
                      <li><a href="#">Ayuda</a></li>
                      <li role="separator" class="divider"></li>
                      <li><a href="#">Cerrar sesi&oacute;n</a></li>
                    </ul>
                  </li>
                </ul>
              </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
          </nav>


<?php

    }
    public function __destruct()
    {
?>


        <!--<footer class="navbar-fixed-bottom" >
            Todos los derechos reservados &copy 2017
        </footer>-->

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="<?php echo URL; ?>Views/public/js/bootstrap.min.js"></script>
        </body>
        </html>

<?php

    }
}

?>
