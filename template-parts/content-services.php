
<div class="test-container main-area flex justify-center align-center w-100">

<div class="top-text w-40 flex justify-center align-center flex-column">
        <?php if( get_field('top_text') ): ?>
            <h1 class="tc"><?php the_title() ?></h1>
        <p class="tl"><?php the_field('top_text'); ?></p>
        <?php endif; ?>
    </div>        


<div class="w-60 img-shadow">
        <?php if( get_field('hero_image') ): ?>
        <img src="<?php the_field('hero_image'); ?>" />
        <?php endif; ?>
        </div>

        </div>



<!-- <div class="container">
    <div class="test-container flex justify-center align-center w-100">
    <div class="hero-image img-shadow w-50">
    <?php if( get_field('hero_image') ): ?>
        <img src="<?php the_field('hero_image'); ?>" />
    <?php endif; ?>
    </div>


    <div class="tc top-text f4 mv4 w-50">
        <?php if( get_field('top_text') ): ?>
        <p><?php the_field('top_text'); ?></p>
        <?php endif; ?>
    </div>

        </div>
</div> -->





<div class="mv6"></div>
<!-- <hr> -->

<?php
$args = array(
    'post_type' => 'post',
    'category_name' => 'services',
    'posts_per_page' => 20,
);
$services_query = new WP_Query($args);

if ($services_query->have_posts()) {
    $post_index = 0;
    while ($services_query->have_posts()) {
        $services_query->the_post();
        $post_class = ($post_index % 2 === 0) ? 'odd-post' : 'even-post';
        ?>
        
    <div class="<?php echo $post_class; ?>">
        <div class="content-container w-80 flex justify-center align-center">
                <div class="service-image img-shadow w-50 flex justify-start align-center">
                    <?php the_post_thumbnail(); ?>
                </div>
                <div class="service-text tc w-50 pa5">
                    <h2><?php the_title(); ?></h2>
                <?php the_excerpt(); ?>
                </div>
        </div>
            
        <?php if ($post_index < $services_query->post_count - 1) { ?>
            <hr>
            <?php } ?>
    </div>
        <?php
        $post_index++;
    }
} else {
    ?>
    <p><?php _e('No Posts To Display.'); ?></p>
    <?php
}
wp_reset_postdata();
?>