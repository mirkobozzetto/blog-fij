<!-- get POSTS -->

<?php
$args = array(
  'category_name' => 'actualite',
  'order' => 'ASC', // or DSC
  'orderby' => 'date',
  'nopaging' => false,
  'posts_per_page' => 4,
  //'paged' => 1,
);

$query = new WP_Query($args);
if ($query->have_posts()) {
  while ($query->have_posts()) {
    $query->the_post();
    // formatage de la date
    $date = DateTime::createFromFormat('Ymd', get_field('post_actu')['date']);
?>
<!--  -->
<?php
    $post_actu = get_field("post_actu");
    ?>

<!-- contenu -->

<?php
  }
}
wp_reset_postdata()
?>
