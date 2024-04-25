<?php
// attention à la catégorie, doit correspondre au slug de la page
$headerID_fr = get_page_by_path('header')->ID;
$footerID    = get_page_by_path('footer')->ID;
$notreasblID = get_page_by_path('fr/notre-asbl')->ID;
$contactID   = get_page_by_path('contact')->ID;
$actuID      = get_page_by_path('fr/actualites')->ID;

$headerID_nl    = get_page_by_path('header')->ID;
$footerID_nl    = get_page_by_path('footer')->ID;
$notreasblID_nl = get_page_by_path('onze-vzw')->ID;
$contactID_nl   = get_page_by_path('contact')->ID;
// $actuID_nl      = get_page_by_path('actualites')->ID;

$headerID_en = get_page_by_path('header')->ID;
$footerID_en = get_page_by_path('footer')->ID;
// $notreasblID_en = get_page_by_path('notre-asbl')->ID;
$contactID_en = get_page_by_path('contact')->ID;
// $actuID_en      = get_page_by_path('actualites')->ID;
// $travail_asID = get_page_by_path('travail_as')->ID;
$cookie_langues = "langues";

if (isset($_COOKIE[$cookie_langues])) {
    $choixLangue = $_COOKIE[$cookie_langues];
}
?>


<!-- remplir les champs ACF  -->
<!-- <?php echo get_field('', $headerID);
?> -->