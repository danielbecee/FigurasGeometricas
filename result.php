<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="borrar_session.php" method="post">
    <button type="submit" class="btn btn-danger">Borrar Variable de Sesión</button>
</form>

</body>
</html>

<?php
session_start();

if (!isset($_SESSION['tipoFigura'])) {
    header("Location: index.php");
    exit();
}

// incluimos las clases necesarias
include_once 'Classes/Circulo.php';
include_once 'Classes/Cuadrado.php';
include_once 'Classes/Rectangulo.php';
include_once 'Classes/Triangulo.php'; 
include_once 'Classes/FiguraGeometrica.php';


$tipoFigura = $_SESSION['tipoFigura'];

$_SESSION['lado1'] = $_POST['lado1'] ?? null; // Usa null si no existe lado1
$_SESSION['lado2'] = $_POST['lado2'] ?? null; // Usa null si no existe lado2
$_SESSION['lado3'] = $_POST['lado3'] ?? null; // Usa null si no existe lado3


switch ($_SESSION['tipoFigura']) {
    case 'Circulo':
        $circulo = new Circulo($_POST['lado1']);
        echo $circulo;
        break;
    case 'Cuadrado':
        $cuadrado = new Cuadrado($_SESSION['lado1']);
         echo $cuadrado;
        break;
    case 'Rectangulo':
        $rectangulo = new Rectangulo($_SESSION['lado1'], $_SESSION['lado2']);
        echo $rectangulo;
        break;
    case 'Triangulo':
        $triangulo = new Triangulo($_SESSION['lado1'], $_SESSION['lado2'], $_SESSION['lado3']);
        echo $triangulo;
        break;
    default:
        header("Location: index.php");
        exit();
}



?>
