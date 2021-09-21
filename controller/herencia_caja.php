<?php
include 'caja.php';

class Herencia extends Caja
{


    function cierre()
    {
        $llamar_clase = new Caja()
        $obtener_numero = $llamar_clase->getNumero();
        echo $obtener_numero;
    }
}

$llamar_clase = new Herencia();
echo $llamar_clase->cierre();
