/*
*aqui se declaran esta vaariables que seas los bontones con su id
*/
var mario = document.getElementById("mario")
var arriba =document.getElementById("arriba-btn")
var abajo =document.getElementById("abajo-btn")
var izquierda =document.getElementById("izquierda-btn")
var derecha =document.getElementById("derecha-btn")
var saltar =document.getElementById("saltar-btn")
var intervalo =1200;
var imagen = new Image();
imagen.src = "../img/marioo.png";
/*
* aqu vamos a poner sus funciones de cada accion 
*/
derecha.addEventListener("mousedown",right)
izquierda.addEventListener("mousedown",moveLeft)
document.addEventListener("keydown",flecha)
arriba.addEventListener("click",subir)
abajo.addEventListener("click",agacharse)
arriba.addEventListener("doble_click",saltar)
var agacharse = document.getElementById("agacharse-btn");
/*
* aqui haremos la magia
*/
function right()
{
    mario.style.transform = "scaleX(+1)";
    var posicion= parseInt(mario.style.left||0);
    var avanzar =posicion+16;
    if(avanzar<=detenter2){
        mario.style.left=avanzar+"px";
    }
}


function moveLeft() {
  mario.style.transform = "scaleX(-1)"; // Voltea la imagen horizontalmente
var posicion = parseInt(mario.style.left || 0);
var retroceder = posicion - 16;
mario.style.left = retroceder + "px";
}
arriba.addEventListener("click", function() {
  clearInterval(intervalo); // Detiene cualquier intervalo activo para evitar duplicaciones

intervalo = setInterval(function() {
    var posicion = parseInt(mario.style.top) || 0;
    var nuevaPosicion = posicion - 1; // Ajusta la velocidad de desplazamiento

    mario.style.top = nuevaPosicion + "px";

    if (nuevaPosicion <= -350) { // Ajusta la posición máxima a la que subirá el elemento
      clearInterval(intervalo); // Detiene el intervalo cuando se alcanza la posición máxima
    }
  }, 1); // Ajusta el intervalo de tiempo según la fluidez del movimiento
});

abajo.addEventListener("click", function() {
  clearInterval(intervalo); // Detiene cualquier intervalo activo para evitar duplicaciones

  intervalo = setInterval(function() {
    var posicion = parseInt(mario.style.top) || 0;
    var nuevaPosicion = posicion + 1; // Ajusta la velocidad de desplazamiento

    mario.style.top = nuevaPosicion + "px";

    if (nuevaPosicion >= 0) { // Ajusta la posición máxima a la que bajará el elemento
      clearInterval(intervalo); // Detiene el intervalo cuando se alcanza la posición máxima
    }
  }, 1); // Ajusta el intervalo de tiempo según la fluidez del movimiento
});


agacharse.addEventListener("click", function() {
mario.style.animationName = "agacharse";
setTimeout(function() {
    mario.style.animationName = "";
  }, 200); // Ajusta la duración de la animación en milisegundos
});