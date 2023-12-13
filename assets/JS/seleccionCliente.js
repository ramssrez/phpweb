const expresiones = {
	campoTexto : /^[a-zA-Z\sñáéíóúÁÉÍÓÚ]+$/,// Solo palabras con acentos
    campoTextoSinAcento : /^[a-zA-Z]+$/,
}
var idCliente = document.getElementById("id-cliente");
var tipoSuscripcionInput = document.getElementById("tipo-suscripcion");
var numeroTarjetaInput = document.getElementById("numero-tarjeta");
var bancoInput = document.getElementById("banco-tarjeta");

var btnAgregar = document.getElementById("btn-agregar");
btnAgregar.disabled = true;

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
function validarInputNumeroTarjeta(){
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
    console.log(tipoSuscripcionInput.value);
    if(tipoSuscripcionInput.value !== 'Anual' && tipoSuscripcionInput.value !== 'Mensual'){
        var errorParrafo = document.getElementById("error");
        errorParrafo.className = "error";
        errorParrafo.innerHTML = "*Error: Solo se permite el el campo de tipo; Anual o Mensual.";
        return false;
    }else{
        return true;
    }
}
//Función que asigna el id del cliente, cuando se ha seleccioando
function selecionarCliente(id){
    idCliente.value = id;
}
tipoSuscripcionInput.addEventListener("input",validarInputTipoSuscripcion);
numeroTarjetaInput.addEventListener("input", validarInputNumeroTarjeta);
bancoInput.addEventListener("input",validarInputBanco);
tipoSuscripcionInput.addEventListener("blur", tipoSuscripcionOk);