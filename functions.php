<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @since Curso Wordpress 1.0.0
 */
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

    // Add support for Block Styles.
    add_theme_support( 'wp-block-styles' );

    // Add support for full and wide align images.
    add_theme_support( 'align-wide' );

    // Add support for responsive embedded content.
	add_theme_support( 'responsive-embeds' );

    /**
     * Add post-formats support.
     */
    add_theme_support(
        'post-formats',
        array(
            'link',
            'aside',
            'gallery',
            'image',
            'quote',
            'status',
            'video',
            'audio',
            'chat',
        )
    );

    /*
    * Switch default core markup for search form, comment form, and comments
    * to output valid HTML5.
    */
    add_theme_support(
        'html5',
        array(
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
            'navigation-widgets',
        )
    );

    $editor_stylesheet_path = './assets/css/style-editor.css';

    // Note, the is_IE global variable is defined by WordPress and is used
    // to detect if the current browser is internet explorer.
    global $is_IE;
    if ( $is_IE ) {
        $editor_stylesheet_path = './assets/css/ie-editor.css';
    }

    // Enqueue editor styles.
    add_editor_style( $editor_stylesheet_path );

    // Add custom editor font sizes.
    add_theme_support(
        'editor-font-sizes',
        array(
            array(
                'name'      => esc_html__( 'Extra small', 'curso-wordpress' ),
                'shortName' => esc_html_x( 'XS', 'Font size', 'curso-wordpress' ),
                'size'      => 16,
                'slug'      => 'extra-small',
            ),
            array(
                'name'      => esc_html__( 'Small', 'curso-wordpress' ),
                'shortName' => esc_html_x( 'S', 'Font size', 'curso-wordpress' ),
                'size'      => 18,
                'slug'      => 'small',
            ),
            array(
                'name'      => esc_html__( 'Normal', 'curso-wordpress' ),
                'shortName' => esc_html_x( 'M', 'Font size', 'curso-wordpress' ),
                'size'      => 20,
                'slug'      => 'normal',
            ),
            array(
                'name'      => esc_html__( 'Large', 'curso-wordpress' ),
                'shortName' => esc_html_x( 'L', 'Font size', 'curso-wordpress' ),
                'size'      => 24,
                'slug'      => 'large',
            ),
            array(
                'name'      => esc_html__( 'Extra large', 'curso-wordpress' ),
                'shortName' => esc_html_x( 'XL', 'Font size', 'curso-wordpress' ),
                'size'      => 40,
                'slug'      => 'extra-large',
            ),
            array(
                'name'      => esc_html__( 'Huge', 'curso-wordpress' ),
                'shortName' => esc_html_x( 'XXL', 'Font size', 'curso-wordpress' ),
                'size'      => 96,
                'slug'      => 'huge',
            ),
            array(
                'name'      => esc_html__( 'Gigantic', 'curso-wordpress' ),
                'shortName' => esc_html_x( 'XXXL', 'Font size', 'curso-wordpress' ),
                'size'      => 144,
                'slug'      => 'gigantic',
            ),
        )
    );

    // Custom background color.
    add_theme_support(
        'custom-background',
        array(
            'default-color' => 'd1e4dd',
        )
    );

    // Editor color palette.
    $black     = '#000000';
    $dark_gray = '#28303D';
    $gray      = '#39414D';
    $green     = '#D1E4DD';
    $blue      = '#D1DFE4';
    $purple    = '#D1D1E4';
    $red       = '#E4D1D1';
    $orange    = '#E4DAD1';
    $yellow    = '#EEEADD';
    $white     = '#FFFFFF';

    add_theme_support(
        'editor-color-palette',
        array(
            array(
                'name'  => esc_html__( 'Black', 'curso-wordpress' ),
                'slug'  => 'black',
                'color' => $black,
            ),
            array(
                'name'  => esc_html__( 'Dark gray', 'curso-wordpress' ),
                'slug'  => 'dark-gray',
                'color' => $dark_gray,
            ),
            array(
                'name'  => esc_html__( 'Gray', 'curso-wordpress' ),
                'slug'  => 'gray',
                'color' => $gray,
            ),
            array(
                'name'  => esc_html__( 'Green', 'curso-wordpress' ),
                'slug'  => 'green',
                'color' => $green,
            ),
            array(
                'name'  => esc_html__( 'Blue', 'curso-wordpress' ),
                'slug'  => 'blue',
                'color' => $blue,
            ),
            array(
                'name'  => esc_html__( 'Purple', 'curso-wordpress' ),
                'slug'  => 'purple',
                'color' => $purple,
            ),
            array(
                'name'  => esc_html__( 'Red', 'curso-wordpress' ),
                'slug'  => 'red',
                'color' => $red,
            ),
            array(
                'name'  => esc_html__( 'Orange', 'curso-wordpress' ),
                'slug'  => 'orange',
                'color' => $orange,
            ),
            array(
                'name'  => esc_html__( 'Yellow', 'curso-wordpress' ),
                'slug'  => 'yellow',
                'color' => $yellow,
            ),
            array(
                'name'  => esc_html__( 'White', 'curso-wordpress' ),
                'slug'  => 'white',
                'color' => $white,
            ),
        )
    );

    add_theme_support(
        'editor-gradient-presets',
        array(
            array(
                'name'     => esc_html__( 'Purple to yellow', 'curso-wordpress' ),
                'gradient' => 'linear-gradient(160deg, ' . $purple . ' 0%, ' . $yellow . ' 100%)',
                'slug'     => 'purple-to-yellow',
            ),
            array(
                'name'     => esc_html__( 'Yellow to purple', 'curso-wordpress' ),
                'gradient' => 'linear-gradient(160deg, ' . $yellow . ' 0%, ' . $purple . ' 100%)',
                'slug'     => 'yellow-to-purple',
            ),
            array(
                'name'     => esc_html__( 'Green to yellow', 'curso-wordpress' ),
                'gradient' => 'linear-gradient(160deg, ' . $green . ' 0%, ' . $yellow . ' 100%)',
                'slug'     => 'green-to-yellow',
            ),
            array(
                'name'     => esc_html__( 'Yellow to green', 'curso-wordpress' ),
                'gradient' => 'linear-gradient(160deg, ' . $yellow . ' 0%, ' . $green . ' 100%)',
                'slug'     => 'yellow-to-green',
            ),
            array(
                'name'     => esc_html__( 'Red to yellow', 'curso-wordpress' ),
                'gradient' => 'linear-gradient(160deg, ' . $red . ' 0%, ' . $yellow . ' 100%)',
                'slug'     => 'red-to-yellow',
            ),
            array(
                'name'     => esc_html__( 'Yellow to red', 'curso-wordpress' ),
                'gradient' => 'linear-gradient(160deg, ' . $yellow . ' 0%, ' . $red . ' 100%)',
                'slug'     => 'yellow-to-red',
            ),
            array(
                'name'     => esc_html__( 'Purple to red', 'curso-wordpress' ),
                'gradient' => 'linear-gradient(160deg, ' . $purple . ' 0%, ' . $red . ' 100%)',
                'slug'     => 'purple-to-red',
            ),
            array(
                'name'     => esc_html__( 'Red to purple', 'curso-wordpress' ),
                'gradient' => 'linear-gradient(160deg, ' . $red . ' 0%, ' . $purple . ' 100%)',
                'slug'     => 'red-to-purple',
            ),
        )
    );

    //Bootstrap menu support
    require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

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
        wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '4.4.1' );
        wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css', array(), '5.10.0' );
        wp_enqueue_style( 'animate', get_template_directory_uri() . '/inc/animate/animate.min.css', array(), $theme_version );
        wp_enqueue_style( 'owlcarousel', get_template_directory_uri() . '/inc/owlcarousel/assets/owl.carousel.min.css', array(), $theme_version );
        wp_enqueue_style( 'flaticon', get_template_directory_uri() . '/inc/flaticon/font/flaticon.css', array(), $theme_version );
        //wp_enqueue_style( 'tempusdominus', get_template_directory_uri() . '/inc/tempusdominus/css/tempusdominus-bootstrap-4.min.css', array('bootstrap'), $theme_version );

        //Main theme style
        wp_enqueue_style( 'theme-style', get_stylesheet_uri() , array('google-fonts', 'bootstrap', 'font-awesome', 'animate', 'flaticon'), $theme_version );
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

        if ( ( ! is_admin() ) && is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
            wp_enqueue_script( 'comment-reply' );
        }

        //Javascript Libraries
        wp_enqueue_script( 'jquery' );
        wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array('jquery'), '4.4.1', true );
        wp_enqueue_script( 'easing', get_template_directory_uri() . '/inc/easing/easing.min.js', array(), $theme_version, true );
        wp_enqueue_script( 'owlcarousel', get_template_directory_uri() . '/inc/owlcarousel/owl.carousel.min.js', array(), $theme_version, true );
        //wp_enqueue_script( 'moment', get_template_directory_uri() . '/inc/tempusdominus/js/moment.min.js', array(), $theme_version, true );
        //wp_enqueue_script( 'moment-timezone', get_template_directory_uri() . '/inc/tempusdominus/js/moment-timezone.min.js', array(), $theme_version, true );
        //wp_enqueue_script( 'tempusdominus', get_template_directory_uri() . '/inc/tempusdominus/js/tempusdominus-bootstrap-4.min.js', array(), $theme_version, true );

        // Concact Javascript File
        wp_enqueue_script( 'mail-bootstrap-validation', get_template_directory_uri() . '/inc/mail/jqBootstrapValidation.min.js', array('bootstrap'), $theme_version, true );
        wp_enqueue_script( 'mail-contact', get_template_directory_uri() . '/inc/mail/contact.js', array(), $theme_version, true );

        // Main Javascript File
        wp_enqueue_script( 'theme', get_template_directory_uri() . '/assets/js/index.js', array('owlcarousel'), $theme_version, true );
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
            'before_sidebar' => '<aside class="sidebar">',
            'after_sidebar' => '</aside>',
            'before_widget' => '<div class="sidebar-widget">',
            'after_widget'  => '</div>',
        );
        register_sidebar( $args );
    
    }
    add_action( 'widgets_init', 'curso_wordpress_sidebars' );
    
}
// Disables the block editor from managing widgets. renamed from wp_use_widgets_block_editor
add_filter( 'use_widgets_block_editor', '__return_false' );

/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 * 
 * @link https://developer.wordpress.org/reference/hooks/excerpt_length/
 */
function curso_wordpress_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'curso_wordpress_custom_excerpt_length', 999 );

/**
 * In this section add custom php files required
 */
require_once dirname(__FILE__) . '/inc/custom-recent-posts-widget.php';