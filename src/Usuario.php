<?php

namespace Kawschool;

class Usuario
{
    private $condition;
    private $config;
    private $cn = null;

    public function __construct()
    {

        $this->config = parse_ini_file(__DIR__ . '/../config.ini');

        $this->cn = new \PDO($this->config['dns'], $this->config['usuario'], $this->config['clave'], array(
            \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
        ));
    }

    public function login($nombre, $clave)
    {

        $sql = "SELECT Nombre FROM `usuarios` WHERE Nombre = :nombre AND Clave = :clave ";

        $resultado = $this->cn->prepare($sql);
        $_array = array(
            ":nombre" =>  $nombre,
            ":clave" =>  $clave
        );

        if ($resultado->execute($_array))
            return $resultado->fetch();

        return false;
    }

    public function registrarUsuarios($_params)
    {
        $sql = "INSERT INTO `usuarios`(`Nombre`, `Clave`) 
        VALUES (:Nombre,:Clave)";

        $resultado = $this->cn->prepare($sql);

        $_array = array(
            ":Nombre" => $_params['Nombre'],
            ":Clave" => $_params['Clave']
        );

        if ($resultado->execute($_array))
            return true;

        return false;
    }

    public function setCondition($nombre){
        $this->condition=$nombre;
    }
    public function getCondition(){
        return $this->condition;
    }

}