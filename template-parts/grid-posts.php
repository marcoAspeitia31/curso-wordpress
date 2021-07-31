<?php
/**
 * Template part for displaying the grid post for home, search
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package curso-wordpress
 * 
 * @since Curso Wordpress 1.0.0
 */

if(have_posts(  )): ?>
    <div class="row">
        <?php while(have_posts(  )): the_post(  ); ?>
            <!-- loop -->
                <div class="col-md-6">
                    <div class="blog-item">
                        <div class="blog-img">
                            <?php the_post_thumbnail('grid-blog', array('class' => 'img-fluid')); ?>
                        </div>
                        <div class="blog-content">
                            <h2 class="blog-title"><?php the_title(); ?></h2>
                            <div class="blog-meta">
                                <p><i class="far fa-user"></i>
                                <?php
                                    /**
                                     *  Use of printf to render anchor html tag
                                     * 
                                     *  @link https://www.w3schools.com/php/phptryit.asp?filename=tryphp_func_string_printf
                                     */
                                    printf(
                                        '<a href="%1$s" rel="author">%2$s</a>',
                                        esc_url( get_author_posts_url(get_the_author_meta('ID'), get_the_author_meta('user_nicename') ) ),
                                        get_the_author()
                                    );
                                ?>
                                </p>
                                <p><i class="far fa-list-alt"></i><?php the_category(' '); ?></p>
                                <p><i class="far fa-calendar-alt"></i><?php  the_time( get_option('date_format') ); ?></p>
                                <p><i class="far fa-comments"></i><?php echo get_comments_number(); ?></p>
                            </div>
                            <div class="blog-text">
                                <p><?php the_excerpt(); ?></p>
                                <a class="btn custom-btn" href="<?php the_permalink(); ?>">Leer más</a>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- loop end -->
        <?php endwhile; ?>
    </div>

    <!-- Paginado -->
    <div class="row">
        <div class="col-12">
            <ul class="pagination justify-content-center">
            <?php
                echo paginate_links( 
                        array(
                            'prev_text'     => 'Anterior',
                            'next_text'     => 'Siguiente',
                        )
                    );
            ?>
            </ul> 
        </div>
    </div>
    <!-- Paginado end -->
<?php else: ?>
    <div class="row">
        <div class="container">
            <p><?php is_home() ? 'Aún no tienes posts creados' : 'Lo sentimos, no encontramos resultados pero puedes buscar nuevamente' ?></p>
            <?php get_search_form( ); ?>
        </div>
    </div>
<?php endif; ?>