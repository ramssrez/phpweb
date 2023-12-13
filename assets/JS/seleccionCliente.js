const expresiones = {
	campoTexto: /^[a-zA-Z\sñáéíóúÁÉÍÓÚ]+$/,// Solo palabras con acentos
}
var idCliente = document.getElementById("id-cliente");
var tipoSuscripcionInput = document.getElementById("tipo-suscripcion");
var numeroTarjetaInput = document.getElementById("numero-tarjeta");
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
function selecionarCliente(id){
    idCliente.value = id;
}
tipoSuscripcionInput.addEventListener("input",validarInputTipoSuscripcion);
numeroTarjetaInput.addEventListener("input", validarInputNumeroTarjeta);
tipoSuscripcionInput.addEventListener("blur", tipoSuscripcionOk);