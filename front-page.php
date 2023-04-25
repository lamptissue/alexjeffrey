<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package alexjeffrey
 */

get_header();
?>

<main id="primary" class="site-main mb6" >
    <!-- hero image -->
    <section class="hero">
        <div class="home-hero" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/John-Wilding-Skeleton.jpg');">
        </div>
    </section>

    <!-- top text -->
    <div class="flex justify-center items-center w-100">
        <div class="tc top-text  home-top-text mv5-l mv3 ">
            <?php if( get_field('top_text') ): ?>
                <h1><?php the_field('top_text'); ?></h1>
            <?php endif; ?>
        </div>
    </div>

    <hr>

    <div class="container">
        <div class="home-info-box flex w-100 justify-center items-center flex-column flex-row-l">
            <div class="flex items-center justify-center img-shadow home-image w-50-l w-100">
                <?php if( get_field('image_1') ): ?>
                    <img src="<?php the_field('image_1'); ?>" />
                <?php endif; ?>
            </div>    

            <div class="flex items-center flex-column w-50-l w-100 ph4-l ph2 pb4-l home-items">
                    <div class="tc home-text">
                    <?php if( get_field('main_text') ): ?>
                        <h2><?php the_field('main_text'); ?></h2>
                    <?php endif; ?>
                </div>
                <div class="btn">
                <a href="/contact" class="button-link">Contact Us</a>
                    </div>
            </div>
        </div>
    </div>

    <hr>

    <!-- Big image -->
    <?php if( get_field('bottom_image') ): ?>
    <div class="flex hero-image items-center justify-center img-shadow">
        <img src="<?php the_field('bottom_image'); ?>" />
    </div>
    <hr/>
<?php endif; ?>


    <div class="container bottom-home">
        <div class="home-info-box flex w-100 flex flex-column flex-row-l justify-center items-center">
            <div class="flex ph4-l ph2 pb4-l items-center flex-column w-50-l w-100 order-2 order1-l home-items">
                <div class="tc home-text">
                    <?php if( get_field('bottom_text') ): ?>
                        <h2><?php the_field('bottom_text'); ?></h2>
                    <?php endif; ?>
                </div>
                <div class="btn btn-2">
                <a href="/case-studies" class="button-link">Learn more</a>
                </div>
            </div>

            <div class="flex items-center justify-center img-shadow home-image-1 w-50-l w-100 order-1 order-2-l">
                <?php if( get_field('image_2') ): ?>
                    <img src="<?php the_field('image_2'); ?>" />
                <?php endif; ?>
            </div>
        </div>
    </div>
</main><!-- #main -->

<?php
get_footer();
