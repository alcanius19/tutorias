<?php
include_once 'conn.php';

class Vendedor
{


    public function verDatos()
    {

        $sql = "SELECT * FROM vendedor";
        $query = Conexion::conectar()->prepare($sql);
        $query->execute();
        $datos = $query->fetchAll();
        return $datos;
    }
}
