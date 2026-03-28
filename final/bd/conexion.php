<?php
$servidor   = "localhost";
$usuario    = "root";
$password   = "";
$basededatos= "base_datos";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    $conexion = new mysqli($servidor, $usuario, $password, $basededatos);
} catch (Exception $e) {
    header("Location: index.php?pagina=500");
    exit;
}
?>