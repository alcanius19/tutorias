<?php
include 'productos.php';

class Inventario extends Productos
{


    public function estadistica()
    {

        $llamar_clase = new Productos();

        echo $stock_actual = $llamar_clase->getStock() . "</br>";
        echo $fecha_entrada_actual = $llamar_clase->getFechaEntrada();
    }
}
$llamar_clase = new Inventario();
$llamar_clase->estadistica();
