<?php

require_once 'Empresa.php';

class Main
{
    function __construct()
    {
    }                                                            

    function main() {

        $empleado1 = new Diseñador(1, "Beau", "Hammond", 30, "Grafico");
        $empleado2 = new Programador(2, "Maris", "Barker", 20, $lenguaje[] = "Python");
        $empleado3 = new Programador(3, "Guy", "Duke", 25, $lenguaje[] = ".NET");
        $empleado4 = new Diseñador(4, "Aline", "Trujillo", 30, "Web");

        $empresa = new Empresa(1, "Summa");

        $empresa->addEmpleado($empleado1);
        $empresa->addEmpleado($empleado2);
        $empresa->addEmpleado($empleado3);
        $empresa->addEmpleado($empleado4);

        /** EMPLEADOS */

        $Empleado = $empresa->getEmpleado(2);
        $Empleado->addLenguaje(".NET");
        echo "EMPLEADO id \n";
        $lenguajes = $Empleado->getLenguajes();
        foreach ($lenguajes as $lenguaje)
            echo ("$lenguaje \n");
        echo "\n";

        $arrayEmpleados = $empresa->getEmpleados();
        echo "EMPLEADOS \n";
        foreach ($arrayEmpleados as $empleado)
        {
            echo $empleado->getNombre();
            echo " ";
            echo $empleado->getApellido();
            echo "\n";
        }

        echo "\n";
        echo "PROMEDIO EDAD \n";
        echo $empresa->getPromedioEdad();
        echo "\n\n";

        /** EMPRESA */

        echo "EMPRESA \n";
        $empresaId = $empresa->getId();
        echo ("Id: $empresaId");
        echo "\n";

        $empresaNombre = $empresa->getNombre();
        echo ("Nombre: $empresaNombre");

        return 0;
    }
}

if (php_sapi_name() == 'cli') {
    $obj = new Main();
    $obj->main();
}