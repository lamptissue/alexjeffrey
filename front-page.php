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

<main id="primary" class="site-main mb6">
    <!-- hero image -->
    <section class="hero">
        <div class="home-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/John-Wilding-Skeleton.jpg');">
        </div>
    </section>

    <!-- top text -->
    <div class="flex justify-center items-center w-100">
        <div class="tc top-text mv5 ">
            <?php if( get_field('top_text') ): ?>
                <h1><?php the_field('top_text'); ?></h1>
            <?php endif; ?>
        </div>
    </div>

    <hr>

    <div>
        <div class="container">
            <div class="test-area flex w-100 justify-center items-center">
                <div class="flex items-center justify-center img-shadow w-50">
                    <?php if( get_field('image_1') ): ?>
                    <div class="test-image br3"style="background-image: url('<?php the_field('image_1'); ?>');">
                    <?php endif; ?>
                    </div>
                </div>    
    
                <div class="flex items-center flex-column w-50 ph5 pb4">
                    <div class="tc test-height ">
                    <?php if( get_field('main_text') ): ?>
                    <h1><?php the_field('main_text'); ?></h1>
                    <?php endif; ?>
                    </div>
                    <div class="btn">
                        <a href="/about" class="button-link">Learn more</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <hr>




    <!-- Big image -->
    <div class="flex hero-image items-center justify-center img-shadow">
        <?php if( get_field('bottom_image') ): ?>
            <img src="<?php the_field('bottom_image'); ?>" />
        <?php endif; ?>
    </div>

    <hr/>


    <div>
        <div class="container">
                <div class="test-area flex w-100 justify-center items-center">
    
                    <div class="flex ph5 pb4 items-center flex-column w-50">
                        <div class="tc test-height">
                        <?php if( get_field('bottom_text') ): ?>
                        <h1><?php the_field('bottom_text'); ?></h1>
                        <?php endif; ?>
                        </div>
                        <div class="btn btn-2">
                            <a href="/contact" class="button-link">Contact Us</a>
                        </div>
                    </div>

                    <div class="flex items-center justify-center img-shadow w-50">
                        <?php if( get_field('image_2') ): ?>
                        <div class="test-image br3"style="background-image: url('<?php the_field('image_2'); ?>');">
                        <?php endif; ?>
                        </div>
                    </div>    
                </div>
        </div>
    </div>
</main><!-- #main -->

<?php
get_footer();
