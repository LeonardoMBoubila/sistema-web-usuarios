<h2>Iniciar Sesión</h2>
<form id="formLogin" action="procesar/ini_sesion.php" method="POST" novalidate>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email" required>
  </div>
  <div class="mb-3">
    <label for="contraseña" class="form-label">Contraseña</label>
    <input type="password" class="form-control" id="contraseña" name="contraseña" required>
  </div>
  <button type="submit" class="btn btn-primary">Entrar</button>
</form>


<script src="jv/validacionLogin.js"></script>
