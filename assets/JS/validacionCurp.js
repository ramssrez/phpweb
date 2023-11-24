console.log("Si se vinculo el JS");
const expresiones = {
	nombreApellidos: /^[a-zA-Z\sñáéíóúÁÉÍÓÚ]+$/, // Solo palabras con acentos
	nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
	password: /^.{4,12}$/, // 4 a 12 digitos.
	correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
	telefono: /^\d{7,14}$/ // 7 a 14 numeros.
}
var nombreClienteInput = document.getElementById("name-cliente");
var apellidoPaClienteInput = document.getElementById("apellido-pa-cliente");
var apellidoMaClienteInput = document.getElementById("apellido-ma-cliente");
var nacimientoClienteInput = document.getElementById("nacimiento-cliente"); 

//var formCliente = document.getElementById("formCliente");
var pruebaInput =  document.getElementById("prueba");

pruebaInput.disabled = true;
function actualizarResultado(){
    var letraNombre = nombreClienteInput.value.charAt(0).toUpperCase();
    var letraApPaterno = apellidoPaClienteInput.value.substring(0, 2).toUpperCase();
    var letraApMaterno = nombreClienteInput.value.charAt(0).toUpperCase();
    console.log(letraApPaterno+letraApMaterno+letraNombre);
    pruebaInput.value = letraApPaterno+letraApMaterno+letraNombre+nacimientoClienteInput.value;
}
function validarInputNombre(){
    var errorParrafo = document.getElementById("error");
    if (!expresiones.nombreApellidos.test(nombreClienteInput.value)) {
        errorParrafo.className = "error";
        errorParrafo.innerHTML = "*Error: El campo no debe de contener números ni caracteres especiales; Campo nombre" ;
        return false;
    }else{
        errorParrafo.className = "";
        errorParrafo.innerHTML = "";
        return true;
    }   
}
function validarInputApellidoPa(){
    var errorParrafo = document.getElementById("error");
    if (!expresiones.nombreApellidos.test(apellidoPaClienteInput.value)) {
        errorParrafo.className = "error";
        errorParrafo.innerHTML = "*Error: El campo no debe de contener números ni caracteres especiales; Campo apellido paterno" ;
        return false;
    }else{
        errorParrafo.className = "";
        errorParrafo.innerHTML = "";
        return true;
    }   
}
function validarFormulario(){
    if(validarInput()){
        console.log("Si ha pasado");
        actualizarResultado();
    }else{
        console.log("No ha pasado");
    }
}
//input.addEventListener('keyup', validarFormulario);
nombreClienteInput.addEventListener("input",validarInputNombre);
apellidoPaClienteInput.addEventListener("input",validarInputApellidoPa);
//formCliente.addEventListener("submit",validarFormulario);
//apellidoPaClienteInput.addEventListener("input",actualizarResultado);
//apellidoMaClienteInput.addEventListener("input",actualizarResultado);