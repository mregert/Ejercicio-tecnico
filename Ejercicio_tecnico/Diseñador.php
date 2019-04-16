<?php


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