<?php
require_once __DIR__ . '/../bd/conexion.php';
if (!is_dir(__DIR__.'/../img')) { mkdir(__DIR__.'/../img', 0755, true); }

$id    = $_POST['id'];
$email = trim($_POST['email']);
$pass  = trim($_POST['contraseña']);


if (empty($email)) {
    header('Location: ../index.php?pagina=editar_usuario&id=' . $id . '&error=1');
    exit;
}


$params = ['ssi'];
$types = 's';
$values = [$email];
$sql = 'UPDATE usuarios SET email = ?';

if (!empty($pass)) {
    $hash = password_hash($pass, PASSWORD_DEFAULT);
    $sql .= ', contraseña = ?';
    $types .= 's';
    $values[] = $hash;
}

if (!empty($_FILES['imagen']['name'])) {
    $ext = pathinfo($_FILES['imagen']['name'], PATHINFO_EXTENSION);
    $filename = uniqid('userimg_') . '.' . $ext;
    move_uploaded_file($_FILES['imagen']['tmp_name'], __DIR__ . '/../img/' . $filename);
    $sql .= ', imagen = ?';
    $types .= 's';
    $values[] = $filename;
}

$sql .= ' WHERE id = ?';
$types .= 'i';
$values[] = $id;

$stmt = $conexion->prepare($sql);
$stmt->bind_param($types, ...$values);
$stmt->execute();

header('Location: ../index.php?pagina=lista_usuario');
exit;
?>