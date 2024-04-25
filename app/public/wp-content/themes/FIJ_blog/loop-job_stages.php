<div class="container-fluid">
  <div class="row mt10 mb-5">
    <div class="col-1 bg-bleu-tur"></div>
    <div class="col-3 bg-bleu-tur   pt-1 pb-1 fontwhite">

      <h3>
        <?php
echo get_field("jobs")
; ?>
      </h3>
    </div>
  </div>

  <!--  -->

  <?php
$job_list = get_field("jobs_posts");
foreach ($job_list as $key => $value) {
    // var_dumpj($value);
    if (get_field('type_contrat', $value['job']) == "CDD") {
        $contrat_job = get_field('type_contrat', $value['job']) . " d'une durée de " . get_field('duree', $value['job']);
    } else {
        $contrat_job = get_field('type_contrat', $value['job']);
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
        <?php echo get_field('regime', $value['job']); ?> , <?php echo $contrat_job; ?>
      </h4>
      <p>
        <?php echo get_field('description', $value['job']); ?>
      </p>
      <?php
$postuler = get_field("postuler");
    // var_dumpj($postuler);
    ?>
      <form action="<?php echo $postuler['url']; ?>" method="get">
        <input type="hidden" name="reference" value="<?php echo $value['job']; ?>">
        <button type="submit" class="btn bg-bluef fontwhite fs-5 mb-2"><?php echo $postuler['title']; ?></button>
      </form>
      <!-- <a href=""><button class="btn bg-bluef fontwhite fs-5 mb-2 "> postuler</button></a> -->
    </div>
  </div>
  <?php
}
?>

  <!--  -->

  <div class="row mt10 mb-5">
    <div class="col-1 bg-bleu-tur"></div>
    <div class="col-3 bg-bleu-tur   pt-1 pb-1 fontwhite">
      <h3>
        <?php
echo get_field("stages")
; ?>
      </h3>
    </div>
  </div>

  <?php
$stages_list = get_field("stages_posts");
foreach ($stages_list as $key => $value) {
    if (get_field('duree', $value['stage']) == "") {
        $contrat_stage = get_field('type_contrat', $value['stage']);
    } else {
        $contrat_stage = get_field('type_contrat', $value['stage']) . " d'une durée de " . get_field('duree', $value['stage']);
    }
    ?>
  <div class="row mt10 ">
    <div class="col-8 offset-1  border bg-bleu-tur fontwhite p-5">
      <h3>
        <?php
echo get_the_title($value['stage']);
    ?>
      </h3>
      <h4>
        <?php
echo get_field('lieu', $value['stage']);
    ?>
        <br>
        <?php
echo get_field('regime', $value['stage']);
    ?> ,
        <?php
echo $contrat_stage;
    ?>
      </h4>
      <p>
        <?php
echo get_field('description', $value['stage']);
    ?>
      </p>
      <a class="btn bg-bluef fontwhite fs-5 mb-2" href="<?php echo $postuler['url']; ?>">
        <?php echo $postuler['title']; ?>
      </a>
    </div>
  </div>
  <?php
}
?>
  <div class="mt10"></div>
  </main>