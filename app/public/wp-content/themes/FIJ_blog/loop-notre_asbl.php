<!-- se referencer au html de medhi et mettre les bons lins php et bons dforeact lies a ACF -->
<div class="row mb-5 mt10">
  <?php
  $welcome = get_field('welcome');
  ?>
  <div class="col-5 offset-1 padtop">
    <div>
      <h2 class="">
        <?php echo $welcome['title']; ?>
      </h2>
      <p>
        <?php echo $welcome['text']; ?>
      </p>
    </div>
  </div>

  <div class="col-5">
    <div>
      <img class="w-100" src="<?php echo $welcome['image']['url']; ?>" alt="">
    </div>
  </div>

</div>


<div class="container-fluid bg-bleu-tur padtop mt10 padbot">

  <?php
  $welcome = get_field('mission');
  ?>
  <div class="row  mb-5">
    <div class="col-1 bg-white"></div>
    <div class="col-2 bg-white   pt-1 pb-1 ">
      <h3>
        <?php echo $welcome['title']; ?>
      </h3>
    </div>
  </div>

  <?php
  $mission = get_field('mission');
  ?>
  <div class="row">

    <div class="col-5 offset-1">
      <div class="w-100">
        <img class="w-100" src="<?php echo $mission['image']['url']; ?>" alt="">
      </div>
    </div>

    <div class="col-5 padtop d-flex align-items-center ">
      <div class="fontwhite">
        <p>
          <?php echo $mission['text']; ?>
          <!-- ! ATTENTION -->
          <!-- <a href=""> (Lien vers
            https://slrb-bghm.brussels/fr/societes-immobilieres-de-service-public/toutes-les-sisp)</a> -->
        </p>
      </div>
    </div>

  </div>


</div>


<div class="container-fluid">
  <?php
  $teams = get_field('teams');
  ?>
  <div class="row mt10 mb-5">
    <div class="col-1 bg-bleu-tur"></div>
    <div class="col-2 bg-bleu-tur   pt-1 pb-1 fontwhite">
      <h3>
        <?php echo $teams['title']; ?>
      </h3>
    </div>
  </div>

  <div class="row ">

    <div class="col-5 offset-1 padtop">
      <p>
        <?php echo $teams['text']; ?>
      </p>
      <?php
      $button_organigramme = get_field('button_organigramme');
      ?>


      <div class="w-100 d-flex justify-content-end padtop">
        <button class="btn bg-bleu-tur fontwhite fs-5 mb-2 w-25"
          onclick="window.open('<?php echo $button_organigramme['url']; ?>', '<?php echo $button_organigramme['target']; ?>')">
          <?php echo $button_organigramme['title']; ?>
        </button>
      </div>
    </div>

    <div class="col-5 d-flex justify-content-center align-items-center">
      <div class="w80">
        <img class="w-100" src="<?php echo $teams['image']['url']; ?>" alt="">
      </div>
    </div>
  </div>
</div>


<!-- <?php
var_dumpj($team_pics)
  ?> -->

<!-- Repeater ACF de la team -->
<!-- ...J'ai du un peux flexer car il y a un seul repeater pour que seuls les bons blocs se répètent ;) ... -->
<div class="container-fluid bg-bleu-tur padtop mt10 mb-5 padbot">
  <?php
  $team_pics = get_field('team_pics');
  ?>
  <!-- partie 1 -->
  <div class="row">
    <div class="col-10 offset-1 d-flex justify-content-between fontwhite">

      <?php
      for ($i = 0; $i <= 3; $i++) {
        ?>

        <div class="w20 text-center">
          <img class="w-100" src="<?php echo $team_pics[$i]['img']['url']; ?>" alt="">
          <h4 class="">
            <?php echo $team_pics[$i]['name']; ?>
          </h4>
        </div>
        <?php
      }
      ?>
    </div>
  </div>

  <!-- partie  2 -->
  <div class="row">
    <div class="col-10 offset-1 d-flex justify-content-between fontwhite">
      <?php
      for ($i = 4; $i <= 7; $i++) {
        ?>
        <div class="w20 text-center">
          <img class="w-100" src="<?php echo $team_pics[$i]['img']['url']; ?>" alt="">
          <h4 class="">
            <?php echo $team_pics[$i]['name']; ?>
          </h4>
        </div>
        <?php
      }
      ?>

    </div>
  </div>



  <!-- directeur -->
  <?php
  $director = get_field('director');
  ?>
  <div class="row mt-5">
    <div class="col-2 offset-1 d-flex p-0">
      <div class="w-100 ps-3">
        <img class="w-100" src="<?php echo $director['img']['url']; ?>" alt="">
      </div>
    </div>

    <div class="col-6 pt-5 fontwhite">
      <h4>
        <?php echo $director['name']; ?>
      </h4>
      <p>
        <?php echo $director['text']; ?>
      </p>
    </div>
  </div>



</div>


</main>
