<?php

require_once ('Empleado.php');
class Diseñador extends Empleado
{
    private $tipo;

    public function __construct($id, $nombre, $apellido, $edad, $tipo)
    {
        parent::__construct($id, $nombre, $apellido, $edad);
        $this->tipo = $tipo;
    }

    /** SETTERS */

    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    /** GETTERS */

    public function getTipo()
    {
        return $this->tipo;
    }
}

/*
if (php_sapi_name() == 'cli') {
    $obj = new Diseñador(1, "Michelle", "Regert", 25, "Web");
    echo $obj->getId();
    echo "\n";
    echo $obj->getNombre();
    echo "\n";
    echo $obj->getApellido();
    echo "\n";
    echo $obj->getEdad();
    echo "\n";
    echo $obj->getTipo();
    echo "\n";
    $obj->setTipo("Grafico");
    echo $obj->getTipo();
}*/