<?php


class Empleado
{
    private $id;
    private $nombre;
    private $apellido;
    private $edad;

    function __construct($id, $nombre, $apellido, $edad)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
    }

    /** SETTERS */

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }

    public function setEdad($edad)
    {
        $this->edad = $edad;
    }

    /** GETTERS */

    public function getId()
    {
        return $this->id;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getApellido()
    {
        return $this->apellido;
    }

    public function getEdad()
    {
        return $this->edad;
    }
}