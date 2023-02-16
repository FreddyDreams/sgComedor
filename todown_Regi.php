<?php 
header("Content-Type: application/vnd.ms-excel; charset=iso-8859-15");
header("Content-Disposition: attachment; filename=rpt_comedor_".date('Y:m:d:m:s').".xls");
header("Pragma: no-cache"); 
header("Expires: 0");
?>

<html>
<table>
    <thead>
        <tr>
            <th scope='col'>Fecha</th>
            <th scope='col'>Codigo</th>
            <th scope='col'>Nombre</th>
            <th scope='col'>Empresa</th>
            <th scope='col'>Unidad</th>
            <th scope='col'>Tipo</th>
            <th scope='col'>Registro</th>
        </tr>
    </thead>
    <tbody>

<?php
$resultado = ( unserialize(base64_decode($_POST['dataxls'])) );
foreach ($resultado as $row) {
    echo "<tr>";  
    echo "<td>".$row['FECHA2']."</td>";  
    echo "<td>'".$row['FOTOCHEK']."</td>";  
    echo "<td>".$row['NOMBRES']."</td>";
    echo "<td>".$row['EMPRESA']."</td>";
    echo "<td>".$row['AREA_TRABAJADOR']."</td>";
    echo "<td>".$row['UNIDAD']."</td>";
    echo "<td>".date('h:i:s A',strtotime($row['FECHADATETIME']))."</td>";
    echo "</tr>"; 
}
?>

    </tbody>
</table>
<?php echo "<tr>Filtro: Del ".$_POST['datafe1']." Al ".$_POST['datafe2']."</tr>"; ?>
</html>