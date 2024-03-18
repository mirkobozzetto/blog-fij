<?php
// include(locate_template('myvars.php'));
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

  <div class="row">
    <div class="col-1 bg-bleu-tur"></div>
    <div class="col-3 bg-bleu-tur  fontwhite pt-1 pb-1 ">
      <h3>Surendettement et arriérés </h3>
    </div>
  </div>

  <div class="row mb-5 mt10">
    <div class="col-5 offset-1 font-black">
      <div class="w-100">
        <img class="w-100" src="pics/dette-locatif.png" alt="">
        <a href="#travail"><i class="fa-solid fa-turn-up fa-flip-horizontal  "></i></a>
      </div>
    </div>




    <div class="col-5 offset-1 d-flex align-items-center   ">
      <div class="w80">
        <h4 class="">Surendettement et arriérés locatifs </h4>
        <p>accompagnement social budgétaire et élaboration d'un plan d'apurement de dettes, dans le cadre d'une
          démarche destinée à prévenir d'éventuelles actions administratives et judiciaires à l'encontre du locataire
        </p>

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus voluptas nostrum enim ex facere quasi
          autem. Cumque fuga nam tempora earum quas consequuntur, esse veritatis, mollitia sint minima quisquam, qui.
        </p>

        <P>Lorem ipsum dolor sit amet consectetur adipisicing, elit. Quod et laboriosam necessitatibus dicta rerum
          quaerat error. Animi assumenda tempora vel placeat aperiam laborum necessitatibus, voluptates, cum odit,
          dignissimos dolores eligendi.</P>
      </div>
    </div>
  </div>
</div>


<div id="guidance" class="container-fluid bg-bleu-tur padtop mt10 padbot">

  <div class="row">
    <div class="col-1 bg-white"></div>
    <div class="col-3 bg-white   pt-1 pb-1 ">
      <h3>Guidance pédagogique </h3>
    </div>
  </div>

  <div class="row mb-5 mt10">

    <div class="col-5 offset-1  fontwhite d-flex align-items-center  ">
      <div class="w80">
        <h4 class="">Guidance pédagogique sur les règles d'entretien du logement </h4>
        <p>Guidance pédagogique sur les règles d'entretien du logement et du respect des obligations du locataire </p>

        <p>Lorem ipsum dolor sit amet consectetur adipisicing, elit. Dolorem provident cum debitis dignissimos optio
          praesentium iure eos nisi sint sequi, alias voluptatem, blanditiis consectetur, ullam facilis. Incidunt,
          modi exercitationem cupiditate.</p>

        <p>Lorem ipsum dolor, sit amet, consectetur adipisicing elit. Porro pariatur veritatis vero incidunt.
          Inventore, quibusdam, ea mollitia saepe eius rerum minus atque voluptatem. Nam quis aspernatur quibusdam
          nisi cupiditate veritatis?</p>

      </div>
    </div>

    <div class="col-5 d-flex align-items-center justify-content-center">
      <div class="w-100 d-flex flex-column align-items-end justify-content-end">
        <img class="w-100" src="pics/guidance.png" alt="">
        <a href="#travail"><i class="fa-solid fa-turn-up fontwhite"></i></a>
      </div>
    </div>
  </div>

</div>

<div id="aide" class="container-fluid padtop mt10 padbot">

  <div class="row">
    <div class="col-1 bg-bleu-tur"></div>
    <div class="col-3 bg-bleu-tur  fontwhite pt-1 pb-1 ">
      <h3>Aide à la récolte de documents  </h3>
    </div>
  </div>

  <div class="row mb-5 mt10">

    <div class="col-5 offset-1 font-black">
      <div class="w-100">
        <img class="w-100" src="pics/aide-document.png" alt="">
        <a href="#travail"><i class="fa-solid fa-turn-up fa-flip-horizontal  "></i></a>
      </div>
    </div>

    <div class="col-5 offset-1 d-flex align-items-center   ">
      <div class="w80">
        <h4 class="">Aide à la récolte de documents pour les locataires </h4>
        <p>Aide à la récolte de documents pour les locataires en difficulté dans le cadre de la révision annuelle des
          loyers </p>

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus voluptas nostrum enim ex facere quasi
          autem. Cumque fuga nam tempora earum quas consequuntur, esse veritatis, mollitia sint minima quisquam, qui.
        </p>

        <P>Lorem ipsum dolor sit amet consectetur adipisicing, elit. Quod et laboriosam necessitatibus dicta rerum
          quaerat error. Animi assumenda tempora vel placeat aperiam laborum necessitatibus, voluptates, cum odit,
          dignissimos dolores eligendi.</P>


      </div>
    </div>
  </div>
