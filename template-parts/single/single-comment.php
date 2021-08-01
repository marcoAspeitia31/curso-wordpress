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