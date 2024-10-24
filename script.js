
function validarFormularioInput() {
    // Inicializamos la variable de control
    let comprobarInput = true;

    let input = document.getElementById("lado1");
    let lado1 = document.getElementById("lado1").value;
    // // Validación del Lado 1
    let errorLado1 = document.getElementById("error-lado1");

    if (lado1 === "" || lado1 <= 0) {
        input.style.border = "1px solid red";
        errorLado1.innerHTML = "El lado 1 es obligatorio y debe ser un número positivo.";
        comprobarInput = false;
    } else {
        input.style.border = "";
        errorLado1.innerHTML = "";
    }

    let tipoFigura = document.getElementById("tipoFigura").value;

    if (tipoFigura === "Triangulo" || tipoFigura === "Rectangulo") {

        let input2 = document.getElementById("lado2");
        let lado2 = document.getElementById("lado2").value;
        let errorLado2 = document.getElementById("error-lado2");
        if (lado2 === "" || lado2 <= 0) {
            input2.style.border = "1px solid red";
            errorLado2.innerHTML = "El lado 2 es obligatorio y debe ser un número positivo.";
            comprobarInput = false;
        } else {
            input2.style.border = "";
            errorLado2.innerHTML = "";
        }
    }


    if (tipoFigura === "Triangulo") {

        let input3 = document.getElementById("lado3");

        let lado3 = document.getElementById("lado3").value;
        let errorLado3 = document.getElementById("error-lado3");
        if (lado3 === "" || lado3 <= 0) {
            input3.style.border = "1px solid red";
            errorLado3.innerHTML = "El lado 3 es obligatorio y debe ser un número positivo.";
            comprobarInput = false;
        } else {
            input3.style.border = "";
            errorLado3.innerHTML = "";
        }
    }
    return comprobarInput;

}

function validarFormularioIndex() {
    // Obtiene el elemento del select
    const tipoFigura = document.getElementById("tipoFigura");
    const errorFigura = document.getElementById("error-tipoFigura");


    errorFigura.innerHTML = ""; // Limpia el mensaje de error

    // Validación del campo select
    if (tipoFigura.value === "") {
        errorFigura.innerHTML = "Por favor, selecciona una figura.";
        return false;
    }
    return true;
}

