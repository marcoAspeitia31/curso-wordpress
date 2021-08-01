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