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

    
    <?php if(have_posts(  )): ?>
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
                                    <p><i class="far fa-user"></i><?php the_author(); ?></p>
                                    <p><i class="far fa-list-alt"></i><?php the_category(' '); ?></p>
                                    <p><i class="far fa-calendar-alt"></i><?php  echo get_the_date( 'F j, Y', get_the_ID(  ) ); ?></p>
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
                <p>Lo sentimos, no encontramos resultados pero puedes buscar nuevamente</p>
                <?php get_search_form( ); ?>
            </div>
        </div>
    <?php endif; ?>
</div>
</section>


<?php get_footer( ); ?>