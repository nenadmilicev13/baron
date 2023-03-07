<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package nmtheme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function nmtheme_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'nmtheme_body_classes' );


/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function nmtheme_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'nmtheme_pingback_header' );


/**
 * Modify WP Login
 */
// change error message
function nmtheme_error_message() {
	return 'Wrong username or password.';
}
add_filter( 'login_errors', 'nmtheme_error_message' );

// remove error shaking
function nmtheme_remove_login_shake() {
	remove_action( 'login_head', 'wp_shake_js', 12 );
}
add_action( 'login_head', 'nmtheme_remove_login_shake' );

// add custom stylesheet
function nmtheme_add_login_styles() {
	wp_enqueue_style('nmtheme-login-style', get_template_directory_uri() . '/assets/config/customize-login/login.css' );
}
add_action( 'login_enqueue_scripts', 'nmtheme_add_login_styles' );

// add login title
function nmtheme_add_login_title() {
	echo '<span class="login-title">nmtheme login</span>';
}
add_action( 'login_form', 'nmtheme_add_login_title' );

// change logo url
function nmtheme_loginlogo_url($url) {
	$url = esc_url( home_url( '/' ) );
	return $url;
}
add_filter( 'login_headerurl', 'nmtheme_loginlogo_url' );


/**
 * Plugin dependencies
 */
function nmtheme_dependencies() {
	if( ! function_exists('get_field') ) {
		echo '<div class="error"><p>' . __( 'Warning: The theme needs ACF Pro plugin to function', 'nmtheme' ) . '</p></div>';
	}
}
add_action( 'admin_notices', 'nmtheme_dependencies' );

/**
 * Allow SVG through Wordpress Media Uploader
 */
add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {

	global $wp_version;
	
	$filetype = wp_check_filetype( $filename, $mimes );
	
	return [ 'ext' => $filetype['ext'], 'type' => $filetype['type'], 'proper_filename' => $data['proper_filename'] ];
	
}, 10, 4 );
	
function cc_mime_types( $mimes ){ $mimes['svg'] = 'image/svg+xml'; return $mimes; } add_filter( 'upload_mimes', 'cc_mime_types' );