<?php
include locate_template('myvars.php');
$galery = get_field("galery");
// var_dumpj($galery);

foreach ($galery as $key => $value) {
?>
  <!-- <img src="
<?php echo $value['sizes']['galery']; ?>
" alt="galerie"> -->
  <a href="<?php echo $value['sizes']['big']; ?>" data-lightbox="galerie" data-title="Ma galerie">
    <img src="<?php echo $value['sizes']['galery']; ?>" alt="galerie">
  </a>
<?php
}
?>

<div style="height: 58vh;">
</div>
