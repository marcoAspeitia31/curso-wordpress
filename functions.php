<?php

//Set content with value based on the theme's design
if( ! isset( $content_with) ){
    $content_with = 1400;
}

if ( ! function_exists('curso_wordpress_setup') ){
    /**
     * Registrar Theme Features
     * 
     * @since 1.0.0
     */
    function curso_wordpress_setup(){
        //post images support
        add_theme_support( 'post-thumbnails' );
    }
    add_action( 'after_setup_theme', 'curso_wordpress_setup' );
}

/**
 * Register and Enqueue Styles
 * 
 * @since versión 1.0.0
 */


    function curso_wordpress_register_styles(){
        $theme_version = wp_get_theme()->get('Version');

        wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css', array(), '4.4.1' );
        wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css', array(), '5.10.0' );
        wp_enqueue_style( 'animate', get_template_directory_uri() . '/inc/animate/animate.min.css', array(), $theme_version );
        wp_enqueue_style( 'owlcarousel', get_template_directory_uri() . '/inc/owlcarousel/assets/owl.carousel.min.css', array(), $theme_version );
     
        wp_enqueue_style( 'theme-style', get_stylesheet_uri(), array(), $theme_version );
    }
    add_action( 'wp_enqueue_scripts', 'curso_wordpress_register_styles' );

    function curso_wordpress_register_scripts(){
        $theme_version = wp_get_theme()->get('Version');

        wp_enqueue_style( 'theme-style', get_stylesheet_uri(), array(), $theme_version );
    }
    add_action( 'wp_enqueue_scripts', 'curso_wordpress_register_scripts' );