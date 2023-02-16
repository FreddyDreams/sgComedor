const imagenMenu = document.getElementById('inputImagen');
const btnSendImagen = document.getElementById('inputUpload');

btnSendImagen.addEventListener('click', () => {
    if (imagenMenu.files.length > 0){
        if (imagenMenu.files[0].type=='image/png'){
            if (imagenMenu.files[0].size < 100000){
                let archivo = new FormData();
                archivo.append('imagenFile',imagenMenu.files[0]);
                postFile(archivo);
            } else {
                alert("Intente subir un archivo que pese menos de 100KB ")
            }
        } else {
            alert("Intente subir un archivo de imagen en formato PNG.")
        }
    }
 });
function postFile(archivo) {
    const response = fetch('cargarImagen.php', {
        method: 'POST',
        body: archivo
    }).then(mensaje => mensaje.text())
    .then(datamensaje => {alert(datamensaje)});
    imagenMenu.value="";
    // obligar a que cargue imagen del servidor y no del cache
    document.getElementById('imagenPrevia').src="img/menu.png";
}