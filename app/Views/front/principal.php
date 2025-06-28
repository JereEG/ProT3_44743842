<header class="header">
    <div class="header-content">
        <img class="img-logo" src="<?php echo base_url('assets/img/logoHeader-green.png'); ?>" alt="Logo">
        <h1>Bienvenido a nuestra página principal</h1>
    </div>
</header>
<div id="carrusel_presentacion" class="carousel slide">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="assets/img/carrusel_reloj1.jpg" class="carrusel-img" alt="Imagen 1">
        </div>
        <div class="carousel-item">
            <img src="assets/img/carrusel_reloj2.jpg" class="carrusel-img" alt="Imagen 2">
        </div>
        <div class="carousel-item">
            <img src="assets/img/carrusel_reloj3.jpg" class="carrusel-img" alt="Imagen 3">
        </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carrusel_presentacion" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carrusel_presentacion" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Siguiente</span>
    </button>

    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carrusel_presentacion" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carrusel_presentacion" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carrusel_presentacion" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
</div>