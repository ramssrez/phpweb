/*
name-cliente
apellido-pa-cliente
apellido-ma-cliente
prueba

 */
console.log("Si se vinculo el JS");
var nombreClienteInput = document.getElementById("name-cliente");
var apellidoPaClienteInput = document.getElementById("apellido-pa-cliente");
var apellidoMaClienteInput = document.getElementById("apellido-ma-cliente");
var nacimientoClienteInput = document.getElementById("nacimiento-cliente"); 

var pruebaInput =  document.getElementById("prueba");

pruebaInput.disabled = true;

function actualizarResultado(){
    var letraNombre = nombreClienteInput.value.charAt(0).toUpperCase();
    var letraApPaterno = apellidoPaClienteInput.value.substring(0, 2).toUpperCase();
    var letraApMaterno = nombreClienteInput.value.charAt(0).toUpperCase();
    //console.log(letraApPaterno+letraApMaterno+letraNombre);
    //pruebaInput.disabled = false;
    pruebaInput.value = letraApPaterno+letraApMaterno+letraNombre+nacimientoClienteInput.value;
}
//nombreClienteInput.addEventListener("input",actualizarResultado);
//apellidoPaClienteInput.addEventListener("input",actualizarResultado);
apellidoMaClienteInput.addEventListener("input",actualizarResultado);