<?php

class Conexion
{

    public $database  = 'mysql';
    public $localhost = 'localhost';
    public $username  = 'root';
    public $password  = '';
    public $dbname    = 'restaurante';



    static public function conectar()
    {

        $con
            = new PDO(
                "mysql:host=localhost;dbname=tienda",
                "root",
                ""
            );
        return $con;
    }
}
