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

    public function VerDatosbyId($id)
    {

        $sql = "SELECT * FROM vendedor WHERE id = $id";
        $query = Conexion::conectar()->prepare($sql);
        $query->execute();
        $datos = $query->fetchAll();
        return $datos;
    }

    public function modificarDatos($id, $nombre, $cargo, $fecha_ingreso)
    {

        $sql = "UPDATE `vendedor` SET `nombre` = '$nombre', `cargo` = '$cargo', `fecha_ingreso` = '$fecha_ingreso' WHERE `vendedor`.`id` = $id";
        
        $query = Conexion::conectar()->prepare($sql);
        $query->execute();
        return $query;
    }
}
