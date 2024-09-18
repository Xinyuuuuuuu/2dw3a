function repetirTexto() {
    let texto = document.getElementById("texto").value;
    let repeticiones = parseInt(document.getElementById("repeticiones").value);
    let resultado = "";
    let contador = 0;

    while (contador < repeticiones) {
        resultado += texto + "<br>";
        contador++;
    }

    document.getElementById("resultado").innerHTML = resultado;
}
