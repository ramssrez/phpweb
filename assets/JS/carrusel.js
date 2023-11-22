//Variable que contiene las direcciones para el host en la pagina web
/*
var imagenesTotal = [
    {
        "url":"../../../assets/images/12horas.jpeg",
        "nombre": "12 horas para sobrevivir",
        "clasificacion": "C",
        "director": "Director 12 horas",
        "actores": ["Actor 1", "Actor 2"]
    },
    {
        "url": "../../../assets/images/sherk.jpeg",
        "nombre": "Sherk",
        "clasificacion": "A",
        "director": "Director Sherk",
        "actores": ["Actor 3", "Actor 4"]
    },
    {
        "url": "../../../assets/images/sherk2.jpeg",
        "nombre": "Sherk 2",
        "clasificacion": "A",
        "director": "Director Sherk 2",
        "actores": ["Actor 5", "Actor 6"]
    },
    {
        "url": "../../../assets/images/sherk3.jpeg",
        "nombre": "Sherk 3",
        "clasificacion": "A",
        "director": "Director Sherk 3",
        "actores": ["Actor 7", "Actor 8"]
    },
    {
        "url": "../../../assets/images/elhijodechucky.jpeg",
        "nombre": "El hijo de chucky",
        "clasificacion": "B",
        "director": "Director El hijo de chucky",
        "actores": ["Actor 9", "Actor 10"]
    }
]
*/
//Arreglo que contiene la información de las paliculas
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
//Variables para poder recuperar cada una de los elementos del html
var sliderDer = document.querySelector(".der");
var sliderIzq = document.querySelector(".izq");
var imagen = document.getElementById("imagen");
var informacion = document.getElementById("informacion");
var contenedor = document.getElementById("contenedorPeli");
var contadorDos = 0;
//Declaración del evento onload, esto para que las imagenes se cargen cuando se termina de cargar la pagina
document.body.onload = function() {
    //Cuando se cargue la pagina, se le asigna el primer valor al arreglo tanto para la imagen como el titulo y clasificación
    var imagen = document.getElementById("imagen");
    var nombre = document.getElementById("textoPel");
    imagen.src = imagenesTotal[0].url;
    nombre.innerHTML =  imagenesTotal[0].nombre + " - Clasificación: " +imagenesTotal[0].clasificacion;
}
//Función que realiza el movimiento a la derecha del carrusel
function moverDerecha(){
    //Limpiado de la información del director y actores en la palicula
    informacion.innerHTML = "";
    //Contador para conocer la posición del arrlego
    contadorDos++;
    //Sentencia if para que se asegine el valor del contador, cuando se ha terminado los elementos del arreglo
    if(contadorDos > imagenesTotal.length - 1){
        contadorDos = 0;
    }
    //Recuperación del elemento del html con su id
    var imagen = document.getElementById("imagen");
    //Asignación de la imagen correspondiente del arreglo
    imagen.src = imagenesTotal[contadorDos].url;
    document.getElementById("textoPel").innerText = imagenesTotal[contadorDos].nombre + " - Clasificación: " +imagenesTotal[contadorDos].clasificacion;
}
//Función que realiza el movimiento a la izquierda del carrusel
function moverIzquierda(){
    //Limpiado de la información del director y actores en la palicula
    informacion.innerHTML = "";
    //Contador para conocer la posición del arrlego
    contadorDos--;
    //Sentencia if para que se asegine el valor del contador sea menor a cero
    if(contadorDos < 0){
        contadorDos = imagenesTotal.length -1;
    }
    //Recuperación del elemento del html con su id
    var imagen = document.getElementById("imagen")
    //Asignación de la imagen correspondiente del arreglo;
    imagen.src = imagenesTotal[contadorDos].url;
    document.getElementById("textoPel").innerText = imagenesTotal[contadorDos].nombre + " - Clasificación: " +imagenesTotal[contadorDos].clasificacion;
}
//Función que aumenta el tamaño de la imagen al doble
function aumentar(){
    imagen.style.transform = "scale(2)";
}
//Función que disminuye el tamaño de la imagen, como estaba originalmente
function disminuir(){
    imagen.style.transform = "scale(1)";
}
//Función que permite mostrar la información del director, como los actores de la pelicula
function imagenClic(){
    informacion.innerHTML = "Director: " + imagenesTotal[contadorDos].director + "<br> Actores principales: " +imagenesTotal[contadorDos].actores.join(", "); 
}
//Asignación de los eventos para los diferentes elemetos, como click, mouseover y mouseout
sliderDer.addEventListener("click",moverDerecha);
sliderIzq.addEventListener("click",moverIzquierda);
imagen.addEventListener("mouseover",aumentar);
imagen.addEventListener("mouseout",disminuir);
imagen.addEventListener("click",imagenClic);
