<?php

require_once 'Empleado.php';
require_once 'Diseñador.php';
require_once 'Programador.php';

class Empresa
{
    private $id;
    private $nombre;
    private $empleados = array();

    function __construct($id, $nombre)
    {
        $this->id = $id;
        $this->nombre = $nombre;
    }

    function __destruct()
    {
        unset($this->empleados[0]);
    }

    /** SETTERS */

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
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

    public function getEmpleados()
    {
        return $this->empleados;
    }

    public function getEmpleado($id)
    {
        foreach ($this->empleados as $empleado)
        if ($empleado->getId() == $id)
        {
            return $empleado;
        }

        return null;
    }

    public function getPromedioEdad()
    {
        $suma = 0;
        foreach ($this->empleados as $empleado)
        {
            $suma = $suma + $empleado->getEdad();

        }
        return $suma/sizeof($this->empleados);
    }

    /** ADD */

    public function addEmpleado($empleado)
    {
        array_push($this->empleados, $empleado);
    }
}