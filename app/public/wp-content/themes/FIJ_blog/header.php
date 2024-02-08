<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SASLS/DMBSH accueil</title>
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>\style/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>\style/all.min.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>\style/style.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,200&display=swap" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Hind+Madurai:wght@300;400;500&display=swap" rel="stylesheet">

</head>

<header class="container-fluid bg-bleu-tur">
  <div class="row">
    <div class="col-12">
      <nav class="navbar navbar-expand-lg navbar-light ps-5 pe-5  ">

        <div class="d-flex w40">
          <a class="navbar-brand ps-3 d-flex" href="index.html">
            <div class="w20">
              <img class="w-100" src="/pics/logo-sasls.png" alt="">
            </div>
            <p class="text-center titrelogo  ">Service d'accompagnement social aux locataires sociaux <br>Dienst voor
              maatschappelijke begeleiding van de sociale huurders</p>
          </a>
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <ul class="navbar-nav ms-auto  me-5 mb-2 mb-lg-0 mt-5 ">

            <!--  -->
            <!--  afficher les menus depuis le backend -->
            <!--  -->

            <?php
            $nomMenu = "top";

            $argsM = array(
              'theme_location'  => $nomMenu,
              'container'       => false,
              'echo'            => false,
              'fallback_cb'     => false,
              'items_wrap'      => '%3$s',
              'depth'           => 0,
            );
            $menu = wp_nav_menu($argsM);

            // ici par exemple on ajoute une classe a nos liens,
            //  ca rempplace le <a par <a class="nav-link" dans $menu

            $menu = str_replace('<a', '<a class="nav-link"', $menu);

            //  ici on ajoute une classe a nos liens, par iteration sur les classes
            $menu = str_replace('class="menu-item', 'class="nav-item menu-item', $menu);

            // puis on l'ecrit
            echo $menu;
            ?>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                langue
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Français</a></li>
                <li><a class="dropdown-item" href="#">Nederland</a></li>
                <li><a class="dropdown-item" href="#">English</a></li>
              </ul>
            </li>

          </ul>

        </div>

      </nav>
    </div>
  </div>

</header>




<main>
  <div class="container-fluid">

    <div class="row relative">
      <div class="col-12 mb-5 p-0">
        <div class="absolute w30 txt-1 fontwhite ">
          <h1>Bienvenue chez SASLS/DMBSH</h1>
          <p class="fs-5">L’asbl SASLS (Service d’accompagnement social aux locataires sociaux) assure un accompagnement
            social individuel et collectif des candidats et des locataires des Sociétés immobilières de service public
            (SISP).</p>
        </div>
        <div class="w-100">
          <!-- <img class="w-100" src="pics/accuiel-banniere.png" alt=""> -->


          <!-- appel de l img dans le backend -->
          <!-- Grace au plugin ACF: get_field() -->
          <?php $hero_img = get_field("hero"); ?>
          <img class="w-100" src="<?php echo $hero_img['url']; ?>" alt="">
        </div>


      </div>
    </div>


    <!-- get_the_title() recupere les slugs -->
    <!--
    // echo get_the_title();
    // echo "$hero_img";
    // var_dump($hero_img); -->


    <!-- recuperer l'image dans le back -->
    <!-- <img src="<?php echo $hero_img['url']; ?>" alt=""> -->