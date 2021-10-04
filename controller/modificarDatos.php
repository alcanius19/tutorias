<?php
include_once '../model/vendedor.php';

class Modificar
{

    static public function  modificarDatos($id, $nombre, $cargo, $fecha_ingreso)
    {
        $llamar_clase = new Vendedor();
        $data = $llamar_clase::modificarDatos($id, $nombre, $cargo, $fecha_ingreso);
        return $data;
    }
}
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$cargo = $_POST['cargo'];
$fecha_ingreso = $_POST['fecha_ingreso'];
$llamar_clase = new Modificar();
$llamar_clase->modificarDatos($id, $nombre, $cargo, $fecha_ingreso);
header('Location: ../view/index.php');
