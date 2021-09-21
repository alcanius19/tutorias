<?php

class Caja
{

    public $numero = 2;
    public $nombre_cajera = 'jessica';
    public $base = 0;

    function getNumero()
    {
        return $this->numero;
    }

    function getNombre_Cajera()
    {
        return $this->nombre_cajera;
    }

    function setNumero($numero)
    {
        return $this->numero = $numero;
    }

    function setNombre_Cajera($nombre_cajera)
    {
        return $this->nombre_cajera = $nombre_cajera;
    }
}

$llamar_clase = new Caja();                                                                                         
$llamar_clase->setNumero(4);
echo $llamar_clase->getNumero();
$llamar_clase->setNombre_Cajera('paola');
echo $llamar_clase->getNombre_Cajera();
