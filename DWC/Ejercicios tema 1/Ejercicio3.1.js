function calcularFactorial() {
    let numero = parseInt(document.getElementById("numero").value);
    let resultado = 1;

    if (isNaN(numero) || numero < 0) {
        document.getElementById("resultado").innerHTML = "Por favor, introduce un número válido.";
        return;
    }

    for (let i = 1; i <= numero; i++) {
        resultado *= i;
    }

    document.getElementById("resultado").innerHTML = `El factorial de ${numero} es: ${resultado}`;
}
