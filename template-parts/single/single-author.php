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
        <h3>
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
        </h3>
        <p><?php echo get_the_author_meta( 'description', $author_id );?></p>
    </div>
</div>