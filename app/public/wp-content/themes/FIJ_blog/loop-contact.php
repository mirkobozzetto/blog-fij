<div class="container-fluid mb5">

  <div class="row mt10 mb-5">
    <div class="col-1 bg-bleu-tur"></div>
    <div class="col-2 bg-bleu-tur   pt-1 pb-1 fontwhite">
      <h3>Localisation</h3>
    </div>
  </div>

  <div class="row ">

    <div class="col-5 offset-1 padtop ">
      <h2>SASLS ASBL </h2>

      <p class="fs-5">
        Adresse: Maison du Logement - Avenue de la Toison d'Or, 72
        1060 Saint-Gilles
      </p>

      <p class="fs-5">
        Tel: 02 502 88 15 
        Mail: infodirection@sasls.irisnet.be 
      </p>

      <p class="fs-5">
        Vous pouvez prendre contact avec le siège de l'ASBL pendant les heures d’ouverture :<br>
        Du lundi au vendredi : 8h30 à 12h30 et 13h30 à 15h30  
      </p>

      <p class="fs-5">
        Accès en transport en commun <br>
        Métro - Louise  <br>
        Métro - Hôtel des Monnaies  
      </p>

    </div>

    <div class="col-5 d-flex justify-content-center align-items-center">
      <div class="w80">
        <img class="w-100" src="pics/plan.png" alt="">
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-5 offset-1">
      <form class="w-100 mt10 " action="">

        <div class="d-flex  ">
          <div class="d-flex colonne w-50 me-5">
            <label for="nom">nom *</label>
            <input type="text" id="nom" name="nom" required>
          </div>


          <div class="d-flex colonne marginl w-50">
            <label for="prenom">prenom *</label>
            <input type="text" id="prenom" name="prenom" required>
          </div>
        </div>

        <div class="d-flex colonne ">
          <label for="age">age*</label>
          <input type="number" id="age" name="age" step="3" min="0" max="100">
        </div>

        <div class="d-flex colonne w100">
          <label for="email">email*</label>
          <input type="email" id="email" name="email" placeholder="email@gmail.com">
        </div>

        <div class="d-flex colonne w100">
          <label for="commentaire">commentaire</label>
          <textarea name="commentaire" id="commentaire" cols="30" rows="5">laissez un commentaire</textarea>
        </div>

        <button class="btn bg-bluef fontwhite fs-5 mt-3"> Envoyer</button>


      </form>
    </div>

    <div class="col-5 mt10 d-flex align-items-center justify-content-center">
      <div class="w60 "><img class="w-100" src="pics/logo-sasls.png" alt=""></div>
    </div>


  </div>

</div>

</main>