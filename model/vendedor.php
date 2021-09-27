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

     public function EditarDatos($id)
    {

        $sql = "SELECT * FROM vendedor WHERE id = $id";
        $query = Conexion::conectar()->prepare($sql);
        $query->execute();
        $datos = $query->fetchAll();
        return $datos;
    }
}
