<?php

require_once ('Empleado.php');

class Programador extends Empleado
{
    private $lenguajes = array();

    public function __construct($id, $nombre, $apellido, $edad, $lenguaje)
    {
        parent::__construct($id, $nombre, $apellido, $edad);
        array_push($this->lenguajes, $lenguaje);
    }

    /** ADD */

    public function addLenguaje($lenguaje)
    {
        array_push($this->lenguajes, $lenguaje);
    }

    /** GETTERS*/

    public function getLenguajes()
    {
        return $this->lenguajes;
    }
}