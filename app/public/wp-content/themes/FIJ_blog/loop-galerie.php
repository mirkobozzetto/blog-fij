<?php
include locate_template('myvars.php');
$galery = get_field("galery");
var_dumpj($galery);

foreach ($galery as $key => $value) {
?>
<img src="
<?php echo $value['sizes']['thumbnail']; ?>
" alt="galerie">
<?php
}
?>

<div style="height: 58vh;">
</div>