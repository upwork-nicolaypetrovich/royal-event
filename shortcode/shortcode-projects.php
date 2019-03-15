<?php
/**
 * Projects view short-code
 *
 * @package Royal_Event
 */

function projects_tiles_func( $atts ){

    ob_start();
    get_template_part( 'template-parts/shortcode', 'projects' );
    $content = ob_get_contents();
    ob_end_clean();

    return $content;

}
add_shortcode('projects_tiles', 'projects_tiles_func');