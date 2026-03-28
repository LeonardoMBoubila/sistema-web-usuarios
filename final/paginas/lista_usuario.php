<?php
require_once __DIR__ . '/../bd/conexion.php';
require_once __DIR__ . '/../bd/usuario.php';

$lista = Usuario::findAll($conexion);
?>
<h2>Lista de Usuarios</h2>
<table class="table align-middle">
  <thead>
    <tr>
      <th>ID</th>
      <th>Imagen</th>
      <th>Email</th>
      <th>Contraseña</th>
      <th>Admin</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($lista as $u): ?>
      <tr>
        <td><?= $u->id ?></td>
        <td>
          <?php if ($u->imagen): ?>
            <img src="img/<?= htmlspecialchars($u->imagen) ?>" alt="" style="max-width:80px;" class="img-fluid rounded">
          <?php else: ?>
            -
          <?php endif; ?>
        </td>
        <td><?= $u->email ?></td>
        <td><?= $u->contraseña ?></td>
        <td><?= $u->adm ?></td>
        <td>
          <?php if (isset($_SESSION['adm']) && $_SESSION['adm'] == 1): ?>
            <a href="index.php?pagina=editar_usuario&id=<?= $u->id ?>" class="btn btn-sm btn-warning">Editar</a>
            <a href="procesar/eliminar_usuario.php?id=<?= $u->id ?>" class="btn btn-sm btn-danger">Eliminar</a>
            <a href="procesar/hacer_adm.php?id=<?= $u->id ?>" class="btn btn-sm btn-info">Hacer Admin</a>
          <?php else: ?>
            <span class="text-muted">No autorizado</span>
          <?php endif; ?>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
