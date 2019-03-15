<?php
/**
 * Events view short-code
 *
 * @package Royal_Event
 */

function events_list_func( $atts ){

    ob_start();
    get_template_part( 'template-parts/shortcode', 'events' );
    $content = ob_get_contents();
    ob_end_clean();

    return $content;

}
add_shortcode('events_list', 'events_list_func');