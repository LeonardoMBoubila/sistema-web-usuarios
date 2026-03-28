<?php
session_start();
require_once __DIR__ . '/../bd/conexion.php';

$email = trim($_POST['email']);
$pass  = trim($_POST['contraseña']);


$stmt = $conexion->prepare('SELECT id, email, contraseña, adm FROM usuarios WHERE email = ?');
$stmt->bind_param('s', $email);
$stmt->execute();
$res = $stmt->get_result();

if ($row = $res->fetch_assoc()) {
    if (password_verify($pass, $row['contraseña'])) {
        $_SESSION['user_email'] = $row['email'];
        $_SESSION['adm']        = $row['adm'];
        header('Location: ../index.php?pagina=lista_usuario');
        exit;
    }
}


header('Location: ../index.php?pagina=iniciar_sesion');
exit;
?>