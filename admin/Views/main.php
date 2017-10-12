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
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
              <a class="navbar-brand" href="#">Bolivia TV</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                  <li class="nav-item active">
                    <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo URL; ?>noticias">Noticias</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Albumes</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Admin
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="#">Usuarios</a>
                      <a class="dropdown-item" href="#">Secciones</a>
                      <a class="dropdown-item" href="#">Regiones</a>
                    </div>
                  </li>
                </ul>
              </div>
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
