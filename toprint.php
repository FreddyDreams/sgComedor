<!DOCTYPE html>
<html lang="en">

<!--
INDICACIONES PARA CONFIGURAR LA IMPRESORA - LADO CLIENTE
solo aplica para la pc donde se digita el registro de menu
1) CONFIGURAR UN TIPO DE PAPEL 80mm x 80mm EN PREFERENCIAS DE LA TICKETERA
2) USAR CHROME COMO NAVEGADOR WEB
3) PAGINA PRINCIPAL POR DEFECTO: LA DEL APLICATIVO
4) DEJAR CONFIGURADO LA IMPRESORA DE TICKET EN EL CHROME COMO PREDETERMINADO
5) DEJAR CONFIGURADO EL TAMAÑO DE PAPEL (creado) EN EL CHROME COMO PREDETERMINADO
6) CREAR UN ACCEDO DIRECTO AL CHROME AGREGANDO "--kiosk-printing" AL FINAL DE LA RUTA
!-->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
    <h3>PRUEBA DE IMPRESION</h3>
    <h5>PRUEBA DE IMPRESION</h5>
    este es un mensaje de prueba.
    <br>
    este es otro texto.
    </div>

    <script>
        window.print();
    </script>
</body>
</html>