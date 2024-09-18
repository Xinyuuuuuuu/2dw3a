function calcularMultiplos() {
    let multiplos = [];
    let suma = 0;

    for (let i = 11; i < 3000; i += 11) {
        multiplos.push(i);
        suma += i;
    }

    document.getElementById("resultado").innerHTML = multiplos.join(', ');

    document.getElementById("sumaTotal").innerHTML = suma;
}
