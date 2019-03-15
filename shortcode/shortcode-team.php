<?php
/**
 * Team view short-code
 *
 * @package Royal_Event
 */

function team_tiles_func( $atts ){

    ob_start();
    get_template_part( 'template-parts/shortcode', 'team' );
    $content = ob_get_contents();
    ob_end_clean();

    return $content;

}
add_shortcode('team_tiles', 'team_tiles_func');