<?php
get_header( );

get_template_part( 'template-parts/header/header', 'global' );
?>

<div class="blog">
    <div class="container">
        <!-- Encabezado -->
        <div class="section-header text-center">
            <p>Food Blog</p>
            <h2>Latest From Food Blog</h2>
        </div>
        <!-- Encabezado end -->

        <!-- template part grid -->
        <?php get_template_part( 'template-parts/grid', 'posts' ); ?>
        <!-- template part end -->
    </div>
</div>

<?php get_footer( ); ?>