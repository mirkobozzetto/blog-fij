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
          <img class="w-100" src="  <?php echo $value['image']['url'] ?>  " alt="">
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

<!-- <div class="row ">
  <div class="col-10 offset-1 d-flex justify-content-between mt-5">

    <div class="w20 ">
      <a href="travail-assistant.html#voisin"><img class="w-100" src="pics/patille-voisingae.png" alt=""></a>
      <h5 class="text-center">Prévention et tentative de désamorçage des conflits de voisinage</h5>
    </div>

    <div class="w20">
      <a href="travail-assistant.html#precarite"><img class="w-100" src="pics/pastille-enquete.png" alt=""></a>
      <h5 class="text-center">Enquêtes de précarité</h5>
    </div>

    <div class="w20">
      <a href="travail-assistant.html#demarche"><img class="w-100" src="pics/pastille-accompagnement.png" alt=""></a>
      <h5 class="text-center">Accompagnement dans les démarche sociales</h5>
    </div>

    <div class="w20">
      <a href="travail-assistant.html#dette"><img class="w-100" src="pics/pastille-dette.png" alt=""></a>
      <h5 class="text-center">surendettement et arriérés locatifs</h5>
    </div>

  </div>
</div>

<div class="row mt-5 ">
  <div class="col-10 offset-1 d-flex justify-content-between">

    <div class="w20">
      <a href="travail-assistant.html#guidance"><img class="w-100" src="pics/pastille-guidance.png" alt=""></a>
      <h5 class="text-center">Guidance pédagogique sur les régles d'entretien du logement</h5>
    </div>

    <div class="w20">
      <a href="travail-assistant.html#aide"><img class="w-100" src="pics/pastille-aide.png" alt=""></a>
      <h5 class="text-center">Aide à la recolte de documents pour les locataires</h5>
    </div>

    <div class="w20">
      <a href="travail-assistant.html#accueil"><img class="w-100" src="pics/pastille-accueil.png" alt=""></a>
      <h5 class="text-center">Premier accueil et réorientation des locataires</h5>
    </div>

    <div class="w20">
      <a href="travail-assistant.html#reseau"><img class="w-100" src="pics/pastille-dev.png" alt=""></a>
      <h5 class="text-center">Dévloppement d'un réseau de partenariat</h5>
    </div>

  </div>
</div>
-->

<div class="row mt10 mb-5">
  <div class="col-1 bg-bleu-tur"></div>
  <div class="col-7 bg-bleu-tur   pt-1 pb-1 fontwhite">
    <!-- <h3>Le travail en tant qu'assistant(e) social(e) en société de logement social est riche est varié comme en
      temoignent les suivants récits:</h3> -->


    <h3>
      <!-- ACF champ avec le field Label -->

      <?php echo get_field('txt_travail'); ?>
    </h3>
  </div>
</div>


<div class="row">
  <div class="col-7 offset-1">

    <div id="carouselExample" class="carousel slide pt-5  w-100 ">
      <div class="carousel-inner">
        <div class="carousel-item active bg-bleu-tur fontwhite text-center  carousel1 ">
          <!-- <p>
            “Trois types d’accompagnement social sont proposés aux locataires sociaux :
            le travail individuel, collectif et communautaire. Les travailleurs sociaux
            de la SASLS détachés en SISP réalisent les entretiens individuels et les actions
            collectives. Ils ont principalement les huit” missions suivantes :
          </p> -->


          <p>

            <?php echo get_field('txt_carousel1'); ?>
          </p>
          <h2>"Coralie Dupont"</h2>
        </div>

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
      <img class="w-100" src="pics/pastille-guidance.png" alt="">
    </div>
  </div>


</div>

</div>


