<?php
/*
  Template Name: template electronica
*/
 ?>

<?php
  get_header();
 ?>

<body class = "cuerpo-catalogo">


<div class="container cuerpo-inicio">
  <div class="row menu-orientacion-categorias">

  </div>
</div>

<div class="container catalogo">
  <div class="row img-principal-cat1">
    <div class="contenedor-img-cat">
      <div class="texto-img-cat">
        <div class="gradiente-img-principal">
          <h1>Portafolio</h1>
          <h1 class = "subtitulo-categorias"> Posts <span class="badge-categorias badge badge-secondary">11</span></h1>

          <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
            the_content();
            endwhile; else: ?>
              <p>Sorry, no posts matched your criteria.</p>
          <?php endif; ?>

        </div>
      </div>
      <img src="<?php echo get_template_directory_uri();?>/assets/img/1l.jpg">
    </div>
  </div>


  <div class="row cuerpo-post-fotografia">
    <?php
      // LLamar a los post del apartado Nosotros
        $args = array (
          'post_type'              => array( 'Noticia' ),
          'post_status'            => array( 'publish' ),
          'order'                  => 'ASC',
          'posts_per_page'         => '10',
        );
        // The Query
        $noticias = new WP_Query( $args );
        // The Loop
        if ( $noticias->have_posts() ) {
          while ( $noticias->have_posts() ) {
          $noticias->the_post();
      ?>

      <div class="col-md-4 marco-img-cat">
        <a href="  <?php the_permalink(); ?> ">
          <div class="col-img-cat">
            <?php the_post_thumbnail('medium') ?>
        </a>
          <h1>
            <?php the_title(); ?>
          </h1>
            <?php the_excerpt(); ?>
          </div>
      </div>
      <?php
          }
            } else {
              // no posts found
            }
            // Restore original Post Data
            wp_reset_postdata();
      ?>
  </div>

  <?php portafolio_lista_clases(); ?>
  <?php gymfitness_lista_clases(); ?>

  <!-- <div class="row img-principal-cat">
    <div class="contenedor-img-cat">
      <div class="texto-img-cat">
        <div class="gradiente-img-principal">
          <h1>Categoria2</h1>
          <h1 class = "subtitulo-categorias"> Entradas <span class="badge-categorias badge badge-secondary">11</span></h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
        </div>
      </div>
      <img src="<?php echo get_template_directory_uri();?>/assets/img/4l.jpg">
    </div>
  </div>
  <div class="row cuerpo-post-fotografia">

  </div>


  <div class="row img-principal-cat">
    <div class="contenedor-img-cat">
      <div class="texto-img-cat">
        <div class="gradiente-img-principal">
          <h1>Categoria3</h1>
          <h1 class = "subtitulo-categorias"> Entradas <span class="badge-categorias badge badge-secondary">11</span></h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
        </div>
      </div>
      <img src="<?php echo get_template_directory_uri();?>/assets/img/6ml.jpg">
    </div>
  </div>
  <div class="row cuerpo-post-fotografia">
 -->




  </div>

</div>

</body>
<?php
  get_footer();
 ?>
