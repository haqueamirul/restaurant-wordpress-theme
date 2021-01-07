<?php
/**
 * softretaura functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package softretaura
 */


/**
 * Enqueue scripts and styles.
 */
function softrestaura_scripts() {
	wp_enqueue_style( 'softrestaura-style', get_stylesheet_uri() );
	wp_enqueue_style( 'softrestaura-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
	wp_enqueue_style( 'softrestaura-icofont', get_template_directory_uri() . '/css/icofont.css');
	wp_enqueue_style( 'softrestaura-animate', get_template_directory_uri() . '/css/animate.css');
	wp_enqueue_style( 'softrestaura-slicknav', get_template_directory_uri() . '/css/slicknav.css');
	wp_enqueue_style( 'softrestaura-owl.carousel', get_template_directory_uri() . '/css/owl.carousel.min.css');
	wp_enqueue_style( 'softrestaura-owl.theme', get_template_directory_uri() . '/css/owl.theme.default.css');
	wp_enqueue_style( 'softrestaura-bootstrap-clockpicker', get_template_directory_uri() . '/css/bootstrap-clockpicker.css');
	wp_enqueue_style( 'softrestaura-datepicker', get_template_directory_uri() . '/css/datepicker.css');
	wp_enqueue_style( 'softrestaura-main', get_template_directory_uri() . '/css/main.css');
	wp_enqueue_style( 'softrestaura-responsive', get_template_directory_uri() . '/css/responsive.css');


	/**
	 * Load our IE-only stylesheet for all versions of IE:
	 * <!--[if IE]> ... <![endif]-->
	 */
	 // Internet Explorer HTML5 support 
    wp_enqueue_script( 'softrestaura-html5shiv','https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js', array(), '3.7.3', false);
    wp_script_add_data( 'softrestaura-html5shiv', 'conditional', 'lt IE 9' );
    wp_enqueue_script( 'softrestaura-respond','https://oss.maxcdn.com/respond/1.4.2/respond.min.js', array(), '3.7.3', false);
    wp_script_add_data( 'softrestaura-respond', 'conditional', 'lt IE 9' );

    //js
	wp_enqueue_script( 'softrestaura-jquery', get_template_directory_uri() . '/js/jquery-3.3.1.min.js', array(), '20151215', true );
	wp_enqueue_script( 'softrestaura-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '20151215', true );
	wp_enqueue_script( 'softrestaura-jquery.slicknav', get_template_directory_uri() . '/js/jquery.slicknav.min.js', array(), '20151215', true );
	wp_enqueue_script( 'softrestaura-carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), '20151215', true );
	wp_enqueue_script( 'softrestaura-clockpicker', get_template_directory_uri() . '/js/bootstrap-clockpicker.min.js', array(), '20151215', true );
	wp_enqueue_script( 'softrestaura-datepicker', get_template_directory_uri() . '/js/bootstrap-datepicker.js', array(), '20151215', true );
	wp_enqueue_script( 'softrestaura-wow', get_template_directory_uri() . '/js/wow.min.js', array(), '20151215', true );
	wp_enqueue_script( 'softrestaura-custom', get_template_directory_uri() . '/js/custom.js', array(), '20151215', true );

	wp_enqueue_script( 'softrestaura-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'softrestaura-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'softrestaura_scripts' );