var imganes = [
    '../../../cine-ciudad-puebla/assets/images/12horas.jpeg',
    '../../../cine-ciudad-puebla/assets/images/sherk.jpeg',
    '../../../cine-ciudad-puebla/assets/images/sherk2.jpeg',
    '../../../cine-ciudad-puebla/assets/images/sherk3.jpeg',
    '../../../cine-ciudad-puebla/assets/images/elhijodechucky.jpeg'
];
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