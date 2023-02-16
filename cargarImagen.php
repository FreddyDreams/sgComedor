<?php
if (isset($_POST)){
    if (file_exists($_FILES['imagenFile']['tmp_name'])){
        $fuente=$_FILES['imagenFile'];
        $carpeta='img';
        $archivonombre='menu_new.png';
        $dir=opendir($carpeta);
        $destino = $carpeta.'/'.$archivonombre;
         
        if(move_uploaded_file($_FILES['imagenFile']['tmp_name'], $destino)) {
            echo "La imagen se ha cargado de forma correcta.";
           // actualizar menu.png dentro de la carpeta img
           copy('img/menu.png', 'img/menu_old.png');
           copy('img/menu_new.png', 'img/menu.png'); 
            } else {
            echo "Se ha producido un error, por favor intentelo de nuevo.";
        }
        closedir($dir);

        $archivo = __DIR__ . "\img\menu.ini";
        $contenido = parse_ini_file($archivo, false);
        $contenido["imgActual"]="img/rutacambiada.png";
        echo var_export($contenido, true);
    }
}
?>