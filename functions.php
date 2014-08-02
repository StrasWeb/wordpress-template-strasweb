<?php
function excludeSlides($query)
{
    if ($query->is_home() && $query->is_main_query()) {
        $query->set('category__not_in', array(19));
    }
}
add_action('pre_get_posts', 'excludeSlides');


/**
 * Enqueue scripts
 */
function theme_name_scripts() {
	wp_enqueue_script( 'custom-scripts', get_stylesheet_directory_uri() . '/js/customscripts.js' );
}

add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );


?>