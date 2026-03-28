<h1>Bienvenido a Barrio Pastas</h1>
<p>Pimera pagina de pastas con un sistema de registro de usuarios</p>
<div id="carouselMain" class="carousel slide mb-4" data-bs-ride="carousel">
  <div class="carousel-inner">
    <?php for ($i = 1; $i <= 7; $i++): ?>
      <div class="carousel-item<?= $i === 1 ? ' active' : '' ?>">
        <img src="img/pasta<?= $i ?>.jpg" class="d-block w-100" alt="Slide <?= $i ?>" style="max-height: 400px; object-fit: cover;">
      </div>
    <?php endfor; ?>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselMain" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Anterior</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselMain" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Siguiente</span>
  </button>
</div>
