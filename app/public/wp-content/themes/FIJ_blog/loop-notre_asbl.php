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
      <?php
      var_dumpj($button_organigramme)
        ?>

      <div class="w-100 d-flex justify-content-end padtop">
        <button class="btn bg-bleu-tur fontwhite fs-5 mb-2 w-25"
          onclick="window.open('<?php echo $button_organigramme['url']; ?>', '<?php echo $button_organigramme['target']; ?>')">
          <?php echo $button_organigramme['title']; ?>
        </button>
      </div>
    </div>

    <!-- <?php
    var_dumpj($teams)
      ?> -->

    <div class="col-5 d-flex justify-content-center align-items-center">
      <div class="w80">
        <img class="w-100" src="<?php echo $teams['image']['url']; ?>" alt="">
      </div>
    </div>
  </div>
</div>



<div class="container-fluid bg-bleu-tur padtop mt10 mb-5 padbot">


  <?php
      $team_pics = get_field('team_pics');
      ?>

  <div class="row">
    <div class="col-10 offset-1 d-flex justify-content-between fontwhite">

      <?php
    foreach ($team_pics as $key => $value) {
      ?>

      <div class="w20 text-center">
        <img class="w-100" src="pics/fille1.png" alt="">
        <h4 class="">Antonieta Virtosu Nardin <br> Assistante </h4>
      </div>


      <div class="w20 text-center">
        <img class="w-100" src="pics/fille2.png" alt="">
        <h4>Béatrice Massart <br> Responsable RH </h4>
      </div>

      <div class="w20 text-center">
        <img class="w-100" src="pics/garcons1.png" alt="">
        <h4>Kuzomono Espoir <br> Docteur </h4>
      </div>

      <div class="w20 text-center">
        <img class="w-100" src="pics/fille3.png" alt="">
        <h4>Clémence Delcourte <br> Assistante RH  </h4>
      </div>

    </div>
  </div>

  <div class="row">
    <div class="col-10 offset-1 d-flex justify-content-between fontwhite">

      <div class="w20 text-center">
        <img class="w-100" src="pics/fille4.png" alt="">
        <h4 class="">Antonieta Virtosu Nardin <br> Assistante </h4>
      </div>

      <div class="w20 text-center">
        <img class="w-100" src="pics/fille5.png" alt="">
        <h4>Béatrice Massart <br> Responsable RH </h4>
      </div>

      <div class="w20 text-center">
        <img class="w-100" src="pics/fille6.png" alt="">
        <h4>Kuzomono Espoir <br> Docteur </h4>
      </div>

      <div class="w20 text-center">
        <img class="w-100" src="pics/fille7.png" alt="">
        <h4>Clémence Delcourte <br> Assistante RH  </h4>
      </div>

    </div>
  </div>


  <div class="row mt-5">

    <div class="col-2 offset-1 d-flex p-0">
      <div class="w-100 ps-3">
        <img class="w-100" src="pics/boss.png" alt="">
      </div>
    </div>

    <div class="col-6 pt-5 fontwhite">
      <h4>Tony Loze <br>Directeur</h4>
      <p>Les valeurs qui guident nos missions sont le respect, neutralité, passion, intégrité, flexibilité,
        autonomie, solidarité et respect. </p>
    </div>
  </div>



</div>






</main>
