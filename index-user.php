<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">

  <title>PelisPlox</title>

  <!-- Latest compiled and minified CSS -->
  <link rel="Stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="shortcut icon" href="upload/logo.png" type="image/x-icon">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/estilos.css">
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="Home">

  <!-- Fixed navbar -->
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index-user.php">Pelis Chafas</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav pull-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">User <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="panel/index.php">Cerrar Sesion</a></li>
                        </ul>
                    </li>
                </ul>
        </div>
      <!--/.nav-collapse -->
    </div>
    
  </nav>

  <div class="container" id="main">
    <div class="row">
      <?php
      require 'vendor/autoload.php';
      $pelicula = new Kawschool\Pelicula;
      $info_peliculas = $pelicula->mostrar();
      $cantidad = count($info_peliculas);
      if ($cantidad > 0) {
        for ($i = 0; $i < $cantidad; $i++) {
          $item = $info_peliculas[$i];
      ?>
          <div class="col-md-4 lolamento">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h1 class="text-center title-pelicula"><?php print $item['Titulo'] ?></h1>
              </div>
              <div class="panel-body">
                <?php
                $foto = 'upload/' . $item['Imagen'];
                if (file_exists($foto)) {
                ?>
                  <img src="<?php print $foto; ?>" class="img-responsive">
                <?php } else { ?>
                  <img src="assets/imagenes/not-found.jpg" class="img-responsive">
                <?php } ?>

              </div>
              <div class="panel-footer">
                  <a href="trailers.php?id=<?php print $item['id']?>" class="btn btn-success btn-block " id="Ver">
                    <span class="glyphicon glyphicon-triangle-right"></span>Ver Trailer
                  </a>

              </div>
            </div>
          </div>

        <?php
        }
      } else { ?>
        <h4>NO HAY REGISTROS</h4>
      <?php } ?>

    </div>

  </div> <!-- /container -->
  
  <footer class="footer" style="color: white;">
    <div class="Container">
        <div class="row">
            <div class="footer-col">
                <h4>Informacion</h4>
                <ul>
                    <li><p>Cristian Fernandez</p></li>
                    <li><p>2019-8697</p></li>
                    <li><p>Back-end</p></li>
                    <div class="Social-links">
                        <a href="https://www.facebook.com/cristian.fernandezruiz.921" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/cris.khb/?hl=es" target="_blank"><i class="fab fa-instagram"></i></a>
                    </div>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Informacion</h4>
                <ul>
                    <li><p>Steven Mena</p></li>
                    <li><p>2019-8671</p></li>
                    <li><p>Diseñador/Front-end</p></li>
                    <div class="Social-links">
                        <a href="https://www.facebook.com/stevennelson.menacaraballo" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/steven.pgy/?hl=es" target="_blank"><i class="fab fa-instagram"></i></a>
                    </div>
                </ul>
            </div>
        </div>
    </div>
</footer>

  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/8c2a2ac076.js" crossorigin="anonymous"></script>

</body>

</html>