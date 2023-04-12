<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package alexjeffrey
 */

?>

<footer id="colophon" class="site-footer">
    <div class="site-info ph4 pv2 white">
        <div class="footer-name">
            <span class="f6">&copy; <?php bloginfo('name'); ?>  <?php echo date("Y"); ?></span>
        </div>
        <div class="social">
		<?php
wp_nav_menu(
    array(
        'theme_location' => 'menu-2',
        'menu_id'        => 'footer-menu',
        'menu_class'     => 'footer-menu',
        'container'      => 'nav',
        'container_class'=> 'footer-nav',
    )
);
?>
</div>




    </div><!-- .site-info -->
</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
