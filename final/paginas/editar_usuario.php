<?php
require_once __DIR__ . '/../bd/conexion.php';
require_once __DIR__ . '/../bd/usuario.php';

$id = $_GET['id'] ?? null;
$user = Usuario::findById($conexion, $id);
if (!$user) {
    header('Location: index.php?pagina=lista_usuario');
    exit;
}
?>
<h2>Editar Usuario</h2>
<form id="formEditar" action="procesar/editar_usuario.php" method="POST" enctype="multipart/form-data" novalidate>
  <input type="hidden" name="id" value="<?= $user->id ?>">
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email" value="<?= $user->email ?>" required>
  </div>
  <div class="mb-3">
    <label for="contraseña" class="form-label">Contraseña</label>
    <input type="password" class="form-control" id="contraseña" name="contraseña" placeholder="Nueva contraseña">
  </div>
  <div class="mb-3">
    <label for="imagen" class="form-label">Imagen</label>
    <input type="file" class="form-control" id="imagen" name="imagen" accept="image/*">
    <?php if ($user->imagen): ?>
      <img src="img/<?= htmlspecialchars($user->imagen) ?>" alt="Foto usuario" class="img-thumbnail mt-2" style="max-width:150px;">
    <?php endif; ?>
  </div>
  <button type="submit" class="btn btn-primary">Guardar Cambios</button>
</form>
<script src="../jv/validacionEditar.js"></script>
