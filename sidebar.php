<aside class="sidebar">
    <?php
        if(!is_active_sidebar('single-sidebar')){
            return;
        }
        dynamic_sidebar( 'single-sidebar' );
    ?>
</aside>