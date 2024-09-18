
const preguntas = [
    { tema: "Geografía", pregunta: "¿Cuál es la capital de Francia?", respuesta: "paris" },
    { tema: "Arte", pregunta: "¿Quién pintó la Mona Lisa?", respuesta: "leonardo da vinci" },
    { tema: "Espectáculos", pregunta: "¿Cuál es la película más taquillera de la historia?", respuesta: "avatar" },
    { tema: "Historia", pregunta: "¿En qué año comenzó la Segunda Guerra Mundial?", respuesta: "1939" },
    { tema: "Ciencias", pregunta: "¿Cuál es el planeta más grande del sistema solar?", respuesta: "jupiter" },
    { tema: "Deportes", pregunta: "¿En qué deporte se utiliza una raqueta y una pelota?", respuesta: "tenis" }
];

let respuestasCorrectas = 0;
let respuestasIncorrectas = 0;

function preguntar(id) {
    const pregunta = preguntas[id - 1];
    
    // Crear un prompt que muestre la pregunta y permita al usuario escribir la respuesta
    const respuesta = prompt(`${pregunta.pregunta}\n\nEscribe tu respuesta:`).toLowerCase();

    if (!respuesta) {
        alert("No has ingresado ninguna respuesta.");
        return;
    }

    if (respuesta === pregunta.respuesta) {
        alert("¡Correcto!");
        iluminarQuesito(id, true); // Pasar true para acierto
        respuestasCorrectas++;     // Incrementar aciertos
    } else {
        alert("Incorrecto");
        iluminarQuesito(id, false); // Pasar false para fallo
        respuestasIncorrectas++;    // Incrementar fallos
    }

    deshabilitarRecuadro(id);
    verificarResultado();  // Verificar si se ha ganado o perdido
}

function iluminarQuesito(id, acierto) {g
    const quesito = document.getElementById(`quesito${id}`);
    if (acierto) {
        // Dejar el mismo color pero con opacidad 1 (100%)
        quesito.style.backgroundColor = getComputedStyle(quesito).backgroundColor.replace(/0\.5\)$/, "1)");
    } else {
        // Cambiar el color a gris opaco en caso de fallo
        quesito.style.backgroundColor = `rgba(128, 128, 128, 0.5)`; // Gris opaco
    }
}

function deshabilitarRecuadro(id) {
    const recuadro = document.getElementById(`recuadro${id}`);
    recuadro.classList.add("disabled");
    recuadro.style.backgroundColor = `rgba(192, 192, 192, 0.5)`; // Gris claro para deshabilitar
}

function verificarResultado() {
    // Si hay 4 respuestas correctas, el jugador gana
    if (respuestasCorrectas >= 4) {
        document.getElementById("resultado").innerText = "¡Has ganado!";
        alert("¡Has ganado el juego!");
        deshabilitarTodo();
    } 
    // Si hay 3 respuestas incorrectas, el jugador pierde
    else if (respuestasIncorrectas >= 3) {
        document.getElementById("resultado").innerText = "Has perdido...";
        alert("Has perdido el juego...");
        deshabilitarTodo();
    }
}

function deshabilitarTodo() {
    for (let i = 1; i <= 6; i++) {
        deshabilitarRecuadro(i);
    }
}
