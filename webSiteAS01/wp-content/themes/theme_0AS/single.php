<?php

  /**
  *@desc A single blog post See page.php is for a page layout.
  */

  get_header();

  if (have_posts()) : while (have_posts()) : the_post();
  ?>

<?php echo the_title(); ?>


  <div class="container container-body-single">
    <div class="row">
      <div class="col-md-4 col-info-single">
        <h1> <?php the_title(); ?> </h1>
        <ul>
          <li>
            <p> <?php the_date(); ?> </p>
          </li>
          <li>
            <p> <?php the_category(); ?> </p>
          </li>
          <li>
            <p class = "autor-single"> <?php the_author(); ?> </p>
          </li>
        </ul>
        <div class="bd-example">
          <div class = "col-content-info-single">
            <h4>Descripción</h4>
            <?php the_content(); ?>
          </div>
        </div>
      </div>
      <div class="col-md-8">
        <div class="row contenedor-img-single">
          <?php the_post_thumbnail(); ?>
        </div>
      </div>
    </div>
  </div>

  <div class="container cont-comentarios-single">
    <div class="row conentido-comentarios">
      <h1>
        Deja tu comentaria aquí:
      </h1>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
      </p>
    </div>

    <div class="row conentido-comentarios">
      <ul>
        <li>
          <a href="#">
            Inicia sesion
          </a>
        </li>
        <li>
          <a href="#">
            Registrate
          </a>
        </li>
      </ul>
    </div>
  </div>



<div class="container cont-comentarios-single">
  <div class="row">
    <?php comments_template( '/short-comments.php' ); ?>
  </div>
</div>

  <?php




  endwhile; else: ?>

		<p>Sorry, no posts matched your criteria.</p>

<?php
  endif;

  get_footer();

?>
