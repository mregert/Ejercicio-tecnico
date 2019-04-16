<?php

require_once ('Empleado.php');
class Programador extends Empleado
{
    private $lenguaje;

    public function __construct($id, $nombre, $apellido, $edad, $lenguaje)
    {
        parent::__construct($id, $nombre, $apellido, $edad);
        $this->lenguaje = $lenguaje;
    }

    /** SETTERS */
    public function setLenguaje($lenguaje)
    {
        $this->lenguaje = $lenguaje;
    }

    /** GETTERS*/

    public function getLenguaje()
    {
        return $this->lenguaje;
    }
}

/*
if (php_sapi_name() == 'cli') {
    $obj = new Programador(1, "Michelle", "Regert", 25, "Python");
    echo $obj->getId();
    echo "\n";
    echo $obj->getNombre();
    echo "\n";
    echo $obj->getApellido();
    echo "\n";
    echo $obj->getEdad();
    echo "\n";
    echo $obj->getLenguaje();
    echo "\n";
    $obj->setLenguaje("Java");
    echo $obj->getLenguaje();
}*/