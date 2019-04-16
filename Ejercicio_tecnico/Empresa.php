<?php


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

    public function setEmpleados($empleados)
    {
        $this->empleados = $empleados;
    }

    /** GETTERS */

   /* public function getId()
    {
        return $this->id;
    }*/

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
        for ($i = 0; i < $length; $i++){
            $empleado = $this->empleados[$i];
            if ($empleado == $id) {
                return $empleado;
            }
        }
        return null;
    }

    /** ADD */

    public function addEmpleado($empleado)
    {
        array_push($empleados, $empleado);
    }
}