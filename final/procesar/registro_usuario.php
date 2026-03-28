<?php
require_once __DIR__ . '/../bd/conexion.php';

$email = trim($_POST['email']);
$pass  = trim($_POST['contraseña']);

if (empty($email) || empty($pass)) {
    header('Location: ../index.php?pagina=registro_usuario&error=1');
    exit;
}


$hash = password_hash($pass, PASSWORD_DEFAULT);

$stmt = $conexion->prepare('INSERT INTO usuarios (email, contraseña, adm) VALUES (?, ?, 0)');
$stmt->bind_param('ss', $email, $hash);
$stmt->execute();

header('Location: ../index.php?pagina=registro_usuario&success=1');
exit;
?>