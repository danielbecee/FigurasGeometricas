<?php
session_start();

if (isset($_POST['tipoFigura'])) {
    $_SESSION['tipoFigura'] = $_POST['tipoFigura'];
    $tipoFigura = $_SESSION['tipoFigura'];
} else {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Entrada de Costats</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="./script.js"></script>
</head>
<body>
    <div class="container mt-5">
        <h1>Introduce los lados</h1>
        <form action="result.php" method="post" onsubmit="return validarFormularioInput()">
            <div class="form-group">
                <label for="lado1">Lado 1:</label>
                <input type="number" name="lado1" id="lado1" class="form-control"  value="<?= isset($_SESSION['lado1']) ? $_SESSION['lado1'] : '' ?>" >
                <p id="error-lado1" class="text-danger"></p> <!-- Mensaje de error para Lado 1 -->
            </div>
            <?php if ($tipoFigura == 'Rectangulo'): ?>
                <div class="form-group">
                    <label for="lado2">Lado 2:</label>
                    <input type="number" name="lado2" id="lado2" class="form-control"  value="<?= isset($_SESSION['lado2']) ? $_SESSION['lado2'] : '' ?>" >
                    <p id="error-lado2" class="text-danger"></p> <!-- Mensaje de error para Lado 1 -->

                </div>
            <?php elseif ($tipoFigura == 'Triangulo'): ?>
                <div class="form-group">
                    <label for="lado2">Lado 2:</label>
                    <input type="number" name="lado2" id="lado2" class="form-control"  value="<?= isset($_SESSION['lado2']) ? $_SESSION['lado2'] : '' ?>" >
                    <p id="error-lado2" class="text-danger"></p> <!-- Mensaje de error para Lado 1 -->

                </div>
                <div class="form-group">
                    <label for="lado3">Lado 3:</label>
                    <input type="number" name="lado3" id="lado3" class="form-control"  value="<?= isset($_SESSION['lado3']) ? $_SESSION['lado3'] : '' ?>" >
                    <p id="error-lado3" class="text-danger"></p> <!-- Mensaje de error para Lado 1 -->
                </div>
            
            <?php endif; ?>

            <input type="hidden" name="tipoFigura" value="<?php echo $tipoFigura; ?>">
            <button type="submit" class="btn btn-primary">Calcular</button>
        </form>
    </div>
</body>
</html>
