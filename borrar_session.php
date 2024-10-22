<?php
session_start();

session_destroy();
// Redirige a otra página después de borrar la variable
header("Location: index.php"); 
exit();
?>
