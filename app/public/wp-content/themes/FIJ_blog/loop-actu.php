<div id="actu" class="container-fluid">
  <div class="row mt10 mb-5">
    <div class="col-1 bg-bleu-tur"></div>
    <div class="col-2 bg-bleu-tur  pt-1 pb-1 fontwhite">
      <h3>
        <?php
        echo get_field('title');
        ?>
      </h3>
    </div>
  </div>

  <div class="row mb-5">
    <div class="col-10 offset-1 d-flex justify-content-around">
      <!-- repetitions de posts -->
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

          <div class="w-25 text-centser">
            <a href="#<?php echo $post->ID; ?>">
              // <?php echo $post->ID; ?>
              <img class="w-100" src="<?php echo $post_actu["thumbnail"]["url"]; ?> " alt=""></a>
            <h5>
              <?php
              echo $post_actu["title"]
              ?>
            </h5>

            <p class="date">
              <?php
              echo dateFR($date);
              ?>
            </p>

          </div>
      <?php
        }
      }
      wp_reset_postdata()
      ?>

    </div>
  </div>
</div>

<!-- 1:
class="container-fluid bg-bleu-tur padtop mt10 padbot">
-->
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
    if ($query->current_post % 2) {
      $colors = "bloc-blanc";
      $order = "order-1 offset-1";
      $flip = "fa-flip-horizontal";
      $side = "align-items-start";
    } else {
      $colors = "bloc-vert";
      $order = "order-3";
      $flip = "";
      $side = "align-items-end";
    }
    $post_actu = get_field("post_actu");
?>
    <div id="<?php echo $post->ID; ?>" class="container-fluid bg-bleu-tur padtop mt10 padbot <?php echo $colors; ?> ">
      <div class="row">
        <div class="col-1 fond"></div>
        <div class="col-8 ps-0">
          <h3 class="pt-2 pb-1 ps-2 m-0  fond d-inline-block">
            <?php
            echo $post_actu["title"];
            ?>
          </h3>
        </div>
      </div>
      <div class="row mb-5 mt10">
        <div class="col-5 d-flex align-items-center offset-1 order-2 ">
          <div class="w80">
            <h4 class=""><?php echo $post_actu["subtitle"]; ?> </h4>
            <?php echo $post_actu["text"]; ?>
          </div>
        </div>
        <div class="col-5 d-flex align-items-center justify-content-center <?php echo $order; ?>">
          <div class="w-100 d-flex flex-column <?php echo $side ?> justify-content-end">
            <img class="w-100" src="<?php echo $post_actu["img"]["url"]; ?>" alt="">
            <a href="#actu"><i class="fa-solid fa-turn-up fontwhite <?php echo $flip; ?>"> </i></a>
          </div>
        </div>
      </div>
    </div>
<?php
  }
}
wp_reset_postdata()
?>

<!--
<!--
<!-- 2:
class="container-fluid  mt10 padbot">
      container-fluid padtop mt10 padbot
-->

<!-- 3:
class="container-fluid bg-bleu-tur padtop mt10 padbot">
-->

<!-- 4:
class="container-fluid mt10 padbot padtop">
      container-fluid  mt10 padbot
-->
</main>
