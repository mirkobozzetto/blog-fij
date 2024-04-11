<div id="partenaire" class="container-fluid padtop padbot">
  <div class="row mt10 mb-5 ">
    <div class="col-1 bg-bleu-tur"></div>
    <div class="col-5 bg-bleu-tur   pt-1 pb-1 fontwhite">
      <h3>
        <?php
echo get_field('title');
?>
      </h3>
    </div>
  </div>
  <?php
$travailleurs_sociaux = get_field('travailleurs_sociaux');
// var_dumpj($travailleurs_sociaux);
?>
  <!--  -->
  <div class="row d-flex ">
    <div class="col-10 offset-1 d-flex justify-content-between mt-5 flex-wrap">
      <?php
foreach ($travailleurs_sociaux as $key => $value) {
    ?>
      <div class="w22 justify-content">
        <a href="#<?php
echo sanitize_title($value['name']);
    ?>">
          <img class="w-100" src="
<?php
echo $value['img']['url'];
    ?>
        " alt=""></a>
        <h5 class="text-center text-uppercase">
          <?php
echo $value['name'];
    ?>
        </h5>
      </div>
      <?php
}
?>
      <!-- fermeture -->
    </div>
  </div>
</div>

<?php
$administration = get_field('administration');
?>

<div class="container-fluid bg-bleu-tur padtop mt10 padbot">

  <div class="row">
    <div class="col-1 bg-white"></div>
    <div class="col-3 bg-white   pt-1 pb-1 ">
      <h3><?php
echo $administration['title'];
?>
      </h3>
    </div>
  </div>

  <div class="row mb-5 mt10">

    <div class="col-5 offset-1  fontwhite d-flex align-items-center  ">
      <div class="w80">
        <h4 class="">
          <?php
echo $administration['subtitle'];
?>
        </h4>
        <p>
          <?php
echo $administration['content'];
?>
        </p>
        <?php
// var_dumpj($administration);
?>
        <?php
foreach ($administration['links'] as $key => $value) {
    ?>
        <a href="
        <?php
echo $value['link']['url'];
    ?>">
          <p class="fs-4">
            Les SISP :
            <?php
echo $value['name'];
    ?>
          </p>
        </a>
        <?php
}
?>
      </div>
    </div>

    <div class="col-5 d-flex align-items-center justify-content-center">
      <div class="w40">
        <img class="w-100" src="
        <?php
echo $administration['img']['url'];
?>
        " alt="">
      </div>
    </div>
  </div>
</div>


<?php
foreach ($travailleurs_sociaux as $key => $value) {
    if ($key % 2) {
        $colors = "bloc-vert";
        $order = "order-3";
        $flip = "";
        $side = "align-items-end";
    } else {
        $colors = "bloc-blanc";
        $order = "order-1 offset-1";
        $flip = "fa-flip-horizontal";
        $side = "align-items-start";

    }
    ?>

<div id="<?php echo sanitize_title($value['name']); ?>"
  class="container-fluid padtop mt10 padbot <?php echo $colors; ?>">
  <div class="row">
    <div class="col-1 fond"></div>
    <div class="col-4 ps-0 bg-bleu-tur  fontwhite  ">
      <h3 class="pt-2 pb-1 ps-2 m-0  fond d-inline-block"><?php echo $value['name']; ?></h3>
    </div>
  </div>

  <div class="row mb-5 mt10">
    <div class="col-4 offset-2 font-black ">
      <div class="w-100 d-flex flex-column <?php echo $side ?> justify-content-end">
        <img class="w-100" src="
        <?php
echo $value['img_large']['url'];
    ?>
        " alt="">
        <a href="#partenaire">
          <i class="fa-solid fa-turn-up <?php echo $flip; ?>"> </i>
        </a>
      </div>
    </div>

    <div class="col-5  d-flex align-items-center offset-1   ">
      <div class="w80">
        <h2 class="fw-bold"><?php echo $value['name']; ?></h2>
        <?php
$members = $value['members'];
    foreach ($members as $key2 => $value2) {
        ?>
        <h4><?php echo $value2['member'] ?></h4>
        <?php
}
    ?>
      </div>
    </div>
  </div>
</div>
<?php
}
?>

</div>
</div>
</main>