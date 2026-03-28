<?php
session_start();
require_once __DIR__ . '/bd/conexion.php';
require_once __DIR__ . '/header.php';

$pagina = $_GET['pagina'] ?? 'inicio';
$allowed = ['inicio','registro_usuario','iniciar_sesion','cerrar_sesion','lista_usuario','editar_usuario','formulario'];

if (!in_array($pagina, $allowed)) {
    include __DIR__ . '/paginas/404.php';
} else {
    include __DIR__ . '/paginas/' . $pagina . '.php';
}
?>
