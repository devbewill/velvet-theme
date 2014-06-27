<?php
/**
 * velvet Theme Customizer
 *
 * @package velvet
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function velvet_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )		->transport  = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' ) ->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport  = 'postMessage';

// Color Customization
	$colors = array();
	$colors[] = array(
		'slug'=>'header_background_color', 
		'default' => '#e02356',
		'label' => __('Header Background Color', 'velvet')
	);
	$colors[] = array(
		'slug'=>'content_link_color', 
		'default' => '#88C34B',
		'label' => __('Content Link Color', 'velvet')
	);

	$colors[] = array(
		'slug'=>'tags_background_color', 
		'default' => '#222',
		'label' => __('Filter Color', 'velvet')
	);

	$colors[] = array(
		'slug'=>'tags_post_footer', 
		'default' => '#222',
		'label' => __('Tags Post', 'velvet')
	);

	foreach( $colors as $color ) {
		$wp_customize->add_setting($color['slug'], array(
	        'default' => $color['default'],
	        'type' => 'option', 
	        'capability' => 'edit_theme_options'
	    ));

		$wp_customize->add_control(
			new WP_Customize_Color_Control($wp_customize,
			    $color['slug'], 
			    array('label' => $color['label'], 
				'section' => 'colors',
				'settings' => $color['slug'],
				)
			)
		);  
	}

// Logo Uploader

	$wp_customize->add_section( 'velvet_logo_section' , array(
		'title' => __( 'Logo', 'velvet' ),
		'description' => 'Upload your Logo',
		) 
	);

	$wp_customize->add_setting( 'velvet_logo' , array(
		'default' 	=> 'http://localhost/TEST/wordpress/wp-content/themes/velvet/logo.png',
		'transport' => 'refresh',
		'type'      => 'option',
		) 
	);

	$wp_customize->add_control(
	        new WP_Customize_Image_Control( 
	            $wp_customize, 'velvet_logo',
	            	array(
						'section' 	=> 'velvet_logo_section',
						'settings'  => 'velvet_logo',
						)
			)
	);

// Header Uploader

	$wp_customize->add_section( 'velvet_header_section' , array(
		'title' => __( 'Header image', 'velvet' ),
		'description' => 'Upload your Header image',
		) 
	);

	$wp_customize->add_setting( 'velvet_header_image' , array(
		'default' 	=> '',
		'transport' => 'refresh',
		'type'      => 'option',
		) 
	);

	$wp_customize->add_control(
	        new WP_Customize_Image_Control( 
	            $wp_customize, 'velvet_header',
	            	array(
						'section' 	=> 'velvet_header_section',
						'settings'  => 'velvet_header_image',
						)
			)
	);


}
add_action( 'customize_register', 'velvet_customize_register' );


/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function velvet_customize_preview_js() {
	wp_enqueue_script( 'velvet_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'velvet_customize_preview_js' );
