<!-- First code for HTML -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="img/icon.svg" type="image/x-svg" />
    <meta name="description" content="Blog Site Template">
    <meta name="author" content="https://youtube.com/FollowAndrew">    
    <link rel="shortcut icon" href="images/logo.png"> 
	<?php
	 	wp_head();
	?>
    <title>Hospital Regional de Alta Especialidad de la Mujer</title>
  </head>
  <body>

    <div id="search_window" class="bg-yellow position-fixed z-index--4  vh-100 vw-100 d-flex d-flex justify-content-center align-items-center">
      <a href="javascript:void(0)" class="text-white position-absolute close-search" id="close-search"><i class="bi bi-x-lg"></i></a>
      <div class="position-relative">
          <form action="#">
            <div class="input-data">
                <input class="btn-search text-white fw-bolder fs-4 px-3 py-2" id="search_button" type="text" placeholder="Escribir Aquí" name="search">
                <button type="submit"><i class="bi bi-search text-white h4 fw-bolder "></i></button>
            </div>
          </form>
      </div>
  </div> 

  
    
    <a href="javascript:void(0)" id="chat_bot"><i class="bi bi-chat-left-dots fs-2 text-white"></i></a>
  

    <div
      class="
        hero-red-bd
        position-absolute
        top-0
        end-0
        z-index--1
        d-none d-md-none d-sm-block d-lg-block d-xl-block
      "
    >
      <a
        href="tel:9933109000"
        class="text-white position-absolute end-0 me-5 mt-4"
      >
        <i class="fa fa-phone" aria-hidden="true"></i> (993) 310 90 00</a
      >
      <img src="img/fondo_red.png" class="img-fluid" />
    </div>
    <!-- Header inicio -->
    <header
      class="
        vh-20
        d-flex
        flex-row
        justify-content-between
        align-items-center
        ps-4
        p-2
      "
    >
      <img
        src="img/logo_hospital.png"
        alt="Logotipo junto con secretaria"
        class="img-fluid"
      />
    </header>
    <!-- Header Final -->

    <div class="hero bg-hero text-center text-sm-start">
      <!-- Fondo rojo blanco -->

      <nav
      class="
        navbar navbar-expand-lg
        py-3
        sticky-top
        bg-menu
        z-index--3
        box-shadow
      "
    >
      <div class="container-sm">
        <button
          class="navbar-toggler text-right"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navmenu"
        >
          <i class="bi bi-list text-white"></i>
        </button>
        <div
          class="collapse navbar-collapse justify-content-start"
          id="navmenu"
        >
          <ul class="navbar-nav text-white main-menu">
            <li class="nav-item">
              <a href="index.html" class="nav-link text-white main-link"
                >Home</a
              >
            </li>
            <li class="nav-item dropdown">
              <a
                href="#questions"
                class="nav-link text-white dropdown-toggle main-link"
                data-bs-toggle="dropdown"
                href="#"
                role="button"
                aria-expanded="false"
                >Directorio Telefonico</a
              >
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="directorio_activo.html"
                    >Directorio Médico</a
                  >
                </li>
                <li>
                  <a
                    class="dropdown-item"
                    href="directorio_area_extensiones.html"
                    >Área y Extensiones</a
                  >
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a
                href="#instructors"
                class="nav-link text-white dropdown-toggle main-link"
                data-bs-toggle="dropdown"
                href="#"
                role="button"
                aria-expanded="false"
                >Servicios</a
              >
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="division_medica.html"
                    >Divisiones Medicas</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="calidad_educacion.html"
                    >Calidad, Educación E Investigación</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="calidad.html">Calidad</a>
                </li>
                <li>
                  <a class="dropdown-item" href="educacion_salud.html"
                    >Educación En Salud</a
                  >
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a
                href="#instructors"
                class="nav-link text-white dropdown-toggle main-link"
                data-bs-toggle="dropdown"
                href="#"
                role="button"
                aria-expanded="false"
                >Nosotros</a
              >
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="mensaje_director.html"
                    >Mensaje del Director</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="historia.html">Historia</a>
                </li>
                <li>
                  <a class="dropdown-item" href="vision_mision.html"
                    >Misión, Visión y Valores
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#instructors" class="nav-link text-white main-link"
                >Noticias <i class="bi bi-newspaper"></i
              ></a>
            </li>
            <li class="nav-item">
              <a href="#instructors" class="nav-link text-white main-link"
                >Covid-19 <i class="fas fa-virus"></i></a>
            </li>
          </ul>
        </div>
        <a href="javascript:void(0)" id="btn-search" class="search-btn"><i class="bi bi-search text-white h4"></i></a>
      </div>
    </nav>

    <div class="main-wrapper">


