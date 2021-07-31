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
                <?php 
                /**
                 * Verify if is blog page to modify the title
                 */
                if( ! is_home() ){
                the_title( '<h1 class="text-uppercase">', '</h1>' );
                } else {
                    echo '<h1 class="text-uppercase">';
                    echo esc_html( get_the_title( get_option('page_for_posts') ) );
                    echo '</h1>';
                }
                ?>
            </div>
            <div class="col-12">
                <a href="<?php echo esc_url( home_url('/') ); ?>"><?php echo get_the_title( get_option('page_on_front') ); ?></a>
                <?php
                    /**
                     * Verify is this is a single post
                     */
                    if(is_single( get_the_ID(  ) )):
                ?>
                    <a href="<?php echo get_permalink( get_option('page_for_posts') ); ?>"><?php echo get_the_title( get_option('page_for_posts') ); ?></a>
                    <span><?php the_title(); ?></span>
                <?php
                    //verify is this is the page for posts
                    elseif ( is_home() ) :
                ?>
                    <span><?php echo get_the_title( get_option('page_for_posts') ); ?></span>
                <?php
                    else :
                ?> 
                <span><?php the_title(); ?></span>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>