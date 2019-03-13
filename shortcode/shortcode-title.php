<?php
/**
 * Custom title short-code
 *
 * @package Royal_Event
 */

function custom_title_func( $atts ){

    $str = '<div class="re-title" style="background-image: url('.get_template_directory_uri().'/img/tbg1o.png)">';

    if( isset($atts['sub']) ){
        $str .= '<span>'.$atts['sub'].'</span>';
    }

    if( isset($atts['title']) ) {
        $str .= '<h4>'.$atts['title'].'</h4>';
    }

    $str .= '</div>';

    return $str;
}
add_shortcode('custom_title', 'custom_title_func');



// function footag_func_callback(){ echo 'composer'; die;
//     vc_map( array(
//         'name' => __('Foo Tag', 'royal-event'),
//         'base' => 'custom_title',
//         'class' => '',
//         'category' => __('Content', 'royal-event'),
//         'params' => array(
//             array (
//                 'type' => 'textfield',
//                 'heading' => __('Foo Tag', 'royal-event'),
//                 'param_name' => 'title',
//             ),
//         )
//     ) );
// }
// add_action('vc_before_init', 'footag_func_callback');
