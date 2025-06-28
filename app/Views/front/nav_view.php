<?php
$session = session();
$nombre = $session->get('nombre');
$perfil = $session->get('perfil_id');
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
    <div class="container-fluid">
        <!-- Logo -->
        <a class="navbar-brand" href="<?= base_url('/'); ?>">
            <img src="<?= base_url('assets/img/logo.png'); ?>" alt="Logo" height="50">
        </a>

        <!-- Botón para versión responsive -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain"
            aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Contenido del Navbar -->
        <div class="collapse navbar-collapse" id="navbarMain">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 align-items-center">
                <?php if ($perfil == 1): ?>
                    <!-- Admin -->
                    <li class="nav-item text-primary fw-semibold me-3">
                        👋 ¡Bienvenido de nuevo, Administrador <strong><?= esc($nombre); ?></strong>!
                    </li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('registro'); ?>">Registrarse</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('ingreso'); ?>">Ingresar</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('cerrar-login'); ?>">Cerrar Sesión</a></li>

                <?php elseif ($perfil == 2): ?>
                    <!-- Usuario normal -->
                    <li class="nav-item text-info fw-semibold me-3">
                        👋 ¡Hola <strong><?= esc($nombre); ?></strong>, gracias por visitar nuestra tienda!
                    </li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('catalogo'); ?>">Catálogo</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownMenu" role="button"
                           data-bs-toggle="dropdown" aria-expanded="false">
                            Más
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu">
                            <li><a class="dropdown-item" href="<?= base_url('quienes_somos'); ?>">Quiénes Somos</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('acerca_de'); ?>">Acerca de</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('cerrar-login'); ?>">Cerrar Sesión</a></li>

                <?php else: ?>
                    <!-- Visitante -->
                    <li class="nav-item text-secondary fw-semibold me-3">
                        👋 ¡Bienvenido! Iniciá sesión para disfrutar de una experiencia personalizada.
                    </li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('/'); ?>">Principal</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('catalogo'); ?>">Catálogo</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('registro'); ?>">Registrarse</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('ingreso'); ?>">Ingresar</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownMenu" role="button"
                           data-bs-toggle="dropdown" aria-expanded="false">
                            Más
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu">
                            <li><a class="dropdown-item" href="<?= base_url('quienes_somos'); ?>">Quiénes Somos</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('acerca_de'); ?>">Acerca de</a></li>
                        </ul>
                    </li>
                <?php endif; ?>
            </ul>

            <!-- Buscador -->
            <form class="d-flex ms-auto" role="search">
                <input class="form-control me-2" type="search" placeholder="Buscar..." aria-label="Buscar">
                <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>
        </div>
    </div>
</nav>
