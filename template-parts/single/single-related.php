<?php $args = array(
    'post_type' => 'post',
    'posts_per_page' => 4,
    'post__not_in' => array(get_the_ID(  )),
    'category__in' => wp_get_post_categories( get_the_ID() ),
    'orderby' => 'date'
);

$related_posts = new WP_Query($args);

if ( $related_posts->have_posts() ):
?>

<div class="single-related">
    <h2>Related Post</h2>
    <div class="<?php echo count($related_posts->posts) == 1 ? '' : 'owl-carousel';?> related-slider">
    <?php while($related_posts->have_posts(  )): $related_posts->the_post(  );?>
        <div class="post-item">
            <div class="post-img">
                <?php the_post_thumbnail( 'thumbnail', array('class' => 'img-fluid') ); ?>
            </div>
            <div class="post-text">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                <div class="post-meta">
                    <p>By
                    <?php
                        printf(
                            '<a href="%1$s" rel="author">%2$s</a>',
                            esc_url( get_author_posts_url(get_the_author_meta('ID'), get_the_author_meta('user_nicename') ) ),
                            get_the_author()
                        );
                    ?>
                    </p>
                    <p>In <?php the_category(', ');?></p>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
    </div>
</div>

<?php
endif;