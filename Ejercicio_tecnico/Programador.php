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