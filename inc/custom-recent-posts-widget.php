<?php
/**
 * This file was generating using Foo_Widget anatomy
 * 
 * @link https://developer.wordpress.org/themes/functionality/widgets/
 * 
 * Adds Custom_Recent_Posts_Widget widget.
 */
class Custom_Recent_Posts_Widget extends WP_Widget {
 
    /**
     * Register widget with WordPress.
     */
    public function __construct() {
        parent::__construct(
            'custom_recent_posts_widget', // Base ID
            'Recent Posts With Thumbnails', // Name
            array( 'description' => __( 'Your site\' Recent Posts With Thumbnails', 'curso-wordpress' ), ) // Args
        );
    }
 
    /**
     * Front-end display of widget.
     *
     * @see WP_Widget::widget()
     *
     * @param array $args     Widget arguments.
     * @param array $instance Saved values from database.
     */
    public function widget( $args, $instance ) {
        extract( $args );
        $title = apply_filters( 'widget_title', $instance['title'] );
        $number_of_posts = apply_filters( 'widget_number_of_posts', $instance['number_of_posts'] );
 
        echo $before_widget;
        if ( ! empty( $title ) ) {
            echo $before_title . $title . $after_title;
        }
        if ( ! empty($number_of_posts) ){
            $number_of_posts = $instance['number_of_posts'];
        }
        $args_query = array(
            'post_type' => 'post',
            'posts_per_page' => $number_of_posts,
        );
        $loop_recent_posts = new WP_Query($args_query);
        echo '<div class="recent-post">';
        while($loop_recent_posts->have_posts()): $loop_recent_posts->the_post();
    ?>
            <div class="post-item">
                <div class="post-img">
                    <?php the_post_thumbnail( 'thumbnail', ["class" => "img-fluid"] ); ?>
                </div>
                <div class="post-text">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    <div class="post-meta">
                        <p>By
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
                        <p>In
                        <?php
                            /**
                             * Code reference by Codex Wordpress Developer
                             * 
                             * @link https://developer.wordpress.org/reference/functions/get_the_category/
                             */
                            $categories = get_the_category();
                            $separator = ' ';
                            $output = '';
                            if ( ! empty( $categories ) ) {
                                foreach( $categories as $category ) {
                                    $output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'curso-wordpress' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a>' . $separator;
                                }
                                echo trim( $output, $separator );
                            }
                        ?>
                        </p>
                    </div>
                </div>
            </div>
    <?php
        endwhile;
        wp_reset_postdata();
        echo '</div>';

        echo $after_widget;
    }
 
    /**
     * Back-end widget form.
     *
     * @see WP_Widget::form()
     *
     * @param array $instance Previously saved values from database.
     */
    public function form( $instance ) {
        if ( isset( $instance[ 'title' ] ) ) {
            $title = $instance[ 'title' ];
        }
        else {
            $title = __( 'New title', 'curso-wordpress' );
        }
        if ( isset( $instance[ 'number_of_posts' ] ) ) {
            $number_of_posts = $instance[ 'number_of_posts' ];
        }
        else {
            $number_of_posts = __( 'Number of posts to show', 'curso-wordpress' );
        }
        ?>
        <p>
            <label for="<?php echo $this->get_field_name( 'title' ); ?>"><?php _e( 'Title:', 'curso-wordpress' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_name( 'number_of_posts' ); ?>"><?php _e( 'Number of posts to show:', 'curso-wordpress' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'number_of_posts' ); ?>" name="<?php echo $this->get_field_name( 'number_of_posts' ); ?>" type="number" value="<?php echo esc_attr( $number_of_posts ); ?>" />
        </p>
    <?php
    }
 
    /**
     * Sanitize widget form values as they are saved.
     *
     * @see WP_Widget::update()
     *
     * @param array $new_instance Values just sent to be saved.
     * @param array $old_instance Previously saved values from database.
     *
     * @return array Updated safe values to be saved.
     */
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = ( !empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        $instance['number_of_posts'] = ( !empty( $new_instance['number_of_posts'] ) ) ? strip_tags( $new_instance['number_of_posts'] ) : '';
 
        return $instance;
    }
 
} // class Custom_Recent_Posts_Widget

// register Custom_Recent_Posts_Widget widget
function register_Custom_Recent_Posts_Widget() {
    register_widget( 'Custom_Recent_Posts_Widget' );
}
add_action( 'widgets_init', 'register_Custom_Recent_Posts_Widget' );
?>