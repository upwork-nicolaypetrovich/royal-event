<?php
/**
 * Royal Event Theme Customizer
 *
 * @package Royal_Event
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function royal_event_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'royal_event_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'royal_event_customize_partial_blogdescription',
		) );
	}

	/**
	 * contacts section
	 */
    $wp_customize->add_section(
        'display-contacts',
        array(
            'title'       => 'Contacts',
            'description' => 'Contacts for display on website',
            'priority'    => 20,
        )
    );
    
    $wp_customize->add_setting(
        'dc-phone',
        array( 'default' => '000-000-000' )
    );
    $wp_customize->add_control(
        'dc-phone',
        array(
            'label'   => 'Phone number',
            'section' => 'display-contacts',
            'type'    => 'text',
        )
    );
    
    $wp_customize->add_setting(
        'dc-email',
        array( 'default' => 'email@email.com' )
    );
    $wp_customize->add_control(
        'dc-email',
        array(
            'label'   => 'email address',
            'section' => 'display-contacts',
            'type'    => 'text',
        )
    );
    
    $wp_customize->add_setting(
        'sn-twitter',
        array( 'default' => '/' )
    );
    $wp_customize->add_control(
        'sn-twitter',
        array(
            'label'   => 'Twitter',
            'section' => 'display-contacts',
            'type'    => 'text',
        )
    );
    
    $wp_customize->add_setting(
        'sn-facebook',
        array( 'default' => '/' )
    );
    $wp_customize->add_control(
        'sn-facebook',
        array(
            'label'   => 'Facebook',
            'section' => 'display-contacts',
            'type'    => 'text',
        )
    );
    
    $wp_customize->add_setting(
        'sn-tumblr',
        array( 'default' => '/' )
    );
    $wp_customize->add_control(
        'sn-tumblr',
        array(
            'label'   => 'Tumblr',
            'section' => 'display-contacts',
            'type'    => 'text',
        )
    );
    
    $wp_customize->add_setting(
        'sn-instagram',
        array( 'default' => '/' )
    );
    $wp_customize->add_control(
        'sn-instagram',
        array(
            'label'   => 'Instagram',
            'section' => 'display-contacts',
            'type'    => 'text',
        )
    );

}
add_action( 'customize_register', 'royal_event_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function royal_event_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function royal_event_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function royal_event_customize_preview_js() {
	wp_enqueue_script( 'royal-event-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'royal_event_customize_preview_js' );
