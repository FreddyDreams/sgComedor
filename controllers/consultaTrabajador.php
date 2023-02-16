<?php

 require_once '../models/Trabajador.php';

    $var = $_POST['codtrab'];
    $empleado = new Trabajador();
    $resultado = $empleado->consultarTrab($var);
    if ($resultado==false)
        {
        echo "CODIGO DE TRABAJADOR NO EXISTE O NO ESTA ACTIVO";
        }
        else
        {
        # solo si existe el codigo y TI_SITU='ACT'
        $datopersona = $empleado->obtenerPers($var);
        $empleado->codigo = $var;
        $empleado->nombre = $datopersona['NO_TRAB']." ".$datopersona['NO_APEL_PATE']." ".$datopersona['NO_APEL_MATE'];
        $empleado->cumple = $datopersona['FE_NACI_TRAB'];
        
        $datoempresa = $empleado->obtenerEmpr($resultado['CO_EMPR']);
        $empleado->empresa = $datoempresa['DE_NOMB'];

        $datounidad = $empleado->obtenerUnid($resultado['CO_EMPR'],$resultado['CO_UNID']);
        $empleado->unidad = $datounidad['DE_UNID'];

        # registro de menu solicitado
        date_default_timezone_set("America/Lima");
        $empleado->tipo = "OFIPLAN";
        $Object = new DateTime();
        $empleado->registro = $Object->format('Y-m-d H:i:s');
        $empleado->fecha = date('Y-m-d');
        $array = [
            "codigo" => $empleado->codigo,
            "nombre" => $empleado->nombre,
            "empresa" => $empleado->empresa,
            "unidad" => $empleado->unidad,
            "tipo" => $empleado->tipo,
            "registro" => $empleado->registro,
            "fecha" => $empleado->fecha,
        ];
//        var_dump ($array);
        $comedor = $empleado->insertarRegi($array);
        echo "SOLICITUD DE MENU REGISTRADA.";
        }

?>
