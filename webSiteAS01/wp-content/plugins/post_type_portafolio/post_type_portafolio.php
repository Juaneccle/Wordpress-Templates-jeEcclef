<?php

/*
Plugin Name: Pagina Web Arturo - Post Types
Plurin URI:
Description: Añade postTypes a sitio web
Version: 1.0.0
Author: Juan Ecclefield
Autor URI:
Text Domain: portafolio

*/

if(!defined('ABSPATH'))die();   // Seguridad para nuestros posts y sitio
// Registrar Custom Post Type
function portafolio_clases_post_type() {

	$labels = array(
		'name'                  => _x( 'Posts', 'Post Type General Name', 'portafolio' ),
		'singular_name'         => _x( 'PostPortafolio', 'Post Type Singular Name', 'portafolio' ),
		'menu_name'             => __( 'PostPortafolio', 'portafolio' ),
		'name_admin_bar'        => __( 'Clase', 'portafolio' ),
		'archives'              => __( 'Archivo', 'portafolio' ),
		'attributes'            => __( 'Atributos', 'portafolio' ),
		'parent_item_colon'     => __( 'Clase Padre', 'portafolio' ),
		'all_items'             => __( 'Todos los Posts', 'portafolio' ),
		'add_new_item'          => __( 'Agregar Clase', 'portafolio' ),
		'add_new'               => __( 'Agregar Post', 'portafolio' ),
		'new_item'              => __( 'Nueva Clase', 'portafolio' ),
		'edit_item'             => __( 'Editar Clase', 'portafolio' ),
		'update_item'           => __( 'Actualizar Clase', 'portafolio' ),
		'view_item'             => __( 'Ver Clase', 'portafolio' ),
		'view_items'            => __( 'Ver Clases', 'portafolio' ),
		'search_items'          => __( 'Buscar Clase', 'portafolio' ),
		'not_found'             => __( 'No Encontrado', 'portafolio' ),
		'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'portafolio' ),
		'featured_image'        => __( 'Imagen Destacada', 'portafolio' ),
		'set_featured_image'    => __( 'Guardar Imagen destacada', 'portafolio' ),
		'remove_featured_image' => __( 'Eliminar Imagen destacada', 'portafolio' ),
		'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'portafolio' ),
		'insert_into_item'      => __( 'Insertar en Clase', 'portafolio' ),
		'uploaded_to_this_item' => __( 'Agregado en Clase', 'portafolio' ),
		'items_list'            => __( 'Lista de Clases', 'portafolio' ),
		'items_list_navigation' => __( 'Navegación de Clases', 'portafolio' ),
		'filter_items_list'     => __( 'Filtrar Clases', 'portafolio' ),
	);
	$args = array(
		'label'                 => __( 'Portafolio', 'portafolio' ),
		'description'           => __( 'Clases para el Sitio Web', 'portafolio' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => true,  // true = post, False = paginas
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 6,  // Posicion en el UI de wordpress
        'menu_icon'             => 'dashicons-format-gallery',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'taxonomies' => array('category', 'post_tag')
	);
	register_post_type( 'portafolio_clases', $args );

}
add_action( 'init', 'portafolio_clases_post_type', 0 );
