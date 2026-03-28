<?php
if (isset($_GET['error'])) {
    echo '<div class="alert alert-danger">Por favor completa todos los campos.</div>';
} elseif (isset($_GET['success'])) {
    echo '<div class="alert alert-success">Se registró de forma completa.</div>';
}
?>
<h2>Registro de Usuario</h2>
<form id="formRegistro" action="procesar/registro_usuario.php" method="POST" novalidate>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email" required>
  </div>
  <div class="mb-3">
    <label for="contraseña" class="form-label">Contraseña</label>
    <input type="password" class="form-control" id="contraseña" name="contraseña" required>
  </div>
  <button type="submit" class="btn btn-primary">Registrar</button>
</form>
<script src="../jv/validacionRegistro.js"></script>
