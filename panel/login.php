<?php
 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['Nombre'];
    $clave = $_POST['Clave'];
    require '../vendor/autoload.php';
    $usuario = new Kawschool\Usuario;
    $resultado = $usuario->login($nombre, $clave);

    if($resultado){
        if($clave == "admin"){
            $usuario->setCondition("/index.php");
            if($usuario->getCondition() == "/index.php"){
                header('Location: ../index.php');
            }
        }else{
            $usuario->setCondition("/index-user.php");
            if($usuario->getCondition() == "/index-user.php"){
                header('Location: ../index-user.php');
            }
        }
    
    }else{
     $_SESSION['message'] = 'Inicio de sesión fallido!';
     header('Location: index.php');
    }
}
