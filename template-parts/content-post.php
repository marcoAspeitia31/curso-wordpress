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

<p class="single-category font-weight-bold mb-4">
    <?php _e( 'Categoría: ', 'curso-wordpress' ); the_category(', '); ?>
</p>
<div class="single-tags">
    <?php the_tags(); ?>
</div>

<?php

get_template_part( 'template-parts/single/single', 'navigation' );
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

get_template_part( 'template-parts/single/single', 'author' );
get_template_part( 'template-parts/single/single', 'related' );
get_template_part( 'template-parts/single/single', 'comment' );
