var imagenesTotal = [
    {
        "url":"../../../cine-ciudad-puebla/assets/images/12horas.jpeg",
        "nombre": "12 horas para sobrevivir",
        "clasificacion": "C",
        "director": "Director 12 horas",
        "actores": ["Actor 1", "Actor 2"]
    },
    {
        "url": "../../../cine-ciudad-puebla/assets/images/sherk.jpeg",
        "nombre": "Sherk",
        "clasificacion": "A",
        "director": "Director Sherk",
        "actores": ["Actor 3", "Actor 4"]
    },
    {
        "url": "../../../cine-ciudad-puebla/assets/images/sherk2.jpeg",
        "nombre": "Sherk 2",
        "clasificacion": "A",
        "director": "Director Sherk 2",
        "actores": ["Actor 5", "Actor 6"]
    },
    {
        "url": "../../../cine-ciudad-puebla/assets/images/sherk3.jpeg",
        "nombre": "Sherk 3",
        "clasificacion": "A",
        "director": "Director Sherk 3",
        "actores": ["Actor 7", "Actor 8"]
    },
    {
        "url": "../../../cine-ciudad-puebla/assets/images/elhijodechucky.jpeg",
        "nombre": "El hijo de chucky",
        "clasificacion": "B",
        "director": "Director El hijo de chucky",
        "actores": ["Actor 9", "Actor 10"]
    }
]
var sliderDer = document.querySelector(".der");
var sliderIzq = document.querySelector(".izq");
var imagen = document.getElementById("imagen");
var informacion = document.getElementById("informacion");
var contenedor = document.getElementById("contenedorPeli");
var contadorDos = 0;
document.body.onload = function() {
    var imagen = document.getElementById("imagen");
    imagen.src = imagenesTotal[0].url;
    document.getElementById("textoPel").innerText = imagenesTotal[0].nombre + " - Clasificación: " +imagenesTotal[0].clasificacion;
}
function moverDerecha(){
    informacion.innerHTML = "";
    contadorDos++;
    if(contadorDos > imagenesTotal.length - 1){
        contadorDos = 0;
    }
    var imagen = document.getElementById("imagen");
    imagen.src = imagenesTotal[contadorDos].url;
    document.getElementById("textoPel").innerText = imagenesTotal[contadorDos].nombre + " - Clasificación: " +imagenesTotal[contadorDos].clasificacion;
}
function moverIzquierda(){
    informacion.innerHTML = "";
    contadorDos--;
    if(contadorDos < 0){
        contadorDos = imagenesTotal.length -1;
    }
    var imagen = document.getElementById("imagen");
    imagen.src = imagenesTotal[contadorDos].url;
    document.getElementById("textoPel").innerText = imagenesTotal[contadorDos].nombre + " - Clasificación: " +imagenesTotal[contadorDos].clasificacion;
}
function aumentar(){
    imagen.style.transform = "scale(2)";
}
function disminuir(){
    imagen.style.transform = "scale(1)";
}
function imagenClic(){
    informacion.innerHTML = "Director: " + imagenesTotal[contadorDos].director + "<br> Actores principales: " +imagenesTotal[contadorDos].actores.join(", "); 
}
sliderDer.addEventListener("click",moverDerecha);
sliderIzq.addEventListener("click",moverIzquierda);
imagen.addEventListener("mouseover",aumentar);
imagen.addEventListener("mouseout",disminuir);
imagen.addEventListener("click",imagenClic);
