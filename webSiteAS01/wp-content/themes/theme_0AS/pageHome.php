<?php
/*
  Template Name: template inicio
*/
 ?>

<?php
  get_header();
 ?>





<div class="paralax">
  <div class="row row-inicio">
     <img src="<?php echo get_template_directory_uri();?>/assets/img/inicio.png">

<!-- BUSCAR OPCIONES  -->
     <!-- <div class="descripcion">
       <h4>Titulo descripción</h4>
       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
       <button type="button" class="btn btn-outline-light boton-inicio-portafolio">Portafolio</button>
     </div> -->

     <!-- <div class="carta-presentacion">
       <h4>Arturo Sinclair</h4>
       <ul>
         <li>
           <p>Arturo Sinclair</p>
         </li>
         <li>
           <p>Desconosido</p>
         </li>
         <li>
           <p>Desconocido@gmail.com</p>
         </li>
       </ul>
     </div> -->

   </div>
</div>


<!-- <div class="container cuerpo-inicio">
  <div class="row menu-orientacion-categorias">
      <?php wp_nav_menu(array(
        'theme_location' => 'menuOrientacion',
        'container' => 'div',
        'container_class' => 'offset-md-2 col-md-10',
        'container_id' => 'navbarTogglerDemo01',
        'items_wrap' => '<ul class="warp-categoria mt-lg-0">%3$s</ul>',
        'menu_class' => 'nav-item-categoria'
      ) ); ?>
  </div>
</div> -->

<!-- CUERPO  -->
<!-- ACTUALIZAR ESTA CARACTERISTICA -->
<div class="container cont-fondo-home">
  <div class="container fondo-body-home">
  </div>
</div>


<!-- PRIMERA CATEGORIA -->
  <div class="container">
    <div class="row">
      <div class="col-md-6 descr-categoria-cont">
        <div class="card carta-cat-cont">
          <div class="card-body">
            <h5 class="card-title">Electronica</h5>
            <h6 class="card-subtitle  ">Sub titulo</h6>
            <p class="card-text">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            </p>
              <button type="button" class="btn btn-light">Ingresar</button>
          </div>
        </div>
      </div>

      <div class="col-md-6 thumb-categoria-cont">
        <div id="carouselExampleFade" class="carousel slide carousel-fade carrucel-cat" data-ride="carousel">
          <div class="carousel-inner inner-cat">
            <div class="carousel-item active item-carrucel-cat">
              <img src="<?php echo get_template_directory_uri();?>/assets/img/1l.jpg" class ="cover">
            </div>
            <div class="carousel-item">
              <img src="<?php echo get_template_directory_uri();?>/assets/img/2ml.jpg" class ="cover">
            </div>
            <div class="carousel-item">
              <img src="<?php echo get_template_directory_uri();?>/assets/img/4l.jpg" class ="cover">
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

<!-- SEGUNDA CATEGORIA -->
</div>
  <div class="row">
    <div class="col-md-7 thumb-categoria-row">
      <div id="carouselExampleFade" class="carousel slide carousel-fade carrucel-cat" data-ride="carousel">
        <div class="carousel-inner inner-cat">
          <div class="carousel-item active item-carrucel-cat">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/6ml.jpg" class ="cover">
          </div>
          <div class="carousel-item">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/1l.jpg" class ="cover">
          </div>
          <div class="carousel-item">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/4l.jpg" class ="cover">
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-5 descr-categoria-row2">
      <div class="card carta-cat-cont2">
        <div class="card-body">
          <h5 class="card-title">Electronica</h5>
          <h6 class="card-subtitle  ">Sub titulo</h6>
          <p class="card-text">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
          </p>
            <button type="button" class="btn btn-light">Ingresar</button>
        </div>
      </div>
    </div>
  </div>


<!-- TERCERA CATEGORIA -->

  <div class="container">
    <div class="row">
      <div class="col-md-4  descr-categoria-cont">
        <div class="card carta-cat-cont4">
          <div class="card-body">
            <h5 class="card-title">Electronica</h5>
            <h6 class="card-subtitle  ">Sub titulo</h6>
            <p class="card-text">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            </p>
              <button type="button" class="btn btn-light">Ingresar</button>
          </div>
        </div>
      </div>
    <div class="col-md-8 thumb-categoria-cont">
      <div id="carouselExampleFade" class="carousel slide carousel-fade carrucel-cat" data-ride="carousel">
        <div class="carousel-inner inner-cat">
          <div class="carousel-item active item-carrucel-cat">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/4l.jpg" class ="cover">
          </div>
          <div class="carousel-item">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/2ml.jpg" class ="cover">
          </div>
          <div class="carousel-item">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/1l.jpg" class ="cover">
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>

  <!-- CUARTA CATEGORIA -->
    <div class="container">
      <div class="row">
        <div class="col-md-7 thumb-categoria-cont">
          <div id="carouselExampleFade" class="carousel slide carousel-fade carrucel-cat" data-ride="carousel">
            <div class="carousel-inner inner-cat">
              <div class="carousel-item active item-carrucel-cat">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/2ml.jpg" class ="cover">
              </div>
              <div class="carousel-item">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/1l.jpg" class ="cover">
              </div>
              <div class="carousel-item">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/6ml.jpg" class ="cover">
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-5 descr-categoria-cont">
          <div class="card carta-cat-cont">
            <div class="card-body">
              <h5 class="card-title">Electronica</h5>
              <h6 class="card-subtitle  ">Sub titulo</h6>
              <p class="card-text">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
              </p>
                <button type="button" class="btn btn-light">Ingresar</button>
            </div>
          </div>
        </div>
      </div>
    </div>


  <!-- QUINTA CATEGORIA -->
    <div class="row">
      <div class="col-md-3 offset-md-2 descr-categoria-row3">
        <div class="card carta-cat-cont3">
          <div class="card-body">
            <h5 class="card-title">Electronica</h5>
            <h6 class="card-subtitle  ">Sub titulo</h6>
            <p class="card-text">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            </p>
              <button type="button" class="btn btn-light">Ingresar</button>
          </div>
        </div>
      </div>

      <div class="col-md-7 thumb-categoria-row3">
        <div id="carouselExampleFade" class="carousel slide carousel-fade carrucel-cat" data-ride="carousel">
          <div class="carousel-inner inner-cat">
            <div class="carousel-item active item-carrucel-cat">
              <img src="<?php echo get_template_directory_uri();?>/assets/img/4l.jpg" class ="cover">
            </div>
            <div class="carousel-item">
              <img src="<?php echo get_template_directory_uri();?>/assets/img/2ml.jpg" class ="cover">
            </div>
            <div class="carousel-item">
              <img src="<?php echo get_template_directory_uri();?>/assets/img/1l.jpg" class ="cover">
            </div>
          </div>
        </div>
      </div>
    </div>

<?php
  get_footer();
 ?>
