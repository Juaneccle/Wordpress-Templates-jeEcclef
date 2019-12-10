<?php
/*
  Template Name: template Contacto
*/
 ?>

<?php
  get_header();
 ?>

<div class="row inicio-contacto">

    <div id="carouselExampleCaptions" class="carousel slide carrucel-contacto" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active c-i-contacto">
          <div class="gradient">
          </div>
           <img src="<?php echo get_template_directory_uri();?>/assets/img/1l.jpg">
          <div class="carousel-caption d-none d-md-block textos-c-items">
            <h5>First slide label</h5>
            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
          </div>
        </div>
        <div class="carousel-item c-i-contacto">
          <div class="gradient">
          </div>
          <img src="<?php echo get_template_directory_uri();?>/assets/img/1l.jpg">
          <div class="carousel-caption d-none d-md-block textos-c-items">
            <h5>Second slide label</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>
        </div>
        <div class="carousel-item c-i-contacto">
          <div class="gradient">
          </div>
          <img src="<?php echo get_template_directory_uri();?>/assets/img/1l.jpg">
          <div class="carousel-caption d-none d-md-block textos-c-items">
            <h5>Third slide label</h5>
            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <!-- SPAN INICIO -->
    <h2>holaaaaa</h2>
</div>

<div class="row bio-contacto">
  <div class="container">

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
