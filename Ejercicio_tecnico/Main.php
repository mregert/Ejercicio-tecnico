<?php

require_once 'Empresa.php';

class Main
{

    function __construct()
    {
    }

    function main() {
        /**Empresa*/

        $empleado1 = new Diseñador(1, "Juan", "Segura", 30, "Grafico");
        $empleado2 = new Programador(2, "Felix", "Regert", 20, "Python");
        $empleado3 = new Programador(3, "Michelle", "Regert", 25, "Java");
        $empleado4 = new Diseñador(4, "Juana", "Regert", 30, "Web");

        $empleados =array();
        array_push( $empleados, $empleado1, $empleado2);

        $empresa = new Empresa(1, "Summa", $empleados);

        $empresa->addEmpleado($empleado3);
        $empresa->addEmpleado($empleado4);

        $Empleado = $empresa->getEmpleado(1);
        echo "GET EMPLEADO \n";
        echo ($Empleado->getNombre());
        echo "\n";

        $arrayEmpleados = $empresa->getEmpleados();
        $lenght = sizeof($arrayEmpleados);
        echo "EMPLEADOS \n";
        for ($i = 0; $i < $lenght; $i ++){
            echo $arrayEmpleados[$i]->getNombre();
            echo " ";
            echo $arrayEmpleados[$i]->getApellido();
            echo "\n";
        }

        echo "EMPRESA \n";
        $empresaId = $empresa->getId();
        echo ($empresaId);
        echo "\n";

        $empresaNombre = $empresa->getNombre();
        echo ($empresaNombre);

        return 0;
    }
}

if (php_sapi_name() == 'cli') {
    $obj = new Main();
    $obj->main();
}