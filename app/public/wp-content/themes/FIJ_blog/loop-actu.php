<div id="actu" class="container-fluid">
  <div class="row mt10 mb-5">
    <div class="col-1 bg-bleu-tur"></div>
    <div class="col-2 bg-bleu-tur   pt-1 pb-1 fontwhite">
      <h3>
        <?php
        echo get_field('title');
        ?>
      </h3>
    </div>
  </div>

  <div class="row mb-5">
    <div class="col-10 offset-1 d-flex justify-content-around">

      <!-- repetitions de posts -->
      <?php
      $args = array(
        'category_name' => 'actualite',
        'order' => 'ASC', // or DSC
        'orderby' => 'date',
        'nopaging' => false,
        'posts_per_page' => 4,
        //'paged' => 1,
      );

      $query = new WP_Query($args);
      if ($query->have_posts()) {
        while ($query->have_posts()) {
          $query->the_post();
          // formatage de la date
          $date = DateTime::createFromFormat('Ymd', get_field('post_actu')['date']);
      ?>
      <!--  -->
      <?php
          $post_actu = get_field("post_actu");
          ?>

      <div class="w-25 text-centser">
        <a href="#journée"><img class="w-100" src="
        <?php
          echo $post_actu["thumbnail"]["url"];
        ?>
        " alt=""></a>
        <h5>
          <?php
              echo $post_actu["title"]
              ?>
        </h5>

        <p class="date">
          <?php
              echo dateFR($date);
              ?>
        </p>

      </div>
      <?php
        }
      }
      wp_reset_postdata()
      ?>

    </div>
  </div>
</div>

<!-- 1:
class="container-fluid bg-bleu-tur padtop mt10 padbot">
-->

<div id="journée" class="container-fluid bg-bleu-tur padtop mt10 padbot">
  <div class="row">
    <div class="col-1 bg-white"></div>
    <div class="col-3 bg-white   pt-1 pb-1 ">
      <h3>Journées formations </h3>
    </div>
  </div>
  <div class="row mb-5 mt10">
    <div class="col-5 offset-1  fontwhite d-flex align-items-center  ">
      <div class="w80">
        <h4 class="">Formation</h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing, elit. Impedit, facere? Exercitationem quam minus optio,
          tempore cumque, modi ea officia deserunt at eveniet possimus non, similique voluptatum ducimus eligendi
          quaerat veniam! </p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing, elit. Dolorem provident cum debitis dignissimos optio
          praesentium iure eos nisi sint sequi, alias voluptatem, blanditiis consectetur, ullam facilis. Incidunt,
          modi exercitationem cupiditate.</p>
        <p>Lorem ipsum dolor, sit amet, consectetur adipisicing elit. Porro pariatur veritatis vero incidunt.
          Inventore, quibusdam, ea mollitia saepe eius rerum minus atque voluptatem. Nam quis aspernatur quibusdam
          nisi cupiditate veritatis?</p>
      </div>
    </div>
    <div class="col-5 d-flex align-items-center justify-content-center">
      <div class="w-100 d-flex flex-column align-items-end justify-content-end">
        <img class="w-100" src="pics/actu-formation-rect.png" alt="">
        <a href="#actu"><i class="fa-solid fa-turn-up fontwhite  "></i></a>
      </div>
    </div>
  </div>
</div>


<!-- 2:
class="container-fluid  mt10 padbot">
      container-fluid padtop mt10 padbot
-->

