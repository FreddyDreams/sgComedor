<?php

// controlar con _SESSION

require_once __DIR__.'/../models/Trabajador.php';

if (isset($_POST['inicial']) and isset($_POST['final'])){
    $fecha1= $_POST['inicial'];
    $fecha2= $_POST['final'];
    if (empty($fecha1)==false and empty($fecha1)==false){
        $listado = new Trabajador();
        $resultado = $listado->mostrarRegi($fecha1,$fecha2);
    }
}

require __DIR__. '/../views/V_Registros.php';

$fechaDel="-(vacio)-";
$fechaAl="-(vacio)-";
if (empty($fecha1)==false){$fechaDel=date("d/m/Y", strtotime($fecha1));}
if (empty($fecha2)==false){$fechaAl=date("d/m/Y", strtotime($fecha2));}

if (isset($resultado)){
    echo "<div class='container'";
    echo "<div class='row'>";
    echo "<form action='todown_Regi.php' method='post'>";
    echo "Resultados: Del ".$fechaDel." al ".$fechaAl."  ";
    echo "<button type='submit' class='btn btn-warning'>Descargar</button>";
    echo "<input type='hidden' name='dataxls' value=".base64_encode(serialize($resultado)).">";
    echo "<input type='hidden' name='datafe1' value=".$fechaDel.">";
    echo "<input type='hidden' name='datafe2' value=".$fechaAl.">";
    echo "</form>";
    echo "</div>";
    echo "</div>";
    // TABLA RESULTADOS
    echo "<div class='container'>";
    echo "<table class='table table-light' style='font-size: 12px;'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th scope='col'>Fecha</th>";
    echo "<th scope='col'>Codigo</th>";
    echo "<th scope='col'>Nombre</th>";
    echo "<th scope='col'>Empresa</th>";
    echo "<th scope='col'>Unidad</th>";
    echo "<th scope='col'>Tipo</th>";
    echo "<th scope='col'>Registro</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    if (empty($resultado)==false){
        foreach ($resultado as $row) {
            echo "<tr>";
            echo "<th scope='row'>".$row['FECHA2']."</th>";  
            echo "<td>".$row['FOTOCHEK']."</td>";
            echo "<td>".$row['NOMBRES']."</td>";
            echo "<td>".$row['EMPRESA']."</td>";
            echo "<td>".$row['AREA_TRABAJADOR']."</td>";
            echo "<td>".$row['UNIDAD']."</td>";
            echo "<td>".date('h:i:s A',strtotime($row['FECHADATETIME']))."</td>";
            echo "</tr>"; 
        }
    }
    echo "</tbody>";
    echo "</table>";
    if (empty($resultado)){echo "-(NO HAY RESULTADOS)-";}
    echo "</div>";
}

?>