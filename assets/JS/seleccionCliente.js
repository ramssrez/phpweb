const expresiones = {
	campoTexto : /^[a-zA-Z\sñáéíóúÁÉÍÓÚ]+$/,// Solo palabras con acentos
    campoTextoSinAcento : /^[a-zA-Z]+$/,//Texto sin acentos
    campoSoloNumero : /\D/g,//Solo números
    campoNumeroWithDecimal :/[^\d.]/g //Solo números con punto decimal
}
//Declaración de variables del DOM que se van a modificar conforme el flujo del sitio web
var idCliente = document.getElementById("id-cliente");
var tipoSuscripcionInput = document.getElementById("tipo-suscripcion");
var numeroTarjetaInput = document.getElementById("numero-tarjeta");
var bancoInput = document.getElementById("banco-tarjeta");
var precioInput = document.getElementById("precio-pagar");
var mesFechaTarjetaInput = document.getElementById("mes-fecha-tarjeta");
var yearFechaTarjetaInput = document.getElementById("year-fecha-tarjeta");
var fechaSuscripcionInput = document.getElementById("fecha-suscripcion");
var btnAgregar = document.getElementById("btn-agregar");
btnAgregar.disabled = true;
//Variable para la fecha del sistema
var fechaActual = new Date();
// Extraer componentes de la fecha
var dia = fechaActual.getDate();
var mes = fechaActual.getMonth() + 1; // Los meses comienzan desde 0
var anio = fechaActual.getFullYear();
// Formatear la fecha como "DD/MM/AAAA"
var fechaFormateada = `${anio}-${mes.toString().padStart(2, '0')}-${dia.toString().padStart(2, '0')}`;
fechaSuscripcionInput.value = fechaFormateada;

//Función que valida el tipo de suscripción y solo acepte letras
function validarInputTipoSuscripcion(){    
   if (!expresiones.campoTexto.test(tipoSuscripcionInput.value)) {
        mensajeError("Campo tipo");
        return false;
    }
    else{
        limpiarError();
        return true;
    } 
}
//Función que valida el numero de tarjeta de credito
function validarInputNumeroTarjeta(){
    numeroTarjetaInput.value = numeroTarjetaInput.value.replace(expresiones.campoSoloNumero,'');
    if(numeroTarjetaInput.value.length !== 16 || numeroTarjetaInput.value < 0){
        var errorParrafo = document.getElementById("error");
        errorParrafo.className = "error";
        errorParrafo.innerHTML = "*Error: El número de tarjeta, debe tener 16 números en total y ser positivo; ";
       return false;
    }else{
        limpiarError();
        return true;
    }
}
//Función que valida el precio
function validarInputPrecio(){
    precioInput.value = precioInput.value.replace(expresiones.campoNumeroWithDecimal,'');
    if (precioInput.value < 0) {
        var errorParrafo = document.getElementById("error");
        errorParrafo.className = "error";
        errorParrafo.innerHTML = "*Error: El precio, debe ser positivo; ";
       return false;
    }
    else{
        limpiarError();
        return true;
    }
}
//Función que calida el mes de la tarjeta 
function validarMesFechaInput(){
    mesFechaTarjetaInput.value = mesFechaTarjetaInput.value.replace(expresiones.campoSoloNumero,'');
    if (mesFechaTarjetaInput.value > 13 || mesFechaTarjetaInput.value < 0) {
        var errorParrafo = document.getElementById("error");
        errorParrafo.className = "error";
        errorParrafo.innerHTML = "*Error: El rango de meses debe estar entre 01 y 12; ";
       return false;
    }else if(mesFechaTarjetaInput.value.length < 2){
        var errorParrafo = document.getElementById("error");
        errorParrafo.className = "error";
        errorParrafo.innerHTML = "*Error: El campo debe tener dos caracteres; ";
        return false;
    }else{
        limpiarError();
        return true;
    } 
}
//Función que valida el año del input
function validarYearFechaInput(){
    yearFechaTarjetaInput.value = yearFechaTarjetaInput.value.replace(expresiones.campoSoloNumero,'');
    if(yearFechaTarjetaInput.value < 23){
        var errorParrafo = document.getElementById("error");
        errorParrafo.className = "error";
        errorParrafo.innerHTML = "*Error: La fecha dede ser mayor a 2023; ";
        return false;
    }else if(yearFechaTarjetaInput.value.length < 2){
        var errorParrafo = document.getElementById("error");
        errorParrafo.className = "error";
        errorParrafo.innerHTML = "*Error: El campo debe tener dos caracteres; ";
        return false;
    }else{
        limpiarError();
        return true;
    } 
}
//Función que valida el campo del banco
function validarInputBanco(){
    if (!expresiones.campoTextoSinAcento.test(bancoInput.value)) {
        mensajeErrorSinAcento("Campo banco");
        return false;
    }
    else{
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
//Función que manda un error en el sitio web, para el caso de que no se acepten caracteres especiales en los campos, ni núemeros, ni palabras con acentos
function mensajeErrorSinAcento(campo){
    var errorParrafo = document.getElementById("error");
    errorParrafo.className = "error";
    errorParrafo.innerHTML = "*Error: El campo no debe de contener números, ni caracteres especiales, ni acentos; "+ campo;
}
//Función que limpia el mensaje de error anteriormente generado
function limpiarError(){
    var errorParrafo = document.getElementById("error");
    errorParrafo.className = "";
    errorParrafo.innerHTML = "";
}
//Función que verifica si se ha escrito la palabra Anual o Mensual el el campo de texto
function tipoSuscripcionOk(){
    if(tipoSuscripcionInput.value !== 'Anual' && tipoSuscripcionInput.value !== 'Mensual'){
        var errorParrafo = document.getElementById("error");
        errorParrafo.className = "error";
        errorParrafo.innerHTML = "*Error: Solo se permite el el campo de tipo; Anual o Mensual.";
        return false;
    }else{
        return true;
    }
}
//Función que asigna el id del cliente, cuando se ha seleccioando, además de habilitar el boton
function selecionarCliente(id){
    if(validarInputTipoSuscripcion() && validarInputNumeroTarjeta() && validarInputPrecio() && validarMesFechaInput() && validarYearFechaInput() && validarInputBanco() && tipoSuscripcionOk()){
        btnAgregar.disabled = false;
        idCliente.value = id;
    }else{
        idCliente.value = '';
        var errorParrafo = document.getElementById("error");
        errorParrafo.className = "error";
        errorParrafo.innerHTML = "*Error: Hay campos vacios en el formulario; ";
    }
}
//Asignación de los eventos para cada uno de los elementos del DOM, para realizar sus respectivas funciones
tipoSuscripcionInput.addEventListener("input",validarInputTipoSuscripcion);
numeroTarjetaInput.addEventListener("input", validarInputNumeroTarjeta);
bancoInput.addEventListener("input",validarInputBanco);
precioInput.addEventListener("input",validarInputPrecio);
mesFechaTarjetaInput.addEventListener("input",validarMesFechaInput);
yearFechaTarjetaInput.addEventListener("input",validarYearFechaInput);
tipoSuscripcionInput.addEventListener("blur", tipoSuscripcionOk);
