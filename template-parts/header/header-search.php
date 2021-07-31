<?php
/**
 * Template part for displaying the global header for pages and posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package curso-wordpress
 * 
 * @since Curso Wordpress 1.0.0
 */
?><div class="page-header py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php if( is_404(  ) ): ?>
                    <h1 class="text-uppercase d-lg-none">Error</h1>
                <?php else: ?>
                    <h1 class="text-uppercase d-lg-none">Búsqueda</h1>
                <?php endif; ?>

            </div>
        </div>
    </div>
</div>