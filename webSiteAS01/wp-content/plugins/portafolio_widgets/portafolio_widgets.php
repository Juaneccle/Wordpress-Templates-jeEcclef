<?php

/*

Plugin Name: Pagina Web Arturo - widgets
Plurin URI:
Description: Añade widgets personalizados al sitio web
Version: 1.0.0
Author: Juan Ecclefield
Autor URI:
Text Domain: portafolio

*/

if(!defined('ABSPATH'))die();   // Seguridad para nuestros posts y sitio

/**
 * Adds Portafolio_Widget widget.
 */
class Portafolio_Widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'foo_widget', // Base ID
			esc_html__( 'Portafolio Proyectos', 'text_domain' ), // Name
			array( 'description' => esc_html__( 'Agregar proyectos del portafolio ', 'text_domain' ), ) // Args
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		echo $args['before_widget'];
		if ( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
		}
    ?>
      <ul class	= "sidebar-single-portafolio">
        <?php
      $args = array(
        'post_type' => 'portafolio_clases',
        'post_per_page' => 7,
        'orderby' => 'rand'
        );
        $portafolio = new WP_Query($args);
        while( $portafolio->have_posts() ): $portafolio->the_post(); ?>

        <li class = "proyectos-li">
          <div class="imagen-proyectos-li">
						<a href=" <?php the_permalink(); ?> ">
            <?php the_post_thumbnail(); ?>
						</a>
					</div>

          <div class="contenido-proyectos-li">
            <a href=" <?php the_permalink(); ?> ">
            <p> <?php the_title(); ?> </p>
						<p> <?php the_author(); ?> </p>
						<p> <?php the_category(); ?> </p>
						</a>
          </div>
        </li>
     <?php endwhile; wp_reset_postdata(); ?>

    <?php
		echo $args['after_widget'];
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
		$title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( 'New title', 'text_domain' );
		?>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_attr_e( 'Title:', 'text_domain' ); ?></label>
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
		<?php
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? sanitize_text_field( $new_instance['title'] ) : '';

		return $instance;
	}

} // class Foo_Widget

// register Foo_Widget widget
function portafolio_registrar_widget() {
    register_widget( 'Portafolio_Widget' );
}
add_action( 'widgets_init', 'portafolio_registrar_widget' );
