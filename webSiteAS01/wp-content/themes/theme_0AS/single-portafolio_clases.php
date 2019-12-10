<?php

  /**
  *@desc A single blog post See page.php is for a page layout.
  */

  get_header();

  if (have_posts()) : while (have_posts()) : the_post();
  ?>

  <div class="container container-single-custom">
    <div class="row">
      <div class="col-md-8 contenido-single-custom">
         <?php the_field('proyectos_portafolio'); ?>
         <h2> <?php the_title(); ?> </h2>
         <ul class = "especificaciones">
           <li>
             <p> <?php the_date(); ?> </p>
           </li>
           <li>
             <p> <?php the_author(); ?> </p>
           </li>
           <li>
             <p> <?php the_category(); ?> </p>
           </li>
         </ul>
         <br>






         <p> <?php the_content(); ?> </p>
      </div>
      <div class="col-md-4 container-sidebar-single">
        <?php get_sidebar('portafolio'); ?>
      </div>
    </div>
  </div>





  <?php




  endwhile; else: ?>

		<p>Sorry, no posts matched your criteria.</p>

<?php
  endif;

  get_footer();

?>
