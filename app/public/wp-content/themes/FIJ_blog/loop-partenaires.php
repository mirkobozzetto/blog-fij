<div id="partenaire" class="container-fluid padtop mt10 padbot">
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
?></h3>
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
var_dumpj($administration);
?>
        <?php
foreach ($administration['links'] as $key => $value) {
    ?>
        <a href="
        <?php
echo $value['link']['url'];
    ?>">
          <p class="fs-4">Les SISP :
            <?php
echo $value['name'];
    ?></p>
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


<div id="binhome" class="container-fluid padtop mt10 padbot">

  <div class="row">
    <div class="col-1 bg-bleu-tur"></div>
    <div class="col-4 bg-bleu-tur  fontwhite pt-1 pb-1 ">
      <h3>BINHOME</h3>
    </div>
  </div>

  <div class="row mb-5 mt10">




    <div class="col-4 offset-2 font-black ">
      <div class="w-100">
        <img class="w-100" src="pics/binhome.png" alt="">
        <a href="#partenaire"><i class="fa-solid fa-turn-up   "></i></a>
      </div>
    </div>




    <div class="col-5  d-flex align-items-center offset-1   ">
      <div class="w80">
        <h2 class="fw-bold">binhome</h2>
        <h4>Christine FATUMA</h4>
        <h4>Nadia MUHORAKEYE</h4>
        <h4>Laurent WATTIER </h4>




      </div>
    </div>


  </div>

</div>


<div id="comensia" class="container-fluid bg-bleu-tur padtop mt10 padbot">

  <div class="row">
    <div class="col-1 bg-white"></div>
    <div class="col-3 bg-white   pt-1 pb-1 ">
      <h3>COMNESIA</h3>
    </div>
  </div>

  <div class="row mb-5 mt10">

    <div class="col-3 offset-3 fontwhite  d-flex align-items-center offset-1   ">
      <div class="w80">
        <h2 class="fw-bold">COMNESIA</h2>
        <h4>Lieslot VERMEIR</h4>
        <h4>Rajaa BAYNA</h4>
        <h4>Nathalie WOLF</h4>
        <h4>Miguel OTERO </h4>
        <h4>Audrey RENIER </h4>
        <h4>Anaïs COURJOL </h4>




      </div>
    </div>



    <div class="col-4 d-flex align-items-center justify-content-center">
      <div class="w-100 d-flex flex-column align-items-end justify-content-end">
        <img class="w-100" src="pics/comensia.png" alt="">
        <a href="#partenaire"><i class="fa-solid fa-turn-up fontwhite  "></i></a>
      </div>
    </div>
  </div>

</div>

<div id="anderlecht" class="container-fluid padtop mt10 padbot">

  <div class="row">
    <div class="col-1 bg-bleu-tur"></div>
    <div class="col-4 bg-bleu-tur  fontwhite pt-1 pb-1 ">
      <h3>FOYER ANDERLECHTOIS</h3>
    </div>
  </div>

  <div class="row mb-5 mt10">




    <div class="col-4 offset-2 font-black">
      <div class="w-100">
        <img class="w-100" src="pics/foyer-anderlechtois.png" alt="">
        <a href="#partenaire"><i class="fa-solid fa-turn-up   "></i></a>
      </div>
    </div>




    <div class="col-5  d-flex align-items-center offset-1   ">
      <div class="w80">
        <h2 class="fw-bold">FOYER ANDERLECHTOIS</h2>
        <h4>Karine TIBERGHIEN</h4>
        <h4>Rody MAYUMA</h4>
        <h4>Richala MOHAMED</h4>
        <h4>Daniel DE LA GRANJA </h4>




      </div>
    </div>


  </div>

</div>

<div id="ever" class="container-fluid bg-bleu-tur padtop mt10 padbot">

  <div class="row">
    <div class="col-1 bg-white"></div>
    <div class="col-3 bg-white   pt-1 pb-1 ">
      <h3>EVERE CITY</h3>
    </div>
  </div>

  <div class="row mb-5 mt10">

    <div class="col-3 offset-3 fontwhite  d-flex align-items-center offset-1   ">
      <div class="w80">
        <h2 class="fw-bold">EVERE CITY</h2>
        <h4>Catleen GILOT </h4>
        <h4>Mégane GERARD </h4>
        <h4>Déborah VANDEKERCKHOVE </h4>





      </div>
    </div>



    <div class="col-4 d-flex align-items-center justify-content-center">
      <div class="w-100 d-flex flex-column align-items-end justify-content-end">
        <img class="w-100" src="pics/ever.png" alt="">
        <a href="#partenaire"><i class="fa-solid fa-turn-up fontwhite  "></i></a>
      </div>
    </div>
  </div>

</div>




<div id="laeken" class="container-fluid padtop mt10 padbot">

  <div class="row">
    <div class="col-1 bg-bleu-tur"></div>
    <div class="col-4 bg-bleu-tur  fontwhite pt-1 pb-1 ">
      <h3>FOYER LAEKENOIS FHL</h3>
    </div>
  </div>

  <div class="row mb-5 mt10">




    <div class="col-4 offset-2 font-black ">
      <div class="w-100">
        <img class="w-100" src="pics/flh.png" alt="">
        <a href="#partenaire"><i class="fa-solid fa-turn-up   "></i></a>
      </div>
    </div>




    <div class="col-5  d-flex align-items-center offset-1   ">
      <div class="w80">
        <h2 class="fw-bold">FOYER LAEKENOIS FHL</h2>
        <h4>Cem ARGILLI  </h4>
        <h4>Hassane LAZRAK </h4>
        <h4>Mathilde HAYOT  </h4>
        <h4>Tom LENAERTS  </h4>
        <h4>David KY-MAKA </h4>




      </div>
    </div>


  </div>

</div>



<div id="stjosse" class="container-fluid bg-bleu-tur padtop mt10 padbot">

  <div class="row">
    <div class="col-1 bg-white"></div>
    <div class="col-3 bg-white   pt-1 pb-1 ">
      <h3>FOYER DE SAINT-JOSSE-TEN-NOODE (HBM) </h3>
    </div>
  </div>

  <div class="row mb-5 mt10">

    <div class="col-3 offset-3 fontwhite  d-flex align-items-center offset-1   ">
      <div class="w80">
        <h2 class="fw-bold">FOYER DE SAINT-JOSSE-TEN-NOODE (HBM) </h2>
        <h4>Annabelle Boyili  </h4>





      </div>
    </div>



    <div class="col-4 d-flex align-items-center justify-content-center">
      <div class="w-100 d-flex flex-column align-items-end justify-content-end">
        <img class="w-100" src="pics/stjosse.png" alt="">
        <a href="#partenaire"><i class="fa-solid fa-turn-up fontwhite  "></i></a>
      </div>
    </div>
  </div>

</div>


<div id="sud" class="container-fluid padtop mt10 padbot">

  <div class="row">
    <div class="col-1 bg-bleu-tur"></div>
    <div class="col-4 bg-bleu-tur  fontwhite pt-1 pb-1 ">
      <h3>FOYER DU SUD </h3>
    </div>
  </div>

  <div class="row mb-5 mt10">




    <div class="col-4 offset-2 font-black">
      <div class="w-100">
        <img class="w-100" src="pics/foyersud.png" alt="">
        <a href="#partenaire"><i class="fa-solid fa-turn-up   "></i></a>
      </div>
    </div>




    <div class="col-5  d-flex align-items-center offset-1   ">
      <div class="w80">
        <h2 class="fw-bold">FOYER DU SUD </h2>
        <h4>Joëlle ANTOINE</h4>
        <h4>Noémie RANSQUIN</h4>
        <h4>Catherine UYTSLUYT</h4>
        <h4>Laetitia DEGOMME</h4>





      </div>
    </div>


  </div>

</div>


<div id="floreal" class="container-fluid bg-bleu-tur padtop mt10 padbot">

  <div class="row">
    <div class="col-1 bg-white"></div>
    <div class="col-3 bg-white   pt-1 pb-1 ">
      <h3>LE LOGIS FLOREAL</h3>
    </div>
  </div>

  <div class="row mb-5 mt10">

    <div class="col-3 offset-3 fontwhite  d-flex align-items-center offset-1   ">
      <div class="w80">
        <h2 class="fw-bold">LE LOGIS FLOREAL</h2>
        <h4>Eve-Laure SOULISSE </h4>
        <h4>Emmanuelle DELFOSSE  </h4>
        <h4>Carine SPILTOIR </h4>





      </div>
    </div>



    <div class="col-4 d-flex align-items-center justify-content-center">
      <div class="w-100 d-flex flex-column align-items-end justify-content-end">
        <img class="w-100" src="pics/logis-floreal-rect.png" alt="">
        <a href="#partenaire"><i class="fa-solid fa-turn-up fontwhite  "></i></a>
      </div>
    </div>
  </div>

</div>


<div id="bxl" class="container-fluid padtop mt10 padbot">

  <div class="row">
    <div class="col-1 bg-bleu-tur"></div>
    <div class="col-4 bg-bleu-tur  fontwhite pt-1 pb-1 ">
      <h3>LOGEMENT BRUXELLOIS  </h3>
    </div>
  </div>

  <div class="row mb-5 mt10">




    <div class="col-4 offset-2 font-black ">
      <div class="w-100">
        <img class="w-100" src="pics/logement-bxl.png" alt="">
        <a href="#partenaire"><i class="fa-solid fa-turn-up   "></i></a>
      </div>
    </div>




    <div class="col-5  d-flex align-items-center offset-1   ">
      <div class="w80">
        <h2 class="fw-bold">LOGEMENT BRUXELLOIS  </h2>
        <h4>Vanessa UMUTONI</h4>
        <h4>Nadine BUYSE</h4>
        <h4>Lin DELNESTE</h4>
        <h4>Pierre QUENON</h4>





      </div>
    </div>


  </div>

</div>


<div id="molen" class="container-fluid bg-bleu-tur padtop mt10 padbot">

  <div class="row">
    <div class="col-1 bg-white"></div>
    <div class="col-3 bg-white   pt-1 pb-1 ">
      <h3>LOGEMENT MOLENBEEKOIS </h3>
    </div>
  </div>

  <div class="row mb-5 mt10">

    <div class="col-3 offset-3 fontwhite  d-flex align-items-center offset-1   ">
      <div class="w80">
        <h2 class="fw-bold">LOGEMENT MOLENBEEKOIS</h2>
        <h4>Juvenilda XHAKOLLARI</h4>
        <h4>Ayi KPOTI</h4>
        <h4>Antoine VAN HOOREN</h4>
        <h4>Félicien COLLETTE</h4>





      </div>
    </div>



    <div class="col-4 d-flex align-items-center justify-content-center">
      <div class="w-100 d-flex flex-column align-items-end justify-content-end">
        <img class="w-100" src="pics/log-molenbeek.png" alt="">
        <a href="#partenaire"><i class="fa-solid fa-turn-up fontwhite  "></i></a>
      </div>
    </div>
  </div>

</div>


<div id="abc" class="container-fluid padtop mt10 padbot">

  <div class="row">
    <div class="col-1 bg-bleu-tur"></div>
    <div class="col-4 bg-bleu-tur  fontwhite pt-1 pb-1 ">
      <h3>ALLIANCE BRUXELLES COOPERATIVE (ABC)  </h3>
    </div>
  </div>

  <div class="row mb-5 mt10">




    <div class="col-4 offset-2 font-black ">
      <div class="w-100">
        <img class="w-100" src="pics/abc.png" alt="">
        <a href="#partenaire"><i class="fa-solid fa-turn-up   "></i></a>
      </div>
    </div>




    <div class="col-5  d-flex align-items-center offset-1   ">
      <div class="w80">
        <h2 class="fw-bold">ALLIANCE BRUXELLES COOPERATIVE (ABC)  </h2>
        <h4>Julien LEDENT </h4>
        <h4>Najia ALLAL </h4>
        <h4>Grégory VAN BOCKSTAELE</h4>






      </div>
    </div>


  </div>

</div>


<div id="lojega" class="container-fluid bg-bleu-tur padtop mt10 padbot">

  <div class="row">
    <div class="col-1 bg-white"></div>
    <div class="col-3 bg-white   pt-1 pb-1 ">
      <h3>LOJEGA </h3>
    </div>
  </div>

  <div class="row mb-5 mt10">

    <div class="col-3 offset-3 fontwhite  d-flex align-items-center offset-1   ">
      <div class="w80">
        <h2 class="fw-bold">LOJEGA </h2>
        <h4>Christophe CHARLOT  </h4>
        <h4>Thomas PASZUKIEWICZ  </h4>
        <h4>Véronique VAN NIEUWENHOVE </h4>






      </div>
    </div>



    <div class="col-4 d-flex align-items-center justify-content-center">
      <div class="w-100 d-flex flex-column align-items-end justify-content-end">
        <img class="w-100" src="pics/lojega-logo.png" alt="">
        <a href="#partenaire"><i class="fa-solid fa-turn-up fontwhite  "></i></a>
      </div>
    </div>
  </div>

</div>



<div id="schaerbeek" class="container-fluid padtop mt10 padbot">

  <div class="row">
    <div class="col-1 bg-bleu-tur"></div>
    <div class="col-4 bg-bleu-tur  fontwhite pt-1 pb-1 ">
      <h3>FOYER SCHAERBEEKOIS </h3>
    </div>
  </div>

  <div class="row mb-5 mt10">




    <div class="col-4 offset-2 font-black ">
      <div class="w-100">
        <img class="w-100" src="pics/foyer-shaerbeek.png" alt="">
        <a href="#partenaire"><i class="fa-solid fa-turn-up   "></i></a>
      </div>
    </div>




    <div class="col-5  d-flex align-items-center offset-1   ">
      <div class="w80">
        <h2 class="fw-bold">FOYER SCHAERBEEKOIS</h2>
        <h4>Marie Chantal YANGO NGONOUE  </h4>
        <h4>Maryse NGOMA TANGO </h4>
        <h4>Pierre Mwamba  </h4>






      </div>
    </div>


  </div>

</div>


<div id="soignies" class="container-fluid bg-bleu-tur padtop mt10 padbot">

  <div class="row">
    <div class="col-1 bg-white"></div>
    <div class="col-3 bg-white   pt-1 pb-1 ">
      <h3>EN BORD DE SOIGNES </h3>
    </div>
  </div>

  <div class="row mb-5 mt10">

    <div class="col-3 offset-3 fontwhite  d-flex align-items-center offset-1   ">
      <div class="w80">
        <h2 class="fw-bold">EN BORD DE SOIGNES </h2>
        <h4>Emerance EVRARD   </h4>
        <h4>Christine FRERE </h4>
        <h4>Coralie VAN NIEUWENBORGH </h4>






      </div>
    </div>



    <div class="col-4 d-flex align-items-center justify-content-center">
      <div class="w-100 d-flex flex-column align-items-end justify-content-end">
        <img class="w-100" src="pics/bord-soignies.png" alt="">
        <a href="#partenaire"><i class="fa-solid fa-turn-up fontwhite  "></i></a>
      </div>
    </div>
  </div>

</div>


<div id="logis" class="container-fluid padtop mt10 padbot">

  <div class="row">
    <div class="col-1 bg-bleu-tur"></div>
    <div class="col-4 bg-bleu-tur  fontwhite pt-1 pb-1 ">
      <h3>LOG’ IRIS  </h3>
    </div>
  </div>

  <div class="row mb-5 mt10">




    <div class="col-4 offset-2 font-black ">
      <div class="w-100">
        <img class="w-100" src="pics/logis.png" alt="">
        <a href="#partenaire"><i class="fa-solid fa-turn-up   "></i></a>
      </div>
    </div>




    <div class="col-5  d-flex align-items-center offset-1   ">
      <div class="w80">
        <h2 class="fw-bold">LOG’ IRIS </h2>
        <h4>Perrine TAMINIAUX  </h4>
        <h4>Kurt CATTEEUW  </h4>







      </div>
    </div>


  </div>

</div>


<div id="modern" class="container-fluid bg-bleu-tur padtop mt10 padbot">

  <div class="row">
    <div class="col-1 bg-white"></div>
    <div class="col-3 bg-white   pt-1 pb-1 ">
      <h3>HABITATION MODERNE  </h3>
    </div>
  </div>

  <div class="row mb-5 mt10">

    <div class="col-3 offset-3 fontwhite  d-flex align-items-center offset-1   ">
      <div class="w80">
        <h2 class="fw-bold">HABITATION MODERNE </h2>
        <h4>Elodie DELORY  </h4>
        <h4>Héloïse WUIDAR </h4>







      </div>
    </div>



    <div class="col-4 d-flex align-items-center justify-content-center">
      <div class="w-100 d-flex flex-column align-items-end justify-content-end">
        <img class="w-100" src="pics/habitation-moderne.png" alt="">
        <a href="#partenaire"><i class="fa-solid fa-turn-up fontwhite  "></i></a>
      </div>
    </div>
  </div>

</div>

</main>
