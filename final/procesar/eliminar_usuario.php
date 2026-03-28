<?php
require_once __DIR__ . '/../bd/conexion.php';
$id = $_GET['id'];
$stmt = $conexion->prepare('DELETE FROM usuarios WHERE id = ?');
$stmt->bind_param('i', $id);
$stmt->execute();
header('Location: ../index.php?pagina=lista_usuario');
?>