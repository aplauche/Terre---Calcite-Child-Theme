<?php

// Add our child theme stylesheet to enqueue after parent
function calcite_enqueue_styles(){
  wp_enqueue_style( 'calcite-styles', get_stylesheet_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'calcite_enqueue_styles', 99 );


// Add our custom block pattern categories
function calcite_block_pattern_category() {
	register_block_pattern_category( 'calcite-patterns', array(
		'label' => __( 'Calcite Custom', 'calcite' )
	) );
}

add_action( 'init', 'calcite_block_pattern_category', 5 );