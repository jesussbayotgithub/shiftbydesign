<?php
/**
 * Sample implementation of the Custom Header feature
 *
 * You can add an optional custom header image to header.php like so ...
 *
	<?php the_header_image_tag(); ?>
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-headers/
 *
 * @package WP_Bootstrap_4
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses wp_bootstrap_4_header_style()
 */
function wp_bootstrap_4_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'wp_bootstrap_4_custom_header_args', array(
		'default-image'          => get_template_directory_uri() . '/assets/images/default-cover-img.jpeg',
		'default-text-color'     => 'ffffff',
		'width'                  => 1440,
		'height'                 => 500,
		'flex-height'            => true,
		'flex-width'             => true,
		'wp-head-callback'       => 'wp_bootstrap_4_header_style',
	) ) );

	register_default_headers( array(
		'desk' => array(
			'url'           => '%s/assets/images/default-cover-img.jpeg',
			'thumbnail_url' => '%s/assets/images/default-cover-img.jpeg',
			'description'   => __( 'Desk', 'wp-bootstrap-4' )
		),
	) );
}
