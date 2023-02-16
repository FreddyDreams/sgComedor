const digitado = document.getElementById('codigo');
const btnSendFile = document.getElementById('btnSend');

const btn1 = document.getElementById('key1');
const btn2 = document.getElementById('key2');
const btn3 = document.getElementById('key3');
const btn4 = document.getElementById('key4');
const btn5 = document.getElementById('key5');
const btn6 = document.getElementById('key6');
const btn7 = document.getElementById('key7');
const btn8 = document.getElementById('key8');
const btn9 = document.getElementById('key9');
const btn0 = document.getElementById('key0');
const btnCE = document.getElementById('keyCE');

btn1.addEventListener('click', () => { digitado.value=digitado.value+"1"; });
btn2.addEventListener('click', () => { digitado.value=digitado.value+"2"; });
btn3.addEventListener('click', () => { digitado.value=digitado.value+"3"; });
btn4.addEventListener('click', () => { digitado.value=digitado.value+"4"; });
btn5.addEventListener('click', () => { digitado.value=digitado.value+"5"; });
btn6.addEventListener('click', () => { digitado.value=digitado.value+"6"; });
btn7.addEventListener('click', () => { digitado.value=digitado.value+"7"; });
btn8.addEventListener('click', () => { digitado.value=digitado.value+"8"; });
btn9.addEventListener('click', () => { digitado.value=digitado.value+"9"; });
btn0.addEventListener('click', () => { digitado.value=digitado.value+"0"; });
btnCE.addEventListener('click', () => { digitado.value=""; });

btnSendFile.addEventListener('click', () => {
    let dato = new FormData();
    dato.append('codtrab',digitado.value);
    postData(dato);
});
function postData(dato) {
    // en fetch especificamos el archivo en el servidor que captura los datos enviados
    const response = fetch('controllers/consultaTrabajador.php', {
        method: 'POST',
        body: dato
    }).then(mensaje => mensaje.text())
    .then(datamensaje => {alert(datamensaje)}); 
    // reincia input
    digitado.value="";
}
