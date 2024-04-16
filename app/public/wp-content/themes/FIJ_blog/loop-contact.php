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

      <!--  -->


      <form class="w-100 mt10 " method="post" action="">
        <?php
$contact = get_field("form");
// var_dumpj(sanitize_title($contact["nom"]["nom"]));
// var_dumpj($contact);
?>
        <div class="d-flex  ">
          <div class="d-flex colonne w-50 me-5">
            <label for=" <?php echo sanitize_title($contact["nom"]["nom"]); ?>">
              <?php echo $contact["nom"]["nom"] ?>
            </label>
            <input value="" type="text" id="<?php echo sanitize_title($contact["nom"]["nom"]); ?>"
              name="<?php echo sanitize_title($contact["nom"]["nom"]); ?>"
              <?php if ($contact["nom"]["requis"] === 1) {echo 'required';}?>>
          </div>

          <div class="d-flex colonne marginl w-50">
            <label for="<?php echo sanitize_title($contact["prenom"]["prenom"]); ?>">
              <?php echo $contact["prenom"]["prenom"] ?>
            </label>
            <input value="" type="text" id="<?php echo sanitize_title($contact["prenom"]["prenom"]); ?>"
              name="<?php echo sanitize_title($contact["prenom"]["prenom"]); ?>" <?php if ($contact["prenom"]["requis"] === 1) {
    echo 'required';
}
?>>

          </div>
        </div>

        <div class="d-flex colonne ">
          <label for="<?php echo sanitize_title($contact["age"]["age"]); ?>"><?php echo $contact["age"]["age"] ?>
          </label>
          <input value="" type="number" id="<?php echo sanitize_title($contact["age"]["age"]); ?>"
            name="<?php echo sanitize_title($contact["age"]["age"]); ?>" step="1" min="0" max="100" <?php if ($contact["prenom"]["requis"] === 1) {
    echo 'required';
}
?>>
        </div>

        <div class="d-flex colonne w100">
          <label
            for="<?php echo sanitize_title($contact["email"]["email"]); ?>"><?php echo $contact["email"]["email"] ?></label>
          <input value="" type="<?php echo sanitize_title($contact["email"]["email"]); ?>"
            id="<?php echo sanitize_title($contact["email"]["email"]); ?>" name="email"
            placeholder="<?php echo $contact["email"]["placeholder"] ?>" <?php if ($contact["email"]["requis"] === 1) {
    echo 'required';
}
?>>
        </div>
        <div class="d-flex colonne w100">
          <label
            for="<?php echo sanitize_title($contact["commentaire"]["commentaire"]); ?>"><?php echo $contact["commentaire"]["commentaire"] ?></label>
          <textarea placeholder="<?php echo $contact["commentaire"]["placeholder"] ?>"
            name="<?php echo sanitize_title($contact["commentaire"]["commentaire"]); ?>"
            id="<?php echo sanitize_title($contact["commentaire"]["commentaire"]); ?>" cols="30" rows="5" <?php if ($contact["commentaire"]["requis"] === 1) {
    echo 'required';
}
?>></textarea>
        </div>
        <!-- le bouton va submit -->
        <button class="btn bg-bluef fontwhite fs-5 mt-3">

          <?php echo $contact["envoyer"] ?>
        </button>


      </form>
    </div>

    <div class="col-5 mt10 d-flex align-items-center justify-content-center">
      <div class="w60 ">
        <img class="w-100" src="<?php echo get_field("img")["url"] ?>" alt="">
      </div>
    </div>


  </div>

</div>


</main>