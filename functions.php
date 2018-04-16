<?php

// =============================================================================
// FUNCTIONS.PHP
// -----------------------------------------------------------------------------
// Overwrite or add your own custom functions to X in this file.
// =============================================================================

// =============================================================================
// TABLE OF CONTENTS
// -----------------------------------------------------------------------------
//   01. Enqueue Parent Stylesheet
//   02. Additional Functions
// =============================================================================

// Enqueue Parent Stylesheet
// =============================================================================

add_filter( 'x_enqueue_parent_stylesheet', '__return_true' );



// Grand Peaks Functions
// =============================================================================

/*  Remove Admin Bar
/* ------------------------------------ */ 
add_filter('show_admin_bar', '__return_false');

//enqueues our external font awesome stylesheet
function enqueue_our_required_stylesheets(){
	wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'); 
}
add_action('wp_enqueue_scripts','enqueue_our_required_stylesheets');



/*  Add Custom Scripts
/* ------------------------------------ */ 
function wpb_adding_scripts() {

	wp_register_script('app', get_stylesheet_directory_uri() . '/js/app.js');


	wp_enqueue_script('app');


	if (is_home()) {
		// wp_enqueue_script( 'rest', get_template_directory_uri() . '/js/rest.js', array(), '1.0.0', true );
	}

}
add_action( 'wp_footer', 'wpb_adding_scripts' ); 
