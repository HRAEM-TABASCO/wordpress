<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() . '/assets/image/icon.svg' ); ?>" type="image/x-svg" />
    <meta name="description" content="Blog Site Template" />
    <meta name="author" content="https://youtube.com/FollowAndrew" />
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <div id="search_window" class="bg-yellow position-fixed z-index--4 vh-100 vw-100 d-flex justify-content-center align-items-center">
      <a href="javascript:void(0)" class="text-white position-absolute close-search" id="close-search"><i class="bi bi-x-lg"></i></a>
      <div class="position-relative">
          <form action="#">
            <div class="input-data">
                <input class="btn-search text-white fw-bolder fs-4 px-3 py-2" id="search_button" type="text" placeholder="Escribir Aquí" name="search">
                <button type="submit"><i class="bi bi-search text-white h4 fw-bolder"></i></button>
            </div>
          </form>
      </div>
    </div>

    <header class="vh-20 d-flex flex-row justify-content-between align-items-center ps-4 p-2">
      <img
        src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/Screenshot_29.png' ); ?>"
        alt="Logotipo junto con secretaria 2"
        class="img-fluid"
      />
    </header>

    <div class="hero bg-hero text-center text-sm-start">
      <nav class="navbar navbar-expand-lg py-3 sticky-top bg-menu z-index--3 box-shadow">
        <div class="container-sm">
          <button
            class="navbar-toggler text-right"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navmenu"
            aria-controls="navmenu"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <i class="bi bi-list text-white"></i>
          </button>

          <div class="collapse navbar-collapse justify-content-start" id="navmenu">
            <?php if ( has_nav_menu( 'primary' ) ) : ?>
              <?php
              wp_nav_menu(
                array(
                  'theme_location' => 'primary',
                  'container'      => false,
                  'menu_class'     => 'navbar-nav text-white main-menu',
                  'fallback_cb'    => false,
                  'depth'          => 2,
                  'walker'         => class_exists( 'bootstrap_5_wp_nav_menu_walker' ) ? new bootstrap_5_wp_nav_menu_walker() : null,
                )
              );
              ?>
            <?php else : ?>
              <ul class="navbar-nav text-white main-menu">
                <li class="nav-item"><a href="index.html" class="nav-link text-white main-link">Home</a></li>
                <li class="nav-item dropdown">
                  <a href="#questions" class="nav-link text-white dropdown-toggle main-link" data-bs-toggle="dropdown" role="button" aria-expanded="false">Directorio Telefonico</a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="directorio_activo.html">Directorio Médico</a></li>
                    <li><a class="dropdown-item" href="directorio_area_extensiones.html">Área y Extensiones</a></li>
                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a href="#instructors" class="nav-link text-white dropdown-toggle main-link" data-bs-toggle="dropdown" role="button" aria-expanded="false">Servicios</a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="division_medica.html">Divisiones Medicas</a></li>
                    <li><a class="dropdown-item" href="calidad_educacion.html">Calidad, Educación E Investigación</a></li>
                    <li><a class="dropdown-item" href="calidad.html">Calidad</a></li>
                    <li><a class="dropdown-item" href="educacion_salud.html">Educación En Salud</a></li>
                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a href="#instructors" class="nav-link text-white dropdown-toggle main-link" data-bs-toggle="dropdown" role="button" aria-expanded="false">Nosotros</a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="mensaje_director.html">Mensaje del Director</a></li>
                    <li><a class="dropdown-item" href="historia.html">Historia</a></li>
                    <li><a class="dropdown-item" href="vision_mision.html">Misión, Visión y Valores</a></li>
                  </ul>
                </li>
                <li class="nav-item"><a href="#instructors" class="nav-link text-white main-link">Noticias <i class="bi bi-newspaper"></i></a></li>
                <li class="nav-item"><a href="#instructors" class="nav-link text-white main-link">Covid-19 <i class="fas fa-virus"></i></a></li>
              </ul>
            <?php endif; ?>
          </div>

          <a href="javascript:void(0)" id="btn-search" class="search-btn"><i class="bi bi-search text-white h4"></i></a>
        </div>
      </nav>

      <div class="main-wrapper">
