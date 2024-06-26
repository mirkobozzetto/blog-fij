<?php
include(locate_template('myvars.php'));
$accueil = get_option('page_on_front');
$title = get_field('txt_mission', $accueil);
?>

<div id="travail" class="row mt10 mb-5">
  <div class="col-1 bg-bleu-tur"></div>
  <div class="col-5 bg-bleu-tur   pt-1 pb-1 fontwhite">
    <h3>
      <?php echo $title; ?>
    </h3>
  </div>
</div>


<div class="row">
  <div class="col-10 offset-1 d-flex justify-content-between mt-5 flex-wrap">

    <?php
    $missions = get_field('missions', $accueil);
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

</div>
</div>


<div class="row mt10 mb-5">
  <div class="col-1 bg-bleu-tur"></div>
  <div class="col-4 bg-bleu-tur   pt-1 pb-1 fontwhite">
    <h3>
      <?php
      $as_sisp = get_field('as-sisp');
      echo $as_sisp['title'];
      ?>
    </h3>
  </div>
</div>

<div class="row">
  <?php
  ?>
  <div class="col-5 offset-1">
    <div class="w-100">
      <?php
      // var_dumpj($as_sisp['img']['url'] );
      // echo $as_sisp['img'];
      ?>
      <img class="w-100" src="<?php echo $as_sisp['img']['url']; ?>" alt="">
    </div>
  </div>

  <div class=" col-5 offset-1 padtop ">
    <div class=" w80">
      <h2 class="">
        <?php
        echo $as_sisp['subtitle'];
        ?>
      </h2>
      <p>
        <?php
        echo $as_sisp['text'];
        ?>
      </p>
    </div>
  </div>
</div>
</div>

<?php
$conflits = get_field('conflits');

?>
<div id="voisin" class="container-fluid bg-bleu-tur padtop mt10 padbot">
  <div class="row">
    <div class="col-1 bg-white"></div>
    <div class="col-2 bg-white   pt-1 pb-1 ">
      <h3>
        <?php
        echo $conflits['title'];
        ?>
      </h3>
    </div>
  </div>

  <div class="row mb-5 mt10">
    <div class="col-5 offset-1  fontwhite d-flex align-items-center  ">
      <div class="w80">
        <h4 class="">
          <?php
          echo $conflits['subtitle'];
          ?>
        </h4>

        <?php
        echo $conflits['text'];
        ?>

      </div>
    </div>

    <div class="col-5 d-flex align-items-center justify-content-center">
      <div class="w-100 d-flex flex-column align-items-end justify-content-end">
        <img class="w-100" src="<?php echo $conflits['img']['url']; ?>" alt="">
        <a href="#travail"><i class="fa-solid fa-turn-up fontwhite"></i></a>
      </div>
    </div>
  </div>

</div>

<div id="precarite" class="container-fluid padtop mt10 padbot">

  <div class="row">
    <div class="col-1 bg-bleu-tur"></div>
    <div class="col-3 bg-bleu-tur  fontwhite pt-1 pb-1 ">
      <?php
      $precarite = get_field('precarite');
      ?>
      <h3>
        <?php
        echo $precarite['title'];
        ?>
      </h3>
    </div>
  </div>

  <div class="row mb-5 mt10">
    <div class="col-5 offset-1 font-black ">
      <div class="w-100 flex-column align-items-end justify-content-end">
        <img class="w-100" src="
        <?php echo
        $precarite['img']['url'];
        ?>  " alt="">
        <a href="#travail"><i class="fa-solid fa-turn-up fa-flip-horizontal  "></i></a>
      </div>
    </div>

    <div class="col-5 offset-1 d-flex align-items-center   ">
      <div class="w80">
        <h4 class="">
          <?php
          echo $precarite['subtitle'];
          ?>
        </h4>
        <p>
          <?php
          echo $precarite['text'];
          ?>
      </div>
    </div>
  </div>
</div>


