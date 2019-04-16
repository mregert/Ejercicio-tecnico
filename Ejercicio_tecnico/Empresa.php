<?php

require_once 'Empleado.php';
require_once 'Diseñador.php';
require_once 'Programador.php';

class Empresa
{
    private $id;
    private $nombre;
    private $empleados;

    function __construct($id, $nombre, $empleados)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->empleados = $empleados;
    }

    /** SETTERS */

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function setEmpleados(Empleado $empleados)
    {
        $this->empleados = $empleados;
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
        $length = sizeof($this->empleados);
        for ($i = 0; $i < $length; $i++){
            $empleado = $this->empleados[$i];
            if ($empleado->getId() == $id) {
                return $empleado;
            }
        }
        return null;
    }

    public function getPromedioEdad()
    {
        $length = sizeof($this->empleados);
        $suma = 0;
        for ($i = 0; $i < $length; $i++)
            $suma = $suma + $this->empleados[$i]->getEdad();
        return $suma/$length;
    }

    /** ADD */

    public function addEmpleado($empleado)
    {
        array_push($this->empleados, $empleado);
        return 0;
    }
}