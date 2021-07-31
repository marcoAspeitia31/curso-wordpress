<?php
/**
 * Template part for displaying the posts content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package curso-wordpress
 */
 ?>
<div class="single-content">
    <?php
        the_content();
        $args = array (
            'before'            => '<div class="d-flex justify-content-between">',
            'after'             => '</div>',
            'link_before'       => '<span class="page-link">',
            'link_after'        => '</span>',
            'next_or_number'    => 'next',
            'nextpagelink'      => __( 'Continuar leyendo &raquo', 'curso-wordpress' ),
            'previouspagelink'  => __( '&laquo Regresar ', 'curso-wordpress' ),
        );
        wp_link_pages( $args );
    ?>
</div>
<div class="single-tags">
    <?php the_tags(); ?>
</div>
<?php
/**
 * This button only will appear when an admin, or editor is logged in
 */
edit_post_link(
    sprintf(
        /* translators: %s: Name of current post. Only visible to screen readers. */
        esc_html__( 'Edit %s', 'curso-wordpress' ),
        '<span class="screen-reader-text">' . get_the_title() . '</span>'
    ),
    '',
    '',
    0,
    'btn custom-btn mb-4 w-100'
);

/**
 * This hook will allow us to navigate to the next and previous post
 */
the_post_navigation(
    array(
        'prev_text' => '<i class="fas fa-long-arrow-alt-left mr-3"></i><span class="post-title">%title</span>',
        'next_text' => '<span class="post-title">%title</span><i class="fas fa-long-arrow-alt-right ml-3"></i>',
    )
);
?>
<div class="single-bio">
    <div class="single-bio-img">
        <?php
            echo get_avatar( 
                get_the_author_meta( 'user_email' ), 
                75,
                'gravatar_default',
                get_the_author_meta( 'user_nicename' ), 
                ["class" => "img-fluid"]
            );
        ?>
    </div>
    <div class="single-bio-text">
        <?php
            the_time( get_option('date_format') );
            $author_id = get_the_author_meta( 'ID' );
        ?>
        <h3><?php echo get_the_author_meta( 'nicename', $author_id ); ?></h3>
        <p><?php echo get_the_author_meta( 'description', $author_id );?></p>
    </div>
</div>
<div class="single-related">
    <h2>Related Post</h2>
    <div class="owl-carousel related-slider owl-loaded owl-drag">
        <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-760px, 0px, 0px); transition: all 0.25s ease 0s; width: 3040px;"><div class="owl-item cloned" style="width: 380px;"><div class="post-item">
            <div class="post-img">
                <img src="<?php echo get_template_directory_uri();?>/assets/images/post-3.jpg">
            </div>
            <div class="post-text">
                <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                <div class="post-meta">
                    <p>By<a href="">Admin</a></p>
                    <p>In<a href="">Web Design</a></p>
                </div>
            </div>
        </div></div><div class="owl-item cloned" style="width: 380px;"><div class="post-item">
            <div class="post-img">
                <img src="<?php echo get_template_directory_uri();?>/assets/images/post-4.jpg">
            </div>
            <div class="post-text">
                <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                <div class="post-meta">
                    <p>By<a href="">Admin</a></p>
                    <p>In<a href="">Web Design</a></p>
                </div>
            </div>
        </div></div><div class="owl-item active" style="width: 380px;"><div class="post-item">
            <div class="post-img">
                <img src="<?php echo get_template_directory_uri();?>/assets/images/post-1.jpg">
            </div>
            <div class="post-text">
                <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                <div class="post-meta">
                    <p>By<a href="">Admin</a></p>
                    <p>In<a href="">Web Design</a></p>
                </div>
            </div>
        </div></div><div class="owl-item active" style="width: 380px;"><div class="post-item">
            <div class="post-img">
                <img src="<?php echo get_template_directory_uri();?>/assets/images/post-2.jpg">
            </div>
            <div class="post-text">
                <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                <div class="post-meta">
                    <p>By<a href="">Admin</a></p>
                    <p>In<a href="">Web Design</a></p>
                </div>
            </div>
        </div></div><div class="owl-item" style="width: 380px;"><div class="post-item">
            <div class="post-img">
                <img src="<?php echo get_template_directory_uri();?>/assets/images/post-3.jpg">
            </div>
            <div class="post-text">
                <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                <div class="post-meta">
                    <p>By<a href="">Admin</a></p>
                    <p>In<a href="">Web Design</a></p>
                </div>
            </div>
        </div></div><div class="owl-item" style="width: 380px;"><div class="post-item">
            <div class="post-img">
                <img src="<?php echo get_template_directory_uri();?>/assets/images/post-4.jpg">
            </div>
            <div class="post-text">
                <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                <div class="post-meta">
                    <p>By<a href="">Admin</a></p>
                    <p>In<a href="">Web Design</a></p>
                </div>
            </div>
        </div></div><div class="owl-item cloned" style="width: 380px;"><div class="post-item">
            <div class="post-img">
                <img src="<?php echo get_template_directory_uri();?>/assets/images/post-1.jpg">
            </div>
            <div class="post-text">
                <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                <div class="post-meta">
                    <p>By<a href="">Admin</a></p>
                    <p>In<a href="">Web Design</a></p>
                </div>
            </div>
        </div></div><div class="owl-item cloned" style="width: 380px;"><div class="post-item">
            <div class="post-img">
                <img src="<?php echo get_template_directory_uri();?>/assets/images/post-2.jpg">
            </div>
            <div class="post-text">
                <a href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                <div class="post-meta">
                    <p>By<a href="">Admin</a></p>
                    <p>In<a href="">Web Design</a></p>
                </div>
            </div>
        </div></div></div></div><div class="owl-nav"><div class="owl-prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div><div class="owl-next"><i class="fa fa-angle-right" aria-hidden="true"></i></div></div><div class="owl-dots disabled"></div></div>
</div>
<div class="single-comment">
    <?php
        if(comments_open() || get_comments_number()):
            comments_template();
        else:
            echo "<p class='text-center'>Comentarios deshabilitados</p>";
        endif;
    ?>
</div>

<div class="comment-form">
    <?php
    //Array
    $comments_args = array(
        //Cancel Reply Text
        'cancel_reply_link' => __( 'Cancel Reply', 'curso-wordpress' ),
        // Remove "Text or HTML to be displayed after the set of comment fields".
        'comment_notes_after' => '',
        //Submit Button Classes
        'class_submit' => 'mt-3 btn custom-btn',
    );
    comment_form( $comments_args );
    ?>
</div>
            