<div id="demarche" class="container-fluid bg-bleu-tur padtop mt10 padbot">
  <?php
  $accompagnement = get_field('accompagnement');
  // var_dumpj($accompagnement);
  ?>
  <div class="row">
    <div class="col-1 bg-white"></div>
    <div class="col-3 bg-white   pt-1 pb-1 ">
      <h3>
        <?php
        echo $accompagnement['title'];
        ?>
      </h3>
    </div>
  </div>

  <div class="row mb-5 mt10">

    <div class="col-5 offset-1  fontwhite d-flex align-items-center  ">
      <div class="w80">
        <h4 class="">
          <?php
          echo $accompagnement['subtitle'];
          ?>
        </h4>
        <p>
          <?php
          echo $accompagnement['text'];
          ?>
      </div>
    </div>

    <div class="col-5 d-flex align-items-center justify-content-center">
      <div class="w-100 d-flex flex-column align-items-end justify-content-end">
        <img class="w-100" src="
        <?php echo $accompagnement['img']['url']; ?>
        " alt="">
        <a href="#travail"><i class="fa-solid fa-turn-up fontwhite"></i></a>
      </div>
    </div>
  </div>

</div>

<div id="dette" class="container-fluid padtop mt10 padbot">
  <?php
  $dettes = get_field('dettes');
  ?>
  <div class="row">
    <div class="col-1 bg-bleu-tur"></div>
    <div class="col-3 bg-bleu-tur  fontwhite pt-1 pb-1 ">
      <h3>
        <?php
        echo $dettes['title'];
        ?>
      </h3>
    </div>
  </div>

  <div class="row mb-5 mt10">
    <div class="col-5 offset-1 font-black">
      <div class="w-100">
        <img class="w-100" src="
        <?php echo $dettes['img']['url']; ?>
        " alt="">
        <a href="#travail"><i class="fa-solid fa-turn-up fa-flip-horizontal  "></i></a>
      </div>
    </div>




    <div class="col-5 offset-1 d-flex align-items-center   ">
      <div class="w80">
        <h4 class="">
          <?php
          echo $dettes['subtitle'];
          ?>
        </h4>
        <p>
          <?php
          echo $dettes['text'];
          ?>
      </div>
    </div>
  </div>
</div>


<div id="guidance" class="container-fluid bg-bleu-tur padtop mt10 padbot">
  <?php
  $guidance = get_field('guidance');
  ?>
  <div class="row">
    <div class="col-1 bg-white"></div>
    <div class="col-3 bg-white   pt-1 pb-1 ">
      <h3>
        <?php
        echo $guidance['title'];
        ?>
      </h3>
    </div>
  </div>

  <div class="row mb-5 mt10">

    <div class="col-5 offset-1  fontwhite d-flex align-items-center  ">
      <div class="w80">
        <h4 class="">
          <?php
          echo $guidance['subtitle'];
          ?>
        </h4>
        <p>
          <?php
          echo $guidance['text'];
          ?> </p>
      </div>
    </div>

    <div class="col-5 d-flex align-items-center justify-content-center">
      <div class="w-100 d-flex flex-column align-items-end justify-content-end">
        <img class="w-100" src="
        <?php echo $guidance['img']['url']; ?>
        " alt="">
        <a href="#travail"><i class="fa-solid fa-turn-up fontwhite"></i></a>
      </div>
    </div>
  </div>

</div>

<div id="aide" class="container-fluid padtop mt10 padbot">

  <div class="row">
    <?php
    $documents = get_field('documents');
    ?>
    <div class="col-1 bg-bleu-tur"></div>
    <div class="col-3 bg-bleu-tur  fontwhite pt-1 pb-1 ">
      <h3>
        <?php
        echo $documents['title'];
        ?>
      </h3>
    </div>
  </div>

  <div class="row mb-5 mt10">

    <div class="col-5 offset-1 font-black">
      <div class="w-100">
        <img class="w-100" src="
        <?php echo $documents['img']['url']; ?>
        " alt="">
        <a href="#travail"><i class="fa-solid fa-turn-up fa-flip-horizontal  "></i></a>
      </div>
    </div>

    <div class="col-5 offset-1 d-flex align-items-center   ">
      <div class="w80">
        <h4 class="">
          <?php
          echo $documents['subtitle'];
          ?>
        </h4>
        <p>
          <?php
          echo $documents['text'];
          ?>
        </p>
      </div>
    </div>
  </div>
