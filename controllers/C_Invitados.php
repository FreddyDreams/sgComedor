<?php

// controlar con _SESSION

require_once 'models/Trabajador.php';

if (isset($_GET['idinv'])){
    if (empty($_GET['idinv'])==false){
    $idsel=$_GET['idinv'];
    $empleado = new Trabajador();
    $actualizar = $empleado->anularInvi($idsel);
    echo "<script>alert('Se ha anulado el registro del Invitado.');</script>";
    }
}

if (isset($_POST['codigo'])){
    if (empty($_POST['codigo'])==false){
    $array = [
        "codigo" => $_POST['codigo'],
        "nombre" => $_POST['nombre'],
        "fechaini" => $_POST['fechaini'],
        "fechafin" => $_POST['fechafin'],
        "empresa" => $_POST['empresa'],
        "unidad" => $_POST['unidad'],
        "reguser" => "ADMIN",
    ];
    $empleado = new Trabajador();
    $registrar = $empleado->insertarInvi($array);
    echo "<script>alert('Se ha registrado al Invitado.');</script>";
    }
}

$invitado = new Trabajador();
$resultado = $invitado->mostrarInvi();
require __DIR__. '/../views/V_Invitados.php';

if (isset($resultado)){
    echo "<div class='container'>";
    echo "<table class='table table-light' style='font-size: 12px;'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th scope='col'>Id</th>";
    echo "<th scope='col'>Codigo</th>";
    echo "<th scope='col'>Nombre</th>";
    echo "<th scope='col'>Desde</th>";
    echo "<th scope='col'>Hasta</th>";
    echo "<th scope='col'>Empresa</th>";
    echo "<th scope='col'>Unidad</th>";
    echo "<th scope='col'></th>";
 
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    if (empty($resultado)==false){
        foreach ($resultado as $row) {
            echo "<tr>";
            echo "<th scope='row'>".$row['ID']."</th>";
            echo "<td>".$row['CODIGO']."</td>";
            echo "<td>".$row['NOMBRE']."</td>";  
            echo "<td>".$row['FECHAINI']."</td>";  
            echo "<td>".$row['FECHAFIN']."</td>";
            echo "<td>".$row['EMPRESA']."</td>";
            echo "<td>".$row['UNIDAD']."</td>";
            echo "<td class='text-warning'><a href='adminv1.php?navclick=INVITADOS&idinv=$row[ID]'>Eliminar</a></td>";
            echo "</tr>"; 
        }
    }
    echo "</tbody>";
    echo "</table>";
    if (empty($resultado)){echo "-(NO HAY RESULTADOS)-";}
    echo "</div>";
}

?>