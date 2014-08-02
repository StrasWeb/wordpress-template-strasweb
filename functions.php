<?php
function excludeSlides($query)
{
    if ($query->is_home() && $query->is_main_query()) {
        $query->set('category__not_in', array(19));
    }
}
add_action('pre_get_posts', 'excludeSlides');

// Shortcodes 
function dernieres_realisations_func( $atts ){
	return "foo and bar";
}
add_shortcode( 'dernieres_realisations', 'dernieres_realisations_func' );

?>
