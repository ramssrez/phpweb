/*
var imganes = [
    '../../../cine-ciudad-puebla/assets/images/12horas.jpeg',
    '../../../cine-ciudad-puebla/assets/images/sherk.jpeg',
    '../../../cine-ciudad-puebla/assets/images/sherk2.jpeg',
    '../../../cine-ciudad-puebla/assets/images/sherk3.jpeg',
    '../../../cine-ciudad-puebla/assets/images/elhijodechucky.jpeg'
];
*/
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
//document.imagen.src = imganes[0];
document.imagen.src = imagenesTotal[0].url;
document.getElementById("textoPel").innerText = imagenesTotal[0].nombre + " - Clasificación: " +imagenesTotal[0].clasificacion;
/*
var cont = 0;
function carrusel(contenedor){
    contenedor.addEventListener('click', e=>{
        let atras = contenedor.querySelector('.atras');
        let adelante = contenedor.querySelector('.adelante');
        let imagen = contenedor.querySelector('img');
        let tgt = e.target;
        if(tgt === atras){
            if(cont>0){
                imagen.src = imganes[cont-1];
                cont--;
            }else{
                imagen.src = imganes[imganes.length -1];
                cont = imganes.length -1;
            }
        }else if(tgt === adelante){
            if(cont < imganes.length-1){
                imagen.src = imganes[cont + 1];
                cont++;
            }else{
                imagen.src = imganes[0];
                cont = 0;
            }
        }
    });
}
document.addEventListener("DOMContentLoaded",()=>{
    let contenedor = document.querySelector('.contenedor-carrusel');
    carrusel(contenedor);
});
*/
var sliderDer = document.querySelector(".der");
var sliderIzq = document.querySelector(".izq");
var contadorDos = 0;
function moverDerecha(){
    contadorDos++;
    if(contadorDos > imagenesTotal.length - 1){
        contadorDos = 0;
    }
    //document.imagen.src = imganes[contadorDos];
    document.imagen.src = imagenesTotal[contadorDos].url;
    document.getElementById("textoPel").innerText = imagenesTotal[contadorDos].nombre + " - Clasificación: " +imagenesTotal[contadorDos].clasificacion;
    //document.getElementById("textoPel").innerText = "Derecha " + contadorDos;
}
function moverIzquierda(){
    contadorDos--;
    if(contadorDos < 0){
        contadorDos = imagenesTotal.length -1;
    }
    //document.imagen.src = imganes[contadorDos];
    //document.getElementById("textoPel").innerText = "Izquierda " + contadorDos;
    document.imagen.src = imagenesTotal[contadorDos].url;
    document.getElementById("textoPel").innerText = imagenesTotal[contadorDos].nombre + " - Clasificación: " +imagenesTotal[contadorDos].clasificacion;
}
sliderDer.addEventListener("click",moverDerecha);
sliderIzq.addEventListener("click",moverIzquierda);