</div>


<?php
$premier_accueil = get_field('accueil');
?>
<div id="accueil" class="container-fluid bg-bleu-tur padtop mt10 padbot">
  <div class="row">
    <div class="col-1 bg-white"></div>
    <div class="col-2 bg-white   pt-1 pb-1 ">
      <h3>
        <?php
        echo $premier_accueil['title'];
        ?>
      </h3>
    </div>
  </div>

  <div class="row mb-5 mt10">

    <div class="col-5 offset-1  fontwhite d-flex align-items-center  ">
      <div class="w80">
        <h4 class="">
          <?php
          echo $premier_accueil['subtitle'];
          ?>
        </h4>
        <p>
          <?php
          echo $premier_accueil['text'];
          ?>
      </div>
    </div>

    <div class="col-5 d-flex align-items-center justify-content-center">
      <div class="w-100 d-flex flex-column align-items-end justify-content-end">
        <img class="w-100" src="
        <?php echo $premier_accueil['img']['url']; ?>
        " alt="">
        <a href="#travail"><i class="fa-solid fa-turn-up fontwhite"></i></a>
      </div>
    </div>
  </div>

</div>


<div id="reseau" class="container-fluid padtop mt10 padbot">
  <?php
  $partenariat = get_field('partenariat');
  ?>
  <div class="row">
    <div class="col-1 bg-bleu-tur"></div>
    <div class="col-3 bg-bleu-tur  fontwhite pt-1 pb-1 ">
      <h3>
        <?php
        echo $partenariat['title'];
        ?>
      </h3>
    </div>
  </div>

  <div class="row mb-5 mt10">
    <div class="col-5 offset-1 font-black ">
      <div class="w-100">
        <img class="w-100" src="
        <?php echo $partenariat['img']['url']; ?>
        " alt="">
        <a href="#travail"><i class="fa-solid fa-turn-up fa-flip-horizontal  "></i></a>
      </div>
    </div>

    <div class="col-5 offset-1 d-flex align-items-center   ">
      <div class="w80">
        <h4 class="">
          <?php
          echo $partenariat['subtitle'];
          ?>
        </h4>

        <p>
          <?php
          echo $partenariat['text'];
          ?>
        </p>
      </div>
    </div>
  </div>


  <?php
  $temoignages = get_field('temoignages');
  $carousel = $temoignages['temoignages'];
  // var_dumpj($carousel);
  // text & nom
  ?>

  <div class="row mt10 mb-5">
    <div class="col-1 bg-bleu-tur"></div>
    <div class="col-7 bg-bleu-tur   pt-1 pb-1 fontwhite">
      <h3>
        <?php
        echo $temoignages['title'];
        ?>
      </h3>
    </div>
  </div>

  <div class="row">
    <div class="col-7 offset-1">

      <div id="carouselExample" class="carousel slide pt-5  w-100">
        <div class="carousel-inner">
          <?php
          foreach ($carousel as $key => $value) {
            if ($key == 0) {
              $active = 'active';
            } else {
              $active = '';
            }
          ?>
            <div class="carousel-item <?php echo $active; ?> bg-bleu-tur fontwhite text-center  carousel1">
              <p class="">
                <?php echo $value['text']; ?>
              </p>
              <h2>
                <?php echo $value['nom']; ?>
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


    <div class="col-3">
      <div>
        <img class="w-100" src="
        <?php echo $temoignages['img']['url']; ?>
        " alt="">
      </div>
    </div>
  </div>
</div>



<?php
$job_stages = get_field('job_stages', $accueil);
// var_dumpj($job_stages);
?>
<div class="container-fluid bg-bleu-tur padtop mt10 mb-5 padbot">
  <div class="row  mb-5">
    <div class="col-1 bg-white"></div>
    <div class="col-2 bg-white  pt-1 pb-1 ">
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
          <!-- récupération dynamique depuis une autre page avec la balise du dessus qui appelle myvars -->
          <!--  -->

          <?php
          $adress = get_field('adress', $contactID);
          $mail = $adress['mail'];
          ?>
          <!-- mail link -->
          <span>
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
</main>
