<h2><?php echo get_comments_number(); ?> Comentarios</h2>
<ul class="comment-list">
    <?php
        $comments = get_comments(array(
            'post_id' => $post->ID,
            'status' => 'approve'
        ));
        wp_list_comments(array(
            'per_page' => 3,
            'reverse_top_level' => true
        ), $comments);
    ?>
</ul>
<ul class="pagination justify-content-center">
    <?php paginate_comments_links( array(
        'prev_text' => '&laquo;',
        'next_text' => '&raquo;'
    ) );?>
</ul>
