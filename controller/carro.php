<?php

class Carro
{

    public  $marca;
    public $color;
    private $precio;

    function __construct($marca1, $color1, $precio1)
    {

        $this->marca = $marca1;
        $this->color = $color1;
        $this->precio = $precio1;
    }

    
    function getPrecio()
    {
        return $this->precio;
    }
    function setPrecio($precio1)
    {
        return $this->precio = $precio1;
    }
    // getter y setter

    function getMarca()
    {
        return $this->marca;
    }
    function getColor()
    {
        return $this->color;
    }
    function  setColor($color1)
    {
        return $this->color = $color1;
    }


    function  setMarca($marca1)
    {
        return $this->marca = $marca1;
    }
}

$llamar_clase = new Carro('mazda', 'rojo', 18000000);

$llamar_clase->getPrecio();
echo $llamar_clase->getPrecio();
$llamar_clase->setPrecio(2000000);
echo $llamar_clase->getPrecio();
