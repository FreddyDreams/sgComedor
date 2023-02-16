<?php

// if _SESSION vacio ir a la vista
// require 'views/login.php';

if (isset($_GET['navclick'])){
    $vista1=$_GET['navclick'];
} else {
    $vista1="HOME";
}

if ($vista1=="HOME"){
    require_once 'controllers/C_Dashboard.php';
}

if ($vista1=="REGISTROS"){
    require_once 'controllers/C_Registros.php';
}

if ($vista1=="INVITADOS"){
    require_once 'controllers/C_Invitados.php';
}

?>