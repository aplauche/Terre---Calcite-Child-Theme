<?php


// Child Theme setup
function calcite_setup() {

	// Make theme available for translation.
	load_theme_textdomain( 'calcite', get_template_directory() . '/languages' );

	// Enqueue editor styles.
	add_editor_style( get_stylesheet_directory_uri() . '/style.css' );
}
add_action( 'after_setup_theme', 'calcite_setup', 11 );


// Add our child theme stylesheet to enqueue after parent
function calcite_enqueue_styles(){
  wp_enqueue_style( 'calcite-styles', get_stylesheet_directory_uri() . '/style.css', array('terre'), wp_get_theme( 'calcite' )->get( 'Version' ));
}
add_action( 'wp_enqueue_scripts', 'calcite_enqueue_styles');


// Add our custom block pattern categories
function calcite_block_pattern_category() {
	register_block_pattern_category( 'calcite-patterns', array(
		'label' => __( 'Calcite Custom', 'calcite' )
	) );
}

add_action( 'init', 'calcite_block_pattern_category', 5 );