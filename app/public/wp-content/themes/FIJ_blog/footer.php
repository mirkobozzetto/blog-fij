<?php
include(locate_template('myvars.php'));
$contactID = get_page_by_path('contact')->ID;
$social = get_field('adress', $contactID)['social'];
?>

<footer>
  <div class='container-fluid'>
    <div class='row bg-bleu-tur'>
      <div class='col-3  pt-4 d-flex justify-content-center align-items-center'>
        <div class='w-50 '>
          <img class='w-100' src='<?php echo get_field('logo', $headerID)['url']; ?>' alt=''>
        </div>
      </div>
      <div class='col-2  pt-5 fontwhite'>
        <ul>
          <?php
          $nomMenu = "top";
          $argsM = array(
            'theme_location' => $nomMenu,
            'container' => false,
            'echo' => false,
            'fallback_cb' => false,
            'items_wrap' => '%3$s',
            'depth' => 0,
          );
          $menu = wp_nav_menu($argsM);
          // var_dumpj($social);
          echo $menu;
          ?>
        </ul>
      </div>

      <div class="col-4 pt-5 fontwhite d-flex flex-column footer">
        <h3 class="pb-3">SASLS DMBSH</h3>
        <p>
          <?php
          $adress = (get_field('adress', $contactID));
          $mail = $adress['mail'];
          $phone = $adress['phone'];
          echo get_field('adress', $contactID)['adress'];
          ?>
        </p>
        <p>
          <?php echo $phone; ?>
          <br>
          Mail: <span><a href="mailto:<?php echo $mail; ?>"><?php echo $mail; ?></a></span>
        </p>
      </div>



      <div class='col-3 pt-5 d-flex flex-column'>
        <button class='btn bg-bluef fontwhite fs-5 mb-2 w-50'> Rapport</button>
        <a href='contact.html'><button class='btn bg-bluef fontwhite fs-5 mb-2 w-50'> Contactez-nous</button></a>
        <div class='fontwhite w-50 fs-1 d-flex justify-content-around  '>
          <?php
          // var_dumpj($social);
          foreach ($social as $key => $value) {
          ?>
          <a href=" <?php echo $value['link']['url']; ?>" target="_blank">
            <i class="<?php echo $value['social_icons']; ?>"></i>
          </a>
          <?php
          }
          ?>
          <!-- <i class='fa-brands fa-facebook'></i>
          <i class='fa-brands fa-linkedin'></i>
          <i class='fa-brands fa-square-instagram'></i> -->
        </div>
      </div>
    </div>
  </div>
</footer>

<script src='<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-3.7.0.min.js'></script>
<script src='<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.bundle.min.js'></script>
</body>

</html>