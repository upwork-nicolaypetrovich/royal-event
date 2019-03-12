<?php
/**
 * Custom title short-code
 *
 * @package Royal_Event
 */

function custom_title_func( $atts ){

    $str = '';

    if( isset($atts['sub']) ){
        $str .= '<span>'.$atts['sub'].'</span>';
    }

    if( isset($atts['title']) ) {
        $str .= '<h4>'.$atts['title'].'</h4>';
    }

    return $str;
}
add_shortcode('custom_title', 'custom_title_func');



// function footag_func_callback(){ echo 'composer'; die;
//     vc_map( array(
//         'name' => __('Foo Tag'),
//         'base' => 'custom_title',
//         'class' => '',
//         'category' => __('Content'),
//         'params' => array(
//             array (
//                 'type' => 'textfield',
//                 'heading' => __('Foo Tag'),
//                 'param_name' => 'title',
//             ),
//         )
//     ) );
// }
// add_action('vc_before_init', 'footag_func_callback');
