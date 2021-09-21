<?php

class Conexion
{

    public $localhost;
    public $username;
    public $password;
    public $dbname;
    public $database;

    public function __construct()
    {
        $this->database = 'mysql';
        $this->localhost = 'localhost';
        $this->username = 'root';
        $this->password = '';
        $this->dbname = 'restaurante';
    }

    function conectar()
    {

        $con = new PDO("mysql:dbname=" . $this->dbname . ";host=" . "$this->localhost", $this->username, $this->password);
        return $con;
    }
}
$llamar_clase = new Conexion();
$llamar_clase->conectar();
