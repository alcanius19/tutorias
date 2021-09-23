<?php

include_once '../model/vendedor.php';

class verDatos
{


    static public function ver()
    {
        $llamar_clase = new Vendedor();

        $datos = $llamar_clase->verDatos();
        return $datos;
    }
}
