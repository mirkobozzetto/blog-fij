<?php
include locate_template('myvars.php');
$footerID = get_page_by_path('footer')->ID;
?>

<!-- La fonction locate_template() est une fonction WordPress qui cherche un fichier de modèle dans le thème actuel ou dans le thème parent ( si le thème actuel est un thème enfant ).
Si le fichier myvars.php est trouvé, son chemin complet est retourné et le fichier est inclus dans le fichier header.php grâce à la fonction include().
Cela signifie que toutes les variables et fonctions définies dans myvars.php seront disponibles dans header.php. -->


<?php
$cookie_name = "accept_cookies";
$cookie_value = "true";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
if (!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
}
?>

<!DOCTYPE html>
<html lang='en'>

<body>

  <head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>SASLS/DMBSH accueil</title>
    <link rel='stylesheet' href='<?php echo get_stylesheet_directory_uri(); ?>\style/bootstrap.min.css'>
    <link rel='stylesheet' href='<?php echo get_stylesheet_directory_uri(); ?>\style/all.min.css'>
    <link rel='stylesheet' href='<?php echo get_stylesheet_directory_uri(); ?>\style/style.css'>
    <link rel='stylesheet' href='<?php echo get_stylesheet_directory_uri(); ?>\style/debug.css'>
    <link rel='stylesheet' href='<?php echo get_stylesheet_directory_uri(); ?>\style/lightbox.min.css'>

    <link rel='preconnect' href='https://fonts.googleapis.com'>
    <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
    <link href='https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,200&display=swap' rel='stylesheet'>

    <link rel='preconnect' href='https://fonts.googleapis.com'>
    <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
    <link href='https://fonts.googleapis.com/css2?family=Hind+Madurai:wght@300;400;500&display=swap' rel='stylesheet'>

  </head>

  <?php
$headerID = get_page_by_path('header')->ID;
// var_dumpj($headerID)
?>

  <!-- Ce code PHP est utilisé dans le contexte de WordPress. Il utilise la fonction get_page_by_path() pour récupérer une page spécifique de votre site WordPress.

Voici une explication détaillée :

get_page_by_path( 'header' ) : Cette fonction recherche une page dans votre site WordPress qui a le slug 'header'. Le slug est la dernière partie de l'URL qui identifie une page spécifique. Par exemple, dans www.example.com/header, 'header' est le slug.

->ID : C'est une propriété de l'objet de page retourné par get_page_by_path(). Chaque page dans WordPress a un identifiant unique, ou ID. Ce code récupère cet ID.

$headerID = ... : Cela stocke l'ID de la page dans la variable $headerID.  -->
  <header class='container-fluid bg-bleu-tur'>
    <div class='row'>
      <div class='col-12'>
        <nav class='navbar navbar-expand-lg navbar-light ps-5 pe-5  '>
          <div class='d-flex w40'>
            <a class='navbar-brand ps-3 d-flex' href='index.html'>
              <div class='w20'>
                <!-- <img class = 'w-100' src = '/pics/logo-sasls.png' alt = ''> -->
                <img class='w-100' src="<?php echo get_field('logo', $headerID)['url']; ?>" alt=''>
                <!--  -->
              </div>
              <!--  -->
              <!-- <p class = 'text-center titrelogo  '>Service d'accompagnement social aux locataires sociaux <br>Dienst voor
              maatschappelijke begeleiding van de sociale huurders</p> -->
              <p class="text-center titrelogo  ">
                <?php echo get_field('text_asbl', $headerID); ?>
              </p>
              <!---->
            </a>
          </div>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav ms-auto  me-5 mb-2 mb-lg-0 mt-5 ">
              <!--  -->
              <!--  afficher les menus depuis le backend -->
              <!--  -->
              <!-- MENU DECLARATION -->
              <?php
$nomMenu = "top";
$argsM = array(
    'theme_location' => $nomMenu,
    'container' => false,
    'echo' => false,
    'fallback_cb' => false,
    'items_wrap' => '%3$s',
    'depth' => 0,
);
$menu = wp_nav_menu($argsM);
// ici par exemple on ajoute une classe a nos liens,
//  ca rempplace le <a par <a class="nav-link" dans $menu
$menu = str_replace('<a', '<a class = "nav-link"', $menu);
$menu = str_replace('class="menu-item', 'class="nav-item menu-item', $menu);
echo $menu;
?>

              <li class='nav-item dropdown'>
                <a class='nav-link dropdown-toggle' href='#' role='button' data-bs-toggle='dropdown'
                  aria-expanded='false'>
                  langue
                </a>
                <ul class='dropdown-menu'>
                  <li><a class='dropdown-item' href='#'>Français</a></li>
                  <li><a class='dropdown-item' href='#'>Nederland</a></li>
                  <li><a class='dropdown-item' href='#'>English</a></li>
                </ul>
              </li>

            </ul>

          </div>

        </nav>
      </div>
    </div>

  </header>

  <main>
    <?php
$hero_img = get_field('hero');

if ($hero_img) {
    $hero_img
    ?>
    <div class='container-fluid'>
      <div class='row relative'>
        <div class='col-12 mb-5 p-0'>
          <div class='absolute w30 txt-1 fontwhite '>
            <!-- import dynamique depuis wordpress -->
            <h1>
              <?
                echo get_field('title_header');
                ?>
            </h1>
            <!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
            <!-- <? echo get_field('le_nom_de_ton_champ_ACF');
                    ?> -->
            <!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
            <p class='fs-5'>
              <? echo get_field('text_header');
                ?>
            </p>
          </div>
          <div class='w-100'>
            <img class='w-100' src="
            <?php
echo $hero_img['url'];
    ?>" alt="hero">
          </div>

        </div>
      </div>
    </div>
    </div>
    </div>
    <?php
}
?>
