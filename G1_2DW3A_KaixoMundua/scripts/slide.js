let imgObject = [
  "img/galeria/Galeria12.jpg",
  "img/galeria/Galeria24.jpg",
  "img/galeria/Galeria19.jpg",
  "img/galeria/Galeria08.jpg",
  "img/galeria/Galeria17.jpg",
  "img/galeria/Galeria20.jpg",
  "img/galeria/Galeria02.jpg",
  "img/galeria/Galeria07.jpg",
  "img/galeria/Galeria10.jpg",
  "img/galeria/Galeria12.jpg",
  "img/galeria/Galeria15.jpg",
];

let mainImg = 0; // Imagen principal (actual)
let prevImg = imgObject.length - 1; // Imagen anterior (la última al principio)
let nextImg = 1; // Imagen siguiente (la segunda al principio)

// Función para cargar las imágenes en la galería
function loadGallery() {
  let mainView = document.getElementById("mainView");
  let leftView = document.getElementById("leftView");
  let rightView = document.getElementById("rightView");
  let linkTag = document.getElementById("linkTag");
 
  // Cargar las imágenes
  mainView.style.backgroundImage = "url(" + imgObject[mainImg] + ")";
  leftView.style.backgroundImage = "url(" + imgObject[prevImg] + ")";
  rightView.style.backgroundImage = "url(" + imgObject[nextImg] + ")";
  linkTag.href = imgObject[mainImg];
}

// Función para inicializar la galería
function initializeGallery() {
  loadGallery(); // Cargar la galería inicial
}

// Funciones para avanzar y retroceder en las imágenes
function scrollRight() {
  prevImg = mainImg;
  mainImg = nextImg;
  nextImg = (nextImg + 1) % imgObject.length; // Ciclo a través de las imágenes
  loadGallery();
}

function scrollLeft() {
  nextImg = mainImg;
  mainImg = prevImg;
  prevImg = (prevImg - 1 + imgObject.length) % imgObject.length; // Ciclo a través de las imágenes
  loadGallery();
}

// Añadir eventos a los botones y las vistas
document.getElementById("navRight").addEventListener("click", scrollRight);
document.getElementById("navLeft").addEventListener("click", scrollLeft);
document.getElementById("rightView").addEventListener("click", scrollRight);
document.getElementById("leftView").addEventListener("click", scrollLeft);
document.addEventListener('keyup', function(e) {
  if (e.keyCode === 37) {
    scrollLeft();
  } else if (e.keyCode === 39) {
    scrollRight();
  }
});

// Inicializar la galería al cargar la página
initializeGallery();