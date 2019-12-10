<?php

function portafolio_lista_clases(){ ?>

  <!-- <ul class = lista-post-portafolio> -->
  
    <?php
    $args = array(
      'post_type' => 'portafolio_clases',
      'post_per_page' => 10
      );
      $portafolio = new WP_Query($args);
      while( $portafolio->have_posts() ): $portafolio->the_post(); ?>

        <div class="col-md-6 sin-padding">
          <li class = "card post-portafolio">
            <div class="fondo-post-proyectos">
              <?php the_post_thumbnail(); ?>
            </div>
            <div class="contenido-post-portafolio">
              <a href=" <?php the_permalink(); ?> ">
                <h3> <?php the_title(); ?> </h3>
                <p> <?php the_field('sintesis_del_proyecto'); ?> </p>
                </a>
              <!-- <p> <?php the_field('proyectos_portafolio'); ?> </p> -->
            </div>
          </li>
        </div>

   <?php endwhile; wp_reset_postdata(); ?>
    <!-- </ul> -->
<?php
}


function gymfitness_lista_clases(){ ?>
  <ul>
    <?php
      $args = array(
        'post_type' => 'gymfitness_clases',
        'post_per_page' => 10
      );
      $clases = new WP_Query($args);
      while( $clases->have_posts() ): $clases->the_post(); ?>
      <li>
        <h1> <?php the_title(); ?> </h1>
      </li>
   <?php endwhile; ?>
  </ul>
<?php
}
