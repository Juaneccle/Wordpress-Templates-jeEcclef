  <?php wp_footer(); ?>
    <footer>
      <nav class="navbar navbar-expand-md navbar-dark "></a>
        <div class="container">
          <div class="row row-footer">
            <div class="col-md-3 col-menus-footer">
              <nav class="navbar navbar-expand-lg navbar-light navBar-col-footer">
                <?php wp_nav_menu(array(
                  'theme_location' => 'PrimerMenu',
                  'container' => 'div',
                  'container_class' => 'collapse navbar-collapse',
                  'container_id' => 'navbarTogglerDemo01',
                  'items_wrap' => '<ul class="navbar-items-footer navbar-nav mr-auto mt-2 mt-lg-0">%3$s</ul>',
                  'menu_class' => 'nav-item'
                ) ); ?>
              </nav>
            </div>

            <div class="col-md-3 col-menus-footer">
              <nav class="navbar navbar-expand-lg navbar-light navBar-col-footer">
                <div class="col-md-3">
                  <?php wp_nav_menu(array(
                    'theme_location' => 'menuOrientacion',
                    'container' => 'div',
                    'container_class' => 'collapse navbar-collapse',
                    'container_id' => 'navbarTogglerDemo01',
                    'items_wrap' => '<ul class="warp-footer mt-lg-0">%3$s</ul>',
                    'menu_class' => 'nav-item'
                  ) ); ?>
                </div>
              </nav>
            </div>

            <div class="col-md-3 custome-menu-footer">
              <ul>
                <li>
                  <a href="https://www.instagram.com/arturo_sinclair/?hl=es">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/insta.png">
                  </a>
                </li>
                <li>
                  <a href="https://www.facebook.com/arturo.sinclair">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/face.png">
                  </a>
                </li>
                <li>
                  <a href="https://vimeo.com/arturosinclair">
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/behan.png">
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>

        <script src="<?php bloginfo('template_url'); ?>/assets/js/jquery.min.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/assets/js/bootstrap.min.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/assets/js/jquery-ui.js"></script>

      </footer>
</body>
</html>
