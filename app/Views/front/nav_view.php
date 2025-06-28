<!-- Barra de navegación principal -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo base_url('/'); ?>">
            <img src="<?php echo base_url('assets/img/logo.png'); ?>" class="img-logo" alt="Logo" height="50">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain"
            aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="navbarMain">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('/'); ?>">Principal</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('/catalogo'); ?>">Catálogo</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('registro'); ?>">Registrase</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('ingreso'); ?>">Ingresar</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownMenu" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Más
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu">
                        <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('quienes_somos'); ?>">Quiénes Somos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('acerca_de'); ?>">Acerca de</a>
                        </li>
                    </ul>
                </li>
            </ul>


            <form class="d-flex me-2" role="search">
                <input class="form-control me-2" type="search" placeholder="Buscar..." aria-label="Buscar">
                <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>


        </div>
    </div>
</nav>