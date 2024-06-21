<body class="estilo-body">
    <header>
        <!-- NavBar -->
        <nav class="navbar navbar-expand-lg fixed-top bg-nav">
            <div class="container-fluid">
                <a class="navbar-brand me-auto" href="<?php echo base_url('inicio'); ?>">
                    <img src="assets/img/logo_cafe_sf.png" alt="LOGO_INICIO" class="logo-img">
                </a>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><img src="assets/img/logo_cafe_sf.png" alt="LOGO_INICIO" class="logo-img"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link mx-lg-2 active" aria-current="page" href="<?php echo base_url('inicio'); ?>"><i class="fa-solid fa-house-chimney"></i>  INICIO</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mx-lg-2" href="<?php echo base_url('quienes_somos'); ?>"><i class="fa-solid fa-mug-saucer"></i>  QUIENES SOMOS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mx-lg-2" href="<?php echo base_url('acerca_de'); ?>"><i class="fas fa-info-circle"></i>  ACERCA DE</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="<?php echo base_url('productos'); ?>">
                                    <i class="fab fa-shopify"></i>  PRODUCTOS
                                </a>
                                <ul class="dropdown-menu dropdown-menu-dark">
                                    <li><a class="dropdown-item" href="#">Categoria 1</a></li>
                                    <li><a class="dropdown-item" href="#">Categoria 2</a></li>
                                    <li><a class="dropdown-item" href="#">Categoria 3</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mx-lg-2" href="<?php echo base_url('registro'); ?>"><i class="fas fa-address-card"></i>  REGISTRO</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- <form class="d-flex mt-3" role="search">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar" style="display: none;" id="search-input">
                    <button class="boton-login" type="button" id="search-btn">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </form> -->
                <a href="#" class="boton-login"><i class="fa-solid fa-magnifying-glass"></i></a>
                <a href="#" class="boton-login"><i class="fa-solid fa-cart-shopping"></i></a>

                <a class="boton-login" href="<?php echo base_url('login'); ?>">LOGIN</a>
                <button class="navbar-toggler pe-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
        <!-- Fin NavBar -->
    </header>