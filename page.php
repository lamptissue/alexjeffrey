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

<main id="primary" class="site-main mb6">

    <div class="flex flex-column flex-row-l justify-center items-center w-100 mb5">

        <!-- Hero Image -->
        <div class="w-100 w-60-l">
            <?php if (get_field('hero_image')): ?>
                <div class="page-hero"
                     style="background-image: url('<?php the_field('hero_image'); ?>'); background-position: <?php the_field('background_position'); ?>;"></div>
            <?php endif; ?>
        </div>

        <!-- Text -->
        <div class="top-text w-40-l w-100 flex pt7-l justify-center items-center flex-column">
            <?php if (get_field('title')): ?>
                <h1 class="tc f1-l f2-m f3"><?php the_field('title') ?></h1>
            <?php endif; ?>
            <?php if (get_field('subtitle')): ?>
                <p class="tc i"><?php the_field('subtitle') ?></p>
            <?php endif; ?>
            <?php if (get_field('top_text')): ?>
                <?php the_field('top_text') ?>
            <?php endif; ?>
        </div>
    </div>

    <?php
    while (have_posts()) :
        the_post();
        get_template_part('template-parts/content', 'page');

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
