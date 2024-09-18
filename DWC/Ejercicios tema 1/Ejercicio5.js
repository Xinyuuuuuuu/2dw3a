let numeroSecreto = Math.floor(Math.random() * 10) + 1; // Número aleatorio entre 1 y 10
let intentos = 0;
let maxIntentos = 5;

function adivinarNumero() {
    let numeroUsuario = parseInt(document.getElementById("numero").value);
    let resultado = document.getElementById("resultado");

    // Verifica si el número ingresado es válido
    if (isNaN(numeroUsuario) || numeroUsuario < 1 || numeroUsuario > 10) {
        resultado.innerHTML = "Por favor, introduce un número válido entre 1 y 10.";
        return;
    }

    intentos++;

    if (numeroUsuario === numeroSecreto) {
        resultado.innerHTML = `<strong>¡Enhorabuena! Has adivinado el número secreto ${numeroSecreto}.</strong>`;
    } else if (intentos >= maxIntentos) {
        resultado.innerHTML = `<strong>Lo siento, no has adivinado el número secreto. Era ${numeroSecreto}.</strong>`;
    } else {
        resultado.innerHTML = `Intento ${intentos} fallido. Te quedan ${maxIntentos - intentos} intentos.`;
    }

    // Desactiva el botón si se agotan los intentos o se adivina el número
    if (intentos >= maxIntentos || numeroUsuario === numeroSecreto) {
        document.querySelector('button').disabled = true;
    }
}
