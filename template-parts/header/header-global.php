<?php
/**
 * Template part for displaying the global header for pages and posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package curso-wordpress
 */
?><div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php the_title( '<h1 class="text-uppercase">', '</h1>' )?>
            </div>
            <div class="col-12">
                <?php get_post_type(); ?>
                <a href="<?php echo esc_url( home_url('/') ); ?>"><?php echo get_the_title( get_option('page_on_front') ); ?></a>
                <?php
                    if(is_single( get_the_ID(  ) )):
                ?>
                    <a href="<?php echo get_permalink( get_option('page_for_posts') ); ?>"><?php echo get_the_title( get_option('page_for_posts') ); ?></a>
                <?php
                    endif
                ?> 
                <span><?php the_title(); ?></span>
            </div>
        </div>
    </div>
</div>