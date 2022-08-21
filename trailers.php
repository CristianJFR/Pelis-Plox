<?php
require 'vendor/autoload.php';
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];
    $pelicula = new Kawschool\Pelicula;
    $resultado = $pelicula->mostrarPorId($id);

    if(!$resultado)
    header('Location: dashboard.php');
} else {
    header('Location: dashboard.php');
}

?>

<?php
    require 'vendor/autoload.php';
    $usuario = new Kawschool\Usuario;
    $res = $usuario->getCondition();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Pelis Chafas</title>

  <!-- Latest compiled and minified CSS -->
  <link rel="shortcut icon" href="upload/logo.png" type="image/x-icon">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/estilos.css">
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="trailers">

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
        <a class="navbar-brand" href="index.php">Pelis Chafas</a>
      </div>
     
      <!--/.nav-collapse -->
    </div>
  </nav>

  <div class="container" id="main">
  <div class="shadow">
        <div class="row">
            
            <div class="col-md-3 p-5">
            <br>
                <img src="upload/<?php print $resultado['Imagen']?>" style="height: 450px; width: 270px;" alt="movie-image">
            </div>
            <div class="col-md-8 p-4">

                <iframe width="660" height="415" src="https://www.youtube.com/embed/<?php print $resultado['Trailer']?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <h1><?php print $resultado['Titulo']?></h1>               
                <a href="#" class="btn btn-info " id="trailer-genero"> <center> <h5> <?php print $resultado['Genero']?> </center></h5></a>
                <div id="trailer-genero"><h4><i class="fa-regular fa-heart"></i> <?php print $resultado['Puntuacion']?></h4></div>
                <br> <br>
                <h4 class="trailers-descripcion"><?php print $resultado['Descripcion']?></h4>
            </div>

        </div>
    </div>

  </div> <!-- /container -->


  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/7d076c2af1.js" crossorigin="anonymous"></script>
  <script src="assets/js/app.js"></script>
</body>

</html>