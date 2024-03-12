<?php
$services = get_field('services');
?>

<div class="row mt10 mb-5">
  <div class="col-1 bg-bleu-tur"></div>
  <div class="col-2 bg-bleu-tur   pt-1 pb-1 fontwhite">
    <h3>
      <?php echo $services['title']; ?>
    </h3>
  </div>
</div>

<div class="row mb-5 mt10">

  <div class="col-5 offset-1 padtop ">
    <div class="w80">
      <h2 class="">
        <?php echo $services['subtitle']; ?>
      </h2>
      <p>
        <?php echo $services['text']; ?>
      </p>
    </div>
  </div>

  <div class="col-5">
    <div class="w-100">
      <img class="w-100" src="
      <?php
      echo $services['img']['url'];
      ?>
      " alt="">
    </div>
  </div>
</div>

</div>

<?php
$team = get_field('team');
?>

<div class="container-fluid bg-bleu-tur padtop mt10 padbot">

  <div class="row">
    <div class="col-1 bg-white"></div>
    <div class="col-3 bg-white   pt-1 pb-1 ">
      <h3>
        <?php echo $team['title']; ?>
      </h3>
    </div>
  </div>

  <div class="row mb-5 mt10">

    <div class="col-5 offset-1  fontwhite ">
      <div class="w80">
        <h4 class="">
          <?php echo $team['subtitle']; ?>
        </h4>
        <?php
        echo $team['text'];
        ?>
      </div>
    </div>

    <div class="col-5 d-flex align-items-center justify-content-center">
      <div class="w-100">
        <img class="w-100" src="<?php echo $team['img']['url']; ?>" alt="">
      </div>
    </div>
  </div>

</div>

<?php
$centre = get_field('centre');
?>

<div class="container-fluid padtop mt10 padbot">

  <div class="row">
    <div class="col-1 bg-bleu-tur"></div>
    <div class="col-6 bg-bleu-tur  fontwhite pt-1 pb-1 ">
      <h3>
        <?php
        echo $centre['title'];
        ?>
      </h3>
    </div>
  </div>

  <div class="row mb-5 mt10">


    <div class="col-5 offset-1 ">
      <div class="w-100">
        <img class="w-100" src="<?php echo $centre['img']['url']; ?>" alt="">
      </div>
    </div>


    <?php
    $pole = get_field('pole');
    ?>

    <div class="col-5 d-flex align-items-center justify-content-center  ">
      <div class="w80">
        <h4 class="">
          <?php echo $centre['title']; ?>
        </h4>
        <?php
        echo $centre['text'];
        ?>
      </div>
    </div>

  </div>

</div>

<div class="container-fluid bg-bleu-tur padtop mt10 padbot">

  <div class="row">
    <div class="col-1 bg-white"></div>
    <div class="col-2 bg-white   pt-1 pb-1 ">
      <h3>
        <?php echo $pole['title']; ?>
      </h3>
    </div>
  </div>

  <div class="row mb-5 mt10">

    <div class="col-5 offset-1  fontwhite ">
      <div class="w80">
        <h4 class="">
          <?php echo $pole['subtitle']; ?>
        </h4>
        <?php echo $pole['text']; ?>
      </div>
    </div>

    <div class="col-5 d-flex align-items-center justify-content-center">
      <div class="w-100">
        <img class="w-100" src="
        <?php echo $pole['img']['url']; ?>
        " alt="">
      </div>
    </div>
  </div>

</div>

<?php
$education = get_field('education');
?>

<div class="container-fluid padtop mt10 padbot">
  <div class="row">
    <div class="col-1 bg-bleu-tur"></div>
    <div class="col-6 bg-bleu-tur  fontwhite pt-1 pb-1 ">
      <h3>
        <?php echo $education['title']; ?>
      </h3>
    </div>
  </div>

  <div class="row mb-5 mt10">

    <div class="col-5 offset-1 ">
      <div class="w-100 ">
        <img class="w-100" src="
        <?php echo $education['img']['url']; ?>
        " alt="">
      </div>
    </div>

    <div class="col-5 d-flex align-items-center justify-content-center  ">
      <div class="w80">
        <h4 class=""> 
          <?php echo $education['subtitle']; ?>
        </h4>
        <p>
          <?php echo $education['text']; ?>
           </p>
         
      </div>
    </div>
  </div>
</div>
</main>
