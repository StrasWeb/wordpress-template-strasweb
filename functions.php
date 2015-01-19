<?php
function excludeSlides($query)
{
    if ($query->is_home() && $query->is_main_query()) {
        $query->set('category__not_in', array(19, 21, 38));
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


// Set post thumbnail sizes
set_post_thumbnail_size( 300, 300, true );

// Widget Area

register_sidebar(array(
		'name'=> 'Footer',
		'id' => 'footer',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
    
register_sidebar(array(
		'name'=> 'Bottom Footer',
		'id' => 'lower-footer',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
    
    
// Menu
register_nav_menu( 'lower-footer', 'Lower Footer' );
    
?>
