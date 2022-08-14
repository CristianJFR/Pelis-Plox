
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
    <link rel="Stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <!--<link rel="stylesheet" href="../assets/css/estilos.css">-->
    <link rel="shortcut icon" href="../upload/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
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
                <a class="navbar-brand" href="../index.php">Pelis Chafas</a>
            </div>

            <!--/.nav-collapse -->
        </div>
    </nav>

    <div class="container" id="main">        
        <div class="main-form">
            <form action="login.php" method="POST" class="login-component" id="login-form">
                <h1>Iniciar Sesion</h1>
                <input type="text" name="Nombre" placeholder="Usuario" id="form-input" class="form-name" required><br>
                <input type="password" name="Clave" placeholder="Password" id="form-input" class="form-pass" required><br>
                <button class="login-btn">Login</button>
            </form>
            <div class="login-component" id="register-form">
                <h1>Pelis Chafas</h1>
                <p>Administra tus peliculas!!!</p>
                <a href="registrarUsuario.php">REGISTRATE AQUI</a>
            </div>
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
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/8c2a2ac076.js" crossorigin="anonymous"></script>
    <script src="../assets/js/app.js"></script>
</body>

</html>

<!--<form action="login.php" method="post">
    <div class="panel-body" id="login-panel">
        <div class="">
            <label>Usuario</label>
            <input type="text" class="form-control" name="nombre_usuario" placeholder="Usuario" required>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" name="clave" placeholder="Password" required>
        </div>
        <button type="submit" class="btn btn-primary btn-block">LOGIN</button>

    </div>
</form>