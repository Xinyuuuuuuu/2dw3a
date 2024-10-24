// Obtener la ruta actual de la página sin los parámetros de búsqueda ni fragmentos
const currentPath = window.location.pathname.split("/").pop();

// Seleccionar todos los enlaces de la navegación
const navLinks = document.querySelectorAll('.color');

// Comparar cada enlace con la URL actual y activar el correcto
navLinks.forEach(link => {
    const hrefPath = link.getAttribute('href').split("/").pop();  // Extraer solo el nombre del archivo del enlace
    
    // Si la URL del enlace coincide con la ruta actual, añadir la clase 'active'
    if (hrefPath === currentPath) {
        link.classList.add('active');  // Añadir la clase 'active' al enlace correcto
    }
});
