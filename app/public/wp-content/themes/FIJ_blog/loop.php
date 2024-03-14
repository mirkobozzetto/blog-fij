<?php
include(locate_template('myvars.php'));
?>

<div class="row mt10 mb-5">
  <div class="col-1 bg-bleu-tur"></div>
  <div class="col-5 bg-bleu-tur   pt-1 pb-1 fontwhite">


    <!-- <h3>Les 8 missions d’assistant(e) social(e) en SISP</h3> -->
    <h3>
      <!-- ACF champ avec le field Label -->

      <?php echo get_field('txt_mission'); ?>

    </h3>
  </div>
</div>


<div class="row">
  <div class="col-10 offset-1 d-flex justify-content-between mt-5 flex-wrap">


    <!-- BOUCLE foreach qui permet de passer a l'interieur du repeater de ACF qui s'appelle 'missions' -->
    <?php
    $missions = get_field('missions');
    // var_dumpj($missions);
    foreach ($missions as $key => $value) {
    ?>
      <div class="w20 mx-3">
        <a href="  <?php echo $value['link']['url']; ?>">
          <img class="w-100" src="  <?php echo $value['image']['url']; ?>  " alt="">
        </a>
        <h5 class="text-center">
          <?php echo $value['text']; ?>
        </h5>
      </div>
    <?php
    }
    ?>
    <!--  -->
  </div>
</div>

<div class="row mt10 mb-5">
  <div class="col-1 bg-bleu-tur"></div>
  <div class="col-7 bg-bleu-tur   pt-1 pb-1 fontwhite">
    <h3>
      <!-- ACF champ avec le field Label -->
      <?php echo get_field('txt_travail'); ?>
    </h3>
  </div>
</div>

<?php
$carousel_temoignages = get_field('carousel');
// var_dump($carousel_temoignages);
?>

<div class="row">
  <div class="col-7 offset-1">
    <div id="carouselExample" class="carousel slide pt-5  w-100 ">
      <div class="carousel-inner">

        <?php
        foreach ($carousel_temoignages['temoignages'] as $key => $value) {
          if ($key == 0) {
            $active = 'active';
          } else {
            $active = '';
          }
          //
        ?>
          <div class="carousel-item <?php echo $active; ?> bg-bleu-tur fontwhite text-center  carousel1 ">

            <p>
              <?php echo $value['text']; ?>
            </p>
            <h2>
              <?php echo $value['name']; ?>
            </h2>
          </div>
        <?php
        }
        ?>

      </div>


      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

  </div>



  <!-- yo c'est pas fini ... -->
  <div class="col-3">
    <?php
    $img_travail = get_field('img_travail');
    ?>
    <div>
      <img class="w-100" src="<?php echo $img_travail["url"];; ?>" alt="">
    </div>
  </div>


</div>

</div>


<div class="container-fluid bg-bleu-tur padtop mt10 padbot">

  <!-- section_services -->

  <?php
  $section_services = get_field('section_services');
  // var_dumpj($section_services);
  ?>

  <div class="row  mb-5">

    <div class="col-1 bg-white"></div>
    <div class="col-2 bg-white   pt-1 pb-1 ">
      <h3>
        <!-- ACF champ avec le field Label -->
        <?php echo $section_services['title']; ?>
      </h3>
    </div>
  </div>


  <div class="row">
    <div class="col-4 offset-1 fontwhite">
      <?php
      foreach ($section_services['content'] as $key => $value) {
      ?>

        <div class="mb-5">
          <h4>
            <?php echo $value['sub_title']; ?>
          </h4>
          <p>
            <?php echo $value['text']; ?>
          </p>
        </div>
        <!--  -->
      <?php
      }
      ?>

      <!--  -->
      <!--  -->
      <!--  -->

      <div>
        <?php
        // var_dumpj($section_services);
        ?>
      </div>

      <a href="<?php echo $section_services['button']['url'] ?> "><button class="btn bg-bluef fontwhite fs-5">
          <?php
          echo $section_services['button']['title']
          ?>
        </button></a>



    </div>

    <div class="col-5 offset-1 d-flex align-items-center justify-content-center">
      <div class="w80">
        <a href="nos-services.html"><img class="w-100" src="<?php echo $section_services['schema_img']['url']; ?>" alt=""></a>
      </div>
    </div>


  </div>


