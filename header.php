<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 * 
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="utf-8">
        <title>Burger King - Food Website Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header>
    
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-light navbar-light" role="navigation">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?php echo esc_url( home_url('/') ); ?>">
                Burger <span>King</span>
                </a>
                <!-- Responsive menu -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu"
                    aria-controls="main-menu" aria-expanded="false"
                    aria-label="<?php esc_attr_e( 'Toggle navigation', 'devitm' ); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <?php
                    wp_nav_menu( array(
                        'theme_location'    => 'menu-principal',
                        'depth'             => 2,
                        'container'         => 'div',
                        'container_class'   => 'collapse navbar-collapse justify-content-between',
                        'container_id'      => 'main-menu',
                        'menu_class'        => 'navbar-nav ml-auto',
                        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'            => new WP_Bootstrap_Navwalker(),
                    ) );
                ?>
                <!-- End responsive menu -->
            </div>
        </nav>
        <!-- END Navbar -->

    </header>