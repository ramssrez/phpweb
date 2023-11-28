//Arreglo de expresiones regulares para los campos de entrada
const expresiones = {
	nombreApellidos: /^[a-zA-Z\sñáéíóúÁÉÍÓÚ]+$/,// Solo palabras con acentos
}
/*
	nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
	password: /^.{4,12}$/, // 4 a 12 digitos.
	correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
	telefono: /^\d{7,14}$/ // 7 a 14 numeros.
*/
//Declaración de variables del DOM que se van a modificar conforme el flujo del sitio web
console.log("Validacion curp");
var nombreClienteInput = document.getElementById("name-cliente");
var apellidoPaClienteInput = document.getElementById("apellido-pa-cliente");
var apellidoMaClienteInput = document.getElementById("apellido-ma-cliente");
var nacimientoClienteInput = document.getElementById("nacimiento-cliente"); 
var sexoCliente = document.getElementById("sexoCliente");
var estadoCliente = document.getElementById("estadoCliente");
var curpCliente =  document.getElementById("curp-cliente");
var rfcCliente = document.getElementById("rfc-cliente");
var btnAgregar = document.getElementById("btn-agregar");
var formCliente = document.getElementById("formCliente");
btnAgregar.disabled = true;
//Función que actualiza el curpo con la entrada de los datos que provengan de los inpuys
function actualizarCurp(){
    //Sentencia if que realiza el CURP y RFC del cliente
    if(validarInputNombre() && validarInputApellidoMa() && validarInputApellidoPa()){
        var letraNombre = nombreClienteInput.value.charAt(0).toUpperCase();
        var lastLetraNombre = nombreClienteInput.value.substr(-1).toUpperCase();
        var letraApPaterno = apellidoPaClienteInput.value.substring(0, 2).toUpperCase();
        var lastLetraApPaterno = apellidoPaClienteInput.value.substr(-1).toUpperCase();
        var letraApMaterno = apellidoMaClienteInput.value.charAt(0).toUpperCase();
        var lastLetraApMaterno = apellidoMaClienteInput.value.substr(-1).toUpperCase();
        var fechaText = nacimientoClienteInput.value;
        var partesFecha = fechaText.split("-");
        var year = partesFecha[0].substring(2, 4);
        var mes = partesFecha[1];
        var dia = partesFecha[2]
        var sexo = "";
        if(sexoCliente.value == 1){
            sexo = "M";
        }else if(sexoCliente.value == 2){
            sexo = "F"
        }
        var estado = estadoCliente.options[estadoCliente.selectedIndex].text;
        var claveEStado = estado.substring(estado.length - 2);
        var aleatorioUno = Math.floor(Math.random() * 10);
        var aleatorioDos = Math.floor(Math.random() * 10);
        var curp = letraApPaterno+letraApMaterno+letraNombre+year+mes+dia+sexo+claveEStado+lastLetraNombre+lastLetraApPaterno+lastLetraApMaterno+aleatorioUno+aleatorioDos; 
        var rfc = letraApPaterno+letraApMaterno+letraNombre+year+mes+dia+sexo+claveEStado;
        curpCliente.value = curp;
        rfcCliente.value = rfc;
        btnAgregar.disabled = false;
        return true;
    }else{
        //En caso de que no se llenen los campos se manda un mensaje de que no se ha generado el CURO
        var errorParrafo = document.getElementById("error");
        errorParrafo.className = "error";
        errorParrafo.innerHTML = "*Error: Se tienen campos vacios, aún no se ha generado el CURP";
        return false;
    }
}
//Función qu permite validar el input del nombre, con la utilizaicón de expresiones regulares y mensajes de error
function validarInputNombre(){
    removeSuccesfulP();
    if (!expresiones.nombreApellidos.test(nombreClienteInput.value)) {
        mensajeError("Campo nombre");
        return false;
    }else{
        limpiarError();
        return true;
    }  
}
//Función que remueve el mensaje de succesful, cuando se haya enviado los datos a php
function removeSuccesfulP(){
    var elementoParrafo = document.querySelector(".succesful");
    if(elementoParrafo !== null && elementoParrafo !== undefined){
        elementoParrafo.remove();
    }
}
//Función qu permite validar el input del apellido paterno, con la utilizaicón de expresiones regulares y mensajes de error
function validarInputApellidoPa(){
    removeSuccesfulP();
    if (!expresiones.nombreApellidos.test(apellidoPaClienteInput.value)) {
        mensajeError("Campo apellido paterno");
        return false;
    }else{
        limpiarError();
        return true;
    }   
}
//Función qu permite validar el input del apellido materno, con la utilizaicón de expresiones regulares y mensajes de error
function validarInputApellidoMa(){
    removeSuccesfulP();
    if (!expresiones.nombreApellidos.test(apellidoMaClienteInput.value)) {
        mensajeError("Campo apellido materno");
        return false;
    }else{
        limpiarError();
        return true;
    }   
}
//Función que manda un error en el sitio web, para el caso de que no se acepten caracteres especiales en los campos
function mensajeError(campo){
    var errorParrafo = document.getElementById("error");
    errorParrafo.className = "error";
    errorParrafo.innerHTML = "*Error: El campo no debe de contener números ni caracteres especiales; "+ campo;
}
//Función que limpia el mensaje de error anteriormente generado
function limpiarError(){
    var errorParrafo = document.getElementById("error");
    errorParrafo.className = "";
    errorParrafo.innerHTML = "";
}
//Función para validar que se tengan campos llenos en los inputs
function validarForm(e){
    if(!validarInputNombre() && !validarInputApellidoMa() && !validarInputApellidoPa() && !actualizarCurp()){
        console.log("Si estan llenos");
        e.preventDefault();
        var errorParrafo = document.getElementById("error");
        errorParrafo.className = "error";
        errorParrafo.innerHTML = "*Error: Hay campos vacios en el formulario; ";
    }
}
//Función que valida que el curp cuenta con exactamenre 18 caracteres
function validarCampoCurp(){
    if(curpCliente.value.length != 18){
        var errorParrafo = document.getElementById("error");
        errorParrafo.className = "error";
        errorParrafo.innerHTML = "*Error: El CURP, debe tener 18 caracteres en total; ";
        btnAgregar.disabled = true;
    }else{
        var errorParrafo = document.getElementById("error");
        errorParrafo.className = "";
        errorParrafo.innerHTML = "";
        btnAgregar.disabled = false;
    }
}
//Función que valida que el RFC, cuanta con exactamenre 13 caracteres
function validarCampoRfc(){
    if(rfcCliente.value.length != 13){
        var errorParrafo = document.getElementById("error");
        errorParrafo.className = "error";
        errorParrafo.innerHTML = "*Error: El RFC, debe tener 13 caracteres en total; ";
        btnAgregar.disabled = true;
    }else{
        var errorParrafo = document.getElementById("error");
        errorParrafo.className = "";
        errorParrafo.innerHTML = "";
        btnAgregar.disabled = false;
    }
}
//Asignación de los eventos para cada uno de los elementos del DOM, para realizar sus respectivas funciones
nombreClienteInput.addEventListener("input",validarInputNombre);
apellidoPaClienteInput.addEventListener("input",validarInputApellidoPa);
apellidoMaClienteInput.addEventListener("input",validarInputApellidoMa)
nacimientoClienteInput.addEventListener("input",actualizarCurp)
curpCliente.addEventListener("input",validarCampoCurp);
rfcCliente.addEventListener("input",validarCampoRfc)
formCliente.addEventListener("submit",validarForm);