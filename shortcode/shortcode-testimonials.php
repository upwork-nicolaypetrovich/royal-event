<?php
/**
 * testimonials view short-code
 *
 * @package Royal_Event
 */

function testimonials_slider_func( $atts ){

    ob_start();
    get_template_part( 'template-parts/shortcode', 'testimonials' );
    $content = ob_get_contents();
    ob_end_clean();

    return $content;

}
add_shortcode('testimonials_slider', 'testimonials_slider_func');