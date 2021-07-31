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
        <h2>
            <?php echo sprintf( __( '%s Resultados para: ', 'escuela-cocina' ), $wp_query->found_posts ); echo get_search_query(); ?>
        </h2>
    </div>
    <!-- Encabezado end -->

    <!-- template part grid -->
    <?php get_template_part( 'template-parts/grid', 'posts' ); ?>
    <!-- template part end -->
    
</div>
</section>


<?php get_footer( ); ?>