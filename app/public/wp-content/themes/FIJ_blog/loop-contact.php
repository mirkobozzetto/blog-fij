<div class="container-fluid mb5">

  <div class="row mt10 mb-5">
    <div class="col-1 bg-bleu-tur"></div>
    <div class="col-2 bg-bleu-tur   pt-1 pb-1 fontwhite">
      <h3>
        <?php
        echo get_field("title")
        ?>
      </h3>
    </div>
  </div>

  <div class="row ">

    <div class="col-5 offset-1 padtop ">
      <h2>
        <?php
        echo get_field("subtitle")
        ?>
      </h2>

      <p class="fs-5">
        <?php
        $adress = get_field("adress");
        echo $adress["adress"]
        ?>
      </p>

      <p class="fs-5">
        <span>
          <a href="tel:<?php echo $adress['phone']; ?>" style="color: black;">
            <?php echo $adress['phone']; ?>
          </a>
        </span>
        <!-- ici, une tabulation-->&emsp;
        <!-- Mail: infodirection@sasls.irisnet.be  -->
        Mail:
        <span>
          <a style="color: black; text-decoration: underline;" href="mailto:<?php echo $adress['mail']; ?>">
            <?php echo $adress['mail']; ?>
          </a>
        </span>
      </p>

      <div class="unique-class" style="font-size: 1.25rem !important;">
        <?php
        echo get_field("open_acces")
        ?>
      </div>
    </div>

    <div class="col-5 d-flex justify-content-center align-items-center">
      <div class="w80">
        <?php
        $map = get_field("map");
        ?>
        <!-- utiliser mapBox plus tard ! avec latitude et longitude -->
        <img class="w-100" src="pics/plan.png" alt="">
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-5 offset-1">
      <!--  -->
      <form class="w-100 mt10 " method="" action="">
        <!--  -->
        <?php
        $contact = get_field("form")["form_field"];
        var_dumpj($contact);
        ?>
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
          <textarea placeholder="laissez un commentaire" name="commentaire" id="commentaire" cols="30" rows="5"></textarea>
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
