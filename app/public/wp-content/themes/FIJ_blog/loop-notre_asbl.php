<!-- se referencer au html de medhi et mettre les bons lins php et bons dforeact lies a ACF -->
<div class="row mb-5 mt10">
  <?php
  $welcome = get_field('welcome');
  var_dumpj($welcome)
    ?>
  <div class="col-5 offset-1 padtop  ">
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
      <img class="w-100" src="pics/welcom.png" alt="">
    </div>
  </div>
</div>



<div class="container-fluid bg-bleu-tur padtop mt10 padbot">


  <div class="row  mb-5">
    <div class="col-1 bg-white"></div>
    <div class="col-2 bg-white   pt-1 pb-1 ">
      <h3>Notre mission</h3>
    </div>
  </div>


  <div class="row">

    <div class="col-5 offset-1">
      <div class="w-100">
        <img class="w-100" src="pics/mission.png" alt="">
      </div>
    </div>

    <div class="col-5 padtop d-flex align-items-center ">
      <div class="fontwhite">
        <p>La SASLS a pour mission d’assurer un accompagnement social individuel des candidats-locataires et des
          locataires des sociétés immobilières de service public, ainsi qu’un accompagnement social collectif de ces
          locataires.
          Pour répondre aux besoins des locataires sociaux et ainsi réaliser son objet social, l’asbl détache 60
          travailleurs sociaux auprès des 16 SISP de la Région de Bruxelles-Capitale pour. <a href=""> (Lien vers
            https://slrb-bghm.brussels/fr/societes-immobilieres-de-service-public/toutes-les-sisp)</a>
        </p>
      </div>
    </div>

  </div>


</div>


<div class="container-fluid">

  <div class="row mt10 mb-5">
    <div class="col-1 bg-bleu-tur"></div>
    <div class="col-2 bg-bleu-tur   pt-1 pb-1 fontwhite">
      <h3>L'equipes</h3>
    </div>
  </div>

  <div class="row ">

    <div class="col-5 offset-1 padtop">
      <p>L’équipe au siège est constituée de 4 départements sous la responsabilité de la direction tenu par Tony
        Loze</p>
      <div class="w-100 d-flex justify-content-end padtop"><button class="btn bg-bleu-tur fontwhite fs-5 mb-2 w-25 ">
          organigramme</button></div>
    </div>

    <div class="col-5 d-flex justify-content-center align-items-center">
      <div class="w80">
        <img class="w-100" src="pics/equipe.png" alt="">
      </div>
    </div>
  </div>
</div>



<div class="container-fluid bg-bleu-tur padtop mt10 mb-5 padbot">

  <div class="row">
    <div class="col-10 offset-1 d-flex justify-content-between fontwhite">

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