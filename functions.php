<?php

// Set content width value based on the theme's design
if ( ! isset( $content_width ) )
	$content_width = 1400;

if ( ! function_exists('curso_wordpress_setup') ) {

/**
 * Register Theme Features
 * 
 * @since Curso Wordpress 1.0.0
 */
function curso_wordpress_setup()  {
    /* Defining images size */
    add_image_size( 'grid-blog', 500, 350, true );

	// Add theme support for Automatic Feed Links
	add_theme_support( 'automatic-feed-links' );

	// Add theme support for Featured Images
	add_theme_support( 'post-thumbnails' );

	// Add theme support for document Title tag
	add_theme_support( 'title-tag' );

    //Bootstrap menu support
    require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

    /*
    * Switch default core markup for search form, comment form, and comments
    * to output valid HTML5.
    */
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        )
    );
}
add_action( 'after_setup_theme', 'curso_wordpress_setup' );

}

/**
 * Register and Enqueue Styles
 * 
 * @since Curso Wordpress 1.0.0
 */
if ( ! function_exists('curso_wordpress_register_styles') ){
    function curso_wordpress_register_styles(){
        $theme_version = wp_get_theme()->get('Version');

        //Fonts
        wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:300,400|Nunito:600,700', array(), $theme_version );

        //Styles
        wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css', array(), '4.4.1' );
        wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css', array(), '5.10.0' );
        wp_enqueue_style( 'animate', get_template_directory_uri() . '/inc/animate/animate.min.css', array(), $theme_version );
        wp_enqueue_style( 'owlcarousel', get_template_directory_uri() . '/inc/owlcarousel/assets/owl.carousel.min.css', array(), $theme_version );
        wp_enqueue_style( 'flaticon', get_template_directory_uri() . '/inc/flaticon/font/flaticon.css', array(), $theme_version );
        //wp_enqueue_style( 'tempusdominus', get_template_directory_uri() . '/inc/tempusdominus/css/tempusdominus-bootstrap-4.min.css', array('bootstrap'), $theme_version );

        //Main theme style
        wp_enqueue_style( 'theme-style', get_stylesheet_uri() , array('google-fonts', 'bootstrap', 'font-awesome', 'animate', 'owlcarousel', 'flaticon'), $theme_version );
    }
    add_action( 'wp_enqueue_scripts', 'curso_wordpress_register_styles' );
}
/**
 * Register and Enqueue Scripts
 * 
 * @since Curso Wordpress 1.0.0
 */
if ( ! function_exists('curso_wordpress_register_scripts') ){
    function curso_wordpress_register_scripts(){
        $theme_version = wp_get_theme()->get('Version');

        //Javascript Libraries
        wp_enqueue_script( 'jquery' );
        wp_enqueue_script( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js', array('jquery'), '4.4.1', true );
        wp_enqueue_script( 'easing', get_template_directory_uri() . '/inc/easing/easing.min.js', array(), $theme_version, true );
        wp_enqueue_script( 'owlcarousel', get_template_directory_uri() . '/inc/owlcarousel/owl.carousel.min.js', array(), $theme_version, true );
        //wp_enqueue_script( 'moment', get_template_directory_uri() . '/inc/tempusdominus/js/moment.min.js', array(), $theme_version, true );
        //wp_enqueue_script( 'moment-timezone', get_template_directory_uri() . '/inc/tempusdominus/js/moment-timezone.min.js', array(), $theme_version, true );
        //wp_enqueue_script( 'tempusdominus', get_template_directory_uri() . '/inc/tempusdominus/js/tempusdominus-bootstrap-4.min.js', array(), $theme_version, true );

        // Concact Javascript File
        wp_enqueue_script( 'mail-bootstrap-validation', get_template_directory_uri() . '/inc/mail/jqBootstrapValidation.min.js', array('bootstrap'), $theme_version, true );
        wp_enqueue_script( 'mail-contact', get_template_directory_uri() . '/inc/mail/contact.js', array(), $theme_version, true );

        // Main Javascript File
        wp_enqueue_script( 'theme', get_template_directory_uri() . '/assets/js/index.js', array(), $theme_version, true );
    }
    add_action( 'wp_enqueue_scripts', 'curso_wordpress_register_scripts' );
}

/**
 * Register Navigation Menus
 * 
 * @link 
 * 
 * @since Curso Wordpress 1.0.0
 */
if ( ! function_exists( 'curso_wordpress_navigation_menus' ) ) {

    // Register Navigation Menus
    function curso_wordpress_navigation_menus() {
    
        $locations = array(
            'menu-principal' => __( 'Menú Principal', 'curso-wordpress' ),
            'menu-footer' => __( 'Menú Footer', 'curso-wordpress' ),
        );
        register_nav_menus( $locations );
    
    }
    add_action( 'init', 'curso_wordpress_navigation_menus' );
    
    }
/**
 * Register Sidebar
 * 
 * @link https://developer.wordpress.org/reference/functions/register_sidebar/
 * 
 * @since Curso Wordpress 1.0.0 
 */
if ( ! function_exists( 'curso_wordpress_sidebars' ) ) {

    // Register Sidebars
    function curso_wordpress_sidebars() {
    
        $args = array(
            'id'            => 'single-sidebar',
            'class'         => 'clase-bonita',
            'name'          => __( 'Sidebar Lateral Posts', 'curso-wordpress' ),
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
            'before_widget' => '<div class="sidebar-widget">',
            'after_widget'  => '</div>',
        );
        register_sidebar( $args );
    
    }
    add_action( 'widgets_init', 'curso_wordpress_sidebars' );
    
}
// Disables the block editor from managing widgets. renamed from wp_use_widgets_block_editor
add_filter( 'use_widgets_block_editor', '__return_false' );