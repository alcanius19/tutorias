<!--  -->
<?php

class Ventas
{

    public $nombre;
    public $precio;
    public $categoria;

    function __construct($nombre, $precio, $categoria)
    {
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->categoria = $categoria;
    }

    function asignarNombre($nombre)
    {
        return $this->nombre = $nombre;
    }

    function asignarPrecio($precio)
    {
        return $this->precio = $precio;
    }

    function obtenerNombre()
    {
        echo $this->nombre;
    }

    function obtenerPrecio()
    {
        echo $this->precio;
    }
}
$llamar_clase = new Ventas('pizza', 6000, 'comida rapida');
$otro_producto = new Ventas('hamburgesa', 10000, 'comida rapida');
$llamar_clase->asignarNombre('perro caliente');
$llamar_clase->obtenerNombre();
$otro_producto->obtenerNombre();
$llamar_clase->asignarPrecio(8000);
$llamar_clase->obtenerPrecio();