</div>

<div id="accueil" class="container-fluid bg-bleu-tur padtop mt10 padbot">
  <div class="row">
    <div class="col-1 bg-white"></div>
    <div class="col-2 bg-white   pt-1 pb-1 ">
      <h3>Premier accueil </h3>
    </div>
  </div>

  <div class="row mb-5 mt10">

    <div class="col-5 offset-1  fontwhite d-flex align-items-center  ">
      <div class="w80">
        <h4 class="">Premier accueil et réorientation des locataires </h4>
        <p>Premier accueil et réorientation des locataires vers les services ad hoc capables d'assurer un suivi
          efficace </p>

        <p>Lorem ipsum dolor sit amet consectetur adipisicing, elit. Dolorem provident cum debitis dignissimos optio
          praesentium iure eos nisi sint sequi, alias voluptatem, blanditiis consectetur, ullam facilis. Incidunt,
          modi exercitationem cupiditate.</p>

        <p>Lorem ipsum dolor, sit amet, consectetur adipisicing elit. Porro pariatur veritatis vero incidunt.
          Inventore, quibusdam, ea mollitia saepe eius rerum minus atque voluptatem. Nam quis aspernatur quibusdam
          nisi cupiditate veritatis?</p>

      </div>
    </div>

    <div class="col-5 d-flex align-items-center justify-content-center">
      <div class="w-100 d-flex flex-column align-items-end justify-content-end">
        <img class="w-100" src="pics/premier-accueil.png" alt="">
        <a href="#travail"><i class="fa-solid fa-turn-up fontwhite"></i></a>
      </div>
    </div>
  </div>

</div>


<div id="reseau" class="container-fluid padtop mt10 padbot">

  <div class="row">
    <div class="col-1 bg-bleu-tur"></div>
    <div class="col-3 bg-bleu-tur  fontwhite pt-1 pb-1 ">
      <h3>réseau de partenariat</h3>
    </div>
  </div>

  <div class="row mb-5 mt10">
    <div class="col-5 offset-1 font-black ">
      <div class="w-100">
        <img class="w-100" src="pics/dev-partenariat.png" alt="">
        <a href="#travail"><i class="fa-solid fa-turn-up fa-flip-horizontal  "></i></a>
      </div>
    </div>

    <div class="col-5 offset-1 d-flex align-items-center   ">
      <div class="w80">
        <h4 class="">Développement d'un réseau de partenariat</h4>
        <p>Développement d'un réseau de partenariat autour de la SISP ou renforcement du réseau existant.</p>

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus voluptas nostrum enim ex facere quasi
          autem. Cumque fuga nam tempora earum quas consequuntur, esse veritatis, mollitia sint minima quisquam, qui.
        </p>

        <P>Lorem ipsum dolor sit amet consectetur adipisicing, elit. Quod et laboriosam necessitatibus dicta rerum
          quaerat error. Animi assumenda tempora vel placeat aperiam laborum necessitatibus, voluptates, cum odit,
          dignissimos dolores eligendi.</P>
      </div>
    </div>
  </div>


  <div class="row mt10 mb-5">
    <div class="col-1 bg-bleu-tur"></div>
    <div class="col-7 bg-bleu-tur   pt-1 pb-1 fontwhite">
      <h3>Le travail en tant qu'assistant(e) social(e) en société de logement social est riche est varié comme en
        temoignent les suivants récits:</h3>
    </div>
  </div>


  <div class="row">
    <div class="col-7 offset-1">

      <div id="carouselExample" class="carousel slide pt-5  ">
        <div class="carousel-inner">
          <div class="carousel-item active bg-bleu-tur fontwhite text-center  carousel1 ">
            <p>
              “Trois types d’accompagnement social sont proposés aux locataires sociaux :
              le travail individuel, collectif et communautaire. Les travailleurs sociaux
              de la SASLS détachés en SISP réalisent les entretiens individuels et les actions
              collectives. Ils ont principalement les huit” missions suivantes :
            </p>
            <h2>"Coralie Dupont"</h2>
          </div>
          <!-- <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div> -->
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
        <img class="w-100" src="pics/pastille-temoignage.png" alt="">
      </div>
    </div>
  </div>
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
        <p class="fs-5">Pour les candidatures spontanées vous pouvez nous écrire à l’adresse mail suivante:
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
