var imagenesTotal = [
    {
        "url":"../../../cine-ciudad-puebla/assets/images/12horas.jpeg",
        "nombre": "12 horas para sobrevivir",
        "clasificacion": "C"
    },
    {
        "url": "../../../cine-ciudad-puebla/assets/images/sherk.jpeg",
        "nombre": "Sherk",
        "clasificacion": "A"
    },
    {
        "url": "../../../cine-ciudad-puebla/assets/images/sherk2.jpeg",
        "nombre": "Sherk 2",
        "clasificacion": "A"
    },
    {
        "url": "../../../cine-ciudad-puebla/assets/images/sherk3.jpeg",
        "nombre": "Sherk 3",
        "clasificacion": "A"
    },
    {
        "url": "../../../cine-ciudad-puebla/assets/images/elhijodechucky.jpeg",
        "nombre": "El hijo de chucky",
        "clasificacion": "B"
    }
]
document.imagen.src = imagenesTotal[0].url;
document.getElementById("textoPel").innerText = imagenesTotal[0].nombre + " - Clasificación: " +imagenesTotal[0].clasificacion;
var sliderDer = document.querySelector(".der");
var sliderIzq = document.querySelector(".izq");
var contadorDos = 0;
function moverDerecha(){
    contadorDos++;
    if(contadorDos > imagenesTotal.length - 1){
        contadorDos = 0;
    }
    document.imagen.src = imagenesTotal[contadorDos].url;
    document.getElementById("textoPel").innerText = imagenesTotal[contadorDos].nombre + " - Clasificación: " +imagenesTotal[contadorDos].clasificacion;
}
function moverIzquierda(){
    contadorDos--;
    if(contadorDos < 0){
        contadorDos = imagenesTotal.length -1;
    }
    document.imagen.src = imagenesTotal[contadorDos].url;
    document.getElementById("textoPel").innerText = imagenesTotal[contadorDos].nombre + " - Clasificación: " +imagenesTotal[contadorDos].clasificacion;
}
sliderDer.addEventListener("click",moverDerecha);
sliderIzq.addEventListener("click",moverIzquierda);