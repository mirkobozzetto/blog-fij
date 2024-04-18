<?php
//Gets post cat slug and looks for single-[ cat slug ].php and applies it

function jsingle_template()
{
    foreach ((array) get_the_category() as $cat) {
        if (file_exists(TEMPLATEPATH . "/single-{$cat->slug}.php")) {
            return TEMPLATEPATH . "/single-{$cat->slug}.php";
        }

    }
    // foreach ((array) get_the_category() as $cat) {
    //   if (file_exists(get_template_directory() . "/single-{$cat->slug}.php"))
    //     return get_template_directory() . "/single-{$cat->slug}.php";
    // }
}
add_filter('single_template', 'jsingle_template');

//joli var dump
function var_dumpj($d, $e = null)
{
    echo '<pre><code>';
    if ($e == 'e') {
        echo $d;
    } else {
        if (is_array($d)) {
            print_r($d);
        } else {
            var_dump($d);
        }
    }
    echo '</code></pre>';
}

//menu
function register_my_menu()
{
    register_nav_menus(array(
        'top' => 'Menu dessus', //'nom dans le code' => "nom dans l'interface admin"
    ));
}
add_action('init', 'register_my_menu');

//tailles de thubnails
add_image_size('big', 1920, 5000, false);
add_image_size('galery', 300, 300, true);

//enlever thumbnails par defaut

function remove_default_thumbs($sizes)
{
    // permet d'enlever les le tailles qui ne nous intéressent pas
    // unset( $sizes[ 'thumbnail' ] );
    unset($sizes['medium']);
    unset($sizes['large']);
    return $sizes;
}
add_filter('intermediate_image_sizes_advanced', 'remove_default_thumbs');

function dateFR($param)
{
    $phraseDate = $param->format("F Y");
    $moisEN = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
    $moisFR = array("Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre");
    $phraseDate = str_replace($moisEN, $moisFR, $phraseDate);
    return $phraseDate;
}
