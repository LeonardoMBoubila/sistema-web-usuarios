<?php
if (isset($_SESSION['user_email'])) {
    header('Location: index.php?pagina=inicio');
    exit;
}
?>
<div class="container mt-5">
  <h2 class="mb-4">Formulario de contacto</h2>
  <form id="contactoForm" class="needs-validation" novalidate action="javascript:void(0);" onsubmit="return false;">
    <div class="row mb-3">
      <div class="col">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" required>
        <div class="invalid-feedback">Por favor ingresa tu nombre.</div>
      </div>
      <div class="col">
        <label for="apellido" class="form-label">Apellido</label>
        <input type="text" class="form-control" id="apellido" name="apellido" required>
        <div class="invalid-feedback">Por favor ingresa tu apellido.</div>
      </div>
    </div>
    <div class="input-group mb-3">
      <span class="input-group-text" id="basic-addon1">+54</span>
      <input type="tel" class="form-control" placeholder="Teléfono" aria-label="Teléfono" aria-describedby="basic-addon1" id="telefono" name="telefono" pattern="[0-9]{10}" required>
      <div class="invalid-feedback">Por favor ingresa un teléfono válido de 10 dígitos.</div>
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control" id="email" name="email" required>
      <div class="invalid-feedback">Por favor ingresa tu email.</div>
    </div>
    <div class="mb-3">
      <label for="comentario" class="form-label">Comentario</label>
      <textarea class="form-control" id="comentario" name="comentario" rows="3" required></textarea>
      <div class="invalid-feedback">Por favor ingresa un comentario.</div>
    </div>
    <button type="submit" class="btn btn-primary me-2">Enviar</button>
    <button type="reset" class="btn btn-secondary">Borrar</button>
  </form>
</div>
<script>
(function() {
  'use strict';
  var form = document.getElementById('contactoForm');
  form.addEventListener('submit', function(event) {
    if (!form.checkValidity()) {
      event.preventDefault();
      event.stopPropagation();
      form.classList.add('was-validated');
    } else {
      event.preventDefault();
      var nombre = form.nombre.value;
      var apellido = form.apellido.value;
      var telefono = form.telefono.value;
      var email = form.email.value;
      var comentario = form.comentario.value;
      alert(
        'Datos ingresados:\n\n' +
        'Nombre: ' + nombre + '\n' +
        'Apellido: ' + apellido + '\n' +
        'Teléfono: +54' + telefono + '\n' +
        'Email: ' + email + '\n' +
        'Comentario: ' + comentario
      );
      form.reset();
      form.classList.remove('was-validated');
    }
  }, false);
})();
</script>