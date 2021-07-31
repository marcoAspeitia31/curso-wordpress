<?php
/**
 * Template part for displaying posts
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
the_post_navigation(
    array(
        'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Anterior nota', 'curso-wordpress' ),
        'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Siguiente nota', 'curso-wordpress' ),
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
        <?php $author_id = get_the_author_meta( 'ID' ); ?>
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
    <h2>3 Comments</h2>
    <ul class="comment-list">
        <li class="comment-item">
            <div class="comment-body">
                <div class="comment-img">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/user.jpg">
                </div>
                <div class="comment-text">
                    <h3><a href="">Josh Dunn</a></h3>
                    <span>01 Jan 2045 at 12:00pm</span>
                    <p>
                        Lorem ipsum dolor sit amet elit. Integer lorem augue purus mollis sapien, non eros leo in nunc. Donec a nulla vel turpis tempor ac vel justo. In hac platea dictumst. 
                    </p>
                    <a class="btn" href="">Reply</a>
                </div>
            </div>
        </li>
        <li class="comment-item">
            <div class="comment-body">
                <div class="comment-img">
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/user.jpg">
                </div>
                <div class="comment-text">
                    <h3><a href="">Josh Dunn</a></h3>
                    <p><span>01 Jan 2045 at 12:00pm</span></p>
                    <p>
                        Lorem ipsum dolor sit amet elit. Integer lorem augue purus mollis sapien, non eros leo in nunc. Donec a nulla vel turpis tempor ac vel justo. In hac platea dictumst. 
                    </p>
                    <a class="btn" href="">Reply</a>
                </div>
            </div>
            <ul class="comment-child">
                <li class="comment-item">
                    <div class="comment-body">
                        <div class="comment-img">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/user.jpg">
                        </div>
                        <div class="comment-text">
                            <h3><a href="">Josh Dunn</a></h3>
                            <p><span>01 Jan 2045 at 12:00pm</span></p>
                            <p>
                                Lorem ipsum dolor sit amet elit. Integer lorem augue purus mollis sapien, non eros leo in nunc. Donec a nulla vel turpis tempor ac vel justo. In hac platea dictumst. 
                            </p>
                            <a class="btn" href="">Reply</a>
                        </div>
                    </div>
                </li>
            </ul>
        </li>
    </ul>
</div>
<div class="comment-form">
    <h2>Leave a comment</h2>
    <form>
        <div class="form-group">
            <label for="name">Name *</label>
            <input type="text" class="form-control" id="name">
        </div>
        <div class="form-group">
            <label for="email">Email *</label>
            <input type="email" class="form-control" id="email">
        </div>
        <div class="form-group">
            <label for="website">Website</label>
            <input type="url" class="form-control" id="website">
        </div>

        <div class="form-group">
            <label for="message">Message *</label>
            <textarea id="message" cols="30" rows="5" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <input type="submit" value="Post Comment" class="btn custom-btn">
        </div>
    </form>
</div>
            