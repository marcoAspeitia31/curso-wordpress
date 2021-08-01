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
    <div class="text-center">
        <h2 class="error-404">404</h2>
    </div>
    <!-- Encabezado end -->
    <div class="row">
        <div class="container text-center">
            <p>Lo sentimos, la página que buscas ya no existe o está de baja momentáneamente</p>
            <?php get_search_form( ); ?>
        </div>
    </div>
</div>
</section>


<?php get_footer( ); ?>