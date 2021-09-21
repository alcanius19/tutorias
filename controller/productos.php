<?php

class Productos
{


    public $precio;
    public $stock = 30;
    public $existecia;
    public $fecha_vencimiento;
    public $fecha_entrada = '09/09/2021';
    public $tipo;

    public function getStock()
    {
        return $this->stock;
    }

    public function getFechaEntrada()
    {
        return $this->fecha_entrada;
    }
}
