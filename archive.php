<?php
/**
 * The search.php template.
 * *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @since Curso Wordpress 1.0.0
 */
get_header( );

get_template_part( 'template-parts/header/header', 'search' );
?>
<section class="blog">
<div class="container">
    <!-- Encabezado -->
    <div class="section-header text-center">
        <h1>
            <?php 
                echo sprintf( __( '%s Posts de ', 'curso-wordpress' ), $wp_query->found_posts );
                the_archive_title();
            ?>
        </h1>
    </div>
    <!-- Encabezado end -->

    <!-- template part grid -->
    <?php get_template_part( 'template-parts/grid', 'posts' ); ?>
    <!-- template part end -->
</div>
</section>


<?php get_footer( ); ?>