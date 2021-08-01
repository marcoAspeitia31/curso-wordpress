<?php
/**
 * Sidebar File Layout
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/
 *
 * @since Curso Wordpress 1.0.0
 */

if(!is_active_sidebar('single-sidebar')){
    return;
}
dynamic_sidebar( 'single-sidebar' );
