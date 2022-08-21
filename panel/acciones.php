<?php

require '../vendor/autoload.php';

$pelicula = new Kawschool\Pelicula;
$usuario = new Kawschool\Usuario;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['accion'] === 'Registrar') {

        if (empty($_POST['Titulo']))
            exit('Completar Titulo');

        if (empty($_POST['Genero']))
            exit('Completar Genero');

        if (empty($_POST['Descripcion']))
            exit('Completar Descripcion');

        if (empty($_POST['Puntuacion']))
            exit('Completar Puntuacion');

        if (empty($_POST['Trailer']))
            exit('Completar Trailer');



        $_params = array(
            'Titulo' => $_POST['Titulo'],
            'Genero' => $_POST['Genero'],
            'Descripcion' => $_POST['Descripcion'],
            'Puntuacion' => $_POST['Puntuacion'],
            'Trailer' => $_POST['Trailer'],
            'Imagen' => subirImagen()
        );

        $rpt = $pelicula->registrar($_params);

        if ($rpt)
            header('Location: dashboard.php');
        else
            print 'Error al registrar una pelicula';
    }

    if ($_POST['accionUsuario'] === 'Registrar') {

        if (empty($_POST['Nombre']))
            exit('Completar Nombre');

        if (empty($_POST['Clave']))
            exit('Completar Clave');

        $_params = array(
            'Nombre' => $_POST['Nombre'],
            'Clave' => $_POST['Clave']
        );

        $rpt = $usuario->registrarUsuarios($_params);

        if ($rpt)
            
            header('Location: index.php');
        else
            print 'Error al registrar un usuario';
    }

    
    if ($_POST['accion']==='Actualizar'){

        if (empty($_POST['Titulo']))
            exit('Completar Titulo');

        if (empty($_POST['Genero']))
            exit('Completar Genero');

        if (empty($_POST['Descripcion']))
            exit('Completar Descripcion');

        if (empty($_POST['Puntuacion']))
            exit('Completar Puntuacion');

        if (empty($_POST['Trailer']))
            exit('Completar Trailer');

    
    $_params = array(
        'id'=>$_POST['id'],
        'Titulo' => $_POST['Titulo'],
        'Genero' => $_POST['Genero'],
        'Descripcion' => $_POST['Descripcion'],
        'Puntuacion' => $_POST['Puntuacion'],
        'Trailer' => $_POST['Trailer'],
    );

    if(!empty($_POST['Imagen_temp']))
        $_params['Imagen'] = $_POST['Imagen_temp'];
    
    if(!empty($_FILES['Imagen']['name']))
        $_params['Imagen'] = subirImagen();

    $rpt = $pelicula->actualizar($_params);
    if($rpt)
        header('Location: dashboard.php');
    else
        print 'Error al actualizar una pelicula';

    }


    if ($_POST['accion']==='Puntuar'){

        if (empty($_POST['Puntuacion']))
            exit('Completar Puntuacion');

    $_params = array(
        'Puntuacion' => $_POST[`Puntuacion`+`${cont}`]
    );

    $rpt = $pelicula->actualizar($_params);
    if($rpt)
        header('Location: dashboard.php');
    else
        print 'Error al actualizar una pelicula';

    }
}

if($_SERVER['REQUEST_METHOD'] ==='GET'){

    $id = $_GET['id'];

    $rpt = $pelicula->eliminar($id);
    
    if($rpt)
        header('Location: dashboard.php');
    else
        print 'Error al eliminar una pelicula';


}

function subirImagen()
{

    $carpeta = __DIR__ . '/../upload/';

    $archivo = $carpeta . $_FILES['Imagen']['name'];

    move_uploaded_file($_FILES['Imagen']['tmp_name'], $archivo);

    return $_FILES['Imagen']['name'];
}