<div id="info" class="container-fluid  mt10 padbot">
  <div class="row">
    <div class="col-1 bg-bleu-tur"></div>
    <div class="col-4 bg-bleu-tur  fontwhite pt-1 pb-1 ">
      <h3>Journées info </h3>
    </div>
  </div>
  <div class="row  mt10">
    <div class="col-5 offset-1 font-black ">
      <div class="w-100 d-flex flex-column align-items-start justify-content-start">
        <img class="w-100" src="pics/actu-info-rect.png" alt="">
        <a href="#actu"><i class="fa-solid fa-turn-up fa-flip-horizontal  "></i></a>
      </div>
    </div>
    <div class="col-5 offset-1 d-flex align-items-center   ">
      <div class="w80">
        <h4 class="">Journées info</h4>
        <p>Aide à la récolte de documents pour les locataires en difficulté dans le cadre de la révision annuelle des
          loyers </p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus voluptas nostrum enim ex facere quasi
          autem. Cumque fuga nam tempora earum quas consequuntur, esse veritatis, mollitia sint minima quisquam, qui.
        </p>
        <P>Lorem ipsum dolor sit amet consectetur adipisicing, elit. Quod et laboriosam necessitatibus dicta rerum
          quaerat error. Animi assumenda tempora vel placeat aperiam laborum necessitatibus, voluptates, cum odit,
          dignissimos dolores eligendi.</P>
      </div>
    </div>
  </div>
</div>

<!-- 3:
class="container-fluid bg-bleu-tur padtop mt10 padbot">
-->

<div id="déjeuner" class="container-fluid bg-bleu-tur padtop mt10 padbot">
  <div class="row">
    <div class="col-1 bg-white"></div>
    <div class="col-3 bg-white   pt-1 pb-1 ">
      <h3>Petit déjeuner SASLS </h3>
    </div>
  </div>
  <div class="row mb-5 mt10">
    <div class="col-5 offset-1  fontwhite d-flex align-items-center  ">
      <div class="w80">
        <h4 class="">Petit déjeuner SASLS </h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing, elit. Impedit, facere? Exercitationem quam minus optio,
          tempore cumque, modi ea officia deserunt at eveniet possimus non, similique voluptatum ducimus eligendi
          quaerat veniam! </p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing, elit. Dolorem provident cum debitis dignissimos optio
          praesentium iure eos nisi sint sequi, alias voluptatem, blanditiis consectetur, ullam facilis. Incidunt,
          modi exercitationem cupiditate.</p>
        <p>Lorem ipsum dolor, sit amet, consectetur adipisicing elit. Porro pariatur veritatis vero incidunt.
          Inventore, quibusdam, ea mollitia saepe eius rerum minus atque voluptatem. Nam quis aspernatur quibusdam
          nisi cupiditate veritatis?</p>
      </div>
    </div>
    <div class="col-5 d-flex align-items-center justify-content-center ">
      <div class="w-100 d-flex flex-column align-items-end justify-content-end">
        <img class="w-100" src="pics/actu-dejeuner-rect.png" alt="">
        <a href="#actu"><i class="fa-solid fa-turn-up fontwhite  "></i></a>
      </div>
    </div>
  </div>
</div>

<!-- 4:
class="container-fluid mt10 padbot padtop">
      container-fluid  mt10 padbot
-->

<div id="projet" class="container-fluid mt10 padbot padtop">
  <div class="row">
    <div class="col-1 bg-bleu-tur"></div>
    <div class="col-4 bg-bleu-tur  fontwhite pt-1 pb-1 ">
      <h3>Projets en cours  </h3>
    </div>
  </div>
  <div class="row mb-5 mt10">
    <div class="col-5 offset-1 font-black ">
      <div class="w-100 d-flex flex-column align-items-start justify-content-start">
        <img class="w-100" src="pics/actu-projet-rect.png" alt="">
        <a href="#actu"><i class="fa-solid fa-turn-up fa-flip-horizontal  "></i></a>
      </div>
    </div>
    <div class="col-5 offset-1 d-flex align-items-center   ">
      <div class="w80">
        <h4 class="">Projets en cours  </h4>
        <p>Aide à la récolte de documents pour les locataires en difficulté dans le cadre de la révision annuelle des
          loyers </p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus voluptas nostrum enim ex facere quasi
          autem. Cumque fuga nam tempora earum quas consequuntur, esse veritatis, mollitia sint minima quisquam, qui.
        </p>
        <P>Lorem ipsum dolor sit amet consectetur adipisicing, elit. Quod et laboriosam necessitatibus dicta rerum
          quaerat error. Animi assumenda tempora vel placeat aperiam laborum necessitatibus, voluptates, cum odit,
          dignissimos dolores eligendi.</P>
      </div>
    </div>
  </div>
</div>
</main>