</div>


<div class="container-fluid">

  <div class="row mt10 mb-5">
    <div class="col-1 bg-bleu-tur"></div>
    <div class="col-2 bg-bleu-tur   pt-1 pb-1 fontwhite">
      <h3>Actualité</h3>
    </div>
  </div>


  <!--  -->
  <div class="row mb-5 text-center">
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

      // The Query
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
            <a href="#journée"><img class="w-100" src="
        <?php
          echo $post_actu["thumbnail"]["url"];
        ?>
        " alt=""></a>
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




<div class="container-fluid bg-bleu-tur padtop mt10 mb-5 padbot">
  <div class="row  mb-5">
    <div class="col-1 bg-white"></div>
    <div class="col-2 bg-white  pt-1 pb-1 ">

      <?php
      $job_stages = get_field('job_stages');
      // foreach ($job_stages as $key => $value) {
      var_dumpj($job_stages);
      ?>


      <h3>
        <?php
        echo $job_stages['text'];
        ?>
      </h3>
    </div>
  </div>
  <div class="row ">


    <div class="col-6 offset-1 d-flex flex-column ">
      <div class="d-flex">

        <?php
        foreach ($job_stages['img_field'] as $key => $value) {
        ?>
          <div class="fontwhite  w40 me-3 pt-1">
            <a href="jobs-stage.html"><img class="w-100" src="
          <?php echo $value['img']['url']; ?>
          " alt=""></a>
            <h3 class="text-center">
              <?php
              echo $value['subtitle'];
              ?>
            </h3>
          </div>

          <!--  -->
        <?php
        }
        ?>
      </div>

      <div class="fontwhite ">
        <p>
          <?php
          echo $job_stages['annonce'];
          ?>

          <!--  -->
          <!-- pas fini, ATTENTION -->
          <!--  -->

          <?php
          $adress = get_field('adress', $contactID);
          $mail = $adress['mail'];
          ?>

          <span>
            <!-- <a href="mailto:coucou@salut.io">coucou@salut.io</a> -->
            <a href="mailto:<?php echo $mail; ?>"><?php echo $mail; ?></a>
          </span>
        </p>
      </div>
    </div>

    <!--  -->

    <div class="col-5 fontwhite ">
      <div class="w-100">
        <img class="w-100" src="
        <?php
        echo $job_stages['img']['url'];
        ?>
        " alt="">
      </div>
    </div>

  </div>
</div>

<!--  -->
<!--  -->
<!--  -->
<!--  -->
<!-- petit tuto ci-dessous -->
<!--  -->
<!--  -->
<!--  -->
<!-- recupere les infos du backend
    1. utiliser get_field()
    2. utiliser une boucle foreach() pour parcourir le repeater
    3. afficher avec echo de ce qui est dans $value, en l'occurence $value['nom_du_champ_dans_acf']
-->
<!--
<div class="d-flex flex-wrap my-5">
  <?php
  $missions = get_field('missions');
  //
  // permet de voir le nombre d'élements dans le tableau
  // var_dumpj(count($missions));

  foreach ($missions as $key => $value) {
    // condition pour ajouter une classe css
    if ($key == 0) {
      $greenClass = 'bg-green';
    } else {
      $greenClass = '';
    }

    if ($key === count($missions) - 1) {
      $greenClass = 'bg-green';
    }

  ?>

    <div class="border border-black w10 p-2 <?php echo $greenClass ?> ">
      <?php echo ($key + 1) . '.'; ?>
    </div>
    <div class="border border-black w30 p-2 <?php echo $greenClass ?> ">
      <img class="w10" src=" <?php echo $value['image']['url']; ?>" alt="">
    </div>
    <div class="border border-black w30 p-2 <?php echo $greenClass ?> ">
      <?php echo $value['text']; ?>
    </div>
    <div class="border border-black w30 p-2 <?php echo $greenClass ?> ">
      <?php echo $value['link']['url']; ?>
    </div>
    <?php
  }
    ?> -->
<!--  -->
<!--  -->
<!--  -->
<!--  -->
<!--  -->
</main>
