console.log("Si se vinculo el JS");
const expresiones = {
	nombreApellidos: /^[a-zA-Z\sñáéíóúÁÉÍÓÚ]+$/,// Solo palabras con acentos
}
/*
	nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
	password: /^.{4,12}$/, // 4 a 12 digitos.
	correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
	telefono: /^\d{7,14}$/ // 7 a 14 numeros.
*/
var nombreClienteInput = document.getElementById("name-cliente");
var apellidoPaClienteInput = document.getElementById("apellido-pa-cliente");
var apellidoMaClienteInput = document.getElementById("apellido-ma-cliente");
var nacimientoClienteInput = document.getElementById("nacimiento-cliente"); 
var formCliente = document.getElementById("formCliente");
var sexoCliente = document.getElementById("sexoCliente");
var estadoCliente = document.getElementById("estadoCliente");
var curpCliente =  document.getElementById("curp-cliente");
var rfcCliente = document.getElementById("rfc-cliente");
var btnAgregar = document.getElementById("btn-agregar");
btnAgregar.disabled = true;

function actualizarCurp(){
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
        var errorParrafo = document.getElementById("error");
        errorParrafo.className = "error";
        errorParrafo.innerHTML = "*Error: Se tienen campos vacios, aún no se ha generado el CURP";
        return false;
    }
}
function validarInputNombre(){
    if (!expresiones.nombreApellidos.test(nombreClienteInput.value)) {
        mensajeError("Campo nombre");
        return false;
    }else{
        limpiarError();
        return true;
    }  
}
function validarInputApellidoPa(){
    if (!expresiones.nombreApellidos.test(apellidoPaClienteInput.value)) {
        mensajeError("Campo apellido paterno");
        return false;
    }else{
        limpiarError();
        return true;
    }   
}
function validarInputApellidoMa(){
    if (!expresiones.nombreApellidos.test(apellidoMaClienteInput.value)) {
        mensajeError("Campo apellido materno");
        return false;
    }else{
        limpiarError();
        return true;
    }   
}
function mensajeError(campo){
    var errorParrafo = document.getElementById("error");
    errorParrafo.className = "error";
    errorParrafo.innerHTML = "*Error: El campo no debe de contener números ni caracteres especiales; "+ campo;
}
function limpiarError(){
    var errorParrafo = document.getElementById("error");
    errorParrafo.className = "";
    errorParrafo.innerHTML = "";
}
function prueba(e){
    if(validarInputNombre() && validarInputApellidoMa() && validarInputApellidoPa() && actualizarCurp()){
        console.log("Si estan llenos");
        e.preventDefault();
    }else{
        console.log("no estan llenos");
        e.preventDefault();
    }
}
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
function validarCampoRfc(){
    if(curpCliente.value.length != 13){
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
nombreClienteInput.addEventListener("input",validarInputNombre);
apellidoPaClienteInput.addEventListener("input",validarInputApellidoPa);
apellidoMaClienteInput.addEventListener("input",validarInputApellidoMa)
nacimientoClienteInput.addEventListener("input",actualizarCurp)
curpCliente.addEventListener("input",validarCampoCurp);
rfcCliente.addEventListener("input",validarCampoRfc)
formCliente.addEventListener("submit",prueba);