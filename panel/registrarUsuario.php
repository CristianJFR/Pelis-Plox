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
    <link rel="shortcut icon" href="../upload/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/estilos.css">
    <link rel="stylesheet" href="../assets/css/style.css">
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
                <a class="navbar-brand" href="form_registrar.php">Pelis Chafas</a>
            </div>

            <!--/.nav-collapse -->
        </div>
    </nav>

    <div class="container" id="main">
        <div class="row">
            <div class="col-md-6" style="color: white;">
                <fieldset>
                    <legend style="color: white;">Datos del Usuario</legend>
                    <form method="POST" action="acciones.php" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Usuario</label>
                            <input type="text" class="form-control" name="Nombre" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="Clave" required>
                        </div>
                      

                        <input type="submit" name="accionUsuario" class="btn btn-primary" value="Registrar">
                        <a href="index.php" class="btn btn-danger">Cancelar</a>
                    </form>
                </fieldset>
            </div>
        </div>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>

</body>

</html>