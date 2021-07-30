<?php 
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package curso-wordpress
 */

get_header();
?>

<main id="primary" class="site-main">
    <?php

        while(have_posts(  )): 
            the_post();

            get_template_part( 'template-parts/header/header', 'global' );
            ?>
            
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div class="container">
                    <div class="row">

                        <!-- The content -->
                        <div class="col-lg-8">
                            <?php get_template_part( 'template-parts/content', 'post' ); ?>
                        </div>
                        <!-- The content end -->

                        <!-- Sidebar -->
                        <div class="col-lg-4">
                            <?php get_sidebar(); ?>
                        </div>
                        <!-- Sidebar end -->

                    </div>
                </div>
            </article>

        <?php
        endwhile;

    ?>

</main>

<?php get_footer(); ?>