<div class="container-fluid bg-bleu-tur padtop mt10 padbot">


  <div class="row  mb-5">
    <div class="col-1 bg-white"></div>
    <div class="col-2 bg-white   pt-1 pb-1 ">
      <h3>Nos services</h3>
    </div>
  </div>


  <div class="row">
    <div class="col-4 offset-1 fontwhite">

      <div class="mb-5">
        <h4>L’équipe Mobile Santé Mentale</h4>
        <p>L'Équipe Mobile au sein du Service d’Accompagnement aux Locataires Sociaux a été créée par
          la Secrétaire d’État du Logement, Mme Ben Hamou. Cette équipe aide les travailleurs sociaux des
          16 Sociétés de Logement Public à Bruxelles quand ils sont confrontés à des locataires ayant des
          problèmes de santé mentale</p>
      </div>

      <div class="mb-5">
        <h4>Pôle formation</h4>
        <p>La SASLS propose des formations aux assistants sociaux détachées en SISP par elle et aux assistants
          sociaux des SISP bruxelloises, aux référents sociaux wallons, aux assistants sociaux de la Région
          Flamande et tout autre professionnel intéressé par les sujets traités.</p>
      </div>

      <div class="mb-5">
        <h4>Le centre de ressourcement du travail social logement et habitat</h4>
        <p>LLe centre a pour but de renforcer les ressources mises à la disposition des professionnels et futurs
          professionnels de terrain du secteur social et plus particulièrement du logement et santé mentale.</p>
      </div>


      <a href="nos-services.html"><button class="btn bg-bluef fontwhite fs-5"> Lire la suite</button></a>



    </div>

    <div class="col-5 offset-1 d-flex align-items-center justify-content-center">
      <div class="w80">
        <a href="nos-services.html"><img class="w-100" src="pics/shema-services.png" alt=""></a>
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

  <div class="row mb-5">
    <div class="col-10 offset-1 d-flex justify-content-around">

      <div class="w-25 text-center">
        <a href="#journée"><img class="w-100" src="pics/actu-formation.png" alt=""></a>
        <h5>Journées formations </h5>
        <p class="date">Juin 2022 </p>
      </div>

      <div class="w-25 text-center">
        <a href="#info"><img class="w-100" src="pics/actu-info.png" alt=""></a>
        <h5>Journées info </h5>
        <p class="date">Avril 2022 </p>
      </div>


      <div class="w-25 text-center">
        <a href="#déjeuner"><img class="w-100" src="pics/actu-dejeuner.png" alt=""></a>
        <h5>Petit déjeuner SASLS </h5>
        <p class="date">Mars 2022 </p>
      </div>


      <div class="w-25 text-center">
        <a href="#projet"><img class="w-100" src="pics/actu-projet.png" alt=""></a>
        <h5>Projets en cours  </h5>
        <p class="date">Arnaud dupont juin 2022 </p>
      </div>


    </div>
  </div>

  <!--   <div class="row mb-5">
    <div class="col-10 offset-1 d-flex justify-content-around">

      <div class="w30 text-center">
        <a href="actualite.html#soins"><img class="w-100" src="pics/soins.png" alt=""></a>
        <h5>Tous les soins santé remboursés</h5>
      </div>

        <div class="w30 text-center">
        <a href="actualite.html#aide"><img class="w-100"  src="pics/aide_actu.png" alt=""></a>
        <h5>Une aide plus importante</h5>
      </div>


      <div class="w30 text-center">
        <a href="actualite.html#smart"><img class="w-100"  src="pics/smartphone.png" alt=""></a>
        <h5>Les smartphone pas avant 13 ans</h5>
      </div>


    </div>
  </div> -->
</div>


<div class="container-fluid bg-bleu-tur padtop mt10 mb-5 padbot">


  <div class="row  mb-5">
    <div class="col-1 bg-white"></div>
    <div class="col-2 bg-white  pt-1 pb-1 ">
      <h3>Jobs et Stages</h3>
    </div>
  </div>



  <div class="row ">


    <div class="col-6 offset-1 d-flex flex-column ">

      <div class="d-flex">
        <div class="fontwhite  w40 me-3 pt-1">
          <a href="jobs-stage.html"><img class="w-100" src="pics/jobs.png" alt=""></a>
          <h3 class="text-center">Poste à pourvoir</h3>
        </div>

        <div class="fontwhite  w40">
          <a href="jobs-stage.html"><img class="w-100" src="pics/stages.png" alt=""></a>
          <h3 class="text-center ps-5">Stage à pourvoir</h3>
        </div>
      </div>

      <div class="fontwhite ">
        <p>Pour les candidatures spontanées vous pouvez nous écrire à l’adresse mail suivante:
          infodirection@sasls.irisnet.be </p>
      </div>

    </div>




    <div class="col-5 fontwhite ">
      <div class="w-100">
        <img class="w-100" src="pics/job-stage.png" alt="">

      </div>
    </div>

  </div>
</div>



</main>
