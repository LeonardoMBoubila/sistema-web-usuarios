<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" defer></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php?pagina=inicio">Pagina de Registro</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mainNavbar">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <?php if (!isset($_SESSION['user_email'])): ?>
          <li class="nav-item"><a class="nav-link" href="index.php?pagina=registro_usuario">Registrarse</a></li>
          <li class="nav-item"><a class="nav-link" href="index.php?pagina=iniciar_sesion">Iniciar Sesión</a></li>
          <li class="nav-item"><a class="nav-link" href="index.php?pagina=formulario">Formulario</a></li>
        <?php endif; ?>
      </ul>
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <?php if (isset($_SESSION['user_email'])): ?>
          <li class="nav-item"><a class="nav-link" href="index.php?pagina=lista_usuario">Lista Usuarios</a></li>
          <li class="nav-item"><a class="nav-link" href="index.php?pagina=cerrar_sesion">Cerrar Sesión</a></li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>
<div class="container mt-4">
