<?php

class Casa
{

    public $materiales = ['pintura', 'tejas', 'cemento', 'arena'];
    public $terreno;
    public $trabajadores;

    function __construct($materiales, $terreno, $trabajadores)
    {
        $this->materiales = $materiales;
        $this->terreno = $terreno;
        $this->trabajadores = $trabajadores;
    }

    function getMateriales()
    {
        return $this->materiales;
    }

    static function setMateriales($material){
        return $materiales = $material;
    }
}
$llamar_clase = new Casa('materiales', '1 hectarea', 10);
print_r($llamar_clase->getMateriales());
$llamar_clase->getMateriales();