<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package alexjeffrey
 */

get_header();
?>

	<main id="primary" class="site-main mt5 mb6">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content','page' );

		endwhile; // End of the loop.
		?>

<?php 
if (is_page('contact')) { 
     get_template_part("template-parts/content-contact");
}
?>

<?php 
if (is_page('about')) { 
	get_template_part("template-parts/content-about");
}
?>

<?php 
if (is_page('servicing')) { 
     get_template_part("template-parts/content-services");
}
?>

<?php 
if (is_page('case-studies')) { 
     get_template_part("template-parts/content-casestudy");
}
?>
	</main><!-- #main -->

<?php

get_footer();
