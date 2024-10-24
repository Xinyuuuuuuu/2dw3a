// Lista de tags disponibles
const availableTags = ['mamiferoak', 'hegaztiak', 'karraskariak', 'narrastiak', 'natura', 'intsektuak'];

const searchBar = document.getElementById('search-bar');
const suggestionsList = document.getElementById('suggestions-list');
const galleryItems = document.getElementsByClassName('gallery-item');

// Función para mostrar sugerencias
searchBar.addEventListener('input', function () {
    const input = this.value.toLowerCase();
    suggestionsList.innerHTML = '';

    if (input) {
        const filteredTags = availableTags.filter(tag => tag.startsWith(input));
        filteredTags.forEach(tag => {
            const suggestionItem = document.createElement('li');
            suggestionItem.textContent = tag;
            suggestionItem.addEventListener('click', function () {
                searchBar.value = tag;
                suggestionsList.innerHTML = '';
                searchBar.focus(); // Mantén el foco en el campo de búsqueda
            });
            suggestionsList.appendChild(suggestionItem);
        });
    }
});

// Función para ejecutar la búsqueda al presionar Enter
searchBar.addEventListener('keydown', function (event) {
    if (event.key === 'Enter') {
        event.preventDefault(); // Evita el comportamiento por defecto
        suggestionsList.innerHTML = '';
        mostrarPantallaCarga();

        setTimeout(() => {
            filtrarImagenes();
            ocultarPantallaCarga();
            searchBar.blur(); // Hace que el input pierda el foco al presionar Enter
        }, 500); // Simula un tiempo de carga
    }
});

// Función para filtrar las imágenes
function filtrarImagenes() {
    const input = searchBar.value.toLowerCase();

    for (let i = 0; i < galleryItems.length; i++) {
        const tags = galleryItems[i].getAttribute('data-tags').toLowerCase();
        if (tags.includes(input) || input === "") {
            galleryItems[i].style.display = "block";
        } else {
            galleryItems[i].style.display = "none";
        }
    }
}

// Funciones para mostrar y ocultar la pantalla de carga
function mostrarPantallaCarga() {
    const loadingScreen = document.createElement('div');
    loadingScreen.id = 'loading-screen';
    loadingScreen.innerHTML = '<div class="spinner"></div>';
    document.body.appendChild(loadingScreen);
}

function ocultarPantallaCarga() {
    const loadingScreen = document.getElementById('loading-screen');
    if (loadingScreen) {
        document.body.removeChild(loadingScreen);
    }
}
