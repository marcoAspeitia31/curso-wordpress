<?php
/**
 * The searchform.php template.
 *
 * Used any time that get_search_form() is called.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @since Curso Wordpress 1.0.0
 */
?>
<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <label class="screen-reader-text" for="s">Buscar:</label>
    <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" class="form-control" placeholder="Palabra clave" required="">
    <input type="submit" id="searchsubmit" value="Buscar" class="btn">
</form>