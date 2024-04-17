<?php
$posts = get_fields();
// var_dumpj($posts);
?>

<div class="row mt10 ">
  <div class="col-8 offset-1  border bg-bleu-tur fontwhite p-5">
    <h3>
      <?php
echo $posts['lieu']
?>
    </h3>
    <h4>
      <?php
echo $posts['regime']
?>
      <br>
      <?php
echo $posts['type_contrat']
?> ,
      <?php
echo $posts['duree'] ?>
    </h4>
    <p>
      <?php
echo $posts['description'];
?>
    </p>
    <!-- <a class="btn bg-bluef fontwhite fs-5 mb-2" href="<?php echo "..." ?>">
      FUNKY FRESH BABY

    </a> -->
  </div>
</div>