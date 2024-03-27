<div class="container-fluid">
  <div class="row mt10 mb-5">
    <div class="col-1 bg-bleu-tur"></div>
    <div class="col-3 bg-bleu-tur   pt-1 pb-1 fontwhite">

      <h3>
        <?php
        echo get_field("jobs")
        ?>
      </h3>
    </div>
  </div>

  <!--  -->

  <?php
  $job_list = get_field("jobs_posts");
  foreach ($job_list as $key => $value) {
    // var_dumpj($value);
    if (get_field('type_contrat', $value['job']) == "CDD") {
      $contrat = get_field('type_contrat', $value['job']) . " d'une durée de " . get_field('duree', $value['job']);
    } else {
      $contrat = get_field('type_contrat', $value['job']);
    }
  ?>
  <div class="row mt10 ">
    <div class="col-8 offset-1  border bg-bleu-tur fontwhite p-5">
      <h3>
        <?php
          echo get_the_title($value['job']);
          ?>
      </h3>
      <h4>
        <?php echo get_field('lieu', $value['job']); ?>
        <br>
        <?php echo get_field('regime', $value['job']); ?> , <?php echo $contrat; ?>
      </h4>
      <p>
        <?php echo get_field('description', $value['job']); ?>
      </p>
      <?php
        $postuler = get_field("postuler");
        // var_dumpj($postuler);
        ?>
      <a class="btn bg-bluef fontwhite fs-5 mb-2" href="<?php echo $postuler['url']; ?>">
        <?php echo $postuler['title']; ?>
      </a>
      <!-- <a href=""><button class="btn bg-bluef fontwhite fs-5 mb-2 "> postuler</button></a> -->
    </div>
  </div>
  <?php
  }
  ?>

  <div class="row mt10 mb-5">
    <div class="col-1 bg-bleu-tur"></div>
    <div class="col-3 bg-bleu-tur   pt-1 pb-1 fontwhite">
      <h3>Les stages disponibles</h3>
    </div>
  </div>

  <div class="row mt10 ">
    <div class="col-8 offset-1  border bg-bleu-tur fontwhite p-5">
      <h3>Assistant Ressources Humaines - Sous-officier</h3>
      <h4>La défense Belgique<br>
        Temps plein, CDI</h4>
      <p>
        TRAVIE est une Entreprise de Travail Adapté (ETA) dont l’objet social vise l’épanouissement de la personne en
        situation de handicap et sa structuration par le travail. La personne, sa formation, son encadrement, son
        développement, sa sécurité et son bien-être au travail sont au centre des préoccupations de l’équipe de
        gestion. Afin d’assurer la pérennité de cet objet social, une attention toute particulière est également
        accordée à la rentabilité économique de l’entreprise, avec notamment un accent rigoureux sur la qualité
        délivrée et sur la recherche constante de nouvelles activités
      </p>
      <a href=""><button class="btn bg-bluef fontwhite fs-5 mb-2 "> postuler</button></a>
    </div>
  </div>

  <div class="row mt10 ">
    <div class="col-8 offset-1  border bg-bleu-tur fontwhite p-5">
      <h3>Stage Assistant RH</h3>
      <h4>Waterloo Skyforce Cyber Security<br>
        Temps plein, CDI</h4>
      <p>
        Vous êtes à la recherche d'un stage conventionné.
        Être un support administratif office et au RH Manager (courriers divers, documents sociaux, etc).
      </p>
      <a href=""><button class="btn bg-bluef fontwhite fs-5 mb-2 "> postuler</button></a>
    </div>
  </div>

  <div class="row mt10">
    <div class="col-8 offset-1  border bg-bleu-tur fontwhite p-5">
      <h3>Assistant Ressources Humaines - Sous-officier</h3>
      <h4>La défense Belgique<br>
        Temps plein, CDI</h4>
      <p>
        TRAVIE est une Entreprise de Travail Adapté (ETA) dont l’objet social vise l’épanouissement de la personne en
        situation de handicap et sa structuration par le travail. La personne, sa formation, son encadrement, son
        développement, sa sécurité et son bien-être au travail sont au centre des préoccupations de l’équipe de
        gestion. Afin d’assurer la pérennité de cet objet social, une attention toute particulière est également
        accordée à la rentabilité économique de l’entreprise, avec notamment un accent rigoureux sur la qualité
        délivrée et sur la recherche constante de nouvelles activités
      </p>
      <a href=""><button class="btn bg-bluef fontwhite fs-5 mb-2 "> postuler</button></a>
    </div>
  </div>
</div>

<div class="mt10"></div>
</main>
