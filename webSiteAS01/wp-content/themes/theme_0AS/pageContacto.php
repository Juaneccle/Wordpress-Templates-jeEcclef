<?php
/*
  Template Name: template Contacto
*/
 ?>

<?php
  get_header();
 ?>

<div class="row inicio-contacto">
  <div class="c-i-contacto">
    <div class="textos-c-items col-md-4 offset-md-4">
      <!-- TEXTOS SPAN -->
      <h5>Acerca de mi.</h5>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit.</p>

      <button type="button" class="btn btn-outline-primary boton-scroll">
        <img src="<?php echo get_template_directory_uri();?>/assets/img/icons/down.svg">
      </button>
    </div>



    <div class="gradient"></div>

    <img src="<?php echo get_template_directory_uri();?>/assets/img/1l.jpg">

  </div>
</div>

<div class="body-contacto">
  <div class="container container-bio">
    <div class="row row-container-bio">
      <div class="col-md-6 imagen-contacto">
        <img src="<?php echo get_template_directory_uri();?>/assets/img/1l.jpg">
      </div>
      <div class="col-md-6 textos-bio-c">
        <h3>Trayectoria</h3>
        <p class = "texto-biografia">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>

        <button type="button" class="btn btn-primary modal-bio" data-toggle="modal" data-target="#exampleModalLong">
        (Ver mas...)
        </button>

        <h3>Biografía</h3>
        <p class = "texto-biografia">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
        <button type="button" class="btn btn-primary modal-bio" data-toggle="modal" data-target="#exampleModalLong">
        (Ver mas...)
        </button>





        <!-- MODAL -->
      </div>

      <div class="row contenedor-s-e">
        <div class="col-md-6 lista-experiencias">
          <h3>Experiencias</h3>
          <ul>
            <li>
              <p>Productor</p>
            </li>
            <li>
              <p>Efectos especiales</p>
            </li>
            <li>
              <p>Director</p>
            </li>
            <li>
              <p>Guionista</p>
            </li>
          </ul>
        </div>
        <div class="col-md-6 imagen-s-e">
          <img src="<?php echo get_template_directory_uri();?>/assets/img/1l.jpg">
        </div>
      </div>
    </div>
  </div>



</div>

<div class="container form-contact">
  <div class="row">
    <div class="col-md-4 col-form-contacto">

    </div>
    <div class="col-md-8 col-mensaje-contacto">

    </div>
  </div>
</div>

<?php
  get_footer();
?>
