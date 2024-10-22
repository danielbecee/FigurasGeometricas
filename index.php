<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ca">

<head>
    <meta charset="UTF-8">
    <title>Calculadora de Figuras Geometricas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="./script.js"></script>
</head>

<body>
    <div class="container mt-5">
        <h1>Calculadora de Figures Geometricas</h1>
        <form action="input.php" method="post" onsubmit="return validarFormularioIndex();">
            <div class="form-group">
                <label for="tipoFigura">Elige una figura:</label>
                <select name="tipoFigura" id="tipoFigura" class="form-control">
                    <option value="" disabled selected>Elige una opción</option>
                    <option value="Rectangulo" <?= isset($_SESSION['tipoFigura']) && $_SESSION['tipoFigura'] == 'Rectangulo' ? 'selected' : '' ?>>Rectangulo</option>
                    <option value="Triangulo" <?= isset($_SESSION['tipoFigura']) && $_SESSION['tipoFigura'] == 'Triangulo' ? 'selected' : '' ?>>Triangulo</option>
                    <option value="Cuadrado" <?= isset($_SESSION['tipoFigura']) && $_SESSION['tipoFigura'] == 'Cuadrado' ? 'selected' : '' ?>>Cuadrado</option>
                    <option value="Circulo" <?= isset($_SESSION['tipoFigura']) && $_SESSION['tipoFigura'] == 'Circulo' ? 'selected' : '' ?>>Circulo</option>
                </select>
                <p id="error-tipoFigura" class="text-danger"></p> <!-- Mensaje de error para el tipo de figura -->
            </div>
            <button type="submit" class="btn btn-primary">Continuar</button>
        </form>
    </div>
</body>

</html>