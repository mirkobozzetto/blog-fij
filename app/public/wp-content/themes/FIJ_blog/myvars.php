<?php
// attention à la catégorie, doit correspondre au slug de la page
$headerID = get_page_by_path('header')->ID;
$footerID = get_page_by_path('footer')->ID;
$notreasblID = get_page_by_path('notre-asbl')->ID;
$contactID = get_page_by_path('contact')->ID;
$actuID = get_page_by_path('actualites')->ID;
// $travail_asID = get_page_by_path('travail_as')->ID;
?>

<!-- remplir les champs ACF  -->
<!-- <?php echo get_field('', $headerID);
      ?> -->
